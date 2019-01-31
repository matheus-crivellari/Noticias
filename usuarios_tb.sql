CREATE TABLE usuarios_tb (
  id_usuario int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  usuario varchar(20) NOT NULL,
  senha varchar(8) NOT NULL,
  tipo enum('sup','com') NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT INTO usuarios_tb VALUES (0,'supervisor', '123', 'sup');
INSERT INTO usuarios_tb VALUES (0,'comum', '123', 'com');