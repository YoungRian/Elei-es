drop database if exists db_eleicao;
create database db_eleicao;
use db_eleicao;

create table tb_cpf (
	cpf_codigo int not null auto_increment,
    cpf_num varchar(11) not null unique,
    primary key(cpf_codigo)
);

create table tb_voto (
	vot_codigo int not null auto_increment,
    vot_escolhido varchar(10) not null,
    primary key(vot_codigo)		
);
