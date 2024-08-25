<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Vintage Furniture Sale',
                'description' => 'Discover timeless pieces of vintage furniture to add a touch of classic elegance to your home.',
            ],
            [
                'id' => 2,
                'title' => 'Handcrafted Pottery Collection',
                'description' => 'Explore our exclusive collection of handcrafted pottery, perfect for adding a unique flair to your space.',
            ],
            [
                'id' => 3,
                'title' => 'Organic Skincare Products',
                'description' => 'Nourish your skin with our range of organic skincare products, made with natural ingredients for a healthy glow.',
            ],
            [
                'id' => 4,
                'title' => 'Artisan Jewelry Showcase',
                'description' => 'Browse our artisan jewelry showcase, featuring beautifully crafted pieces that are perfect for any occasion.',
            ],
            [
                'id' => 5,
                'title' => 'Eco-Friendly Home Essentials',
                'description' => 'Upgrade your home with eco-friendly essentials that are both sustainable and stylish.',
            ],
            [
                'id' => 6,
                'title' => 'Gourmet Coffee Selection',
                'description' => 'Indulge in our gourmet coffee selection, offering rich and flavorful blends for the ultimate coffee experience.',
            ],
            [
                'id' => 7,
                'title' => 'Designer Clothing Sale',
                'description' => 'Shop the latest trends with our designer clothing sale, offering fashionable pieces at unbeatable prices.',
            ],
            [
                'id' => 8,
                'title' => 'Bespoke Home Decor',
                'description' => 'Transform your living space with bespoke home decor items that reflect your unique style.',
            ],
            [
                'id' => 9,
                'title' => 'Luxury Bath & Body Products',
                'description' => 'Pamper yourself with our luxury bath and body products, designed to provide a spa-like experience at home.',
            ],
            [
                'id' => 10,
                'title' => 'Craft Beer Selection',
                'description' => 'Discover our craft beer selection, featuring a variety of brews from local and international breweries.',
            ],

        ];
    }

    public static function findId($id){
        $listings = self::all();
        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
    
}
