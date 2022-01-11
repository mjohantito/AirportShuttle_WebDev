<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password | Airport Shuttle</title>
    <link rel="stylesheet" href="css/newpassword.css">
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="/login">
    <div class="back-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </div>
    </a>
    <div class="ConfirmPassword">
        <form method="post" id="forgotPassword" action="/reset_data/{{$req->email}}">
            @csrf
            <div class ="fields">
                <img src="images/azhuu.png"/>
                <h2>Create New Password</h2>
                <h3>New Password</h3>
                <div class="fieldpass">
                    <input required type="password" name="pass" id="txtPass" placeholder="**********" required/>
                </div>
                <h3>Confirm New Password</h3>
                <div class="fieldpass">
                    <input required type="password" name="confirmpass" id="txtPass" placeholder="**********" required/>
                </div>

                <div class="continue">
                    <input type="submit" value="Continue"/>
                </div>
            </div>
            @if ($errors->any())
        <div class="alert">
            <h3>{{$errors->first()}}</h3>
        </div>
    @endif
    </div>
</body>
</html>
