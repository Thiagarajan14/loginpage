$('#form').on('submit',function(e)
{
    $('#btn').attr('disabled',true);
    jQuery.ajax(
        {
            url:'submit.php',
            type:'post',
            data:$('#form').serialize(),
            success:function(result)
        {
            $('#msg').html('Successfully Registered');
            $('#form')['0'].reset();
            $('#btn').val('SEND');
            $('#btn').attr('disabled',false);
            
        }
        });
    e.preventDefault();
});
