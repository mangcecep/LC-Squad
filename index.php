<?php
session_start();

// Simple authentication (in production, use proper database and password hashing)
$valid_users = [
    'admin' => 'password123',
    'user' => 'user123'
];

$error_message = '';

if ($_POST) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $error_message = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <title>SARPRAS - Login</title>
  </head>
  <style>
    .login-page {
      background-color: transparent;
      display: grid;
      justify-items: center;
      align-items: start;
      width: 100vw;
    }

    .login-page .div {
      overflow: hidden;
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 1) 98%,
        rgba(136, 142, 148, 1) 98%
      );
      width: 1440px;
      height: 1034px;
      position: relative;
    }

    .login-page .overlap {
      position: absolute;
      width: 872px;
      height: 963px;
      top: -72px;
      left: 625px;
    }

    .login-page .overlap-group {
      position: absolute;
      width: 720px;
      height: 791px;
      top: 172px;
      left: 0;
    }

    .login-page .rectangle {
      position: absolute;
      width: 720px;
      height: 756px;
      top: 35px;
      left: 0;
      background-color: #bddbf1;
      border-radius: 50px;
      box-shadow: 0px 4px 12px #00000033;
    }

    .login-page .input-container {
      position: relative;
      width: 542px;
      margin-bottom: 40px;
    }

    .login-page .rectangle-2,
    .login-page .rectangle-3 {
      width: 100%;
      height: 65px;
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: 0px 4px 4px #00000040;
      border: none;
      outline: none;
      font-family: "Inter", Helvetica;
      font-size: 24px;
      color: #000000bf;
      padding: 20px;
      box-sizing: border-box;
    }

    .login-page .rectangle-3 {
      height: 70px;
    }

    .login-page .input-field::placeholder {
      color: #000000bf;
    }

    .login-page .label-text {
      position: absolute;
      top: 15px;
      left: 20px;
      font-family: "Inter", Helvetica;
      font-weight: 400;
      color: #000000bf;
      font-size: 24px;
      pointer-events: none;
      user-select: none;
    }

    .login-page .rectangle-4 {
      position: absolute;
      width: 222px;
      height: 87px;
      top: 620px;
      left: 249px;
      background-color: #005497;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-page .rectangle-4:hover {
      background-color: #003d73;
    }

    .login-page .text-wrapper-3 {
      position: absolute;
      top: 643px;
      left: 310px;
      font-family: "Inter", Helvetica;
      font-weight: 400;
      color: #ffffff;
      font-size: 32px;
      letter-spacing: 0;
      line-height: normal;
      user-select: none;
    }

    .login-page .group {
      position: absolute;
      width: 228px;
      height: 228px;
      top: 0;
      left: 250px;
    }

    .login-page .ellipse {
      position: absolute;
      width: 201px;
      height: 201px;
      top: 0;
      left: 671px;
      background-color: #005497;
      border-radius: 100.5px;
    }

    .login-page .rectangle-5 {
      position: absolute;
      width: 418px;
      height: 288px;
      top: 847px;
      left: -88px;
      background-color: #005497;
      border-radius: 74px;
      transform: rotate(180deg);
    }

    .login-page .overlap-2 {
      position: absolute;
      width: 482px;
      height: 343px;
      top: 191px;
      left: 80px;
    }

    .login-page .text-wrapper-4 {
      position: absolute;
      width: 479px;
      top: 0;
      left: 0;
      font-family: "Josefin Sans", Helvetica;
      font-weight: 400;
      color: #000000;
      font-size: 96px;
      letter-spacing: 0;
      line-height: normal;
    }

    .login-page .text-wrapper-5 {
      position: absolute;
      width: 479px;
      top: 120px;
      left: 3px;
      font-family: "Josefin Sans", Helvetica;
      font-weight: 400;
      color: #000000;
      font-size: 48px;
      letter-spacing: 0;
      line-height: normal;
    }

    .login-page .line {
      position: absolute;
      width: 435px;
      height: 1px;
      top: 102px;
      left: 0;
      object-fit: cover;
    }

    .login-page .error-message {
      position: absolute;
      top: 550px;
      left: 88px;
      width: 542px;
      background-color: #ff4444;
      color: white;
      padding: 10px 20px;
      border-radius: 10px;
      font-family: "Inter", Helvetica;
      font-size: 16px;
      text-align: center;
    }
  </style>
  <style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
    @import url("https://fonts.googleapis.com/css?family=Inter:400|Josefin+Sans:400");
    * {
      -webkit-font-smoothing: antialiased;
      box-sizing: border-box;
    }
    html,
    body {
      margin: 0px;
      height: 100%;
    }
    /* a blue color as a generic focus style */
    button:focus-visible {
      outline: 2px solid #4a90e2 !important;
      outline: -webkit-focus-ring-color auto 5px !important;
    }
    a {
      text-decoration: none;
    }
  </style>
  <body>
    <div class="login-page">
      <div class="div">
        <div class="overlap">
          <div class="overlap-group">
            <div class="rectangle"></div>

            <form method="POST" action="">
              <div class="input-container" style="position: absolute; top: 335px; left: 88px;">
                <input
                  type="text"
                  name="username"
                  class="rectangle-2 input-field"
                  placeholder="Username"
                  required
                />
                <div class="label-text"></div>
              </div>

              <div class="input-container" style="position: absolute; top: 459px; left: 88px;">
                <input
                  type="password"
                  name="password"
                  class="rectangle-3 input-field"
                  placeholder="Password"
                  required
                />
                <div class="label-text" style="top: 20px; left: 25px;"></div>
              </div>

              <button type="submit" class="rectangle-4 login-button">
                <div class=""><div class="label-text-center">LOGIN</div></div>
              </button>
            </form>

            <?php if ($error_message): ?>
              <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
            <?php endif; ?>

            <img
              class="group"
              src="https://c.animaapp.com/mfbursqboDFD0s/img/group-1.png"
            />
          </div>
          <div class="ellipse"></div>
        </div>
        <div class="rectangle-5"></div>
        <div class="overlap-2">
          <div class="text-wrapper-4">SARPRAS</div>
          <div class="text-wrapper-5">SMK PRAKARYA INTERNASIONAL</div>
          <img
            class="line"
            src="https://c.animaapp.com/mfbursqboDFD0s/img/line-10.svg"
          />
        </div>
      </div>
    </div>
  </body>
</html>
