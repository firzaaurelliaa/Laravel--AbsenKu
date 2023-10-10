<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>


</head>
<style>
    * {
    margin: 0;
    padding: 0;
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

.button {
    background: #A1C298;
    color: white;
    padding: 10px;
    border-radius: 5px;
}

.button:hover {
    background: #A1C298;
    color: white;
    padding: 10px;
    border-radius: 5px;
    
  }
  
a {
    font-size: 16px;
    text-decoration: none;
}

.intro-text {
    width: 50%;
    height: 350px;
    justify-content: center;
    align-items: center;
}

.intro-text p {
    color: #A1C298;
    font-size: 18px;
}

.intro-img {
    width: 50%;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.signin-text {
    width: 50%;
    height: auto;
    background-color: white;
    justify-content: center;
    align-items: center;
}

.signin-text h2 {
    color: black;
    font-size: 24px;
}

.signin-text p {
    color: grey;
    font-size: 18px;
}

.signin-inputan {
    height: 100%;
    background-color: #A1C298;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

.signin-inputan .kotakinputan {
   width: 506px;
   height: auto;
   background-color: white;
   border-radius: 20px;
}

.signin-inputan .kotakinputan h1 {
    color: black;
    font-weight: bold;
    font-size: 35px;
}

.signin-inputan .kotakinputan p {
    color: grey;
    font-size: 18px;
}

.buttoninputan {
    background: #A1C298;
    color: white;
    padding: 10px;
    border-radius: 5px;
    width: 100%;
    border: 0px;
    font-size: 20px;
    cursor: pointer;
}

.buttoninputan:hover {
    background: #A1C298;
    color: white;
    padding: 10px;
    border-radius: 5px;
}

.wrapper {
    min-width: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form {
width: 425px;
height: auto;
background: white;
padding: 30px;
border-radius: 20px;
}

.form-control {
    
}

.form .title { 
margin-bottom: 20px;
font-weight: 700;
font-size: 35px;
}

.form .input_wrap {
    margin-bottom: 20px;
    position: relative;
}

.form .input_wrap:last-child {
    margin-bottom: 0;
}

.form .input_wrap label {
    display: block;
    margin-bottom: 5px;
}

.form .input_wrap input {
    width: 100%;
    padding-top: 15px;
    padding-bottom: 15px;
    border: 1px solid transparent;
    font-size: 16px;
    border-radius: 3px;
    background: red;
}

.form .input_wrap .input {
    background: #d9d9d9;
    width: 393px;
    border-radius: 10px;
}

.form .input_wrap .input:focus {
    background: #d4d4d4;
    border-radius: 10px;
}

.form .input_wrap .input_field {
}

.form .input_wrap .error_msg {
    font-size: 15px;
    margin-bottom: 5px;
    color: #f74040;
    display: none;
}
 .form .input_wrap .btn {
    text-transform: uppercase;
    letter-spacing: 3px;
    color: white;
    background-color: #A1C298;
    cursor: pointer;
    border-radius: 10px;
 }
</style>
<body>
    <section>
 
        <div style="display : flex;">
            <div class="signin-text">
                <h2>Selamat datang, lorem ipsum!</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <!-- <img src="assets/images/amico.png" alt=""> -->
            </div>
            <div class="signin-inputan">
                <div class="wrapper">
                    <div class="form">
                        <div class="title">
                           Selamat Datang!
                            
                        </div>
                        <div>
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif
                        <p>Silahkan masukkan inputan dengan benar</p>                        
                        <form action="{{ route('register.action') }}" method="POST">
                        @csrf
                        <div class="input_wrap">
                        <div class="input_field">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" />
                        </div>
                        <br>
                        <div class="input_field">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="username" name="username" />
                        </div>
                        <br>
                        <div class="input_field">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" />
                        </div>
                        <br>
                        <div class="input_field">
                            <label>Password Confirmation<span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password_confirm" />
                        </div>
                        <br>
                        <div class="input_wrap">
                            <button class="buttoninputan">Register</button>
                        </div>
                        <br>
                        </div>
                        </form>
                            <center><p>Don't have an account?  <a href="{{ route('login') }}">Login</a></p></center>
                           <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</body>
</html>


