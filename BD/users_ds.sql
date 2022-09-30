create database if not exists users_ds;
use users_ds;

create table if not exists usuario(
    id int primary key auto_increment,
    usuario varchar(45) not null,
    email varchar(100) not null unique,
    senha varchar(100) not null
);