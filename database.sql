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
    `avatar`     varchar(255)                 DEFAULT NULL,
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
    `created_at`          timestamp           NULL     DEFAULT CURRENT_TIMESTAMP,
    `updated_at`          timestamp           NULL     DEFAULT CURRENT_TIMESTAMP,
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

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`
(
    `id`         bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `key`        varchar(255)        NOT NULL,
    `value`      text                DEFAULT NULL,
    `created_at` timestamp           NULL DEFAULT NULL,
    `updated_at` timestamp           NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `settings_key_unique` (`key`)
) CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

INSERT INTO accounts (name, email, password, type)
VALUES ('Employer', 'employer@web3014.test', '123456', 'employer'),
       ('Job Seeker', 'jobseeker@web3014.test', '123456', 'job_seeker');

INSERT INTO users (name, email, password)
VALUES ('Administrator', 'admin@jobbox.com', '123456');

INSERT INTO companies (account_id, name, logo, address)
VALUES (1, 'LinkedIn', '/assets/imgs/brands/brand-1.png', 'H??? Ch?? Minh, VN'),
       (1, 'Adobe Ilustrator', '/assets/imgs/brands/brand-2.png', 'H??? Ch?? Minh, VN'),
       (1, 'Dailymotion', '/assets/imgs/brands/brand-3.png', '???? N???ng, VN'),
       (1, 'NewSum', '/assets/imgs/brands/brand-4.png', 'H?? N???i, VN'),
       (1, 'PowerHome', '/assets/imgs/brands/brand-5.png', 'H??? Ch?? Minh, VN'),
       (1, 'Whop.com', '/assets/imgs/brands/brand-6.png', 'H?? N???i, VN'),
       (1, 'Greewood', '/assets/imgs/brands/brand-7.png', '???? N???ng, VN'),
       (1, 'Kentucky', '/assets/imgs/brands/brand-8.png', 'H??? Ch?? Minh, VN'),
       (1, 'Qeuity', '/assets/imgs/brands/brand-9.png', 'H?? N???i, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-10.png', '???? N???ng, VN'),
       (1, 'Daily Motion', '/assets/imgs/brands/brand-8.png', 'H??? Ch?? Minh, VN'),
       (1, 'Kentucky', '/assets/imgs/brands/brand-1.png', 'H?? N???i, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-1.png', '???? N???ng, VN'),
       (1, 'Adobe Illustrator', '/assets/imgs/brands/brand-4.png', 'H?? N???i, VN'),
       (1, 'LinkedIn', '/assets/imgs/brands/brand-5.png', 'H??? Ch?? Minh, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-2.png', '???? N???ng, VN'),
       (1, 'Whop.com', '/assets/imgs/brands/brand-8.png', '???? N???ng, VN'),
       (1, 'NewSum', '/assets/imgs/brands/brand-7.png', 'H??? Ch?? Minh, VN'),
       (1, 'LinkedIn', '/assets/imgs/brands/brand-9.png', '???? N???ng, VN'),
       (1, 'Honda', '/assets/imgs/brands/brand-1.png', 'H?? N???i, VN');

INSERT INTO categories (name, icon)
VALUES ('L???p tr??nh web', '/assets/imgs/page/homepage1/content.svg'),
       ('Retail & Products', '/assets/imgs/page/homepage1/retail.svg'),
       ('Customer Help', '/assets/imgs/page/homepage1/customer.svg'),
       ('Finance', '/assets/imgs/page/homepage1/finance.svg'),
       ('Human Resource', '/assets/imgs/page/homepage1/human.svg'),
       ('Software', '/assets/imgs/page/homepage1/lightning.svg'),
       ('Management', '/assets/imgs/page/homepage1/management.svg'),
       ('Market Research', '/assets/imgs/page/homepage1/research.svg'),
       ('Security Analyst', '/assets/imgs/page/homepage1/security.svg'),
       ('Nh?? b??o', '/assets/imgs/page/homepage1/marketing.svg');

INSERT INTO `cities` (`id`, `name`)
VALUES (1, 'An Giang'),
       (2, 'Kon Tum'),
       (3, '?????k N??ng'),
       (4, 'S??c Tr??ng'),
       (5, 'B??nh Ph?????c'),
       (6, 'H??ng Y??n'),
       (7, 'Thanh H??a'),
       (8, 'Qu???ng Tr???'),
       (9, 'Tuy??n Quang'),
       (10, 'Qu???ng Ng??i'),
       (11, 'H?? N???i'),
       (12, 'L??o Cai'),
       (13, 'V??nh Long'),
       (14, 'L??m ?????ng'),
       (15, 'B??nh ?????nh'),
       (16, 'Ngh??? An'),
       (17, 'Ki??n Giang'),
       (18, 'H?? Giang'),
       (19, 'Ph?? Y??n'),
       (20, 'L???ng S??n'),
       (21, '???? N???ng'),
       (22, 'S??n La'),
       (23, 'T??y Ninh'),
       (24, 'Nam ?????nh'),
       (25, 'Lai Ch??u'),
       (26, 'B???n Tre'),
       (27, 'Kh??nh H??a'),
       (28, 'B??nh Thu???n'),
       (29, 'Cao B???ng'),
       (30, 'H???i Ph??ng'),
       (31, 'Ninh B??nh'),
       (32, 'Y??n B??i'),
       (33, 'Gia Lai'),
       (34, 'Ho?? B??nh'),
       (35, 'B?? R???a - V??ng T??u'),
       (36, 'C?? Mau'),
       (37, 'B??nh D????ng'),
       (38, 'C???n Th??'),
       (39, 'Th???a Thi??n Hu???'),
       (40, '?????ng Nai'),
       (41, 'Ti???n Giang'),
       (42, '??i???n Bi??n'),
       (43, 'V??nh Ph??c'),
       (44, 'Qu???ng Nam'),
       (45, '?????k L???k'),
       (46, 'Th??i Nguy??n'),
       (47, 'H???i D????ng'),
       (48, 'B???c Li??u'),
       (49, 'Tr?? Vinh'),
       (50, 'Th??i B??nh'),
       (51, 'H?? T??nh'),
       (52, 'Ninh Thu???n'),
       (53, '?????ng Th??p'),
       (54, 'Long An'),
       (55, 'H???u Giang'),
       (56, 'Qu???ng Ninh'),
       (57, 'Ph?? Th???'),
       (58, 'Qu???ng B??nh'),
       (59, 'H??? Ch?? Minh'),
       (60, 'H?? Nam'),
       (61, 'B???c Ninh'),
       (62, 'B???c Giang'),
       (63, 'B???c K???n');

INSERT INTO jobs (category_id, company_id, city_id, name, description, content, salary, salary_range, number_of_positions)
VALUES (1, 2, 3, 'Full Stack Engineer', '', '', 5000000, 'Th??ng', 10),
       (1, 3, 3, 'Frontend Engineer', '', '', 5000000, 'Th??ng', 10),
       (1, 5, 3, 'Backend Engineer', '', '', 5000000, 'Th??ng', 10),
       (1, 4, 3, 'Full Stack Engineer', '', '', 5000000, 'Th??ng', 10),
       (1, 6, 3, 'Senior System Engineer', '', '', 5000000, 'Th??ng', 10),
       (1, 7, 3, 'Full Stack Engineer', '', '', 5000000, 'Th??ng', 10),
       (1, 2, 3, 'UI/UX Designer Fulltime', '', '', 5000000, 'Th??ng', 10),
       (1, 5, 10, 'Full Stack Engineer', '', '', 5000000, 'Th??ng', 10),
       (2, 3, 4, 'Full Stack Engineer', '', '', 20000, 'Gi???', 10),
       (2, 1, 4, 'UI/UX Designer Fulltime', '', '', 20000, 'Gi???', 10),
       (2, 8, 52, 'Senior System Engineer', '', '', 23000000, 'Th??ng', 10),
       (2, 9, 51, 'React Native Developer', '', '', 28000000, 'Th??ng', 10),
       (2, 3, 4, 'UI/UX Designer Fulltime', '', '', 20000, 'Gi???', 10),
       (2, 9, 4, 'UI/UX Designer Fulltime', '', '', 20000, 'Gi???', 10),
       (2, 8, 4, 'Java Software Engineer', '', '', 20000, 'Gi???', 10),
       (2, 5, 4, 'UI/UX Designer Fulltime', '', '', 20000, 'Gi???', 10),
       (3, 4, 6, 'Java Software Engineer', '', '', 50000000, 'Th??ng', 10),
       (3, 3, 6, 'React Native Developer', '', '', 50000000, 'Th??ng', 10),
       (3, 6, 6, 'Java Software Engineer', '', '', 50000000, 'Th??ng', 10),
       (3, 9, 51, 'React Native Developer', '', '', 28000000, 'Th??ng', 10),
       (3, 6, 55, 'PHP Developer', '', '', 25000000, 'Th??ng', 10),
       (3, 9, 55, 'UI/UX Designer Fulltime', '', '', 25000000, 'Th??ng', 10),
       (3, 10, 55, 'React Native Developer', '', '', 25000000, 'Th??ng', 10),
       (3, 6, 55, 'PHP Developer', '', '', 25000000, 'Th??ng', 10),
       (4, 5, 12, 'Frontend Developer', '', '', 30000000, 'Th??ng', 10),
       (4, 5, 12, 'UI/UX Designer Fulltime', '', '', 30000000, 'Th??ng', 10),
       (4, 10, 55, 'PHP Developer', '', '', 25000000, 'Th??ng', 10),
       (4, 9, 12, 'Backend Developer', '', '', 30000000, 'Th??ng', 10),
       (4, 6, 12, 'Frontend Developer', '', '', 30000000, 'Th??ng', 10),
       (4, 8, 12, 'Frontend Developer', '', '', 30000000, 'Th??ng', 10),
       (4, 7, 12, 'Lead Quanlity Control QA', '', '', 30000000, 'Th??ng', 10),
       (4, 5, 12, 'Frontend Developer', '', '', 30000000, 'Th??ng', 10),
       (5, 6, 55, 'Backend Developer', '', '', 25000000, 'Th??ng', 10),
       (5, 7, 53, 'Lead Quanlity Control QA', '', '', 25000000, 'Th??ng', 10),
       (5, 9, 55, 'Backend Developer', '', '', 25000000, 'Th??ng', 10),
       (5, 2, 53, 'Lead Quanlity Control QA', '', '', 25000000, 'Th??ng', 10),
       (5, 4, 55, 'Backend Developer', '', '', 25000000, 'Th??ng', 10),
       (5, 7, 53, 'Lead Quanlity Control QA', '', '', 25000000, 'Th??ng', 10),
       (5, 2, 53, 'Product Manager', '', '', 25000000, 'Th??ng', 10),
       (5, 3, 53, 'Lead Quanlity Control QA', '', '', 25000000, 'Th??ng', 10),
       (6, 8, 54, 'Product Manager', '', '', 25000000, 'Th??ng', 10),
       (6, 6, 54, 'Senior System Engineer', '', '', 25000000, 'Th??ng', 10),
       (6, 5, 54, 'Product Manager', '', '', 25000000, 'Th??ng', 10),
       (6, 1, 52, 'Senior System Engineer', '', '', 23000000, 'Th??ng', 10),
       (6, 2, 52, 'Lead Quanlity Control QA', '', '', 23000000, 'Th??ng', 10),
       (6, 3, 52, 'Product Manager', '', '', 23000000, 'Th??ng', 10),
       (6, 4, 52, 'Senior System Engineer', '', '', 23000000, 'Th??ng', 10),
       (6, 8, 52, 'Backend Developer', '', '', 23000000, 'Th??ng', 10),
       (7, 8, 52, 'Senior System Engineer', '', '', 23000000, 'Th??ng', 10),
       (7, 7, 52, 'Backend Developer', '', '', 23000000, 'Th??ng', 10),
       (7, 6, 52, 'Senior System Engineer', '', '', 23000000, 'Th??ng', 10),
       (7, 5, 52, 'Frontend Developer', '', '', 23000000, 'Th??ng', 10),
       (7, 4, 52, 'Java Developer', '', '', 23000000, 'Th??ng', 10),
       (7, 2, 52, 'PHP Developer', '', '', 23000000, 'Th??ng', 10),
       (7, 5, 52, 'Backend Developer', '', '', 23000000, 'Th??ng', 10),
       (7, 8, 52, 'Senior System Engineer', '', '', 23000000, 'Th??ng', 10),
       (8, 6, 55, 'PHP Developer', '', '', 25000000, 'Th??ng', 10),
       (8, 7, 55, 'PHP Developer', '', '', 25000000, 'Th??ng', 10),
       (8, 8, 55, 'PHP Developer', '', '', 25000000, 'Th??ng', 10),
       (8, 9, 55, 'Javascript Developer', '', '', 25000000, 'Th??ng', 10),
       (8, 10, 55, 'Java Developer', '', '', 25000000, 'Th??ng', 10),
       (8, 5, 55, 'PHP Developer', '', '', 25000000, 'Th??ng', 10),
       (8, 4, 55, 'Frontend Developer', '', '', 25000000, 'Th??ng', 10),
       (8, 3, 55, 'Backend Developer', '', '', 25000000, 'Th??ng', 10),
       (9, 2, 51, 'React Native Developer', '', '', 28000000, 'Th??ng', 10),
       (9, 1, 51, 'React Native Developer', '', '', 28000000, 'Th??ng', 10),
       (9, 5, 51, 'PHP Developer', '', '', 28000000, 'Th??ng', 10),
       (9, 7, 51, 'Frontend Developer', '', '', 28000000, 'Th??ng', 10),
       (9, 4, 51, 'Backend Developer', '', '', 28000000, 'Th??ng', 10),
       (9, 3, 51, 'React Native Developer', '', '', 28000000, 'Th??ng', 10),
       (9, 9, 51, 'Java Developer', '', '', 28000000, 'Th??ng', 10);