<?php

namespace App\Repositories;

use App\Models\Setting;

class SettingsRepository
{
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function getRow()
    {
        return $this->setting->first();
    }

    public function update(array $data)
    {
        $setting = $this->setting->first();
        $setting->update($data);
        return $setting;
    }
}
