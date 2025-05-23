<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
include 'db.php';
$user_id = $_SESSION['user_id'];
$photos = mysqli_query($conn, "SELECT * FROM photos WHERE user_id = $user_id");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload Foto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3>Selamat datang, <?= $_SESSION['username'] ?> | <a href="logout.php">Logout</a></h3>
  <hr>
  <form action="proses_upload.php" method="post" enctype="multipart/form-data" class="mb-3">
    <div class="mb-3">
      <input type="file" name="foto" class="form-control" required onchange="previewImage(event)">
    </div>
    <div class="mb-3">
      <img id="preview" src="#" class="img-thumbnail" style="max-width:200px; display:none;">
    </div>
    <button type="submit" class="btn btn-success">Upload</button>
  </form>

  <div class="row">
    <?php while ($row = mysqli_fetch_assoc($photos)) { ?>
    <div class="col-md-3 mb-3">
      <div class="card">
        <img src="uploads/<?= $row['filename'] ?>" class="card-img-top">
        <div class="card-body text-center">
          <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<script>
function previewImage(event) {
  var preview = document.getElementById('preview');
  preview.src = URL.createObjectURL(event.target.files[0]);
  preview.style.display = 'block';
}
</script>
</body>
</html>