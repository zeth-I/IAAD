begin;
drop schema if exists StartUp_JoseLucas; -- inclua seu nome
create schema StartUp_JoseLucas; -- Pode usar o comando 'create database empresa_seunome;' (São semelhantes!)
use StartUp_JoseLucas;

-- Criando tabelas
create table STARTUP(
    id_startup CHAR(5) PRIMARY KEY,
    nome_startup VARCHAR(255) NOT NULL,
    cidade_sede VARCHAR(255)
);

create table PROGRAMADOR(
    id_programador char(5) PRIMARY KEY,
    id_startup char(5),
    nome_programador VARCHAR(255) NOT NULL,
    genero enum('M','F'),
    data_nascimento DATE,
    email varchar(255),
    UNIQUE(email)
);

create table PROGRAMADOR_LINGUAGEM(
	id_programador CHAR(5),
	id_linguagem CHAR(5)
);

create table LINGUAGEM_PROGRAMACAO(
	id_linguagem CHAR(5) PRIMARY KEY,
	nome_linguagem VARCHAR(255) NOT NULL,
	ano_lancamento YEAR
);

create table PROJETOS(
    id_projetos CHAR(5) PRIMARY KEY,
    id_startup CHAR(5),
    nome_projeto VARCHAR(255) NOT NULL
);

-- Populando células

insert into STARTUP values
	('10001','Tech4Toy','Porto Alegre'),
    ('10002','Smart123','Belo Horizonte'),
    ('10003','knowledgeUp','Rio de Janeiro'),
    ('10004','BSI Next Level','Recife'),
    ('10005','QualiHealth','São Paulo'),
    ('10006','ProEdu','Florianópolis');

insert into PROGRAMADOR values
	('30001','10001','João Pedro','M','1993-06-23','joaop@mail.com'),
    ('30002','10002','Paula Silva','F','1986-01-10','paulas@mail.com'),
    ('30003','10003','Renata Vieira','F','1991-05-07','renatav@mail.com'),
	('30004','10004','Felipe Santos','M','1976-11-25','felipes@mail.com'),
    ('30005','10001','Ana Cristina','F','1968-02-19','anac@mail.com'),
    ('30006','10004','Alexandre Alves','M','1988-07-07','alexandrea@mail.com'),
    ('30007','10002','Laura Marques','F','1987-10-04','lauram@mail.com');

insert into PROGRAMADOR_LINGUAGEM values
	('30001','20001'),
    ('30001','20002'),
    ('30002','20003'),
    ('30003','20004'),
    ('30003','20005'),
    ('30004','20005'),
    ('30007','20001'),
    ('30007','20002');

insert into LINGUAGEM_PROGRAMACAO values
	('20001','Python','1991'),
    ('20002','PHP','1995'),
    ('20003','Java','1995'),
    ('20004','C','1972'),
    ('20005','JavaScript','1995'),
    ('20006','Dart','2011');

insert into PROJETOS values
	('40001','10001','Konzetsu'),
    ('40002','10002','Piston'),
    ('40003','10003','EveryDay'),
    ('40004','10004','PumpIt'),
    ('40005','10005','BackOffice'),
    ('40006','10006','Julileu.IO');

-- Aplicando a restrição de integridade referencial (chaves estrangeiras - FK)

alter table PROJETOS ADD FOREIGN KEY(id_startup) REFERENCES STARTUP(id_startup) ON DELETE CASCADE;
alter table PROGRAMADOR ADD FOREIGN KEY(id_startup) REFERENCES STARTUP(id_startup) ON DELETE CASCADE ON UPDATE CASCADE;
alter table PROGRAMADOR_LINGUAGEM ADD FOREIGN KEY(id_linguagem) REFERENCES LINGUAGEM_PROGRAMACAO(id_linguagem) ON DELETE RESTRICT;
alter table PROGRAMADOR_LINGUAGEM ADD FOREIGN KEY(id_programador) REFERENCES PROGRAMADOR(id_programador) ON DELETE RESTRICT;

-- Alterando variável

SET LOCAL lc_time_names = 'pt_BR'; 
-- SHOW LOCAL VARIABLES like 'lc_time_names'; 
 
commit;
