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
    'iPhone 15 Pro Max' => 'products/1gYxvvILeRDVq5gK6uWm74noBAZmRSQMxUlhXSfM.jpg',
    'iPhone 15 Pro' => 'products/1wxwfe2VCrSvSMSwOMQhEluPI3fsKGV0nEct1DFU.jpg',
    'iPhone 15 Plus' => 'products/BO4oER9NuBipf8RmD1peyamPWYMLkBUFlCH1j63f.jpg',
    'iPhone 15' => 'products/DIQffrEFMxF6wtpmoGl8NI4pNApiT65DOZ1SfdS9.jpg',
    'iPhone 14 Pro Max' => 'products/DIQffrEFMxF6wtpmoGl8NI4pNApiT65DOZ1SfdS9.jpg',
'iPhone 14 Pro' => 'products/tecno-camon-40-pro-chinh-hang-1546-azod-300x300-218612.jpg',
'iPhone 14' => 'products/we6tdpfeBjcSqn7lOckbNIGKDrz8biuLV6h8xVtz.jpg',
'iPhone 13' => 'products/XcFluaVuxtwdEAdloNbSa5IvfwIjUXo4IHFClKSb.jpg',
'Samsung Galaxy S24 Ultra' => 'products/tecno-camon-40-8gb-256gb-loi-1-doi-1-12-thang-1720-aehz-300x300-218624.jpg',
'Samsung Galaxy S24+' => 'products/M3adVHkpGgPBqicsGXoqbemaxVuuS9nLMzIS3Dor.jpg',
'Samsung Galaxy S24' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Samsung Galaxy S23 FE' => 'products/Vt1MzC5AhrHgkl7Dytk11WlodMhtBxL1tDx60j7g.jpg',
'Samsung Galaxy A55' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Samsung Galaxy A35' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Samsung Galaxy A25' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Samsung Galaxy A15' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Xiaomi 14 Ultra' => 'products/xiaomi-redmi-note-14-4g-chinh-hang-7615-hdbz-300x300-218399.jpg',
'Xiaomi 14' => 'products/xiaomi-14t-pro-chinh-hang-4781-qhkb-300x300-217910.jpg',
'Xiaomi Redmi Note 13 Pro' => 'products/xiaomi-14t-chinh-hang-7365-fkdy-300x300-217909.jpg',
'Xiaomi Redmi Note 13' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
    'MacBook Pro 16 inch M3' => 'products/1wxwfe2VCrSvSMSwOMQhEluPI3fsKGV0nEct1DFU.jpg',
