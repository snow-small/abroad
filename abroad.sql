-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-10 15:43:25
-- 服务器版本： 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abroad`
--

-- --------------------------------------------------------

--
-- 表的结构 `ad_admin`
--

CREATE TABLE `ad_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `reg_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `login_time` int(11) DEFAULT NULL COMMENT '登录时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ad_admin`
--

INSERT INTO `ad_admin` (`id`, `username`, `password`, `reg_time`, `login_time`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, 1523868332);

-- --------------------------------------------------------

--
-- 表的结构 `ad_apply`
--

CREATE TABLE `ad_apply` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '申请人id',
  `s_id` int(11) NOT NULL COMMENT '学校id',
  `p_id` int(11) NOT NULL COMMENT '专业id',
  `firstName` varchar(50) NOT NULL COMMENT '姓',
  `lastName` varchar(50) NOT NULL COMMENT '名',
  `cName` varchar(20) NOT NULL COMMENT '中文名',
  `sex` varchar(20) NOT NULL COMMENT '性别，male男，formale女',
  `nation` varchar(20) NOT NULL COMMENT '国籍',
  `passport` varchar(20) NOT NULL COMMENT '护照号',
  `begin` date NOT NULL COMMENT '护照开始时间',
  `end` date NOT NULL COMMENT '护照到期时间',
  `birth` date NOT NULL COMMENT '出生日期',
  `birthPlace` varchar(20) NOT NULL COMMENT '出生地',
  `language` varchar(20) NOT NULL COMMENT '母语',
  `history` varchar(255) NOT NULL COMMENT '病史',
  `marry` varchar(20) NOT NULL COMMENT 'no=未婚，yes=已婚，other=其它',
  `address` varchar(100) NOT NULL COMMENT '当前联系人的通讯地址',
  `zip` varchar(20) NOT NULL COMMENT '当前联系人的邮政编码',
  `tel` varchar(20) NOT NULL COMMENT '当前联系人的电话',
  `email` varchar(30) NOT NULL COMMENT '当前联系人的邮箱',
  `home` varchar(100) NOT NULL COMMENT '当前联系人的家庭地址',
  `cLevel` varchar(20) NOT NULL COMMENT '中文水平',
  `eLevel` varchar(20) NOT NULL COMMENT '英语水平',
  `hsk` varchar(10) NOT NULL COMMENT '汉语语言考试',
  `mark` varchar(20) NOT NULL COMMENT '汉语语言考试分数',
  `study` varchar(255) NOT NULL COMMENT '在哪学习中文',
  `source` varchar(20) NOT NULL COMMENT 'me=自我支持，ship=奖学金，other=其它',
  `sponsor` varchar(20) DEFAULT NULL COMMENT '赞助商的名字',
  `relation` varchar(50) DEFAULT NULL COMMENT '与赞助商的关系',
  `sAddress` varchar(100) DEFAULT NULL COMMENT '赞助商的地址',
  `sPhone` varchar(30) DEFAULT NULL COMMENT '赞助商的电话',
  `school` varchar(30) NOT NULL COMMENT '当前学校或机构',
  `occupation` varchar(30) NOT NULL COMMENT '当前职业',
  `highest` varchar(30) NOT NULL COMMENT '最高学术学位',
  `sfrom` date NOT NULL COMMENT '从什么时候开始学习',
  `sto` date NOT NULL COMMENT '从什么时候结束学习',
  `sAge` varchar(20) DEFAULT NULL COMMENT '配偶年级',
  `sName` varchar(30) DEFAULT NULL COMMENT '配偶名',
  `sOccupation` varchar(30) DEFAULT NULL COMMENT '配偶职业',
  `sTel` varchar(30) DEFAULT NULL COMMENT '配偶电话',
  `sEmail` varchar(30) DEFAULT NULL COMMENT '配偶邮箱',
  `mAge` varchar(30) NOT NULL COMMENT '母亲年龄',
  `mName` varchar(30) NOT NULL COMMENT '母亲名',
  `mOccupation` varchar(30) NOT NULL COMMENT '母亲职业',
  `mTel` varchar(30) NOT NULL COMMENT '母亲电话',
  `mEmail` varchar(30) NOT NULL COMMENT '母亲邮箱',
  `fAge` varchar(30) NOT NULL COMMENT '父亲年龄',
  `fName` varchar(30) NOT NULL COMMENT '父亲名',
  `fOccupation` varchar(30) NOT NULL COMMENT '父亲职业',
  `fTel` varchar(30) NOT NULL COMMENT '父亲电话',
  `fEmail` varchar(30) NOT NULL COMMENT '父亲邮箱',
  `city` varchar(20) NOT NULL COMMENT '邮寄城市',
  `country` varchar(20) NOT NULL COMMENT '邮寄国家',
  `detail` varchar(100) NOT NULL COMMENT '邮寄详细地址',
  `place` varchar(100) NOT NULL COMMENT '当前地址',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='申请表';

--
-- 转存表中的数据 `ad_apply`
--

