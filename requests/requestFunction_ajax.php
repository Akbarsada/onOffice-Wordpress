<?php ?>

<script type="text/javascript" >
    function onOfficeRequest()
    {

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: {
                action: "onOfficeRequest_cb",
            },
            success: function (data) {


                alert("Abfrage erfolgreich");
            },
            error: function (xhr, status, err) {
                alert("Status " + status + "  Fehler: " + err );
            }
        });
    }
</script>