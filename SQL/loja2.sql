/***********************************************************/
/* DBMS name:  MYSql                                       */
/* Created on:  21/10/2018                                 */
/***********************************************************/

/***********************************************************/
/* Table: Categoria                                        */
/***********************************************************/
CREATE TABLE categoria (
  id INTEGER AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(255) NOT NULL
);

/***********************************************************/
/* INSERT: Categoria                                       */
/***********************************************************/
INSERT INTO categoria (nome) VALUES
  ('esporte'),
  ('escolar'),
  ('mobilidade'),
  ('guloseimas');

/***********************************************************/
/* Table: Produto                                        */
/***********************************************************/
CREATE TABLE produto (
  id INTEGER AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(255),
  preco decimal(10,2) NOT NULL,
  descricao TEXT NOT NULL ,
  categoria_id INTEGER NOT NULL ,
  usado  BOOLEAN DEFAULT FALSE
);

/***********************************************************/
/* INSERT: Produto                                         */
/***********************************************************/
INSERT INTO produto (nome, preco, descricao, categoria_id, usado) VALUES
  ('Carro',20000.00,'Carro muito bonito',3,0),
  ('Motocicleta',10000.00,'Motocicleta bem legal',3,0),
  ('Bicicleta',300.00,'bicleta da hora',3,0),
  ('Lapís',1.00,'Lapís bem bacana',2,0),
  ('Bola de Futebol',50.00,'Bola de Futebol autografada pelo Tafarell',1,1),
  ('Bala de Jujuba',2.00,'Bala de Jujuba colorida',4,0);

/***********************************************************/
/* Table: Usuario                                        */
/***********************************************************/
CREATE TABLE usuario (
  id INTEGER AUTO_INCREMENT PRIMARY KEY ,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
);

/***********************************************************/
/* INSERT: Usuario  Senha: 123456                          */
/* encriptada pelo site:                                   */
/* https://www.md5online.org/md5-encrypt.html              */
/***********************************************************/
INSERT INTO usuario (email, senha) VALUES
  ('jorge.vmachado@hotmail.com','e10adc3949ba59abbe56e057f20f883e');