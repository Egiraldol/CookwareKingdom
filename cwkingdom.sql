-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 08:18:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cwkingdom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2024_03_26_170756_create_reviews_table', 1),
(65, '2024_03_20_222310_create_order_products_table', 2),
(69, '2014_10_12_000000_create_users_table', 3),
(70, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(71, '2014_10_12_100000_create_password_resets_table', 3),
(72, '2019_08_19_000000_create_failed_jobs_table', 3),
(73, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(74, '2024_03_19_181435_create_products_table', 3),
(75, '2024_03_29_035750_create_recipes_table', 3),
(76, '2024_03_30_033526_create_reviews_table', 3),
(77, '2024_03_30_040023_create_product_recipe_table', 3),
(78, '2024_04_02_005546_alter_users_table', 3),
(79, '2024_04_02_031129_alter_recipes_table', 3),
(80, '2024_04_02_125501_create_orders_table', 3),
(81, '2024_04_02_142011_create_order_items_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 295000, 2, '2024-04-03 06:46:25', '2024-04-03 06:46:25'),
(2, 91000, 2, '2024-04-03 06:52:39', '2024-04-03 06:52:39'),
(3, 7000, 2, '2024-04-03 08:22:14', '2024-04-03 08:22:14'),
(4, 336000, 2, '2024-04-03 08:53:25', '2024-04-03 08:53:25'),
(5, 60000, 2, '2024-04-03 08:53:44', '2024-04-03 08:53:44'),
(6, 50000, 2, '2024-04-03 08:55:26', '2024-04-03 08:55:26'),
(7, 110000, 2, '2024-04-03 09:20:53', '2024-04-03 09:20:53'),
(8, 200000, 2, '2024-04-03 10:44:55', '2024-04-03 10:44:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`id`, `quantity`, `total`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 2, 30000, 1, 2, '2024-04-03 06:46:25', '2024-04-03 06:46:25'),
(2, 1, 200000, 1, 5, '2024-04-03 06:46:25', '2024-04-03 06:46:25'),
(3, 1, 35000, 1, 18, '2024-04-03 06:46:25', '2024-04-03 06:46:25'),
(4, 13, 7000, 2, 19, '2024-04-03 06:52:39', '2024-04-03 06:52:39'),
(5, 1, 7000, 3, 19, '2024-04-03 08:22:14', '2024-04-03 08:22:14'),
(6, 9, 35000, 4, 18, '2024-04-03 08:53:25', '2024-04-03 08:53:25'),
(7, 3, 7000, 4, 19, '2024-04-03 08:53:25', '2024-04-03 08:53:25'),
(8, 4, 15000, 5, 11, '2024-04-03 08:53:44', '2024-04-03 08:53:44'),
(9, 1, 50000, 6, 20, '2024-04-03 08:55:26', '2024-04-03 08:55:26'),
(10, 22, 5000, 7, 15, '2024-04-03 09:20:53', '2024-04-03 09:20:53'),
(11, 4, 50000, 8, 20, '2024-04-03 10:44:55', '2024-04-03 10:44:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `stock`, `price`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Toaster', 'A small appliance used to toast bread slices.', 50, 80000, 'https://m.media-amazon.com/images/I/81T+ArUMB6L._AC_UF894,1000_QL80_.jpg', '2024-04-03 06:29:58', '2024-04-03 06:29:58'),
(2, 'Spoon Set', 'A set of stainless steel spoons for serving and eating.', 98, 30000, 'https://m.media-amazon.com/images/I/61N0s9jMJyL.jpg', '2024-04-03 06:31:07', '2024-04-03 06:46:25'),
(3, 'Air Fryer', 'A kitchen appliance that cooks by circulating hot air around the food.', 20, 300000, 'https://multimedia-gs.s3.amazonaws.com/Data_StagingProducts/1510002066-6.jpg', '2024-04-03 06:31:47', '2024-04-03 06:31:47'),
(4, 'Blender', 'A kitchen appliance used to mix, purée, or emulsify food and other substances.', 30, 150000, 'https://s.alicdn.com/@sc04/kf/H871907d58e494280aedbb8ea7df63cf6J.jpg_300x300.jpg', '2024-04-03 06:32:38', '2024-04-03 06:32:38'),
(5, 'Knife set', 'A set of high-quality kitchen knives for various cutting tasks.', 39, 200000, 'https://m.media-amazon.com/images/I/61dDCif7poL.jpg', '2024-04-03 06:33:24', '2024-04-03 06:46:25'),
(6, 'Coffee Maker', 'An appliance used to brew coffee automatically.', 25, 120000, 'https://m.media-amazon.com/images/I/71LB1AbsorL.jpg', '2024-04-03 06:33:58', '2024-04-03 06:33:58'),
(7, 'Cutting Board', 'A durable board used for cutting and preparing food.', 60, 25000, 'https://www.foodandwine.com/thmb/h_fxf_2fJ5tEHqaNr3nzO1lb6V0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/faw-primary-best-cutting-board-jkim-0082-1923d44b57554553b94c704a09eaf0a3.jpeg', '2024-04-03 06:34:36', '2024-04-03 06:34:36'),
(8, 'Rice Cooker', 'An electrical appliance used to cook rice automatically.', 15, 100000, 'https://assets.epicurious.com/photos/6089c0bad8fc61233f82f9f4/16:9/w_1280,c_limit/Best-Rice-Cooker-21022019-B.jpg', '2024-04-03 06:35:15', '2024-04-03 06:35:15'),
(9, 'Mixing Bowl Set', 'A set of bowls used for mixing ingredients.', 50, 40000, 'https://www.pamperedchef.com/iceberg/com/product/1735-lg.jpg', '2024-04-03 06:36:15', '2024-04-03 06:36:15'),
(10, 'Potato Peeler', 'A tool used to remove the outer skin of potatoes.', 70, 10000, 'https://m.media-amazon.com/images/I/714wS06N8VL.jpg', '2024-04-03 06:37:03', '2024-04-03 06:37:03'),
(11, 'Grater', 'A kitchen utensil used for grating cheese, vegetables, etc.', 36, 15000, 'https://assets.leevalley.com/Size5/10118/EV533-box-grater-u-0026.jpg', '2024-04-03 06:37:49', '2024-04-03 08:53:44'),
(12, 'Can Opener', 'A device used to open tin cans.', 80, 8000, 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Kitchen-Modern-Can-Opener.jpg', '2024-04-03 06:38:35', '2024-04-03 06:38:35'),
(13, 'Measuring Cup Set', 'A set of cups used to measure liquid or dry ingredients.', 60, 20000, 'https://m.media-amazon.com/images/I/81BamenUlkL.jpg', '2024-04-03 06:39:14', '2024-04-03 06:39:14'),
(14, 'Microwave Oven', 'An appliance used to cook or heat food by dielectric heating.', 10, 400000, 'https://my.sharp/sites/default/files/uploads/2021-08/shutterstock_74089945.jpg', '2024-04-03 06:39:51', '2024-04-03 06:39:51'),
(15, 'Whisk', 'A kitchen utensil used for whipping or stirring.', 68, 5000, 'https://m.media-amazon.com/images/I/71r+PFWQ1lL.jpg', '2024-04-03 06:40:26', '2024-04-03 09:20:53'),
(16, 'Pasta Maker', 'A machine used to make pasta from flour and water.', 20, 250000, 'https://assets.epicurious.com/photos/60ad57c6a932942d0f26eb7d/16:9/w_2560%2Cc_limit/PastaMakingGear_HERO_012521_576_Badge_VOG.jpg', '2024-04-03 06:41:19', '2024-04-03 06:41:19'),
(17, 'Rolling Pin', 'A cylindrical food preparation utensil used to shape and flatten dough.', 50, 12000, 'https://reviewed-com-res.cloudinary.com/image/fetch/s--PKOcBgSD--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,q_auto,w_972/https://reviewed-production.s3.amazonaws.com/1552342522114/rolling-pin-regular.jpg', '2024-04-03 06:41:55', '2024-04-03 06:41:55'),
(18, 'Salad Spinner', 'A kitchen tool used to wash and remove excess water from salad greens.', 20, 35000, 'https://www.taylormarket.com.co/web/image/product.product/63801/image_256', '2024-04-03 06:42:31', '2024-04-03 08:53:25'),
(19, 'Tongs', 'A tool consisting of two arms joined with a pivot used for gripping and lifting objects.', 63, 7000, 'https://m.media-amazon.com/images/I/61kyevwBuKL.jpg', '2024-04-03 06:43:02', '2024-04-03 08:53:25'),
(20, 'Vegetable Steamer', 'An appliance used to cook vegetables by steaming.', 20, 50000, 'https://m.media-amazon.com/images/I/81PGeDeiFOL.jpg', '2024-04-03 06:43:37', '2024-04-03 10:44:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_recipe`
--

CREATE TABLE `product_recipe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `recipe_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `ingredients`, `instructions`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Lasagna', 'Delicious italian couisine', 'lasagna', 'prepare;enjoy', '2024-04-03 09:26:06', '2024-04-03 09:26:06', 'https://cdn.colombia.com/gastronomia/2015/06/09/lasana-de-carne-y-queso-2977.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `title`, `description`, `rating`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Lorem Ipsum', 'Lorem Ipsum Dolor', 5, 14, 2, '2024-04-03 06:47:20', '2024-04-03 06:47:20'),
(2, 'Administrator', 'Lorem Ipsum', 'Lorem Ipsum Dolor', 0, 14, 2, '2024-04-03 06:47:41', '2024-04-03 06:47:41'),
(3, 'Administrator', 'Lorem Ipsum', 'Lorem Ipsum Dolor', 5, 10, 2, '2024-04-03 06:48:06', '2024-04-03 06:48:06'),
(4, 'Administrator', 'Lorem Ipsum', 'mockup for a  personal project', 4, 20, 2, '2024-04-03 08:03:02', '2024-04-03 08:03:02'),
(5, 'Administrator', 'e', 'e', 3, 20, 2, '2024-04-03 09:49:27', '2024-04-03 09:49:27'),
(6, 'Administrator', '2', '2', 2, 19, 2, '2024-04-03 09:51:49', '2024-04-03 09:51:49'),
(7, 'Administrator', '3', '3', 3, 19, 2, '2024-04-03 09:53:38', '2024-04-03 09:53:38'),
(8, 'Esteban', 'The best coffe ive ever made', 'Elegant, perfect, only give it a 1 because im greedy', 1, 6, 1, '2024-04-03 11:15:51', '2024-04-03 11:15:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'client',
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `balance`) VALUES
(1, 'Esteban', 'estebangiraldollano@gmail.com', NULL, '$2y$12$txV2mGCD2iIll2OdHUlsXe4LfYKqbE0wAGU7t5S/YvJXGOWm7/gy.', NULL, '2024-04-03 05:57:23', '2024-04-03 05:57:23', 'client', 5000),
(2, 'Administrator', 'admin@cwk.com', NULL, '$2y$12$nYIwzGW6ADdeeh/DZFq7Oe.tv0v1SQQnLHAWCxMU7bDecGLM6G9Ca', NULL, '2024-04-03 06:07:05', '2024-04-03 10:44:55', 'admin', -1144000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_recipe`
--
ALTER TABLE `product_recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_recipe_product_id_foreign` (`product_id`),
  ADD KEY `product_recipe_recipe_id_foreign` (`recipe_id`);

--
-- Indices de la tabla `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `product_recipe`
--
ALTER TABLE `product_recipe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_recipe`
--
ALTER TABLE `product_recipe`
  ADD CONSTRAINT `product_recipe_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `product_recipe_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
