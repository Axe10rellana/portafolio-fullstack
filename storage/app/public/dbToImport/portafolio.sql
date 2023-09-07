-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2023 at 04:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portafolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `configuraciones`
--

CREATE TABLE `configuraciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreconfiguracion` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configuraciones`
--

INSERT INTO `configuraciones` (`id`, `nombreconfiguracion`, `valor`, `created_at`, `updated_at`) VALUES
(1, 'nombre_plataforma', 'Studio fenix', NULL, NULL),
(2, 'titulo_portafolio', 'Portafolio', NULL, NULL),
(3, 'titulo_entradas', 'Sobre mí', NULL, NULL),
(4, 'link_download_cv', 'https://axe10rellana.github.io/portafolio/portafolio/assets/resources/Axel_orellana_office.pdf', NULL, NULL),
(5, 'titulo_servicios', '¿Qué te ofrezco?', NULL, NULL),
(6, 'titulo_contacto', 'Contactame', NULL, NULL),
(7, 'correo', 'axelorellana550@gmail.com', NULL, NULL),
(8, 'titulo_ubicacion', 'Ubicación', NULL, NULL),
(13, 'ubicacion', 'Merlo, Buenos Aires, Argentina', NULL, NULL),
(14, 'titulo_redes_sociales', 'Redes sociales', NULL, NULL),
(15, 'link_linkedin', 'https://www.linkedin.com/in/axel-orellana/', NULL, NULL),
(16, 'link_whatsapp', '1153470218', NULL, NULL),
(17, 'link_github', 'https://github.com/Axe10rellana', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entradas`
--

CREATE TABLE `entradas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entradas`
--

INSERT INTO `entradas` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Estoy buscando una experiencia que me permita incrementar mis conocimientos y poder crecer profesionalmente, soy una persona autodidacta y proactiva.', NULL, NULL),
(2, 'Como Desarrollador Frontend lo que más me gusta hacer es la maquetación, la interactividad de la interfaz y el consumo de APIs.', NULL, NULL),
(3, 'Como Técnico en informática lo que más me gusta hacer es son tareas de mantenimiento de software para que las computadoras funcionen de manera optima.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_25_125040_proyectos', 1),
(7, '2023_08_29_175457_servicios', 1),
(8, '2023_08_30_125847_entradas', 1),
(9, '2023_08_30_145858_postulantes', 1),
(10, '2023_08_30_213405_configuraciones', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `postulantes`
--

CREATE TABLE `postulantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postulantes`
--

INSERT INTO `postulantes` (`id`, `nombre`, `imagen`, `puesto`, `created_at`, `updated_at`) VALUES
(1, 'Axel Orellana', 'https://raw.githubusercontent.com/Axe10rellana/Sistema-prestamos-con-php-mysql-mvc-poo/main/vistas/assets/avatar/Avatar.png', 'Desarrollador web y soporte tecnico', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

CREATE TABLE `proyectos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Interfaz moderna de la IA GPT-3', 'https://raw.githubusercontent.com/Axe10rellana/portafolio/gh-pages/portafolio/assets/images/interfazModernUiUxGpt3.png', 'Interfaz moderna de la IA GPT-3 hecha en React.js.', 'https://axe10rellanamodern-ui-ux-gpt3.netlify.app/', NULL, NULL),
(2, 'Interfaz moderna del restaurante Gericht', 'https://raw.githubusercontent.com/Axe10rellana/portafolio/gh-pages/portafolio/assets/images/interfazGerichtRestaurantApp.png', 'Interfaz moderna del restaurante Gericht hecha en React.js.', 'https://gericht-restaurant-app.vercel.app/', NULL, NULL),
(3, 'Interfaz moderna del banco HooBank', 'https://raw.githubusercontent.com/Axe10rellana/portafolio/gh-pages/portafolio/assets/images/interfazBankModernApp.png', 'Interfaz moderna del banco HooBank hecha en React.js y Tailwind.', 'https://bank-modern-app-two.vercel.app/', NULL, NULL),
(4, 'Interfaz moderna del Metaversus', 'https://raw.githubusercontent.com/Axe10rellana/portafolio/gh-pages/portafolio/assets/images/metaversus.png', 'Interfaz moderna del Metaversus hecha en React.js y Tailwind.', 'https://modern-ui-metaversus.netlify.app/', NULL, NULL),
(5, 'TV Shows App', 'https://raw.githubusercontent.com/Axe10rellana/portafolio/gh-pages/portafolio/assets/images/tvshowsapp.png', 'Aplicación de tipo buscador de shows de TV hecha en React.js que utiliza la API de TVmaze.', 'https://axe10rellana.github.io/tvshowsapp/tvshowsapp/#/', NULL, NULL),
(6, 'Google Clone', 'https://raw.githubusercontent.com/Axe10rellana/portafolio/gh-pages/portafolio/assets/images/clondegoogle.png', 'Aplicación de tipo buscador hecha en React.js y Redux que utiliza la API de Google.', 'https://axe10rellanaclondegoogle.netlify.app/#/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `icono` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `icono`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Programacion web', 'fas fa-laptop-code fa-fw', 'Desarrollo de sitios y aplicaciones web para plataformas web. Te ayudo a construir la parte Frontend de tu proyecto.', NULL, NULL),
(2, 'Diseño web', 'fas fa-mobile-screen fa-fw', 'Maqueto tus diseños estáticos y los convierto en increíbles sitios y aplicaciones web responsivas, óptimas y accesibles.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'correo@gmail.com', NULL, '$2y$10$fbcMNVP5AQsEFDQUBrx9yeq3xkXvCnLbtNRajxVsXUjRw.D0xl10u', NULL, '2023-09-07 17:36:49', '2023-09-07 17:36:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postulantes`
--
ALTER TABLE `postulantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configuraciones`
--
ALTER TABLE `configuraciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postulantes`
--
ALTER TABLE `postulantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
