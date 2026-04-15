<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="login-content">
                <h1>Welcome</h1>
                <p class="subtitle">please enter your details</p>

                <div class="social-login">
                    <button class="social-btn"><i class="fab fa-google" style="color: #DB4437;"></i></button>
                    <button class="social-btn"><i class="fab fa-facebook-f" style="color: #4267B2;"></i></button>
                    <button class="social-btn"><i class="fab fa-apple"></i></button>
                </div>

                <div class="divider">
                    <span>or</span>
                </div>

                <form action="register_proses.php" method="POST">

                    <div class="input-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="">
                    </div>

                    <div class="input-group">
                        <label>Email Address</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>

                    <div class="options">
                        <label class="remember-me">
                            <input type="checkbox"> Remember me
                        </label>
                        <a href="#" class="forgot-pass">Forgot Password?</a>
                    </div>

                    <button type="submit" name="register" class="sign-in-btn">Sign Up</button>
                </form>

                <p style="text-align: center; margin-top: 15px;">
                    Sudah punya akun? 
                    <a href="login.php" style="color: gold; text-decoration: none;">
                        <b>Masuk di sini</b>
                    </a>
                </p>
                
                <p class="terms">
                    By continuing, you agree to uptech <a href="#">Terms of service</a> and <a href="#">Privacy Policy</a>
                </p>
            </div>
        </div>

        <div class="image-section"></div>
    </div>
</body>
</html>
