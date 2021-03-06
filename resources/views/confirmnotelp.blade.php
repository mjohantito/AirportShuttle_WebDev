<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm No Telp | Airport Shuttle</title>
    <link rel="stylesheet" href="css/confirmnotelp.css">
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="/login">
    <div class="back-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </div>
    </a>
    <div class="Confirmnotelp">
        <form method="post" id="forgotPassword" action="/confirmtelp/{{$email}}/{{$reqq->pass}}">
            @csrf
            <div class ="fields">
                <img src="images/azhuu.png"/>
                <h2>Confirm Your Phone Number</h2>
                <h3>Phone Number</h3>
                <div class="fieldtelp">
                    <input type="tel" id="phone" name="confirmnotelp" pattern="[0-9]{12}" placeholder="081345678910 (max 12 digit)" required/>
                </div>
                <div class="continue">
                    <input type="submit" value="CONTINUE"/>
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
