jQuery(document).ready(function(jQuery) {
    checkDefaults();
    console.log('OK');
});

function checkDefaults() {
    jQuery('.radiogroup-default').attr('checked', 'checked');
}

function clearForm() {
    jQuery('#query-form').find('input[type=text]').val('');
    jQuery('#query-output').html('');
}

function getQuery(generatorUrl) {
    var data = jQuery('#query-form').serialize();
    jQuery.ajax({
        type: 'post',
        url: generatorUrl,
        data: data,
        success: function(response) {
            jQuery('#query-output').html('<code>' + response + '</code>');
            jQuery('#output-modal').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}
