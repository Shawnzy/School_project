-- Inserts Site
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('1', 'Centennial', '210 Pine St', 'Atlanta', 'GA', '30308', '1234567890');
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('2', 'Midtown', '100 10th St', 'Atlanta', 'GA', '30309', '02345678901');
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('3', 'Downtown', '116 Ponce de Leon', 'Atlanta', 'GA', '30308', '3456789012');
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('4', 'Atlanta', '1234 Calle 3', 'Atlanta', 'GA', '23454', '4567890123');
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('5', 'Peach', '4321 Calle 2', 'Atlanta', 'GA', '12345', '5678901234');
commit;

-- Inserts User
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('fgalindo', '1', 'password', 'Francisco', 'Galindo', 'fgalindo@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('fran', '1', 'password', 'Fran', 'Duran', 'fran@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('cisco', '2', 'password', 'Cisco', 'Fuentes', 'cisco@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('john3', '3', 'password', 'John', 'Doe', 'john3@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('mark5', '4', 'password', 'Mark', 'Marksen', 'mark5@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('kbandlow', '5', 'password', 'Kiki', 'Bandlow', 'kbandlow@mail.com');
commit;

-- Inserts Client
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('fran', 'duran', '12345', 'license', '4048894906', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('cisco', 'glez', '23456', 'license', '6785937140', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('francis', 'fuentes', '34567', 'license', '1234567890', 'F');
commit;

-- Inserts UsageLog
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-30',NULL,'3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-30',NULL,'1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-01',NULL,'2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2016-10-02',NULL,'3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-02',NULL,'1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-04',NULL,'2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2016-10-05',NULL,'3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-06',NULL,'1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-07',NULL,'2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2016-10-08',NULL,'3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-09',NULL,'1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-10',NULL,'2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2016-10-11',NULL,'3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-12',NULL,'1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-13',NULL,'2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2016-10-14',NULL,'3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-15',NULL,'1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-16',NULL,'2');
commit;

-- Inserts Shelter
INSERT INTO `cs6400_sp17_team016`.`Shelter` (`site_sid`, `male_bunk_num`, `female_bunk_num`, `mixed_bunk_num`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('1', '20', '20', '20', 'Shelter', '10am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`Shelter` (`site_sid`, `male_bunk_num`, `female_bunk_num`, `mixed_bunk_num`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('2', '20', '20', '20', 'Shelter', '11am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`Shelter` (`site_sid`, `male_bunk_num`, `female_bunk_num`, `mixed_bunk_num`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('3', '20', '20', '20', 'Shelter', '12pm-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`Shelter` (`site_sid`, `male_bunk_num`, `female_bunk_num`, `mixed_bunk_num`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('4', '20', '20', '20', 'Shelter', '1pm-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`Shelter` (`site_sid`, `male_bunk_num`, `female_bunk_num`, `mixed_bunk_num`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('5', '20', '20', '20', 'Shelter', '2pm-6pm', 'Need to bring ID');
commit;

-- Inserts SoupKitchen
INSERT INTO `cs6400_sp17_team016`.`SoupKitchen` (`site_sid`, `seat_count`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('1', '30', 'Soup Kitchen', '8am-9am', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`SoupKitchen` (`site_sid`, `seat_count`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('2', '45', 'Soup Kitchen', '11am-7pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`SoupKitchen` (`site_sid`, `seat_count`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('3', '20', 'Soup Kitchen', '11am-6pm', 'Need to bring ID');
commit;

-- Inserts FoodPantry
INSERT INTO `cs6400_sp17_team016`.`FoodPantry` (`site_sid`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('1', 'Food Pantry', '8am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`FoodPantry` (`site_sid`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('2', 'Food Pantry', '9am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`FoodPantry` (`site_sid`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('3', 'Food Pantry', '10am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`FoodPantry` (`site_sid`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('4', 'Food Pantry', '11am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`FoodPantry` (`site_sid`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('5', 'Food Pantry', '12pm-6pm', 'Need to bring ID');
commit;

-- Inserts FoodBank
INSERT INTO `cs6400_sp17_team016`.`FoodBank` (`site_sid`) VALUES ('1');
INSERT INTO `cs6400_sp17_team016`.`FoodBank` (`site_sid`) VALUES ('2');
INSERT INTO `cs6400_sp17_team016`.`FoodBank` (`site_sid`) VALUES ('3');
INSERT INTO `cs6400_sp17_team016`.`FoodBank` (`site_sid`) VALUES ('4');
commit;

-- Inserts Item
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'carrots', 'refridgerated', '50', 'food', 'vegetable', '2017-07-21');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'steak', 'frozen', '5', 'food', 'meat/seafood', '2017-08-20');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('5', 'rope', 'dry good', '10', 'supply', 'other', '2017-09-22');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('5', 'shirt', 'dry good', '2', 'supply', 'clothing', '2017-10-24');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('4', 'milk', 'refridgerated', '20', 'food', 'dairy', '2017-12-23');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'carrots', 'refridgerated', '50', 'food', 'vegetable', '2017-09-21');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'steak', 'frozen', '5', 'food', 'meat/seafood', '2017-08-22');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('3', 'nutz', 'dry good', '10', 'food', 'nuts/grains/beans', '2017-09-12');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('4', 'cashews', 'dry good', '2', 'food', 'nuts/grains/beans', '2018-10-24');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('5', 'milk', 'refridgerated', '20', 'food', 'dairy', '2018-11-23');
commit;


-- Insert Requests
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'fgalindo', '1', '2', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'john3', '5', '4', '1', '0', 'pending');
commit;
