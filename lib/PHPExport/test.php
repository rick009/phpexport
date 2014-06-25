<?php
/**
 * This file is part of PHPExport.
 * Author: louxin
 * Date: 14-4-28
 * Time: 下午1:51
 * File: test.php
 */

require_once '../../vendor/autoload.php';

$obj = new PHPExcel();
$obj->getActiveSheet()->setCellValue('A1', 'louxin');
$objWriter = PHPExcel_IOFactory::createWriter($obj, 'Excel2007');
$objWriter->save('louxin.xlsx');
