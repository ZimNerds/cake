$('#country-id').change(function(){
    $.getJSON(
        '/properties/processRequest',
        'country-id='+$('#country-id').val(),
        function(result){
            $('#states').empty();
            $.each(result.result, function(){
                $('#states').append('<option>'+this['states']+'</option>');
                console.log('+country-id');
            });
        }
    );
});
