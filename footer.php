</div><div id="footer">  <p>F*ktion:(){ "host": "<a title="庙(miao)" class="miao" href="http://miao.in">(miao)</a>"<a href="http://host-tracker.com/website-monitoring-stats/5690034-5690035/lvuc/">,</a><br />    "CopyLeft": "<a href="<?php bloginfo('url'); ?>/">    <?php bloginfo('name'); ?>    </a>", "<a href="<?php bloginfo('rss2_url'); ?>">Entries RSS</a> ", "<a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS</a>"<br />    "Powered": "<a href="http://wordpress.org/">WordPress</a>","Theme": "<a href="http://mayabox.com">aRui</a>", "reCode: <a href="http://ooxx.me/readme">bigCat</a>" } </p></div></div><?php wp_footer(); ?>

<script type="text/javascript" src="http://ooxx.me/js/jquery.js"></script>
<script type="text/javascript">
//emotion
function grin(tag) {
	var myField;
	tag = ' ' + tag + ' ';
	if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
		myField = document.getElementById('comment');
	} else {
		return false;
	}
	if (document.selection) {
		myField.focus();
		sel = document.selection.createRange();
		sel.text = tag;
		myField.focus();
	}
	else if (myField.selectionStart || myField.selectionStart == '0') {
		var startPos = myField.selectionStart;
		var endPos = myField.selectionEnd;
		var cursorPos = endPos;
		myField.value = myField.value.substring(0, startPos)
				+ tag
				+ myField.value.substring(endPos, myField.value.length);
		cursorPos += tag.length;
		myField.focus();
		myField.selectionStart = cursorPos;
		myField.selectionEnd = cursorPos;
	}
	else {
		myField.value += tag;
		myField.focus();
	}
}
//DOM READY
$(function() {

	//reply
	if (!$.browser.msie) {
		$(".thdrpy").fadeOut();

		$(".comment").hover(
				function() {
					$(this).find(".thdrpy").stop().attr("style", "");
				}, function() {
			$(this).find(".thdrpy").hide("slow");
		});

		$(".allowTags span").click(function() {
			$(".allowTags code").toggle(function () {
                $("#header-wrap").removeClass("quicknav");
                $("#quicknav").slideUp();
            });
		})
	}
	//loading state
	$("#loading").fadeOut(2000);
	//radius-avatar
	/*$(".avatar").wrap(function(){
		var wh=$(this).width()+'px '+$(this).height()+'px';
		return '<span class="' + $(this).attr('class') + '" style="background:url(' + $(this).attr('src') + ') no-repeat center center; width: ' + $(this).width() + 'px; height: ' + $(this).height() + 'px;-moz-background-size:' + wh +';-webkit-background-size:' + wh +';background-size:' + wh + ';" />';
		}).css("opacity","0");*/
	//konami code
	var k = []; //建立一个空的数组
	$(document).keydown(function(e) {
		k.push(e.keyCode); //把每一次按下的键码加入到数组k当中
		if (k.toString().indexOf('38,38,40,40,37,39,37,39,66,65') >= 0) { //判断如果数组k中可以查找到指定的字符串 即返回值大于等于0
			if (confirm("要看裸照么?")) {
				window.location = "http://ooxx.me/readme/";
			}
			k = [];//清空数组k 以便再次触发事件
		}
	});
});
function now() {
var now = new Date();
var str = now.getFullYear() + "年" + (now.getMonth() + 1) + "月" + now.getDate() + "日<small>" + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds() + "</small>";
$('#now').html(str);
}
if ($("#now")[0]) {
setInterval(now, 1000);
}
</script>


<script type="text/javascript" src="http://tajs.qq.com/stats?sId=8783356" charset="UTF-8"></script>

</body></html>