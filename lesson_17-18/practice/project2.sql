DROP DATABASE IF EXISTS project2;
CREATE DATABASE project2;
USE project2;

CREATE TABLE peoples (
    id serial PRIMARY KEY,
    name varchar(50),
    surname varchar(50),
    age int
) ENGINE=INNODB;

CREATE TABLE hobbies (
    id serial PRIMARY KEY,
    name varchar(50),
    description text
) ENGINE=INNODB;

CREATE TABLE peoples_hobbies (
    id serial PRIMARY KEY,
    peoples_id bigint UNSIGNED NOT NULL,
    hobbies_id bigint UNSIGNED NOT NULL,
    FOREIGN KEY (peoples_id) REFERENCES peoples(id) ON DELETE RESTRICT,
    FOREIGN KEY (hobbies_id) REFERENCES hobbies(id) ON DELETE RESTRICT
) ENGINE=INNODB;


INSERT INTO peoples (name, surname, age) values ('Tom', 'Selleck', 79);
INSERT INTO hobbies (name, description) values ('Running', 'Runrunrunrun');
INSERT INTO peoples (name, surname, age) values ('Kyle', 'Morgan', 12);
INSERT INTO hobbies (name, description) values ('Music', 'Listen to');
INSERT INTO peoples_hobbies (peoples_id, hobbies_id) values (1, 1);
INSERT INTO peoples_hobbies (peoples_id, hobbies_id) values (2, 1);