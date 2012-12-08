//toggle{ id , n|b|i|t , b|i}
function tog(id,typ,tog){
	var o = document.getElementById(id);
	var x = o.style.display;
	switch(typ){
		case 'n':
			x="none";
			break;
		case 'b':
			x="block";
			break;
		case 'i':
			x="inline";
			break;
		default:
			if(tog=="b"&&x!="block"){x="block"}
			else if(tog=="i"&&x!="inline"){x="inline"}
			else{x="none"};
	}
	o.style.display=x;
}
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
//konami code
	$(function(){
		var k = []; //建立一个空的数组
		$(document).keydown(function(e){
								k.push(e.keyCode); //把每一次按下的键码加入到数组k当中
								if(k.toString().indexOf('38,38,40,40,37,39,37,39,66,65')>=0){ //判断如果数组k中可以查找到指定的字符串 即返回值大于等于0
										if(confirm("要看裸照么?")){
											window.location = "http://ooxx.me/readme/";
										}
									k = [];//清空数组k 以便再次触发事件
								}
							});
		
	})


//jquery subFunctions
$().ready(function (){
	//feedMe
	$("#feedAll").hover(
		function() {
			$("#feedMe").show("fast");
		}
		,function() {
			$("#feedMe").hide("slow");
		}
		);
	//loading state
	$("#loading").fadeOut(2000);
	//strict.dtd
	$("a[rel='external']").attr("target","_blank");
})
