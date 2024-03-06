<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="header">
        <h1>Hello !</h1>
    </div>
    <div class="login-table">
        <div class="full_name">
            <input type="text" name="Full Name" id="Name" placeholder="Full Name">
        </div>
        <div class="email">
            <input type="text" name="Email" id="Email" placeholder="E-Mail">
        </div>
        <div class="submit_div">
            <input type="submit" value="Continue" class="submit_btn">
        </div>

        <div class="separator">or</div>

        <div class="social_google">
            <a href="" class="google-login social-login">
                <div style="margin-right: 40px;">
                    <i class="fab fa-google fa-10x"></i>
                </div>
                <div>
                    Continue with Google
                </div>
            </a>
            <a href="" class="fb-login social-login">
                <div style="margin-right: 40px;">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div>
                    Continue with Facebook
                </div>
            </a>
        </div>

        <div class="already-account">
            Already have an account? 
            <span><a
                    style="color: #68A45F;font-weight: 800;margin-left: 12px;text-decoration: none;"
                    href="google.com">
                        Log in
            </a></span>
        </div>
    </div>


</body>

</html>
