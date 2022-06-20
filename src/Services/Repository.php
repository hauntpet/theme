<?php

namespace HauntPet\Theme\Services;

use Illuminate\Support\Facades\View;

class Repository
{
    private string $active = '';
    private \Illuminate\Support\Collection $themes;

    public function __construct()
    {
        $this->themes = collect();
    }

    public function add(string $key, array $metadata = [], array $options = []): void
    {
        $this->themes->put($key, [
            'metadata' => $metadata,
            'options' => $options,
        ]);
    }

    public function loadViews(string $key, string $path): void
    {
        View::addNamespace($key, $path);
    }

    public function get(): \Illuminate\Support\Collection
    {
        return $this->themes;
    }

    public function activate(string $key): bool
    {
        if (!$this->themes->has($key)) {
            return false;
        }

        $this->active = $key;
        return true;
    }

    public function activeKey(): string
    {
        return $this->active;
    }

    public function active(): array
    {
        return $this->themes->get($this->active);
    }

    public function getLocations()
    {
        return array_merge(
            [null => __('No Location')],
            ['primary' => __('Primary Menu')],
            $this->active()['options']['menus'] ?? []
        );
    }
}
