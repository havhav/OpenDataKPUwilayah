<?
/*
Author		: muhammad hafidz
Date		: 15 April 2014
Copyleft	: eGov Lab UI
Contact		: hafidz@cybergl.co.id
Version		: 0.0.1
*/

class api extends db_connection {
//-------disediakan untuk kepentingan yang akan datang
    function get_wilayah($wilayah_id) {
		$content = file_get_contents(dapil_url.'/api.php?cmd=get_wilayah&wilayah_id='.$wilayah_id);
        return $content;
	}
    
    function browse_wilayah($wilayah_id) {
		$content = file_get_contents(dapil_url.'/api.php?cmd=browse_wilayah&wilayah_id='.$wilayah_id);
        return $content;
	}
    
    function browse_wilayah_kec($wilayah_id) {
		$content = file_get_contents(dapil_url.'/api.php?cmd=browse_wilayah&kec_id='.$wilayah_id);
        return $content;
	}
    
    function search_wilayah($wilayah_id){
        $content = file_get_contents(dapil_url.'/api.php?cmd=search&dapil_id='.$wilayah_id);
        return $content;
    }
    
    function browse_kel($wilayah_id){
        $content = file_get_contents(dapil_url.'/api.php?cmd=browse&kel_id='.$wilayah_id);
        return $content;
    }
    
    function browse_kab($wilayah_id){
        $content = file_get_contents(dapil_url.'/api.php?cmd=browse&kab_id='.$wilayah_id);
        return $content;
    }
    
    function browse_kec_tingkat($wilayah_id,$tingkat){
        $content = file_get_contents(dapil_url.'/api.php?cmd=browse&kec_id='.$wilayah_id.'&tingkat_dapil='.$tingkat);
        return $content;
    }
}
?>
