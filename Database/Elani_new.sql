
--1
CREATE DATABASE elani
-------------------------------------------------------------------------
--2

--copy all

CREATE TABLE `users`(
`user_id` int not null PRIMARY KEY AUTO_INCREMENT,
`username` varchar(50) not null UNIQUE,
`password` varchar(50) not null,
`firstname` varchar(50) not null,
`lastname` varchar(50) not null,
`email` varchar(50) not null UNIQUE,
`creation_timestamp` timestamp not null default CURRENT_TIMESTAMP,
`update_timestamp` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
`role` enum ('designer','company') not null
    
);

ALTER TABLE users AUTO_INCREMENT = 1001;


CREATE TABLE `posts`(
`post_id` int not null PRIMARY KEY AUTO_INCREMENT,
`designer_id` int not null,
`company_username` varchar(255) not null,
`title` varchar(255),
`description` varchar(255),
`image` text not null,
`publication_date` varchar(20),
`publication_time` varchar(20),
`creation_timestamp` timestamp not null default CURRENT_TIMESTAMP,
`update_timestamp` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
`status` enum ('active','inactive') not null default ('active')
);

ALTER TABLE posts AUTO_INCREMENT = 1001,
ADD FOREIGN KEY (designer_id) REFERENCES users(user_id)




CREATE TABLE `comments`(
`comment_id` int not null PRIMARY KEY AUTO_INCREMENT,
`post_id` int not null ,
`comment_text` varchar(255),
`creation_timestamp` timestamp not null default CURRENT_TIMESTAMP,
`update_timestamp` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE comments AUTO_INCREMENT = 1001,
ADD FOREIGN KEY (post_id) REFERENCES users(user_id) ;



-------------------------------------------------------------------------

-- حذف قاعدة البيانات
DROP DATABASE elani


-- طريقة اضافة البوست
INSERT INTO `posts` (`designer_id`, `company_id`, `title`, `description`, `image`, `publication_date`, `publication_time`) VALUES
 ('1000', '1001', 'title', 'description', 'image', '1/27/2023', '5:31');

 -- طريقة حذف البوست 
UPDATE `posts` SET `status` = 'inactive' WHERE `posts`.`post_id` = 1001;

-- جلب جميع حسابات المصممين 
SELECT user_id FROM `users` WHERE role = 'designer'

-- جلب جميع حسابات الشركات
SELECT user_id FROM `users` WHERE role = 'company'

-- جلب جميع اسامي المصممين 
SELECT firstname,lastname FROM `users` WHERE role = 'designer'

-- جلب جميع اسامي الشركات 

SELECT firstname,lastname FROM `users` WHERE role = 'company'

-- جلب جميع التصاميم الخاصة بمصمم معين  

SELECT post_id,title,description,image,publication_date,publication_time FROM `posts` WHERE designer_id = 1001;

-- جلب جميع التصاميم الخاصة بشركة معينه 

SELECT post_id,title,description,image,publication_date,publication_time FROM `posts` WHERE company_id = 1002;