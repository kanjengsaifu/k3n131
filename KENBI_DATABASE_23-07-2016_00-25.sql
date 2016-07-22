<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Warning</p>
<p>Message:  mysql_num_fields() expects parameter 1 to be resource, boolean given</p>
<p>Filename: common/dash.php</p>
<p>Line Number: 102</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Warning</p>
<p>Message:  mysql_num_fields() expects parameter 1 to be resource, boolean given</p>
<p>Filename: common/dash.php</p>
<p>Line Number: 102</p>

</div>DROP TABLE IF EXISTS m_guru;

CREATE TABLE `m_guru` (
  `id_guru` tinyint(2) NOT NULL AUTO_INCREMENT,
  `kode_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `mata_pelajaran` varchar(25) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO m_guru VALUES("1","G001","Titin K, M.Pd","MTK","","","");
INSERT INTO m_guru VALUES("2","G002","Ening R, S.Pd","IPA","","","");
INSERT INTO m_guru VALUES("3","G003","Atin T S, S.Pd","B. Ing","","","");
INSERT INTO m_guru VALUES("4","G004","Endang S P, S.Pd","MTK","","","");
INSERT INTO m_guru VALUES("5","G005","Siti Nuryani, S.Pd","B. Ind","","","");
INSERT INTO m_guru VALUES("6","G006","Eka Maila, S.Pd","B. Ing","","","");
INSERT INTO m_guru VALUES("7","G007","Kumaedah Khasanah, S.Pd","IPA / Fisika","","","");
INSERT INTO m_guru VALUES("9","G008","Diah Sit M","IPA","08996815814","","");
INSERT INTO m_guru VALUES("10","G009","Fadli Salman, S.Pd","Kimia","081214829308","asdf","");
INSERT INTO m_guru VALUES("12","G010","Annisa, S.Pd","Biologi","081","Jalan","");


DROP TABLE IF EXISTS m_log;

CREATE TABLE `m_log` (
  `id_log` int(255) NOT NULL AUTO_INCREMENT,
  `pegawai` int(255) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type_user` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO m_log VALUES("1","1","Delete All Data Log","","2016-07-21 10:31:48","super_admin");
INSERT INTO m_log VALUES("2","1","Tambah Data Absensi Siswa","3 - XB","2016-07-21 11:30:45","super_admin");
INSERT INTO m_log VALUES("3","1","Tambah Data Absensi Siswa","3 - XB","2016-07-21 11:32:28","super_admin");
INSERT INTO m_log VALUES("4","1","Tambah Data Absensi Siswa","1 - XA","2016-07-21 11:35:45","super_admin");
INSERT INTO m_log VALUES("5","1","Tambah Data Absensi Siswa","2 - XA","2016-07-21 11:36:54","super_admin");
INSERT INTO m_log VALUES("6","0","Login ","super_admin","2016-07-21 20:07:14","0");
INSERT INTO m_log VALUES("7","1","Tambah Data Absensi Siswa","1 - XA","2016-07-21 20:10:43","super_admin");
INSERT INTO m_log VALUES("8","1","Tambah Data Absensi Siswa","4 - XA","2016-07-21 20:11:48","super_admin");
INSERT INTO m_log VALUES("9","1","Tambah Data Absensi Siswa","5 - XA","2016-07-21 20:12:08","super_admin");
INSERT INTO m_log VALUES("10","1","Ubah Data Absensi Siswa","1410027_23","2016-07-21 20:13:17","super_admin");
INSERT INTO m_log VALUES("11","1","Tambah Data Absen_guru","G006","2016-07-21 20:14:47","super_admin");
INSERT INTO m_log VALUES("12","1","Ubah Data Absen_guru","","2016-07-21 20:15:06","super_admin");
INSERT INTO m_log VALUES("13","1","Tambah Data Pembuatan Dokumen","G001","2016-07-21 20:16:33","super_admin");
INSERT INTO m_log VALUES("14","1","Lunas Pembayaran SPP","PB16070012","2016-07-21 20:27:03","super_admin");
INSERT INTO m_log VALUES("15","1","Tambah Data Pengeluaran","Jemputan bulan juli minggu ke satu","2016-07-21 20:31:06","super_admin");
INSERT INTO m_log VALUES("16","1","Tambah Data Role","","2016-07-21 20:44:21","super_admin");
INSERT INTO m_log VALUES("17","1","Ubah Data Role","","2016-07-21 20:45:05","super_admin");
INSERT INTO m_log VALUES("18","1","Tambah Data User","echa","2016-07-21 20:45:52","super_admin");
INSERT INTO m_log VALUES("19","1","Logout","","2016-07-21 20:46:15","super_admin");
INSERT INTO m_log VALUES("20","0","Login ","chaa","2016-07-21 20:46:23","0");
INSERT INTO m_log VALUES("21","7","Logout","","2016-07-21 20:47:03","admin siswa");
INSERT INTO m_log VALUES("22","0","Login ","super_admin","2016-07-21 20:47:11","0");
INSERT INTO m_log VALUES("23","1","Tambah Data Gaji Guru","HG1607003","2016-07-21 20:48:44","super_admin");
INSERT INTO m_log VALUES("24","1","Tambah Data Gaji Guru","HG1607004","2016-07-21 20:55:56","super_admin");
INSERT INTO m_log VALUES("25","1","Lunas Pembayaran SPP","PB16070013","2016-07-21 21:02:11","super_admin");
INSERT INTO m_log VALUES("26","0","Login ","super_admin","2016-07-22 15:37:42","0");
INSERT INTO m_log VALUES("27","1","Ubah Data Pembuatan Dokumen","","2016-07-22 15:38:04","super_admin");
INSERT INTO m_log VALUES("28","1","Ubah Data User","echa","2016-07-22 16:04:44","super_admin");
INSERT INTO m_log VALUES("29","0","Login ","super_admin","2016-07-23 00:13:31","0");
INSERT INTO m_log VALUES("30","1","Tambah Data Pengeluaran","sisa bulan sebelumnya","2016-07-23 00:14:45","super_admin");


DROP TABLE IF EXISTS m_siswa;

CREATE TABLE `m_siswa` (
  `id_siswa` int(7) NOT NULL AUTO_INCREMENT,
  `kode_siswa` char(7) DEFAULT NULL,
  `nama_siswa` varchar(30) DEFAULT NULL,
  `asal_sekolah` varchar(30) DEFAULT '-',
  `anak_ke` tinyint(1) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `nama_panggilan` varchar(10) DEFAULT '-',
  `jenis_kelamin` varchar(20) DEFAULT '-',
  `tgl_lahir` date DEFAULT '2000-01-01',
  `alamat` varchar(50) DEFAULT '-',
  `agama` varchar(10) DEFAULT '-',
  `telp_siswa` varchar(15) DEFAULT '-',
  `telp_ortu` varchar(15) DEFAULT '-',
  `telp_ortu_2` varchar(15) DEFAULT NULL,
  `nama_ayah` varchar(20) DEFAULT '-',
  `pkj_ayah` varchar(20) DEFAULT '-',
  `nama_ibu` varchar(20) DEFAULT '-',
  `pkj_ibu` varchar(20) DEFAULT '-',
  `tempat_lahir` varchar(20) DEFAULT '-',
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

INSERT INTO m_siswa VALUES("144","1410022","Eggy Radiansyah S","SMAN 1 Baleendah","2","XA","Eggy","Laki-laki","0000-00-00","Jln.. Bojongsoang No.18 Rt.02/01","Islam","089691938166","082117987800","0","Dudi Sutandi","Wirausaha","Sukamta","Ibu Rumah Tangga","Bandung ");
INSERT INTO m_siswa VALUES("145","1410023","M. Difa Aldira H","SMAN 1 Baleendah","1","XA","Difa","Laki-laki","0000-00-00","Kp. Bojong Peuteuy Rt.01/05, Banjaran","Islam","089626786536","089691719231","0","Insan Nuddin Hakim","Pegawai Swasta","Neti Kurnaeti","Ibu Rumah Tangga","Bandung");
INSERT INTO m_siswa VALUES("146","1410024","Muhammad Jessin P","SMAN 1 Baleendah","1","XA","Jessin","Laki-laki","0000-00-00","Komp. Warakauri No.136 Rt.06/10 Kec.Baleendah","Islam","085860921139","081809111818","0","Wendri Helpinal","Wiraswasta","Yenti","Ibu Rumah Tangga","Bandung");
INSERT INTO m_siswa VALUES("147","1410025","M. Fikri Fadhillah","SMAN 1 Baleendah","1","XA","Fikri","Laki-laki","0000-00-00","Jl. Nuri E 14 No.5 Komp. GPA","Islam","081221894097","081221443565","0","Dadang A. Z","PNS","Tintin K","PNS","Bandung");
INSERT INTO m_siswa VALUES("148","1410027","Sherly Dea Yolandita","SMAN 1 Baleendah","1","XA","Sherly ","Perempuan","0000-00-00","Jl. Adipati Agung no. 45 Dlm, Baleendah, Bandung","Islam","088802102445","02292835211","0","Nandang Lukman","Wiraswasta","Imas Wati","Ibu Rumah Tangga","Tasikmalaya");
INSERT INTO m_siswa VALUES("149","1410028","Diani Fahanshah","SMAN 1 Baleendah","3","XA","Diani","Perempuan","0000-00-00","Lamajang Peuntas Rt.03/05 no.120 Desa Citeureup Ke","Islam","089612024125","089612024122","0","Jumadi","Pensiunan PNS","Widayati","Ibu Rumah Tangga","Bandung");
INSERT INTO m_siswa VALUES("150","1410029","Daffa Amalia Putri","SMAN 1 Baleendah","1","XB","Daffa","Perempuan","0000-00-00","Jl. Laswi no. 132 Manggahang, Baleendah","Islam","085659806625","085794588338","0","Ali Tauhid","Wiraswasta","Anita Ningsih","Pegawai Swasta","Bandung");
INSERT INTO m_siswa VALUES("151","1410030","Purwa Rama Panji","SMAN 1 Baleendah","1","XB","Purwa ","Laki-laki","0000-00-00","Jln. Raya Banjaran Rt.08/11 Kec. Baleendah, Kp.Cin","Islam","087821253358","087821918908","0","Asep Saefudin","-","Alis Sarikanah","Ibu Rumah Tangga","Cilacap");
INSERT INTO m_siswa VALUES("152","1410031","Annisya Fitri Melini","SMAN 1 Baleendah","1","XB","Annisya","Perempuan","0000-00-00","Komp. GPA Tahap 3 Jl. Asalia D18 no.25","Islam","082121577593","08121424765","0","Mohammad Ramdhani","Dosen","Titin Mulyawatin","Ibu Rumah Tangga","Majalengka");
INSERT INTO m_siswa VALUES("153","1410032","Permata Hati Insans","SMAN 1 Baleendah","2","XB","Permata","Perempuan","2000-07-06","Jl. Teratai C11 no.15 Rt.01/13 Komp. GPA","Islam","082216387646","0225933463","0","Imam Ansori","Wiraswasta","Lia Vilianti","Ibu Rumah Tangga","Bandung");


DROP TABLE IF EXISTS r_jurnal;

CREATE TABLE `r_jurnal` (
  `id_jurnal` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_jurnal` date DEFAULT NULL,
  `kode_jurnal` varchar(20) DEFAULT NULL,
  `keterangan` text,
  `kredit` int(11) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `kode_transaksi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_jurnal`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO r_jurnal VALUES("6","2016-07-17","D02-0170-003","fotokopi soal latihan fisika","0","50000","D0716005");
INSERT INTO r_jurnal VALUES("7","2016-09-01","D01-0170-003","tinta spidol","0","50000","D0716006");
INSERT INTO r_jurnal VALUES("10","2016-07-17","K01-0170-001","pendaftaran","50000","0","PB16070003");
INSERT INTO r_jurnal VALUES("11","2016-07-17","K02-0170-002","spp annisa","200000","0","PB16070003");
INSERT INTO r_jurnal VALUES("12","2016-07-17","K02-0170-003","","200000","0","PB16070004");
INSERT INTO r_jurnal VALUES("14","2016-07-20","D02-0716-004","fotokopi soal latihan fisika","0","200000","DE1607001");
INSERT INTO r_jurnal VALUES("15","2016-07-20","K01-0716-002","Pendaftaran (Diani Fahanshah)","50000","0","PB16070006");
INSERT INTO r_jurnal VALUES("16","2016-07-20","K02-0716-004","SPP Diani Fahanshah (07/2016)","200000","0","PB16070006");
INSERT INTO r_jurnal VALUES("17","2015-01-12","D01-0115-004","map","0","15000","DE1607002");
INSERT INTO r_jurnal VALUES("22","2015-07-20","K01-0716-005","Pendaftaran (Eggy Radiansyah S)","50000","0","PB16070010");
INSERT INTO r_jurnal VALUES("23","2015-07-20","K02-0716-007","SPP Eggy Radiansyah S (01/2015)","200000","0","PB16070010");
INSERT INTO r_jurnal VALUES("24","2016-07-21","K02-0716-008","SPP Muhammad Jessin P (07/2016)","200000","0","PB16070012");
INSERT INTO r_jurnal VALUES("25","2016-07-21","D08-0716-001","Jemputan bulan juli minggu ke satu","0","125000","DE1607003");
INSERT INTO r_jurnal VALUES("26","2016-07-21","D06-0716-002","Honor Guru - Kumaedah Khasanah, S.Pd (01-2015)","0","660000","HG1607003");
INSERT INTO r_jurnal VALUES("27","2016-07-21","D06-0716-003","Honor Guru - Titin K, M.Pd (07-2016)","0","115000","HG1607004");
INSERT INTO r_jurnal VALUES("28","2016-07-21","K02-0716-009","SPP M. Difa Aldira H (06/2015)","200000","0","PB16070013");
INSERT INTO r_jurnal VALUES("29","2016-07-21","K02-0716-010","SPP M. Difa Aldira H (05/2015)","200000","0","PB16070013");
INSERT INTO r_jurnal VALUES("30","2014-12-31","D07-1214-001","sisa bulan sebelumnya","0","-4851000","DE1607004");


DROP TABLE IF EXISTS t_absen_guru;

CREATE TABLE `t_absen_guru` (
  `id_absen_guru` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_absen` date DEFAULT NULL,
  `kode_guru` varchar(20) DEFAULT NULL,
  `jumlah_jam` int(2) DEFAULT NULL,
  `tingkat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_absen_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO t_absen_guru VALUES("1","2015-01-06","G007","2","SMA");
INSERT INTO t_absen_guru VALUES("2","2015-01-08","G007","2","SMA");
INSERT INTO t_absen_guru VALUES("3","2015-01-12","G007","2","SMA");
INSERT INTO t_absen_guru VALUES("4","2015-01-22","G007","2","SMA");
INSERT INTO t_absen_guru VALUES("6","2015-01-15","G007","2","SMA");
INSERT INTO t_absen_guru VALUES("7","2015-01-27","G007","2","SMA");
INSERT INTO t_absen_guru VALUES("8","2015-01-29","G007","2","SMA");
INSERT INTO t_absen_guru VALUES("9","2015-01-12","G010","2","SMA");
INSERT INTO t_absen_guru VALUES("10","2015-01-19","G010","2","SMA");
INSERT INTO t_absen_guru VALUES("11","2015-01-06","G009","2","SMA");
INSERT INTO t_absen_guru VALUES("12","2015-01-15","G009","2","SMA");
INSERT INTO t_absen_guru VALUES("13","2015-01-19","G009","2","SMA");
INSERT INTO t_absen_guru VALUES("14","2015-01-08","G001","3","SMA");
INSERT INTO t_absen_guru VALUES("15","2015-01-16","G001","2","SMA");
INSERT INTO t_absen_guru VALUES("16","2015-01-22","G001","2","SMA");
INSERT INTO t_absen_guru VALUES("17","2015-01-29","G001","2","SMA");
INSERT INTO t_absen_guru VALUES("18","2016-07-21","G001","2","SMA");


DROP TABLE IF EXISTS t_absen_siswa;

CREATE TABLE `t_absen_siswa` (
  `id_absen_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `kode_siswa` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `pertemuan` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_absen_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO t_absen_siswa VALUES("7","1410022","2016-07-28","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("8","1410023","2016-07-28","Alfa","XA","2");
INSERT INTO t_absen_siswa VALUES("9","1410024","2016-07-28","Alfa","XA","2");
INSERT INTO t_absen_siswa VALUES("10","1410025","2016-07-28","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("11","1410027","2016-07-28","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("12","1410028","2016-07-28","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("13","1410022","2016-07-21","Hadir","XA","1");
INSERT INTO t_absen_siswa VALUES("14","1410023","2016-07-21","Alfa","XA","1");
INSERT INTO t_absen_siswa VALUES("15","1410024","2016-07-21","Hadir","XA","1");
INSERT INTO t_absen_siswa VALUES("16","1410025","2016-07-21","Hadir","XA","1");
INSERT INTO t_absen_siswa VALUES("17","1410027","2016-07-21","Hadir","XA","1");
INSERT INTO t_absen_siswa VALUES("18","1410028","2016-07-21","Hadir","XA","1");
INSERT INTO t_absen_siswa VALUES("19","1410022","2016-07-22","Hadir","XA","4");
INSERT INTO t_absen_siswa VALUES("20","1410023","2016-07-22","Hadir","XA","4");
INSERT INTO t_absen_siswa VALUES("21","1410024","2016-07-22","Hadir","XA","4");
INSERT INTO t_absen_siswa VALUES("22","1410025","2016-07-22","Hadir","XA","4");
INSERT INTO t_absen_siswa VALUES("23","1410027","2016-07-22","Alfa","XA","4");
INSERT INTO t_absen_siswa VALUES("24","1410028","2016-07-22","Hadir","XA","4");
INSERT INTO t_absen_siswa VALUES("25","1410022","2016-07-23","Hadir","XA","5");
INSERT INTO t_absen_siswa VALUES("26","1410023","2016-07-23","Hadir","XA","5");
INSERT INTO t_absen_siswa VALUES("27","1410024","2016-07-23","Hadir","XA","5");
INSERT INTO t_absen_siswa VALUES("28","1410025","2016-07-23","Hadir","XA","5");
INSERT INTO t_absen_siswa VALUES("29","1410027","2016-07-23","Hadir","XA","5");
INSERT INTO t_absen_siswa VALUES("30","1410028","2016-07-23","Alfa","XA","5");


DROP TABLE IF EXISTS t_gaji_guru;

CREATE TABLE `t_gaji_guru` (
  `id_gaji_guru` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(20) DEFAULT NULL,
  `kode_guru` varchar(20) DEFAULT NULL,
  `bulan_tahun` varchar(10) DEFAULT NULL,
  `jml_absen` int(2) DEFAULT NULL,
  `honor_mengajar` int(11) DEFAULT NULL,
  `jml_materi` int(2) DEFAULT NULL,
  `honor_materi` int(11) DEFAULT NULL,
  `jml_soal` int(2) DEFAULT NULL,
  `honor_soal` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `tgl_gaji_guru` date DEFAULT NULL,
  `tingkat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_gaji_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO t_gaji_guru VALUES("1","HG1607003","G007","01-2015","14","40000","2","25000","2","25000","1","2016-07-21","SMA");
INSERT INTO t_gaji_guru VALUES("2","HG1607004","G001","07-2016","2","45000","1","25000","","25000","1","2016-07-21","SMA");


DROP TABLE IF EXISTS t_pembayaran_detail;

CREATE TABLE `t_pembayaran_detail` (
  `id_pembayaran_detail` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(10) DEFAULT NULL,
  `jenis_pembayaran` varchar(20) DEFAULT NULL,
  `bulan` varchar(2) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` text,
  `tahun` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO t_pembayaran_detail VALUES("3","PB16070008","K01","","50000","","0");
INSERT INTO t_pembayaran_detail VALUES("4","PB16070008","K02","02","200000","","2015");
INSERT INTO t_pembayaran_detail VALUES("5","PB16070009","K01","","50000","","0");
INSERT INTO t_pembayaran_detail VALUES("6","PB16070009","K02","01","200000","","2015");
INSERT INTO t_pembayaran_detail VALUES("7","PB16070010","K01","","50000","","0");
INSERT INTO t_pembayaran_detail VALUES("8","PB16070010","K02","01","200000","","2015");
INSERT INTO t_pembayaran_detail VALUES("9","PB16070012","K02","07","200000","","2016");
INSERT INTO t_pembayaran_detail VALUES("10","PB16070013","K02","06","200000","","2015");
INSERT INTO t_pembayaran_detail VALUES("11","PB16070013","K02","05","200000","","2015");


DROP TABLE IF EXISTS t_pembayaran_header;

CREATE TABLE `t_pembayaran_header` (
  `id_spp` int(255) NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(10) NOT NULL,
  `kode_siswa` char(7) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  PRIMARY KEY (`id_spp`,`kode_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO t_pembayaran_header VALUES("1","PB16070007","","","2016-07-20");
INSERT INTO t_pembayaran_header VALUES("4","PB16070010","1410022","Lunas","2016-07-20");
INSERT INTO t_pembayaran_header VALUES("5","PB16070011","","","2016-07-21");
INSERT INTO t_pembayaran_header VALUES("6","PB16070012","1410024","Lunas","2016-07-21");
INSERT INTO t_pembayaran_header VALUES("7","PB16070013","1410023","Lunas","2016-07-21");


DROP TABLE IF EXISTS t_pembuatan_dokumen;

CREATE TABLE `t_pembuatan_dokumen` (
  `id_pembuatan_dok` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pembuatan_dok` date DEFAULT NULL,
  `kode_guru` varchar(20) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `tipe_dok` varchar(20) DEFAULT NULL,
  `tingkat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pembuatan_dok`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO t_pembuatan_dokumen VALUES("1","2015-01-05","G007","materi fisika 1","Materi","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("2","2015-01-12","G007","materi fisika 2","Materi","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("3","2015-01-05","G007","soal TO ","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("4","2015-01-12","G007","soal TO","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("5","2015-01-05","G009","materi kimia 2","Materi","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("6","2015-01-12","G009","soal TO","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("7","2015-01-12","G001","soal TO","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("8","2016-07-20","G001","materi mtk","Materi","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("9","2016-07-21","G001","materi mtk","Materi","SMA");


DROP TABLE IF EXISTS t_pengeluaran;

CREATE TABLE `t_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pengeluaran` varchar(20) DEFAULT NULL,
  `tgl_pengeluaran` date DEFAULT NULL,
  `jenis_pengeluaran` varchar(20) DEFAULT NULL,
  `keterangan` text,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pengeluaran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO t_pengeluaran VALUES("1","DE1607003","2016-07-21","D08","Jemputan bulan juli minggu ke satu","125000");
INSERT INTO t_pengeluaran VALUES("2","DE1607004","2014-12-31","D07","sisa bulan sebelumnya","-4851000");


DROP TABLE IF EXISTS u_counter;

CREATE TABLE `u_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pattern` varchar(20) NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO u_counter VALUES("1","2015","141");
INSERT INTO u_counter VALUES("4","3400","141");
INSERT INTO u_counter VALUES("6","2016","4");
INSERT INTO u_counter VALUES("5","3000","141");
INSERT INTO u_counter VALUES("7","TR","9");
INSERT INTO u_counter VALUES("8","K0716","5");
INSERT INTO u_counter VALUES("9","D0716","7");
INSERT INTO u_counter VALUES("10","D01-0170","4");
INSERT INTO u_counter VALUES("11","D02-0170","4");
INSERT INTO u_counter VALUES("12","D03-0170","1");
INSERT INTO u_counter VALUES("13","PMB1607","1");
INSERT INTO u_counter VALUES("14","PB1607","13");
INSERT INTO u_counter VALUES("15","K02-0170","10");
INSERT INTO u_counter VALUES("16","K01-0170","5");
INSERT INTO u_counter VALUES("17","G","10");
INSERT INTO u_counter VALUES("18","HG1607","4");
INSERT INTO u_counter VALUES("19","D06-0170","3");
INSERT INTO u_counter VALUES("20","DE1607","4");
INSERT INTO u_counter VALUES("21","D08-0170","1");
INSERT INTO u_counter VALUES("22","D07-0170","1");


DROP TABLE IF EXISTS u_list_code;

CREATE TABLE `u_list_code` (
  `id_list_code` int(255) NOT NULL AUTO_INCREMENT,
  `kode_list` varchar(20) DEFAULT NULL,
  `head_list` varchar(50) DEFAULT NULL,
  `nama_list` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_list_code`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

INSERT INTO u_list_code VALUES("1","AG","","Agama","2016-07-13 00:00:00");
INSERT INTO u_list_code VALUES("2","AG","AG","Islam","2016-07-14 00:00:00");
INSERT INTO u_list_code VALUES("3","AG","AG","Protestan","2016-07-15 00:00:00");
INSERT INTO u_list_code VALUES("4","AG","AG","Katolik","2016-07-16 00:00:00");
INSERT INTO u_list_code VALUES("5","AG","AG","Hindu","2016-07-17 00:00:00");
INSERT INTO u_list_code VALUES("6","AG","AG","Budha","2016-07-18 00:00:00");
INSERT INTO u_list_code VALUES("7","MD","","Modul","2016-08-21 00:00:00");
INSERT INTO u_list_code VALUES("8","M","MD","Master","2016-08-22 00:00:00");
INSERT INTO u_list_code VALUES("9","T","MD","Transaksi","2016-08-23 00:00:00");
INSERT INTO u_list_code VALUES("10","R","MD","Report","2016-08-24 00:00:00");
INSERT INTO u_list_code VALUES("12","JK","","Jenis Kelamin","2016-08-27 00:00:00");
INSERT INTO u_list_code VALUES("13","L","JK","Laki-laki","2016-08-28 00:00:00");
INSERT INTO u_list_code VALUES("14","P","JK","Perempuan","2016-08-29 00:00:00");
INSERT INTO u_list_code VALUES("15","KLS","","Kelas","2016-07-14 10:53:01");
INSERT INTO u_list_code VALUES("16","XA","KLS","XA","2016-07-14 10:53:18");
INSERT INTO u_list_code VALUES("17","XB","KLS","XB","2016-07-14 10:53:30");
INSERT INTO u_list_code VALUES("18","JL","","Jurnal","2016-07-16 13:12:11");
INSERT INTO u_list_code VALUES("19","K01","JL","Pendaftaran","2016-07-16 13:12:41");
INSERT INTO u_list_code VALUES("20","K02","JL","SPP","2016-07-16 13:12:58");
INSERT INTO u_list_code VALUES("21","D01","JL","ATK","2016-07-16 13:14:00");
INSERT INTO u_list_code VALUES("22","D02","JL","Fotokopi","2016-07-16 13:14:18");
INSERT INTO u_list_code VALUES("23","D03","JL","Konsumsi","2016-07-16 13:14:30");
INSERT INTO u_list_code VALUES("24","D04","JL","Listrik","2016-07-16 13:14:52");
INSERT INTO u_list_code VALUES("25","D05","JL","Honor Admin","2016-07-16 13:15:29");
INSERT INTO u_list_code VALUES("26","D06","JL","Honor Guru","2016-07-16 13:16:30");
INSERT INTO u_list_code VALUES("27","D07","JL","Lain-lain","2016-07-16 13:16:47");
INSERT INTO u_list_code VALUES("36","U","MD","Utilitas","2016-07-20 12:27:08");
INSERT INTO u_list_code VALUES("37","TK","","Tingkat","2016-07-20 12:53:15");
INSERT INTO u_list_code VALUES("38","SD","TK","SD","2016-07-20 12:53:30");
INSERT INTO u_list_code VALUES("39","SMP","TK","SMP","2016-07-20 12:53:38");
INSERT INTO u_list_code VALUES("40","SMA","TK","SMA","2016-07-20 12:53:51");
INSERT INTO u_list_code VALUES("41","TD","","Tipe Dokumen","2016-07-20 14:00:23");
INSERT INTO u_list_code VALUES("42","MT","TD","Materi","2016-07-20 14:00:42");
INSERT INTO u_list_code VALUES("43","SL","TD","Soal","2016-07-20 14:00:54");
INSERT INTO u_list_code VALUES("44","XC","KLS","XC","2016-07-20 16:14:27");
INSERT INTO u_list_code VALUES("45","XIA","KLS","XIA","2016-07-20 16:14:48");
INSERT INTO u_list_code VALUES("46","D08","JL","Jemputan","2016-07-21 20:30:03");


DROP TABLE IF EXISTS u_modul;

CREATE TABLE `u_modul` (
  `id_modul` int(11) NOT NULL AUTO_INCREMENT,
  `kode_modul` varchar(5) DEFAULT NULL,
  `nama_modul` varchar(20) DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO u_modul VALUES("3","M001","Siswa","M","master/siswa");
INSERT INTO u_modul VALUES("4","M002","Guru","M","master/guru");
INSERT INTO u_modul VALUES("6","U001","Modul","U","utility/modul");
INSERT INTO u_modul VALUES("7","U003","Role","U","utility/role");
INSERT INTO u_modul VALUES("8","U002","User","U","utility/user");
INSERT INTO u_modul VALUES("9","U004","Listcode","U","utility/listcode");
INSERT INTO u_modul VALUES("10","U006","Log","U","utility/log");
INSERT INTO u_modul VALUES("11","U007","Backup Data","U","common/dash/backup_db");
INSERT INTO u_modul VALUES("13","T001","Absen Siswa","T","transaksi/absen_siswa");
INSERT INTO u_modul VALUES("14","R001","Rekap Absensi Siswa","R","report/rekap_absen_siswa");
INSERT INTO u_modul VALUES("18","T002","Absen Guru","T","transaksi/absen_guru");
INSERT INTO u_modul VALUES("19","T004","Pemasukan","T","transaksi/pembayaran");
INSERT INTO u_modul VALUES("20","R003","Jurnal","R","report/jurnal");
INSERT INTO u_modul VALUES("21","T005","Pengeluaran","T","transaksi/pengeluaran");
INSERT INTO u_modul VALUES("22","R002","Rekap SPP","R","report/rekap_spp");
INSERT INTO u_modul VALUES("23","U005","Setting","U","utility/setting");
INSERT INTO u_modul VALUES("24","T003","Pembuatan Dokumen","T","transaksi/pembuatan_dokumen");
INSERT INTO u_modul VALUES("25","T006","Gaji Guru","T","transaksi/gaji_guru");


DROP TABLE IF EXISTS u_role;

CREATE TABLE `u_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(20) DEFAULT NULL,
  `hak_akses` text,
  `kode_role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO u_role VALUES("2","super_admin","M001,M002,T001,T002,T003,T004,T005,T006,R001,R002,R003,R004,U001,U002,U003,U004,U005,U006,U007","R001");
INSERT INTO u_role VALUES("3","admin","M001,M002,T001,T002,R001","R002");
INSERT INTO u_role VALUES("4","admin siswa","M001","R01234");


DROP TABLE IF EXISTS u_setting;

CREATE TABLE `u_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `kode_setting` varchar(20) DEFAULT NULL,
  `value_setting` varchar(20) DEFAULT NULL,
  `nama_setting` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO u_setting VALUES("1","THA","2015","Tahun Awal");
INSERT INTO u_setting VALUES("2","HG_SD","25000","Honor Guru (SD)");
INSERT INTO u_setting VALUES("3","HG_SMP","35000","Honor Guru (SMP)");
INSERT INTO u_setting VALUES("4","HG_SMA","45000","Honor Guru (SMA)");
INSERT INTO u_setting VALUES("5","HG_S","25000","Honor Guru (Soal)");
INSERT INTO u_setting VALUES("6","HG_M","25000","Honor Guru (Materi)");
INSERT INTO u_setting VALUES("7","SPP_SD","160000","Bulanan SD");


DROP TABLE IF EXISTS u_user;

CREATE TABLE `u_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `type_user` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO u_user VALUES("1","ti4","super_admin","1234","dy2@mail.comq","1","super_admin","2016-05-31 22:08:30","");
INSERT INTO u_user VALUES("6","Andi Wiguna","admin","admin","email@mail.com","1","admin","2016-05-31 22:08:20","");
INSERT INTO u_user VALUES("7","echa","chaa","1234","echa@gmail.com","1","admin siswa","2016-07-22 16:04:44","021");


DROP TABLE IF EXISTS view_kpi;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kpi` AS select `mp`.`planning_no` AS `planning_no`,(select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `type_job`,(select `ul`.`nama_list` from `u_list_code` `ul` where ((`ul`.`head_list` = 'DP') and (`ul`.`kode_list` = (select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`))))) AS `depart` from `m_planning` `mp`;



DROP TABLE IF EXISTS view_list_code;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_list_code` AS select `ul`.`id_list_code` AS `id_list_code`,`ul`.`kode_list` AS `kode_list`,`ul`.`head_list` AS `head_list`,`ul`.`nama_list` AS `nama_list`,`ul`.`date` AS `date`,(select count(`ul1`.`id_list_code`) from `u_list_code` `ul1` where (`ul`.`kode_list` = `ul1`.`head_list`)) AS `jml_list` from `u_list_code` `ul` where isnull(`ul`.`head_list`);

INSERT INTO view_list_code VALUES("1","AG","","Agama","2016-07-13 00:00:00","5");
INSERT INTO view_list_code VALUES("7","MD","","Modul","2016-08-21 00:00:00","4");
INSERT INTO view_list_code VALUES("12","JK","","Jenis Kelamin","2016-08-27 00:00:00","2");
INSERT INTO view_list_code VALUES("15","KLS","","Kelas","2016-07-14 10:53:01","4");
INSERT INTO view_list_code VALUES("18","JL","","Jurnal","2016-07-16 13:12:11","10");
INSERT INTO view_list_code VALUES("37","TK","","Tingkat","2016-07-20 12:53:15","3");
INSERT INTO view_list_code VALUES("41","TD","","Tipe Dokumen","2016-07-20 14:00:23","2");


DROP TABLE IF EXISTS view_pembayaran_spp;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pembayaran_spp` AS select `pd`.`kode_pembayaran` AS `kode_pembayaran`,(select `ph`.`kode_siswa` from `t_pembayaran_header` `ph` where (`ph`.`kode_pembayaran` = `pd`.`kode_pembayaran`)) AS `kode_siswa`,(select `ph`.`tgl_pembayaran` from `t_pembayaran_header` `ph` where (`ph`.`kode_pembayaran` = `pd`.`kode_pembayaran`)) AS `tgl_pembayaran`,concat(`pd`.`bulan`,'-',`pd`.`tahun`) AS `pembayaran`,count(`pd`.`id_pembayaran_detail`) AS `jml` from `t_pembayaran_detail` `pd` where ((concat(`pd`.`bulan`,'-',`pd`.`tahun`) is not null) and (substr(`pd`.`jenis_pembayaran`,1,3) = 'K02')) group by `pd`.`kode_pembayaran`;

INSERT INTO view_pembayaran_spp VALUES("PB16070008","","","02-2015","1");
INSERT INTO view_pembayaran_spp VALUES("PB16070009","","","01-2015","1");
INSERT INTO view_pembayaran_spp VALUES("PB16070010","1410022","2016-07-20","01-2015","1");
INSERT INTO view_pembayaran_spp VALUES("PB16070012","1410024","2016-07-21","07-2016","1");
INSERT INTO view_pembayaran_spp VALUES("PB16070013","1410023","2016-07-21","06-2015","2");


DROP TABLE IF EXISTS view_planning;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_planning` AS select `mp`.`planning_no` AS `planning_no`,`mp`.`wo` AS `wo`,`mp`.`week` AS `week`,`mp`.`year` AS `year`,(select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `type_job`,(select `ul`.`nama_list` from `u_list_code` `ul` where (`ul`.`kode_list` = (select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)))) AS `label_type_job`,(select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `dept`,(select `ul`.`nama_list` from `u_list_code` `ul` where (`ul`.`kode_list` = (select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)))) AS `label_dept`,(select `mw`.`keterangan` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `ket` from `m_planning` `mp` order by `mp`.`week`;



DROP TABLE IF EXISTS view_r_jurnal;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_r_jurnal` AS select distinct date_format(`r`.`tgl_jurnal`,'%Y-%m') AS `bulan_tahun`,(select (sum(`r1`.`kredit`) - sum(`r1`.`debit`)) from `r_jurnal` `r1` where (date_format(`r1`.`tgl_jurnal`,'%Y-%m') < date_format(`r`.`tgl_jurnal`,'%Y-%m'))) AS `sisa_bulan_sebelumnya` from `r_jurnal` `r` order by date_format(`r`.`tgl_jurnal`,'%Y-%m');

INSERT INTO view_r_jurnal VALUES("2014-12","");
INSERT INTO view_r_jurnal VALUES("2015-01","4851000");
INSERT INTO view_r_jurnal VALUES("2015-07","4836000");
INSERT INTO view_r_jurnal VALUES("2016-07","5086000");
INSERT INTO view_r_jurnal VALUES("2016-09","5236000");


DROP TABLE IF EXISTS view_r_rekap_gaji;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_r_rekap_gaji` AS select date_format(`t`.`tgl_absen`,'%m-%Y') AS `bulan_tahun`,`t`.`kode_guru` AS `kode_guru`,(select `g`.`nama_guru` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `nama_guru`,sum(`t`.`jumlah_jam`) AS `jml_jam`,'2' AS `jml_materi`,'2' AS `jml_soal` from `t_absen_guru` `t` group by date_format(`t`.`tgl_absen`,'%m-%Y'),`t`.`kode_guru`;

INSERT INTO view_r_rekap_gaji VALUES("01-2015","G001","Titin K, M.Pd","9","2","2");
INSERT INTO view_r_rekap_gaji VALUES("01-2015","G007","Kumaedah Khasanah, S.Pd","14","2","2");
INSERT INTO view_r_rekap_gaji VALUES("01-2015","G009","Fadli Salman, S.Pd","6","2","2");
INSERT INTO view_r_rekap_gaji VALUES("01-2015","G010","Annisa, S.Pd","4","2","2");
INSERT INTO view_r_rekap_gaji VALUES("07-2016","G001","Titin K, M.Pd","2","2","2");


DROP TABLE IF EXISTS view_t_absen_siswa;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_t_absen_siswa` AS select distinct date_format(`t`.`tanggal`,'%m') AS `bulan`,date_format(`t`.`tanggal`,'%Y') AS `tahun`,`t`.`kelas` AS `kelas`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 1))) AS `jml_hadir_p1`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 1))) AS `jml_alfa_p1`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 2))) AS `jml_hadir_p2`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 2))) AS `jml_alfa_p2`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 3))) AS `jml_hadir_p3`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 3))) AS `jml_alfa_p3`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 4))) AS `jml_hadir_p4`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 4))) AS `jml_alfa_p4`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 5))) AS `jml_hadir_p5`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 5))) AS `jml_alfa_p5`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 6))) AS `jml_hadir_p6`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 6))) AS `jml_alfa_p6`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 7))) AS `jml_hadir_p7`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 7))) AS `jml_alfa_p7`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 8))) AS `jml_hadir_p8`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 8))) AS `jml_alfa_p8`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 9))) AS `jml_hadir_p9`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 9))) AS `jml_alfa_p9`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 10))) AS `jml_hadir_p10`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 10))) AS `jml_alfa_p10` from `t_absen_siswa` `t`;

INSERT INTO view_t_absen_siswa VALUES("07","2016","XA","5","1","4","2","0","0","5","1","5","1","0","0","0","0","0","0","0","0","0","0");


DROP TABLE IF EXISTS view_t_gaji_guru;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_t_gaji_guru` AS select distinct date_format(`t`.`tgl_absen`,'%m-%Y') AS `bulan_tahun`,`t`.`tingkat` AS `tingkat`,`t`.`kode_guru` AS `kode_guru`,(select `g`.`nama_guru` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `nama_guru`,(select `g`.`mata_pelajaran` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `mapel`,(select sum(`t1`.`jumlah_jam`) from `t_absen_guru` `t1` where ((`t1`.`kode_guru` = `t`.`kode_guru`) and (`t1`.`tingkat` = `t`.`tingkat`) and (date_format(`t1`.`tgl_absen`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m'))) group by `t1`.`kode_guru`) AS `jml_absen`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = concat('HG_',`t`.`tingkat`))) AS `honor_mengajar`,(select count(`tp`.`id_pembuatan_dok`) from `t_pembuatan_dokumen` `tp` where ((`tp`.`kode_guru` = `t`.`kode_guru`) and (`tp`.`tingkat` = `t`.`tingkat`) and (date_format(`tp`.`tgl_pembuatan_dok`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m')) and (`tp`.`tipe_dok` = 'Materi')) group by `tp`.`kode_guru`) AS `jml_materi`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = 'HG_M')) AS `honor_materi`,(select count(`tp`.`id_pembuatan_dok`) from `t_pembuatan_dokumen` `tp` where ((`tp`.`kode_guru` = `t`.`kode_guru`) and (`tp`.`tingkat` = `t`.`tingkat`) and (date_format(`tp`.`tgl_pembuatan_dok`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m')) and (`tp`.`tipe_dok` = 'Soal')) group by `tp`.`kode_guru`) AS `jml_soal`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = 'HG_S')) AS `honor_soal`,(select `tg`.`status` from `t_gaji_guru` `tg` where ((`tg`.`bulan_tahun` = convert(date_format(`t`.`tgl_absen`,'%m-%Y') using latin1)) and (`tg`.`kode_guru` = `t`.`kode_guru`) and (`tg`.`tingkat` = `t`.`tingkat`))) AS `status` from `t_absen_guru` `t`;

INSERT INTO view_t_gaji_guru VALUES("01-20