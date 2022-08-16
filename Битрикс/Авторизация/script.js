  $(document).ready(function () { // LOGIN

         $('.modal-login-ajax').submit(function () {
             var data = $(this).serialize();

             $.ajax({
                 type: 'post',
                 url: '/ajax/signs/login.php',
                 data: data,
                 dataType: 'html',

                 success: function (response) {
                     console.log(response);
                     if (response == 1) location.reload();
                     else
                     {
                         $('.alert-warning-login').css('display', 'block')
                         $('.errortext-login').text(response)

                         setTimeout(function () {
                             $('.alert-warning-login').css('display', 'none')
                         }, 3500)
                     }
                 },

             });
             return false;

         });
     })
