<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'CodeLean',
                'email' => 'gc123580@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
                'status'=> 1,
                'token'=> '',
                'description' => null,
            ],
            [
                'id' => 2,
                'first_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 1,
                'status'=> 1,
                'token'=> '',
                'description' => null,
            ],
            [
                'id' => 3,
                'first_name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'status'=> 1,
                'token'=> '',
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'first_name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'status'=> 1,
                'token'=> '',
                'description' => null,
            ],
            [
                'id' => 5,
                'first_name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'status'=> 1,
                'token'=> '',
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => 'The Personality Trait That Makes People Happier',
                'image' => 'blog-1.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'This was one of our first days in Hawaii last week.',
                'image' => 'blog-2.jpg',
                'category' => 'Do Quang Tiep',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'image' => 'blog-3.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'image' => 'blog-4.jpg',
                'category' => 'Do Quang Tiep',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Absolue collection. The Lancome team has been one???',
                'image' => 'blog-5.jpg',
                'category' => 'MODEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Writing has always been kind of therapeutic for me',
                'image' => 'blog-6.jpg',
                'category' => 'Do Quang Tiep',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Deuncoolstudios',
            ]
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'T-Shirt',
            ],
            [
                'name' => 'Hoddie',
            ],
            [
                'name' => '??o kho??c n???',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => '??o kho??c n??? form r???ng hoodiezip ',
                'description' => 'DEUNCOOL STUDIOS HOODIE<br>

                Ch???t li???u : N??? cotton 100% (l&oacute;t b&ocirc;ng).<br>
                
                &ldquo; V???i tr?????ng h???p &aacute;o ch???t b???n h&atilde;y nh???n tin cho shop ????? shop h??? tr??? ?????i size cho b???n nh&eacute;, ?????ng v???i ??&aacute;nh gi&aacute; s???n ph???m, t???i shop l???m ??? ????&ldquo;<br>
                
                _________________<br>
                
                ???? H?????NG D???N S??? D???NG:<br>
                
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d&iacute;nh l&ocirc;ng khi mang do s???n ph???m n??? m???i<br>
                
                - Gi???t m???t trong ????? b???o qu???n h&igrave;nh in, th&ecirc;u gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                _________________<br>
                
                FORM &Aacute;O:<br>
                
                -Size M: D&agrave;i 58cm<br>
                
                -Size M: D&agrave;i 63cm<br>
                
                -Size L: D&agrave;i 68cm<br>
                
                -Size XL: D&agrave;i 72cm<br>
                
                &reg;??? Designed by UNCOOL TEAMS.<br>
                
                ???? Instagram: @Deuncoolstudios.<br>
                
                AVAILABLE NOW ????<br>
                
                Mua ngay ??i k???o h???t l???nh b&acirc;y gi??? #hoodie #hoodiezip #hoodieformrong #aokhoac #aolanh #aohoodiezipdep<br>',
                'content' => 'Ch???t li???u n??? b??ng si??u ???m DEUNCOOL',
                'price' => 420000,
                'qty' => 20,
                'discount' => 320000,
                'weight' => 1.3,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 2,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name'=>'??o hoodie n??? b??ng DEUNCOOL BASIC ver 1.0 ',
                'description' => '&hearts;??? CH&Agrave;O C???U ??? !<br>

                M???U HOODIE B&Ecirc;N SHOP CH??? C&Ograve;N L??? V&Agrave;I CHI???C - V&Agrave; B&Ecirc;N SHOP M???I V??? M???U HOODIEZIP B???N NHA - HOODIEZIP TH&Igrave; V???N S??? C&Oacute; TAG M?? V&Agrave; H&Igrave;NH IN SAU L??NG NH?? &Aacute;O HOODIE C???U NHA - M???T TR?????C HOODIEZIP S??? L&Agrave; TR??N GI???NG ???NH ??? - V&Igrave; HOODIEZIP M???I V??? N&Ecirc;N CH??A C&Oacute; ???NH M???U MONG C???U TH&Ocirc;NG C???M ??? &hearts;??? C???U ?????C K??? PH???N PH&Acirc;N LO???I S???N PH???M ????? TR&Aacute;NH ?????T NH???M NHA<br>
                
                ???? DEUNCOOL STUDIOS HOODIE<br>
                
                - M&agrave;u Grey Light Ch???t li???u : N??? cotton 100% (l&oacute;t b&ocirc;ng).<br>
                
                Size: M/L/XL.<br>
                
                &ldquo; V???i tr?????ng h???p &aacute;o ch???t b???n h&atilde;y nh???n tin cho shop ????? shop h??? tr??? ?????i size cho b???n nh&eacute;, ?????ng v???i ??&aacute;nh gi&aacute; s???n ph???m, t???i shop l???m ??? ????&ldquo;<br>
                
                - N??m nay shop d&ugrave;ng d&acirc;y b???n tr&ograve;n gi???ng trong video nh&eacute; &hearts;???<br>
                
                _________________<br>
                
                ???? H?????NG D???N S??? D???NG:<br>
                
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d&iacute;nh l&ocirc;ng khi mang do s???n ph???m n??? m???i<br>
                
                - Gi???t m???t trong ????? b???o qu???n h&igrave;nh in, th&ecirc;u gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                _________________<br>
                
                FORM &Aacute;O:<br>
                
                -Size M: D&agrave;i 63cm<br>
                
                -Size L: D&agrave;i 68cm<br>
                
                -Size XL: D&agrave;i 72cm<br>
                
                &reg;??? Designed by UNCOOL TEAMS.<br>
                
                ???? Instagram: @Deuncoolstudios.<br>
                
                AVAILABLE NOW ????<br>
                
                Mua ngay ??i k???o h???t l???nh b&acirc;y gi???<br>',
                'content' => '- M??u Grey Light - 100% cotton m???m m???n cho nam n??? - ???NH TH???T',
                'price' => 420000,
                'qty' => 20,
                'discount' => 320000,
                'weight' => 1.3,
                'sku' => 00022,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 3,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => '??o thun tay l??? form r???ng DEUNCOOL Basic Tee Drop 1.0 ',
                'description' => 'DEUNCOOL BASIC TEE<br>

                - M&agrave;u Tr???ng Ch???t li???u : Cotton 100%<br>
                
                Size: L/XL.<br>
                
                _________________<br>
                
                FORM &Aacute;O:<br>
                
                - Size L: T??? 1m50 - 1m65<br>
                
                - Size XL: T??? 1m65 - 1m85<br>
                
                _________________<br>
                
                ???? H?????NG D???N S??? D???NG:<br>
                
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d&iacute;nh l&ocirc;ng khi mang do s???n ph???m v???i m???i<br>
                
                - Gi???t m???t trong ????? b???o qu???n h&igrave;nh in, th&ecirc;u gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m &reg;??? Designed by UNCOOL TEAMS. ???? Instagram: @Deuncoolstudios. ????CH&Iacute;NH S&Aacute;CH ?????I H&Agrave;NG:<br>
                
                - H??? tr??? ?????i h&agrave;ng trong v&ograve;ng 3 ng&agrave;y t&iacute;nh t??? ng&agrave;y nh???n ???????c s???n ph???m.<br>
                
                - Kh&ocirc;ng &aacute;p d???ng v???i c&aacute;c s???n ph???m khi mua flashsale.<br>
                
                - ??i???u ki???n:<br>
                
                + S???n ph???m c&oacute; l???i t??? nh&agrave; s???n xu???t (Ph???n h???i shop k&egrave;m video m??? h&agrave;ng ngay khi nh???n s???n ph???m)<br>
                
                + Ch??? h??? tr??? ?????i h&agrave;ng khi s???n ph???m ch??a ???????c s??? d???ng c&ograve;n nguy&ecirc;n tem v&agrave; tag gi&aacute; c???a c???a h&agrave;ng<br>
                
                + Ch??? &aacute;p d???ng ?????i ?????i v???i s???n ph???m mua nguy&ecirc;n gi&aacute; v&agrave; ch??? h??? tr??? ?????i 01 l???n duy nh???t.<br>
                
                + S???n ph???m mu???n ?????i c&oacute; gi&aacute; t????ng ??????ng ho???c l???n h??n<br>
                
                AVAILABLE NOW ???? Direct me: 0334496975<br>',
                'content' => "- M??u Tr???ng - In UNC.STUDIOS",
                'price' => 235000,
                'qty' => 20,
                'discount' => 149000,
                'weight' => 0.4,
                'sku' => '00013',
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 4,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => '??o thun tay l??? form r???ng DEUNCOOL Basic Tee Drop 1.0 ',
                'description' => 'DEUNCOOL BASIC TEE<br>

                - M&agrave;u ??en Ch???t li???u : Cotton 100%<br>
                
                Size: L/XL.<br>
                
                _________________<br>
                
                FORM &Aacute;O:<br>
                
                - Size L: T??? 1m50 - 1m65<br>
                
                - Size XL: T??? 1m65 - 1m85<br>
                
                _________________<br>
                
                ???? H?????NG D???N S??? D???NG:<br>
                
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d&iacute;nh l&ocirc;ng khi mang do s???n ph???m v???i m???i<br>
                
                - Gi???t m???t trong ????? b???o qu???n h&igrave;nh in, th&ecirc;u gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m &reg;??? Designed by UNCOOL TEAMS. ???? Instagram: @Deuncoolstudios. ????CH&Iacute;NH S&Aacute;CH ?????I H&Agrave;NG:<br>
                
                - H??? tr??? ?????i h&agrave;ng trong v&ograve;ng 3 ng&agrave;y t&iacute;nh t??? ng&agrave;y nh???n ???????c s???n ph???m.<br>
                
                - Kh&ocirc;ng &aacute;p d???ng v???i c&aacute;c s???n ph???m khi mua flashsale.<br>
                
                - ??i???u ki???n:<br>
                
                + S???n ph???m c&oacute; l???i t??? nh&agrave; s???n xu???t (Ph???n h???i shop k&egrave;m video m??? h&agrave;ng ngay khi nh???n s???n ph???m)<br>
                
                + Ch??? h??? tr??? ?????i h&agrave;ng khi s???n ph???m ch??a ???????c s??? d???ng c&ograve;n nguy&ecirc;n tem v&agrave; tag gi&aacute; c???a c???a h&agrave;ng<br>
                
                + Ch??? &aacute;p d???ng ?????i ?????i v???i s???n ph???m mua nguy&ecirc;n gi&aacute; v&agrave; ch??? h??? tr??? ?????i 01 l???n duy nh???t.<br>
                
                + S???n ph???m mu???n ?????i c&oacute; gi&aacute; t????ng ??????ng ho???c l???n h??n<br>
                
                AVAILABLE NOW ???? Direct me: 0334496975<br>',
                'content' => '- M??u Tr???ng ??en - Logo Signature',
                'price' => 215000,
                'qty' => 20,
                'discount' => 149000,
                'weight' => 0.3,
                'sku' => 000021,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => "TRAP DEUNCOOL STUDIOS -  [ DT02 ]",
                'description' => 'DEUNCOOL BASIC TEE<br>

                - M&agrave;u ??en Ch???t li???u : Cotton 100%<br>
                
                Size: L/XL.<br>
                
                _________________<br>
                
                FORM &Aacute;O:<br>
                
                - Size L: T??? 1m50 - 1m65<br>
                
                - Size XL: T??? 1m65 - 1m85<br>
                
                _________________<br>
                
                ???? H?????NG D???N S??? D???NG:<br>
                
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d&iacute;nh l&ocirc;ng khi mang do s???n ph???m v???i m???i<br>
                
                - Gi???t m???t trong ????? b???o qu???n h&igrave;nh in, th&ecirc;u gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m &reg;??? Designed by UNCOOL TEAMS. ???? Instagram: @Deuncoolstudios. ????CH&Iacute;NH S&Aacute;CH ?????I H&Agrave;NG:<br>
                
                - H??? tr??? ?????i h&agrave;ng trong v&ograve;ng 3 ng&agrave;y t&iacute;nh t??? ng&agrave;y nh???n ???????c s???n ph???m.<br>
                
                - Kh&ocirc;ng &aacute;p d???ng v???i c&aacute;c s???n ph???m khi mua flashsale.<br>
                
                - ??i???u ki???n:<br>
                
                + S???n ph???m c&oacute; l???i t??? nh&agrave; s???n xu???t (Ph???n h???i shop k&egrave;m video m??? h&agrave;ng ngay khi nh???n s???n ph???m)<br>
                
                + Ch??? h??? tr??? ?????i h&agrave;ng khi s???n ph???m ch??a ???????c s??? d???ng c&ograve;n nguy&ecirc;n tem v&agrave; tag gi&aacute; c???a c???a h&agrave;ng<br>
                
                + Ch??? &aacute;p d???ng ?????i ?????i v???i s???n ph???m mua nguy&ecirc;n gi&aacute; v&agrave; ch??? h??? tr??? ?????i 01 l???n duy nh???t.<br>
                
                + S???n ph???m mu???n ?????i c&oacute; gi&aacute; t????ng ??????ng ho???c l???n h??n<br>
                
                AVAILABLE NOW ???? Direct me: 0334496975<br>',
                'content' => null,
                'price' => 250000,
                'qty' => 20,
                'discount' => 179000,
                'weight' => 0.3,
                'sku' => 000213,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => '??o Thun Tay L??? Deuncool Basic Organ Form R???ng Drop 2.0',
                'description' => 'DEUNCOOL BASIC TEE - M??u Tr???ng / ??en<br>

                - M&agrave;u ??en Ch???t li???u : Cotton 100%<br>
                
                Size: L/XL.<br>
                
                _________________<br>
                
                FORM &Aacute;O:<br>
                
                - Size L: T??? 1m50 - 1m65<br>
                
                - Size XL: T??? 1m65 - 1m85<br>
                
                _________________<br>
                
                ???? H?????NG D???N S??? D???NG:<br>
                
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m<br>
                
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d&iacute;nh l&ocirc;ng khi mang do s???n ph???m v???i m???i<br>
                
                - Gi???t m???t trong ????? b???o qu???n h&igrave;nh in, th&ecirc;u gi???t b???ng tay ????? gi??? ch???t l?????ng, m&agrave;u s???c &amp; ????? b???n c???a s???n ph???m &reg;??? Designed by UNCOOL TEAMS. ???? Instagram: @Deuncoolstudios. ????CH&Iacute;NH S&Aacute;CH ?????I H&Agrave;NG:<br>
                
                - H??? tr??? ?????i h&agrave;ng trong v&ograve;ng 3 ng&agrave;y t&iacute;nh t??? ng&agrave;y nh???n ???????c s???n ph???m.<br>
                
                - Kh&ocirc;ng &aacute;p d???ng v???i c&aacute;c s???n ph???m khi mua flashsale.<br>
                
                - ??i???u ki???n:<br>
                
                + S???n ph???m c&oacute; l???i t??? nh&agrave; s???n xu???t (Ph???n h???i shop k&egrave;m video m??? h&agrave;ng ngay khi nh???n s???n ph???m)<br>
                
                + Ch??? h??? tr??? ?????i h&agrave;ng khi s???n ph???m ch??a ???????c s??? d???ng c&ograve;n nguy&ecirc;n tem v&agrave; tag gi&aacute; c???a c???a h&agrave;ng<br>
                
                + Ch??? &aacute;p d???ng ?????i ?????i v???i s???n ph???m mua nguy&ecirc;n gi&aacute; v&agrave; ch??? h??? tr??? ?????i 01 l???n duy nh???t.<br>
                
                + S???n ph???m mu???n ?????i c&oacute; gi&aacute; t????ng ??????ng ho???c l???n h??n<br>
                
                AVAILABLE NOW ???? Direct me: 0334496975<br>',
                'content' => null,
                'price' => 250000,
                'qty' => 20,
                'discount' => 179000,
                'weight' => 0.3,
                'sku' => 00210,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => '??o kho??c n??? x??m Basic ver 2.0 ',
                'description' => 'Hoodie Zip Basic ????? available<br>
                Grey <br>
                Ch???t li???u : N??? cotton 100% (l??t b??ng).<br>
                Size: Oversize<br>
                _________________<br>
                ????  H?????NG D???N S??? D???NG: <br>
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m <br>
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d??nh l??ng khi mang do s???n ph???m n??? m???i <br>
                - Gi???t m???t trong ????? b???o qu???n h??nh in, th??u gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m<br>
                _________________<br>
                
                FORM ??O:<br>         
                - D??i 72cm<br>
                - Form d?????i 70kg<br>
                
                ????? Designed by UNCOOL TEAMS.<br>
                ???? Instagram: @Deuncoolstudios.<br>
                AVAILABLE NOW<br>
                ???? Mua ngay ??i k???o h???t l???nh b??y gi???.',
                'content' => 'M?? 2 l???p form r???ng oversize DEUNCOOL BASIC',
                'price' => 380000,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.6,
                'sku' => 02134,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => '??o hoodie basic form r???ng DEUNCOOL VER 2',
                'description' => 'Hoodie Zip Basic ????? available<br>
                Grey <br>
                Ch???t li???u : N??? cotton 100% (l??t b??ng).<br>
                Size: Oversize<br>
                _________________<br>
                ????  H?????NG D???N S??? D???NG: <br>
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m <br>
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d??nh l??ng khi mang do s???n ph???m n??? m???i <br>
                - Gi???t m???t trong ????? b???o qu???n h??nh in, th??u gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m<br>
                _________________<br>
                
                FORM ??O:<br>   
                - D??i 72cm<br>
                - Form d?????i 70kg<br>
                
                ????? Designed by UNCOOL TEAMS.<br>
                ???? Instagram: @Deuncoolstudios.<br>
                AVAILABLE NOW<br>
                ???? Mua ngay ??i k???o h???t l???nh b??y gi???<br>',
                'content' => null,
                'price' => 380000,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.5,
                'sku' => 21314,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => '??o hoodie n??? b??ng DEUNCOOL BASIC ver 1.0',
                'description' => 'DEUNCOOL STUDIOS HOODIE - M??u Black<br>
                Ch???t li???u : N??? cotton 100% (l??t b??ng).<br>
                Size: M/L/XL.<br>
                _________________<br>
                ????  H?????NG D???N S??? D???NG: <br>
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m <br>
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d??nh l??ng khi mang do s???n ph???m n??? m???i <br>
                - Gi???t m???t trong ????? b???o qu???n h??nh in, th??u gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m<br>
                _________________<br>
                
                FORM ??O:    <br>         
                -Size M: Ngang 60cm, D??i 65cm<br>
                -Size L: Ngang 64cm, D??i 67cm<br>
                -Size XL: Ngang 70cm, D??i 74cm<br>
                
                ????? Designed by UNCOOL TEAMS.<br>
                ???? Instagram: @Deuncoolstudios.<br>
                AVAILABLE NOW<br>
                ???? Mua ngay ??i k???o h???t l???nh b??y gi???<br>',
                'content' => 'M??u Black - 100% cotton m???m m???n cho nam n??? - ???NH TH???T',
                'price' => 420000,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.3,
                'sku' => 213124,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 10,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => '??o hoodie n??? b??ng DEUNCOOL BASIC ver 1.0',
                'description' => '??o Hoodie M??u Xanh L???c C???c L???, Ch???t Li??u N??? B??ng ???m ??p, Form R???ng R???t Vai<br>
                _________________<br>
                
                Ch???t li???u : N??? b??ng cotton d??y m???n, ???m <br>
                K??ch c??? : M, L, XL<br>
                ???????c thi???t k??? ?????c ????o cho ng?????i m???c, khi m???c l??n c???m gi??c m??t m??? tho???i m??i t??? tin s???i b?????c khi ??i ra ngo??i, ??i ch??i du l???ch<br>
                _________________<br>
                
                CAM K???T C???A SHOP:???<br>
                + Cam k???t 100% ?????i h??ng do l???i shop v?? l???i s???n ph???m.<br>
                + N???u c?? b???t c??? ??i???u g??  kh??ng h??i l??ng v??? s???n ph???m, kh??ch vui l??ng li??n h??? v???i shop tr?????c khi ????nh gi?? shop nh??. Shop s??? s???p x???p ?????i, tr??? h??ng ho???c ho??n ti???n cho kh??ch ???!<br>
                + M???i ng?????i nh??? theo d??i shop ????? c???p nh???t m???u m???i v?? ??u ????i nhanh nh???t nha! ????<br>
                
                ????? Designed by UNCOOL TEAMS.<br>
                ???? Instagram: @Deuncoolstudios.<br>
                AVAILABLE NOW<br>
                
                #sweater #??o_sweater #??osweaternam #??osweatern??? #??osweaterunisex #??osweaterr???ng #??o_sweater_form_r???ng #??o_sweater_?????p #??o_sweater_n???_?????p #hoodie #??o_hoodie #??o_hoodie_nam #??o_hoodie_n??? #??o_hoodie_unisex #??o_hoodie_r???ng #??o_hoodie_form_r???ng #??o_hoodie_?????p #??o_hoodie_n???_?????p #??o_n???<br>',
                'content' => 'M??u Green Light - 100% cotton m???m m???n cho nam n??? - ???NH TH???T',
                'price' => 400000,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.3,
                'sku' => 213124,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 11,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => '??o hoodie n??? b??ng DEUNCOOL BASIC ver 1.0',
                'description' => '??o Hoodie M??u Xanh L???c C???c L???, Ch???t Li??u N??? B??ng ???m ??p, Form R???ng R???t Vai<br>
                _________________<br>
                
                Ch???t li???u : N??? b??ng cotton d??y m???n, ???m <br>
                K??ch c??? : M, L, XL<br>
                ???????c thi???t k??? ?????c ????o cho ng?????i m???c, khi m???c l??n c???m gi??c m??t m??? tho???i m??i t??? tin s???i b?????c khi ??i ra ngo??i, ??i ch??i du l???ch<br>
                _________________<br>
                
                CAM K???T C???A SHOP:???<br>
                + Cam k???t 100% ?????i h??ng do l???i shop v?? l???i s???n ph???m.<br>
                + N???u c?? b???t c??? ??i???u g??  kh??ng h??i l??ng v??? s???n ph???m, kh??ch vui l??ng li??n h??? v???i shop tr?????c khi ????nh gi?? shop nh??. Shop s??? s???p x???p ?????i, tr??? h??ng ho???c ho??n ti???n cho kh??ch ???!<br>
                + M???i ng?????i nh??? theo d??i shop ????? c???p nh???t m???u m???i v?? ??u ????i nhanh nh???t nha! ????<br>
                
                ????? Designed by UNCOOL TEAMS.<br>
                ???? Instagram: @Deuncoolstudios.<br>
                AVAILABLE NOW<br>
                
                #sweater #??o_sweater #??osweaternam #??osweatern??? #??osweaterunisex #??osweaterr???ng #??o_sweater_form_r???ng #??o_sweater_?????p #??o_sweater_n???_?????p #hoodie #??o_hoodie #??o_hoodie_nam #??o_hoodie_n??? #??o_hoodie_unisex #??o_hoodie_r???ng #??o_hoodie_form_r???ng #??o_hoodie_?????p #??o_hoodie_n???_?????p #??o_n???<br>',
                'content' => 'M??u Beige Light - 100% cotton m???m m???n cho nam n???',
                'price' => 400000,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.3,
                'sku' => 213124,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 12,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => '??o hoodie ????? T???t DEUNCOOL BASIC ver 1.0',
                'description' => 'DEUNCOOL STUDIOS HOODIE - M??u Red Cherry<br>
                Ch???t li???u : N??? cotton 100% (l??t b??ng).<br>
                Size: M/L/XL.<br>
                _________________<br>
                ????  H?????NG D???N S??? D???NG: <br>
                - Gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m <br>
                - Gi???t tr?????c khi s??? d???ng ????? ko b??? d??nh l??ng khi mang do s???n ph???m n??? m???i <br>
                - Gi???t m???t trong ????? b???o qu???n h??nh in, th??u gi???t b???ng tay ????? gi??? ch???t l?????ng, m??u s???c & ????? b???n c???a s???n ph???m<br>
                _________________<br>
                
                FORM ??O:<br>   
                -Size M: Ngang 60cm, D??i 65cm<br>
                -Size L: Ngang 64cm, D??i 67cm<br>
                -Size XL: Ngang 70cm, D??i 74cm<br>
                ????? Designed by UNCOOL TEAMS.<br>
                ???? Instagram: @Deuncoolstudios.<br>
                AVAILABLE NOW<br>
                ???? Mua ngay ??i k???o h???t l???nh b??y gi???<br>',
                'content' => 'M??u Red Cherry - 100% cotton m???m m???n cho nam n??? ',
                'price' => 420000,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.3,
                'sku' => 213124,
                'featured' => true,
                'tag' => 'Clothing',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpeg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpeg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpeg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-3.jpeg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpeg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-1.jpeg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-2.jpeg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-3.jpeg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-4.jpeg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-5.jpeg',
            ],

            [
                'product_id' => 3,
                'path' => 'product-3.jpeg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-1.jpeg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-2.jpeg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-3.jpeg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-4.jpeg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-5.jpeg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpeg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-1.jpeg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-2.jpeg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpeg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-1.jpeg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-2.jpeg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-3.jpeg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-4.jpeg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-5.jpeg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-6.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-1.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-2.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-3.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-4.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-5.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-6.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-7.jpeg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-8.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-1.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-2.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-3.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-4.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-5.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-6.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-7.jpeg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-8.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-1.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-2.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-3.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-4.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-5.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-6.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-7.jpeg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-8jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-1.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-2.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-3.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-4.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-5.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-6.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-7.jpeg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-8.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-1.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-2.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-3.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-4.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-5.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-6.jpeg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11.jpeg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-1.jpeg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-2.jpeg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-3.jpeg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-4.jpeg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-5.jpeg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12.jpeg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-1.jpeg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-2.jpeg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-3.jpeg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-4.jpeg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-5.jpeg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 6,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 6,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 6,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 6,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 7,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 7,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 7,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 7,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 8,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 8,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 8,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 8,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 9,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 9,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 9,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 9,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 10,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 10,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 10,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 10,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 11,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 11,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 11,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 11,
                'size' => 'XL',
                'qty' => 5,
            ],
            [
                'product_id' => 12,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 12,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 12,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 12,
                'size' => 'XL',
                'qty' => 5,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 5,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 5,
            ],
        ]);
    }
}

