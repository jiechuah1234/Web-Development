
$(document).ready(function () {
    $('#add_item_desc').on("input", function(e){
        var len = $("#add_item_desc").val().length;

        $('#check_char_1').html(500-len);
    });
});