<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Number;
use App\Functions\StockFunction;
use Laravel\Nova\Fields\Boolean;
use Acme\MultiImages\MultiImages;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\MultiSelect;
use Laravel\Nova\Fields\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Http\Requests\NovaRequest;

class Stock extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Stock>
     */
    public static $model = \App\Models\Stock::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            // return images as html format
            Trix::make('Images','images')
            ->resolveUsing(function ($images) {
                $parsed = StockFunction::parseImagesToHtml($images);
                return $parsed;
            })
            ->rules('required',function($attribute, $value, $fail) {
                $images = StockFunction::filterImagesFromHtml($value);
                if (count($images) == 0)
                    return $fail(__('You must upload at least 1 image.'));
                
                if (count($images) > 5)
                    return $fail(__('You may only upload up to 5 images.'));
            })
            ->withFiles('public')->path('stocks'),

            ID::make()->sortable(),
            Text::make(__('SKU'), 'sku')
                ->withMeta([
                    'extraAttributes' => [
                        'readonly' => true,
                    ],
                ]),
            BelongsTo::make('Product'),
            Number::make(__('Quantity'), 'quantity'),
            Number::make(__('Price'), 'price'),
            Boolean::make(__('In Stock'), 'in_stock'),
            Number::make(__('Sold'), 'sold')
                ->readonly(),
            BelongsTo::make('ProductColor'),
            BelongsTo::make('ProductSize'),
        ];
    }
    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
