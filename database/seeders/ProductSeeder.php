<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        
        // Thêm mới một hình ảnh mặc định cho sản phẩm

        $imageMap = [
    
    //
'Adidas Adizero' => 'products/adidas1.webp',
'Adidas Samba OG Black White Gum' => 'products/adidas2.webp',
'Adidas ULTRABOOST LIGHT' => 'products/adidas3.webp',
'Adidas Samba OG White Black Gum' => 'products/adidas4.webp',
'Adidas EQ21 Run' => 'products/adidas5.webp',
'Adidas Swift Run X' => 'products/adidas6.webp',
'Adidas Ultraboost 4.0' => 'products/adidas7.webp',
'Adidas NMD R1' => 'products/adidas8.webp',
'Adidas Sobakov White' => 'products/adidas9.webp',
'Adidas Sobakov Black' => 'products/adidas10.webp',
'Adidas Campus' => 'products/adidas11.webp',
'Adidas Swift Run' => 'products/adidas12.webp',

'Nike Blazer Low 77 Vintage' => 'products/nike1.webp',
'Nike Blazer Mid 77 Vintage' => 'products/nike2.webp',
'Air Jordan 1 Mid' => 'products/nike3.webp',
'Air Jordan 1 Retro High OG' => 'products/nike4.webp',
'Jordan 1 Low Chicago Flip' => 'products/nike5.webp',
'Nike Air Max SC' => 'products/nike6.webp',
'Nike Dunk High Up Varsity Maize' => 'products/nike7.webp',
'Nike Waffle Trainer 2 White Black' => 'products/nike8.webp',
'Nike Air Force 1 07 All White' => 'products/nike9.webp',
'Nike Revolution 6 Next Nature' => 'products/nike10.webp',
'Jordan 1s University Blue' => 'products/nike11.webp',
'Jordan 1 Low White Wolf Grey' => 'products/nike12.webp',

'Reebok Royal Techque' => 'products/vans1.webp',
'Reebok Club C Revenge' => 'products/rb2.webp',
'Reebok Club C 85 Mule' => 'products/rb3.webp',
'Reebok Zig Kinetica Concep Red' => 'products/rb4.webp',
'Reebok Zig Kinetica Concep Green' => 'products/rb5.webp',
'Reebok Club C' => 'products/rb6.webp',
'Reebok Interval Royal' => 'products/rb7.webp',
'Reebok Beyaz Classic Leather' => 'products/rb8.webp',
'Reebok Instapump Fury Tech' => 'products/rb9.webp',
'Reebok Aztrek Black' => 'products/rb10.webp',
'Reebok Aztrek White' => 'products/rb11.webp',
'Reebok Aztrek White Blue' => 'products/rb12.webp',

'Vans Authentic Chill Vibes' => 'products/vans1.webp',
'Vans Style 36' => 'products/vans2.webp',
'Vans Knu Skool' => 'products/vans3.webp',
'Vans Old Skool Classic Black' => 'products/vans4.webp',
'Vans Old Skool VR3' => 'products/vans5.webp',
'Vans Knu Skool Brown' => 'products/vans6.webp',
'Vans Style 36 Marshmallow' => 'products/vans7.webp',
'Vans MN Skate Old Skool' => 'products/vans8.webp',
'Vans HT' => 'products/vans1.webp',
'Vans Style 36' => 'products/vans2.webp',
'Vans MN Skate Old Skool' => 'products/vans8.webp',
'Vans Knu Skool' => 'products/vans3.webp',

'Nike Shoe Box Bag (12L)' => 'products/pk1.webp',
'Tất Nike Everyday Cushioned' => 'products/pk2.webp',
'NEW YORK YANKEES WAIST BAG' => 'products/pk3.webp',
'Linear Core Waist Bag Pink' => 'products/pk4.webp',
'Linear Core Waist Bag Blue' => 'products/pk5.webp',
'Tất Nike Everyday Plus Cushioned' => 'products/pk9.webp',
'Bộ 3 Đôi Tất Cao Cổ Có Đệm' => 'products/pk10.webp',
'Tất Adidas Cổ Trung' => 'products/pk11.webp',
'Tất Adidas Cổ Thấp' => 'products/pk12.webp',
'Túi Duffel 4ATHLTS Cỡ Vừa' => 'products/pk13.webp',
'Mũ Tour 3 Sọc' => 'products/pk14.webp',
'Túi Tròn Classic Adicolor' => 'products/pk15.webp',

'Bộ vệ sinh giày chuyên sâu' => 'products/pk8.webp',
'Bộ vệ sinh giày cơ bản' => 'products/pk7.webp',
'Odor Protector' => 'products/pk6.webp',
'Sneaker Protector' => 'products/dd1.webp',
'Leather Care' => 'products/dd2.webp',
'Sneaker Cleaner' => 'products/dd3.webp',

];



        // Lấy tất cả categories
        $categories = Category::all();
        
        if ($categories->isEmpty()) {
            $this->command->error('Không có danh mục nào. Vui lòng chạy CategorySeeder trước.');
            return;
        }

        // Dữ liệu sản phẩm thực tế từ thị trường Việt Nam
        $productTemplates = [
            'ADIDAS' => [
                ['name' => 'Adidas Adizero', 'price' => 1699000],
                ['name' => 'Adidas Samba OG Black White Gum', 'price' => 2350000],
                ['name' => 'Adidas ULTRABOOST LIGHT', 'price' => 1695000],
                ['name' => 'Adidas Samba OG White Black Gum', 'price' => 2550000],
                ['name' => 'Adidas EQ21 Run', 'price' => 2500000],
                ['name' => 'Adidas Swift Run X', 'price' => 1490000],
                ['name' => 'Adidas Ultraboost 4.0', 'price' => 3900000],
                ['name' => 'Adidas NMD R1', 'price' => 2890000],
                ['name' => 'Adidas Sobakov White', 'price' => 2350000],
                ['name' => 'Adidas Sobakov Black', 'price' => 2450000],
                ['name' => 'Adidas Campus', 'price' => 1850000],
                ['name' => 'Adidas Swift Run', 'price' => 1750000],

            ],

            'NIKE' => [
                ['name' => 'Nike Blazer Low 77 Vintage', 'price' => 1599000],
                ['name' => 'Nike Blazer Mid 77 Vintage', 'price' => 1349000],
                ['name' => 'Air Jordan 1 Mid', 'price' => 3900000],
                ['name' => 'Air Jordan 1 Retro High OG', 'price' => 6500000],
                ['name' => 'Jordan 1 Low Chicago Flip', 'price' => 2799000],
                ['name' => 'Nike Air Max SC', 'price' => 1780000],
                ['name' => 'Nike Dunk High Up Varsity Maize', 'price' => 2690000],
                ['name' => 'Nike Waffle Trainer 2 White Black', 'price' => 1299000],
                ['name' => 'Nike Air Force 1 07 All White', 'price' => 2145000],
                ['name' => 'Nike Revolution 6 Next Nature', 'price' => 1250000],
                ['name' => 'Jordan 1s University Blue', 'price' => 10500000],
                ['name' => 'Jordan 1 Low White Wolf Grey', 'price' => 3799000],
                
            ],

            'REEBOK' => [
                ['name' => 'Reebok Royal Techque', 'price' => 2699000],
                ['name' => 'Reebok Club C Revenge', 'price' => 2099000],
                ['name' => 'Reebok Club C 85 Mule', 'price' => 1499000],
                ['name' => 'Reebok Zig Kinetica Concep Red', 'price' => 1099000],
                ['name' => 'Reebok Zig Kinetica Concep Green', 'price' => 1299000],
                ['name' => 'Reebok Club C', 'price' => 2499000],
                ['name' => 'Reebok Interval Royal', 'price' => 1999000],
                ['name' => 'Reebok Beyaz Classic Leather', 'price' => 1599000],
                ['name' => 'Reebok Instapump Fury Tech', 'price' => 1199000],
                ['name' => 'Reebok Aztrek Black', 'price' => 899000],
                ['name' => 'Reebok Aztrek White', 'price' => 899000],
                ['name' => 'Reebok Aztrek White Blue', 'price' => 999000],
                
            ],
        
            'Tất & Phụ kiện' => [
                ['name' => 'Nike Shoe Box Bag (12L)', 'price' => 1590000],
                ['name' => 'Tất Nike Everyday Cushioned', 'price' => 299000],
                ['name' => 'NEW YORK YANKEES WAIST BAG', 'price' => 299000],
                ['name' => 'Linear Core Waist Bag Pink', 'price' => 799000],
                ['name' => 'Linear Core Waist Bag Blue', 'price' => 799000],
                ['name' => 'Tất Nike Everyday Plus Cushioned', 'price' => 299000],
                ['name' => 'Bộ 3 Đôi Tất Cao Cổ Có Đệm', 'price' => 249000],
                ['name' => 'Tất Adidas Cổ Trung', 'price' => 249000],
                ['name' => 'Tất Adidas Cổ Thấp', 'price' => 129000],
                ['name' => 'Túi Duffel 4ATHLTS Cỡ Vừa', 'price' => 1190000],
                ['name' => 'Mũ Tour 3 Sọc', 'price' => 490000],
                ['name' => 'Túi Tròn Classic Adicolor', 'price' => 3900000],
                
            ],

            'Sneaker Cleaner' => [
                ['name' => 'Bộ vệ sinh giày chuyên sâu', 'price' => 249000],
                ['name' => 'Bộ vệ sinh giày cơ bản', 'price' => 199000],
                ['name' => 'Odor Protector', 'price' => 99000],
                ['name' => 'Sneaker Protector', 'price' => 109000],
                ['name' => 'Leather Care', 'price' => 129000],
                ['name' => 'Sneaker Cleaner', 'price' => 149000],
                
            ]
        ];

        foreach ($categories as $category) {
            $categoryName = $category->category_name;
            $templates = $productTemplates[$categoryName] ?? [];

            foreach ($templates as $template) {

$image = $imageMap[$template['name']] ?? null;


                Product::create([
                    'name' => $template['name'],
                    'description' => $this->generateDescription($template['name'], $categoryName, $faker),
                    'price' => $template['price'],
                    'stock_quantity' => $faker->numberBetween(10, 100),
                    'category_id' => $category->category_id,
      //              'image_url' => null,
                    'image_url' => $image,
                ]);
            }
            
            $this->command->info("Đã tạo " . count($templates) . " sản phẩm cho danh mục: {$categoryName}");
        }
        
        $this->command->info('Đã tạo xong tất cả sản phẩm!');
    }

    private function generateDescription($productName, $categoryName, $faker)
    {
        $descriptions = [
            'NIKE' => [
                'Nike, Just do it.',
                'Giày tốt, chạy xa, Nike đồng hành cùng bạn.',
                'Tự tin bứt phá với Nike mỗi ngày.',
            ],
            'ADIDAS' => [
                'Impossible is nothing, Không gì là không thể.',
                'Adidas, Vượt giới hạn cùng bạn.',
                'Từng bước chạy, từng nhịp thở, Adidas luôn bên bạn.',
            ],
            'REEBOK' => [
                'Reebok bứt phá từng bước chạy.',
                'Chạy xa hơn mạnh mẽ hơn cùng giày Reebok.',
                'Reebok đôi giày của sự dẻo dai và phong cách.',
            ],
            'Tất & Phụ kiện' => [
                'Phụ kiện chính hãng với chất lượng cao, thiết kế tinh tế.',
                'Accessory premium.',
                'Phụ kiện thông minh giúp nâng cao trải nghiệm.',
            ]
        ];

        $categoryDescriptions = $descriptions[$categoryName] ?? $descriptions['Tất & Phụ kiện'];
        $baseDescription = $faker->randomElement($categoryDescriptions);
        
        $details = [
            "✅ Bảo hành chính hãng 12 tháng",
            "✅ Giao hàng miễn phí toàn quốc",
            "✅ Đổi trả trong 7 ngày",
            "✅ Tư vấn 24/7"
        ];
        
        return $baseDescription . "\n\n" . implode("\n", $faker->randomElements($details, 3));
    }
}
