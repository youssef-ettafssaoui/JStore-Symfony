-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 30, 2021 at 05:42 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `shopcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campany` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `complement` longtext COLLATE utf8mb4_unicode_ci,
  `phone` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `full_name`, `campany`, `address`, `complement`, `phone`, `city`, `code_postal`, `country`) VALUES
(2, 2, 'HAJAR SAFIA EDDINE', NULL, 'RUE 09 HAY ELAZHAR', 'APPARTEMENT 234', 652142567, 'KENITRE', 12000, 'MA'),
(3, 4, 'kaoutar oubenaddi', NULL, 'Rue 09', 'Appartement 67', 654231234, 'BENI MELLAL', 90000, 'MA'),
(4, 5, 'Nour  El Houda', 'test', 'kelaa sraghna', 'Rue 67 appartement 67', 66621345, 'Marrakech', 30030, 'MA'),
(5, 7, 'SAAD', NULL, 'HAY EL AZHAR', 'APPARTEMENT 76', 65814255, 'MARRAKECH', 30000, 'MA'),
(6, 7, 'SAAD', NULL, 'HAY EL AZHAR', 'APPARTEMENT 76', 65814255, 'MARRAKECH', 30000, 'MA'),
(8, 1, 'ETTAFSSAOUI YOUSSEF', NULL, 'HAY EL AMAL 01', 'APPARTEMENT 657', 658142766, 'LAAYOUNE', 70000, 'MA');

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `description`, `price`, `created_at`, `update_at`) VALUES
(1, 'ArtisanatMaroc', 'Fast Delivery in 2 weeks', 999, NULL, NULL),
(2, 'Colissima', 'International carrier, Delivery 72 Hours', 1999, NULL, NULL),
(3, 'Maroc Express VIP', 'Ultra-Fast Delivery with insurance, quaranteed packaque in case of loss', 3999, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_price` double NOT NULL,
  `delivery` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `more_informations` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total_ht` double NOT NULL,
  `taxe` double NOT NULL,
  `sub_total_ttc` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`id`, `user_id`, `reference`, `full_name`, `carrier_name`, `carrier_price`, `delivery`, `is_paid`, `more_informations`, `created_at`, `quantity`, `sub_total_ht`, `taxe`, `sub_total_ttc`) VALUES
