<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Registrasi</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="registration-section">

        <div class="header">
            <span class="logo">
                <img src="{{URL::asset('/assets/azhuu.png')}}" alt="" width="50%">
            </span>

            <span class="login">
                <div class="login-details">
                    <i class='bx bxs-user-circle'></i>
                    <div class="login-text">Log In</div>
                </div>
            </span>
        </div>

        <br><br><br><br><br><br><hr>

        <div class="back-button">
            <i class="fas fa-arrow-circle-left"></i>
        </div>

        <div class="registration-content">
            <span class="pict">
              <img class="foto" src="{{URL::asset('/assets/pict1.png')}}" alt="" width="50%">
            </span>

            <span class="registration-text">
                <div class="judul">
                    <img src="{{URL::asset('/assets/azhuu.png')}}" alt="" width="70%">
                    <h1>Registrasi</h1>
                </div>
                <div class="kiri">
                    <p>
                        <label>Email</label>
                        <div class="field email">
                            <input type="email" name="email" placeholder="example@gmail.com" />
                        </div>
                    </p>
                    <p>
                        <label>Tanggal Lahir</label>
                        <div class="field tgl">
                            <input type="date" name="tanggal" />
                        </div>
                    </p>
                    <p>
                        <label>No Telp</label>
                        <div class="field tlp">
                            <input type="text" name="telp" placeholder="08xxxxxxxxxx" />
                        </div>
                    </p>
                </div>
                <div class="kanan">
                    <p>
                        <label>Nama</label>
                        <div class="field nama">
                            <input type="text" name="nama" placeholder="Jocelyn Leora" />
                        </div>
                    </p>
                    <p>
                        <label>Password</label>
                        <div class="field password">
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                    </p>
                </div>
                <div class="button-register">
                    <input type="submit" value="Daftar" />
                </div>
          </span>
        </div>

    </section>
</body>
</html>