INSERT INTO `ad_apply` (`id`, `user_id`, `s_id`, `p_id`, `firstName`, `lastName`, `cName`, `sex`, `nation`, `passport`, `begin`, `end`, `birth`, `birthPlace`, `language`, `history`, `marry`, `address`, `zip`, `tel`, `email`, `home`, `cLevel`, `eLevel`, `hsk`, `mark`, `study`, `source`, `sponsor`, `relation`, `sAddress`, `sPhone`, `school`, `occupation`, `highest`, `sfrom`, `sto`, `sAge`, `sName`, `sOccupation`, `sTel`, `sEmail`, `mAge`, `mName`, `mOccupation`, `mTel`, `mEmail`, `fAge`, `fName`, `fOccupation`, `fTel`, `fEmail`, `city`, `country`, `detail`, `place`, `is_delete`) VALUES
(1, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(2, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(3, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(4, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(5, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(6, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(7, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(8, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(9, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(10, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(11, 1, 1, 1, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '12223x', '2018-01-01', '2018-04-07', '2018-04-07', 'japan', 'english', '没病', 'no', '杭州科技学院', '235300', '111111', '1111111', '不知道', '高级', '优秀', 'HSK6', '100', '家里', 'me', NULL, NULL, NULL, NULL, '浙江科技学院', '学生', '博士', '2018-04-05', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '23', 'mama', 'dddd', 'buzhidao', '1111', '11', '111', '111', '1111', '1111', '杭州', '阿富汗', '袁柳庄', 'Japan', 0),
(12, 1, 1, 2, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '111', '2018-04-05', '2018-04-07', '2018-04-07', '111', '111', '11', 'yes', '11', '11', '11', '111', '111', '初学者', '优秀', 'HSK3', '11', '1111', 'me', '111', '11', '11', '11', '111', '111', '111', '2018-04-06', '2018-04-08', '111', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '111', '111', '111', '111', '111', '阿富汗', '111', '111', 0),
(13, 1, 1, 2, 'Lee', 'Xueer', '李雪儿', 'male', '阿富汗', '111', '2018-04-05', '2018-04-07', '2018-04-07', '111', '111', '11', 'yes', '11', '11', '11', '111', '111', '初学者', '优秀', 'HSK3', '11', '1111', 'me', '111', '11', '11', '11', '111', '111', '111', '2018-04-06', '2018-04-08', '111', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '111', '111', '111', '111', '111', '阿富汗', '111', '111', 0),
(14, 1, 1, 2, '111', '11', '11', 'male', '阿富汗', '11', '2018-04-04', '2018-04-08', '2018-04-21', '11', '11', '111', 'no', '11', '11', '11', '11', '111', '高级', '无', 'HSK5', '11', '11', 'me', '11', '1111', '11', '11', '11', '11', '11', '2018-04-06', '2018-04-06', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '1111', '111', '111', '11', '阿富汗', '111', '11', 0),
(15, 1, 1, 4, 'Lee', 'Sai', 'xueer', 'male', '阿富汗', '11', '2018-04-06', '2018-04-08', '2018-04-08', '111', '1111111', '11111111', 'no', '11111111', '1111111111', '11111111111', '1111111111111', '11111111111', '高级', '优秀', 'HSK6', '11111', '111111111', 'me', '111111', NULL, NULL, NULL, '111111111', '11111111111', '11111111111', '2018-04-08', '2018-04-28', '1111111111', '111111111', '111111111', '1111111111111', '11111111111111', '111111', '111111111', '1111111111', '11111111111', '111111111', '111111111', '1111111111', '11111111111', '11111111111', '1111111111', '111111111', '阿富汗', '1111111111', '111111111', 0),
(16, 1, 1, 4, '赛', '赛', '塞爱', 'formale', '阿富汗', '11111', '2018-04-05', '2018-04-07', '2018-04-05', '111', '11111', '11111111', 'no', '11111', '11111111', '111111111', '1111111111', '1111111111', '初学者', '优秀', 'HSK5', '1111111111', '1111111111', 'ship', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '2018-04-05', '2018-04-07', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '阿富汗', '1111111111', '1111111111', 0),
(17, 1, 1, 3, '111', '1111', '11111', 'male', '阿富汗', '111', '2018-04-06', '2018-04-08', '2018-04-15', '11111', '1111111', '1111111', 'no', '111111', '111111', '11111111', '11111111', '11111111111', '初学者', '优秀', 'HSK3', '111111', '1111111', 'me', '1111', '111111', '111111', '11111111111', '11111', '111111', '111111', '2018-04-06', '2018-04-08', '11111', '1111111111', '11111', '111111', '11111', '11111111', '1111111', '1111111111', '111111111', '111111111', '111111111', '111111111', '11111111111', '111111111', '111111111111', '1111111111', '阿富汗', '111111111111', '111111111', 0),
(18, 1, 1, 2, 'lee', 'sss', 'ssss', 'male', '阿富汗', 'ssssss', '2018-04-04', '2018-04-07', '2018-04-10', 'sssssss', 'ssssssssss', 'ssssssss', 'yes', 'ssssssss', 'sssssssss', 'ssssssss', 'sssssssss', 'sssssssss', '高级', '较好', 'HSK3', 'ssssssss', 'sssssssssss', 'ship', 'sssssss', 'sssssssss', 'sssssssss', 'sssssssss', 'ssssssss', 'ssssssss', 'sssssssssss', '2018-04-04', '2018-04-14', 'ssssss', 'sssssss', 'ssssssssss', 'ssssssss', 'sssssss', 'sssssssssss', 'ssssssss', 'sssssss', 'sssssss', 'ssssssss', 'ssssssss', 'sssssssss', 'sssssssss', 'ssssss', 'ssssssss', 'sssssssss', '阿富汗', 'sssssssss', 'ssssssss', 0),
(19, 1, 1, 2, '111', '11111', '11111111', 'male', '阿富汗', '1111111111', '2018-04-04', '2018-04-06', '2018-04-11', '111', '11111111', '11111111', 'no', '111111', '111111', '11111', '11111111', '1111111111', '初学者', '较好', 'HSK2', '11111', '11111111', 'ship', '111', '11111', '11111111', '111111111', '1111111', '111111', '1111111', '2018-04-19', '2018-04-06', NULL, NULL, NULL, NULL, NULL, '1111111', '1111111111', '11111111', '1111111111', '11111111111', '1111111111', '1111111111111', '11111111111', '11111111111', '11111111111', '11111111', '阿富汗', '11111111111', '11111111111', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ad_nation`
--

CREATE TABLE `ad_nation` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='国籍国家表';

--
-- 转存表中的数据 `ad_nation`
--

INSERT INTO `ad_nation` (`id`, `name`, `is_delete`) VALUES
(1, '阿富汗', 0),
(2, '安道尔', 0),
(3, '阿根廷', 0),
(4, '澳大利亚', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ad_news`
--

CREATE TABLE `ad_news` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT '谁写的',
  `title` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL COMMENT '缩略图',
  `description` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0' COMMENT '浏览次数',
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0为不删除，1为删除',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章';

--
-- 转存表中的数据 `ad_news`
--

INSERT INTO `ad_news` (`id`, `admin_id`, `title`, `img`, `description`, `content`, `view`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '111', 'upload/1521095001964264timg2.jpg', '这是第一个描述', '<p>这是第一个内容，啦啦啦啦</p><p><img src=\"/ueditor/php/upload/image/20180315/1521095028.png\" title=\"1521095028.png\" alt=\"music.png\"/></p><p>啦啦啦啦绿绿</p>', 0, 1, '2018-03-15 07:27:09', '2018-03-15 07:27:09'),
(2, 1, '这是第一篇新闻', 'upload/1521095001964264timg2.jpg', '这是第一个描述，这是第一个描述，这是第一个描述，这是第一个描述，这是第一个描述，这是第一个描述', '<p>这是第一个内容，啦啦啦啦</p><p><img src=\"/ueditor/php/upload/image/20180315/1521095028.png\" title=\"1521095028.png\" alt=\"music.png\"/></p><p>啦啦啦啦绿绿</p>', 0, 0, '2018-03-15 07:34:13', '2018-03-15 07:18:27'),
(3, 1, '这是一条新闻', 'upload/1521099486560059timg4.jpg', '这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，', '<p>这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，</p><p><img src=\"/ueditor/php/upload/image/20180315/1521099516.png\" title=\"1521099516.png\" alt=\"music1.png\"/></p><p>这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，这是一条新闻，</p><p><br/></p>', 0, 0, '2018-03-15 07:38:43', '2018-03-15 07:38:43'),
(4, 1, '这又是一条新闻', 'upload/1521099624426267234914-14011P9100623.jpg', '这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，', '<p>这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，</p><p><img src=\"/ueditor/php/upload/image/20180315/1521099634.jpg\" title=\"1521099634.jpg\" alt=\"timg.jpg\"/></p><p>这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，这又是一条新闻，</p>', 0, 0, '2018-03-15 07:40:39', '2018-03-15 07:40:39'),
(5, 1, '这是不知道的新闻', 'upload/1521099695998086timg.jpg', '这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，', '<p>这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，</p><p><img src=\"/ueditor/php/upload/image/20180315/1521099682.jpg\" title=\"1521099682.jpg\" alt=\"timg2.jpg\"/></p><p>这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，这是不知道的新闻，</p>', 0, 0, '2018-03-15 07:41:38', '2018-03-15 07:41:38'),
(6, 1, '来华前准备', 'upload/15229995674460021.jpg', '如果想来华留学，该怎么做？已经被中国大学录取了，即将赴华学习，需要做些什么？以及留学期间可能需要的物品明细', '<p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong><em>如果我希望来中国留学，我该怎么做？</em></strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">同所有出国留学程序一样，国际学生来华需要事先浏览自己想就读学校/专业的<a href=\"http://www.csc.edu.cn:8011/zh/universities/index.html\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">相关网站</a>，了解入学要求和规定，并开始准备材料。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">申请基本材料通常包括：</p><ul style=\";padding-top: initial;padding-right: initial;padding-bottom: initial;padding-left: 1.5em;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\" class=\" list-paddingleft-2\"><li><p>申请表</p></li><li><p>最高学历证明及成绩单</p></li><li><p>推荐信</p></li><li><p>学习计划</p></li></ul><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 48px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">*具体材料请按申请学校要求准备、提交。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong><em>如果我已经被中国大学录取，即将赴华学习，我需要做些什么？</em></strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">申请者获得录取通知后，应当着手来华前准备，具体包括以下几个方面：</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 24px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>1.&nbsp;</strong><strong>前往当地中国驻外使馆，办理学习签证</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">请务必申请学习签证（X签证）来华学习。其中，X1签证是长期可转换签证，入境30天内须转换成居留许可；X2签证是短期不可转换签证，持此签证的学生只能往返中国一次，且最多可在中国境内停留180天。因此，如您在华学习期限超过180天，需申请办理X1签证（居留许可）；如不超过180天，需申请办理X2签证。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">办理签证所需材料通常包括：</p><ul style=\";padding-top: initial;padding-right: initial;padding-bottom: initial;padding-left: 1.5em;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\" class=\" list-paddingleft-2\"><li><p>护照原件及复印件1份（请确保您的护照有效期在6个月以上且有空白签证页）</p></li><li><p>《外国留学人员来华签证申请表》（JW201表或JW202表）原件及复印件1份。</p></li><li><p>由中国大学出具的录取通知书原件及复印件1份</p></li></ul><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">更多详细信息，请登陆以下网站查看：</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">中国外交部网：<a href=\"http://www.fmprc.gov.cn/mfa_eng/\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">http://www.fmprc.gov.cn/mfa_eng/</a></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">中国领事服务网：<a href=\"http://cs.mfa.gov.cn/wgrlh\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">http://cs.mfa.gov.cn/wgrlh</a></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">*国际学生入境须持学习签证（X签证），若持旅游签证（L签证）入境后再希望转换为学习签证，可能被要求出境后再次入境，不建议这么做。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>2.&nbsp;&nbsp;</strong><strong>仔细阅读录取通知书，及时和学校沟通联系</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 28px\">录取通知书通常包含录取专业、学习年限、授课语言等录取信息，以及新生报到注册的时间、地点、所需材料等报到信息。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">*新生入学前最好提前和学校确认住宿安排，以防出现因房间紧张无法入住的情况；与学校联系，通常采用邮件、电话等方式。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 24px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>3.&nbsp;</strong><strong>留学期间可能需要的物品明细</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">1)&nbsp;&nbsp;电器类：笔记本电脑等电子产品及其配件、电源转换插头、电源变压器、移动电源等（中国标准电压为220V，图片为中国标准插座，请自备电压转换设备）；</p><p><img src=\"/ueditor/php/upload/image/20180406/1522999795.jpg\" title=\"1522999795.jpg\" alt=\"2.jpg\"/></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">2)&nbsp;&nbsp;床上用品：床单、被罩、枕套、被褥等；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">3)&nbsp;&nbsp;盥洗用品：拖鞋、浴巾、毛巾、牙刷、牙膏等；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">4)&nbsp;&nbsp;衣物：中国地域辽阔，气候差异较大，很难有统一的衣物参照标准，请根据学校所在地气候准备衣物；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">5)&nbsp;&nbsp;常用药品：呼吸系统常用药、消化系统常用药、止痛药、消炎药、驱蚊药、润肤霜等。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">6)&nbsp;&nbsp;建议随身携带适量现金（人民币），用以支付从机场抵达学校、购买生活用品等基本开销。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">*我们建议，电器、日用品等物品可在校园及附近商场购买。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 28px\">此外，根据中国政府的有关规定，鸦片、吗啡、海洛因、大麻以及其它能使人成瘾的麻醉品、精神药物；各种武器、仿真武器、管制刀具、弹药及爆炸物等物品严禁携带入境来华。具体信息请参考：</p><ul style=\";padding-top: initial;padding-right: initial;padding-bottom: initial;padding-left: 1.5em;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\" class=\" list-paddingleft-2\"><li><p>海关总署令第43号（中华人民共和国禁止、限制进出境物品表）<a href=\"http://www.customs.gov.cn/publish/portal0/tab517/info10510.htm\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">http://www.customs.gov.cn/publish/portal0/tab517/info10510.htm</a></p></li><li><p>海关总署公告2013年第46号（关于《中华人民共和国禁止进出境物品表》和《中华人民共和国限制进出境物品表》有关问题解释）<a href=\"http://www.customs.gov.cn/publish/portal0/tab399/info623247.htm\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">http://www.customs.gov.cn/publish/portal0/tab399/info623247.htm</a></p></li></ul><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 24px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>4.&nbsp;</strong><strong>其他注意事项</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">1)&nbsp;&nbsp;中国货币介绍</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">中国的法定货币为人民币（¥），单位为元，人民币辅币单位为角、分。1元=10角，1角=10分。目前主要流通的纸币有：1角、5角，1元、5元、10元、20元、50元、100元；硬币有：1角、5角和1元。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">2)&nbsp;&nbsp;外币兑换地点及可兑换币种</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">以下外币币种可兑换为人民币：英镑、美元、欧元、日元、韩国元、加拿大元、澳大利亚元、瑞士法郎、新加坡元、瑞典克朗、挪威克朗、丹麦克朗、菲律宾比索、泰国铢。对于其他币种，您可先在本国兑换成美元携带至中国，再将美元兑换成人民币。如需获得更多信息，请登录中国银行官网查询：<a href=\"http://www.boc.cn/en/index.html\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">http://www.boc.cn/en/index.html</a></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">3)&nbsp;&nbsp;过敏原备忘录及预备药品</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">中国部分食品包装未注明过敏信息，因此请谨慎食用；随身自带自身过敏反应备忘录和预备药品。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">4)&nbsp;&nbsp;日常中文用语及其他相关中文信息</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 28px\">中国以汉语（通用普通话）为通用语言，少数地区使用当地方言。为避免最初的沟通障碍，建议备好中文书写的在华联络人信息、学校（管理老师）信息、和目的地信息等。</p><p><br/></p>', 0, 0, '2018-04-06 07:33:38', '2018-04-06 07:33:38'),
(7, 1, '入境须知', 'upload/15230002112443703.jpg', '当抵达中国后，需要怎么做？到达学校后，我可以住在哪里？关于新生报到，我要知道什么？身体检查、医疗保险我需要做吗？', '<p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>当我抵达中国后，我该怎么做？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">通常情况下，国际学生将乘飞机来到中国；也有可能搭乘铁路、船运、巴士等其他交通工具。但无论如何，抵达后首个任务是通过中国边检入境。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>1.&nbsp;&nbsp;</strong><strong>中国边检</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">中国边检分为中国公民通道、外籍公民通道等多种通道，国际学生应由外籍公民通道通过。入境前需先填写《外国人入境申请表》，并于海关关口交与检查人员。检查人员可能会询问有关出行目的、在华联系人、住址等信息，应提前准备应答，并随身携带纸质支持材料。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">入境后，不可在边检处逗留，应及早提取行李，并配合安检人员对行李进行安全检查。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>2.&nbsp;&nbsp;</strong><strong>如何抵达学校</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">入境后，通常可选择出租车（Taxi）/地铁/大巴等多种出行方式，也可能需要搭乘城际列车或接续航班前往目的地城市，具体情况请咨询学校。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>抵达学校后，我可以住在哪里？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 28px\">国际学生通常住在校内学生公寓，或校外租房。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 28px\">请注意，未在学校规定时间内办理入住的学生可能需自行安排住宿，具体情况请联系学校确认。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>关于新生报到，我需要知道什么？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">新生抵达中国后，应及时前往录取院校完成报到注册等一系列入学手续。具体时间、地点、所需材料等情况请自行参考各校的《录取通知书》。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>1.&nbsp;&nbsp;</strong><strong>通常情况下，完成注册需要以下材料：</strong></p><p class=\"MsoListParagraph\" style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><br/></p><ul style=\";padding-top: initial;padding-right: initial;padding-bottom: initial;padding-left: 1.5em;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\" class=\" list-paddingleft-2\"><li><p>&nbsp;&nbsp;本人有效护照和签证（X1或X2）原件及复印件</p></li><li><p>&nbsp;&nbsp;录取通知书原件及复印件</p></li><li><p>&nbsp;&nbsp;《外国留学人员来华签证申请表》（JW201或202表）原件</p></li><li><p>&nbsp;&nbsp;本人护照尺寸照片</p></li><li><p>&nbsp;&nbsp;注册费、学费、医疗保险费、住宿费等报到时所需缴纳的相关费用</p></li><li><p>&nbsp;&nbsp;《外国人体格检查记录》及血液化验报告原件（在华学习期限在6个月以上的学生须提供）</p></li></ul><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><br/></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">*具体材料请按录取学校要求准备、提交。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>2.&nbsp;&nbsp;</strong><strong>通常学校报到注册工作包含以下内容：</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">1)&nbsp;住宿:办理住宿手续，入住宿舍；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">2）缴费：缴纳学费、注册费等相关费用；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">3）购买医疗保险：出示有效护照、录取通知书，缴纳医疗保险费用；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">4）学籍注册：填写相关表格，完成学籍注册；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">5）体检：学校将为学生安排健康体格检查；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">6）签证面签：学校为首次申请学习类居留许可的学生统一安排面签；</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">7）办理居留许可：获得体检结果并面签通过后，需办理居留许可。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">*各校的报到注册流程可能有所不同，具体请咨询学校。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>我一定要接受身体健康检查吗？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">根据中国政府相关法规要求，持X1签证入境的学生必须接受健康检查。学生可以在来华前在本国进行身体检查，在报到时交验中文或英文的《外国人体格检查记录》原件，再到当地出入境检验检疫局卫生保健中心进行复查。如提交健康证明书不符合规范、要求，或来华前未进行体检，须在当地检验检疫局卫生保健中心重新进行健康检查。保健中心会为您出具《外国人体格检查记录验证证明》，此证明为办理在华居留许可的必要材料。办理体检时，你可能需要携带以下材料：</p><p class=\"MsoListParagraph\" style=\"margin-top: 0px;margin-bottom: 0.5em;margin-left: 28px;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><br/></p><ul style=\";padding-top: initial;padding-right: initial;padding-bottom: initial;padding-left: 1.5em;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\" class=\" list-paddingleft-2\"><li><p>&nbsp;&nbsp;本人护照</p></li><li><p>&nbsp;&nbsp;来华前在本国的体检材料</p></li><li><p>&nbsp;&nbsp;2寸免冠证件照（也可以在体检现场重新办理）</p></li><li><p>&nbsp;&nbsp;录取通知书复印件或学校出具的证明文件。</p></li></ul><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">通常情况下，学校会统一安排体检事宜，若错过集体体检时间，需自行前往当地出入境检验检疫局完成此程序。X1签证自入境当日起30日内必须办理居留许可，因此需在入境后尽快完成体检。持X2签证入境的国际学生不需要体检，</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>我一定要购买医疗保险吗？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">根据国家有关规定，对于在华学习时间超过六个月的国际学生，须在华购买医疗保险，学校会为学生提供保险购买的相关咨询和服务。保险简介请参考：<a href=\"http://lxbx.net/tbzn/coverage2.1-c.html\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">http://lxbx.net/tbzn/coverage2.1-c.html</a>，理赔说明请参考：<a href=\"http://lxbx.net/lpsm/claims2.1-c.html\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">http://lxbx.net/lpsm/claims2.1-c.html</a>。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>外国人居留许可是什么？我该注意什么？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">中华人民共和国外国人居留许可是发给在中华人民共和国居留一年以上的外国人的居留许可。持X1签证入境的国际留学生，自入境当日起30日内必须转为居留许可，此证明应向拟居留地公安机关出入境管理机构申请办理。详情请参照《中华人民共和国外国人入境出境管理条例》和当地出入境管理局有关规定。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">你可能需要注意：</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">办理居留许可时须提交当地卫生检疫部门出具的合格的《外国人体格检查记录验证证明》，因此，请在入境后尽快完成健康检查，并携带证明材料前往当地出入境管理局。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">由于派出所办理居留许可时需递交护照原件，部分需持护照办理的业务如银行卡开卡、手机/网络开通等可能将受此影响，请提前安排相关事宜。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>如果我无法在规定时间抵达学校完成报到注册程序，怎么办？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">若学生无法在校方规定的注册报到时间抵达学校，应预先与学校相关管理老师联系，咨询自行报到注册的方式。</p><p><br/></p>', 0, 0, '2018-04-06 07:40:03', '2018-04-06 07:40:03'),
(8, 1, '在学须知', 'upload/15230005378786554.jpg', '在中国学习，我需要遵守那些制度？如果我想参与校外实习，我需要注意什么？', '<p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">国际学生在华行为将受到中国人民共和国有关外籍人士的法律、当地法规、以及校纪校规的三层约束；当地出入境管理局、公安派出所和在学院校共同承担对学生的管理责任。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">入学时，学校将对本年度新生统一进行在学行为准则与校园规章制度的入学指导；此外，出入境管理局、派出所也将不定期举行有关公共安全知识讲座。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">外籍人士（国际学生）需遵守的法律条文可参考本站<a href=\"http://www.csc.edu.cn:8011/zh/news/index10026.html\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">“留华须知-法律法规”</a><a href=\"http://www.csc.edu.cn:8011/zh/news/index10026.html\" target=\"_blank\" style=\";color: rgb(71, 71, 71);outline: none;-webkit-tap-highlight-color: transparent\">版块</a>。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255)\"><strong>如果我想参与校外实习，我需要注意什么？</strong></p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">持有X签证的国际学生，若在校学习期间有校外实习或兼职的需求，经校方同意后，可以向公安机关出入境管理机构，提交就读学校和实习单位出具的同意勤工助学或者校外实习的函件，申请居留证件加注。加注后，学生可在实习单位从事校外实习活动；如未加注，则不得在校外进行勤工助学或实习。请注意，你的实习日期不能超过居留许可的截止日期。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">如果你希望寻找一份实习工作，请通过专业、正规的途径获取，诸如校内学生服务中心或信息平台等。</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0.5em;padding: 0px;color: rgb(102, 102, 102);font-family: arial, &#39;Microsoft Yahei&#39;, Tahoma, Roboto, &#39;Droid Sans&#39;, &#39;Helvetica Neue&#39;, &#39;Droid Sans Fallback&#39;, &#39;Heiti SC&#39;, sans-self;font-size: 14px;text-align: justify;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 37px\">最后，预祝同学们在中国度过一段充实、快乐、向上、难忘的留学旅程！</p><p><br/></p>', 0, 0, '2018-04-06 07:43:50', '2018-04-06 07:43:50');

-- --------------------------------------------------------

--
-- 表的结构 `ad_order`
--

CREATE TABLE `ad_order` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL COMMENT '用户id',
  `a_id` int(11) NOT NULL COMMENT '申请表id',
  `s_id` int(11) NOT NULL COMMENT '学校id',
  `p_id` int(11) NOT NULL COMMENT '专业id',
  `status` varchar(50) NOT NULL DEFAULT '2' COMMENT '状态，根据状态表',
  `description` varchar(100) NOT NULL DEFAULT '提交成功，请耐心等待管理员审核' COMMENT '状态说明',
  `total` int(11) NOT NULL COMMENT '总金额',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==“不删除”，1==删除',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='申请订单状态表';

--
-- 转存表中的数据 `ad_order`
--

INSERT INTO `ad_order` (`id`, `u_id`, `a_id`, `s_id`, `p_id`, `status`, `description`, `total`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 1, 3, '3', '审核失败', 400, 1, '2018-04-13 02:54:10', '2018-04-13 02:36:49'),
(2, 1, 18, 1, 2, '2', '提交成功，请耐心等待管理员审核', 400, 1, '2018-04-16 08:36:17', '2018-04-19 02:39:19'),
(3, 1, 19, 1, 2, '7', '材料不齐', 400, 1, '2018-04-16 09:40:58', '2018-04-16 08:47:27');

-- --------------------------------------------------------

--
-- 表的结构 `ad_profession`
--

CREATE TABLE `ad_profession` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL COMMENT '题目',
  `name` varchar(50) NOT NULL COMMENT 'input中name字段值',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='专业测评题目表';

--
-- 转存表中的数据 `ad_profession`
--

INSERT INTO `ad_profession` (`id`, `title`, `name`, `is_delete`) VALUES
(1, '1.	I understand better when the teacher tells me the instructions.', 'name1', 0),
(2, '2.	I lean better by doing exercises in class.', 'name2', 0),
(3, '3.	I learn more when I study with a group.', 'name3', 0),
(4, '4.	In class, I learn best when I work with others.', 'name4', 0),
(5, '5.	I prefer reading textbook than listening lecture.', 'name5', 0),
(6, '6.	I learn better by reading what the teacher writes on the chalkboard.', 'name6', 0),
(7, '7.	I remember better in the class when teacher gives a lecture.', 'name7', 0),
(8, '8.	I learn better when I do things in class.', 'name8', 0),
(9, '9.	I understand better, when I read instructions.', 'name9', 0),
(10, '10.	 I learn better when I can make a model of something.', 'name10', 0),
(11, '11.	When learning a new skill, I prefer watching someone’s demonstration than listening.', 'name11', 0),
(12, '12.	When someone tells me how to do something in class, I learn it better.', 'name12', 0),
(13, '13.	When I work alone, I learn better.', 'name13', 0),
(14, '14.	I benefit more from involving hands on activities than hearing lectures.', 'name14', 0),
(15, '15.	I learn better when I make drawings as I study.', 'name15', 0),
(16, '16.	I do my work better when I work myself alone.', 'name16', 0),
(17, '17.	I enjoy doing assignment with my classmates.', 'name17', 0),
(18, '18.	I recognize better things in class when I participate in role-playing.', 'name18', 0),
(19, '19.	I learn better when I listen to others in class.', 'name19', 0),
(20, '20.	I prefer working on task by myself.', 'name20', 0),
(21, '21.	I prefer to study with friends group.', 'name21', 0),
(22, '22.	When I study alone, I understand well.', 'name22', 0),
(23, '23.	When I build something, I remember what I have learned better.', 'name23', 0),
(24, '24.	I learn best in class when I can participate in related activities.', 'name24', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ad_profession_answer`
--

CREATE TABLE `ad_profession_answer` (
  `id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL COMMENT '答案',
  `score` int(2) NOT NULL COMMENT '分数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='专业测评答案';

--
-- 转存表中的数据 `ad_profession_answer`
--

INSERT INTO `ad_profession_answer` (`id`, `answer`, `score`) VALUES
(1, 'Strongly Agree', 5),
(2, 'Agree', 4),
(3, 'Undecided', 3),
(4, 'Disagree', 2),
(5, 'Strongly Disagree', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ad_program`
--

CREATE TABLE `ad_program` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '名称',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='专业表';

--
-- 转存表中的数据 `ad_program`
--

INSERT INTO `ad_program` (`id`, `name`, `is_delete`) VALUES
(1, '电气工程及其自动化', 0),
(2, '土木工程', 0),
(3, '德语', 0),
(4, '英语', 0),
(5, '汉语言文学', 0),
(6, '应用物理学', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ad_province`
--

CREATE TABLE `ad_province` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='省份表';

--
-- 转存表中的数据 `ad_province`
--

INSERT INTO `ad_province` (`id`, `name`, `is_delete`) VALUES
(1, '浙江', 0),
(2, '安徽', 0),
(3, '江苏', 1),
(4, '北京', 0),
(5, '重庆', 0),
(6, '福建', 0),
(7, '甘肃', 0),
(8, '广东', 0),
(9, '广西', 0),
(10, '贵州', 0),
(11, '海南', 0),
(12, '河北', 0),
(13, '黑龙江', 0),
(14, '河南', 0),
(15, '香港', 0),
(16, '湖北', 0),
(17, '湖南', 0),
(18, '内蒙古', 0),
(19, '江西', 0),
(20, '吉林', 0),
(21, '辽宁', 0),
(22, '澳门', 0),
(23, '宁夏', 0),
(24, '青海', 0),
(25, '陕西', 0),
(26, '山东', 0),
(27, '上海', 0),
(28, '山西', 0),
(29, '四川', 0),
(30, '台湾', 0),
(31, '天津', 0),
(32, '新疆', 0),
(33, '西藏', 0),
(34, '云南', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ad_question`
--

CREATE TABLE `ad_question` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0' COMMENT '浏览次数',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '是否删除，0不删，1删除',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='问题表';

--
-- 转存表中的数据 `ad_question`
--

INSERT INTO `ad_question` (`id`, `user_id`, `title`, `view`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, '如何啦啦啦啦绿啦啦啦？', 20, 0, '2018-03-14 04:00:41', '0000-00-00 00:00:00'),
(2, 1, 'this is a second question', 10, 0, '2018-03-14 09:00:53', '0000-00-00 00:00:00'),
(3, 1, '这是我的问题', 0, 1, '2018-03-16 03:36:20', '2018-03-16 03:36:20'),
(4, 1, '这是我的问题', 0, 1, '2018-03-15 03:36:07', '2018-03-15 03:36:07');

-- --------------------------------------------------------

--
-- 表的结构 `ad_question_answer`
--

CREATE TABLE `ad_question_answer` (
  `id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL COMMENT '提问的id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `content` text NOT NULL,
  `up` int(11) NOT NULL DEFAULT '0' COMMENT '赞',
  `down` int(11) NOT NULL DEFAULT '0' COMMENT '踩',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '是否删除，0不删，1删除',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='提问答案表';

--
-- 转存表中的数据 `ad_question_answer`
--

INSERT INTO `ad_question_answer` (`id`, `q_id`, `user_id`, `content`, `up`, `down`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '我不知道，啦啦啦啦啦啦啦啦绿绿绿绿啦绿绿绿绿绿绿绿啦啦啦啦绿绿绿嘞绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿，啦啦啦啦啦啦啦啦绿绿绿绿啦绿绿绿绿绿绿绿绿', 0, 0, 0, '2018-03-14 06:01:21', '0000-00-00 00:00:00'),
(2, 1, 1, '我也不知道，但是啦啦啦啦啦啦啦啦绿绿绿绿啦绿绿绿绿绿绿绿啦啦啦啦绿绿绿嘞绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿绿，啦啦啦啦啦啦啦啦绿绿绿绿啦绿绿绿绿绿绿绿啦啦啦啦绿绿绿嘞绿绿绿绿绿', 0, 0, 0, '2018-03-14 06:01:54', '0000-00-00 00:00:00'),
(3, 1, 1, '我来提交答案', 0, 0, 0, '2018-03-14 11:42:35', '2018-03-14 11:42:35'),
(4, 1, 1, '我来提交答案', 0, 0, 0, '2018-03-14 11:44:30', '2018-03-14 11:44:30'),
(5, 3, 1, '我是第一个回答', 0, 0, 0, '2018-03-14 14:29:15', '2018-03-14 14:29:15'),
(6, 4, 2, '这是个严肃的问题', 0, 0, 0, '2018-03-15 03:04:40', '2018-03-15 03:04:40'),
(7, 3, 2, '我也来评论下', 0, 0, 1, '2018-03-15 03:50:50', '2018-03-15 03:50:50'),
(8, 3, 2, '我再来测试下', 0, 0, 1, '2018-03-15 03:52:04', '2018-03-15 03:52:04');

-- --------------------------------------------------------

--
-- 表的结构 `ad_question_answer_discuss`
--

CREATE TABLE `ad_question_answer_discuss` (
  `id` int(11) NOT NULL,
  `q_a_id` int(11) NOT NULL COMMENT '问题答案的id',
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `up` int(11) NOT NULL DEFAULT '0' COMMENT '赞',
  `down` int(2) NOT NULL DEFAULT '0' COMMENT '踩',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='问题答案评论表';

--
-- 转存表中的数据 `ad_question_answer_discuss`
--

INSERT INTO `ad_question_answer_discuss` (`id`, `q_a_id`, `user_id`, `content`, `up`, `down`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '兄弟，强', 0, 0, '2018-03-14 06:02:40', '0000-00-00 00:00:00'),
(2, 1, 1, '是不是的呀', 0, 0, '2018-03-14 06:02:40', '0000-00-00 00:00:00'),
(4, 1, 1, '我来评论', 0, 0, '2018-03-14 11:57:21', '2018-03-14 11:57:21'),
(5, 1, 1, '我来评论', 0, 0, '2018-03-14 11:58:03', '2018-03-14 11:58:03'),
(6, 1, 1, '我来评论', 0, 0, '2018-03-14 11:59:20', '2018-03-14 11:59:20'),
(7, 1, 1, '好开心呢', 0, 0, '2018-04-09 09:54:21', '2018-04-09 09:54:21');

-- --------------------------------------------------------

--
-- 表的结构 `ad_school`
--

CREATE TABLE `ad_school` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL COMMENT '省份id',
  `name` varchar(50) NOT NULL,
  `icon` varchar(200) NOT NULL COMMENT '校徽',
  `bgImg` varchar(200) NOT NULL COMMENT '背景图',
  `students` int(11) NOT NULL COMMENT '学生数',
  `websit` varchar(100) NOT NULL COMMENT '网站',
  `door` varchar(100) NOT NULL COMMENT '申请入口',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='院校表';

--
-- 转存表中的数据 `ad_school`
--

INSERT INTO `ad_school` (`id`, `p_id`, `name`, `icon`, `bgImg`, `students`, `websit`, `door`, `is_delete`) VALUES
(1, 1, '浙江科技学院', 'upload/university/icon/zjkj.jpg', 'upload/university/bg/zjkj.jpg', 21435, 'http://www.zust.edu.cn/', 'http://isam.zust.edu.cn/', 0),
(2, 1, '浙讲师范大学', 'upload/university/icon/1522651083181673zjsf.png', 'upload/university/bg/1522651089791259zjsf.jpg', 30000, 'http://www.zjnu.edu.cn', 'http://isam.zust.edu.cn/', 0),
(4, 1, '浙江科技学院2', 'upload/university/icon/1522653274230979zjsf.png', 'upload/university/bg/1522653278586822zjsf.jpg', 11111, 'http', 'http://isam.zust.edu.cn/', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ad_school_program`
--

CREATE TABLE `ad_school_program` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL COMMENT '学校id',
  `p_id` int(11) NOT NULL COMMENT '专业id',
  `duration` int(2) NOT NULL COMMENT '年数',
  `language` varchar(20) NOT NULL COMMENT '授课语言',
  `apply` int(10) NOT NULL DEFAULT '400' COMMENT '申请费',
  `tution` int(6) NOT NULL COMMENT '学费',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==“不删除”，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='院校专业表';

--
-- 转存表中的数据 `ad_school_program`
--

INSERT INTO `ad_school_program` (`id`, `s_id`, `p_id`, `duration`, `language`, `apply`, `tution`, `is_delete`) VALUES
(1, 1, 1, 4, '汉语', 400, 24000, 0),
(2, 1, 2, 4, '汉语', 400, 24000, 0),
(4, 1, 3, 4, '汉语', 400, 15000, 0),
(5, 1, 5, 4, '汉语', 400, 15000, 0),
(6, 1, 6, 4, '英语', 400, 18000, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ad_status`
--

CREATE TABLE `ad_status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL COMMENT '状态名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='审核状态表';

--
-- 转存表中的数据 `ad_status`
--

INSERT INTO `ad_status` (`id`, `name`) VALUES
(1, '提交成功'),
(2, '审核中'),
(3, '审核失败'),
(4, '审核成功'),
(5, '递交大学'),
(6, '申请失败'),
(7, '申请成功');

-- --------------------------------------------------------

--
-- 表的结构 `ad_user`
--

CREATE TABLE `ad_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'upload/userImg/1.png',
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除',
  `reg_time` int(11) NOT NULL COMMENT '注册时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户表';

--
-- 转存表中的数据 `ad_user`
--

INSERT INTO `ad_user` (`id`, `username`, `password`, `sex`, `phone`, `img`, `is_delete`, `reg_time`) VALUES
(1, 'text1', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1234567890', 'upload/userImg/1521013186763772music1.png', 0, 1521013252),
(2, 'text2', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1234567890', 'upload/userImg/1521083054292180music.png', 0, 1521083060),
(3, 'text3', 'e10adc3949ba59abbe56e057f20f883e', 'male', '11344556', 'upload/img/1.png', 0, 1505782355),
(5, 'text4', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1234567890', 'upload/userImg/1.png', 0, 1498721895),
(6, 'text5', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1234567890', 'upload/userImg/1.png', 0, 1498721895),
(7, 'text7', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1234567890', 'upload/img/1.png', 0, 1498721895),
(8, 'text8', 'e10adc3949ba59abbe56e057f20f883e', 'male', '12345', 'upload/img/1.png', 0, 1506234529),
(9, 'text9', 'e10adc3949ba59abbe56e057f20f883e', 'female', '1234567', 'upload/img/1.png', 0, 1506234598);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_admin`
--
ALTER TABLE `ad_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_apply`
--
ALTER TABLE `ad_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_nation`
--
ALTER TABLE `ad_nation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_news`
--
ALTER TABLE `ad_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_order`
--
ALTER TABLE `ad_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_profession`
--
ALTER TABLE `ad_profession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_profession_answer`
--
ALTER TABLE `ad_profession_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_program`
--
ALTER TABLE `ad_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_province`
--
ALTER TABLE `ad_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_question`
--
ALTER TABLE `ad_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_question_answer`
--
ALTER TABLE `ad_question_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_question_answer_discuss`
--
ALTER TABLE `ad_question_answer_discuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_school`
--
ALTER TABLE `ad_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_school_program`
--
ALTER TABLE `ad_school_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_status`
--
ALTER TABLE `ad_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_user`
--
ALTER TABLE `ad_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ad_admin`
--
ALTER TABLE `ad_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `ad_apply`
--
ALTER TABLE `ad_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `ad_nation`
--
ALTER TABLE `ad_nation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `ad_news`
--
ALTER TABLE `ad_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `ad_order`
--
ALTER TABLE `ad_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `ad_profession`
--
ALTER TABLE `ad_profession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- 使用表AUTO_INCREMENT `ad_profession_answer`
--
ALTER TABLE `ad_profession_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `ad_program`
--
ALTER TABLE `ad_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `ad_province`
--
ALTER TABLE `ad_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- 使用表AUTO_INCREMENT `ad_question`
--
ALTER TABLE `ad_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `ad_question_answer`
--
ALTER TABLE `ad_question_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `ad_question_answer_discuss`
--
ALTER TABLE `ad_question_answer_discuss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `ad_school`
--
ALTER TABLE `ad_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `ad_school_program`
--
ALTER TABLE `ad_school_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `ad_status`
--
ALTER TABLE `ad_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `ad_user`
--
ALTER TABLE `ad_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `ad_nation` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `is_delete` int(2) NOT NULL DEFAULT '0' COMMENT '0==不删除，1==删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='国籍国家表';

CREATE TABLE IF NOT EXISTS ad_profession_total (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(20) NOT NULL,
  cate varchar(20) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=utf8 COMMENT='就业评估结果大类表';

INSERT INTO ad_profession_total(name, cate) VALUES('经济学', 'visual');
INSERT INTO ad_profession_total(name, cate) VALUES('工学', 'tactile');
INSERT INTO ad_profession_total(name, cate) VALUES('文学', 'auditory');
INSERT INTO ad_profession_total(name, cate) VALUES('管理学', 'group');
INSERT INTO ad_profession_total(name, cate) VALUES('理学', 'kinesthetic');
INSERT INTO ad_profession_total(name, cate) VALUES('艺术设计学', 'individual');

CREATE TABLE IF NOT EXISTS ad_profession_cate (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  t_id int(11) NOT NULL COMMENT '父id，就业结果大类',
  name varchar(20) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=utf8 COMMENT='就业结果大类细分表';

INSERT INTO ad_profession_cate(t_id, name) VALUES(1, '经济学');
INSERT INTO ad_profession_cate(t_id, name) VALUES(1, '金融工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(1, '国际经济和贸易');

INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '机械类');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '机械设计制造及其自动化');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '材料成型及控制工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '工业设计');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '车辆工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '汽车服务工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '测控技术与仪器');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '材料科学与工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '电气自动化及其自动化');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '电子信息类');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '自动化');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '计算机类');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '物联网工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '土木类');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '给排水科学与工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '化学工程与工艺');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '制药工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '包装工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(2, '生物工程');

INSERT INTO ad_profession_cate(t_id, name) VALUES(3, '汉语言文学');
INSERT INTO ad_profession_cate(t_id, name) VALUES(3, '英语');
INSERT INTO ad_profession_cate(t_id, name) VALUES(3, '德语');

INSERT INTO ad_profession_cate(t_id, name) VALUES(4, '管理科学与工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(4, '信息管理与信息系统');
INSERT INTO ad_profession_cate(t_id, name) VALUES(4, '市场营销');
INSERT INTO ad_profession_cate(t_id, name) VALUES(4, '财务管理');
INSERT INTO ad_profession_cate(t_id, name) VALUES(4, '物流工程');
INSERT INTO ad_profession_cate(t_id, name) VALUES(4, '工业工程');

INSERT INTO ad_profession_cate(t_id, name) VALUES(5, '信息与计算科学');
INSERT INTO ad_profession_cate(t_id, name) VALUES(5, '应用物理');

INSERT INTO ad_profession_cate(t_id, name) VALUES(6, '动画');
INSERT INTO ad_profession_cate(t_id, name) VALUES(6, '设计学类');
INSERT INTO ad_profession_cate(t_id, name) VALUES(6, '视觉传达设计');
INSERT INTO ad_profession_cate(t_id, name) VALUES(6, '环境设计');
INSERT INTO ad_profession_cate(t_id, name) VALUES(6, '产品设计');
INSERT INTO ad_profession_cate(t_id, name) VALUES(6, '服装与服饰设计');

CREATE TABLE IF NOT EXISTS ad_profession_result (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  visual int(3) NOT NULL COMMENT '经济学',
  tactile int(3) NOT NULL COMMENT '工学',
  auditory int(3) NOT NULL COMMENT '文学',
  p_group int(3) NOT NULL COMMENT '管理学',
  kinesthetic int(3) NOT NULL COMMENT '理学',
  individual int(3) NOT NULL COMMENT '艺术设计学'
)ENGINE=innoDB DEFAULT CHARSET=utf8 COMMENT='专业测评结果表';
