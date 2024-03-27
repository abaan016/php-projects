-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 07:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descrip` text DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `category`, `image`, `title`, `descrip`, `post_date`) VALUES
(4, 'Environmental Conservation', 'nareeta-martin-FoG7PKNYjpM-unsplash.jpg', 'The Importance of Recycling', 'Recycling is an essential practice that helps protect our environment. It involves collecting used materials like paper, plastic, glass, and metal and processing them to make new products. Recycling helps to conserve natural resources, reduce pollution, and save energy.\n\nOne significant benefit of recycling is the conservation of resources. When we recycle materials like paper and metal, we reduce the need to extract raw materials from the earth. This helps to preserve forests, reduce habitat destruction, and protect wildlife.\n\nRecycling also helps to reduce pollution. When materials are recycled, less waste is sent to landfills or incinerators. Landfills can release harmful gases into the atmosphere, while incinerators produce air pollution. By recycling, we can minimize these negative environmental impacts.\n\nMoreover, recycling saves energy. It often takes less energy to recycle materials than to produce new ones from scratch. For example, recycling aluminum cans saves a significant amount of energy compared to producing aluminum from bauxite ore.\n\nIn conclusion, recycling is a simple yet powerful way to protect our planet. By recycling, we can conserve resources, reduce pollution, and save energy. It is important for individuals, businesses, and governments to work together to promote recycling and create a more sustainable future for generations to come.', '2024-02-20 06:20:46'),
(6, 'Health and Wellness', 'gabin-vallet-J154nEkpzlQ-unsplash.jpg', 'The Benefits of Regular Exercise', 'Regular exercise is essential for maintaining good physical and mental health. Exercise not only helps us stay fit but also provides numerous other benefits that contribute to overall well-being.\r\n\r\nFirstly, regular exercise is crucial for maintaining a healthy weight. Engaging in physical activity helps burn calories and build muscle, which can prevent obesity and related health problems such as diabetes and heart disease.\r\n\r\nFurthermore, exercise is vital for promoting cardiovascular health. Activities like walking, jogging, or cycling help strengthen the heart and improve circulation, reducing the risk of heart disease and stroke.\r\n\r\nExercise also plays a significant role in improving mood and reducing stress. Physical activity stimulates the production of endorphins, chemicals in the brain that act as natural mood lifters. Regular exercise can help alleviate symptoms of anxiety and depression, leading to improved mental health.\r\n\r\nMoreover, exercise contributes to better sleep quality. People who exercise regularly tend to fall asleep faster and enjoy deeper, more restorative sleep. This leads to increased energy levels and improved cognitive function during the day.\r\n\r\nIn summary, regular exercise offers a multitude of benefits for both the body and mind. From maintaining a healthy weight to reducing stress and improving sleep quality, exercise is essential for overall well-being. Incorporating physical activity into our daily routine is an investment in our health that pays off in the long run.', '2024-02-20 06:41:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
