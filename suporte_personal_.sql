create database IF not EXISTS  suporte;

USE suporte;

-- Tabela personal.
CREATE TABLE if not exists personal (
  cpf_personal INT AUTO_INCREMENT primary key,
  nome VARCHAR(80) not null,
  email VARCHAR(30),
  login VARCHAR(15),
  senha varchar (8),
  celular VARCHAR(15)
);

-- Tabela aluno.
CREATE TABLE if not exists aluno (
  cpf_aluno INT AUTO_INCREMENT primary key,
  nome VARCHAR(80) not null,
  email VARCHAR(30),
  login VARCHAR(15),
  senha varchar (8),
  celular VARCHAR(15)
);

-- Tabela exercicio.
CREATE TABLE if not exists exercicio (
  cod_exercicio INT AUTO_INCREMENT primary key, 
  descricao_exercicio VARCHAR(80),
  tempo_exercicio varchar (5)
);

-- Tabela plano_treino.
CREATE TABLE if not exists plano_treino (
  descricao_treino VARCHAR(80),
  cod_treino INT (5) auto_increment primary key,
  tempo_treino VARCHAR(5),
  exercicios VARCHAR(80),
  data_inicio DATE,
  data_fim DATE,
  aluno VARCHAR(80),
  cpf_aluno INT,
  FOREIGN KEY (cpf_aluno) REFERENCES aluno(cpf_aluno)
);

-- Tabela pagamento.
CREATE TABLE if not exists pagamento (
  id_pagamento int (15) AUTO_INCREMENT primary key, 
  aluno VARCHAR(80),
  valor DECIMAL(10,2),
  data_pagamento DATE,
  cpf_aluno INT,
  FOREIGN KEY (cpf_aluno) REFERENCES aluno(cpf_aluno)
);

-- Tabela aulas_atividade.
CREATE TABLE if not exists aulas_atividade (
  aluno VARCHAR(80),
  descricao_aula VARCHAR(150),
  dia_da_semana VARCHAR(20),
  cpf_aluno INT,
  FOREIGN KEY (cpf_aluno) REFERENCES aluno(cpf_aluno)
);
