/*
 Navicat Premium Data Transfer

 Source Server         : laravel
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : wiber

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 15/06/2024 20:57:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for himpunans
-- ----------------------------
DROP TABLE IF EXISTS `himpunans`;
CREATE TABLE `himpunans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `himpunan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of himpunans
-- ----------------------------
INSERT INTO `himpunans` VALUES (11, 'Himpunan Mahasiswa Informatika', '6287758962661', '2024-06-05 00:35:03', '2024-06-05 00:35:03');
INSERT INTO `himpunans` VALUES (12, 'Himpunan Mahasiswa Ilkom', '6282147565186', '2024-06-05 00:45:23', '2024-06-05 00:45:23');

-- ----------------------------
-- Table structure for kategoris
-- ----------------------------
DROP TABLE IF EXISTS `kategoris`;
CREATE TABLE `kategoris`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategoris
-- ----------------------------
INSERT INTO `kategoris` VALUES (11, 'Makanan', '2024-06-05 00:35:17', '2024-06-05 00:35:17');
INSERT INTO `kategoris` VALUES (12, 'Minuman', '2024-06-05 00:45:38', '2024-06-05 00:45:38');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2024_05_22_000001_create_himpunans_table', 1);
INSERT INTO `migrations` VALUES (7, '2024_05_22_000002_create_kategoris_table', 1);
INSERT INTO `migrations` VALUES (8, '2024_05_22_000003_create_produks_table', 1);
INSERT INTO `migrations` VALUES (9, '2024_05_22_009001_add_foreigns_to_produks_table', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for produks
-- ----------------------------
DROP TABLE IF EXISTS `produks`;
CREATE TABLE `produks`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `himpunan_id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `deskripsi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `produks_himpunan_id_foreign`(`himpunan_id` ASC) USING BTREE,
  INDEX `produks_kategori_id_foreign`(`kategori_id` ASC) USING BTREE,
  CONSTRAINT `produks_himpunan_id_foreign` FOREIGN KEY (`himpunan_id`) REFERENCES `himpunans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `produks_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produks
-- ----------------------------
INSERT INTO `produks` VALUES (7, 11, 'Sepat', 11, 'Blabalbalbala', 'public/yiHMMZ2XnuOiBo6b3ozy3UD2861TnSF6GXMv4dRw.jpg', '2000', 'aktif', '2024-06-05 00:35:55', '2024-06-05 00:35:55');
INSERT INTO `produks` VALUES (8, 11, 'Singang', 11, 'asdada', 'public/3lzKKu0jmSCYM5ytXsDCcOqrWk6ce5WNTqY1H0Is.jpg', '5000', 'aktif', '2024-06-05 00:36:46', '2024-06-05 00:36:46');
INSERT INTO `produks` VALUES (9, 12, 'Milkshake', 12, 'blaslasl', 'public/Rw5j8mCk7CzQYg8YRyKDBRnKCRsoyjx5cTujE28k.jpg', '5000', 'aktif', '2024-06-05 00:47:06', '2024-06-05 05:02:54');
INSERT INTO `produks` VALUES (10, 11, 'Nasi Padang', 11, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'public/czyPHLQ2N40QvMFlovkUshCjEtFIMiDLGmkjdckN.jpg', '5000', 'aktif', '2024-06-05 23:53:24', '2024-06-05 23:53:24');
INSERT INTO `produks` VALUES (11, 11, 'Nasi Goreng', 11, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', 'public/25Kt9sdLGyY7oxlBFHI7zYQFFJBl28ytMjXna5Ee.png', '10000', 'aktif', '2024-06-06 02:19:10', '2024-06-06 02:19:10');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Taraya Fadhilah', 'admin@admin.com', '2024-06-05 00:15:41', '$2y$12$e.nnaxYincsJPCyXGl9tZOF/Ip/jmClfajEiJl4QBa8LFMIaGHw4u', 'as6hIR1DtjSYmh1BIT51Xo7DRQjGVzjoTBUkOj1yTcofP6JvCA9RjDj0dXQq', '2024-06-05 00:15:41', '2024-06-05 00:15:41');
INSERT INTO `users` VALUES (2, 'Marty Wilderman', 'deondre40@conn.com', '2024-06-05 00:15:42', '$2y$12$t.10b3.aQFz3ixvCQqnJnOJkgVDaL3sK7n5tSgANQhHeyNTfnLQNO', 'mHbNr6gxN6', '2024-06-05 00:15:43', '2024-06-05 00:15:43');
INSERT INTO `users` VALUES (3, 'Jacky Windler', 'schiller.amanda@mitchell.com', '2024-06-05 00:15:42', '$2y$12$IXMUFIjLb84ro1ClP/HJ0.q4QA2WaiFVUUZDWWwcPpmYE1aN7GAqq', 'Ul2jO4F0gK', '2024-06-05 00:15:43', '2024-06-05 00:15:43');
INSERT INTO `users` VALUES (4, 'Prof. Orion Nolan', 'corbin08@shanahan.com', '2024-06-05 00:15:42', '$2y$12$kN8Eq0vvdbymw8torTXb9u238pP1maU47x3scVrcjuiipcy2p2Do2', 'oRl1dc25Uc', '2024-06-05 00:15:43', '2024-06-05 00:15:43');
INSERT INTO `users` VALUES (5, 'Miss Queen Steuber', 'elmore.haley@feeney.com', '2024-06-05 00:15:43', '$2y$12$q13GRjVjj6x2DilSaHJJQecVMVYNx.Cn7ajZwKPvzP3nzFHH4bcby', 'Mo5W0s6jny', '2024-06-05 00:15:43', '2024-06-05 00:15:43');
INSERT INTO `users` VALUES (6, 'Adan Carroll', 'deshaun60@kassulke.org', '2024-06-05 00:15:43', '$2y$12$Yj16SzsqyXnVGoA6G1QnHOhpw2ltoLKPi3wtH3KENE2ArCsL0IZvK', 'FjlGA5rAWn', '2024-06-05 00:15:43', '2024-06-05 00:15:43');

SET FOREIGN_KEY_CHECKS = 1;
