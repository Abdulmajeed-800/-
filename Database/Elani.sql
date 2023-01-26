
--1
CREATE DATABASE elani
-------------------------------------------------------------------------
--2

--copy all

CREATE TABLE `users`(
`ID` int not null AUTO_INCREMENT,
`UserName` varchar(50) not null UNIQUE,
`Password` varchar(50) not null ,
`Email` varchar(50) not null UNIQUE,
`Timestamp_User` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`)
);


CREATE TABLE `accounts` (
`ID` int not null AUTO_INCREMENT,
`ID_users` int not null,
`UserName` varchar(50) not null UNIQUE,
`Password` varchar(50) not null,
`Email` varchar(50) not null UNIQUE,
`Timestamp_User` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`),
    FOREIGN KEY (`ID_users`) REFERENCES `users`(`ID`)
);


CREATE TABLE `posts`(
`ID` int not null AUTO_INCREMENT,
`User_ID` int not null,
`Account_ID` int not null,
`Title` varchar(255),
`Content` varchar(255),
`Image` text not null,
`Timestamp_add` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
PRIMARY key (`ID`),
FOREIGN KEY (`User_ID`) REFERENCES `users`(`ID`)
);


CREATE TABLE `comments`(
`ID` int not null AUTO_INCREMENT PRIMARY key,
`User_ID` int not null ,
`Account_ID` int not null, 
`post_ID` int not null,
`Content` varchar(255),
`Timestamp_add` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
FOREIGN KEY (`User_ID`) REFERENCES `users`(`ID`)   
);

CREATE TABLE `companys`(
`ID` int not null AUTO_INCREMENT PRIMARY key,
`User_ID` int not null ,
`Company_name` varchar(255) not null,
`Date_of_contract` varchar(20) not null,
`Timestamp_add` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
FOREIGN KEY (`User_ID`) REFERENCES `users`(`ID`)   
)



ALTER TABLE posts                                       
ADD FOREIGN KEY (Account_ID) REFERENCES accounts(ID) ;

ALTER TABLE comments                                       
ADD FOREIGN KEY (Account_ID) REFERENCES accounts(ID) ;

ALTER TABLE comments                                       
ADD FOREIGN KEY (post_ID) REFERENCES posts(ID) ;

-------------------------------------------------------------------------

--لي حذف قاعدة البيانات
DROP DATABASE elani


CREATE TABLE `posts`(
`ID` int not null AUTO_INCREMENT,
`Content` varchar(255),
`Image` text not null,
`Posting_time` varchar(20),
`date_publication` varchar(20),
`Timestamp_add` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
PRIMARY key (`ID`)

);
