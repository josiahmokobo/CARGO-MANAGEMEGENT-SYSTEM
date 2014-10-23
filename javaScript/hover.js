$('.search').mousemove(function(e){
var hovertext= $(this).attr('hovertext');
$('#hoverdiv').text(hovertext).show();
$('#hoverdiv').css('top', e.clientY+10).css('left', e.clientX+10);
}).mouseout(function(){
$('#hoverdiv').hide();
});
$('.hover2').mousemove(function(e){
var hovertext= $(this).attr('hover');
$('#hove').text(hovertext).show();
$('#hove').css('top', e.clientY+10).css('left', e.clientX+10);
}).mouseout(function(){
$('#hove').hide();
});