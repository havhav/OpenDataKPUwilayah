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
$doc->pagetitle="Listbox";
$doc->status="Pilih Wilayah";
$main=getmodule("wilayah");
//$doc->leftside("get/submenu.php");

#------------------------proc
switch ($_GET["cmd"]) {

	case "select":
		$parent=$_GET["parent"];
		$jenis_tingkat=array("1"=>"pro","2"=>"kab","3"=>"kec","4"=>"kel");		
		$tingkat=$main->wilayah_read($parent);
		$grandparent=$tingkat->parent;
		//$main->history($parent);
		$hidden[wilayah_id]=$parent;
		$child=$main->wilayah_child($parent);			            
            $wilayah=$api->get_wilayah($parent);
            $hasil_decode=json_decode($wilayah);
            $history=$hasil_decode->nama;
            for($i=1;$i<$hasil_decode->tingkat;$i++){            
                $parents=$api->get_wilayah($hasil_decode->parent);
                $parent_wilayah=json_decode($parents);
                $history = $parent_wilayah->nama." <img src=\"images/pointer.gif\"> ".$history;
                $hasil_decode->parent=$parent_wilayah->parent;
            } echo $history;
            $wilayah=str_replace(",",",<br/>",$wilayah);    
			include(viwpath."/listbox/sub_select.php");
		exit;
	break;
	
	
	default:
		$doc->content("listbox/select.php");

}

$doc->error_message();

#------------------------view

if ($mobile) {include(viwpath."/general/m_body.php");}
else {include(viwpath."/general/body.php");}
?>