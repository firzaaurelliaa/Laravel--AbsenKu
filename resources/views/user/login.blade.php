<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Admin - PPDB SMKN 1 SUBANG</title>
    <link rel="icon" href="https://i.ibb.co/Tmnhr9F/l-OGO-smk-n-EGERI-1-s-UBANG-1.pngz">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
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
}

.right {
    right: 0;
    background-color: #A1C298;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

/* TEXT KIRI */
.textdanp {
    padding: 50px 50px 10px 60px;
}

.text {
    color: black;
    font-size: 35px;
}

.p-text{
    color: black;
    font-size: 20px;
}

.p-form{
    color: black;
    font-size: 18px;
}

h1 {
font-size: 110px;
font-weight: bold;
color: #A1C298;
}

h2 {
    font-size: 70px;
    color: #A1C298;
}


/* KOTAK FORM */
.form {
width: 425px;
height: auto;
background: white;
padding: 30px;
border-radius: 20px;
}

.form .title { 
margin-bottom: 20px;
font-weight: 700;
font-size: 35px;
}

.form .input_wrap input {
    width: 100%;
    padding-top: 15px;
    padding-bottom: 15px;
    border: 1px solid transparent;
    font-size: 16px;
    border-radius: 3px;
}

.form .input_wrap .error_msg {
    font-size: 15px;
    margin-bottom: 5px;
    color: #f74040;
    display: none;
}

.button {
  background-color: #A1C298; /* Hijau */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #A1C298;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
}
</style>
<body>
    <section>
            <div class="split right">
                
                    <div class="form">
                        <div class="title">
                            Selamat Datang!
                            
                        </div>
                        <div>
                        @if(session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif
                       
                        <p class="p-form">Silahkan masukkan inputan dengan benar</p>
                                               
                            <form action="{{ route('login.action') }}" method="POST">
                            @csrf
                            <div class="input_wrap">
                            <div class="input_field">
                                <label>Nama pengguna <span class="text-danger"></span></label>
                                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                            </div>
                            <br>
                            <div class="input_field">
                                <label>Kata sandi <span class="text-danger"></span></label>
                                <input class="form-control" type="password" name="password" />
                            </div>
                            <br>
                            <div class="input_wrap">
                            <a href="{{route('blog.index')}}" class="button button3">MASUK</a>
                            </div>
                            
                            </div>
                            <br>
                            </form>
                         
                        </div>
                    </div>
                
            </div>
            <div class="split left">
                <div class="textdanp">
                <h1 class="text">Hai, admin!</h1>
                <p class="p-text">Selamat datang di website Penerimaan Peserta Didik Baru (PPDB) SMKN 1 SUBANG periode 2023/2024. <br> Website ini diperuntukan untuk admin mengolah data siswa peserta PPDB periode 2023/2024 yang diterima di SMKN 1 SUBANG. Tentunya untuk masuk ke website ini diperlukan login terlebih dahulu, yang dimana akun tersebut telah dipersiapkan oleh pihak yang berwenang sehingga hanya orang-orang tertentu yang dapat mengakses website ini. </p>
                </div>
                <center><a href=""><img src="https://i.ibb.co/vPTwSMt/High-School-amico-1.png" alt="High-School-amico-1" style="width:556px"></a></center>
            </div>
        
    </section>
</body>
</html>