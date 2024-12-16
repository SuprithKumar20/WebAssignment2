$(document).ready(function () {
    // Form validation on submit
    $('#registrationForm').on('submit', function (e) {
        let valid = true;

        // Check if all required fields are filled
        $(this).find('input, textarea').each(function () {
            if ($(this).val().trim() === '') {
                valid = false;
                alert('Please fill out all fields.');
                return false; // Break the loop
            }
        });

        // Prevent form submission if invalid
        if (!valid) {
            e.preventDefault();
        }
    });
});
