<body onload="loadPage()">
<div id="subcat_<?echo $grandparent?>">
	<?if($child){?>
    <div class="form">
		<?$main->cat_listbox($parent);?>
		<span class="field"><?echo $main->listbox;?> <?echo $main->loading;?></span>		
        <div class="clear"></div>
	</div>	
	<?
		echo $main->child;
	}?>
</div>
<div id="select"></div>
<div id="placeholder">
    <?        
        include(viwpath."/listbox/success.php");
    ?>
</div>
</body>

<SCRIPT LANGUAGE="JavaScript">
<!--
function loadPage() {
  if (window == parent) return;
  else {
	  parent.document.getElementById('loading_<?echo $grandparent?>').style.visibility='hidden';
	  parent.displayData('subcat_<?echo $grandparent?>');
	  parent.displayData('placeholder');
  }
}
-->
</script>
