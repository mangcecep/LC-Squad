<?php
// Sample data - in a real application, this would come from a database
$historyData = [
    ['id' => 1, 'nama_barang' => 'BAJU MARCHING', 'tanggal_masuk' => '17-08-1945', 'tanggal_keluar' => '17-08-2025'],
    ['id' => 2, 'nama_barang' => 'SEPATU OLAHRAGA', 'tanggal_masuk' => '20-08-1945', 'tanggal_keluar' => '20-08-2025'],
    ['id' => 3, 'nama_barang' => 'TOPI SERAGAM', 'tanggal_masuk' => '25-08-1945', 'tanggal_keluar' => '25-08-2025'],
    ['id' => 4, 'nama_barang' => 'CELANA TRAINING', 'tanggal_masuk' => '30-08-1945', 'tanggal_keluar' => '30-08-2025'],
    ['id' => 5, 'nama_barang' => 'JAKET RESMI', 'tanggal_masuk' => '05-09-1945', 'tanggal_keluar' => '05-09-2025'],
    ['id' => 6, 'nama_barang' => 'KAOS KAKI', 'tanggal_masuk' => '10-09-1945', 'tanggal_keluar' => '10-09-2025'],
    ['id' => 7, 'nama_barang' => 'SARUNG TANGAN', 'tanggal_masuk' => '15-09-1945', 'tanggal_keluar' => '15-09-2025'],
    ['id' => 8, 'nama_barang' => 'IKAT PINGGANG', 'tanggal_masuk' => '20-09-1945', 'tanggal_keluar' => '20-09-2025'],
    ['id' => 9, 'nama_barang' => 'DASI MERAH', 'tanggal_masuk' => '25-09-1945', 'tanggal_keluar' => '25-09-2025'],
    ['id' => 10, 'nama_barang' => 'BADGE ORGANISASI', 'tanggal_masuk' => '30-09-1945', 'tanggal_keluar' => '30-09-2025'],
    ['id' => 11, 'nama_barang' => 'KEMEJA PUTIH', 'tanggal_masuk' => '05-10-1945', 'tanggal_keluar' => '05-10-2025'],
    ['id' => 12, 'nama_barang' => 'ROK SERAGAM', 'tanggal_masuk' => '10-10-1945', 'tanggal_keluar' => '10-10-2025'],
    ['id' => 13, 'nama_barang' => 'VEST HITAM', 'tanggal_masuk' => '15-10-1945', 'tanggal_keluar' => '15-10-2025'],
    ['id' => 14, 'nama_barang' => 'SYAL MERAH', 'tanggal_masuk' => '20-10-1945', 'tanggal_keluar' => '20-10-2025'],
    ['id' => 15, 'nama_barang' => 'BENDERA KECIL', 'tanggal_masuk' => '25-10-1945', 'tanggal_keluar' => '25-10-2025']
];

// Handle search functionality
$searchTerm = isset($_GET['search']) ? trim($_GET['search']) : '';
$filteredData = $historyData;

