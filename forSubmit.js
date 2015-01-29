/**
 * Created by Sofia Korotchenko on 27.10.14.
 */
$(document).ready(function() {
    $("#ajaxform").submit(function(){
        var form = $(this);
        var error = false;
        if (!error) {
            var data = form.serialize();
            $.ajax({
                type: 'POST',
                url: 'sendMessage.php',
                dataType: 'json',
                data: data,
                beforeSend: function(data) {
                    form.find('input[type="submit"]').attr('disabled', 'disabled');
                },
                success: function(data){
                    if (data['error']) {
                        alert(data['error']);
                    } else {
                        $('.block-title').css('display','none');
                        $('form').css('display','none');
                        $('.submit').css('display','block');
                        $('.submit .block-title').css('display','block');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                },
                complete: function(data) {
                    form.find('input[type="submit"]').prop('disabled', false);
                }
            });
        }
        return false;
    });
});