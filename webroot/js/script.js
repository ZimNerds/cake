$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "properties/getstates",
            data: { country : selectedCountry }
        }).done(function(data){
            $("#response").html(data);
        });
    });
});