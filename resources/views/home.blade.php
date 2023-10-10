@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>

@endauth
@guest
@endguest
@endsection

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PPDB SMKN 1 SUBANG</title>
<link rel="icon" href="https://i.ibb.co/Tmnhr9F/l-OGO-smk-n-EGERI-1-s-UBANG-1.pngz">
<style>

body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
    background-color: white;
    justify-content: center;
    align-items: center;
    padding: 200px 50px 10px 90px;
}

.right {
  right: 0;
    background-color: white;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;

}

.centered {
 width: 500px;
 height: 500px;
  position: absolute;
  top: 50%;
  left: 50%;
  /* transform: translate(-50%, -50%); */
  /* text-align: center; */
}


.welcome {
  font-size: 70px;
  color: #A1C298;
}
.namaaplikasi{
font-size: 83px;
font-weight: bold;
color: #A1C298;
}
.p-text{
  font-size: 20px;
}

.buttonberanda {
    background: #A1C298;
    color: white;
    padding: 10px;
    border-radius: 5px;
    border: 0px;
    font-size: 20px;
    cursor: pointer;
    text-decoration: none;
}
.home {
  display: flex;
  justify-content: center;
    align-items: center;
}

.tulisan {
  width: 50%;
}

</style>
</head>
<body>

<div class="home">
  <div class="tulisan">
  <p class="welcome">Selamat datang di</p>
  <p class="namaaplikasi">PPDB SMKN 1 SUBANG</p>
  <p class="p-text">Selamat datang di website Penerimaan Peserta Didik Baru (PPDB) SMKN 1 SUBANG periode 2023/2024. <br>Website ini diperuntukan untuk admin mengolah data siswa peserta PPDB periode 2023/2024 yang diterima<br>di SMKN 1 SUBANG. Tentunya untuk masuk ke website ini diperlukan login terlebih dahulu, akun tersebut<br>telah disiapkan oleh pihak yang berwenang sehingga hanya orang-orang tertentu yang dapat mengakses<br>website ini.</p>
  <br>
  <a class="buttonberanda" href="{{ route('blog.index') }}">Lihat Data</a>
  <a class="buttonberanda" href="{{ route('login') }}">Masuk</a>

  </div>
 
  <a href=""><img src="https://i.ibb.co/vPTwSMt/High-School-amico-1.png" alt="High-School-amico-1" border="0" style="width:556px"></a>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#A1C298" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,144C384,149,480,235,576,224C672,213,768,107,864,106.7C960,107,1056,213,1152,245.3C1248,277,1344,235,1392,213.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>



</body>
</html>
