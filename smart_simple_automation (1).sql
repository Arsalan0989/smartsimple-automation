-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 03:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_simple_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_id` bigint(20) NOT NULL DEFAULT 0,
  `slug` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `attribute_type` tinyint(4) NOT NULL DEFAULT 0,
  `has_options` tinyint(4) NOT NULL DEFAULT 0,
  `options_source` tinyint(4) NOT NULL DEFAULT 0,
  `options_source_file` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options_source_json` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options_source_api` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options_source_key` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options_source_value` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options_entity_id` bigint(20) NOT NULL DEFAULT 0,
  `validation_json` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `entity_id`, `slug`, `attribute_type`, `has_options`, `options_source`, `options_source_file`, `options_source_json`, `options_source_api`, `options_source_key`, `options_source_value`, `options_entity_id`, `validation_json`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, 'Date', 5, 0, 0, '0', '0', '0', '0', '0', 0, NULL, 0, '2021-12-30 07:32:53', '2021-12-30 07:32:53'),
(2, 1, 'Text', 0, 0, 0, '0', '0', '0', '0', '0', 0, NULL, 0, '2021-12-30 07:34:19', '2021-12-30 07:34:19'),
(3, 2, 'Name', 0, 0, 0, '0', '0', '0', '0', '0', 0, NULL, 0, '2021-12-30 08:03:45', '2021-12-30 08:03:45'),
(4, 2, 'Gender', 16, 0, 0, '0', '0', '0', '0', '0', 0, NULL, 0, '2021-12-30 08:09:19', '2021-12-30 08:09:19'),
(5, 3, 'Date', 5, 0, 0, '0', '0', '0', '0', '0', 0, NULL, 0, '2021-12-30 09:05:35', '2021-12-30 09:05:35'),
(6, 4, 'File Upload', 4, 0, 0, '0', '0', '0', '0', '0', 0, NULL, 0, '2021-12-31 08:58:56', '2021-12-31 08:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_id` bigint(20) NOT NULL DEFAULT 0,
  `attribute_id` bigint(20) NOT NULL DEFAULT 0,
  `key` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `entity_id`, `attribute_id`, `key`, `value`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'label', 'Date', 3, '2021-12-30 07:32:53', '2021-12-30 07:33:25'),
