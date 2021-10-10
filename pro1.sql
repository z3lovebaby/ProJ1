-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2021 lúc 10:28 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pro1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adverts`
--

CREATE TABLE `adverts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `adverts`
--

INSERT INTO `adverts` (`id`, `name`, `description`, `image_path`, `image_name`, `created_at`, `updated_at`) VALUES
(9, 'Thương Nguyễn Văn', 'a', '/storage/advert/1/rDju4NJgaL1VjfvgDSKY.tải xuống.jpg', 'tải xuống.jpg', '2021-10-06 09:09:08', '2021-10-06 09:09:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthehangs`
--

CREATE TABLE `chitietthehangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CTTH_TheHangId` bigint(20) UNSIGNED NOT NULL,
  `CTTH_SachId` bigint(20) UNSIGNED NOT NULL,
  `CTTH_SoLuong` int(11) NOT NULL,
  `CTTH_ThanhTien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsaches`
--

CREATE TABLE `danhmucsaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DMS_Tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DMS_parentId` int(11) NOT NULL DEFAULT 0,
  `DMS_Mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DMS_Vitri` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsaches`
--

INSERT INTO `danhmucsaches` (`id`, `DMS_Tieude`, `DMS_parentId`, `DMS_Mota`, `DMS_Vitri`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 't', 9, 'abc', 111, '2021-08-19 03:46:12', '2021-09-30 02:31:58', '2021-09-30 02:31:58'),
(2, 'Anh', 0, 'Cha', 1, '2021-08-19 03:47:11', '2021-08-19 03:47:11', NULL),
(3, 'B', 2, 'con Anh', 2, '2021-08-19 03:47:26', '2021-09-12 11:16:42', '2021-09-12 11:16:42'),
(4, 'C', 3, 'chau Anh', 3, '2021-08-19 03:47:38', '2021-09-12 11:16:18', '2021-09-12 11:16:18'),
(5, 'D', 4, 'chat Anh', 2, '2021-08-19 03:47:51', '2021-08-22 00:23:44', '2021-08-22 00:23:44'),
(6, 'Q', 0, 'pretty girl', 66, '2021-08-21 09:19:04', '2021-08-21 09:19:04', NULL),
(7, 'Quynh', 0, 'pretty girl', 66, '2021-08-21 20:09:02', '2021-08-21 20:09:02', NULL),
(8, 'Quynhh', 0, 'pretty girl', 66, '2021-08-21 20:19:38', '2021-08-21 20:19:38', NULL),
(9, 'em max', 5, 'abc', 1, '2021-08-21 21:30:13', '2021-08-21 21:36:39', NULL),
(10, 'Ye', 2, 'abc', 1, '2021-09-12 11:32:29', '2021-09-30 02:31:53', '2021-09-30 02:31:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhangs`
--

CREATE TABLE `khachhangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `KH_TenTruyCap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KH_MatKhau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KH_HoTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KH_Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KH_NgayBatDau` datetime NOT NULL,
  `KH_TrangThai` blob NOT NULL,
  `KH_DienThoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KH_DiaChi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `slug`) VALUES
