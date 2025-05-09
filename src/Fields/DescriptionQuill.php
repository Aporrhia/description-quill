<?php

declare(strict_types=1);

namespace Aporrhia\DescriptionQuill\Fields;

use Illuminate\Support\Facades\Vite;
use MoonShine\AssetManager\Js;
use MoonShine\UI\Fields\Textarea;
use MoonShine\AssetManager\Css;
use ForestLynx\MoonShine\Trait\WithUnit;

final class DescriptionQuill extends Textarea
{
    use WithUnit;


//    protected string $view = 'moonshine.fields.description';
    protected string $view = 'descriptionquill::fields.description-quill';
    protected ?string $locale = null;

//    protected string $view = 'moonshine-quill::fields.quill';

    protected function assets(): array
    {
        return [
            Css::make('vendor/descriptionquill/css/quill.snow.css'),
            Js::make('vendor/descriptionquill/js/quill.js'),
            Js::make('vendor/descriptionquill/js/quill-init.js'),
//            Css::make(Vite::asset('resources/css/quill.snow.css')),
//            Js::make(Vite::asset('resources/js/quill.js')),
//            Js::make(Vite::asset('resources/js/quill-init.js')),
        ];
    }
}
