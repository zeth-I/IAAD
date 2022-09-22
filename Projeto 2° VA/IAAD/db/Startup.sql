begin;
drop schema if exists StartUp;
create schema StartUp; 
use StartUp;

-- Criando tabelas
create table STARTUP(
    id_startup INT PRIMARY KEY AUTO_INCREMENT,
    nome_startup VARCHAR(255) NOT NULL,
    cidade_sede VARCHAR(255)
);

create table PROGRAMADOR(
    id_programador INT PRIMARY KEY AUTO_INCREMENT,
    id_startup INT,
    nome_programador VARCHAR(255) NOT NULL,
    genero enum('M','F'),
    data_nascimento DATE,
    email varchar(255),
    UNIQUE(email)
);

create table PROGRAMADOR_LINGUAGEM(
    id_busca INT PRIMARY KEY AUTO_INCREMENT,
	id_programador INT,
	id_linguagem INT
);

create table LINGUAGEM_PROGRAMACAO(
	id_linguagem INT PRIMARY KEY AUTO_INCREMENT,
	nome_linguagem VARCHAR(255) NOT NULL,
	ano_lancamento YEAR
);


-- Populando células 

insert into STARTUP values
	(10001,'Tech4Toy','Porto Alegre'),
    (Default,'Smart123','Belo Horizonte'),
    (Default,'knowledgeUp','Rio de Janeiro'),
    (Default,'BSI Next Level','Recife'),
    (Default,'QualiHealth','São Paulo'),
    (Default,'ProEdu','Florianópolis');

insert into PROGRAMADOR values
	(30001,10001,'João Pedro','M','1993-06-23','joaop@mail.com'),
    (Default,10002,'Paula Silva','F','1986-01-10','paulas@mail.com'),
    (Default,10003,'Renata Vieira','F','1991-05-07','renatav@mail.com'),
	(Default,10004,'Felipe Santos','M','1976-11-25','felipes@mail.com'),
    (Default,10001,'Ana Cristina','F','1968-02-19','anac@mail.com'),
    (Default,10004,'Alexandre Alves','M','1988-07-07','alexandrea@mail.com'),
    (Default,10002,'Laura Marques','F','1987-10-04','lauram@mail.com');

insert into PROGRAMADOR_LINGUAGEM values
	(40001,30001,20001),
    (Default,30001,20002),
    (Default,30002,20003),
    (Default,30003,20004),
    (Default,30003,20005),
    (Default,30004,20005),
    (Default,30007,20001),
    (Default,30007,20002);

insert into LINGUAGEM_PROGRAMACAO values
	(20001,'Python','1991'),
    (Default,'PHP','1995'),
    (Default,'Java','1995'),
    (Default,'C','1972'),
    (Default,'JavaScript','1995'),
    (Default,'Dart','2011');


-- Aplicando a restrição de integridade referencial (chaves estrangeiras - FK)

alter table PROGRAMADOR_LINGUAGEM ADD FOREIGN KEY(id_linguagem) REFERENCES LINGUAGEM_PROGRAMACAO(id_linguagem) ON DELETE RESTRICT; 
alter table PROGRAMADOR_LINGUAGEM ADD FOREIGN KEY(id_programador) REFERENCES PROGRAMADOR(id_programador) ON DELETE CASCADE; 
alter table PROGRAMADOR ADD FOREIGN KEY(id_startup) REFERENCES STARTUP(id_startup) ON UPDATE CASCADE; 

 
commit;
