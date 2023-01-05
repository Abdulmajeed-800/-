/*** config.php ***/
<?php
    define('servername' , 'localhost');
    define('username' , 'user');
    define('password' , '');
    define('dbname' , 'elani');
    $conn = new mysqli(servername, username, password, dbname);
    /*** create database ***/
$connDb = new mysqli($serverName,$userName,$password);
if (!mysqli_select_db($connDb,$dbName))
{
    $sql = "CREATE DATABASE " . $dbName;
    $result = mysqli_query($connDB, $sql);
    if ($result == TRUE)
    echo "DATA BASE CREATED SUCCESSFULLY";
    else
        echo "Error creating database";
}
        /*** create table ***/
    $sql = "CREATE TABLE `users`(
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
        )";
    $retval = mysqli_query( $conn,$sql );
    if(! $retval ) echo('Could not create table: ');
    else  echo "Table created successfully\n";
    
?>
