<?php

declare(strict_types=1);

namespace Aporrhia\DescriptionQuill\Providers;

use Illuminate\Support\ServiceProvider;

class DescriptionQuillServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views/fields', 'description-quill');


        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/description-quill'),
        ], ['description-quill-assets', 'laravel-assets']);
    }
}
