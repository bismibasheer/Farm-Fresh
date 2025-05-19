<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Glassmorphism Login</title>
  <link rel="stylesheet" href="{{asset('Login/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <div class="form-box">
    <div class="form-value">
      <form action="{{route('adminlogin_process')}}" method="POST">
      @csrf
        <h2>Login</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="text" name="username" required>
          <label for="">Username</label>
          @error('username')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" required>
          <label for="">Password</label>
          @error('password')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
        </div>
        <div class="forget">
          <label>
            <input type="checkbox"> Remember me
          </label>
          <label>
            <a href="#">Forgot password?</a>
          </label>
        </div>
        <button>Log in</button>
        <div class="register">
          <p>Don't have a account ? <a href="{{asset('customerregister')}}">Register</a></p>
        </div>
      </form>
    </div>
  </div>
</section>
@if(session('Error'))
                  <script>
                    alert('{{session('Error')}}');
                    </script>
                    @endif

<!-- partial -->
  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</body>
</html>
