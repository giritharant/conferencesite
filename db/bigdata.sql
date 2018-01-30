-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 13, 2015 at 03:46 AM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
-- 
-- Database: `bigdata`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `fields`
-- 

CREATE TABLE `fields` (
  `user_name` varchar(30) collate latin1_general_ci NOT NULL,
  `roll_no` varchar(10) collate latin1_general_ci NOT NULL,
  `user_email` varchar(20) collate latin1_general_ci NOT NULL,
  `user_password` varchar(20) collate latin1_general_ci NOT NULL,
  `category` varchar(75) collate latin1_general_ci NOT NULL,
  `roll` varchar(15) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `fields`
-- 

INSERT INTO `fields` VALUES ('laxmi', '28', 'laxmiprabha@opendesi', 'prabha6', '', '');
INSERT INTO `fields` VALUES ('laxmi', '28', 'laxmiprabha@opendesi', 'prabha6', '', '');
INSERT INTO `fields` VALUES ('laxmi', '28', 'laxmiprabha@opendesi', 'prabha6', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `roll_no` varchar(15) collate latin1_general_ci NOT NULL,
  `user_password` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `login`
-- 

