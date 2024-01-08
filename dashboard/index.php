<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MYTJKT|HOME</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/img/icon-topi.png">
</head>

<body>
  <header class="logo-web">
    <h2>MYTJKT</h2>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <!-- <li><a id="showSignup">Sign up</a></li> -->
        <li><a href="/www.MyTKJ/register/logout.php">logout</a></li>

      </ul>
    </nav>
  </header>

  <!-- <header>
    <nav>
      <div class="wrapper">
        <ul>
          <li><a href="/dashboard/index.html">Home</a></li>
          <li><a href="/login/signup.php">Sign up</a></li>
          <li><a id="show-popup"> Login</a></li>
        </ul>
      </div>
    </nav>
  </header> -->

  <div class="popup" id="login-popup">
    <div class="popup-content">
      <h2>Login</h2>
      <form>
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button type="submit">Login</button>
      </form>
      <span class="close" id="close-login-popup">&times;</span>
    </div>
  </div>

  <div class="popup" id="signup-popup">
    <div class="popup-content">
      <h2>Sign Up</h2>
      <form>
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button type="submit">Login</button>
      </form>
      <span class="close" id="close-signup-popup">&times;</span>
    </div>
  </div>
  <div class="container">
    <p class="welcome-text">SELAMAT DATANG<br> DI WEBSITE TJKT<br> SMK MUTU BANDONGAN</p>
  </div>
  </div>


  <script src="script.js"></script>
</body>

</html>