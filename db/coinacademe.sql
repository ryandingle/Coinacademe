-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2014 at 11:51 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coinacademe`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_user`
--

CREATE TABLE IF NOT EXISTS `about_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `age` bigint(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `a_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `a_title` text NOT NULL,
  `a_course` varchar(255) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('063f12dd55859b573d01c5fc734a0f47', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1410155636, ''),
('0d4a61fecc1cedfe25fe67f94b817de1', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407469622, ''),
('0d66846b99099d84f937a4ac7dfd1a69', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407867817, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"6a6dc8687cd0a3aaa1567f0b91063cb35e68ba62";}'),
('12561739ace2136557d2cba186c63601', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409112995, 'a:9:{s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"9badc0c5efbe3defddb0835924b0e8de2c7eb82a";}'),
('1ae5f26cb3d115c88341d93ef98844c9', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407956984, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"e251ca161727d10ba2de682d96f650a70ec0b118";}'),
('1fa28da008acdb9e542f86fa2a0084ab', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1408096605, ''),
('20e20b093aa9c0f98bc423632bcea108', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; rv:11.0) like Gecko', 1407475022, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"0141deb0c3a0750b816f7bf84ac8d189e15babcb";}'),
('24208ba3b9c992b3828d7311429f2d99', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409113074, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"30398e91de678f68019e78428f221ead3aa1d8a4";}'),
('377ace5a4ec9589ecac1e76f27f74ce4', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407369451, 'a:7:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";}'),
('3d1fe437152b86bda541b737d6b76f8a', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407859869, ''),
('4019ab4386c2508cd92d9578fca2434f', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1410196819, ''),
('410d6cbad13356b2f5e3e0356ceb7dba', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1410146221, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"633d8cfeccf1db057ff3f7b5cb23b6281da1ec88";}'),
('41c1157725e3c261261805db157a5380', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407867858, ''),
('41eb429a74e430a716abc2ad8eedf6b6', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407526944, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"272c61963104e336e9664ec90a18fe7567450aa2";}'),
('4397734526e7a1b96813308b6943444f', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1408991792, 'a:9:{s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"27f5e72e3091145b6a3bef978604a8e0b5c21341";}'),
('44f4022a48af74405f2506bd259b93d7', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407469622, ''),
('45216877bc7a5589d0261cfd9256d8c6', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409111743, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"b03b7255581d37b75e51ded7f8e775ca48d7ee6c";}'),
('486e9132ed0254472746afcf776bfce6', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409561619, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"8e3d202e3825d805ad77d66bf5fdaf7aa0165b9e";}'),
('570bc7fb06fb01b0795ae3bb5ad00816', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409113317, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"34cf1889025a31370c532a5b556856ab35ea4c08";}'),
('5721796beaa9a6b739e59e18ad30278f', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409809011, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"138e98dda9fadfeb0a0431f66f1ac04c3cd889a2";}'),
('5721acada00bd60db848c0803441ed90', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407540998, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"35690020c08a4c0a609ef903f7275e1de242af0f";}'),
('58b3c0bb011e2e02e759cec266ede153', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407913040, ''),
('5cd8e7917a3d8b79c39fdfbdec1da92a', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407469622, ''),
('5f8e2b7e4baa73c1e1a4b6b0aee8897a', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1408998343, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"7a4fc737b7b6fe553dc47afffeabf4c555658cc5";}'),
('629756dd48e17f24382f64508a5d54d5', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409113779, ''),
('6c1515cd2a644c2a5e3176e12b1e7e71', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407469622, ''),
('6ccdf2f771508b23c7e38e29bae1bde8', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407430494, 'a:7:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";}'),
('71d12a3257200e470aafdeda702c0cb6', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407469622, ''),
('73f3935b3869f7a899cd032f6cbd907e', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1410203074, ''),
('7ae4f408ea87f1dc57c17e25acbbe4b7', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407453141, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"2a226b1fb616dc44f3c55c844e5d0d626177fde4";}'),
('8c37bdfa5ce2e6556e31a7ed3b18233a', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407443433, 'a:6:{s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";}'),
('8f9e39c730835e9c5e9a820908e898aa', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409113781, ''),
('8ff2bf1285e17e10be93de2428ee826c', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409113062, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"19a04ad1411cff38dd84fd8c92b88377de059a94";}'),
('979c5f430ad16343c8ac482e5d691b25', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409113118, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"7caabb2bcd4edbea67feb1859ed14d1549c001a1";}'),
('9ac551408610e028a25de76bcff5f04d', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407615433, ''),
('9fcaceb5ee575c5ac319d5783d088748', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1408833982, 'a:9:{s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"24ab281c0c71dd6db396c79014acfe1cc3a56cd5";}'),
('a49f41ef384bf522d35f11162b785d0b', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409552658, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"ff8dcb94d75e5c44487a0ae0e4c3e1cd34f066ee";}'),
('a90dacbb2a588fc33ebebeb10ced9624', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409350365, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"4cd60f153081104e1abdca52b0d0d38ec4963c33";}'),
('a9346bc4bcaeaa040c9934ea16696319', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1410155013, ''),
('ab00db88edf205d91573c1ed6dceffd2', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1410157591, ''),
('ad233f5b4469555e9772f09fc9e88db5', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407610170, ''),
('aeac667af4eec9b91d72ee860f376146', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407776669, ''),
('af86dd4842ca0432ff105202f0902f53', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407609349, ''),
('b2b3ea6b3bc4a0cbf91d2c6a9f7c0d36', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407469622, ''),
('baef0630fe3fd7324657f233fbe0ed46', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407469622, 'a:9:{s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"397e3e42655448e4ae38b6153a579a62ea1de14f";}'),
('bb6919e3156b230a24c869674b984ea1', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409110027, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"83ae1439208125d76cc3a786cc08c311de04d886";}'),
('c5b84a41ae909dbbc815c2cf0b780cad', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409113659, 'a:10:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"4fc17baa47375c78036227f4f85edd301f6bd94b";}'),
('d794080a2fa9ab889c73f64047e8766b', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407608685, ''),
('d996fcace8bef815473663211314a497', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409798105, 'a:9:{s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"7f5eb549edcd696b1cd042742a3d66be12a978b0";}'),
('e30152fb5f93743bab810dd470d13ca8', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1408170421, ''),
('e3a1318a2805f7ffaef8da45e072f9d6', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1408684718, ''),
('e5af0471b69b0e1f4142ebcc4051be5e', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1409103269, 'a:9:{s:9:"logged_in";b:1;s:2:"id";s:1:"5";s:5:"email";s:22:"ryandingle09@gmail.com";s:6:"f_name";s:0:"";s:6:"l_name";s:0:"";s:4:"role";s:2:"11";s:6:"status";s:8:"verified";s:6:"active";s:2:"11";s:9:"login_key";s:40:"7af79984dba917a208cf3ab0e626ef2336f97005";}'),
('e7d7b863a6c049bcd21236ee5b443fcc', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407369463, ''),
('f6363059a9a0652b2c6521f69740ea70', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1408820530, '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `author` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `content` longtext NOT NULL,
  `title` text NOT NULL,
  `status` bigint(20) NOT NULL,
  `modified` datetime NOT NULL,
  `url` varchar(500) NOT NULL,
  `comment_count` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `active` int(11) NOT NULL,
  `verification` varchar(255) NOT NULL,
  `started` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_key` varchar(255) NOT NULL,
  `logout_key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `user_type`, `active`, `verification`, `started`, `login_key`, `logout_key`) VALUES
(5, '', '', 'ryandingle09@gmail.com', '55b95b7b45f7d14ebd81c108414896a1a25a7591', '11', 11, '206779b4b2e5985948605fcbd2c1fa6642f027a7', '2014-08-05 21:28:22', '72397296b16dbae3497ea4a7026706e058b0d146', '640c0d41da03eec3c75b126562ee9c769680627c');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
