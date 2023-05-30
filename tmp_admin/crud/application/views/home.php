<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <h1 align="center">DATA NPWP DAN EFIN WAJIB PAJAK</h1><br>

    <div class="container">
        <a href="<?php echo base_url('Welcome/formtambah') ?>" class="btn btn-success mb-2">Tambah Data</a>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">NPWP</th>
                <th scope="col">EFIN</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                    foreach ($data_mhs as $row) {
                    $count = $count + 1;
                    
                ?>
                <tr>
                <th scope="row"><?php echo $count ?></th>
                    <td><?php echo $row->id_regis ?></td>
                    <td><?php echo $row->npwp ?></td>
                    <td><?php echo $row->efin ?></td>
                    <td>
                        <a href="<?php echo base_url('Welcome/formedit/'). $row->id_regis ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url('Welcome/aksihapus/'). $row->id_regis.'/'.$row->npwp. '/'.$row->efin ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    

</body>
</html>