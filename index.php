<?php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $pesan = $_POST['pesan'];

  if (mail($email, $subject, $pesan)) {
    echo "<script>
      alert('Pesan berhasil dikirim');
          </script>";
  } else {
    echo "<script>
      alert('Pesan gagal dikirim');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coba Kirim Email</title>
</head>

<body>
  <h1>Coba Kirim Email</h1>
  <form action="" method="POST">
    <ul>
      <li>
        <input type="email" placeholder="email tujuan" name="email">
      </li>
      <li>
        <input type="text" placeholder="subject" name="subject">
      </li>
      <li>
        <textarea name="pesan" id="" cols="30" rows="10" placeholder="pesan anda" name="pesan"></textarea>
      </li>
      <li><button type="submit" name="submit">Kirim</button></li>
    </ul>
    <br>
  </form>
</body>

</html>