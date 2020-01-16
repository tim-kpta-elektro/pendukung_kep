/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : portal

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 16/01/2020 12:28:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kp
-- ----------------------------
DROP TABLE IF EXISTS `kp`;
CREATE TABLE `kp`  (
  `id_kp` int(15) NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` int(15) NOT NULL,
  `tgl_ajuan` timestamp(0) NULL DEFAULT NULL,
  `perusahaan_nama` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_almt` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_jenis` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pic` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_mulai_kp` date NULL DEFAULT NULL,
  `tgl_selesai_kp` date NULL DEFAULT NULL,
  `no_surat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tanggal_surat` date NULL DEFAULT NULL,
  `status_kp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kp`) USING BTREE,
  INDEX `kp`(`mahasiswa_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kp
-- ----------------------------
INSERT INTO `kp` VALUES (1, 34, '2019-12-09 19:05:14', 'Telkomsel', 'Jl. Gatot Subroto', 'Telekomunikasi', 'Eko Prasetyo', '2019-12-10', '2019-12-20', 'EE0215/454a5/45/50', '2020-01-31', 'SETUJU');
INSERT INTO `kp` VALUES (2, 18, '2019-12-29 13:50:11', 'Telkomsel', 'Jakarta', 'Telekomunikasi', 'Roy', '2020-01-13', '2020-02-24', NULL, NULL, 'WAITING');

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `id_mahasiswa` int(15) NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama_mhs` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `angkatan` int(10) NULL DEFAULT NULL,
  `sks` int(10) NULL DEFAULT NULL,
  `ipk` float NULL DEFAULT NULL,
  `pem_akademik` int(15) NULL DEFAULT NULL,
  `pem_kp` int(15) NULL DEFAULT NULL,
  `status_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`) USING BTREE,
  INDEX `pemkp`(`pem_kp`) USING BTREE,
  INDEX `pemakademik`(`pem_akademik`) USING BTREE,
  INDEX `nim`(`nim`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 186 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES (1, 'I0716001', 'ADIP SAFIUDIN', 2016, 107, 3.45, 1, 5, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (2, 'I0716002', 'Adrian Seta Ekananda', 2016, NULL, NULL, 1, 2, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (3, 'I0716003', 'Afif Yuhendrasmiko', 2016, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (4, 'I0716004', 'AHMAD IMAM RAUYANI', 2016, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (5, 'I0716005', 'AMMAR GALIH GUMILANG', 2016, NULL, NULL, 7, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (6, 'I0716006', 'Annisa Hanifa', 2016, 120, 3.5, 7, 6, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (7, 'I0716007', 'Aulia Ramadhani', 2016, NULL, NULL, 4, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (8, 'I0716008', 'Axel Adam Mahendra', 2016, NULL, NULL, 4, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (9, 'I0716009', 'AZIS UBAIDILAH', 2016, 123, 3.6, 8, 6, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (10, 'I0716010', 'BHADRIKA EVANDITO A', 2016, NULL, NULL, 8, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (11, 'I0716011', 'BINTANG SUJATMIKO', 2016, 126, 3.58, 8, 2, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (12, 'I0716012', 'Daniel Aquino Purba', 2016, 120, 3.6, 8, 5, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (13, 'I0716013', 'ERDIAN DWI LAKSANA', 2016, NULL, NULL, 7, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (14, 'I0716014', 'Fuad Nur Kuncoro', 2016, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (15, 'I0716015', 'GHUFRON HUSNAN', 2016, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (16, 'I0716016', 'Henry Probo Santoso', 2016, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (17, 'I0716017', 'I Wayan Yoga K', 2016, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (18, 'I0716018', 'Kevin Sebastian', 2016, 122, 3, 3, 4, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (19, 'I0716019', 'Krisna Hakim', 2016, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (20, 'I0716020', 'MIFTAHUDDIN IRFANI', 2016, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (21, 'I0716021', 'Mohamad Nisman Falic', 2016, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (22, 'I0716022', 'Muhammad Amirudin S', 2016, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (23, 'I0716023', 'MUHAMMAD FAKHRI ERRI', 2016, NULL, NULL, 2, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (24, 'I0716024', 'MUHAMMAD THARIEQ P', 2016, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (25, 'I0716025', 'MUHAMMAD ULIL `AZMI', 2016, NULL, NULL, 2, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (26, 'I0716026', 'Musyaffa\' Ahmad', 2016, NULL, NULL, 9, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (27, 'I0716027', 'OKI SETIAWAN', 2016, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (28, 'I0716028', 'Rilo Pambudi Aditya Wardani', 2016, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (29, 'I0716029', 'ROYANI AULIA IHSANTI', 2016, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (30, 'I0716030', 'SALMAN AL FARISI', 2016, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (31, 'I0716031', 'TYAN WIDOTOMO', 2016, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (32, 'I0716032', 'Vernanda S. Z. H', 2016, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (33, 'I0716033', 'Wiwik Nur Winda', 2016, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (34, 'I0716034', 'YUDHI PRABOWO KUSUMA', 2016, 113, 3.5, 3, 7, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (35, 'I0714001', 'ABID ALIM MUSTAQIM', 2014, 150, 3.65, 1, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (36, 'I0714002', 'ADITYA MEITA NUGRAHA', 2014, NULL, NULL, 1, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (37, 'I0714003', 'AJI FAUZAN HIDAYAT', 2014, 148, 3.26, 1, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (38, 'I0714004', 'ANDRYAWAN JAYA P', 2014, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (39, 'I0714005', 'ANRICO GIDEON ALFANO', 2014, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (40, 'I0714006', 'AULIA ARDAN SULTANI', 2014, 148, 3.32, 1, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (41, 'I0714007', 'BIMA TRI PRASETYA', 2014, 147, 3.54, 1, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (42, 'I0714008', 'BINA PANGESTU N', 2014, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (43, 'I0714009', 'BONI VASIUS ROSEN', 2014, NULL, NULL, 1, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (44, 'I0714010', 'DWIYAN BAGAS DEWANTO', 2014, NULL, NULL, 1, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (45, 'I0714011', 'EDI NUGROHO', 2014, 153, 3.34, 6, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (46, 'I0714012', 'FADHILA AMALIA', 2014, NULL, NULL, 8, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (47, 'I0714013', 'FASDA ILHAQ ROBBANI', 2014, 152, 3.28, 8, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (48, 'I0714014', 'FEBRIANO EKKY R P Y', 2014, NULL, NULL, 8, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (49, 'I0714015', 'FERDIANSYAH ASHIL', 2014, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (50, 'I0714016', 'FX RIAN WICAKSONO', 2014, 158, 3.78, 8, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (51, 'I0714017', 'IGOR M FARHAN', 2014, 148, 3.82, 8, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (52, 'I0714018', 'IRFAN MAULANA M', 2014, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (53, 'I0714019', 'LUTHFY MAKHMUDY', 2014, 148, 3.47, 9, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (54, 'I0714020', 'M HAKIM ADHIGUNA', 2014, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (55, 'I0714021', 'MUHAMAD DZAKY A', 2014, 145, 3.09, 4, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (56, 'I0714022', 'MUHAMMAD IQBAL', 2014, NULL, NULL, 8, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (57, 'I0714023', 'NADYA FARADIBA E', 2014, NULL, NULL, 1, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (58, 'I0714024', 'PANJI MUSLIM', 2014, NULL, NULL, 1, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (59, 'I0714026', 'RENALDY PURWANTO', 2014, NULL, NULL, 1, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (60, 'I0714027', 'REYNALDO HUTAURUK', 2014, NULL, NULL, 7, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (61, 'I0714028', 'REZA YUSADIKA PUTRA', 2014, 146, 3.38, 7, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (62, 'I0714029', 'RIO YUAN PALLAFINE', 2014, 148, 3.36, 4, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (63, 'I0714030', 'RIZAL ABDUL ROZAQ R', 2014, 146, 3.34, 2, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (64, 'I0714031', 'RIZAL NURHIDAYAT', 2014, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (65, 'I0714032', 'STEPHANUS HANURJAYA', 2014, 146, 3.37, 3, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (66, 'I0714033', 'ZULHENDRA HANIF', 2014, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (67, 'I0714034', 'DION PUTRA ANUGRAH', 2014, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (68, 'I0715001', 'Abyan Habibie', 2015, NULL, NULL, 4, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (69, 'I0715002', 'ADITYA NUR FAUZI G', 2015, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (70, 'I0715003', 'AHMAD SYAH ALJABAR', 2015, NULL, NULL, 1, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (71, 'I0715004', 'Arif Nuruddin', 2015, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (72, 'I0715005', 'Arifian Trilaksita', 2015, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (73, 'I0715006', 'ARIS MAULANA FAUZAN', 2015, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (74, 'I0715007', 'Arthur Joshua Titus', 2015, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (75, 'I0715008', 'CESARIUS ADI A K', 2015, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (76, 'I0715009', 'DWIKI DIMAS SHIDIQ', 2015, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (77, 'I0715010', 'FARIS IZZATURRAHMAN', 2015, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (78, 'I0715011', 'FEBRI ABDUL ROHMAN', 2015, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (79, 'I0715012', 'Ghea Faradiba', 2015, NULL, NULL, 4, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (80, 'I0715013', 'Hillga Richman R', 2015, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (81, 'I0715014', 'JOHAN TRY AFFANDY', 2015, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (82, 'I0715015', 'Jusuf Abimas Pratama', 2015, NULL, NULL, 8, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (83, 'I0715016', 'Kharis Akbar B', 2015, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (84, 'I0715017', 'Kirana Dyah Utari Ku', 2015, NULL, NULL, 8, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (85, 'I0715018', 'LATIF NUR FAUZI', 2015, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (86, 'I0715019', 'Lia Alvionita', 2015, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (87, 'I0715020', 'Lia Anjarwati', 2015, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (88, 'I0715021', 'MOHAMMAD IZZUL MUKHTAR', 2015, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (89, 'I0715022', 'Muhammad Akmal', 2015, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (90, 'I0715024', 'Muhammad Fajar Prakasa', 2015, NULL, NULL, 3, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (91, 'I0715025', 'Muhammad Gunawan', 2015, NULL, NULL, 3, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (92, 'I0715026', 'Muhammad Ramadhan Bagas Purnomo', 2015, NULL, NULL, 9, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (93, 'I0715027', 'MUHAMMAD WAHID HASYIM', 2015, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (94, 'I0715028', 'Mustofa Danang Ariyanto', 2015, NULL, NULL, 9, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (95, 'I0715029', 'Oktavian Listiyanto', 2015, NULL, NULL, 9, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (96, 'I0715030', 'Ramanda Fadhillah', 2015, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (97, 'I0715031', 'Ratih Rachmatika', 2015, NULL, NULL, 2, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (98, 'I0715032', 'Ryoki Martfuadi', 2015, NULL, NULL, 6, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (99, 'I0715033', 'Sifa\'us Wulaning Arsri', 2015, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (100, 'I0715034', 'Tony Febrianto', 2015, NULL, NULL, 6, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (101, 'I0715035', 'Wahyu Kurniawan', 2015, NULL, NULL, 6, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (102, 'I0715036', 'WAHYU RAHMAT HIDAYAT', 2015, NULL, NULL, 8, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (103, 'I0715037', 'YAN MAHARDHIKA PUTRA PERDANA', 2015, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (104, 'I0715038', 'YASMINE AFIFAH', 2015, NULL, NULL, 2, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES (105, 'I0715039', 'Zaniar Rickiansyah', 2015, NULL, NULL, 8, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (106, 'I0715040', 'YUANA AYUB SUNARYA', 2015, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (107, 'I0717001', 'ADITYA PRATAMA', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (108, 'I0717002', 'AGUNG BUDI UTOMO', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (109, 'I0717003', 'AIMMATUL YUMNA ARIVATUL AZRA', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (110, 'I0717004', 'Alvin Ichwannur Ridho', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (111, 'I0717005', 'ARIF WIBOWO', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (112, 'I0717006', 'Athaya Cantia Putri', 2017, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (113, 'I0717007', 'Attar Al Mufashal Rasyid', 2017, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (114, 'I0717008', 'Aulia Vici Yunitasari', 2017, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (115, 'I0717009', 'Bakasrian Fericoari', 2017, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (116, 'I0717010', 'BANU MAHESWARA', 2017, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (117, 'I0717011', 'Bayhaqi Irfani', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (118, 'I0717012', 'Berlianne Shanaza Andriany', 2017, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (119, 'I0717013', 'BIMA DAMAR JATI', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (120, 'I0717014', 'BINTAR YUDO SADEWO', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (121, 'I0717015', 'FAHMI ISMAIL', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (122, 'I0717016', 'FAISHAL HANIFAN MA`RUF', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (123, 'I0717017', 'GILANG SATRIA AJIE', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (124, 'I0717018', 'Hanifah Yulia', 2017, NULL, NULL, 9, 3, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (125, 'I0717019', 'HARISNO', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES (126, 'I0717020', 'HERWIN JONATHAN NABABAN', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES (127, 'I0717021', 'Hisbullah Ahmad Fathoni', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (128, 'I0717022', 'IVAN ROBI SEPTIAN', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (129, 'I0717023', 'Kevin Dwiyanto Saputra', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (130, 'I0717024', 'M. IQBAL ZIDNY', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (131, 'I0717025', 'M. MAULANA YUSUF', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (132, 'I0717026', 'MOHAMMAD RAIHAN H.', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (133, 'I0717027', 'MUHAMMAD AL HAMID', 2017, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (134, 'I0717028', 'MUHAMMAD IKYU ARQIE RAMADHAN', 2017, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (135, 'I0717029', 'Muhammad Renaldy Darmawan', 2017, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (136, 'I0717030', 'Muhammad Rifai', 2017, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (137, 'I0717031', 'MUHAMMAD RIFYAL ABUBAKAR', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (138, 'I0717032', 'MUHAMMAD RIZQI SUBENO', 2017, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (139, 'I0717033', 'Muhammad Wakhid Wardani', 2017, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (140, 'I0717034', 'MUHAMMAD YAHYA IZZUDIN', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES (141, 'I0717035', 'Nanda Hafidz Rivanda', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (142, 'I0717036', 'RAFIQ SATRIA YUDHA', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (143, 'I0717037', 'RIFQI PARADISA', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (144, 'I0717038', 'RISKI RAMA KUSUMA', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (145, 'I0717039', 'Sony Adyatama', 2017, NULL, NULL, 2, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (146, 'I0717040', 'Wahyu Aji Rahmantya Soedjono', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES (147, 'I0717041', 'Weldino Panji Kurniadi', 2017, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (148, 'I0717042', 'YUSUF YAHYA', 2017, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (149, 'I0718001', 'ABRAHAM BABTISTIO', 2018, NULL, NULL, 11, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (150, 'I0718002', 'AHMAD AZZAM HAFIDZ', 2018, NULL, NULL, 11, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (151, 'I0718003', 'ALVIAN AJI PANGESTU', 2018, NULL, NULL, 11, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (152, 'I0718004', 'ANDHIKA RIZKITA PUTERA', 2018, NULL, NULL, 11, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (153, 'I0718005', 'Annisa Larasati Febrianingrum', 2018, NULL, NULL, 5, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (154, 'I0718006', 'CATYA AFIF KASUDYA', 2018, NULL, NULL, 5, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (155, 'I0718007', 'Desi Sunyahni', 2018, NULL, NULL, 5, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (156, 'I0718008', 'Eri Setiawan', 2018, NULL, NULL, 5, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (157, 'I0718009', 'FANDI SURYA ADINATA', 2018, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (158, 'I0718010', 'Firmansyah Abada', 2018, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (159, 'I0718011', 'GHOZY ABROR AUFAN', 2018, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (160, 'I0718012', 'GIBRAN DZULFIKAR GHAFFARA', 2018, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (161, 'I0718013', 'Hanandya Maya Shafira', 2018, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (162, 'I0718014', 'HANIF ARDIYOANSYAH', 2018, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (163, 'I0718015', 'ILHAM GILANG PRADANA', 2018, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (164, 'I0718016', 'IMAM ARIF', 2018, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (165, 'I0718017', 'KHILALUL HANIF', 2018, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (166, 'I0718018', 'M. FATKHI FUTUKHAL ARIFIN', 2018, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (167, 'I0718019', 'Moh.Adith Setiawan', 2018, NULL, NULL, 10, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (168, 'I0718020', 'Mohammad Ravi Rachman', 2018, NULL, NULL, 10, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (169, 'I0718021', 'MUHAMAD MIFTAHUS SURUR', 2018, NULL, NULL, 10, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (170, 'I0718022', 'MUHAMMAD DIDIN KAMALUDIN', 2018, NULL, NULL, 10, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (171, 'I0718023', 'MUHAMMAD GHOZY AL HAKIM', 2018, NULL, NULL, 11, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (172, 'I0718024', 'Muhammad Ibnu Sina Abbas Parlin', 2018, NULL, NULL, 11, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (173, 'I0718025', 'Nada Syadza Azizah', 2018, NULL, NULL, 5, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (174, 'I0718026', 'Nadya Namirasepti Efendi', 2018, NULL, NULL, 5, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (175, 'I0718027', 'Nur Udin Galang Ga', 2018, NULL, NULL, 10, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (176, 'I0718028', 'OGA SRI LESTYANA', 2018, NULL, NULL, 10, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (177, 'I0718029', 'RAIHAN RAFIF KAUTSAR PRIYANTO', 2018, NULL, NULL, 9, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (178, 'I0718030', 'RAMADHAN PRIHANTONO', 2018, NULL, NULL, 6, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (179, 'I0718031', 'RIZAL MUJADDID IRSYAD', 2018, NULL, NULL, 4, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (180, 'I0718032', 'ROIS HASAN MUHAMMAD', 2018, NULL, NULL, 1, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (181, 'I0718033', 'RONI TAMADO', 2018, NULL, NULL, 8, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (182, 'I0718034', 'SLASH ARTHUR EDI SUMAWANG', 2018, NULL, NULL, 3, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (183, 'I0718035', 'Syaifullah Filard L', 2018, NULL, NULL, 11, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (184, 'I0718036', 'SYAUQY MAULANAR RAHMAN', 2018, NULL, NULL, 7, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (185, 'I0718037', 'TAUFIK WIDYASTAMA', 2018, NULL, NULL, 6, NULL, 'AKTIF');

-- ----------------------------
-- Table structure for matkul
-- ----------------------------
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ta` int(15) NULL DEFAULT NULL,
  `nama_matkul` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kode_matkul` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip` float NULL DEFAULT NULL,
  `huruf` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `matkul_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of matkul
-- ----------------------------
INSERT INTO `matkul` VALUES (22, 8, 'MK1', 'Kode1', 80, 'B+');
INSERT INTO `matkul` VALUES (23, 8, 'MK2', 'Kode2', 87, 'A-');
INSERT INTO `matkul` VALUES (24, 8, 'MK3', 'Kode3', 97, 'A');

-- ----------------------------
-- Table structure for pembimbing
-- ----------------------------
DROP TABLE IF EXISTS `pembimbing`;
CREATE TABLE `pembimbing`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ta` int(15) NULL DEFAULT NULL,
  `pembimbing1` int(15) NULL DEFAULT NULL,
  `pembimbing2` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  INDEX `pembimbing1`(`pembimbing1`) USING BTREE,
  INDEX `pembimbing2`(`pembimbing2`) USING BTREE,
  CONSTRAINT `pembimbing_ibfk_4` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pembimbing_ibfk_5` FOREIGN KEY (`pembimbing1`) REFERENCES `ref_dosen` (`id_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pembimbing_ibfk_6` FOREIGN KEY (`pembimbing2`) REFERENCES `ref_dosen` (`id_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pembimbing
-- ----------------------------
INSERT INTO `pembimbing` VALUES (8, 8, 3, 7);

-- ----------------------------
-- Table structure for peminatan
-- ----------------------------
DROP TABLE IF EXISTS `peminatan`;
CREATE TABLE `peminatan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan` int(10) NULL DEFAULT NULL,
  `kode` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_peminatan` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kode`(`kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of peminatan
-- ----------------------------
INSERT INTO `peminatan` VALUES (1, 2019, '3', 'TKJ');
INSERT INTO `peminatan` VALUES (2, 21, '12', '1');

-- ----------------------------
-- Table structure for pendadaran
-- ----------------------------
DROP TABLE IF EXISTS `pendadaran`;
CREATE TABLE `pendadaran`  (
  `id_pendadaran` int(15) NOT NULL,
  `id_ta` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `dosen_penguji1` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dosen_penguji2` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dosen_penguji3` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nilai_penguji1` float NOT NULL,
  `nilai_penguji2` float NOT NULL,
  `nilai_penguji3` float NOT NULL,
  `nilai_pendadaran` float NOT NULL,
  `status_pendadaran` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_pendadaran`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `pendadaran_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pendadaran
-- ----------------------------
INSERT INTO `pendadaran` VALUES (0, 8, '2020-01-31', '2', '13:00:00.000000', '15:00:00.000000', '', '', '', 0, 0, 0, 0, 'PENDING');

-- ----------------------------
-- Table structure for ref_dosen
-- ----------------------------
DROP TABLE IF EXISTS `ref_dosen`;
CREATE TABLE `ref_dosen`  (
  `id_dosen` int(15) NOT NULL AUTO_INCREMENT,
  `kode_dosen` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nip` bigint(30) NULL DEFAULT NULL,
  `nama_dosen` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status_dosen` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_dosen`) USING BTREE,
  INDEX `kode_dosen`(`kode_dosen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_dosen
-- ----------------------------
INSERT INTO `ref_dosen` VALUES (1, 'AUG001', 1951100120161001, 'Dr.Ir. Augustinus Sujono M.T.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (2, 'CHI001', 198804162015041002, 'Chico Hermanu Brillianto Apribowo S.T., M.Eng.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (3, 'DRM001', 1983032420130201, 'Dr. Miftahul Anwar S.Si., M.Eng.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (4, 'FER001', 196801161999031001, 'Feri Adriyanto, Ph.D.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (5, 'HAR050', 199104132018031001, 'Hari Maghfiroh M.Eng.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (6, 'IRW001', 197004041996031002, 'Irwan Iftadi S.T., M.Eng.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (7, 'MEI002', 197705132009121004, 'Meiyanto Eko Sulistyo S.T., M.Eng.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (8, 'MUH015', 197007201999031001, 'Prof. Muhammad Nizam S.T,M.T,Ph.D.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (9, 'MUH043', 1988122920161001, 'Muhammad Hamka Ibrahim St., M.Eng.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (10, 'SUB012', 198106092003121002, 'Subuh Pramono S.T., M.T.', 'AKTIF');
INSERT INTO `ref_dosen` VALUES (11, 'SUT034', 1987050620180701, 'Sutrisno S.T., M.Sc, Ph.D.', 'AKTIF');

-- ----------------------------
-- Table structure for ref_ruang
-- ----------------------------
DROP TABLE IF EXISTS `ref_ruang`;
CREATE TABLE `ref_ruang`  (
  `id_ruang` int(15) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_ruang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_ruang
-- ----------------------------
INSERT INTO `ref_ruang` VALUES (1, 'Ruang Kuliah 1');
INSERT INTO `ref_ruang` VALUES (2, 'Ruang Kuliah 2');
INSERT INTO `ref_ruang` VALUES (3, 'Ruang Kuliah 3');
INSERT INTO `ref_ruang` VALUES (4, 'Ruang Kuliah 4');
INSERT INTO `ref_ruang` VALUES (5, 'Ruang Kaprodi');
INSERT INTO `ref_ruang` VALUES (6, 'Ruang Sidang');
INSERT INTO `ref_ruang` VALUES (7, 'Lab. Elektro');

-- ----------------------------
-- Table structure for seminar_kp
-- ----------------------------
DROP TABLE IF EXISTS `seminar_kp`;
CREATE TABLE `seminar_kp`  (
  `id_seminar` int(15) NOT NULL AUTO_INCREMENT,
  `kp_id` int(15) NOT NULL,
  `judul_seminar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tanggal_seminar` date NULL DEFAULT NULL,
  `jam_mulai` time(0) NULL DEFAULT NULL,
  `jam_selesai` time(0) NULL DEFAULT NULL,
  `ruang_id` int(10) NULL DEFAULT NULL,
  `status_seminarkp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE,
  INDEX `KPID`(`kp_id`) USING BTREE,
  INDEX `ruang`(`ruang_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of seminar_kp
-- ----------------------------
INSERT INTO `seminar_kp` VALUES (1, 1, 'Halo', '2020-01-07', '13:00:00', '14:00:00', 4, 'PENDING', '2020-01-07 14:03:45', '2020-01-07 14:03:45');

-- ----------------------------
-- Table structure for seminar_ta
-- ----------------------------
DROP TABLE IF EXISTS `seminar_ta`;
CREATE TABLE `seminar_ta`  (
  `id_seminar` int(15) NOT NULL AUTO_INCREMENT,
  `id_ta` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` int(15) NOT NULL,
  `jam_mulai` time(0) NOT NULL,
  `jam_selesai` time(0) NOT NULL,
  `status_seminar` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  INDEX `tempat`(`tempat`) USING BTREE,
  CONSTRAINT `seminar_ta_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `seminar_ta_ibfk_2` FOREIGN KEY (`tempat`) REFERENCES `ref_ruang` (`id_ruang`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of seminar_ta
-- ----------------------------
INSERT INTO `seminar_ta` VALUES (1, 8, '2020-01-12', 1, '14:00:00', '16:00:00', 'SETUJU');

-- ----------------------------
-- Table structure for ta
-- ----------------------------
DROP TABLE IF EXISTS `ta`;
CREATE TABLE `ta`  (
  `id_ta` int(15) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `judul` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abstrak` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `tgl_pengajuan` date NULL DEFAULT NULL,
  `status_ta` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kode_peminatan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ta`) USING BTREE,
  INDEX `ta_ibfk_1`(`nim_mhs`) USING BTREE,
  INDEX `ta_ibfk_2`(`kode_peminatan`) USING BTREE,
  CONSTRAINT `ta_ibfk_1` FOREIGN KEY (`kode_peminatan`) REFERENCES `peminatan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ta
-- ----------------------------
INSERT INTO `ta` VALUES (8, 'I0716018', 'Ini Judul Kevin1', 'Deskripsi Kevin1', '2020-01-01', 'SETUJU', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(2) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'yudhie123', 'I0716034', 'yudhie123@gmail.com', NULL, '1f8106dc97f9fc3249ab10873e6776ea', 1, NULL, '2019-12-05 09:10:15', '2019-12-05 09:10:15');
INSERT INTO `users` VALUES (3, 'kevin123', 'I0716018', 'kevin123@gmail.com', NULL, 'd2e7a2105d0fb461fe6f2858cc33942f', 1, NULL, '2019-12-08 20:48:06', '2019-12-08 20:48:06');
INSERT INTO `users` VALUES (4, 'adminkp', 'adminkp', 'adminkp@gmail.com', NULL, '4ef6ca03badf8555d7bbacf5506b0feb', 3, NULL, '2020-01-09 14:57:42', '2020-01-09 14:57:46');

SET FOREIGN_KEY_CHECKS = 1;
