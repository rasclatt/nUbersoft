<?php
$data['api']	=	"CREATE TABLE `api` (
  `ID` int(20) NOT NULL,
  `unique_id` varchar(100) DEFAULT NULL,
  `apikey` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `page_live` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

$data['component_builder']	=	"CREATE TABLE `component_builder` (
  `ID` int(11) NOT NULL,
  `unique_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `component_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `assoc_table` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `component_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `variable_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `map_input` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_order` int(3) NOT NULL,
  `page_live` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `core_setting` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['component_locales']	=	"CREATE TABLE `component_locales` (
  `ID` int(20) NOT NULL,
  `unique_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comp_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `locale_abbr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `page_live` varchar(4) COLLATE utf8_unicode_ci DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['components']	=	"CREATE TABLE `components` (
  `ID` int(11) NOT NULL,
  `unique_id` varchar(100) COLLATE utf8_bin DEFAULT '',
  `ref_page` varchar(255) COLLATE utf8_bin DEFAULT '',
  `parent_id` varchar(100) COLLATE utf8_bin DEFAULT '',
  `ref_anchor` varchar(255) COLLATE utf8_bin DEFAULT '',
  `title` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `category_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `component_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `file` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `file_size` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `file_path` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `file_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `usergroup` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `group_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `page_order` int(10) DEFAULT '1',
  `page_live` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;";

$data['dropdown_menus']	=	"CREATE TABLE `dropdown_menus` (
  `ID` int(11) NOT NULL,
  `unique_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assoc_column` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuName` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuVal` text COLLATE utf8_unicode_ci,
  `page_order` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restriction` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_live` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['emailer']	=	"CREATE TABLE `emailer` (
  `ID` int(20) NOT NULL,
  `unique_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_back` longtext COLLATE utf8_unicode_ci NOT NULL,
  `return_copy` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `return_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `return_response` text COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `page_live` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['file_activity']	=	"CREATE TABLE `file_activity` (
  `ID` int(20) NOT NULL,
  `unique_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `ip_address` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `action` varchar(20) COLLATE utf8_unicode_ci DEFAULT '',
  `file_path` longtext COLLATE utf8_unicode_ci,
  `full_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_size` int(20) DEFAULT '0',
  `file_mime` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `file_unique` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `download_count` int(30) DEFAULT '0',
  `timestamp` varchar(20) COLLATE utf8_unicode_ci DEFAULT '',
  `terms_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['file_types']	=	"CREATE TABLE `file_types` (
  `ID` int(11) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `file_extension` varchar(10) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `readable` varchar(4) DEFAULT 'on',
  `downloadable` varchar(4) DEFAULT 'off',
  `editable` varchar(4) DEFAULT 'off',
  `usergroup` varchar(10) DEFAULT 'NBR_WEB',
  `page_live` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

$data['form_builder']	=	"CREATE TABLE `form_builder` (
  `ID` int(20) NOT NULL,
  `unique_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `column_type` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_setting` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restriction` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_order` int(3) DEFAULT NULL,
  `page_live` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['media']	=	"CREATE TABLE `media` (
  `ID` bigint(50) UNSIGNED NOT NULL,
  `unique_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `usergroup` int(4) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `file` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `file_size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `terms_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_order` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `page_live` varchar(3) COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['main_menus']	=	"CREATE TABLE `main_menus` (
  `ID` int(20) NOT NULL,
  `unique_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `parent_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `full_path` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_options` longtext COLLATE utf8_unicode_ci,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT '',
  `template` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'template/default',
  `use_page` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auto_cache` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `in_menubar` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `is_admin` int(1) DEFAULT '0',
  `auto_fwd` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auto_fwd_post` varchar(4) COLLATE utf8_unicode_ci DEFAULT 'off',
  `session_status` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `usergroup` varchar(30) COLLATE utf8_unicode_ci DEFAULT 'NBR_WEB',
  `page_live` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `page_order` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['members_connected']	=	"CREATE TABLE `members_connected` (
  `ID` int(11) NOT NULL,
  `unique_id` varchar(50) DEFAULT '',
  `ip_address` varchar(24) DEFAULT '',
  `username` varchar(100) DEFAULT '',
  `domain` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

$data['system_settings']	=	"CREATE TABLE `system_settings` (
  `ID` int(20) NOT NULL,
  `unique_id` varchar(100) DEFAULT NULL,
  `page_element` varchar(30) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `component` varchar(40) DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usergroup` int(4) DEFAULT '1',
  `action` varchar(100) DEFAULT NULL,
  `page_live` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

$data['upload_directory']	=	"CREATE TABLE `upload_directory` (
  `ID` int(11) NOT NULL,
  `unique_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `usergroup` int(3) DEFAULT '3',
  `terms_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `assoc_table` varchar(70) COLLATE utf8_unicode_ci DEFAULT '',
  `assoc_action` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_live` varchar(3) COLLATE utf8_unicode_ci DEFAULT '',
  `directory_protection` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `types_allowed` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$data['users']	=	"CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `unique_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(256) COLLATE utf8_bin NOT NULL DEFAULT '',
  `first_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_1` text COLLATE utf8_bin,
  `address_2` text COLLATE utf8_bin,
  `city` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `postal` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `usergroup` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'NBR_WEB',
  `user_status` varchar(4) COLLATE utf8_bin DEFAULT 'on',
  `file` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `file_path` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `file_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `reset_password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `timestamp` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;";