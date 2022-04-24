DROP DATABASE IF EXISTS dbWorkshop;
CREATE DATABASE dbWorkshop;
USE dbWorkshop;

CREATE TABLE tblAdmin (
  id_admin VARCHAR(255) NOT NULL PRIMARY KEY,
  username VARCHAR(255),
  password VARCHAR(255),
  nama_admin VARCHAR(255)
);

CREATE TABLE tblBarang (
  id_barang VARCHAR(255) NOT NULL PRIMARY KEY,
  id_admin VARCHAR(255),
  nama_barang VARCHAR(255),
  stok_barang int,
  warna_barang VARCHAR(255),
  harga_barang int,
  foto_barang VARCHAR(255),

  FOREIGN KEY (id_admin) REFERENCES tblAdmin(id_admin)
);

CREATE TABLE tblPembeli (
  id_pembeli VARCHAR(255) NOT NULL PRIMARY KEY,
  username VARCHAR(255),
  password VARCHAR(255),
  nama_pembeli VARCHAR(255),
  alamat_pembeli VARCHAR(255),
  no_telfon_pembeli VARCHAR(255)
);

CREATE TABLE tblTransaksi (
  id_transaksi VARCHAR(255),
  id_pembeli VARCHAR(255),
  id_barang VARCHAR(255),
  tanggal_transaksi timestamp,
  jumlah_barang INT,
  harga_barang INT,
  total_pembayaran INT,

  FOREIGN KEY (id_pembeli) REFERENCES tblPembeli(id_pembeli),
  FOREIGN KEY (id_barang) REFERENCES tblBarang(id_barang)
);



-- INSERT INTO tblAdmin(username, password, nama_admin) VALUES
--   ("mantap@gmail.com","cobapassword","mantap"),
--   ("ucup@surucup.com","ucupmantap","ucup surucup");

-- SELECT * FROM tblAdmin;

-- INSERT INTO tblBarang VALUES
--   ("xx12ksh","iPhone 13 pro max", 5, "Putih", 13000000);

-- SELECT * FROM tblBarang;