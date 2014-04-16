<SCRIPT LANGUAGE="JavaScript">

/*************************************************************************
  This code is from Dynamic Web Coding at http://www.dyn-web.com/
  See Terms of Use at http://www.dyn-web.com/bus/terms.html
  regarding conditions under which you may use this code.
  This notice must be retained in the code as is!
*************************************************************************/
//--------------------------------------------------------
function displayData(obj) {
  var lyr = document.getElementById? document.getElementById(obj): document.all? document.all[obj]: null;
    if ( window.frames['iframer'] && lyr && typeof lyr.innerHTML != "undefined" ) {
      lyr.innerHTML = window.frames['iframer'].document.getElementById(obj).innerHTML;
    }
}

function displayFrame(obj,frame) {
  var lyr = window.frames[frame].document.getElementById? window.frames[frame].document.getElementById(obj): window.frames[frame].document.all? window.frames[frame].document.all[obj]: null;
    if ( window.frames['iframer'] && lyr && typeof lyr.innerHTML != "undefined" ) {
      lyr.innerHTML = window.frames['iframer'].document.getElementById(obj).innerHTML;
    }
}

</SCRIPT>
<div class="formcontainer">
<div class="caption">Pilih Wilayah</div>
	<div class="form">
	<?$main->cat_listbox();?>
	<span class="field"><?echo $main->listbox;?> <?echo $main->loading;?></span>        
	</div>	
	<?echo $main->child;?>
    <div class="clear"></div>
</div>
<p>&nbsp;</p>

<div id="placeholder"></div>

<SCRIPT LANGUAGE="JavaScript">
<!--
function selectCat(form,gp) {
	var go = (form.options[form.selectedIndex].value);
	if (go) {
		document.getElementById('loading_'+gp).style.visibility='visible';
		window.frames['iframer'].location="<?echo $PHP_SELF?>?cmd=select&grandparent="+gp+"&parent="+go;
	}
}

window.onerror=null;
//-->
</SCRIPT>
