<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Homepage - Admin Panel</title>
  </head>
  <style>
    .homepage {
  background-color: #bddbf1;
  display: grid;
  justify-items: center;
  align-items: start;
  width: 100vw;
  min-height: 100vh;
}

.homepage .div {
  background-color: #bddbf1;
  overflow: hidden;
  width: 1440px;
  min-height: 1024px;
  position: relative;
}

.homepage .div-2 {
  position: absolute;
  width: 1444px;
  height: 142px;
  top: 0;
  left: 0;
}

.homepage .overlap-group {
  position: relative;
  width: 1440px;
  height: 142px;
  background-color: #005497;
}

.homepage .text-wrapper {
  position: absolute;
  top: 39px;
  left: 139px;
  font-family: "Inter", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 50px;
  letter-spacing: 0;
  line-height: normal;
}

.homepage .text-wrapper-2 {
  position: absolute;
  top: 39px;
  left: 1136px;
  font-family: "Inter", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 50px;
  letter-spacing: 0;
  line-height: normal;
}

.homepage .group {
  position: absolute;
  width: 90px;
  height: 90px;
  top: 18px;
  left: 1317px;
}

.homepage .button-logo-home {
  position: absolute;
  width: 120px;
  height: 120px;
  top: 9px;
  left: 9px;
}

.homepage .button-barang {
  position: absolute;
  width: 279px;
  height: 293px;
  top: 253px;
  left: 164px;
}

.homepage .overlap {
  position: relative;
  width: 277px;
  height: 293px;
  border-radius: 11px;
}

.homepage .rectangle {
  position: absolute;
  width: 277px;
  height: 293px;
  top: 0;
  left: 0;
  background-color: #ffffff;
  border-radius: 11px;
  box-shadow: 5px 10px 10px #00000040;
}

.homepage .vector {
  position: absolute;
  width: 149px;
  height: 148px;
  top: 44px;
  left: 60px;
}

