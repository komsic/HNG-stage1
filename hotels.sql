

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS hotels;

USE hotels;

CREATE TABLE `hotels` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_state` varchar(150) NOT NULL,
  `h_stars` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `hotels` (`h_id`, `h_name`, `h_state`, `h_stars`) VALUES
(1, 'Eko Hotels and Suites', 'Lagos', 5),
(2, 'Le\'Meridien Hotel', 'Lagos', 5),
(3, 'Sasun Hotels', 'Rivers', 4),
(4, 'Grand Ibro Hotel', 'Abuja', 5),
(5, 'Swiss International Mabisel', 'Rivers', 5);


ALTER TABLE `hotels`
  ADD PRIMARY KEY (`h_id`);


ALTER TABLE `hotels`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

