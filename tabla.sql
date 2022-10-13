CREATE TABLE pokedex(
    id bigint unsigned not null  primary key auto_increment,
    nombre varchar(255),
    foto BLOB
);