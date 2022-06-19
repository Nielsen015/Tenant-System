$(document).ready(function ()
{
    $('.checking_email').keyup(function (e) {
       
        var email = $('.checking_email').val();
        // alert(email);
        $.ajax({
           type: "POST",
           url: "code.php",
           data: {
               "check_submit_btn": 1,
               "email_id": email,
           },
           success: function (response){
            alert(response);
            

           }
       });
    });
});



