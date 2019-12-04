create database instagram;

use instagram;

create table posts (
	id int primary key auto_increment, 
    img varchar(500),
    descricao varchar(300)
);

create table usuarios (
	id int primary key auto_increment,
    nome varchar(100),
    email varchar(100),
    senha varchar(20),
    profile_picture varchar(500)
);


select * from posts;
select * from usuarios;

alter table posts add column (usuarios_id int);
alter table posts add foreign key (usuarios_id) references usuarios(id);
