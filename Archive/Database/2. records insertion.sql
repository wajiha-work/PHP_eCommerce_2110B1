
INSERT INTO tb_admins (admin_id, name, contact_num, email_address, admin_password, user_address, gender, join_date, updated_at, verified_user) VALUES(1, 'Wajiha Muzaffar Ali', '0334-3215576', 'wajihamuzaffarali@gmail.com', '123', 'Gulshan-e-Iqbal, Karachi, Pakistan', 'female', '2022-07-22 15:54:36', '2022-07-22 15:54:36', b'0');
INSERT INTO tb_admins (admin_id, name, contact_num, email_address, admin_password, user_address, gender, join_date, updated_at, verified_user) VALUES(2, 'Edward Elric', '0334-3215576', 'edward@gmail.com', '123', 'F10, Islamabad, Pakistan', 'male', '2022-07-21 15:56:14', '2022-07-21 15:56:14', b'0');
INSERT INTO tb_admins (admin_id, name, contact_num, email_address, admin_password, user_address, gender, join_date, updated_at, verified_user) VALUES(3, 'Alphonse Elric', '0334-3289576', 'alphonse@gmail.com', '123', 'DHA, Lahore, Pakistan', 'male', '2022-07-23 15:57:21', '2022-07-23 15:57:21', b'0');



INSERT INTO tb_users (user_id, name, contact_num, email_address, user_password, user_address, gender, join_date, updated_at, updated_by_admin) VALUES(1, 'Winry Rockbell', '0320-2089576', 'winry@gmail.com', '123', 'F10, Islamabad, Pakistan', 'female', '2022-07-21 15:58:26', '2022-07-21 15:58:26', 1);
INSERT INTO tb_users (user_id, name, contact_num, email_address, user_password, user_address, gender, join_date, updated_at, updated_by_admin) VALUES(2, 'Ling Yao', '0320-2789576', 'ling@gmail.com', '123', 'Gulshan, Karachi, Pakistan', 'male', '2022-07-23 15:59:32', '2022-07-23 15:59:32', 2);

INSERT INTO tb_categories (cat_id, cat_name, cat_image, inserted_at, updated_at, updated_by_admin) VALUES(1, 'Watches', NULL, '2022-07-22 16:10:56', '2022-07-22 16:10:56', 1);
INSERT INTO tb_categories (cat_id, cat_name, cat_image, inserted_at, updated_at, updated_by_admin) VALUES(2, 'Bags & Wallets', NULL, '2022-07-22 16:11:25', '2022-07-22 16:11:25', 1);
INSERT INTO tb_categories (cat_id, cat_name, cat_image, inserted_at, updated_at, updated_by_admin) VALUES(3, 'Clothing', NULL, '2022-07-22 16:12:34', '2022-07-22 16:12:34', 1);
INSERT INTO tb_categories (cat_id, cat_name, cat_image, inserted_at, updated_at, updated_by_admin) VALUES(4, 'Shoes', NULL, '2022-07-22 16:12:48', '2022-07-22 16:12:48', 1);


INSERT INTO tb_products (product_id, product_name, sku, product_image, long_description, price, stock, category_id, inserted_at, updated_at, updated_by_admin) VALUES (NULL, 'Apple', '1234', 'XYZ', NULL, '2500', '5', '2', current_timestamp(), current_timestamp(), '1');
INSERT INTO tb_products (product_id, product_name, sku, product_image, long_description, price, stock, category_id, inserted_at, updated_at, updated_by_admin) VALUES (NULL, 'Peach', '4567', 'XYZ', NULL, '8500', '16', '1', current_timestamp(), current_timestamp(), '1');