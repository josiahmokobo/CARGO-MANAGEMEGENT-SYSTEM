$(document).ready(function(){
$('#agree').change(function(){
state=$(this).attr('value');
if(state=='on'){
$('#continue').removeAttr('disabled');
}
else if (state=='')
$('#continue').attr('disabled','disabled');
});
});
