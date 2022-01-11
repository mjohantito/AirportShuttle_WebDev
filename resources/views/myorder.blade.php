<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/myorder.css" />
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
            <div class="judul"><h3>My Order</h3></div>
            <div class="kiri">
                <div class="isi">
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <div class="isi2">
                                <div class="bus">{{$post->POBUS_NAME}}</div>
                                <div class="mid">
                                <div class="waktu">{{date('H:i', strtotime($post->RUTE_WAKTUBERANGKAT))}}</div>
                                <div class="panah">{{$post->AIRPORT_ID}} {{($post->RUTE_FROMTO == 'T') ? 'To' : 'From'}} {{$post->RUTE_HALTE}}</div>
                                </div>
                                {{$post->V_JENIS}}
                                <form method="post" action="/detail/{{$post->TP_BOOKINGID}}">
                                    @csrf
                                    <button type="submit" class="submit">Detail</button>
                                </form>
                            </div>
                        @endforeach
                    @else
                        <div class="kosong"><p>No Order Found</p></div>
                    @endif
                </div>
            </div>
            <div class="kanan">
                <div class="bold">Order Detail</div>
                @if (isset($detail))
                    <div class="atas">
                        <div class="left">
                            <div class="cost">
                                Total Cost<br/>
                                Rp {{number_format(($detail[0]->TP_TOTALPRICE),2,',','.')}}
                            </div>
                            <p>{{date('d, M Y', strtotime($detail[0]->TP_TANGGALBOOKING))}}</p>
                            <div class="rute">
                                <div class="rute1">
                                    {{date('H:i', strtotime($detail[0]->RUTE_WAKTUBERANGKAT))}}
                                </div>
                                <div class="rute2">
                                    <i class="fas fa-i-cursor"></i>
                                </div>
                                <div class="rute3">
                                    {{$detail[0]->AIRPORT_ID}}<br/>
                                    {{($detail[0]->RUTE_FROMTO == 'T') ? 'To' : 'From'}}<br/>
                                    {{$detail[0]->RUTE_HALTE}}
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="booking">
                                Booking ID <br/>
                                {{$detail[0]->TP_BOOKINGID}}
                            </div>
                            <div class="payment">
                                Payment Date <br/>
                                {{date('d, M Y', strtotime($detail[0]->TP_TANGGALTRANSKSI))}}
                            </div>
                        </div>
                    </div>
                    <div class="bawah">
                        Passanger
                        <table border="1">
                            <tr>
                                <th>Passanger Name</th>
                                <th>Passanger NIK</th>
                            </tr>
                            @foreach ($penumpang as $penum)
                            <tr>
                                <td>{{$penum->P_NAMA}}</td>
                                <td>{{$penum->P_NIK}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                @endif
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
