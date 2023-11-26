	CREATE TABLE `navpages` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(255) NOT NULL,
 PRIMARY KEY (`id`));
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Homepage');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Categories');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'News');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Contacts');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Blogs');
ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci