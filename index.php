<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>DATA PASIEN VIRUS COVID-19</h3>
<label for="cars">NAMA WILAYAH:</label>
<select name="cars" id="cars" form="carform">
  <option value="">PILIH WILAYAH</option>
  <option value="DKI JAKARTA">DKI JAKARTA</option>
  <option value="JAWA BARAT">JAWA BARAT</option>
  <option value="BANTEN">BANTEN</option>
  <option value="JAWA TENGAH">JAWA TENGAH</option>
</select>
<div class="container">
  <form action="/action_page.php">
    <label for="fname">Jumlah Positif</label>
    <input type="text" id="fname" name="firstname" placeholder="">

    <label for="lname">Jumlah Dirawat</label>
    <input type="text" id="lname" name="lastname" placeholder="">

    <label for="lname">Jumlah Sembuh</label>
    <input type="text" id="lname" name="lastname" placeholder="">

    <label for="lname">Jumlah Meninggal</label>
    <input type="text" id="lname" name="lastname" placeholder="">

    <label for="lname">Nama Operator</label>
    <input type="text" id="lname" name="lastname" placeholder="">

    <label for="lname">NIM Mahasiswa</label>
    <input type="text" id="lname" name="lastname" placeholder="">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

