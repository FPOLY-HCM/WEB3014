<?php

declare(strict_types=1);

namespace Core;

use App\Models\Setting as SettingModel;

class Setting
{
    protected array $settings = [];

    public function get(string $key, string|null $default = null): string|null
    {
        $setting = SettingModel::query()->where('key', $key)->first();

        if ($setting) {
            return $setting->value;
        }

        return $default;
    }

    public function set(string $key, string $value): void
    {
        $this->settings[$key] = $value;
    }

    public function save(): void
    {
        foreach ($this->settings as $key => $value) {
            SettingModel::query()->updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $this->settings = [];

        return;
    }
}
