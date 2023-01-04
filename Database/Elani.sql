
--1
CREATE DATABASE elani


--2

CREATE TABLE `users`(
`ID` int not null AUTO_INCREMENT,
`UserName` varchar(50) not null,
`Password` varchar(50) not null,
`Email` varchar(50) not null,
`PhoneNumber` int(10) not null,
`Timestamp_User` timestamp not null default CURRENT_TIMESTAMP,
`Role` Tinyint(1) not null default '0',
`LastUpdate` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`),
    UNIQUE(`UserName`,`Email`,`PhoneNumber`)
)
-------------------------------------------------------------------------
--3
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


--4



--5
/*
update users
set UserName = 'aaa'
*/