'MacBook Pro 14 inch M3' => 'products/ZqftzAVyWM6ALPZXSFpBOeGZiB0jhelEKP2raCj9.jpg',
'MacBook Air 15 inch M2' => 'products/z6718268667785_c947026ade72fe32e4c1c58c5e9f8c90.jpg',
'MacBook Air 13 inch M2' => 'products/macbook-air-2023-15-inch-apple-m2-8gb-256gb-chinh-hang-viet-nam-sm-191449.jpg',
'MacBook Air 13 inch M1' => 'products/QjS5sjNO0RMD0HZB9JMyFKlQipvEjaEpCmONY2eX.jpg',
'Dell XPS 13 Plus' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Dell XPS 15' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Dell Inspiron 15 3000' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Dell Vostro 15 3000' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'HP Spectre x360' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'HP Envy x360' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'HP Pavilion 15' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'HP EliteBook 840' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'ASUS ZenBook Pro 15' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'ASUS ZenBook 14' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'ASUS VivoBook S15' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'ASUS ROG Strix G15' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Lenovo ThinkPad X1 Carbon' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Lenovo ThinkPad E14' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Lenovo IdeaPad 3' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Lenovo Legion 5' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Acer Swift 3' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'Acer Aspire 5' => 'products/JikJelwuWGQQbLoMbGPDfpz3lgWFfho3BVzMkzjL.jpg',
'iPad Pro 12.9 inch M2' => 'products/z6718265286013_5f2b8bdcb0cf749bec969a68aeff0c67.jpg',
'iPad Pro 11 inch M2' => 'products/yKS1SysVxgyTpb4HlZKbFYRXwdHsHWnDYSmbkUjY.jpg',
'iPad Air 5' => 'products/WdND6XIStuNMmpjID6VkIn2rg0aXCKQtatfmTdWd.jpg',
'iPad 10.9 inch' => 'products/sSt0Dwlil6KlvD3OB9z6iEObMfXZ7U2c2GDY29BO.jpg',
'iPad mini 6' => 'products/may-tinh-bang-alcatel-tab-3t8-2gb-32gb-chinh-hang-sm-197693.jpg',
'Samsung Galaxy Tab S9 Ultra' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Samsung Galaxy Tab S9+' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Samsung Galaxy Tab S9' => 'products/samsung-galaxy-s25-5347-zook-300x300-218409.jpg',
'Samsung Galaxy Tab S9 FE+' => 'products/samsung-galaxy-a56-5g-chinh-hang-6514-bxcs-300x300-218523.jpg',
'Samsung Galaxy Tab S9 FE' => 'products/samsung-galaxy-a16-4g-chinh-hang-7637-fcmf-300x300-218381.jpg',
'Samsung Galaxy Tab A9+' => 'products/sj7cdG4kpJbFXHCf4IdLHn1fo9tfv3jQPMxQWx9d.jpg',
'Samsung Galaxy Tab A9' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Xiaomi Pad 6' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Xiaomi Pad 5' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Xiaomi Redmi Pad SE' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Lenovo Tab P11 Plus' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Lenovo Tab M10' => 'products/samsung-galaxy-s25-ultra-3601-mcud-300x300-218411.jpg',
'Microsoft Surface Pro 9' => 'products/z6718307559091_20d4edac400baecaa291d9e585ecc293.jpg',
'Microsoft Surface Go 3' => 'products/z6718307559091_20d4edac400baecaa291d9e585ecc293.jpg',
'AirPods Pro 2' => 'products/jdbeWEi5I2ejHbXXFij85eacyoXVgiCv8XOh3pGc.jpg',
'AirPods 3' => 'products/jdbeWEi5I2ejHbXXFij85eacyoXVgiCv8XOh3pGc.jpg',
'AirPods 2' => 'products/jdbeWEi5I2ejHbXXFij85eacyoXVgiCv8XOh3pGc.jpg',
'Sony WH-1000XM5' => 'products/jdbeWEi5I2ejHbXXFij85eacyoXVgiCv8XOh3pGc.jpg',
'Sony WH-1000XM4' => 'products/jdbeWEi5I2ejHbXXFij85eacyoXVgiCv8XOh3pGc.jpg',
'Bose QuietComfort 45' => 'products/jdbeWEi5I2ejHbXXFij85eacyoXVgiCv8XOh3pGc.jpg',
'JBL Live 660NC' => 'products/BJ5YsGUcrCzcupiuZKTrWYmiArW6Hgyyk3aJym2u.jpg',
    'Sạc nhanh Apple 20W' => 'products/BJ5YsGUcrCzcupiuZKTrWYmiArW6Hgyyk3aJym2u.jpg',
'Sạc nhanh Anker 67W' => 'products/sac-anker-powerport-iii-nano-20w-sm-196999.jpg',
'Sạc không dây MagSafe' => 'products/BJ5YsGUcrCzcupiuZKTrWYmiArW6Hgyyk3aJym2u.jpg',
'Cáp Lightning 1m' => 'products/Px9Rj3d37YkywqJUB6LPYA2tSnDBXFArnoIV1MPc.jpg',
'Cáp USB-C 2m' => 'products/Px9Rj3d37YkywqJUB6LPYA2tSnDBXFArnoIV1MPc.jpg',
'Hub USB-C 7 in 1' => 'roducts/Px9Rj3d37YkywqJUB6LPYA2tSnDBXFArnoIV1MPc.jpg',
'Ốp lưng iPhone 15 Pro Max' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
'Ốp lưng Samsung S24 Ultra' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
'Miếng dán cường lực iPhone' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
'Miếng dán PPF MacBook' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
'Apple Pencil 2' => 'products/4W6jviN1RUxAOXHYRQay6tHmQblk6FykYA80kzsW.jpg',
'Magic Keyboard iPad' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
'Chuột Magic Mouse' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
'Bàn phím Magic Keyboard' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
'Giá đỡ laptop nhôm' => 'products/op-lung-kem-but-s-pen-galaxy-z-fold-6-sm-217782.jpg',
    'Đồng hồ' => 'products/4W6jviN1RUxAOXHYRQay6tHmQblk6FykYA80kzsW.jpg',
