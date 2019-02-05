CREATE TABLE warehouse
(warehouse_id                       INTEGER	            NOT NULL,
 name 			                    VARCHAR(255),
 climate_controlled		            BOOLEAN,
 refridgeration		                BOOLEAN,
 dry_storage			            BOOLEAN,
 location_street		            VARCHAR(255),
 location_city		                VARCHAR(255),
 location_state		                VARCHAR(255),
 hour_open			                TIME,
 hour_close			                TIME,
 CONSTRAINT pk_warehouse PRIMARY KEY(warehouse_id));

CREATE TABLE owner
(owner_id                           INTEGER	                NOT NULL,
 first_name                         VARCHAR(255),
 last_name                          VARCHAR(255),
 address_street	                    VARCHAR(255),
 address_city		                VARCHAR(255,
 address_state		                VARCHAR(255),
 phone_number		                INTEGER,
 emergency_number	                INTEGER,
 CONSTRAINT pk_owner PRIMARY KEY(owner_id));

CREATE TABLE insurance
(insurance_id                       INTEGER	            NOT NULL,
 policy_number		                VARCHAR(255),
 policy_value		                INTEGER,
 policy_company	                    VARCHAR(255),
 phone_number		                INTEGER,
 CONSTRAINT pk_insurance PRIMARY KEY(insurance_id));

CREATE TABLE item
(item_id                            INTEGER        NOT NULL,
 item_name                          VARCHAR(255) NOT NULL UNIQUE,
 value			                    INTEGER NOT NULL,
 expiration		                    VARCHAR(255) NOT NULL,
 disposal_method	                TEXT,
 recieved_date		                DATE,
 quantity		                    INTEGER NOT NULL,
 ship_date		                    DATE,
 storage_type		                VARCHAR(255),
 notes			                    TEXT,
 CONSTRAINT pk_item PRIMARY KEY (item_id),
 CONSTRAINT fk_warehouse_id FOREIGN KEY (warehouse_id) REFERENCES warehouse (warehouse_id),
 CONSTRAINT fk_owner_id FOREIGN KEY (owner_id) REFERENCES owner (owner_id),
 CONSTRAINT fk_insurance FOREIGN KEY (insurance_id) REFERENCES insurance (insurance_id));




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