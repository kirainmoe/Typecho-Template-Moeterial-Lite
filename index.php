<?php
/**
* Typecho 1.0 下的一套 Material Design 风格的模版(Lite Version)。
* @package Moeterial(Lite)
* @author 吟梦
* @version 1.0
* @link https://www.imim.pw
*/
$this->need('header.php');
?>
<div class="row tables">
	<div class="col s12 m9">
		<?php while($this->next()): ?>
			<div class="card waves-effect art-body" style="color:#000;width:100%;">
				<div class="card-content white-text">
					<span class="card-title"><a href="<?php $this->permalink() ?>"><?php $this->title();?></a></span>
					<div class="card-content" style="color:#000;font-size:18px;">
						<?php $this->content('<br/><span style="font-size:14px;text-align:center;margin:0 auto;">- 查看全文吗？ _(:3 」∠)_ -</span>'); ?>
					</div>
				</div>
				<div class="card-action my-tags">
					<a href="<?php $this->permalink() ?>">查看全文>></a>
					<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
					<a><?php $this->date('F j, Y'); ?></a>
					<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('沙发可用！', '还有板凳!', '%d 条评论'); ?></a>
					<?php $this->category(', '); ?>
				</div>
			</div>
		<?php endwhile;?>
		<?php $this->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination pagination-success','currentClass'=>'active')); ?>
	</div>
	<?php $this->need('sidebar.php');?>
	<?php $this->need('footer.php');?>