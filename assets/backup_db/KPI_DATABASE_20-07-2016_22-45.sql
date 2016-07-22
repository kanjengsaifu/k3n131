DROP TABLE IF EXISTS m_guru;

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
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=latin1;

INSERT INTO m_log VALUES("1","0","Logout","","2016-06-01 15:52:58","super_admin");
INSERT INTO m_log VALUES("2","0","Login ","super_admin","2016-06-01 15:53:10","0");
INSERT INTO m_log VALUES("3","","Logout","","2016-06-01 15:53:50","");
INSERT INTO m_log VALUES("4","","Login ","super_admin","2016-06-01 15:53:53","");
INSERT INTO m_log VALUES("5","","Logout","","2016-06-01 15:54:03","");
INSERT INTO m_log VALUES("6","0","Login ","super_admin","2016-06-01 15:55:25","");
INSERT INTO m_log VALUES("7","1","Ubah Data Karyawan","Andi","2016-06-01 15:56:07","super_admin");
INSERT INTO m_log VALUES("8","1","Complete Status Manage Planning","2016-00004","2016-06-01 15:57:12","super_admin");
INSERT INTO m_log VALUES("9","1","Complete Status Manage Planning","2016-00004","2016-06-01 15:58:45","super_admin");
INSERT INTO m_log VALUES("10","1","Tambah Data Modul","test","2016-06-01 16:19:04","super_admin");
INSERT INTO m_log VALUES("11","1","Ubah Data Role","","2016-06-01 16:19:18","super_admin");
INSERT INTO m_log VALUES("12","1","Logout","","2016-06-01 16:19:23","super_admin");
INSERT INTO m_log VALUES("13","0","Login ","super_admin","2016-06-01 16:19:27","0");
INSERT INTO m_log VALUES("14","1","Hapus Data Modul","","2016-06-01 16:20:25","super_admin");
INSERT INTO m_log VALUES("15","1","Logout","","2016-06-01 16:22:07","super_admin");
INSERT INTO m_log VALUES("16","0","Login ","super_admin","2016-06-01 16:22:10","0");
INSERT INTO m_log VALUES("17","0","Login ","super_admin","2016-06-02 22:00:57","0");
INSERT INTO m_log VALUES("18","0","Login ","super_admin","2016-06-03 14:43:46","0");
INSERT INTO m_log VALUES("19","1","Complete Status Manage Planning","2016-00004","2016-06-03 14:55:04","super_admin");
INSERT INTO m_log VALUES("20","1","Hapus Data Manage Planning","","2016-06-03 16:18:16","super_admin");
INSERT INTO m_log VALUES("21","1","Tambah Data Manage Planning","2016-00004","2016-06-03 16:20:48","super_admin");
INSERT INTO m_log VALUES("22","1","Tambah Data Manage Planning","2016-00005","2016-06-03 16:40:43","super_admin");
INSERT INTO m_log VALUES("23","1","Tambah Data Manage Planning","2016-00006","2016-06-03 16:41:45","super_admin");
INSERT INTO m_log VALUES("24","1","Ubah Data Manage Planning","","2016-06-03 16:42:31","super_admin");
INSERT INTO m_log VALUES("25","1","Ubah Data Manage Planning","","2016-06-03 16:43:24","super_admin");
INSERT INTO m_log VALUES("26","1","Ubah Data Manage Planning","","2016-06-03 16:48:25","super_admin");
INSERT INTO m_log VALUES("27","1","Tambah Data Manage Planning","2016-00007","2016-06-03 16:52:59","super_admin");
INSERT INTO m_log VALUES("28","1","Tambah Data Manage Planning","2016-00008","2016-06-03 17:02:06","super_admin");
INSERT INTO m_log VALUES("29","1","Tambah Data Manage Planning","2016-00011","2016-06-03 17:08:19","super_admin");
INSERT INTO m_log VALUES("30","1","Tambah Data Manage Planning","2016-00012","2016-06-03 17:13:59","super_admin");
INSERT INTO m_log VALUES("31","0","Login ","super_admin","2016-06-04 10:35:55","0");
INSERT INTO m_log VALUES("32","1","Tambah Data Manage Planning","2016-00015","2016-06-04 12:42:08","super_admin");
INSERT INTO m_log VALUES("33","0","Login ","super_admin","2016-06-04 20:34:19","0");
INSERT INTO m_log VALUES("34","0","Login ","super_admin","2016-06-05 13:15:17","0");
INSERT INTO m_log VALUES("35","0","Login ","super_admin","2016-06-08 11:05:35","0");
INSERT INTO m_log VALUES("36","0","Login ","super_admin","2016-06-09 11:23:26","0");
INSERT INTO m_log VALUES("37","1","Tambah Data Work Order","34000004","2016-06-09 11:26:25","super_admin");
INSERT INTO m_log VALUES("38","1","Tambah Data Work Order","34000141","2016-06-09 11:37:08","super_admin");
INSERT INTO m_log VALUES("39","1","Tambah Data Manage Planning","2016-00001","2016-06-09 11:45:32","super_admin");
INSERT INTO m_log VALUES("40","0","Login ","super_admin","2016-06-13 11:40:37","0");
INSERT INTO m_log VALUES("41","0","Login ","super_admin","2016-06-15 10:49:59","0");
INSERT INTO m_log VALUES("42","0","Login ","super_admin","2016-06-15 10:59:00","0");
INSERT INTO m_log VALUES("43","1","Ubah Data Modul","","2016-06-15 10:59:17","super_admin");
INSERT INTO m_log VALUES("44","1","Logout","","2016-06-15 10:59:29","super_admin");
INSERT INTO m_log VALUES("45","0","Login ","super_admin","2016-06-15 10:59:34","0");
INSERT INTO m_log VALUES("46","1","Ubah Data Modul","","2016-06-15 11:05:28","super_admin");
INSERT INTO m_log VALUES("47","1","Logout","","2016-06-15 11:05:35","super_admin");
INSERT INTO m_log VALUES("48","0","Login ","super_admin","2016-06-15 11:05:40","0");
INSERT INTO m_log VALUES("49","0","Login ","super_admin","2016-06-24 01:12:14","0");
INSERT INTO m_log VALUES("50","0","Login ","super_admin","2016-06-27 16:46:11","0");
INSERT INTO m_log VALUES("51","1","Ubah Data Info User","Andi","2016-06-27 17:06:44","super_admin");
INSERT INTO m_log VALUES("52","1","Ubah Data Info User","Andi","2016-06-27 17:08:29","super_admin");
INSERT INTO m_log VALUES("53","1","Ubah Data Password","","2016-06-27 17:12:20","super_admin");
INSERT INTO m_log VALUES("54","1","Ubah Data Password","","2016-06-27 17:12:32","super_admin");
INSERT INTO m_log VALUES("55","0","Login ","super_admin","2016-07-01 14:08:45","0");
INSERT INTO m_log VALUES("56","0","Login ","super_admin","2016-07-04 11:46:16","0");
INSERT INTO m_log VALUES("57","0","Login ","super_admin","2016-07-04 12:45:20","0");
INSERT INTO m_log VALUES("58","1","Ubah Data Modul","","2016-07-11 01:15:53","super_admin");
INSERT INTO m_log VALUES("59","1","Ubah Data Modul","","2016-07-11 01:16:10","super_admin");
INSERT INTO m_log VALUES("60","1","Hapus Data Modul","","2016-07-11 01:16:16","super_admin");
INSERT INTO m_log VALUES("61","1","Ubah Data Modul","","2016-07-11 01:16:44","super_admin");
INSERT INTO m_log VALUES("62","1","Tambah Data Modul","Absen Guru","2016-07-11 01:17:06","super_admin");
INSERT INTO m_log VALUES("63","1","Tambah Data Modul","SPP","2016-07-11 01:17:52","super_admin");
INSERT INTO m_log VALUES("64","1","Ubah Data Modul","","2016-07-11 01:18:44","super_admin");
INSERT INTO m_log VALUES("65","1","Ubah Data Modul","","2016-07-11 01:19:13","super_admin");
INSERT INTO m_log VALUES("66","1","Hapus Data Modul","","2016-07-11 01:19:28","super_admin");
INSERT INTO m_log VALUES("67","1","Hapus Data Modul","","2016-07-11 01:19:32","super_admin");
INSERT INTO m_log VALUES("68","1","Ubah Data Role","","2016-07-11 01:20:05","super_admin");
INSERT INTO m_log VALUES("69","1","Ubah Data Role","","2016-07-11 01:20:16","super_admin");
INSERT INTO m_log VALUES("70","1","Logout","","2016-07-11 01:20:33","super_admin");
INSERT INTO m_log VALUES("71","0","Login ","super_admin","2016-07-11 01:20:39","0");
INSERT INTO m_log VALUES("72","0","Login ","super_admin","2016-07-11 16:24:57","0");
INSERT INTO m_log VALUES("73","1","Ubah Data Siswa","Vahlefi Sabil Haq","2016-07-11 16:59:51","super_admin");
INSERT INTO m_log VALUES("74","1","Ubah Data Siswa","Vahlefi Sabil Haq","2016-07-11 17:00:34","super_admin");
INSERT INTO m_log VALUES("75","1","Ubah Data Siswa","Yuni Trisniawati","2016-07-11 17:02:32","super_admin");
INSERT INTO m_log VALUES("76","1","Ubah Data Siswa","Yuni Trisniawati","2016-07-11 17:03:37","super_admin");
INSERT INTO m_log VALUES("77","0","Login ","super_admin","2016-07-11 17:38:54","0");
INSERT INTO m_log VALUES("78","1","Hapus Data Siswa","","2016-07-11 17:39:29","super_admin");
INSERT INTO m_log VALUES("79","1","Tambah Data Siswa","","2016-07-11 19:28:08","super_admin");
INSERT INTO m_log VALUES("80","1","Ubah Data Siswa","qqqqweqwqwew","2016-07-11 19:28:27","super_admin");
INSERT INTO m_log VALUES("81","1","Hapus Data Siswa","","2016-07-11 19:29:07","super_admin");
INSERT INTO m_log VALUES("82","0","Login ","super_admin","2016-07-13 16:32:04","0");
INSERT INTO m_log VALUES("83","1","Ubah Data Guru","Fadli Salman","2016-07-13 16:56:58","super_admin");
INSERT INTO m_log VALUES("84","1","Ubah Data Guru","Fadli Salman","2016-07-13 16:57:07","super_admin");
INSERT INTO m_log VALUES("85","1","Tambah Data Guru","","2016-07-13 16:59:16","super_admin");
INSERT INTO m_log VALUES("86","1","Hapus Data Guru","","2016-07-13 17:11:01","super_admin");
INSERT INTO m_log VALUES("87","0","Login ","super_admin","2016-07-14 10:18:32","0");
INSERT INTO m_log VALUES("88","1","Logout","","2016-07-14 11:50:52","super_admin");
INSERT INTO m_log VALUES("89","0","Login ","super_admin","2016-07-14 11:51:00","0");
INSERT INTO m_log VALUES("90","1","Tambah Data Absensi Siswa","1 - XA","2016-07-14 22:27:39","super_admin");
INSERT INTO m_log VALUES("91","1","Tambah Data Absensi Siswa","2 - XA","2016-07-14 22:29:28","super_admin");
INSERT INTO m_log VALUES("92","1","Ubah Data Absensi Siswa","1410024_3","2016-07-14 23:28:25","super_admin");
INSERT INTO m_log VALUES("93","1","Ubah Data Absensi Siswa","1410024_3","2016-07-14 23:35:00","super_admin");
INSERT INTO m_log VALUES("94","0","Login ","super_admin","2016-07-15 12:49:12","0");
INSERT INTO m_log VALUES("95","1","Hapus Data Detail Pembayaran","","2016-07-15 15:15:05","super_admin");
INSERT INTO m_log VALUES("96","1","Lunas Pembayaran SPP","","2016-07-15 15:16:49","super_admin");
INSERT INTO m_log VALUES("97","1","Ubah Data Modul","","2016-07-15 16:48:18","super_admin");
INSERT INTO m_log VALUES("98","1","Ubah Data Absensi Siswa","1410024_3","2016-07-15 19:13:16","super_admin");
INSERT INTO m_log VALUES("99","1","Tambah Data Absensi Siswa","1 - XB","2016-07-15 19:15:21","super_admin");
INSERT INTO m_log VALUES("100","1","Lunas Pembayaran SPP","","2016-07-15 19:17:21","super_admin");
INSERT INTO m_log VALUES("101","0","Login ","super_admin","2016-07-16 12:10:08","0");
INSERT INTO m_log VALUES("102","1","Tambah Data Modul","Jurnal","2016-07-16 12:10:55","super_admin");
INSERT INTO m_log VALUES("103","1","Ubah Data Role","","2016-07-16 12:11:14","super_admin");
INSERT INTO m_log VALUES("104","1","Logout","","2016-07-16 12:11:19","super_admin");
INSERT INTO m_log VALUES("105","0","Login ","super_admin","2016-07-16 12:11:24","0");
INSERT INTO m_log VALUES("106","1","Ubah Data Modul","","2016-07-16 13:17:31","super_admin");
INSERT INTO m_log VALUES("107","0","Login ","super_admin","2016-07-16 15:54:21","0");
INSERT INTO m_log VALUES("108","1","Tambah Data Modul","Pengeluaran","2016-07-16 16:19:00","super_admin");
INSERT INTO m_log VALUES("109","1","Ubah Data Role","","2016-07-16 16:19:16","super_admin");
INSERT INTO m_log VALUES("110","1","Logout","","2016-07-16 16:22:17","super_admin");
INSERT INTO m_log VALUES("111","0","Login ","super_admin","2016-07-16 16:22:24","0");
INSERT INTO m_log VALUES("112","1","Hapus Data Detail Pembayaran","","2016-07-16 16:40:41","super_admin");
INSERT INTO m_log VALUES("113","1","Hapus Data Detail Pembayaran","","2016-07-16 16:41:09","super_admin");
INSERT INTO m_log VALUES("114","1","Hapus Data Siswa","","2016-07-16 17:31:54","super_admin");
INSERT INTO m_log VALUES("115","1","Ubah Data Modul","","2016-07-16 17:32:32","super_admin");
INSERT INTO m_log VALUES("116","1","Ubah Data Role","","2016-07-16 17:35:01","super_admin");
INSERT INTO m_log VALUES("117","1","Logout","","2016-07-16 17:35:10","super_admin");
INSERT INTO m_log VALUES("118","0","Login ","super_admin","2016-07-16 17:35:18","0");
INSERT INTO m_log VALUES("119","1","Tambah Data Pengeluaran","","2016-07-16 17:43:58","super_admin");
INSERT INTO m_log VALUES("120","1","Tambah Data Pengeluaran","","2016-07-16 17:49:30","super_admin");
INSERT INTO m_log VALUES("121","1","Tambah Data Pengeluaran","","2016-07-16 17:50:58","super_admin");
INSERT INTO m_log VALUES("122","1","Tambah Data Pengeluaran","","2016-07-16 17:51:23","super_admin");
INSERT INTO m_log VALUES("123","1","Hapus Data Pengeluaran","","2016-07-16 17:52:07","super_admin");
INSERT INTO m_log VALUES("124","1","Hapus Data Pengeluaran","","2016-07-16 17:52:13","super_admin");
INSERT INTO m_log VALUES("125","1","Hapus Data Pengeluaran","","2016-07-16 17:52:20","super_admin");
INSERT INTO m_log VALUES("126","0","Login ","super_admin","2016-07-17 10:29:25","0");
INSERT INTO m_log VALUES("127","1","Hapus Data Pengeluaran","","2016-07-17 10:29:44","super_admin");
INSERT INTO m_log VALUES("128","1","Tambah Data Pengeluaran","","2016-07-17 10:29:54","super_admin");
INSERT INTO m_log VALUES("129","1","Tambah Data Pengeluaran","","2016-07-17 11:38:09","super_admin");
INSERT INTO m_log VALUES("130","1","Tambah Data Pengeluaran","","2016-07-17 11:38:49","super_admin");
INSERT INTO m_log VALUES("131","1","Hapus Data Pengeluaran","","2016-07-17 11:40:39","super_admin");
INSERT INTO m_log VALUES("132","1","Hapus Data Pengeluaran","","2016-07-17 11:40:42","super_admin");
INSERT INTO m_log VALUES("133","1","Hapus Data Pengeluaran","","2016-07-17 11:40:45","super_admin");
INSERT INTO m_log VALUES("134","1","Tambah Data Pengeluaran","","2016-07-17 11:41:01","super_admin");
INSERT INTO m_log VALUES("135","1","Tambah Data Pengeluaran","fotokopi soal latihan fisika","2016-07-17 11:42:15","super_admin");
INSERT INTO m_log VALUES("136","1","Tambah Data Pengeluaran","fotokopi soal latihan fisika","2016-07-17 11:44:21","super_admin");
INSERT INTO m_log VALUES("137","1","Tambah Data Pengeluaran","tinta spidol","2016-07-17 17:40:45","super_admin");
INSERT INTO m_log VALUES("138","0","Login ","super_admin","2016-07-17 19:56:03","0");
INSERT INTO m_log VALUES("139","1","Tambah Data Pengeluaran","konsumsi guru (yani dan uum)","2016-07-17 20:18:57","super_admin");
INSERT INTO m_log VALUES("140","1","Hapus Data Pengeluaran","12","2016-07-17 20:23:44","super_admin");
INSERT INTO m_log VALUES("141","1","Hapus Data Pengeluaran","D0716007","2016-07-17 20:24:21","super_admin");
INSERT INTO m_log VALUES("142","1","Tambah Data Modul","Rekap SPP","2016-07-17 20:25:26","super_admin");
INSERT INTO m_log VALUES("143","1","Lunas Pembayaran SPP","","2016-07-17 20:46:23","super_admin");
INSERT INTO m_log VALUES("144","1","Lunas Pembayaran SPP","PB16070002","2016-07-17 21:26:37","super_admin");
INSERT INTO m_log VALUES("145","1","Lunas Pembayaran SPP","PB16070003","2016-07-17 21:29:26","super_admin");
INSERT INTO m_log VALUES("146","1","Ubah Data Role","","2016-07-17 21:45:05","super_admin");
INSERT INTO m_log VALUES("147","1","Logout","","2016-07-17 21:45:09","super_admin");
INSERT INTO m_log VALUES("148","0","Login ","super_admin","2016-07-17 21:45:14","0");
INSERT INTO m_log VALUES("149","1","Lunas Pembayaran SPP","PB16070004","2016-07-17 21:49:20","super_admin");
INSERT INTO m_log VALUES("150","0","Login ","super_admin","2016-07-18 09:54:21","0");
INSERT INTO m_log VALUES("151","1","Ubah Data Siswa","Permata Hati Insani ","2016-07-18 11:41:52","super_admin");
INSERT INTO m_log VALUES("152","1","Ubah Data Siswa","Permata Hati Insani 1","2016-07-18 11:55:47","super_admin");
INSERT INTO m_log VALUES("153","1","Ubah Data Siswa","Permata Hati Insani 2","2016-07-18 11:57:29","super_admin");
INSERT INTO m_log VALUES("154","1","Ubah Data Siswa","Permata Hati Insani 2","2016-07-18 11:58:06","super_admin");
INSERT INTO m_log VALUES("155","1","Ubah Data Siswa","Permata Hati Insani ","2016-07-18 12:00:25","super_admin");
INSERT INTO m_log VALUES("156","1","Ubah Data Siswa","Permata Hati Insansi ","2016-07-18 12:00:33","super_admin");
INSERT INTO m_log VALUES("157","1","Ubah Data Siswa","Permata Hati Insani 1","2016-07-18 12:00:55","super_admin");
INSERT INTO m_log VALUES("158","1","Ubah Data Siswa","Permata Hati Insani 1","2016-07-18 12:01:14","super_admin");
INSERT INTO m_log VALUES("159","1","Ubah Data Siswa","Permata Hati Insani ","2016-07-18 12:01:47","super_admin");
INSERT INTO m_log VALUES("160","1","Ubah Data Siswa","Permata Hati Insani ","2016-07-18 12:01:58","super_admin");
INSERT INTO m_log VALUES("161","1","Ubah Data Siswa","Permata Hati Insani ","2016-07-18 12:02:46","super_admin");
INSERT INTO m_log VALUES("162","1","Ubah Data Siswa","Permata Hati ","2016-07-18 12:02:54","super_admin");
INSERT INTO m_log VALUES("163","1","Ubah Data Siswa","Permata Hati Insansi1","2016-07-18 12:03:08","super_admin");
INSERT INTO m_log VALUES("164","1","Ubah Data Siswa","Permata Hati Insansi 1","2016-07-18 12:03:39","super_admin");
INSERT INTO m_log VALUES("165","1","Ubah Data Siswa","Permata Hati Insansi","2016-07-18 12:19:43","super_admin");
INSERT INTO m_log VALUES("166","1","Ubah Data Siswa","Permata Hati Insans","2016-07-18 12:21:11","super_admin");
INSERT INTO m_log VALUES("167","1","Tambah Data Absensi Siswa","3 - XB","2016-07-18 14:34:35","super_admin");
INSERT INTO m_log VALUES("168","1","Ubah Data Absen_guru","","2016-07-18 17:51:46","super_admin");
INSERT INTO m_log VALUES("169","1","Ubah Data Absen_guru","","2016-07-18 17:51:57","super_admin");
INSERT INTO m_log VALUES("170","1","Ubah Data Absen_guru","","2016-07-18 18:40:27","super_admin");
INSERT INTO m_log VALUES("171","1","Tambah Data Absen_guru","G007","2016-07-18 18:53:53","super_admin");
INSERT INTO m_log VALUES("172","0","Login ","super_admin","2016-07-19 05:19:48","0");
INSERT INTO m_log VALUES("173","1","Ubah Data Modul","","2016-07-19 05:21:08","super_admin");
INSERT INTO m_log VALUES("174","0","Login ","super_admin","2016-07-20 10:38:27","0");
INSERT INTO m_log VALUES("175","1","Tambah Data Absen_guru","G007","2016-07-20 10:52:17","super_admin");
INSERT INTO m_log VALUES("176","1","Hapus Data Absen_guru","","2016-07-20 10:53:30","super_admin");
INSERT INTO m_log VALUES("177","1","Hapus Data Absen_guru","","2016-07-20 10:53:39","super_admin");
INSERT INTO m_log VALUES("178","1","Tambah Data Absen_guru","G007","2016-07-20 10:57:43","super_admin");
INSERT INTO m_log VALUES("179","1","Tambah Data Guru","","2016-07-20 10:58:56","super_admin");
INSERT INTO m_log VALUES("180","1","Tambah Data Absen_guru","G007","2016-07-20 10:59:51","super_admin");
INSERT INTO m_log VALUES("181","1","Tambah Data Absen_guru","G007","2016-07-20 11:00:13","super_admin");
INSERT INTO m_log VALUES("182","1","Tambah Data Absen_guru","G007","2016-07-20 11:03:45","super_admin");
INSERT INTO m_log VALUES("183","1","Tambah Data Modul","Setting","2016-07-20 12:20:58","super_admin");
INSERT INTO m_log VALUES("184","1","Ubah Data Role","","2016-07-20 12:21:08","super_admin");
INSERT INTO m_log VALUES("185","1","Logout","","2016-07-20 12:21:13","super_admin");
INSERT INTO m_log VALUES("186","0","Login ","super_admin","2016-07-20 12:21:19","0");
INSERT INTO m_log VALUES("187","1","Ubah Data Absen_guru","","2016-07-20 13:07:31","super_admin");
INSERT INTO m_log VALUES("188","1","Tambah Data Absen_guru","G007","2016-07-20 13:09:04","super_admin");
INSERT INTO m_log VALUES("189","1","Hapus Data Absen_guru","","2016-07-20 13:09:22","super_admin");
INSERT INTO m_log VALUES("190","1","Ubah Data Absen_guru","","2016-07-20 13:12:13","super_admin");
INSERT INTO m_log VALUES("191","1","Ubah Data Guru","Kumaedah Khasanah, S.Pd","2016-07-20 13:18:57","super_admin");
INSERT INTO m_log VALUES("192","1","Ubah Data Guru","Fadli Salman","2016-07-20 13:19:26","super_admin");
INSERT INTO m_log VALUES("193","1","Ubah Data Guru","Fadli Salman","2016-07-20 13:19:49","super_admin");
INSERT INTO m_log VALUES("194","1","Ubah Data Guru","Kumaedah Khasanah, S.Pd","2016-07-20 13:20:02","super_admin");
INSERT INTO m_log VALUES("195","1","Tambah Data Absen_guru","G007","2016-07-20 13:25:38","super_admin");
INSERT INTO m_log VALUES("196","1","Tambah Data Absen_guru","G007","2016-07-20 13:26:33","super_admin");
INSERT INTO m_log VALUES("197","1","Tambah Data Absen_guru","G007","2016-07-20 13:27:01","super_admin");
INSERT INTO m_log VALUES("198","1","Tambah Data Absen_guru","201600004","2016-07-20 13:27:28","super_admin");
INSERT INTO m_log VALUES("199","1","Tambah Data Absen_guru","201600004","2016-07-20 13:27:56","super_admin");
INSERT INTO m_log VALUES("200","1","Tambah Data Absen_guru","G009","2016-07-20 13:28:44","super_admin");
INSERT INTO m_log VALUES("201","1","Tambah Data Absen_guru","G009","2016-07-20 13:29:06","super_admin");
INSERT INTO m_log VALUES("202","1","Tambah Data Absen_guru","G009","2016-07-20 13:29:32","super_admin");
INSERT INTO m_log VALUES("203","1","Tambah Data Absen_guru","G001","2016-07-20 13:32:00","super_admin");
INSERT INTO m_log VALUES("204","1","Ubah Data Absen_guru","","2016-07-20 13:34:31","super_admin");
INSERT INTO m_log VALUES("205","1","Tambah Data Absen_guru","G001","2016-07-20 13:35:38","super_admin");
INSERT INTO m_log VALUES("206","1","Tambah Data Absen_guru","G001","2016-07-20 13:36:00","super_admin");
INSERT INTO m_log VALUES("207","1","Tambah Data Absen_guru","G001","2016-07-20 13:36:32","super_admin");
INSERT INTO m_log VALUES("208","1","Tambah Data Modul","Pembuatan Dokumen","2016-07-20 13:49:18","super_admin");
INSERT INTO m_log VALUES("209","1","Ubah Data Role","","2016-07-20 13:49:30","super_admin");
INSERT INTO m_log VALUES("210","1","Logout","","2016-07-20 13:49:34","super_admin");
INSERT INTO m_log VALUES("211","0","Login ","super_admin","2016-07-20 13:49:38","0");
INSERT INTO m_log VALUES("212","1","Tambah Data Guru","","2016-07-20 13:58:33","super_admin");
INSERT INTO m_log VALUES("213","1","Hapus Data Guru","","2016-07-20 13:59:01","super_admin");
INSERT INTO m_log VALUES("214","1","Ubah Data Pembuatan Dokumen","","2016-07-20 14:10:41","super_admin");
INSERT INTO m_log VALUES("215","1","Ubah Data Pembuatan Dokumen","","2016-07-20 14:11:09","super_admin");
INSERT INTO m_log VALUES("216","1","Ubah Data Pembuatan Dokumen","","2016-07-20 14:11:37","super_admin");
INSERT INTO m_log VALUES("217","1","Ubah Data Pembuatan Dokumen","","2016-07-20 14:14:48","super_admin");
INSERT INTO m_log VALUES("218","1","Tambah Data Absen_guru","G007","2016-07-20 14:15:25","super_admin");
INSERT INTO m_log VALUES("219","1","Hapus Data Absen_guru","","2016-07-20 14:16:40","super_admin");
INSERT INTO m_log VALUES("220","1","Tambah Data Pembuatan Dokumen","G007","2016-07-20 14:17:03","super_admin");
INSERT INTO m_log VALUES("221","1","Ubah Data Pembuatan Dokumen","","2016-07-20 14:17:11","super_admin");
INSERT INTO m_log VALUES("222","1","Tambah Data Pembuatan Dokumen","G007","2016-07-20 14:18:02","super_admin");
INSERT INTO m_log VALUES("223","1","Tambah Data Pembuatan Dokumen","G007","2016-07-20 14:18:20","super_admin");
INSERT INTO m_log VALUES("224","1","Tambah Data Pembuatan Dokumen","G009","2016-07-20 14:19:19","super_admin");
INSERT INTO m_log VALUES("225","1","Ubah Data Guru","Fadli Salman, S.Pd","2016-07-20 14:19:33","super_admin");
INSERT INTO m_log VALUES("226","1","Tambah Data Pembuatan Dokumen","G009","2016-07-20 14:20:00","super_admin");
INSERT INTO m_log VALUES("227","1","Tambah Data Pembuatan Dokumen","G001","2016-07-20 14:20:28","super_admin");
INSERT INTO m_log VALUES("228","1","Tambah Data Modul","Gaji Guru","2016-07-20 14:45:57","super_admin");
INSERT INTO m_log VALUES("229","1","Logout","","2016-07-20 14:46:02","super_admin");
INSERT INTO m_log VALUES("230","0","Login ","super_admin","2016-07-20 14:46:06","0");
INSERT INTO m_log VALUES("231","1","Ubah Data Role","","2016-07-20 14:46:18","super_admin");
INSERT INTO m_log VALUES("232","1","Logout","","2016-07-20 14:46:21","super_admin");
INSERT INTO m_log VALUES("233","0","Login ","super_admin","2016-07-20 14:46:24","0");
INSERT INTO m_log VALUES("234","1","Tambah Data Pembuatan Dokumen","G004","2016-07-20 16:10:41","super_admin");
INSERT INTO m_log VALUES("235","1","Ubah Data Pembuatan Dokumen","","2016-07-20 16:11:02","super_admin");
INSERT INTO m_log VALUES("236","1","Ubah Data Info User","ti4","2016-07-20 16:16:41","super_admin");
INSERT INTO m_log VALUES("237","1","Tambah Data Gaji Guru","HG1607002","2016-07-20 20:37:18","super_admin");
INSERT INTO m_log VALUES("238","1","Hapus Data Gaji Guru","","2016-07-20 20:50:30","super_admin");
INSERT INTO m_log VALUES("239","1","Hapus Data Gaji Guru","","2016-07-20 20:52:56","super_admin");
INSERT INTO m_log VALUES("240","1","Tambah Data Pengeluaran","fotokopi soal latihan fisika","2016-07-20 20:54:22","super_admin");
INSERT INTO m_log VALUES("241","1","Lunas Pembayaran SPP","PB16070006","2016-07-20 21:00:28","super_admin");
INSERT INTO m_log VALUES("242","1","Tambah Data Pengeluaran","map","2016-07-20 21:09:03","super_admin");
INSERT INTO m_log VALUES("243","1","Hapus Data Detail Pembayaran","","2016-07-20 22:19:25","super_admin");
INSERT INTO m_log VALUES("244","1","Hapus Data Detail Pembayaran","","2016-07-20 22:19:34","super_admin");
INSERT INTO m_log VALUES("245","1","Lunas Pembayaran SPP","PB16070008","2016-07-20 22:20:23","super_admin");
INSERT INTO m_log VALUES("246","1","Hapus Data Pembayaran SPP","","2016-07-20 22:25:22","super_admin");
INSERT INTO m_log VALUES("247","1","Lunas Pembayaran SPP","PB16070009","2016-07-20 22:27:59","super_admin");
INSERT INTO m_log VALUES("248","1","Hapus Data Pembayaran SPP","PB16070009","2016-07-20 22:28:26","super_admin");
INSERT INTO m_log VALUES("249","1","Lunas Pembayaran SPP","PB16070010","2016-07-20 22:29:28","super_admin");


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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO r_jurnal VALUES("6","2016-07-17","D02-0170-003","fotokopi soal latihan fisika","0","50000","D0716005");
INSERT INTO r_jurnal VALUES("7","2016-09-01","D01-0170-003","tinta spidol","0","50000","D0716006");
INSERT INTO r_jurnal VALUES("10","2016-07-17","K01-0170-001","pendaftaran","50000","0","PB16070003");
INSERT INTO r_jurnal VALUES("11","2016-07-17","K02-0170-002","spp annisa","200000","0","PB16070003");
INSERT INTO r_jurnal VALUES("12","2016-07-17","K02-0170-003","","200000","0","PB16070004");
INSERT INTO r_jurnal VALUES("14","2016-07-20","D02-0716-004","fotokopi soal latihan fisika","0","200000","DE1607001");
INSERT INTO r_jurnal VALUES("15","2016-07-20","K01-0716-002","Pendaftaran (Diani Fahanshah)","50000","0","PB16070006");
INSERT INTO r_jurnal VALUES("16","2016-07-20","K02-0716-004","SPP Diani Fahanshah (07/2016)","200000","0","PB16070006");
INSERT INTO r_jurnal VALUES("17","2015-01-12","D01-0115-004","map","0","15000","DE1607002");
INSERT INTO r_jurnal VALUES("22","2016-07-20","K01-0716-005","Pendaftaran (Eggy Radiansyah S)","50000","0","PB16070010");
INSERT INTO r_jurnal VALUES("23","2016-07-20","K02-0716-007","SPP Eggy Radiansyah S (01/2015)","200000","0","PB16070010");


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


