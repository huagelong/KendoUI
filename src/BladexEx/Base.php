<?php
/**
 * Created by PhpStorm.
 * User: wangkaihui
 * Date: 2018/12/14
 * Time: 11:24
 */

namespace Trensy\KendoUI\BladexEx;


use Trensy\Config;

abstract class Base
{
    protected  static $instance = [];

    protected function getPushStatic($array, $stack='css')
    {
        $config = Config::get("app.show_kendo_ui_script");
        if(!$config) return "";

        $str = "<?php \$__env->startPush('".$stack."'); ?>";
        if($array){
            foreach ($array as $v){
                //去重复
                $key = md5(serialize($v));
                if(in_array($key, static::$instance)) continue;
                static::$instance[] = $key;
                $str .= "<?php echo \$__env->requireStatic('".$v."'); ?>";
            }
        }
        $str .= "<?php \$__env->stopPush(); ?>";
        return $str;
    }
}