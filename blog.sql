/*
Navicat MySQL Data Transfer

Source Server         : ywj
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-10-27 21:44:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL COMMENT '所属分类id',
  `aid` int(11) NOT NULL COMMENT '作者id',
  `title` varchar(200) NOT NULL COMMENT '文章标题',
  `intro` varchar(200) NOT NULL COMMENT '文章简介',
  `content` longtext NOT NULL COMMENT '文章内容',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  `post_num` int(11) NOT NULL DEFAULT '0' COMMENT '评论数',
  `ontop` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '是否固顶    1固顶 -1不固顶',
  `isrecommend` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '是否推荐  1推荐    -1 不推荐',
  `display` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否显示  1显示  -1不显示',
  `thumb` varchar(200) DEFAULT NULL COMMENT '缩略图地址',
  `created_time` int(11) NOT NULL COMMENT '创建于',
  `updated_time` int(11) NOT NULL COMMENT '更新于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for `bg_access`
-- ----------------------------
DROP TABLE IF EXISTS `bg_access`;
CREATE TABLE `bg_access` (
  `role_id` int(11) NOT NULL COMMENT '角色id',
  `menu_id` int(11) NOT NULL COMMENT '权限ID',
  `created_time` int(11) NOT NULL COMMENT '创建于',
  `updated_time` int(11) NOT NULL COMMENT '更新于'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_access
-- ----------------------------
INSERT INTO `bg_access` VALUES ('1', '10', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '9', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '8', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '5', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('3', '26', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '25', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '34', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '33', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '16', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '22', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '11', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '24', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '7', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '17', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '6', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '12', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('3', '5', '1509067777', '1509067777');
INSERT INTO `bg_access` VALUES ('2', '11', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '24', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '23', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '15', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '14', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '13', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '7', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '21', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '20', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '19', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('1', '12', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '6', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '17', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '18', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '19', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '20', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '21', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '7', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '13', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '14', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '15', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '23', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '24', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '11', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '22', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '27', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '28', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '29', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '16', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '30', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '31', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '32', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '33', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '34', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '25', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('1', '26', '1508812240', '1508812240');
INSERT INTO `bg_access` VALUES ('2', '18', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '17', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '6', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '12', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '5', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '22', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '16', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '33', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '34', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '25', '1509015224', '1509015224');
INSERT INTO `bg_access` VALUES ('2', '26', '1509015224', '1509015224');

-- ----------------------------
-- Table structure for `bg_category`
-- ----------------------------
DROP TABLE IF EXISTS `bg_category`;
CREATE TABLE `bg_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级分类id 0-顶级分类',
  `category_sort` int(11) DEFAULT '0' COMMENT '分类排序',
  `category_name` varchar(30) NOT NULL COMMENT '分类名称',
  `comments` text COMMENT '备注',
  `display` tinyint(4) DEFAULT '1' COMMENT '是否显示 1显示  0不显示',
  `created_time` int(11) NOT NULL COMMENT '创建于',
  `updated_time` int(11) NOT NULL COMMENT '更新于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_category
-- ----------------------------
INSERT INTO `bg_category` VALUES ('1', '0', '0', 'PHP', 'PHP', '1', '1508373356', '1508373356');
INSERT INTO `bg_category` VALUES ('2', '1', '0', 'Linux', 'Linux', '1', '1508373356', '1508373356');
INSERT INTO `bg_category` VALUES ('3', '1', '0', 'Nginx', 'Nginx', '1', '1508373356', '1508373356');
INSERT INTO `bg_category` VALUES ('4', '1', '0', 'memcache', 'memcache', '1', '1508373356', '1508373356');
INSERT INTO `bg_category` VALUES ('5', '2', '0', 'LAMP环境', 'LAMP环境', '1', '1508373356', '1508373356');
INSERT INTO `bg_category` VALUES ('6', '3', '0', 'LNMP环境搭建', 'LNMP环境搭建', '1', '1508375379', '1508375379');
INSERT INTO `bg_category` VALUES ('7', '4', '0', 'memcache工作原理', 'memcache工作原理', '1', '1508375437', '1508375437');
INSERT INTO `bg_category` VALUES ('29', '4', '0', '312313', '312313', '0', '1508398420', '1508398420');

-- ----------------------------
-- Table structure for `bg_menu`
-- ----------------------------
DROP TABLE IF EXISTS `bg_menu`;
CREATE TABLE `bg_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级菜单id',
  `menu_name` varchar(45) NOT NULL COMMENT '菜单名',
  `menu_controller` varchar(45) NOT NULL COMMENT '控制器名',
  `menu_action` varchar(45) NOT NULL COMMENT '方法名',
  `menu_thumb` varchar(10) NOT NULL DEFAULT '&#xe616;' COMMENT '菜单图标',
  `is_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT '菜单是否显示 0.不显示 1.显示',
  `display` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否被删除   1未删除    0删除',
  `created_time` int(11) NOT NULL COMMENT '创建于',
  `updated_time` int(11) NOT NULL COMMENT '更新于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_menu
-- ----------------------------
INSERT INTO `bg_menu` VALUES ('5', '0', '管理员管理', '', '', '&#xe62d;', '1', '1', '1508588390', '1508588390');
INSERT INTO `bg_menu` VALUES ('6', '0', '会员管理', '', '', '&#xe60d;', '1', '1', '1508588417', '1508588417');
INSERT INTO `bg_menu` VALUES ('7', '0', '分类管理', '', '', '&#xe620;', '1', '1', '1508588433', '1508588433');
INSERT INTO `bg_menu` VALUES ('8', '5', '管理员添加', 'admin', 'add', '', '1', '1', '1508588869', '1508588869');
INSERT INTO `bg_menu` VALUES ('9', '5', '管理员删除', 'admin', 'del', '', '0', '1', '1508588869', '1508588893');
INSERT INTO `bg_menu` VALUES ('10', '5', '管理员编辑', 'admin', 'edit', '', '0', '1', '1508588869', '1508588913');
INSERT INTO `bg_menu` VALUES ('11', '0', '角色管理', '', '', '&#xe60d;', '1', '1', '1508589514', '1508589514');
INSERT INTO `bg_menu` VALUES ('12', '5', '管理员列表', 'admin', 'index', '', '1', '1', '1508589996', '1508589996');
INSERT INTO `bg_menu` VALUES ('13', '7', '分类添加', 'category', 'index', '', '1', '1', '1508590017', '1508590017');
INSERT INTO `bg_menu` VALUES ('15', '7', '分类删除', 'category', 'del', '', '0', '1', '1508588869', '1508590052');
INSERT INTO `bg_menu` VALUES ('16', '0', '菜单管理', '', '', '&#xe616;', '1', '1', '1508590069', '1508590069');
INSERT INTO `bg_menu` VALUES ('17', '6', '会员列表', 'member', 'index', '', '1', '1', '1508590087', '1508590087');
INSERT INTO `bg_menu` VALUES ('18', '6', '会员添加', 'member', 'add', '', '1', '1', '1508590124', '1508590124');
INSERT INTO `bg_menu` VALUES ('19', '6', '会员删除', 'member', 'del', '', '0', '1', '1508590124', '1508590196');
INSERT INTO `bg_menu` VALUES ('20', '6', '会员信息编辑', 'member', 'edit', '', '0', '1', '1508590124', '1508590224');
INSERT INTO `bg_menu` VALUES ('21', '6', '会员密码修改', 'member', 'changepwd', '', '0', '1', '1508588869', '1508590526');
INSERT INTO `bg_menu` VALUES ('22', '11', '角色列表', 'role', 'index', '', '1', '1', '1508749236', '1508749236');
INSERT INTO `bg_menu` VALUES ('23', '7', '分类修改', 'category', 'edit', '', '0', '1', '1508806619', '1508806619');
INSERT INTO `bg_menu` VALUES ('24', '7', '分类列表', 'category', 'lists', '', '1', '1', '1508806662', '1508806662');
INSERT INTO `bg_menu` VALUES ('25', '34', '左侧菜单', 'index', 'index', '', '0', '1', '1508806696', '1508806696');
INSERT INTO `bg_menu` VALUES ('26', '34', '后台欢迎页', 'index', 'welcome', '', '0', '1', '1508806729', '1508806729');
INSERT INTO `bg_menu` VALUES ('27', '11', '角色添加', 'role', 'add', '', '1', '1', '1508806907', '1508806907');
INSERT INTO `bg_menu` VALUES ('28', '11', '角色修改', 'role', 'edit', '', '0', '1', '1508806938', '1508806938');
INSERT INTO `bg_menu` VALUES ('29', '11', '角色删除', 'role', 'del', '', '0', '1', '1508806979', '1508806979');
INSERT INTO `bg_menu` VALUES ('30', '34', '菜单删除', 'menu', 'del', '', '0', '1', '1509072357', '1509072357');
INSERT INTO `bg_menu` VALUES ('31', '16', '菜单增加', 'menu', 'add', '', '1', '1', '1508807198', '1508807198');
INSERT INTO `bg_menu` VALUES ('32', '16', '菜单修改', 'menu', 'edit', '', '0', '1', '1508807222', '1508807222');
INSERT INTO `bg_menu` VALUES ('33', '16', '菜单列表', 'menu', 'index', '', '1', '1', '1508807533', '1508807533');
INSERT INTO `bg_menu` VALUES ('34', '0', '后台首页管理', '', '', '&#xe616;', '0', '1', '1508807561', '1508807561');

-- ----------------------------
-- Table structure for `bg_role`
-- ----------------------------
DROP TABLE IF EXISTS `bg_role`;
CREATE TABLE `bg_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL COMMENT '角色名',
  `role_sort` int(11) DEFAULT '0' COMMENT '角色排序',
  `description` varchar(255) NOT NULL DEFAULT '普通角色' COMMENT '角色描述',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0.角色禁用,1.正常',
  `created_time` int(11) NOT NULL COMMENT '创建于',
  `updated_time` int(11) NOT NULL COMMENT '更新于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_role
-- ----------------------------
INSERT INTO `bg_role` VALUES ('3', '会员', '0', '平民', '1', '1508418823', '1509067777');
INSERT INTO `bg_role` VALUES ('2', '管理员', '90', '唯超级管理员是从', '1', '1508418823', '1509015224');
INSERT INTO `bg_role` VALUES ('1', '超级管理员', '100', '拥有一切至高无上的权利', '1', '1508418823', '1508812240');
INSERT INTO `bg_role` VALUES ('23', '空权限', '0', '', '1', '1508745235', '1508745235');

-- ----------------------------
-- Table structure for `bg_user`
-- ----------------------------
DROP TABLE IF EXISTS `bg_user`;
CREATE TABLE `bg_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL DEFAULT '1' COMMENT '角色 1-会员 2-管理员 3-超级管理员',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(60) NOT NULL COMMENT '用户密码',
  `sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别 1-男  2女',
  `tel` char(11) DEFAULT '未填写' COMMENT '手机号',
  `email` varchar(30) DEFAULT '未填写' COMMENT '邮箱',
  `address` varchar(255) DEFAULT '未填写地址' COMMENT '地址',
  `comments` varchar(100) DEFAULT '这家伙很懒，什么也没有留下...' COMMENT '备注信息',
  `last_login_time` int(11) NOT NULL COMMENT '上次登录时间',
  `last_ip` int(11) NOT NULL COMMENT '上次登录ip',
  `login_count` int(11) DEFAULT '1' COMMENT '登录次数',
  `status` tinyint(4) DEFAULT '1' COMMENT '账户状态 0-冻结   1-正常',
  `created_time` int(11) NOT NULL COMMENT '创建于',
  `updated_time` int(11) NOT NULL COMMENT '更新于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_user
-- ----------------------------
INSERT INTO `bg_user` VALUES ('1', '1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '18133630250', '123@qq.com', '未填写地址', 'admin', '1509067766', '2130706433', '23', '1', '1508309115', '1508309115');
INSERT INTO `bg_user` VALUES ('2', '2', 'yang', '57cb5a26334a6c1d5e27c49def4a0f0d', '1', '18133630250', '123@qq.com', '未填写地址', 'aaa', '1508326394', '2130706433', '1', '1', '1508309115', '1508309115');
INSERT INTO `bg_user` VALUES ('24', '2', 'shenjie', '4d70eb8ff65c992a37c02ba59a9d13ec', '1', '18133630250', '123@qq.com', '未填写地址', '', '1508547109', '2130706433', '1', '1', '1508547109', '1508547109');
INSERT INTO `bg_user` VALUES ('9', '3', 'guofeng', '11a423408292aa0dd16dc4332467362b', '1', '未填写', '未填写', '未填写地址', '这家伙很懒，什么也没有留下...', '1508477198', '1508477198', '1', '1', '1508477198', '1508477198');
INSERT INTO `bg_user` VALUES ('10', '3', 'xiaoze', '98577f7d21e59fdd9875155c5b826998', '1', '18133630250', '136644909@qq.com', '未填写地址', 'aa', '1509067225', '2130706433', '5', '1', '1508488462', '1508488462');
INSERT INTO `bg_user` VALUES ('12', '2', 'laolu', '8e6bededbaec9dfb36c23a7f9491d831', '1', '18133630250', '123@qq.com', '未填写地址', '', '1508806433', '2130706433', '2', '1', '1508488538', '1508488538');
