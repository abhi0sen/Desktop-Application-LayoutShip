$(document).ready(function() {
 
    $(".hide-save").click(function() {
        
        var id = $("#id").val();

        $.ajax({
            type: "POST",
            url: "../mysql/ajaxRead.php",
            data: {
                id:id
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