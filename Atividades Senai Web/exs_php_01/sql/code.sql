create database escola;

use escola;

create table alunos(
id int auto_increment primary key,
nome varchar (100) not null,
idade int not null,
email varchar (254)  not null,
curso varchar (100) not null
);

select * from alunos