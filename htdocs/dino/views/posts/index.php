<?php echo $header; ?>
     
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1><?php echo __('posts.posts'); ?></h1>
                </div>
                <div class="page-toolbar">
	                <?php echo Html::link('admin/posts/add', '<i class="fa fa-plus"></i> ' . __('posts.create_post'), array('class' => 'btn btn-sm green')); ?>
                </div>
            </div>
        </div>
        <div class="page-content" style="min-height: 525px;">
            <div class="container">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <?php echo Html::link( 'admin/', 'Admin' ); ?></a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span><?php echo __('posts.posts'); ?></span>
                    </li>
                </ul>
                <div class="page-content-inner">
	                <?php if($posts->count): ?>
	                    <div class="list-simple">
	                        <ul>
		                        <?php foreach($posts->results as $article): ?>
									<li>
										
										<div class="list-item-content">
											<a href="<?php echo Uri::to('admin/posts/edit/' . $article->id); ?>"><strong><?php echo $article->title; ?></strong></a>
											<time><?php echo Date::format($article->created); ?></time>
											<p><?php echo strip_tags($article->description); ?></p>
										</div>
										<div class="list-datetime pull-right">
											<em class="status <?php echo $article->status; ?>" title="<?php echo __('global.' . $article->status); ?>">
												<?php echo __('global.' . $article->status); ?>
											</em>
											<?php echo Html::link('admin/posts/edit/' . $article->id, '<i class="fa fa-plus"></i> ' . __('posts.edit_post'), array('class' => 'btn btn-sm green')); ?>
											
										</div>
										
									</li>
								<?php endforeach; ?>
	                        </ul>
	                    </div>
						<aside class="paging"><?php echo $posts->links(); ?></aside>
		            <?php else: ?>
				
						<p class="empty posts">
							<span class="icon"></span>
							<?php echo __('posts.noposts_desc'); ?>
						</p>
				
					<?php endif; ?>
<!--
	                <?php if($posts->count): ?>
	                	<div class="mt-list-container list-default">
							<ul>
								<?php foreach($posts->results as $article): ?>
								<li>
									<a href="<?php echo Uri::to('admin/posts/edit/' . $article->id); ?>">
										<strong><?php echo $article->title; ?></strong>
										<span>
											<time><?php echo Date::format($article->created); ?></time>
						
											<em class="status <?php echo $article->status; ?>" title="<?php echo __('global.' . $article->status); ?>">
												<?php echo __('global.' . $article->status); ?>
											</em>
										</span>
						
										<p><?php echo strip_tags($article->description); ?></p>
									</a>
								</li>
								<?php endforeach; ?>
							</ul>
	                	</div>
						<aside class="paging"><?php echo $posts->links(); ?></aside>
				
					<?php else: ?>
				
						<p class="empty posts">
							<span class="icon"></span>
							<?php echo __('posts.noposts_desc'); ?><br>
							<?php echo Html::link('admin/posts/add', __('posts.create_post'), array('class' => 'btn')); ?>
						</p>
				
					<?php endif; ?>
-->
                </div>
            </div>
        </div>
    </div>
</div>


<!--


<hgroup class="wrap">
	<h1><?php echo __('posts.posts'); ?></h1>

	<?php if($posts->count): ?>
	<nav>
		<?php echo Html::link('admin/posts/add', __('posts.create_post'), array('class' => 'btn')); ?>
	</nav>
	<?php endif; ?>
</hgroup>

<section class="wrap">
	<?php echo $messages; ?>

	<nav class="sidebar">
		<nav class="statuses">
			<?php echo Html::link('admin/posts', '<span class="icon"></span> ' . __('global.all'), array(
				'class' => isset($category) ? '' : 'active'
			)); ?>
			<?php foreach(array('published', 'draft', 'archived') as $type): ?>
			<?php echo Html::link('admin/posts/status/' . $type, '<span class="icon"></span> ' . __('global.' . $type), array(
				'class' => ($status == $type) ? 'active' : ''
			)); ?>
			<?php endforeach; ?>
		</nav>

	    <?php foreach($categories as $cat): ?>
		<?php echo Html::link('admin/posts/category/' . $cat->slug, $cat->title, array(
			'class' => (isset($category) and $category->id == $cat->id) ? 'active' : ''
		)); ?>
	    <?php endforeach; ?>
	</nav>

	<?php if($posts->count): ?>
		<ul class="main list">
			<?php foreach($posts->results as $article): ?>
			<li>
				<a href="<?php echo Uri::to('admin/posts/edit/' . $article->id); ?>">
					<strong><?php echo $article->title; ?></strong>
					<span>
						<time><?php echo Date::format($article->created); ?></time>
	
						<em class="status <?php echo $article->status; ?>" title="<?php echo __('global.' . $article->status); ?>">
							<?php echo __('global.' . $article->status); ?>
						</em>
					</span>
	
					<p><?php echo strip_tags($article->description); ?></p>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>

		<aside class="paging"><?php echo $posts->links(); ?></aside>

	<?php else: ?>

		<p class="empty posts">
			<span class="icon"></span>
			<?php echo __('posts.noposts_desc'); ?><br>
			<?php echo Html::link('admin/posts/add', __('posts.create_post'), array('class' => 'btn')); ?>
		</p>

	<?php endif; ?>
</section>
-->
<?php echo $footer; ?>
