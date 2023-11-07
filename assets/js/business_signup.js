document.getElementById('registrationForm').addEventListener('submit', function (event) {
    let name = document.getElementById('name_id').value;
    let email = document.getElementById('email_id').value;
    let contact = document.getElementById('contact_id').value;
    let property = document.getElementById('property_id').value;
    // console.log(document.getElementById('property_id').value);
    let password = document.getElementById('password_id').value;
    let confirm_password = document.getElementById('confirm_password_id').value;
    event.preventDefault();
    let valid = true;

    if (name.trim() === '') {
        valid = false;
        document.getElementById('name_error').textContent = 'Name is required.';
    }

    if (property.trim() === '') {
        valid = false;
        document.getElementById('property_error').textContent = 'Property is required.';
    }
    if (email.trim() === '') {
        valid = false;
        document.getElementById('email_error').textContent = 'Email is required.';
    }
    else if (!validateEmail(email)) {
        valid = false;
        document.getElementById('email_error').textContent = 'Invalid email format.';
    }

    if (contact.trim() === '') {

        valid = false;
        document.getElementById('contact_error').textContent = 'Contact is required.';
    }
    else if (!validateContact(contact)) {
        valid = false;
        document.getElementById('contact_error').textContent = 'Invalid contact number format.';


    }
    else if (!validateContact(contact)) {
        valid = false;
        document.getElementById('contact_error').textContent = 'Invalid contact number format.';
    }




    if (password.trim() === '') {
        valid = false;
        document.getElementById('password_error').textContent = 'Password is required.';
    }
    else if (!validatePassword(password)) {
        valid = false;

        document.getElementById('password_error').textContent = 'Invalid password format.';
    }

    if (confirm_password.trim() === '') {
        valid = false;
        document.getElementById('confirm_password_error').textContent = 'Password is required.';
    }
    else if (confirm_password !== password) {
        valid = false;
        document.getElementById('confirm_password_error').textContent = 'Passwords do not match.';

    }





<<<<<<< HEAD
    // if (valid) {
    //     let formData = new FormData(this); // Create a FormData object from the form

    //     fetch("http://localhost:8000/src/view/business_signup_.php", {
    //         method: 'POST',
    //         body: formData
    //     })
    //         .then(response => response.json()) // Assuming the server returns JSON
    //         .then(data => {
    //             // Handle the response from the server
    //             console.log(data);
    //             // window.location.href('')
    //         })
    //         .catch(error => {
    //             console.error('Error:', error);
    //         });
    // }
=======
    if (valid) {

        let formData = new FormData(this);

        $.ajax({
            url: 'http://localhost:8000/src/view/business_signup.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                // Handle the response data
                console.log(data);
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error('Error:', error);
            }
        });
    };

    function validateEmail(email) {
        // Regular expression for email validation
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    function validateContact(contact) {
        // Regular expression for contact number validation
        let contactPattern = /^\d{10}$/;
        return contactPattern.test(contact);

    }

    function validatePassword(password) {
        // Regular expression for password validation
        let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return passwordPattern.test(password);
    }


>>>>>>> refs/remotes/origin/main
});


$(document).ready(function () {
    $('#userRegister').submit(function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Reset all previous error messages
        $('.error').text('');

        let name = $('#name').val().trim();
        let email = $('#email').val().trim();
        let contact = $('#contact').val().trim();
        let password = $('#password').val().trim();
        let confirm_password = $('#confirm_password').val().trim();

        let valid = true;

        if (name === '') {
            valid = false;
            $('#name_error').text('Name is required.');
        }

        if (email === '') {
            valid = false;
            $('#email_error').text('Email is required.');
        } else if (!validateEmail(email)) {
            valid = false;
            $('#email_error').text('Invalid email format.');
        }

        if (contact === '') {
            valid = false;
            $('#contact_error').text('Contact is required.');
        } else if (!validateContact(contact)) {
            valid = false;
            $('#contact_error').text('Invalid contact number format.');
        }

        if (password === '') {
            valid = false;
            $('#password_error').text('Password is required.');
        } else if (!validatePassword(password)) {
            valid = false;
            $('#password_error').text('Invalid password format.');
        }

        if (confirm_password === '') {
            valid = false;
            $('#confirm_password_error').text('Confirm password is required.');
        } else if (confirm_password !== password) {
            valid = false;
            $('#confirm_password_error').text('Passwords do not match.');
        }

        if (valid) {
            $(document).ready(function () {
                $('#userRegister').submit(function (event) {
                    event.preventDefault();

                    $('.error').text('');

                    let formData = $('#userRegister').serialize();

                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost:8000/src/view/user_signup.php',
                        data: formData,
                        dataType: 'json',
                        success: function (response) {
                            if (response === "Form submitted successfully!") {
                                alert("Form submitted successfully!");
                            } else {
                                // Handle errors returned from PHP
                                $.each(response, function (key, value) {
                                    $('#' + key + '_error').text(value);
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            // Handle errors
                            console.error('Error:', error);
                        }
                    });
                });
            });
        }
    })
    // Validation functions
    function validateEmail(email) {
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    function validateContact(contact) {
        let contactPattern = /^\d{10}$/;
        return contactPattern.test(contact);
    }

    function validatePassword(password) {
        let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return passwordPattern.test(password);
    }
})

<<<<<<< HEAD
function validatePassword(password) {
    // Regular expression for password validation
    let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return passwordPattern.test(password);
}
// ----------------------------------------------for eye button ----------------------------------------------------------------------------------------------------------------
function togglePassword(inputId) {
    const inputElement = document.getElementById(inputId);
    const eyeElement = document.getElementById(inputId + '_eye');

    if (inputElement.type === 'password') {
        inputElement.type = 'text';
        eyeElement.innerHTML = '👁️';
    } else {
        inputElement.type = 'password';
        eyeElement.innerHTML = '👁️';
    }
}
=======
>>>>>>> refs/remotes/origin/main
