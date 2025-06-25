<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariant;
use App\Models\Product;

class ProductVariantSeeder extends Seeder
{
    public function run(): void
    {
        // Adidas Adizero
        $AdidasAdizero = Product::where('name', 'Adidas Adizero')->first();
        if ($AdidasAdizero) {
            ProductVariant::create([
                'product_id' => $AdidasAdizero->product_id,
                'variant_name' => 'Adidas Adizero - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasAdizero->product_id,
                'variant_name' => 'Adidas Adizero - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasAdizero->product_id,
                'variant_name' => 'Adidas Adizero - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasAdizero->product_id,
                'variant_name' => 'Adidas Adizero - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasAdizero->product_id,
                'variant_name' => 'Adidas Adizero - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasAdizero->product_id,
                'variant_name' => 'Adidas Adizero - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Adidas Samba OG Black White Gum
        $AdidasSambaOGBlackWhiteGum = Product::where('name', 'Adidas Samba OG Black White Gum')->first();
        if ($AdidasSambaOGBlackWhiteGum) {
            ProductVariant::create([
                'product_id' => $AdidasSambaOGBlackWhiteGum->product_id,
                'variant_name' => 'Adidas Samba OG Black White Gum - 38',
                'additional_price' => 0,
                'stock_quantity' => 20,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGBlackWhiteGum->product_id,
                'variant_name' => 'Adidas Samba OG Black White Gum - 39',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGBlackWhiteGum->product_id,
                'variant_name' => 'Adidas Samba OG Black White Gum - 40',
                'additional_price' => 49000,
                'stock_quantity' => 10,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGBlackWhiteGum->product_id,
                'variant_name' => 'Adidas Samba OG Black White Gum - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGBlackWhiteGum->product_id,
                'variant_name' => 'Adidas Samba OG Black White Gum - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGBlackWhiteGum->product_id,
                'variant_name' => 'Adidas Samba OG Black White Gum - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Adidas ULTRABOOST LIGHT
        $AdidasULTRABOOSTLIGHT = Product::where('name', 'Adidas ULTRABOOST LIGHT')->first();
        if ($AdidasULTRABOOSTLIGHT) {
            ProductVariant::create([
                'product_id' => $AdidasULTRABOOSTLIGHT->product_id,
                'variant_name' => 'Adidas ULTRABOOST LIGHT - 38',
                'additional_price' => 0,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasULTRABOOSTLIGHT->product_id,
                'variant_name' => 'Adidas ULTRABOOST LIGHT - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasULTRABOOSTLIGHT->product_id,
                'variant_name' => 'Adidas ULTRABOOST LIGHT - 40',
                'additional_price' => 49000,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasULTRABOOSTLIGHT->product_id,
                'variant_name' => 'Adidas ULTRABOOST LIGHT - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasULTRABOOSTLIGHT->product_id,
                'variant_name' => 'Adidas ULTRABOOST LIGHT - 42',
                'additional_price' => 99000,
                'stock_quantity' => 5,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasULTRABOOSTLIGHT->product_id,
                'variant_name' => 'Adidas ULTRABOOST LIGHT - 43',
                'additional_price' => 99000,
                'stock_quantity' => 7,
            ]);
        }

        // Nike Blazer Low 77 Vintage
        $NikeBlazerLow77Vintage = Product::where('name', 'Nike Blazer Low 77 Vintage')->first();
        if ($NikeBlazerLow77Vintage) {
            ProductVariant::create([
                'product_id' => $NikeBlazerLow77Vintage->product_id,
                'variant_name' => 'Nike Blazer Low 77 Vintage - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerLow77Vintage->product_id,
                'variant_name' => 'Nike Blazer Low 77 Vintage - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerLow77Vintage->product_id,
                'variant_name' => 'Nike Blazer Low 77 Vintage - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerLow77Vintage->product_id,
                'variant_name' => 'Nike Blazer Low 77 Vintage - 41',
                'additional_price' => 49000,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerLow77Vintage->product_id,
                'variant_name' => 'Nike Blazer Low 77 Vintage - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerLow77Vintage->product_id,
                'variant_name' => 'Nike Blazer Low 77 Vintage - 43',
                'additional_price' => 99000,
                'stock_quantity' => 11,
            ]);
        }

        // Nike Blazer Mid 77 Vintage
        $NikeBlazerMid77Vintage = Product::where('name', 'Nike Blazer Mid 77 Vintage')->first();
        if ($NikeBlazerMid77Vintage) {
            ProductVariant::create([
                'product_id' => $NikeBlazerMid77Vintage->product_id,
                'variant_name' => 'Nike Blazer Mid 77 Vintage - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerMid77Vintage->product_id,
                'variant_name' => 'Nike Blazer Mid 77 Vintage - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerMid77Vintage->product_id,
                'variant_name' => 'Nike Blazer Mid 77 Vintage - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerMid77Vintage->product_id,
                'variant_name' => 'Nike Blazer Mid 77 Vintage - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerMid77Vintage->product_id,
                'variant_name' => 'Nike Blazer Mid 77 Vintage - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $NikeBlazerMid77Vintage->product_id,
                'variant_name' => 'Nike Blazer Mid 77 Vintage - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Air Jordan 1 Mid
        $AirJordan1Mid = Product::where('name', 'Air Jordan 1 Mid')->first();
        if ($AirJordan1Mid) {
            ProductVariant::create([
                'product_id' => $AirJordan1Mid->product_id,
                'variant_name' => 'Air Jordan 1 Mid - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1Mid->product_id,
                'variant_name' => 'Air Jordan 1 Mid - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1Mid->product_id,
                'variant_name' => 'Air Jordan 1 Mid - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1Mid->product_id,
                'variant_name' => 'Air Jordan 1 Mid - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1Mid->product_id,
                'variant_name' => 'Air Jordan 1 Mid - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1Mid->product_id,
                'variant_name' => 'Air Jordan 1 Mid - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Reebok Royal Techque
       $ReebokRoyalTechque = Product::where('name', 'Reebok Royal Techque')->first();
        if ($ReebokRoyalTechque) {
            ProductVariant::create([
                'product_id' => $ReebokRoyalTechque->product_id,
                'variant_name' => 'Reebok Royal Techque - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokRoyalTechque->product_id,
                'variant_name' => 'Reebok Royal Techque - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokRoyalTechque->product_id,
                'variant_name' => 'Reebok Royal Techque - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokRoyalTechque->product_id,
                'variant_name' => 'Reebok Royal Techque - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokRoyalTechque->product_id,
                'variant_name' => 'Reebok Royal Techque - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokRoyalTechque->product_id,
                'variant_name' => 'Reebok Royal Techque - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Reebok Club C Revenge
        $ReebokClubCRevenge = Product::where('name', 'Reebok Club C Revenge')->first();
        if ($ReebokClubCRevenge) {
            ProductVariant::create([
                'product_id' => $ReebokClubCRevenge->product_id,
                'variant_name' => 'Reebok Club C Revenge - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubCRevenge->product_id,
                'variant_name' => 'Reebok Club C Revenge - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubCRevenge->product_id,
                'variant_name' => 'Reebok Club C Revenge - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubCRevenge->product_id,
                'variant_name' => 'Reebok Club C Revenge - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubCRevenge->product_id,
                'variant_name' => 'Reebok Club C Revenge - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubCRevenge->product_id,
                'variant_name' => 'Reebok Club C Revenge - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Reebok Club C 85 Mule
        $ReebokClubC85Mule = Product::where('name', 'Reebok Club C 85 Mule')->first();
        if ($ReebokClubC85Mule) {
            ProductVariant::create([
                'product_id' => $ReebokClubC85Mule->product_id,
                'variant_name' => 'Reebok Club C 85 Mule - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubC85Mule->product_id,
                'variant_name' => 'Reebok Club C 85 Mule - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubC85Mule->product_id,
                'variant_name' => 'Reebok Club C 85 Mule - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubC85Mule->product_id,
                'variant_name' => 'Reebok Club C 85 Mule - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubC85Mule->product_id,
                'variant_name' => 'Reebok Club C 85 Mule - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokClubC85Mule->product_id,
                'variant_name' => 'Reebok Club C 85 Mule - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Adidas Samba OG White Black Gum
        $AdidasSambaOGWhiteBlackGum = Product::where('name', 'Adidas Samba OG White Black Gum')->first();
        if ($AdidasSambaOGWhiteBlackGum) {
            ProductVariant::create([
                'product_id' => $AdidasSambaOGWhiteBlackGum->product_id,
                'variant_name' => 'Adidas Samba OG White Black Gum - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGWhiteBlackGum->product_id,
                'variant_name' => 'Adidas Samba OG White Black Gum - 39',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGWhiteBlackGum->product_id,
                'variant_name' => 'Adidas Samba OG White Black Gum - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGWhiteBlackGum->product_id,
                'variant_name' => 'Adidas Samba OG White Black Gum - 41',
                'additional_price' => 49000,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGWhiteBlackGum->product_id,
                'variant_name' => 'Adidas Samba OG White Black Gum - 42',
                'additional_price' => 99000,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $AdidasSambaOGWhiteBlackGum->product_id,
                'variant_name' => 'Adidas Samba OG White Black Gum - 43',
                'additional_price' => 99000,
                'stock_quantity' => 0,
            ]);
        }

        // Air Jordan 1 Retro High OG
        $AirJordan1RetroHighOG = Product::where('name', 'Air Jordan 1 Retro High OG')->first();
        if ($AirJordan1RetroHighOG) {
            ProductVariant::create([
                'product_id' => $AirJordan1RetroHighOG->product_id,
                'variant_name' => 'Air Jordan 1 Retro High OG - 38',
                'additional_price' => 0,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1RetroHighOG->product_id,
                'variant_name' => 'Air Jordan 1 Retro High OG - 39',
                'additional_price' => 0,
                'stock_quantity' => 1,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1RetroHighOG->product_id,
                'variant_name' => 'Air Jordan 1 Retro High OG - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1RetroHighOG->product_id,
                'variant_name' => 'Air Jordan 1 Retro High OG - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1RetroHighOG->product_id,
                'variant_name' => 'Air Jordan 1 Retro High OG - 42',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $AirJordan1RetroHighOG->product_id,
                'variant_name' => 'Air Jordan 1 Retro High OG - 43',
                'additional_price' => 99000,
                'stock_quantity' => 8,
            ]);
        }

        // Reebok Zig Kinetica Concep Red
        $ReebokZigKineticaConcepRed = Product::where('name', 'Reebok Zig Kinetica Concep Red')->first();
        if ($ReebokZigKineticaConcepRed) {
            ProductVariant::create([
                'product_id' => $ReebokZigKineticaConcepRed->product_id,
                'variant_name' => 'Reebok Zig Kinetica Concep Red - 38',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokZigKineticaConcepRed->product_id,
                'variant_name' => 'Reebok Zig Kinetica Concep Red - 39',
                'additional_price' => 0,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokZigKineticaConcepRed->product_id,
                'variant_name' => 'Reebok Zig Kinetica Concep Red - 40',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokZigKineticaConcepRed->product_id,
                'variant_name' => 'Reebok Zig Kinetica Concep Red - 41',
                'additional_price' => 49000,
                'stock_quantity' => 8,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokZigKineticaConcepRed->product_id,
                'variant_name' => 'Reebok Zig Kinetica Concep Red - 42',
                'additional_price' => 99000,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $ReebokZigKineticaConcepRed->product_id,
                'variant_name' => 'Reebok Zig Kinetica Concep Red - 43',
                'additional_price' => 99000,
                'stock_quantity' => 0,
            ]);
        }

        $this->command->info('Đã tạo xong các biến thể sản phẩm!');
    }
}


/*
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariant;

class ProductVariantSeeder extends Seeder
{
    public function run(): void
    {
        $file = database_path('seeders/data/product_variants.json');

        if (!file_exists($file)) {
            $this->command->error('❌ Không tìm thấy file product_variants.json');
            return;
        }

        $data = json_decode(file_get_contents($file), true);

        foreach ($data as $variant) {
            unset($variant['variant_id']); // hoặc 'id' nếu bạn dùng id mặc định
            ProductVariant::create($variant);
        }

        $this->command->info('✅ Đã import biến thể sản phẩm từ JSON!');
    }
}
    */