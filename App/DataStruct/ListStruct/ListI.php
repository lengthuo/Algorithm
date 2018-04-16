<?php
/**
 * Date: 2017/11/22
 * User: lishuo
 */


namespace App\DataStruct\ListStruct;

/**
 * Interface ListI
 * @package App\DataStruct\ListStruct
 */
interface ListI
{
    /**
     * 结果：创建表
     */
    public function init(&$l);

    /**
     * 条件：表存在
     * 结果：删除表
     */
    public function destruct(&$l);

    /**
     * 条件：表存在
     * 结果：l设置为空表
     */
    public function clear(&$l);

    /**
     * 条件：表存在
     * 返回值：bool
     */
    public function isEmpty($l):bool;

    /**
     * 条件：表存在
     * 返回值：string
     */
    public function length($l):string;

    /**
     * 条件：表存在, i<0<l.length(l)
     * 结果：e为l中第i个元素的值
     */
    public function getElem($l, $i, &$e);


    /**
     * 条件：l存在，$cur_e不是第一个元素
     * 结果：$pri_e为$cur_e的前驱
     */
    public function PriorElem($l, $cur_e, &$pri_e);

    /**
     * 条件：l存在， cur_e不是最后一个元素
     * 结果：next_e 为cur_e的后继
     */
    public function NestElem($l, $cur_e, &$next_e);


    /**
     * 条件：l存在 0<i<l.length
     * 结果：长度加一
     */
    public function insert(&$l, $i, $e);

    /**
     * 条件l存在，0<$i<l.length
     * 结果：长度减一 $e为删除的值
     */
    public function delete(&$l, $i, &$e);


}
