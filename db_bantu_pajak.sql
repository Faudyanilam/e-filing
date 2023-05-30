-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 11.48
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bantu_pajak`
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
(3, 'Admin', 'AdminSPT', 'admin');

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
(13, '151997482215000', 2020, 'normal', '0', 'Pasal 21', '532991425215000', 'PT Abadi Jaya', '0902329909001', '2020-12-31', 'Rp. 22.825.000', 'Rp. 244.000.000', 'Sewa Atas Tanah dan Bangunan', 'Rp. 60.000.000', 'Rp. 6.000.000'),
(16, '082049040215000', 2021, 'normal', '0', 'Pasal 21', '033333333333333', 'Namaku', '098765', '2021-04-16', 'Rp. 0', 'Rp. 0', 'Bunga/Diskonto Obligasi', 'Rp. 0', 'Rp. 0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftarnpwp`
--

CREATE TABLE `tb_daftarnpwp` (
  `id_id` int(11) NOT NULL,
  `id_daftar_npwp` varchar(20) NOT NULL,
  `jenis_wp` enum('Orang Pribadi','Badan','','') NOT NULL,
  `nama_ktp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `efin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftarnpwp`
--

INSERT INTO `tb_daftarnpwp` (`id_id`, `id_daftar_npwp`, `jenis_wp`, `nama_ktp`, `email`, `password`, `no_hp`, `pertanyaan`, `jawaban`, `efin`) VALUES
(1, '151997482215000', 'Orang Pribadi', 'Ahmad Sumawan', 'ahmadsumawan@gmail.com', 'ahmadsumawan44', '085668101234', '2', 'Politeknik Negeri Batam', '4441796088'),
(2, '082049040215000', 'Orang Pribadi', 'Thariq Al Dhaqil', 'thariqaldhaqil@gmail.com', 'thariqaldhaqil', '085668101236', '2', 'Politeknik Negeri Batam', '3801811027'),
(6, '081881297215000', 'Badan', 'Sarah Sagita Putri', 'sarahsagitaputri@gmail.com', '3800576460', '085668101238', '2', 'Politeknik Negeri Batam', '3801811028'),
(7, '081875155215000', 'Badan', 'Hernita Anggraini', 'hernitaanggraini@gmail.com', '4195408482', '085668101240', '2', 'Politeknik Negeri Batam', '4196643049'),
(8, '081875169215000', 'Orang Pribadi', 'Putri Kurnia Wati', 'putrikurniawati@gmail.com', 'putrikurniawati', '085668101242', '2', 'Politeknik Negeri Batam', '2853411375'),
(9, '499551490215000', 'Orang Pribadi', 'Putra Siregar', 'putrasiregar@gmail.com', '1192027663', '085668101244', '2', 'Politeknik Negeri Batam', '1193262230'),
(10, '499551067215000', 'Badan', 'Nasution Silalahi', 'nasutionsilalahi@gmail.com', '6527484562', '085668101246', '2', 'Politeknik Negeri Batam', '6528719129'),
(11, '148279581215000', 'Badan', 'Lasma Andini', 'lasmaandini@gmail.com', '1549801541', '085668101248', '2', 'Politeknik Negeri Batam', '1551036108'),
(12, '499550945215000', 'Orang Pribadi', 'Lula Kamal', 'lulakamal@gmail.com', '3825376410', '085668101250', '2', 'Politeknik Negeri Batam', '3826610977'),
(13, '499551091215000', 'Orang Pribadi', 'Jane Salimar', 'janesalimar@gmail.com', '6626677003', '085668101252', '2', 'Politeknik Negeri Batam', '6627911570'),
(14, '123456789101112', 'Orang Pribadi', 'Wika Arsanti Putri', 'user1@gmail.com', 'user1', '0865434232342', '2', 'Politeknik Negeri Batam', '1912094955'),
(15, '123456789101113', 'Badan', 'User 2', 'fhitriani.002@gmail.com', 'user2', '081234567890', '3', 'Soekarno', '5174201395'),
(16, '499551964215000', 'Orang Pribadi', 'Muhammad Syaiful', 'muhammadsyaiful@gmail.com', '1390657007', '085668101254', '2', 'Politeknik Negeri Batam', '7573283818');

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
(13, '082049040215000', 'SPT Tahunan', 2020, 0, 'Nihil', 'Rp. 0', 'Kewajiban dokumen yang harus dilampirkan');

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
(42, '123456789101113', 'SPT Tahunan', 2021, 0, 'Nihil', 'Rp. 0', 'Kewajiban dokumen yang harus dilampirkan');

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
(13, '151997482215000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', '043', 'Mobil', 2019, 'Rp. 150.000.000', 'keterangan', '101', 'Bank Mandiri', 'Batam', 2019, 'Rp. 100.000.000', 'Sinta', '2171091509909391', 'Istri', 'IRT', 'Rp. 0', 'Kawin', 'kk', '', 'kw', '0', '', '', '', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 244.000.000', 'Rp. 58.500.000', 'Rp. 185.500.000', 'Rp. 22.825.000', 'Rp. 22.825.000', 'Rp. 22.825.000', 'Rp. 0', 'Rp. 0', 'Nihil', 'Rp. 0'),
(16, '082049040215000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', '011', 'Hartaku', 2021, 'Rp. 0', '', '101', 'Utangku', 'Alamatnya', 2021, 'Rp. 0', 'Nama Keluarga', '033333333333334', 'kandung', 'wirausaha', 'Rp. 0', 'Kawin', 'hb', '033333333333333', 'tk', '0', '', '', '', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Nihil', 'Rp. 0');

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
(20, '081875155215000', '4196643049');

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
(11, '082049040215000'),
(8, '123456789101112'),
(9, '151997482215000'),
(12, '499551490215000');

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
(13, '082049040215000'),
(10, '151997482215000');

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
(4, '081875169215000', 2020, 'normal', '0', 'Rp. 59.000.000', 'Rp. 2.950.000', 'Rp. 54.000.000', 'Rp. 2.050.000', 'Rp. 102.500', 'Rp. 102.500', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 10.000.000', 'Rp. 5.000.000'),
(6, '151997482215000', 2020, 'normal', '0', 'Rp. 60.000.000', 'Rp. 3.000.000', 'Rp. 58.500.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 25.000.000', 'Rp. 0'),
(7, '082049040215000', 2020, 'normal', '0', 'Rp. 58.000.000', 'Rp. 2.500.000', 'Rp. 54.000.000', 'Rp. 1.500.000', 'Rp. 75.000', 'Rp. 75.000', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 20.000.000', 'Rp. 3.000.000'),
(8, '499551490215000', 2020, 'normal', '0', 'Rp. 57.000.000', 'Rp. 1.500.000', 'Rp. 63.000.000', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'nihil', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 0', 'Rp. 18.000.000', 'Rp. 4.000.000');

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
(36, '123456789101113');

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
(13, '082049040215000', '082049040215000.xlsx', 'LaporanKeuangan-082049040215000.pdf', '', '', '');

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
(42, '123456789101113', '123456789101113.xlsx', 'Laporan Keuangan-123456789101113.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testing`
--

CREATE TABLE `testing` (
  `npwp` varchar(30) NOT NULL,
  `efin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testing`
--

INSERT INTO `testing` (`npwp`, `efin`) VALUES
('gf8C0EQvHu', '5WO811pU8U'),
('cpduO3Oeat', 'tNUVf2oz4U');

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
-- Indeks untuk tabel `tb_registrasi_akun`
--
ALTER TABLE `tb_registrasi_akun`
  ADD PRIMARY KEY (`id_regis`),
  ADD UNIQUE KEY `npwp` (`npwp`),
  ADD UNIQUE KEY `efin` (`efin`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_bukti_potong_s`
--
ALTER TABLE `tb_bukti_potong_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_daftarnpwp`
--
ALTER TABLE `tb_daftarnpwp`
  MODIFY `id_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_lapor_1770`
--
ALTER TABLE `tb_hasil_lapor_1770`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_lapor_1771`
--
ALTER TABLE `tb_hasil_lapor_1771`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tb_non_bukti_potong_s`
--
ALTER TABLE `tb_non_bukti_potong_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_registrasi_akun`
--
ALTER TABLE `tb_registrasi_akun`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1770`
--
ALTER TABLE `tb_spt_1770`
  MODIFY `id_spt_1770` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1770s`
--
ALTER TABLE `tb_spt_1770s`
  MODIFY `id_spt_1770s` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1770ss`
--
ALTER TABLE `tb_spt_1770ss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_spt_1771`
--
ALTER TABLE `tb_spt_1771`
  MODIFY `id_spt_1771` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_upload_file_1770`
--
ALTER TABLE `tb_upload_file_1770`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_upload_file_1771`
--
ALTER TABLE `tb_upload_file_1771`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
