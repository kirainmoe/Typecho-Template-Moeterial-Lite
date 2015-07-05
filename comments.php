<?php
define('__TYPECHO_GRAVATAR_PREFIX__','https://secure.gravatar.com/avatar/');  //防止因为Gravatar被墙导致评论头像无法显示
?>
<div class="card" style="padding:20px;padding-top:0px;">
	<?php $this->comments()->to($comments); ?>
	<?php if ($comments->have()): ?>
		<h3 class="comments-title green"><?php $this->commentsNum(_t('有沙发呢w'), _t('还有板凳w'), _t('已有 %d 条评论辣')); ?></h3>
		<br/>
		<?php $comments->listComments(array(
			'replyWord'=>'<button type="button" style="margin:0px auto 0px auto;text-align:right;" class="btn-floating comment-btn orange"><i class="mdi-content-reply prefix"></i></button>',
			)); ?>

			<?php $comments->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination','currentClass'=>'active')); ?>

		<?php endif; ?>
		<?php if($this->allow('comment')): ?>
			<div id="<?php $this->respondId(); ?>" class="respond">
				<div class="cancel-comment-reply">
					<?php $comments->cancelReply(); ?>
				</div>
				<br/>
				<h5 id="response">评论</h5><br/>
				<form method="post" action="<?php $this->commentUrl(); ?>" id="comment-form" role="form" class="form-horizontal">
					<?php if($this->user->hasLogin()): ?>
						<p>您已登录，亲爱的<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
					<?php else: ?>
						<div class="row">
							<div class="input-field col s6 m12">
								<i class="mdi-action-account-circle prefix"></i>
								<input type="text" name="author" id="author"  class="form-control text" value="<?php $this->remember('author'); ?>" required />
								<label for="author">昵称</label>
							</div>
							<div class="input-field col s6 m12">
								<i class="mdi-communication-email prefix"></i>
								<input type="email" name="mail" id="mail" class="form-control text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
								<label for="mail">邮箱</label>
							</div>
							<div class="input-field col s12">
								<i class="mdi-action-language prefix"></i>
								<input type="url" name="url" id="url"  class="form-control text" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
								<label for="url">网址/首页</label>
							</div>
						</div>
					<?php endif; ?>
					<div class="input-field">
						<textarea rows="12" cols="50" name="text" id="textarea" placeholder="MarkDown 编辑器由于 JS 冲突暂时有些功能无法使用，抱歉。" class="materialize-textarea" required ><?php $this->remember('text'); ?></textarea>
						<button id="postcomment" type="submit" class="btn blue waves-effect">提交评论 <i class="mdi-content-send left"></i></button>
					</div>
				</form>
			</div>
		<?php else: ?>
			<h3 class="comments-title error">果咩，po主已经关闭了评论哦。</h3>
		<?php endif; ?> 
		<br/><br/>
	</div>