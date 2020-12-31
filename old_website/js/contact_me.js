/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
 $(function() {

    $("#cf input,#cf textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var subject = $("input#subject").val();
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var msg = $("textarea#msg").val();
            // var firstName = name; // For Success/Failure Message
            // // Check for white space in name for Success/Fail message
            // if (firstName.indexOf(' ') >= 0) {
            //     firstName = name.split(' ').slice(0, -1).join(' ');
            // }
            $.ajax({
                url: "./js/mail.php",
                type: "POST",
                data: {
                    subject:subject,
                    name: name,
                    email: email,
                    phone: phone,
                    msg: msg
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#cf').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    // $('#success > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#cf').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
