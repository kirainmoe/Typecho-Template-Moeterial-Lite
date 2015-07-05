<?php
$this->need('header.php');
?>
<div class="row tables">
	<div class="col s12 m9">
			<?php $this->archiveTitle(array(
				'category'  =>  _t('这是归类在 <span class="label label-success">%s</span> 下的文章'),
				'search'    =>  _t('包含了你要的关键字 <span class="label label-success">%s</span> 的文章'),
				'tag'       =>  _t('你要找的标签 <span class="label label-success">%s</span> 下的文章'),
				'author'    =>  _t('作者<span class="label label-success">%s</span> 发布的文章')
				), '<h3 class="comments-title">', '</h3>'); ?>
			<?php while($this->next()): ?>
				<div class="card" style="color:#000;">
					<div class="card-content white-text">
						<span class="card-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></span>
						<div class="card-content" style="color:#000;font-size:18px;">
							<?php $this->content('<span style="font-size:14px;text-align:center;margin:0 auto;">- 查看全文吗？ _(:3 」∠)_ -</span>'); ?>
						</div>
					</div>
					<div class="card-action">
						<a href="<?php $this->permalink() ?>">查看全文>></a>
						<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
						<a><?php $this->date('F j, Y'); ?></a>
						<?php $this->category(','); ?>
						<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('沙发可用！', '还有板凳!', '%d 条评论'); ?></a>
					</div>
				</div>
			<?php endwhile;?>
			<?php $this->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination pagination-success','currentClass'=>'active')); ?>
		</div>
	<?php $this->need('sidebar.php');?>
	<?php $this->need('footer.php');?>