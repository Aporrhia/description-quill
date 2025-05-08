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
//        $this->loadViewsFrom(resource_path('views'), 'description-quill');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'description-quill');
//
//        $this->publishes([
//            __DIR__.'/../resources/views' => resource_path('views/vendor/description-quill'),
//        ]);

    }
}
