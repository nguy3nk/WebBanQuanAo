
DROP DATABASE IF EXISTS `demoshop`;
CREATE DATABASE `demoshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `Admin`
(
	`id` int(11) NOT NULL ,
	`password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`Admin_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Admin`(`password`,`full_name`,`email`,`Admin_img`)
	VALUES('25d55ad283aa400af464c76d713c07ad','Nguyễn Minh Khánh','khanh@gmail.com',' '),
	('25d55ad283aa400af464c76d713c07ad','Lương Việt Hùng','hung@gmail.com',' ');






CREATE TABLE IF NOT EXISTS `Banner`
(
	`id` int(11) NOT NULL ,
	`name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
	`image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
	`Status` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `OrderProduct`
(
	`id` int(11) NOT NULL ,
	`member_id` int(11) DEFAULT NULL,
	`customer_id` int(11) DEFAULT NULL,
	`status` int(11) NOT NULL,
	`note` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
	`deli_id` int(11) DEFAULT NULL,
	`pay_id` int(11) DEFAULT NULL,
	`name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`address` varchar(300)  COLLATE utf8_unicode_ci NOT NULL,
	`total_money` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `Order_detail`
(
	`id` int(11) NOT NULL ,
	`pro_id` int(11) NOT NULL,
	`quantity` int(11) NOT NULL,
	`price` float NOT NULL,
	`ord_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE IF NOT EXISTS `Category`
(
	`id` int(11) NOT NULL ,
	`name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`parent_id` int(11) NOT NULL,
	`style` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `Product`
(
	`id` int(11) NOT NULL ,
	`cat_id` int(11) DEFAULT NULL,
	`name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
	`price` float DEFAULT '0',
	`sale_price` float DEFAULT '0',
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`type` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
	`content` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;	

CREATE TABLE IF NOT EXISTS `Customer`
(
	`id` int(11) NOT NULL ,
	`birth_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`address` varchar(300)  COLLATE utf8_unicode_ci NOT NULL,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`gender` int(11) DEFAULT '0',
	`status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;	
CREATE TABLE IF NOT EXISTS `Member`
(	
	`id` int(11) NOT NULL ,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`birth_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`address` varchar(300)  COLLATE utf8_unicode_ci NOT NULL,
	`gender` int(11) DEFAULT '0',
	`user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;	

CREATE TABLE IF NOT EXISTS `Delivery`
(
	`id` int(11) NOT NULL ,
	`name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`status` int(11) DEFAULT '0',
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`price` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Delivery`(`name`,`status`,`price`)
	VALUES('Lấy tại cửa hàng',1,0),
	('Xe máy',1,50000),
	('Ô tô',1,100000),
	('Tàu thủy',1,150000),
	('Máy bay',1,200000);



CREATE TABLE IF NOT EXISTS `Payment`
(
	`id` int(11) NOT NULL ,
	`name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`status` int(11) DEFAULT '0',
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`discount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `Payment`(`name`,`status`,`discount`)
	VALUES('Trược tiếp',1,0),
	('Chuyển khoản',1,5),
	('Ví điện tử',1,10);




CREATE TABLE IF NOT EXISTS `Wish_list`
(
	`id` int(11) NOT NULL ,
	`customer_id` int(11) DEFAULT NULL,
	`pro_id` int(11) NOT NULL,
	`member_id` int(11) DEFAULT NULL,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `Comment`
(
	`id` int(11) NOT NULL ,
	`member_id` int(11) NOT NULL,
	`messenger` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
	`pro_id` int(11) NOT NULL,
	`parent_id` int(11) DEFAULT '0',
	`created_id` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE IF NOT EXISTS `Like_comment`
(
	`member_id` int(11) NOT NULL,
	`comment_id` int(11) NOT NULL,
	`status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `Review_pro`
(
	`member_id` int(11) NOT NULL,
	`pro_id` int(11) NOT NULL,
	`status` int(11) NOT NULL,
	`comment` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `Product_detail`
(
	`pro_id` int(11) NOT NULL,
	`color_id` int(11) NOT NULL,
	`quantity` int(11) DEFAULT '0',
	`size` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `Color`
(
	`id` int(11) NOT NULL ,
	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`ma_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE IF NOT EXISTS `Product_img`
(
	`id` int(11) NOT NULL ,
	`img_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`pro_id` int(11) NOT NULL,
	`status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `News`
(
	`id` int(11) NOT NULL ,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
	`content` varchar(8000) COLLATE utf8_unicode_ci NOT NULL,
	`image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
	`resources` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
	`author`  varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Contact`
(
	`id` int(11) NOT NULL ,
	`birth_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`address` varchar(300)  COLLATE utf8_unicode_ci NOT NULL,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`gender` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `OrderProduct`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Product`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Member`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Delivery`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Payment`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Color`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `News`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Contact`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `Comment`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `OrderProduct`
  ADD CONSTRAINT FK_Order_Customer
  	FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`id`);

ALTER TABLE `OrderProduct`
  ADD CONSTRAINT FK_Order_Member 
  	FOREIGN KEY (`member_id`) REFERENCES `Member` (`id`);

ALTER TABLE `OrderProduct`
  ADD CONSTRAINT FK_Order_Delivery 
  	FOREIGN KEY (`deli_id`) REFERENCES `Delivery` (`id`);

ALTER TABLE `OrderProduct`
  ADD CONSTRAINT FK_Order_Payment 
  	FOREIGN KEY (`pay_id`) REFERENCES `Payment `(`id`);	

ALTER TABLE `Order_detail`
  ADD CONSTRAINT FK_OrderDetail_Product 
  	FOREIGN KEY (`pro_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Order_detail`
  ADD CONSTRAINT FK_OrderDetail_Order 
  	FOREIGN KEY (`ord_id`) REFERENCES `OrderProduct `(`id`);	

ALTER TABLE `Product`
  ADD CONSTRAINT FK_Product_Category 
  	FOREIGN KEY (`cat_id`) REFERENCES `Category `(`id`);	

ALTER TABLE `Wish_list`
  ADD CONSTRAINT FK_WishList_Product 
  	FOREIGN KEY (`pro_id`) REFERENCES `Product `(`id`);	

ALTER TABLE `Wish_list`
  ADD CONSTRAINT FK_WishList_Customer 
  	FOREIGN KEY (`customer_id`) REFERENCES `Customer `(`id`);	

ALTER TABLE `Wish_list`
  ADD CONSTRAINT FK_WishList_Member 
  	FOREIGN KEY (`member_id`) REFERENCES `Member `(`id`);	

ALTER TABLE `Comment`
  ADD CONSTRAINT FK_Comment_Member 
  	FOREIGN KEY (`member_id`) REFERENCES `Member `(`id`);	
	
ALTER TABLE `Comment`
  ADD CONSTRAINT FK_Comment_Product 
  	FOREIGN KEY (`pro_id`) REFERENCES `Product `(`id`);	
	
ALTER TABLE `Like_comment`
  ADD CONSTRAINT FK_LikeComment_Member 
  	FOREIGN KEY (`member_id`) REFERENCES `Member` (`id`);
	
ALTER TABLE `Like_comment`
  ADD CONSTRAINT FK_LikeComment_Comment 
  	FOREIGN KEY (`comment_id`) REFERENCES `Comment` (`id`);
	
ALTER TABLE `Review_pro`
  ADD CONSTRAINT FK_Review_member 
  	FOREIGN KEY (`member_id`) REFERENCES `Member` (`id`);
	
ALTER TABLE `Review_pro`
  ADD CONSTRAINT FK_Review_Product 
  	FOREIGN KEY (`pro_id`) REFERENCES `Product` (`id`);
	
ALTER TABLE `Product_detail`
  ADD CONSTRAINT FK_ProductDetail_Product 
  	FOREIGN KEY (`pro_id`) REFERENCES `Product `(`id`);	

ALTER TABLE `Product_detail`
  ADD CONSTRAINT FK_ProductDetail_Color 
  	FOREIGN KEY (`color_id`) REFERENCES `Color` (`id`);

ALTER TABLE `Product_img`
  ADD CONSTRAINT FK_ProductImg_Product 
  	FOREIGN KEY (`pro_id`) REFERENCES `Product `(`id`);	

ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `OrderProduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Member`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Delivery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Payment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Color`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `News`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;