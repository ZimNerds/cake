$('select.country').change(function(){
    $.getJSON(
        '/properties/getstates',
        'countryid='+$('select.country').val(),
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
