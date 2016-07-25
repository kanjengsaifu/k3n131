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


DROP TABLE IF EXISTS m_jadwal;

CREATE TABLE `m_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `hari` int(1) DEFAULT NULL,
  `jam` int(1) DEFAULT NULL,
  `mapel` varchar(20) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO m_jadwal VALUES("1","1","1","KIM","10A");
INSERT INTO m_jadwal VALUES("2","0","1","BIN","5");
INSERT INTO m_jadwal VALUES("3","0","2","MWA","12A");
INSERT INTO m_jadwal VALUES("4","1","2","MTK","6A");


DROP TABLE IF EXISTS m_log;

CREATE TABLE `m_log` (
  `id_log` int(255) NOT NULL AUTO_INCREMENT,
  `pegawai` int(255) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type_user` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

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
INSERT INTO m_log VALUES("31","0","Login ","super_admin","2016-07-23 12:44:58","0");
INSERT INTO m_log VALUES("32","0","Login ","super_admin","2016-07-24 00:22:42","0");
INSERT INTO m_log VALUES("33","1","Tambah Data Modul","Jadwal","2016-07-24 00:23:23","super_admin");
INSERT INTO m_log VALUES("34","1","Ubah Data Role","","2016-07-24 00:23:42","super_admin");
INSERT INTO m_log VALUES("35","1","Logout","","2016-07-24 00:23:56","super_admin");
INSERT INTO m_log VALUES("36","0","Login ","super_admin","2016-07-24 00:24:01","0");
INSERT INTO m_log VALUES("37","1","Ubah Data Jadwal","","2016-07-24 01:49:21","super_admin");
INSERT INTO m_log VALUES("38","1","Ubah Data Jadwal","","2016-07-24 01:51:35","super_admin");
INSERT INTO m_log VALUES("39","1","Ubah Data Jadwal","","2016-07-24 01:57:06","super_admin");
INSERT INTO m_log VALUES("40","1","Ubah Data Jadwal","","2016-07-24 02:00:49","super_admin");
INSERT INTO m_log VALUES("41","1","Tambah Data Jadwal","","2016-07-24 02:02:10","super_admin");
INSERT INTO m_log VALUES("42","1","Ubah Data Jadwal","","2016-07-24 02:04:59","super_admin");
INSERT INTO m_log VALUES("43","0","Login ","super_admin","2016-07-24 10:10:10","0");
INSERT INTO m_log VALUES("44","1","Tambah Data Jadwal","","2016-07-24 10:11:16","super_admin");
INSERT INTO m_log VALUES("45","1","Ubah Data Jadwal","","2016-07-24 10:11:28","super_admin");
INSERT INTO m_log VALUES("46","0","Login ","super_admin","2016-07-25 10:12:15","0");
INSERT INTO m_log VALUES("47","1","Ubah Data Siswa","Josia Hendrico S.","2016-07-25 10:31:33","super_admin");
INSERT INTO m_log VALUES("48","1","Logout","","2016-07-25 12:52:13","super_admin");
INSERT INTO m_log VALUES("49","0","Login ","chaa","2016-07-25 12:52:23","0");
INSERT INTO m_log VALUES("50","7","Logout","","2016-07-25 14:11:10","admin siswa");
INSERT INTO m_log VALUES("51","0","Login ","super_admin","2016-07-25 14:25:22","0");
INSERT INTO m_log VALUES("52","0","Login ","super_admin","2016-07-25 19:05:50","0");


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
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

