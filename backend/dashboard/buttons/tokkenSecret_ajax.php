<?php ?>

<script type="text/javascript" >


    function onOffice_api_key_ajax()
    {

        var onOffice_anzahl_objekte = jQuery("#onOffice_anzahl_objekte").val();
        var onOffice_token = jQuery("#onOffice_token").val();
        var onOffice_secret = jQuery("#onOffice_secret").val();
        var tiny_png_api = jQuery("#tiny_png_api").val();

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "onOffice_api_key_cb",

                'onOffice_token':onOffice_token,
                'onOffice_secret':onOffice_secret,
                'onOffice_anzahl_objekte':onOffice_anzahl_objekte,
                'tiny_png_api':tiny_png_api

            },
            success: function (data) {
                var json = JSON.stringify(data);
                // console.log(data);
                var myJson = JSON.parse(json);
                //Zertifikat Speicherpfade

                document.getElementById("onOffice_token").value = myJson.data.onOffice_token;
                document.getElementById("onOffice_secret").value = myJson.data.onOffice_secret;
                document.getElementById("tiny_png_api").value = myJson.data.tiny_png_api;

                M.toast({html: 'gespeichert'})
            },
        });

    }




</script>