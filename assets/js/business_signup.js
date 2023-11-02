document.getElementById('registrationForm').addEventListener('submit', function (event) {
    let name = document.getElementById('name_id').value;
    let email = document.getElementById('email_id').value;
    let contact = document.getElementById('contact_id').value;
    let property = document.getElementById('property_id').value;
    // console.log(document.getElementById('property_id').value);
    let password = document.getElementById('password_id').value;
    let confirm_password = document.getElementById('confirm_password_id').value;

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

    if (!valid) {
        event.preventDefault();
    }

    if (valid) {
        let formData = new FormData(this); // Create a FormData object from the form

        fetch('http://localhost:8000/src/view/business_signup.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json()) // Assuming the server returns JSON
            .then(data => {
                // Handle the response from the server
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
});

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
// ----------------------------------------------for eye button ----------------------------------------------------------------------------------------------------------------
