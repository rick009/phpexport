<?php
/**
 * This file is part of PHPExport.
 * Author: louxin
 * Date: 14-6-25
 * Time: 下午2:59
 * File: Csv.php
 */

namespace PHPExport;

class Csv implements ExportInterface
{
    private $phpexcel;

    public function __construct()
    {
        $this->phpexcel = new \PHPExcel();
    }

    /**
     * {@inhritdoc}
     */
    public function export($sql = '', array $fields = array(), $showHeader = true)
    {

    }

    /**
     * 返回类型
     *
     * @return string
     */
    public function  getType()
    {
        return 'csv';
    }
}
