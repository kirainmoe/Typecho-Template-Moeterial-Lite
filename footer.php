</div>
<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Hitokoto</h5>
				<a class="white-text"><script type="text/javascript" src="https://www.imim.pw/api/hitokoto.php?type=js"></script><script>hitokoto()</script></a>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Friend Link</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="#"><?php $this->options->title();?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php $this->footer();?>
	<div class="footer-copyright">
		<div class="container">
			&copy;<?php echo date('Y '); $this->options->title();?> Powered by <a href="http://typecho.org" target="_blank">Typecho)))</a> Theme by <a href="https://www.imim.pw" id="theme-copy" target="_blank">吟梦</a>
			<!--请尊重原作者的艰辛付出，不要去除版权，感谢。-->
		</div>
	</div>
</footer>
<a class="btn-floating btn-large waves-effect waves-light green" href="#top" id="totop" style="position:fixed;bottom:10%;z-index:99;right:5%;"><i class="mdi-hardware-keyboard-arrow-up"></i></a>
<script type="text/javascript">
	$(document).ready(function() {
		$("#to-top").hide();
//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
$(function() {
	$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			$("#totop").fadeIn(200);
		} else {
			$("#totop").fadeOut(200);
		}
	});
//当点击跳转链接后，回到页面顶部位置
$("#totop").click(function() {
	$('body,html').animate({
		scrollTop: 0
	},
	1000);
	return false;
});
});
});
</script>