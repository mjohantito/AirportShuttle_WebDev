<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" >
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
    <title>Halaman Login</title>
</head>
<body>
    <div></div>
    <div class="back-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </div>
    <div class="login">
        <div class="login-content">
            <img src="images/azhuu.png"/>
            <h2>Login</h2>
            <form method="post" id="frmLogin" action="#">
                <div class="fields">
                    <h3>Email</h3>
                    <div class="field email">
                        <input type="email" name="email" placeholder="Example@mail.com" required />
                    </div>
                    <h3>Password</h3>
                    <div class="field pass">
                        <input required type="password" name="pass" id="txtPass" placeholder="**********" required/>
                    </div>
                    <div class="forgot">
                        <a href="forgotPassword">Forgot Password?</a>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Login" />
                    </div>
                </div>
            </form>
            <div class="underline">
                <div class="u1"></div>
                <h4>New to AZHUU?</h4>
                <div class="u2"></div>
            </div>
            <div class="regis">
                <a href="#">Create your AZHUU account</a>
            </div>
        </div>
    </div>
</body>
</html>
