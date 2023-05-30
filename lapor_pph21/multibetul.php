<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit_peralatan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body> 

<?php 
if(isset($_POST['buka'])){
  include 'connection.php';
  
  $idspt = $_POST['buka'];
  $query1 = "SELECT * FROM masa_spt WHERE id_spt='$idspt'";
  $spt=mysqli_query($con,$query1);
  
      
  
}
  ?>

  <?php
  if(isset($_POST['delete'])) {
include 'connection.php';
$id_spt = $_POST['delete'];
echo $id_spt;
 

	mysqli_query($con, "DELETE FROM masa_spt WHERE id_spt='$id_spt'");


header("location: daftar_spt.php");
  }
?>
    <?php
      if(isset($_POST['yaa'])) {
        include 'connection.php';
        $id_spt = $_POST['yaa'];
        
       
        echo $id_spt;
        $sql_alat = mysqli_query($con,"SELECT * FROM masa_spt WHERE id_spt ='$id_spt' ORDER BY id_spt ASC ");
        $betul =  mysqli_fetch_assoc($sql_alat);
        $pembetulan = $betul['pembetulan'] + 1;
          
          $simpan = mysqli_query($con,"UPDATE `masa_spt` SET `pembetulan` = '$pembetulan' WHERE `id_spt` ='$id_spt'") ;
          
          echo $pembetulan;
          if($simpan)
              {
                  echo "<script>alert('Data Berhasil disimpan ')</script>";
                  echo '<script type="text/javascript">window.location="daftar_spt.php"</script>';    
              }
          else
              {
              echo "<script>alert('Gagal Menyimpan Data ')</script>";
              echo '<script type="text/javascript">window.location="daftar_spt.php"</script>'; 
              }
    } elseif(isset($_POST['tidak'])){
        header("location:daftar_spt.php?act=daftar_spt");

    }

	?>
    </div>
  </div>
</div>
</form>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>