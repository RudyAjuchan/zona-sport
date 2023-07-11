-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2023 a las 01:31:00
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zona_sport`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_horas`
--

CREATE TABLE `detalle_horas` (
  `id` bigint UNSIGNED NOT NULL,
  `horas_id` bigint UNSIGNED NOT NULL,
  `dias_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_horas`
--

INSERT INTO `detalle_horas` (`id`, `horas_id`, `dias_id`, `created_at`, `updated_at`) VALUES
(1, 13, 1, NULL, NULL),
(2, 14, 1, NULL, NULL),
(3, 15, 1, NULL, NULL),
(4, 16, 1, NULL, NULL),
(5, 17, 1, NULL, NULL),
(6, 18, 1, NULL, NULL),
(7, 19, 1, NULL, NULL),
(8, 20, 1, NULL, NULL),
(9, 21, 1, NULL, NULL),
(10, 22, 1, NULL, NULL),
(11, 23, 1, NULL, NULL),
(12, 24, 1, NULL, NULL),
(13, 25, 1, NULL, NULL),
(14, 26, 1, NULL, NULL),
(15, 1, 2, NULL, NULL),
(16, 2, 2, NULL, NULL),
(17, 3, 2, NULL, NULL),
(18, 4, 2, NULL, NULL),
(19, 5, 2, NULL, NULL),
(20, 6, 2, NULL, NULL),
(21, 7, 2, NULL, NULL),
(22, 8, 2, NULL, NULL),
(23, 9, 2, NULL, NULL),
(24, 10, 2, NULL, NULL),
(25, 11, 2, NULL, NULL),
(26, 12, 2, NULL, NULL),
(27, 13, 2, NULL, NULL),
(28, 14, 2, NULL, NULL),
(29, 15, 2, NULL, NULL),
(30, 16, 2, NULL, NULL),
(31, 17, 2, NULL, NULL),
(32, 18, 2, NULL, NULL),
(33, 19, 2, NULL, NULL),
(34, 20, 2, NULL, NULL),
(35, 21, 2, NULL, NULL),
(36, 22, 2, NULL, NULL),
(37, 23, 2, NULL, NULL),
(38, 24, 2, NULL, NULL),
(39, 25, 2, NULL, NULL),
(40, 26, 2, NULL, NULL),
(41, 11, 3, NULL, NULL),
(42, 12, 3, NULL, NULL),
(43, 13, 3, NULL, NULL),
(44, 14, 3, NULL, NULL),
(45, 15, 3, NULL, NULL),
(46, 16, 3, NULL, NULL),
(47, 17, 3, NULL, NULL),
(48, 18, 3, NULL, NULL),
(49, 19, 3, NULL, NULL),
(50, 20, 3, NULL, NULL),
(51, 21, 3, NULL, NULL),
(52, 22, 3, NULL, NULL),
(53, 23, 3, NULL, NULL),
(54, 24, 3, NULL, NULL),
(55, 25, 3, NULL, NULL),
(56, 26, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Entre semana', NULL, NULL),
(2, 'Sábado', NULL, NULL),
(3, 'Domingo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas`
--

CREATE TABLE `horas` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_inicio` time NOT NULL,
  `h_fin` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horas`
--

INSERT INTO `horas` (`id`, `nombre`, `h_inicio`, `h_fin`, `created_at`, `updated_at`) VALUES
(1, '8:00-8:30am', '08:00:00', '08:30:00', NULL, NULL),
(2, '8:30-9:00am', '08:30:00', '09:00:00', NULL, NULL),
(3, '9:00-9:30am', '09:00:00', '09:30:00', NULL, NULL),
(4, '9:30-10:00am', '09:30:00', '10:00:00', NULL, NULL),
(5, '10:00-10:30am', '10:00:00', '10:30:00', NULL, NULL),
(6, '10:30-11:00am', '10:30:00', '11:00:00', NULL, NULL),
(7, '11:00-11:30am', '11:00:00', '11:30:00', NULL, NULL),
(8, '11:30-12:00pm', '11:30:00', '12:00:00', NULL, NULL),
(9, '12:00-12:30pm', '12:00:00', '12:30:00', NULL, NULL),
(10, '12:30-1:00pm', '12:30:00', '13:00:00', NULL, NULL),
(11, '1:00-1:30pm', '13:00:00', '13:30:00', NULL, NULL),
(12, '1:30-2:00pm', '13:30:00', '14:00:00', NULL, NULL),
(13, '2:00-2:30pm', '14:00:00', '14:30:00', NULL, NULL),
(14, '2:30-3:00pm', '14:30:00', '15:00:00', NULL, NULL),
(15, '3:00-3:30pm', '15:00:00', '15:30:00', NULL, NULL),
(16, '3:30-4:00pm', '15:30:00', '16:00:00', NULL, NULL),
(17, '4:00-4:30pm', '16:00:00', '16:30:00', NULL, NULL),
(18, '4:30-5:00pm', '16:30:00', '17:00:00', NULL, NULL),
(19, '5:00-5:30pm', '17:00:00', '17:30:00', NULL, NULL),
(20, '5:30-6:00pm', '17:30:00', '18:00:00', NULL, NULL),
(21, '6:00-6:30pm', '18:00:00', '18:30:00', NULL, NULL),
(22, '6:30-7:00pm', '18:30:00', '19:00:00', NULL, NULL),
(23, '7:00-7:30pm', '19:00:00', '19:30:00', NULL, NULL),
(24, '7:30-8:00pm', '19:30:00', '20:00:00', NULL, NULL),
(25, '8:00-8:30pm', '20:00:00', '20:30:00', NULL, NULL),
(26, '8:30-9:00pm', '20:30:00', '21:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2023_07_05_172645_create_permission_tables', 1),
(26, '2023_07_06_175208_create_reservas_table', 1),
(27, '2023_07_10_201138_create_horas_table', 1),
(28, '2023_07_10_201254_create_dias_table', 1),
(29, '2023_07_10_201343_create_detalle_horas_table', 1),
(30, '2023_07_10_202309_create_reservas_detalles_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `tipo_pago` int NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `nombre`, `dpi`, `telefono`, `correo`, `nit`, `fecha`, `tipo_pago`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Rudy Ajuchán', '1236525145263', '12563254', 'rudyajuchansec32@gmail.com', '52154-6', '2023-07-11', 1, 1, '2023-07-11 22:18:06', '2023-07-11 22:18:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_detalles`
--

CREATE TABLE `reservas_detalles` (
  `id` bigint UNSIGNED NOT NULL,
  `horas_id` bigint UNSIGNED NOT NULL,
  `reservas_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas_detalles`
--

INSERT INTO `reservas_detalles` (`id`, `horas_id`, `reservas_id`, `created_at`, `updated_at`) VALUES
(1, 16, 1, '2023-07-11 22:19:25', '2023-07-11 22:19:25'),
(2, 17, 1, '2023-07-11 22:19:25', '2023-07-11 22:19:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-07-12 01:10:38', '2023-07-12 01:10:38'),
(2, 'Trabajador', 'web', '2023-07-12 01:10:38', '2023-07-12 01:10:38'),
(3, 'AdminU', 'web', '2023-07-12 01:10:38', '2023-07-12 01:10:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'rudyajuchansec32@gmail.com', NULL, '$2y$10$whmsc.9aQgEO5XjazRuw7eyRl.qZtQSw9VwLwwwID5LyTfAmP5h.6', NULL, '2023-07-12 01:10:38', '2023-07-12 01:10:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_horas`
--
ALTER TABLE `detalle_horas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_horas_horas_id_foreign` (`horas_id`),
  ADD KEY `detalle_horas_dias_id_foreign` (`dias_id`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `horas`
--
ALTER TABLE `horas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas_detalles`
--
ALTER TABLE `reservas_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservas_detalles_horas_id_foreign` (`horas_id`),
  ADD KEY `reservas_detalles_reservas_id_foreign` (`reservas_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT de la tabla `detalle_horas`
--
ALTER TABLE `detalle_horas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horas`
--
ALTER TABLE `horas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reservas_detalles`
--
ALTER TABLE `reservas_detalles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_horas`
--
ALTER TABLE `detalle_horas`
  ADD CONSTRAINT `detalle_horas_dias_id_foreign` FOREIGN KEY (`dias_id`) REFERENCES `dias` (`id`),
  ADD CONSTRAINT `detalle_horas_horas_id_foreign` FOREIGN KEY (`horas_id`) REFERENCES `horas` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reservas_detalles`
--
ALTER TABLE `reservas_detalles`
  ADD CONSTRAINT `reservas_detalles_horas_id_foreign` FOREIGN KEY (`horas_id`) REFERENCES `horas` (`id`),
  ADD CONSTRAINT `reservas_detalles_reservas_id_foreign` FOREIGN KEY (`reservas_id`) REFERENCES `reservas` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
