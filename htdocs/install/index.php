<?php

/*
-:                                                                                                  
 -y/                                                                                                
   +d+`                                                                                             
    `omo`                                                                                           
      `sNy-                                                                                         
        .yMd/                                                                                       
          .yMNo.                                                                                    
            .sMMh:                                                                                  
              .sMMNs.                                                                               
                .sMMMd+`                                                                            
                  .sNMMMy:                                                                          
                    `oNMMMNy:                                                                       
                      `oNMMMMNs:                                                                    
                        `oNMMMMMNy:`                                                                
                          `oNMMMMMMMh+.                                                             
                            `sNMMMMMMMMNho:`                                                        
                              .sMMMMMMMMMMMMNhso/-.                                                 
                                .yMMMMMMMMMMMMMMMMMMNdyo/-                         +hNMMNho:        
                                  -hMMMMMMMMMMMMMMMMMMMMMMMmy+.                  .mMMMMs  oMNh+.    
                                    -dMMMMMMMMMMMMMMMMMMMMMMMMMNy/`              yMMMMMh  oNMMMMms- 
                                      /NMMMMMMMMMMMMMMMMMMMMMMMMMMMh+`           sMMMMMMMMMMMMMMMMMo
                                       -NMMMNomMMMMMMMMMMMMMMMMMMMMMMMh+.        sMMMMMMMMMMMMMMMMMd
                                        -NMh-mMMMMMMMMMMMMMMMMMMMMMMMMMMMmy+:-:+dMMMMMMMhso+//::--` 
                                         :o-NMMMMMMMMMMMMMMMNNMMMMMMMMMMMMMMMMMMMMMMMMy`            
                                          /NMMMMMMMMMMMMMMMs+MMMMMMMMMMMMMMMMMMMMMMMd:              
                                        `yMMMMMMMMMMMMMMmo+hMMMMMMMMmhMMMMMMMMMMmyo-                
                                       +NMMMMMMMMMMMMms+oos//osyhdo-sMMMMdys+:.                     
                                     /mMMMMMMMMMMdsooyNMNy-         .omMMd/`                        
                                 `:sNMMMMNdhso:.  .+ydmMMdhyyyyys+     .omMN:                       
                              +mMMMMds/-`               `.-:+Mm+hN`      `mMs                       
                             oMMMd+`                        +do``.      `ss:                        
                            oMMd:                          ``                                       
                           oMMo                                                                     
                          oMN.                                                                  
                         +MMMN                                                                  
                         odNMNmds.                                                                  
*/

define('DS', DIRECTORY_SEPARATOR);
define('ENV', getenv('APP_ENV'));
define('VERSION', '0.0.1');

define('PATH', dirname(dirname(__FILE__)) . DS);
define('APP', PATH . 'install' . DS);
define('SYS', PATH . 'system' . DS);
define('EXT', '.php');

require SYS . 'start' . EXT;
