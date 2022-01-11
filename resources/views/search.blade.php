<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/search.css" />
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

<span class = "navie">
    <span><a href="/">Home</a></span>
    <span><a href="/about">About Us</a></span>
    <span><a href="/help">Help</a></span>
    <span class="multi-button">
        <a href="/login"><button class="btn1">Login</button></a>
        <a href="/regis"><button class="btn2">Register</button></a>
    </span>
</span>
</div>
<!---------------------------->
        <div class="search">
            <div class="info">
                <div class="infocontent">
                    <div class="infoleft">
                        <i class="fas fa-bus"></i>
                    </div>
                    <div class="inforight">
                        <div><h2>Bus Rute</h2></div>
                        {{$airport}}
                        <i class="far fa-circle"></i>
                        {{$fromto}}
                        <i class="far fa-circle"></i>
                        {{date('d/m/Y', strtotime($date))}}
                        <i class="far fa-circle"></i>
                        {{$passanger}} passanger
                    </div>
                </div>
            </div>
            <div class="button1">
                <form method="post" action="/home_page">
                @csrf
                <button type="submit">Change Search</button>
                </form>
            </div>
            <div class="content">
                <div class="left">
                    <div class="isileft">
                        <div class="bold">Filter<i class="fas fa-filter"></i></div>
                        <div class="bold">PO Bus</div>
                        <form action="/filter/{{$airport}}/{{$fromto}}/{{$date}}/{{$passanger}}" method="POST">
                            @csrf
                            <div class="checkbox">
                                @foreach ($bus as $daftarbus)
                                @php
                                    $checked = [];
                                    if(isset($_POST['filterbus']))
                                    {
                                        $checked = $_POST['filterbus'];
                                    }
                                @endphp
                                <input type="checkbox" name="filterbus[]" value="{{$daftarbus->POBUS_ID}}" @if(in_array($daftarbus->POBUS_ID, $checked)) checked @endif><label for="filterbus[]">{{$daftarbus->POBUS_NAME}}</label><br>
                                @endforeach
                            </div>
                            <div class="bold">Departure Time</div>
                            <div class="time">
                                <input type="time" name="appt" @if (isset($waktu->appt)) value="{{$waktu->appt}}" @else value="00:00" @endif>
                                <i class="fas fa-long-arrow-alt-right"></i>
                                <input type="time" name="appt2" @if (isset($waktu->appt2)) value="{{$waktu->appt2}}" @else value="23:59" @endif>
                            </div>
                            <div class="submit">
                                <input type="submit" value="Search" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <h4>Showing {{$posts->count()}} Best Rute</h4>
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <div class="rute">
                                <div class="kiri">
                                    <div class="judul">{{$post->POBUS_NAME}}</div>
                                    <div class="mid">
                                    <div class="waktu">{{date('H:i', strtotime($post->RUTE_WAKTUBERANGKAT))}}</div>
                                    <div class="panah">{{$post->AIRPORT_ID}} {{($post->RUTE_FROMTO == 'T') ? 'To' : 'From'}} {{$post->RUTE_HALTE}}</div>
                                    </div>
                                    {{$post->V_JENIS}}
                                </div>
                                <div class="kanan">
                                    Rp {{number_format(($post->RUTE_PRICE),2,',','.')}}<br/>
                                    Seat Available : 12<br/>
                                    <form method="get" action="/login">
                                        <button type="submit">Select</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="kosong"><p>No Route Found</p></div>
                    @endif
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
