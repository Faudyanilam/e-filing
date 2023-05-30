<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SPT 1770S | Politeknik Negeri Batam</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>  
  <script src="jquery-ui.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>  

 <script>
  $(document).ready(function () {
    $('#simpan').click(function (e) {
      e.preventDefault();
      var nama = $('#nama').val();
      var alamat = $('#alamat').val();
      var no_hp = $('#no_hp').val();
      $.ajax
        ({
          type: "POST",
          url: "proses_input.php",
          data: { "nama": nama, "alamat": alamat, "no_hp": no_hp },
          success: function (data) {
            $('.result').html(data);
            $('#contactform')[0].reset();
            $('.tampildata').load("list_siswa.php");
            $('#exampleModal').modal('hide');
          }
        });
    });
  });
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>

  <div class="container">
    <h1>Input Data Siswa</h1>
    <p>Isi Form dibawah ini untuk menginput data siswa</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
    <hr>

  <!--Untuk menampilkan data -->
  <div class="tampildata"></div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contactform" action="" method="POST">
          <div class="form-group">
            <label for="email">Nama :</label>
            <input type="text" class="form-control" name="nama" id="nama">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" name="alamat" id="alamat">
            <label for="no_hp">No Handphone:</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp">
          </div>
          <button id="simpan" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">   
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>  

</body>
</html>
 