<?php
/**
 * Date: 2017/11/22
 * User: lishuo
 */

namespace App\DataStruct\ListStruct;


class OrderList implements ListI
{
    private $l;

    public function init(&$l)
    {
        $this->l = $l;
    }

    //删除
    public function destruct(&$l)
    {
        unset($l);
    }

    //清空
    public function clear(&$l)
    {
        $this->l = $l = [];
    }

    public function isEmpty($l):bool
    {
        if (count($l) > 0) {
            return false;
        }
        return true;
    }

    public function length($l):string
    {

    }

    public function getElem($l, $i, &$e)
    {

    }

    public function PriorElem($l, $cur_e, &$pri_e)
    {

    }

    public function NestElem($l, $cur_e, &$next_e)
    {

    }

    public function insert(&$l, $i, $e)
    {

    }

    public function delete(&$l, $i, &$e)
    {

    }

}