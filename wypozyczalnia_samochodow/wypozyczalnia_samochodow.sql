-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sty 26, 2025 at 10:04 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wypozyczalnia_samochodow`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `registration_number` varchar(20) NOT NULL,
  `status` enum('available','rented','waiting') NOT NULL,
  `price_per_day` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `registration_number`, `status`, `price_per_day`, `created_at`) VALUES
(4, 'Toyota', 'Corolla', 'ABC123', 'waiting', 120.50, '2025-01-16 17:43:58'),
(5, 'Ford', 'Fiesta', 'XYZ789', 'rented', 100.00, '2025-01-16 17:43:58'),
(6, 'Honda', 'Civic', 'LMN456', 'rented', 150.75, '2025-01-16 17:43:58'),
(7, 'Porsche', '911', '1234566', 'available', 500.00, '2025-01-18 16:24:40');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_images`
--

CREATE TABLE `car_images` (
  `id` int(11) NOT NULL,
  `imagePath` varchar(1000) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`id`, `imagePath`, `car_id`) VALUES
(1, 'images/ford.webp', 5),
(2, 'images/honda.jpg', 6),
(3, 'images/toyota.webp', 4),
(4, 'images/porsche.jpg', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rentals`
--

CREATE TABLE `rentals` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `rental_end` datetime DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `car_id`, `user_id`, `created_at`, `rental_end`, `confirmed`) VALUES
(10, 4, 2, '2025-01-19 21:09:37', '2025-01-20 22:09:37', 0),
(11, 6, 2, '2025-01-19 21:17:40', '2025-01-20 22:17:40', 0),
(12, 5, 2, '2025-01-20 18:20:54', '2025-01-21 19:20:54', 0),
(13, 6, 1, '2025-01-20 19:58:12', '2025-01-21 20:58:12', 0),
(14, 5, 1, '2025-01-20 20:08:35', '2025-01-21 21:08:35', 0),
(15, 6, 1, '2025-01-20 20:09:01', '2025-01-21 21:09:01', 0),
(16, 5, 2, '2025-01-23 16:23:12', '2025-01-24 17:23:12', 1),
(17, 7, 2, '2025-01-24 22:30:04', '2025-01-25 23:30:04', 1),
(18, 6, 2, '2025-01-24 22:43:39', '2025-01-25 23:43:39', 0),
(19, 6, 2, '2025-01-26 20:44:50', '2025-01-27 21:44:50', 1);

--
-- Wyzwalacze `rentals`
--
DELIMITER $$
CREATE TRIGGER `set_rental_end_after_insert` BEFORE INSERT ON `rentals` FOR EACH ROW BEGIN
    SET NEW.rental_end = DATE_ADD(NEW.created_at, INTERVAL 1 DAY);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `active` tinyint(1) DEFAULT 1,
  `od_kiedy` date DEFAULT NULL,
  `do_kiedy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nazwa`, `active`, `od_kiedy`, `do_kiedy`) VALUES
(1, 'adm', 1, '2025-01-08', NULL),
(2, 'user', 1, '2025-01-08', NULL),
(3, 'handlowiec', 1, '2025-01-08', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `haslo`, `email`, `created_at`) VALUES
(1, 'adm', 'adm', 'ania.nielepiec@wp.pl', '2025-01-13 19:14:23'),
(2, 'user', 'user', 'ania.nielepiec@gmail.com', '2025-01-13 19:16:03'),
(3, 'handlowiec', 'handlowiec', 'handlowiec@wp.pl', '2025-01-20 20:16:05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_number` (`registration_number`);

--
-- Indeksy dla tabeli `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_car_image` (`car_id`);

--
-- Indeksy dla tabeli `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name` (`nazwa`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksy dla tabeli `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_images`
--
ALTER TABLE `car_images`
  ADD CONSTRAINT `fk_car_image` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `rentals_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
