create database gaurav;
use gaurav;
create table ga_users(
	user_id int auto_increment primary key,
	user_name varchar(100),
	user_mobile bigint,
	user_email varchar(100),
	user_password varchar(100)
);