
--1
CREATE DATABASE elani


--2

CREATE TABLE `users`(
`ID` int not null AUTO_INCREMENT,
`UserName` varchar(50) not null,
`Password` varchar(50) not null,
`Email` varchar(50) not null,
`PhoneNumber` int(10) not null,
`create_user` timestamp not null default CURRENT_TIMESTAMP,
`role` Tinyint(4) not null default '0',
`update_user` timestamp not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`),
    UNIQUE(`UserName`,`Email`,`PhoneNumber`)
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

