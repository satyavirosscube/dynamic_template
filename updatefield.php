<?php
if($_REQUEST ['field']=="textarea")
{
	$strField="<br>";
	$strField .="<p>TextArea Lable::<input id='textarea' class='required' type='text' name='textarealabel[]'></p>";
	$strField .="<p>Default Value::<input id='textareavalue' class='required' type='text' name='textareavalue[]'></p>";
			
}elseif ($_REQUEST ['field']=="textbox")
{
	$strField="<br>";
	$strField .="<p>TextBOxLable::<input id='textbox' class='required' type='text' name='textboxlabel[]'></p>";
	$strField .="<p>Default Value::<input id='textboxvalue' class='required' type='text' name='textboxvalue[]'></p>";
	
}elseif($_REQUEST ['field']=="checkbox")
{
	$strField="<br>";
	$strField .="<p>CheckBox Lable::<input id='checkbox' class='required' type='text' name='checklabel[]'></p>";
	$strField .="<p>Default Value::<input id='checkboxvalue' class='required' type='text' name='checkvalue[]'></p>";

}else {
	$strField="<br>";
	$strField .="<p>ComboBox Lable::<input id='combobox' class='required' type='text' name='combolabel[]'></p>";
	$strField .="<p>Default Value::<input id='comboboxvalue' class='required' type='text' name='combovalue[]'></p>";
	$strField .="<br><input type='button' value='Add Option' onclick='addmore()'></p>";
}
echo $strField;
?>