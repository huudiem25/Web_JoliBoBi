
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `dathang`;
CREATE TABLE `dathang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(255) DEFAULT NULL,
  `TongTien` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS `giohang`;
CREATE TABLE `giohang` (
  `idgh` int(255) NOT NULL AUTO_INCREMENT,
  `idsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idgh`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quanhuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgiandatmua` timestamp NULL DEFAULT NULL,
  `paymethod` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `lienhe`;
CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `tieude` varchar(255) DEFAULT NULL,
  `noidung` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `menu_role`;
CREATE TABLE `menu_role` (
  `MenuID` int(11) NOT NULL DEFAULT '0',
  `RoleID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`MenuID`,`RoleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `menu_role` VALUES ('1', '4');
INSERT INTO `menu_role` VALUES ('8', '4');
INSERT INTO `menu_role` VALUES ('13', '4');
INSERT INTO `menu_role` VALUES ('15', '4');
INSERT INTO `menu_role` VALUES ('17', '1');
INSERT INTO `menu_role` VALUES ('17', '4');
INSERT INTO `menu_role` VALUES ('25', '4');
INSERT INTO `menu_role` VALUES ('27', '4');
INSERT INTO `menu_role` VALUES ('28', '4');
INSERT INTO `menu_role` VALUES ('29', '4');
INSERT INTO `menu_role` VALUES ('30', '4');
INSERT INTO `menu_role` VALUES ('31', '4');
INSERT INTO `menu_role` VALUES ('32', '4');
INSERT INTO `menu_role` VALUES ('33', '1');
INSERT INTO `menu_role` VALUES ('34', '1');
INSERT INTO `menu_role` VALUES ('35', '4');
INSERT INTO `menu_role` VALUES ('36', '1');
INSERT INTO `menu_role` VALUES ('36', '4');
INSERT INTO `menu_role` VALUES ('37', '1');
INSERT INTO `menu_role` VALUES ('38', '1');
INSERT INTO `menu_role` VALUES ('39', '1');
INSERT INTO `menu_role` VALUES ('40', '1');
INSERT INTO `menu_role` VALUES ('41', '1');
INSERT INTO `menu_role` VALUES ('42', '1');
INSERT INTO `menu_role` VALUES ('43', '1');
INSERT INTO `menu_role` VALUES ('44', '1');
INSERT INTO `menu_role` VALUES ('45', '1');
INSERT INTO `menu_role` VALUES ('46', '1');
INSERT INTO `menu_role` VALUES ('47', '1');
INSERT INTO `menu_role` VALUES ('48', '1');
INSERT INTO `menu_role` VALUES ('49', '1');
INSERT INTO `menu_role` VALUES ('50', '1');


DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ParentID` int(11) NOT NULL,
  `ModuleName` varchar(255) DEFAULT NULL,
  `MenuName` varchar(255) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `Visible` bit(1) DEFAULT NULL,
  `Possition` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

INSERT INTO `menus` VALUES ('1', '0', 'administrator', 'Trang chủ', '?mod=home', '', '1');
INSERT INTO `menus` VALUES ('8', '0', 'users', 'User', '?mod=users	', '\0', '5');
INSERT INTO `menus` VALUES ('13', '0', 'products', 'Sản phẩm', '?mod=products', '', '8');
INSERT INTO `menus` VALUES ('15', '0', 'gioithieu', 'Giới thiệu', '?mod=gioithieu', '', '7');
INSERT INTO `menus` VALUES ('17', '0', 'administrator', 'Liên hệ', '?mod=lienhe', '', '9');
INSERT INTO `menus` VALUES ('24', '0', 'menus', 'Menu', '?mod=menus', '', '7');
INSERT INTO `menus` VALUES ('35', '0', 'frontpage', 'Bản Đồ', '?mod=map', '', '11');
INSERT INTO `menus` VALUES ('36', '0', 'administrator', 'Giỏ Hàng', '?mod=giohang', '', '12');


DROP TABLE IF EXISTS `menus_left`;
CREATE TABLE `menus_left` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ParentID_Left` int(11) NOT NULL,
  `ModuleName_Left` varchar(255) DEFAULT NULL,
  `MenuName_Left` varchar(255) NOT NULL,
  `Path_Left` varchar(255) NOT NULL,
  `Visible_Left` bit(1) DEFAULT NULL,
  `Possition_Left` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;


INSERT INTO `menus_left` VALUES ('38', '40', 'products', 'Apple', '?mod=products&type=10', '', '0');
INSERT INTO `menus_left` VALUES ('39', '40', 'products', 'Oppo', '?mod=products&type=11', '', '2');
INSERT INTO `menus_left` VALUES ('40', '0', 'products', 'Điện Thoại Di Động', '?mod=products&type=1', '', '0');
INSERT INTO `menus_left` VALUES ('41', '40', 'products', 'Nokia', '?mod=products&type=12', '', '2');
INSERT INTO `menus_left` VALUES ('42', '40', 'products', 'SamSung', '?mod=products&type=13', '', '4');
INSERT INTO `menus_left` VALUES ('43', '40', 'products', 'HTC', '?mod=products&type=14', '', '6');
INSERT INTO `menus_left` VALUES ('44', '40', 'products', 'asus', '?mod=products&type=15', '', '7');
INSERT INTO `menus_left` VALUES ('45', '40', 'products', 'Lenovo', '?mod=products&type=16', '', '8');
INSERT INTO `menus_left` VALUES ('46', '40', 'products', 'sony', '?mod=products&type=17', '', '10');
INSERT INTO `menus_left` VALUES ('47', '0', 'products', 'Máy Tính Bảng', '?mod=products&type=2', '', '1');
INSERT INTO `menus_left` VALUES ('48', '0', 'products', 'Máy tính xách tay', '?mod=products&type=3', '', '2');
INSERT INTO `menus_left` VALUES ('49', '0', 'products', 'phụ kiện điện thoại', '?mod=products&type=5', '', '4');


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductTypeID` int(11) DEFAULT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `SKU` varchar(255) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Description` text,
  `Hedieuhanh` varchar(255) DEFAULT NULL,
  `Manhinh` varchar(255) DEFAULT NULL,
  `Ram` varchar(255) DEFAULT NULL,
  `Camera` varchar(255) DEFAULT NULL,
  `Pin` varchar(255) DEFAULT NULL,
  `CPU` varchar(255) DEFAULT NULL,
  `PriceNew` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

INSERT INTO `products` VALUES ('1', '9', '11111', '333', '3231230', 'uploaded_files/4236103aonike_cd_150_1.191.248.jpg', '2131231', 'IOS', '1.5 in', '8GB', '5.5 ', '1.600 mAH', '4 Nhân', null);
INSERT INTO `products` VALUES ('5', '9', 'sanpham-0', 'SKU-0', '0', 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('6', '9', 'sanpham-1', 'SKU-1', '0', 'uploaded_files/4320312cooler_master_notepal_ergostand_ii_04.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('7', '9', '3123111', '312312', '12312', 'uploaded_files/0513889lenovo_ideapad_z360__049390.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('8', '9', '444444', '11111', '2222220032', 'uploaded_files/4540611bao_da_s_view_flipcover_ss_galaxy_s4___i9500_cac_mau_chinh_hang.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('10', '9', '31231211', '1231231', '12312300', 'uploaded_files/51087093.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('11', '9', '444444441', '111111112', '312312000', 'uploaded_files/54115944s.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('12', '9', '31231', '111', '111', 'uploaded_files/505134713_2.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('13', '1', '41', '12312', '312312', 'uploaded_files/54115944s.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('14', '2', '333333331', '1111111', '22222200', 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('15', '3', '31231', '11', '11', 'uploaded_files/0513889lenovo_ideapad_z360__049390.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('16', '4', '213', '1', '1', 'uploaded_files/503903915_1.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('17', '5', '11111', '11', '1', 'uploaded_files/4540611bao_da_s_view_flipcover_ss_galaxy_s4___i9500_cac_mau_chinh_hang.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('18', '6', '31231', '11', '1', 'uploaded_files/4710041sac1.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('20', '8', 'Nokia X6 8GB', '1', '3000000', 'uploaded_files/0010687nokiax6_8gb.191.248.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('21', '7', 'LG G Pro Lite Dual', 'eqweqw', '6000000', 'uploaded_files/5341643lg_g_pro_lite_dual_01.191.248.jpg', 'Siêu Mòng,Thiết Kế Đẹp', '3', '13', '13', '13131', '1', '1', null);
INSERT INTO `products` VALUES ('22', '7', 'Iphone 4 16GB', '31312311', '6000000', 'uploaded_files/3iax6_8gb.191.248.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('23', '8', '11111113', '1231211', '1231210', 'uploaded_files/4320312cooler_master_notepal_ergostand_ii_04.191.248.jpg', '', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('25', '8', 'Nokia E72', '11112', '366666', 'uploaded_files/5947507nokia_e72.191.248.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('26', '9', 'IPhone15', 'SSSS', '15000000', 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', 'abcabc123', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('29', '10', '111111111', '312312', '3333329920', 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', '333333', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('30', '9', 'abaaa23123123', '1231231231', '1231229952', 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('32', '18', 'Nokia', '11111111111', '5000000', 'uploaded_files/5947507nokia_e72.191.248.jpg', 'aaaaaaaaaaaa', null, null, null, null, null, null, '1000000');
INSERT INTO `products` VALUES ('35', '7', 'Flipcover S-view', 'ádasd', '5000000', 'uploaded_files/4540611bao_da_s_view_flipcover_ss_galaxy_s4___i9500_cac_mau_chinh_hang.191.248.jpg', 'minh', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('36', '12', 'Nokia E72', '312312', '312312', 'uploaded_files/5947507nokia_e72.191.248.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('37', '13', 'SamSung', '133', '11', 'uploaded_files/SAMSUNG-GALAXY-ACE-hepsiburada-kampanya-indirim-firsat.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('38', '11', 'Oppo', '123', '1231231232', 'uploaded_files/images.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('39', '14', 'abcc', 'abc', '1231120', 'uploaded_files/images (1).jpg', 'abcabc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('40', '15', 'aaaaaaa', '123121', '1', 'uploaded_files/abg.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('41', '16', '123', '111', '3', 'uploaded_files/lenovo-a536-nowatermark-200x200.jpg', 'abc', null, null, null, null, null, null, null);
INSERT INTO `products` VALUES ('42', '17', 'abc', 'a', '1', 'uploaded_files/sony-xperia-z3-compact-nowatermark-200x200.jpg', 'aaa', null, null, null, null, null, null, null);


DROP TABLE IF EXISTS `products_type`;
CREATE TABLE `products_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductTypeName` varchar(255) DEFAULT NULL,
  `Possition` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO `products_type` VALUES ('1', 'Điện Thoại Di Động', '1', '');
INSERT INTO `products_type` VALUES ('2', 'Máy Tính Bảng', '2', null);
INSERT INTO `products_type` VALUES ('3', 'Máy Tính Sách Tay', '3', null);
INSERT INTO `products_type` VALUES ('5', 'Phụ Kiện Điện Thoại', '5', null);
INSERT INTO `products_type` VALUES ('7', 'Sản Phẩm Mới', '7', null);
INSERT INTO `products_type` VALUES ('8', 'Sản Phẩm Giảm Giá', '8', null);
INSERT INTO `products_type` VALUES ('9', 'Sản Phẩm', '9', null);
INSERT INTO `products_type` VALUES ('10', 'Apple', '10', null);
INSERT INTO `products_type` VALUES ('11', 'Oppo', '11', null);
INSERT INTO `products_type` VALUES ('12', 'Nokia', '12', null);
INSERT INTO `products_type` VALUES ('13', 'Samsung', '13', null);
INSERT INTO `products_type` VALUES ('14', 'HTC', '14', null);
INSERT INTO `products_type` VALUES ('15', 'Asus', '15', null);
INSERT INTO `products_type` VALUES ('16', 'lenovo', '16', null);
INSERT INTO `products_type` VALUES ('17', 'sony', '17', null);
INSERT INTO `products_type` VALUES ('18', 'Sản Phẩm Khuyến Mãi', '18', null);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RoleName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


INSERT INTO `roles` VALUES ('1', 'admin');


DROP TABLE IF EXISTS `thanhvien`;
CREATE TABLE `thanhvien` (
  `mathanhvien` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthaithanhvien` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mathanhvien`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `UserID` varchar(255) NOT NULL DEFAULT '0',
  `RoleID` int(11) NOT NULL,
  PRIMARY KEY (`UserID`,`RoleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `user_role` VALUES ('0', '0');
INSERT INTO `user_role` VALUES ('admin', '1');


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(150) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `create_user` varchar(100) DEFAULT NULL,
  `modify_date` timestamp NULL DEFAULT NULL,
  `modify_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  
INSERT INTO `users` VALUES ('admin', 'admin', null, null, null, null, '', null, null, null, null);
