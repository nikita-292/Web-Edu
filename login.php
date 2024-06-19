
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<style>
    .hidden {
        display: none;
    }
</style>

<body>
    <div class="overlay" id="overlay"></div>
    <div class="popup-container" id="popup">
        <div class="login-container" id="login-container">
            <div class="welcome-login-text">
                <h3>Welcome back to </h3>
                <h1 class="xxx">Edu-Star</h1>
            </div>
            <div class="login-google">
                <a href="gmail">Sign in with Google <i class="fa-brands fa-google"></i></a>
            </div>
            <div class="login-email">
                <p>........Or login with your email........</p>
            </div>
            <form action="login_data.php" method="post" id="login-form">
                <div class="input-taking-mail">
                    <input type="text" placeholder="john@gmail.com" name="login_email" id="login-email" value="">
                    <span class="error-message" id="login-email-error" style="color: #ef061d; font-size: smaller;"></span>
                </div>
                <div class="input-taking-pass">
                    <input type="password" placeholder="*****" name="login_password" id="login-password" value="">
                    <span class="error-message" id="login-password-error" style="color: #ef061d; font-size: smaller;"></span>
                </div>
                <div class="forgot-pass">
                    <h4 class="forgot-create">Forgot Password?</h4>
                </div>
                <div class="login-btn">
                    <input type="submit" value="Login" name="login" onclick="validateLoginForm()">
                </div>
            </form>
            <div class="no-account">
                <p>Don't you have an account?</p>
                <h4 class="forgot-create"><a href="#" onclick="funcSignup()">Create account</a></h4>
            </div>

        </div>
        <div class="signup-container hidden" id="signup-container">
            <div class="welcome-login-text">
                <h3>Ready to Begin Your Journey </h3>
                <h1 class="xxx">Edu-Star</h1>
            </div>
            <div class="login-google">
                <a href="gmail">Sign in with Google <i class="fa-brands fa-google" style="color: #ef061d;"></i></a>
            </div>
            <div class="login-email">
                <p>--------Or, sign up with--------</p>
            </div>
            <form action="login_data.php" method="post" id="signup-form">
                <div class="input-taking-username">
                    <input type="text" placeholder="Username" name="signup_username" id="signup-username" value="">
                    <span class="error-message" id="signup-username-error" style="color: #ef061d; font-size: smaller;"></span>
                </div>
                <div class="input-taking-mail">
                    <input type="email" placeholder="john@gmail.com" name="signup_email" id="signup-email" value="">
                    <span class="error-message" id="signup-email-error" style="color: #ef061d; font-size: smaller;"></span>
                </div>
                <div class="flex">
                    <div class="input-taking-pass">
                        <input type="password" placeholder="*****" name="signup_password" id="signup-password" value="">
                        <span class="error-message" id="signup-password-error" style="color: #ef061d; font-size: smaller;"></span>
                    </div>
                    <div class="input-taking-pass">
                        <input type="password" placeholder="Confirm Password" id="confirm-password" value="">
                        <span class="error-message" id="confirm-password-error" style="color: #ef061d; font-size: smaller;"></span>
                    </div>
                </div>
                <div class="login-btn">
                    <input type="submit" value="Verify and Sign up" name="signup" >
                    <!-- onclick="validateSignupForm()"> -->
                </div>
            </form>
            <div class="no-account">
                <p>Already have an account?</p>
                <a href="#" onclick="funcLogin()">Sign In</a>
            </div>

        </div>
    </div>
    <script src="https://kit.fontawesome.com/7ea5bdaf01.js" crossorigin="anonymous"></script>
    <!-- <script src="validation.js"></script> Include separate JavaScript file -->
</body>

</html>
