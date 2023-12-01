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
	`avatar` TEXT NULL,
	`bio` TEXT NULL,
	PRIMARY KEY (`id`));
INSERT INTO `blogs` 
(`id`, `title`, `description`, `imageLink`,`authorName`,`dateOfPost`,`content`, `avatar`, `bio`) 
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
	   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut',
	   'https://pm1.aminoapps.com/7058/6174b3a71f26305acca088d749d61acaff67eae3r1-223-227v2_128.jpg',
	   'Likes to f around and find out, whimsical, give big hugs!');
INSERT INTO `blogs` 
(`id`, `title`, `description`, `imageLink`,`authorName`,`dateOfPost`,`content`, `avatar`, `bio`) 
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
	   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut',
	   'https://i1.sndcdn.com/avatars-000437089554-1mam5a-t500x500.jpg',
	   'Enjoy musics, introvert, weird irl, dislike fandoms.');

INSERT INTO `blogs` 
(`id`, `title`, `description`, `imageLink`,`authorName`,`dateOfPost`,`content`, `avatar`, `bio`) 
VALUES (NULL,
		'This is why we love Del laptops!',
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
		Aenean commodo ligula eget dolor. 
		Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, 
		nascetur ridiculus mus. Donec quam felis',
		'https://laptopbaominh.com/wp-content/uploads/2022/09/6731_3.jpg',
		'Tokiboyo',
		STR_TO_DATE('2019-3-20', '%Y-%m-%d'),
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac',
		'https://static.vocadb.net/img/tag/mainOrig/7099.png',
		'Quirky, likes to draw, carefree, tell dark jokes, sleep like a rock.');

