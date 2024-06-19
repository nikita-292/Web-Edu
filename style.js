

function validateLoginForm() {
    var email = document.getElementById('login-email').value.trim();
    var password = document.getElementById('login-password').value.trim();
    var emailError = document.getElementById('login-email-error');
    var passwordError = document.getElementById('login-password-error');

    // Reset previous error messages
    emailError.textContent = '';
    passwordError.textContent = '';

    // Validate email
    if (email === '') {
        emailError.textContent = 'Please enter your email';
        return false;
    } else if (!isValidEmail(email)) {
        emailError.textContent = 'Please enter a valid email address';
        return false;
    }

    // Validate password
    if (password === '') {
        passwordError.textContent = 'Please enter your password';
        return false;
    }

    // Add more validation as needed

    // Form is valid, continue with submission
    return true;
}


function validateSignupForm() {
    var username = document.getElementById('signup-username').value.trim();
    var email = document.getElementById('signup-email').value.trim();
    var password = document.getElementById('signup-password').value.trim();
    var confirmPassword = document.getElementById('confirm-password').value.trim();
    var usernameError = document.getElementById('signup-username-error');
    var emailError = document.getElementById('signup-email-error');
    var passwordError = document.getElementById('signup-password-error');
    var confirmPasswordError = document.getElementById('confirm-password-error');

    // Reset previous error messages
    usernameError.textContent = '';
    emailError.textContent = '';
    passwordError.textContent = '';
    confirmPasswordError.textContent = '';

    // Validate username
    if (username === '') {
        usernameError.textContent = 'Please enter a username';
        return false;
    }

    // Validate email
    if (email === '') {
        emailError.textContent = 'Please enter your email';
        return false;
    } else if (!isValidEmail(email)) {
        emailError.textContent = 'Please enter a valid email address';
        return false;
    }

    // Validate password
    if (password === '') {
        passwordError.textContent = 'Please enter a password';
        return false;
    }

    // Validate confirm password
    if (confirmPassword === '') {
        confirmPasswordError.textContent = 'Please confirm your password';
        return false;
    }

    // Validate if password matches confirm password
    if (password !== confirmPassword) {
        confirmPasswordError.textContent = 'Passwords do not match';
        return false;
    }

    // Add more validation as needed

    // Form is valid, continue with submission
    return true;
}

function isValidEmail(email) {
    // Regular expression for email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}


