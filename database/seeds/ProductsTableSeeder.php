<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 24999990,
            'shipping_cost' => 299990,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'ean' => '123456789011',
            'quantity' => 100,
            'brand_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'name' => 'Dell Vostro 3557',
            'slug' => 'vostro-3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 14999990,
            'shipping_cost' => 199990,
            'description' => 'Dell Vostro 3557',
            'category_id' => 1,
            'ean' => '123456789012',
            'quantity' => 100,
            'brand_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 6499990,
            'shipping_cost' => 149990,
            'description' => 'iPhone 11 Pro',
            'category_id' => 2,
            'ean' => '123456789013',
            'quantity' => 100,
            'brand_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 89990,
            'shipping_cost' => 19890,
            'description' => 'Remax 610D Headset',
            'category_id' => 3,
            'ean' => '123456789014',
            'quantity' => 100,
            'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 419990,
            'shipping_cost' => 129590,
            'description' => 'Samsung LED TV',
            'category_id' => 4,
            'ean' => '123456789015',
            'quantity' => 100,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);

        Product::create([
            'name' => 'Samsung Camara Digital',
            'slug' => 'samsung-mv800',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 1449990,
            'shipping_cost' => 139390,
            'description' => 'Samsung Digital Camera',
            'category_id' => 5,
            'ean' => '123456789016',
            'quantity' => 100,
            'brand_id' => 4,
            'image_path' => 'samsung-mv800.jpg'
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2017',
            'slug' => 'gr5-2017',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 1489990,
            'shipping_cost' => 69790,
            'description' => 'Huawei GR 5 2017',
            'category_id' => 2,
            'ean' => '123456789017',
            'quantity' => 100,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2018',
            'slug' => 'gr5-2018',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 1489990,
            'shipping_cost' => 69790,
            'description' => 'Huawei GR 5 2017',
            'category_id' => 2,
            'ean' => '123456789018',
            'quantity' => 100,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2019',
            'slug' => 'gr5-2019',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 1489990,
            'shipping_cost' => 69790,
            'description' => 'Huawei GR 5 2017',
            'category_id' => 2,
            'ean' => '123456789019',
            'quantity' => 100,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2020',
            'slug' => 'gr5-2020',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 1489990,
            'shipping_cost' => 69790,
            'description' => 'Huawei GR 5 2017',
            'category_id' => 2,
            'ean' => '123456789020',
            'quantity' => 100,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);
    }
}
