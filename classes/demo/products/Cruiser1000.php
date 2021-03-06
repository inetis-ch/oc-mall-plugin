<?php

namespace OFFLINE\Mall\Classes\Demo\Products;


class Cruiser1000 extends DemoProduct
{
    protected function attributes(): array
    {
        return [
            'category_id'                  => $this->category('citybikes')->id,
            'brand_id'                     => $this->brand('cruiser-bikes')->id,
            'user_defined_id'              => 'CITY001',
            'name'                         => 'Cruiser 1000',
            'slug'                         => 'cruiser-1000',
            'price'                        => ['USD' => 895, 'CHF' => 899, 'EUR' => 795],
            'old_price'                    => null,
            'description_short'            => 'The ideal city bike',
            'description'                  => '<p>Find your passion for city biking on Cruisers’ Model 1000. Whether you want to ride to the train or commute to work this is the right bike for you. The aluminium frame is feather light and durable.</p>',
            'meta_title'                   => 'Cruiser 1000 Citybike',
            'meta_description'             => 'Find your passion for city biking on Cruisers’ Model 1000',
            'meta_keywords'                => 'city, citybike, curiser, bike',
            'weight'                       => 9000,
            'inventory_management_method'  => 'variant',
            'quantity_default'             => 1,
            'quantity_max'                 => 5,
            'allow_out_of_stock_purchases' => false,
            'links'                        => null,
            'stackable'                    => true,
            'shippable'                    => true,
            'price_includes_tax'           => true,
            'group_by_property_id'         => $this->property('wheel-size')->id,
            'published'                    => true,
        ];
    }

    protected function taxes(): array
    {
        return [1];
    }

    protected function properties(): array
    {
        return [
            'color'  => '{"name":"Dark grey","hex":"#333333"}',
            'rear-travel' => '0',
            'fork-travel' => '110',
            'material'    => 'Aluminium',
            'gender'      => 'Unisex',
        ];
    }

    protected function variants(): array
    {
        return [
            [
                'name'       => 'Cruiser 1000 27.5" S',
                'stock'      => 4,
                'price'      => ['USD' => 895, 'CHF' => 899, 'EUR' => 795],
                'old_price'  => ['USD' => 1195, 'CHF' => 1599, 'EUR' => 1795],
                'properties' => [
                    'frame-size' => 'S (38cm / 15")',
                    'wheel-size' => '27.5"',
                ],
            ],
            [
                'name'       => 'Cruiser 1000 27.5" M',
                'stock'      => 2,
                'properties' => [
                    'frame-size' => 'M (43cm / 17")',
                    'wheel-size' => '27.5"',
                ],
            ],
            [
                'name'       => 'Cruiser 1000 27.5" L',
                'stock'      => 0,
                'properties' => [
                    'frame-size' => 'L (48cm / 19")',
                    'wheel-size' => '27.5"',
                ],
            ],
            [
                'name'       => 'Cruiser 1000 29" S',
                'stock'      => 1,
                'properties' => [
                    'frame-size' => 'S (38cm / 15")',
                    'wheel-size' => '29"',
                ],
            ],
            [
                'name'       => 'Cruiser 1000 29" M',
                'stock'      => 8,
                'properties' => [
                    'frame-size' => 'M (43cm / 17")',
                    'wheel-size' => '29"',
                ],
            ],
            [
                'name'       => 'Cruiser 1000 29" L',
                'stock'      => 5,
                'properties' => [
                    'frame-size' => 'L (48cm / 19")',
                    'wheel-size' => '29"',
                ],
            ],
        ];
    }

    protected function customFields(): array
    {
        return [
            [
                'name'     => 'Include bike assembly guide',
                'type'     => 'checkbox',
                'price'    => ['USD' => 490, 'EUR' => 200, 'CHF' => 5900],
                'required' => false,
            ],
        ];
    }

    protected function images(): array
    {
        return [
            [
                'name'        => 'Main images',
                'is_main_set' => true,
                'images'      => [
                    realpath(__DIR__ . '/images/cruiser-1000-1.jpg'),
                    realpath(__DIR__ . '/images/cruiser-1000-2.jpg'),
                ],
            ],
        ];
    }
}