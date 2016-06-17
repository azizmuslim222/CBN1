-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ujian_cat.jawaban
CREATE TABLE IF NOT EXISTS `jawaban` (
  `id_jawaban` int(5) NOT NULL AUTO_INCREMENT,
  `id_mhs` int(5) NOT NULL,
  `tgl_tes` date NOT NULL,
  `benar` int(3) NOT NULL DEFAULT '0',
  `salah` int(3) NOT NULL DEFAULT '0',
  `total_nilai` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ujian_cat.jawaban: ~1 rows (approximately)
/*!40000 ALTER TABLE `jawaban` DISABLE KEYS */;
INSERT INTO `jawaban` (`id_jawaban`, `id_mhs`, `tgl_tes`, `benar`, `salah`, `total_nilai`) VALUES
	(1, 1, '2015-02-03', 3, 0, 7);
/*!40000 ALTER TABLE `jawaban` ENABLE KEYS */;


-- Dumping structure for table ujian_cat.jawaban_detail
CREATE TABLE IF NOT EXISTS `jawaban_detail` (
  `id_jawaban_detail` int(5) NOT NULL AUTO_INCREMENT,
  `id_jawaban` int(5) NOT NULL,
  `id_soal` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `jawaban` varchar(2) NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `nilai` int(3) NOT NULL,
  PRIMARY KEY (`id_jawaban_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ujian_cat.jawaban_detail: ~3 rows (approximately)
/*!40000 ALTER TABLE `jawaban_detail` DISABLE KEYS */;
INSERT INTO `jawaban_detail` (`id_jawaban_detail`, `id_jawaban`, `id_soal`, `id_paket`, `jawaban`, `kunci`, `nilai`) VALUES
	(1, 1, 2, 2, 'D', 'D', 1),
	(2, 1, 3, 1, 'D', 'D', 1),
	(3, 1, 1, 3, 'B', 'B', 5);
/*!40000 ALTER TABLE `jawaban_detail` ENABLE KEYS */;


-- Dumping structure for table ujian_cat.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mhs` int(10) NOT NULL AUTO_INCREMENT,
  `nis` int(100) NOT NULL,
  `no_reg` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempun') NOT NULL,
  `agama` enum('budha','hindu','islam','kristen','konghucu') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `prestasi` text NOT NULL,
  `prestasi_khusus` text NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `pek_ortu` varchar(200) NOT NULL,
  `peng_ortu` int(100) NOT NULL,
  `pil_prodi` varchar(200) NOT NULL,
  `alasan` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ujian_cat.mahasiswa: ~2 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id_mhs`, `nis`, `no_reg`, `nama`, `ttl`, `jk`, `agama`, `alamat`, `asal`, `jurusan`, `prestasi`, `prestasi_khusus`, `nama_ortu`, `pek_ortu`, `peng_ortu`, `pil_prodi`, `alasan`, `foto`) VALUES
	(1, 803, '1', 'RENDRA SAPUTRA', 'BANJARMASIN', 'Laki-Laki', 'islam', 'Jl. Kelayan A Gg 12 RT 16 No. 14', 'SMK 1 Banjarmasin', 'Penjualan', '-', '-', 'Akmad Kartolo', 'Wiraswasta', 1, 'Teknik Informatika', '-', ''),
	(2, 123, '2', 'Muhammad Rizal', 'BANJARMASIN', 'Laki-Laki', 'budha', 'Jl. Kelayan A Gg 12 RT 16 No. 14', 'SMA 7 Banjarmasin', 'IPA', '-', '-', 'Akmad Kartolo', 'Wiraswasta', 3, 'Teknik Mesin', '-', '0');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;


-- Dumping structure for table ujian_cat.paket
CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(4) NOT NULL AUTO_INCREMENT,
  `paket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ujian_cat.paket: ~3 rows (approximately)
/*!40000 ALTER TABLE `paket` DISABLE KEYS */;
INSERT INTO `paket` (`id_paket`, `paket`) VALUES
	(1, 'PKN'),
	(2, 'MATEMATIKA'),
	(3, 'PSIKOTES');
/*!40000 ALTER TABLE `paket` ENABLE KEYS */;


-- Dumping structure for table ujian_cat.soal
CREATE TABLE IF NOT EXISTS `soal` (
  `id_soal` int(4) NOT NULL AUTO_INCREMENT,
  `paket` varchar(100) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `status` enum('tampil','tidak') NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ujian_cat.soal: ~3 rows (approximately)
/*!40000 ALTER TABLE `soal` DISABLE KEYS */;
INSERT INTO `soal` (`id_soal`, `paket`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`, `status`) VALUES
	(1, '3', 'Kedaulatan', 'Kekuatan', 'Supremasi', 'Negara', 'Presiden', 'Kemerdekaan', 'B', 'tampil'),
	(2, '2', '5,35 : 0,25 ?', '0,0214', '0,214', '2,14', '21,4', '214', 'D', 'tampil'),
	(3, '1', 'Melaksanakan peraturan perundang-undangan bernafaskan Pancasila berarti:', 'Mengamalkan Pancasila secara subyektif', 'Mengamalkan Pancasila secara teoritis', 'Mengamalkan Pancasila secara obyektif', 'Mengamalkan Pancasila secara praktis', 'Mengamalkan Pancasila secara sekularisme', 'D', 'tampil');
/*!40000 ALTER TABLE `soal` ENABLE KEYS */;


-- Dumping structure for table ujian_cat.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nis` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('admin','siswa') NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table ujian_cat.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nis`, `nama`, `username`, `pass`, `level`, `status`) VALUES
	(1, 12, 'admin', 'admin', 'admin', 'admin', 1),
	(24, 803, 'RENDRA SAPUTRA', 'rendra', '123', 'siswa', 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
