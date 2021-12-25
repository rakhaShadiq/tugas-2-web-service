USE daftarbuku;
CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `penulis` varchar(40) NOT NULL,
  `tahun_terbit` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
USE daftarbuku;
INSERT INTO `buku` (`id`, `judul`, `penerbit`, `penulis`, `tahun_terbit`) VALUES
(1, 'Dasar-Dasar Teknik Informatika', 'deepublish','Novega Pratama Adi','2020'),
(2, 'Metode Penelitian Teknik Informatika', 'deepublish','Ade Johan Maturidi','2020'),
(3, 'Basis Data', 'Informatika','Fathansyah','2018');