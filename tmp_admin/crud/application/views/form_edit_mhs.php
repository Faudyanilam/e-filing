<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <br><br>
    <h1 align="center">EDIT DATA NPWP DAN EFIN WAJIB PAJAK</h1><br>

    <div class="container">
        <form action="<?php echo base_url('Welcome/aksiedit') ?>" method="post">
            <div class="form-group">
                <label >NIM</label>
                <input type="text" class="form-control" value="<?php echo $data_mhs->npwp ?>" disabled>
                <input type="hidden" name="npwp" class="form-control" value="<?php echo $data_mhs->npwp ?>">
                <input type="hidden" name="id_regis" class="form-control" value="<?php echo $data_mhs->id_regis ?>">
            </div>
            <div class="form-group">
                <label >EFIN</label>
                <input type="text" name="efin" class="form-control" value="<?php echo $data_mhs->efin ?>">
            </div>
        
            


            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
    

</body>
</html>