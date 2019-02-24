CREATE TABLE warehouse
(warehouse_id                       SERIAL	            NOT NULL,
 warehouse_name			                    VARCHAR(255),
 climate_controlled		            BOOLEAN,
 refridgeration		                BOOLEAN,
 dry_storage			            BOOLEAN,
 location_street		            VARCHAR(255),
 location_city		                VARCHAR(255),
 location_state		                VARCHAR(255),
 hour_open			                TIME,
 hour_close			                TIME,
 CONSTRAINT pk_warehouse PRIMARY KEY(warehouse_id));

CREATE TABLE owners
(owner_id                           SERIAL	                NOT NULL,
 first_name                         VARCHAR(255),
 last_name                          VARCHAR(255),
 address_street	                    VARCHAR(255),
 address_city		                VARCHAR(255),
 address_state		                VARCHAR(255),
 phone_number		                VARCHAR(20),
 emergency_number	                VARCHAR(20),
 CONSTRAINT pk_owners PRIMARY KEY(owner_id));

CREATE TABLE insurance
(insurance_id                       SERIAL            NOT NULL,
 policy_number		                VARCHAR(255),
 policy_value		                INTEGER,
 policy_company	                    VARCHAR(255),
 phone_number		                VARCHAR(20),
 CONSTRAINT pk_insurance PRIMARY KEY(insurance_id));


CREATE TABLE item
(item_id                            SERIAL        NOT NULL,
 item_name                          VARCHAR(255) NOT NULL UNIQUE,                     
 expiration		                    DATE NOT NULL,
 disposal_method	                TEXT,
 recieved_date		                DATE,
 quantity		                    INTEGER NOT NULL,
 ship_date		                    DATE,
 storage_type		                VARCHAR(255),
 notes			                    TEXT,
 CONSTRAINT pk_item PRIMARY KEY (item_id),
warehouse_id INTEGER REFERENCES warehouse (warehouse_id),
owner_id INTEGER REFERENCES owners (owner_id),
insurance_id INTEGER REFERENCES insurance (insurance_id));




--this had to be removed to create the item TABLE


/*
 CONSTRAINT fk_warehouse_id FOREIGN KEY (warehouse_id) REFERENCES warehouse (warehouse_id),
 CONSTRAINT fk_owner_id FOREIGN KEY (owner_id) REFERENCES owner (owner_id),
 CONSTRAINT fk_insurance FOREIGN KEY (insurance_id) REFERENCES insurance (insurance_id)
*/









/*
 CONSTRAINT

CREATE TABLE warehouse
(warehouse_id INTEGER		NOT NULL,
 name 				        VARCHAR(255),
 climate_controlled		    BOOLEAN,
 refridgeration			    BOOLEAN,
 dry_storage			    BOOLEAN,
 location_street		    VARCHAR(255),
 location_city			    VARCHAR(255),
 location_state			    VARCHAR(255),
 hour_open			        TIME,
 hour_close			        TIME,
 CONSTRAINT pk_warehouse PRIMARY KEY(warehouse_id)
);

CREATE TABLE owner
(owner_id INTEGER		    NOT NULL,
 first_name            		VARCHAR(255),
 last_name             		VARCHAR(255),
 address_street			    VARCHAR(255),
 address_city			    VARCHAR(255),
 address_state			    VARCHAR(255),
 phone_number			    INTEGER,
 emergency_number		    INTEGER,
 CONSTRAINT pk_owner 		PRIMARY KEY(owner_id)
);

CREATE TABLE insurance
(insurance_id INTEGER		NOT NULL,
 policy_number			    VARCHAR(255),
 policy_value			    INTEGER,
 policy_company	        	VARCHAR(255),
 phone_number			    INTEGER,
 CONSTRAINT pk_insurance 	PRIMARY KEY(insurance_id)
);

CREATE TABLE item
(item_id INTEGER        	NOT NULL,
 item_name             		VARCHAR(255) NOT NULL UNIQUE,
 value				        INTEGER NOT NULL,
 expiration			        VARCHAR(255) NOT NULL,
 disposal_method		    TEXT,
 recieved_date			    DATE,
 quantity			        NOT NULL,
 ship date			        DATE,
 storage_type			    VARCHAR(255),
 notes				        TEXT,
 CONSTRAINT pk_item PRIMARY KEY (item_id)
 CONSTRAINT fk_warehouse_id FOREIGN KEY (warehouse_id) REFERENCES warehouse (warehouse_id)
 CONSTRAINT fk_owner_id FOREIGN KEY (owner_id) REFERENCES owner (owner_id)
 CONSTRAINT fk_insurance FOREIGN KEY (insurance_id) REFERENCES insurance (insurance_id)
);

*/