(1, 1, 'AACB733C-33D1-B06E-4DEF-F520974EB6A7', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 00:41:39', 2, 36, 7.2, 53.19),
(2, 1, '11C6D92C-1525-D388-5218-F9CD96CE4E6E', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 00:42:24', 2, 36, 7.2, 53.19),
(3, 1, '25A57EA6-CED8-5D13-E8A7-64071387E42A', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 00:50:26', 2, 36, 7.2, 53.19),
(4, 1, 'AE2B885A-4E9D-F0D1-6D89-0C35CFDE57F4', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 02:02:33', 2, 66, 13.2, 89.19),
(5, 1, 'D39CD382-5556-FA71-DBCD-B0B37F5B4999', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 11:24:37', 2, 66, 13.2, 89.19),
(6, 1, '77B385FF-8EDC-E185-DEE5-4DB1CF1B0E9A', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 11:25:04', 2, 66, 13.2, 89.19),
(7, 1, 'A2391E83-55F9-C0E6-3468-AC44137089F9', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 11:25:32', 2, 66, 13.2, 89.19),
(8, 1, '60188034-1326-C7CA-BFB0-02994DB231B8', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 11:29:26', 2, 24, 4.8, 38.79),
(9, 1, '28D28B5C-A96E-2381-94C3-E2550C4D1386', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 11:45:46', 2, 24, 4.8, 38.79),
(10, 1, '059FA9AF-0541-E5CC-182D-592D5391873C', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 11:55:36', 2, 24, 4.8, 38.79),
(11, 1, 'EB4E855F-AA60-57E6-8DAA-BC4CA4CF62E6', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 11:56:32', 2, 24, 4.8, 38.79),
(12, 1, '2034ABFE-66D3-3EC0-F4E9-0A82904742DF', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 12:00:53', 2, 24, 4.8, 38.79),
(13, 1, '57584370-1E91-B3F8-21DA-9AD7A8ACC098', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 12:08:51', 2, 180, 36, 225.99),
(14, 1, '9AD60FA6-5109-DA0A-1EF8-99E6A400D6E4', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 20:36:08', 2, 180, 36, 225.99),
(15, 1, '597ACEB1-1663-58A7-671A-D82C034D5468', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 20:51:46', 1, 60, 12, 81.99),
(16, 1, '768593D6-FD2E-D836-1C17-9BA65906ED52', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 20:54:30', 1, 60, 12, 81.99),
(17, 1, '0C6EA35A-B3C4-C457-6669-6D64264D762E', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 21:01:29', 1, 60, 12, 81.99),
(18, 1, '3434036A-B03C-A689-A519-8E5DE74A55F8', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-21 21:08:33', 6, 252, 50.4, 312.39),
(19, 2, 'C4A5BC18-E0AB-6EDC-7D59-379E0244DDCB', 'HAJAR SAFIA EDDINE', 'ArtisanatMaroc', 9.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-21 21:16:49', 5, 210, 42, 261.99),
(20, 2, '68399F2E-D7B7-E027-7D6F-B7F4D1E599CE', 'HAJAR SAFIA EDDINE', 'ArtisanatMaroc', 9.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-21 22:33:39', 5, 210, 42, 261.99),
(21, 2, 'D98DA7D5-1702-982F-85EF-05C3B1A9C737', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 00:52:10', 2, 150, 30, 219.99),
(22, 2, '85991C9C-E75D-7E22-5086-ED61ECF189C4', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 01:02:19', 2, 150, 30, 219.99),
(23, 2, 'E0B72627-D0B6-339B-8EFC-B75715C73B26', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 01:14:18', 2, 150, 30, 219.99),
(24, 2, '606891E9-E090-C39E-524E-0CA23D23128B', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 01:39:12', 2, 150, 30, 219.99),
(25, 2, '28B1E3A5-C2B9-7536-75D5-317A2514105E', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 02:12:20', 1, 60, 12, 111.99),
(26, 2, 'F69D906F-9FB6-7D3B-3C18-A586D21575CD', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 02:13:53', 1, 60, 12, 111.99),
(27, 2, '4ECA8A06-39A2-3C71-C091-451EFE0B3E5A', 'HAJAR SAFIA EDDINE', 'ArtisanatMaroc', 9.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 14:23:45', 5, 210, 42, 261.99),
(28, 2, 'B6B720BE-48D9-BA25-A21B-938DD67D044B', 'HAJAR SAFIA EDDINE', 'ArtisanatMaroc', 9.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 1, NULL, '2021-07-22 14:30:50', 5, 210, 42, 261.99),
(29, 1, '622C66F7-C1DD-0BD5-86FB-8B97E6648599', 'Eddah Bachir', 'Colissima', 19.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, NULL, '2021-07-22 15:31:51', 3, 250, 50, 319.99),
(30, 1, '28C73AC1-5EDB-E8A7-7077-AF1D9368767E', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, NULL, '2021-07-22 15:33:59', 1, 70, 14, 93.99),
(31, 1, '9658C990-F4C4-45AA-C503-C612C85C2244', 'Eddah Bachir', 'Colissima', 19.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-22 20:27:08', 1, 30, 6, 55.99),
(32, 1, 'C8DF7F29-3044-1FF4-9B88-BED1B9ED0646', 'Eddah Bachir', 'Colissima', 19.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, NULL, '2021-07-22 20:30:58', 7, 208, 41.6, 269.59),
(33, 1, '2F4B690F-2164-B420-472E-E3B728790CF0', 'Eddah Bachir', 'Maroc Express VIP', 39.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-22 20:55:28', 3, 102, 20.4, 162.39),
(34, 4, '505D9082-45CB-106A-8735-AC8F3CB6AC0F', 'kaoutar oubenaddi', 'Colissima', 19.99, 'kaoutar oubenaddi[spr]Rue 09[spr]Appartement 67[spr]90000 - BENI MELLAL[spr]MA[spr]', 0, NULL, '2021-07-22 21:08:22', 1, 30, 6, 55.99),
(35, 4, '69ABBD9A-A683-D46B-A22A-8196E41C8A96', 'kaoutar oubenaddi', 'ArtisanatMaroc', 9.99, 'kaoutar oubenaddi[spr]Rue 09[spr]Appartement 67[spr]90000 - BENI MELLAL[spr]MA[spr]', 0, NULL, '2021-07-22 21:09:22', 1, 30, 6, 45.99),
(36, 1, '5E5ED2CD-2A36-022D-CCA0-C192F7090653', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-23 21:44:15', 3, 18, 3.6, 31.59),
(37, 1, 'DAF4124D-0766-ED7F-54DB-92F6CEB537F3', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-23 21:46:44', 3, 18, 3.6, 31.59),
(38, 5, '01967C26-69C4-B2E2-62A9-88CB54D536F5', 'Nour  El Houda', 'Maroc Express VIP', 39.99, 'Nour  El Houda[spr]test[spr]kelaa sraghna[spr]Rue 67 appartement 67[spr]30030 - Marrakech[spr]MA[spr]', 0, NULL, '2021-07-24 00:11:35', 5, 30, 6, 75.99),
(39, 5, '8D5069E0-3A0C-5B9B-0F4B-C671E134896D', 'Nour  El Houda', 'Colissima', 19.99, 'Nour  El Houda[spr]test[spr]kelaa sraghna[spr]Rue 67 appartement 67[spr]30030 - Marrakech[spr]MA[spr]', 0, NULL, '2021-07-24 00:14:51', 3, 186, 37.2, 243.19),
(40, 7, '25AB319C-D31A-A2D3-9A6B-C261E3BE093D', 'SAAD', 'Colissima', 19.99, 'SAAD[spr]HAY EL AZHAR[spr]APPARTEMENT 76[spr]30000 - MARRAKECH[spr]MA[spr]', 1, 'MERCI POUR VOTRE SERVICE', '2021-07-28 20:14:46', 2, 160, 32, 211.99),
(41, 1, '9F9A857F-00F7-90EE-A768-93A2940F84F3', 'ETTAFSSAOUI YOUSSEF', 'ArtisanatMaroc', 9.99, 'ETTAFSSAOUI YOUSSEF[spr]HAY EL AMAL 01[spr]APPARTEMENT 657[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, 'Merci Pour Votre Service', '2021-07-31 23:47:26', 7, 270, 54, 333.99),
(42, 1, '3F0E018E-129C-CBA3-A3F1-822D7B6BD06C', 'ETTAFSSAOUI YOUSSEF', 'ArtisanatMaroc', 9.99, 'ETTAFSSAOUI YOUSSEF[spr]HAY EL AMAL 01[spr]APPARTEMENT 657[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, 'Merci Pour Votre Service', '2021-07-31 23:57:20', 7, 270, 54, 333.99),
(43, 2, '1D6864FB-84AD-39D8-8BDF-ACCB82CF78C8', 'HAJAR SAFIA EDDINE', 'Colissima', 19.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-01-01 00:48:53', 1, 33, 6.6, 59.59);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(11) NOT NULL,
  `carts_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total_ht` double NOT NULL,
  `taxe` double NOT NULL,
  `sub_total_ttc` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`id`, `carts_id`, `product_name`, `product_price`, `quantity`, `sub_total_ht`, `taxe`, `sub_total_ttc`) VALUES
(1, 1, 'Lampe cube', 30, 1, 30, 6, 36),
(2, 1, 'Bougeoir trio', 6, 1, 6, 1.2, 7.2),
(3, 2, 'Lampe cube', 30, 1, 30, 6, 36),
(4, 2, 'Bougeoir trio', 6, 1, 6, 1.2, 7.2),
(5, 3, 'Lampe cube', 30, 1, 30, 6, 36),
(6, 3, 'Bougeoir trio', 6, 1, 6, 1.2, 7.2),
(7, 4, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(8, 5, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(9, 6, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(10, 7, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(11, 8, 'Bougeoir couleur cuivre', 12, 2, 24, 4.8, 28.8),
(12, 9, 'Bougeoir couleur cuivre', 12, 2, 24, 4.8, 28.8),
(13, 10, 'Bougeoir couleur cuivre', 12, 2, 24, 4.8, 28.8),
(14, 11, 'Bougeoir couleur cuivre', 12, 2, 24, 4.8, 28.8),
(15, 12, 'Bougeoir couleur cuivre', 12, 2, 24, 4.8, 28.8),
(16, 13, 'Coffret de céramique', 90, 2, 180, 36, 216),
(17, 14, 'Coffret de céramique', 90, 2, 180, 36, 216),
(18, 15, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(19, 16, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(20, 17, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(21, 18, 'Sac à dos vachette', 60, 2, 120, 24, 144),
(22, 18, 'Lampe cube', 30, 3, 90, 18, 108),
(23, 18, 'Plateau circulaire cuivré', 42, 1, 42, 8.4, 50.4),
(24, 19, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(25, 19, 'Bougeoir couleur cuivre', 12, 1, 12, 2.4, 14.4),
(26, 19, 'Plateau circulaire cuivré', 42, 1, 42, 8.4, 50.4),
(27, 19, 'Coffret de céramique', 90, 1, 90, 18, 108),
(28, 20, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(29, 20, 'Bougeoir couleur cuivre', 12, 1, 12, 2.4, 14.4),
(30, 20, 'Plateau circulaire cuivré', 42, 1, 42, 8.4, 50.4),
(31, 20, 'Coffret de céramique', 90, 1, 90, 18, 108),
(32, 21, 'Coffret de céramique', 90, 1, 90, 18, 108),
(33, 21, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(34, 22, 'Coffret de céramique', 90, 1, 90, 18, 108),
(35, 22, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(36, 23, 'Coffret de céramique', 90, 1, 90, 18, 108),
(37, 23, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(38, 24, 'Coffret de céramique', 90, 1, 90, 18, 108),
(39, 24, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(40, 25, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(41, 26, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(42, 27, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(43, 27, 'Bougeoir couleur cuivre', 12, 1, 12, 2.4, 14.4),
(44, 27, 'Plateau circulaire cuivré', 42, 1, 42, 8.4, 50.4),
(45, 27, 'Coffret de céramique', 90, 1, 90, 18, 108),
(46, 28, 'Boîte de rangement blanche ornée', 33, 2, 66, 13.2, 79.2),
(47, 28, 'Bougeoir couleur cuivre', 12, 1, 12, 2.4, 14.4),
(48, 28, 'Plateau circulaire cuivré', 42, 1, 42, 8.4, 50.4),
(49, 28, 'Coffret de céramique', 90, 1, 90, 18, 108),
(50, 29, 'Coffret de céramique', 90, 1, 90, 18, 108),
(51, 29, 'Lampe khmissa', 90, 1, 90, 18, 108),
(52, 29, 'Cartable en cuir Vachette', 70, 1, 70, 14, 84),
(53, 30, 'Cartable en cuir Vachette', 70, 1, 70, 14, 84),
(54, 31, 'Lampe cube', 30, 1, 30, 6, 36),
(55, 32, 'Sac à dos Cuir et Kilim', 36, 2, 72, 14.4, 86.4),
(56, 32, 'Lampe Aaraki Couleurs', 50, 2, 100, 20, 120),
(57, 32, 'Plateau ovale M1', 12, 2, 24, 4.8, 28.8),
(58, 32, 'Bougeoir couleur cuivre', 12, 1, 12, 2.4, 14.4),
(59, 33, 'Bougeoir trio', 6, 2, 12, 2.4, 14.4),
(60, 33, 'Coffret de céramique', 90, 1, 90, 18, 108),
(61, 34, 'Lampe cube', 30, 1, 30, 6, 36),
(62, 35, 'Lampe cube', 30, 1, 30, 6, 36),
(63, 36, 'Tajine Zouak M2', 6, 3, 18, 3.6, 21.6),
(64, 37, 'Tajine Zouak M2', 6, 3, 18, 3.6, 21.6),
(65, 38, 'Tajine Zouak M2', 6, 1, 6, 1.2, 7.2),
(66, 38, 'Bougeoir trio', 6, 4, 24, 4.8, 28.8),
(67, 39, 'Coffret de céramique', 90, 2, 180, 36, 216),
(68, 39, 'Tajine Zouak M2', 6, 1, 6, 1.2, 7.2),
(69, 40, 'Coffret de céramique', 90, 1, 90, 18, 108),
(70, 40, 'Cartable en cuir Vachette', 70, 1, 70, 14, 84),
(71, 41, 'Lampe cube', 30, 6, 180, 36, 216),
(72, 41, 'Coffret de céramique', 90, 1, 90, 18, 108),
(73, 42, 'Lampe cube', 30, 6, 180, 36, 216),
(74, 42, 'Coffret de céramique', 90, 1, 90, 18, 108),
(75, 43, 'Boîte de rangement blanche ornée', 33, 1, 33, 6.6, 39.6);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'LUMINAIRES', NULL, NULL),
(2, 'POTERIE', NULL, NULL),
(3, 'BOUGIES', NULL, NULL),
(4, 'BOITES', NULL, NULL),
(5, 'CUIR', NULL, NULL),
(6, 'OSIER', NULL, NULL),
(7, 'PLATEAUX', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `is_read` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `content`, `created_at`, `is_read`) VALUES
(1, 'Nour El Houda', 'nour@gmail.com', '0655142766', 'Problem Of Payment', 'I Have a problem in my payment of ur products', '2021-07-22 19:41:01', 1),
(2, 'Nour El Houda', 'nour@gmail.com', '0655142766', 'Problem Of Payment', 'I Have a problem in my payment of ur products', '2021-07-22 19:42:12', 1),
(4, 'Ahmed Ali', 'ahmed@gmail.com', '0658142766', 'Authentification ', 'Problem in the authentification system ', '2021-07-22 21:51:05', NULL),
(5, 'Yassmine kahhoudi', 'yassmine@gmail.com', '0658142766', 'Information request', 'my product that I requested has not yet arrived', '2021-07-22 21:52:56', 1),
(6, 'Maha mahi', 'maha@gmail.com', '0662174322', 'Information request', 'my product that I requested has not yet arrived', '2021-07-22 22:00:52', 1),
(7, 'Mouad Saaidi', 'mouad@gmail.com', '066216532', 'Information request', 'my product that I requested has not yet arrived', '2021-07-22 22:01:09', 1),
(8, 'ETTAFSSAOUI YOUSSEF', 'yettafssaoui2@gmail.com', '0658142766', 'Information Request', 'Firstly, according to your website, there is a minimum duration of four weeks; however, the maximum duration of the programme is not mentioned. I would appreciate it if you could tell me whether it is possible to have extended stays, since I would like to work in one of your hospitals for a period of over six months.\r\n\r\nSecondly, you also inform that only students in their 4th year of medical school can be accepted as volunteers. In my case, I have just finished my 3rd year and I would like to know if I can already be considered a 4th year student.\r\n\r\nFinally, I would appreciate some information about accommodation. Could you please tell me if volunteers are offered a room in a shared house? And if that is so, would you mind telling me if electricity, running water and WIFI are provided?', '2021-07-23 17:53:35', NULL),
(9, 'Ali Baba', 'ettafssaouiyoussef@gmail.com', '0658142766', 'Welcome', 'Hello from France', '2021-07-23 18:49:25', NULL),
(10, 'Ali Baba', 'ettafssaouiyoussef@gmail.com', '0658142766', 'Welcome', 'Hello from France', '2021-07-23 18:49:49', NULL),
(11, 'ETTAFSSAOUI YOUSSEF', 'yettafssaoui2@gmail.com', '0658142766', 'Information Request', 'I am looking forward to you reply and I would appreciate it if you could inform me as soon as\r\npossible.', '2021-07-23 18:54:26', NULL),
(12, 'ALI NASSER', 'contact@gmail.com', '0658142766', 'Information Request', 'Information Request', '2021-07-23 19:00:11', NULL),
(13, 'NOUR', 'NOUR@gmail.com', '0662142345', 'Information Request', 'Information Request', '2021-07-24 00:17:02', NULL),
(14, 'YOUSSSEF', 'YETTAFSSAOUI2@GMAIL.COM', '0658142356', 'INFORMATION Request', 'INFORMATION Request', '2021-07-28 20:22:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210720200636', '2021-07-20 20:06:41', 411),
('DoctrineMigrations\\Version20210722013443', '2021-07-22 01:34:50', 117),
('DoctrineMigrations\\Version20210722171838', '2021-07-22 17:18:58', 104),
('DoctrineMigrations\\Version20210722184752', '2021-07-22 18:48:18', 153);

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_displayed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `description`, `button_message`, `button_url`, `image`, `is_displayed`) VALUES
(1, 'Shop Our Products', 'Get Up to 50% off Today Only!', 'Shop Now', 'http://127.0.0.1:8000/product/coffret-de-ceramique', '03785dd20812b88a2295e9b5f48f6d8b31a7026b.jpeg', 1),
(2, 'Shop Our Products', 'Get Up to 50% off Today Only!', 'Shop Now', 'http://127.0.0.1:8000/product/plateau-circulaire-cuivre', '4a5bc81da8c131715b5758882ada552463ad2a8d.jpeg', 1),
(3, 'Shop Our Products', 'Get Up to 50% off Today Only!', 'Shop Now', 'http://127.0.0.1:8000/product/xsac-a-dos-vachette', '9980ad789beff72491ac8a50f44f57d472aebd5e.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_price` double NOT NULL,
  `delivery` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `more_informations` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total_ht` double NOT NULL,
  `taxe` double NOT NULL,
  `sub_total_ttc` double NOT NULL,
  `stripe_checkout_session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `reference`, `full_name`, `carrier_name`, `carrier_price`, `delivery`, `is_paid`, `more_informations`, `created_at`, `quantity`, `sub_total_ht`, `taxe`, `sub_total_ttc`, `stripe_checkout_session_id`) VALUES
(1, 2, 'E0B72627-D0B6-339B-8EFC-B75715C73B26', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 01:14:18', 2, 150, 30, 219.99, NULL),
(2, 2, '606891E9-E090-C39E-524E-0CA23D23128B', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 1, NULL, '2021-07-22 01:39:12', 2, 150, 30, 219.99, 'cs_test_b1hOavWlN1NxifkO29QfcrJEp9XkSYjPZsL1ObwpBktYriDdSB6uoACexH'),
(3, 2, '28B1E3A5-C2B9-7536-75D5-317A2514105E', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 0, NULL, '2021-07-22 02:12:20', 1, 60, 12, 111.99, 'cs_test_b1P5bdvi5YxGFzKZ3HRWYhMXYw2EuIKBKFXasO7SdGrLHmIiBFLAMm4QkQ'),
(4, 2, 'F69D906F-9FB6-7D3B-3C18-A586D21575CD', 'HAJAR SAFIA EDDINE', 'Maroc Express VIP', 39.99, 'HAJAR SAFIA EDDINE[spr]RUE 09 HAY ELAZHAR[spr]APPARTEMENT 234[spr]12000 - KENITRE[spr]MA[spr]', 1, NULL, '2021-07-22 02:13:53', 1, 60, 12, 111.99, 'cs_test_b1mvj1vT5DYaEVPIqA0lsn35ur9TCDd1EQ69RjDVT7jZ8vTwTjnk7YrhB4'),
(5, 1, '622C66F7-C1DD-0BD5-86FB-8B97E6648599', 'Eddah Bachir', 'Colissima', 19.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, NULL, '2021-07-22 15:31:51', 3, 250, 50, 319.99, 'cs_test_b1oEM2NdP3mhX0cXX8SxyTlBCFQKEKHRJdjGb4t0FXbmzFjALsagF9LABM'),
(6, 1, '28C73AC1-5EDB-E8A7-7077-AF1D9368767E', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-22 15:33:59', 1, 70, 14, 93.99, 'cs_test_b1qxUIJaTgHUm2CGPu5UW1fCGP0vN1vqqOWXS3APjhTe0s924tcVAIkJdB'),
(7, 1, '9658C990-F4C4-45AA-C503-C612C85C2244', 'Eddah Bachir', 'Colissima', 19.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-22 20:27:08', 1, 30, 6, 55.99, 'cs_test_b1naqwGn1wkFmdnp8uF9LImARrkOHpAEMbcbtsj3mTZlvefY1Xu241dv76'),
(8, 1, 'C8DF7F29-3044-1FF4-9B88-BED1B9ED0646', 'Eddah Bachir', 'Colissima', 19.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, NULL, '2021-07-22 20:30:58', 7, 208, 41.6, 269.59, 'cs_test_b12geavlblYR8h8HiBJ05bcflt8ZMSyyycu2yzI9rM5abVi5arly0Ilqx2'),
(9, 1, '2F4B690F-2164-B420-472E-E3B728790CF0', 'Eddah Bachir', 'Maroc Express VIP', 39.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, NULL, '2021-07-22 20:55:28', 3, 102, 20.4, 162.39, 'cs_test_b133FEijScC8lK3iQr1nasUhPOGneoQhrfD2tdLnGxXF6kPRN2Vpfy5QfW'),
(10, 4, '69ABBD9A-A683-D46B-A22A-8196E41C8A96', 'kaoutar oubenaddi', 'ArtisanatMaroc', 9.99, 'kaoutar oubenaddi[spr]Rue 09[spr]Appartement 67[spr]90000 - BENI MELLAL[spr]MA[spr]', 1, NULL, '2021-07-22 21:09:22', 1, 30, 6, 45.99, 'cs_test_b1UZNDQNeEVHWFCfchfYXP8eVVLebxh8QBpf9iLHwZoZRWRtcoxWHm0Yxy'),
(11, 1, '5E5ED2CD-2A36-022D-CCA0-C192F7090653', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, NULL, '2021-07-23 21:44:15', 3, 18, 3.6, 31.59, 'cs_test_b1NfPo50UpaMoj93zAT2Hlyl0JSIQP36SdojP36SS2uG1g6kmC0l1doDET'),
(12, 1, 'DAF4124D-0766-ED7F-54DB-92F6CEB537F3', 'Eddah Bachir', 'ArtisanatMaroc', 9.99, 'Eddah Bachir[spr]Rue Bouqraa[spr]Appartement 98[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, NULL, '2021-07-23 21:46:44', 3, 18, 3.6, 31.59, 'cs_test_b1AQYLP2mOD2httldUgymmTqe2xAusupjIPtz7AVoeptwPgrh2ZbbXAftr'),
(13, 5, '01967C26-69C4-B2E2-62A9-88CB54D536F5', 'Nour  El Houda', 'Maroc Express VIP', 39.99, 'Nour  El Houda[spr]test[spr]kelaa sraghna[spr]Rue 67 appartement 67[spr]30030 - Marrakech[spr]MA[spr]', 0, NULL, '2021-07-24 00:11:35', 5, 30, 6, 75.99, 'cs_test_b1ipizo1V7OCpop8bK4atvaSN79lepm79RiY5FoHPyNomzvNq99m9cCCfE'),
(14, 5, '8D5069E0-3A0C-5B9B-0F4B-C671E134896D', 'Nour  El Houda', 'Colissima', 19.99, 'Nour  El Houda[spr]test[spr]kelaa sraghna[spr]Rue 67 appartement 67[spr]30030 - Marrakech[spr]MA[spr]', 1, NULL, '2021-07-24 00:14:51', 3, 186, 37.2, 243.19, 'cs_test_b16Rz4KFfUEI0ynaRpeiH4neDt41eVeZyHWNwpGwxbVR9XOZkCWHbkBikW'),
(15, 7, '25AB319C-D31A-A2D3-9A6B-C261E3BE093D', 'SAAD', 'Colissima', 19.99, 'SAAD[spr]HAY EL AZHAR[spr]APPARTEMENT 76[spr]30000 - MARRAKECH[spr]MA[spr]', 1, 'MERCI POUR VOTRE SERVICE', '2021-07-28 20:14:46', 2, 160, 32, 211.99, 'cs_test_b1ZJZvThBTwF4leAKvpdIORMiWIs2F5hWMN4jFjUuCJdetDctDQLvuhIrP'),
(16, 1, '9F9A857F-00F7-90EE-A768-93A2940F84F3', 'ETTAFSSAOUI YOUSSEF', 'ArtisanatMaroc', 9.99, 'ETTAFSSAOUI YOUSSEF[spr]HAY EL AMAL 01[spr]APPARTEMENT 657[spr]70000 - LAAYOUNE[spr]MA[spr]', 0, 'Merci Pour Votre Service', '2021-07-31 23:47:26', 7, 270, 54, 333.99, 'cs_test_b1uX4v8d2FnVPXf2gVRxaRVFGZ149ftNhYaZvvRfGVNir1B9Cx2jTwrrlc'),
(17, 1, '3F0E018E-129C-CBA3-A3F1-822D7B6BD06C', 'ETTAFSSAOUI YOUSSEF', 'ArtisanatMaroc', 9.99, 'ETTAFSSAOUI YOUSSEF[spr]HAY EL AMAL 01[spr]APPARTEMENT 657[spr]70000 - LAAYOUNE[spr]MA[spr]', 1, 'Merci Pour Votre Service', '2021-07-31 23:57:20', 7, 270, 54, 333.99, 'cs_test_b18wRAZNXUQwCuXhAt4uzWuDrCrhRqwr12vZOVmi3ePzxqfePrEowBbo6e');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total_ht` double NOT NULL,
  `taxe` double NOT NULL,
  `sub_total_ttc` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `orders_id`, `product_name`, `product_price`, `quantity`, `sub_total_ht`, `taxe`, `sub_total_ttc`) VALUES
(1, 1, 'Coffret de céramique', 90, 1, 90, 18, 108),
(2, 1, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(3, 2, 'Coffret de céramique', 90, 1, 90, 18, 108),
(4, 2, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(5, 3, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(6, 4, 'Sac à dos vachette', 60, 1, 60, 12, 72),
(7, 5, 'Coffret de céramique', 90, 1, 90, 18, 108),
(8, 5, 'Lampe khmissa', 90, 1, 90, 18, 108),
(9, 5, 'Cartable en cuir Vachette', 70, 1, 70, 14, 84),
(10, 6, 'Cartable en cuir Vachette', 70, 1, 70, 14, 84),
(11, 7, 'Lampe cube', 30, 1, 30, 6, 36),
(12, 8, 'Sac à dos Cuir et Kilim', 36, 2, 72, 14.4, 86.4),
(13, 8, 'Lampe Aaraki Couleurs', 50, 2, 100, 20, 120),
(14, 8, 'Plateau ovale M1', 12, 2, 24, 4.8, 28.8),
(15, 8, 'Bougeoir couleur cuivre', 12, 1, 12, 2.4, 14.4),
(16, 9, 'Bougeoir trio', 6, 2, 12, 2.4, 14.4),
(17, 9, 'Coffret de céramique', 90, 1, 90, 18, 108),
(18, 10, 'Lampe cube', 30, 1, 30, 6, 36),
(19, 11, 'Tajine Zouak M2', 6, 3, 18, 3.6, 21.6),
(20, 12, 'Tajine Zouak M2', 6, 3, 18, 3.6, 21.6),
(21, 13, 'Tajine Zouak M2', 6, 1, 6, 1.2, 7.2),
(22, 13, 'Bougeoir trio', 6, 4, 24, 4.8, 28.8),
(23, 14, 'Coffret de céramique', 90, 2, 180, 36, 216),
(24, 14, 'Tajine Zouak M2', 6, 1, 6, 1.2, 7.2),
(25, 15, 'Coffret de céramique', 90, 1, 90, 18, 108),
(26, 15, 'Cartable en cuir Vachette', 70, 1, 70, 14, 84),
(27, 16, 'Lampe cube', 30, 6, 180, 36, 216),
(28, 16, 'Coffret de céramique', 90, 1, 90, 18, 108),
(29, 17, 'Lampe cube', 30, 6, 180, 36, 216),
(30, 17, 'Coffret de céramique', 90, 1, 90, 18, 108);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_informations` longtext COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `is_best_seller` tinyint(1) DEFAULT NULL,
  `is_new_arrival` tinyint(1) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `is_special_offer` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `tags` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `more_informations`, `price`, `is_best_seller`, `is_new_arrival`, `is_featured`, `is_special_offer`, `image`, `quantity`, `created_at`, `tags`, `slug`) VALUES
(1, 'Lampe Aaraki Couleurs', '<div>Suspension en métal peint découpé à la main et verre Aaraki couleurs, inspirée de l\'art de l\'architecture orientale</div><div><br></div>', '<div>Suspension en métal peint découpé à la main et verre Aaraki couleurs, inspirée de l\'art de l\'architecture orientale</div>', 5000, 1, 0, 0, 0, 'd2c76c3badff089c3b6317028644dad666df1a84.jpeg', 30, '2021-07-17 22:48:26', 'luminaires', 'lampe-aaraki'),
(2, 'Lampe cylindre', '<div>Suspension en métal teinté découpé à la main et verre sablé blanc, faite à la main, design inspiré de l\'art de décoration contemporaine<br><br></div><div><br></div>', '<div>Suspension en métal teinté découpé à la main et verre sablé blanc, faite à la main, design inspiré de l\'art de décoration contemporaine</div>', 2200, 0, 1, 0, 0, '5b5b08534f31375d3d77d6711d8c461fc25b5d13.jpeg', 10, '2021-07-17 23:40:32', 'luminaires, applique', 'lampe-cylindre'),
(3, 'Lampe demi boule Aaraki', '<div>Suspension en métal teinté découpé à la main et verre Aaraki couleurs, faite à la main, design inspiré de l\'architecture andalouse</div><div><br></div>', '<div>Suspension en métal teinté découpé à la main et verre Aaraki couleurs, faite à la main, design inspiré de l\'architecture andalouse</div>', 2800, 1, 0, 0, 1, '109749c3d7c46be70badf28e28dec043ec7bdd4d.jpeg', 14, '2021-07-18 00:53:05', 'luminaires', 'lampe-demi-boule-aaraki'),
(4, 'Lampe khmissa', '<div>Suspension en metal cuivré découpé à la main, faite à la main, design inspiré de l\'art de décoration orientale</div>', '<div>Suspension en metal cuivré découpé à la main, faite à la main, design inspiré de l\'art de décoration orientale</div>', 9000, 1, 0, 0, 1, '379fc9dfa744dc0c685e03f62ed3995264f74e4c.jpeg', 16, '2021-07-18 00:57:02', 'lampe, luminaires', 'lampe-khmissa'),
(5, 'Lampe cube', '<div>Suspension en metal teinté découpé à la main, verre blanc et verre Aaraki en couleur, faite à la main, design inspiré de l\'art de décoration orientale</div>', '<div>Suspension en metal teinté découpé à la main, verre blanc et verre Aaraki en couleur, faite à la main, design inspiré de l\'art de décoration orientale</div>', 3000, 0, 1, 0, 0, 'ba59f7bf2a2323d3cf87fe66a0e4b88a7507e5b7.jpeg', 0, '2021-07-18 19:34:10', 'applique, luminaire', 'lampe-cube'),
(6, 'Lanterne motif', '<div>Lanterne en métal teinté, décorée avec peinture sur verre , faite à la main, inspirée des mille et une nuits</div><div><br></div>', '<div>Lanterne en métal teinté, décorée avec peinture sur verre , faite à la main, inspirée des mille et une nuits</div>', 2000, 0, 0, 1, 0, 'faa13385148da79452a316ae5412b5c7f89ea3a7.jpeg', 12, '2021-07-18 19:36:26', 'Facial, Steamer', 'lanterne-motif'),
(7, 'Coffret de céramique', '<div>Ce très original coffret de céramique polychrome de Fès pouvant être utilisée comme bonbonnière, boite à bijoux.etc....est avant tout un bel objet décoratif. Il se distingue par le tressage de maillechort. Ses dessins, artistiquement mis en valeur lui apportent le cachet de la pièce unique crée par le Maître artisan BIYADINA.</div>', '<div>La poterie ou céramique émaillée s\'est développée dans la ville de Fès depuis le début du XIe siècle, des générations de potiers se sont succédées, transmettant leur merveilleux savoir jusqu’à nos jours.<br><br></div><div>Véritable œuvre d\'art, chaque pièce est unique car elle a été façonnée à la main, et a nécessité quatre étapes suivant un long processus. Les ingrédients des couleurs utilisées font partie du savoir ancestral, et restent confidentiels pour obtenir ces incomparables « bleus » de FES.&nbsp;</div><div>BIYADINA présente dans sa collection un ensemble de poteries de Fès, élaborée par nos Maîtres artisans.</div>', 9000, 1, 0, 0, 0, '2faee0cd5f08e53cc710e9d4d16b1d1524a3cf87.jpeg', 13, '2021-07-19 14:37:17', 'Coffret', 'coffret-de-ceramique'),
(8, 'Boîte de rangement blanche ornée', '<div>Boîte ronde , décorée et peinte à la main selon l\'inspiration de la culture impériale de la ville de Fes</div>', NULL, 3300, 0, 1, 1, 0, 'f20ae36711a49849f4113bb87fa093b6a7ff34de.jpeg', 10, '2021-07-19 14:39:46', 'Boîte', 'xboite-de-rangement-blanche-ornee'),
(9, 'Tajine Zouak M2', '<div>Tajine avec motifs, fait à la main, avec dessins géométriques peints à la main, selon la pure tradition ancestrale</div>', '<div>La poterie ou céramique émaillée s\'est développée dans la ville de Fès depuis le début du XIe siècle, elle en est depuis lors, la capitale incontestée. Des générations de potiers se sont succédées, transmettant leur merveilleux savoir jusqu’à nos jours.<br>Véritable œuvre d\'art, chaque pièce est unique car elle a été façonnée à la main, et a nécessité quatre étapes suivant un long processus. Le potier façonne le bloc d\'argile, préparé et travaillé , afin de donner la forme à l\'objet désiré après quoi, il est mis au four pour une première cuisson, il passe ensuite entre les mains des décorateurs qui, sous les ordres du « Maalem » ornent ces pièces de motifs bleus ou polychromes sur fond blanc, de figures géométriques, fleurs, lettres et textes stylisés. Les ingrédients des couleurs utilisées font partie du savoir ancestral, et restent confidentiels pour obtenir ces incomparables « bleus » de FES. Vient ensuite la dernière cuisson qui lui donnera l\'émaillé final.</div><div>BIYADINA présente dans sa collection un ensemble de poteries de Fès, élaborée par nos Maîtres artisans.</div><div>Vous y ferez le choix de pièces uniques, et principalement celles décorées de fils de maillechort.</div>', 600, 1, 0, 0, 1, 'f9998f22aad922b8767f298b14b759c558b80932.jpeg', 0, '2021-07-19 14:42:10', 'poterie', 'xtajine-zouak-m2'),
(10, 'Bougeoir Couleur Métal', '<div>Bougeoir, fait main</div>', '<div>La dinanderie est un art ancestral qui fait référence au travail artistique du métal, le <a href=\"https://fr.wikipedia.org/wiki/Dinandier\">dinandier</a>, met forme les feuilles de métaux comme le <a href=\"https://fr.wikipedia.org/wiki/Cuivre\">cuivre</a>, le <a href=\"https://fr.wikipedia.org/wiki/Laiton\">laiton</a>, l\'<a href=\"https://fr.wikipedia.org/wiki/Argent\">argent</a>, l’aluminium, le maillechort ou encore l\'<a href=\"https://fr.wikipedia.org/wiki/%C3%89tain\">étain</a> à l’aide de différents outils, des marteaux et des ciseaux.</div><div>La dinanderie est un art ancestral de précision qui nécessite beaucoup de temps et la coordination de toute une équipe.</div><div>Au Maroc, la ville de Fès excelle dans l’art de la dinanderie, depuis les premières dynasties qui se sont succédées au Maroc, mais c’est sous les Mérinides que la dinanderie a acquis ses titres de noblesse. &nbsp;</div><div>Les maîtres artisans <a href=\"https://fr.wikipedia.org/wiki/Dinandier\">dinandier</a>s de Biyadina, ont acquis une solide maîtrise de cet art, ils excellent dans la fabrication et le façonnement de théières, plateaux, sucriers, photophores, miroirs etc…</div>', 2200, 0, 1, 1, 0, 'b62b0b2c30ea11fee59af3660434c5c820104dd9.jpeg', 20, '2021-07-19 14:44:23', 'service', 'bougeoir-couleur-metal'),
(11, 'Bougeoir couleur cuivre', '<div>Bougeoir, fait main, en cuivre gravé</div>', '<div>La dinanderie est un art ancestral qui fait référence au travail artistique du métal, le <a href=\"https://fr.wikipedia.org/wiki/Dinandier\">dinandier</a>, met forme les feuilles de métaux comme le <a href=\"https://fr.wikipedia.org/wiki/Cuivre\">cuivre</a>, le <a href=\"https://fr.wikipedia.org/wiki/Laiton\">laiton</a>, l\'<a href=\"https://fr.wikipedia.org/wiki/Argent\">argent</a>, l’aluminium, le maillechort ou encore l\'<a href=\"https://fr.wikipedia.org/wiki/%C3%89tain\">étain</a> à l’aide de différents outils, des marteaux et des ciseaux.<br>La dinanderie est un art ancestral de précision qui nécessite beaucoup de temps et la coordination de toute une équipe.<br>Au Maroc, la ville de Fès excelle dans l’art de la dinanderie, depuis les premières dynasties qui se sont succédées au Maroc, mais c’est sous les Mérinides que la dinanderie a acquis ses titres de noblesse.&nbsp; <br>Les maîtres artisans <a href=\"https://fr.wikipedia.org/wiki/Dinandier\">dinandier</a>s de Biyadina, ont acquis une solide maîtrise de cet art, ils excellent dans la fabrication et le façonnement de théières, plateaux, sucriers, photophores, miroirs etc…</div>', 1800, 1, 0, 0, 1, '5150e52cee35eff64df2d636d083d6457cd18617.jpeg', 10, '2021-07-19 14:45:46', 'Bougeoir', 'bougeoir-couleur-cuivre'),
(12, 'Bougeoir couleur cuivre', '<div>Bougeoir, fait main, en cuivre gravé</div>', '<div>La dinanderie est un art ancestral qui fait référence au travail artistique du métal, le <a href=\"https://fr.wikipedia.org/wiki/Dinandier\">dinandier</a>, met forme les feuilles de métaux comme le <a href=\"https://fr.wikipedia.org/wiki/Cuivre\">cuivre</a>, le <a href=\"https://fr.wikipedia.org/wiki/Laiton\">laiton</a>, l\'<a href=\"https://fr.wikipedia.org/wiki/Argent\">argent</a>, l’aluminium, le maillechort ou encore l\'<a href=\"https://fr.wikipedia.org/wiki/%C3%89tain\">étain</a> à l’aide de différents outils, des marteaux et des ciseaux.</div><div>La dinanderie est un art ancestral de précision qui nécessite beaucoup de temps et la coordination de toute une équipe.</div><div>Au Maroc, la ville de Fès excelle dans l’art de la dinanderie, depuis les premières dynasties qui se sont succédées au Maroc, mais c’est sous les Mérinides que la dinanderie a acquis ses titres de noblesse. &nbsp;</div><div>Les maîtres artisans <a href=\"https://fr.wikipedia.org/wiki/Dinandier\">dinandier</a>s de Biyadina, ont acquis une solide maîtrise de cet art, ils excellent dans la fabrication et le façonnement de théières, plateaux, sucriers, photophores, miroirs etc…</div>', 1200, 0, 1, 0, 0, '0605edfc33e3b195f76b3e2d9d0b3f8db5da32bd.jpeg', 14, '2021-07-19 14:49:28', 'Bougeoir', 'xbougeoir-couleur-cuivre'),
(13, 'Bougeoir trio', '<div>Bougeoir trio, fait main dans le respect du rituel ancestral, motifs peints à la main</div>', '<div>Bougeoir trio, fait main dans le respect du rituel ancestral, motifs peints à la main</div>', 600, 0, 1, 0, 0, 'ab9c33018b651bd0a9df93c7a6acdceef7f1d61b.jpeg', 15, '2021-07-19 14:51:08', 'bougie', 'xbougeoir-trio'),
(14, 'Tajine en bois de Thuya', '<div>Mini Tajine en bois de Thuya, fait à la main dans la région d\'Essaouira, bois au parfum caractéristique et souvent travaillé avec du citronnier.</div>', NULL, 500, 0, 1, 0, 1, '95636a440c0349f1d88afdb5aa50cf409f91ec4e.jpeg', 14, '2021-07-19 14:52:43', 'Tajine, Maroc', 'xtajine-en-bois-de-thuya'),
(15, 'Tajine Maillechort boule', '<div>Tajine décoré avec maillechort et boules avec effet marbré, fait à la main selon la pure tradition ancestrale</div>', NULL, 700, 1, 0, 1, 0, '152e11d99ebdb16099d23950e2c9f205037efc67.jpeg', 20, '2021-07-19 14:56:52', 'Tajine, Maroc', 'xtajine-maillechort-boule'),
(16, 'Sac à dos Cuir et Kilim', '<div>Sac à dos en cuir, astucieux mélange de cuir de vachette et de Kilim, poche centrale, intérieure doublé fermeture par rabat a boucle, 3 poches sur le devant fermeture a boucles&nbsp;<br><br></div><div>NB : Cet articles est fait main, le kilim peut être différents selon l\'arrivage des tapis.</div>', NULL, 3600, 0, 1, 0, 1, 'c147c741ee85c4f17b842d8d1930042d2474c30f.jpeg', 15, '2021-07-19 15:00:14', 'Sac, Cuir', 'sac-a-dos-cuir-et-kilim'),
(17, 'Sac à Dos PM', '<div>Ce sac à dos en cuir véritable marron lustré, combine des poches pour le côté pratique, un format idéal pour ranger des documents, Fermeture par rabat à boucle, bretelles ajustables, un look intemporel pour ne pas manquer de style.</div>', NULL, 4500, 0, 0, 0, 1, '79136edbf3dbef8e97828bc3f2763d3cd9422440.jpeg', 24, '2021-07-19 15:01:41', 'Sac, Cuir', 'sac-a-dos-pm'),
(18, 'Cartable en cuir Vachette', '<div>Cartable cuir vachette orangé&nbsp;<br><br></div><div>2 compartiments 2 poches avant&nbsp;<br><br></div><div>3 poches zippées</div>', '<div>Cartable cuir vachette orangé&nbsp;<br><br></div><div>2 compartiments 2 poches avant&nbsp;<br><br></div><div>3 poches zippées</div>', 7000, 1, 0, 1, 0, '515c9135f8cc1be1b1c6d8f86e88682c6ef0e2c2.jpeg', 12, '2021-07-19 15:03:37', 'Cartable, Cuir', 'cartable-en-cuir-vachette'),
(19, 'Sac à dos vachette', '<div>Sac à dos en cuir de vachette couleur naturelle, cuir écru poche centrale, intérieur doublé fermeture par rabat a boucle. Sur le devant 3 poches fermeture a boucles , à l\'arriére compartiment zippé&nbsp;</div>', '<div>&nbsp;Biyadina fabrique et vous offre un grand choix de sacs à dos. Ils sont conçus&nbsp; par nos soins dans la plus fidèle tradition du travail de nos artisans du Maroc.</div><div>Nous apportons un grand soin au choix des matériaux que nous employons tels que la qualité des cuirs ainsi que pour les accessoires qui le garnissent.</div><div>Nous proposons une gamme de sacs composés de modèles classiques, et d’autres répondants à la tendance du moment.</div><div>Pour les loisirs, les voyages, et bien d’autres usages, nous sommes persuadés que vous trouverez le sac à votre convenance.&nbsp;</div>', 6000, 0, 1, 0, 0, '74e00df43df1e3e267cba09419025fb278ae17ee.jpeg', 17, '2021-07-19 15:08:37', 'Sac, Cuir', 'xsac-a-dos-vachette'),
(20, 'Panier paillette noir', '<div><strong>Cadeau</strong> original pour la <strong>Saint Valentin</strong> Panier en feuille de palmier, fait à la main et décoré avec des paillettes, anses en feuille de palmier recouvertes de cuir tressé.<br><br></div><div>​Panier original et 100% artisanal marocain.</div>', NULL, 2500, 0, 1, 0, 0, 'b21b8cc415b99aa991fd4362d71a54313da9fd36.jpeg', 20, '2021-07-20 22:07:59', 'Panier', 'panier-paillette-noir'),
(21, 'Panier en feuille de palmier', '<div>Panier en feuille de palmier, vous pouvez les utiliser en panier à linge, coffre à jouet, ou coffre de rangement. Ecologique, équitable De l\'artisanat marocain traditionnel</div>', NULL, 2500, 0, 0, 1, 0, 'ed60aa7e24e6b6d647f85b37e8d13d07dda35557.jpeg', 21, '2021-07-20 22:09:38', 'Panier', 'panier-en-feuille-de-palmier'),
(22, 'Panier broderie montagne', '<div>Panier en feuilles de palmier, fait à la main, décoré en fil de laine, longues anses en cuir.<br><br></div><div>​Panier original et 100% artisanal marocain.</div>', NULL, 2500, 0, 0, 1, 0, 'eb2be1871ecb028e6461106081fcde5b9e41e0b7.jpeg', 12, '2021-07-20 22:10:57', 'Panier', 'panier-broderie-montagne'),
(23, 'Plateau circulaire cuivré', '<div>Plateau rond, ciselé et martelé à la main par notre artisan dinandier, avec des motifs géométriques inspirés de l\'art architectural islamique.</div>', NULL, 4200, 0, 1, 0, 1, '755a1b8dc70d4ced342452916f55f1b4679f0538.jpeg', 14, '2021-07-20 22:16:47', 'Plateau', 'plateau-circulaire-cuivre'),
(24, 'Plateau ovale M1', '<div>Plateau en bois de Thuya, fait à la main dans la région d\'Essaouira, bois au parfum caractéristique et souvent travaillé avec du citronnier.</div>', NULL, 1200, 0, 0, 0, 1, 'c0117da531c429f946b213a3657e346176844314.jpeg', 20, '2021-07-20 22:18:36', 'Plateau', 'plateau-ovale-m1'),
(25, 'Plateau oval M2', '<div>Plateau en bois de Thuya, fait à la main dans la région d\'Essaouira, bois au parfum caractéristique et souvent travaillé avec du citronnier.</div>', NULL, 700, 0, 0, 0, 1, '051c4c8d436df01f0e79f519de93ccf0ae7f59d1.jpeg', 15, '2021-07-20 22:20:01', 'Plateau', 'plateau-oval-m2');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `categories_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 4),
(8, 4),
(9, 2),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 2),
(15, 2),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 6),
(21, 6),
(22, 6),
(23, 7),
(24, 7),
(25, 7);

-- --------------------------------------------------------

--
-- Table structure for table `related_product`
--

CREATE TABLE `related_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_product`
--

CREATE TABLE `reviews_product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `username`, `firstname`, `lastname`, `is_verified`) VALUES
(1, 'Yettafssaoui2@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$QU6TWxuaX8nzGZYg2/rm5A$ZnUweuqnVwiBbk0yw/BkhPzwcDMMQ6wAzt7+l13nh+c', 'Yettafssaoui2', 'Youssef', 'Ettafssaoui', 1),
(2, 'Hajar99@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$b5dKxqk3+VTl+ZHzaA7hfA$9oxikxZQkxL+QTEKi2BvTAuf74PeUPVDsh7X7Or5nRo', 'Hajar_99', 'HAJAR', 'SAFIAEDDINE', 0),
(3, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$/kgpWOlMI1T16F+oP6XqdQ$IEdQGSMSD9cQbERS9vGJIIbrtQKzFxAjPgffxmUydrM', 'admin', 'Artisanat', 'Admin', 0),
(4, 'kaoutar.oubenaddi@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$shDeKJwa6+cGC02Kav22EQ$4fUVszarwuFHBTkJvWVAanXwNOv4I1yQ9RygBCX2Pjw', 'kaoutar.oubenaddi', 'kaoutar', 'oubenaddi', 0),
(5, 'nour@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$YiyGigOnsHSf4j8rzgPirw$7jULYvN7x7W00fA0nwNyw5nQRDZPzMunKbm8Vavtiac', 'Nour', 'Nour', 'El Houda', 0),
(6, 'saad@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$ANdVha+O4AxGq7TdBwmIhg$KEtmB2sg/w9poWBHxJRR1xHWED4wtfMhe+c2yHsfXoU', 'Saad_user', 'Saad', 'User', 0),
(7, 'saadd@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$Q4+wU1odQKXkZbSPpYqnLQ$zMtGshKFQnFTbRAIpBm7mXOwSOegdhVU3yfbXktV8YI', 'Saad', 'Saad', 'Saad', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D4E6F81A76ED395` (`user_id`);

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AB912789A76ED395` (`user_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_89FCC38DBCB5C6F5` (`carts_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398A76ED395` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_845CA2C1CFFE9AD6` (`orders_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`,`categories_id`),
  ADD KEY `IDX_A99419434584665A` (`product_id`),
  ADD KEY `IDX_A9941943A21214B7` (`categories_id`);

--
-- Indexes for table `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EC53CE084584665A` (`product_id`);

--
-- Indexes for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Indexes for table `reviews_product`
--
ALTER TABLE `reviews_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E0851D6CA76ED395` (`user_id`),
  ADD KEY `IDX_E0851D6C4584665A` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `related_product`
--
ALTER TABLE `related_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews_product`
--
ALTER TABLE `reviews_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_D4E6F81A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `FK_AB912789A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `FK_89FCC38DBCB5C6F5` FOREIGN KEY (`carts_id`) REFERENCES `Cart` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_845CA2C1CFFE9AD6` FOREIGN KEY (`orders_id`) REFERENCES `order` (`id`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `FK_A99419434584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A9941943A21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `related_product`
--
ALTER TABLE `related_product`
  ADD CONSTRAINT `FK_EC53CE084584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `reviews_product`
--
ALTER TABLE `reviews_product`
  ADD CONSTRAINT `FK_E0851D6C4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_E0851D6CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
