DROP TABLE IF EXISTS m_karyawan;

CREATE TABLE `m_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(100) DEFAULT NULL,
  `nama_belakang` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `alamat_2` varchar(100) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status_nikah` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `email_2` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `telp_home` varchar(20) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO m_karyawan VALUES("2","Wiguna","Andi","Jln karawangg no 5 kel burangrang","Jln karawangg no 5 kel burangrang","2016-05-30","ACTIVE","2015-10-21","SINGLE","Islam","wp@mail.com","wp2@mail.com","085711129092","443322","31221","BANDUNG","JAWABARAT","MEC","2016-05-30 22:41:54");
INSERT INTO m_karyawan VALUES("3","Andi","Juga","Lorem ipsum dolor sit amet..","Lorem ipsum dolor sit amet..","2016-05-01","RESIGNED","2016-05-10","MARRIED","Islam","email@mail.com","wp2@mail.com","085711129092","443322","31221","BANDUNG","JAWABARAT","ELECT","2016-05-30 23:17:32");


DROP TABLE IF EXISTS m_log;

CREATE TABLE `m_log` (
  `id_log` int(255) NOT NULL AUTO_INCREMENT,
  `pegawai` int(255) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type_user` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

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


DROP TABLE IF EXISTS m_planning;

CREATE TABLE `m_planning` (
  `id_planning` int(11) NOT NULL AUTO_INCREMENT,
  `planning_no` varchar(50) DEFAULT NULL,
  `wo` int(11) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `type_job` varchar(100) DEFAULT NULL,
  `status_job` varchar(100) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `week` varchar(50) DEFAULT NULL,
  `day` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `pj` varchar(100) DEFAULT NULL,
  `ket` text,
  `date` datetime DEFAULT NULL,
  `date_status` datetime DEFAULT NULL,
  `status_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_planning`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

INSERT INTO m_planning VALUES("1","2015-00001","34000001","","","C","2015-12-01","2015-12-01","03","SUNDAY,TUESDAY","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("2","2015-00002","34000002","","","C","2015-12-01","2015-12-01","03","SUNDAY","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("3","2015-00003","30000003","","","C","2015-12-01","2015-12-01","03","SUNDAY","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("4","2015-00004","30000004","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("5","2015-00005","34000005","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("6","2015-00006","30000006","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("7","2015-00007","30000007","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("8","2015-00008","30000008","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("9","2015-00009","30000009","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("10","2015-00010","30000010","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("11","2015-00011","34000011","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("12","2015-00012","34000012","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("13","2015-00013","34000013","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("14","2015-00014","34000014","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("15","2015-00015","34000015","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("16","2015-00016","34000016","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("17","2015-00017","34000017","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("18","2015-00018","30000018","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("19","2015-00019","30000019","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("20","2015-00020","30000020","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("21","2015-00021","30000021","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("22","2015-00022","30000022","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("23","2015-00023","30000023","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("24","2015-00024","30000024","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("25","2015-00025","30000025","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("26","2015-00026","30000026","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("27","2015-00027","30000027","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("28","2015-00028","30000028","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("29","2015-00029","30000029","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("30","2015-00030","30000030","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("31","2015-00031","30000031","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("32","2015-00032","30000032","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("33","2015-00033","30000033","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("34","2015-00034","30000034","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("35","2015-00035","30000035","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("36","2015-00036","30000036","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("37","2015-00037","30000037","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("38","2015-00038","34000038","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("39","2015-00039","30000039","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("40","2015-00040","30000040","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("41","2015-00041","30000041","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("42","2015-00042","30000042","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("43","2015-00043","30000043","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("44","2015-00044","30000044","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("45","2015-00045","30000045","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("46","2015-00046","30000046","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("47","2015-00047","30000047","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("48","2015-00048","30000048","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("49","2015-00049","30000049","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("50","2015-00050","30000050","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("51","2015-00051","30000051","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("52","2015-00052","30000052","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("53","2015-00053","30000053","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("54","2015-00054","30000054","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("55","2015-00055","30000055","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("56","2015-00056","30000056","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("57","2015-00057","30000057","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("58","2015-00058","30000058","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("59","2015-00059","30000059","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("60","2015-00060","30000060","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("61","2015-00061","30000061","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("62","2015-00062","30000062","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("63","2015-00063","30000063","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("64","2015-00064","30000064","","","C","2015-12-01","2015-12-01","03","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("65","2015-00065","30000065","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("66","2015-00066","30000066","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("67","2015-00067","30000067","","","C","2015-12-01","2015-12-01","03","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("68","2015-00068","30000068","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("69","2015-00069","30000069","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("70","2015-00070","30000070","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("71","2015-00071","30000071","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("72","2015-00072","30000072","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("73","2015-00073","30000073","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("74","2015-00074","30000074","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("75","2015-00075","30000075","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("76","2015-00076","30000076","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("77","2015-00077","30000077","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("78","2015-00078","30000078","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("79","2015-00079","30000079","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("80","2015-00080","30000080","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("81","2015-00081","30000081","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("82","2015-00082","30000082","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("83","2015-00083","30000083","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("84","2015-00084","30000084","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("85","2015-00085","30000085","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("86","2015-00086","30000086","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("87","2015-00087","30000087","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("88","2015-00088","30000088","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("89","2015-00089","30000089","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("90","2015-00090","30000090","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("91","2015-00091","30000091","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("92","2015-00092","30000092","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("93","2015-00093","30000093","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("94","2015-00094","30000094","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("95","2015-00095","30000095","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("96","2015-00096","30000096","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("97","2015-00097","30000097","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("98","2015-00098","30000098","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("99","2015-00099","30000099","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("100","2015-00100","30000100","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("101","2015-00101","30000101","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("102","2015-00102","30000102","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("103","2015-00103","30000103","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("104","2015-00104","30000104","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("105","2015-00105","30000105","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("106","2015-00106","30000106","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("107","2015-00107","30000107","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("108","2015-00108","30000108","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("109","2015-00109","34000109","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("110","2015-00110","30000110","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("111","2015-00111","30000111","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("112","2015-00112","30000112","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("113","2015-00113","30000113","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("114","2015-00114","30000114","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("115","2015-00115","30000115","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("116","2015-00116","30000116","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("117","2015-00117","30000117","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("118","2015-00118","30000118","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("119","2015-00119","30000119","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("120","2015-00120","30000120","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("121","2015-00121","30000121","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("122","2015-00122","34000122","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("123","2015-00123","30000123","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("124","2015-00124","34000124","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("125","2015-00125","34000125","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("126","2015-00126","30000126","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("127","2015-00127","30000127","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("128","2015-00128","30000128","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("129","2015-00129","30000129","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("130","2015-00130","30000130","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("131","2015-00131","30000131","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("132","2015-00132","30000132","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("133","2015-00133","30000133","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("134","2015-00134","30000134","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("135","2015-00135","30000135","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga,Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("136","2015-00136","30000136","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("137","2015-00137","30000137","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("138","2015-00138","30000138","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("139","2015-00139","34000139","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("140","2015-00140","34000140","","","C","2016-02-16","2016-02-16","08","","2015","Wiguna Andi","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("141","2015-00141","30000141","","","C","2016-02-16","2016-02-16","08","","2015","Andi Juga","","2016-06-08 00:00:00","","");
INSERT INTO m_planning VALUES("142","2016-00001","34000141","","","IP","2016-06-09","2016-06-09","23","","2016","Andi Juga","","2016-06-09 11:45:32","","");


DROP TABLE IF EXISTS m_wo;

CREATE TABLE `m_wo` (
  `id_wo` int(11) NOT NULL AUTO_INCREMENT,
  `no_wo` varchar(50) DEFAULT NULL,
  `no_tag` varchar(50) DEFAULT NULL,
  `permit` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_wo`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

INSERT INTO m_wo VALUES("1","34000001","23-KA-6001B","YES","CM","INST","Troubleshoot gas detector 70-AB-6221 due to error reading","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("2","34000002","97-GX-4001B","YES","CM","INST","43-FIT-3024 RIO open loop problem ( Error reading )","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("3","30000003","97-GA-0906A","YES","PM","INST","Gas Export Metering system form SKK MIGAS","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("4","30000004","63-VK-0500 A/B","YES","PM","INST","Galley Hood Fire Suppress Syst:6M Inspct","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("5","34000005","","YES","CM","INST","Rectify I/O error of gas detector 70-AR-2104 during heavy rain/wind","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("6","30000006","","YES","PM","INST","Gas detectors (Open Path IR)- Inspection and Function test","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("7","30000007","","YES","PM","INST","Manual Fire Alarm Switches- P-p room, Upper DK, Helideck:  Inspection and Function test","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("8","30000008","","YES","PM","INST","Fire detectors (Smoke): ER A-DECK and UPPER DECK Inspection and Function test","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("9","30000009","","YES","PM","INST","Fire detectors (Smoke) STEERING GEAR ROOM and MEZZANINE FLOOR: Inspection and Function test","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("10","30000010","","YES","PM","INST","Fire detectors (Smoke) PUMP ROOM: Inspection and Function test","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("11","34000011","","YES","CM","INST","Install barrier screen to prevent low enclosure dif pressure 23-PDT-8001A","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("12","34000012","","YES","CM","INST","Rectify I/O error of gas detector during heavy rain/wind 70-AB-6061","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("13","34000013","","YES","CM","INST","Rectify I/O error of gas detector during heavy rain/wind 70-AB-6064","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("14","34000014","","YES","CM","INST","Rectify I/O error of gas detector during heavy rain/wind 70-AB-6066","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("15","34000015","","YES","CM","INST","Rectify I/O error of gas detector during heavy rain/wind 70-AB-2109","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("16","34000016","","YES","CM","INST","Inspect the voltage low of 24 Vdc Supply, fault turbine controlNet and Backup Overspeed test request","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("17","34000017","","YES","CM","INST","Found discrepancy reading, please check and rectify. 44-LSIT-1000","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("18","30000018","","YES","PM","INST","Instrument air compressor Air Dryer A and B - 1M Condition check/Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("19","30000019","","YES","PM","INST","Cargo Oil System- Instruments: 6M Preservation PM","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("20","30000020","","YES","PM","INST","Cargo Oil System- Instruments: 6M Preservation PM","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("21","30000021","","YES","PM","ELECT","Elect Motor for  Compressor - A for Sewage Treatment Plant","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("22","30000022","","YES","PM","ELECT","MGPS System","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("23","30000023","","YES","PM","ELECT","Normal lighting Panel Module 10","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("24","30000024","","YES","PM","ELECT","Electrical Motor for Vacuum Pump No.1","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("25","30000025","","YES","PM","ELECT","Fresh water","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("26","30000026","","YES","PM","ELECT","Hydraulic power","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("27","30000027","","YES","PM","ELECT","Emergency Generator Engine","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("28","30000028","","YES","PM","MEC","Deck Drains: 1M Inspection / PS: C-16 Bunding and Drainage System - Drains","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("29","30000029","","YES","PM","MEC","Quick release hook/Hinges- FWD and AFT  (Mooring Hawser)-1M Lubrication and Inspection / PS: P-18 Cargo Offloading Equipment - Hawser","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("30","30000030","","YES","PM","MEC","Utility (flexible) hoses-6M Visual inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("31","30000031","","YES","PM","MEC","Gas Turbine (HP)-1M L.O Lab analysis","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("32","30000032","","YES","PM","MEC","Lube oil - Onboard analysis 2W Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("33","30000033","","YES","PM","MEC","Life / Rescue boat and Its Davit (Stbd): 1M  Inspection / PS: E-03  Evacuation Systems - Lifeboats","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("34","30000034","","YES","PM","MEC","Life / Rescue boat and Its Davit (STBD): 6M Inspection / PS: E-03  Evacuation Systems - Lifeboats","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("35","30000035","","YES","PM","MEC","Turbine for Alternator 2- 36M Turbine Internal Inspection and Governor Servicing","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("36","30000036","","YES","PM","MEC","Package air condition System: Inspection / PS: C-17 HVAC System - HVAC","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("37","30000037","","YES","PM","MEC","HVAC Condenser No. 1: Inspection/Cleaning / PS: C-17 HVAC System - HVAC","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("38","34000038","","YES","CM","MEC","Refrigerant Condenser No. 2: Inspection/Cleaning","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("39","30000039","","YES","PM","MEC","Fire water pumping unit, main 3 (Jockey) -60M Survey / PS: M-01  Active Fire Protection - Fire Pump","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("40","30000040","","YES","PM","MEC","Fire water Jockey pump A/B/C- 12M Detailed Inspection / Function check / PS: M-01  Active Fire Protection - Fire Pump","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("41","30000041","","YES","PM","MEC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- TOP SIDE /Process System","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("42","30000042","","YES","PM","MEC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- TOP SIDE /Process System","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("43","30000043","","YES","PM","MEC","Gear /Screw  Pump - 12M Detailed Inspection / Function check","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("44","30000044","","YES","PM","MEC","E-House / M41 air condition System: Inspection / PS: C-17 HVAC System - HVAC","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("45","30000045","","YES","PM","MEC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- Engine Room","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("46","30000046","","YES","PM","MEC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- Engine Room","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("47","30000047","","YES","PM","MEC","Deck crane (Liebherr)-12M Plan / PS: P-24 Cranes and Lifting Equipment - Permanent","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("48","30000048","","YES","PM","MEC","Deck crane (Liebherr)-6M Plan / PS: P-24 Cranes and Lifting Equipment - Permanent","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("49","30000049","","YES","PM","MEC","Life / Rescue boat, FRC and Its Davit (All): 1W Inspection / PS: E-03 Evacuation Systems - Lifeboats and E-07  Fast Rescue Craft","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("50","30000050","","YES","PM","MEC","Emergency/Deluge fire Pump-1W Function test /Inspection / PS: M-01  Active Fire Protection - Fire Pump","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("51","30000051","","YES","PM","MEC","Assisted Chopper activity / Crew change","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("52","30000052","","YES","PM","MEC","General Cleaning & Safety drill","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("53","30000053","","YES","PM","PROD","Process line - Gas leak check ","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("54","30000054","","YES","PM","PROD","Drain water at LP KO Drum route to Slop tank ","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("55","30000055","","YES","PM","PROD","Production log sheet ","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("56","30000056","","YES","PM","PROD","Sampling and analyze produced water from Inlet Separator A/B and Flotation Vessel","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("57","30000057","","YES","PM","PROD","Check Sea water lift pump condition (leakage, vibration/noisy and pressure)","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("58","30000058","","YES","PM","PROD","Daily Report Production Sales, Data plant and Laboratory","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("59","30000059","","YES","PM","PROD","Sampling and analyze produced water from Flowline A/B","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("60","30000060","","YES","PM","PROD","Check, Operate and Grease M21","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("61","30000061","","YES","PM","PROD","Check, Operate and Grease M60","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("62","30000062","","YES","PM","PROD","Check, Operate and Grease M62","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("63","30000063","","YES","PM","PROD","Cooling Medium Cooler A/ B/ C Back flush","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("64","30000064","","YES","PM","PROD","LO/ LC Register Update","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("65","30000065","","YES","PM","PROD","Check, Operate and Grease M70","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("66","30000066","","YES","PM","PROD","Check, Operate and Grease M61","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("67","30000067","","YES","PM","PROD","Subsea Corrosion Inhibitor Injection Pump A Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("68","30000068","","YES","PM","PROD","Drain water at LP KO Drum route to Slop tank ","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("69","30000069","","YES","PM","PROD","Sampling and analyze produced water from Inlet Separator A/B and Flotation Vessel","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("70","30000070","","YES","PM","PROD","Check Sea water lift pump condition (leakage, vibration/noisy and pressure)","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("71","30000071","","YES","PM","PROD","Daily Report Production Sales, Data plant and Laboratory","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("72","30000072","","YES","PM","PROD","Sampling and analyze produced water from Flowline A/B","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("73","30000073","70","YES","PM","PROD","Environmental Performance System(EPS) Report-1M","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("74","30000074","13-LG-002","YES","PM","PROD","16\" ID Production Flexible Riser (Technip Procedure)- Operation parameter recording for history- 6M Plan / PS: P-01 Risers and P-02 Umbilicals","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("75","30000075","13-LG-003","YES","PM","PROD","16\" Export Flexible Riser (Technip Procedure)- Operation parameter recording for history- 6M Plan / PS: P-01 Risers and P-02 Umbilicals","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("76","30000076","20-HA-1002","YES","PM","PROD","Condensate Heater- Shell and Tube type:Inspection/Cleaning","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("77","30000077","20","YES","PM","PROD","Process line - Gas leak check","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("78","30000078","42083","YES","PM","PROD","Preservation of Process condensate system-6M Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("79","30000079","44.01","YES","PM","PROD","Produced Water Sample to Pagerungan Laboratory-2W Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("80","30000080","21-PG-0500","YES","PM","PROD","Off. Spec. Condensate Pump: 6M Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("81","30000081","91","YES","PM","PROD","Fire /weather tight doors: 3M Leak check / PS: E-02  Temporary Refuge","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("82","30000082","71.06.000","YES","PM","PROD","Fire Water System (Hose/Hydrant/Monitor/Shore connection) 1M Inspection / PS: E-06  Life Saving Equipment","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("83","30000083","20","YES","PM","PROD","LO / LC / NC / NO / CAR SEALS 1M routine","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("84","30000084","","YES","PM","PROD","Production log sheet ","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("85","30000085","","YES","PM","PROD","Daily reading for engine room log","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("86","30000086","","YES","PM","PROD","Boiler Water Analysis","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("87","30000087","","YES","PM","PROD","Chemical dosing of Boilers and Fresh Water Generator","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("88","30000088","","YES","PM","PROD","Daily reading for boiler port and stbd side","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("89","30000089","","YES","PM","PROD","Daily HVAC reading","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("90","30000090","","YES","PM","PROD","Daily STG reading","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("91","30000091","","YES","PM","PROD","Daily FWG reading","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("92","30000092","40-HA-0001","YES","PM","PROD","Main Cooling Fresh Water Cooler- Shell and Tube type:Inspection/Cleaning","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("93","30000093","63-KB-0003","YES","PM","PROD","Emergency air compressor-12M Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("94","30000094","63-KB-0003","YES","PM","PROD","Emergency air compressor-1M Function test/Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("95","30000095","53.03","YES","PM","PROD","POT WATER SAMPLE WEEKLY QUALITY MONITORIN","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("96","30000096","42","YES","PM","PROD","Tanks on Deck - 6M Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("97","30000097","82-DD-5501A","YES","PM","PROD","Diesel Generator Engines (A and B) : Bi weekly Inspection / PS: P-09 Engine Room Equipment - Hydrocarbon Containment","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("98","30000098","97-PA-0900A","YES","PM","PROD","Chiller Pump A and B- 6M Operation Check/ Inspection / PS: C-17 HVAC System - HVAC","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("99","30000099","21-PA-0001B","YES","PM","PROD","Cargo Oil Pump No.2 and its Turbine- 6M Detailed Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("100","30000100","76.03.000","YES","PM","PROD","Breathing Apparatus : 1M Inspection / PS: E-06  Life Saving Equipment","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("101","30000101","56-XA-0500","YES","PM","PROD","Oily Water Separator (Ocean Clean) - 1M Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("102","30000102","53","YES","PM","PROD","Boiler and Cooling water test report-1M Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("103","30000103","63","YES","PM","PROD","Breathing Air Compressor: 1M Operational check/Inspection / PS: E-06  Life Saving Equipment","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("104","30000104","66-XF-0500","YES","PM","PROD","Sewage Treatment Plant (Super Trident)- 1W Inpection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("105","30000105","21-PA-0001A","YES","PM","PROD","Pump and its Turbine (A and B) - 1M Inspection / PS: P-13 Cargo Pump and Piping System - Pumps","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("106","30000106","50-PA-0001A","YES","PM","PROD","Bilge and GS Pump \"A and B\"- 1M Operation Check/ Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("107","30000107","62-PG-8001A","YES","PM","PROD","Boiler DO pump A and B- 6M Operation Check/ Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("108","30000108","51-PA-0500A","YES","PM","PROD","E/R Cooling SW pump A/B/C/D- 6M Operation Check/ Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("109","34000109","56-LSH-0501","YES","CM","INST","Bilge level switch troubleshooting","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("110","30000110","70.03.000","YES","PM","INST","Beacons: Inspection and Function test: 6M","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("111","30000111","79","YES","PM","INST","ESD2/PSD/ASS Function check 12M Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("112","30000112","79","YES","PM","INST","ESD1/PSD/ASS Function check 6M Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("113","30000113","79","YES","PM","INST","ESD1/PSD/ASS Function check 12M Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("114","30000114","40","YES","PM","INST","Cooling Medium System - Process (Safety Critical Instruments) - 6M PM","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("115","30000115","72-ZS-0700","YES","PM","INST","12M / PS: M-06  Active Fire Protection - Inergen and CO2 Systems","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("116","30000116","86.05.000","YES","PM","INST","V-SAT Vendor Service-12M Plan / PS: C-12 Emergency Communications","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("117","30000117","63","YES","PM","INST","Service Air Compression System-   (Instruments) - 6M PM","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("118","30000118","64","YES","PM","INST","Produced water System (Safety Critical Instruments) - 6M PM","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("119","30000119","44.01.300","YES","PM","INST","Produced Water system Instruments- General Preservation Plan","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("120","30000120","72.02","YES","PM","INST","Fixed CO2 FF Syst: 1M Visual  Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("121","30000121","","YES","PM","INST","Replace HMI N2 Generator","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("122","34000122","42-PB-6219","YES","CM","INST","Anti foam pump (42-PB-6219) can\'t run well","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("123","30000123","","YES","PM","ELECT","Emergency diesel engine -1W Inspection / PS: C-13 Emergency Power - Generator","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("124","34000124","97","YES","CM","ELECT","Rectify Workshop AC unit due to ubnormal running","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("125","34000125","97","YES","CM","ELECT","Rectify UPS AHU blower due to ubnormal running","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("126","30000126","50.04","YES","PM","ELECT","MGPS: 1W Analysis and trending of current log","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("127","30000127","97-EC-0902","YES","PM","ELECT","Provision Refrigeration System - Fridge Control panel: 1M Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("128","30000128","64.03.000","YES","PM","ELECT","N2 Generation System-Electric Heater: Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("129","30000129","97.10.000","YES","PM","ELECT","Provision Refrigeration System A and B: 1M Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("130","30000130","84-DD-5001","YES","PM","ELECT","Emergency diesel engine -1W Inspection / PS: C-13 Emergency Power - Generator","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("131","30000131","53","YES","PM","ELECT","UV Sterilizer: 1M Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("132","30000132","23.03.000","YES","PM","ELECT","LP Gas Compressor B and Its Gas Turbine -1M Electrical/ Battery Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("133","30000133","23.01.000","YES","PM","ELECT","HP Gas Compressor A and Its Gas Turbine -1M Electrical/ Battery Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("134","30000134","23.01.000","YES","PM","ELECT","HP Gas Compressor B and Its Gas Turbine -1M Electrical/ Battery Inspection","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("135","30000135","50.04","YES","PM","ELECT","MGPS: 1W Analysis and trending of current log","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("136","30000136","97","YES","PM","ELECT","Megger test, install the instrument devices of provision compressor motor after overhoule","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("137","30000137","84-EL-5002","YES","PM","ELECT","Emergency lighting: 1M Inspection / PS: C-10 Emergency Lighting","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("138","30000138","97","YES","PM","ELECT","Running provision system after overhoule","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("139","34000139","","YES","CM","ELECT","Replace fluorecent lamps 5 ea at bellow module 20","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("140","34000140","","YES","CM","ELECT","Rectify metanol pump motor due to cannt started","2016-06-08 00:00:00","1");
INSERT INTO m_wo VALUES("141","30000141","","YES","PM","ELECT","Weekly running test emergency equipments","0000-00-00 00:00:00","1");
INSERT INTO m_wo VALUES("143","34000141","111","YES","CM","CAT","qqqq","2016-06-09 11:37:08","1");


DROP TABLE IF EXISTS u_counter;

CREATE TABLE `u_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pattern` varchar(20) NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO u_counter VALUES("1","2015","141");
INSERT INTO u_counter VALUES("4","3400","141");
INSERT INTO u_counter VALUES("6","2016","1");
INSERT INTO u_counter VALUES("5","3000","141");


DROP TABLE IF EXISTS u_list_code;

CREATE TABLE `u_list_code` (
  `id_list_code` int(255) NOT NULL AUTO_INCREMENT,
  `kode_list` varchar(20) DEFAULT NULL,
  `head_list` varchar(50) DEFAULT NULL,
  `nama_list` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_list_code`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO u_list_code VALUES("8","AG","","Agama","2016-05-30 22:22:09");
INSERT INTO u_list_code VALUES("9","AG","AG","Islam","2016-05-30 22:22:18");
INSERT INTO u_list_code VALUES("10","AG","AG","Protestan","2016-05-30 22:22:49");
INSERT INTO u_list_code VALUES("11","AG","AG","Katolik","2016-05-30 22:23:01");
INSERT INTO u_list_code VALUES("12","AG","AG","Hindu","2016-05-30 22:23:12");
INSERT INTO u_list_code VALUES("13","AG","AG","Budha","2016-05-30 22:23:20");
INSERT INTO u_list_code VALUES("14","AG","AG","Lainnya","2016-05-30 22:23:28");
INSERT INTO u_list_code VALUES("15","DP","","Departments","2016-05-30 22:24:21");
INSERT INTO u_list_code VALUES("16","CAT","DP","CATERING","2016-05-30 22:28:18");
INSERT INTO u_list_code VALUES("17","CONT","DP","CONTRACTOR","2016-05-30 22:28:36");
INSERT INTO u_list_code VALUES("18","CROP","DP","CRANE OPR","2016-05-30 22:29:00");
INSERT INTO u_list_code VALUES("19","ELECT","DP","ELECTRIC","2016-05-30 22:29:16");
INSERT INTO u_list_code VALUES("20","ENG","DP","ENGINEERING","2016-05-30 22:29:32");
INSERT INTO u_list_code VALUES("21","INST","DP","INSTRUMENT","2016-05-30 22:29:47");
INSERT INTO u_list_code VALUES("22","MAR","DP","MARINE","2016-05-30 22:30:00");
INSERT INTO u_list_code VALUES("23","MEC","DP","MECHANIC","2016-05-30 22:30:10");
INSERT INTO u_list_code VALUES("24","MED","DP","MEDIC","2016-05-30 22:30:21");
INSERT INTO u_list_code VALUES("25","PROD","DP","PRODUCTION","2016-05-30 22:30:32");
INSERT INTO u_list_code VALUES("26","VEN","DP","VENDOR","2016-05-30 22:30:43");
INSERT INTO u_list_code VALUES("27","ST","","Status","2016-05-30 22:31:59");
INSERT INTO u_list_code VALUES("28","ST","ST","ACTIVE","2016-05-30 22:32:10");
INSERT INTO u_list_code VALUES("29","ST","ST","RESIGNED","2016-05-30 22:32:23");
INSERT INTO u_list_code VALUES("30","SN","","Marital Status","2016-05-30 22:38:27");
INSERT INTO u_list_code VALUES("31","1","SN","MARRIED","2016-05-30 22:38:42");
INSERT INTO u_list_code VALUES("32","2","SN","SINGLE","2016-05-30 22:38:52");
INSERT INTO u_list_code VALUES("33","PW","","Permit to work","2016-05-31 15:59:33");
INSERT INTO u_list_code VALUES("34","1","PW","YES","2016-05-31 15:59:52");
INSERT INTO u_list_code VALUES("35","2","PW","NO","2016-05-31 16:00:06");
INSERT INTO u_list_code VALUES("36","TW","","Type of work","2016-05-31 16:00:59");
INSERT INTO u_list_code VALUES("37","CM","TW","CORRECTION MAINTENANCE","2016-05-31 16:01:24");
INSERT INTO u_list_code VALUES("38","EXT","TW","EXTERNAL BY VENDOR","2016-05-31 16:01:41");
INSERT INTO u_list_code VALUES("39","PM","TW","PREVENTIVE MAINTENANCE","2016-05-31 16:02:06");
INSERT INTO u_list_code VALUES("40","PRJ","TW","PROJECT","2016-05-31 16:02:25");
INSERT INTO u_list_code VALUES("41","SPJ","","Status Pekerjaan","2016-05-31 16:03:21");
INSERT INTO u_list_code VALUES("42","C","SPJ","Closed","2016-05-31 16:04:57");
INSERT INTO u_list_code VALUES("43","CN","SPJ","Canceled","2016-05-31 16:05:07");
INSERT INTO u_list_code VALUES("44","IP","SPJ","InProgress","2016-05-31 16:05:17");
INSERT INTO u_list_code VALUES("45","O","SPJ","Open","2016-05-31 16:05:37");
INSERT INTO u_list_code VALUES("46","P","SPJ","Pending","2016-05-31 16:06:12");
INSERT INTO u_list_code VALUES("47","CP","SPJ","Complete","2016-05-31 16:06:12");
INSERT INTO u_list_code VALUES("52","MD","","Modul","2016-05-31 19:06:38");
INSERT INTO u_list_code VALUES("53","M","MD","Master","2016-05-31 19:06:38");
INSERT INTO u_list_code VALUES("54","T","MD","Transaksi","2016-05-31 19:06:38");
INSERT INTO u_list_code VALUES("55","R","MD","Report","2016-05-31 19:06:38");
INSERT INTO u_list_code VALUES("56","U","MD","Utility","2016-05-31 19:06:38");
INSERT INTO u_list_code VALUES("57","target","","80","2016-06-08 11:29:45");


DROP TABLE IF EXISTS u_modul;

CREATE TABLE `u_modul` (
  `id_modul` int(11) NOT NULL AUTO_INCREMENT,
  `kode_modul` varchar(5) DEFAULT NULL,
  `nama_modul` varchar(20) DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO u_modul VALUES("3","M001","Karyawan","M","master/karyawan");
INSERT INTO u_modul VALUES("4","M002","Working Order","M","master/wo");
INSERT INTO u_modul VALUES("5","M003","Planning","M","master/planning");
INSERT INTO u_modul VALUES("6","U001","Modul","U","utility/modul");
INSERT INTO u_modul VALUES("7","U002","Role","U","utility/role");
INSERT INTO u_modul VALUES("8","U003","User","U","utility/user");
INSERT INTO u_modul VALUES("9","U004","Listcode","U","utility/listcode");
INSERT INTO u_modul VALUES("10","U005","Log","U","common/log");
INSERT INTO u_modul VALUES("11","U006","Backup Data","U","common/dash/backup_db");
INSERT INTO u_modul VALUES("13","T001","Completed Task","T","transaksi/complete");
INSERT INTO u_modul VALUES("14","R001","Karyawan","R","report/lap_karyawan");
INSERT INTO u_modul VALUES("15","R002","WO","R","report/lap_wo");
INSERT INTO u_modul VALUES("16","R003","Planning","R","report/lap_planning");
INSERT INTO u_modul VALUES("17","R004","KPI","R","report/lap_kpi");


DROP TABLE IF EXISTS u_role;

CREATE TABLE `u_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(20) DEFAULT NULL,
  `hak_akses` text,
  `kode_role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO u_role VALUES("2","super_admin","M001,M002,M003,T001,T002,R001,R002,R003,R004,U001,U002,U003,U004,U005,U006","R001");
INSERT INTO u_role VALUES("3","admin","M001,M002,M003,T001,T002,R001","R002");


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

INSERT INTO u_user VALUES("1","Andi","super_admin","1234","dy@mail.com","1","super_admin","2016-05-31 22:08:30","");
INSERT INTO u_user VALUES("6","Andi Wiguna","admin","admin","email@mail.com","1","admin","2016-05-31 22:08:20","");


DROP TABLE IF EXISTS view_kpi;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kpi` AS select `mp`.`planning_no` AS `planning_no`,(select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `type_job`,(select `ul`.`nama_list` from `u_list_code` `ul` where ((`ul`.`head_list` = 'DP') and (`ul`.`kode_list` = (select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`))))) AS `depart` from `m_planning` `mp`;

INSERT INTO view_kpi VALUES("2015-00001","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00002","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00003","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00004","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00005","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00006","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00007","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00008","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00009","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00010","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00011","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00012","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00013","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00014","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00015","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00016","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00017","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00018","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00019","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00020","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00021","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00022","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00023","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00024","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00025","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00026","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00027","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00028","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00029","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00030","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00031","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00032","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00033","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00034","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00035","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00036","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00037","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00038","CM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00039","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00040","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00041","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00042","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00043","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00044","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00045","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00046","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00047","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00048","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00049","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00050","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00051","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00052","PM","MECHANIC");
INSERT INTO view_kpi VALUES("2015-00053","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00054","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00055","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00056","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00057","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00058","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00059","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00060","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00061","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00062","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00063","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00064","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00065","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00066","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00067","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00068","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00069","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00070","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00071","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00072","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00073","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00074","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00075","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00076","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00077","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00078","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00079","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00080","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00081","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00082","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00083","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00084","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00085","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00086","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00087","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00088","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00089","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00090","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00091","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00092","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00093","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00094","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00095","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00096","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00097","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00098","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00099","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00100","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00101","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00102","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00103","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00104","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00105","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00106","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00107","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00108","PM","PRODUCTION");
INSERT INTO view_kpi VALUES("2015-00109","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00110","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00111","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00112","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00113","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00114","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00115","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00116","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00117","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00118","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00119","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00120","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00121","PM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00122","CM","INSTRUMENT");
INSERT INTO view_kpi VALUES("2015-00123","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00124","CM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00125","CM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00126","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00127","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00128","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00129","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00130","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00131","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00132","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00133","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00134","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00135","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00136","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00137","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00138","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00139","CM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00140","CM","ELECTRIC");
INSERT INTO view_kpi VALUES("2015-00141","PM","ELECTRIC");
INSERT INTO view_kpi VALUES("2016-00001","CM","CATERING");


DROP TABLE IF EXISTS view_list_code;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_list_code` AS select `ul`.`id_list_code` AS `id_list_code`,`ul`.`kode_list` AS `kode_list`,`ul`.`head_list` AS `head_list`,`ul`.`nama_list` AS `nama_list`,`ul`.`date` AS `date`,(select count(`ul1`.`id_list_code`) from `u_list_code` `ul1` where (`ul`.`kode_list` = `ul1`.`head_list`)) AS `jml_list` from `u_list_code` `ul` where isnull(`ul`.`head_list`);

INSERT INTO view_list_code VALUES("8","AG","","Agama","2016-05-30 22:22:09","6");
INSERT INTO view_list_code VALUES("15","DP","","Departments","2016-05-30 22:24:21","11");
INSERT INTO view_list_code VALUES("27","ST","","Status","2016-05-30 22:31:59","2");
INSERT INTO view_list_code VALUES("30","SN","","Marital Status","2016-05-30 22:38:27","2");
INSERT INTO view_list_code VALUES("33","PW","","Permit to work","2016-05-31 15:59:33","2");
INSERT INTO view_list_code VALUES("36","TW","","Type of work","2016-05-31 16:00:59","4");
INSERT INTO view_list_code VALUES("41","SPJ","","Status Pekerjaan","2016-05-31 16:03:21","6");
INSERT INTO view_list_code VALUES("52","MD","","Modul","2016-05-31 19:06:38","4");
INSERT INTO view_list_code VALUES("57","target","","80","2016-06-08 11:29:45","0");


DROP TABLE IF EXISTS view_planning;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_planning` AS select `mp`.`planning_no` AS `planning_no`,`mp`.`wo` AS `wo`,`mp`.`week` AS `week`,`mp`.`year` AS `year`,(select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `type_job`,(select `ul`.`nama_list` from `u_list_code` `ul` where (`ul`.`kode_list` = (select `mw`.`type` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)))) AS `label_type_job`,(select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `dept`,(select `ul`.`nama_list` from `u_list_code` `ul` where (`ul`.`kode_list` = (select `mw`.`dept` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)))) AS `label_dept`,(select `mw`.`keterangan` from `m_wo` `mw` where (`mp`.`wo` = `mw`.`no_wo`)) AS `ket` from `m_planning` `mp` order by `mp`.`week`;

INSERT INTO view_planning VALUES("2015-00001","34000001","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Troubleshoot gas detector 70-AB-6221 due to error reading");
INSERT INTO view_planning VALUES("2015-00002","34000002","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","43-FIT-3024 RIO open loop problem ( Error reading )");
INSERT INTO view_planning VALUES("2015-00003","30000003","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Gas Export Metering system form SKK MIGAS");
INSERT INTO view_planning VALUES("2015-00004","30000004","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Galley Hood Fire Suppress Syst:6M Inspct");
INSERT INTO view_planning VALUES("2015-00005","34000005","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Rectify I/O error of gas detector 70-AR-2104 during heavy rain/wind");
INSERT INTO view_planning VALUES("2015-00006","30000006","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Gas detectors (Open Path IR)- Inspection and Function test");
INSERT INTO view_planning VALUES("2015-00007","30000007","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Manual Fire Alarm Switches- P-p room, Upper DK, Helideck:  Inspection and Function test");
INSERT INTO view_planning VALUES("2015-00008","30000008","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Fire detectors (Smoke): ER A-DECK and UPPER DECK Inspection and Function test");
INSERT INTO view_planning VALUES("2015-00009","30000009","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Fire detectors (Smoke) STEERING GEAR ROOM and MEZZANINE FLOOR: Inspection and Function test");
INSERT INTO view_planning VALUES("2015-00010","30000010","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Fire detectors (Smoke) PUMP ROOM: Inspection and Function test");
INSERT INTO view_planning VALUES("2015-00011","34000011","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Install barrier screen to prevent low enclosure dif pressure 23-PDT-8001A");
INSERT INTO view_planning VALUES("2015-00012","34000012","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Rectify I/O error of gas detector during heavy rain/wind 70-AB-6061");
INSERT INTO view_planning VALUES("2015-00013","34000013","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Rectify I/O error of gas detector during heavy rain/wind 70-AB-6064");
INSERT INTO view_planning VALUES("2015-00014","34000014","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Rectify I/O error of gas detector during heavy rain/wind 70-AB-6066");
INSERT INTO view_planning VALUES("2015-00015","34000015","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Rectify I/O error of gas detector during heavy rain/wind 70-AB-2109");
INSERT INTO view_planning VALUES("2015-00016","34000016","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Inspect the voltage low of 24 Vdc Supply, fault turbine controlNet and Backup Overspeed test request");
INSERT INTO view_planning VALUES("2015-00017","34000017","03","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Found discrepancy reading, please check and rectify. 44-LSIT-1000");
INSERT INTO view_planning VALUES("2015-00018","30000018","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Instrument air compressor Air Dryer A and B - 1M Condition check/Inspection");
INSERT INTO view_planning VALUES("2015-00019","30000019","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Cargo Oil System- Instruments: 6M Preservation PM");
INSERT INTO view_planning VALUES("2015-00020","30000020","03","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Cargo Oil System- Instruments: 6M Preservation PM");
INSERT INTO view_planning VALUES("2015-00021","30000021","03","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Elect Motor for  Compressor - A for Sewage Treatment Plant");
INSERT INTO view_planning VALUES("2015-00022","30000022","03","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","MGPS System");
INSERT INTO view_planning VALUES("2015-00023","30000023","03","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Normal lighting Panel Module 10");
INSERT INTO view_planning VALUES("2015-00024","30000024","03","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Electrical Motor for Vacuum Pump No.1");
INSERT INTO view_planning VALUES("2015-00025","30000025","03","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Fresh water");
INSERT INTO view_planning VALUES("2015-00026","30000026","03","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Hydraulic power");
INSERT INTO view_planning VALUES("2015-00027","30000027","03","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Emergency Generator Engine");
INSERT INTO view_planning VALUES("2015-00028","30000028","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Deck Drains: 1M Inspection / PS: C-16 Bunding and Drainage System - Drains");
INSERT INTO view_planning VALUES("2015-00029","30000029","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Quick release hook/Hinges- FWD and AFT  (Mooring Hawser)-1M Lubrication and Inspection / PS: P-18 Cargo Offloading Equipment - Hawser");
INSERT INTO view_planning VALUES("2015-00030","30000030","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Utility (flexible) hoses-6M Visual inspection");
INSERT INTO view_planning VALUES("2015-00031","30000031","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Gas Turbine (HP)-1M L.O Lab analysis");
INSERT INTO view_planning VALUES("2015-00032","30000032","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Lube oil - Onboard analysis 2W Plan");
INSERT INTO view_planning VALUES("2015-00033","30000033","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Life / Rescue boat and Its Davit (Stbd): 1M  Inspection / PS: E-03  Evacuation Systems - Lifeboats");
INSERT INTO view_planning VALUES("2015-00034","30000034","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Life / Rescue boat and Its Davit (STBD): 6M Inspection / PS: E-03  Evacuation Systems - Lifeboats");
INSERT INTO view_planning VALUES("2015-00035","30000035","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Turbine for Alternator 2- 36M Turbine Internal Inspection and Governor Servicing");
INSERT INTO view_planning VALUES("2015-00036","30000036","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Package air condition System: Inspection / PS: C-17 HVAC System - HVAC");
INSERT INTO view_planning VALUES("2015-00037","30000037","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","HVAC Condenser No. 1: Inspection/Cleaning / PS: C-17 HVAC System - HVAC");
INSERT INTO view_planning VALUES("2015-00038","34000038","03","2015","CM","CORRECTION MAINTENANCE","MEC","MECHANIC","Refrigerant Condenser No. 2: Inspection/Cleaning");
INSERT INTO view_planning VALUES("2015-00039","30000039","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Fire water pumping unit, main 3 (Jockey) -60M Survey / PS: M-01  Active Fire Protection - Fire Pump");
INSERT INTO view_planning VALUES("2015-00040","30000040","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Fire water Jockey pump A/B/C- 12M Detailed Inspection / Function check / PS: M-01  Active Fire Protection - Fire Pump");
INSERT INTO view_planning VALUES("2015-00041","30000041","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- TOP SIDE /Process System");
INSERT INTO view_planning VALUES("2015-00042","30000042","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- TOP SIDE /Process System");
INSERT INTO view_planning VALUES("2015-00043","30000043","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Gear /Screw  Pump - 12M Detailed Inspection / Function check");
INSERT INTO view_planning VALUES("2015-00044","30000044","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","E-House / M41 air condition System: Inspection / PS: C-17 HVAC System - HVAC");
INSERT INTO view_planning VALUES("2015-00045","30000045","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- Engine Room");
INSERT INTO view_planning VALUES("2015-00046","30000046","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","VCM using a Predetermined Route (Pruftechnik VIBscanner)- Engine Room");
INSERT INTO view_planning VALUES("2015-00047","30000047","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Deck crane (Liebherr)-12M Plan / PS: P-24 Cranes and Lifting Equipment - Permanent");
INSERT INTO view_planning VALUES("2015-00048","30000048","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Deck crane (Liebherr)-6M Plan / PS: P-24 Cranes and Lifting Equipment - Permanent");
INSERT INTO view_planning VALUES("2015-00049","30000049","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Life / Rescue boat, FRC and Its Davit (All): 1W Inspection / PS: E-03 Evacuation Systems - Lifeboats and E-07  Fast Rescue Craft");
INSERT INTO view_planning VALUES("2015-00050","30000050","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Emergency/Deluge fire Pump-1W Function test /Inspection / PS: M-01  Active Fire Protection - Fire Pump");
INSERT INTO view_planning VALUES("2015-00051","30000051","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","Assisted Chopper activity / Crew change");
INSERT INTO view_planning VALUES("2015-00052","30000052","03","2015","PM","PREVENTIVE MAINTENANCE","MEC","MECHANIC","General Cleaning & Safety drill");
INSERT INTO view_planning VALUES("2015-00053","30000053","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Process line - Gas leak check ");
INSERT INTO view_planning VALUES("2015-00054","30000054","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Drain water at LP KO Drum route to Slop tank ");
INSERT INTO view_planning VALUES("2015-00055","30000055","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Production log sheet ");
INSERT INTO view_planning VALUES("2015-00056","30000056","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Sampling and analyze produced water from Inlet Separator A/B and Flotation Vessel");
INSERT INTO view_planning VALUES("2015-00057","30000057","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Check Sea water lift pump condition (leakage, vibration/noisy and pressure)");
INSERT INTO view_planning VALUES("2015-00058","30000058","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Daily Report Production Sales, Data plant and Laboratory");
INSERT INTO view_planning VALUES("2015-00059","30000059","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Sampling and analyze produced water from Flowline A/B");
INSERT INTO view_planning VALUES("2015-00060","30000060","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Check, Operate and Grease M21");
INSERT INTO view_planning VALUES("2015-00061","30000061","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Check, Operate and Grease M60");
INSERT INTO view_planning VALUES("2015-00062","30000062","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Check, Operate and Grease M62");
INSERT INTO view_planning VALUES("2015-00063","30000063","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Cooling Medium Cooler A/ B/ C Back flush");
INSERT INTO view_planning VALUES("2015-00064","30000064","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","LO/ LC Register Update");
INSERT INTO view_planning VALUES("2015-00065","30000065","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Check, Operate and Grease M70");
INSERT INTO view_planning VALUES("2015-00066","30000066","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Check, Operate and Grease M61");
INSERT INTO view_planning VALUES("2015-00067","30000067","03","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Subsea Corrosion Inhibitor Injection Pump A Inspection");
INSERT INTO view_planning VALUES("2015-00068","30000068","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Drain water at LP KO Drum route to Slop tank ");
INSERT INTO view_planning VALUES("2015-00069","30000069","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Sampling and analyze produced water from Inlet Separator A/B and Flotation Vessel");
INSERT INTO view_planning VALUES("2015-00070","30000070","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Check Sea water lift pump condition (leakage, vibration/noisy and pressure)");
INSERT INTO view_planning VALUES("2015-00071","30000071","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Daily Report Production Sales, Data plant and Laboratory");
INSERT INTO view_planning VALUES("2015-00072","30000072","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Sampling and analyze produced water from Flowline A/B");
INSERT INTO view_planning VALUES("2015-00073","30000073","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Environmental Performance System(EPS) Report-1M");
INSERT INTO view_planning VALUES("2015-00074","30000074","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","16\" ID Production Flexible Riser (Technip Procedure)- Operation parameter recording for history- 6M Plan / PS: P-01 Risers and P-02 Umbilicals");
INSERT INTO view_planning VALUES("2015-00075","30000075","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","16\" Export Flexible Riser (Technip Procedure)- Operation parameter recording for history- 6M Plan / PS: P-01 Risers and P-02 Umbilicals");
INSERT INTO view_planning VALUES("2015-00076","30000076","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Condensate Heater- Shell and Tube type:Inspection/Cleaning");
INSERT INTO view_planning VALUES("2015-00077","30000077","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Process line - Gas leak check");
INSERT INTO view_planning VALUES("2015-00078","30000078","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Preservation of Process condensate system-6M Plan");
INSERT INTO view_planning VALUES("2015-00079","30000079","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Produced Water Sample to Pagerungan Laboratory-2W Plan");
INSERT INTO view_planning VALUES("2015-00080","30000080","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Off. Spec. Condensate Pump: 6M Inspection");
INSERT INTO view_planning VALUES("2015-00081","30000081","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Fire /weather tight doors: 3M Leak check / PS: E-02  Temporary Refuge");
INSERT INTO view_planning VALUES("2015-00082","30000082","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Fire Water System (Hose/Hydrant/Monitor/Shore connection) 1M Inspection / PS: E-06  Life Saving Equipment");
INSERT INTO view_planning VALUES("2015-00083","30000083","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","LO / LC / NC / NO / CAR SEALS 1M routine");
INSERT INTO view_planning VALUES("2015-00084","30000084","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Production log sheet ");
INSERT INTO view_planning VALUES("2015-00085","30000085","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Daily reading for engine room log");
INSERT INTO view_planning VALUES("2015-00086","30000086","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Boiler Water Analysis");
INSERT INTO view_planning VALUES("2015-00087","30000087","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Chemical dosing of Boilers and Fresh Water Generator");
INSERT INTO view_planning VALUES("2015-00088","30000088","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Daily reading for boiler port and stbd side");
INSERT INTO view_planning VALUES("2015-00089","30000089","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Daily HVAC reading");
INSERT INTO view_planning VALUES("2015-00090","30000090","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Daily STG reading");
INSERT INTO view_planning VALUES("2015-00091","30000091","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Daily FWG reading");
INSERT INTO view_planning VALUES("2015-00092","30000092","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Main Cooling Fresh Water Cooler- Shell and Tube type:Inspection/Cleaning");
INSERT INTO view_planning VALUES("2015-00093","30000093","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Emergency air compressor-12M Inspection");
INSERT INTO view_planning VALUES("2015-00094","30000094","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Emergency air compressor-1M Function test/Inspection");
INSERT INTO view_planning VALUES("2015-00095","30000095","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","POT WATER SAMPLE WEEKLY QUALITY MONITORIN");
INSERT INTO view_planning VALUES("2015-00096","30000096","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Tanks on Deck - 6M Inspection");
INSERT INTO view_planning VALUES("2015-00097","30000097","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Diesel Generator Engines (A and B) : Bi weekly Inspection / PS: P-09 Engine Room Equipment - Hydrocarbon Containment");
INSERT INTO view_planning VALUES("2015-00098","30000098","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Chiller Pump A and B- 6M Operation Check/ Inspection / PS: C-17 HVAC System - HVAC");
INSERT INTO view_planning VALUES("2015-00099","30000099","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Cargo Oil Pump No.2 and its Turbine- 6M Detailed Inspection");
INSERT INTO view_planning VALUES("2015-00100","30000100","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Breathing Apparatus : 1M Inspection / PS: E-06  Life Saving Equipment");
INSERT INTO view_planning VALUES("2015-00101","30000101","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Oily Water Separator (Ocean Clean) - 1M Inspection");
INSERT INTO view_planning VALUES("2015-00102","30000102","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Boiler and Cooling water test report-1M Plan");
INSERT INTO view_planning VALUES("2015-00103","30000103","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Breathing Air Compressor: 1M Operational check/Inspection / PS: E-06  Life Saving Equipment");
INSERT INTO view_planning VALUES("2015-00104","30000104","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Sewage Treatment Plant (Super Trident)- 1W Inpection");
INSERT INTO view_planning VALUES("2015-00105","30000105","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Pump and its Turbine (A and B) - 1M Inspection / PS: P-13 Cargo Pump and Piping System - Pumps");
INSERT INTO view_planning VALUES("2015-00106","30000106","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Bilge and GS Pump \"A and B\"- 1M Operation Check/ Inspection");
INSERT INTO view_planning VALUES("2015-00107","30000107","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","Boiler DO pump A and B- 6M Operation Check/ Inspection");
INSERT INTO view_planning VALUES("2015-00108","30000108","08","2015","PM","PREVENTIVE MAINTENANCE","PROD","PRODUCTION","E/R Cooling SW pump A/B/C/D- 6M Operation Check/ Inspection");
INSERT INTO view_planning VALUES("2015-00109","34000109","08","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Bilge level switch troubleshooting");
INSERT INTO view_planning VALUES("2015-00110","30000110","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Beacons: Inspection and Function test: 6M");
INSERT INTO view_planning VALUES("2015-00111","30000111","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","ESD2/PSD/ASS Function check 12M Plan");
INSERT INTO view_planning VALUES("2015-00112","30000112","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","ESD1/PSD/ASS Function check 6M Plan");
INSERT INTO view_planning VALUES("2015-00113","30000113","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","ESD1/PSD/ASS Function check 12M Plan");
INSERT INTO view_planning VALUES("2015-00114","30000114","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Cooling Medium System - Process (Safety Critical Instruments) - 6M PM");
INSERT INTO view_planning VALUES("2015-00115","30000115","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","12M / PS: M-06  Active Fire Protection - Inergen and CO2 Systems");
INSERT INTO view_planning VALUES("2015-00116","30000116","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","V-SAT Vendor Service-12M Plan / PS: C-12 Emergency Communications");
INSERT INTO view_planning VALUES("2015-00117","30000117","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Service Air Compression System-   (Instruments) - 6M PM");
INSERT INTO view_planning VALUES("2015-00118","30000118","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Produced water System (Safety Critical Instruments) - 6M PM");
INSERT INTO view_planning VALUES("2015-00119","30000119","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Produced Water system Instruments- General Preservation Plan");
INSERT INTO view_planning VALUES("2015-00120","30000120","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Fixed CO2 FF Syst: 1M Visual  Inspection");
INSERT INTO view_planning VALUES("2015-00121","30000121","08","2015","PM","PREVENTIVE MAINTENANCE","INST","INSTRUMENT","Replace HMI N2 Generator");
INSERT INTO view_planning VALUES("2015-00122","34000122","08","2015","CM","CORRECTION MAINTENANCE","INST","INSTRUMENT","Anti foam pump (42-PB-6219) can\'t run well");
INSERT INTO view_planning VALUES("2015-00123","30000123","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Emergency diesel engine -1W Inspection / PS: C-13 Emergency Power - Generator");
INSERT INTO view_planning VALUES("2015-00124","34000124","08","2015","CM","CORRECTION MAINTENANCE","ELECT","ELECTRIC","Rectify Workshop AC unit due to ubnormal running");
INSERT INTO view_planning VALUES("2015-00125","34000125","08","2015","CM","CORRECTION MAINTENANCE","ELECT","ELECTRIC","Rectify UPS AHU blower due to ubnormal running");
INSERT INTO view_planning VALUES("2015-00126","30000126","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","MGPS: 1W Analysis and trending of current log");
INSERT INTO view_planning VALUES("2015-00127","30000127","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Provision Refrigeration System - Fridge Control panel: 1M Inspection");
INSERT INTO view_planning VALUES("2015-00128","30000128","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","N2 Generation System-Electric Heater: Inspection");
INSERT INTO view_planning VALUES("2015-00129","30000129","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Provision Refrigeration System A and B: 1M Inspection");
INSERT INTO view_planning VALUES("2015-00130","30000130","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Emergency diesel engine -1W Inspection / PS: C-13 Emergency Power - Generator");
INSERT INTO view_planning VALUES("2015-00131","30000131","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","UV Sterilizer: 1M Inspection");
INSERT INTO view_planning VALUES("2015-00132","30000132","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","LP Gas Compressor B and Its Gas Turbine -1M Electrical/ Battery Inspection");
INSERT INTO view_planning VALUES("2015-00133","30000133","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","HP Gas Compressor A and Its Gas Turbine -1M Electrical/ Battery Inspection");
INSERT INTO view_planning VALUES("2015-00134","30000134","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","HP Gas Compressor B and Its Gas Turbine -1M Electrical/ Battery Inspection");
INSERT INTO view_planning VALUES("2015-00135","30000135","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","MGPS: 1W Analysis and trending of current log");
INSERT INTO view_planning VALUES("2015-00136","30000136","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Megger test, install the instrument devices of provision compressor motor after overhoule");
INSERT INTO view_planning VALUES("2015-00137","30000137","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Emergency lighting: 1M Inspection / PS: C-10 Emergency Lighting");
INSERT INTO view_planning VALUES("2015-00138","30000138","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Running provision system after overhoule");
INSERT INTO view_planning VALUES("2015-00139","34000139","08","2015","CM","CORRECTION MAINTENANCE","ELECT","ELECTRIC","Replace fluorecent lamps 5 ea at bellow module 20");
INSERT INTO view_planning VALUES("2015-00140","34000140","08","2015","CM","CORRECTION MAINTENANCE","ELECT","ELECTRIC","Rectify metanol pump motor due to cannt started");
INSERT INTO view_planning VALUES("2015-00141","30000141","08","2015","PM","PREVENTIVE MAINTENANCE","ELECT","ELECTRIC","Weekly running test emergency equipments");
INSERT INTO view_planning VALUES("2016-00001","34000141","23","2016","CM","CORRECTION MAINTENANCE","CAT","CATERING","qqqq");


