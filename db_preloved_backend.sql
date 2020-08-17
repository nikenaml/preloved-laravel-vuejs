-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2020 pada 10.19
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_preloved_backend`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guestbooks`
--

CREATE TABLE `guestbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guestbooks`
--

INSERT INTO `guestbooks` (`id`, `nama_tamu`, `email_tamu`, `asal_tamu`, `nohp_tamu`, `komentar_tamu`, `nilai_tamu`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lanjar Najmudin M.TI.', 'cakrabirawa.najmudin@hartati.asia', 'PD Saptono', '0947 2524 4491', '<p>Placeat dolorem quos ipsa et excepturi. Enim voluptatem reiciendis at cum autem ipsam. Velit rem rerum dolorem ratione maxime. Cumque sint non magni quam vel atque omnis.</p>', '88', NULL, NULL, '2020-06-26 01:07:37'),
(2, 'Eko Ega Prabowo', 'prabawa78@yahoo.com', 'PT Napitupulu Zulaika', '0943 8909 7859', '<p>Qui ab odit a et totam veniam aut. Veniam reiciendis quo odit ut inventore nulla.</p>', '90', NULL, NULL, '2020-06-22 07:38:56'),
(3, 'Dadi Prasetya', 'novitasari.malika@mayasari.asia', 'PT Usada Gunarto (Persero) Tbk', '0652 6287 199', 'Cumque praesentium deleniti est repudiandae ut impedit. Corporis ut harum numquam quisquam quibusdam sint. Molestias nemo in numquam est. Optio omnis omnis laboriosam omnis.', '93', NULL, NULL, NULL),
(4, 'Rafid Eluh Mansur S.Psi', 'winda82@laksita.id', 'PD Riyanti Wacana', '029 7031 4836', 'Doloribus sapiente enim hic dolorem aliquid et. Velit consectetur quibusdam dicta harum ducimus quod. Ut asperiores impedit consequatur sed ipsa qui.', '90', NULL, NULL, NULL),
(5, 'Lala Yulia Wijayanti S.Gz', 'mulyono.nugroho@yahoo.com', 'PD Zulkarnain', '021 0731 1670', 'Sequi qui rerum in cumque voluptatum ipsum. Consequatur enim dolor dolorum maiores ea nisi officiis id. Molestiae qui blanditiis aliquam dolor. Officia nisi sunt non nisi pariatur.', '82', NULL, NULL, NULL),
(6, 'Olga Malik Manullang', 'kayla76@gmail.com', 'PT Wulandari', '025 1112 919', 'Quod nihil nihil qui qui ut. Et id quos in id omnis laudantium quibusdam. Ut ad minima sed aperiam modi quidem.', '88', NULL, NULL, NULL),
(7, 'Lalita Agustina S.E.I', 'juli62@gmail.com', 'PD Yuniar', '(+62) 255 7256 417', 'Ut qui officia laudantium earum eius quis possimus. Nihil fugiat et aut delectus quas. Voluptatibus voluptas officia aut rerum. Nulla velit ipsa quia perferendis ut.', '91', NULL, NULL, NULL),
(8, 'Maimunah Haryanti', 'devi.wahyuni@yahoo.com', 'Perum Sudiati Wijayanti Tbk', '(+62) 22 2461 328', 'Et atque qui sed assumenda quod ut hic. Cum odit et aut quae rerum nam illo dicta. Nihil aliquid veniam et architecto rerum est aspernatur.', '91', NULL, NULL, NULL),
(9, 'Raden Narpati S.Gz', 'kala96@gmail.com', 'UD Suryatmi (Persero) Tbk', '0298 1965 2384', 'Voluptatem temporibus et aperiam tempora. Ipsam doloremque numquam quos ducimus dolor eos. Et est ullam nobis omnis et dolorem. Atque repudiandae officia laboriosam.', '82', NULL, NULL, NULL),
(10, 'Labuh Cagak Nashiruddin', 'dongoran.gina@kurniawan.org', 'UD Wacana Haryanto', '(+62) 809 8198 972', '<p>Ratione nemo omnis consequatur eveniet et exercitationem deserunt consectetur. Autem labore et ullam. Iure dolorum eos sed quae rerum nesciunt. Exercitationem a et voluptatem.</p>', '87', NULL, NULL, '2020-06-24 06:27:52'),
(11, 'Dalimin Santoso', 'kurnia52@samosir.com', 'CV Damanik Megantara Tbk', '(+62) 538 5277 5285', 'Repellat dignissimos recusandae dolor aliquam aliquam voluptatem a. Voluptatem sed sunt facilis animi dolorem velit. Est quasi error ut debitis.', '91', NULL, NULL, NULL),
(12, 'Ulya Nuraini', 'zfarida@maheswara.biz', 'UD Agustina Kusmawati', '(+62) 20 5131 2175', 'Reprehenderit aliquid possimus expedita vel rerum cum quo. Voluptas sed unde vel sed aut eius recusandae quia. Rerum neque voluptas architecto tempore doloremque nesciunt.', '89', NULL, NULL, NULL),
(13, 'Septi Fathonah Suryatmi S.Sos', 'nharyanto@yahoo.com', 'PT Melani Tbk', '(+62) 868 248 749', 'Facilis aperiam dolores consequatur et est et. Ea fugit soluta ducimus tenetur vel quibusdam. Quisquam qui distinctio iste ut.', '93', NULL, NULL, NULL),
(14, 'Reza Jailani', 'betania.latupono@yahoo.com', 'UD Yuliarti', '0452 2009 373', 'Corporis qui fugit enim suscipit. Vero officiis rerum provident quaerat quidem adipisci deleniti enim. Sit sit eos animi. Sunt deleniti nemo porro voluptatum molestias.', '85', NULL, NULL, NULL),
(15, 'Among Habibi', 'purnawati.emas@yuniar.org', 'CV Nababan Tbk', '(+62) 444 3530 2531', 'Quam placeat quos exercitationem dolorem dolorem. Praesentium accusamus eius ex eius. At ipsam quibusdam libero atque. Nisi quia et commodi.', '88', NULL, NULL, NULL),
(16, 'Niken Amelia', 'nikenkenaml@gmail.com', 'Griya Sangiang Mas, Tangerang', '085311321124', '<p>Kemudahan dalam berbelanja, website dapat di akses dengan mudah, tingkatkan ^_^</p>', '100', '2020-06-26 01:05:05', '2020-06-24 07:03:11', '2020-06-26 01:05:05'),
(17, 'Marcel Ivander', 'marceldut@gmail.com', 'UMB TI 2017', '08551006949', '<p>Website sangat mudah diakses</p>', '98', '2020-06-26 01:04:42', '2020-06-25 00:23:16', '2020-06-26 01:04:42'),
(18, 'Windy Wulandari', 'windymore@gmail.com', 'UMB SI 2018', '085155096188', '<p>Website mudah diakses dan memberikan pelayanan yang sangat cepat dan tanggap</p>', '95', '2020-06-26 01:04:14', '2020-06-25 01:39:54', '2020-06-26 01:04:14');

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
(8, '2020_06_06_131314_create_guestbook_table', 5),
(39, '2014_10_12_000000_create_users_table', 6),
(40, '2014_10_12_100000_create_password_resets_table', 6),
(41, '2019_08_19_000000_create_failed_jobs_table', 6),
(42, '2020_03_28_143103_create_products_table', 6),
(43, '2020_03_28_151332_create_product_galleries_table', 6),
(44, '2020_03_28_153650_create_transactions_table', 6),
(45, '2020_03_28_224423_create_transaction_details_table', 6),
(46, '2020_06_07_022806_create_guestbooks_table', 6),
(47, '2020_06_13_082622_create_subscribers_table', 6),
(48, '2020_06_29_073400_create_transfers_table', 7),
(49, '2020_06_30_123748_create_transfers_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `type`, `description`, `price`, `quantity`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Rachella Outer Cardi Berskaa', 'rachella-outer-cardi-berskaa', 'Outer Cardigan Ethnic', '<p>COLOR : Mustard // Brick // Dusty pink // Maroon</p><p><br>Next Collection outer 💕<br>yang satu ini outer dengan motif terbaru bgt 👌🏻<br>Details nya ethnic sekali karena bisa dipakai formal ataupun untuk style hangout dear 😍<br>Harus banget punya yaa maydear karena selain designnya dan pattern kita juga pakai bahan yang lembutnya OMG !! Super duper comfy bgt!!</p>', 87000, 151, NULL, '2020-06-21 05:20:13', '2020-06-26 19:56:11'),
(2, 'Cactus Shirt Top Berska', 'cactus-shirt-top-berska', 'T-shirt Hype', '<p>📎Pilihan Warna : Cream // Black // White<br>Material bahan : cotton rayon<br>All size fit to L<br>.<br><br>Terhapenning bgt ✨✨✨✨<br>Yuhuuuuuuuu 🤗<br>TOP ini bahan nya ademmm bingitsss<br>Motif pict nya lucu bgt gemesinnn dan match bangetssss 😍<br>Harga di olshop lain masih tinggi bgt tapi aku jual paling murah kebangetan 😜😜😜<br>Warna nya bikin kalian gak bisa pilih hanya 1 warna aja 😜<br>Harus banget punya yaa maydear karena selain designnya yg bagus kita juga pakai bahan yang lembutnya OMG !! ,</p>', 65000, 91, NULL, '2020-06-21 05:39:08', '2020-06-25 22:40:27'),
(3, 'Berska Oversize Corduroy', 'berska-oversize-corduroy', 'Jacket Parka Oversize', '<p>📎 Pilihan Warna : Mustard // Maroon // Army. 📎 Size : All Size Fit To XL<br>&nbsp;</p><p>Say hello to next collection from us 😍<br>Ini Salah satu koleksi oversize stuff :) kita beri pattern kombinasi dengan warna yang manis<br>Look so beautiful ❤️<br>Ini pertama kalinya kita rilis oversize dengan bahan semi corduroy premium ini<br>Details dibagian depannya bener bener cakeupp bgt karna ada pocket yang bisa bikin tampilan kalian jd slim 😘<br>🤩</p>', 89000, 169, NULL, '2020-06-21 05:47:30', '2020-06-25 02:19:07'),
(4, 'Eat Everyday Top Tshirt Berska', 'eat-everyday-top-tshirt-berska', 'Tshirt Hype', '<p>📎Pilihan Warna : White // Black // Mustard.<br>&nbsp;</p><p>Fix ini sih lucu bgt 😍 looks deh sebaguss ini lho detailsnya motif nya ..<br>look a like ✔<br>Bahan 100% import ✔<br>Sablon di jamin rapih ✔<br>pembuatan nya super duper lama untuk hasil yang maksimal ✔<br>alhamdulillah bisa stock banyak ✔<br>available<br>buat pecinta t-shirt jangan sampe gk coba top yang satu ini 🤗 .<br>All size fit to L .</p>', 28000, 219, NULL, '2020-06-21 05:56:57', '2020-06-25 00:22:11'),
(5, 'Be Good Tshirt Berska', 'be-good-tshirt-berska', 'Tshirt Hype', '<p>📎Pilihan Warna : Dusty pink // Black // White<br>All size fit to XL<br><br>Fix ini sih lucu bgt 😍 looks deh sebaguss ini lho detailsnya motif nya ..<br>look a like ✔<br>Bahan 100% import ✔<br>Sablon di jamin rapih ✔<br>pembuatan nya super duper lama untuk hasil yang maksimal ✔<br>alhamdulillah bisa stock banyak ✔<br>available<br>buat pecinta t-shirt jangan sampe gk coba top yang satu ini 🤗 .<br>All size fit to L .</p>', 33000, 194, NULL, '2020-06-21 06:06:50', '2020-06-24 04:10:25'),
(6, 'Hodie Paris Berska', 'hodie-paris-berska', 'Sweater Hoodie', '<p>📎Pilihan Warna : Grey // Cream // Dusty blue // Dusty pink // Tosca // Dusty Purple</p><p><br>🚦 BESTSELLERS STUFF 🚦<br>Material bahan : baby terry import<br>All size fit to XL<br>THE BEST CHOICE ✨<br>Hodie Sweater ini bahan nya ademmm bingitsss<br>Motif font colornya lucu bgt gemesinnn dan match bangetssss<br>Warna nya bikin kalian gak bisa pilih hanya 1 warna aja 😜karena cuttingan nya itu pas bgt gak kebesaran atau kekecilan 😍<br>Harus banget punya yaa maydear karena selain designnya yg bagus kita juga pakai bahan yang lembutnya OMG !!</p>', 65000, 72, NULL, '2020-06-21 06:17:20', '2020-06-25 00:22:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `products_id`, `photo`, `is_default`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/product/ZqZzIY5S6tu1yQaCKgwak9wgBAq9EH1wvMr1bFZl.jpeg', 1, NULL, '2020-06-21 05:23:11', '2020-06-21 05:23:11'),
(2, 1, 'assets/product/lpgKJxoMNTah6PFPn9psdhrwWBoQKNL5Lk8K4GCH.jpeg', 0, NULL, '2020-06-21 05:23:30', '2020-06-21 05:23:30'),
(3, 1, 'assets/product/kqiCxsxgrkSTKISvdcxT9QDPUJHmzptRu8x1VJu0.jpeg', 0, NULL, '2020-06-21 05:23:53', '2020-06-21 05:23:53'),
(4, 2, 'assets/product/6CgsRA9IgS6bTsuckthttGEAxEOg9pypgYLGU1cq.jpeg', 1, NULL, '2020-06-21 05:41:32', '2020-06-21 05:41:32'),
(5, 2, 'assets/product/jABy33xayc9wNXPIyCzwy6P4tC6kyBQtDwprSPku.jpeg', 0, NULL, '2020-06-21 05:41:48', '2020-06-21 05:41:48'),
(6, 2, 'assets/product/DbjGmtmBcklKsQexYnix7wUJ0UXnuRtn5Tv3LScd.jpeg', 0, NULL, '2020-06-21 05:41:59', '2020-06-21 05:41:59'),
(7, 3, 'assets/product/HhSkw6p5WRRgvCiqKSlGwLEbNOVA4UUV03z13H4i.jpeg', 1, NULL, '2020-06-21 05:53:48', '2020-06-21 05:53:48'),
(8, 3, 'assets/product/P8t16yxQFmC5sSkpGKxOzkcflo2raB7R2RsV1EUW.jpeg', 0, NULL, '2020-06-21 05:54:23', '2020-06-21 05:54:23'),
(9, 3, 'assets/product/Kgf1SOaBU82rP4Vu93lOALqBX2IwAPZau9bcLwIF.jpeg', 0, NULL, '2020-06-21 05:54:33', '2020-06-21 05:54:33'),
(10, 4, 'assets/product/elsHXKtMK0RbNzOANZf62se1Tms42Na0iNFdzKK7.jpeg', 1, NULL, '2020-06-21 06:01:37', '2020-06-21 06:01:37'),
(11, 4, 'assets/product/SuID3CKrQeQlSXyvwxt7IL2OlyJ4sMHRCrujPM91.jpeg', 0, NULL, '2020-06-21 06:01:49', '2020-06-21 06:01:49'),
(12, 4, 'assets/product/FM8eFglgY08hYkTi4WStnOSs6lNnOniqNfgY0Mmj.jpeg', 0, NULL, '2020-06-21 06:02:09', '2020-06-21 06:02:09'),
(13, 5, 'assets/product/Bdjli7YJbkRPRCtgXVjGG02RC2DCS30qPEcSXHxB.jpeg', 1, NULL, '2020-06-21 06:11:19', '2020-06-21 06:11:19'),
(14, 5, 'assets/product/qDbmgVMtEUO3jDVSjzQUJ96DRPVB27szsonPeFBz.jpeg', 0, NULL, '2020-06-21 06:11:35', '2020-06-21 06:11:35'),
(15, 5, 'assets/product/qjWjyDvvbhjzApInqCTLfYU37zguoFaVMb9QXXZz.jpeg', 0, NULL, '2020-06-21 06:12:28', '2020-06-21 06:12:28'),
(16, 6, 'assets/product/ZVzWtPmYYINXhUl2zIAZtJ6GpdqIKeHFP0zXNwch.jpeg', 1, NULL, '2020-06-21 06:17:56', '2020-06-21 06:17:56'),
(17, 6, 'assets/product/cnD0nTjJxmUEhcxJNNDCi6X34hBSaJZIaL31te6b.jpeg', 0, NULL, '2020-06-21 06:18:07', '2020-06-21 06:18:07'),
(18, 6, 'assets/product/K2NOvkrIb5LCNTAhokwshutpawGJJiQL8XJXJyvc.jpeg', 0, NULL, '2020-06-21 06:18:17', '2020-06-21 06:18:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_berlangganan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_berlangganan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subscribers`
--

INSERT INTO `subscribers` (`id`, `nama_berlangganan`, `email_berlangganan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Naufal Bagaskara', 'opangsquad@gmail.com', NULL, '2020-06-21 07:06:15', '2020-06-27 02:37:33'),
(2, 'Mutia Pratiwi', 'hmangunsong@salahudin.mil.id', NULL, NULL, NULL),
(3, 'Xanana Teguh Anggriawan M.Ak', 'kusumo.artawan@ardianto.in', NULL, NULL, NULL),
(4, 'Ella Mardhiyah', 'salsabila.rajata@hardiansyah.net', '2020-06-22 08:32:40', NULL, '2020-06-22 08:32:40'),
(5, 'Hartaka Xanana Hutapea', 'nadine.hakim@yahoo.co.id', NULL, NULL, NULL),
(6, 'Heryanto Kawaya Maheswara', 'mahesa.damanik@yahoo.co.id', NULL, NULL, NULL),
(7, 'Mulya Cagak Wasita M.Kom.', 'yunita.widiastuti@nashiruddin.co.id', NULL, NULL, NULL),
(8, 'Ayu Purnawati S.Psi', 'prasasta.karen@gmail.com', NULL, NULL, NULL),
(9, 'Digdaya Samosir M.TI.', 'lnamaga@yahoo.co.id', NULL, NULL, NULL),
(10, 'Gandi Waskita', 'ositumorang@yahoo.com', '2020-06-25 23:30:17', NULL, '2020-06-25 23:30:17'),
(11, 'Carla Vera Purwanti S.IP', 'cinthia82@yahoo.com', '2020-06-22 09:43:57', NULL, '2020-06-22 09:43:57'),
(12, 'Niken Amelia', 'niken.amelia123@gmail.com', '2020-06-25 22:50:06', '2020-06-24 12:42:45', '2020-06-25 22:50:06'),
(13, 'Niken Amelia', 'niken.amelia123@gmail.com', '2020-06-25 07:23:52', '2020-06-25 00:24:02', '2020-06-25 07:23:52'),
(14, 'Niken Amelia', 'niken.amelia123@gmail.com', '2020-06-25 07:23:50', '2020-06-25 01:40:30', '2020-06-25 07:23:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `uuid`, `name`, `email`, `number`, `address`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'TRX24191397', 'Niken Amelia', 'nikenkenaml@gmail.com', '085311321124', 'Griya Sangiang Mas, Tangerang', 169400, 'SUCCESS', NULL, '2020-06-22 00:07:11', '2020-06-26 01:06:19'),
(2, 'TRX17201364', 'Miskah Alfiyyah Kulsum', 'miskahal@gmail.com', '081287412219', 'Bitung, Tangerang', 234300, 'SUCCESS', NULL, '2020-06-22 00:18:07', '2020-06-22 08:02:34'),
(3, 'TRX56627511', 'Windy Wulandari', 'windymore@gmail.com', '085119950999', 'Jalan Muara Baru, Penjaringan, Jakarta Utara', 234300, 'FAILED', NULL, '2020-06-24 04:10:25', '2020-06-24 04:17:57'),
(4, 'TRX67388774', 'Ananda Citra', 'citrananda@gmail.com', '085770548764', 'Villa Tangerang Indah, Griya Sangiang Mas', 128700, 'PENDING', NULL, '2020-06-24 04:14:15', '2020-06-24 04:14:15'),
(5, 'TRX48127548', 'Andika Widianto', 'awidianto@gmail.com', '081212723128', 'Cengkareng, Jakarta Barat', 240900, 'PENDING', NULL, '2020-06-24 04:17:08', '2020-06-25 01:50:59'),
(6, 'TRX44238821', 'Zahra Della Alfiani', 'zahradella@gmail.com', '085155096188', 'Palmerah, Jakarta Barat', 102300, 'FAILED', NULL, '2020-06-24 05:22:18', '2020-06-24 05:27:12'),
(7, 'TRX57866824', 'Niken Amelia', 'niken.amelia123@gmail.com', '085311321124', 'Griya Sangiang Mas, Tangerang', 295900, 'PENDING', NULL, '2020-06-25 00:22:11', '2020-06-25 00:22:11'),
(8, 'TRX12042123', 'Niken Amelia', 'niken.amelia123@gmail.com', '085311321124', 'Tangerang', 265100, 'FAILED', NULL, '2020-06-25 01:18:53', '2020-06-25 01:50:50'),
(9, 'TRX47422602', 'Nita Komalasari', 'nitakom@gmail.com', '085119950999', 'Meruya, Jakarta Barat', 265100, 'PENDING', NULL, '2020-06-25 01:38:21', '2020-06-25 01:38:21'),
(10, 'TRX11653271', 'Marcel Ivander', 'marcelndut@gmail.com', '081212723128', 'Batu Ceper, Tangerang', 265100, 'PENDING', NULL, '2020-06-25 02:19:07', '2020-06-25 02:19:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `products_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, '2020-06-22 00:07:11', '2020-06-22 00:07:11'),
(2, 1, 3, NULL, '2020-06-22 00:07:11', '2020-06-22 00:07:11'),
(3, 2, 5, NULL, '2020-06-22 00:18:07', '2020-06-22 00:18:07'),
(4, 2, 1, NULL, '2020-06-22 00:18:07', '2020-06-22 00:18:07'),
(5, 2, 4, NULL, '2020-06-22 00:18:07', '2020-06-22 00:18:07'),
(6, 2, 6, NULL, '2020-06-22 00:18:07', '2020-06-22 00:18:07'),
(7, 3, 5, NULL, '2020-06-24 04:10:25', '2020-06-24 04:10:25'),
(8, 3, 1, NULL, '2020-06-24 04:10:25', '2020-06-24 04:10:25'),
(9, 3, 4, NULL, '2020-06-24 04:10:25', '2020-06-24 04:10:25'),
(10, 3, 6, NULL, '2020-06-24 04:10:25', '2020-06-24 04:10:25'),
(11, 4, 4, NULL, '2020-06-24 04:14:15', '2020-06-24 04:14:15'),
(12, 4, 3, NULL, '2020-06-24 04:14:15', '2020-06-24 04:14:15'),
(13, 5, 3, NULL, '2020-06-24 04:17:08', '2020-06-24 04:17:08'),
(14, 5, 6, NULL, '2020-06-24 04:17:08', '2020-06-24 04:17:08'),
(15, 5, 2, NULL, '2020-06-24 04:17:08', '2020-06-24 04:17:08'),
(16, 6, 6, NULL, '2020-06-24 05:22:18', '2020-06-24 05:22:18'),
(17, 6, 4, NULL, '2020-06-24 05:22:18', '2020-06-24 05:22:18'),
(18, 7, 4, NULL, '2020-06-25 00:22:11', '2020-06-25 00:22:11'),
(19, 7, 6, NULL, '2020-06-25 00:22:11', '2020-06-25 00:22:11'),
(20, 7, 1, NULL, '2020-06-25 00:22:11', '2020-06-25 00:22:11'),
(21, 7, 3, NULL, '2020-06-25 00:22:11', '2020-06-25 00:22:11'),
(22, 8, 3, NULL, '2020-06-25 01:18:53', '2020-06-25 01:18:53'),
(23, 8, 1, NULL, '2020-06-25 01:18:53', '2020-06-25 01:18:53'),
(24, 8, 2, NULL, '2020-06-25 01:18:53', '2020-06-25 01:18:53'),
(25, 9, 3, NULL, '2020-06-25 01:38:21', '2020-06-25 01:38:21'),
(26, 9, 1, NULL, '2020-06-25 01:38:21', '2020-06-25 01:38:21'),
(27, 9, 2, NULL, '2020-06-25 01:38:21', '2020-06-25 01:38:21'),
(28, 10, 3, NULL, '2020-06-25 02:19:07', '2020-06-25 02:19:07'),
(29, 10, 1, NULL, '2020-06-25 02:19:07', '2020-06-25 02:19:07'),
(30, 10, 2, NULL, '2020-06-25 02:19:07', '2020-06-25 02:19:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_transfer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_transfer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_transfer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transfers`
--

INSERT INTO `transfers` (`id`, `nama_transfer`, `email_transfer`, `tgl_transfer`, `bank_customer`, `no_rek_customer`, `total_bayar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nita Komalasari', 'miskahsi@gmail.com', '05 Mei 2020', 'BNI', '0618022663', '175.000', NULL, '2020-06-30 19:35:50', '2020-06-30 19:35:50'),
(2, 'Niken Amelia', 'niken.amelia123@gmail.com', '29 Juni 2020', 'BCA', '7310252527', '2.250.000', NULL, '2020-07-01 01:57:12', '2020-07-01 01:57:12'),
(3, 'Ananda Citra', 'anandacitra@gmail.com', '13 Juni 2020', 'Mandiri', '0700000899992', '127.000', NULL, '2020-07-02 01:08:42', '2020-07-02 01:08:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Niken Amelia', 'niken.amelia123@gmail.com', NULL, '$2y$10$c/cPmDH9itmlwxg2IPmk0ebO6NjacSCGpEPx2xCJqPqPK2DdOh9/a', NULL, '2020-06-21 04:55:47', '2020-06-21 04:55:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guestbooks`
--
ALTER TABLE `guestbooks`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guestbooks`
--
ALTER TABLE `guestbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
