<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" >
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
    <title>Forgot Password</title>
</head>
<body>
    <div class="back-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </div>
    <!-- Ganti new password, se bawah2nya  -->
    <div class="login"> 
        <div class="login-content">
            <img src="images/azhuu.png"/>
            <h2>New Password</h2>
            <form method="post" id="frmLogin" action="#">
                <div class="fields">
                    <h3>New Password</h3>
                    <div class="field email">
                        <input required type="password" name="newPass" id="txtNewPass" placeholder="**********" required />
                    </div>
                    <h3>Confirm Password</h3>
                    <div class="field pass">
                        <input required type="password" name="pass" id="txtConfirmNewPass" placeholder="**********" required/>
                    </div> 
                    
                    <div class="submit">
                        <input type="submit" value="Reset Password" />
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
