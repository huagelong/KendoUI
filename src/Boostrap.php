<?php
/**
 * Created by PhpStorm.
 * User: wangkaihui
 * Date: 2018/12/13
 * Time: 15:33
 */

namespace Trensy\KendoUI;


class Boostrap
{
    /**
     * @var array
     */
    protected $script = [
        '<link href="//kendo.cdn.telerik.com/2018.3.1017/styles/kendo.common.min.css" rel="stylesheet">',
        '<link href="//kendo.cdn.telerik.com/2018.3.1017/styles/kendo.silver.min.css" rel="stylesheet">',
        '<script src="//kendo.cdn.telerik.com/2018.3.1017/js/jquery.min.js"></script>',
        '<script src="//kendo.cdn.telerik.com/2018.3.1017/js/kendo.all.min.js"></script>',
    ];

    /**
     * 获取表单生成器所需js
     * @return array
     */
    public function getScript()
    {
        return $this->script;
    }

}