$(document).ready(function () { // SIGN UP

             $('.modal-signup-ajax').submit(function () {
                 var data = $(this).serialize();

                 $.ajax({
                     type: 'post',
                     url: '/ajax/signs/signup.php',
                     data: data,
                     dataType: 'html',

                     success: function (response) {
                         if (response != 1)
                         {
                             $('.alert-warning-signup').css('display', 'block')
                             $('.errortext-signup').text(response)

                             setTimeout(function () {
                                 $('.alert-warning-signup').css('display', 'none')
                             }, 3500)
                         }
                         else location.reload();
                       

                     },

                 });
                 return false;

             });
         })
