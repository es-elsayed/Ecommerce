<?php

namespace Database\Factories;

use App\Models\Site;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Site::class;

    public function definition()
    {
        return [
            'title_en'=>'Twishop',
            'title_ar'=>'تويشوب',
            'description_en'=>'We are creative people with a common goal, which is to use content marketing strategies and unique designs. We help companies of all sizes reach their customers, build brand loyalty and discover new marketing opportunities.',
            'description_ar'=>'نحن مبدعون ولدينا هدف مشترك وهو استخدام استراتيجيات تسويق المحتوى والتصميمات الفريدة. نحن نساعد الشركات من جميع الأحجام للوصول إلى عملائها ، وبناء ولاء للعلامة التجارية واكتشاف فرص تسويقية جديدة.',
            'working_days_en'=>'Sunday to Thursday 8AM - 4PM',
            'working_days_ar'=>'من الأحد إلى الأربعاء [4-8]',
            'email'=>'development@twision.agency',
            'phone'=>'+201550394231',
            'whatsapp'=>'+201550394231',
            'facebook'=>'https://www.facebook.com/twisionagency',
            'twitter'=>'https://twitter.com/twisionagency',
            'linkedin'=>'https://www.linkedin.com/in/twision-development-hub-27bb3a212',
            'youtube'=>'https://www.youtube.com/c/twisionagency',
            'address_en'=>'sandoub, mansourah, dakahlia, egypt',
            'address_ar'=>'منية سندوب، المنصورة، المنصورة، الدقهلية',
            'location'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13679.597441021433!2d31.3941835!3d31.0011833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8e855c237afc134!2sTwision%20Creative%20Agency!5e0!3m2!1sar!2seg!4v1642680817436!5m2!1sar!2seg',
        ];
    }
}
