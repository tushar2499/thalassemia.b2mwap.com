$(document).ready(function() {
    $('#lottery-form').on('submit', function(e) {
        e.preventDefault();

        var mobile = $('#mobile').val();
        var terms = $('#terms').is(':checked');

        if (!mobile) {
            alert('Please enter your mobile number.');
            return;
        }

        // Basic mobile number validation (optional)
        // Bangladesh mobile numbers are 11 digits
        var bdMobileRegex = /^01[3-9]\d{8}$/;
        if (!bdMobileRegex.test(mobile)) {
             // For now just logging, as requirements didn't specify strict validation
             console.log("Mobile number format might be incorrect, but proceeding.");
             // alert("Please enter a valid Bangladesh mobile number (e.g., 017xxxxxxxx).");
             // return;
        }

        /*
        if (!terms) {
            alert('Please accept the Terms & Condition.');
            return;
        }
        */
        // Note: The image shows the checkbox unchecked.
        // Typically it is required, but I will just log for now unless required.

        console.log('Form submitted with Mobile:', mobile);
        alert('Purchase logic would go here.\nMobile: ' + mobile);
    });
});