(2, 1, 1, 'label_class', 'date', 3, '2021-12-30 07:32:53', '2021-12-30 07:33:25'),
(3, 1, 1, 'name', 'date', 3, '2021-12-30 07:32:53', '2021-12-30 07:33:25'),
(4, 1, 1, 'id', 'date', 3, '2021-12-30 07:32:53', '2021-12-30 07:33:25'),
(5, 1, 1, 'class', 'date_picker', 3, '2021-12-30 07:32:53', '2021-12-30 07:33:25'),
(6, 1, 1, 'placeholder', 'Please enter date', 3, '2021-12-30 07:32:53', '2021-12-30 07:33:25'),
(7, 1, 2, 'label', 'Text', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:54'),
(8, 1, 2, 'label_class', 'text', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:54'),
(9, 1, 2, 'name', 'text', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:54'),
(10, 1, 2, 'id', 'text', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:54'),
(11, 1, 2, 'class', 'text', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:54'),
(12, 1, 2, 'placeholder', 'Olease enter text', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:54'),
(13, 1, 2, 'readonly', '0', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:19'),
(14, 1, 2, 'disabled', '0', 3, '2021-12-30 07:34:19', '2021-12-30 07:34:19'),
(15, 2, 3, 'label', 'Name', 3, '2021-12-30 08:03:45', '2021-12-30 08:04:27'),
(16, 2, 3, 'label_class', 'name', 3, '2021-12-30 08:03:45', '2021-12-30 08:04:27'),
(17, 2, 3, 'name', 'Name', 3, '2021-12-30 08:03:45', '2021-12-30 08:04:27'),
(18, 2, 3, 'id', 'name', 3, '2021-12-30 08:03:45', '2021-12-30 08:04:27'),
(19, 2, 3, 'class', 'form-control', 3, '2021-12-30 08:03:45', '2021-12-30 08:04:27'),
(20, 2, 3, 'placeholder', 'Enter your name', 3, '2021-12-30 08:03:45', '2021-12-30 08:04:27'),
(21, 2, 3, 'readonly', '0', 3, '2021-12-30 08:03:45', '2021-12-30 08:03:45'),
(22, 2, 3, 'disabled', '0', 3, '2021-12-30 08:03:45', '2021-12-30 08:03:45'),
(23, 2, 4, 'label', 'Gender', 3, '2021-12-30 08:09:19', '2021-12-30 08:09:52'),
(24, 2, 4, 'label_class', 'gender', 3, '2021-12-30 08:09:19', '2021-12-30 08:09:52'),
(25, 2, 4, 'name', 'Gender', 3, '2021-12-30 08:09:19', '2021-12-30 08:09:52'),
(26, 2, 4, 'id', 'gender', 3, '2021-12-30 08:09:19', '2021-12-30 08:09:52'),
(27, 2, 4, 'class', 'form-control', 3, '2021-12-30 08:09:19', '2021-12-30 08:09:52'),
(28, 2, 4, 'placeholder', 'Gender', 3, '2021-12-30 08:09:19', '2021-12-30 08:09:52'),
(29, 3, 5, 'label', 'Date', 3, '2021-12-30 09:05:35', '2021-12-30 09:05:58'),
(30, 3, 5, 'label_class', 'date', 3, '2021-12-30 09:05:35', '2021-12-30 09:05:58'),
(31, 3, 5, 'name', 'Date', 3, '2021-12-30 09:05:35', '2021-12-30 09:05:58'),
(32, 3, 5, 'id', 'date', 3, '2021-12-30 09:05:35', '2021-12-30 09:05:58'),
(33, 3, 5, 'class', 'date_input', 3, '2021-12-30 09:05:35', '2021-12-30 09:05:58'),
(34, 3, 5, 'placeholder', 'Date', 3, '2021-12-30 09:05:35', '2021-12-30 09:05:58'),
(35, 4, 6, 'label', 'File Upload', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01'),
(36, 4, 6, 'label_class', 'file_manager', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01'),
(37, 4, 6, 'name', 'file_manager', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01'),
(38, 4, 6, 'id', 'file_manager', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01'),
(39, 4, 6, 'class', 'form-control', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01'),
(40, 4, 6, 'placeholder', 'Enter file manager', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01'),
(41, 4, 6, 'readonly', '1', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01'),
(42, 4, 6, 'disabled', '1', 3, '2021-12-31 08:58:56', '2021-12-31 09:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `company_id`, `name`, `organization`, `address`, `country`, `state`, `city`, `zipcode`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(2, 1, 'Quon Mclaughlin', 'Avery and Baxter LLC', 'Mollitia ullam sed n', 'Nesciunt rerum esse', 'Delectus provident', 'Commodo officia maxi', '24358', 'Nobis et harum accus', 'Rerum voluptas et ex', '2021-12-30 08:27:27', '2021-12-30 08:27:27'),
(3, 1, 'Curran Workman', 'Forbes Chandler Co', 'Sunt consectetur tot', 'Quibusdam nihil cill', 'Quia ut error duis d', 'Quia laudantium bla', '38148', 'Quam consequatur ve', 'Rem adipisci iure ir', '2021-12-30 08:28:01', '2021-12-30 08:28:01'),
(4, 1, 'Sybill Browning', 'Glenn Reid Associates', 'Laborum Laboris et', 'Id autem voluptas fu', 'Corrupti eius obcae', 'Minima qui id et dol', '93851', 'Enim aspernatur esse', 'Quia consequat Even', '2021-12-30 08:28:12', '2021-12-30 08:28:12'),
(5, 1, 'Eve Ballard', 'Morrison and Casey Plc', 'Est id nihil quia a', 'Eu aut vel eu qui lo', 'Eu officia qui iure', 'Quos sed aut sit do', '59157', 'Omnis esse quo elige', 'Autem eum vel volupt', '2021-12-30 08:28:24', '2021-12-30 08:28:24'),
(6, 1, 'Jennifer Davenport', 'Meyer and Nicholson LLC', 'Qui voluptatibus mol', 'Dolorem adipisicing', 'Non non eligendi a i', 'Nulla facere sunt i', '98395', 'Et elit iure volupt', 'Nobis consequatur in', '2021-12-30 08:28:34', '2021-12-30 08:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT 0,
  `name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'logo.png',
  `about` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `services` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `name`, `logo`, `about`, `services`, `created_at`, `updated_at`) VALUES
(1, 1, 'Smart Simple Automation', '0', '0', '0', '2021-12-29 09:35:15', '2021-12-29 09:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `company_addresses`
--

CREATE TABLE `company_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `address_label` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `address_line_1` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `contact_value` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_contacts`
--

CREATE TABLE `company_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `contact_type` enum('Email','Phone','URL') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Phone',
  `contact_value` enum('Email','Phone','URL') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Phone',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE `entities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `involve_client` tinyint(4) NOT NULL DEFAULT 0,
  `has_childs` tinyint(4) NOT NULL DEFAULT 0,
  `heading` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `icon` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_title` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `show_in_menu` tinyint(4) NOT NULL DEFAULT 1,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`id`, `parent_id`, `involve_client`, `has_childs`, `heading`, `slug`, `icon`, `description`, `menu_title`, `show_in_menu`, `published`, `company_id`, `created_at`, `updated_at`) VALUES
(2, 0, 0, 0, 'Menu', 'menu', 'uploads/1/entity/73587252b388357933a59e657c95401f.png', 'Description', 'Menu List', 1, 1, 1, '2021-12-30 08:02:56', '2021-12-30 08:02:56'),
(3, 0, 0, 0, 'Menu2', 'menu2', 'uploads/1/entity/ae14cb62a6d74f07bb92a5c8c226762b.png', 'gdfgfdgdf', 'noone', 0, 1, 1, '2021-12-30 09:05:18', '2021-12-30 09:05:18'),
(4, 0, 0, 0, 'File Manager', 'file-manager', 'uploads/1/entity/180fec05b4000bb5949c891d79e43163.png', 'Lorem ipsum', 'File Manager', 1, 1, 1, '2021-12-31 08:58:17', '2021-12-31 08:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `entity_data`
--

CREATE TABLE `entity_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `entity_id` bigint(20) NOT NULL DEFAULT 0,
  `client_id` bigint(20) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL DEFAULT 0,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `device` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `recordjson` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entity_data`
--

INSERT INTO `entity_data` (`id`, `company_id`, `entity_id`, `client_id`, `user_id`, `ip`, `device`, `recordjson`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 0, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', NULL, '2021-12-30 08:06:13', '2021-12-30 08:06:13'),
(2, 1, 2, 0, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', NULL, '2021-12-31 08:57:16', '2021-12-31 08:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `entity_data_values`
--

CREATE TABLE `entity_data_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_data_id` bigint(20) NOT NULL DEFAULT 0,
  `entity_id` bigint(20) NOT NULL DEFAULT 0,
  `attribute_id` bigint(20) NOT NULL DEFAULT 0,
  `attribute_value_id` bigint(20) NOT NULL DEFAULT 0,
  `attribute_entity_value` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute_string_value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `attribute_int_value` int(11) NOT NULL DEFAULT 0,
  `attribute_min_int_value` int(11) NOT NULL DEFAULT 0,
  `attribute_max_int_value` int(11) NOT NULL DEFAULT 0,
  `attribute_float_value` decimal(10,2) NOT NULL DEFAULT 0.00,
  `attribute_min_float_value` decimal(10,2) NOT NULL DEFAULT 0.00,
  `attribute_max_float_value` decimal(10,2) NOT NULL DEFAULT 0.00,
  `attribute_text_value` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute_date_value` date DEFAULT NULL,
  `attribute_time_value` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute_datetime_value` datetime DEFAULT NULL,
  `attribute_min_date_value` date DEFAULT NULL,
  `attribute_max_date_value` date DEFAULT NULL,
  `attribute_min_datetime_value` date DEFAULT NULL,
  `attribute_max_datetime_value` date DEFAULT NULL,
  `attribute_min_time_value` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute_max_time_value` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entity_data_values`
--

INSERT INTO `entity_data_values` (`id`, `entity_data_id`, `entity_id`, `attribute_id`, `attribute_value_id`, `attribute_entity_value`, `attribute_string_value`, `attribute_int_value`, `attribute_min_int_value`, `attribute_max_int_value`, `attribute_float_value`, `attribute_min_float_value`, `attribute_max_float_value`, `attribute_text_value`, `attribute_date_value`, `attribute_time_value`, `attribute_datetime_value`, `attribute_min_date_value`, `attribute_max_date_value`, `attribute_min_datetime_value`, `attribute_max_datetime_value`, `attribute_min_time_value`, `attribute_max_time_value`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 3, 17, 'Tested Name', '0', 0, 0, 0, '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-30 08:06:13', '2021-12-30 08:06:13'),
(2, 2, 0, 3, 17, 'File Manager', '0', 0, 0, 0, '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-31 08:57:16', '2021-12-31 08:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `heading` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field_type` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fieldsets`
--

CREATE TABLE `fieldsets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fieldset_fields`
--

CREATE TABLE `fieldset_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fieldset_id` bigint(20) NOT NULL DEFAULT 0,
  `field_id` bigint(20) NOT NULL DEFAULT 0,
  `tabindex` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `field_values`
--

CREATE TABLE `field_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_id` bigint(20) NOT NULL DEFAULT 0,
  `key` bigint(20) NOT NULL DEFAULT 0,
  `value` bigint(20) NOT NULL DEFAULT 0,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `form_scope` tinyint(4) NOT NULL DEFAULT 0,
  `form_start_date` date DEFAULT NULL,
  `has_end_date` tinyint(4) NOT NULL DEFAULT 0,
  `form_end_date` date DEFAULT NULL,
  `form_ip_access` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `client_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_conditions`
--

CREATE TABLE `form_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_field_id` bigint(20) NOT NULL DEFAULT 0,
  `condition_operator` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `target_form_field_id` bigint(20) NOT NULL DEFAULT 0,
  `target_form_field_value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE `form_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `form_id` bigint(20) NOT NULL DEFAULT 0,
  `field_id` bigint(20) NOT NULL DEFAULT 0,
  `fieldset_id` bigint(20) NOT NULL DEFAULT 0,
  `entity_id` bigint(20) NOT NULL DEFAULT 0,
  `tabindex` int(11) NOT NULL DEFAULT 0,
  `validations` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_validations`
--

CREATE TABLE `form_validations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_field_id` bigint(20) NOT NULL DEFAULT 0,
  `validation_json` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_29_074537_create_companies_table', 1),
(6, '2021_12_29_074538_create_company_contacts_table', 1),
(7, '2021_12_29_074539_create_company_addresses_table', 1),
(8, '2021_12_29_074540_create_clients_table', 1),
(9, '2021_12_29_074541_create_entities_table', 1),
(10, '2021_12_29_074542_create_attributes_table', 1),
(11, '2021_12_29_074543_create_attribute_values_table', 1),
(12, '2021_12_29_074544_create_entity_data_table', 1),
(13, '2021_12_29_074545_create_entity_data_values_table', 1),
(14, '2021_12_29_074546_create_forms_table', 1),
(15, '2021_12_29_074547_create_fields_table', 1),
(16, '2021_12_29_074548_create_field_values_table', 1),
(17, '2021_12_29_074549_create_fieldsets_table', 1),
(18, '2021_12_29_074550_create_fieldset_fields_table', 1),
(19, '2021_12_29_074551_create_form_fields_table', 1),
(20, '2021_12_29_074552_create_form_validations_table', 1),
(21, '2021_12_29_074553_create_form_conditions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_country_code` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `superadmin` tinyint(4) NOT NULL DEFAULT 0,
  `saas_user` tinyint(4) NOT NULL DEFAULT 0,
  `company` tinyint(4) NOT NULL DEFAULT 0,
  `company_staff` tinyint(4) NOT NULL DEFAULT 0,
  `company_id` bigint(20) NOT NULL DEFAULT 0,
  `client_id` bigint(20) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobile_country_code`, `mobile`, `email_verified_at`, `mobile_verified_at`, `password`, `superadmin`, `saas_user`, `company`, `company_staff`, `company_id`, `client_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', '1234567890', '1234567890', NULL, NULL, '$2y$10$nbIXUSaVqP0XteA6tQzCs.MDFeTbx0Sgwp6wxXhmCh6j0neJsbcWS', 0, 1, 1, 1, 1, 0, NULL, '2021-12-29 09:35:15', '2021-12-29 09:35:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_entity_id_index` (`entity_id`),
  ADD KEY `attributes_slug_index` (`slug`),
  ADD KEY `attributes_attribute_type_index` (`attribute_type`),
  ADD KEY `attributes_has_options_index` (`has_options`),
  ADD KEY `attributes_options_source_index` (`options_source`),
  ADD KEY `attributes_options_source_file_index` (`options_source_file`),
  ADD KEY `attributes_options_source_json_index` (`options_source_json`),
  ADD KEY `attributes_options_source_api_index` (`options_source_api`),
  ADD KEY `attributes_options_source_key_index` (`options_source_key`),
  ADD KEY `attributes_options_source_value_index` (`options_source_value`),
  ADD KEY `attributes_options_entity_id_index` (`options_entity_id`),
  ADD KEY `attributes_published_index` (`published`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_entity_id_index` (`entity_id`),
  ADD KEY `attribute_values_attribute_id_index` (`attribute_id`),
  ADD KEY `attribute_values_key_index` (`key`),
  ADD KEY `attribute_values_value_index` (`value`),
  ADD KEY `attribute_values_is_default_index` (`is_default`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_company_id_index` (`company_id`),
  ADD KEY `clients_name_index` (`name`),
  ADD KEY `clients_organization_index` (`organization`),
  ADD KEY `clients_address_index` (`address`),
  ADD KEY `clients_country_index` (`country`),
  ADD KEY `clients_state_index` (`state`),
  ADD KEY `clients_city_index` (`city`),
  ADD KEY `clients_zipcode_index` (`zipcode`),
  ADD KEY `clients_lat_index` (`lat`),
  ADD KEY `clients_lng_index` (`lng`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_index` (`user_id`),
  ADD KEY `companies_name_index` (`name`),
  ADD KEY `companies_logo_index` (`logo`);

--
-- Indexes for table `company_addresses`
--
ALTER TABLE `company_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_addresses_company_id_index` (`company_id`),
  ADD KEY `company_addresses_address_label_index` (`address_label`),
  ADD KEY `company_addresses_address_line_1_index` (`address_line_1`),
  ADD KEY `company_addresses_contact_value_index` (`contact_value`),
  ADD KEY `company_addresses_country_index` (`country`),
  ADD KEY `company_addresses_state_index` (`state`),
  ADD KEY `company_addresses_city_index` (`city`),
  ADD KEY `company_addresses_zipcode_index` (`zipcode`),
  ADD KEY `company_addresses_lat_index` (`lat`),
  ADD KEY `company_addresses_lng_index` (`lng`);

--
-- Indexes for table `company_contacts`
--
ALTER TABLE `company_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_contacts_company_id_index` (`company_id`);

--
-- Indexes for table `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entities_parent_id_index` (`parent_id`),
  ADD KEY `entities_involve_client_index` (`involve_client`),
  ADD KEY `entities_has_childs_index` (`has_childs`),
  ADD KEY `entities_heading_index` (`heading`),
  ADD KEY `entities_slug_index` (`slug`),
  ADD KEY `entities_icon_index` (`icon`),
  ADD KEY `entities_description_index` (`description`),
  ADD KEY `entities_menu_title_index` (`menu_title`),
  ADD KEY `entities_show_in_menu_index` (`show_in_menu`),
  ADD KEY `entities_published_index` (`published`),
  ADD KEY `entities_company_id_index` (`company_id`);

--
-- Indexes for table `entity_data`
--
ALTER TABLE `entity_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entity_data_company_id_index` (`company_id`),
  ADD KEY `entity_data_entity_id_index` (`entity_id`),
  ADD KEY `entity_data_client_id_index` (`client_id`),
  ADD KEY `entity_data_user_id_index` (`user_id`),
  ADD KEY `entity_data_ip_index` (`ip`),
  ADD KEY `entity_data_device_index` (`device`);

--
-- Indexes for table `entity_data_values`
--
ALTER TABLE `entity_data_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entity_data_values_entity_data_id_index` (`entity_data_id`),
  ADD KEY `entity_data_values_entity_id_index` (`entity_id`),
  ADD KEY `entity_data_values_attribute_id_index` (`attribute_id`),
  ADD KEY `entity_data_values_attribute_value_id_index` (`attribute_value_id`),
  ADD KEY `entity_data_values_attribute_string_value_index` (`attribute_string_value`),
  ADD KEY `entity_data_values_attribute_int_value_index` (`attribute_int_value`),
  ADD KEY `entity_data_values_attribute_min_int_value_index` (`attribute_min_int_value`),
  ADD KEY `entity_data_values_attribute_max_int_value_index` (`attribute_max_int_value`),
  ADD KEY `entity_data_values_attribute_float_value_index` (`attribute_float_value`),
  ADD KEY `entity_data_values_attribute_min_float_value_index` (`attribute_min_float_value`),
  ADD KEY `entity_data_values_attribute_max_float_value_index` (`attribute_max_float_value`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fields_company_id_index` (`company_id`),
  ADD KEY `fields_heading_index` (`heading`),
  ADD KEY `fields_slug_index` (`slug`),
  ADD KEY `fields_description_index` (`description`),
  ADD KEY `fields_field_type_index` (`field_type`);

--
-- Indexes for table `fieldsets`
--
ALTER TABLE `fieldsets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fieldsets_heading_index` (`heading`),
  ADD KEY `fieldsets_description_index` (`description`);

--
-- Indexes for table `fieldset_fields`
--
ALTER TABLE `fieldset_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fieldset_fields_fieldset_id_index` (`fieldset_id`),
  ADD KEY `fieldset_fields_field_id_index` (`field_id`),
  ADD KEY `fieldset_fields_tabindex_index` (`tabindex`);

--
-- Indexes for table `field_values`
--
ALTER TABLE `field_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `field_values_field_id_index` (`field_id`),
  ADD KEY `field_values_key_index` (`key`),
  ADD KEY `field_values_value_index` (`value`),
  ADD KEY `field_values_is_default_index` (`is_default`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forms_heading_index` (`heading`),
  ADD KEY `forms_slug_index` (`slug`),
  ADD KEY `forms_description_index` (`description`),
  ADD KEY `forms_form_scope_index` (`form_scope`),
  ADD KEY `forms_has_end_date_index` (`has_end_date`),
  ADD KEY `forms_published_index` (`published`),
  ADD KEY `forms_company_id_index` (`company_id`),
  ADD KEY `forms_client_id_index` (`client_id`);

--
-- Indexes for table `form_conditions`
--
ALTER TABLE `form_conditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_conditions_form_field_id_index` (`form_field_id`),
  ADD KEY `form_conditions_condition_operator_index` (`condition_operator`),
  ADD KEY `form_conditions_target_form_field_id_index` (`target_form_field_id`),
  ADD KEY `form_conditions_target_form_field_value_index` (`target_form_field_value`);

--
-- Indexes for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_fields_company_id_index` (`company_id`),
  ADD KEY `form_fields_form_id_index` (`form_id`),
  ADD KEY `form_fields_field_id_index` (`field_id`),
  ADD KEY `form_fields_fieldset_id_index` (`fieldset_id`),
  ADD KEY `form_fields_entity_id_index` (`entity_id`),
  ADD KEY `form_fields_tabindex_index` (`tabindex`);

--
-- Indexes for table `form_validations`
--
ALTER TABLE `form_validations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_validations_form_field_id_index` (`form_field_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD KEY `users_firstname_index` (`firstname`),
  ADD KEY `users_lastname_index` (`lastname`),
  ADD KEY `users_mobile_country_code_index` (`mobile_country_code`),
  ADD KEY `users_superadmin_index` (`superadmin`),
  ADD KEY `users_saas_user_index` (`saas_user`),
  ADD KEY `users_company_index` (`company`),
  ADD KEY `users_company_staff_index` (`company_staff`),
  ADD KEY `users_company_id_index` (`company_id`),
  ADD KEY `users_client_id_index` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_addresses`
--
ALTER TABLE `company_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_contacts`
--
ALTER TABLE `company_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entities`
--
ALTER TABLE `entities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `entity_data`
--
ALTER TABLE `entity_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `entity_data_values`
--
ALTER TABLE `entity_data_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fieldsets`
--
ALTER TABLE `fieldsets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fieldset_fields`
--
ALTER TABLE `fieldset_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `field_values`
--
ALTER TABLE `field_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_conditions`
--
ALTER TABLE `form_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_validations`
--
ALTER TABLE `form_validations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
