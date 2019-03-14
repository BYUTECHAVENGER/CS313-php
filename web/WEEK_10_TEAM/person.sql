CREATE TABLE person
(person_id                       SERIAL	            NOT NULL,
first_name                      VARCHAR(255)               NOT NULL,
last_name                       VARCHAR(255)                NOT NULL,
DOB                             DATE                NOT NULL,
 CONSTRAINT pk_person PRIMARY KEY(person_id));

CREATE TABLE child
(child_id                       SERIAL	            NOT NULL,
first_name                      VARCHAR(255)               NOT NULL,
last_name                       VARCHAR(255)                NOT NULL,
paternal_ID                     VARCHAR(255),
maternal_ID                    VARCHAR(255),
DOB                             DATE                NOT NULL,
 CONSTRAINT pk_child PRIMARY KEY(child_id));


 INSERT INTO person (first_name, last_name, DOB) VALUES ('Paulie', 'Snyder', '01/01/2001');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('Heather', 'Snyder', '01/01/2005');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('Terry', 'Snyder', '01/01/1960');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('Alan', 'Snyder', '01/01/1962');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('John', 'Snyder', '01/01/1956');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('Lucien', 'Snyder', '01/01/1985');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('Chuck', 'Snyder', '01/01/1975');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('Charles', 'Snyder', '01/01/54');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('David', 'Snyder', '01/01/1950');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('William', 'Snyder', '01/01/1961');
 INSERT INTO person (first_name, last_name, DOB) VALUES ('Arnold', 'Snyder', '01/01/1942');

 INSERT INTO child (first_name, last_name, paternal_ID, maternal_ID, DOB) VALUES ('Arnold', 'Snyder','1', '2', '01/01/1942');
 INSERT INTO child (first_name, last_name, paternal_ID, maternal_ID, DOB) VALUES ('Amanda', 'Snyder','1', '2', '01/01/1942');
 INSERT INTO child (first_name, last_name, paternal_ID, maternal_ID, DOB) VALUES ('Andrew', 'Snyder','1', '2', '01/01/1942');
 INSERT INTO child (first_name, last_name, paternal_ID, maternal_ID, DOB) VALUES ('Alexander', 'Snyder','1', '2', '01/01/1942');
 INSERT INTO child (first_name, last_name, paternal_ID, maternal_ID, DOB) VALUES ('Anastasia', 'Snyder','1', '2', '01/01/1942');



 CREATE USER ps_user WITH PASSWORD 'ps_pass';
GRANT SELECT, INSERT, UPDATE ON person TO ps_user;
GRANT USAGE, SELECT ON SEQUENCE person_id_seq TO ps_user;