<script	src='javascript/jquery.tools.min.js'></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#btnSubmit').click(function() {
		var p=$('#template').valid()
		    rules: { 
		    	        textbox:
				{
				    required:true
				    minlength:6
				}
				tname: "required"
				textboxvalue: "required"
				textarea: "required"
				textareavalue: "required"
				checkbox: "required"
				checkboxvalue: "required"
				combobox: "required"
				comboboxvalue:"required"
				}
		messages: {
		     subject: "Please specify your name"

		   }
		//document.write(p);
			 if(p)
			{
				saveData();
			} 

		});//form validate



});

function saveData()
{	
      $.ajax({ 
      type: "POST",
      url: 'controller/save_template.php',
     
      data: $('#template').serialize(),
       
       success: function(data){
    	$("#div1").html(data);
       }
   });
  }
function addmore()
{
	$("#div1").append('<p>Option<input type="text" name="combofield[]"></P>');
}

function addField()
{	
	$('#div1').load('addfield.php');

}

</script>
<form  id="template" action="#" method="post" name="template">
<p><h3>Template Name:</h3><input id='tname' class='required' type="text" name="tname"></p>
<a href="#" onclick="addField()"><b>add_fields</b></a>
<div id="div1"></div>
<br/>
<br/>
<input id="btnSubmit" type="button" value="SAVE" />
</form>
