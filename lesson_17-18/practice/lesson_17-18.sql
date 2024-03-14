DROP DATABASE IF EXISTS lesson_17_18;
CREATE DATABASE lesson_17_18;
USE lesson_17_18;

CREATE TABLE persons (
    id serial PRIMARY KEY,
    name varchar(32),
    age int 
) ENGINE=INNODB;

INSERT INTO persons (name, age) values ('Tom', 10);
INSERT INTO persons (name, age) values ('Bob', 11);
INSERT INTO persons (name, age) values ('Smith', 12);
INSERT INTO persons (name, age) values ('Anna', 14);

CREATE TABLE cities (
    id serial PRIMARY KEY,
    city varchar(30)
) ENGINE=INNODB;

INSERT INTO cities (city) values ('Magnitogorsk');
INSERT INTO cities (city) values ('Yekaterinburg');
INSERT INTO cities (city) values ('Reykjavik');

SELECT * FROM persons WHERE name IN ('Tom', 'Bob');

UPDATE persons SET age = 13 WHERE id = 4;

ALTER TABLE persons
ADD city_id bigint UNSIGNED NOT NULL AFTER age;

UPDATE persons SET city_id = 1 WHERE name = 'Tom';
UPDATE persons SET city_id = 1 WHERE name = 'Bob';
UPDATE persons SET city_id = 2 WHERE name = 'Anna';
UPDATE persons SET city_id = 3 WHERE name = 'Smith';

ALTER TABLE persons
ADD CONSTRAINT fk_person_city FOREIGN KEY (city_id) 
REFERENCES cities (id);