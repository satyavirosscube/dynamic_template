<script	src='javascript/jquery.tools.min.js'></script>

<?php 
//echo"hi"; die;
require_once '/var/www/template_new/model/model.php';
//require_once 'model/model.php';
$obj=new MyModel();
$result=$obj->retriveinfo();
//print_r($result);die;
?>
<script type="text/javascript">

function field_change(){
$('#field1').change(update_field);
}
function update_field(){
	var field=$('#field1').attr('value');
		$.get('viewtemplate.php?field='+field, show_field1);
}
function show_field1(res){
$('#div1').html(res);
}
$(document).ready(field_change);
</script>
<h3> choose your templates of your choice</b>&nbsp;&nbsp;&nbsp;
<select id="field1" name="field1">
<?php foreach($result as $data){
?>
<option value="<?php echo $data['templateid']?>"><?php echo $data['templatename']?></option>
<?php }?>  
</select><br/><br/>
<div id="div1"></div>

