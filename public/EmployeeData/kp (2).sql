-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2021 pada 06.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_15_220633_create_pegawais_table', 1),
(5, '2021_08_16_034739_create_employees_table', 2),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(8, '2021_08_19_060805_create_sessions_table', 3),
(9, '2021_08_21_101030_add_message_to_users_table', 4),
(10, '2021_08_21_101710_add_message_to_users_table', 5),
(11, '2021_08_21_101937_add_message_to_users_table', 6),
(12, '2021_08_21_102153_add_message_to_users_table', 7),
(13, '2021_08_23_053015_add__n_i_m_to_users_table', 8),
(14, '2021_09_17_040518_add_utype_to_users_table', 9),
(15, '2021_09_17_042442_add_type_to_users_table', 10),
(16, '2021_09_17_042911_add_type_to_users_table', 11),
(17, '2021_09_17_043040_add_type_to_users_table', 12),
(18, '2021_09_17_043134_add_utype_to_users_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shen.98@qmail', '$2y$10$m5zuNgKlk6gYS/CzqjON7ekUwBZoPXP.05YNn8FXO0hYM1YRmtLhO', '2021-08-22 22:48:51'),
('shen.98@qmail.id', '$2y$10$uNt9p6tiFTTrIPrMO26vUuhI2Tj6vSLbw0HN3fs26AvJ7lRR8iDJS', '2021-08-22 23:04:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yGr1YPt1glgy54ktMxbI4JjEbKgkw2htdR4a3VVP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2R3WlIybUlOUTBDYUU0SE45dU11N2xGTFJuTExKOEptbjlzbVV6bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1631853209);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_photo_path` blob DEFAULT NULL,
  `message` varchar(700) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nim`, `name`, `email`, `email_verified_at`, `prodi`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `profile_photo_path`, `message`, `pekerjaan`, `telepon`, `facebook`, `instagram`, `utype`) VALUES
(9, '3201701003', 'RENDI ABDAN SYAKUR', NULL, NULL, 'Teknik Sipil', '$2y$10$stL0s.JbaMisqysj2cOhley.kLq0CFsZnosetrp8O4Y5CYnDZ.7uG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(10, '3201701004', 'BAYU SYAHRUL NIZAM', NULL, NULL, 'Teknik Sipil', '$2y$10$My0zyRgCsbfv8fQMvYRpe.q1C//HVznxCueyFSwXJE.9Ut52lQkwO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(11, '3201701005', 'F.X.INDRA', NULL, NULL, 'Teknik Sipil', '$2y$10$vcQMBtxYWRJOjLfE0LNtbuxu84EpM.4mwzN99RaEO1IKn87HpjckK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(12, '98100', 'Lee Hi', 'leehi@gmail.com', NULL, 'Seni', '$2y$10$xm0VdYuSzSu7/pHSwUSl0uRBm17Vqy4SF5x53ji8.a28nzFd4mbEi', NULL, NULL, 'f958DGOO424g1vHtg5qAFXq6ZZE2WCMKcQubjaNRgAJiNjJ95lbID8hMy9Y4', NULL, '2021-09-09 01:21:41', 0x70726f66696c652d70686f746f732f54366b53376a4d6a56684f4f6f37614f633071776c346c3156635a763863796733676a6c686436372e6a7067, 'saya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusi a hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusi a hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusi a hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehesaya adalah manusia hehes', 'efawefawefwe fawefawefaewfefawefawefwe fawefawefaewfefawefawefwe fawefawefa', '083424234234523', 'https://www.facebook.com/leehi_hi/', 'https://www.instagram.com/leehi_hi/', 'USR'),
(13, '3201701007', 'MUTIA SETIANI KHAIRUNISA', NULL, NULL, 'Teknik Sipil', '$2y$10$OYPMBvHkKSIosyzluqybEeyDbaJ3je6U6XmspLrAWf53MDbLA21hq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(14, '3201701008', 'FENY TANIA JULIANTI', NULL, NULL, 'Teknik Sipil', '$2y$10$hAhbLHHqc5BuEXzIgcSBZudGtwo1ZBFRV72K27GXOrtON0NK.fMgK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(15, '3201701012', 'SURI WINDIANTI', NULL, NULL, 'Teknik Sipil', '$2y$10$x7TpPRtmTrHvQsRBtI86Ce0gjbq2u9GVklHQrFC5VMe3Sssl3H.Fu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(16, '3201701013', 'MAYA SARI', NULL, NULL, 'Teknik Sipil', '$2y$10$fGw6dMINW0P.ep79Mgei8OggyIPaFIeI.MhYq4v7SNkBZgCjGW1sm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(17, '3201701014', 'DESTI', NULL, NULL, 'Teknik Sipil', '$2y$10$H3E4f4DFMCsQS7UwicEdouRRNyH7awtTWPcH.g8v/nVqp7CVfwrZe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(18, '3201701015', 'DENNY ADHITYA KUSUMA', NULL, NULL, 'Teknik Sipil', '$2y$10$OhLcjJ7fG.cV8HoXFLlMuuLrGNzD3O9ReuWV8JcyySHC8d6YFLNpC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(19, '3201701016', 'FIKRI WIDIANTO', NULL, NULL, 'Teknik Sipil', '$2y$10$6h..x.DqbitNhTXTTkblxucW99LGSVQHeOG9dwHB2wGFsB/0EaIhC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(20, '3201701017', 'DWI SUCI INDAHPURNAMA WATI', NULL, NULL, 'Teknik Sipil', '$2y$10$6iw8uMGNPNhPhHppwpbH5e9dggy7hzQnGJ7x6rReNegKHlsuNgkee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(21, '3201701018', 'ROBI YANTO', NULL, NULL, 'Teknik Sipil', '$2y$10$3OvHEBLx/7SNoHE2RNOLM.ebLpyHIcCMWrZAsCgHVecNUi4W5kbnq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(22, '3201701019', 'TRISNA KHAIRMANSYAH', NULL, NULL, 'Teknik Sipil', '$2y$10$yBfrpIrKsIsoaSU00kqGieDc1PCOhM1NhBQkBFbaDm6JlLdOTw/yO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(23, '3201701020', 'MUHAMMAD RIFQIE', NULL, NULL, 'Teknik Sipil', '$2y$10$1POOm9EdGI.dRevtCoA64ulXw0C9z6G7mLsXASqtKX0m/JiMsDHCK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(24, '3201701021', 'NAMIRA UTARI', NULL, NULL, 'Teknik Sipil', '$2y$10$/dcQ/pPst40zIY52RV4SaeshKoCwOPChGOILw3cUoyO6XPBcpkw5i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(25, '3201701022', 'JERI SUPRIHADI', NULL, NULL, 'Teknik Sipil', '$2y$10$weTqO3GGxTmiVst7VxsZx.7RGItAfqht77eaM7AzAitr3rbKs5Ee.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(26, '3201701023', 'IBNU NAZAR', NULL, NULL, 'Teknik Sipil', '$2y$10$6jbdGFmcpFKKBvTI6reT3.5Vbc2XCl3D9KYXvVuob.PPG1r4Ces/K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(27, '3201701024', 'SITI AMBARWATI RUKMANA', NULL, NULL, 'Teknik Sipil', '$2y$10$4XWo1OPpZrNhlNhTyVdhfuP1pSEBThGSdDvEeP79vEwxJQedwrs.C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(28, '3201701025', 'MUHAMMAD RYLO SUTANTO', NULL, NULL, 'Teknik Sipil', '$2y$10$95IQlbGsFfiwvrxfKGpG7O1MFuBByMudvk8.pbm0D0QjzMngsiM2y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(29, '3201701026', 'FITRA SETIO RAMADHANI', NULL, NULL, 'Teknik Sipil', '$2y$10$vIZb5eMGNOpMNgn8Tn7BX.VcXMR0lrMD9C0q.SkEOouxBUyz8afN.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(30, '3201701027', 'DERY KURNIAWAN', NULL, NULL, 'Teknik Sipil', '$2y$10$2E/YuH4zTOa/idqZOfnJ0OjF20uYx.dKeQZXmC8gqwiMfc5Pdt5Gu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(31, '3201701028', 'SITI HUSNULI FIKRIAH', NULL, NULL, 'Teknik Sipil', '$2y$10$/WBW2OVi4QVZXgVCeNF5ieu7bSuuXzgRecxZkGbIsHBDUaNwTRDXu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(32, '3201701029', 'HERDA MEILYANA', NULL, NULL, 'Teknik Sipil', '$2y$10$hiRv67sLQxbFSOBUFZF0n.89kLwOj2FgwCcXz.3ltQVGdLOTSVlKG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(33, '3201701030', 'MUHAMAD ARDIANSYAH', NULL, NULL, 'Teknik Sipil', '$2y$10$rsN4uh9kbM6h1djCA1c9G.LJqJoMrUeF1cCDZmFhaRHVox4aLx1PS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(34, '3201701031', 'URAY TRIFTA ARMANDA FAHLEVI', NULL, NULL, 'Teknik Sipil', '$2y$10$IWR20GJVOgmRn3uAwXcUaOVl2mP9b9eJcS6tV5dfQC0Crh8VUqZoW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(35, '3201701032', 'RIZKA MAULIDIYAH', NULL, NULL, 'Teknik Sipil', '$2y$10$6YVx7sCDTMZBuc.UUDJ8suITPwMHzSHoSG.IMCyCNE2QezVQuqf0W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(36, '3201701033', 'MOHAMAD MANASIK', NULL, NULL, 'Teknik Sipil', '$2y$10$m03nDtc5.EJqWYsuTZAl0O2LXPW2Nk1E1CnELtAhqmrsOiHTsZspu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(37, '3201701035', 'MUHAMMAD NUR BUDIARTO', NULL, NULL, 'Teknik Sipil', '$2y$10$T1MLb6g2ZzhpdJHBIj17Our0FVxoBSbq1lT0i4ehPhVVQLcWQ/sGq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(38, '3201701036', 'ARRY ALFA REZA', NULL, NULL, 'Teknik Sipil', '$2y$10$ygNUpOlywz//GTRh4qBOQ.B1hVn.CFd6zOodzudWf2N.gQeFyRZG2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(39, '3201701037', 'OKTAFIANDY', NULL, NULL, 'Teknik Sipil', '$2y$10$9LbpdYguZLDkGzC/jYT.Xug3mno5IjN3WKoh3nkoimgU5mFrpnrLm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(40, '3201701038', 'MARIO GALANTE', NULL, NULL, 'Teknik Sipil', '$2y$10$wTDLw6ocuQwAkD2V1uvyYeww6cGrB3IzwlHTSKpuI.rwwJ/v89mma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(41, '3201701040', 'HERI SOFIAN', NULL, NULL, 'Teknik Sipil', '$2y$10$UzJ6cuZ8wBY1tOFMr3YWzubdHn9jQhrhzpASPAqfSsdyKqJugQvFO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(42, '3201701041', 'ABDURAHMAN', NULL, NULL, 'Teknik Sipil', '$2y$10$QnUPxQlAKYgdT6GB1Fh0luIy9Iypojz94kDRD4xfYFAiXEps6lxP6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(43, '3201701042', 'BARRA ASY SYAWALI', NULL, NULL, 'Teknik Sipil', '$2y$10$X71Sa3NGweGWDrYKOfpLoeVWynLWfvAGSYfo5tp.hICNy/I41NKoi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(44, '3201701043', 'KHUSNUL KHOLUK', NULL, NULL, 'Teknik Sipil', '$2y$10$a6KT3NIypHL5poAn.8V.s.8OGmQpf3n.ClTvmPHvt1WSra56aCm7y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(45, '3201701044', 'RESTU MAGHRIBI PRAWANGSA', NULL, NULL, 'Teknik Sipil', '$2y$10$Rng8IhS44EA8sNa4qdML7eXYRqAVOTyr4/He5ks8dE58byjt5Uwhm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(46, '3201701046', 'WINDA KARTIKASARI', NULL, NULL, 'Teknik Sipil', '$2y$10$YTBaysI8Xn6LXVbEAIKvKO/jEX0BV7W70OliAjqUEpf6YMT3dvW1m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(47, '3201701047', 'CARLIE VERIN OKTAVIANI', NULL, NULL, 'Teknik Sipil', '$2y$10$Di1CCMh8kUdZ/hRJRYeMpOcEvaC2kfQfk.wP0stQb1CJyXVGgerJ.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(48, '3201701049', 'IRFAN', NULL, NULL, 'Teknik Sipil', '$2y$10$eOjlx4E6/0woltawwD1Iw.66pGaPD1AQ4Fo7kqXZKXSLNad70AFY6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(49, '3201701051', 'RAKA ARYATHAMA', NULL, NULL, 'Teknik Sipil', '$2y$10$C/stREkNYunAPS4e.VXoQ.f9HkuWgexYDa2lFqks5c5m85Br/H6w.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(50, '3201701052', 'SEPTIAWAN FATURAHMAN', NULL, NULL, 'Teknik Sipil', '$2y$10$CTENawh.tlOBdTtaL/g4bejzKFD3jwewYPdEcp42wtv41tPLlXOYm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(51, '3201701053', 'RICKY OKTARIANDA FOLABESSY', NULL, NULL, 'Teknik Sipil', '$2y$10$96.JgZsOWtVKgSpN8GxpEOeWPL//JX7TIyDm87IIf42gvBz/Xtmou', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(52, '3201701054', 'WASIATUR ROHMAH', NULL, NULL, 'Teknik Sipil', '$2y$10$ZB0mxQ.aA/LqmB5CHIRVUOWjUM2c4TmkBJ8ayJ8d0HNRwx51c.roC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(53, '3201701055', 'MAUDY JUMADELIA AGISTA', NULL, NULL, 'Teknik Sipil', '$2y$10$c5cLgVAIXiFSDQ1nMqcFVuUFy95QIgcETiG7/x7N/wQ.cHfkF9xuK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(54, '3201701056', 'ARYO BAGAS PRABOWO', NULL, NULL, 'Teknik Sipil', '$2y$10$yEFPHSnO4zQWT.QBiOt.uOJe9vF3pv2SbqHntkGVuqGWOi8TzKVt.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(55, '3201701057', 'ANDRIANTO', NULL, NULL, 'Teknik Sipil', '$2y$10$rkvtHZd7GXbq3U6cRuqSh.0HC8YaIQEL1KFQbm3kxCkLwU7omyDlG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(56, '3201701058', 'REZA AUFAR SAVERO', NULL, NULL, 'Teknik Sipil', '$2y$10$9o4vLMNnZ51Ffy4YQld7kOoylp9XVELGe/X1RbeGHpaFojq14iTBW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(57, '3201701060', 'MUHAMMAD FAUZI', NULL, NULL, 'Teknik Sipil', '$2y$10$oQBExCiphnL1C7PmkMEXxOMVP0FUbh5JqCDtzElqog3qNAVLyxl5S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(58, '3201701062', 'OSCAR FAUZI', NULL, NULL, 'Teknik Sipil', '$2y$10$G1qAXWQGyYx/S6wFJgJaGuWAZk5PzXWytVlDkF4N5/U0jswF74r8O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(59, '98000', 'IU', 'kamu@gmail.com', NULL, 'Teknik Sipil', '$2y$10$KS3mPs.GhZTPtWcYd5/9H.QGwdfQ7XWgkVlSAWON9IBBDXH26uN2y', NULL, NULL, '1A8yUSCoMVy4XwFaN8INN3z7PqTo8FFdKeLHqJw0DeF31FebzumkerqdZUTF', NULL, '2021-09-10 01:10:40', 0x70726f66696c652d70686f746f732f7358584f6634526b764434645a45516641526f6b4378587563716c6d5934363272633476447271712e6a7067, 'hehehe  ', 'kamu adalah siapa? kok mau tau aja pekerjaan saya', '085493634931', NULL, NULL, 'USR'),
(60, '3201701064', 'SANDIKA', NULL, NULL, 'Teknik Sipil', '$2y$10$C7YkGWJo8vhq0rmbghLz5eKzxpILQ7k6pIXs9yHUBMXJxAdHg2D06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(61, '3201701065', 'DISNA NOVERALIA', NULL, NULL, 'Teknik Sipil', '$2y$10$dh6brEuMwmmvxgYsblmU8uJO9l6q06a3sNHLoSN/3Xpw6Wdh6oHa2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(62, '3201701066', 'ALBERT KILIMANJARO', NULL, NULL, 'Teknik Sipil', '$2y$10$WGjnmaW0hp4RYzqf0a66Hurm12LWQw4dogPrwOSFKd/QFWpopEQr.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(63, '3201701067', 'STELLA NATHANIA', NULL, NULL, 'Teknik Sipil', '$2y$10$S/7aH5ibB4gvu5QOaqoOquHuCw1J3He5X7d99...Pvuo5oHVDeYsW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(64, '3201701068', 'REZA EFRIANSYAH', NULL, NULL, 'Teknik Sipil', '$2y$10$OsU7qcUsDB0T83APhNmLM.llEUD4iH0dHvCl6rJ0Sq0mzxtGS5hM2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(65, '3201701069', 'ERY RAHMAN', NULL, NULL, 'Teknik Sipil', '$2y$10$cPwrFNYnL9Vh/4e5ezfLwuCCC4LhrjRxfzkN3xsYfuzvzl7tlrbrO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(66, '3201701070', 'MUHAMMAD DZAHRI', NULL, NULL, 'Teknik Sipil', '$2y$10$XWlxIo5EvnvLhgZXhNpF9OjQJDwmoFarKZHEhqb150UScink9ukFy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(67, '3201701071', 'HANNY AULIA.P', NULL, NULL, 'Teknik Sipil', '$2y$10$Pds5UbPwStC0KZPro8S6ieX.V89CCiH3lyAdTv9WNbrRQrr3ejyS.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(68, '3201701073', 'MUHAMMAD RINO BAHARUDIN', NULL, NULL, 'Teknik Sipil', '$2y$10$m8lolmhOK8Wyf5lLg7eLwOp7VPBR0lAdnrq8CxSyHa9tdetezuPJ2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(69, '3201701075', 'WHENDY MULIADENY TRISNA TARIGAN', NULL, NULL, 'Teknik Sipil', '$2y$10$vK4nkNwSpFjWQR9xbHss8OwGag3xNiKrcrw8/PD7dZF16s5V6vxt6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(70, '3201701076', 'JONATAN SALIM', NULL, NULL, 'Teknik Sipil', '$2y$10$iYxYVIMcUEhztYuAzTt/FO.qMkJh2CECPhhKV/g.bx9SnDcki3Rh6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(71, '3201701078', 'DINI TRI SABANIAH', NULL, NULL, 'Teknik Sipil', '$2y$10$NeYbOxIpBN7jlaRfduEfLewPkh9NuOWoMujmLMI.gCMUBJX7YFmXq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(72, '3201701079', 'DEBY EKA MASWAN', NULL, NULL, 'Teknik Sipil', '$2y$10$wN5OgdUFM2J57lfcUc9GyOhmD9MRsKYZ0FBFqL39/RRij2dW.imB2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(73, '3201701080', 'ABDUL RIZAL', NULL, NULL, 'Teknik Sipil', '$2y$10$srrwNiKhyFPhZ.ehBa2Hfuiu2gQeCZLvl1zmTuMXgTMovjsExTTW6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(74, '3201701081', 'BAYU PUJAKUSUMA', NULL, NULL, 'Teknik Sipil', '$2y$10$Hxdr3ZBqKfEDCJtlTzBMKOSAUDiOjHsBS54GH63LYIrfUJQZ4a/vq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(75, '3201701082', 'MUHAMMAD KOJA LIANDRE', NULL, NULL, 'Teknik Sipil', '$2y$10$rRjXmpQrRLBRFZMOk9g4jOPNiiPBVXEihKvHZ.HGfbApPsYdwav4G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(76, '3201701083', 'IIS SAPUTRI', NULL, NULL, 'Teknik Sipil', '$2y$10$yz.SNc8RGRb/ODhVWY4sB.aNWM8jWLUUhgPD54QnbjXHJgJ7p31DG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(77, '3201701084', 'REZA DHARMA PUTRA', NULL, NULL, 'Teknik Sipil', '$2y$10$Mo9VwkfPn4/ZPiA9l4PNzu5RzmPC7bdrGK2qBAMTYqdrWVvhjyw4W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(78, '3201701086', 'SURYANI ADINDA', NULL, NULL, 'Teknik Sipil', '$2y$10$E38E0YRpkrNWp.p.ewrDr.vCAOlwHB6rr/alR8FEjLQOTUZw.qBKK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(79, '3201701087', 'NUR RASIDI', NULL, NULL, 'Teknik Sipil', '$2y$10$ZrQFgsYeFktv.vRZfxNBseybfrStW8UOBVC3nvnPdjvQYX/3ZoI6q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(80, '3201701088', 'ROCKY RUSTANTIO', NULL, NULL, 'Teknik Sipil', '$2y$10$Rhw.f.5691Ir9SSgi7xfyuNQeKgJTcQCwkgGfhx8gwQUrFvycx5Iq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(81, '3201701090', 'WAHYUDIN', NULL, NULL, 'Teknik Sipil', '$2y$10$rS9LpxyRvNf8zUiUSEDIA.IX7QBVB6yNS1nyxy7mlHjEuDaObHg9C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USR'),
(82, 'H1101181021', 'ENRICHO RASIMIN', 'enrichoshen@student.untan.ac.id', NULL, 'Sistem Informasi', '$2y$10$3Y57cUaPbcdc.bcOwu3dfefJ1v8k9t1IsbXUdCGNmNAJpnbOEgjbG', NULL, NULL, 'DyIyliv1ZwUpWvDZuFfjFc81gAAQiF6y2FFgMXxS3QojEIawPITl03IzFn8o', NULL, '2021-09-12 20:13:10', 0x70726f66696c652d70686f746f732f79775077364b61344f5a66363454383147646431746e786467734b707153674244314a4e6259344c2e6a7067, 'oi bisa kah ini ', 'Bisa kan', '089503222998', NULL, NULL, 'ADM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
