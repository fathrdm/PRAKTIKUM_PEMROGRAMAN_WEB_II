<html>

<head>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>
  <?php
  $namaErr = $nimErr = $jeniskelaminErr = "";
  $nama = $nim = $jeniskelamin = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
      $namaErr = "";
    } else {
      $nama = ($_POST["nama"]);
    }

    if (empty($_POST["nim"])) {
      $nimErr = "nim tidak boleh kosong";
    } else {
      $nim = ($_POST["nim"]);
    }
    if (empty($_POST["jenis_kelamin"])) {
      $jeniskelaminErr = "jenis kelamin tidak boleh kosong";
    } else {
      $jeniskelamin = ($_POST["jenis_kelamin"]);
    }
  }
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nama: <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="error">* <?php echo $namaErr; ?></span>
    <br>
    Nim: <input type="text" name="nim" value="<?php echo $nim; ?>">
    <span class="error">* <?php echo $nimErr; ?></span>
    <br>
    Jenis Kelamin :
    <span class="error">* <?php echo $jeniskelaminErr; ?></span>
    <br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
    <br>
    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>

<?php
if(!empty ($nama || $nim || $jeniskelamin)){
  echo "<h2>Output:</h2>";
  echo $nama;
  echo "<br>";
  echo $nim;
  echo "<br>";
  echo $jeniskelamin;
}
?>
</body>

</html>