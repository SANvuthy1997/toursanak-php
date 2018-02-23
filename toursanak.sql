# Host: 127.168.0.1  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-02-23 13:47:37
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'Buddhism Adventure','buddhism-adventure',1,'2018-02-20 06:02:55','2018-02-20 06:02:55'),(2,'Bicycle Tours','bicycle-tours',1,'2018-02-20 06:03:40','2018-02-20 06:03:40'),(3,'Blog','blog',1,'2018-02-20 06:04:12','2018-02-20 06:04:12'),(4,'Book','book',1,'2018-02-20 06:04:24','2018-02-20 06:04:24'),(5,'Bicycle Tour','bicycle-tour',1,'2018-02-20 06:04:34','2018-02-20 06:04:34');

#
# Structure for table "members"
#

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "members"
#

INSERT INTO `members` VALUES (1,'SAN Vuthy','Web Design & Developer','admin/uploads/images/151913533619875574_747053328800876_7571516794727411004_n.jpg','www.facebook.com','www.facebook.com',NULL,'<p>SAN Vuthy</p>',1,'2018-02-20 14:02:16','2018-02-20 14:02:16');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (48,'2014_10_12_000000_create_users_table',1),(49,'2014_10_12_100000_create_password_resets_table',1),(50,'2018_02_14_085208_create_posts_table',1),(51,'2018_02_14_092754_create_categories_table',1),(52,'2018_02_17_081323_create_tags_table',1),(53,'2018_02_17_084109_create_post_tag_table',1),(54,'2018_02_19_111355_create_pages_table',1),(55,'2018_02_19_111537_create_members_table',1);

#
# Structure for table "pages"
#

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "pages"
#

INSERT INTO `pages` VALUES (2,'About','<p>\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 50px; color: rgb(57, 123, 33);\"><b style=\"\">T</b></span>oursanak is an educational adventure travel experience with operations based in Phnom Penh and expanding outward. </p><p>\r\n\r\nWe provide new and interesting ways to experience the authentic Cambodia few others have the opportunity to see.</p><p>\r\n\r\nOur programs are designed and planned to bring our participants up close and personal in Cambodia.\r\n</p><p>\r\nWe offer bicycle exploration tours, custom family tour and discovery tours in a mutually supportive setting where learning and discovery is an exchange between visitors and hosts.\r\n</p><p>\r\nThe tours are for institutions, groups and independent adventurers who want to explore hidden places and to learn about Cambodian culture.\r\n\t\t\t\t\t\t\t\t\t</p>',1,'2018-02-20 06:46:59','2018-02-20 14:10:00',NULL,NULL);

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "post_tag"
#

DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE `post_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "post_tag"
#

INSERT INTO `post_tag` VALUES (1,1,1,NULL,NULL),(2,1,5,NULL,NULL),(3,2,2,NULL,NULL),(4,3,4,NULL,NULL),(5,3,5,NULL,NULL);

#
# Structure for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (1,'UDONG SPIRITUAL RETREAT 2 DAYS & 1 NIGHT','udong-spiritual-retreat-2-days-1-night',1,2,'admin/uploads/images/1519107054_downloadfiles_wallpapers_1440_900_indian_beach_wallpaper_beaches_nature_1419.jpg','UDONG SPIRITUAL RETREAT 2 DAYS & 1 NIGHT','UDONG SPIRITUAL RETREAT 2 DAYS & 1 NIGHT','<p>UDONG SPIRITUAL RETREAT 2 DAYS &amp; 1 NIGHT</p>','21st - 22nd April',300,'2018-02-20 06:10:54','2018-02-20 06:10:54'),(2,'PANHA SUON : CYCLING 3500 KM WITH $350 PART 1/2','panha-suon-cycling-3500-km-with-350-part-12',1,3,'admin/uploads/images/151913600119875574_747053328800876_7571516794727411004_n.jpg',NULL,NULL,'<p dir=\"ltr\" style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-size: 15px;\">How many young Cambodians would dare to pursue their dreams? How many would go against the norms or even parents and do anything they want to?<br style=\"box-sizing: inherit;\">Cambodians respect elders and children, mostly, are expected to obey their parents. Traditionally, elders will always think their children are not mature enough to take care of themselves. And they should also follow the social norms.</p><p style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-size: 15px;\">It is hard for parents to accept when their children are doing something different than others. Extreme cycling, solo traveling, running, or anything that is challenging. They would prefer their children to live a comfortable life. Honestly, is living in a comfort zone something anyone would want? What is spice of our life then?</p><p style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-size: 15px;\">Panha Suon is a 20 years old Cambodian who challenges the norms and fights to do what he really loves. He loves cycling. Panhas dream is to become a national cyclist representing Cambodia at the Olympic games and other international competitions. Isn’t it a big dream?</p><p dir=\"ltr\" style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-size: 15px;\">Panha decided to quit school and follow his dream. He thinks sitting in a classroom is a waste of his time and parents money. Real education should guide students according to their interest. Today’s education system is not designed right way. “I am not going to school to get a certificate or a degree just because in the future, I will have a good job. I think, I go to school, because I want to be educated, not to pursue the degree. The education should support my passion instead of studying this or that, and most of those assigned classes are not useful for our lives.” - said Panha Suon. Education in broader understanding can be pursued in many different ways.</p><p style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-size: 15px;\">The Internet is an amazing, revolutionary tool generations only have dreamed of. All the knowledge in your hand, in one device, accessible from anywhere and everywhere. Free course from sound universities, the biggest library in the world and much more. The whole new world.</p><p dir=\"ltr\" style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-size: 15px;\">It is only up to you, how you use internet.</p>',NULL,0,'2018-02-20 14:13:21','2018-02-20 14:13:21'),(3,'SAN Vuthy 2018 Study at Royal University of Phnom Penh','san-vuthy-2018-study-at-royal-university-of-phnom-penh',1,2,'admin/uploads/images/1519266630la_tour_eiffel-wide.jpg',NULL,NULL,'<p>Test</p>','28th -29th April',300,'2018-02-22 02:30:30','2018-02-22 02:30:30');

#
# Structure for table "tags"
#

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "tags"
#

INSERT INTO `tags` VALUES (1,'Bicycle Tours','bicycle-tours',1,'2018-02-20 06:05:03','2018-02-20 06:05:03'),(2,'Blog','blog',1,'2018-02-20 06:05:10','2018-02-20 06:05:10'),(3,'Buddhism Adventure','buddhism-adventure',1,'2018-02-20 06:05:18','2018-02-20 06:05:18'),(4,'Upcoming Tour','upcoming-tour',1,'2018-02-20 06:06:21','2018-02-20 06:06:21'),(5,'Special Tours','special-tours',1,'2018-02-20 06:06:41','2018-02-20 06:06:41');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'SAN Vuthy','san.vuthy08@gmail.com','$2y$10$HjKWQ/Zs5oH82yJctfR4KOs4.1aHcotZJUDoPhuJUV796b3cuyLaK','48NOGYVFzkwrnRBYrhrVzQeIFu0DvWBYQzfuB625XlvCcvGeL55G5k4Ysxx4','2018-02-20 06:00:48','2018-02-20 06:00:48');
