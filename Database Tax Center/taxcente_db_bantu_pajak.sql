-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2022 pada 09.43
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxcente_db_bantu_pajak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Nur fhitriani megadyanty', 'nurmega', 'admin'),
(2, 'Rizky Indriati', 'rizkyindri', 'admin2'),
(3, 'Admin', 'AdminSPT', 'admin'),
(4, 'Tax Center', 'Admin_TaxCenter', 'taxcenter123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bukti_potong_s`
--

CREATE TABLE `tb_bukti_potong_s` (
  `id` int(11) NOT NULL,
  `id_spt_1770s` varchar(20) NOT NULL,
  `tahun_pajak` year(4) NOT NULL,
  `status_spt` varchar(15) NOT NULL,
  `pembetulan_ke` varchar(11) NOT NULL,
  `jenis_pajak` varchar(20) NOT NULL,
  `npwp_pemotong` varchar(20) NOT NULL,
  `nama_pemotong` varchar(100) NOT NULL,
  `nomor_bukti` varchar(30) NOT NULL,
  `tanggal_bukti` date NOT NULL,
  `jumlah_pph` varchar(15) NOT NULL,
  `p_neto_dlm_negeri` varchar(20) NOT NULL,
  `sumber_penghasilan` varchar(100) NOT NULL,
  `p_bruto` varchar(20) NOT NULL,
  `pph_terutang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bukti_potong_s`
--

INSERT INTO `tb_bukti_potong_s` (`id`, `id_spt_1770s`, `tahun_pajak`, `status_spt`, `pembetulan_ke`, `jenis_pajak`, `npwp_pemotong`, `nama_pemotong`, `nomor_bukti`, `tanggal_bukti`, `jumlah_pph`, `p_neto_dlm_negeri`, `sumber_penghasilan`, `p_bruto`, `pph_terutang`) VALUES
(18, '949596284446000', 2020, 'normal', '0', 'Pasal 21', '532991425215000', 'PT Abadi Jaya', '0690232990901', '2020-12-31', 'Rp. 22.825.000', 'Rp. 244.000.000', 'Sewa Atas Tanah dan Bangunan', 'Rp. 60.000.000', 'Rp. 6.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftarnpwp`
--

CREATE TABLE `tb_daftarnpwp` (
  `id_id` int(11) NOT NULL,
  `id_daftar_npwp` varchar(20) NOT NULL,
  `jenis_wp` enum('Orang Pribadi','Badan','','') NOT NULL,
  `nama_ktp` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `efin` varchar(10) NOT NULL,
  `id_pelanggan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftarnpwp`
--

INSERT INTO `tb_daftarnpwp` (`id_id`, `id_daftar_npwp`, `jenis_wp`, `nama_ktp`, `alamat`, `email`, `password`, `no_hp`, `pertanyaan`, `jawaban`, `efin`, `id_pelanggan`) VALUES
(1, '151997482215000', 'Orang Pribadi', 'Ahmad Sumawan', 'Tanjung Riau', 'ahmadsumawan@gmail.com', 'ahmadsumawan44', '085668101234', '2', 'Politeknik Negeri Batam', '4441796088', 0),
(2, '082049040215000', 'Orang Pribadi', 'Thariq Al Dhaqil', 'Tanjung Riau', 'thariqaldhaqil@gmail.com', 'thariqaldhaqil', '085668101236', '2', 'Politeknik Negeri Batam', '3801811027', 0),
(6, '081881297215000', 'Badan', 'Sarah Sagita Putri', 'Tanjung Riau', 'sarahsagitaputri@gmail.com', '3800576460', '085668101238', '2', 'Politeknik Negeri Batam', '3801811028', 0),
(7, '081875155215000', 'Badan', 'Hernita Anggraini', 'Tanjung Riau', 'hernitaanggraini@gmail.com', '4195408482', '085668101240', '2', 'Politeknik Negeri Batam', '4196643049', 0),
(8, '081875169215000', 'Orang Pribadi', 'Putri Kurnia Wati', 'Tanjung Riau', 'putrikurniawati@gmail.com', 'putrikurniawati', '085668101242', '2', 'Politeknik Negeri Batam', '2853411375', 0),
(9, '499551490215000', 'Orang Pribadi', 'Putra Siregar', 'Tanjung Riau', 'putrasiregar@gmail.com', '1192027663', '085668101244', '2', 'Politeknik Negeri Batam', '1193262230', 0),
(10, '499551067215000', 'Badan', 'Nasution Silalahi', 'Tanjung Riau', 'nasutionsilalahi@gmail.com', '6527484562', '085668101246', '2', 'Politeknik Negeri Batam', '6528719129', 0),
(11, '148279581215000', 'Badan', 'Lasma Andini', 'Tanjung Riau', 'lasmaandini@gmail.com', '1549801541', '085668101248', '2', 'Politeknik Negeri Batam', '1551036108', 0),
(12, '499550945215000', 'Orang Pribadi', 'Lula Kamal', 'Tanjung Riau', 'lulakamal@gmail.com', '3825376410', '085668101250', '2', 'Politeknik Negeri Batam', '3826610977', 0),
(13, '499551091215000', 'Orang Pribadi', 'Jane Salimar', 'Tanjung Riau', 'janesalimar@gmail.com', '6626677003', '085668101252', '2', 'Politeknik Negeri Batam', '6627911570', 0),
(14, '123456789101112', 'Orang Pribadi', 'Wika Arsanti Putri', 'Batu Aji', 'user1@gmail.com', 'user1', '0865434232342', '2', 'Politeknik Negeri Batam', '1912094955', 0),
(15, '123456789101113', 'Badan', 'User 2', 'Tanjung Riau Sekupang', 'fhitriani.002@gmail.com', 'user2', '081234567890', '3', 'Soekarno', '5174201395', 0),
(16, '499551964215000', 'Orang Pribadi', 'Muhammad Syaiful', 'Tanjung Riau', 'muhammadsyaiful@gmail.com', '1390657007', '085668101254', '2', 'Politeknik Negeri Batam', '1391891574', 0),
(23, '269121865602000', 'Orang Pribadi', 'Darmawan Salih', 'Tanjung Riau', 'darmawansalih@gmail.com', '1390657007', '085668101256', '2', 'Politeknik Negeri Batam', '1391891575', 0),
(24, '079720179215001', 'Orang Pribadi', 'Sofyan Sofiyan', 'Tanjung Riau', 'sofyansofiyan@gmail.com', '2406235804', '085668101258', '2', 'Politeknik Negeri Batam', '2407470371', 0),
(25, '254147549592000', 'Orang Pribadi', 'Nadya Elvani', 'Tanjung Riau', 'nadyaelvani@gmail.com', '2406235804', '085668101260', '2', 'Politeknik Negeri Batam', '2407470372', 0),
(26, '098899704121000', 'Orang Pribadi', 'Kaila Genewa Safitri', 'Tanjung Riau', 'kailagenewasafitri@gmail.com', '1605149303', '085668101262', '2', 'Politeknik Negeri Batam', '1606383870', 0),
(27, '690829646606000', 'Orang Pribadi', 'Luis Potre', 'Tanjung Riau', 'luispotre@gmail.com', '2854856851', '085668101264', '2', 'Politeknik Negeri Batam', '2856091418', 0),
(28, '269129990656000', 'Orang Pribadi', 'Mikail Lambuto', 'Tanjung Riau', 'mikaillambuto@gmail.com', '3964933546', '085668101266', '2', 'Politeknik Negeri Batam', '3966168113', 0),
(29, '264427287509000', 'Orang Pribadi', 'Citra Wulandari Nazma', 'Tanjung Riau', 'citrawulandarinazma@gmail.com', '2072619790', '085668101268', '2', 'Politeknik Negeri Batam', '2073854357', 0),
(30, '151991892215000', 'Orang Pribadi', 'Fitri Harlina Kasih', 'Tanjung Riau', 'fitriharlinakasih@gmail.com', '2782919250', '085668101270', '2', 'Politeknik Negeri Batam', '2784153817', 0),
(31, '959860588211000', 'Orang Pribadi', 'Bunga Citra Lasmira', 'Tanjung Riau', 'bungacitralasmira@gmail.com', '4732769979', '085668101272', '2', 'Politeknik Negeri Batam', '4734004546', 0),
(32, '951499921224000', 'Badan', 'Hari Yahya Putra', 'Tanjung Riau', 'hariyahyaputra@gmail.com', '1710400723', '085668101274', '2', 'Politeknik Negeri Batam', '1711635290', 0),
(33, '677009618625000', 'Badan', 'Norman Pasaribu', 'Tanjung Riau', 'normanpasaribu@gmail.com', '2208694858', '085668101276', '2', 'Politeknik Negeri Batam', '2209929425', 0),
(34, '956629298524000', 'Badan', 'Rudia Silviani', 'Tanjung Riau', 'rudiasilviani@gmail.com', '1300372036', '085668101278', '2', 'Politeknik Negeri Batam', '1301606603', 0),
(35, '956685749659000', 'Badan', 'Janeta Kalisa Fitri', 'Tanjung Riau', 'janetakalisafitri@gmail.com', '5134584773', '085668101280', '2', 'Politeknik Negeri Batam', '5135819340', 0),
(36, '956681445201000', 'Badan', 'Mia Soraya Fani', 'Tanjung Riau', 'miasorayafani@gmail.com', '4935925992', '085668101282', '2', 'Politeknik Negeri Batam', '4937160559', 0),
(37, '795786607541000', 'Badan', 'Rahmad Maulana', 'Tanjung Riau', 'rahmadmaulana@gmail.com', '6925283049', '085668101284', '2', 'Politeknik Negeri Batam', '6926517616', 0),
(38, '246251821422000', 'Badan', 'Sobirin Somad', 'Tanjung Riau', 'sobirinsomad@gmail.com', '3664285226', '085668101286', '2', 'Politeknik Negeri Batam', '3665519793', 0),
(40, '082044678215000', 'Badan', 'Rike Harlina Wati', 'Tanjung Riau', 'rikeharlinawati@gmail.com', '4837435317', '085668101288', '2', 'Politeknik Negeri Batam', '4838669884', 0),
(41, '962722999215000', 'Badan', 'Wati Wartini', 'Tanjung Riau', 'watiwartini@gmail.com', '3014674330', '085668101290', '2', 'Politeknik Negeri Batam', '3015908897', 0),
(42, '962722480655000', 'Badan', 'Lilis Harumania', 'Tanjung Riau', 'lilisharumania@gmail.com', '3014674330', '085668101292', '2', 'Politeknik Negeri Batam', '3015908898', 0),
(43, '964740696505000', 'Badan', 'Khairil Naxmi', 'Tanjung Riau', 'khairilnaxmi@gmail.com', '5234295451', '085668101294', '2', 'Politeknik Negeri Batam', '5235530018', 0),
(44, '081862495215001', 'Badan', 'Hendiar Ahmad', 'Tanjung Riau', 'hendiarahmad@gmail.com', '4737333882', '085668101296', '2', 'Politeknik Negeri Batam', '4738568449', 0),
(45, '775074024522000', 'Badan', 'Kukuh Hermanto', 'Tanjung Riau', 'kukuhhermanto@gmail.com', '4162428486', '085668101298', '2', 'Politeknik Negeri Batam', '4163663053', 0),
(46, '952964589497000', 'Badan', 'Indah Permatasari', 'Tanjung Riau', 'indahpermatasari@gmail.com', '2229534663', '085668101300', '2', 'Politeknik Negeri Batam', '2230769230', 0),
(47, '494461502609000', 'Orang Pribadi', 'Megawati Indah Puji', 'Tanjung Riau', 'megawatiindahpuji@gmail.com', '4632169043', '085668101302', '2', 'Politeknik Negeri Batam', '4633403610', 0),
(48, '447464074629000', 'Orang Pribadi', 'Muhammad Ihkram', 'Tanjung Riau', 'muhammadihkram@gmail.com', '4638386737', '085668101304', '2', 'Politeknik Negeri Batam', '4639621304', 0),
(49, '447445696549000', 'Badan', 'Syaiful Nahda', 'Tanjung Riau', 'syaifulnahda@gmail.com', '3214879529', '085668101306', '2', 'Politeknik Negeri Batam', '3216114096', 0),
(50, '949596284446000', 'Orang Pribadi', 'Shinta Wadani', 'Tanjung Riau', 'shintawadani@gmail.com', '1129814043', '085668101308', '2', 'Politeknik Negeri Batam', '1131048610', 0),
(51, '446852212604000', 'Badan', 'Kurnia Mala Sari', 'Tanjung Riau', 'kurniamalasari@gmail.com', '3312518814', '085668101310', '2', 'Politeknik Negeri Batam', '3313753381', 0),
(52, '450999858542000', 'Badan', 'Javis', 'Tanjung Riau', 'javis@gmail.com', '2373103789', '085668101312', '2', 'Politeknik Negeri Batam', '2374338356', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_lapor_1770`
--

CREATE TABLE `tb_hasil_lapor_1770` (
  `id` int(11) NOT NULL,
  `id_spt_1770` varchar(20) NOT NULL,
  `jns_formulir` varchar(30) NOT NULL,
  `tahun_pajak` year(4) NOT NULL,
  `pembetulan_ke` int(11) NOT NULL,
  `status_spt` varchar(15) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil_lapor_1770`
--

INSERT INTO `tb_hasil_lapor_1770` (`id`, `id_spt_1770`, `jns_formulir`, `tahun_pajak`, `pembetulan_ke`, `status_spt`, `jumlah`, `catatan`) VALUES
(11, '151997482215000', 'SPT Tahunan', 2020, 0, 'Nihil', 'Rp. 0', 'Kewajiban dokumen yang harus dilampirkan'),
(13, '082049040215000', 'SPT Tahunan', 2020, 0, 'Nihil', 'Rp. 0', 'Kewajiban dokumen yang harus dilampirkan'),
(15, '081875169215000', 'SPT 1770 Tahunan', 2021, 0, 'Nihil', 'Rp. 0', '-'),
(16, '949596284446000', 'SPT 1770 Tahunan', 2020, 0, 'Nihil', 'Rp. 0', '-'),
(17, '494461502609000', 'SPT 1770 Tahunan', 2021, 0, 'Kurang Bayar', 'Rp. 90.000', 'Kewajiban yang harus dilakukan dengan menggunakan metode yang telah ditentukan'),
(18, '447464074629000', 'SPT 1770 Tahunan', 2020, 0, 'Nihil', 'Rp. 0', 'tidak ada'),
(19, '959860588211000', 'SPT 1770 Tahunan', 2020, 0, 'Nihil', 'Rp. 0', '-'),
(20, '151991892215000', 'SPT 1770 Tahunan', 2019, 0, 'Nihil', 'Rp. 0', '-'),
(21, '254147549592000', 'SPT 1770 Tahunan', 2021, 0, 'Lebih Bayar', 'Rp. 7.000', '-'),
(22, '269129990656000', 'SPT 1770 Tahunan', 2020, 0, 'Lebih Bayar', 'Rp. 7.000', '-'),
(23, '690829646606000', 'SPT 1770 Tahunan', 2019, 0, 'Kurang Bayar', 'Rp. 50.000', 'Kewajiban yang harus dilakukan dengan menggunakan metode yang telah ditentukan'),
(24, '098899704121000', 'SPT 1770 Tahunan', 2018, 0, 'Kurang Bayar', 'Rp. 15.000', '-'),
(25, '079720179215001', 'SPT 1770 Tahunan', 2018, 0, 'Lebih Bayar', 'Rp. 1', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_lapor_1771`
--

CREATE TABLE `tb_hasil_lapor_1771` (
  `id` int(11) NOT NULL,
  `id_spt_1771` varchar(20) NOT NULL,
  `jns_formulir` varchar(30) NOT NULL,
  `tahun_pajak` year(4) NOT NULL,
  `pembetulan_ke` int(11) NOT NULL,
  `status_spt` varchar(15) NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil_lapor_1771`
--

INSERT INTO `tb_hasil_lapor_1771` (`id`, `id_spt_1771`, `jns_formulir`, `tahun_pajak`, `pembetulan_ke`, `status_spt`, `jumlah`, `catatan`) VALUES
(42, '123456789101113', 'SPT Tahunan', 2021, 0, 'Nihil', 'Rp. 0', 'Kewajiban dokumen yang harus dilampirkan'),
(43, '081881297215000', 'SPT 1771 Tahunan', 2021, 0, 'Nihil', 'Rp. 0', 'Tidak Ada'),
(44, '499551067215000', 'SPT 1771 Tahunan', 2021, 0, 'Nihil', 'Rp. 0', 'Tidak Ada'),
(45, '081875155215000', 'SPT 1771 Tahunan', 2020, 1, 'Kurang Bayar', 'Rp. 100.000', 'Silahkan melakukan pembayaran sesuai prosedur pajak yang berlaku'),
(46, '148279581215000', 'SPT 1771 Tahunan', 2019, 0, 'Lebih Bayar', 'Rp. 57.000', '-'),
(47, '951499921224000', 'SPT 1771 Tahunan', 2019, 0, 'Lebih Bayar', 'Rp. 3.000', '-'),
(48, '677009618625000', 'SPT 1771 Tahunan', 2019, 0, 'Lebih Bayar', 'Rp. 50.000', '-'),
(49, '956629298524000', 'SPT 1771 Tahunan', 2018, 0, 'Kurang Bayar', 'Rp. 10.000', 'Silahkan melakukan pembayaran sesuai prosedur pajak yang berlaku'),
(50, '795786607541000', 'SPT 1771 Tahunan', 2018, 0, 'Kurang Bayar', 'Rp. 15.000', 'Silahkan melakukan pembayaran sesuai prosedur pajak yang berlaku'),
(51, '956685749659000', 'SPT 1771 Tahunan', 2020, 0, 'Lebih Bayar', 'Rp. 7.000', '-'),
(52, '246251821422000', 'SPT 1771 Tahunan', 2021, 0, 'Nihil', 'Rp. 0', '-'),
(53, '956681445201000', 'SPT 1771 Tahunan', 2021, 0, 'Lebih Bayar', 'Rp. 1.000', '-'),
(54, '082044678215000', 'SPT 1771 Tahunan', 2021, 0, 'Nihil', 'Rp. 0', 'tidak ada'),
(55, '962722999215000', 'SPT 1771 Tahunan', 2020, 0, 'Nihil', 'Rp. 0', 'tidak ada'),
(56, '964740696505000', 'SPT 1771 Tahunan', 2019, 0, 'Nihil', 'Rp. 0', '-'),
(57, '446852212604000', 'SPT 1771 Tahunan', 2018, 0, 'Kurang Bayar', 'Rp. 8.000', 'Silahkan melakukan pembayaran sesuai prosedur pajak yang berlaku'),
(58, '450999858542000', 'SPT 1771 Tahunan', 2018, 0, 'Lebih Bayar', 'Rp. 12.500', '-'),
(59, '447445696549000', 'SPT 1771 Tahunan', 2018, 0, 'Lebih Bayar', 'Rp. 1', '-'),
(60, '952964589497000', 'SPT 1771 Tahunan', 2019, 0, 'Lebih Bayar', 'Rp. 2.570', '-'),
(61, '775074024522000', 'SPT 1771 Tahunan', 2021, 0, 'Nihil', 'Rp. 0', '-'),
(62, '962722480655000', 'SPT 1771 Tahunan', 2021, 0, 'Nihil', 'Rp. 0', 'tidak ada'),
(63, '081862495215001', 'SPT 1771 Tahunan', 2019, 0, 'Lebih Bayar', 'Rp. 76.000', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_non_bukti_potong_s`
--

CREATE TABLE `tb_non_bukti_potong_s` (
  `id` int(11) NOT NULL,
  `id_spt_1770s` varchar(20) NOT NULL,
  `bunga` varchar(20) NOT NULL,
  `royalti` varchar(20) NOT NULL,
  `sewa` varchar(20) NOT NULL,
  `hadiah` varchar(20) NOT NULL,
  `keuntungan` varchar(20) NOT NULL,
  `penghasilan_lain` varchar(20) NOT NULL,
  `p_neto_luar_negeri` varchar(20) NOT NULL,
  `bantuan` varchar(20) NOT NULL,
  `warisan` varchar(20) NOT NULL,
  `laba_perseroan` varchar(20) NOT NULL,
  `asuransi` varchar(20) NOT NULL,
  `beasiswa` varchar(20) NOT NULL,
  `p_lain_obj_pajak` varchar(20) NOT NULL,
  `kode_harta` varchar(100) NOT NULL,
  `nama_harta` varchar(100) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `harga_perolehan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_utang` varchar(100) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `tahun_peminjam` year(4) NOT NULL,
  `jumlah_pinjaman` varchar(20) NOT NULL,
  `nama_keluarga` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `hubungan_keluarga` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `zakat_keagamaan` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `status_pjk_si` varchar(20) NOT NULL,
  `npwp_si` varchar(20) NOT NULL,
  `gol_ptkp` varchar(50) NOT NULL,
  `jml_tanggungan` varchar(20) NOT NULL,
  `lapor_sebagai` varchar(20) NOT NULL,
  `neto_istri` varchar(30) NOT NULL,
  `neto_suami` varchar(30) NOT NULL,
  `kembali_pph_24` varchar(20) NOT NULL,
  `bayar_pph_25` varchar(20) NOT NULL,
  `bayar_stp_pph_25` varchar(20) NOT NULL,
  `neto_kurang_zakat` varchar(20) NOT NULL,
  `ptkp_tanggungan` varchar(20) NOT NULL,
  `pkp` varchar(20) NOT NULL,
  `pph_terutang_tarif` varchar(20) NOT NULL,
  `jml_pph_terutang` varchar(20) NOT NULL,
  `pph_dipotong` varchar(20) NOT NULL,
  `pph_dibayar_sendiri` varchar(20) NOT NULL,
  `jumlah_kredit` varchar(20) NOT NULL,
  `status_hasil` varchar(20) NOT NULL,
  `jumlah_hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_non_bukti_potong_s`
--

INSERT INTO `tb_non_bukti_potong_s` (`id`, `id_spt_1770s`, `bunga`, `royalti`, `sewa`, `hadiah`, `keuntungan`, `penghasilan_lain`, `p_neto_luar_negeri`, `bantuan`, `warisan`, `laba_perseroan`, `asuransi`, `beasiswa`, `p_lain_obj_pajak`, `kode_harta`, `nama_harta`, `tahun_perolehan`, `harga_perolehan`, `keterangan`, `kode_utang`, `nama_peminjam`, `alamat_peminjam`, `tahun_peminjam`, `jumlah_pinjaman`, `nama_keluarga`, `nik`, `hubungan_keluarga`, `pekerjaan`, `zakat_keagamaan`, `status_perkawinan`, `status_pjk_si`, `npwp_si`, `gol_ptkp`, `jml_tanggungan`, `lapor_sebagai`, `neto_istri`, `neto_suami`, `kembali_pph_24`, `bayar_pph_25`, `bayar_stp_pph_25`, `neto_kurang_zakat`, `ptkp_tanggungan`, `pkp`, `pph_terutang_tarif`, `jml_pph_terutang`, `pph_dipotong`, `pph_dibayar_sendiri`, `jumlah_kredit`, `status_hasil`, `jumlah_hasil`) VALUES
(18, '949596284446000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', '043', 'Mobil', 2019, 'Rp. 150.000.000', '', '101', 'Bank Mandiri', 'Batam', 2019, 'Rp. 100.000.000', 'Sinta', '2171091509909391', 'Istri', 'IRT', 'Rp. 0', 'Kawin', 'kk', '', 'kw', '0', '', '', '', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 244.000.000', 'Rp. 58.500.000', 'Rp. 185.500.000', 'Rp. 22.825.000', 'Rp. 22.825.000', 'Rp. 22.825.000', 'Rp. 0', 'Rp. 0', 'Nihil', 'Rp. 0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket_langganan`
--

CREATE TABLE `tb_paket_langganan` (
  `id_paket` int(30) NOT NULL,
  `id_pelanggan` int(30) NOT NULL,
  `jenis_paket` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `estimasi` date NOT NULL,
  `jmlh_user` int(30) NOT NULL,
  `harga` int(35) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket_langganan`
--

INSERT INTO `tb_paket_langganan` (`id_paket`, `id_pelanggan`, `jenis_paket`, `username`, `password`, `estimasi`, `jmlh_user`, `harga`, `status`) VALUES
(2, 1, 'basic', 'ergiputra', '123', '2022-11-12', 30, 1000000, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi_akun`
--

CREATE TABLE `tb_registrasi_akun` (
  `id_regis` int(11) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `efin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_registrasi_akun`
--

INSERT INTO `tb_registrasi_akun` (`id_regis`, `npwp`, `efin`) VALUES
(7, '123456789101112', '1912094955'),
(9, '151997482215000', '4441796088'),
(10, '082049040215000', '3801811027'),
(11, '081875169215000', '2853411375'),
(12, '081881297215000', '3801811028'),
(14, '499551490215000', '1193262230'),
(16, '499551067215000', '6528719129'),
(19, '123456789101113', '5174201395'),
(20, '081875155215000', '4196643049'),
(23, '148279581215000', '1551036108'),
(24, '499550945215000', '3826610977'),
(25, '499551091215000', '6627911570'),
(26, '499551964215000', '1391891574'),
(27, '269121865602000', '1391891575'),
(28, '079720179215001', '2407470371'),
(30, '098899704121000', '1606383870'),
(31, '690829646606000', '2856091418'),
(32, '269129990656000', '3966168113'),
(33, '264427287509000', '2073854357'),
(34, '254147549592000', '2407470372'),
(35, '151991892215000', '2784153817'),
(36, '959860588211000', '4734004546'),
(37, '951499921224000', '1711635290'),
(38, '677009618625000', '2209929425'),
(39, '956629298524000', '1301606603'),
(40, '795786607541000', '6926517616'),
(41, '956685749659000', '5135819340'),
(42, '246251821422000', '3665519793'),
(43, '956681445201000', '4937160559'),
(44, '082044678215000', '4838669884'),
(45, '962722999215000', '3015908897'),
(46, '964740696505000', '5235530018'),
(47, '081862495215001', '4738568449'),
(48, '962722480655000', '3015908898'),
(49, '775074024522000', '4163663053'),
(50, '952964589497000', '2230769230'),
(51, '447464074629000', '4639621304'),
(52, '494461502609000', '4633403610'),
(53, '949596284446000', '1131048610'),
(54, '447445696549000', '3216114096'),
(55, '450999858542000', '2374338356'),
(56, '446852212604000', '3313753381');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwayat_surat`
--

CREATE TABLE `tb_riwayat_surat` (
  `id` int(11) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `jenis_pajak` varchar(100) NOT NULL,
  `jenis_setoran` varchar(100) NOT NULL,
  `masa_pajak` varchar(50) NOT NULL,
  `tahun_pajak` year(4) NOT NULL,
  `nop` varchar(50) NOT NULL,
  `jumlah_setor` int(50) NOT NULL,
  `terbilang` varchar(150) NOT NULL,
  `uraian` text NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `kode_billing` varchar(50) NOT NULL,
  `masa_aktif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_riwayat_surat`
--

INSERT INTO `tb_riwayat_surat` (`id`, `npwp`, `jenis_pajak`, `jenis_setoran`, `masa_pajak`, `tahun_pajak`, `nop`, `jumlah_setor`, `terbilang`, `uraian`, `no_sk`, `kode_billing`, `masa_aktif`) VALUES
(10, '151997482215000', '411124', '401', '10-09', 2004, '', 8, ' Delapan Ribu Rupiah ', 'test', '', '8013 6075 5243 339', '04/07/2021 08:37:29'),
(11, '151997482215000', '411129', '310', '10-01', 2020, '-', 900, 'Sembilan Ratus Ribu Rupiah ', 'test', '-', '1502 6023 4929 523', '04/07/2021 08:43:05'),
(12, '151997482215000', '411211', '314', '10-06', 0000, '12hj', 100, 'Seratus Ribu Rupiah ', 'test', '13', '5195 9184 3777 896', '06/07/2021 05:09:31'),
(13, '151997482215000', '411211', '314', '10-06', 0000, '12hj', 100, 'Seratus Ribu Rupiah ', 'test', '13', '1417 9387 5373 958', '06/07/2021 05:12:08'),
(14, '151997482215000', '411221', '500', '04-04', 2004, 'njjj7778', 8, ' Delapan Ribu Rupiah ', 'huaa', '1234', '2200 3464 1281 652', '06/07/2021 05:23:25'),
(15, '123456789101112', '411122', '320', '01-02', 2021, '98989898', 9999, ' Sembilan Juta Sembilan Ratus Sembilan Puluh Sembilan Ribu Sembilan Ratus Sembilan Puluh Sembilan Rupiah ', 'fcgf', '00000/000/00/000/00', '7388 7102 0584 955', '07/07/2021 04:15:00'),
(16, '123456789101112', '411119', '310', '09-06', 2008, '98989898', 550, 'Lima Ratus Lima Puluh Ribu Rupiah ', 'gfftfg', '00000/000/00/000/00', '9856 5465 0061 249', '07/07/2021 04:16:45'),
(17, '123456789101112', '411112', '300', '09-12', 2021, '98989898', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fghfg', '00000/000/00/000/00', '3925 1047 5468 126', '07/07/2021 04:23:20'),
(18, '123456789101112', '411122', '511', '12-11', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgfg', '00001/001/01/001/01', '0521 3473 3855 293', '07/07/2021 04:41:04'),
(19, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '9013 6916 6064 181', '07/07/2021 04:43:37'),
(20, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '5932 1946 3114 483', '07/07/2021 04:45:42'),
(21, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 04:46:07'),
(22, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '0283 1409 3352 210', '07/07/2021 05:00:40'),
(23, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 05:01:21'),
(24, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 05:01:39'),
(25, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '8805 9354 2689 151', '07/07/2021 05:03:30'),
(26, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 05:03:38'),
(27, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '8660 2513 0474 988', '07/07/2021 05:04:07'),
(28, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 05:04:55'),
(29, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 05:08:22'),
(30, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '0317 4416 8283 523', '07/07/2021 05:08:31'),
(31, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '6769 9247 3484 971', '07/07/2021 05:11:15'),
(32, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 05:11:22'),
(33, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '8817 9132 7400 978', '07/07/2021 05:22:27'),
(34, '151997482215000', '411221', '510', '08-10', 2020, '98989899', 6666, ' Enam Milyar Enam Ratus Enam Puluh Enam Juta Enam Ratus Enam Puluh Enam Ribu Enam Ratus Enam Puluh Enam Rupiah ', 'fgdfg', '00000/000/00/000/00', '1927 6563 7975 431', '07/07/2021 05:22:35'),
(35, '151997482215000', '411121', '200', '10-11', 2019, '98989899', 500, 'Lima Ratus Ribu Rupiah ', 'fbgf', '00001/001/01/001/01', '5768 6055 7256 262', '07/07/2021 05:39:39'),
(36, '151997482215000', '411121', '200', '10-11', 2019, '98989899', 500, 'Lima Ratus Ribu Rupiah ', 'fbgf', '00001/001/01/001/01', '1714 4741 1788 098', '07/07/2021 05:40:28'),
(37, '123456789101112', '411127', '320', '01-02', 2020, '02.83.504.388.688-4155.7', 1000, 'Sembilan Ratus Sembilan Puluh Sembilan Ribu Sembilan Ratus Sembilan Puluh Sembilan Rupiah ', 'fhfgh', '03819/493/96/468/88', '1127 1270 5452 654', '08/08/2021 05:26:58'),
(38, '123456789101112', '411127', '320', '01-02', 2020, '02.83.504.388.688-4155.7', 1000, 'Sembilan Ratus Sembilan Puluh Sembilan Ribu Sembilan Ratus Sembilan Puluh Sembilan Rupiah ', 'fhfgh', '03819/493/96/468/88', '3510 8839 8533 869', '08/08/2021 09:22:57'),
(39, '123456789101112', '411123', '320', '07-09', 2011, '99.99.999.999.999-9999.9', 673, 'Enam Ratus Tujuh Puluh Tiga Ribu Tiga Ratus Tiga Puluh Tiga Rupiah ', 'hdfhjkd', '99999/999/99/999/99', '7829 7097 0955 246', '18/09/2021 06:12:32'),
(40, '949596284446000', '411121', '200', '01-02', 2009, '', 1000, ' Satu Juta Rupiah ', 'test', '', '7341 4012 1008 970', '19/09/2021 04:02:31'),
(41, '949596284446000', '411123', '199', '01-02', 2019, '98.76.543.219.999-9999.9', 1200, ' Satu Juta Dua Ratus Ribu Rupiah ', 'test', '00000/000/00/000/00', '2395 6080 4668 587', '19/09/2021 05:37:46'),
(42, '079720179215001', '411128', '404', '06-08', 2020, '11.11.111.111.111-1111.1', 342, 'Tiga Ratus Empat Puluh Dua Ribu Tiga Ratus Empat Puluh Dua Rupiah ', 'fgdfgdfgdfgdfg', '11111/111/11/111/11', '9511 5673 9938 886', '02/10/2021 01:28:22'),
(43, '123456789101113', '411121', '100', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Pasal 21 bulan Januari 2021', '', '5861 8357 8511 123', '17/12/2021 06:17:21'),
(44, '123456789101113', '411121', '100', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh 21 januari 2021', '', '0533 0275 5590 392', '22/12/2021 07:23:45'),
(45, '123456789101113', '411121', '100', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'pph 21 januari 2021', '', '1626 7388 2053 455', '22/12/2021 07:49:58'),
(46, '123456789101113', '411121', '100', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'pph 21 januari 2021', '', '0411 5195 5620 024', '22/12/2021 08:00:47'),
(47, '123456789101113', '411121', '100', '01-02', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'pph 21 januari 2021', '', '4333 6190 9766 491', '22/12/2021 08:20:13'),
(48, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'pph final pp 23/2018 bulan januari 2021', '', '2733 9049 2134 319', '22/12/2021 08:42:23'),
(49, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'pph final pp 23/2018 bulan januari 2021', '', '2365 5088 7291 599', '22/12/2021 08:50:41'),
(50, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'pph final pp 23/2018 bulan januari 2021', '', '5568 4892 9558 129', '22/12/2021 09:05:13'),
(51, '123456789101113', '411121', '100', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'pph 21 januari 2021', '', '0130 1817 9286 134', '27/12/2021 06:25:00'),
(52, '123456789101113', '411121', '100', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'pph 21 januari 2021', '', '6455 1809 0124 716', '27/12/2021 06:32:37'),
(53, '123456789101113', '411121', '100', '01-01', 2021, '', 1150, ' Satu Juta Seratus Lima Puluh Ribu Rupiah ', 'PPh Pasal 21', '', '0476 2652 9368 608', '29/12/2021 08:17:29'),
(54, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '9965 2212 2809 867', '15/01/2022 02:41:51'),
(55, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final Bulan Januari 2021', '', '6878 6537 8336 413', '15/01/2022 02:41:50'),
(56, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '6527 1890 2548 966', '15/01/2022 02:41:53'),
(57, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final Bulan Januari 2021', '', '6897 9392 7977 437', '15/01/2022 02:41:58'),
(58, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '0705 6009 5588 529', '15/01/2022 02:41:52'),
(59, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final Bulan Januari 2021', '', '2942 6560 7253 804', '15/01/2022 02:42:03'),
(60, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'pph final bulan januari 2021', '', '9220 5531 1828 172', '15/01/2022 02:41:57'),
(61, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh final bulan januari 2021', '', '7605 5266 5831 198', '15/01/2022 02:41:58'),
(62, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '8609 1174 6182 007', '15/01/2022 02:42:09'),
(63, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'pph final bulan januari 2021', '', '7924 3427 6728 883', '15/01/2022 02:42:06'),
(64, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '3268 8330 8579 254', '15/01/2022 02:42:36'),
(65, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final 2 Januari 2021', '', '0309 3737 8657 888', '15/01/2022 02:42:48'),
(66, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPh Final Januari 2021', '', '9100 0276 7330 162', '15/01/2022 04:13:54'),
(67, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPh final januari 2021', '', '1417 0576 9823 293', '15/01/2022 04:14:07'),
(68, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', '', '', '5411 9631 0416 522', '15/01/2022 04:13:59'),
(69, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPH Final bulan Januari 2021', '', '9375 6235 3584 856', '15/01/2022 04:13:53'),
(70, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', '-', '', '2591 3003 2474 952', '15/01/2022 04:14:00'),
(71, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPH FINAL bulan Januari 2021', '', '8028 9313 6050 443', '15/01/2022 04:14:04'),
(72, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPh Final Januari ', '', '3848 3073 3802 666', '15/01/2022 04:14:09'),
(73, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', '', '', '9032 5092 0170 321', '15/01/2022 04:14:05'),
(74, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPh Final Bulan Januari 2021', '', '5024 4398 5852 427', '15/01/2022 04:14:17'),
(75, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPH final bulan januari 2021', '', '4204 0808 3376 133', '15/01/2022 04:14:19'),
(76, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPh final 2021', '', '7261 3483 5160 777', '15/01/2022 04:14:29'),
(77, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'PPh Final Bulan Januari', '', '9489 4861 7885 538', '15/01/2022 04:14:42'),
(78, '151997482215000', '411128', '420', '01-01', 2021, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', '', '', '3372 1020 1773 822', '15/01/2022 04:14:35'),
(79, '151997482215000', '411128', '420', '01-01', 2019, '', 2500, ' Dua Juta Lima Ratus Ribu Rupiah ', 'pph final 2021', '', '7038 2466 1499 928', '15/01/2022 04:14:52'),
(80, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '4143 6990 3519 114', '15/01/2022 14:07:26'),
(81, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM 2021', '', '0301 4686 3902 591', '16/01/2022 02:21:03'),
(82, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'Umkm januari 2021', '', '9471 3170 1115 381', '16/01/2022 02:21:12'),
(83, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM Bulan Januari 2021', '', '3936 9686 1261 774', '16/01/2022 02:21:07'),
(84, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh final UMKM Januari 2021', '', '3380 0731 8203 060', '16/01/2022 02:21:03'),
(85, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM bulan januari', '', '6359 0436 8321 391', '16/01/2022 02:21:09'),
(86, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM Bulan Januari 2021', '', '3644 0770 3534 402', '16/01/2022 02:21:05'),
(87, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM bulan Januari 2021', '', '1040 0866 1145 356', '16/01/2022 02:21:11'),
(88, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM bulan Januari 2021', '', '0666 9383 3817 954', '16/01/2022 02:21:04'),
(89, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM bulan Januari 2021', '', '2775 0256 2973 524', '16/01/2022 02:21:23'),
(90, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM bulan Januari 2021', '', '5644 2168 9757 470', '16/01/2022 02:21:09'),
(91, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM bulan Januari 2021', '', '7735 9973 8469 710', '16/01/2022 02:21:09'),
(92, '151997482215000', '411128', '420', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', 'PPh Final UMKM bulan january 2021', '', '5970 6642 0658 912', '16/01/2022 02:21:21'),
(93, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPH FINAL UMKM BULAN JANUARI 2021 ', '', '6286 6558 4832 001', '16/01/2022 04:00:13'),
(94, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh final UMKM bulan januari 2021', '', '0912 3903 9298 999', '16/01/2022 04:00:15'),
(95, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final UMKM Bulan Januari 2021', '', '6464 4741 8671 011', '16/01/2022 04:00:10'),
(96, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final UMKM Bulan Januari 2021 ', '', '0836 1951 1222 206', '16/01/2022 04:00:14'),
(97, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final UMKM 2021', '', '8964 6253 4000 679', '16/01/2022 04:00:16'),
(98, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final UMKM Bulan Januari 2021', '', '4453 8922 4282 032', '16/01/2022 04:00:21'),
(99, '151997482215000', '411128', '402', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final umkm Bulan Januari 2021', '', '8552 5759 9050 954', '16/01/2022 04:00:24'),
(100, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final UMKM Bulan Januari 2021', '', '9423 6185 4933 572', '16/01/2022 04:00:17'),
(101, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final UMKM Bulan Januari 2021', '', '8692 8465 5852 731', '16/01/2022 04:00:25'),
(102, '151997482215000', '411128', '420', '01-01', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh final UMKM bulan januari 2021', '', '8854 7863 5927 694', '16/01/2022 04:00:29'),
(103, '151997482215000', '411128', '402', '01-02', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final 2021', '', '1447 9591 9635 265', '16/01/2022 04:00:47'),
(104, '151997482215000', '411128', '402', '01-02', 2021, '', 1500, ' Satu Juta Lima Ratus Ribu Rupiah ', 'PPh Final 2021', '', '6545 8200 7694 586', '16/01/2022 04:01:03'),
(105, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '8128 2861 1665 890', '19/01/2022 03:27:16'),
(106, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final Bulan Januari 2021', '', '1883 5108 8848 990', '19/01/2022 04:42:30'),
(107, '151997482215000', '411128', '420', '01-01', 2021, '', 500, 'Lima Ratus Ribu Rupiah ', 'PPh Final bulan Januari 2021', '', '4326 0549 8545 645', '21/01/2022 16:28:56'),
(108, '151997482215000', '411121', '100', '01-01', 2021, '', 1000, ' Satu Juta Rupiah ', '', '', '3939 8450 6575 926', '12/04/2022 07:35:12'),
(109, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh pasal 21/26 masa Januari', '', '4952 8541 4932 713', '06/05/2022 03:56:47'),
(110, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran Pph 21/26 Masa Januari ', '', '3373 0378 3710 317', '06/05/2022 03:56:57'),
(111, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran Pph 21/25 masa januari', '', '7667 3863 5451 093', '06/05/2022 03:57:01'),
(112, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'pembayaran PPH PASAL 21 /26 MASA JANUARI', '', '7254 2376 4943 526', '06/05/2022 03:57:23'),
(113, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh pasal 21 /26 masa januari ', '', '6426 2779 9992 636', '06/05/2022 03:57:50'),
(114, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh pasal 21', '', '1159 2254 4946 562', '06/05/2022 03:57:58'),
(115, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh Pasal 21/26 masa Januari', '', '7666 9023 6510 551', '06/05/2022 03:57:49'),
(116, '151997482215000', '411121', '100', '01-01', 2020, '', 13852, ' Tiga Belas Juta Delapan Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'pembayaran PPh pasal 21/26 masa januari 2020', '', '7879 8818 2018 049', '06/05/2022 03:59:16'),
(117, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh pasal 21/26 masa Januari', '', '5531 1395 8502 360', '06/05/2022 03:59:27'),
(118, '151997482215000', '411121', '100', '01-01', 2020, '', 13822, ' Tiga Belas Juta Delapan Ratus Dua Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh Pasal 21 bulan Januari', '', '4293 7073 3276 292', '06/05/2022 04:00:25'),
(119, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh pasal 21/26 masa Januari', '', '0652 3736 9537 945', '06/05/2022 04:00:39'),
(120, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh 21-26 masa Januari', '', '9675 9672 4694 129', '06/05/2022 04:00:47'),
(121, '151997482215000', '411121', '100', '01-01', 2020, '', 13822, ' Tiga Belas Juta Delapan Ratus Dua Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh Pasal 21 bulan Januari', '', '4217 3957 2045 913', '06/05/2022 04:00:24'),
(122, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 133752, 'Seratus Tiga Puluh Tiga Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'pembayaran Pph pasal 21 pada masa bulan januari ', '00000/000/00/000/00', '1548 4185 1688 616', '06/05/2022 04:01:05'),
(123, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 133752, 'Seratus Tiga Puluh Tiga Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh pasal 21 pada masa bulan januari', '', '9045 0996 4650 475', '06/05/2022 04:01:09'),
(124, '151997482215000', '411121', '100', '01-01', 2020, '', 13822, ' Tiga Belas Juta Delapan Ratus Dua Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh Pasal 21 bulan Januari', '', '2465 6680 7929 102', '06/05/2022 04:01:09'),
(125, '151997482215000', '411121', '100', '01-01', 2020, '', 28532, ' Dua Puluh Delapan Juta Lima Ratus Tiga Puluh Dua Ribu Seratus Empat Puluh Dua Rupiah ', 'Pembayaran PPh pasal 21 /26 masa januari', '', '1322 8228 2458 132', '06/05/2022 04:00:54'),
(126, '151997482215000', '411121', '100', '01-01', 2020, '', 13735, ' Tiga Belas Juta Tujuh Ratus Tiga Puluh Lima Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPH PSL 21/26 masa januari', '', '1378 3922 1234 246', '06/05/2022 04:00:56'),
(127, '151997482215000', '411121', '100', '01-01', 2020, '', 14180, ' Empat Belas Juta Seratus Delapan Puluh Ribu Enam Ratus Tujuh Puluh Satu Rupiah ', '', '', '1738 6723 6992 837', '06/05/2022 04:02:00'),
(128, '151997482215000', '411121', '100', '01-01', 2020, '', 14180, ' Empat Belas Juta Seratus Delapan Puluh Ribu Enam Ratus Tujuh Puluh Satu Rupiah ', '', '', '5698 7164 5884 858', '06/05/2022 04:02:03'),
(129, '151997482215000', '411121', '100', '01-02', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', '', '', '9442 0673 5545 420', '06/05/2022 04:03:04'),
(130, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Lima Rupiah ', '', '', '1157 3098 3477 496', '06/05/2022 04:03:15'),
(131, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', '', '', '3118 3396 6012 227', '06/05/2022 04:02:14'),
(132, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh 21-26 Masa Januari', '', '6159 0526 0684 044', '06/05/2022 04:03:49'),
(133, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh 21-26 masa januari', '', '2279 2172 6409 070', '06/05/2022 04:04:03'),
(134, '151997482215000', '411121', '100', '01-01', 2020, '', 13787, ' Tiga Belas Juta Tujuh Ratus Delapan Puluh Tujuh Ribu Sembilan Ratus Tiga Puluh Lima Rupiah ', '', '', '5088 1171 2669 681', '06/05/2022 04:03:59'),
(135, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Lima Rupiah ', '', '', '3363 3862 3355 406', '06/05/2022 04:04:10'),
(136, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pengisian PPh 21 Pada Masa Bulan Januari', '00000/000/00/000/00', '7435 8055 5905 846', '06/05/2022 04:05:03'),
(137, '151997482215000', '411121', '100', '01-01', 2020, '', 13822, ' Tiga Belas Juta Delapan Ratus Dua Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh Pasal 21 bulan Januari', '', '8620 3117 3826 355', '06/05/2022 04:00:59'),
(138, '151997482215000', '411121', '100', '01-01', 2020, '', 13787, ' Tiga Belas Juta Tujuh Ratus Delapan Puluh Tujuh Ribu Sembilan Ratus Tiga Puluh Lima Rupiah ', '', '', '4332 8516 1273 022', '06/05/2022 04:05:28'),
(139, '151997482215000', '411121', '100', '01-01', 2020, '', 13852, ' Tiga Belas Juta Delapan Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', '', '', '2083 9876 6090 247', '06/05/2022 04:06:36'),
(140, '151997482215000', '411121', '100', '01-01', 2020, '', 13822, ' Tiga Belas Juta Delapan Ratus Dua Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh Pasal 21 Bulan Januarin ', '', '9931 2374 5308 328', '06/05/2022 04:06:47'),
(141, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran Pph 21/26 Pada Masa Januari', '', '2123 1825 2239 396', '06/05/2022 04:08:17'),
(142, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran Pph 21/26 Pada Masa Januari', '', '5840 5897 3152 209', '06/05/2022 04:08:27'),
(143, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 7560, ' Tujuh Juta Lima Ratus Enam Puluh Ribu Rupiah ', 'Pembayaran PPh 21 masa Januari 2020', '00000/000/00/000/00', '0372 6003 6488 927', '06/05/2022 04:12:11'),
(144, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 8035, ' Delapan Juta Tiga Puluh Lima Ribu Rupiah ', 'pembayaran PPh 21 masa januari 2020.', '00000/000/00/000/00', '9786 2026 8770 958', '06/05/2022 04:14:01'),
(145, '151997482215000', '411121', '100', '01-01', 2020, '00.00.000.000.000-0000.0', 8035, ' Delapan Juta Tiga Puluh Lima Ribu Rupiah ', 'Pembayaran PPh 21 masa Januari 2020', '00000/000/00/000/00', '1717 0112 6878 851', '06/05/2022 04:15:43'),
(146, '151997482215000', '411121', '100', '01-01', 2020, '', 13713, ' Tiga Belas Juta Tujuh Ratus Tiga Belas Ribu Enam Ratus Empat Puluh Sembilan Rupiah ', '', '', '8027 2556 4854 309', '06/05/2022 04:21:51'),
(147, '151997482215000', '411121', '100', '12-01', 2020, '', 51162, ' Lima Puluh Satu Juta Seratus Enam Puluh Dua Ribu Tiga Ratus Empat Puluh Rupiah ', '', '', '6540 9324 5919 242', '06/05/2022 10:04:43'),
(148, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh 21- 26', '', '3071 5891 4683 284', '06/05/2022 11:40:12'),
(149, '151997482215000', '411121', '100', '01-01', 2020, '', 13752, ' Tiga Belas Juta Tujuh Ratus Lima Puluh Dua Ribu Tiga Ratus Tiga Puluh Enam Rupiah ', 'Pembayaran PPh 21-26', '', '3080 6926 6794 224', '06/05/2022 15:08:03'),
(150, '151997482215000', '411125', '200', '01-01', 2021, '', 100, 'Seratus Ribu Rupiah ', '', '', '0867 9033 7385 460', '16/05/2022 07:24:33'),
(151, '123456789101113', '411121', '100', '01-01', 2021, '', 498, 'Empat Ratus Sembilan Puluh Delapan Ribu Tiga Ratus Dua Puluh Dua Rupiah ', 'PPh Pasal 21 Bulan Januari 2021', '', '6190 9608 9322 856', '17/05/2022 02:58:44'),
(152, '123456789101113', '411121', '100', '01-01', 2020, '', 5108, ' Lima Juta Seratus Delapan Ribu Rupiah ', 'PPh 21 Januari 2020', '', '5621 6824 5741 177', '23/06/2022 03:33:19'),
(153, '151997482215000', '411131', '100', '12-10', 2007, '', 2341, ' Dua Milyar Tiga Ratus Empat Puluh Satu Juta Tiga Ratus Empat Puluh Tiga Ribu Tiga Ratus Tiga Puluh Tiga Rupiah ', 'popol', '', '3580 2194 9791 232', '02/11/2022 19:26:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spt_1770`
--

CREATE TABLE `tb_spt_1770` (
  `id_spt_1770` int(11) NOT NULL,
  `npwp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_spt_1770`
--

INSERT INTO `tb_spt_1770` (`id_spt_1770`, `npwp`) VALUES
(23, '079720179215001'),
(13, '081875169215000'),
(11, '082049040215000'),
(22, '098899704121000'),
(8, '123456789101112'),
(18, '151991892215000'),
(9, '151997482215000'),
(19, '254147549592000'),
(20, '269129990656000'),
(16, '447464074629000'),
(15, '494461502609000'),
(12, '499551490215000'),
(21, '690829646606000'),
(14, '949596284446000'),
(17, '959860588211000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spt_1770s`
--

CREATE TABLE `tb_spt_1770s` (
  `id_spt_1770s` int(15) NOT NULL,
  `npwp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_spt_1770s`
--

INSERT INTO `tb_spt_1770s` (`id_spt_1770s`, `npwp`) VALUES
(10, '151997482215000'),
(15, '949596284446000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spt_1770ss`
--

CREATE TABLE `tb_spt_1770ss` (
  `id` int(11) NOT NULL,
  `id_spt_1770ss` varchar(20) NOT NULL,
  `thn_pajak` year(4) NOT NULL,
  `status_spt` enum('normal','pembetulan','','') NOT NULL,
  `pembetulan_ke` varchar(30) NOT NULL,
  `penghasilan_bruto` varchar(30) NOT NULL,
  `pengurangan` varchar(30) NOT NULL,
  `ptkp` varchar(30) NOT NULL,
  `pkp` varchar(30) NOT NULL,
  `pp_terutang` varchar(30) NOT NULL,
  `pp_dipotong` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `pp_final` varchar(30) NOT NULL,
  `pp_final_terutang` varchar(30) NOT NULL,
  `p_objek_pajak` varchar(30) NOT NULL,
  `jml_harta` varchar(30) NOT NULL,
  `jml_kwj_utang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_spt_1770ss`
--

INSERT INTO `tb_spt_1770ss` (`id`, `id_spt_1770ss`, `thn_pajak`, `status_spt`, `pembetulan_ke`, `penghasilan_bruto`, `pengurangan`, `ptkp`, `pkp`, `pp_terutang`, `pp_dipotong`, `status`, `total`, `pp_final`, `pp_final_terutang`, `p_objek_pajak`, `jml_harta`, `jml_kwj_utang`) VALUES
(13, '123456789101112', 2020, 'normal', '0', 'Rp. 59.000.000', 'Rp. 2.950.000', 'Rp. 54.000.000', 'Rp. 2.050.000', 'Rp. 102.500', 'Rp. 102.500', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 10.000.000', 'Rp. 5.000.000'),
(14, '151997482215000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 58.500.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 25.000.000', 'Rp. 0'),
(15, '082049040215000', 2020, 'normal', '0', 'Rp. 58.000.000', 'Rp. 2.500.000', 'Rp. 54.000.000', 'Rp. 1.500.000', 'Rp. 75.000', 'Rp. 75.000', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 20.000.000', 'Rp. 3.000.000'),
(16, '081875169215000', 2020, 'normal', '0', 'Rp. 57.000.000', 'Rp. 1.500.000', 'Rp. 63.000.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 18.000.000', 'Rp. 4.000.000'),
(17, '499551490215000', 2020, 'normal', '0', 'Rp. 59.500.000', 'Rp. 3.990.000', 'Rp. 54.000.000', 'Rp. 1.510.000', 'Rp. 75.500', 'Rp. 75.500', 'nihil', 'Rp. 0', 'Rp. 200.000', 'Rp. 50.000', 'Rp. 0', 'Rp. 50.000.000', 'Rp. 0'),
(18, '499550945215000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 54.000.000', 'Rp. 3.000.000', 'Rp. 150.000', 'Rp. 150.000', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 33.000.000', 'Rp. 0'),
(19, '499551091215000', 2020, 'normal', '0', 'Rp. 59.000.000', 'Rp. 2.950.000', 'Rp. 54.000.000', 'Rp. 2.050.000', 'Rp. 102.500', 'Rp. 102.500', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 10.000.000', 'Rp. 5.000.000'),
(20, '499551964215000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 58.500.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 25.000.000', 'Rp. 0'),
(21, '269121865602000', 2020, 'normal', '0', 'Rp. 58.000.000', 'Rp. 2.500.000', 'Rp. 54.000.000', 'Rp. 1.500.000', 'Rp. 75.000', 'Rp. 75.000', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 20.000.000', 'Rp. 3.000.000'),
(22, '079720179215001', 2021, 'normal', '0', 'Rp. 57.000.000', 'Rp. 1.500.000', 'Rp. 63.000.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'lebih bayar', 'Rp. 1.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 18.000.000', 'Rp. 4.000.000'),
(23, '098899704121000', 2020, 'normal', '0', 'Rp. 59.500.000', 'Rp. 3.990.000', 'Rp. 54.000.000', 'Rp. 1.510.000', 'Rp. 75.500', 'Rp. 75.500', 'nihil', 'Rp. 0', 'Rp. 200.000', 'Rp. 50.000', 'Rp. 0', 'Rp. 50.000.000', 'Rp. 0'),
(24, '690829646606000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 54.000.000', 'Rp. 3.000.000', 'Rp. 150.000', 'Rp. 150.000', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 33.000.000', 'Rp. 0'),
(25, '269129990656000', 2020, 'normal', '0', 'Rp. 59.000.000', 'Rp. 2.950.000', 'Rp. 54.000.000', 'Rp. 2.050.000', 'Rp. 102.500', 'Rp. 102.500', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 10.000.000', 'Rp. 5.000.000'),
(26, '264427287509000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 58.500.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 25.000.000', 'Rp. 0'),
(27, '254147549592000', 2020, 'normal', '0', 'Rp. 58.000.000', 'Rp. 2.500.000', 'Rp. 54.000.000', 'Rp. 1.500.000', 'Rp. 75.000', 'Rp. 75.000', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 20.000.000', 'Rp. 3.000.000'),
(28, '151991892215000', 2020, 'normal', '0', 'Rp. 57.000.000', 'Rp. 1.500.000', 'Rp. 63.000.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 18.000.000', 'Rp. 4.000.000'),
(29, '959860588211000', 2020, 'normal', '0', 'Rp. 59.500.000', 'Rp. 3.990.000', 'Rp. 54.000.000', 'Rp. 1.510.000', 'Rp. 75.500', 'Rp. 75.500', 'nihil', 'Rp. 0', 'Rp. 200.000', 'Rp. 50.000', 'Rp. 0', 'Rp. 50.000.000', 'Rp. 0'),
(30, '447464074629000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 54.000.000', 'Rp. 3.000.000', 'Rp. 150.000', 'Rp. 150.000', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 33.000.000', 'Rp. 0'),
(31, '494461502609000', 2020, 'normal', '0', 'Rp. 59.000.000', 'Rp. 2.950.000', 'Rp. 54.000.000', 'Rp. 2.050.000', 'Rp. 102.500', 'Rp. 102.500', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 10.000.000', 'Rp. 5.000.000'),
(32, '949596284446000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 58.500.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 25.000.000', 'Rp. 0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spt_1771`
--

CREATE TABLE `tb_spt_1771` (
  `id_spt_1771` int(11) NOT NULL,
  `npwp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_spt_1771`
--

INSERT INTO `tb_spt_1771` (`id_spt_1771`, `npwp`) VALUES
(57, '081862495215001'),
(39, '081875155215000'),
(37, '081881297215000'),
(48, '082044678215000'),
(36, '123456789101113'),
(40, '148279581215000'),
(46, '246251821422000'),
(51, '446852212604000'),
(53, '447445696549000'),
(52, '450999858542000'),
(38, '499551067215000'),
(42, '677009618625000'),
(55, '775074024522000'),
(44, '795786607541000'),
(41, '951499921224000'),
(54, '952964589497000'),
(43, '956629298524000'),
(47, '956681445201000'),
(45, '956685749659000'),
(56, '962722480655000'),
(49, '962722999215000'),
(50, '964740696505000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload_file_1770`
--

CREATE TABLE `tb_upload_file_1770` (
  `id` int(11) NOT NULL,
  `id_spt_1770` varchar(20) NOT NULL,
  `file_spt` varchar(100) NOT NULL,
  `lampiran_1` varchar(100) NOT NULL,
  `lampiran_2` varchar(100) NOT NULL,
  `lampiran_3` varchar(100) NOT NULL,
  `lampiran_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_upload_file_1770`
--

INSERT INTO `tb_upload_file_1770` (`id`, `id_spt_1770`, `file_spt`, `lampiran_1`, `lampiran_2`, `lampiran_3`, `lampiran_4`) VALUES
(11, '151997482215000', '151997482215000.xlsx', 'LaporanKeuangan-151997482215000.pdf', '', '', ''),
(13, '082049040215000', '082049040215000.xlsx', 'LaporanKeuangan-082049040215000.pdf', '', '', ''),
(15, '081875169215000', '081875169215000.xlsx', '081875169215000-Lampiran.pdf', '', '', ''),
(16, '949596284446000', '949596284446000.xlsx', '949596284446000-Lampiran.pdf', '', '', ''),
(17, '494461502609000', '494461502609000.xlsx', '(3)34.pdf', '', '', ''),
(18, '447464074629000', '447464074629000.xlsx', '447464074629000-lampiran.pdf', '', '', ''),
(19, '959860588211000', '959860588211000.xlsx', 'LampiranKeuangan-959860588211000.pdf', '', '', ''),
(20, '151991892215000', '151991892215000.xlsx', '151991892215000-lampiran.pdf', '', '', ''),
(21, '254147549592000', '254147549592000.xlsx', '254147549592000.pdf', '', '', ''),
(22, '269129990656000', '269129990656000.xlsx', '269129990656000-lampiran.pdf', '', '', ''),
(23, '690829646606000', '690829646606000.xlsx', 'LaporanKeuangan-690829646606000.pdf', '', '', ''),
(24, '098899704121000', '098899704121000.xlsx', '098899704121000-lampiran.pdf', '', '', ''),
(25, '079720179215001', '079720179215001.xlsx', '079720179215001-lampiran.pdf', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload_file_1771`
--

CREATE TABLE `tb_upload_file_1771` (
  `id` int(11) NOT NULL,
  `id_spt_1771` varchar(20) NOT NULL,
  `file_spt_1771` varchar(100) NOT NULL,
  `lampiran_keuangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_upload_file_1771`
--

INSERT INTO `tb_upload_file_1771` (`id`, `id_spt_1771`, `file_spt_1771`, `lampiran_keuangan`) VALUES
(42, '123456789101113', '123456789101113.xlsx', 'Laporan Keuangan-123456789101113.pdf'),
(43, '081881297215000', '081881297215000.xlsx', ''),
(44, '499551067215000', '499551067215000.xlsx', ''),
(45, '081875155215000', '081875155215000.xlsx', '210108003971NPWP.pdf'),
(46, '148279581215000', '148279581215000.xlsx', '148279581215000NPWP.pdf'),
(47, '951499921224000', '951499921224000.xlsx', ''),
(48, '677009618625000', '677009618625000.xlsx', ''),
(49, '956629298524000', '956629298524000.xlsx', ''),
(50, '795786607541000', '795786607541000.xlsx', ''),
(51, '956685749659000', '956685749659000.xlsx', '956685749659000NPWP.pdf'),
(52, '246251821422000', '246251821422000.xlsx', ''),
(53, '956681445201000', '956681445201000.xlsx', '956681445201000NPWP.pdf'),
(54, '082044678215000', '082044678215000.xlsx', '082044678215000NPWP.pdf'),
(55, '962722999215000', '962722999215000.xlsx', ''),
(56, '964740696505000', '964740696505000.xlsx', ''),
(57, '446852212604000', '446852212604000.xlsx', '446852212604000NPWP.pdf'),
(58, '450999858542000', '450999858542000.xlsx', ''),
(59, '447445696549000', '447445696549000.xlsx', ''),
(60, '952964589497000', '952964589497000.xlsx', ''),
(61, '775074024522000', '775074024522000.xlsx', '775074024522000NPWP.pdf'),
(62, '962722480655000', '962722480655000.xlsx', ''),
(63, '081862495215001', '081862495215001.xlsx', '081862495215001NPWP.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bukti_potong_s`
--
ALTER TABLE `tb_bukti_potong_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spt_1770s` (`id_spt_1770s`);

--
-- Indeks untuk tabel `tb_daftarnpwp`
--
ALTER TABLE `tb_daftarnpwp`
  ADD PRIMARY KEY (`id_id`),
  ADD UNIQUE KEY `id_daftar_npwp` (`id_daftar_npwp`),
  ADD UNIQUE KEY `efin` (`efin`);

--
-- Indeks untuk tabel `tb_hasil_lapor_1770`
--
ALTER TABLE `tb_hasil_lapor_1770`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spt_1770` (`id_spt_1770`);

--
-- Indeks untuk tabel `tb_hasil_lapor_1771`
--
ALTER TABLE `tb_hasil_lapor_1771`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spt_1771` (`id_spt_1771`) USING BTREE;

--
-- Indeks untuk tabel `tb_non_bukti_potong_s`
--
ALTER TABLE `tb_non_bukti_potong_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spt_1770s` (`id_spt_1770s`);

--
-- Indeks untuk tabel `tb_paket_langganan`
--
ALTER TABLE `tb_paket_langganan`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `tb_registrasi_akun`
--
ALTER TABLE `tb_registrasi_akun`
  ADD PRIMARY KEY (`id_regis`),
  ADD UNIQUE KEY `npwp` (`npwp`),
  ADD UNIQUE KEY `efin` (`efin`);

--
-- Indeks untuk tabel `tb_riwayat_surat`
--
ALTER TABLE `tb_riwayat_surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npwp` (`npwp`);

--
-- Indeks untuk tabel `tb_spt_1770`
--
ALTER TABLE `tb_spt_1770`
  ADD PRIMARY KEY (`id_spt_1770`),
  ADD KEY `tb_spt_1770_ibfk_1` (`npwp`);

--
-- Indeks untuk tabel `tb_spt_1770s`
--
ALTER TABLE `tb_spt_1770s`
  ADD PRIMARY KEY (`id_spt_1770s`),
  ADD KEY `tb_spt_1770s_ibfk_1` (`npwp`);

--
-- Indeks untuk tabel `tb_spt_1770ss`
--
ALTER TABLE `tb_spt_1770ss`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spt_1770ss` (`id_spt_1770ss`);

--
-- Indeks untuk tabel `tb_spt_1771`
--
ALTER TABLE `tb_spt_1771`
  ADD PRIMARY KEY (`id_spt_1771`),
  ADD KEY `tb_spt_1771_ibfk_1` (`npwp`) USING BTREE;

--
-- Indeks untuk tabel `tb_upload_file_1770`
--
ALTER TABLE `tb_upload_file_1770`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spt_1770` (`id_spt_1770`);

--
-- Indeks untuk tabel `tb_upload_file_1771`
--
ALTER TABLE `tb_upload_file_1771`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spt_1771` (`id_spt_1771`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_bukti_potong_s`
--
ALTER TABLE `tb_bukti_potong_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_daftarnpwp`
--
ALTER TABLE `tb_daftarnpwp`
  MODIFY `id_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_lapor_1770`
--
ALTER TABLE `tb_hasil_lapor_1770`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_lapor_1771`
--
ALTER TABLE `tb_hasil_lapor_1771`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_non_bukti_potong_s`
--
ALTER TABLE `tb_non_bukti_potong_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_paket_langganan`
--
ALTER TABLE `tb_paket_langganan`
  MODIFY `id_paket` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_registrasi_akun`
--
ALTER TABLE `tb_registrasi_akun`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_riwayat_surat`
--
ALTER TABLE `tb_riwayat_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1770`
--
ALTER TABLE `tb_spt_1770`
  MODIFY `id_spt_1770` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1770s`
--
ALTER TABLE `tb_spt_1770s`
  MODIFY `id_spt_1770s` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1770ss`
--
ALTER TABLE `tb_spt_1770ss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1771`
--
ALTER TABLE `tb_spt_1771`
  MODIFY `id_spt_1771` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_upload_file_1770`
--
ALTER TABLE `tb_upload_file_1770`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_upload_file_1771`
--
ALTER TABLE `tb_upload_file_1771`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_bukti_potong_s`
--
ALTER TABLE `tb_bukti_potong_s`
  ADD CONSTRAINT `tb_bukti_potong_s_ibfk_1` FOREIGN KEY (`id_spt_1770s`) REFERENCES `tb_spt_1770s` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_hasil_lapor_1770`
--
ALTER TABLE `tb_hasil_lapor_1770`
  ADD CONSTRAINT `tb_hasil_lapor_1770_ibfk_1` FOREIGN KEY (`id_spt_1770`) REFERENCES `tb_spt_1770` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_hasil_lapor_1771`
--
ALTER TABLE `tb_hasil_lapor_1771`
  ADD CONSTRAINT `tb_hasil_lapor_1771_ibfk_1` FOREIGN KEY (`id_spt_1771`) REFERENCES `tb_spt_1771` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_non_bukti_potong_s`
--
ALTER TABLE `tb_non_bukti_potong_s`
  ADD CONSTRAINT `tb_non_bukti_potong_s_ibfk_1` FOREIGN KEY (`id_spt_1770s`) REFERENCES `tb_spt_1770s` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_registrasi_akun`
--
ALTER TABLE `tb_registrasi_akun`
  ADD CONSTRAINT `tb_registrasi_akun_ibfk_1` FOREIGN KEY (`npwp`) REFERENCES `tb_daftarnpwp` (`id_daftar_npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_riwayat_surat`
--
ALTER TABLE `tb_riwayat_surat`
  ADD CONSTRAINT `tb_riwayat_surat_ibfk_1` FOREIGN KEY (`npwp`) REFERENCES `tb_registrasi_akun` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_spt_1770`
--
ALTER TABLE `tb_spt_1770`
  ADD CONSTRAINT `tb_spt_1770_ibfk_1` FOREIGN KEY (`npwp`) REFERENCES `tb_registrasi_akun` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_spt_1770s`
--
ALTER TABLE `tb_spt_1770s`
  ADD CONSTRAINT `tb_spt_1770s_ibfk_1` FOREIGN KEY (`npwp`) REFERENCES `tb_registrasi_akun` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_spt_1770ss`
--
ALTER TABLE `tb_spt_1770ss`
  ADD CONSTRAINT `tb_spt_1770ss_ibfk_1` FOREIGN KEY (`id_spt_1770ss`) REFERENCES `tb_registrasi_akun` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_spt_1771`
--
ALTER TABLE `tb_spt_1771`
  ADD CONSTRAINT `tb_spt_1771_ibfk_1` FOREIGN KEY (`npwp`) REFERENCES `tb_registrasi_akun` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_upload_file_1770`
--
ALTER TABLE `tb_upload_file_1770`
  ADD CONSTRAINT `tb_upload_file_1770_ibfk_1` FOREIGN KEY (`id_spt_1770`) REFERENCES `tb_spt_1770` (`npwp`);

--
-- Ketidakleluasaan untuk tabel `tb_upload_file_1771`
--
ALTER TABLE `tb_upload_file_1771`
  ADD CONSTRAINT `tb_upload_file_1771_ibfk_1` FOREIGN KEY (`id_spt_1771`) REFERENCES `tb_spt_1771` (`npwp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
