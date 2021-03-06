-- Inserts Site
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('1', 'site1', '210 Pine St', 'Atlanta', 'GA', '30308', '1234567890');
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('2', 'site2', '100 10th St', 'Atlanta', 'GA', '30309', '02345678901');
INSERT INTO `cs6400_sp17_team016`.`Site` (`site_sid`, `short_name`, `st_address`, `city`, `state`, `zip_code`, `primary_phone_num`) VALUES ('3', 'site3', '116 Ponce de Leon', 'Atlanta', 'GA', '30308', '3456789012');
commit;

-- Inserts User
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('emp1', '1', 'gatech123', 'site1', 'Employee1', 'Employee1@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('emp2', '2', 'gatech123', 'site2', 'Employee2', 'Employee2@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('emp3', '3', 'gatech123', 'site3', 'Employee3', 'Employee3@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('vol1', '1', 'gatech123', 'site1', 'Volunteer1', 'Volunteer1@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('vol2', '2', 'gatech123', 'site2', 'Volunteer2', 'Volunteer2@mail.com');
INSERT INTO `cs6400_sp17_team016`.`User` (`username`, `site_sid`, `password`, `firstname`, `lastname`, `email`) VALUES ('vol3', '3', 'gatech123', 'site3', 'Volunteer3', 'Volunteer3@mail.com');
commit;

-- Inserts Client
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Joe', 'Client1', 'TestID1', 'license', '4048894906', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Joe', 'Client2', 'TestID2', 'license', '6785937140', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Joe', 'Client3', 'TestID3', 'license', '1234567890', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Joe', 'Client4', 'TestID4', 'license', '4048894906', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Joe', 'Client5', 'TestID5', 'license', '6785937140', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Joe', 'Client6', 'TestID6', 'license', '1234567890', 'M');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Jane', 'Client7', 'TestID7', 'license', '2048894906', 'F');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Jane', 'Client8', 'TestID8', 'license', '2785937140', 'F');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Jane', 'Client9', 'TestID9', 'license', '2234567890', 'F');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Jane', 'Client10', 'TestID10', 'license', '2048894906', 'F');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Jane', 'Client11', 'TestID11', 'license', '2785937140', 'F');
INSERT INTO `cs6400_sp17_team016`.`Client` (`firstname`, `lastname`, `id_num`, `id_type`, `phone_num`, `gender`) VALUES ('Jane', 'Client12', 'TestID12', 'license', '2234567890', 'F');
commit;

