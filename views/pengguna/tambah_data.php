<?php include 'c_pengguna.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran pengguna</title>
    <!-- Load file CSS Bootstrap offline -->
    

</head>
<body>
<div class="container">

    <h2>Input Data</h2>



        <div class="form-group">
            <label>id:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan id" required />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>

        </div>
        <div class="form-group">
            <label>jenis kelamin:</label>
            <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Masukan jenis kelamin" required/>
        </div>
        <div class="form-group">
            <label>TLP:</label>
            <input type="text" name="tlp" class="form-control" placeholder="Masukan tlp" required/>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>