$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: " http://cake.zimnerds.com/properties/getstates",
            data: { country : selectedCountry }
        }).done(function(data){
            $("#state").html(data);
            $('#city').html('<select class="city" name="city_id" id="city-id"><option value="">Select state first</option></select>');
        });
    });
    $("select.state").change(function(){
        var selectedState = $(".state option:selected").val();
        if (selectedState){
        $.ajax({
            type: "POST",
            url: " http://cake.zimnerds.com/properties/getcity",
            data: { state : selectedState }
        }).done(function(data){
            $("#city").html(data);

        });
        }
    });
});