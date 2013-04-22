<?php
require_once '/var/www/template_new/controller/singleton.php';
abstract class model {

    protected $db = "";

    function __construct() {
        $this->db = DBConnection::Connect();
    }

}

class MyModel extends model {


    public function retriveInfo()
    {
    	$this->db->Fields (array("templatename","templateid"));
    	$this->db->From ( "templateengine" );
    	
    	$this->db->Select ();
    	//echo $this->db->lastQuery();die;
    	$result = $this->db->resultArray ();
    	return $result;
    
    }
    public function insertInfo($tname,$textarea,$textareavalue,$textbox,$textboxvalue,$checkbox,$checkboxvalue,$combobox,$comboboxvalue,$combooption)
    {
    	
    	$this->db->Fields(array("templatename"=>$tname,"textarea"=>$textarea,"textareavalue"=>$textareavalue,"textbox"=>$textbox,"textboxvalue"=>$textboxvalue,"checkbox"=>$checkbox,"checkboxvalue"=>$checkboxvalue,"combobox"=>$combobox,"comboboxvalue"=>$comboboxvalue,"combooption"=>$combooption));
    	$this->db->From("templateengine");
    	
    	$this->db->Insert();
    	//echo "hello";die;
    	//echo $this->db->lastQuery();die;
    }
    public function retrivetemplate($templateid)
    {
    	//echo "hi";die;
    	$this->db->Fields ();
    	$this->db->From ( "templateengine" );
    	$this->db->where (array("templateid"=>$templateid));
    	
    	$this->db->Select ();
    	//echo $this->db->lastQuery();die;
    	$result = $this->db->resultArray ();
    	return $result;
    	
    }
   /* public function reedit($id)
    {
    	//print_r($_REQUEST[0]); die;
    	$this->db->Fields(array("textarea"=>"$_REQUEST[]"));
    	$this->db->From("templateengine");
    	$this->db->Where(array("templateid"=>$id));
    	$result2=$this->db->Update();
    	//echo $this->db->lastQuery();
    	return $result2;
    	 
    }
    */


}
