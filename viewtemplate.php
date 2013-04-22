<?php 
//print_r($_REQUEST); die;
//print $_REQUEST; die;
$temp1=$_REQUEST['field'];
//echo $temp1; 
require_once '/var/www/template_new/model/model.php';
//require_once 'model/model.php';
?><div style="border:5px solid black;"><?php 
if(isset($_REQUEST))
{
	$str1="";
	$str1 .="<div style='width:50%;align:center;margin-left:250px;'><form action='savedata.php?var=$temp1' method='post'>";
	$obj=new MyModel();
	//echo "hi";die;
	$result=$obj->retrivetemplate($_REQUEST['field']);

if(isset($result[0]['textbox']))
{
	$val=explode(',',$result[0]['textbox']);
	$val1=explode(',',$result[0]['textboxvalue']);
	//echo count($val);die;
	for($i=0;$i<count($val)-1;$i++)
	{
	$str1 .="<p>" .$val[$i]."<input type='text' value=".$val1[$i]." name='textbox[]'></p>";
	}
}
if(isset($result[0]['textarea']))
{
	$val=explode(',',$result[0]['textarea']);
	for($i=0;$i<count($val)-1;$i++)
	{
	$str1 .="<p>" .$val[$i]."<textarea rows='4' cols='50' name='textarea[]'>".$result[0]['textareavalue']."</textarea></p>";
	}
}
		

if(isset($result[0]['checkbox']))
{
	$val=explode(',',$result[0]['checkbox']);
	$val1=explode(',',$result[0]['checkboxvalue']);
	for($i=0;$i<count($val)-1;$i++)
	{
		$str1 .="<p>" .$val[$i]."<input type='checkbox' value=".$val1[$i]." name='checkbox[]'></p>";
	}
}
if(isset($result[0]['combobox']))
{
	$val=explode(',',$result[0]['combobox']);
	$val1=explode(',',$result[0]['comboboxvalue']);
$str1 .="<p>" .$val[0]."<select value=".$val1[0]."name='select'>";
$val=explode(',',$result[0]['combooption']);
for($i=0;$i<count($val)-1;$i++)
{
	$str1 .="<option value=".$val[$i].">".$val[$i] ."</option>";
}
$str1 .="</select>";
}
$str1 .="<br/><input type='submit' value='save'><input type='reset' value='reset'></form></div>";
echo $str1;
}
//echo "hi"; die;
?>

</div>
