<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $imagePaths = [
            'Herbal' => 'images/img-pro-02.jpg',
            'Lemon Tea' => 'images/img-pro-02.jpg',
            'Madu' => 'images/img-pro-02.jpg',
            'Buku' => 'images/img-pro-03.jpg'
        ];

        // Produk kategori Herbal (category_id = 1)
        Product::create([
            'product_name' => 'Herbal Tea Original',
            'product_description' => 'Traditional herbal tea with natural ingredients.',
            'price' => 100.00,
            'stock_quantity' => 200,
            'category_id' => 1,
            'image_url' => $imagePaths['Herbal'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Herbal Tea Mint',
            'product_description' => 'Refreshing mint herbal tea.',
            'price' => 120.00,
            'stock_quantity' => 150,
            'category_id' => 1,
            'image_url' => $imagePaths['Herbal'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Herbal Tea Lemon',
            'product_description' => 'Lemon flavored herbal tea.',
            'price' => 130.00,
            'stock_quantity' => 180,
            'category_id' => 1,
            'image_url' => $imagePaths['Herbal'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Herbal Tea Ginger',
            'product_description' => 'Warming ginger herbal tea.',
            'price' => 110.00,
            'stock_quantity' => 120,
            'category_id' => 1,
            'image_url' => $imagePaths['Herbal'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Herbal Tea Chamomile',
            'product_description' => 'Soothing chamomile herbal tea.',
            'price' => 140.00,
            'stock_quantity' => 100,
            'category_id' => 1,
            'image_url' => $imagePaths['Herbal'],
            'is_active' => true
        ]);

        // Produk kategori Lemon Tea (category_id = 2)
        Product::create([
            'product_name' => 'Lemon Tea Classic',
            'product_description' => 'Classic refreshing lemon tea.',
            'price' => 50.00,
            'stock_quantity' => 300,
            'category_id' => 2,
            'image_url' => $imagePaths['Lemon Tea'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Lemon Tea Honey',
            'product_description' => 'Lemon tea with honey.',
            'price' => 60.00,
            'stock_quantity' => 250,
            'category_id' => 2,
            'image_url' => $imagePaths['Lemon Tea'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Lemon Tea Ginger',
            'product_description' => 'Warming lemon tea with ginger.',
            'price' => 65.00,
            'stock_quantity' => 200,
            'category_id' => 2,
            'image_url' => $imagePaths['Lemon Tea'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Lemon Tea Mint',
            'product_description' => 'Refreshing lemon tea with mint.',
            'price' => 55.00,
            'stock_quantity' => 180,
            'category_id' => 2,
            'image_url' => $imagePaths['Lemon Tea'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Lemon Tea Ice',
            'product_description' => 'Iced lemon tea.',
            'price' => 70.00,
            'stock_quantity' => 150,
            'category_id' => 2,
            'image_url' => $imagePaths['Lemon Tea'],
            'is_active' => true
        ]);

        // Produk kategori Madu (category_id = 3)
        Product::create([
            'product_name' => 'Pure Honey',
            'product_description' => '100% pure honey.',
            'price' => 200.00,
            'stock_quantity' => 100,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Lemon',
            'product_description' => 'Honey infused with lemon.',
            'price' => 220.00,
            'stock_quantity' => 120,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Ginger',
            'product_description' => 'Honey infused with ginger.',
            'price' => 230.00,
            'stock_quantity' => 110,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Cinnamon',
            'product_description' => 'Honey infused with cinnamon.',
            'price' => 240.00,
            'stock_quantity' => 130,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Vanilla',
            'product_description' => 'Honey infused with vanilla.',
            'price' => 250.00,
            'stock_quantity' => 140,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Turmeric',
            'product_description' => 'Honey infused with turmeric.',
            'price' => 260.00,
            'stock_quantity' => 160,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Mint',
            'product_description' => 'Honey infused with mint.',
            'price' => 270.00,
            'stock_quantity' => 170,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Lavender',
            'product_description' => 'Honey infused with lavender.',
            'price' => 280.00,
            'stock_quantity' => 180,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Honey with Eucalyptus',
            'product_description' => 'Honey infused with eucalyptus.',
            'price' => 290.00,
            'stock_quantity' => 190,
            'category_id' => 3,
            'image_url' => $imagePaths['Madu'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Panduan Herbal',
            'product_description' => 'Buku panduan lengkap tentang tanaman herbal.',
            'price' => 150.00,
            'stock_quantity' => 50,
            'category_id' => 4,
            'image_url' => $imagePaths['Buku'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Buku Resep Herbal',
            'product_description' => 'Buku resep-resep menggunakan bahan herbal.',
            'price' => 100.00,
            'stock_quantity' => 75,
            'category_id' => 4,
            'image_url' => $imagePaths['Buku'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Buku Kesehatan Alami',
            'product_description' => 'Buku tentang pengobatan alami dengan tanaman herbal.',
            'price' => 120.00,
            'stock_quantity' => 60,
            'category_id' => 4,
            'image_url' => $imagePaths['Buku'],
            'is_active' => true
        ]);

        Product::create([
            'product_name' => 'Ensiklopedia Herbal',
            'product_description' => 'Ensiklopedia lengkap tentang berbagai tanaman herbal.',
            'price' => 200.00,
            'stock_quantity' => 40,
            'category_id' => 4,
            'image_url' => $imagePaths['Buku'],
            'is_active' => true
        ]);
    }
}
