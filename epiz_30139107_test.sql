-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.byetcluster.com
-- Generation Time: Oct 22, 2021 at 12:40 PM
-- Server version: 5.7.35-38
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30139107_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `asset_name` varchar(50) NOT NULL,
  `asset_value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`asset_name`, `asset_value`) VALUES
('docker', 'assets/images/docker.png'),
('experience1', 'assets/images/blog-image-1-940x460.jpg'),
('experience2', 'assets/images/blog-image-2-940x460.jpg'),
('git', 'assets/images/git.png'),
('hibernate', 'assets/images/hibernate.png'),
('java', 'assets/images/java.png'),
('kubernetes', 'assets/images/kubernetes.png'),
('linux', 'assets/images/linux.jpg'),
('mysql', 'assets/images/mysql.png'),
('postgre', 'assets/images/postgre.jpg'),
('project1', 'assets/images/project1.png'),
('project2', 'assets/images/project2.png'),
('project3', 'assets/images/project3.jpg'),
('spring', 'assets/images/spring.png'),
('springboot', 'assets/images/springboot.png'),
('vue', 'assets/images/vue.png'),
('whoami', 'assets/images/about-1-570x350.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config_name` varchar(50) NOT NULL,
  `config_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_name`, `config_value`) VALUES
('alamat', 'Jalan 14 No. 54 02/09, Rw No.9, RT.002/RW.009, Bintara, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17134'),
('company', '2'),
('descaboutme', 'An enthusiastic learner especially about technology and security system. Always looking for best practices in any project and any task. I work well in a team and individually'),
('email', 'adamikhsan89@gmail.com'),
('gmaps', 'https://www.google.com/maps/place/Toko+A3/@-6.2309297,106.9612083,17z/data=!3m1!4b1!4m5!3m4!1s0x2e698c60e4779971:0x899b2e5b3afc2f5d!8m2!3d-6.230935!4d106.963397'),
('iframe', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.248542144881!2d106.96120831436059!3d-6.230929662754243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c60e4779971%3A0x899b2e5b3afc2f5d!2sToko%20A3!5e0!3m2!1sen!2sid!4v1634898118202!5m2!1sen!2sid'),
('jobimmobi', 'Testing a Web and Android Application before release to make sure application free bugs and accept requirements'),
('jobjatis', 'Develop and design system or application as a backend developer using java programming language and mostly using spring boot framework'),
('journey1', 'I am a graduate of computer network engineering vocational school who is currently studying at the Pembangunan Jaya University, faculty of informatics engineering.'),
('journey2', 'Started his career as a tester, then attended bootcamp as a java developer, and finally passed the test and officially became a software engineer'),
('language', '3'),
('linkastrapay', 'https://astrapay.com/'),
('linkcaready', 'https://caready.co.id/'),
('Linkedin', 'https://www.linkedin.com/in/adam-ichsan-rizaldi-998090120/'),
('linkmaps', 'https://maps.google.com/maps?q=Jl.+Swadaya+VIII+No.51,+RT.4%2FRW.14,+Duren+Sawit,+Kec.+Duren+Sawit,+Kota+Jakarta+Timur,+Daerah+Khusus+Ibukota+Jakarta+13440&ie=UTF8&iwloc=&output=embed'),
('linkxprivate', 'https://xprivate.education/'),
('nohp', '0812-9619-3008'),
('projects', '4'),
('stacks', '>10');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `dir`) VALUES
(1, 'Home', 'index.php'),
(2, 'Experience', 'experience.php'),
(3, 'About Me', 'about.php'),
(4, 'Projects', 'projects.php'),
(5, 'Contact', 'contact.php'),
(6, 'Stacks', 'stacks.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD UNIQUE KEY `asset_asset_name_uindex` (`asset_name`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD UNIQUE KEY `config_config_name_uindex` (`config_name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD UNIQUE KEY `menu_id_uindex` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
