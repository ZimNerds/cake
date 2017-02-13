
    $(document).ready(function(){
        $("select.country").change(function(){
            var selectedCountry = $(".country option:selected").val();
            $.ajax({
                type: "POST",
                url: "<?php echo $this->Html->Url(array('action'=>'processRequest'));?>",
                data: { country : selectedCountry }
            }).done(function(data){
                $("#response").html(data);
            });
        });
    });
