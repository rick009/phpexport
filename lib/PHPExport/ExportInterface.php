<?php
/**
 * This file is part of PHPExport.
 * Author: louxin
 * Date: 14-6-25
 * Time: 下午2:23
 * File: ExportInterface.php
 */

namespace PHPEXport;

interface ExportInterface
{
    /**
     * 导出文件
     *
     * @param string $sql SQL语句
     * @param array $fields 文件字段
     * @param bool $showHeader 是否显示文件头，默认显示
     *
     * <pre>
     * $fields = array(
     *      'name' => '姓名',
     *      'age' => '年龄',
     *      ...
     * );
     * </pre>
     *
     * @return void
     */
    public function export($sql = '', array $fields = array(), $showHeader = true);

    /**
     * 获取导出类型（excel、csv、word等）
     *
     * @return string
     */
    public function getType();
}