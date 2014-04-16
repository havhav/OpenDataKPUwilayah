<?
/********************************************************************
*	Date		: 15 April 2014
*	Author		: Wibisono Sastrodiwiryo
*	Email		: wibi@alumni.ui.ac.id
*	Copyleft	: eGov Lab UI 
*********************************************************************/
require("config.php"); 
#------------------------init
//$ses->authenticate();
$doc->pagetitle="About";
$doc->status="API wilayah";

#------------------------proc
switch ($_POST["cmd"]) {
	
	default:
		$doc->content("general/doc.php");

}

$doc->error_message();

#------------------------view

if ($mobile) {include(viwpath."/general/m_body.php");}
else {include(viwpath."/general/body.php");}
?>