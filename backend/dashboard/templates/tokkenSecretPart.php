<?php
?>
<h5></h5>

    <div class="row">
        <div class="input-field col s4">
            <input placeholder="onOffice Token" id="onOffice_token" type="text" class="validate" value="<?php echo get_option('onOffice_token') ?>">
            <label for="onOffice_token">onOffice Token</label>
        </div>

        <div class="input-field col s5">
            <input placeholder="onOffice Secret" id="onOffice_secret" type="text" class="validate" value="<?php echo get_option('onOffice_secret') ?>">
            <label for="onOffice_secret">onOffice Secret</label>


        </div>
    </div>

<div class="row">
    <div class="input-field col s4">
        <input placeholder="Tiny PNG API" id="tiny_png_api" type="text" class="validate" value="<?php  echo get_option('tiny_png_api') ?>">
        <label for="tiny_png_api">Tiny PNG API</label>
    </div>


</div>


<div class="row">
    <div class="input-field col s2">
        <input id="onOffice_anzahl_objekte" type="number" class="validate" value="<?php echo intval(get_option('onOffice_anzahl_objekte')) ?>">
        <label for="onOffice_anzahl_objekte">Maximale Anzahl von Objekte pro Request</label>
    </div>

    <div class="input-field col s10">
    </div>
</div>



<div class="row">
    <div class="input-field col s8">

        <a class="waves-effect waves-light btn" onclick="onOffice_api_key_ajax(this);"><i class="material-icons left">save</i>Speichern</a>

    </div>
</div>

<hr>



