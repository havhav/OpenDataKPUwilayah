<?
/*
Author		: muhammad hafidz
Date		: April 15, 2014
Copyleft	: eGov Lab UI 
Contact		: hafidz@cybergl.co.id
Version		: 0.0.1
*/

class wilayah extends db_connection {
	function cat_listbox($parent=0) {
		global $api,$doc; 
		list($db_link_id,$db_name, $db_server)=$this->connect_db();
		$parent+=0;
        #-----------api wilayah
		$query=$api->browse_wilayah($parent);
        $query=json_decode($query);
        #----------------------
        if($query[0]->tingkat==1){$select="Pilih Propinsi";}
        elseif($query[0]->tingkat==2){$select="Pilih Kabupaten";}
        elseif($query[0]->tingkat==3){$select="Pilih Kecamatan";}
        elseif($query[0]->tingkat==4){$select="Pilih Kelurahan";}
        $result="<select class=\"formfield\" name=\"wilayah_id\" onChange=\"selectCat(this,'$parent')\">";
		$result.="<option value=\"\">".$select."</option>";
        
		while (list($key,$buffer)=each($query)){
			$result.="<option $selected value=\"$buffer->wilayah_id\">".addslashes($buffer->nama)."</option>";
			$tingkat=$buffer->tingkat;
		}
        
		$result.="</select>";	
		$this->child="<div id=\"subcat_$parent\"></div>";	
		$this->loading="<span id=\"loading_$parent\" style=\"visibility:hidden\">".$doc->img("working.gif")."</span>";	
		$this->tingkat = $wilayah[$tingkat];
        $this->listbox = $result;	
	}
    
    function wilayah_child($parent) {
		global $api;
		$parent+=0;
		list($db_link_id,$db_name, $db_server)=$this->connect_db();
		#----------api wilayah
        $query=$api->browse_wilayah($parent);
        $query=json_decode($query);
        #---------------------
		$result=$query;
	return $result;
	}
    
    function wilayah_read($wilayah_id) {
		global $api;
		$wilayah_id+=0;
		list($db_link_id,$db_name, $db_server)=$this->connect_db();
		#-------------API wilayah
        $query=$api->get_wilayah($wilayah_id);
        $query=json_decode($query);
        #----------------------
		$result=$query;
	return $result;
	}
    
}

?>
