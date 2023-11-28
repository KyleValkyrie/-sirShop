	CREATE TABLE `navpages` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(255) NOT NULL,
 PRIMARY KEY (`id`));
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Homepage');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Categories');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'News');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Contacts');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Blogs');

CREATE TABLE `mydb`.`blogs` (
`id` INT NOT NULL AUTO_INCREMENT , 
`title` VARCHAR NOT NULL , 
`description` VARCHAR NOT NULL , 
`imageLink` TEXT NOT NULL , PRIMARY KEY (`id`));
INSERT INTO `blogs` 
(`id`, `title`, `description`, `imageLink`) 
VALUES (NULL, 
	   'Best PCs of 2023', 
	   'Lorem ipsum dolor sit amet, 
	   consectetur adipiscing elit, 
	   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	   Ut enim ad minim veniam, 
	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
	   Excepteur sint occaecat cupidatat non proident, 
	   sunt in culpa qui officia deserunt mollit anim id est laborum.', 
	   'https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?cs=srgb&dl=pexels-josh-sorenson-1714208.jpg&fm=jpg');
INSERT INTO `blogs` (`id`, `title`, `description`, `imageLink`) 
VALUES (NULL, 
	   'The new HP release is a godsend!', 
	   'Lorem ipsum dolor sit amet, 
	   consectetur adipiscing elit, 
	   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	   Ut enim ad minim veniam, 
	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
	   Excepteur sint occaecat cupidatat non proident, 
	   sunt in culpa qui officia deserunt mollit anim id est laborum.', 
	   'https://thumbs.dreamstime.com/b/modern-red-hp-laptop-red-hp-laptop-121448539.jpg');