
INSERT INTO `orders` (`id`, `user_id`, `status`, `created_at`, `updated_at`, `deleted_at`,`currency`, `note`, `sum`) VALUES
(12, 7, '0', '2019-05-24 14:15:21', NULL,NULL, 'USD', '', 1560),
(13, 8, '0', '2019-05-24 14:16:15', NULL, NULL,'USD', '', 1190),
(14, 10, '0', '2019-05-24 14:17:37', NULL, NULL,'USD', '', 870),
(15, 11, '0', '2019-05-24 14:18:31', NULL, NULL,'USD', '', 470),
(16, 12, '0', '2019-05-24 14:20:14', NULL, NULL,'USD', '', 460),
(17, 13, '0', '2019-05-24 14:20:58', NULL, NULL,'USD', '', 1270),
(18, 14, '0', '2019-05-24 14:21:36', NULL, NULL,'USD', '', 370),
(19, 15, '0', '2019-05-24 14:22:25', NULL, NULL,'USD', '', 460);

-- --------------------------------------------------------


INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(38, 12, 2, 2, 'Casio MQ-24-7BUL', 70),
(39, 12, 3, 1, 'Casio GA-1000-1AER', 400),
(40, 12, 7, 2, 'Q&Q Q956J302Y', 20),
(41, 12, 8, 2, 'Royal London 41040-01', 90),
(42, 12, 4, 2, 'Citizen JP1010-00E', 400),

(43, 13, 1, 1, 'Casio MRP-700-1AVEFF', 300),
(44, 13, 2, 1, 'Casio MQ-24-7BUL', 70),
(45, 13, 3, 1, 'Casio GA-1000-1AER', 400),
(46, 13, 4, 1, 'Citizen JP1010-00E', 400),
(47, 13, 7, 1, 'Q&Q Q956J302Y', 20),

(48, 14, 2, 1, 'Casio MQ-24-7BUL', 70),
(49, 14, 3, 1, 'Casio GA-1000-1AER', 400),
(50, 14, 4, 1, 'Citizen JP1010-00E', 400),


(51, 15, 2, 1, 'Casio MQ-24-7BUL', 70),
(52, 15, 3, 1, 'Casio GA-1000-1AER', 400),
(53, 16, 6, 1, 'Citizen AT0696-59E', 350),
(54, 16, 7, 1, 'Q&Q Q956J302Y', 20),
(55, 16, 8, 1, 'Royal London 41040-01', 90),
(56, 17, 2, 1, 'Casio MQ-24-7BUL', 70),
(57, 17, 3, 2, 'Casio GA-1000-1AER', 400),
(58, 17, 4, 1, 'Citizen JP1010-00E', 400),
(59, 18, 6, 1, 'Citizen AT0696-59E', 350),
(60, 18, 7, 1, 'Q&Q Q956J302Y', 20),
(61, 19, 6, 1, 'Citizen AT0696-59E', 350),
(62, 19, 7, 1, 'Q&Q Q956J302Y', 20),
(63, 19, 8, 1, 'Royal London 41040-01', 90);



INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`,`password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'sasha','admin@admin.ru9', NULL, 12345678,  NULL, NULL, NULL),
(7, 'admin', '1984aab@gmail.com',NULL, 12345678,  NULL, NULL, NULL),
(8, 'user', '1984aab@gmail.comq', NULL, 12345678, NULL, NULL, NULL),

(9, 'sasha2', '1984aab@gmail.comdd',NULL,12345678,  NULL, NULL, NULL),
(10, 'user1', '1984aab@gmail.com22',NULL, 12345678,  NULL, NULL, NULL),
(11, 'user2', '1984aab@gmail.com222',NULL, 12345678,  NULL, NULL, NULL),
(12, 'user3','1984aab@gmail.com11111', NULL,12345678,  NULL, NULL, NULL),
(13, 'user4', '1984aab@gmail.com133333',NULL,12345678,  NULL, NULL, NULL),
(14, 'user5', '1984aab@gmail.com1222222',NULL, 12345678,  NULL, NULL, NULL),
(15, 'user6',  '1984aab@gmail.com1ddd', NULL,12345678, NULL, NULL, NULL);

