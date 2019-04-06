$.validator.setDefaults({
    ignore: []
});
$(".formValidate").validate({
    rules: {
        email: {
            required: true,
            email:true
        },
        purpose: {
            required: true
        },
        audience: {
            required: true
        },
        platforms: {
            required: true
        }
    },
    //For custom messages
    messages: {
        xname:{
            required: "Enter a username",
            minlength: "Enter at least 5 characters"
        },
        xcurl: "Enter your website"
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
        var placement = $(element).data('error');
        if (element.attr('id')==='tos'){
            error.insertAfter($('#tos_span'));
        }
        else if (placement) {
            $(placement).append(error)
        } else {
            error.insertAfter(element);
        }
    }
});