<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>ADMINISTRATOR</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand nav-link text-white" href="#" >SELAMAT DATANG ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5> 
          <i class="fas fa-envelope-square mr-3"></i>
          <i class="fas fa-bell-slash mr-3"></i>
          <i class="fas fa-sign-out-alt mr-3"></i>
        </h5>
        </div>
  </div>
</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-info mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index_dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Dosen</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index_pegawai.php" ><i class="fas fa-users mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
      </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="index_jadwal.php" ><i class="far fa-calendar-alt mr-2"></i>Jadwal Kuliah</a><hr class="bg-secondary">
      </li>
    </ul>
  </div>

  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</h3><hr>
        <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahmhs"> 
        <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA MAHASISWA</a>
          
          <!-- NOMOR 3 -->
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">id_id</th>
                  <th scope="col">email</th>
                  <th scope="col">password</th>
                  <th scope="col">no_hp</th>
                  <th scope="col">status</th>
                  <th scope="col" colspan="3">AKSI</th>
                </tr>
              </thead>
              <?php
                include 'koneksi.php';
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_daftarnpwp");
                  $no = 1;
                  while ($data = mysqli_fetch_assoc($query))
                  {
              ?>   
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['id_id'];?></td>
                      <td><?php echo $data['email'];?></td>
                      <td><?php echo $data['password'];?></td>
                      <td><?php echo $data['no_hp'];?></td>
                      <td><?php echo $data['status'];?></td>
                      <td>
                      <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                        <a href="ubah_mhs.php?nim=<?php echo $data['nim'];?>">Edit</a>
                        <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                        <a href="hapus_mhs.php?>">Delete</a>
                      </td>
                    </tr>   
                  <?php  
                  } 
              ?>    
            </table>
          <!-- NOMOR 3 -->
           

        </tbody>
      </table>
  </div>

</div>
              <!-- Simpan Modal  -->
<div class="example-modal">
  <div id="tambahmhs" class="modal fade" role="dialog" style="display:none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Tambah Data Baru</h3>
        </div>
        <div class="modal-body">
          <form action="simpan_mhs.php" method="post" role="form">
            <div class="form-group">
              <div class="row">
                <label class="col-sm-3 control-label text-right">NIM</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="nim" placeholder="NIM" value=""></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-3 control-label text-right">Nama Mahasiswa</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa" value=""></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-3 control-label text-right">Alamat</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="alamat" placeholder="Alamat" id="alamat" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="row">
            <label class="col-sm-3 control-label text-right">Jurusan </label>
            <div class="col-sm-8"><input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </input>
            </div>
            </div>
            </div>
            <div class="modal-footer">
            <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>