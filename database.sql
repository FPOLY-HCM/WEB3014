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
    `status`      varchar(20)         NOT NULL DEFAULT 'active',
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
    `city_id`             int(10) unsigned             DEFAULT NULL,
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

DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities`
(
    `id`   bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255)        NOT NULL,
    PRIMARY KEY (`id`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

INSERT INTO accounts (name, email, password, type)
VALUES ('Employer', 'employer@web3014.test', '123456', 'employer'),
       ('Job Seeker', 'jobseeker@web3014.test', '123456', 'job_seeker');

INSERT INTO companies (account_id, name, logo, address)
VALUES (1, 'LinkedIn', '/assets/imgs/brands/brand-1.png', 'Hồ Chí Minh, VN'),
       (1, 'Adobe Ilustrator', '/assets/imgs/brands/brand-2.png', 'Hồ Chí Minh, VN'),
       (1, 'Dailymotion', '/assets/imgs/brands/brand-3.png', 'Đà Nẵng, VN'),
       (1, 'NewSum', '/assets/imgs/brands/brand-4.png', 'Hà Nội, VN'),
       (1, 'PowerHome', '/assets/imgs/brands/brand-5.png', 'Hồ Chí Minh, VN'),
       (1, 'Whop.com', '/assets/imgs/brands/brand-6.png', 'Hà Nội, VN'),
       (1, 'Greewood', '/assets/imgs/brands/brand-7.png', 'Đà Nẵng, VN'),
       (1, 'Kentucky', '/assets/imgs/brands/brand-8.png', 'Hồ Chí Minh, VN'),
       (1, 'Qeuity', '/assets/imgs/brands/brand-9.png', 'Hà Nội, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-10.png', 'Đà Nẵng, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-8.png', 'Hồ Chí Minh, VN'),
       (1, 'Kentucky', '/assets/imgs/brands/brand-1.png', 'Hà Nội, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-1.png', 'Đà Nẵng, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-4.png', 'Hà Nội, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-5.png', 'Hồ Chí Minh, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-2.png', 'Đà Nẵng, VN'),
       (1, 'Whop.com', '/assets/imgs/brands/brand-8.png', 'Đà Nẵng, VN'),
       (1, 'NewSum', '/assets/imgs/brands/brand-7.png', 'Hồ Chí Minh, VN'),
       (1, 'LinkedIn', '/assets/imgs/brands/brand-9.png', 'Đà Nẵng, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-1.png', 'Hà Nội, VN');

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

INSERT INTO `cities` (`id`, `name`)
VALUES (1, 'An Giang'),
       (2, 'Kon Tum'),
       (3, 'Đắk Nông'),
       (4, 'Sóc Trăng'),
       (5, 'Bình Phước'),
       (6, 'Hưng Yên'),
       (7, 'Thanh Hóa'),
       (8, 'Quảng Trị'),
       (9, 'Tuyên Quang'),
       (10, 'Quảng Ngãi'),
       (11, 'Hà Nội'),
       (12, 'Lào Cai'),
       (13, 'Vĩnh Long'),
       (14, 'Lâm Đồng'),
       (15, 'Bình Định'),
       (16, 'Nghệ An'),
       (17, 'Kiên Giang'),
       (18, 'Hà Giang'),
       (19, 'Phú Yên'),
       (20, 'Lạng Sơn'),
       (21, 'Đà Nẵng'),
       (22, 'Sơn La'),
       (23, 'Tây Ninh'),
       (24, 'Nam Định'),
       (25, 'Lai Châu'),
       (26, 'Bến Tre'),
       (27, 'Khánh Hòa'),
       (28, 'Bình Thuận'),
       (29, 'Cao Bằng'),
       (30, 'Hải Phòng'),
       (31, 'Ninh Bình'),
       (32, 'Yên Bái'),
       (33, 'Gia Lai'),
       (34, 'Hoà Bình'),
       (35, 'Bà Rịa - Vũng Tàu'),
       (36, 'Cà Mau'),
       (37, 'Bình Dương'),
       (38, 'Cần Thơ'),
       (39, 'Thừa Thiên Huế'),
       (40, 'Đồng Nai'),
       (41, 'Tiền Giang'),
       (42, 'Điện Biên'),
       (43, 'Vĩnh Phúc'),
       (44, 'Quảng Nam'),
       (45, 'Đắk Lắk'),
       (46, 'Thái Nguyên'),
       (47, 'Hải Dương'),
       (48, 'Bạc Liêu'),
       (49, 'Trà Vinh'),
       (50, 'Thái Bình'),
       (51, 'Hà Tĩnh'),
       (52, 'Ninh Thuận'),
       (53, 'Đồng Tháp'),
       (54, 'Long An'),
       (55, 'Hậu Giang'),
       (56, 'Quảng Ninh'),
       (57, 'Phú Thọ'),
       (58, 'Quảng Bình'),
       (59, 'Hồ Chí Minh'),
       (60, 'Hà Nam'),
       (61, 'Bắc Ninh'),
       (62, 'Bắc Giang'),
       (63, 'Bắc Kạn');    

INSERT INTO jobs (category_id, company_id, city_id, name, description, content, salary, salary_range, number_of_positions)
VALUES (1,2,3,'Full Stack Engineer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 5000000, 'Tháng', 10),
       (2,3,4,'UI/UX Designer Fulltime', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 20000, 'Giờ', 10),
       (3,4,6,'Java Software Engineer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 50000000, 'Tháng', 10),
       (4,5,12,'Frontend Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 30000000, 'Tháng', 10),
       (5,6,55,'Backend Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 25000000, 'Tháng', 10),
       (6,5,54,'Product Manager', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 25000000, 'Tháng', 10),  
       (5,7,53,'Lead Quanlity Control QA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 25000000, 'Tháng', 10),  
       (7,8,52,'Senior System Engineer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 23000000, 'Tháng', 10),  
       (9,9,51,'React Native Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 28000000, 'Tháng', 10),  
       (8,6,55,'PHP Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.', 25000000, 'Tháng', 10);
