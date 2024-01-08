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
        <li><a id="showSignup">Sign up</a></li>
        <li><a id="show-popup"> Login</a></li>
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
      <!-- <form id="loginForm" method="POST" action="../login.php">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
      </form> -->
      <form method="post" action="../register/login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit" name="login">Login</button>
      </form>
      <span class="close" id="close-login-popup">&times;</span>
    </div>
  </div>

  <div class="popup" id="signup-popup">
    <div class="popup-content">
      <h2>Sign Up</h2>
      <form method="post" action="../register/register.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit" name="signup">Sign Up</button>
      </form>
      <span class="close" id="close-signup-popup">&times;</span>
    </div>
  </div>
  <div class="container">
    <p class="welcome-text">SELAMAT DATANG<br> DI WEBSITE TJKT<br> SMK MUTU BANDONGAN</p>
  </div>
  </div>

  <!-- <div class="playlist">
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/5LgPsrGmbAmzPlYxEwDuCI?utm_source=generator" width="60%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  </div> -->
    <!-- Modal for invalid login -->
  <!-- <div class="modal" id="invalidModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Invalid Login</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Username or password is incorrect. Please sign up if you haven't registered.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> -->


  <script src="script.js"></script>
</body>

</html>