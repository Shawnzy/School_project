-- CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
CREATE USER IF NOT EXISTS TEST_USER@localhost IDENTIFIED BY 'password123';

DROP DATABASE IF EXISTS `cs6400_sp17_team016`;
SET default_storage_engine=InnoDB;
SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE DATABASE IF NOT EXISTS cs6400_sp17_team016
    DEFAULT CHARACTER SET utf8mb4
    DEFAULT COLLATE utf8mb4_unicode_ci;
USE cs6400_sp17_team016;

GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'TEST_USER'@'localhost';
GRANT ALL PRIVILEGES ON `TEST_USER`.* TO 'TEST_USER'@'localhost';
GRANT ALL PRIVILEGES ON `cs6400_sp17_team016`.* TO 'TEST_USER'@'localhost';
FLUSH PRIVILEGES;


-- Tables ---------------------------------------------------------------------
CREATE TABLE `User` (
	`username` VARCHAR(30) NOT NULL,
	`site_sid` CHAR(9) NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	`firstname` VARCHAR(50) NOT NULL,
	`lastname` VARCHAR(50) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (username)
  -- FOREIGN KEY (site_sid) REFERENCES Site (site_sid)
);

CREATE TABLE `Site` (
	`site_sid` CHAR(9) NOT NULL,
  `short_name` VARCHAR(30) NOT NULL,
  `st_number` VARCHAR(10) NOT NULL,
  `street` VARCHAR(120) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `state` CHAR(2) NOT NULL,
  `zip_code` CHAR(5) NOT NULL,
  `marked_for_deletion` TINYINT(1) DEFAULT 0 NOT NULL,
  `primary_phone_num` VARCHAR(15) NOT NULL, -- CHECK (len(phone_number)>=10)
  PRIMARY KEY (site_sid)
);

CREATE TABLE `Client` (
  `client_sid` CHAR(9) NOT NULL,
  `firstname` VARCHAR(30) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `id_num` VARCHAR(30) NOT NULL,
  `id_type` VARCHAR(120) NOT NULL,
  `phone_num` VARCHAR(15) NULL, -- CHECK (len(phone_num)>=10)
  `gender` CHAR(2) NOT NULL,
  PRIMARY KEY (client_sid)
);

CREATE TABLE `UsageLog` (
  `client_sid` CHAR(9) NOT NULL,
  `date_time_stamp` DATE NULL,
  `notes` VARCHAR(200) NULL,
  `site_sid` CHAR(9) NULL,
  UNIQUE (client_sid, date_time_stamp)
  -- FOREIGN KEY (client_sid) REFERENCES Client (client_sid),
);

CREATE TABLE `Request`(
  `item_name` VARCHAR(50) NOT NULL,
  `site_sid_request_to` CHAR(9) NOT NULL,
  `site_sid_request_from` CHAR(9) NOT NULL,
  `item_qty` INT NOT NULL,
  `status` VARCHAR(30) NOT NULL
  -- FOREIGN KEY (site_sid_request_from) REFERENCES `Site` (site_sid)
  -- FOREIGN KEY (site_sid_request_to) REFERENCES `FoodBank` (site_sid)
  -- FOREIGN KEY (item_name) REFERENCES `Item` (item_name)
);

CREATE TABLE `ClientServices`(
  `service_type` VARCHAR(12) NOT NULL,
  `site_sid` CHAR(9) NOT NULL,
  `description` VARCHAR(200) NULL,
  `hours_of_op` VARCHAR(200) NOT NULL,
  `conditions_of_use` VARCHAR(200) NOT NULL,
  UNIQUE (service_type, site_sid)
  -- FOREIGN KEY (site_sid) REFERENCES Site (site_sid)
);

CREATE TABLE `Shelter` (
  `site_sid` CHAR(9) NOT NULL,
  `male_bunk_num` INT NULL,
  `female_bunk_num` INT NULL,
  `mixed_bunk_num` INT NULL,
  PRIMARY KEY (site_sid)
  -- FOREIGN KEY (site_sid) REFERENCES Site (site_sid)
);

