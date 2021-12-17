<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Airport Shuttle</title>
    <link rel="stylesheet" href="css/profile.css">
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="back-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </div>
    <div class="profile">
        <h2>User Profile</h3>
        
    </div>
    <div class="Profile">
        <form method="post" id="forgotPassword" action="/confirmnotelp">
            @csrf
            
            <div class ="fields">
                <h2>Update Profile</h2>
                <h3>Name</h3>
                <div class="fieldname">
                    <input required type="text" name="name" id="profileName" required/>
                </div>
                <h3>Email</h3>
                <div class="fieldemail">
                    <input type="email" name="email" placeholder="Example@mail.com" required/>
                </div>
                <h3>Phone Number</h3>
                <div class="fieldtelp">
                    <input type="tel" id="phone" name="confirmnotelp" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" placeholder="081345678910" required/>
                </div>

                <div class="save">
                    <input type="save" value="Save"/>
                </div>
            </div>
            <div class ="fields">
                <h2>Update Password</h2>
                <h3>Current Password</h3>
                <div class="fieldpasscurrent">
                    <input required type="password" name="pass" id="txtPass" placeholder="**********" required/>
                </div>
                <h3>New Password</h3>
                <div class="fieldpassnew">
                    <input required type="password" name="pass" id="txtPass" placeholder="**********" required/>
                </div>
                <h3>Confirm New Password</h3>
                <div class="fieldpassconfirm">
                    <input required type="password" name="confirmpass" id="txtPass" placeholder="**********" required/>
                </div>

                <div class="update">
                    <input type="submit" value="Update"/>
                </div>
            </div>
    </div>
</body>
</html>