.homepage .text-wrapper-3 {
  position: absolute;
  top: 214px;
  left: 66px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 45px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.homepage .button-input {
  position: absolute;
  width: 279px;
  height: 293px;
  top: 253px;
  left: 602px;
}

.homepage .overlap-2 {
  position: relative;
  width: 277px;
  height: 293px;
  background-color: #ffffff;
  border-radius: 11px;
  box-shadow: 0px 10px 20px #00000040;
}

.homepage .img {
  position: absolute;
  width: 140px;
  height: 127px;
  top: 56px;
  left: 65px;
}

.homepage .text-wrapper-4 {
  position: absolute;
  top: 214px;
  left: 90px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 45px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.homepage .button-output {
  position: absolute;
  width: 279px;
  height: 293px;
  top: 253px;
  left: 1048px;
}

.homepage .group-2 {
  position: absolute;
  width: 168px;
  height: 168px;
  top: 25px;
  left: 51px;
}

.homepage .button-peminjaman {
  position: absolute;
  width: 279px;
  height: 293px;
  top: 620px;
  left: 825px;
}

.homepage .group-3 {
  position: absolute;
  width: 140px;
  height: 120px;
  top: 48px;
  left: 63px;
}

.homepage .text-wrapper-5 {
  position: absolute;
  top: 195px;
  left: 24px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 45px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.homepage .overlap-wrapper {
  position: absolute;
  width: 279px;
  height: 293px;
  top: 620px;
  left: 375px;
}

.homepage .overlap-3 {
  position: relative;
  width: 317px;
  height: 333px;
  top: -10px;
  left: -20px;
}

.homepage .button-history {
  position: absolute;
  width: 317px;
  height: 333px;
  top: 0;
  left: 0;
}

.homepage .vector-2 {
  position: absolute;
  width: 130px;
  height: 118px;
  top: 55px;
  left: 87px;
}

.homepage .text-wrapper-6 {
  position: absolute;
  top: 205px;
  left: 88px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 45px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

/* Content Area Styles */
.content-area {
  position: absolute;
  top: 180px;
  left: 50px;
  right: 50px;
  bottom: 50px;
  background-color: #ffffff;
  border-radius: 15px;
  padding: 30px;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
  overflow-y: auto;
}

/* Form Styles */
.form-container {
  background-color: #f8f9fa;
  padding: 25px;
  border-radius: 10px;
  margin-bottom: 30px;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
}

.form-container h2 {
  color: #005497;
  margin-bottom: 20px;
  font-size: 24px;
  font-weight: 600;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  font-weight: 500;
  color: #333;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 12px;
  border: 2px solid #e1e5e9;
  border-radius: 8px;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #005497;
  box-shadow: 0 0 0 3px rgba(0, 84, 151, 0.1);
}

/* Button Styles */
.btn-primary {
  background-color: #005497;
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #003d6b;
}

.btn-secondary {
  background-color: #6c757d;
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
  transition: background-color 0.3s ease;
}

.btn-secondary:hover {
  background-color: #545b62;
}

.btn-danger {
  background-color: #dc3545;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 6px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-danger:hover {
  background-color: #c82333;
}

.btn-success {
  background-color: #28a745;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 6px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-success:hover {
  background-color: #218838;
}

/* Table Styles */
.table-container {
  background-color: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
}

.table-container h2 {
  color: #005497;
  margin-bottom: 20px;
  font-size: 24px;
  font-weight: 600;
  padding: 0 20px;
}

.data-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.data-table thead {
  background-color: #005497;
  color: white;
}

.data-table th,
.data-table td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #e1e5e9;
}

.data-table th {
  font-weight: 600;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 0.5px;
}

.data-table tbody tr:hover {
  background-color: #f8f9fa;
}

.data-table tbody tr:nth-child(even) {
  background-color: #f8f9fa;
}

/* Alert Styles */
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border-radius: 8px;
  font-weight: 500;
}

.alert-success {
  background-color: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
}

.alert-error {
  background-color: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
}

/* Status Styles */
.status {
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 500;
  text-transform: uppercase;
}

.status.dipinjam {
  background-color: #fff3cd;
  color: #856404;
}

.status.dikembalikan {
  background-color: #d4edda;
  color: #155724;
}

/* Type Badge Styles */
.type-badge {
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 500;
  text-transform: uppercase;
}

.type-badge.input {
  background-color: #d4edda;
  color: #155724;
}

.type-badge.output {
  background-color: #f8d7da;
  color: #721c24;
}

.type-badge.peminjaman {
  background-color: #fff3cd;
  color: #856404;
}

/* Filter Styles */
.filter-container {
  background-color: #f8f9fa;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 30px;
}

.filter-form {
  display: flex;
  gap: 20px;
  align-items: end;
  flex-wrap: wrap;
}

.filter-form .form-group {
  margin-bottom: 0;
  min-width: 200px;
}

/* Text Utilities */
.text-muted {
  color: #6c757d;
  font-style: italic;
}

/* Responsive Design */
@media (max-width: 1200px) {
  .homepage .div {
    width: 100%;
    max-width: 1200px;
  }
  
  .content-area {
    left: 20px;
    right: 20px;
  }
}

@media (max-width: 768px) {
  .content-area {
    left: 10px;
    right: 10px;
    padding: 20px;
  }
  
  .filter-form {
    flex-direction: column;
    align-items: stretch;
  }
  
  .filter-form .form-group {
    min-width: auto;
  }
  
  .data-table {
    font-size: 12px;
  }
  
  .data-table th,
  .data-table td {
    padding: 8px 10px;
  }
}

  </style>
  <style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
@import url("https://fonts.googleapis.com/css?family=Inter:400|Teachers:400");
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
    <div class="homepage">
      <div class="div">
        <div class="div-2">
          <div class="div-2">
            <div class="overlap-group">
              <div class="text-wrapper">HOME</div>
              <div class="text-wrapper-2">ADMIN</div>
              <img class="group" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/group-1.png" />
            </div>
          </div>
          <a href="index.php">
            <img class="button-logo-home" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/button-logo-home.svg" />
          </a>
        </div>
        
        <a href="barang.php" class="button-barang">
          <div class="overlap">
            <div class="rectangle"></div>
            <img class="vector" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/vector-1.svg" />
            <div class="text-wrapper-3">Barang</div>
          </div>
        </a>
        
        <a href="input.php" class="button-input">
          <div class="overlap-2">
            <img class="img" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/group-14.png" />
            <div class="text-wrapper-4">Input</div>
          </div>
        </a>
        
        <a href="output.php" class="button-output">
          <div class="overlap-2">
            <img class="group-2" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/group-26.png" />
            <div class="text-wrapper-3">Output</div>
          </div>
        </a>
        
        <a href="peminjaman.php" class="button-peminjaman">
          <div class="overlap-2">
            <img class="group-3" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/group-10.png" />
            <div class="text-wrapper-5">Peminjaman</div>
          </div>
        </a>
        
        <a href="history.php" class="overlap-wrapper">
          <div class="overlap-3">
            <img class="button-history" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/button-history.png" />
            <img class="vector-2" src="https://c.animaapp.com/mfbvqgnwoRkbYk/img/vector.svg" />
            <div class="text-wrapper-6">History</div>
          </div>
        </a>
      </div>
    </div>
  </body>
</html>
