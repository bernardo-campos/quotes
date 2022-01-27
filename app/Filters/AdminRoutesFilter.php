<?php

namespace App\Filters;

use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

class AdminRoutesFilter implements FilterInterface
{
    public function transform($item)
    {
        $routeName = isset($item['route']) ? $item['route'] : '';
        $routeContainsAdmin = explode('.', $routeName)[0] == 'admin';
        $routeIsAdmin = request()->routeIs('admin.*');

        if ($routeContainsAdmin && !$routeIsAdmin ||
            !$routeContainsAdmin && $routeIsAdmin) {
            $item['restricted'] = true;
        }

        return $item;
    }
}
