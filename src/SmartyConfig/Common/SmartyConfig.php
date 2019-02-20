<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/yichang-portal-config/src/SmartyConfig/Yc',
            S_ROOT.'vendor/qixinyun/yichang-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/yichang-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
