create database db_curriculo;
use db_curriculo;
show tables;
create table tb_usuario(
  cd_usuario int unique primary key auto_increment,
  nm_usuario varchar(80),
  nm_foto varchar(120),
  email_usuario varchar(50),
  senha_user varchar(20) not null,
  nacionalidade varchar(50),
  idade char(3),
  estado_civil varchar(10),
  telefone_residencial varchar(20),
  telefone_celular varchar(20),
  logradouro varchar(50),
  endereco varchar (50),
  complemento varchar(80),
  objetivo varchar(120)
) engine = InnoDB default charset = utf8;
create table tb_formacao_academica(
  cd_formacao int unique primary key auto_increment,
  nm_curso varchar(50),
  nm_instituicao varchar(50),
  dt_ano_conclusao date,
  id_usuario int,
  foreign key (id_usuario) references tb_usuario (cd_usuario) on delete cascade on update cascade
) engine = InnoDB default charset = utf8;
create table tb_localizacao(
  cd_localizacao int unique primary key auto_increment,
  estado char(2),
  cidade varchar(80),
  cep varchar(20),
  id_usuario int,
  foreign key (id_usuario) references tb_usuario (cd_usuario) on delete cascade on update cascade
) engine = InnoDB default charset = utf8;
create table tb_experiencia (
  cd_usuario int unique primary key auto_increment,
  nm_empresa varchar(50),
  dt_inicio date,
  dt_fim date,
  cargo varchar (50),
  funcao_cargo varchar (80),
  atividades_complementares varchar(120),
  id_usuario int,
  foreign key (id_usuario) references tb_usuario (cd_usuario) on delete cascade on update cascade
) engine = InnoDB default charset = utf8;