-- Inserts UsageLog
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-30 11:26:55','pantry','1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-30 11:23:55','pantry','1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('3','2015-10-01 11:24:55','pantry','1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('4','2016-10-02 11:25:55','pantry','1');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('5','2015-10-02 11:27:55','soup','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('6','2015-10-04 11:28:55','soup','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('7','2016-10-05 11:29:55','soup','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('8','2015-10-06 11:36:55','soup','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-07 11:37:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2016-10-08 11:38:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('3','2015-10-09 11:39:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('4','2015-10-10 11:35:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('5','2016-10-11 11:34:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('6','2015-10-12 11:33:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('7','2015-10-13 11:32:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('8','2016-10-14 11:31:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('9','2015-10-15 11:01:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('10','2015-10-16 11:02:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('11','2015-10-16 11:03:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('12','2015-10-16 11:04:55', 'shelter','2');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-30 11:05:55','pantry','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2015-10-30 11:06:55','pantry','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('3','2015-10-01 11:07:55','pantry','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('4','2016-10-02 11:08:55','pantry','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('5','2015-10-02 11:09:55','soup','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('6','2015-10-04 11:10:55','soup','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('7','2016-10-05 11:11:55','soup','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('8','2015-10-06 11:12:55','soup','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('1','2015-10-07 11:13:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('2','2016-10-08 11:14:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('3','2015-10-09 11:15:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('4','2015-10-10 11:16:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('5','2016-10-11 11:17:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('6','2015-10-12 11:18:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('7','2015-10-13 11:19:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('8','2016-10-14 12:26:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('9','2015-10-15 08:26:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('10','2015-10-16 09:26:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('11','2015-10-16 07:26:55', 'shelter','3');
INSERT INTO `cs6400_sp17_team016`.`UsageLog` (`client_sid`,`date_time_stamp`,`notes`,`site_sid`) VALUES ('12','2015-10-16 06:26:55', 'shelter','3');
commit;

-- Inserts Shelter
INSERT INTO `cs6400_sp17_team016`.`Shelter` (`site_sid`, `male_bunk_num`, `female_bunk_num`, `mixed_bunk_num`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('2', '2', '2', '2', 'shelter2', '10am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`Shelter` (`site_sid`, `male_bunk_num`, `female_bunk_num`, `mixed_bunk_num`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('3', '2', '2', '2', 'shelter3', '11am-6pm', 'Need to bring ID');
commit;

-- Inserts SoupKitchen
INSERT INTO `cs6400_sp17_team016`.`SoupKitchen` (`site_sid`, `seat_count`, `seat_count_total`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('2', '3', '5', 'soup2', '8am-9am', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`SoupKitchen` (`site_sid`, `seat_count`, `seat_count_total`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('3', '6', '10', 'soup3', '11am-7pm', 'Need to bring ID');
commit;

-- Inserts FoodPantry
INSERT INTO `cs6400_sp17_team016`.`FoodPantry` (`site_sid`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('1', 'pantry1', '8am-6pm', 'Need to bring ID');
INSERT INTO `cs6400_sp17_team016`.`FoodPantry` (`site_sid`, `description`, `hours_of_op`, `conditions_of_use`) VALUES ('3', 'pantry3', '9am-6pm', 'Need to bring ID');
commit;

-- Inserts FoodBank
INSERT INTO `cs6400_sp17_team016`.`FoodBank` (`site_sid`) VALUES ('1');
INSERT INTO `cs6400_sp17_team016`.`FoodBank` (`site_sid`) VALUES ('2');
INSERT INTO `cs6400_sp17_team016`.`FoodBank` (`site_sid`) VALUES ('3');
commit;

-- Inserts Item
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'lettuce', 'refrigerated', '1', 'food', 'vegetables', '2017-10-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'spinach', 'refrigerated', '1', 'food', 'vegetables', '2017-09-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'peanuts', 'drygoods', '1', 'food', 'nuts/grains/beans', '2017-08-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'cashews', 'drygoods', '1', 'food', 'nuts/grains/beans', '2017-10-22');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'pepsi', 'refrigerated', '1', 'food', 'juice/drink', '2017-10-21');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'sprite', 'refrigerated', '1', 'food', 'juice/drink', '2017-10-20');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'tri-tip', 'frozen', '1', 'food', 'meat/seafood', '2017-10-10');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'ribeye', 'frozen', '1', 'food', 'meat/seafood', '2017-10-11');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'cheddar cheese', 'refrigerated', '1', 'food', 'dairy/eggs', '2017-11-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('1', 'jack cheese', 'refrigerated', '1', 'food', 'dairy/eggs', '2017-12-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'toothbrush', 'dry good', '1', 'supply', 'personal hygiene');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'toothpaste', 'dry good', '1', 'supply', 'personal hygiene');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'floss', 'dry good', '1', 'supply', 'personal hygiene');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'shampoo', 'dry good', '1', 'supply', 'personal hygiene');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'hand soap', 'dry good', '1', 'supply', 'personal hygiene');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 't-shirt', 'dry good', '1', 'supply', 'clothing');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'jeans', 'dry good', '1', 'supply', 'clothing');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'cargo shorts', 'dry good', '1', 'supply', 'clothing');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'skirt', 'dry good', '1', 'supply', 'clothing');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('1', 'coat', 'dry good', '1', 'supply', 'clothing');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'carrot', 'refrigerated', '1', 'food', 'vegetables', '2018-10-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'radish', 'refrigerated', '1', 'food', 'vegetables', '2018-09-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'wheat bread', 'drygoods', '1', 'food', 'nuts/grains/beans', '2018-08-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'oats', 'drygoods', '1', 'food', 'nuts/grains/beans', '2018-10-22');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'ketchup', 'drygoods', '1', 'food', 'sauce/condiments', '2018-08-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'mustard', 'drygoods', '1', 'food', 'sauce/condiments', '2018-10-22');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'orange juice', 'refrigerated', '1', 'food', 'juice/drink', '2018-10-21');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'apple juice', 'refrigerated', '1', 'food', 'juice/drink', '2018-10-20');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'shrimp', 'frozen', '1', 'food', 'meat/seafood', '2018-10-10');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'lobster', 'frozen', '1', 'food', 'meat/seafood', '2018-10-11');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'deviled eggs', 'refrigerated', '1', 'food', 'dairy/eggs', '2018-11-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('2', 'hard-boiled eggs', 'refrigerated', '1', 'food', 'dairy/eggs', '2018-12-30');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'tent', 'dry good', '1', 'supply', 'shelter');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'sleeping bag', 'dry good', '1', 'supply', 'shelter');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'blanket', 'dry good', '1', 'supply', 'shelter');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'rain coat', 'dry good', '1', 'supply', 'shelter');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'poncho', 'dry good', '1', 'supply', 'shelter');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'battery', 'dry good', '1', 'supply', 'other');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'paper clip', 'dry good', '1', 'supply', 'other');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'pen', 'dry good', '1', 'supply', 'other');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'dog food', 'dry good', '1', 'supply', 'other');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`) VALUES ('2', 'cups', 'dry good', '1', 'supply', 'other');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('3', 'chicken wing', 'refrigerated', '1', 'food', 'meat/seafood', '2017-07-20');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('3', 'chinken nugget', 'refrigerated', '1', 'food', 'meat/seafood', '2017-07-20');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('3', 'milk', 'refrigerated', '1', 'food', 'dairy/eggs', '2017-07-20');
INSERT INTO `cs6400_sp17_team016`.`Item` (`site_sid`, `item_name`, `storage_type`, `units_num`, `category`, `type`, `exp_date`) VALUES ('3', 'chocolate milk', 'refrigerated', '1', 'food', 'dairy/eggs', '2017-07-20');
commit;


-- Insert Requests
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '2', '21', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '2', '22', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '2', '23', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '3', '44', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '3', '45', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '1', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '2', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '3', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '4', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '3', '43', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '3', '46', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '22', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '23', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '44', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '9', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '8', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '7', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '6', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '2', '24', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '2', '25', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '13', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '14', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '15', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '2', '36', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '2', '37', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '2', '38', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '3', '44', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '3', '45', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '1', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '2', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '9', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '1', '8', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol1', '2', '21', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol1', '2', '22', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol1', '2', '23', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol1', '3', '44', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol1', '3', '45', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '1', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '2', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '3', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '4', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '3', '43', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '3', '46', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '22', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '23', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '44', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '9', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '8', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '7', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '6', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '2', '24', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '2', '25', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '13', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '14', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '15', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '2', '36', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '2', '37', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '2', '38', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol1', '3', '44', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol1', '3', '45', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '1', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol2', '1', '2', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '9', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'vol3', '1', '8', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '2', '33', '3', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp3', '2', '37', '2', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp2', '1', '13', '1', '0', 'pending');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '3', '43', '1', '0', 'closed');
INSERT INTO `cs6400_sp17_team016`.`Request` (`username`, `site_sid`, `item_sid`, `item_qty`, `qty_provided`, `status`) VALUES ( 'emp1', '3', '46', '1', '0', 'closed');
commit;
