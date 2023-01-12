CREATE DATABASE IF NOT EXISTS web3014;

USE web3014;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`
(
    `id`                bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name`              varchar(255)        NOT NULL,
    `email`             varchar(255)        NOT NULL,
    `email_verified_at` timestamp           NULL DEFAULT NULL,
    `password`          varchar(255)        NOT NULL,
    `remember_token`    varchar(100)             DEFAULT NULL,
    `created_at`        timestamp           NULL DEFAULT NULL,
    `updated_at`        timestamp           NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `users_email_unique` (`email`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`
(
    `id`         bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `first_name` varchar(120)        NOT NULL,
    `last_name`  varchar(120)        NOT NULL,
    `email`      varchar(255)        NOT NULL,
    `password`   varchar(255)        NOT NULL,
    `phone`      varchar(255)                 DEFAULT NULL,
    `dob`        date                         DEFAULT NULL,
    `bio`        mediumtext                   DEFAULT NULL,
    `credits`    int(11)             NOT NULL DEFAULT 0,
    `type`       varchar(20)         NOT NULL DEFAULT 'job-seeker',
    `created_at` timestamp           NULL     DEFAULT NULL,
    `updated_at` timestamp           NULL     DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `customers_email_unique` (`email`),
    UNIQUE KEY `customers_phone_unique` (`phone`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies`
(
    `id`          bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name`        varchar(255)        NOT NULL,
    `email`       varchar(255)        NOT NULL,
    `phone`       varchar(20)                  DEFAULT NULL,
    `description` varchar(300)                 DEFAULT NULL,
    `content`     mediumtext          NOT NULL,
    `website`     varchar(255)                 DEFAULT NULL,
    `logo`        varchar(255)                 DEFAULT NULL,
    `address`     varchar(255)        NOT NULL,
    `cover_image` varchar(255)                 DEFAULT NULL,
    `status`      varchar(20)         NOT NULL DEFAULT 'published',
    `created_at`  timestamp           NULL     DEFAULT NULL,
    `updated_at`  timestamp           NULL     DEFAULT NULL,
    PRIMARY KEY (`id`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`
(
    `id`                  bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name`                varchar(120)        NOT NULL,
    `description`         text                         DEFAULT NULL,
    `content`             text                         DEFAULT NULL,
    `company_id`          int(10) unsigned             DEFAULT NULL,
    `address`             varchar(255)                 DEFAULT NULL,
    `salary`              decimal(15, 0) unsigned      DEFAULT NULL,
    `salary_range`        varchar(30)         NOT NULL DEFAULT 'hour',
    `number_of_positions` int(10) unsigned    NOT NULL DEFAULT 1,
    `views`               int(10) unsigned    NOT NULL DEFAULT 0,
    `is_featured`         tinyint(4)          NOT NULL DEFAULT 0,
    `status`              varchar(60)         NOT NULL DEFAULT 'published',
    `created_at`          timestamp           NULL     DEFAULT NULL,
    `updated_at`          timestamp           NULL     DEFAULT NULL,
    PRIMARY KEY (`id`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;
