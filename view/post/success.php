<div class="form_input">
    <?echo $frm->form("display.php",$hidden);?>
    <div>
    Masukkan ID Wilayah:   <span><?echo $frm->textbox("text","wilayah_id","20","16");?></span>
    <span class="button_position"><?echo $frm->button("Submit");?></span>
    </form>
    </div>    
</div>
<div class="result">
    <h2>Json Text<h2>
    <div class="result_content"><pre><?echo $wilayah;?></pre></div>
</div>
<div class="result">
    <h2>Contoh hasil yang telah diolah dengan cara apicall parent-nya.<h2>
    <div class="result_content"><?echo $history;?></div>
</div>