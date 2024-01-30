
-- Database Backup --
-- Ver. : 1.0.1
-- Host : Server Host
-- Generating Time : Jan 26, 2024 at 10:15:24:AM


CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL AUTO_INCREMENT,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  PRIMARY KEY (`DetailID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO detailpenjualan VALUES
("1","1","1","2","2700.00"),
("2","2","4","3","6500.00"),
("3","3","5","2","7000.00"),
("4","4","6","3","6800.00"),
("6","6","1","2","2700.00"),
("7","7","5","3","7000.00"),
("8","7","6","2","6800.00"),
("9","8","1","1","2700.00");

CREATE TABLE `keranjang` (
  `KeranjangID` int(10) NOT NULL AUTO_INCREMENT,
  `ProdukID` int(10) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`KeranjangID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPelanggan` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL,
  PRIMARY KEY (`PelangganID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO pelanggan VALUES
("1","Umum","Umum","00000000000"),
("2","Risma","Dalung, Tegal Sari","085792958529"),
("3","Diah ","Dalung, Blubuh Sari","0895394536866"),
("4","Nia","Tabanan, Tanah Lot\r\n","089508466041"),
("5","Fibri","Tabanan, Marga","081339682031");

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL AUTO_INCREMENT,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL,
  PRIMARY KEY (`PenjualanID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO penjualan VALUES
("1","2024-01-18","5400.00","1"),
("2","2024-01-18","19500.00","2"),
("3","2024-01-18","14000.00","3"),
("4","2024-01-18","20400.00","4"),
("6","2024-01-23","5400.00","5"),
("7","2024-01-24","34600.00","2"),
("8","2024-01-26","2700.00","2");

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL AUTO_INCREMENT,
  `Barcode` varchar(25) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL,
  PRIMARY KEY (`ProdukID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO produk VALUES
("1","8992982206001","Nestle Pure Life 600l","2700.00","30"),
("2","8999178840230","Chuba Cassava Chips ","14900.00","30"),
("3","08968659847","Chitato Ayam Bumbu ","10500.00","30"),
("4","8992753033737","Frisian Flag Strawberry 225ml","6500.00","30"),
("5","8991102386586","Tango Wafer","7000.00","30"),
("6","8992718853882","Mie Gekikara Ramen Hot Carbonara","6800.00","30"),
("7","86885199150","Wallens Choco Soes","10400.00","30"),
("8","89927411941358","Yupi Baby Bears 45g","15500.00","30"),
("9","8996001355978","Beng-Beng Wafer Chocolate Share It 95g ","13590.00","30"),
("10","8993200661305","Yogurt Drink Chimory 250ml","9653.00","30"),
("11","00030000565117","Instant Oatmeal Quaker 800G","55000.00","30"),
("12","9556001288561","Nescafe Coffee Drink Late 220 ml","8000.00","30"),
("13","8000500126356","Kinder Joy","13790.00","30"),
("14","8995301305958","Roma Sandwich Coklat 216 Gram","7000.00","30"),
("15","8993163411108","Montiss Facial Tissue 250","8000.00","30"),
("16","8999908909206","My Baby Minyak Telon Plus Lavender","25000.00","30"),
("17","8935106521383","Salonpas Hangat","8394.00","30"),
("18","8992907720018","Roti Sobek Coklat","18000.00","30"),
("19","6151100031495","Susu Milo 200 ML","5426.00","30"),
("20","6291103081872","Twister Wafer roll 45 G","5880.00","30");

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO user VALUES
("1","Risma Pradnyani","admin","admin","1"),
("3","Imung","Mung","mung123","2");