<?php

namespace NamNV609\SpotIM;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Spot.IM',
            'description' => 'Spot.IM plugin - Turn comments into Community',
            'author' => 'NamNV609',
            'icon' => 'oc-icon-comment-o',
        ];
    }

    public function registerComponents()
    {
        return [
            'NamNV609\SpotIM\Components\SpotIM' => 'spotim',
            'NamNV609\SpotIM\Components\Comment' => 'spotimComment',
            'NamNV609\SpotIM\Components\Count' => 'spotimRepliesCount',
        ];
    }
}
