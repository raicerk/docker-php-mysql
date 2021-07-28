CREATE TABLE database_name.prueba (
	id INT auto_increment NOT NULL PRIMARY KEY,
	name varchar(100) NOT NULL,
	genere varchar(100) NOT NULL,
	status BOOL NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1
COLLATE=latin1_swedish_ci;
