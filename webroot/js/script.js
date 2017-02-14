$(document).ready(function(){

    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: " http://cake.zimnerds.com/properties/getstates",
            data:  'country=' +selectedCountry,
        }).done(function(html){
            $("#state").html(html);
        });
    });

    $("select.state").change(function(){
        alert( "Handler for .change() called." );
        var selectedState = $(".state option:selected").val();
        if (selectedState){
        $.ajax({
            type: "POST",
            url: " http://cake.zimnerds.com/properties/getcity",
            data: { state : selectedState }
        }).done(function(html){
            $("#city").html(html);

        });
        }
    });
});