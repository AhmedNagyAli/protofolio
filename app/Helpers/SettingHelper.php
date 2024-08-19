<?php

namespace App\Helpers;

use App\Models\Setting;

if (! function_exists('get_setting')) {
    function get_setting(string $setting_name, $default = null)
    {
        $setting_value = Setting::query()->where('setting_name', $setting_name)->value('setting_value');

        return $setting_value;
    }
}
