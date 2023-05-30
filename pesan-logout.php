   <?php
    include "koneksi.php";

    if (isset($_GET['hasil'])) {
        if ($_GET['hasil'] == "logout"){
            echo "<script>
            Swal.fire(
            'Logout',
            'Anda Berhasil Logout',
            'success'
        ) </script>";
    } else if($_GET['hasil'] == "gagal"){
        echo "<script>
        Swal.fire(
        ' Login Gagal',
        'NPWP atau Passworrd Salah',
        'error'
    ) </script>";
} else if($_GET['hasil'] == "daftar_berhasil"){
        echo "<script>
        Swal.fire(
        ' Daftar Berhasil',
        'Data Sesuai dengan Dummy',
        'success'
    ) </script>";
} else if($_GET['hasil'] == "gagal2"){
        echo "<script>
        Swal.fire(
        ' Login Gagal, Anda Bukan Orang Pribadi',
        'Silahkan Login Dengan Akun Badan!',
        'warning'
    ) </script>";
}
}
?>

    <script>
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
            }
        })
    </script>
