Create Table Prefeitura(
CNPJ integer,
CPF_Registrador varchar(50),
Nome varchar(50),
Rua varchar(50),
Numero integer,
Bairro varchar(50),
Municipio varchar(50),
Estado varchar(50),
Representante varchar(50),
Telefone varchar(50),
Licitacao varchar(50),
Contrato varchar(510), 
Inicio_contrato varchar(50), 
Fim_contrato varchar(50), 
Secretaria_Educacao varchar(50), 
Controlador varchar(50),
Cpf_Controlador varchar(50), 
Fiscal varchar(50),
Cpf_Fiscal varchar(50),
telefone_Fiscal varchar(50), 
email varchar(50),
PRIMARY KEY (CNPJ)
);


Create Table Escola(	
ID_Escola int not null auto_increment, 	
Nome varchar(50),
CPF_Registrador varchar(50),
Latitude double,
Longitude double,
Municipio varchar(50),
Escolas varchar(1000),
primary key(ID_Escola),
);


Create Table Motorista(
Nome varchar(50), 
CPF_Registrador varchar(50),
Idade varchar(50), 
CPF varchar(50), 
Endereço varchar(50),
Telefone varchar(50), 
Documento habilitação varchar(50) 
Categoria varchar(50), 
Curso varchar(50),
Veículo varchar(50),
primary key(CPF)
);


CREATE TABLE rotas(	
ID_Rota int not null auto_increment,
CPF_Registrador varchar(50),
Data_Registro Datetime;
itinerário varchar(2000),
turno varchar(10),
distancia double,
tempo double,
primary key(ID_Rota)	
);