'Pin dự phòng 20000mAh' => 'products/sac-du-phong-samsung-10000mah-chinh-hang-9843-plqn-300x300-183917.jpg',
];



        // Lấy tất cả categories
        $categories = Category::all();
        
        if ($categories->isEmpty()) {
            $this->command->error('Không có danh mục nào. Vui lòng chạy CategorySeeder trước.');
            return;
        }

        // Dữ liệu sản phẩm thực tế từ thị trường Việt Nam
        $productTemplates = [
            'Điện thoại' => [
                // iPhone Series
                ['name' => 'iPhone 15 Pro Max', 'price' => 29990000],
                ['name' => 'iPhone 15 Pro', 'price' => 24990000],
                ['name' => 'iPhone 15 Plus', 'price' => 22990000],
                ['name' => 'iPhone 15', 'price' => 19990000],
                ['name' => 'iPhone 14 Pro Max', 'price' => 26990000],
                ['name' => 'iPhone 14 Pro', 'price' => 22990000],
                ['name' => 'iPhone 14', 'price' => 17990000],
                ['name' => 'iPhone 13', 'price' => 14990000],
                
                // Samsung Galaxy Series
                ['name' => 'Samsung Galaxy S24 Ultra', 'price' => 29990000],
                ['name' => 'Samsung Galaxy S24+', 'price' => 24990000],
                ['name' => 'Samsung Galaxy S24', 'price' => 19990000],
                ['name' => 'Samsung Galaxy S23 FE', 'price' => 14990000],
                ['name' => 'Samsung Galaxy A55', 'price' => 9990000],
                ['name' => 'Samsung Galaxy A35', 'price' => 7990000],
                ['name' => 'Samsung Galaxy A25', 'price' => 5990000],
                ['name' => 'Samsung Galaxy A15', 'price' => 4490000],
                
                // Xiaomi Series
                ['name' => 'Xiaomi 14 Ultra', 'price' => 24990000],
                ['name' => 'Xiaomi 14', 'price' => 17990000],
                ['name' => 'Xiaomi Redmi Note 13 Pro', 'price' => 6990000],
                ['name' => 'Xiaomi Redmi Note 13', 'price' => 4990000],
            ],
            'Laptop' => [
                // MacBook Series
                ['name' => 'MacBook Pro 16 inch M3', 'price' => 59990000],
                ['name' => 'MacBook Pro 14 inch M3', 'price' => 44990000],
                ['name' => 'MacBook Air 15 inch M2', 'price' => 32990000],
                ['name' => 'MacBook Air 13 inch M2', 'price' => 27990000],
                ['name' => 'MacBook Air 13 inch M1', 'price' => 22990000],
                
                // Dell Series
                ['name' => 'Dell XPS 13 Plus', 'price' => 39990000],
                ['name' => 'Dell XPS 15', 'price' => 49990000],
                ['name' => 'Dell Inspiron 15 3000', 'price' => 12990000],
                ['name' => 'Dell Vostro 15 3000', 'price' => 14990000],
                
                // HP Series
                ['name' => 'HP Spectre x360', 'price' => 42990000],
                ['name' => 'HP Envy x360', 'price' => 24990000],
                ['name' => 'HP Pavilion 15', 'price' => 16990000],
                ['name' => 'HP EliteBook 840', 'price' => 35990000],
                
                // ASUS Series
                ['name' => 'ASUS ZenBook Pro 15', 'price' => 45990000],
                ['name' => 'ASUS ZenBook 14', 'price' => 19990000],
                ['name' => 'ASUS VivoBook S15', 'price' => 14990000],
                ['name' => 'ASUS ROG Strix G15', 'price' => 29990000],
                
                // Lenovo Series
                ['name' => 'Lenovo ThinkPad X1 Carbon', 'price' => 39990000],
                ['name' => 'Lenovo ThinkPad E14', 'price' => 17990000],
                ['name' => 'Lenovo IdeaPad 3', 'price' => 12990000],
                ['name' => 'Lenovo Legion 5', 'price' => 24990000],
                
                // Acer Series
                ['name' => 'Acer Swift 3', 'price' => 16990000],
                ['name' => 'Acer Aspire 5', 'price' => 13990000],
            ],
            'Tablet' => [
                // iPad Series
                ['name' => 'iPad Pro 12.9 inch M2', 'price' => 26990000],
                ['name' => 'iPad Pro 11 inch M2', 'price' => 20990000],
                ['name' => 'iPad Air 5', 'price' => 14990000],
                ['name' => 'iPad 10.9 inch', 'price' => 10990000],
                ['name' => 'iPad mini 6', 'price' => 12990000],
                
                // Samsung Galaxy Tab Series
                ['name' => 'Samsung Galaxy Tab S9 Ultra', 'price' => 24990000],
                ['name' => 'Samsung Galaxy Tab S9+', 'price' => 19990000],
                ['name' => 'Samsung Galaxy Tab S9', 'price' => 15990000],
                ['name' => 'Samsung Galaxy Tab S9 FE+', 'price' => 11990000],
                ['name' => 'Samsung Galaxy Tab S9 FE', 'price' => 8990000],
                ['name' => 'Samsung Galaxy Tab A9+', 'price' => 5990000],
                ['name' => 'Samsung Galaxy Tab A9', 'price' => 3990000],
                
                // Xiaomi Pad Series
                ['name' => 'Xiaomi Pad 6', 'price' => 7990000],
                ['name' => 'Xiaomi Pad 5', 'price' => 6990000],
                ['name' => 'Xiaomi Redmi Pad SE', 'price' => 3990000],
                
                // Lenovo Tab Series
                ['name' => 'Lenovo Tab P11 Plus', 'price' => 6990000],
                ['name' => 'Lenovo Tab M10', 'price' => 3490000],
                
                // Surface Series
                ['name' => 'Microsoft Surface Pro 9', 'price' => 24990000],
                ['name' => 'Microsoft Surface Go 3', 'price' => 12990000],
            ],
            'Phụ kiện' => [
                // Tai nghe không dây
                ['name' => 'AirPods Pro 2', 'price' => 6490000],
                ['name' => 'AirPods 3', 'price' => 4490000],
                ['name' => 'AirPods 2', 'price' => 2990000],
                ['name' => 'Sony WH-1000XM5', 'price' => 7990000],
                ['name' => 'Sony WH-1000XM4', 'price' => 5990000],
                ['name' => 'Bose QuietComfort 45', 'price' => 6990000],
                ['name' => 'JBL Live 660NC', 'price' => 2490000],
                
                // Sạc và cáp
                ['name' => 'Sạc nhanh Apple 20W', 'price' => 590000],
                ['name' => 'Sạc nhanh Anker 67W', 'price' => 1290000],
                ['name' => 'Sạc không dây MagSafe', 'price' => 1190000],
                ['name' => 'Cáp Lightning 1m', 'price' => 490000],
                ['name' => 'Cáp USB-C 2m', 'price' => 390000],
                ['name' => 'Hub USB-C 7 in 1', 'price' => 890000],
                
                // Ốp lưng và bảo vệ
                ['name' => 'Ốp lưng iPhone 15 Pro Max', 'price' => 290000],
                ['name' => 'Ốp lưng Samsung S24 Ultra', 'price' => 250000],
                ['name' => 'Miếng dán cường lực iPhone', 'price' => 190000],
                ['name' => 'Miếng dán PPF MacBook', 'price' => 590000],
                
                // Phụ kiện khác
                ['name' => 'Apple Pencil 2', 'price' => 3290000],
                ['name' => 'Magic Keyboard iPad', 'price' => 7990000],
                ['name' => 'Chuột Magic Mouse', 'price' => 2290000],
                ['name' => 'Bàn phím Magic Keyboard', 'price' => 2990000],
                ['name' => 'Giá đỡ laptop nhôm', 'price' => 490000],
                ['name' => 'Đồng hồ', 'price' => 490000],

                ['name' => 'Pin dự phòng 20000mAh', 'price' => 590000],
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
            'Điện thoại' => [
                'Điện thoại thông minh cao cấp với thiết kế sang trọng, hiệu năng mạnh mẽ và camera chất lượng cao.',
                'Smartphone flagship với công nghệ tiên tiến, màn hình sắc nét và pin bền bỉ cả ngày.',
                'Thiết kế premium, xử lý mượt mà mọi tác vụ từ cơ bản đến chuyên nghiệp.',
            ],
            'Laptop' => [
                'Laptop cao cấp với hiệu năng mạnh mẽ, phù hợp cho công việc và sáng tạo chuyên nghiệp.',
                'Máy tính xách tay thiết kế mỏng nhẹ, pin lâu và màn hình sắc nét.',
                'Laptop đa năng với cấu hình mạnh, bàn phím thoải mái và kết nối đa dạng.',
            ],
            'Tablet' => [
                'Máy tính bảng cao cấp với màn hình lớn, hiệu năng mạnh mẽ cho học tập và làm việc.',
                'Tablet đa năng với thiết kế mỏng nhẹ, pin bền và trải nghiệm giải trí tuyệt vời.',
                'Máy tính bảng premium hỗ trợ bút cảm ứng và bàn phím rời cho năng suất cao.',
            ],
            'Phụ kiện' => [
                'Phụ kiện chính hãng với chất lượng cao, thiết kế tinh tế và độ bền vượt trội.',
                'Accessory premium tương thích hoàn hảo với các thiết bị Apple và Android.',
                'Phụ kiện thông minh giúp nâng cao trải nghiệm sử dụng thiết bị của bạn.',
            ]
        ];

        $categoryDescriptions = $descriptions[$categoryName] ?? $descriptions['Phụ kiện'];
        $baseDescription = $faker->randomElement($categoryDescriptions);
        
        $details = [
            "✅ Bảo hành chính hãng 12 tháng",
            "✅ Giao hàng miễn phí toàn quốc",
            "✅ Hỗ trợ trả góp 0% lãi suất",
            "✅ Đổi trả trong 15 ngày",
            "✅ Tư vấn kỹ thuật 24/7"
        ];
        
        return $baseDescription . "\n\n" . implode("\n", $faker->randomElements($details, 3));
    }
}
