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

 Date: 12/12/2019 10:03:30
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
  `status_kp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kp`) USING BTREE,
  INDEX `kp`(`mahasiswa_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kp
-- ----------------------------
INSERT INTO `kp` VALUES (1, 34, '2019-12-09 19:05:14', 'Telkomsel', 'Jl. Gatot Subroto', 'Telekomunikasi', 'Eko Prasetyo', '2019-12-09', '2019-12-17', 'SETUJU');

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
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES (1, 'I0716001', 'ADIP SAFIUDIN', 2016, 107, 3.45, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (2, 'I0716002', 'Adrian Seta Ekananda', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (3, 'I0716003', 'Afif Yuhendrasmiko', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (4, 'I0716004', 'AHMAD IMAM RAUYANI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (5, 'I0716005', 'AMMAR GALIH GUMILANG', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (6, 'I0716006', 'Annisa Hanifa', 2016, 120, 3.5, 10, 6, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (7, 'I0716007', 'Aulia Ramadhani', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (8, 'I0716008', 'Axel Adam Mahendra', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (9, 'I0716009', 'AZIS UBAIDILAH', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (10, 'I0716010', 'BHADRIKA EVANDITO A', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (11, 'I0716011', 'BINTANG SUJATMIKO', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (12, 'I0716012', 'Daniel Aquino Purba', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (13, 'I0716013', 'ERDIAN DWI LAKSANA', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (14, 'I0716014', 'Fuad Nur Kuncoro', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (15, 'I0716015', 'GHUFRON HUSNAN', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (16, 'I0716016', 'Henry Probo Santoso', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (17, 'I0716017', 'I Wayan Yoga K', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (18, 'I0716018', 'Kevin Sebastian', 2016, 107, 3.48, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (19, 'I0716019', 'Krisna Hakim', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (20, 'I0716020', 'MIFTAHUDDIN IRFANI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (21, 'I0716021', 'Mohamad Nisman Falic', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (22, 'I0716022', 'Muhammad Amirudin S', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (23, 'I0716023', 'MUHAMMAD FAKHRI ERRI', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (24, 'I0716024', 'MUHAMMAD THARIEQ P', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (25, 'I0716025', 'MUHAMMAD ULIL `AZMI', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (26, 'I0716026', 'Musyaffa\' Ahmad', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES (27, 'I0716027', 'OKI SETIAWAN', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (28, 'I0716028', 'Rilo Pambudi Aditya Wardani', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (29, 'I0716029', 'ROYANI AULIA IHSANTI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (30, 'I0716030', 'SALMAN AL FARISI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (31, 'I0716031', 'TYAN WIDOTOMO', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (32, 'I0716032', 'Vernanda S. Z. H', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (33, 'I0716033', 'Wiwik Nur Winda', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES (34, 'I0716034', 'YUDHI PRABOWO KUSUMA', 2016, 111, 3.5, 3, 7, 'AKTIF');

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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
  INDEX `kode_dosen`(`pembimbing1`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  INDEX `pembimbing2`(`pembimbing2`) USING BTREE,
  CONSTRAINT `pembimbing_ibfk_2` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pembimbing_ibfk_1` FOREIGN KEY (`pembimbing1`) REFERENCES `ref_dosen` (`id_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pembimbing_ibfk_3` FOREIGN KEY (`pembimbing2`) REFERENCES `ref_dosen` (`id_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for seminar_ta
-- ----------------------------
DROP TABLE IF EXISTS `seminar_ta`;
CREATE TABLE `seminar_ta`  (
  `id_seminar` int(15) NOT NULL AUTO_INCREMENT,
  `id_ta` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_mulai` time(0) NOT NULL,
  `jam_selesai` time(0) NOT NULL,
  `status_seminar` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `seminar_ta_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ta
-- ----------------------------
DROP TABLE IF EXISTS `ta`;
CREATE TABLE `ta`  (
  `id_ta` int(15) NOT NULL,
  `nim_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `judul` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abstrak` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `tgl_pengajuan` date NULL DEFAULT NULL,
  `status_ta` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kode_peminatan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ta`) USING BTREE,
  INDEX `ta_ibfk_1`(`nim_mhs`) USING BTREE,
  INDEX `ta_ibfk_2`(`kode_peminatan`) USING BTREE,
  CONSTRAINT `ta_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ta_ibfk_2` FOREIGN KEY (`kode_peminatan`) REFERENCES `peminatan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'yudhie123', 'I0716034', 'yudhie123@gmail.com', NULL, '1f8106dc97f9fc3249ab10873e6776ea', 1, NULL, '2019-12-05 09:10:15', '2019-12-05 09:10:15');
INSERT INTO `users` VALUES (3, 'kevin123', 'I0716018', 'kevin123@gmail.com', NULL, 'd2e7a2105d0fb461fe6f2858cc33942f', 1, NULL, '2019-12-08 20:48:06', '2019-12-08 20:48:06');

SET FOREIGN_KEY_CHECKS = 1;