(2, 'Menu 2', 0, NULL, NULL, ''),
(3, 'Menu 3', 0, NULL, NULL, ''),
(4, 'Menu 1.1', 1, NULL, NULL, ''),
(5, 'Menu 1.2', 1, NULL, NULL, ''),
(6, 'Menu 1.1.1', 4, NULL, NULL, ''),
(7, 'Menu 2.1', 2, NULL, NULL, ''),
(8, 'Menu 2.2', 2, NULL, NULL, ''),
(9, 'Menu 3.1', 3, NULL, NULL, ''),
(10, 'Menu 3.1.1', 9, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2021_08_12_095052_create_nxbs_table', 1),
(23, '2021_08_12_095129_create_danhmucsaches_table', 1),
(24, '2021_08_12_095149_create_tacgias_table', 1),
(25, '2021_08_12_095207_create_saches_table', 1),
(26, '2021_08_12_095222_create_khachhangs_table', 1),
(27, '2021_08_12_095238_create_thehangs_table', 1),
(28, '2021_08_12_095254_create_chitietthehangs_table', 1),
(29, '2021_08_22_070844_add_column_delete_at_table_danhmucsaches', 2),
(30, '2021_08_23_181743_create_menus_table', 3),
(31, '2021_09_12_180132_add_column_slug_to_menus_table', 4),
(32, '2021_09_28_175308_create_adverts_table', 5),
(33, '2021_09_29_070448_create_settings_table', 6),
(34, '2021_09_29_073325_add_column_type_table_setting', 7),
(35, '2021_09_29_074950_add_delete_at_table_setting', 8),
(36, '2021_09_29_160716_create_users_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nxbs`
--

CREATE TABLE `nxbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NXB_Ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NXB_Mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `saches`
--

CREATE TABLE `saches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `S_DanhmucId` bigint(20) UNSIGNED NOT NULL,
  `S_Ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Anh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Chitiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `S_TuKhoa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_GiaBan` int(11) NOT NULL,
  `S_TrangThai` blob NOT NULL,
  `S_SoLanXem` int(11) NOT NULL,
  `S_KichCo` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_NXBId` bigint(20) UNSIGNED NOT NULL,
  `S_GiaNhap` int(11) NOT NULL,
  `S_SoLuong` int(11) NOT NULL,
  `S_ViTri` int(11) NOT NULL,
  `S_NguyenBo` int(11) NOT NULL,
  `S_TacGiaId` bigint(20) UNSIGNED NOT NULL,
  `S_CamNang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `created_at`, `updated_at`, `type`, `deleted_at`) VALUES
(1, 'link facebook', '0357322331abc', '2021-09-29 00:34:29', '2021-09-29 07:53:48', 'Text', '2021-09-29 07:53:48'),
(2, 'sdt3', 'dsfdsf', '2021-09-29 00:48:16', '2021-09-29 00:54:44', 'Textarea', '2021-09-29 00:54:44'),
(3, 'facebook', 'https://www.facebook.com/anh.pro.94043/', '2021-09-29 07:55:43', '2021-09-29 07:55:43', 'Text', NULL),
(4, 'abc', 'efghdk', '2021-09-29 07:56:03', '2021-10-06 10:02:52', 'Textarea', '2021-10-06 10:02:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgias`
--

CREATE TABLE `tacgias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TG_HoTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TG_Mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thehangs`
--

CREATE TABLE `thehangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TH_KhachHangId` bigint(20) UNSIGNED NOT NULL,
  `TH_Ngay` datetime NOT NULL,
  `TH_ThanhTien` int(11) NOT NULL,
  `TH_TrangThai` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Group 1', 'thuongx1bg@gmail.com', NULL, '$2y$10$8Jw.YmuABstxiyxy1t7tGOaclUDLx0DiwwNvGJjhhMNlnrBd0pgdG', 'O5we0qBghk77XmhwZhlbt50Bs0cujNQzery4v3vdZOQIzb8yowoIIRFQO6M9', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietthehangs`
--
ALTER TABLE `chitietthehangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietthehangs_ctth_sachid_foreign` (`CTTH_SachId`),
  ADD KEY `chitietthehangs_ctth_thehangid_foreign` (`CTTH_TheHangId`);

--
-- Chỉ mục cho bảng `danhmucsaches`
--
ALTER TABLE `danhmucsaches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nxbs`
--
ALTER TABLE `nxbs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `saches`
--
ALTER TABLE `saches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saches_s_nxbid_foreign` (`S_NXBId`),
  ADD KEY `saches_s_danhmucid_foreign` (`S_DanhmucId`),
  ADD KEY `saches_s_tacgiaid_foreign` (`S_TacGiaId`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tacgias`
--
ALTER TABLE `tacgias`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thehangs`
--
ALTER TABLE `thehangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thehangs_th_khachhangid_foreign` (`TH_KhachHangId`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chitietthehangs`
--
ALTER TABLE `chitietthehangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsaches`
--
ALTER TABLE `danhmucsaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `nxbs`
--
ALTER TABLE `nxbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `saches`
--
ALTER TABLE `saches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tacgias`
--
ALTER TABLE `tacgias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thehangs`
--
ALTER TABLE `thehangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietthehangs`
--
ALTER TABLE `chitietthehangs`
  ADD CONSTRAINT `chitietthehangs_ctth_sachid_foreign` FOREIGN KEY (`CTTH_SachId`) REFERENCES `saches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietthehangs_ctth_thehangid_foreign` FOREIGN KEY (`CTTH_TheHangId`) REFERENCES `thehangs` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `saches`
--
ALTER TABLE `saches`
  ADD CONSTRAINT `saches_s_danhmucid_foreign` FOREIGN KEY (`S_DanhmucId`) REFERENCES `danhmucsaches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saches_s_nxbid_foreign` FOREIGN KEY (`S_NXBId`) REFERENCES `nxbs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saches_s_tacgiaid_foreign` FOREIGN KEY (`S_TacGiaId`) REFERENCES `tacgias` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `thehangs`
--
ALTER TABLE `thehangs`
  ADD CONSTRAINT `thehangs_th_khachhangid_foreign` FOREIGN KEY (`TH_KhachHangId`) REFERENCES `khachhangs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
