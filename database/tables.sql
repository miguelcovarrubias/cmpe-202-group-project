CREATE TABLE IF NOT EXISTS cards_info (
  card_id int(8) NOT NULL AUTO_INCREMENT,
  card_number int(9) NOT NULL,
  card_code int(3) NOT NULL,
  user_id int(8) NOT NULL,
  PRIMARY KEY (card_id)
);

CREATE TABLE IF NOT EXISTS users_info (
  user_id int(8) NOT NULL AUTO_INCREMENT,
  first_name text NOT NULL,
  last_name text DEFAULT '',
  user_password text,
  card_id int(8),
  PRIMARY KEY (user_id)
);

CREATE TABLE IF NOT EXISTS orders_status (
  order_id int(8) NOT NULL AUTO_INCREMENT,
  user_id int(8) NOT NULL,
  is_done varchar(6) DEFAULT 'false',
  total_price_amount double,
  PRIMARY KEY (order_id)
);

CREATE TABLE IF NOT EXISTS orders_description (
  order_id int(8) NOT NULL,
  beverage_name varchar(40) NOT NULL,
  price double,
  cup_size varchar(40),
  other_options varchar(40)
);

CREATE TABLE IF NOT EXISTS beverage_menu (
  beverage_name varchar(40) NOT NULL,
  PRIMARY KEY (`beverage_name`)
);

CREATE TABLE IF NOT EXISTS beverage_size_price (
  beverage_size varchar(40) NOT NULL,
  price double NOT NULL,
  PRIMARY KEY (`beverage_size`)
);

CREATE TABLE IF NOT EXISTS beverage_options (
  name varchar(40) NOT NULL,
  PRIMARY KEY (`name`)
);

