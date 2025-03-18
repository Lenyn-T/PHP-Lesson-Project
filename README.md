# PHP-Lesson-Project
Created for education purposes  
  
Clipboard for repeated login  
git config --global user.email "lenyn.taka@gmail.com"  
git config --global user.name "Lenyn-T"  
  
SQL for database  
CREATE TABLE especialidade(  
    id INT AUTO_INCREMENT PRIMARY KEY,  
    descricao VARCHAR(100) NOT NULL,  
    sigla CHAR(3) NOT NULL  
) ENGINE innodb;  
  
CREATE TABLE medico(  
    id_medico INT AUTO_INCREMENT PRIMARY KEY,  
    nome VARCHAR(100) NOT NULL,  
    cpf CHAR(11) NOT NULL,  
    endereco VARCHAR(100),  
    numero VARCHAR(10),  
    bairro VARCHAR(60),  
    cidade VARCHAR(80),  
    estado char(2),  
    crm VARCHAR(20),  
    salario NUMERIC(10,2),  
    celular VARCHAR(15),  
    cod_esp INT  
) ENGINE INNODB;  
  
ALTER TABLE medico ADD CONSTRAINT fk_espe  
FOREIGN KEY (cod_esp) REFERENCES especialidade (id);  
  