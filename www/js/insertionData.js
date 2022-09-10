$(document).ready(function() {
 
    $("#save").click(function() {

        var paragraph = $("#hidden_text").val();
        var header = $("#header").val();

        $.ajax({
            type: "POST",
            url: "../mysql/ajaxInsertion.php",
            data: {
                content: paragraph,
                header: header
            },
            cache: false,
            success: function(data) {
                alert(data);
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });
    });
});