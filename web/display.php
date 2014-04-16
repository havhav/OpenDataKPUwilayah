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
$doc->pagetitle="Display";
$doc->status="wilayah";

#------------------------proc
switch ($_POST["cmd"]) {
	case "Submit":
        $wilayah=$api->get_wilayah($_POST[wilayah_id]);
        $hasil_decode=json_decode($wilayah);
        $history=$hasil_decode->nama;
        for($i=1;$i<$hasil_decode->tingkat;$i++){            
            $parent=$api->get_wilayah($hasil_decode->parent);
            $parent_wilayah=json_decode($parent);
            $history = $parent_wilayah->nama." <img src=\"images/pointer.gif\"> ".$history;
            $hasil_decode->parent=$parent_wilayah->parent;
        }
        $wilayah=str_replace(",",",<br/>",$wilayah);
		$doc->content("post/success.php");
	break;
	default:
		$doc->content("post/form.php");

}

$doc->error_message();

#------------------------view

if ($mobile) {include(viwpath."/general/m_body.php");}
else {include(viwpath."/general/body.php");}
?>