document.getElementById('registrationForm').addEventListener('submit', function (event) {
    let name = document.getElementById('name_id').value;
    let email = document.getElementById('email_id').value;
    let contact = document.getElementById('contact_id').value;
    let property = document.getElementById('property_id').value;
    let password = document.getElementById('password_id').value;
    let confirm_password = document.getElementById('confirm_password_id').value;

    let valid = true;

    if (name.trim() === '') {
        valid = false;
        alert('Name is required.');
    }

    if (property.trim() === '') {
        valid = false;
        alert('Property is required.');
    }

    if (email.trim() === '' || !validateEmail(email)) {
        valid = false;
        alert('Invalid email format.');
    }

    if (contact.trim() === '' || !validateContact(contact)) {
        valid = false;
        alert('Invalid contact number format.');
    }

    if (password.trim() === '' || !validatePassword(password)) {
        valid = false;
        alert('Invalid password format.');
    }

    if (confirm_password.trim() === '' || confirm_password !== password) {
        valid = false;
        alert('Passwords do not match.');
    }

    if (!valid) {
        event.preventDefault();
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
