-- CREATE DATABASE dbecommerce;

/* 1 */ select u.username, u.email  from users u;
/* 2 */ select p.name, p.description, p.price  from products p;
/* 3 */ select o.total  from orders o where o.id = 1;

/* 4 */ 
select oi.id, oi.order_id, p.name, oi.qty  
	from products p, order_items oi 
	WHERE oi.product_id = p.id and oi.order_id = 1 
order by oi.qty;

/* 5 */ update products p set qty = 10 where p.id = 1;


/* 6 */

/*
 * 1. Personal information must be separated from user information (user table). 
 
 1: 
	 CREATE TABLE ecommerce.persons (
		id int NOT NULL,
		first_name varchar(50) NOT NULL,
		last_name varchar(50) NOT NULL,
		CONSTRAINT Persons_PK PRIMARY KEY (id)
	 );

2: 

	ALTER TABLE ecommerce.users DROP COLUMN first_name;
	ALTER TABLE ecommerce.users DROP COLUMN last_name;

3:

	ALTER TABLE ecommerce.users ADD person_id int NULL;
	ALTER TABLE ecommerce.users ADD CONSTRAINT users_persons_FK FOREIGN KEY (person_id) REFERENCES ecommerce.persons(id);
	
	ALTER TABLE ecommerce.users MODIFY COLUMN person_id int NOT NULL;


 * 2. In the products table we must add an active field to enable or disable certain products (1=active, 0=inactive)
 
   ALTER TABLE ecommerce.products ADD active CHAR DEFAULT 1 NULL;

 * 2. In the products table, I would add created_at to know since when the product exists.
 * ALTER TABLE ecommerce.products ADD created_at DATETIME DEFAULT now() NOT NULL;

 * 3. In some varchar fields we must add a limit to optimize the memory used.
 * such as: 
 * ALTER TABLE ecommerce.products MODIFY COLUMN name varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL;

 * 
 * */




/* 7 */
select p.name, p.price, oi.qty, o.total, o.created_at ,CONCAT(u.first_name, ' ', u.last_name) fullname
	from products p, order_items oi, orders o, users u 
	WHERE 
	o.id = oi.order_id and
	oi.product_id = p.id and 
	u.id = o.user_id 
order by u.first_name, u.last_name ;

-- ------------------------------------------------------------------------------------------------------------



