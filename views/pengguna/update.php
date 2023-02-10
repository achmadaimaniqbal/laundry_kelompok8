<?php include_once 'c_pengguna.php';
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran pengguna</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" placeholder="Masukan Username" required />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required><?php echo $data['alamat']; ?></textarea>

        </div>
        <div class="form-group">
            <label>jenis_kelamin:</label>
            <input type="jenis_kelamin" name="jens_kelamin" class="form-control" value="<?php echo $data['jenis_kelamin']; ?>" placeholder="Masukan jenis_kelamin" required/>
        </div>
        <div class="form-group">
            <label>No tlp:</label>
            <input type="text" name="tlp" class="form-control" value="<?php echo $data['tlp']; ?>" placeholder="Masukan tlp" required/>
        </div>

        <input type="hidden" name="id_member" value="<?php echo $data['id_member']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>