CREATE TABLE  IF NOT EXISTS `mydb`.`news` (
`id` INT NOT NULL AUTO_INCREMENT , 
`title` TEXT NOT NULL , 
`description` TEXT NOT NULL , 
`imageLink` TEXT NOT NULL , 
`dateOfPost` DATE NULL DEFAULT CURRENT_TIMESTAMP , 
`type` VARCHAR(20) NOT NULL , 
`content` TEXT NOT NULL , 
PRIMARY KEY (`id`));
INSERT INTO `news` 
(`id`, `title`, `description`, `imageLink`, `dateOfPost`, `type`, `content`) 
VALUES (NULL, 
	    'How strong does your PC actually needs to be?', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
		Aenean commodo ligula eget dolor. 
		Aenean massa. Cum sociis natoque penatibus et magnis dis p', 
		'https://www.publicdomainpictures.net/pictures/160000/nahled/ordinateur-de-bureau-pc-1456070535WEH.jpg',
		STR_TO_DATE('2019-05-16', '%Y-%m-%d'), 
		'Informative', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis');
INSERT INTO `news` 
(`id`, `title`, `description`, `imageLink`, `dateOfPost`, `type`, `content`) 
VALUES (NULL, 
	    'Best computers for day trading in 2021', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
		Aenean commodo ligula eget dolor. Aenean massa. 
		Cum sociis natoque penatibus et magnis dis p', 
		'https://www.inet-pc.com/Content/files/BusinessPCs/BusinessPC-StockTrading.jpg', 
		STR_TO_DATE('2018-04-23', '%Y-%m-%d'), 
		'Newsletter', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut');
INSERT INTO `news` 
(`id`, `title`, `description`, `imageLink`, `dateOfPost`, `type`, `content`) 
VALUES (NULL, 
	    'Evernote drastically cuts back on its free plan', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
		Aenean commodo ligula eget dolor. 
		Aenean massa. 
		Cum sociis natoque penatibus et magnis dis p', 
		'https://rtalbert.org/content/images/2018/12/evernote-og.png', 
		STR_TO_DATE('2018-04-07', '%Y-%m-%d'), 
		'Newsletter', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut');
INSERT INTO `news` 
(`id`, `title`, `description`, `imageLink`, `dateOfPost`, `type`, `content`) 
VALUES (NULL, 
		'Update Chrome right now or your computer will explode (again)', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
		Aenean commodo ligula eget dolor. 
		Aenean massa. Cum sociis natoque penatibus et magnis dis p', 
		'https://www.pcworld.com/wp-content/uploads/2023/11/chrome-window-generic-2.jpg?resize=1024%2C576&quality=50&strip=all', 
		STR_TO_DATE('2014-11-01', '%Y-%m-%d'), 
		'Security', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut');
INSERT INTO `news` 
(`id`, `title`, `description`, `imageLink`, `dateOfPost`, `type`, `content`) 
VALUES (NULL, 
		'Windows 11 energy saver mode now in testing for laptops and desktops', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
		Aenean commodo ligula eget dolor. Aenean massa. 
		Cum sociis natoque penatibus et magnis dis p', 
		'https://www.pcworld.com/wp-content/uploads/2023/11/windows-energy-saver-mode.jpg?resize=1024%2C576&quality=50&strip=all', 
		STR_TO_DATE('2014-05-20','%Y-%m-%d'), 
		'Newsletter', 
		'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut');
CREATE TABLE  IF NOT EXISTS `mydb`.`products` (
	`id` INT NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(255) NOT NULL , 
	`category` TEXT NOT NULL , 
	`image` TEXT NOT NULL , 
	`stock` BIGINT NOT NULL , 
	`price` BIGINT NOT NULL , 
	`spec` TEXT NOT NULL , 
	PRIMARY KEY (`id`));
INSERT INTO `products` (`id`, `name`, `category`, `image`, `stock`, `price`, `spec`) 
VALUES (NULL, 
		'Laptop Dell E6430 | i5 3320M | 4GB | 250GB | 14 inch', 
		'Office Laptop', 
		'https://ducvietco.com/mediacenter/media/images/346/products/346/260/s1000_1000/dell-latiatude-e6430-2-1562995555.jpg', 
		'10000', 
		'2500000', 
		'CPU: Intel Core i5-3320M. CPU Sandy for i7 and up.  nRAM: 4GB  SSD: 250GB  VGA: Intel HD Graphics 4000  Screen: 14 inch HD LED  DVD Reader: Read and write DVD  Batteries: 6 cells (3hrs of use time)  Weight: 2.45 kg  Ports: HDMI, E-SATA, VGA, USB 2.0 and 3.0, Card-Reade  Internet Protocol: Ethernet (LAN), Wifi.  nOS: Windows 7 Professional in-built');
INSERT INTO `products` (`id`, `name`, `category`, `image`, `stock`, `price`, `spec`) 
VALUES (NULL, 
		'Laptop ASUS VivoBook X1405ZA | Core i5 12500H | 8GB bus 3200MHz | SSD M2 NVMe 512GB | 14inch FHD IPS 2.8K', 
		'Office Laptop', 
		'https://techpointretail.com/wp-content/uploads/2023/05/Vivobook-14-OLED-X1405ZA-black-1.jpg', 
		'700', 
		'12500000', 
		'CPU: Intel Core i5 12500H2.5GHz  RAM: 8GB DDR4 2 khe (1 slot 8 GB onboard + 1 empty slot)3200 MHz  Hard drive:  SSD NVMe PCIe 512GB  Screen: 14inch 2.8K (2880 x 1800) - OLED 16:1090Hz  VGU: Card tích hợp Intel UHD  Ports: HDMIUSB Type-C1 x USB 2.02 x USB 3.2Jack tai nghe 3.5 mm  OS: Windows 11 Home SL  Design: Plastic shell  Size and weight: 317.1 mm long- 222 mm wide- 19.9 mm thick- 1.6 kg in weight');
INSERT INTO `products` (`id`, `name`, `category`, `image`, `stock`, `price`, `spec`) 
VALUES (NULL, 
		'Laptop Lenovo Gaming Legion 5 15IAH7 | i5 12500H | 16GB | 512GB | 15.6\"FHD | Nvidia RTX 3050 4GB', 
		'Gaming Laptop', 
		'https://cdn.ankhang.vn/media/product/22674_laptop_lenovo_gaming_legion_5_15iah7_82rc003wvn.jpg', 
		'300', 
		'27920000', 
		'Screen: 15.6 inch, 1920 x 1080 Pixels, IPS, 165 Hz, 300 nits, IPS LCD LED Backlit, True Tone  CPU: Intel, Core i5, 12500H  RAM: 16 GB (2 8 GB slots), DDR5, 4800 MHz  Hard drive: SSD 512 GB  GPU: NVIDIA GeForce RTX 3050 4GB; Intel Iris Xe Graphics  OS: Windows 11 Home  Weight: 2.35 kg  Size: 358.8 x 262.35 x 19.99 mm  Made in: China');
INSERT INTO `products` (`id`, `name`, `category`, `image`, `stock`, `price`, `spec`) 
VALUES (NULL, 
		'Ryzen 5 4600G| 6C12T| Ram 16G| SSD 500GB| 550W', 
		'Gaming PC', 
		'https://nguyencongpc.vn/media/product/250-25573-black-friday-gaming-01.jpg', 
		'500', 
		'6990000', 
		'CPU: AMD Ryzen 5 4600G (3.7GHz Boost 4.2GHz / 6 cores 12 threads / 11MB / AM4)  Mainboard: MSI A320M-A PRO  Ram: Apacer NOX 16G bus 3200 heatsink  SSD: SSD 500GB PNY CS900 2.5-Inch SATA III');
INSERT INTO `products` (`id`, `name`, `category`, `image`, `stock`, `price`, `spec`) 
VALUES (NULL, 
		'AMD 4700S | 4700S | 16GB | SSD 240GB | RX550', 
		'Office PC', 
		'https://nguyencongpc.vn/media/product/250-21730-m--y-t--nh-amd-4700ss.jpg', 
		'10000', 
		'9850000', 
		'CPU: AMD 4700S Desktop Kit (8C / 16T, 4.0 / 3.6GHz, 12MB Cache)  RAM: 16GB GDDR6 onboard  SSD: Kingston A400 240GB SATA3 2.5 incH  VGA: Card AMD RX550/2GB');