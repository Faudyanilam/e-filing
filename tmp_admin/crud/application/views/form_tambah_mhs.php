<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <br><br>
    <h1 align="center">TAMBAH DATA NPWP DAN EFIN WAJIB PAJAK</h1><br>

    <div class="container">
        <form action="<?php echo base_url('Welcome/aksitambah') ?>" method="post">
            <div class="form-group">
                <label >NPWP</label>
                <input type="text" name="npwp" class="form-control" required>
            </div>
            <div class="form-group">
                <label >EFIN</label>
                <input type="text" name="efin" class="form-control"required>
            </div>
            <div class="form-group">
                <input type="text" name="id_paket" class="form-control" value="0" hidden>
            </div>
            


            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
    

</body>
</html>