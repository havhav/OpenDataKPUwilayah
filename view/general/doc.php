<style>
.form_input {
font-family: verdana,arial,sans-serif;
font-size: 14px;
line-height: 2.0;
}

.form_input b{
color: #d65c02;
font-size:14px;
}
</style>

<div class="form_input">

<table border="0" cellpadding="4" cellspacing="1" width="100%" bgcolor="#D6D6DA" style="font-size:12px;">
	<tr bgcolor="#E2EBE8">
		<th>No</th>
		<th>Parameter</th>
		<th>Keterangan</th>
	</tr>	
    <tr bgcolor="#f6f6f5">
		<td align = "right">1</td>
		<td align = "left">cmd</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat dua method yaitu search dan browse</td>
	</tr>
    <tr bgcolor="#f6f6f5">
		<td align = "right">2</td>
		<td align = "left">dapil_id</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu search </td>
	</tr>	
    <tr bgcolor="#f6f6f5">
		<td align = "right">3</td>
		<td align = "left">kel_id</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>    <tr bgcolor="#f6f6f5">
		<td align = "right">4</td>
		<td align = "left">kec_id</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>
    <tr bgcolor="#f6f6f5">
		<td align = "right">5</td>
		<td align = "left">kab_id</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>
    <tr bgcolor="#f6f6f5">
		<td align = "right">6</td>
		<td align = "left">pro_id</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>
    <tr bgcolor="#f6f6f5">
		<td align = "right">7</td>
		<td align = "left">tingkat_dapil</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>
    <tr bgcolor="#f6f6f5">
		<td align = "right">8</td>
		<td align = "left">Wilayah_id</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>	
    <tr bgcolor="#f6f6f5">
		<td align = "right">9</td>
		<td align = "left">get_wilayah</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>		
    <tr bgcolor="#f6f6f5">
		<td align = "right">10</td>
		<td align = "left">browse_wilayah</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu browse</td>
	</tr>
</table>

<div class="result">
    <h2><b>Contoh Request Browse</b><h2>
    <div class="result_content">http://dapil.kpu.go.id/api.php?cmd=browse&kec_id=25867</div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->browse_wilayah(25867);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

<div class="result">
    <h2><b>Contoh Request Search</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=search&dapil_id=258
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Search</b><h2>
    <div class="result_content">
    <?
        $result=$api->search_wilayah(258);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

<div class="result">
    <h2><b>Contoh Request Browse Berdasarkan Daerah Pemilihan</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=browse&kel_id=10
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->browse_kel(10);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

<div class="result">
    <h2><b>Contoh Request Browse Berdasakan Kab_id</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=browse&kab_id=6518
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->browse_kab(6518);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

<div class="result">
    <h2><b>Contoh Request Browse Berdasarkan Tingkat Dapil</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=browse&kec_id=25867&tingkat_dapil=2
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->browse_kec_tingkat(25867,2);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

<div class="result">
    <h2><b>Contoh Request get_wilayah Berdasarkan wilayah_id</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=get_wilayah&wilayah_id=25867
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->get_wilayah(25867);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

<div class="result">
    <h2><b>Contoh Request browse_wilayah Berdasarkan kec_id</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=browse_wilayah&kec_id=25867
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->browse_wilayah_kec(25867);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>


<div class="result">
    <h2><b>Contoh Request browse_wilayah Berdasarkan wilayah_id</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=get_wilayah&wilayah_id=2400
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->get_wilayah(2400);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

<div class="result">
    <h2><b>Contoh Request browse_wilayah</b><h2>
    <div class="result_content">
    http://dapil.kpu.go.id/api.php?cmd=browse_wilayah&wilayah_id=2391
    </div>
</div>

<div class="result">
    <h2><b>Contoh Response Browse</b><h2>
    <div class="result_content">
    <?
        $result=$api->browse_wilayah(2391);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div></div>
