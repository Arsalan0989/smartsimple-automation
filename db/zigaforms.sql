-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 04:57 PM
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
-- Database: `zigaforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_addon`
--

CREATE TABLE `fbcf_uiform_addon` (
  `add_name` varchar(45) NOT NULL DEFAULT '',
  `add_title` text DEFAULT NULL,
  `add_info` text DEFAULT NULL,
  `add_system` smallint(5) DEFAULT NULL,
  `add_hasconfig` smallint(5) DEFAULT NULL,
  `add_version` varchar(45) DEFAULT NULL,
  `add_icon` text DEFAULT NULL,
  `add_installed` smallint(5) DEFAULT NULL,
  `add_order` int(5) DEFAULT NULL,
  `add_params` longtext DEFAULT NULL,
  `add_log` longtext DEFAULT NULL,
  `addonscol` varchar(45) DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `add_xml` longtext DEFAULT NULL,
  `add_load_back` smallint(5) DEFAULT NULL,
  `add_load_front` smallint(5) DEFAULT NULL,
  `is_field` smallint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbcf_uiform_addon`
--

INSERT INTO `fbcf_uiform_addon` (`add_name`, `add_title`, `add_info`, `add_system`, `add_hasconfig`, `add_version`, `add_icon`, `add_installed`, `add_order`, `add_params`, `add_log`, `addonscol`, `flag_status`, `created_date`, `updated_date`, `created_ip`, `updated_ip`, `created_by`, `updated_by`, `add_xml`, `add_load_back`, `add_load_front`, `is_field`) VALUES
('func_anim', 'Animation effect', 'You can animate your fields adding many animation effects. Also you can set up the delay and other options.', 1, 1, NULL, NULL, 1, 1, NULL, NULL, NULL, 0, '1979-12-31 19:00:01', '2018-01-31 05:35:14', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
('mgtranslate', 'Translation Manager Add-on', 'Translate any text on zigaform, and add new language', 1, 1, '1.0', NULL, 0, 4, '{\"required_wp\":5.0,\"required_php\":7.2}', NULL, NULL, 0, '2020-09-26 07:13:06', '2020-09-26 07:12:40', NULL, NULL, NULL, NULL, '<?xml version=\"1.0\"?> <params><required_wp>5.0</required_wp><required_php>7.2</required_php></params>', 1, 0, 0),
('webhook', 'WebHooks Add-On', 'You can use the WebHooks Add-On to send data from your forms to any custom page or script you like. This page can perform integration tasks to transform, parse, manipulate and send your submission data to wherever you choose. If you are developing an application that needs to be updated every time a form is submitted, WebHooks is for you. The advantage of WebHooks is that the passing of data is immediate and you can pass all submitted form data at once. e.g. you can connect with Webhook of Zapier - https%3A%2F%2Fzapier.com%2Fpage%2Fwebhooks%2F', 1, 1, NULL, NULL, 1, 2, NULL, NULL, NULL, 0, '2019-12-29 20:36:23', '2019-12-29 20:34:27', NULL, NULL, NULL, NULL, NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_addon_details`
--

CREATE TABLE `fbcf_uiform_addon_details` (
  `add_name` varchar(45) NOT NULL,
  `fmb_id` int(10) NOT NULL,
  `adet_data` longtext DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_addon_details_log`
--

CREATE TABLE `fbcf_uiform_addon_details_log` (
  `add_log_id` bigint(20) NOT NULL,
  `add_name` varchar(45) NOT NULL,
  `fmb_id` int(10) NOT NULL,
  `adet_data` longtext DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `log_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_fields`
--

CREATE TABLE `fbcf_uiform_fields` (
  `fmf_id` int(10) NOT NULL,
  `fmf_uniqueid` varchar(255) DEFAULT NULL,
  `fmf_data` longtext DEFAULT NULL,
  `fmf_fieldname` varchar(255) DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `fmf_status_qu` smallint(5) NOT NULL DEFAULT 0,
  `type_fby_id` int(6) NOT NULL,
  `form_fmb_id` int(10) NOT NULL,
  `order_frm` smallint(5) DEFAULT NULL,
  `order_rec` smallint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbcf_uiform_fields`
--

INSERT INTO `fbcf_uiform_fields` (`fmf_id`, `fmf_uniqueid`, `fmf_data`, `fmf_fieldname`, `flag_status`, `created_date`, `updated_date`, `created_ip`, `updated_ip`, `created_by`, `updated_by`, `fmf_status_qu`, `type_fby_id`, `form_fmb_id`, `order_frm`, `order_rec`) VALUES
(1, 'uibao029je8', '{\"type\":\"6\",\"id\":\"uibao029je8\",\"skin\":{\"margin\":{\"show_st\":\"1\",\"top\":\"5\",\"bottom\":\"5\",\"left\":\"0\",\"right\":\"0\"},\"padding\":{\"show_st\":\"1\",\"top\":\"0\",\"bottom\":\"0\",\"left\":\"0\",\"right\":\"0\"},\"custom_css\":{\"ctm_id\":\"\",\"ctm_class\":\"\",\"ctm_additional\":\"\"}},\"field_name\":\"textbox3836\",\"order_frm\":\"1\",\"type_n\":\"textbox\",\"input\":{\"value\":\"\",\"size\":\"14\",\"bold\":\"0\",\"italic\":\"0\",\"underline\":\"0\",\"placeholder\":\"\",\"color\":\"#000\",\"font\":\"\",\"font_st\":\"1\",\"val_align\":\"\"},\"label\":{\"text\":\"Text label\",\"size\":\"14\",\"bold\":\"0\",\"italic\":\"0\",\"underline\":\"0\",\"color\":\"#000\",\"font\":\"{\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}\",\"font_st\":\"1\",\"shadow_st\":\"0\",\"shadow_color\":\"#666\",\"shadow_x\":\"1\",\"shadow_y\":\"1\",\"shadow_blur\":\"3\"},\"sublabel\":{\"text\":\"\",\"size\":\"14\",\"bold\":\"1\",\"italic\":\"1\",\"underline\":\"0\",\"color\":\"#000\",\"font\":\"{\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}\",\"font_st\":\"1\",\"shadow_st\":\"0\",\"shadow_color\":\"#666\",\"shadow_x\":\"1\",\"shadow_y\":\"1\",\"shadow_blur\":\"3\"},\"txt_block\":{\"block_pos\":\"1\",\"block_st\":\"1\",\"block_align\":\"0\",\"grid_layout\":\"2\"},\"el_background\":{\"show_st\":\"1\",\"type\":\"1\",\"start_color\":\"\",\"end_color\":\"\",\"solid_color\":\"#ffffff\"},\"el_border_radius\":{\"show_st\":\"1\",\"size\":\"0\"},\"el_border\":{\"show_st\":\"0\",\"color\":\"#000\",\"color_focus_st\":\"0\",\"color_focus\":\"#000\",\"style\":\"1\",\"width\":\"1\"},\"help_block\":{\"text\":\"here your content\",\"show_st\":\"0\",\"font\":\"\",\"font_st\":\"0\",\"pos\":\"\"},\"validate\":{\"typ_val\":\"0\",\"typ_val_custxt\":\"\",\"customval_regex\":\"\",\"pos\":\"0\",\"tip_col\":\"#000000\",\"tip_bg\":\"#ffffff\",\"reqicon_st\":\"0\",\"reqicon_pos\":\"0\",\"reqicon_img\":\"glyphicon-asterisk\"},\"clogic\":{\"show_st\":\"0\",\"f_show\":\"1\",\"f_all\":\"1\",\"list\":[]}}', 'textbox3836', NULL, NULL, '2022-01-12 12:28:53', NULL, NULL, NULL, NULL, 1, 6, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_fields_type`
--

CREATE TABLE `fbcf_uiform_fields_type` (
  `fby_id` int(6) NOT NULL,
  `fby_name` varchar(25) DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbcf_uiform_fields_type`
--

INSERT INTO `fbcf_uiform_fields_type` (`fby_id`, `fby_name`, `flag_status`, `created_date`, `updated_date`, `created_ip`, `updated_ip`, `created_by`, `updated_by`) VALUES
(1, '1 Col', 1, '1979-12-31 19:00:01', '2014-05-23 20:10:27', NULL, NULL, NULL, NULL),
(2, '2 Cols', 1, '1979-12-31 19:00:01', '2014-05-23 20:10:44', NULL, NULL, NULL, NULL),
(3, '3 Cols', 1, '1979-12-31 19:00:01', '2014-05-23 20:10:57', NULL, NULL, NULL, NULL),
(4, '4 Cols', 1, '1979-12-31 19:00:01', '2014-05-23 20:11:36', NULL, NULL, NULL, NULL),
(5, '6 Cols', 1, '1979-12-31 19:00:01', '2014-05-23 20:11:45', NULL, NULL, NULL, NULL),
(6, 'Textbox', 1, '1979-12-31 19:00:01', '2014-05-23 20:11:58', NULL, NULL, NULL, NULL),
(7, 'Textarea', 1, '1979-12-31 19:00:01', '2014-05-23 20:12:12', NULL, NULL, NULL, NULL),
(8, 'Radio Button', 1, '1979-12-31 19:00:01', '2014-05-23 20:13:21', NULL, NULL, NULL, NULL),
(9, 'Checkbox', 1, '1979-12-31 19:00:01', '2014-05-23 20:13:33', NULL, NULL, NULL, NULL),
(10, 'Select', 1, '1979-12-31 19:00:01', '2014-05-23 20:13:44', NULL, NULL, NULL, NULL),
(11, 'Multiple Select', 1, '1979-12-31 19:00:01', '2014-05-23 20:13:57', NULL, NULL, NULL, NULL),
(12, 'File Upload', 1, '1979-12-31 19:00:01', '2014-05-23 20:28:55', NULL, NULL, NULL, NULL),
(13, 'Image Upload', 1, '1979-12-31 19:00:01', '2014-05-23 20:29:06', NULL, NULL, NULL, NULL),
(14, 'Custom HTML', 1, '1979-12-31 19:00:01', '2014-05-23 20:29:31', NULL, NULL, NULL, NULL),
(15, 'Password', 1, '1979-12-31 19:00:01', '2014-05-23 20:30:39', NULL, NULL, NULL, NULL),
(16, 'Slider', 1, '1979-12-31 19:00:01', '2014-05-23 20:30:53', NULL, NULL, NULL, NULL),
(17, 'Range', 1, '1979-12-31 19:00:01', '2014-05-23 20:35:41', NULL, NULL, NULL, NULL),
(18, 'Spinner', 1, '1979-12-31 19:00:01', '2014-05-23 20:37:09', NULL, NULL, NULL, NULL),
(19, 'Captcha', 1, '1979-12-31 19:00:01', '2014-05-23 20:37:19', NULL, NULL, NULL, NULL),
(20, 'Submit button', 1, '1979-12-31 19:00:01', '2014-05-23 20:39:59', NULL, NULL, NULL, NULL),
(21, 'Hidden field', 1, '1979-12-31 19:00:01', '2014-05-23 20:40:13', NULL, NULL, NULL, NULL),
(22, 'Star rating', 1, '1979-12-31 19:00:01', '2014-05-23 20:40:24', NULL, NULL, NULL, NULL),
(23, 'Color Picker', 1, '1979-12-31 19:00:01', '2014-05-23 20:40:37', NULL, NULL, NULL, NULL),
(24, 'Date Picker', 1, '1979-12-31 19:00:01', '2014-05-23 20:41:19', NULL, NULL, NULL, NULL),
(25, 'Time Picker', 1, '1979-12-31 19:00:01', '2014-05-23 20:41:46', NULL, NULL, NULL, NULL),
(26, 'Date and Time', 1, '1979-12-31 19:00:01', '2014-05-23 20:50:36', NULL, NULL, NULL, NULL),
(27, 'ReCaptcha', 1, '1979-12-31 19:00:01', '2014-05-23 20:50:53', NULL, NULL, NULL, NULL),
(28, 'Prepended text\r\n', 1, '1979-12-31 19:00:01', '2014-05-23 20:51:16', NULL, NULL, NULL, NULL),
(29, 'Appended text\r\n', 1, '1979-12-31 19:00:01', '2014-05-23 20:51:38', NULL, NULL, NULL, NULL),
(30, 'Append and prepend\r\n', 1, '1979-12-31 19:00:01', '2014-05-23 20:51:55', NULL, NULL, NULL, NULL),
(31, 'Panel', 1, '1979-12-31 19:00:01', '2014-05-23 20:55:32', NULL, NULL, NULL, NULL),
(32, 'Divider', 1, '1979-12-31 19:00:01', '2014-05-23 20:58:58', NULL, NULL, NULL, NULL),
(33, 'Heading 1', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(34, 'Heading 2', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(35, 'Heading 3', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(36, 'Heading 4', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(37, 'Heading 5', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(38, 'Heading 6', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(39, 'Wizard buttons', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(40, 'Switch', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(41, 'Dinamic Checkbox', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(42, 'Dinamic RadioButton', 1, '1979-12-31 19:00:01', '2014-05-23 21:25:51', NULL, NULL, NULL, NULL),
(43, 'Date 2', 1, '1979-12-31 19:00:01', '2018-10-11 09:10:35', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_form`
--

CREATE TABLE `fbcf_uiform_form` (
  `fmb_id` int(10) NOT NULL,
  `fmb_data` longtext DEFAULT NULL,
  `fmb_name` varchar(255) DEFAULT NULL,
  `fmb_html` longtext DEFAULT NULL,
  `fmb_html_backend` longtext DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `fmb_html_css` longtext DEFAULT NULL,
  `fmb_default` tinyint(1) DEFAULT 0,
  `fmb_skin_status` tinyint(1) DEFAULT 0,
  `fmb_skin_data` longtext DEFAULT NULL,
  `fmb_skin_type` smallint(5) DEFAULT 1,
  `fmb_data2` longtext DEFAULT NULL,
  `fmb_rec_tpl_html` longtext DEFAULT NULL,
  `fmb_rec_tpl_st` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbcf_uiform_form`
--

INSERT INTO `fbcf_uiform_form` (`fmb_id`, `fmb_data`, `fmb_name`, `fmb_html`, `fmb_html_backend`, `flag_status`, `created_date`, `updated_date`, `created_ip`, `updated_ip`, `created_by`, `updated_by`, `fmb_html_css`, `fmb_default`, `fmb_skin_status`, `fmb_skin_data`, `fmb_skin_type`, `fmb_data2`, `fmb_rec_tpl_html`, `fmb_rec_tpl_st`) VALUES
(1, '{\"app_ver\":\"\",\"main\":{\"submit_ajax\":\"1\",\"add_css\":\"\",\"add_js\":\"\",\"onload_scroll\":\"0\",\"preload_noconflict\":\"0\",\"pdf_charset\":\"UTF-8\",\"pdf_font\":\"2\",\"pdf_paper_size\":\"a4\",\"pdf_paper_orie\":\"landscape\",\"pdf_html_fullpage\":\"0\",\"email_html_fullpage\":\"0\",\"email_dissubm\":\"0\",\"pdf_show_onpage\":\"1\",\"email_pdf_fullpage\":\"0\"},\"skin\":{\"form_width\":{\"show_st\":\"0\",\"max\":\"800\"},\"form_padding\":{\"show_st\":\"1\",\"pos_top\":\"20\",\"pos_right\":\"17\",\"pos_bottom\":\"20\",\"pos_left\":\"17\"},\"form_background\":{\"show_st\":\"1\",\"type\":\"1\",\"start_color\":\"#eeeeee\",\"end_color\":\"#ffffff\",\"solid_color\":\"#ffffff\",\"image\":\"\"},\"form_border_radius\":{\"show_st\":\"0\",\"size\":\"5\"},\"form_border\":{\"show_st\":\"0\",\"color\":\"#000\",\"style\":\"1\",\"width\":\"1\"},\"form_shadow\":{\"show_st\":\"1\",\"color\":\"#CCCCCC\",\"h_shadow\":\"3\",\"v_shadow\":\"3\",\"blur\":\"10\"}},\"wizard\":{\"enable_st\":\"0\",\"theme_type\":\"0\",\"theme\":[{\"skin_tab_cur_bgcolor\":\"#4798E7\",\"skin_tab_cur_txtcolor\":\"#ffffff\",\"skin_tab_cur_numtxtcolor\":\"#4798E7\",\"skin_tab_inac_bgcolor\":\"#ECF0F1\",\"skin_tab_inac_txtcolor\":\"#95A5A6\",\"skin_tab_inac_numtxtcolor\":\"#ECF0F1\",\"skin_tab_done_bgcolor\":\"#9a8afa\",\"skin_tab_done_txtcolor\":\"#ffffff\",\"skin_tab_done_numtxtcolor\":\"#ECF0F1\",\"skin_tab_cont_bgcolor\":\"#F9F9F9\",\"skin_tab_cont_borcol\":\"#D4D4D4\"},{\"skin_tab_cur_bgcolor\":\"#4798E7\",\"skin_tab_cur_txtcolor\":\"#000000\",\"skin_tab_cur_numtxtcolor\":\"#4798E7\",\"skin_tab_cur_bg_numtxt\":\"#ffffff\",\"skin_tab_inac_bgcolor\":\"#cccccc\",\"skin_tab_inac_txtcolor\":\"#95A5A6\"}]},\"onsubm\":{\"sm_successtext\":\"%0A%3Cdiv%20class%3D%22rockfm-alert%20rockfm-alert-success%22%20role%3D%22alert%22%3ESuccess!%20Form%20was%20sent%20successfully.%3C%2Fdiv%3E%0A\",\"sm_boxmsg_bg_st\":\"0\",\"sm_boxmsg_bg_solid\":\"\",\"sm_boxmsg_bg_start\":\"\",\"sm_boxmsg_bg_end\":\"\",\"sm_redirect_st\":\"0\",\"sm_redirect_url\":\"\",\"mail_from_email\":\"smartsimple@gmail.com\",\"mail_from_name\":\"Here goes your From Name\",\"mail_template_msg\":\"%0A%3Cdiv%3E%0A%3Ctable%20width%3D%22600%22%20cellspacing%3D%225%22%20cellpadding%3D%225%22%20border%3D%220%22%20style%3D%22background%3A%20%23daf1f8%3B%20border%3A%201px%20solid%20%23000000%3B%22%3E%0A%3Ctbody%3E%0A%3Ctr%3E%0A%3Cth%20style%3D%22background-color%3A%20%2391c5f2%3B%22%3ENew%20form%20request%3C%2Fth%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20valign%3D%22top%22%20style%3D%22text-align%3A%20left%3B%22%3EYou%20are%20receiving%20a%20new%20form%20request%3A%3Cbr%20%2F%3E%20%3Cbr%20%2F%3E%20%5Buifm_var%20opt%3D%22rec_summ%22%5D%3Cbr%20%2F%3E%20%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3EForm%20information%3A%3Cbr%20%2F%3E%20URL%3A%5Buifm_var%20opt%3D%22rec_url_fm%22%5D%3Cbr%20%2F%3E%20Form%3A%20%5Buifm_var%20opt%3D%22form_name%22%5D%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3C%2Ftbody%3E%0A%3C%2Ftable%3E%0A%3C%2Fdiv%3E%0A\",\"mail_recipient\":\"smartsimple@gmail.com\",\"mail_cc\":\"\",\"mail_bcc\":\"\",\"mail_subject\":\"Here goes your subject mail\",\"mail_replyto\":\"\",\"mail_usr_st\":\"0\",\"mail_usr_template_msg\":\"%0A%3Cdiv%3E%0A%3Ctable%20width%3D%22600%22%20cellspacing%3D%225%22%20cellpadding%3D%225%22%20border%3D%220%22%20style%3D%22background%3A%20%23daf1f8%3B%20border%3A%201px%20solid%20%23000000%3B%22%3E%0A%3Ctbody%3E%0A%3Ctr%3E%0A%3Cth%20style%3D%22background-color%3A%20%2391c5f2%3B%22%3ENew%20form%20request%3C%2Fth%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20valign%3D%22top%22%20style%3D%22text-align%3A%20left%3B%22%3EYou%20are%20receiving%20a%20new%20form%20request%3A%3Cbr%20%2F%3E%20%3Cbr%20%2F%3E%20%5Buifm_var%20opt%3D%22rec_summ%22%5D%3Cbr%20%2F%3E%20%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3EForm%20information%3A%3Cbr%20%2F%3E%20URL%3A%5Buifm_var%20opt%3D%22rec_url_fm%22%5D%3Cbr%20%2F%3E%20Form%3A%20%5Buifm_var%20opt%3D%22form_name%22%5D%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3C%2Ftbody%3E%0A%3C%2Ftable%3E%0A%3C%2Fdiv%3E%0A\",\"mail_usr_pdf_st\":\"1\",\"mail_usr_pdf_template_msg\":\"\",\"mail_usr_pdf_fn\":\"undefined\",\"mail_usr_recipient\":\"\",\"mail_usr_cc\":\"\",\"mail_usr_bcc\":\"\",\"mail_usr_subject\":\"Here goes your subject mail\",\"mail_usr_replyto\":\"\"},\"num_tabs\":\"1\",\"steps\":{\"tab_title\":[{\"title\":\"Tab title 1\"}],\"tab_cont\":[{\"content\":[{\"iscontainer\":\"0\",\"num_tab\":\"0\",\"type\":\"6\",\"id\":\"uibao029je8\"}]}],\"num_tabs\":\"1\"},\"steps_src\":[{\"uibao029je8\":{\"type\":\"6\",\"id\":\"uibao029je8\",\"skin\":{\"margin\":{\"show_st\":\"1\",\"top\":\"5\",\"bottom\":\"5\",\"left\":\"0\",\"right\":\"0\"},\"padding\":{\"show_st\":\"1\",\"top\":\"0\",\"bottom\":\"0\",\"left\":\"0\",\"right\":\"0\"},\"custom_css\":{\"ctm_id\":\"\",\"ctm_class\":\"\",\"ctm_additional\":\"\"}},\"field_name\":\"textbox3836\",\"order_frm\":\"1\",\"type_n\":\"textbox\",\"input\":{\"value\":\"\",\"size\":\"14\",\"bold\":\"0\",\"italic\":\"0\",\"underline\":\"0\",\"placeholder\":\"\",\"color\":\"#000\",\"font\":\"\",\"font_st\":\"1\",\"val_align\":\"\"},\"label\":{\"text\":\"Text label\",\"size\":\"14\",\"bold\":\"0\",\"italic\":\"0\",\"underline\":\"0\",\"color\":\"#000\",\"font\":\"{\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}\",\"font_st\":\"1\",\"shadow_st\":\"0\",\"shadow_color\":\"#666\",\"shadow_x\":\"1\",\"shadow_y\":\"1\",\"shadow_blur\":\"3\"},\"sublabel\":{\"text\":\"\",\"size\":\"14\",\"bold\":\"1\",\"italic\":\"1\",\"underline\":\"0\",\"color\":\"#000\",\"font\":\"{\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}\",\"font_st\":\"1\",\"shadow_st\":\"0\",\"shadow_color\":\"#666\",\"shadow_x\":\"1\",\"shadow_y\":\"1\",\"shadow_blur\":\"3\"},\"txt_block\":{\"block_pos\":\"1\",\"block_st\":\"1\",\"block_align\":\"0\",\"grid_layout\":\"2\"},\"el_background\":{\"show_st\":\"1\",\"type\":\"1\",\"start_color\":\"\",\"end_color\":\"\",\"solid_color\":\"#ffffff\"},\"el_border_radius\":{\"show_st\":\"1\",\"size\":\"0\"},\"el_border\":{\"show_st\":\"0\",\"color\":\"#000\",\"color_focus_st\":\"0\",\"color_focus\":\"#000\",\"style\":\"1\",\"width\":\"1\"},\"help_block\":{\"text\":\"here your content\",\"show_st\":\"0\",\"font\":\"\",\"font_st\":\"0\",\"pos\":\"\"},\"validate\":{\"typ_val\":\"0\",\"typ_val_custxt\":\"\",\"customval_regex\":\"\",\"pos\":\"0\",\"tip_col\":\"#000000\",\"tip_bg\":\"#ffffff\",\"reqicon_st\":\"0\",\"reqicon_pos\":\"0\",\"reqicon_img\":\"glyphicon-asterisk\"},\"clogic\":{\"show_st\":\"0\",\"f_show\":\"1\",\"f_all\":\"1\",\"list\":[]}}}],\"fm_inputs\":\"uumzsyvir=&qwhgju=Contact&uumzsyvir=800&iyqgvzhq=on&uumzsyvir=20&uumzsyvir=17&uumzsyvir=20&uumzsyvir=17&uumzsyvir=on&deypxarp=#ffffff&deypxarp=#eeeeee&deypxarp=#ffffff&fmvibj=&uumzsyvir=5&inojvuvo=#000&uumzsyvir=1&cbfdtbai=on&vmtlwyci=#CCCCCC&swwpfxj=3&bzxkgrw=3&izcplywf=10&vnetpzgkq=Tab title 1&nvkzavv=#ECF0F1&idbmubaxos=#95A5A6&ptgkqosvd=#ECF0F1&dlghynmn=#4798E7&wsdgbklbj=#ffffff&ulwxsdvbhe=#4798E7&awegbi=&vxvjkvqs=#9a8afa&puixzosx=#ffffff&ileaa=#ECF0F1&qwdxfecxe=#F9F9F9&dhyzytfq=#D4D4D4&vnetpzgkq=&vnetpzgkq=6&vnetpzgkq=textbox3836&auvgdu=Text label&uifm_fld_lbl_size=14&txakvgth=0&jrwyrq=0&yprbt=0&magplxkcp=#000&uifm_fld_lbl_font={\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}&zmlom=1&ilfntjzf=#666&tnfsxjl=1&hqdyklam=1&zaprspo=3&wkluxrkxq=&uifm_fld_sublbl_size=14&mzoaayvaq=1&qcezeuda=1&kqdaptdpuh=0&utsdvlzz=#000&uifm_fld_sublbl_font={\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}&ujsidvpp=1&cqukrzi=#666&bnrzuwrh=1&zedmvzug=1&ijxvqzngp=3&ybmoj=1&gocfpduo=2&axnzuwxt=on&ibtveag=0&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&kgdsazno=&uifm_fld_inp_size=14&dprwwkai=0&vrxirt=0&mosqkeav=0&xhcxpcxb=&sgznv=#000&uifm_fld_inp_font=&jcdjiwm=1&dkmqzjzhtc=0&fkeoaaimlf=on&ebqsodol=#ffffff&ebqsodol=&ebqsodol=&beinhpm=on&vnetpzgkq=0&jhgolzsur=#000&ncygkydrkl=#000&vnetpzgkq=1&vnetpzgkq=1&uifm_fld_inp2_size=8&odxcrsf=0&mijakeihtb=0&emvxciw=0&amqfqmfog=&uifm_fld_inp2_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&uifm_fld_inp3_html=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=0&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&ebqsodol=&ebqsodol=&vnetpzgkq=2&vnetpzgkq=2&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=&uifm_fld_input11_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&vnetpzgkq=&rhtxdod=&uifm_fld_inp12_size=8&tltqthdkt=0&aaeqicwow=0&tdhqjgwcn=0&twlwdn=&fiwampg=&cbnltlne=&uifm_fld_inp12_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&ebqsodol=&ebqsodol=&ebqsodol=&vnetpzgkq=14&wfagbncuee=&wjubmib=&vnetpzgkq=14&jvdlg=&uifm_fld_inp13_size=8&sbdrglbb=0&cmbzprgf=0&wqyetlhe=0&ranthcqyih=&lsejgv=&uifm_fld_inp13_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&ebqsodol=&ebqsodol=&ebqsodol=&vnetpzgkq=14&jyfsglpu=&jrlodd=&vnetpzgkq=14&lcbnptdf=&dwuzqn=&uifm_fld_input16_extallowed=&vnetpzgkq=2&yslicxqiyh=&hftqagspd=&rwquzvs=&vnetpzgkq=&vnetpzgkq=&uifm_frm_inp18_txt_cont=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&ebqsodol=&ebqsodol=&ebqsodol=&gxioqdpoeo=&vnetpzgkq=14&kqvpqwfn=&vnetpzgkq=14&ovscetg=&bqldjcbdr=5&nzczketp=5&mjpvwnzmg=5&lcylwykr=&gckaveoudv=&sdviwkcip=&pxmkmcykb=&tkkgnwj=&uifm_fld_msc_text=&sttsp=&uifm_fld_hblock_font=&rnvrov=0&vnetpzgkq=this is required&vnetpzgkq=&vnetpzgkq=Required only letters&vnetpzgkq=Required only Letters and Numbers&vnetpzgkq=Required only numbers&vnetpzgkq=Required a valid mail&dbwrayuli=0&hdzkwhwe=#000000&aznbsbf=#ffffff&vnetpzgkq=&vnetpzgkq=5&vnetpzgkq=5&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=rockfm_uibao029je8&edzsouz=&zgpb_fld_ctmaddt=&uumzsyvir=1&uumzsyvir=1&uumzsyvir=You need to save the form before seeing the preview&uumzsyvir=Preview for desktops&uumzsyvir=Preview for tablets&uumzsyvir=Preview for smartphone&uumzsyvir=Import form&uumzsyvir=The import has failed. press the accept button&ctoeyog=smartsimple@gmail.com&rfmcxhda=Here goes your From Name&rtmqqbrgzs=smartsimple@gmail.com&scnjgbfqk=Here goes your subject mail&lqysyesscr=&cdkvzq=&uifm_frm_email_replyto=&uifm_frm_email_tmpl=<div >\\r\\n  <table width=\\\"600\\\" cellspacing=\\\"5\\\" cellpadding=\\\"5\\\" border=\\\"0\\\" style=\\\"background: #daf1f8; border: 1px solid #000000;\\\">\\r\\n\\t<tbody>\\r\\n\\t  <tr>\\r\\n\\t\\t<th style=\\\"background-color: #91c5f2;\\\">New form request<br \\/>\\r\\n\\t\\t  <\\/th>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td valign=\\\"top\\\" style=\\\"text-align: left;\\\">You are receiving a new form request:<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  [uifm_var opt=\\\"rec_summ\\\"]<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  <\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td style=\\\"text-align: left;\\\">\\r\\n\\t\\t\\t\\t\\tForm information:<br\\/>\\r\\nURL:[uifm_var opt=\\\"rec_url_fm\\\"]<br \\/>\\r\\nForm: [uifm_var opt=\\\"form_name\\\"]<br \\/>\\r\\n\\t\\t\\t\\t<\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t<\\/tbody>\\r\\n  <\\/table><\\/div>\\r\\n&uifm_frm_email_usr_recipient=&mhumtdrkli=Here goes your subject mail&mvrpclbon=&oewvthr=&cnelzdmq=&uifm_frm_email_usr_tmpl=<div >\\r\\n  <table width=\\\"600\\\" cellspacing=\\\"5\\\" cellpadding=\\\"5\\\" border=\\\"0\\\" style=\\\"background: #daf1f8; border: 1px solid #000000;\\\">\\r\\n\\t<tbody>\\r\\n\\t  <tr>\\r\\n\\t\\t<th style=\\\"background-color: #91c5f2;\\\">New form request<br \\/>\\r\\n\\t\\t  <\\/th>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td valign=\\\"top\\\" style=\\\"text-align: left;\\\">You are receiving a new form request:<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  [uifm_var opt=\\\"rec_summ\\\"]<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  <\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td style=\\\"text-align: left;\\\">\\r\\n\\t\\t\\t\\t\\tForm information:<br\\/>\\r\\nURL:[uifm_var opt=\\\"rec_url_fm\\\"]<br \\/>\\r\\nForm: [uifm_var opt=\\\"form_name\\\"]<br \\/>\\r\\n\\t\\t\\t\\t<\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t<\\/tbody>\\r\\n  <\\/table><\\/div>\\r\\n&uifm_frm_subm_msg=<div class=\\\"rockfm-alert rockfm-alert-success\\\" role=\\\"alert\\\">Success! Form was sent successfully.<\\/div>\\r\\n&ruua=&wmoytiwl=&kjmbrzenjk=&xtoatsne=&uifm_frm_main_addcss=&uifm_frm_main_addjs=&uifm_frm_main_pdf_papersize=a4&uifm_frm_main_pdf_paperorien=landscape&uifm_frm_email_usr_pdf_charset=UTF-8&uifm_frm_email_usr_tmpl_pdf_font=2&uifm_frm_record_tpl_content=<div >\\r\\n  <table width=\\\"600\\\" cellspacing=\\\"5\\\" cellpadding=\\\"5\\\" border=\\\"0\\\" style=\\\"background: #daf1f8; border: 1px solid #000000;\\\">\\r\\n\\t<tbody>\\r\\n\\t  <tr>\\r\\n\\t\\t<th style=\\\"background-color: #91c5f2;\\\">Summary<br \\/>\\r\\n\\t\\t  <\\/th>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td valign=\\\"top\\\" style=\\\"text-align: left;\\\">you information is shown on next::<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  [uifm_var opt=\\\"rec_summ\\\"]<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  <\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td style=\\\"text-align: left;\\\">\\r\\n\\t\\t\\t\\t\\tForm information:<br\\/>\\r\\nURL:[uifm_var opt=\\\"rec_url_fm\\\"]<br \\/>\\r\\nForm: [uifm_var opt=\\\"form_name\\\"]<br \\/>\\r\\n\\t\\t<\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t<\\/tbody>\\r\\n  <\\/table><\\/div>\\r\\n&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=L14qrGTc45G1Tb50&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&zgpbrefeditor=&uumzsyvir=Delete field selected&uumzsyvir=Are you sure?&uumzsyvir=Cancel&uumzsyvir=Yes&uumzsyvir=1&uumzsyvir=1&uumzsyvir=Contact&uumzsyvir=Tour guide info&uumzsyvir=there is not tour guide for this page. press the accept button&uumzsyvir=Success! Updated successfully&uumzsyvir=Form was created&uumzsyvir=Success! The form was created. Now just copy and paste the shortcode to your content&uumzsyvir=the form did not loaded properly. Press regenerate button in order to recover the form&uumzsyvir=Regenerate Form&uumzsyvir=Delete field selected&uumzsyvir=Are you sure?&uumzsyvir=Cancel&uumzsyvir=Yes&uumzsyvir=Removing&uumzsyvir=Form saved&uumzsyvir=Processing&uumzsyvir=Loading&uumzsyvir=Saving\"}', 'Contact', '<div class=\"rockfm-form-container uiform-wrap sfdc-wrap\"><div class=\"rockfm-alert-container\" style=\"display:none;\"></div><form class=\"rockfm-form\" action=\"javascript:void(0);\" name=\"\" method=\"post\" data-zgfm-type=\"1\" data-zgfm-version=\"5.5.1\" enctype=\"multipart/form-data\" id=\"rockfm_form_1\"> <input type=\"hidden\" value=\"1\" class=\"_rockfm_form_id\" name=\"_rockfm_form_id\"><input type=\"hidden\" value=\"0\" class=\"_rockfm_wizard_st\" ><input type=\"hidden\" value=\"CjxkaXYgY2xhc3M9InJvY2tmbS1hbGVydCByb2NrZm0tYWxlcnQtc3VjY2VzcyIgcm9sZT0iYWxlcnQiPlN1Y2Nlc3MhIEZvcm0gd2FzIHNlbnQgc3VjY2Vzc2Z1bGx5LjwvZGl2Pgo=\" name=\"_rockfm_onsubm_smsg\" class=\"_rockfm_onsubm_smsg\" ><!--- ajax or post ---><input type=\"hidden\" value=\"1\" class=\"_rockfm_type_submit\" name=\"_rockfm_type_submit\"><input type=\"hidden\" value=\"rocket_front_submitajaxmode\" name=\"action\"><div class=\"uiform-main-form\"><div class=\"uiform-step-content\" > <div id=\"rockfm_uibao029je8\" data-idfield=\"uibao029je8\" data-typefield=\"6\" class=\"rockfm-textbox rockfm-field \" > <div class=\"rockfm-field-wrap \"><div class=\"rkfm-row\"> <div class=\"rkfm-col-sm-12 rockfm-wrap-label\"><div class=\"rockfm-control-label\"><label class=\"sfdc-control-label\"><span	class=\"rockfm-label\">Text label</span><span data-field-store=\"sublabel-text\"	data-field-option=\"rockfm-sublabel\"	class=\"rockfm-sublabel\"></span></label></div></div><div class=\"rkfm-col-sm-12\"><div class=\"rockfm-input-container\"> <input placeholder=\"\"	class=\"rockfm-txtbox-inp-val sfdc-form-control\"	data-uifm-tabnum=\"0\"	name=\"uiform_fields[uibao029je8]\"	type=\"text\" value=\"\"></div></div></div></div><!-- hidden data --> <div class=\"rockfm-fld-data-hidden\" style=\"display:none;\"><div class=\"rockfm-fld-data-field_name\">textbox3836</div></div><!--/ hidden data --> </div><div class=\"clear\"></div></div> </div><input type=\"hidden\" class=\"rockfm_main_data\" value=\"{&quot;submit_ajax&quot;:&quot;1&quot;,&quot;add_css&quot;:&quot;&quot;,&quot;add_js&quot;:&quot;&quot;,&quot;onload_scroll&quot;:&quot;0&quot;,&quot;preload_noconflict&quot;:&quot;0&quot;,&quot;pdf_charset&quot;:&quot;UTF-8&quot;,&quot;pdf_font&quot;:&quot;2&quot;,&quot;pdf_paper_size&quot;:&quot;a4&quot;,&quot;pdf_paper_orie&quot;:&quot;landscape&quot;,&quot;pdf_html_fullpage&quot;:&quot;0&quot;,&quot;email_html_fullpage&quot;:&quot;0&quot;,&quot;email_dissubm&quot;:&quot;0&quot;,&quot;pdf_show_onpage&quot;:&quot;1&quot;,&quot;email_pdf_fullpage&quot;:&quot;0&quot;}\"> <div class=\"space10\"></div><!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body --><div id=\"blueimp-gallery1\" class=\"blueimp-gallery\"><!-- The container for the modal slides --><div class=\"slides\"></div><!-- Controls for the borderless lightbox --><h3 class=\"title\"></h3><a class=\"prev\">‹</a><a class=\"next\">›</a><a class=\"close\">×</a><a class=\"play-pause\"></a><ol class=\"indicator\"></ol><!-- The modal dialog, which will be used to wrap the lightbox content --><div class=\"sfdc-modal sfdc-fade\"><div class=\"sfdc-modal-dialog\"><div class=\"sfdc-modal-content\"><div class=\"sfdc-modal-header\"><button type=\"button\" class=\"close\" aria-hidden=\"true\">&times;</button><h4 class=\"sfdc-modal-title\"></h4></div><div class=\"sfdc-modal-body next\"></div><div class=\"sfdc-modal-footer\"><button type=\"button\" class=\"sfdc-btn sfdc-btn-default pull-left prev\"><i class=\"sfdc-glyphicon sfdc-glyphicon-chevron-left\"></i>Previous</button><button type=\"button\" class=\"sfdc-btn sfdc-btn-primary next\">Next<i class=\"sfdc-glyphicon sfdc-glyphicon-chevron-right\"></i></button></div></div></div></div></div></form> <!-- Modal --><div class=\"sfdc-modal sfdc-fade uiform_modal_general\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"><div class=\"sfdc-modal-dialog\"><div class=\"sfdc-modal-content\"><div class=\"sfdc-modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button> <h4 class=\"sfdc-modal-title\"></h4></div><div class=\"sfdc-modal-body\"><div class=\"te\"></div></div><div class=\"sfdc-modal-footer\"><button type=\"button\"	class=\"sfdc-btn sfdc-btn-default\"	data-dismiss=\"modal\">Close</button></div></div><!-- /.sfdc-modal-content --></div><!-- /.sfdc-modal-dialog --></div><!-- /.modal --> </div>', '<div class=\"rockfm-form-container uiform-wrap sfdc-wrap\"><div class=\"uiform-main-form\"><div class=\"uiform-step-list uiform-wiztheme0\" style=\"display:none;\"><ul class=\"uiform-steps\"><li class=\"uifm-current\"><a data-tab-nro=\"0\" href=\"#uifm-step-tab-0\"><span class=\"uifm-number\">1</span><span class=\"uifm-title\">Tab title</span></a></li></ul></div><div class=\"uiform-step-content\" style=\"min-height:100px;\"><div data-uifm-step=\"0\" id=\"uifm-step-tab-0\" class=\"uiform-step-pane\" ><div class=\"uiform-items-container uiform-tab-container ui-sortable\"><div id=\"uibao029je8\" data-typefield=\"6\" class=\"uiform-textbox uiform-field uiform-field-childs zgpb-field-template\"><div class=\"uiform-field-wrap\"><div class=\"rkfm-row\"><div class=\"rkfm-col-sm-2\"><div class=\"uifm-control-label\"><label class=\"sfdc-control-label\"><span data-field-option=\"uifm-help-block\"	class=\"uifm-label-helpblock uifm-f-option\"><span class=\"fa fa-question-circle\"></span></span> <span data-field-store=\"label-text\" data-field-option=\"uifm-label\" class=\"uifm-label uifm-f-option\">Textbox label</span> <span data-field-store=\"sublabel-text\" data-field-option=\"uifm-sublabel\" class=\"uifm-sublabel uifm-f-option\">Textbox sublabel</span></label></div></div><div class=\"rkfm-col-sm-10\"><div class=\"uifm-input-container\"><input data-field-store=\"input-value\" data-field-option=\"uifm-txtbox-inp-val\" class=\"uifm-txtbox-inp-val sfdc-form-control uifm-f-option\" type=\"text\" value=\"\"></div><div data-field-option=\"uifm-help-block\" class=\"uifm-help-block uifm-f-option\">Help block text</div></div></div></div></div></div></div></div></div></div>', 1, '2022-01-11 20:28:53', '2022-01-12 12:28:53', '::1', NULL, '1', NULL, ' #rockfm_form_1 #rockfm_uibao029je8 .rockfm-txtbox-inp-val {\n  font-size: 14px;\n  color: #000;\n  text-align: left;\n  background: #ffffff;\n  -webkit-border-radius: 0;\n  -moz-border-radius: 0;\n  border-radius: 0px;\n}\n#rockfm_form_1 #rockfm_uibao029je8 .rockfm-label {\n  display: block;\n  font-size: 14px;\n  font-weight: normal;\n  color: #000;\n  font-family: \'Comic Sans MS\', Arial, sans-serif;\n}\n#rockfm_form_1 #rockfm_uibao029je8 .rockfm-sublabel {\n  font-size: 14px;\n  font-weight: bold;\n  font-style: italic;\n  color: #000;\n  font-family: \'Comic Sans MS\', Arial, sans-serif;\n}\n#rockfm_form_1 #rockfm_uibao029je8 .rockfm-control-label {\n  text-align: left;\n}\n#rockfm_form_1 .popover_uibao029je8 {\n  background: #ffffff !important;\n  color: #000000;\n}\n#rockfm_form_1 .popover_uibao029je8 .popover-arrow:after,\n#rockfm_form_1 .popover_uibao029je8 .arrow:after {\n  border-top-color: #ffffff !important;\n}\n#rockfm_form_1 #rockfm_uibao029je8 {\n  padding: 0px 0px 0px 0px;\n  margin: 5px 0px 5px 0px;\n}\n #rockfm_form_1 .uiform-main-form{  background:#ffffff;    box-shadow: 3px 3px 10px #CCCCCC;   padding: 20px 17px 20px 17px; }  ', 0, 0, NULL, 1, '{\"onsubm\":{\"sm_successtext\":\"%0A%3Cdiv%20class%3D%22rockfm-alert%20rockfm-alert-success%22%20role%3D%22alert%22%3ESuccess!%20Form%20was%20sent%20successfully.%3C%2Fdiv%3E%0A\",\"sm_boxmsg_bg_st\":\"0\",\"sm_boxmsg_bg_solid\":\"\",\"sm_boxmsg_bg_start\":\"\",\"sm_boxmsg_bg_end\":\"\",\"sm_redirect_st\":\"0\",\"sm_redirect_url\":\"\",\"mail_from_email\":\"smartsimple@gmail.com\",\"mail_from_name\":\"Here goes your From Name\",\"mail_template_msg\":\"%0A%3Cdiv%3E%0A%3Ctable%20width%3D%22600%22%20cellspacing%3D%225%22%20cellpadding%3D%225%22%20border%3D%220%22%20style%3D%22background%3A%20%23daf1f8%3B%20border%3A%201px%20solid%20%23000000%3B%22%3E%0A%3Ctbody%3E%0A%3Ctr%3E%0A%3Cth%20style%3D%22background-color%3A%20%2391c5f2%3B%22%3ENew%20form%20request%3C%2Fth%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20valign%3D%22top%22%20style%3D%22text-align%3A%20left%3B%22%3EYou%20are%20receiving%20a%20new%20form%20request%3A%3Cbr%20%2F%3E%20%3Cbr%20%2F%3E%20%5Buifm_var%20opt%3D%22rec_summ%22%5D%3Cbr%20%2F%3E%20%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3EForm%20information%3A%3Cbr%20%2F%3E%20URL%3A%5Buifm_var%20opt%3D%22rec_url_fm%22%5D%3Cbr%20%2F%3E%20Form%3A%20%5Buifm_var%20opt%3D%22form_name%22%5D%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3C%2Ftbody%3E%0A%3C%2Ftable%3E%0A%3C%2Fdiv%3E%0A\",\"mail_recipient\":\"smartsimple@gmail.com\",\"mail_cc\":\"\",\"mail_bcc\":\"\",\"mail_subject\":\"Here goes your subject mail\",\"mail_replyto\":\"\",\"mail_usr_st\":\"0\",\"mail_usr_template_msg\":\"%0A%3Cdiv%3E%0A%3Ctable%20width%3D%22600%22%20cellspacing%3D%225%22%20cellpadding%3D%225%22%20border%3D%220%22%20style%3D%22background%3A%20%23daf1f8%3B%20border%3A%201px%20solid%20%23000000%3B%22%3E%0A%3Ctbody%3E%0A%3Ctr%3E%0A%3Cth%20style%3D%22background-color%3A%20%2391c5f2%3B%22%3ENew%20form%20request%3C%2Fth%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20valign%3D%22top%22%20style%3D%22text-align%3A%20left%3B%22%3EYou%20are%20receiving%20a%20new%20form%20request%3A%3Cbr%20%2F%3E%20%3Cbr%20%2F%3E%20%5Buifm_var%20opt%3D%22rec_summ%22%5D%3Cbr%20%2F%3E%20%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3EForm%20information%3A%3Cbr%20%2F%3E%20URL%3A%5Buifm_var%20opt%3D%22rec_url_fm%22%5D%3Cbr%20%2F%3E%20Form%3A%20%5Buifm_var%20opt%3D%22form_name%22%5D%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3C%2Ftbody%3E%0A%3C%2Ftable%3E%0A%3C%2Fdiv%3E%0A\",\"mail_usr_pdf_st\":\"1\",\"mail_usr_pdf_template_msg\":\"\",\"mail_usr_pdf_fn\":\"undefined\",\"mail_usr_recipient\":\"\",\"mail_usr_cc\":\"\",\"mail_usr_bcc\":\"\",\"mail_usr_subject\":\"Here goes your subject mail\",\"mail_usr_replyto\":\"\"},\"main\":{\"submit_ajax\":\"1\",\"add_css\":\"\",\"add_js\":\"\",\"onload_scroll\":\"0\",\"preload_noconflict\":\"0\",\"pdf_charset\":\"UTF-8\",\"pdf_font\":\"2\",\"pdf_paper_size\":\"a4\",\"pdf_paper_orie\":\"landscape\",\"pdf_html_fullpage\":\"0\",\"email_html_fullpage\":\"0\",\"email_dissubm\":\"0\",\"pdf_show_onpage\":\"1\",\"email_pdf_fullpage\":\"0\"}}', '\n<div>\n<table width=\"600\" cellspacing=\"5\" cellpadding=\"5\" border=\"0\" style=\"background: #daf1f8; border: 1px solid #000000;\">\n<tbody>\n<tr>\n<th style=\"background-color: #91c5f2;\">Summary</th>\n</tr>\n<tr>\n<td valign=\"top\" style=\"text-align: left;\">you information is shown on next::<br /> <br /> [uifm_var opt=\"rec_summ\"]<br /> </td>\n</tr>\n<tr>\n<td style=\"text-align: left;\">Form information:<br /> URL:[uifm_var opt=\"rec_url_fm\"]<br /> Form: [uifm_var opt=\"form_name\"]</td>\n</tr>\n</tbody>\n</table>\n</div>\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_form_log`
--

CREATE TABLE `fbcf_uiform_form_log` (
  `log_id` bigint(20) NOT NULL,
  `log_frm_data` longtext DEFAULT NULL,
  `log_frm_name` varchar(255) DEFAULT NULL,
  `log_frm_html` longtext DEFAULT NULL,
  `log_frm_html_backend` longtext DEFAULT NULL,
  `log_frm_html_css` longtext DEFAULT NULL,
  `log_frm_id` int(10) NOT NULL,
  `log_frm_hash` varchar(255) NOT NULL,
  `flag_status` smallint(5) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbcf_uiform_form_log`
--

INSERT INTO `fbcf_uiform_form_log` (`log_id`, `log_frm_data`, `log_frm_name`, `log_frm_html`, `log_frm_html_backend`, `log_frm_html_css`, `log_frm_id`, `log_frm_hash`, `flag_status`, `created_date`, `updated_date`, `created_ip`, `updated_ip`, `created_by`, `updated_by`) VALUES
(1, '{\"app_ver\":\"\",\"main\":{\"submit_ajax\":\"1\",\"add_css\":\"\",\"add_js\":\"\",\"onload_scroll\":\"0\",\"preload_noconflict\":\"0\",\"pdf_charset\":\"UTF-8\",\"pdf_font\":\"2\",\"pdf_paper_size\":\"a4\",\"pdf_paper_orie\":\"landscape\",\"pdf_html_fullpage\":\"0\",\"email_html_fullpage\":\"0\",\"email_dissubm\":\"0\",\"pdf_show_onpage\":\"1\",\"email_pdf_fullpage\":\"0\"},\"skin\":{\"form_width\":{\"show_st\":\"0\",\"max\":\"800\"},\"form_padding\":{\"show_st\":\"1\",\"pos_top\":\"20\",\"pos_right\":\"17\",\"pos_bottom\":\"20\",\"pos_left\":\"17\"},\"form_background\":{\"show_st\":\"1\",\"type\":\"1\",\"start_color\":\"#eeeeee\",\"end_color\":\"#ffffff\",\"solid_color\":\"#ffffff\",\"image\":\"\"},\"form_border_radius\":{\"show_st\":\"0\",\"size\":\"5\"},\"form_border\":{\"show_st\":\"0\",\"color\":\"#000\",\"style\":\"1\",\"width\":\"1\"},\"form_shadow\":{\"show_st\":\"1\",\"color\":\"#CCCCCC\",\"h_shadow\":\"3\",\"v_shadow\":\"3\",\"blur\":\"10\"}},\"wizard\":{\"enable_st\":\"0\",\"theme_type\":\"0\",\"theme\":[{\"skin_tab_cur_bgcolor\":\"#4798E7\",\"skin_tab_cur_txtcolor\":\"#ffffff\",\"skin_tab_cur_numtxtcolor\":\"#4798E7\",\"skin_tab_inac_bgcolor\":\"#ECF0F1\",\"skin_tab_inac_txtcolor\":\"#95A5A6\",\"skin_tab_inac_numtxtcolor\":\"#ECF0F1\",\"skin_tab_done_bgcolor\":\"#9a8afa\",\"skin_tab_done_txtcolor\":\"#ffffff\",\"skin_tab_done_numtxtcolor\":\"#ECF0F1\",\"skin_tab_cont_bgcolor\":\"#F9F9F9\",\"skin_tab_cont_borcol\":\"#D4D4D4\"},{\"skin_tab_cur_bgcolor\":\"#4798E7\",\"skin_tab_cur_txtcolor\":\"#000000\",\"skin_tab_cur_numtxtcolor\":\"#4798E7\",\"skin_tab_cur_bg_numtxt\":\"#ffffff\",\"skin_tab_inac_bgcolor\":\"#cccccc\",\"skin_tab_inac_txtcolor\":\"#95A5A6\"}]},\"onsubm\":{\"sm_successtext\":\"%0A%3Cdiv%20class%3D%22rockfm-alert%20rockfm-alert-success%22%20role%3D%22alert%22%3ESuccess!%20Form%20was%20sent%20successfully.%3C%2Fdiv%3E%0A\",\"sm_boxmsg_bg_st\":\"0\",\"sm_boxmsg_bg_solid\":\"\",\"sm_boxmsg_bg_start\":\"\",\"sm_boxmsg_bg_end\":\"\",\"sm_redirect_st\":\"0\",\"sm_redirect_url\":\"\",\"mail_from_email\":\"smartsimple@gmail.com\",\"mail_from_name\":\"Here goes your From Name\",\"mail_template_msg\":\"%0A%3Cdiv%3E%0A%3Ctable%20width%3D%22600%22%20cellspacing%3D%225%22%20cellpadding%3D%225%22%20border%3D%220%22%20style%3D%22background%3A%20%23daf1f8%3B%20border%3A%201px%20solid%20%23000000%3B%22%3E%0A%3Ctbody%3E%0A%3Ctr%3E%0A%3Cth%20style%3D%22background-color%3A%20%2391c5f2%3B%22%3ENew%20form%20request%3C%2Fth%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20valign%3D%22top%22%20style%3D%22text-align%3A%20left%3B%22%3EYou%20are%20receiving%20a%20new%20form%20request%3A%3Cbr%20%2F%3E%20%3Cbr%20%2F%3E%20%5Buifm_var%20opt%3D%22rec_summ%22%5D%3Cbr%20%2F%3E%20%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3EForm%20information%3A%3Cbr%20%2F%3E%20URL%3A%5Buifm_var%20opt%3D%22rec_url_fm%22%5D%3Cbr%20%2F%3E%20Form%3A%20%5Buifm_var%20opt%3D%22form_name%22%5D%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3C%2Ftbody%3E%0A%3C%2Ftable%3E%0A%3C%2Fdiv%3E%0A\",\"mail_recipient\":\"smartsimple@gmail.com\",\"mail_cc\":\"\",\"mail_bcc\":\"\",\"mail_subject\":\"Here goes your subject mail\",\"mail_replyto\":\"\",\"mail_usr_st\":\"0\",\"mail_usr_template_msg\":\"%0A%3Cdiv%3E%0A%3Ctable%20width%3D%22600%22%20cellspacing%3D%225%22%20cellpadding%3D%225%22%20border%3D%220%22%20style%3D%22background%3A%20%23daf1f8%3B%20border%3A%201px%20solid%20%23000000%3B%22%3E%0A%3Ctbody%3E%0A%3Ctr%3E%0A%3Cth%20style%3D%22background-color%3A%20%2391c5f2%3B%22%3ENew%20form%20request%3C%2Fth%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20valign%3D%22top%22%20style%3D%22text-align%3A%20left%3B%22%3EYou%20are%20receiving%20a%20new%20form%20request%3A%3Cbr%20%2F%3E%20%3Cbr%20%2F%3E%20%5Buifm_var%20opt%3D%22rec_summ%22%5D%3Cbr%20%2F%3E%20%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3Ctr%3E%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3EForm%20information%3A%3Cbr%20%2F%3E%20URL%3A%5Buifm_var%20opt%3D%22rec_url_fm%22%5D%3Cbr%20%2F%3E%20Form%3A%20%5Buifm_var%20opt%3D%22form_name%22%5D%3C%2Ftd%3E%0A%3C%2Ftr%3E%0A%3C%2Ftbody%3E%0A%3C%2Ftable%3E%0A%3C%2Fdiv%3E%0A\",\"mail_usr_pdf_st\":\"1\",\"mail_usr_pdf_template_msg\":\"\",\"mail_usr_pdf_fn\":\"undefined\",\"mail_usr_recipient\":\"\",\"mail_usr_cc\":\"\",\"mail_usr_bcc\":\"\",\"mail_usr_subject\":\"Here goes your subject mail\",\"mail_usr_replyto\":\"\"},\"num_tabs\":\"1\",\"steps\":{\"tab_title\":[{\"title\":\"Tab title 1\"}],\"tab_cont\":[{\"content\":[{\"iscontainer\":\"0\",\"num_tab\":\"0\",\"type\":\"6\",\"id\":\"uibao029je8\"}]}],\"num_tabs\":\"1\"},\"steps_src\":[{\"uibao029je8\":{\"type\":\"6\",\"id\":\"uibao029je8\",\"skin\":{\"margin\":{\"show_st\":\"1\",\"top\":\"5\",\"bottom\":\"5\",\"left\":\"0\",\"right\":\"0\"},\"padding\":{\"show_st\":\"1\",\"top\":\"0\",\"bottom\":\"0\",\"left\":\"0\",\"right\":\"0\"},\"custom_css\":{\"ctm_id\":\"\",\"ctm_class\":\"\",\"ctm_additional\":\"\"}},\"field_name\":\"textbox3836\",\"order_frm\":\"1\",\"type_n\":\"textbox\",\"input\":{\"value\":\"\",\"size\":\"14\",\"bold\":\"0\",\"italic\":\"0\",\"underline\":\"0\",\"placeholder\":\"\",\"color\":\"#000\",\"font\":\"\",\"font_st\":\"1\",\"val_align\":\"\"},\"label\":{\"text\":\"Text label\",\"size\":\"14\",\"bold\":\"0\",\"italic\":\"0\",\"underline\":\"0\",\"color\":\"#000\",\"font\":\"{\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}\",\"font_st\":\"1\",\"shadow_st\":\"0\",\"shadow_color\":\"#666\",\"shadow_x\":\"1\",\"shadow_y\":\"1\",\"shadow_blur\":\"3\"},\"sublabel\":{\"text\":\"\",\"size\":\"14\",\"bold\":\"1\",\"italic\":\"1\",\"underline\":\"0\",\"color\":\"#000\",\"font\":\"{\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}\",\"font_st\":\"1\",\"shadow_st\":\"0\",\"shadow_color\":\"#666\",\"shadow_x\":\"1\",\"shadow_y\":\"1\",\"shadow_blur\":\"3\"},\"txt_block\":{\"block_pos\":\"1\",\"block_st\":\"1\",\"block_align\":\"0\",\"grid_layout\":\"2\"},\"el_background\":{\"show_st\":\"1\",\"type\":\"1\",\"start_color\":\"\",\"end_color\":\"\",\"solid_color\":\"#ffffff\"},\"el_border_radius\":{\"show_st\":\"1\",\"size\":\"0\"},\"el_border\":{\"show_st\":\"0\",\"color\":\"#000\",\"color_focus_st\":\"0\",\"color_focus\":\"#000\",\"style\":\"1\",\"width\":\"1\"},\"help_block\":{\"text\":\"here your content\",\"show_st\":\"0\",\"font\":\"\",\"font_st\":\"0\",\"pos\":\"\"},\"validate\":{\"typ_val\":\"0\",\"typ_val_custxt\":\"\",\"customval_regex\":\"\",\"pos\":\"0\",\"tip_col\":\"#000000\",\"tip_bg\":\"#ffffff\",\"reqicon_st\":\"0\",\"reqicon_pos\":\"0\",\"reqicon_img\":\"glyphicon-asterisk\"},\"clogic\":{\"show_st\":\"0\",\"f_show\":\"1\",\"f_all\":\"1\",\"list\":[]}}}],\"fm_inputs\":\"uumzsyvir=&qwhgju=Contact&uumzsyvir=800&iyqgvzhq=on&uumzsyvir=20&uumzsyvir=17&uumzsyvir=20&uumzsyvir=17&uumzsyvir=on&deypxarp=#ffffff&deypxarp=#eeeeee&deypxarp=#ffffff&fmvibj=&uumzsyvir=5&inojvuvo=#000&uumzsyvir=1&cbfdtbai=on&vmtlwyci=#CCCCCC&swwpfxj=3&bzxkgrw=3&izcplywf=10&vnetpzgkq=Tab title 1&nvkzavv=#ECF0F1&idbmubaxos=#95A5A6&ptgkqosvd=#ECF0F1&dlghynmn=#4798E7&wsdgbklbj=#ffffff&ulwxsdvbhe=#4798E7&awegbi=&vxvjkvqs=#9a8afa&puixzosx=#ffffff&ileaa=#ECF0F1&qwdxfecxe=#F9F9F9&dhyzytfq=#D4D4D4&vnetpzgkq=&vnetpzgkq=6&vnetpzgkq=textbox3836&auvgdu=Text label&uifm_fld_lbl_size=14&txakvgth=0&jrwyrq=0&yprbt=0&magplxkcp=#000&uifm_fld_lbl_font={\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}&zmlom=1&ilfntjzf=#666&tnfsxjl=1&hqdyklam=1&zaprspo=3&wkluxrkxq=&uifm_fld_sublbl_size=14&mzoaayvaq=1&qcezeuda=1&kqdaptdpuh=0&utsdvlzz=#000&uifm_fld_sublbl_font={\\\"family\\\":\\\"\'Comic Sans MS\', Arial, sans-serif\\\",\\\"name\\\":\\\"Comic Sans MS\\\",\\\"classname\\\":\\\"comicsansms\\\"}&ujsidvpp=1&cqukrzi=#666&bnrzuwrh=1&zedmvzug=1&ijxvqzngp=3&ybmoj=1&gocfpduo=2&axnzuwxt=on&ibtveag=0&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&kgdsazno=&uifm_fld_inp_size=14&dprwwkai=0&vrxirt=0&mosqkeav=0&xhcxpcxb=&sgznv=#000&uifm_fld_inp_font=&jcdjiwm=1&dkmqzjzhtc=0&fkeoaaimlf=on&ebqsodol=#ffffff&ebqsodol=&ebqsodol=&beinhpm=on&vnetpzgkq=0&jhgolzsur=#000&ncygkydrkl=#000&vnetpzgkq=1&vnetpzgkq=1&uifm_fld_inp2_size=8&odxcrsf=0&mijakeihtb=0&emvxciw=0&amqfqmfog=&uifm_fld_inp2_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&uifm_fld_inp3_html=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=0&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&ebqsodol=&ebqsodol=&vnetpzgkq=2&vnetpzgkq=2&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=&uifm_fld_input11_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&vnetpzgkq=&rhtxdod=&uifm_fld_inp12_size=8&tltqthdkt=0&aaeqicwow=0&tdhqjgwcn=0&twlwdn=&fiwampg=&cbnltlne=&uifm_fld_inp12_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&ebqsodol=&ebqsodol=&ebqsodol=&vnetpzgkq=14&wfagbncuee=&wjubmib=&vnetpzgkq=14&jvdlg=&uifm_fld_inp13_size=8&sbdrglbb=0&cmbzprgf=0&wqyetlhe=0&ranthcqyih=&lsejgv=&uifm_fld_inp13_font={\\\"family\\\":\\\"Arial, Helvetica, sans-serif\\\",\\\"name\\\":\\\"Arial\\\",\\\"classname\\\":\\\"arial\\\"}&ebqsodol=&ebqsodol=&ebqsodol=&vnetpzgkq=14&jyfsglpu=&jrlodd=&vnetpzgkq=14&lcbnptdf=&dwuzqn=&uifm_fld_input16_extallowed=&vnetpzgkq=2&yslicxqiyh=&hftqagspd=&rwquzvs=&vnetpzgkq=&vnetpzgkq=&uifm_frm_inp18_txt_cont=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&vnetpzgkq=&ebqsodol=&ebqsodol=&ebqsodol=&gxioqdpoeo=&vnetpzgkq=14&kqvpqwfn=&vnetpzgkq=14&ovscetg=&bqldjcbdr=5&nzczketp=5&mjpvwnzmg=5&lcylwykr=&gckaveoudv=&sdviwkcip=&pxmkmcykb=&tkkgnwj=&uifm_fld_msc_text=&sttsp=&uifm_fld_hblock_font=&rnvrov=0&vnetpzgkq=this is required&vnetpzgkq=&vnetpzgkq=Required only letters&vnetpzgkq=Required only Letters and Numbers&vnetpzgkq=Required only numbers&vnetpzgkq=Required a valid mail&dbwrayuli=0&hdzkwhwe=#000000&aznbsbf=#ffffff&vnetpzgkq=&vnetpzgkq=5&vnetpzgkq=5&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=0&vnetpzgkq=rockfm_uibao029je8&edzsouz=&zgpb_fld_ctmaddt=&uumzsyvir=1&uumzsyvir=1&uumzsyvir=You need to save the form before seeing the preview&uumzsyvir=Preview for desktops&uumzsyvir=Preview for tablets&uumzsyvir=Preview for smartphone&uumzsyvir=Import form&uumzsyvir=The import has failed. press the accept button&ctoeyog=smartsimple@gmail.com&rfmcxhda=Here goes your From Name&rtmqqbrgzs=smartsimple@gmail.com&scnjgbfqk=Here goes your subject mail&lqysyesscr=&cdkvzq=&uifm_frm_email_replyto=&uifm_frm_email_tmpl=<div >\\r\\n  <table width=\\\"600\\\" cellspacing=\\\"5\\\" cellpadding=\\\"5\\\" border=\\\"0\\\" style=\\\"background: #daf1f8; border: 1px solid #000000;\\\">\\r\\n\\t<tbody>\\r\\n\\t  <tr>\\r\\n\\t\\t<th style=\\\"background-color: #91c5f2;\\\">New form request<br \\/>\\r\\n\\t\\t  <\\/th>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td valign=\\\"top\\\" style=\\\"text-align: left;\\\">You are receiving a new form request:<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  [uifm_var opt=\\\"rec_summ\\\"]<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  <\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td style=\\\"text-align: left;\\\">\\r\\n\\t\\t\\t\\t\\tForm information:<br\\/>\\r\\nURL:[uifm_var opt=\\\"rec_url_fm\\\"]<br \\/>\\r\\nForm: [uifm_var opt=\\\"form_name\\\"]<br \\/>\\r\\n\\t\\t\\t\\t<\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t<\\/tbody>\\r\\n  <\\/table><\\/div>\\r\\n&uifm_frm_email_usr_recipient=&mhumtdrkli=Here goes your subject mail&mvrpclbon=&oewvthr=&cnelzdmq=&uifm_frm_email_usr_tmpl=<div >\\r\\n  <table width=\\\"600\\\" cellspacing=\\\"5\\\" cellpadding=\\\"5\\\" border=\\\"0\\\" style=\\\"background: #daf1f8; border: 1px solid #000000;\\\">\\r\\n\\t<tbody>\\r\\n\\t  <tr>\\r\\n\\t\\t<th style=\\\"background-color: #91c5f2;\\\">New form request<br \\/>\\r\\n\\t\\t  <\\/th>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td valign=\\\"top\\\" style=\\\"text-align: left;\\\">You are receiving a new form request:<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  [uifm_var opt=\\\"rec_summ\\\"]<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  <\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td style=\\\"text-align: left;\\\">\\r\\n\\t\\t\\t\\t\\tForm information:<br\\/>\\r\\nURL:[uifm_var opt=\\\"rec_url_fm\\\"]<br \\/>\\r\\nForm: [uifm_var opt=\\\"form_name\\\"]<br \\/>\\r\\n\\t\\t\\t\\t<\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t<\\/tbody>\\r\\n  <\\/table><\\/div>\\r\\n&uifm_frm_subm_msg=<div class=\\\"rockfm-alert rockfm-alert-success\\\" role=\\\"alert\\\">Success! Form was sent successfully.<\\/div>\\r\\n&ruua=&wmoytiwl=&kjmbrzenjk=&xtoatsne=&uifm_frm_main_addcss=&uifm_frm_main_addjs=&uifm_frm_main_pdf_papersize=a4&uifm_frm_main_pdf_paperorien=landscape&uifm_frm_email_usr_pdf_charset=UTF-8&uifm_frm_email_usr_tmpl_pdf_font=2&uifm_frm_record_tpl_content=<div >\\r\\n  <table width=\\\"600\\\" cellspacing=\\\"5\\\" cellpadding=\\\"5\\\" border=\\\"0\\\" style=\\\"background: #daf1f8; border: 1px solid #000000;\\\">\\r\\n\\t<tbody>\\r\\n\\t  <tr>\\r\\n\\t\\t<th style=\\\"background-color: #91c5f2;\\\">Summary<br \\/>\\r\\n\\t\\t  <\\/th>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td valign=\\\"top\\\" style=\\\"text-align: left;\\\">you information is shown on next::<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  [uifm_var opt=\\\"rec_summ\\\"]<br \\/>\\r\\n\\t\\t  <br \\/>\\r\\n\\t\\t  <\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t  <tr>\\r\\n\\t\\t<td style=\\\"text-align: left;\\\">\\r\\n\\t\\t\\t\\t\\tForm information:<br\\/>\\r\\nURL:[uifm_var opt=\\\"rec_url_fm\\\"]<br \\/>\\r\\nForm: [uifm_var opt=\\\"form_name\\\"]<br \\/>\\r\\n\\t\\t<\\/td>\\r\\n\\t  <\\/tr>\\r\\n\\t<\\/tbody>\\r\\n  <\\/table><\\/div>\\r\\n&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=L14qrGTc45G1Tb50&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&uumzsyvir=&zgpbrefeditor=&uumzsyvir=Delete field selected&uumzsyvir=Are you sure?&uumzsyvir=Cancel&uumzsyvir=Yes&uumzsyvir=1&uumzsyvir=1&uumzsyvir=Contact&uumzsyvir=Tour guide info&uumzsyvir=there is not tour guide for this page. press the accept button&uumzsyvir=Success! Updated successfully&uumzsyvir=Form was created&uumzsyvir=Success! The form was created. Now just copy and paste the shortcode to your content&uumzsyvir=the form did not loaded properly. Press regenerate button in order to recover the form&uumzsyvir=Regenerate Form&uumzsyvir=Delete field selected&uumzsyvir=Are you sure?&uumzsyvir=Cancel&uumzsyvir=Yes&uumzsyvir=Removing&uumzsyvir=Form saved&uumzsyvir=Processing&uumzsyvir=Loading&uumzsyvir=Saving\"}', 'Contact', '', '<div class=\"rockfm-form-container uiform-wrap sfdc-wrap\"><div class=\"uiform-main-form\"><div class=\"uiform-step-list uiform-wiztheme0\" style=\"display:none;\"><ul class=\"uiform-steps\"><li class=\"uifm-current\"><a data-tab-nro=\"0\" href=\"#uifm-step-tab-0\"><span class=\"uifm-number\">1</span><span class=\"uifm-title\">Tab title</span></a></li></ul></div><div class=\"uiform-step-content\" style=\"min-height:100px;\"><div data-uifm-step=\"0\" id=\"uifm-step-tab-0\" class=\"uiform-step-pane\" ><div class=\"uiform-items-container uiform-tab-container ui-sortable\"><div id=\"uibao029je8\" data-typefield=\"6\" class=\"uiform-textbox uiform-field uiform-field-childs zgpb-field-template\"><div class=\"uiform-field-wrap\"><div class=\"rkfm-row\"><div class=\"rkfm-col-sm-2\"><div class=\"uifm-control-label\"><label class=\"sfdc-control-label\"><span data-field-option=\"uifm-help-block\"	class=\"uifm-label-helpblock uifm-f-option\"><span class=\"fa fa-question-circle\"></span></span> <span data-field-store=\"label-text\" data-field-option=\"uifm-label\" class=\"uifm-label uifm-f-option\">Textbox label</span> <span data-field-store=\"sublabel-text\" data-field-option=\"uifm-sublabel\" class=\"uifm-sublabel uifm-f-option\">Textbox sublabel</span></label></div></div><div class=\"rkfm-col-sm-10\"><div class=\"uifm-input-container\"><input data-field-store=\"input-value\" data-field-option=\"uifm-txtbox-inp-val\" class=\"uifm-txtbox-inp-val sfdc-form-control uifm-f-option\" type=\"text\" value=\"\"></div><div data-field-option=\"uifm-help-block\" class=\"uifm-help-block uifm-f-option\">Help block text</div></div></div></div></div></div></div></div></div></div>', '', 1, '7d22a1205762d7468f67237903021307', 1, '2022-01-11 20:28:54', '2022-01-12 12:28:54', '::1', NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_form_records`
--

CREATE TABLE `fbcf_uiform_form_records` (
  `fbh_id` int(6) NOT NULL,
  `fbh_data` longtext DEFAULT NULL,
  `fbh_data_rec` longtext DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT 1,
  `fbh_data_user` longtext DEFAULT NULL,
  `form_fmb_id` int(10) NOT NULL,
  `fbh_data_rec_xml` longtext DEFAULT NULL,
  `fbh_user_agent` text DEFAULT NULL,
  `fbh_page` text DEFAULT NULL,
  `fbh_referer` text DEFAULT NULL,
  `fbh_params` longtext DEFAULT NULL,
  `fbh_error` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_options`
--

CREATE TABLE `fbcf_uiform_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_settings`
--

CREATE TABLE `fbcf_uiform_settings` (
  `version` varchar(10) DEFAULT NULL,
  `type_email` smallint(1) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` smallint(6) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `smtp_conn` varchar(255) DEFAULT NULL,
  `sendmail_path` varchar(255) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `id` int(1) NOT NULL,
  `site_title` varchar(250) DEFAULT NULL,
  `admin_mail` varchar(250) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NULL DEFAULT '1979-12-31 19:00:01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbcf_uiform_settings`
--

INSERT INTO `fbcf_uiform_settings` (`version`, `type_email`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `smtp_conn`, `sendmail_path`, `language`, `id`, `site_title`, `admin_mail`, `created_date`, `updated_date`) VALUES
('5.5.1', 1, '', 0, '', '', '', '/usr/sbin/sendmail', 'en', 1, 'Smart Simple Automation', 'smartsimple@gmail.com', '2022-01-11 20:25:44', '1979-12-31 19:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_user`
--

CREATE TABLE `fbcf_uiform_user` (
  `use_id` int(6) NOT NULL,
  `use_login` varchar(250) DEFAULT NULL,
  `use_password` varchar(32) DEFAULT NULL,
  `flag_status` smallint(5) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_ip` varchar(100) DEFAULT NULL,
  `updated_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `use_password_token` varchar(32) DEFAULT NULL,
  `use_mail` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbcf_uiform_user`
--

INSERT INTO `fbcf_uiform_user` (`use_id`, `use_login`, `use_password`, `flag_status`, `created_date`, `updated_date`, `created_ip`, `updated_ip`, `created_by`, `updated_by`, `use_password_token`, `use_mail`) VALUES
(1, 'admin@admin.com', 'e6e061838856bf47e1de730719fb2609', 1, '2016-01-21 16:31:30', '2016-02-09 00:36:55', NULL, '127.0.0.1', NULL, '1', '', 'smartsimple@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fbcf_uiform_visitor`
--

CREATE TABLE `fbcf_uiform_visitor` (
  `vis_id` bigint(20) NOT NULL,
  `vis_uniqueid` varchar(10) DEFAULT NULL,
  `vis_user_agent` varchar(200) DEFAULT NULL,
  `vis_page` text DEFAULT NULL,
  `vis_referer` text DEFAULT NULL,
  `vis_ip` text DEFAULT NULL,
  `vis_last_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `vis_params` text DEFAULT NULL,
  `vis_error` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fbcf_uiform_addon`
--
ALTER TABLE `fbcf_uiform_addon`
  ADD PRIMARY KEY (`add_name`);

--
-- Indexes for table `fbcf_uiform_addon_details`
--
ALTER TABLE `fbcf_uiform_addon_details`
  ADD PRIMARY KEY (`add_name`,`fmb_id`);

--
-- Indexes for table `fbcf_uiform_addon_details_log`
--
ALTER TABLE `fbcf_uiform_addon_details_log`
  ADD PRIMARY KEY (`add_log_id`);

--
-- Indexes for table `fbcf_uiform_fields`
--
ALTER TABLE `fbcf_uiform_fields`
  ADD PRIMARY KEY (`fmf_id`,`form_fmb_id`);

--
-- Indexes for table `fbcf_uiform_fields_type`
--
ALTER TABLE `fbcf_uiform_fields_type`
  ADD PRIMARY KEY (`fby_id`);

--
-- Indexes for table `fbcf_uiform_form`
--
ALTER TABLE `fbcf_uiform_form`
  ADD PRIMARY KEY (`fmb_id`);

--
-- Indexes for table `fbcf_uiform_form_log`
--
ALTER TABLE `fbcf_uiform_form_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `fbcf_uiform_form_records`
--
ALTER TABLE `fbcf_uiform_form_records`
  ADD PRIMARY KEY (`fbh_id`);

--
-- Indexes for table `fbcf_uiform_options`
--
ALTER TABLE `fbcf_uiform_options`
  ADD PRIMARY KEY (`option_id`) USING BTREE,
  ADD UNIQUE KEY `option_name` (`option_name`) USING BTREE;

--
-- Indexes for table `fbcf_uiform_settings`
--
ALTER TABLE `fbcf_uiform_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fbcf_uiform_user`
--
ALTER TABLE `fbcf_uiform_user`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `fbcf_uiform_visitor`
--
ALTER TABLE `fbcf_uiform_visitor`
  ADD PRIMARY KEY (`vis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fbcf_uiform_addon_details_log`
--
ALTER TABLE `fbcf_uiform_addon_details_log`
  MODIFY `add_log_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fbcf_uiform_fields`
--
ALTER TABLE `fbcf_uiform_fields`
  MODIFY `fmf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fbcf_uiform_fields_type`
--
ALTER TABLE `fbcf_uiform_fields_type`
  MODIFY `fby_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `fbcf_uiform_form`
--
ALTER TABLE `fbcf_uiform_form`
  MODIFY `fmb_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fbcf_uiform_form_log`
--
ALTER TABLE `fbcf_uiform_form_log`
  MODIFY `log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fbcf_uiform_form_records`
--
ALTER TABLE `fbcf_uiform_form_records`
  MODIFY `fbh_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fbcf_uiform_options`
--
ALTER TABLE `fbcf_uiform_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fbcf_uiform_settings`
--
ALTER TABLE `fbcf_uiform_settings`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fbcf_uiform_user`
--
ALTER TABLE `fbcf_uiform_user`
  MODIFY `use_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fbcf_uiform_visitor`
--
ALTER TABLE `fbcf_uiform_visitor`
  MODIFY `vis_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
