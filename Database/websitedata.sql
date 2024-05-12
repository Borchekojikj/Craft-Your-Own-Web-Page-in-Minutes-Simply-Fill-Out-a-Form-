-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 05:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge16_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `websitedata`
--

CREATE TABLE `websitedata` (
  `id` int(11) NOT NULL,
  `urlCoverImage` varchar(255) NOT NULL,
  `mainTitle` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `personDescription` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `urlImage1` varchar(255) NOT NULL,
  `descriptionImage1` varchar(255) NOT NULL,
  `urlImage2` varchar(255) NOT NULL,
  `descriptionImage2` varchar(255) NOT NULL,
  `urlImage3` varchar(255) NOT NULL,
  `descriptionImage3` varchar(255) NOT NULL,
  `descriptionProdServ` varchar(255) NOT NULL,
  `urlLinkedin` varchar(255) NOT NULL,
  `urlFacebook` varchar(255) NOT NULL,
  `urlTwitter` varchar(255) NOT NULL,
  `urlGoogle` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `websitedata`
--

INSERT INTO `websitedata` (`id`, `urlCoverImage`, `mainTitle`, `subtitle`, `personDescription`, `phone`, `location`, `urlImage1`, `descriptionImage1`, `urlImage2`, `descriptionImage2`, `urlImage3`, `descriptionImage3`, `descriptionProdServ`, `urlLinkedin`, `urlFacebook`, `urlTwitter`, `urlGoogle`, `type`) VALUES
(17, 'https://yakimaparks.com//assets/Gilbert-Open-Space_2.jpg', 'Best Pet SHOP! ', 'Let us take care of your furry friend!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptatibus reiciendis dignissimos corrupti expedita voluptate nesciunt sit deleniti. Numquam nesciunt neque excepturi quas explicabo reprehenderit quod voluptatibus ad tempora odit?\r\n', 71226904, 'Dragisha Mishovikj Skopje 1000', 'https://images.squarespace-cdn.com/content/v1/5c6467680cf57d95a64743db/1618328087580-2643I1AGBEXTYW4FJB25/jingle_ball_cat_toy.jpg?format=750w', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptatibus reiciendis dignissimos corrupti expedita voluptate nesciunt sit deleniti. Numquam nesciunt neque excepturi quas explicabo reprehenderit quod voluptatibus ad tempora odit?Lorem', 'https://m.media-amazon.com/images/I/615Ccf+wziL._AC_SL1300_.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptatibus reiciendis dignissimos corrupti expedita voluptate nesciunt sit deleniti. Numquam nesciunt neque excepturi quas explicabo reprehenderit quod voluptatibus ad tempora odit?\r\n', 'https://cdn.shopify.com/s/files/1/0376/6478/4520/products/100000039407-lexi-and-me-cat-toys-blue-4pk-1.jpg?v=1654337116', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptatibus reiciendis dignissimos corrupti expedita voluptate nesciunt sit deleniti. Numquam nesciunt neque excepturi quas explicabo reprehenderit quod voluptatibus ad tempora odit?Provi', 'Provident voluptatibus reiciendis dignissimos corrupti expedita voluptate nesciunt sit deleniti. Numquam nesciunt neque excepturi quas explicabo reprehenderit quod voluptatibus ad tempora odit?', 'https://www.linkedin.com/feed/', 'https://www.facebook.com/', 'https://twitter.com/?lang=en', 'https://www.google.com/', 'Products'),
(18, 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'Main Title!', 'Subtitle!', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt eum, similique eius perferendis voluptatum laborum vitae! Saepe sint accusamus tempore, sit nobis error expedita maxime ullam! Modi esse aperiam possimus!\r\n', 123123123, 'Dragisha Mishovikj Skopje 1000', 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt eum, similique eius perferendis voluptatum laborum vitae! Saepe sint accusamus tempore, sit nobis error expedita maxime ullam! Modi esse aperiam possimus!\r\n', 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt eum, similique eius perferendis voluptatum laborum vitae! Saepe sint accusamus tempore, sit nobis error expedita maxime ullam! Modi esse aperiam possimus!\r\n', 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt eum, similique eius perferendis voluptatum laborum vitae! Saepe sint accusamus tempore, sit nobis error expedita maxime ullam! Modi esse aperiam possimus!\r\n', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt eum, similique eius perferendis voluptatum laborum vitae! Saepe sint accusamus tempore, sit nobis error expedita maxime ullam! Modi esse aperiam possimus!\r\n', 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'https://media.istockphoto.com/id/1337232523/photo/high-angle-view-of-a-lake-and-forest.webp?s=2048x2048&w=is&k=20&c=HUkCp1sJPh7ymFrdJD3iTuSr_Aas-TEnphd5cdhs58M=', 'Products'),
(19, 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'Main Title Page', 'Subtitle of Page', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ea similique eveniet voluptates eaque autem, iusto rerum dolor perferendis. Ullam commodi quidem animi quam suscipit quis, voluptates sunt facilis dolorum!\r\n', 389, 'Dragisha Mishovikj Skopje 1000', 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ea similique eveniet voluptates eaque autem, iusto rerum dolor perferendis. Ullam commodi quidem animi quam suscipit quis, voluptates sunt facilis dolorum!\r\n', 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ea similique eveniet voluptates eaque autem, iusto rerum dolor perferendis. Ullam commodi quidem animi quam suscipit quis, voluptates sunt facilis dolorum!\r\n', 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ea similique eveniet voluptates eaque autem, iusto rerum dolor perferendis. Ullam commodi quidem animi quam suscipit quis, voluptates sunt facilis dolorum!\r\n', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ea similique eveniet voluptates eaque autem, iusto rerum dolor perferendis. Ullam commodi quidem animi quam suscipit quis, voluptates sunt facilis dolorum!\r\n', 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg', 'Products');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `websitedata`
--
ALTER TABLE `websitedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `websitedata`
--
ALTER TABLE `websitedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
