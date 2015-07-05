<div class="col s12 m3">
	<div class="collection">
		<a class="collection-item blue white-text">分类</a>
		<?php $this->widget('Widget_Metas_Category_List')->to($pages); ?>
		<?php while($pages->next()): ?>
			<a class="collection-item" href="<?php $pages->permalink(); ?>" title="<?php $pages->name(); ?>"><?php $pages->name(); ?></a>
		<?php endwhile;?>
	</div>
	<div class="collection">
		<a class="collection-item pink white-text">归档</a>
		<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')->parse('<a class="collection-item" class="filing" href="{permalink}">{date}</a>'); ?>
	</div>
	<div class="collection">
		<a class="collection-item green white-text">最近文章</a>
		<?php $this->widget('Widget_Contents_Post_Recent')->parse('<a class="collection-item" href="{permalink}">{title}</a>'); ?>
	</div>
	<div class="collection">
		<a class="collection-item red white-text">其他</a>
		<?php if($this->user->hasLogin()): ?>
			<a class="collection-item"  href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
			<a class="collection-item"  href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
		<?php else: ?>
			<a class="collection-item" href="<?php $this->options->loginurl();?>">登录</a>
		<?php endif; ?>
		<a class="collection-item" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a>
		<a class="collection-item" href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a>
	</div>
</div>