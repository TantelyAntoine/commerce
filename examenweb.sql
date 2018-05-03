
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `total_cart` int(11) NOT NULL DEFAULT '0',
  `is_shipped` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


CREATE TABLE IF NOT EXISTS `tbl_cart_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;



CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



CREATE TABLE IF NOT EXISTS `tbl_checkout` (
  `checkout_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `sale_id` int(11) NOT NULL,
  PRIMARY KEY (`checkout_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tbl_color` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) DEFAULT NULL,
  `colorcode` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `billing_address1` varchar(255) NOT NULL,
  `billing_address2` varchar(255) NOT NULL,
  `billing_city` int(11) NOT NULL,
  `billing_state` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_zip` varchar(255) NOT NULL,
  `shipping_address1` varchar(255) NOT NULL,
  `shipping_address2` varchar(255) NOT NULL,
  `shipping_city` int(11) NOT NULL,
  `shipping_state` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `customer_type` int(11) NOT NULL,
  `tax_id` varchar(255) NOT NULL,
  `year` varchar(5) NOT NULL,
  `credit_card_number` varchar(25) NOT NULL,
  `credit_card_cw` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `credit_card_type` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `social_networks` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `googlePlus` varchar(255) NOT NULL,
  `uploadFile` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` int(11) NOT NULL,
  `is_member` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` text,
  `product_price` double NOT NULL,
  `product_type` int(1) NOT NULL,
  `product_image` varchar(5000) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` varchar(500) NOT NULL,
  `color_id` varchar(500) NOT NULL,
  `size_id` varchar(500) NOT NULL,
  `related_product` varchar(200) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `net` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;


CREATE TABLE IF NOT EXISTS `tbl_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_name` varchar(100),
  `cash_discount` int(11) NOT NULL,
  `grand_amount` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `shipped_status` int(11) NOT NULL COMMENT 'orderpace=0,',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tbl_sales_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `selling_rate` double NOT NULL,
  `discount` int(2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tbl_size` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `size` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tbl_slider_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `subcat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



CREATE TABLE IF NOT EXISTS `tbl_wishlist` (
  `wish_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`wish_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `secondary_address` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `user_detail` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `profile`, `mobile`, `whatsapp`, `room_no`, `floor`, `building`, `street`, `area`, `city`, `pincode`, `state`, `country`, `secondary_address`, `created_date`, `status`, `created_by`) VALUES
(1, 'tantely', '', 'antoine', 'tantely@gmail.com', '123456', '', '9925252525', '', '', '', '', '', '', '', '', '', '', '', '2016-11-04 17:29:56', '0', '1'),
(3, 'antoine', '', 'antoine', 'antoine@gmail.com', '123456', '', '9925252525', '', '', '', '', '', '', '', '', '', '', '', '2016-11-04 17:45:23', '0', '1');
