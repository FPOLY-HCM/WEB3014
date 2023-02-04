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

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts`
(
    `id`         bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name`       varchar(255)        NOT NULL,
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
    UNIQUE KEY `accounts_email_unique` (`email`),
    UNIQUE KEY `accounts_phone_unique` (`phone`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies`
(
    `id`          bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `account_id`  int(10) unsigned    NOT NULL,
    `name`        varchar(255)                 DEFAULT NULL,
    `email`       varchar(255)                 DEFAULT NULL,
    `phone`       varchar(20)                  DEFAULT NULL,
    `description` varchar(300)                 DEFAULT NULL,
    `content`     mediumtext                   DEFAULT NULL,
    `website`     varchar(255)                 DEFAULT NULL,
    `logo`        varchar(255)                 DEFAULT NULL,
    `address`     varchar(255)                 DEFAULT NULL,
    `cover_image` varchar(255)                 DEFAULT NULL,
    `status`      varchar(20)         NOT NULL DEFAULT 'published',
    `created_at`  timestamp           NULL     DEFAULT NULL,
    `updated_at`  timestamp           NULL     DEFAULT NULL,
    PRIMARY KEY (`id`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`
(
    `id`         bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name`       varchar(255)        NOT NULL,
    `icon`       varchar(255)             DEFAULT NULL,
    `created_at` timestamp           NULL DEFAULT NULL,
    `updated_at` timestamp           NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`
(
    `id`                  bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `category_id`         int(10) unsigned    NOT NULL,
    `company_id`          int(10) unsigned             DEFAULT NULL,
    `name`                varchar(120)        NOT NULL,
    `description`         text                         DEFAULT NULL,
    `content`             text                         DEFAULT NULL,
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

DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications`
(
    `id`         bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `job_id`     int(10) unsigned    NOT NULL,
    `account_id` int(10) unsigned    NOT NULL,
    `status`     varchar(20)         NOT NULL DEFAULT 'pending',
    `created_at` timestamp           NULL     DEFAULT NULL,
    `updated_at` timestamp           NULL     DEFAULT NULL,
    PRIMARY KEY (`id`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

INSERT INTO accounts (name, email, password, type)
VALUES ('Employeer', 'employeer@web3014.test', '123456', 'employeer'),
       ('Job seeker', 'jobseeker@web3014.test', '123456', 'job-seeker');

INSERT INTO companies (account_id, name, logo)
VALUES (1, 'LinkedIn', '/assets/imgs/brands/brand-1.png'),
       (1, 'Adobe Ilustrator', '/assets/imgs/brands/brand-2.png'),
       (1, 'Dailymotion', '/assets/imgs/brands/brand-3.png'),
       (1, 'NewSum', '/assets/imgs/brands/brand-4.png'),
       (1, 'PowerHome', '/assets/imgs/brands/brand-5.png'),
       (1, 'Whop.com', '/assets/imgs/brands/brand-6.png'),
       (1, 'Greewood', '/assets/imgs/brands/brand-7.png'),
       (1, 'Kentucky', '/assets/imgs/brands/brand-8.png'),
       (1, 'Qeuity', '/assets/imgs/brands/brand-9.png'),
       (1, 'Honda', '/assets/imgs/brands/brand-10.png');

INSERT INTO categories (name, icon)
VALUES ('Lập trình web', '/assets/imgs/page/homepage1/content.svg'),
       ('Retail & Products', '/assets/imgs/page/homepage1/retail.svg'),
       ('Customer Help', '/assets/imgs/page/homepage1/customer.svg'),
       ('Finance', '/assets/imgs/page/homepage1/finance.svg'),
       ('Human Resource', '/assets/imgs/page/homepage1/human.svg'),
       ('Software', '/assets/imgs/page/homepage1/lightning.svg'),
       ('Management', '/assets/imgs/page/homepage1/management.svg'),
       ('Market Research', '/assets/imgs/page/homepage1/research.svg'),
       ('Security Analyst', '/assets/imgs/page/homepage1/security.svg'),
       ('Nhà báo', '/assets/imgs/page/homepage1/marketing.svg');
