<!DOCTYPE HTML PUBLIC>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="<?php $this->options->themeUrl('css/materialize.min.css');?>"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<script type="text/javascript" src="<?php $this->options->themeurl('js/jquery.min.js');?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/materialize.min.js');?>"></script>
	<title><?php $this->archiveTitle(array(
		'category'  =>  _t('分类 %s 下的文章'),
		'search'    =>  _t('包含关键字 %s 的文章'),
		'tag'       =>  _t('标签 %s 下的文章'),
		'author'    =>  _t('%s 发布的文章')
		), '', ' - '); ?><?php $this->options->title(); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('style.css');?>">
		<?php $this->header();?>
	</head>
</head>
<body>
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper" style="background-color:#80c3ec;">
				<a href="<?php $this->options->siteurl();?>" class="brand-logo center"><?php $this->options->title();?></a>
				<ul class="left hide-on-med-and-down">
					<li><a class="waves-effect" href="<?php $this->options->siteurl();?>">首页</a></li>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
						<li <?php if($this->is('page',$pages->slug)): ?> <?php endif; ?> >
							<a class="waves-effect" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
						</li>
					<?php endwhile;?>
					<?php if($this->user->haslogin()) echo '<li><a class="waves-effect" href="'.$this->options->adminurl.'">进入后台</a></li>';?>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li>
						<form id="search" method="post" action="./" role="search">
							<div class="input-field">
								<input id="search" type="search" name="s" required>
								<label for="search"><i class="mdi-action-search"></i></label>
								<i class="mdi-navigation-close"></i>
							</div>
						</form>
					</li>				
				</ul>
			</div>
		</nav>
	</div>