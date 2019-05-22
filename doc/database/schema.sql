--
-- Database: wayi_mvc_framework_db
--

CREATE TABLE `roles` (
 `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO `roles` (`role`) VALUES ('Admin'), ('Member');



CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO `users` (`created_at`, `updated_at`, `username`, `password`, `email`, `firstname`, `lastname`, `role_id`)
VALUES ('2019-05-21 17:00:00', '2019-05-21 17:00:00', 'ying', '$2y$10$/LTpZasJZAKQQUw7C7zaI.0270hrGBTiNQP2tvqPYwQA.mgJbToMu', 'ying.wang@idealhit.com', 'Ying', 'Wang', 1);



CREATE TABLE `posts` (
 `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
 `updated_at` timestamp NULL DEFAULT NULL,
 `user_id` int(11) DEFAULT NULL,
 `title` varchar(255) NOT NULL,
 `body` text NOT NULL,
 `views` int(11) NOT NULL DEFAULT '0',
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO `posts` (`created_at`, `updated_at`, `user_id`, `title`, `body`, `views`)
VALUES ('2019-05-21 17:00:00', '2019-05-21 17:00:00', 1, 'Post001', 'PostContent001', 0),
('2019-05-21 17:00:00', '2019-05-21 17:00:00', 1, 'Post002', 'PostContent002', 0),
('2019-05-21 17:00:00', '2019-05-21 17:00:00', 1, 'Post003', 'PostContent003', 0),
('2019-05-21 17:00:00', '2019-05-21 17:00:00', 1, 'Post004', 'PostContent004', 0),
('2019-05-21 17:00:00', '2019-05-21 17:00:00', 1, 'Post005', 'PostContent005', 0);



