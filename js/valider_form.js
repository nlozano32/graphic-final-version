$(document).ready(function() {
    $("#ok").hide();

    $("#formid").validate({
        rules: {
            anee: { required: true, minlength: 4},
            mois: { required: true, minlength:4}
           
        },
        messages: {
            anee: "anne not null.",
            mois: "anne not null."
            
        },
        submitHandler: function(form){
            var dataString = 'anee='+$('#anee').val()+'&mois='+$('#mois');
            $.ajax({
                type: "POST",
                url:"lineChar.php",
                data: dataString,
                success: function(data){
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#formid").hide();
                }
            });
        }
    });
});