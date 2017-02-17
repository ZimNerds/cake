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




    $('.menu-item').hover(
        function(){ $(this).addClass('active') }
    )

});