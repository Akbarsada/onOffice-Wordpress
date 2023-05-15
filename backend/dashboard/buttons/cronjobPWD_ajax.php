<?php ?>

<script type="text/javascript" >


    function onnOfficeCron_pwd()
    {

        var onOffice_cron_pwd = jQuery("#onOffice_cron_pwd").val();

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "onOffice_cron_pwd_cb",

                'onOffice_cron_pwd':onOffice_cron_pwd
            },
            success: function (data) {
                var json = JSON.stringify(data);
                var myJson = JSON.parse(json);
                //Zertifikat Speicherpfade

                document.getElementById("onOffice_cron_pwd").value = myJson.data.onOffice_cron_pwd;
                document.getElementById("pwd_cron").innerHTML = myJson.data.onOffice_cron_pwd;

                M.toast({html: 'gespeichert'})
            },
        });

    }
</script>