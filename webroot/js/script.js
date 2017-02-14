$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: " http://cake.zimnerds.com/properties/getstates",
            data: { country : selectedCountry }
        }).done(function(data){
            $("#state").html(data);
        });
    });
    $("select.state").change(function(){
        var selectedState = $(".state option:selected").val();
        $.ajax({
            type: "POST",
            url: " http://cake.zimnerds.com/properties/getcity",
            async: false,
            data: { state : selectedState }
        }).done(function(data){
            $("#city").html(data);
        });
    });
});