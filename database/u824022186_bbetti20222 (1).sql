-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: nov. 03, 2022 la 01:43 PM
-- Versiune server: 10.5.16-MariaDB-cll-lve
-- Versiune PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `u824022186_bbetti20222`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `concurenti`
--

CREATE TABLE `concurenti` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_votes` int(225) NOT NULL DEFAULT 0,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `concurenti`
--

INSERT INTO `concurenti` (`name`, `count_votes`, `sex`) VALUES
('Oteseanu Alexandra Maria', 6, 'F'),
('Rosu Vlad Florin', 9, 'M'),
('Soare Cristina-Gabriela', 8, 'F'),
('Lupu Dan Mihai', 2, 'M'),
('Cucoanes Georgiana', 2, 'F'),
('Hinsea Mihai', 4, 'M'),
('Paraschiv Irina', 3, 'F'),
('Simion Valentin', 9, 'M'),
('Popa Ioana-Diana', 9, 'F'),
('Borza Iustin-Lucian', 9, 'M'),
('Sandu Diana Ioana', 6, 'F'),
('Pirlog Andrei Cristian', 6, 'M');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `vot_baieti` int(11) DEFAULT 1,
  `vot_fete` int(11) NOT NULL DEFAULT 1,
  `afisare_fete` varchar(255) NOT NULL DEFAULT 'nimeni',
  `afisare_baieti` varchar(255) NOT NULL DEFAULT 'nimeni'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`, `vot_baieti`, `vot_fete`, `afisare_fete`, `afisare_baieti`) VALUES
