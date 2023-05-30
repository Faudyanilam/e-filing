<?php
include('../koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from tb_registrasi_akun");
$html = '
<center><h3>Registrasi Akun</h3></center><hr/><br/>

';
$html .= '<table border="1" width="100%">
 <tr bgcolor="black">
 <th style="color: white;">No</th>
 <th style="color: white;">NPWP</th>
 <th style="color: white;">Efin</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['npwp']."</td>
 <td>".$row['efin']."</td>

 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan.pdf');
?>