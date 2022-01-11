<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Profil</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <span class="logo">
            <img src="{{URL::asset('/assets/azhuu.png')}}" alt="" width="50%">
        </span>

        <span class="login">
            <div class="login-details">
                <a href="">
                    <div class="icon-login">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="login-text">Log In</div>
                </a>
            </div>
        </span>
    </div>

    <br><br><br><br><br><br><br><br><hr><br>

    <a href="">
        <div class="back-button">
            <i class="fas fa-arrow-circle-left"></i>
        </div>
    </a>

    <div class = "profil">
        <div class = "searchbox">
            <h1>Update Profil</h1>
            <br><br><br>
            <div class = "inputbox">
                <label for="fname">Name</label>
                <br>
                <input type="text" id="fname" name="mail" placeholder="Jocelyn Leora">
            </div>
            <div class = "inputbox">
                <label for="fname">Email</label>
                <br>
                <input type="email" id="mail" name="mail" placeholder="Jocelynl@Example.com">
            </div>
            <div class = "inputbox">
                <label for="fname">Phone Number</label>
                <br>
                <input type="number" id="notel" name="notel" placeholder="08xxxxxxxxxx">
            </div>
            <div class = "inputbox1">
                <br>
                <br>
                <input type="submit" value="save">
            </div>
        </div>
        <div class = "searchbox2">
            <h1>Update Password</h1>
            <br><br><br>
            <div class = "inputbox2">
                <label for="fname">Current Password</label>
                <br>
                <input type="password" id="password" name="password" placeholder="******">
            </div>
            <div class = "inputbox2">
                <label for="fname">New Password</label>
                <br>
                <input type="password" id="password" name="password" placeholder="******">
            </div>
            <div class = "inputbox2">
               <label for="fname">Confirm Password</label>
                <br>
                <input type="password" id="password" name="password" placeholder="******">
            </div>
            <div class = "inputbox1">
                <br>
                <br>
                <input type="submit" value="save">
            </div>
        </div>
    </div>

</body>
</html>