(10, 'Bogdan V.', 'bogdan_mihail.vlad@stud.etti.upb.ro', '$2y$10$U8dJJjuaSvGh2RAo73ugwuG3FjbYHzFmSNYbHl7yXWvOXxHlmLBXO', 0, 'verified', 0, 0, 'Sandu Diana Ioana', 'Pirlog Andrei Cristian'),
(11, 'Ciobanu Bianca-Andreea', 'bianca.ciobanu2110@stud.etti.upb.ro', '$2y$10$s3fLFq5yCSI0Rpp4iStT8eltnvtbo2rgJ6.n05qJEJVfCDkXN1ZoO', 708366, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(12, 'Gaina Anca-Maria', 'gaina.anca@stud.etti.upb.ro', '$2y$10$Y.tiME6bF/x8ZjKFK6JEDuBx60W9cXF5vDQAvxNCuPh7nsfaqbIzy', 0, 'verified', 0, 0, 'Paraschiv Irina', 'Pirlog Andrei Cristian'),
(13, 'Maria Mara', 'mara_ioana.maria@stud.etti.upb.ro', '$2y$10$UUDPZscSXDTr0NCfl37qC.jBmI.NAeUW0.42MYM2SWVxpVtpZosWO', 879639, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(14, 'Busila Robert', 'robert.busila@stud.etti.upb.ro', '$2y$10$M6ttGvLPIa06r1D5hNGcJumQDG3TJ6uosEsExW3Fyoexoy7Rysvq2', 0, 'verified', 0, 0, 'Cucoanes Georgiana', 'Hinsea Mihai'),
(15, 'Radu Teodor', 'radu_teodor.scurtu@stud.etti.upb.ro', '$2y$10$rnSpPgaFfQzMqW8qNLGUr.TgsoqAsyji8EorvvFMsHA.H5JxQnnOW', 0, 'verified', 0, 0, 'Soare Cristina-Gabriela', 'Lupu Dan Mihai'),
(16, 'LupuMihai', 'dan_mihai.lupu@stud.etti.upb.ro', '$2y$10$y1Xdcd7mPFojK8TrwirTB.3KhGfmKvbEBSmLwWhYn98cWg2Hiu8dq', 0, 'verified', 0, 0, 'Soare Cristina-Gabriela', 'Lupu Dan Mihai'),
(17, 'Teodora Naidin', 'teodora.naidin@stud.etti.upb.ro', '$2y$10$g6U6600Vxj0jiVn8NqjcYeC8KlhJYDY8QB0JObjFHWxm4xsaGwiqW', 0, 'verified', 0, 0, 'Popa Ioana-Diana', 'Borza Iustin-Lucian'),
(18, 'Andreea', 'andreea.macxim@stud.energ.upb.ro', '$2y$10$QXWavEAnOaBq/IWwzU.M1enRXjKpdZt6Po1QVJgApSL5f11P2iJ8i', 0, 'verified', 0, 0, 'Sandu Diana Ioana', 'Pirlog Andrei Cristian'),
(19, 'Nica Bianca', 'bianca_elena.nica@stud.etti.upb.ro', '$2y$10$OlBdrOabFC8jOmTOXZIy8uB7yaAbfTixVmmspxvcq5i3Fe36wNINa', 0, 'verified', 0, 0, 'Popa Ioana-Diana', 'Borza Iustin-Lucian'),
(20, 'Vatafu Eduard', 'eduard.vatafu@upb.ro', '$2y$10$dy0v8kEUmiGle.WGf7ILmON5KPqzpSUXKF8nEnclgBQS.Lk0lkfVu', 187299, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(21, 'Roșu Vlad-Florin ', 'vlad_florin.rosu@upb.ro', '$2y$10$6N7zkanWo/fpAeLbBn4WDev5Xhi3RLVGBdvSOZIaE5vE5w6efUknK', 727346, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(22, 'Lungu Radu', 'radu_mihai.lungu@stud.etti.upb.ro', '$2y$10$2kGmiLSH9.ZcVMBlBoiGde9ocAeYwdOlDxLee0cQ3o5pobZ3j1kDi', 0, 'verified', 0, 0, 'Soare Cristina-Gabriela', 'Hinsea Mihai'),
(23, 'Alex Dău', 'cristian.dau@stud.etti.upb.ro', '$2y$10$lFsEeEErMR8mdkUcmco.N.DZBDo311sQt6TadkOv2q8hZ4PEQNDkq', 0, 'verified', 0, 0, 'Soare Cristina-Gabriela', 'Hinsea Mihai'),
(24, 'Popa', 'ioana_diana.popa@stud.etti.upb.ro', '$2y$10$wV0sOQrt4Udmua4VWH.iz.kR3c9hwsWCYG9PEJdeVT/ntWkJ1.SuC', 0, 'verified', 0, 0, 'Popa Ioana-Diana', 'Borza Iustin-Lucian'),
(25, 'Valentin Simion', 'valentin.simion0607@stud.etti.upb.ro', '$2y$10$cvJopBYygy.eVjN4KH04G.He9eeZbC4.VoB4jqB78DXAj1JQ1cf1a', 0, 'verified', 0, 1, 'nimeni', 'Simion Valentin'),
(26, 'Borza Iustin', 'iustin_lucian.borza@stud.etti.upb.ro', '$2y$10$vuxuPOrmBYyaqEg63ZSYreS/L15zNHV67wa1DIsdMcRjCgnK6W2uK', 0, 'verified', 0, 0, 'Popa Ioana-Diana', 'Borza Iustin-Lucian'),
(27, 'Chiriac Sorin', 'sorin.chiriac@stud.acs.upb.ro', '$2y$10$qCrm7lNVbjyDP0lkGkFmDOCEtBMd/sGtKOx9GKVVGdXB64160gRFy', 0, 'verified', 0, 1, 'nimeni', 'Borza Iustin-Lucian'),
(28, 'Roșu Vlad-Florin ', 'vlad_florin.rosu@stud.etti.upb.ro', '$2y$10$0XHpiMzNgweDwCc5G.NUGeQZxR9x2pm3IzFhd.OamwLr152xVhK5u', 0, 'verified', 0, 1, 'nimeni', 'Rosu Vlad Florin'),
(29, 'Soare Maria-Simona', 'maria_simona.soare@stud.etti.upb.ro', '$2y$10$noURbnAJIKkWvcK1lJTi1e16rQhNpIhtIGT/hv0uA626e49aDpWLm', 0, 'verified', 1, 0, 'Soare Cristina-Gabriela', 'nimeni'),
(30, 'Potîng Ștefan Daniel', 'stefan.poting@stud.etti.upb.ro', '$2y$10$VcKnCFmAdb2U6EJ5zh51uenPHwEhMQuC/aUNfvSkc79.YhhhWtQEC', 0, 'verified', 1, 1, 'nimeni', 'nimeni'),
(31, 'Bleotu Catalin Mihai', 'catalin.bleotu@upb.ro', '$2y$10$bP65RtIq2ouhB4WZAhoHseT2aECw9SeYQHvmpQvJTjtRwZA/UdQb2', 723520, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(32, 'Claudia Olaru', 'elena_claudia.olaru@stud.etti.upb.ro', '$2y$10$v2qaVfhToBXlfWlldx1qL.te15rUyWoUMqNH3C1atalQFmAg83GNq', 0, 'verified', 1, 0, 'Paraschiv Irina', 'nimeni'),
(33, 'Ana Marinescu', 'ana.marinescu0712@stud.etti.upb.ro', '$2y$10$muNjhE7QRbfNrdG.E.SllOUJdRnzg6V5pbZAJzOm4REoq82GIanOC', 0, 'verified', 0, 0, 'Sandu Diana Ioana', 'Pirlog Andrei Cristian'),
(34, 'Badea Elena Diana', 'elena_diana.badea@stud.energ.upb.ro', '$2y$10$SiYDhKuFmWYHFr7dg2zaFOK1NTPLrUUpa1TcIOzkbFvJGVtgN6X5u', 0, 'verified', 1, 0, 'Popa Ioana-Diana', 'nimeni'),
(35, 'Fronea Gabriel', 'gabriel.fronea@stud.etti.upb.ro', '$2y$10$zC4JKNXs2.1j4tjX43QALuMpA28U6wdo57qPzR7QRHoptaoZd.y0S', 0, 'verified', 0, 0, 'Sandu Diana Ioana', 'Simion Valentin'),
(36, 'Mădălin Vasiliu', 'madalin.vasiliu@stud.etti.upb.ro', '$2y$10$.ucfyFufYmm/b9FMUhBlzuxRW4bxQ3T1d5qgBVBjQIpL4YXLPPP.K', 0, 'verified', 0, 0, 'Popa Ioana-Diana', 'Pirlog Andrei Cristian'),
(37, 'Oteșanu Alexandra Maria', 'alexandra.otesanu@stud.etti.upb.ro', '$2y$10$2Y4w7Yyrp/iY57ZZO3Zv6ObRpNSsWejeVclpwvhjftcxSdqgDKJVy', 951914, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(38, 'Șerban Maria-Alexandra', 'maria.serban2001@stud.etti.upb.ro', '$2y$10$5g1Cgyj8nWto99vQB2FaiO8vG43BkLbasMQQa9vIhRtRbYay3jtNq', 0, 'verified', 0, 0, 'Popa Ioana-Diana', 'Pirlog Andrei Cristian'),
(39, 'Riza Maria Alexia', 'alexia.riza@stud.etti.upb.ro', '$2y$10$f4OpGGDBKNK54h7mh3iZ0OImVps9fky7508uvkciSiuiz8PSDghFS', 930500, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(40, 'Andriu Cosmin ', 'cosmin.andriu@stud.etti.upb.ro', '$2y$10$.SaCLk4xJUJXHKXF025ToOgZkZDAR2ChytMRkxJuzcPUnAb1VJn8e', 0, 'verified', 1, 1, 'nimeni', 'nimeni'),
(41, 'cristi', 'cristi.miloiu@stud.etti.upb.ro', '$2y$10$UkcFSbcSWoOg/rjeLaOmfOgDijA2MHzPd4Y2zKcUxc9MD0NanRVBe', 0, 'verified', 1, 1, 'nimeni', 'nimeni'),
(42, 'Alexia Polexe ', 'andreea.polexe@stud.etti.upb.ro', '$2y$10$icDm02f5kOKj0j4s4AMjMuWKfSWr.I75UW0BVcnlb72j65ldUk3qO', 531722, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(43, 'Silvia Patrascu', 'maria.patrascu0305@stud.etti.upb.ro', '$2y$10$eH474mI0Az/x2HQ8aH2cLeA5N7Mpfm22Pjv8afTg/MdCKBnSwWBNe', 0, 'verified', 0, 1, 'nimeni', 'Simion Valentin'),
(44, 'Mitiloagă Camberea Gabriela Alexandra ', 'gabriela.mitiloaga@stud.etti.upb.ro', '$2y$10$Bc29EO1vZhW0Hqw/zioX2umWxhJRJ3kJXQxJmNs2KgepyGPPAvwMy', 0, 'verified', 0, 0, 'Oteseanu Alexandra Maria', 'Rosu Vlad Florin'),
(45, 'Manea Adrian-Cătălin ', 'adrian.manea1109@stud.etti.upb.ro', '$2y$10$cD8QGAgWR1HZgztH46xO2uT/wgoHRxe6gTqT43/vVNO0/Uu//eqwi', 0, 'verified', 1, 0, 'Paraschiv Irina', 'nimeni'),
(46, 'Gabriel ', 'gabriel.curca@stud.etti.upb.ro', '$2y$10$PCKVYUPJsSb5PO7jHOvCIuxfVyB1TQvF5wECxHEr3/1pg8rHDFPVW', 854092, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(47, 'Stamatin Teodor', 'teodor.stamatin@stud.acs.upb.ro', '$2y$10$CIRDlM3fIWHuv0tXDrKruO9yUKi0xa7Rl/BVmwyKqGeSh76b3vJdC', 0, 'verified', 0, 1, 'nimeni', 'Borza Iustin-Lucian'),
(48, 'Mihai Hînsea', 'mihai.hinsea@stud.etti.upb.ro', '$2y$10$t6pHH5hMuo0fhQIWFUK1iuZ8RYIMKpDwuqVwFsB5n6gE8RnvK8f5i', 0, 'verified', 0, 1, 'nimeni', 'Hinsea Mihai'),
(49, 'Raducan Tudor', 'tudor.raducan1510@stud.etti.upb.ro', '$2y$10$kDCVnEQzFcX0UBGjloXXbeLXZaPZxV/wEMusMJLFAFBBBA4dEhRhK', 433794, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(50, 'Adriana Ifrim', 'maria_adriana.ifrim@stud.etti.upb.ro', '$2y$10$H4Xlx2KS3kuXwl2qjgtQn.Kok0I.RydIukgQQA0dMAHLKnTu3bljC', 522395, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(51, 'Șerban Andreea', 'andreea.serban0104@electro.stud.upb.ro', '$2y$10$4b18qVB3PsdMVh1pEPLLi.0JwAmvPbRGPhRMcoRng4TNqx.1c36Vi', 899942, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(52, 'Sabrina', 'sabrina.duda@stud.chimie.upb.ro', '$2y$10$C2moBQRACHsPkqBG39r2seNRtzslVGwH5xvMGxIH4vyDmQQjNrEs6', 495230, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(53, 'Marcu Andreea', 'andreea.marcu1106@stud.etti.upb.ro', '$2y$10$LWmNHuqKgNu4XMrREdT5a.gyRw/SfJOArOnNax8CesYm7rxMgW.2K', 0, 'verified', 1, 0, 'Popa Ioana-Diana', 'nimeni'),
(54, 'Flori', 'florentina.joita02@stud.etti.upb.ro', '$2y$10$Zsf2JNChLi5WUmHlh4Wqa.EE5cyhfGkbxLfxt7cwBTtAuf89Q42pm', 0, 'verified', 1, 0, 'Soare Cristina-Gabriela', 'nimeni'),
(55, 'eu', 'matei.teodorescu02@stud.etti.upb.ro', '$2y$10$9SJ6VvUAFvAHrFVah8WUcuQjVfIv2CfFwyKMT.Ol.nDVMlvLUuvFm', 0, 'verified', 1, 1, 'nimeni', 'nimeni'),
(56, 'Maru', 'marian_alin.stan@energ.stud.upb.ro', '$2y$10$Rnt2QTBF9XdMJSB8zdgkLu3EZdn8RN9siri3Cg/oQn.dyvtTLJxJu', 211240, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(57, 'Bănesaru Andreea-Bianca', 'andreea.banesaru@stud.etti.upb.ro', '$2y$10$VcCsZPZ9OIKFbMVcdjDl/.T068rJDTbtRwD/gNJRGqDj/ttoweOiS', 0, 'verified', 0, 0, 'Oteseanu Alexandra Maria', 'Rosu Vlad Florin'),
(58, 'Simion', 'george.simion1502@stud.trans.upb.ro', '$2y$10$23QH4j2P036X3rZzrVHtl.xnfJjdmDCfqQj1sDnCN3ZWkQOXAyJM.', 559100, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(59, 'Maru', 'marian_alin.stan@stud.energ.upb.ro', '$2y$10$jioAQj5WA9s54uPN6e9JSeFdf4ASplxZ0GnXfC/2iBrUEjsnMtmlW', 0, 'verified', 0, 1, 'nimeni', 'Simion Valentin'),
(60, 'Mirel Jorăscu ', 'mirel.jorascu@stud.etti.upb.ro', '$2y$10$Q4vOuuz50XiiufN7RNYXqeTn/1cBhWss0yRXImpJbqn6H3FRi5.7C', 0, 'verified', 0, 0, 'Sandu Diana Ioana', 'Borza Iustin-Lucian'),
(61, 'Tufan Octavian', 'octavian_ioan.tufan@stud.etti.upb.ro', '$2y$10$T2Qho7KE5LbfpI2x4NJRBeVVa/OxvK6Ebr5IHL2p//ol7Xk61vR7a', 0, 'verified', 0, 1, 'nimeni', 'Simion Valentin'),
(62, 'Moraru Alina-Georgiana', 'alina.moraru2602@stud.etti.upb.ro', '$2y$10$Xmc01TEiZamadWzzPoZWC.VhmGQF9fC9S8.S2LQIqwnV/oE.GZ6T2', 0, 'verified', 1, 0, 'Soare Cristina-Gabriela', 'nimeni'),
(63, 'Delia Blîndu', 'delia.blindu@stud.etti.upb.ro', '$2y$10$DW/U23i82KjrQTil8BtjiO.McWNhGv6Yk9St2vsETQ28xmuRpLJA2', 0, 'verified', 0, 0, 'Cucoanes Georgiana', 'Borza Iustin-Lucian'),
(64, 'Fratiman Bogdan - Gabriel', 'bogdan.fratiman@stud.acs.upb.ro', '$2y$10$Vy9ZvLw5bf6VXdDoKbUkX.gi.vQDIG5jvUc5M/YfK9z05vRz8vObO', 0, 'verified', 0, 1, 'nimeni', 'Borza Iustin-Lucian'),
(65, 'Fata Munte', 'anamaria.aldea@stud.etti.upb.ro', '$2y$10$.Ie37oqJAYUQ9kZo5tKHo.ZfGeS.MYX3sYO/OQUSVokvMkjCKFI7e', 0, 'verified', 0, 0, 'Popa Ioana-Diana', 'Rosu Vlad Florin'),
(66, 'Vidinei Emilia', 'lavinia.vidinei@stud.etti.upb.ro', '$2y$10$aVunyrniY4IjyeMD/.y06OmLjPo3dGxgTSEInegNDo56ZK7ID8Qlu', 0, 'verified', 0, 0, 'Soare Cristina-Gabriela', 'Simion Valentin'),
(67, 'Ioniță Ana-Maria', 'ana_maria.ionita01@stud.etti.upb.ro', '$2y$10$Vl5WtcIlmYA7ZDCrYv1a8ejVn6TWf4aB0VevBPnWbPq/szGskQQcu', 0, 'verified', 0, 0, 'Oteseanu Alexandra Maria', 'Rosu Vlad Florin'),
(68, 'Mihaita ionut ciprian ', 'ionut.mihaita@stud.trans.upb.ro', '$2y$10$uK5dA2hPaE4sjyGF6vha9uYOeI7HlP2/fWFtTEfr.qQvbbxiKKE5u', 0, 'verified', 0, 1, 'nimeni', 'Simion Valentin'),
(69, 'Andreea ', 'andreea.bucur0412@stud.etti.upb.ro', '$2y$10$owHLvvnwbi.tZTlF.Ar0MesXhHxzHVyZKS5GqWL8yYrenkN/RUBKS', 691379, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(70, 'Adina ', 'adina_maria.dobre@stud.etti.upb.ro', '$2y$10$Wl0ekFsg6c5bX3dkxqFbAOV9mKoYW4B99eRPbMpHN.2TzPnJFATR2', 0, 'verified', 0, 1, 'nimeni', 'Simion Valentin'),
(71, 'Davidescu', 'andreea.davidescu@energ.upb.ro', '$2y$10$miSNkbWR2qH8U/OJs7n5IuZyXcIEF.AyCQ75sT9QIk9hPNQTBY.Ji', 235295, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(72, 'Radu Robaciu', 'radu_stefan.robaciu@stud.etti.upb.ro', '$2y$10$.YyD3IWmlDLkIaOWnu/qreGJQnEU6IwiSzkfgy92KMpVNiy8hKQw6', 0, 'verified', 0, 0, 'Sandu Diana Ioana', 'Simion Valentin'),
(73, 'Mara Fereșteanu ', 'mara.feresteanu@stud.etti.upb.ro', '$2y$10$8IJ/PPEzLKuPAd8qHmXlauVuYAPphisOu8TeL9q7oQLiz7B3IOL4a', 0, 'verified', 0, 1, 'nimeni', 'Rosu Vlad Florin'),
(74, 'Lataretu Andrei', 'teodor.lataretu@stud.etti.upb.ro', '$2y$10$nB48VVNVlyuXH31SSoDyb.5L6yMrpkljq/f/G/N0kiwXU7oe.cz/.', 0, 'verified', 0, 0, 'Oteseanu Alexandra Maria', 'Rosu Vlad Florin'),
(75, 'Alex Jujan', 'alex_ionut.jujan@stud.etti.upb.ro', '$2y$10$VYTytPSopTEYSJvwzAbmqeD21NM1TYMYjVQBWAgI1nzTn4meG6J5C', 0, 'verified', 0, 0, 'Oteseanu Alexandra Maria', 'Rosu Vlad Florin'),
(76, 'Ene Ana Maria', 'eneanamaria11@stud.etti.upb.ro', '$2y$10$AocZfLiIA2x.3xBTd8IMG.PqD7OrmnJArPpHgeeYTrcmIcxf6vpJ2', 395240, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(77, 'Giorgia', 'giorgia.boscu@stud.upb.ro', '$2y$10$lffaT/9HxJCDF19NqbXUIeYVeP1TE77n9qbKJ0uvoQsmX1hskU/VW', 755939, 'notverified', 1, 1, 'nimeni', 'nimeni'),
(78, 'Georgiana', 'georgiana.mota@stud.etti.upb.ro', '$2y$10$Lduvd1k2flpNAKpi4Mf/P.Nc58z7q4A.ci7KqpMPdQIeHsBEVBD9C', 0, 'verified', 1, 1, 'nimeni', 'nimeni');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