INSERT INTO warehouse (warehouse_name, climate_controlled, refridgeration, dry_storage, location_street, location_city, location_state, hour_open, hour_close)
VALUES ('Freddy''s Cold Storage', TRUE, TRUE, FALSE, 'Happy Street', 'Jakarta', 'Indonesia', 080000, 200000);

INSERT INTO warehouse (warehouse_name, climate_controlled, refridgeration, dry_storage, location_street, location_city, location_state, hour_open, hour_close)
VALUES ('Paulie''s DRY STOCKYARD', FALSE, FALSE, TRUE, '256 Main Street', 'Rochester', 'New York', 060000, 000000);

INSERT INTO owners (first_name, last_name, address_street, address_city, address_state, phone_number, emergency_number)
VALUES ('Michael', 'Schmidt', '100 Davey Avenue', 'Walla Walla', 'Washington', '555-222-1234', '555-222-4567');

INSERT INTO insurance (policy_number, policy_value, policy_company, phone_number)
VALUES ('123456789', 1000000, 'Paulie''s Insurance Co.', '222-456-7890');

INSERT INTO item (item_name, expiration, disposal_method, recieved_date, quantity, storage_type, notes)
VALUES ('Hard Cheese', '2020-12-31', 'BIO DSIPOSAL', '2018-12-31', 5000, 'dry storage', 'smelly cheeses');

INSERT INTO warehouse (warehouse_name, climate_controlled, refridgeration, dry_storage, location_street, location_city, location_state, hour_open, hour_close) VALUES ('Paulie''s DRY STOCKYARD', FALSE, FALSE, TRUE, '256 Main Street', 'Rochester', 'New York', '06:00:00', '00:00:00');

INSERT INTO warehouse (warehouse_name, climate_controlled, refridgeration, dry_storage, location_street, location_city, location_state, hour_open, hour_close) VALUES ('Michael''s''s DRY STOCKYARD', FALSE, FALSE, TRUE, '256 Main Street', 'Walla Walla', 'Washington', '09:00:00', '15:00:00');

INSERT INTO warehouse (warehouse_name, climate_controlled, refridgeration, dry_storage, location_street, location_city, location_state, hour_open, hour_close) VALUES ('Angela''s Cold Storage', TRUE, TRUE, FALSE, '89 Wayne Street', 'Webster', 'NewYork', '08:00:00', '20:00:00');

INSERT INTO warehouse (warehouse_name, climate_controlled, refridgeration, dry_storage, location_street, location_city, location_state, hour_open, hour_close) VALUES ('Carla''s Climate Controlled Storage', TRUE, TRUE, TRUE, '10000 Happy Street', 'San Antonio', 'Texas', '06:00:00', '22:00:00');

INSERT INTO warehouse (warehouse_name, climate_controlled, refridgeration, dry_storage, location_street, location_city, location_state, hour_open, hour_close) VALUES ('Daryl''s Climate Controlled Storage', TRUE, TRUE, TRUE, '589 Clearwater Street', 'Santa Clara', 'California', '06:00:00', '22:00:00');

INSERT INTO item (item_name, expiration, disposal_method, recieved_date, quantity, storage_type, notes)
VALUES ('Blank Compact Disks', '2050-12-31', 'BIO DISPOSAL', '2018-12-31', 500000, 'dry storage', 'Electronics, these items are insured at a high value-FRAGILE');

INSERT INTO item (item_name, expiration, disposal_method, recieved_date, quantity, storage_type, notes)
VALUES ('Fish Food', '2022-12-31', 'WM', '2018-12-31', 12000, 'dry storage', 'Pet foods, these items are not insured at a high value-MUST STAY DRY AT ALL TIMES');

INSERT INTO owners (first_name, last_name, address_street, address_city, address_state, phone_number, emergency_number)
VALUES ('Paulie', 'Snyder', '1020 Dewey Avenue', 'Rochester', 'New York', '585-888-1234', '585-888-4567');

INSERT INTO owners (first_name, last_name, address_street, address_city, address_state, phone_number, emergency_number)
VALUES ('Terry', 'Snyder', '385 West Commercial Street', 'East Rochester', 'New York', '585-381-1234', '585-381-4567');

INSERT INTO owners (first_name, last_name, address_street, address_city, address_state, phone_number, emergency_number)
VALUES ('Terry', 'Snyder JR', '388 West Commercial Street', 'East Rochester', 'New York', '585-381-8899', '585-381-5566');

INSERT INTO owners (first_name, last_name, address_street, address_city, address_state, phone_number, emergency_number)
VALUES ('Lucien', 'Snyder', '399 West Commercial Street', 'East Rochester', 'New York', '585-381-9999', '585-381-9999');