<?php
$this->need('header.php');
?>
<div class="row tables">
	<div class="col s12 m9">
		<div class="card waves-effect art-body" style="color:#000;width:100%;">
			<div class="card-content white-text">
				<span class="card-title"><a href="<?php $this->permalink() ?>"><?php $this->title(); ?></a></span>
				<div class="card-content" style="color:#000;font-size:18px;">
					<?php $this->content(); ?>
				</div>
			</div>
			<div class="card-action my-tags">
				<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
				<a><?php $this->date('F j, Y'); ?></a>
				<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('沙发可用！', '还有板凳!', '%d 条评论'); ?></a>
				<?php $this->category(', '); ?>
			</div>
		</div>
		<?php $this->need('comments.php');?>
	</div>
	<?php $this->need('sidebar.php');?>
	<?php $this->need('footer.php');?>