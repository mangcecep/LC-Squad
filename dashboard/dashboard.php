<?php
// Jika tombol logout ditekan, arahkan ke index.php
if (isset($_POST['logout'])) {
  // Bisa tambahkan session_destroy() di sini kalau kamu pakai login session
  // session_start();
  // session_destroy();
  header("Location: ../index.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Home - InventoryKu</title>
  </head>
  <body>
    <div class="homepage">
      <div class="group">
        <div class="rectangle"></div>
        <div class="text-wrapper">HOME</div>
        <div class="div">ADMIN</div>
        <img class="img" src="https://c.animaapp.com/mgh8h50zy1vLit/img/group-1.png" id="profileBtn" />
      </div>
      
      <!-- Profile Popup -->
      <div id="profilePopup" class="profile-popup">
        <div class="popup-content">
          <div class="popup-header">
            <h2>Admin Profile</h2>
            <span class="close-btn" id="closePopup">&times;</span>
          </div>
          <div class="popup-body">
            <img class="popup-avatar" src="https://c.animaapp.com/mgh8h50zy1vLit/img/group-1.png" alt="Admin Avatar" />
            <p class="admin-name">Administrator</p>
            <p class="admin-email">admin@example.com</p>
          </div>
          <form method="POST" style="margin:0;">
          <button class="logout-btn" name="logout" type="submit" id="logoutBtn">Log Out</button>
         </form>
        </div>
      </div>
      <div class="button-barang">
        <div class="rectangle-2"></div>
        <img class="vector" src="https://c.animaapp.com/mgh8h50zy1vLit/img/vector.svg" />
        <div class="text-wrapper-2">Barang</div>
      </div>
      <div class="button-input">
        <div class="div-2"></div>
        <img class="group-2" src="https://c.animaapp.com/mgh8h50zy1vLit/img/group-14.png" />
        <div class="text-wrapper-3">Input</div>
      </div>
      <div class="button-output">
        <div class="div-2"></div>
        <img class="group-3" src="https://c.animaapp.com/mgh8h50zy1vLit/img/group-26.png" />
        <div class="text-wrapper-2">Output</div>
      </div>
      <div class="button-peminjaman">
        <div class="div-2"></div>
        <img class="group-4" src="https://c.animaapp.com/mgh8h50zy1vLit/img/group-10.png" />
        <div class="text-wrapper-4">Peminjaman</div>
      </div>
      <div class="group-5">
        <img class="button-history" src="https://c.animaapp.com/mgh8h50zy1vLit/img/button-history.png" />
        <img class="vector-2" src="https://c.animaapp.com/mgh8h50zy1vLit/img/vector-1.svg" />
        <div class="text-wrapper-5">History</div>
      </div>
      <a href="index.html"
        ><img class="button-logo-home" src="https://c.animaapp.com/mgh8h50zy1vLit/img/button-logo-home.svg"
      /></a>
    </div>
    <script src="script.js"></script>
  </body>
</html>