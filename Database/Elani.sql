
--1
CREATE DATABASE elani
-------------------------------------------------------------------------
--2


CREATE TABLE `users`(
`ID` int not null AUTO_INCREMENT,
`UserName` varchar(50) not null UNIQUE,
`Password` varchar(50) not null ,
`Email` varchar(50) not null UNIQUE,
`PhoneNumber` int(10) not null UNIQUE,
`Timestamp_User` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`)
)

-------------------------------------------------------------------------
--3


CREATE TABLE accounts (
`ID` int not null AUTO_INCREMENT,
`ID_users` int not null,
`UserName` varchar(50) not null UNIQUE,
`Password` varchar(50) not null,
`Email` varchar(50) not null UNIQUE,
`PhoneNumber` int(10) not null UNIQUE,
`Timestamp_User` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`),
    FOREIGN KEY (`ID_users`) REFERENCES `users`(`ID`)
)

-------------------------------------------------------------------------
--4


CREATE TABLE `posts`(
`ID` int not null,
`User_ID` int not null,
`image` text not null,
`Timestamp_add` timestamp not null default CURRENT_TIMESTAMP,
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
`text` varchar(200),
`comment` varchar(200),
PRIMARY key (`ID`),
FOREIGN KEY (`User_ID`) REFERENCES `users`(`ID`)
)

-------------------------------------------------------------------------

/*
INSERT into `users`(`UserName`,`Password`,`Email`,`PhoneNumber`)VALUES
('ali','1234','ali@gmail.com',0536727856);
*/


/*
update users
set UserName = 'aaa'
*/

