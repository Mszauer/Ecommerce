TRUNCATE TABLE categories;
TRUNCATE TABLE orders;
TRUNCATE TABLE products;
TRUNCATE TABLE reports;
TRUNCATE TABLE slides;
TRUNCATE TABLE users;
INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(34, 'Clothing'),
(35, 'Digital'),
(36, 'Consumable');

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(63, 345, '34535434', 'Completed', 'USD'),
(64, 1, '0LE215909X446931R', 'Completed', 'USD'),
(65, 1, '0LE215909X446931R', 'Completed', 'USD'),
(66, 1, '2V061474FN686494P', 'Completed', 'USD');

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(20, 'Ketchup', 36, 1, 10, 'Tomato ketchup is often used as a condiment to various dishes that are usually served hot: French fries, hamburgers, hot sandwiches, hot dogs, cooked eggs, and grilled or fried meat. This one is very delicious.', 'This is premium 100% quality ketchup made from organic tomatoes.', 'ketchup.jpg'),
(21, 'Javascript Learning Course', 35, 3, 3, 'JavaScript is a cross-platform, object-oriented scripting language. It is a small and lightweight language. Inside a host environment (for example, a web browser), JavaScript can be connected to the objects of its environment to provide programmatic control over them.', 'Want to learn basic Javascript? Start learning today!', 'JavaScriptListImage.png'),
(22, 'Hat', 34, 1, 2, 'A hat is a head covering which is worn for various reasons, including protection against the .... Image, Name, Description. This hat is a baseball style which is a type of soft, light cotton cap with a rounded crown and a stiff, frontward-projecting bill.', 'The good ole dad hats. Fibers made out of coffee bean to keep you buzzing around all day long.', 'il_340x270.1050566634_9j6d.jpg');

INSERT INTO `reports` (`report_id`, `product_id`, `order_id`, `product_price`, `product_title`, `product_quantity`) VALUES
(36, 1, 60, 24.99, 'product 1', 1),
(37, 1, 61, 24.99, 'product 1', 1),
(38, 1, 62, 24.99, 'product 1', 1),
(39, 2, 63, 299.99, 'product 2', 1),
(40, 20, 65, 1, 'Ketchup', 1),
(41, 22, 66, 1, 'Hat', 1);


INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_image`) VALUES
(2, 'HalfOff', 'halfoff.png');

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(18, 'Demo', 'user@demo.com', 'demo'),
(22, 'admin', 'admin@demo.com', 'demo');