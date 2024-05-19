<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $productNames = ['Toaster', 'Spoon Set', 'Knife set', 'Coffee Maker'];
        $products = Product::whereIn('name', $productNames)->get();

        foreach ($products as $product) {
            $product->delete();
        }

        $products = [
            [
                'id' => 1,
                'name' => 'Toaster',
                'description' => 'A small appliance used to toast bread slices.',
                "stock" => 51,
                "price" => 80000,
                "images" => 'product1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Spoon Set',
                'description' => 'A set of stainless steel spoons for serving and eating.',
                "stock" => 100,
                "price" => 3000,
                "images" => 'product2.jpg'
            ],
            [
                "id" =>3,
                "name"=>"Knife set",
                "description"=>"A set of high-quality kitchen knives for various cutting tasks.",
                "stock" => 55,
                "price" => 2000,
                "images" => 'product3.jpg'
            ],
            [
                "id" =>4,
                "name"=>"Coffee Maker",
                "description"=>"An appliance used to brew coffee automatically.",
                "stock" => 25,
                "price" => 1200,
                "images" => 'product4.jpg'
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}