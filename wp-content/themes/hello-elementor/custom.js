var checkExist = setInterval(function () {
    // Check if emoji exists in the label
    var label = jQuery('.form-columns-1:last-of-type label:last-of-type');
    var optInLabel = jQuery('.hs-form-booleancheckbox-display');
    optInLabel.text('Yes, I opt-in to receive marketing tips, best practices, product news, event updates and more from Insider.');

    if (label.length) {
        var text = label.text().replace('👍', '');
        label.text(text);

        // Add the radio button
        var optInLabel = jQuery('.hs-form-booleancheckbox-display');
        if (optInLabel.length > 0) {
            optInLabel.prepend('<input type="checkbox" class="custom-radio" id="subscription_type" name="subscription_type"> <label for="subscription_type"></label>');
        }
    }

    // Check if form fields exist
    var firstnameField = jQuery('input[name="firstname"]');
    var lastnameField = jQuery('input[name="lastname"]');
    var email = jQuery('input[name="email"]');
    var phone = jQuery('input[name="phone"]');
    var company = jQuery('input[name="company"]');
    // Add more fields as necessary...

    if (firstnameField.length && lastnameField.length) {
        firstnameField.css('text-transform', 'capitalize').attr("placeholder", "* " + firstnameField.attr("placeholder").replace('*', ''));
        lastnameField.css('text-transform', 'capitalize').attr("placeholder", "* " + lastnameField.attr("placeholder").replace('*', ''));
        email.css('text-transform', 'capitalize').attr("placeholder", "* " + email.attr("placeholder").replace('*', ''));
        phone.css('text-transform', 'capitalize').attr("placeholder", "* " + phone.attr("placeholder").replace('*', ''));
        company.css('text-transform', 'capitalize').attr("placeholder", "* " + company.attr("placeholder").replace('*', ''));

    }

    // If both operations are completed, clear interval
    if (label.length && firstnameField.length && lastnameField.length) {
        clearInterval(checkExist);
    }
}, 100);
