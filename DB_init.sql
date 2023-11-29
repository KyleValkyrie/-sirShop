	CREATE TABLE IF NOT EXISTS `navpages` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(255) NOT NULL,
	 PRIMARY KEY (`id`));
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Homepage');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Categories');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'News');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Contacts');
INSERT INTO `navpages` (`id`, `title`) VALUES (NULL, 'Blogs');

CREATE TABLE IF NOT EXISTS `mydb`.`blogs` (
	`id` INT NOT NULL AUTO_INCREMENT , 
	`title` VARCHAR(255) NOT NULL , 
	`description` VARCHAR(255) NOT NULL , 
	`imageLink` TEXT NOT NULL , 
	`authorName` VARCHAR(255) NOT NULL , 
	`dateOfPost` DATE NULL DEFAULT CURRENT_TIMESTAMP , 
	`content` TEXT NOT NULL , 
	PRIMARY KEY (`id`));
INSERT INTO `blogs` 
(`id`, `title`, `description`, `imageLink`,`authorName`,`dateOfPost`,`content`) 
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
	   'https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?cs=srgb&dl=pexels-josh-sorenson-1714208.jpg&fm=jpg',
	   'anh7deptrai',
	   STR_TO_DATE('2022-11-09', '%Y-%m-%d'),
	   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut');
INSERT INTO `blogs` (`id`, `title`, `description`, `imageLink`,`authorName`,`dateOfPost`,`content`) 
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
	   'https://thumbs.dreamstime.com/b/modern-red-hp-laptop-red-hp-laptop-121448539.jpg',
	   'KyleValkyrie',
	   STR_TO_DATE('2023-11-09', '%Y-%m-%d'),
	   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut');