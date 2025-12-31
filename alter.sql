
ALTER TABLE `san_san_packages` ADD `unique_caption` TEXT NULL AFTER `caption_new`, 
ADD `is_featured` TEXT NULL AFTER `unique_caption`; 


ALTER TABLE `san_san_packages` ADD `package_country_select` TEXT NULL AFTER `is_featured`; 

CREATE TABLE `itlworld_ipcountries_country_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mappings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;