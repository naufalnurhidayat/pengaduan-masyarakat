# Host: localhost  (Version 5.5.5-10.4.17-MariaDB)
# Date: 2021-04-08 08:48:06
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "failed_jobs"
#

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "failed_jobs"
#


#
# Structure for table "masyarakat"
#

DROP TABLE IF EXISTS `masyarakat`;
CREATE TABLE `masyarakat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `masyarakat_nik_unique` (`nik`),
  UNIQUE KEY `masyarakat_username_unique` (`username`),
  UNIQUE KEY `masyarakat_email_unique` (`email`),
  UNIQUE KEY `masyarakat_telp_unique` (`telp`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "masyarakat"
#

INSERT INTO `masyarakat` VALUES (1,'12345678','Opal 1673','opal1673','$2y$10$ZwYLbe8WTC/8sTe.1sai2evyyO88thf/HcrLHAhBDpIsyH3cKr2a.','naufal.opal1673@gmail.com','08080808080','2021-04-06 06:03:13','2021-04-06 06:03:13'),(2,'01348317412','Alengga','alengga','$2y$10$jOscOpXnr6hvocAC7sVz.Oeh74/gsLrVNHugrjAWMaW8EdXYBIIMW','eghaalengga@gmail.com','03843103148','2021-04-06 07:01:33','2021-04-06 07:01:33'),(3,'46346','Opal Gaming','opalgaming','$2y$10$lcmR.UB4LRobxyRFVIiXGeRo0X8kEzOwrS6v1DgyADlP/BdaVvNaq','opalgaming@gmail.com','3253543536','2021-04-06 13:41:54','2021-04-06 13:41:54'),(4,'123123123','Bagas Kusuma','bagaskusuma','$2y$10$N1NMTwvGl9Zu8A7fBlrddumdVcQhXjV3lXiJE8vMTs6GadDOQzsRW','bagaskusuma@gmail.com','08908908909','2021-04-07 01:42:41','2021-04-07 01:42:41'),(5,'019283108471','Rahardian Prasetyo','rahardianprasetyo','$2y$10$e01JklPnLL6HjsvRptAi6.faFBSExScyKCuqzcjqd/dXI/Wzvek.u','rahardianprasetyo@gmail.com','08913274612','2021-04-07 01:54:00','2021-04-07 01:54:00'),(6,'1231231234','Anto Ganteng','antoganteng','$2y$10$c5/JY6Ccyv3jKYomx0XhleHydxYU7dZXDPpP1o51kC1FvQfCzEtRu','antoganteng@gmail.com','0890980980','2021-04-07 02:34:33','2021-04-07 02:34:33'),(7,'08883222121','Achmad Abi Mayu','achmadabimayu','$2y$10$gmolVMElptQE7ibVoBesO.tDrRS6SDxtuz8yYonbzdTHSmO9KOGRm','achmadabimayu@gmail.com','088888888','2021-04-07 04:18:09','2021-04-07 04:18:09');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_03_22_054146_create_masyarakat_table',1),(5,'2021_03_22_054225_create_petugas_table',1),(6,'2021_03_23_020249_create_pengaduan_table',1),(7,'2021_03_23_020310_create_tanggapan_table',1);

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "pengaduan"
#

DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE `pengaduan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tgl_pengaduan` date NOT NULL,
  `id_masyarakat` bigint(20) unsigned NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','proses','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pengaduan_id_masyarakat_foreign` (`id_masyarakat`),
  CONSTRAINT `pengaduan_id_masyarakat_foreign` FOREIGN KEY (`id_masyarakat`) REFERENCES `masyarakat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "pengaduan"
#

INSERT INTO `pengaduan` VALUES (20,'2021-04-06',3,'46346','aadsasd','580b57fcd9996e24bc43c543.png','selesai','2021-04-06 14:06:01','2021-04-06 14:09:44'),(21,'2021-04-07',4,'123123123','Jalanan rusak, bolong bolong, kaya biji','SimCity BuildIt.jpg','selesai','2021-04-07 01:47:28','2021-04-07 01:59:46'),(22,'2021-04-06',4,'123123123','Wadidaw....','Robbery Bob.jpg','selesai','2021-04-07 01:51:25','2021-04-07 01:57:36'),(23,'2021-04-05',5,'019283108471','Biji tanos meledak','3078b67907fabfa7afa028bb99a226a5-2.png','selesai','2021-04-07 02:00:37','2021-04-07 02:01:04'),(24,'2021-04-07',5,'019283108471','Biji Anto ada tiga','6547611_preview.png','proses','2021-04-07 02:02:35','2021-04-07 02:19:48'),(25,'2021-04-02',1,'12345678','Wadaw wadaw wadaw wadidaw','facebook-logo-2019-1597680-1350125.png','proses','2021-04-07 02:20:56','2021-04-07 02:25:02'),(26,'2021-04-07',1,'12345678','askhdkjasdhkj','poker.jpg','proses','2021-04-07 02:21:20','2021-04-07 02:25:06'),(27,'2021-04-07',1,'12345678','ajdfsaGHJBHVFhj','unnamed (1).png','proses','2021-04-07 02:21:45','2021-04-07 02:24:49'),(29,'2021-04-05',2,'01348317412','asbdnabsmnd','twitter-logo-4.png','proses','2021-04-07 02:22:48','2021-04-07 02:24:57'),(30,'2021-04-07',6,'1231231234','FF ga ada pintu...','freefire.png','0','2021-04-07 02:35:26','2021-04-07 02:35:26'),(31,'2021-04-07',7,'08883222121','Jembatan rusak','9cd578da590b514d3d9647456894dfb4-1.png','selesai','2021-04-07 04:19:13','2021-04-07 04:22:22');

#
# Structure for table "petugas"
#

DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Admin','Petugas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `petugas_username_unique` (`username`),
  UNIQUE KEY `petugas_email_unique` (`email`),
  UNIQUE KEY `petugas_telp_unique` (`telp`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "petugas"
#

INSERT INTO `petugas` VALUES (1,'Naufal Nur Hidayat','naufalnurhidayat','$2y$10$59Rmvh3/7RIN1UgysaBjUOYChIN3Q7F7SAf0uSCbcJm7QkKan7A/i','naufal.gen13@gmail.com','083893081339','Admin','2021-04-02 15:30:43','2021-04-07 01:58:52'),(3,'Ario Bakti Nur Akbar','ariobaktinurakbar','$2y$10$3ys8clqRlWPdHl.6zKIZlOaJsHN5.B7/3izpWXN5vfycWvG.aNceG','ariobaktinurakbar@gmail.com','0898765463921','Petugas','2021-04-07 01:49:30','2021-04-07 01:49:30'),(4,'Iqbal Maulana','iqbalmaulana','$2y$10$HDXJ9co4ZnISuybEVx43AunvPt5IjVNy5tzww8DEeobzENpBb1SEq','iqbalmaulana@gmail.com','0892937183876','Petugas','2021-04-07 01:50:23','2021-04-07 01:57:55');

#
# Structure for table "tanggapan"
#

DROP TABLE IF EXISTS `tanggapan`;
CREATE TABLE `tanggapan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pengaduan` bigint(20) unsigned NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_petugas` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tanggapan_id_pengaduan_foreign` (`id_pengaduan`),
  KEY `tanggapan_id_petugas_foreign` (`id_petugas`),
  CONSTRAINT `tanggapan_id_pengaduan_foreign` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tanggapan_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "tanggapan"
#

INSERT INTO `tanggapan` VALUES (13,20,'2021-04-06','asdasdasdasd',1,'2021-04-06 14:09:47','2021-04-06 14:09:47'),(14,22,'2021-04-07','Aku adalah Anak supermen',4,'2021-04-07 01:57:36','2021-04-07 01:57:36'),(15,21,'2021-04-07','Biji tanos',1,'2021-04-07 01:59:46','2021-04-07 01:59:46'),(16,23,'2021-04-07','Biji lu tuh',4,'2021-04-07 02:01:04','2021-04-07 02:01:04'),(18,31,'2021-04-07','Jembatannya Punya Provinsi',4,'2021-04-07 04:22:22','2021-04-07 04:22:22');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

