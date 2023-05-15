<?php ?>

        <div class="row">
                <div>
                    <p>
                    Mit dem <strong>Request OnOffice Button</strong> können sie manuell die Eugen Wordpress Datenbank mit der OnOffice Datenbank aktualisieren.
                    </p>
                </div>
                    <a class="waves-effect waves-light btn" id="onOfficeRequest_ajaxid" onclick="onOfficeRequest(this);">
                    <i class="material-icons left">cached</i>Request onOffice
                    </a>
        </div>



<hr>

        <div class="row">
            <div class="input-field col s6">

               <h6 style="font-weight: bold">Cronjob Schnittstelle für den onOffice Request</h6>
                <p><?php echo get_site_url() ?>/wp-json/request_immo/v1/pwd/<span id="pwd_cron"><?php echo get_option('onOffice_cron_pwd') ?></span></p>

            </div>

            <div class="input-field col s2">
                <input placeholder="" id="onOffice_cron_pwd" type="text" class="validate" value="<?php echo get_option('onOffice_cron_pwd') ?>">
                <label for="onOffice_cron_pwd" class="active">Cronjob Passwort NUR Zahlen</label>

                <a class="waves-effect waves-light btn" onclick="onnOfficeCron_pwd(this);"><i class="material-icons left">save</i>Speichern</a>
            </div>
        </div>



<hr>