if (!empty($searchTerm)) {
    $filteredData = array_filter($historyData, function($item) use ($searchTerm) {
        return stripos($item['nama_barang'], $searchTerm) !== false ||
               stripos($item['tanggal_masuk'], $searchTerm) !== false ||
               stripos($item['tanggal_keluar'], $searchTerm) !== false;
    });
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Page History - PHP Version</title>
</head>
<style>
.page-history {
  background-color: #bddbf1;
  display: grid;
  justify-items: center;
  align-items: start;
  width: 100vw;
}

.page-history .div {
  background-color: #bddbf1;
  overflow: hidden;
  width: 1440px;
  height: 1024px;
  position: relative;
}

.page-history .overlap {
  position: absolute;
  width: 1440px;
  height: 132px;
  top: 142px;
  left: 0;
}

.page-history .overlap-group {
  position: absolute;
  width: 1440px;
  height: 84px;
  top: 0;
  left: 0;
}

.page-history .text-on-a-path {
  position: absolute;
  width: 1440px;
  height: 40px;
  top: 0;
  left: 0;
}

.page-history .group {
  position: absolute;
  width: 136px;
  height: 64px;
  top: 20px;
  left: 21px;
}

.page-history .overlap-2 {
  position: relative;
  height: 64px;
}

.page-history .group-wrapper {
  position: absolute;
  width: 136px;
  height: 64px;
  top: 0;
  left: 0;
}

.page-history .div-wrapper {
  height: 64px;
}

.page-history .group-2 {
  width: 136px;
  height: 64px;
}

.page-history .overlap-group-wrapper {
  width: 138px;
  height: 64px;
}

.page-history .overlap-group-2 {
  position: relative;
  width: 136px;
  height: 64px;
  background-color: #ffffff;
  border-radius: 11px;
  box-shadow: 0px 0px 10px #00000080;
}

.page-history .text-wrapper {
  position: absolute;
  width: 68px;
  top: 13px;
  left: 52px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 30px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .img {
  position: absolute;
  width: 34px;
  height: 34px;
  top: 15px;
  left: 9px;
}

.page-history .text-wrapper-2 {
  position: absolute;
  width: 311px;
  top: 83px;
  left: 572px;
  text-shadow: 0px 4px 4px #00000040;
  font-family: "Teachers", Helvetica;
  font-weight: 800;
  color: #000000;
  font-size: 48px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .overlap-3 {
  position: absolute;
  width: 1374px;
  height: 1466px;
  top: 327px;
  left: 35px;
}

.page-history .tabel {
  position: absolute;
  width: 1374px;
  height: 1466px;
  top: 0;
  left: 0;
}

.page-history .overlap-group-3 {
  position: relative;
  width: 1366px;
  height: 1466px;
  background-color: #ffffff;
  border-radius: 20px;
}

.page-history .rounded-rectangle {
  position: absolute;
  width: 1366px;
  height: 57px;
  top: 0;
  left: 0;
  background-color: #fff8f8;
  border-radius: 5px;
  border: 1px solid;
  border-color: #000000;
}

.page-history .text-wrapper-3 {
  position: absolute;
  top: 11px;
  left: 212px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .line {
  left: 199px;
  position: absolute;
  width: 1px;
  height: 57px;
  top: 0;
  object-fit: cover;
}

.page-history .line-2 {
  left: 780px;
  position: absolute;
  width: 1px;
  height: 57px;
  top: 0;
  object-fit: cover;
}

.page-history .line-3 {
  left: 1077px;
  position: absolute;
  width: 1px;
  height: 57px;
  top: 0;
  object-fit: cover;
}

.page-history .text-wrapper-4 {
  top: 14px;
  left: 804px;
  font-size: 24px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-5 {
  top: 17px;
  left: 1108px;
  font-size: 20px;
  white-space: nowrap;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-6 {
  position: absolute;
  top: 9px;
  left: 17px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 36px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .overlap-wrapper {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 86px;
  left: 17px;
}

.page-history .overlap-4 {
  position: relative;
  width: 1335px;
  height: 80px;
  background-color: #f1f1f1;
  border-radius: 20px;
}

.page-history .text-wrapper-7 {
  position: absolute;
  top: 3px;
  left: 28px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-8 {
  top: 19px;
  left: 184px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-9 {
  top: 19px;
  left: 784px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-10 {
  top: 19px;
  left: 1089px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .rounded-rectangle-2 {
  top: 187px;
  left: 17px;
  position: absolute;
  width: 1335px;
  height: 80px;
  background-color: #f1f1f1;
  border-radius: 20px;
}

.page-history .text-wrapper-11 {
  top: 194px;
  left: 43px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-12 {
  top: 209px;
  left: 199px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-13 {
  top: 208px;
  left: 799px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-14 {
  top: 209px;
  left: 1104px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .rounded-rectangle-3 {
  top: 291px;
  left: 15px;
  position: absolute;
  width: 1335px;
  height: 80px;
  background-color: #f1f1f1;
  border-radius: 20px;
}

.page-history .text-wrapper-15 {
  top: 298px;
  left: 41px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-16 {
  top: 313px;
  left: 197px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-17 {
  top: 312px;
  left: 797px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-18 {
  top: 313px;
  left: 1102px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .rounded-rectangle-4 {
  top: 404px;
  left: 15px;
  position: absolute;
  width: 1335px;
  height: 80px;
  background-color: #f1f1f1;
  border-radius: 20px;
}

.page-history .text-wrapper-19 {
  top: 406px;
  left: 43px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-20 {
  top: 421px;
  left: 199px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-21 {
  top: 420px;
  left: 799px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-22 {
  top: 421px;
  left: 1104px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .group-3 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 187px;
  left: 17px;
}

.page-history .text-wrapper-23 {
  top: 8px;
  left: 26px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-24 {
  position: absolute;
  top: 23px;
  left: 182px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-25 {
  position: absolute;
  width: 192px;
  top: 22px;
  left: 782px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-26 {
  top: 23px;
  left: 1087px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .group-4 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 291px;
  left: 15px;
}

.page-history .group-5 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 396px;
  left: 15px;
}

.page-history .text-wrapper-27 {
  top: 18px;
  left: 184px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-28 {
  top: 17px;
  left: 784px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-29 {
  top: 18px;
  left: 1089px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .group-6 {
  position: absolute;
  width: 1335px;
  height: 80px;
  top: 507px;
  left: 19px;
  background-color: #f1f1f1;
  border-radius: 20px;
}

.page-history .group-7 {
  position: relative;
  width: 1261px;
  height: 65px;
  top: 3px;
  left: 28px;
}

.page-history .text-wrapper-30 {
  top: 0;
  left: 0;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-31 {
  top: 16px;
  left: 156px;
  position: absolute;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .text-wrapper-32 {
  top: 16px;
  left: 756px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .text-wrapper-33 {
  top: 16px;
  left: 1061px;
  position: absolute;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .group-8 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 609px;
  left: 19px;
}

.page-history .group-9 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 715px;
  left: 17px;
}

.page-history .group-10 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 819px;
  left: 17px;
}

.page-history .group-11 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 925px;
  left: 19px;
}

.page-history .group-12 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 1031px;
  left: 17px;
}

.page-history .group-13 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 1135px;
  left: 17px;
}

.page-history .group-14 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 1245px;
  left: 17px;
}

.page-history .group-15 {
  position: absolute;
  width: 1343px;
  height: 80px;
  top: 1349px;
  left: 17px;
}

/* PHP Dynamic Table Rows */
.page-history .table-row {
  position: absolute;
  width: 1335px;
  height: 80px;
  left: 17px;
}

.page-history .row-background {
  position: absolute;
  width: 1335px;
  height: 80px;
  background-color: #f1f1f1;
  border-radius: 20px;
  top: 0;
  left: 0;
}

.page-history .row-jumlah {
  position: absolute;
  top: 23px;
  left: 28px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .row-nama {
  position: absolute;
  top: 23px;
  left: 184px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.page-history .row-masuk {
  position: absolute;
  top: 23px;
  left: 784px;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .row-keluar {
  position: absolute;
  top: 23px;
  left: 1089px;
  width: 192px;
  font-family: "Teachers", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 32px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .no-data {
  position: absolute;
  top: 150px;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  font-family: "Teachers", Helvetica;
  font-size: 24px;
  color: #666;
}

/* Responsive adjustments */
@media (max-width: 1440px) {
  .page-history .div {
    width: 100%;
    min-width: 1440px;
  }
}

/* Hover effects */
.page-history .table-row:hover .row-background {
  background-color: #e0e0e0;
  transition: background-color 0.2s ease;
}

.page-history .group-2:hover .overlap-group-2 {
  background-color: #f0f0f0;
  transition: background-color 0.2s ease;
}

.page-history .search-button:hover {
  background-color: #f0f0f0;
  border-radius: 5px;
  transition: background-color 0.2s ease;
}

.page-history .group-16 {
  position: fixed;
  width: 1440px;
  height: 142px;
  top: 0;
  left: 0;
}

.page-history .group-17 {
  width: 1444px;
  height: 142px;
}

.page-history .overlap-5 {
  position: relative;
  width: 1440px;
  height: 142px;
  background-color: #005497;
}

.page-history .text-wrapper-34 {
  position: absolute;
  top: 41px;
  left: 139px;
  font-family: "Inter", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 50px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .group-18 {
  position: absolute;
  width: 100px;
  height: 100px;
  top: 12px;
  left: 1301px;
}

.page-history .material-symbols-wrapper {
  position: absolute;
  width: 489px;
  height: 60px;
  top: 37px;
  left: 494px;
  background-color: #ffffff;
  border-radius: 5px;
  display: flex;
  align-items: center;
}

.page-history .search-input {
  width: 430px;
  height: 50px;
  border: none;
  outline: none;
  padding: 0 15px;
  font-size: 18px;
  font-family: "Inter", Helvetica;
  background: transparent;
}

.page-history .search-button {
  width: 50px;
  height: 50px;
  border: none;
  background: transparent;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.page-history .material-symbols {
  width: 40px;
  height: 40px;
}

.page-history .search-form {
  margin: 0;
  padding: 0;
}

.page-history .text-wrapper-35 {
  position: absolute;
  top: 40px;
  left: 1119px;
  font-family: "Inter", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 50px;
  letter-spacing: 0;
  line-height: normal;
}

.page-history .group-19 {
  position: absolute;
  width: 90px;
  height: 90px;
  top: 26px;
  left: 31px;
}

.page-history .overlap-group-4 {
  position: relative;
  height: 90px;
}

.page-history .group-20 {
  position: absolute;
  width: 90px;
  height: 90px;
  top: 0;
  left: 0;
  background-image: url(https://c.animaapp.com/mfc044srO9Koti/img/group-6.png);
  background-size: 100% 100%;
}

.page-history .vector {
  position: absolute;
  width: 61px;
  height: 61px;
  top: 15px;
  left: 12px;
}
</style>
<body>
    <div class="page-history">
        <div class="div">
            <!-- Header Navigation -->
            <div class="group-16">
                <div class="group-17">
                    <div class="overlap-5">
                        <div class="text-wrapper-34">HISTORY</div>
                        <img class="group-18" src="https://c.animaapp.com/mfc044srO9Koti/img/group-1.png" />
                        
                        <!-- Search Form -->
                        <form method="GET" class="search-form">
                            <div class="material-symbols-wrapper">
                                <input type="text" 
                                       name="search" 
                                       value="<?php echo htmlspecialchars($searchTerm); ?>" 
                                       placeholder="Cari barang..." 
                                       class="search-input" />
                                <button type="submit" class="search-button">
                                    <img class="material-symbols" src="https://c.animaapp.com/mfc044srO9Koti/img/material-symbols-search.svg" />
                                </button>
                            </div>
                        </form>
                        
                        <div class="text-wrapper-35">ADMIN</div>
                        <div class="group-19">
                            <div class="overlap-group-4">
                                <div class="group-20"></div>
                                <img class="vector" src="https://c.animaapp.com/mfc044srO9Koti/img/vector.svg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back Button and Title -->
            <div class="overlap">
                <div class="overlap-group">
                    <div class="text-on-a-path"></div>
                    <div class="group">
                        <div class="overlap-2">
                            <div class="group-wrapper">
                                <div class="div-wrapper">
                                    <div class="group-2">
                                        <div class="overlap-group-wrapper">
                                            <div class="overlap-group-2">
                                                <div class="text-wrapper">Back</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class="img" src="https://c.animaapp.com/mfc044srO9Koti/img/group-91.png" />
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-2">Page History</div>
            </div>

            <!-- Data Table -->
            <div class="overlap-3">
                <div class="tabel">
                    <div class="overlap-group-3">
                        <!-- Table Header -->
                        <div class="rounded-rectangle"></div>
                        <div class="text-wrapper-6">JUMLAH</div>
                        <img class="line" src="https://c.animaapp.com/mfc044srO9Koti/img/line-9.svg" />
                        <div class="text-wrapper-3">NAMA BARANG</div>
                        <img class="line-2" src="https://c.animaapp.com/mfc044srO9Koti/img/line-9.svg" />
                        <div class="text-wrapper-4">TANGGAL PEMASUKAN</div>
                        <img class="line-3" src="https://c.animaapp.com/mfc044srO9Koti/img/line-9.svg" />
                        <div class="text-wrapper-5">TANGGAL PENGELUARAN</div>

                        <?php if (empty($filteredData)): ?>
                            <div class="no-data">
                                <p>Tidak ada data yang ditemukan.</p>
                            </div>
                        <?php else: ?>
                            <?php $index = 0; ?>
                            <?php foreach ($filteredData as $item): ?>
                                <div class="table-row" style="top: <?php echo 86 + ($index * 104); ?>px;">
                                    <div class="row-background"></div>
                                    <div class="row-jumlah"><?php echo $item['id']; ?></div>
                                    <div class="row-nama"><?php echo htmlspecialchars($item['nama_barang']); ?></div>
                                    <div class="row-masuk"><?php echo htmlspecialchars($item['tanggal_masuk']); ?></div>
                                    <div class="row-keluar"><?php echo htmlspecialchars($item['tanggal_keluar']); ?></div>
                                </div>
                                <?php $index++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add some interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Back button functionality
            const backButton = document.querySelector('.group-2');
            if (backButton) {
                backButton.addEventListener('click', function() {
                    window.history.back();
                });
                backButton.style.cursor = 'pointer';
            }

            // Search form auto-submit on enter
            const searchInput = document.querySelector('.search-input');
            if (searchInput) {
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        this.closest('form').submit();
                    }
                });
            }

            // Add hover effects to table rows
            const tableRows = document.querySelectorAll('.table-row');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.02)';
                    this.style.transition = 'transform 0.2s ease';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>
