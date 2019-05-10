// CONTROL LOGIN/ SIGNUP
function loginControl() {
    $('#login-form').addClass('active');
    $('#login-form').addClass('in');
    $('#signup-form').removeClass('active');
    $('#signup-form').removeClass('in');
    $('#login-title').addClass('active');
    $('#signup-title').removeClass('active');
    $('#login-modal').show();
}

function signupControl() {
    $('#login-form').removeClass('active');
    $('#login-form').removeClass('in');
    $('#signup-form').addClass('active');
    $('#signup-form').addClass('in');
    $('#login-title').removeClass('active');
    $('#signup-title').addClass('active');
    $('#login-modal').show();
}

$(document).ready(function () {
    $('#btn-login').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'POST',
            'url': 'login',
            'data': {
                'email': $('#email').val(),
                'password': $('#password').val(),
                '_token': $(this).data('token')
            },
            'dataType': 'json',
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.errorlogin != undefined) {
                        $('.errorLogin').show().text(data.message.errorlogin[0]);
                    }
                } else {
                    window.location.href = "http://localhost/loginerror"
                }
            }
        });
    })
});

// // SIGNUP PROGRESS
// (function ($) {
//     var current_fs, next_fs, previous_fs; //fieldsets
//     var left, opacity, scale; //fieldset properties which we will animate
//     var animating; //flag to prevent quick multi-click glitches

//     $(".next").click(function () {
//         if (animating) return false;
//         animating = true;

//         current_fs = $(this).parent();
//         next_fs = $(this).parent().next();

//         //activate next step on progressbar using the index of next_fs
//         $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//         //show the next fieldset
//         next_fs.show();
//         //hide the current fieldset with style
//         current_fs.animate({
//             opacity: 0
//         }, {
//                 step: function (now, mx) {
//                     //as the opacity of current_fs reduces to 0 - stored in "now"
//                     //1. scale current_fs down to 80%
//                     scale = 1 - (1 - now) * 0.2;
//                     //2. bring next_fs from the right(50%)
//                     left = (now * 50) + "%";
//                     //3. increase opacity of next_fs to 1 as it moves in
//                     opacity = 1 - now;
//                     current_fs.css({
//                         'transform': 'scale(' + scale + ')'
//                     });
//                     next_fs.css({
//                         'left': left,
//                         'opacity': opacity
//                     });
//                 },
//                 duration: 800,
//                 complete: function () {
//                     current_fs.hide();
//                     animating = false;
//                 },
//                 //this comes from the custom easing plugin
//                 easing: 'easeInOutBack'
//             });
//     });

//     $(".previous").click(function () {
//         if (animating) return false;
//         animating = true;

//         current_fs = $(this).parent();
//         previous_fs = $(this).parent().prev();

//         //de-activate current step on progressbar
//         $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//         //show the previous fieldset
//         previous_fs.show();
//         //hide the current fieldset with style
//         current_fs.animate({
//             opacity: 0
//         }, {
//                 step: function (now, mx) {
//                     //as the opacity of current_fs reduces to 0 - stored in "now"
//                     //1. scale previous_fs from 80% to 100%
//                     scale = 0.8 + (1 - now) * 0.2;
//                     //2. take current_fs to the right(50%) - from 0%
//                     left = ((1 - now) * 50) + "%";
//                     //3. increase opacity of previous_fs to 1 as it moves in
//                     opacity = 1 - now;
//                     current_fs.css({
//                         'left': left
//                     });
//                     previous_fs.css({
//                         'transform': 'scale(' + scale + ')',
//                         'opacity': opacity
//                     });
//                 },
//                 duration: 800,
//                 complete: function () {
//                     current_fs.hide();
//                     animating = false;
//                 },
//                 //this comes from the custom easing plugin
//                 easing: 'easeInOutBack'
//             });
//     });

// })(jQuery);