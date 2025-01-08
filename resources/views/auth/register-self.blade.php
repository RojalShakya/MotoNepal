<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{url('/backend/style.css')}}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  </head>
  <body>

      <div class="wrapper">
                    <div class="form-box login">
                        <h2>Registration</h2>
                <form action="" method="">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" >
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" >
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <Label>
                            <input type="checkbox" >Remember Me</Label>
                            <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn" >Login</button>
                    <div class="login-register">
                        <p>Don't Have an Account?<a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
        </div>

      </div>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