DROP TABLE IF EXISTS t_absen_siswa;

CREATE TABLE `t_absen_siswa` (
  `id_absen_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `kode_siswa` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `pertemuan` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_absen_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO t_absen_siswa VALUES("1","1410022","2016-07-14","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("2","1410023","2016-07-14","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("3","1410024","2016-07-14","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("4","1410025","2016-07-14","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("5","1410027","2016-07-14","Hadir","XA","2");
INSERT INTO t_absen_siswa VALUES("6","1410029","2016-07-15","Hadir","XB","1");
INSERT INTO t_absen_siswa VALUES("7","1410030","2016-07-15","Hadir","XB","1");
INSERT INTO t_absen_siswa VALUES("8","1410031","2016-07-15","Hadir","XB","1");
INSERT INTO t_absen_siswa VALUES("9","1410032","2016-07-15","Alfa","XB","1");
INSERT INTO t_absen_siswa VALUES("10","1410029","2016-07-18","Hadir","XB","3");
INSERT INTO t_absen_siswa VALUES("11","1410030","2016-07-18","Hadir","XB","3");
INSERT INTO t_absen_siswa VALUES("12","1410031","2016-07-18","Hadir","XB","3");


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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO t_pembayaran_detail VALUES("3","PB16070008","K01","","50000","","0");
INSERT INTO t_pembayaran_detail VALUES("4","PB16070008","K02","02","200000","","2015");
INSERT INTO t_pembayaran_detail VALUES("5","PB16070009","K01","","50000","","0");
INSERT INTO t_pembayaran_detail VALUES("6","PB16070009","K02","01","200000","","2015");
INSERT INTO t_pembayaran_detail VALUES("7","PB16070010","K01","","50000","","0");
INSERT INTO t_pembayaran_detail VALUES("8","PB16070010","K02","01","200000","","2015");


DROP TABLE IF EXISTS t_pembayaran_header;

CREATE TABLE `t_pembayaran_header` (
  `id_spp` int(255) NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(10) NOT NULL,
  `kode_siswa` char(7) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  PRIMARY KEY (`id_spp`,`kode_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO t_pembayaran_header VALUES("1","PB16070007","","","2016-07-20");
INSERT INTO t_pembayaran_header VALUES("4","PB16070010","1410022","Lunas","2016-07-20");


DROP TABLE IF EXISTS t_pembuatan_dokumen;

CREATE TABLE `t_pembuatan_dokumen` (
  `id_pembuatan_dok` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pembuatan_dok` date DEFAULT NULL,
  `kode_guru` varchar(20) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `tipe_dok` varchar(20) DEFAULT NULL,
  `tingkat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pembuatan_dok`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO t_pembuatan_dokumen VALUES("1","2015-01-05","G007","materi fisika 1","Materi","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("2","2015-01-12","G007","materi fisika 2","Materi","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("3","2015-01-05","G007","soal TO ","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("4","2015-01-12","G007","soal TO","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("5","2015-01-05","G009","materi kimia 2","Materi","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("6","2015-01-12","G009","soal TO","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("7","2015-01-12","G001","soal TO","Soal","SMA");
INSERT INTO t_pembuatan_dokumen VALUES("8","2016-07-20","G001","materi mtk","Materi","SMA");


DROP TABLE IF EXISTS t_pengeluaran;

CREATE TABLE `t_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pengeluaran` varchar(20) DEFAULT NULL,
  `tgl_pengeluaran` date DEFAULT NULL,
  `jenis_pengeluaran` varchar(20) DEFAULT NULL,
  `keterangan` text,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pengeluaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS u_counter;

CREATE TABLE `u_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pattern` varchar(20) NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
INSERT INTO u_counter VALUES("14","PB1607","10");
INSERT INTO u_counter VALUES("15","K02-0170","7");
INSERT INTO u_counter VALUES("16","K01-0170","5");
INSERT INTO u_counter VALUES("17","G","10");
INSERT INTO u_counter VALUES("18","HG1607","2");
INSERT INTO u_counter VALUES("19","D06-0170","1");
INSERT INTO u_counter VALUES("20","DE1607","2");


DROP TABLE IF EXISTS u_list_code;

CREATE TABLE `u_list_code` (
  `id_list_code` int(255) NOT NULL AUTO_INCREMENT,
  `kode_list` varchar(20) DEFAULT NULL,
  `head_list` varchar(50) DEFAULT NULL,
  `nama_list` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_list_code`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

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
INSERT INTO u_modul VALUES("7","U002","Role","U","utility/role");
INSERT INTO u_modul VALUES("8","U003","User","U","utility/user");
INSERT INTO u_modul VALUES("9","U004","Listcode","U","utility/listcode");
INSERT INTO u_modul VALUES("10","U005","Log","U","utility/log");
INSERT INTO u_modul VALUES("11","U006","Backup Data","U","common/dash/backup_db");
INSERT INTO u_modul VALUES("13","T001","Absen Siswa","T","transaksi/absen_siswa");
INSERT INTO u_modul VALUES("14","R001","Daftar Hadir Siswa","R","report/lap_absen_siswa");
INSERT INTO u_modul VALUES("15","R002","Rekap Gaji Guru","R","report/rekap_gaji");
INSERT INTO u_modul VALUES("18","T002","Absen Guru","T","transaksi/absen_guru");
INSERT INTO u_modul VALUES("19","T003","Pemasukan","T","transaksi/pembayaran");
INSERT INTO u_modul VALUES("20","R003","Jurnal","R","report/jurnal");
INSERT INTO u_modul VALUES("21","T004","Pengeluaran","T","transaksi/pengeluaran");
INSERT INTO u_modul VALUES("22","R004","Rekap SPP","R","report/rekap_spp");
INSERT INTO u_modul VALUES("23","U007","Setting","U","utility/setting");
INSERT INTO u_modul VALUES("24","T005","Pembuatan Dokumen","T","transaksi/pembuatan_dokumen");
INSERT INTO u_modul VALUES("25","T006","Gaji Guru","T","transaksi/gaji_guru");


DROP TABLE IF EXISTS u_role;

CREATE TABLE `u_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(20) DEFAULT NULL,
  `hak_akses` text,
  `kode_role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO u_role VALUES("2","super_admin","M001,M002,T001,T002,T003,T004,T005,T006,R001,R002,R003,R004,U001,U002,U003,U004,U005,U006,U007","R001");
INSERT INTO u_role VALUES("3","admin","M001,M002,T001,T002,R001","R002");


DROP TABLE IF EXISTS u_setting;

CREATE TABLE `u_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `kode_setting` varchar(20) DEFAULT NULL,
  `value_setting` varchar(20) DEFAULT NULL,
  `nama_setting` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO u_setting VALUES("1","THA","2015","Tahun Awal");
INSERT INTO u_setting VALUES("2","HG_SD","25000","Honor Guru (SD)");
INSERT INTO u_setting VALUES("3","HG_SMP","35000","Honor Guru (SMP)");
INSERT INTO u_setting VALUES("4","HG_SMA","40000","Honor Guru (SMA)");
INSERT INTO u_setting VALUES("5","HG_S","25000","Honor Guru (Soal)");
INSERT INTO u_setting VALUES("6","HG_M","25000","Honor Guru (Materi)");


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
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO u_user VALUES("1","ti4","super_admin","1234","dy2@mail.comq","1","super_admin","2016-05-31 22:08:30","");
INSERT INTO u_user VALUES("6","Andi Wiguna","admin","admin","email@mail.com","1","admin","2016-05-31 22:08:20","");


DROP TABLE IF EXISTS view_kpi;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kpi` AS select `mp`.`planning_no` AS `planning_no`,(select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `type_job`,(select `ul`.`nama_list` from `u_list_code` `ul` where ((`ul`.`head_list` = 'DP') and (`ul`.`kode_list` = (select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`))))) AS `depart` from `m_planning` `mp`;



DROP TABLE IF EXISTS view_list_code;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_list_code` AS select `ul`.`id_list_code` AS `id_list_code`,`ul`.`kode_list` AS `kode_list`,`ul`.`head_list` AS `head_list`,`ul`.`nama_list` AS `nama_list`,`ul`.`date` AS `date`,(select count(`ul1`.`id_list_code`) from `u_list_code` `ul1` where (`ul`.`kode_list` = `ul1`.`head_list`)) AS `jml_list` from `u_list_code` `ul` where isnull(`ul`.`head_list`);

INSERT INTO view_list_code VALUES("1","AG","","Agama","2016-07-13 00:00:00","5");
INSERT INTO view_list_code VALUES("7","MD","","Modul","2016-08-21 00:00:00","4");
INSERT INTO view_list_code VALUES("12","JK","","Jenis Kelamin","2016-08-27 00:00:00","2");
INSERT INTO view_list_code VALUES("15","KLS","","Kelas","2016-07-14 10:53:01","4");
INSERT INTO view_list_code VALUES("18","JL","","Jurnal","2016-07-16 13:12:11","9");
INSERT INTO view_list_code VALUES("37","TK","","Tingkat","2016-07-20 12:53:15","3");
INSERT INTO view_list_code VALUES("41","TD","","Tipe Dokumen","2016-07-20 14:00:23","2");


DROP TABLE IF EXISTS view_pembayaran_spp;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pembayaran_spp` AS select `pd`.`kode_pembayaran` AS `kode_pembayaran`,(select `ph`.`kode_siswa` from `t_pembayaran_header` `ph` where (`ph`.`kode_pembayaran` = `pd`.`kode_pembayaran`)) AS `kode_siswa`,(select `ph`.`tgl_pembayaran` from `t_pembayaran_header` `ph` where (`ph`.`kode_pembayaran` = `pd`.`kode_pembayaran`)) AS `tgl_pembayaran`,concat(`pd`.`bulan`,'-',`pd`.`tahun`) AS `pembayaran`,count(`pd`.`id_pembayaran_detail`) AS `jml` from `t_pembayaran_detail` `pd` where ((concat(`pd`.`bulan`,'-',`pd`.`tahun`) is not null) and (substr(`pd`.`jenis_pembayaran`,1,3) = 'K02')) group by `pd`.`kode_pembayaran`;

INSERT INTO view_pembayaran_spp VALUES("PB16070008","","","02-2015","1");
INSERT INTO view_pembayaran_spp VALUES("PB16070009","","","01-2015","1");
INSERT INTO view_pembayaran_spp VALUES("PB16070010","1410022","2016-07-20","01-2015","1");


DROP TABLE IF EXISTS view_planning;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_planning` AS select `mp`.`planning_no` AS `planning_no`,`mp`.`wo` AS `wo`,`mp`.`week` AS `week`,`mp`.`year` AS `year`,(select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `type_job`,(select `ul`.`nama_list` from `u_list_code` `ul` where (`ul`.`kode_list` = (select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)))) AS `label_type_job`,(select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `dept`,(select `ul`.`nama_list` from `u_list_code` `ul` where (`ul`.`kode_list` = (select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)))) AS `label_dept`,(select `mw`.`keterangan` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `ket` from `m_planning` `mp` order by `mp`.`week`;



DROP TABLE IF EXISTS view_r_jurnal;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_r_jurnal` AS select distinct date_format(`r`.`tgl_jurnal`,'%Y-%m') AS `bulan_tahun`,(select (sum(`r1`.`kredit`) - sum(`r1`.`debit`)) from `r_jurnal` `r1` where (date_format(`r1`.`tgl_jurnal`,'%Y-%m') < date_format(`r`.`tgl_jurnal`,'%Y-%m'))) AS `sisa_bulan_sebelumnya` from `r_jurnal` `r` order by date_format(`r`.`tgl_jurnal`,'%Y-%m');

INSERT INTO view_r_jurnal VALUES("2015-01","");
INSERT INTO view_r_jurnal VALUES("2016-07","-15000");
INSERT INTO view_r_jurnal VALUES("2016-09","685000");


DROP TABLE IF EXISTS view_r_rekap_gaji;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_r_rekap_gaji` AS select date_format(`t`.`tgl_absen`,'%m-%Y') AS `bulan_tahun`,`t`.`kode_guru` AS `kode_guru`,(select `g`.`nama_guru` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `nama_guru`,sum(`t`.`jumlah_jam`) AS `jml_jam`,'2' AS `jml_materi`,'2' AS `jml_soal` from `t_absen_guru` `t` group by date_format(`t`.`tgl_absen`,'%m-%Y'),`t`.`kode_guru`;

INSERT INTO view_r_rekap_gaji VALUES("01-2015","G001","Titin K, M.Pd","9","2","2");
INSERT INTO view_r_rekap_gaji VALUES("01-2015","G007","Kumaedah Khasanah, S.Pd","14","2","2");
INSERT INTO view_r_rekap_gaji VALUES("01-2015","G009","Fadli Salman, S.Pd","6","2","2");
INSERT INTO view_r_rekap_gaji VALUES("01-2015","G010","Annisa, S.Pd","4","2","2");


DROP TABLE IF EXISTS view_t_absen_siswa;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_t_absen_siswa` AS select distinct date_format(`t`.`tanggal`,'%m') AS `bulan`,date_format(`t`.`tanggal`,'%Y') AS `tahun`,`t`.`kelas` AS `kelas`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 1))) AS `jml_hadir_p1`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 1))) AS `jml_alfa_p1`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 2))) AS `jml_hadir_p2`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 2))) AS `jml_alfa_p2`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 3))) AS `jml_hadir_p3`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 3))) AS `jml_alfa_p3`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 4))) AS `jml_hadir_p4`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 4))) AS `jml_alfa_p4`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 5))) AS `jml_hadir_p5`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 5))) AS `jml_alfa_p5`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 6))) AS `jml_hadir_p6`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 6))) AS `jml_alfa_p6`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 7))) AS `jml_hadir_p7`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 7))) AS `jml_alfa_p7`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 8))) AS `jml_hadir_p8`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 8))) AS `jml_alfa_p8`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 9))) AS `jml_hadir_p9`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 9))) AS `jml_alfa_p9`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 10))) AS `jml_hadir_p10`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 10))) AS `jml_alfa_p10` from `t_absen_siswa` `t`;

INSERT INTO view_t_absen_siswa VALUES("07","2016","XA","0","0","5","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO view_t_absen_siswa VALUES("07","2016","XB","3","1","0","0","3","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");


DROP TABLE IF EXISTS view_t_gaji_guru;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_t_gaji_guru` AS select distinct date_format(`t`.`tgl_absen`,'%m-%Y') AS `bulan_tahun`,`t`.`tingkat` AS `tingkat`,`t`.`kode_guru` AS `kode_guru`,(select `g`.`nama_guru` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `nama_guru`,(select `g`.`mata_pelajaran` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `mapel`,(select sum(`t1`.`jumlah_jam`) from `t_absen_guru` `t1` where ((`t1`.`kode_guru` = `t`.`kode_guru`) and (`t1`.`tingkat` = `t`.`tingkat`) and (date_format(`t1`.`tgl_absen`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m'))) group by `t1`.`kode_guru`) AS `jml_absen`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = concat('HG_',`t`.`tingkat`))) AS `honor_mengajar`,(select count(`tp`.`id_pembuatan_dok`) from `t_pembuatan_dokumen` `tp` where ((`tp`.`kode_guru` = `t`.`kode_guru`) and (`tp`.`tingkat` = `t`.`tingkat`) and (date_format(`tp`.`tgl_pembuatan_dok`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m')) and (`tp`.`tipe_dok` = 'Materi')) group by `tp`.`kode_guru`) AS `jml_materi`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = 'HG_M')) AS `honor_materi`,(select count(`tp`.`id_pembuatan_dok`) from `t_pembuatan_dokumen` `tp` where ((`tp`.`kode_guru` = `t`.`kode_guru`) and (`tp`.`tingkat` = `t`.`tingkat`) and (date_format(`tp`.`tgl_pembuatan_dok`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m')) and (`tp`.`tipe_dok` = 'Soal')) group by `tp`.`kode_guru`) AS `jml_soal`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = 'HG_S')) AS `honor_soal`,(select `tg`.`status` from `t_gaji_guru` `tg` where ((`tg`.`bulan_tahun` = convert(date_format(`t`.`tgl_absen`,'%m-%Y') using latin1)) and (`tg`.`kode_guru` = `t`.`kode_guru`) and (`tg`.`tingkat` = `t`.`tingkat`))) AS `status` from `t_absen_guru` `t`;

INSERT INTO view_t_gaji_guru VALUES("01-2015","SMA","G007","Kumaedah Khasanah, S.Pd","IPA / Fisika","14","40000","2","25000","2","25000","");
INSERT INTO view_t_gaji_guru VALUES("01-2015","SMA","G010","Annisa, S.Pd","Biologi","4","40000","","25000","","25000","");
INSERT INTO view_t_gaji_guru VALUES("01-2015","SMA","G009","Fadli Salman, S.Pd","Kimia","6","40000","1","25000","1","25000","");
INSERT INTO view_t_gaji_guru VALUES("01-2015","SMA","G001","Titin K, M.Pd","MTK","9","40000","","25000","1","25000","");


