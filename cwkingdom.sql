-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 13:46:42
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
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(28, '2014_10_12_100000_create_password_resets_table', 1),
(29, '2019_08_19_000000_create_failed_jobs_table', 1),
(30, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(31, '2024_03_19_181435_create_products_table', 1),
(33, '2024_03_26_170756_create_reviews_table', 1),
(36, '2024_03_20_222310_create_order_products_table', 2),
(37, '2024_03_29_035750_create_recipes_table', 2),
(38, '2024_03_30_033526_create_reviews_table', 3),
(39, '2024_03_30_040023_create_product_recipe_table', 3),
(40, '2024_04_02_005546_alter_users_table', 3),
(41, '2024_04_02_031129_alter_recipes_table', 4),
(42, '2024_04_02_125501_create_orders_table', 5),
(43, '2024_04_02_140827_create_order_items_table', 5),
(44, '2024_04_02_142011_create_order_items_table', 6),
(45, '2024_04_03_010853_alter_recipes_table', 7),
(46, '2024_04_03_011327_alter_recipes_table', 8);

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
(1, 0, 3, '2024-04-02 21:57:56', '2024-04-02 21:57:56'),
(2, 0, 3, '2024-04-02 21:58:17', '2024-04-02 21:58:17'),
(3, 22276, 3, '2024-04-02 21:58:48', '2024-04-02 21:58:48'),
(4, 765, 3, '2024-04-02 22:00:49', '2024-04-02 22:00:49'),
(5, 27845, 3, '2024-04-02 22:04:49', '2024-04-02 22:04:49'),
(6, 0, 3, '2024-04-02 22:05:11', '2024-04-02 22:05:11'),
(7, 0, 3, '2024-04-02 22:07:47', '2024-04-02 22:07:47'),
(8, 0, 3, '2024-04-02 22:07:56', '2024-04-02 22:07:56'),
(9, 0, 3, '2024-04-02 22:08:12', '2024-04-02 22:08:12'),
(10, 0, 3, '2024-04-02 22:08:25', '2024-04-02 22:08:25'),
(11, 510, 3, '2024-04-02 22:08:40', '2024-04-02 22:08:40'),
(12, 765, 3, '2024-04-02 22:10:27', '2024-04-02 22:10:27'),
(13, 510, 2, '2024-04-03 10:19:31', '2024-04-03 10:19:31'),
(14, 11138, 2, '2024-04-03 10:42:36', '2024-04-03 10:42:36'),
(15, 510, 2, '2024-04-03 10:55:16', '2024-04-03 10:55:16'),
(16, 11138, 2, '2024-04-03 10:57:48', '2024-04-03 10:57:48'),
(17, 510, 2, '2024-04-03 10:59:51', '2024-04-03 10:59:51'),
(18, 27845, 2, '2024-04-03 11:05:07', '2024-04-03 11:05:07'),
(19, 5569, 2, '2024-04-03 11:09:36', '2024-04-03 11:09:36'),
(20, 5569, 2, '2024-04-03 11:11:06', '2024-04-03 11:11:06');

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
(1, 'Toaster', 'A small appliance used to toast bread slices.', 50, 80000, 'https://m.media-amazon.com/images/I/81T+ArUMB6L._AC_UF894,1000_QL80_.jpg', '2024-04-03 11:29:58', '2024-04-03 11:29:58'),
(2, 'Spoon Set', 'A set of stainless steel spoons for serving and eating.', 98, 30000, 'https://m.media-amazon.com/images/I/61N0s9jMJyL.jpg', '2024-04-03 11:31:07', '2024-04-03 11:46:25'),
(5, 'Knife set', 'A set of high-quality kitchen knives for various cutting tasks.', 39, 200000, 'https://m.media-amazon.com/images/I/61dDCif7poL.jpg', '2024-04-03 11:33:24', '2024-04-03 11:46:25'),
(6, 'Coffee Maker', 'An appliance used to brew coffee automatically.', 25, 120000, 'https://m.media-amazon.com/images/I/71LB1AbsorL.jpg', '2024-04-03 11:33:58', '2024-04-03 11:33:58'),
(7, 'Cutting Board', 'A durable board used for cutting and preparing food.', 60, 25000, 'https://www.foodandwine.com/thmb/h_fxf_2fJ5tEHqaNr3nzO1lb6V0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/faw-primary-best-cutting-board-jkim-0082-1923d44b57554553b94c704a09eaf0a3.jpeg', '2024-04-03 11:34:36', '2024-04-03 11:34:36'),
(8, 'Rice Cooker', 'An electrical appliance used to cook rice automatically.', 15, 100000, 'https://assets.epicurious.com/photos/6089c0bad8fc61233f82f9f4/16:9/w_1280,c_limit/Best-Rice-Cooker-21022019-B.jpg', '2024-04-03 11:35:15', '2024-04-03 11:35:15'),
(9, 'Mixing Bowl Set', 'A set of bowls used for mixing ingredients.', 50, 40000, 'https://www.pamperedchef.com/iceberg/com/product/1735-lg.jpg', '2024-04-03 11:36:15', '2024-04-03 11:36:15'),
(10, 'Potato Peeler', 'A tool used to remove the outer skin of potatoes.', 70, 10000, 'https://m.media-amazon.com/images/I/714wS06N8VL.jpg', '2024-04-03 11:37:03', '2024-04-03 11:37:03'),
(11, 'Grater', 'A kitchen utensil used for grating cheese, vegetables, etc.', 36, 15000, 'https://assets.leevalley.com/Size5/10118/EV533-box-grater-u-0026.jpg', '2024-04-03 11:37:49', '2024-04-03 13:53:44'),
(12, 'Can Opener', 'A device used to open tin cans.', 80, 8000, 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Kitchen-Modern-Can-Opener.jpg', '2024-04-03 11:38:35', '2024-04-03 11:38:35'),
(13, 'Measuring Cup Set', 'A set of cups used to measure liquid or dry ingredients.', 60, 20000, 'https://m.media-amazon.com/images/I/81BamenUlkL.jpg', '2024-04-03 11:39:14', '2024-04-03 11:39:14'),
(14, 'Microwave Oven', 'An appliance used to cook or heat food by dielectric heating.', 10, 400000, 'https://my.sharp/sites/default/files/uploads/2021-08/shutterstock_74089945.jpg', '2024-04-03 11:39:51', '2024-04-03 11:39:51'),
(15, 'Whisk', 'A kitchen utensil used for whipping or stirring.', 68, 5000, 'https://m.media-amazon.com/images/I/71r+PFWQ1lL.jpg', '2024-04-03 11:40:26', '2024-04-03 14:20:53'),
(16, 'Pasta Maker', 'A machine used to make pasta from flour and water.', 20, 250000, 'https://assets.epicurious.com/photos/60ad57c6a932942d0f26eb7d/16:9/w_2560%2Cc_limit/PastaMakingGear_HERO_012521_576_Badge_VOG.jpg', '2024-04-03 11:41:19', '2024-04-03 11:41:19'),
(17, 'Rolling Pin', 'A cylindrical food preparation utensil used to shape and flatten dough.', 50, 12000, 'https://reviewed-com-res.cloudinary.com/image/fetch/s--PKOcBgSD--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,q_auto,w_972/https://reviewed-production.s3.amazonaws.com/1552342522114/rolling-pin-regular.jpg', '2024-04-03 11:41:55', '2024-04-03 11:41:55'),
(18, 'Salad Spinner', 'A kitchen tool used to wash and remove excess water from salad greens.', 20, 35000, 'https://www.taylormarket.com.co/web/image/product.product/63801/image_256', '2024-04-03 11:42:31', '2024-04-03 13:53:25'),
(19, 'Tongs', 'A tool consisting of two arms joined with a pivot used for gripping and lifting objects.', 63, 7000, 'https://m.media-amazon.com/images/I/61kyevwBuKL.jpg', '2024-04-03 11:43:02', '2024-04-03 13:53:25'),
(20, 'Vegetable Steamer', 'An appliance used to cook vegetables by steaming.', 20, 50000, 'https://m.media-amazon.com/images/I/81PGeDeiFOL.jpg', '2024-04-03 11:43:37', '2024-04-03 15:44:55'),
(21, 'Air Fryer', 'A kitchen appliance that cooks by circulating hot air around the food.', 20, 300000, 'https://multimedia-gs.s3.amazonaws.com/Data_StagingProducts/1510002066-6.jpg', '2024-04-03 11:31:47', '2024-04-03 11:31:47'),
(22, 'Blender', 'A kitchen appliance used to mix, purée, or emulsify food and other substances.', 30, 150000, 'https://s.alicdn.com/@sc04/kf/H871907d58e494280aedbb8ea7df63cf6J.jpg_300x300.jpg', '2024-04-03 11:32:38', '2024-04-03 11:32:38');

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

--
-- Volcado de datos para la tabla `product_recipe`
--

INSERT INTO `product_recipe` (`id`, `product_id`, `recipe_id`, `created_at`, `updated_at`) VALUES
(1, 7, 6, '2024-04-03 11:29:12', '2024-04-03 11:29:12'),
(2, 18, 6, '2024-02-26 03:38:44', '2024-02-26 03:38:44'),
(3, 8, 7, '2024-04-03 11:31:08', '2024-04-03 11:31:08'),
(4, 16, 8, '2024-04-03 11:31:08', '2024-04-03 11:31:08'),
(5, 7, 8, '2024-04-03 11:31:08', '2024-04-03 11:31:08'),
(6, 1, 9, '2024-04-03 11:32:46', '2024-04-03 11:32:46'),
(7, NULL, NULL, NULL, NULL),
(8, 8, 10, '2024-04-03 11:32:46', '2024-04-03 11:32:46'),
(9, NULL, NULL, NULL, NULL),
(10, 14, 11, '2024-04-03 11:39:27', '2024-04-03 11:39:27'),
(11, 5, 13, '2024-04-03 11:39:27', '2024-04-03 11:39:27'),
(12, 18, 22, '2024-04-03 11:39:27', '2024-04-03 11:39:27'),
(13, 10, 21, '2024-04-03 11:39:27', '2024-04-03 11:39:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `ingredients`, `instructions`, `created_at`, `updated_at`, `image`) VALUES
(6, 'Grilled Chicken Salad', 'A light and refreshing salad perfect for summer evenings', 'chicken breast;lettuce;tomato;cucumber;avocado;olive oil;lemon juice;salt;pepper', 'Grill the chicken breast until cooked through; Chop the lettuce, tomato, cucumber, and avocado; Slice the chicken and toss all ingredients together; Drizzle with olive oil and lemon juice, season with salt and pepper to taste.', '2024-04-03 16:07:01', '2024-04-03 16:07:01', 'https://www.eatingbirdfood.com/wp-content/uploads/2023/06/grilled-chicken-salad-hero.jpg'),
(7, 'Veggie Stir-Fry', 'Quick and healthy stir-fry loaded with colorful vegetables.', 'broccoli;carrot;bell pepper;mushroom;zucchini;soy sauce;sesame oil;garlic;ginger;rice', 'Heat sesame oil in a pan, add minced garlic and ginger; Stir-fry vegetables until tender; Add soy sauce and continue cooking for a few more minutes; Serve over rice.', '2024-04-03 16:07:57', '2024-04-03 16:07:57', 'https://natashaskitchen.com/wp-content/uploads/2020/08/Vegetable-Stir-Fry-2.jpg'),
(8, 'Spaghetti Bolognese', 'Classic Italian pasta dish with a rich tomato and meat sauce.', 'ground beef;onion;garlic;tomato;salt;pepper;olive oil;pasta', 'In a pan, sauté diced onion and minced garlic in olive oil; Add ground beef and cook until browned; Stir in chopped tomatoes and simmer until sauce thickens; Serve over cooked pasta.', '2024-04-03 16:09:09', '2024-04-03 16:09:09', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF5O7X0ZaLaCZwTeFKCc36V1kKD0wIR2XhDFh_ziLp3w&s'),
(9, 'Avocado Toast', 'A simple yet satisfying breakfast or snack option.', 'bread;avocado;lime;salt;red pepper flakes', 'Toast the bread until golden brown; Mash avocado with lime juice, salt, and red pepper flakes; Spread the avocado mixture onto the toast', '2024-04-03 16:10:27', '2024-04-03 16:10:27', 'https://www.spendwithpennies.com/wp-content/uploads/2022/09/Avocado-Toast-SpendWithPennies-4.jpg'),
(10, 'Teriyaki Salmon', 'Delicious and flavorful salmon dish with a sweet and savory teriyaki glaze.', 'salmon fillet;teriyaki sauce;sesame seeds;green onion;rice', 'Marinate salmon fillets in teriyaki sauce for 30 minutes; Grill or bake until cooked through; Sprinkle with sesame seeds and chopped green onions; Serve with rice.', '2024-04-03 16:17:03', '2024-04-03 16:17:03', 'https://www.allrecipes.com/thmb/a2Pgu3Q5z92A79zUrEISwGRqfAI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/228285teriyaki-salmonFranceC4x3-495e53221ca54183bf0ff5b2fa5aae55.jpg'),
(11, 'Quinoa Salad', 'Nutritious salad packed with protein and fresh vegetables.', 'quinoa;bell pepper;cucumber;cherry tomatoes;red onion;olive oil;lemon juice;fresh herbs;salt;pepper', 'Cook quinoa according to package instructions and let it cool; Chop vegetables and herbs; Mix quinoa with vegetables, olive oil, lemon juice, herbs, salt, and pepper. Associated Products: Mixing Bowl Set, Cutting Board', '2024-04-03 16:17:45', '2024-04-03 16:17:45', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTN6j3BmiBKVb9DCa1V8KscSUbIjlWg63rSFY50tHXJ9A&s'),
(12, 'Chicken Parmesan', 'Comforting Italian dish featuring breaded chicken topped with marinara sauce and cheese.', 'chicken breast;bread crumbs;egg;flour;marinara sauce;mozzarella cheese;parmesan cheese;pasta', 'Bread chicken breasts with flour, beaten egg, and bread crumbs; Fry until golden brown; Top with marinara sauce and cheeses, then bake until bubbly; Serve over cooked pasta.', '2024-04-03 16:18:40', '2024-04-03 16:18:40', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQETUbpRLQNsNTi0ZEZWshzJb0hWEKxcltuD1w9dDTgoQ&s'),
(13, 'Vegetable Soup', 'Hearty and wholesome soup filled with seasonal vegetables.', 'onion;carrot;celery;potato;zucchini;tomato;vegetable broth;herbs;salt;pepper', 'Sauté diced onion, carrot, and celery until softened; Add chopped vegetables and vegetable broth; Simmer until vegetables are tender; Season with herbs, salt, and pepper to taste.', '2024-04-03 16:19:23', '2024-04-03 16:19:23', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9trvaFWZcH5S5jbpYGLuNIeDB5w7HyI2gHUUfwDaZow&s'),
(14, 'Tacos al Pastor', 'Authentic Mexican tacos featuring marinated pork cooked on a spit', 'pork shoulder;pineapple;onion;garlic;chili peppers;vinegar;achiote paste;tortillas', 'Marinate thinly sliced pork shoulder in a mixture of pineapple, onion, garlic, chili peppers, vinegar, and achiote paste; Grill or roast until cooked through; Serve in tortillas with your favorite toppings.', '2024-04-03 16:20:19', '2024-04-03 16:20:19', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS48EEczAs8K6Z7Dkz6Lmi9DluXP43IE8x_MzVtpF7g8Q&s'),
(15, 'Caprese Salad', 'Simple and elegant Italian salad showcasing ripe tomatoes, fresh mozzarella, and basil.', 'tomato;mozzarella cheese;fresh basil;olive oil;balsamic vinegar;salt;pepper', 'Slice tomatoes and mozzarella cheese; Arrange on a plate with fresh basil leaves; Drizzle with olive oil and balsamic vinegar; Season with salt and pepper.', '2024-04-03 16:21:07', '2024-04-03 16:21:07', 'https://whatsgabycooking.com/wp-content/uploads/2023/06/Dinner-Party-__-Traditional-Caprese-1-1200x800-1.jpg'),
(16, 'Beef Stir-Fry with Broccoli', 'Quick and flavorful stir-fry with tender beef and crisp broccoli.', 'beef sirloin;broccoli;soy sauce;garlic;ginger;sesame oil;cornstarch;rice', 'Marinate sliced beef in soy sauce, garlic, ginger, sesame oil, and cornstarch; Stir-fry beef until browned; Add broccoli and continue cooking until tender; Serve over rice.', '2024-04-03 16:21:52', '2024-04-03 16:21:52', 'https://natashaskitchen.com/wp-content/uploads/2019/08/Beef-and-Broccoli-2.jpg'),
(17, 'Sushi Rolls', 'Homemade sushi filled with fresh fish, avocado, cucumber, and rice.', 'sushi rice;nori sheets;tuna;salmon;avocado;cucumber;rice vinegar;soy sauce;wasabi;pickled ginger', 'Prepare sushi rice according to package instructions, then let it cool; Place nori sheets on a bamboo mat, spread rice evenly, and add desired fillings; Roll tightly and slice into pieces; Serve with soy sauce, wasabi, and pickled ginger.', '2024-04-03 16:23:20', '2024-04-03 16:23:20', 'https://www.allrecipes.com/thmb/PujANugNXQW7ugnivQt8b4_-13k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/RM-169856-CreamCheeseandCrabSushiRolls-ddmfs-3x4-6421-8d233e210db3458f8574bafad1c69e70.jpg'),
(18, 'Creamy Potato Soup', 'Comforting and creamy soup perfect for a cozy night in.', 'potatoes;onion;garlic;vegetable broth;milk;cream;salt;pepper', 'Peel and dice potatoes, chop onion, and mince garlic; In a pot, sauté onion and garlic until fragrant; Add diced potatoes and vegetable broth, simmer until potatoes are tender; Blend mixture until smooth using a blender; Return soup to the pot and stir in milk and cream; Season with salt and pepper to taste.', '2024-04-03 16:24:07', '2024-04-03 16:24:07', 'https://www.spendwithpennies.com/wp-content/uploads/2023/11/Creamy-Potato-Soup-SpendWithPennies-25.jpg'),
(19, 'Crispy Air Fryer Chicken Wings', 'Deliciously crispy chicken wings without all the extra oil.', 'chicken wings;salt;pepper;garlic powder;paprika', 'Season chicken wings with salt, pepper, garlic powder, and paprika; Preheat air fryer; Place chicken wings in the air fryer basket, making sure they are not overcrowded; Cook at 400°F for 25-30 minutes, flipping halfway through; Serve hot with your favorite dipping sauce.', '2024-04-03 16:24:42', '2024-04-03 16:24:42', 'https://airfryingfoodie.com/wp-content/uploads/2021/10/Crispy-Air-Fryer-Chicken-WIngs-copy-4.jpeg'),
(20, 'Morning Coffee Delight', 'A perfect cup of coffee to start your day', 'coffee beans;water;milk;sugar (optional)', 'Grind coffee beans to your preferred consistency using a coffee grinder; Fill the coffee maker with water and add ground coffee to the filter; Brew according to the coffee maker\'s instructions; Pour coffee into a mug and add milk and sugar to taste, if desired.', '2024-04-03 16:25:39', '2024-04-03 16:25:39', 'https://static.vecteezy.com/system/resources/previews/030/908/098/large_2x/aromatic-coffee-cup-on-wooden-table-a-refreshing-morning-delight-generated-by-ai-photo.jpg'),
(21, 'Homemade Potato Chips', 'Crispy and flavorful potato chips made from scratch.', 'potatoes;salt;olive oil', 'Peel potatoes and thinly slice them using a potato peeler or a mandoline slicer; Soak potato slices in cold water for 30 minutes, then pat dry with paper towels; Toss potato slices with olive oil and salt; Arrange potato slices in a single layer in the air fryer basket; Cook at 375°F for 10-15 minutes, shaking the basket halfway through; Serve hot and crispy.', '2024-04-03 16:26:24', '2024-04-03 16:26:24', 'https://thissillygirlskitchen.com/wp-content/uploads/2014/08/Potato-Chips-Recipe-6.jpg'),
(22, 'Zesty Citrus Salad', 'A refreshing salad bursting with citrus flavors.', 'oranges;grapefruits;lemons;lime;honey;olive oil;salt;pepper', 'Peel citrus fruits and slice them into rounds or segments; Arrange citrus slices on a plate; In a small bowl, whisk together honey, olive oil, salt, and pepper to make the dressing; Drizzle dressing over the citrus slices just before serving.', '2024-04-03 16:27:38', '2024-04-03 16:27:38', 'https://i0.wp.com/www.sweetandsorrel.com/wp-content/uploads/2020/07/CitrusAvocadoSalad-5-scaled.jpg?fit=1707%2C2560&ssl=1'),
(23, 'Creamy Mushroom Risotto', 'Rich and creamy risotto with earthy mushroom flavors.', 'arborio rice;mushrooms;onion;garlic;vegetable broth;butter;parmesan cheese;white wine;salt;pepper', 'Finely chop onion and garlic; Slice mushrooms; In a pan, sauté onion and garlic in butter until softened; Add sliced mushrooms and cook until browned; Stir in arborio rice and cook for a few minutes until translucent; Deglaze the pan with white wine; Gradually add vegetable broth, stirring constantly until rice is creamy and tender; Stir in parmesan cheese, salt, and pepper to taste.', '2024-04-03 16:28:27', '2024-04-03 16:28:27', 'https://www.spendwithpennies.com/wp-content/uploads/2023/07/1200-Creamy-Mushroom-Risotto-SpendWithPennies.jpg');

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
(1, 'mariana', 'Melo', 'me gusta', 5, 20, 2, '2024-04-03 16:45:21', '2024-04-03 16:45:21'),
(2, 'mariana', 'maso', 'maso', 3, 20, 2, '2024-04-03 16:45:46', '2024-04-03 16:45:46'),
(3, 'mariana', 'melo', 'sisa', 4, 19, 2, '2024-04-03 16:46:05', '2024-04-03 16:46:05'),
(4, 'mariana', 'no me gusto', 'aas', 2, 19, 2, '2024-04-03 16:46:24', '2024-04-03 16:46:24');

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
(1, 'mariana', 'marianaguja236@gmail', NULL, '$2y$12$66KE8Xdd9qrYTYgNfSJc0.vJ/nBdvKPQnSX6etQm457aO1vEGLZIa', NULL, '2024-03-31 20:23:06', '2024-03-31 20:23:06', 'client', 0),
(2, 'mariana', 'marianaguja236@gmail.com', NULL, '$2y$12$vjG52zbwiq4OAZ0s4hQULer9Cb04Poq55xWS7JPhK67E.XqLl/UpS', NULL, '2024-04-02 07:38:19', '2024-04-03 11:11:06', 'admin', -57789),
(3, 'estebaj', 'estebangiraldollano@gmail.com', NULL, '$2y$12$FlWey5.iF5ojgKYoaQyNduJkEZ.PqI9aKEWYVgKTDSsDIRchvsm1y', NULL, '2024-04-02 07:52:27', '2024-04-02 22:10:27', 'client', -47161);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `product_recipe`
--
ALTER TABLE `product_recipe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
