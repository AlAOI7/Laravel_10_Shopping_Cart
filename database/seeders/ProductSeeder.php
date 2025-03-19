<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // استخدام Faker لإنشاء بيانات عشوائية
        $faker = Faker::create();

        // إضافة بيانات افتراضية لمنتج واحد
        DB::table('products')->insert([
            'product_name' => $faker->word,
            'product_description' => $faker->sentence,
            'photo' => 'default_image.jpg', // صورة افتراضية
            'price' => $faker->randomFloat(2, 10, 500), // سعر عشوائي بين 10 و 500
        ]);

        // إذا أردت إضافة أكثر من منتج
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'product_name' => $faker->word,
                'product_description' => $faker->sentence,
                'photo' => 'default_image.jpg',
                'price' => $faker->randomFloat(2, 10, 500),
            ]);
        }
    }
}
