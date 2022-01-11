<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/payment.css" />
    <script src="https://kit.fontawesome.com/af325f8c09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
<!------------------ header ----------s--------------------------->

<div class="header">
<!-----logo----->
<span class = "logo">
    <img src="/images/azhuu.png">
</span>
<!-------------->



<!-----navigasi----->

<ul class = "navie">
    <li><a href="/">Home</a></li>
    <li><a href="/about">About Us</a></li>
    <li><a href="/help">Help</a></li>
    <li><a href="/myorder">My Order</a></li>
    <li><i class="material-icons">person</i>
        <ul class="sub">
            <li><a href="/edit">Edit Profil</a></li>
            <li><a href="/logout">Log Out</a></li>
        </ul>
    </li>
</ul>
</div>
<a href="/">
    <div class="back-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </div>
    </a>
<!---------------------------->
        <div class="content">
            <div class="kiri">
                <div class="atas">
                    {{$posts[0]->POBUS_NAME}}<br/>
                    {{date('H:i', strtotime($posts[0]->RUTE_WAKTUBERANGKAT))}}<br/>
                    {{$posts[0]->AIRPORT_ID}} {{($posts[0]->RUTE_FROMTO == 'T') ? 'To' : 'From'}} {{$posts[0]->RUTE_HALTE}}<br/>
                    {{$posts[0]->V_JENIS}}<br/>
                </div>
                <div class="bawah">
                    Total Cost:<br/>
                    <div class="bold"> Rp {{number_format((($posts[0]->RUTE_PRICE)*$passanger),2,',','.')}}</div>
                </div>
            </div>
            <div class="kanan">
                <div class="isi">
                    <div class="bold" >Booker Name :</div>
                    {{$ambildata[0]->USER_NAME}}<br/>
                    <div class="bold" >Booker Email :</div>
                    {{$ambildata[0]->USER_EMAIL}}<br/>
                    <br/>
                    <div class="bold" >Passanger :</div>
                    @for ($i = 1; $i <= $passanger; $i++)
                        {{$i}}. {{$request->nama[$i]}} - {{$request->id[$i]}}<br/>
                    @endfor
                    <br/>
                    <div class="bold" >Payment Method :</div>
                    <form method="post" action="/checkout/{{$date}}/{{$passanger}}/{{$posts[0]->RUTE_ID}}/{{serialize($request->nama)}}/{{serialize($request->id)}}">
                        @csrf
                        <input type="radio" id="ATM" name="pmethod" value="ATM" required>
                        <label for="ATM">ATM</label><br>
                        <input type="submit" value="Checkout" class="submit"/>
                    </form>
                </div>
            </div>
        </div>
  </body>
  <span class = "logo2">
    <img src="/images/azhuu.png">
    </span>
    <footer>
      <span class="glyphicon glyphicon-phone"></span>
      <span>Call Center:o82314223<br>
      <span class="glyphicon glyphicon-envelope"></span>
      <span href="mailto:hege@example.com">Email:hege@example.com</span></span>
    </footer>
    <br>
</html>
