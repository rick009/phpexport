<?php
/**
 * This file is part of PHPExport.
 * Author: louxin
 * Date: 14-4-28
 * Time: 下午3:35
 * File: Excel.php
 */

namespace PHPExport;

class Excel implements ExportInterface
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
        return 'excel';
    }
}
