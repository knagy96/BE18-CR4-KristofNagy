/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `short_description` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(50) NOT NULL,
  `publish_date` year(4) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(3, 'Many Waters', 'https://cdn.pixabay.com/photo/2015/11/19/21/10/gla', '541225', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam volu', 'Book', 'Madeleine ', 'L Engle', 'ViennaPublishers', 'Vienna', '2018', 'reserved');
INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(4, 'No Highway', 'https://cdn.pixabay.com/photo/2015/11/19/21/10/gla', '74582', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam volu', 'Book', 'Nevil', 'Shute', 'ViennaPublishers', 'Vienna', '2004', 'available');
INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(5, 'The Painted Veil', 'https://cdn.pixabay.com/photo/2015/11/19/21/10/gla', '65474', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam volu', 'Book', 'W. Somerset', 'Maugham', 'EuropaPublishing', 'Berlin', '2009', 'reserved');
INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(6, 'Blessing And Miracles', 'https://cdn.pixabay.com/photo/2013/03/02/01/25/dvd', '45129', 'Auf »Blessings and Miracles« liefert Musiklegende und Gitarrenmeister Carlos Santana eines der ehrgeizigsten, inspiriertesten und schlichtweg magischs', 'CD', 'Santana', 'Santana', 'Santana Music', 'USA', '2014', 'available'),
(7, 'A Town Called Paradise', 'https://cdn.pixabay.com/photo/2013/03/02/01/25/dvd', '142228', 'Tiësto zählt zu den bekanntesten und bedeutendsten Größen des Genres mit mehreren Millionen Fans auf der ganzen Welt. Er wurde bereits mehrfach für de', 'CD', 'Tiesto', 'Tiesto', 'Tiesto Music', 'Malmö', '2017', 'reserved'),
(8, 'Writtin With an Accent', 'https://cdn.pixabay.com/photo/2013/03/02/01/25/dvd', '54415', 'Mary Cappello, Louise DeSalvo, Sandra M. Gilbert, Maria Mazziotti Gillan, Carole Maso, Agnes Rossi. These are some of the best-known Italian American ', 'CD', 'Edvige', 'Giunta', 'JS Music', 'Madrid', '2020', 'available'),
(9, 'John Wick: Chapter 4', 'https://cdn.pixabay.com/photo/2015/09/15/17/18/vec', '54896', 'The latest installment of the John Wick franchise adds some exciting talent to the cast of characters (Hiroyuki Sanada, Bill Skarsgård, and Donnie Yen', 'DVD', 'Chad', 'Stahelski', 'JVV', 'Hollywood', '2023', 'reserved'),
(10, 'The Lord Of The Rings', 'https://cdn.pixabay.com/photo/2015/09/15/17/18/vec', '15425', 'Epic drama set thousands of years before the events of J.R.R. Tolkien\'s \'The Hobbit\' and \'The Lord of the Rings\' follows an ensemble cast of character', 'DVD', 'Patrick', 'McKay', 'IMDB', 'Hollywood', '2022', 'available'),
(13, 'sadas', 'https://cdn.pixabay.com/photo/2016/04/30/13/12/sut', 's458', 'cd', 'sadasdas', 'sdas', 'asd', 'sadsa', 'sdasdas', '2012', 'available');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;