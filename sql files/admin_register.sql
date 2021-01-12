create database test;
use test;
create table admin_register(
    email varchar(50) NOT NULL,
    main_password varchar(50) NOT NULL,
    confirm_password varchar(50) NOT NULL,
    PRIMARY KEY(email)
)