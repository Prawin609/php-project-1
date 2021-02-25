CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
);


CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
);


CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
);

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Veg Sandwich', '15', 1, 'image/Veg_sandwich.jpg', 'p1000'),
(2, 'CandyIce', '5', 1, 'image/candyice.jpg', 'p1001'),
(3, 'Chicken Burger', '20', 1, 'image/chickenburger.jpg', 'p1002'),
(4, 'Chopped Sandwich', '20', 1, 'image/chopped_sandwich.jpg', 'p1003'),
(5, 'Cream Drink', '10', 1, 'image/Cream_Drink.jpeg', 'p1004'),
(6, 'Filter Coffee', '3', 1, 'image/Filter_Coffee.jpg', 'p1005'),
(7, 'French Sandwich', '7', 1, 'image/French_sandwich.jpg', 'p1006'),
(9, 'MeatFry', '30', 1, 'image/meatfry.jpg', 'p1007');


ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);


ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
