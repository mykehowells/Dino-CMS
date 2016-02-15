<?php namespace System;

/**
 * Nano
 *
 * Just another php framework
 *
 * @package		nano
 * @link		http://madebykieron.co.uk
 * @copyright	http://unlicense.org/
 */

use ErrorException;

class Error {

	/**
	 * Exception handler
	 *
	 * This will log the exception and output the exception properties
	 * formatted as html or a 500 response depending on your application config
	 *
	 * @param object The uncaught exception
	 */
	public static function exception($e) {
		static::log($e);

		if(Config::error('report')) {
			// clear output buffer
			while(ob_get_level() > 1) ob_end_clean();

			if(Request::cli()) {
				Cli::write(PHP_EOL . 'Uncaught Exception', 'light_red');
				Cli::write($e->getMessage() . PHP_EOL);

				Cli::write('Origin', 'light_red');
				Cli::write(substr($e->getFile(), strlen(PATH)) . ' on line ' . $e->getLine() . PHP_EOL);

				Cli::write('Trace', 'light_red');
				Cli::write($e->getTraceAsString() . PHP_EOL);
			}
			else {

				$html = file_get_contents( PATH . '../assets/error_document.tpl.html' );

/*
				echo '<html>
					<head>
						<title>Uncaught Exception</title>
						<style>
							body{font-family:"Open Sans",arial,sans-serif;background:#FFF;color:#333;margin:2em}
							code{background:#D1E751;border-radius:4px;padding:2px 6px}
						</style>
					</head>
					<body>
						<h1>Uncaught Exception</h1>
						<p><code>' . $e->getMessage() . '</code></p>
						<h3>Origin</h3>
						<p><code>' . substr($e->getFile(), strlen(PATH)) . ' on line ' . $e->getLine() . '</code></p>
						<h3>Trace</h3>
						<pre>' . $e->getTraceAsString() . '</pre>
					</body>
					</html>';
*/
				
				
				$lines = explode( "\n", htmlentities( file_get_contents( $e->getFile() ) ) );
				
				$line = $e->getLine();
				$file = $e->getFile();
				
				$start_line = ( $line - 5 <= 0 ) ? 0 : $line - 5;
				
				$file_contents = array_slice( $lines, $start_line , 1 );
				
				$array = [
					'debug.message' => $e->getMessage(),
					'debug.location' => "<strong>{$file}</strong> on line <strong>{$line}</strong>",
					'debug.backtrace' => $e->getTraceAsString(),
					'copyright.year' => date( 'Y' )
				];
				
				foreach( $array as $find => $replace )	
					$html = str_replace( '{{' . $find . '}}', $replace, $html );

				echo $html;
				
			}
		}
		else {
			// issue a 500 response
			Response::error(500, array('exception' => $e))->send();
		}

		exit(1);
	}

	/**
	 * Error handler
	 *
	 * This will catch the php native error and treat it as a exception
	 * which will provide a full back trace on all errors
	 *
	 * @param int
	 * @param string
	 * @param string
	 * @param int
	 * @param array
	 */
	public static function native($code, $message, $file, $line, $context) {
		if($code & error_reporting()) {
			static::exception(new ErrorException($message, $code, 0, $file, $line));
		}
	}

	/**
	 * Shutdown handler
	 *
	 * This will catch errors that are generated at the
	 * shutdown level of execution
	 */
	public static function shutdown() {
		if($error = error_get_last()) {
			extract($error);

			static::exception(new ErrorException($message, $type, 0, $file, $line));
		}
	}

	/**
	 * Exception logger
	 *
	 * Log the exception depending on the application config
	 *
	 * @param object The exception
	 */
	public static function log($e) {
		if(is_callable($logger = Config::error('log'))) {
			call_user_func($logger, $e);
		}
	}

}
