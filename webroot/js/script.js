$('#country_id').change(function(){
    $.getJSON(
        '/properties/processRequest',
        'country_id='+$('#country_id').val(),
        function(result){
            $('#states').empty();
            $.each(result.result, function(){
                $('#states').append('<option>'+this['states']+'</option>');
            });
        }
    );
});
