
/* Sending Email from Contact Section */
(function () {
    emailjs.init("YXYAUuDxQ_eEt87w7"); // Replace YOUR_USER_ID with your EmailJS user ID
})();

function sendmail() {
    let fullName = document.getElementById("name").value;
    let userEmail = document.getElementById("email").value;
    let button = document.querySelector(".button"); // Select the button element

    var contactParams = {
        to_name: fullName,
        to_email: userEmail
    };

    emailjs.send('service_28tal6g', 'template_ipox67q', contactParams)
    .then(function (res) {
        // On successful email sending, change button text to "Done" and disable the button
        button.textContent = "Done!!!";
        button.disabled = true;
    }, function (error) {
        // Handle any errors if needed
        console.error('Failed to send email. Error:', error);
    });
}
