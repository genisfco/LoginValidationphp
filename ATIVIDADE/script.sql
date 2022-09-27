create database atividadelogin;
use atividadelogin;
create table users(
id_User int(11) primary key auto_increment,
email varchar(150),
senha varchar(150)
);
insert users values (1, 'genis.etec@etec.com', 'etec123');