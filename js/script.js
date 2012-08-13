/* Author:
Joseph Chagan
*/
var target,
	curImg,
	setCurImg;
target = $('#demos button').climb(3).find('img');

setCurImg = function(){
	curImg = target.attr('src');
}
setCurImg();

$('#demos button').click(function(){
	if(curImg === 'images/html5.png'){
		target.attr('src', 'images/css3.png');
		setCurImg();
	} else {
		target.attr('src', 'images/html5.png');
		setCurImg();
	}
});

// show/hide demo code block
$('.demo-code-container').find('a').click(function(event){
	event.preventDefault();
	$(this).parent().find('.code').toggle();
})

// nav controls
$('#descriptionButton').click(function(event){
	event.preventDefault();
	$.scrollTo('#description', 300);
})
$('#usageButton').click(function(event){
	event.preventDefault();
	$.scrollTo('#usage', 300);
})
$('#demosButton').click(function(event){
	event.preventDefault();
	$.scrollTo('#demos', 300);
})




