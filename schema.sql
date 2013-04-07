DROP TABLE categories;
DROP TABLE parts;
DROP TABLE customers;
DROP TABLE orders;
DROP TABLE orders_parts;


CREATE TABLE categories (
  id int(11) NOT NULL AUTO_INCREMENT,
  category_name varchar(128) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE parts (
  id int(11) NOT NULL AUTO_INCREMENT,
  part_name varchar(128) NOT NULL,
  description text NOT NULL,
  category_id int(11),
  PRIMARY KEY (id)
);

CREATE TABLE customers (
  id int(11) NOT NULL AUTO_INCREMENT,
  customer_name varchar(128) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE orders (
  id int(11) NOT NULL AUTO_INCREMENT,
  customer_id int(11) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE orders_parts (
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) NOT NULL,
  customer_id int(11) NOT NULL,
  part_id int(11) NOT NULL,
  quantity int(11) NOT NULL,
  PRIMARY KEY (id)
);


insert into categories (category_name)
  values ('Central Nervous System');

insert into categories (category_name)
  values ('Upper Body');

insert into parts (part_name, description, category_id)
  values ('Brain', 'A lovely brain for you to use!',
    (select id from categories where category_name = 'Central Nervous System'));

insert into parts (part_name, description, category_id)
  values ('Abby-Normal Brain', 'Buy this when your first choice brain is unavailable.',
    (select id from categories where category_name = 'Central Nervous System'));

insert into parts (part_name, description, category_id)
  values ('Left Arm', 'Slightly larger than the right one.',
    (select id from categories where category_name = 'Upper Body'));

insert into customers(customer_name) values ('Frankenstein');

insert into orders (customer_id) values
  ((select id from customers where customer_name = 'Frankenstein'));


