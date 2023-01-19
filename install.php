<?php

defined('BASEPATH') or exit('No direct script access allowed');
$CI = &get_instance();

if (!$CI->db->table_exists(db_prefix() . 'demo_staff')) {
    $CI->db->query('CREATE TABLE `' . db_prefix() . "demo_staff` (
  `id` int(11)  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateadded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=" . $CI->db->char_set . ';');
    $CI->db->query('INSERT INTO `tbldemo_staff` (`id`,`name`,`birthday`, `gender`, `dateadded`) VALUES ("1", "Núi Nguyễn", "2001-08-25", "Nam", "2023-01-19");');
    $CI->db->query('INSERT INTO `tbldemo_staff` (`id`,`name`,`birthday`, `gender`, `dateadded`) VALUES ("2", "Huy Trần", "2000-01-27", "Nữ", "2023-01-19");');

}