INSERT INTO m_siswa VALUES("1","1411001","Aurell Layalia S A G","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("2","1411002","Devi Wijayanti ","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("3","1411003","Fikri Muhammad P","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("4","1411004","Isna Damayanti","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("5","1411005","Jasmita Nur A","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("6","1411006","Luthfi Lathifuddin","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("7","1411007","M. Fikri Fadhillah","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("8","1411008","Muhammad Jessin P","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("9","1411009","Sophia Pujiati","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("10","1411010","Susin Ferlisya R J","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("11","1411011","Yulienda Maulida F","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("12","1411012","Tsanny Khrishna R","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("13","1411013","Venna Lestari A","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("14","1411014","Eggy Radiansyah S","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("15","1411015","M. Difa Aldira H","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("16","1411016","Vahlefi Sabil H","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("17","1411017","Tria Ananda Putri","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("18","1411018","Alnida Destiana N N","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("19","1411019","Annisya Fitri M","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("20","1411020","Daffa Amalia Putri","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("21","1411021","Diani Fahanshah","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("22","1411022","Permata Hati Insani ","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("23","1411023","Purwa Rama Panji","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("24","1411024","Sherly Dea Yolandita","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("25","1411025","Allysa Aprilia Sunardi","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("26","1411026","Mayang Ganmanah","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("27","1411027","Siti Namira Faradilla","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("28","1411028","Epi Rohaeti","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("29","1411029","Amelia Eliza","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("30","1411030","Firman Alvin D","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("31","1411031","Bunga Nabilah","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("32","1411032","Syahrul Ramdhan","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("33","1411033","Valentino Sihombing","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("34","1411034","Dwiky Maulana","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("35","1411035","Risma Dwi Nur Pratiwi","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("36","1411036","Natasha Elvina DP","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("37","1411037","Ervan Herdiansyah","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("38","1411038","Nurwenda Aqlima","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("39","1411039","M. Syauqi A","SMAN 1 Baleendah","","","-","-","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("40","1607001","Eko Cahyo Rumpoko","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("41","1607002","Nicke Suherman","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("42","1607003","Nicki Suherman","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("43","1607004","Bentang Nusa Samudra","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("44","1607005","Aldi Ferdhinan","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("45","1607006","Candra Putra Budianto","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("46","1607007","Fauzan Nur Ramadhan","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("47","1607008","Rahma Pahera","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("48","1607009","Akmalia Kholisatun Muna","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("49","1607010","Cindi Septia Ependi","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("50","1607011","Risky Andra Setian","SD Korpri 2","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("51","1607012","Zahy Rozan","SD Korpri 2","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("52","1607013","Defika Dwi Ridera","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("53","1607014","Ainismara Sassy Kirana","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("54","1607015","Vlbie Alyvia","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("55","1607016","Nafia Ajra Syakira","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("56","1607017","Annisa Rahma Genita","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("57","1607018","Wiesha Khayla Yashira","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("58","1607019","Hasna Nur Outri Abdullah","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("59","1607020","Belva Isnaen Alfira","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("60","1607021","Jesi Tasya A Qisti","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("61","1607022","Afinli Rifki Rizqulloh","SD Korpri 2","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("62","1607023","Laila Putri Syahira","SD Ar-Rafi","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("63","1607024","Anjani Najma Shafa Nafisha","SD Fitrah Insani","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("64","1607025","Azka Shafa Naballa","SD Al Mabrur","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("65","1607026","Bianita Wijayanti","SD Al Mabrur","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("66","1607027","Indah Natisha","SD Al Mabrur","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("67","1607028","Shella Shelvina Anastsya","SD Korpri 1","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("68","1607029","Adi ","SD Indriyasana","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("69","1607030","Anisa Fakhriyyah Candra Dewi","SD widuri","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("70","1607031","Hendro Priyono","SD Kulalet","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("71","1607032","Ghesya Gyandra A.","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("72","1607033","Aulia Lahesa Salsa","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("73","1607034","Dinda Maharani","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("74","1607035","Aneu Dwi Setiawati","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("75","1607036","Salwa Esa Fadia","SD Pamengpeuk","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("76","1607037","Berlian Ramadanti Susanto","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("77","1607038","Tegar Muharam Fadhilah","SD Korpri","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("78","1607039","Berlian Ramadanti Susanto","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("79","1607040","Humaira Fatin A.S","SD Galih Pawarti","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("80","1607041","Agnia Futri Amalia","SD Galih Pawarti","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("81","1607042","Maudina Dewi Puspaningsih","SD Galih Pawarti","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("82","1607043","Dinda Amalia Hendrawan","Al-Mabrur","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("83","1607044","Ahmad Arya Rohmatulloh","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("84","1607045","Zilan Purnama","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("85","1607046","Ilma Malika Fatihah","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("86","1607047","Faisal Rohman Setiawan","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("87","1607048","Ayu Novitasari","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("88","1607049","Devi Aulia Sari","SD Korpri 3","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("89","1607050","Reka Maurizka","SD Korpri 3","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("90","1607051","Rega Nugraha","SD Korpri 2","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("91","1607052","Rizky Azron Saputra","SD Korpri 2","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("92","1607053","Tirta Yuda","SD Korpi 2","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("93","1607054","Rega Nugraha","SD Korpri 2","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("94","1607055","Zelita Dahlarijasty","SD Al Mabrur","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("95","1607056","Wina ","SD Al Mabrur","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("96","1607057","Salwa Tri Aulia","SD Korpri 2","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("97","1607058","Albert Nainggolan","SD Galih Pawarti","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("98","1607059","Josia Hendrico S.","SD Indriyasana","","","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("99","1607060","Zahra Nuraziza","SD Galih Pawarti","","","-","Perempuan","2000-01-01","-","-","-","-","","-","-","-","-","-");
INSERT INTO m_siswa VALUES("100","1607061","Josia Hendrico S.","SD Indriyasana","0","6A","-","Laki-laki","2000-01-01","-","-","-","-","","-","-","-","-","-");


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS t_absen_guru;

CREATE TABLE `t_absen_guru` (
  `id_absen_guru` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_absen` date DEFAULT NULL,
  `kode_guru` varchar(20) DEFAULT NULL,
  `jumlah_jam` int(2) DEFAULT NULL,
  `tingkat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_absen_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS t_absen_siswa;

CREATE TABLE `t_absen_siswa` (
  `id_absen_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `kode_siswa` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `pertemuan` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_absen_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS t_pembayaran_header;

CREATE TABLE `t_pembayaran_header` (
  `id_spp` int(255) NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(10) NOT NULL,
  `kode_siswa` char(7) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  PRIMARY KEY (`id_spp`,`kode_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS t_pembuatan_dokumen;

CREATE TABLE `t_pembuatan_dokumen` (
  `id_pembuatan_dok` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pembuatan_dok` date DEFAULT NULL,
  `kode_guru` varchar(20) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `tipe_dok` varchar(20) DEFAULT NULL,
  `tingkat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pembuatan_dok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO u_counter VALUES("7","TR","9");
INSERT INTO u_counter VALUES("23","1607","61");
INSERT INTO u_counter VALUES("17","G","10");


DROP TABLE IF EXISTS u_list_code;

CREATE TABLE `u_list_code` (
  `id_list_code` int(255) NOT NULL AUTO_INCREMENT,
  `kode_list` varchar(20) DEFAULT NULL,
  `head_list` varchar(50) DEFAULT NULL,
  `nama_list` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_list_code`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

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
INSERT INTO u_list_code VALUES("46","D08","JL","Jemputan","2016-07-21 20:30:03");
INSERT INTO u_list_code VALUES("47","5","KLS","5","2016-07-24 01:15:04");
INSERT INTO u_list_code VALUES("48","6A","KLS","6A","2016-07-24 01:15:21");
INSERT INTO u_list_code VALUES("49","6B","KLS","6B","2016-07-24 01:15:41");
INSERT INTO u_list_code VALUES("50","7A","KLS","7A","2016-07-24 01:15:57");
INSERT INTO u_list_code VALUES("51","7B","KLS","7B","2016-07-24 01:17:56");
INSERT INTO u_list_code VALUES("52","8A","KLS","8A","2016-07-24 01:18:10");
INSERT INTO u_list_code VALUES("53","8B","KLS","8B","2016-07-24 01:18:28");
INSERT INTO u_list_code VALUES("54","9A","KLS","9A","2016-07-24 01:19:10");
INSERT INTO u_list_code VALUES("55","9B","KLS","9B","2016-07-24 01:19:23");
INSERT INTO u_list_code VALUES("56","10A","KLS","10A","2016-07-24 01:19:37");
INSERT INTO u_list_code VALUES("57","11A","KLS","11A","2016-07-24 01:19:50");
INSERT INTO u_list_code VALUES("58","11B","KLS","11B","2016-07-24 01:20:07");
INSERT INTO u_list_code VALUES("59","12A","KLS","12A","2016-07-24 01:20:35");
INSERT INTO u_list_code VALUES("60","MP","","Mata Pelajaran","2016-07-24 01:23:03");
INSERT INTO u_list_code VALUES("61","IPA","MP","IPA","2016-07-24 01:23:23");
INSERT INTO u_list_code VALUES("62","BIN","MP","Bahasa Indonesia","2016-07-24 01:24:00");
INSERT INTO u_list_code VALUES("63","BIG","MP","Bahasa Inggris","2016-07-24 01:24:26");
INSERT INTO u_list_code VALUES("64","MTK","MP","Matematika","2016-07-24 01:24:45");
INSERT INTO u_list_code VALUES("65","FIS","MP","Fisika","2016-07-24 01:25:11");
INSERT INTO u_list_code VALUES("66","BIO","MP","Biologi","2016-07-24 01:25:34");
INSERT INTO u_list_code VALUES("67","KIM","MP","Kimia","2016-07-24 01:25:50");
INSERT INTO u_list_code VALUES("68","MWA","MP","Matematika Wajib","2016-07-24 01:26:25");
INSERT INTO u_list_code VALUES("69","MMI","MP","Matematika Minat","2016-07-24 01:26:42");
INSERT INTO u_list_code VALUES("70","IPS","MP","IPS","2016-07-24 10:21:33");


DROP TABLE IF EXISTS u_modul;

CREATE TABLE `u_modul` (
  `id_modul` int(11) NOT NULL AUTO_INCREMENT,
  `kode_modul` varchar(5) DEFAULT NULL,
  `nama_modul` varchar(20) DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

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
INSERT INTO u_modul VALUES("26","M003","Jadwal","M","master/jadwal");


DROP TABLE IF EXISTS u_role;

CREATE TABLE `u_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(20) DEFAULT NULL,
  `hak_akses` text,
  `kode_role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO u_role VALUES("2","super_admin","M001,M002,M003,T001,T002,T004,T005,T003,T006,R001,R003,R002,U001,U003,U002,U004,U006,U007,U005","R001");
INSERT INTO u_role VALUES("3","admin","M001,M002,T001,T002,R001","R002");
INSERT INTO u_role VALUES("4","admin siswa","M001","R01234");


DROP TABLE IF EXISTS u_setting;

CREATE TABLE `u_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `kode_setting` varchar(20) DEFAULT NULL,
  `value_setting` varchar(20) DEFAULT NULL,
  `nama_setting` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO u_setting VALUES("1","THA","2015","Tahun Awal");
INSERT INTO u_setting VALUES("2","HG_SD","25000","Honor Guru (SD)");
INSERT INTO u_setting VALUES("3","HG_SMP","35000","Honor Guru (SMP)");
INSERT INTO u_setting VALUES("4","HG_SMA","45000","Honor Guru (SMA)");
INSERT INTO u_setting VALUES("5","HG_S","25000","Honor Guru (Soal)");
INSERT INTO u_setting VALUES("6","HG_M","25000","Honor Guru (Materi)");
INSERT INTO u_setting VALUES("7","SPP_SD","160000","Bulanan SD");
INSERT INTO u_setting VALUES("8","TA","2016/2017","Tahun Ajaran");


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


DROP TABLE IF EXISTS view_list_code;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_list_code` AS select `ul`.`id_list_code` AS `id_list_code`,`ul`.`kode_list` AS `kode_list`,`ul`.`head_list` AS `head_list`,`ul`.`nama_list` AS `nama_list`,`ul`.`date` AS `date`,(select count(`ul1`.`id_list_code`) from `u_list_code` `ul1` where (`ul`.`kode_list` = `ul1`.`head_list`)) AS `jml_list` from `u_list_code` `ul` where isnull(`ul`.`head_list`);

INSERT INTO view_list_code VALUES("1","AG","","Agama","2016-07-13 00:00:00","5");
INSERT INTO view_list_code VALUES("7","MD","","Modul","2016-08-21 00:00:00","4");
INSERT INTO view_list_code VALUES("12","JK","","Jenis Kelamin","2016-08-27 00:00:00","2");
INSERT INTO view_list_code VALUES("15","KLS","","Kelas","2016-07-14 10:53:01","13");
INSERT INTO view_list_code VALUES("18","JL","","Jurnal","2016-07-16 13:12:11","10");
INSERT INTO view_list_code VALUES("37","TK","","Tingkat","2016-07-20 12:53:15","3");
INSERT INTO view_list_code VALUES("41","TD","","Tipe Dokumen","2016-07-20 14:00:23","2");
INSERT INTO view_list_code VALUES("60","MP","","Mata Pelajaran","2016-07-24 01:23:03","10");


DROP TABLE IF EXISTS view_pembayaran_spp;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pembayaran_spp` AS select `pd`.`kode_pembayaran` AS `kode_pembayaran`,(select `ph`.`kode_siswa` from `t_pembayaran_header` `ph` where (`ph`.`kode_pembayaran` = `pd`.`kode_pembayaran`)) AS `kode_siswa`,(select `ph`.`tgl_pembayaran` from `t_pembayaran_header` `ph` where (`ph`.`kode_pembayaran` = `pd`.`kode_pembayaran`)) AS `tgl_pembayaran`,concat(`pd`.`bulan`,'-',`pd`.`tahun`) AS `pembayaran`,count(`pd`.`id_pembayaran_detail`) AS `jml` from `t_pembayaran_detail` `pd` where ((concat(`pd`.`bulan`,'-',`pd`.`tahun`) is not null) and (substr(`pd`.`jenis_pembayaran`,1,3) = 'K02')) group by `pd`.`kode_pembayaran`;



DROP TABLE IF EXISTS view_r_jurnal;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_r_jurnal` AS select distinct date_format(`r`.`tgl_jurnal`,'%Y-%m') AS `bulan_tahun`,(select (sum(`r1`.`kredit`) - sum(`r1`.`debit`)) from `r_jurnal` `r1` where (date_format(`r1`.`tgl_jurnal`,'%Y-%m') < date_format(`r`.`tgl_jurnal`,'%Y-%m'))) AS `sisa_bulan_sebelumnya` from `r_jurnal` `r` order by date_format(`r`.`tgl_jurnal`,'%Y-%m');



DROP TABLE IF EXISTS view_r_rekap_gaji;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_r_rekap_gaji` AS select date_format(`t`.`tgl_absen`,'%m-%Y') AS `bulan_tahun`,`t`.`kode_guru` AS `kode_guru`,(select `g`.`nama_guru` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `nama_guru`,sum(`t`.`jumlah_jam`) AS `jml_jam`,'2' AS `jml_materi`,'2' AS `jml_soal` from `t_absen_guru` `t` group by date_format(`t`.`tgl_absen`,'%m-%Y'),`t`.`kode_guru`;



DROP TABLE IF EXISTS view_t_absen_siswa;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_t_absen_siswa` AS select distinct date_format(`t`.`tanggal`,'%m') AS `bulan`,date_format(`t`.`tanggal`,'%Y') AS `tahun`,`t`.`kelas` AS `kelas`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 1))) AS `jml_hadir_p1`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 1))) AS `jml_alfa_p1`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 2))) AS `jml_hadir_p2`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 2))) AS `jml_alfa_p2`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 3))) AS `jml_hadir_p3`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 3))) AS `jml_alfa_p3`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 4))) AS `jml_hadir_p4`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 4))) AS `jml_alfa_p4`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 5))) AS `jml_hadir_p5`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 5))) AS `jml_alfa_p5`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 6))) AS `jml_hadir_p6`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 6))) AS `jml_alfa_p6`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 7))) AS `jml_hadir_p7`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 7))) AS `jml_alfa_p7`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 8))) AS `jml_hadir_p8`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 8))) AS `jml_alfa_p8`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 9))) AS `jml_hadir_p9`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 9))) AS `jml_alfa_p9`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` = 'Hadir') and (`t1`.`pertemuan` = 10))) AS `jml_hadir_p10`,(select count(`t1`.`id_absen_siswa`) from `t_absen_siswa` `t1` where ((date_format(`t1`.`tanggal`,'%m') = date_format(`t`.`tanggal`,'%m')) and (`t1`.`kelas` = `t`.`kelas`) and (`t1`.`keterangan` <> 'Hadir') and (`t1`.`pertemuan` = 10))) AS `jml_alfa_p10` from `t_absen_siswa` `t`;



DROP TABLE IF EXISTS view_t_gaji_guru;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_t_gaji_guru` AS select distinct date_format(`t`.`tgl_absen`,'%m-%Y') AS `bulan_tahun`,`t`.`tingkat` AS `tingkat`,`t`.`kode_guru` AS `kode_guru`,(select `g`.`nama_guru` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `nama_guru`,(select `g`.`mata_pelajaran` from `m_guru` `g` where (`g`.`kode_guru` = `t`.`kode_guru`)) AS `mapel`,(select sum(`t1`.`jumlah_jam`) from `t_absen_guru` `t1` where ((`t1`.`kode_guru` = `t`.`kode_guru`) and (`t1`.`tingkat` = `t`.`tingkat`) and (date_format(`t1`.`tgl_absen`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m'))) group by `t1`.`kode_guru`) AS `jml_absen`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = concat('HG_',`t`.`tingkat`))) AS `honor_mengajar`,(select count(`tp`.`id_pembuatan_dok`) from `t_pembuatan_dokumen` `tp` where ((`tp`.`kode_guru` = `t`.`kode_guru`) and (`tp`.`tingkat` = `t`.`tingkat`) and (date_format(`tp`.`tgl_pembuatan_dok`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m')) and (`tp`.`tipe_dok` = 'Materi')) group by `tp`.`kode_guru`) AS `jml_materi`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = 'HG_M')) AS `honor_materi`,(select count(`tp`.`id_pembuatan_dok`) from `t_pembuatan_dokumen` `tp` where ((`tp`.`kode_guru` = `t`.`kode_guru`) and (`tp`.`tingkat` = `t`.`tingkat`) and (date_format(`tp`.`tgl_pembuatan_dok`,'%Y-%m') = date_format(`t`.`tgl_absen`,'%Y-%m')) and (`tp`.`tipe_dok` = 'Soal')) group by `tp`.`kode_guru`) AS `jml_soal`,(select `s`.`value_setting` from `u_setting` `s` where (`s`.`kode_setting` = 'HG_S')) AS `honor_soal`,(select `tg`.`status` from `t_gaji_guru` `tg` where ((`tg`.`bulan_tahun` = convert(date_format(`t`.`tgl_absen`,'%m-%Y') using latin1)) and (`tg`.`kode_guru` = `t`.`kode_guru`) and (`tg`.`tingkat` = `t`.`tingkat`))) AS `status` from `t_absen_guru` `t`;