CREATE TABLE `SoupKitchen` (
  `site_sid` CHAR(9) NOT NULL,
  `seat_count` INT NOT NULL,
  `description` VARCHAR(200) NULL,
  `hours_of_op` VARCHAR(200) NOT NULL,
  `conditions_of_use` VARCHAR(200) NOT NULL,
  PRIMARY KEY (site_sid)
  -- FOREIGN KEY (site_sid) REFERENCES Site (site_sid)
);

CREATE TABLE `FoodPantry` (
  `site_sid` CHAR(9) NOT NULL,
  PRIMARY KEY (site_sid)
  -- FOREIGN KEY (site_sid) REFERENCES Site (site_sid)
);

CREATE TABLE `FoodBank` (
  `site_sid` CHAR(9) NOT NULL,
  `item_name` VARCHAR(50) NOT NULL,
  `units_num` INT NOT NULL,
  UNIQUE (site_sid, item_name)
  -- FOREIGN KEY (site_sid) REFERENCES Site (site_sid)
  -- FOREIGN KEY (item_name) REFERENCES Item (item_name)
);

CREATE TABLE `Item`(
  `item_name` VARCHAR(50) NOT NULL,
  `storage_type` VARCHAR(50) NOT NULL,
  `exp_date` DATE NULL,
  PRIMARY KEY (item_name)
);

CREATE TABLE `Supplies` (
  `item_name` VARCHAR(50) NOT NULL,
  `supply_category` VARCHAR(50) NOT NULL,
  PRIMARY KEY (item_name)
  -- FOREIGN KEY (item_name) REFERENCES `Item` (item_name)
);

CREATE TABLE `Food` (
  `item_name` VARCHAR(50) NOT NULL,
  `food_category` VARCHAR(50) NOT NULL,
  PRIMARY KEY (item_name)
  -- FOREIGN KEY (item_name) REFERENCES `Item` (item_name)
);


-- Constraints   Foreign Keys: FK_ChildTable_childColumn_ParentTable_parentColumn
ALTER TABLE `User`
  ADD CONSTRAINT fk_User_site_sid_Site_site_sid FOREIGN KEY (site_sid) REFERENCES `Site` (site_sid);

ALTER TABLE `UsageLog`
  ADD CONSTRAINT fk_UsageLog_client_sid_Client_client_sid FOREIGN KEY (client_sid) REFERENCES `Client` (client_sid);

ALTER TABLE `Request`
  ADD CONSTRAINT fk_Request_site_sid_FoodBank_site_sid_request_from FOREIGN KEY (site_sid_request_from) REFERENCES `Site` (site_sid),
  ADD CONSTRAINT fk_Request_site_sid_FoodBank_site_sid_request_to FOREIGN KEY (site_sid_request_to) REFERENCES `FoodBank` (site_sid),
  ADD CONSTRAINT fk_Request_item_name_Item_item_name FOREIGN KEY (item_name) REFERENCES `Item` (item_name);

ALTER TABLE `ClientServices`
  ADD CONSTRAINT fk_ClientServices_site_sid_Site_site_sid FOREIGN KEY (site_sid) REFERENCES `Site` (site_sid);

ALTER TABLE `Shelter`
  ADD CONSTRAINT fk_Shelter_site_sid_Site_site_sid FOREIGN KEY (site_sid) REFERENCES `Site` (site_sid);

ALTER TABLE `SoupKitchen`
  ADD CONSTRAINT fk_SoupKitchen_site_sid_Site_site_sid FOREIGN KEY (site_sid) REFERENCES `Site` (site_sid);

ALTER TABLE `FoodPantry`
  ADD CONSTRAINT fk_FoodPantry_site_sid_Site_site_sid FOREIGN KEY (site_sid) REFERENCES `Site` (site_sid);

ALTER TABLE `FoodBank`
  ADD CONSTRAINT fk_FoodBank_site_sid_Site_site_sid FOREIGN KEY (site_sid) REFERENCES `Site` (site_sid),
  ADD CONSTRAINT fk_FoodBank_item_name_Item_item_name FOREIGN KEY (item_name) REFERENCES `Item` (item_name);

ALTER TABLE `Supplies`
  ADD CONSTRAINT fk_Supplies_item_name_Item_item_name FOREIGN KEY (item_name) REFERENCES `Item` (item_name);

ALTER TABLE `Food`
  ADD CONSTRAINT fk_Food_item_name_Item_item_name FOREIGN KEY (item_name) REFERENCES `Item` (item_name);
