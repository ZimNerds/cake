$(document).ready(function(){

$('select.country').change(function(){
    $.getJSON(
        '/properties/getstates',
        'countryid='+$("#country-id").val(),
        function(result){
            $('#states').empty();
            $.each(result.result, function(){
                $('#states').append('<option>'+this['states']+'</option>');
                console.log(countryid);
            });
        }
    );
    console.log(countryid);
});
});