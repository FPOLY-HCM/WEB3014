<?php

declare(strict_types=1);

namespace Core;

use App\Models\Setting as SettingModel;

class Setting
{
    protected array $settings = [];

    public function __construct()
    {
    }

    public function get(string $key, string|null $default = null): string|null
    {
        if (isset($this->settings[$key])) {
            return $this->settings[$key];
        }

        $setting = SettingModel::where('key', $key)->first();

        if ($setting) {
            $this->settings[$key] = $setting->value;

            return $setting->value;
        }

        return $default;
    }

    public function set(string $key, string $value): void
    {
        $this->settings[$key] = $value;
    }

    public function all(): array
    {
        return $this->settings;
    }

    public function save(): void
    {
        foreach ($this->settings as $key => $value) {
            $setting = SettingModel::where('key', $key)->first();

            if ($setting) {
                $setting->update([
                    'value' => $value,
                ]);
            } else {
                SettingModel::create([
                    'key' => $key,
                    'value' => $value,
                ]);
            }
        }
    }

    public function __get(string $key): string|null
    {
        return $this->get($key);
    }

    public function __set(string $key, string $value): void
    {
        $this->set($key, $value);
    }
}