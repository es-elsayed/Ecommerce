<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(
            [
                'name_ar' => 'تبوك',
                'name_en' => 'Tabuk',
                'region_id' =>  7
            ],
            [
                'name_ar' => 'نعمي',
                'name_en' => 'Na\'mi',
                'region_id' => 7
            ],
            [
                'name_ar' => 'الرياض',
                'name_en' => 'Riyadh',
                'region_id' => 1
            ],
            [
                'name_ar' =>        'حميط',
                'name_en' =>          'Humayt',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الطائف',
                'name_en' =>          'At Taif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مكة المكرمة',
                'name_en' =>          'Makkah Al Mukarramah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'رجم الطيارة',
                'name_en' =>          'Rajm At Tayarah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الثميد',
                'name_en' =>          'Ath Thumayd',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عسيلة',
                'name_en' =>          '\'usaylah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'حائل',
                'name_en' =>          'Hail',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بريدة',
                'name_en' =>          'Buraydah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الهفوف',
                'name_en' =>          'Al Hafuf',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الدمام',
                'name_en' =>          'Dammam',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المدينة المنورة',
                'name_en' =>          'Al Madinah Al Munawwarah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ابها',
                'name_en' =>          'Abha',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حالة عمار',
                'name_en' =>          'Halat Ammar',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'جازان',
                'name_en' =>          'Jazan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جدة',
                'name_en' =>          'Jeddah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشايب',
                'name_en' =>          'Ash Shayib',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الفوهة',
                'name_en' =>          'Al Fawhah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'اللوز',
                'name_en' =>          'Al Lawz',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عين الأخضر',
                'name_en' =>          '\'ayn Al Akhdar',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'ذات الحاج',
                'name_en' =>          'Dhat Al Hajj',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المجمعة',
                'name_en' =>          'Al Majma\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قيال',
                'name_en' =>          'Qiyal',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الاخضر',
                'name_en' =>          'Al Akhdar',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'البديعة',
                'name_en' =>          'Al Badi\'ah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'مغيرة',
                'name_en' =>          'Mughayrah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الهوجاء',
                'name_en' =>          'Al Hawja\'',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'البديع',
                'name_en' =>          'Al Badi\'',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الخبر',
                'name_en' =>          'Al Khobar',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابار قنا',
                'name_en' =>          'Abar Qana',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الجبعاوية',
                'name_en' =>          'Al Jab\'awiyah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الحميضة',
                'name_en' =>          'Al Humaydah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'البيانة',
                'name_en' =>          'Al Bayyanah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'حقل',
                'name_en' =>          'Haql',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الدرة',
                'name_en' =>          'Ad Durrah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الزيتة',
                'name_en' =>          'Az Zaytah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'علقان',
                'name_en' =>          '\'alaqan',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الوادي الجديد',
                'name_en' =>          'Al Wadi Al Jadid',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'مليح',
                'name_en' =>          'Mulayh',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'ابو الحنشان',
                'name_en' =>          'Abu Al Hinshan',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'مقنا',
                'name_en' =>          'Maqna',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'ابو قعر',
                'name_en' =>          'Abu Qa\'ar',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مركز العوجاء',
                'name_en' =>          'Markaz Al \'awja',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مركز العليمة',
                'name_en' =>          'Markaz Al \'ulayyimah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حفر الباطن',
                'name_en' =>          'Hafar Al Batin',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القلت',
                'name_en' =>          'Al Qalt',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'النظيم',
                'name_en' =>          'An Nadhim',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابن طوالة',
                'name_en' =>          'Ibn Tuwalah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الصداوي',
                'name_en' =>          'As Sidawi',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام قليب',
                'name_en' =>          'Umm Qulaib',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عريفج',
                'name_en' =>          'Urayfij',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابن شرار',
                'name_en' =>          'Ibn Sharar',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القيصومة',
                'name_en' =>          'Al Qaysumah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الرقعي الجديدة',
                'name_en' =>          'Ar Ruq\'i Al Jadidah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ذبحة',
                'name_en' =>          'Dhabhah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الصفيري',
                'name_en' =>          'As Sufairy',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الوايلية',
                'name_en' =>          'Al Wayliyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الفيوان',
                'name_en' =>          'Al Fiwan',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحماطيات',
                'name_en' =>          'Al Hamatiyat',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'خميس مشيط',
                'name_en' =>          'Khamis Mushayt',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجبو',
                'name_en' =>          'Al Jabu',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المسناة',
                'name_en' =>          'Al Masnah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'احد رفيده',
                'name_en' =>          'Ahad Rifaydah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ام عشر الشرقية',
                'name_en' =>          'Umm Ishar Ash Sharqiyyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القطيف',
                'name_en' =>          'Al Qatif',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'بوهان',
                'name_en' =>          'Buhan',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'السنانيات',
                'name_en' =>          'As Sananiyat',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'حزايا',
                'name_en' =>          'Hazaya',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'أكباد',
                'name_en' =>          'Akbad',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بئر الحيز',
                'name_en' =>          'Bir Al Hayz',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'جريداء',
                'name_en' =>          'Jurayda',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'تيماء',
                'name_en' =>          'Tayma\'',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'العسافية',
                'name_en' =>          'Al Assafiyah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عردة',
                'name_en' =>          '\'ardah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الكتيب',
                'name_en' =>          'Al Kutaib',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بئر فجر',
                'name_en' =>          'Bi\'r Fajr',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'القليبة',
                'name_en' =>          'Al Qalibah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عنيزة',
                'name_en' =>          'Unayzah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرافعية',
                'name_en' =>          'Ar Raf\'iyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الكبريت',
                'name_en' =>          'Al Kabarit',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'رغوة',
                'name_en' =>          'Raghwah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حمى',
                'name_en' =>          'Hima',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الزبر',
                'name_en' =>          'Az Zabr',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'السفانية',
                'name_en' =>          'As Saffaniyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المحوى',
                'name_en' =>          'Al Mahawa',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'أم غور',
                'name_en' =>          'Umm Ghawr',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'قرية العليا',
                'name_en' =>          'Qaryat Al \'ulya',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الرفيعة',
                'name_en' =>          'Ar Rafi\'ah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'جرارة',
                'name_en' =>          'Jarrarah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'قرية',
                'name_en' =>          'Qurayyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'البويبيات',
                'name_en' =>          'Al Buwaybiyat',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'السعيرة',
                'name_en' =>          'As Su\'ayyirah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مناخ',
                'name_en' =>          'Manakh',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحيرا',
                'name_en' =>          'Al Hayra',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام الشفلح',
                'name_en' =>          'Umm Ash Shifallah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'اللهابة',
                'name_en' =>          'Al Lahabah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الفريدة',
                'name_en' =>          'Al Farridah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الشامية',
                'name_en' =>          'Ash Shamiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العيطلية',
                'name_en' =>          'Al \'aytaliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سحمة',
                'name_en' =>          'Sihmah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الشملول / ام عقلا',
                'name_en' =>          'Ash Shamlul (Umm Aqla)',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام الهوشات',
                'name_en' =>          'Umm Al Hawshat',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الشيط',
                'name_en' =>          'Ash Shayyit',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العاذرية',
                'name_en' =>          'Al \'adhiriyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الشيحية',
                'name_en' =>          'Ash Shihiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حزوة / العمانية',
                'name_en' =>          'Hizwah (Al Umaniyah)',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرعاء',
                'name_en' =>          'Al Qar\'a',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'اللصافة',
                'name_en' =>          'Al Lisafah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'النقيرة',
                'name_en' =>          'An Nuqayrah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'هجرة أولاد حثلين',
                'name_en' =>          'Hijrat Awlad Hithlin',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجبيل',
                'name_en' =>          'Al Jubail',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'فرزان',
                'name_en' =>          'Farzan',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'النعيرية',
                'name_en' =>          'An Nu\'ayriyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام ضليع',
                'name_en' =>          'Umm Dulay\'',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مليجة',
                'name_en' =>          'Mulayjah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الصرار',
                'name_en' =>          'As Sarrar',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حنيذ',
                'name_en' =>          'Hanidh',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مغطي',
                'name_en' =>          'Mughati',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'شفية',
                'name_en' =>          'Shifiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عتيق',
                'name_en' =>          'Utayyiq',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحسي',
                'name_en' =>          'Al Husayy',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ثاج',
                'name_en' =>          'Thaj',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحناة',
                'name_en' =>          'Al Hinnah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الكهفة',
                'name_en' =>          'Al Kahafah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الصحاف',
                'name_en' =>          'As Sahaf',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العيينة',
                'name_en' =>          'Al Uyainah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القليب',
                'name_en' =>          'Al Qulayyib',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الونان',
                'name_en' =>          'Al Wannan',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'غنوى',
                'name_en' =>          'Ghanwa',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الزغين',
                'name_en' =>          'Az Zughayn',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'نطاع',
                'name_en' =>          'Nita\'',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام الحمام',
                'name_en' =>          'Umm Al Hamam',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام ربيعة',
                'name_en' =>          'Umm Rubay\'ah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابو حدرية',
                'name_en' =>          'Abu Hadriyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'منيفة',
                'name_en' =>          'Munifah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الافلاج',
                'name_en' =>          'Al Aflaj',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خيطان',
                'name_en' =>          'Khaitan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الوسيعة',
                'name_en' =>          'Al Wasi\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'تمرية',
                'name_en' =>          'Tamriyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ابو خسيفاء',
                'name_en' =>          'Abu Khusayfa',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النخيل',
                'name_en' =>          'An Nakhil',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السحيمي',
                'name_en' =>          'As Suhaymi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مصدة',
                'name_en' =>          'Masadah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم سديرة',
                'name_en' =>          'Umm Sudayrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'التنهاة',
                'name_en' =>          'At Tanhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قري التويم',
                'name_en' =>          'Qura At Tuwaym',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشحمة',
                'name_en' =>          'Ash Shahmah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الودي',
                'name_en' =>          'Al Wuday',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جوي',
                'name_en' =>          'Juwayy',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مقبلة',
                'name_en' =>          'Muqbilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حرمة',
                'name_en' =>          'Harmah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المعظم',
                'name_en' =>          'Al Ma\'dham',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'جراب',
                'name_en' =>          'Jirab',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النغيق',
                'name_en' =>          'An Nughayq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حويمضة',
                'name_en' =>          'Huwaimidah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البتيراء',
                'name_en' =>          'Al Butaira\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المشاش',
                'name_en' =>          'Al Mishash',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفروثي',
                'name_en' =>          'Al Furuthi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جلاجل',
                'name_en' =>          'Jalajil',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدخيلة',
                'name_en' =>          'Ad Dakhilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحصون',
                'name_en' =>          'Al Husun',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حوطة سدير',
                'name_en' =>          'Hawtat Sudair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'روضة سدير',
                'name_en' =>          'Rawdat Sudair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'تمير',
                'name_en' =>          'Tumair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الارطاوية',
                'name_en' =>          'Al Artawiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العمار',
                'name_en' =>          'Al \'amar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخيس',
                'name_en' =>          'Al Khis',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المعشبة',
                'name_en' =>          'Al Ma\'ashbah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'التويم',
                'name_en' =>          'At Tuwaym',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخطامة',
                'name_en' =>          'Al Khutamah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرويضة',
                'name_en' =>          'Ar Ruwaydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشعب',
                'name_en' =>          'Ash Shi\'b',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عشيرة سدير',
                'name_en' =>          'Asharat Sudair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجنيفي',
                'name_en' =>          'Al Junayfi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العطار',
                'name_en' =>          'Al \'attar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام الجماجم',
                'name_en' =>          'Umm Al Jamajim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشلح',
                'name_en' =>          'Mishlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام رجوم',
                'name_en' =>          'Umm Rujum',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرويضة',
                'name_en' =>          'Ar Ruwaydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيصلية',
                'name_en' =>          'Al Faysaliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بوضاء',
                'name_en' =>          'Bawda\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحائر',
                'name_en' =>          'Al Hair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وشي',
                'name_en' =>          'Wushayy',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عودة سدير',
                'name_en' =>          '\'awdat Sudayr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مبايض',
                'name_en' =>          'Mubayid',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القاعية',
                'name_en' =>          'Al Qa\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'دبدبة فضلاء',
                'name_en' =>          'Dibdibbat Fudala',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحجب',
                'name_en' =>          'Al Hajab',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الضلفة',
                'name_en' =>          'Adh Dhalfah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أبو طاقة',
                'name_en' =>          'Abu Taqah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العين الجديدة',
                'name_en' =>          'Al \'ayn Al Jadidah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القعرة',
                'name_en' =>          'Al Qa\'arah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أم زرب',
                'name_en' =>          'Umm Zarb',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'هدية',
                'name_en' =>          'Hadiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القعرة',
                'name_en' =>          'Al Qa\'arah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العلا',
                'name_en' =>          'Al Ula',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجهراء',
                'name_en' =>          'Al Jahara',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'رحيب',
                'name_en' =>          'Ruhayb',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'شلال',
                'name_en' =>          'Shalal',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ضاعا',
                'name_en' =>          'Da\'a',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'جيدة',
                'name_en' =>          'Jaydah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'قلبان عشرة',
                'name_en' =>          'Qulban \'isharah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النجيل',
                'name_en' =>          'An Najil',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الرزيقية',
                'name_en' =>          'Ar Ruzayqiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحميدية',
                'name_en' =>          'Al Hamidiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'صدر',
                'name_en' =>          'Sadr',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مغيراء',
                'name_en' =>          'Mughayra\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'قصيب ابو سيال',
                'name_en' =>          'Qusayb Abu Siyal',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ابو اراكة',
                'name_en' =>          'Abu Arakah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مدائن الصالح',
                'name_en' =>          'Madain As Salih',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'عورش',
                'name_en' =>          'Awarsh',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النشيفة',
                'name_en' =>          'An Nushayfah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الزباير',
                'name_en' =>          'Az Zubayir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الضليعة',
                'name_en' =>          'Ad Dulay\'ah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'متان العريقة',
                'name_en' =>          'Mitan Al \'urayqah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الابرق',
                'name_en' =>          'Al Abraq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'اميرة',
                'name_en' =>          'Amirah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجديدة',
                'name_en' =>          'Al Jadidah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'كتيفة مصادر',
                'name_en' =>          'Kutayfat Masadir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الراس',
                'name_en' =>          'Ar Ras',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'البيت',
                'name_en' =>          'Al Bayt',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بئر بحار',
                'name_en' =>          'Bir Bahar',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'سبحان',
                'name_en' =>          'Sabhan',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الظهران',
                'name_en' =>          'Dhahran',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'أم الريح',
                'name_en' =>          'Umm Ar Rih',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'حرم',
                'name_en' =>          'Haram',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عكوز',
                'name_en' =>          '\'akuz',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'السديد',
                'name_en' =>          'As Sudayd',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الوجه',
                'name_en' =>          'Al Wajh',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'النابع',
                'name_en' =>          'An Nabi\'',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عنتر',
                'name_en' =>          '\'antar',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المنجور',
                'name_en' =>          'Al Manjur',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'ابا القزاز',
                'name_en' =>          'Aba Al Qizaz',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بداء',
                'name_en' =>          'Bada\'',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'خرباء',
                'name_en' =>          'Khurba\'',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الكر',
                'name_en' =>          'Al Kurr',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'برق الأسيدية',
                'name_en' =>          'Burq Al Usaydiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الفاضلي',
                'name_en' =>          'Al Fadili',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'بقيق',
                'name_en' =>          'Buqayq',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'قرية',
                'name_en' =>          'Qurayyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ظلوم',
                'name_en' =>          'Dhulum',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عين دار الجديده',
                'name_en' =>          'New \'ayn  Dar',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عين دار القديمة',
                'name_en' =>          'Old \'ayn  Dar',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'علاة',
                'name_en' =>          'Allat',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'فودة',
                'name_en' =>          'Fudah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الكدادية',
                'name_en' =>          'Al Kadadiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'يكرب',
                'name_en' =>          'Yakrub',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجابرية',
                'name_en' =>          'Al Jabiriyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'صلاصل',
                'name_en' =>          'Salasil',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'شهيلاء',
                'name_en' =>          'Shuhayla\'',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عصيفرات',
                'name_en' =>          'Usayfirat',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'طريب',
                'name_en' =>          'Tarib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدغيمية',
                'name_en' =>          'Ad Dughaymiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المنسف',
                'name_en' =>          'Al Mansaf',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'منسية الغربية',
                'name_en' =>          'Mansiyah Al Gharbiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عشيرة',
                'name_en' =>          '\'ushayrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيصلية',
                'name_en' =>          'Al Faysaliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الثوير',
                'name_en' =>          'Ath Thuwayr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'زليغف',
                'name_en' =>          'Zulayghif',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزارع الاثلة',
                'name_en' =>          'Mazari\' Al Athlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزارع الرحية',
                'name_en' =>          'Mazari\' Ar Ruhayyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قصيباء',
                'name_en' =>          'Qusayba',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزرعة بيضاء نثيل',
                'name_en' =>          'Mazra\'at Bayda Nuthayl',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'امارة المستوي',
                'name_en' =>          'Imarat Al Mistawi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الزلفي',
                'name_en' =>          'Az Zulfi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سمنان',
                'name_en' =>          'Samnan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'علقة',
                'name_en' =>          '\'iliqah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المضاويح',
                'name_en' =>          'Al Mudhawih',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ابا البقر',
                'name_en' =>          'Aba Al Baqar',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحرضة',
                'name_en' =>          'Al Hardhah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الضرس',
                'name_en' =>          'Adh Dhars',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الخريبة',
                'name_en' =>          'Al Khuraybah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العرائد',
                'name_en' =>          'Al \'araid',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'غمرة',
                'name_en' =>          'Ghamrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العقيلة',
                'name_en' =>          'Al \'uqaylah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العدلة',
                'name_en' =>          'Al \'adlah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الديسة',
                'name_en' =>          'Ad Disah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السليمي',
                'name_en' =>          'As Sulaymi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجرف',
                'name_en' =>          'Al Jarf',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الهذلولي',
                'name_en' =>          'Al Hadhluli',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'جدعاء',
                'name_en' =>          'Jad\'a',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'خيبر',
                'name_en' =>          'Khaybar',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'اللحن',
                'name_en' =>          'Al Lihin',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العشاش',
                'name_en' =>          'Al \'ishash',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصلصلة',
                'name_en' =>          'As Silsilah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الثمد',
                'name_en' =>          'Al Thamad',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العينية',
                'name_en' =>          'Al Uyaynah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'رماح',
                'name_en' =>          'Rumah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حفر العتك',
                'name_en' =>          'Hafar Al Atk',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المزيرع',
                'name_en' =>          'Al Muzayri\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'شوية',
                'name_en' =>          'Shawyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحفنة',
                'name_en' =>          'Al Hifnah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغيلانة',
                'name_en' =>          'Al Ghaylanah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرمحية',
                'name_en' =>          'Ar Rumhiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الراكة',
                'name_en' =>          'Ar Rakah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الخريطة',
                'name_en' =>          'Al Khuraytah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الثقبة',
                'name_en' =>          'Ath Thuqbah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العزيزية',
                'name_en' =>          'Al \'aziziyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'شدوا',
                'name_en' =>          'Shadwa',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الغاط',
                'name_en' =>          'Al Ghat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مليح',
                'name_en' =>          'Mulayh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشبعان',
                'name_en' =>          'Ash Shaban',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الدقم',
                'name_en' =>          'Ad Duqum',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'القرص',
                'name_en' =>          'Al Qars',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'حراض',
                'name_en' =>          'Hirad',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الشبحة',
                'name_en' =>          'Ash Shibahah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'روضة الاغيدرات',
                'name_en' =>          'Rawdat Al Aghaydirat',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الخضراء الجديدة',
                'name_en' =>          'Al Khadra Al Jadidah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'سمور',
                'name_en' =>          'Samur',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الرويضات',
                'name_en' =>          'Al Ruwaydat',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المهدرة',
                'name_en' =>          'Al Mahadrah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بقيلة',
                'name_en' =>          'Buqaylah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'النعيلة',
                'name_en' =>          'An Nu\'aylah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الزغلية',
                'name_en' =>          'Az Zaghliyah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'توله',
                'name_en' =>          'Tuwalah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'املج',
                'name_en' =>          'Umluj',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'فم شثاث',
                'name_en' =>          'Famm Shithath',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الحرة',
                'name_en' =>          'Al Harrah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'العمبجة',
                'name_en' =>          'Al \'ambijah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الشدخ',
                'name_en' =>          'Ash Shidakh',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المرامية',
                'name_en' =>          'Al Maramiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مزارع البدائع',
                'name_en' =>          'Mazari\' Al Badai\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخاتلة',
                'name_en' =>          'Al Khatilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البلاد الوسطى',
                'name_en' =>          'Al Bilad Al Wusta',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العليا',
                'name_en' =>          'Al \'ulayya',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحسيان',
                'name_en' =>          'Al Hisyan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الضلعي',
                'name_en' =>          'Ad Dul \'ayi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'تنيبيكة',
                'name_en' =>          'Tunaibikah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عبلة',
                'name_en' =>          '\'ablah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عبلية',
                'name_en' =>          '\'abliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'هجرة السلات',
                'name_en' =>          'Hijrat As Silat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام طلحة',
                'name_en' =>          'Umm Talhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'معرج قليشة',
                'name_en' =>          'Mua\'rij Qulaishah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'داغان',
                'name_en' =>          'Daghan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجرفية',
                'name_en' =>          'Al Jurfiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حشاشة',
                'name_en' =>          'Hashashah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المردمة',
                'name_en' =>          'Al Mardamah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'لهدة الصياهد',
                'name_en' =>          'Lahdat As Sayahid',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البرزاء',
                'name_en' =>          'Al Barza',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخالدية',
                'name_en' =>          'Al Khalidiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحمادة',
                'name_en' =>          'Al Hamadah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرارة',
                'name_en' =>          'Al Qararah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحمنة',
                'name_en' =>          'Al Hamnah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أم الغيران',
                'name_en' =>          'Umm Al Ghiran',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المندسة',
                'name_en' =>          'Al Mundassah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السليمية',
                'name_en' =>          'As Sulaymiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البراقية',
                'name_en' =>          'Al Barraqiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السراقي',
                'name_en' =>          'As Siraqi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'آبار دحمولة',
                'name_en' =>          'Abar Dahmulah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القويعية',
                'name_en' =>          'Al Quway\'iyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بدائع الهراسين',
                'name_en' =>          'Badai\' Al Harasin',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مهد الذهب',
                'name_en' =>          'Mahd Adh Dhahab',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'صفينة',
                'name_en' =>          'Sufaynah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الرقابية',
                'name_en' =>          'Ar Riqabiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصلحانية',
                'name_en' =>          'As Sulhaniyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الغاشية',
                'name_en' =>          'Al Ghashiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الاصيحر',
                'name_en' =>          'Al Asayhir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السويرقية',
                'name_en' =>          'As Suwayriqiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ثرب',
                'name_en' =>          'Tharb',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'حاذة',
                'name_en' =>          'Hadhah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العمق',
                'name_en' =>          'Al Umaq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصعبية',
                'name_en' =>          'As Sa\'biyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القعرة',
                'name_en' =>          'Al Qa\'arah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجحفة',
                'name_en' =>          'Al Juhfah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'راين',
                'name_en' =>          'Rayin',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الزويراء',
                'name_en' =>          'Az Zuwayra',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النويبع',
                'name_en' =>          'Al Nuwaybi\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'رابغ',
                'name_en' =>          'Rabigh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مستورة',
                'name_en' =>          'Masturah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الابواء',
                'name_en' =>          'Al Abwa\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شلوة',
                'name_en' =>          'Shuluwah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'كلية',
                'name_en' =>          'Kilayyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حجر',
                'name_en' =>          'Hajur',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صعبر',
                'name_en' =>          'Sa\'bar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'التنضبية',
                'name_en' =>          'At Tandabiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قويزة',
                'name_en' =>          'Quwayzah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النزة',
                'name_en' =>          'An Nazzah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشعبة',
                'name_en' =>          'Ash Shu\'abah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصدر',
                'name_en' =>          'As Sadr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المغاربة',
                'name_en' =>          'Al Magharibah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الكويسية',
                'name_en' =>          'Al Kuwaysiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ابو حليفاء',
                'name_en' =>          'Abu Hulayfa',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'محجوبة',
                'name_en' =>          'Mahjubah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بئر الفيضة',
                'name_en' =>          'Bir Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الهميج',
                'name_en' =>          'Al Humayj',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الذيبية',
                'name_en' =>          'Adh Dhibiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خضراء',
                'name_en' =>          'Khadra',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البدايع',
                'name_en' =>          'Al Badayi\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بطاحة',
                'name_en' =>          'Battahah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصقرة',
                'name_en' =>          'As Saqrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وبرة',
                'name_en' =>          'Wabrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أبو عشرة',
                'name_en' =>          'Abu \'isharah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المعلق',
                'name_en' =>          'Al Mu\'allaq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرميثي',
                'name_en' =>          'Ar Rumaythi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الهرانية',
                'name_en' =>          'Al Hiraniyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرضم',
                'name_en' =>          'Ar Radum',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الثعل',
                'name_en' =>          'Ath Tha\'al',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الانسيات',
                'name_en' =>          'Al Unsiyat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'فرعة الرميثي',
                'name_en' =>          'Far\'at Ar Rumaythi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البطين',
                'name_en' =>          'Al Butayn',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بديدة',
                'name_en' =>          'Bidaydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المجهلية',
                'name_en' =>          'Al Mijhiliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البحرة',
                'name_en' =>          'Al Baharah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بديعة',
                'name_en' =>          'Buday\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجثوم',
                'name_en' =>          'Al Juthum',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشويطن',
                'name_en' =>          'Ash Shuwaytin',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المحامة',
                'name_en' =>          'Al Mahamah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عفيف',
                'name_en' =>          'Afif',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ابرقية',
                'name_en' =>          'Abraqiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجمانية',
                'name_en' =>          'Al Jammaniyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الاشعرية',
                'name_en' =>          'Al Ashariyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخضارة',
                'name_en' =>          'Al Khadarah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصالحية',
                'name_en' =>          'As Salhiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بدائع العضيان',
                'name_en' =>          'Badai\' Al Idyan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم أرطى',
                'name_en' =>          'Umm Arta',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المكلاة',
                'name_en' =>          'Al Maklah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عشيران',
                'name_en' =>          '\'ushayran',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بعيثران',
                'name_en' =>          'Bu\'aythiran',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم قصور',
                'name_en' =>          'Umm Qusur',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عبدة',
                'name_en' =>          '\'abdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خريصة',
                'name_en' =>          'Khuraysah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عجابة',
                'name_en' =>          '\'ajabah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المديفع',
                'name_en' =>          'Al Mudayfi\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القدراوية',
                'name_en' =>          'Al Qidrawiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أوبيرة',
                'name_en' =>          'Ubayrah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أم أثلة',
                'name_en' =>          'Umm Athlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الأخضر',
                'name_en' =>          'Al Akhdar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مطيعة',
                'name_en' =>          'Muti\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المدارة',
                'name_en' =>          'Al Madarah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عسيلة',
                'name_en' =>          '\'usaylah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحلوة',
                'name_en' =>          'Al Hilwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدبيجة',
                'name_en' =>          'Ad Dubayjah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ثادق',
                'name_en' =>          'Thadiq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الروبضة / رغبة',
                'name_en' =>          'Ar Rawbidah / Raghabah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'رويضة السهول',
                'name_en' =>          'Ruwaydat As Suhul',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشاش السهول',
                'name_en' =>          'Mishash As Suhul',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحسي',
                'name_en' =>          'Al Husayy',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصفرات',
                'name_en' =>          'As Sufarat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البير',
                'name_en' =>          'Al Bir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'رويغب',
                'name_en' =>          'Ruwayghib',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النجف',
                'name_en' =>          'An Najf',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السطيح',
                'name_en' =>          'As Sutayh',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الخيمة',
                'name_en' =>          'Al Khaymah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'سيهات',
                'name_en' =>          'Sayhat',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'تفيدة',
                'name_en' =>          'Tafidah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'تاروت',
                'name_en' =>          'Tarut',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ندياء',
                'name_en' =>          'Nadya',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'دوينه',
                'name_en' =>          'Duwayyinah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'عدن',
                'name_en' =>          '\'adan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الأحمر',
                'name_en' =>          'Al Ahmar',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المثلث',
                'name_en' =>          'Al Muthallath',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الفرع',
                'name_en' =>          'Al Far\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البقاع',
                'name_en' =>          'Al Biqa\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النجيل',
                'name_en' =>          'An Najil',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البثنة',
                'name_en' =>          'Al Bathnah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'خيف حسين',
                'name_en' =>          'Khayf Husayn',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البقارية',
                'name_en' =>          'Al Baqqariyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الفقعلي',
                'name_en' =>          'Al Fuq\'ali',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المشريف',
                'name_en' =>          'Al Mushayrif',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أم المسن',
                'name_en' =>          'Umm Al Misin',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البديع',
                'name_en' =>          'Al Badi\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الدارة',
                'name_en' =>          'Ad Darah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القري',
                'name_en' =>          'Al Quray',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السليم',
                'name_en' =>          'As Sulaym',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'اللثامة',
                'name_en' =>          'Al Luthamah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المقنع',
                'name_en' =>          'Al Muqanna\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ضفيان',
                'name_en' =>          'Dufyan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'عضاد',
                'name_en' =>          '\'adad',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العدوة',
                'name_en' =>          'Al \'idwah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النباة',
                'name_en' =>          'An Nabah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البريدي',
                'name_en' =>          'Al Baridi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ينبع',
                'name_en' =>          'Yanbu',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القراصة',
                'name_en' =>          'Al Qarrasah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العيص',
                'name_en' =>          'Al \'is',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجابرية',
                'name_en' =>          'Al Jabiriyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ينبع النخل',
                'name_en' =>          'Yanbu An Nakhil',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'جراجر',
                'name_en' =>          'Jarajir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ترعة',
                'name_en' =>          'Tir\'ah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المربع',
                'name_en' =>          'Al Murabba\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'نبط',
                'name_en' =>          'Nabt',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السليلة',
                'name_en' =>          'As Salilah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القرائن',
                'name_en' =>          'Al Qarain',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشكيرة',
                'name_en' =>          'Ash Shukayyrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'هجرة المغر',
                'name_en' =>          'Hijrat Al Mughur',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزارع المحتجبة',
                'name_en' =>          'Mazari\' Al Muhtajibah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغرابة',
                'name_en' =>          'Al Ghurabah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القاعية',
                'name_en' =>          'Al Qa\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'غسلة',
                'name_en' =>          'Ghuslah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'شقراء',
                'name_en' =>          'Shaqra\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الهفوف',
                'name_en' =>          'Al Hafuf',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حلوان',
                'name_en' =>          'Halwan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حصرة',
                'name_en' =>          'Hasarah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الثمامية',
                'name_en' =>          'Ath Thumamiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'لبيدة',
                'name_en' =>          'Lubaydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العضيانية',
                'name_en' =>          'Al \'idayyaniyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عجلة',
                'name_en' =>          '\'ajlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سعدة',
                'name_en' =>          'Sa\'dah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جفن ضب',
                'name_en' =>          'Jafn Dabb',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'دلقان',
                'name_en' =>          'Dalqan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم السباع',
                'name_en' =>          'Umm As Siba\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجله الأعلى',
                'name_en' =>          'Al Jilh Al A\'la',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخفق الجنوبي',
                'name_en' =>          'Al Khafaq Al Janubi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدحوة',
                'name_en' =>          'Ad Dihwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخفق القديم',
                'name_en' =>          'Al Khafaq Al Qadim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشرمية',
                'name_en' =>          'Ash Sharmiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مراغان',
                'name_en' =>          'Maraghan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجروية',
                'name_en' =>          'Al Jarwiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العوشزية',
                'name_en' =>          'Al Awshaziyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أبو رجوم',
                'name_en' =>          'Abu Rijum',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القلتة',
                'name_en' =>          'Al Qaltah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'لعلع',
                'name_en' =>          'Li\'li\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغريري',
                'name_en' =>          'Al Ghurayri',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخنقة',
                'name_en' =>          'Al Khunqah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النسق القديم',
                'name_en' =>          'An Nasaq Al Qadim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وثيلان',
                'name_en' =>          'Wuthaylan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بيضاء نثيل',
                'name_en' =>          'Bayda\' Nathil',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم الدباء',
                'name_en' =>          'Umm Ad Diba',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الأمار',
                'name_en' =>          'Al Amar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عسيلان',
                'name_en' =>          '\'usaylan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السدرية',
                'name_en' =>          'As Sidriyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم الشبرم',
                'name_en' =>          'Umm Ash Shubrum',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحجاجي',
                'name_en' =>          'Al Hijjaji',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغبياء',
                'name_en' =>          'Al Ghubayya',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أبو حميض',
                'name_en' =>          'Abu Humayd',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النبيبيع',
                'name_en' =>          'An Nubaybi\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النباع',
                'name_en' =>          'An Naba\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الملقى',
                'name_en' =>          'Al Malqa',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حجيلاء',
                'name_en' =>          'Hujayla',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العبد',
                'name_en' =>          'Al \'abd',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم الجثجاث',
                'name_en' =>          'Umm Al Jithjath',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم جفر',
                'name_en' =>          'Umm Jafr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخلفية',
                'name_en' =>          'Al Khalfiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجدعان',
                'name_en' =>          'Al Jidh\'an',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'زنقاحة',
                'name_en' =>          'Zinqahah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العمشان',
                'name_en' =>          'Al \'umshan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجذية',
                'name_en' =>          'Al Judhayyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العقدة',
                'name_en' =>          'Al \'uqdah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرا',
                'name_en' =>          'Al Qara',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفطيمة',
                'name_en' =>          'Al Futaymah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المحارزة',
                'name_en' =>          'Al Maharizah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحمة',
                'name_en' =>          'Al Himah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صيادة',
                'name_en' =>          'Sayyadah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدفينة',
                'name_en' =>          'Al Dufaynah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوهط',
                'name_en' =>          'Al Wahat',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغنم',
                'name_en' =>          'Al Ghunnam',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ابو غيل',
                'name_en' =>          'Abu Ghayl',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام البكار',
                'name_en' =>          'Umm Al Bikar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفعور',
                'name_en' =>          'Al Fu\'ur',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصخيرة',
                'name_en' =>          'As Sukhayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السريح',
                'name_en' =>          'As Sirayh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الملعب',
                'name_en' =>          'Al Mal\'ab',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغمير',
                'name_en' =>          'Al Ghimayr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوزير',
                'name_en' =>          'Al Wazir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ثمالة',
                'name_en' =>          'Thumalah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النصبة',
                'name_en' =>          'An Nusbah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عباسة',
                'name_en' =>          '\'abbasah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غرابة',
                'name_en' =>          'Ghirabah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحلقة',
                'name_en' =>          'Al Halqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرخيلة',
                'name_en' =>          'Ar Rikhaylah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القصب',
                'name_en' =>          'Al Qasab',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المشاش',
                'name_en' =>          'Al Mishash',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصوح',
                'name_en' =>          'As Suh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'اشيقر',
                'name_en' =>          'Ushayqir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام طليحة',
                'name_en' =>          'Umm Tulayhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الداهنة',
                'name_en' =>          'Ad Dahinah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحريق',
                'name_en' =>          'Al Hariq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجريفة',
                'name_en' =>          'Al Juraifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الوقف',
                'name_en' =>          'Al Waqf',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العلوة',
                'name_en' =>          'Al \'uluwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'فرحة',
                'name_en' =>          'Farhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عروى',
                'name_en' =>          '\'arawa',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'فردة',
                'name_en' =>          'Fardah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مويسل',
                'name_en' =>          'Muwaysil',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشاة',
                'name_en' =>          'Ash Shat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشرف',
                'name_en' =>          'Mushrif',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بدائع سويقة',
                'name_en' =>          'Badai\' Suwayqah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصلبية',
                'name_en' =>          'As Sulubiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزارع الروضة',
                'name_en' =>          'Mazari\' Ar Rawdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'هرمولة',
                'name_en' =>          'Hurmulah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فيضة ابان الاحمر',
                'name_en' =>          'Faydat Aban Alahmar',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الدارة',
                'name_en' =>          'Ad Darah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مطربة',
                'name_en' =>          'Mutribah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'رغلة',
                'name_en' =>          'Raghlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ضبة',
                'name_en' =>          'Dabbah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العطاوي',
                'name_en' =>          'Al \'atawi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحفائر',
                'name_en' =>          'Al Hafair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزارع طينان',
                'name_en' =>          'Mazari\' Tinan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'منيفة',
                'name_en' =>          'Munifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قويعان',
                'name_en' =>          'Quway\'an',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحنابج',
                'name_en' =>          'Al Hanabij',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشفلحية',
                'name_en' =>          'Ash Shifallahiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'روضة وثيلان',
                'name_en' =>          'Rawdat Wuthaylan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ابو ركب',
                'name_en' =>          'Abu Rukab',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخالدية',
                'name_en' =>          'Al Khalidiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحفنة',
                'name_en' =>          'Al Hifnah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أبو عرينة',
                'name_en' =>          'Abu Uraynah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفرعة',
                'name_en' =>          'Al Far\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بحار الجديد',
                'name_en' =>          'Bihar Al Jadid',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حميان',
                'name_en' =>          'Hamayyan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجربوعية',
                'name_en' =>          'Al Jarboeyyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'نميلين',
                'name_en' =>          'Numaileen',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدهاسية',
                'name_en' =>          'Ad Dahasiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المصلوم',
                'name_en' =>          'Al Maslum',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سعدة',
                'name_en' =>          'Sa\'dah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم رضمة',
                'name_en' =>          'Umm Radmah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السنارية',
                'name_en' =>          'As Sinnariyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الديرية',
                'name_en' =>          'Ad Dirirah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المغزل',
                'name_en' =>          'Al Mighzal',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جوباح',
                'name_en' =>          'Jubah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرنة',
                'name_en' =>          'Al Qarnah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وثيلان',
                'name_en' =>          'Wuthaylan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عين الصوينع',
                'name_en' =>          '\'ayn As Suwayni\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الأرطاوي',
                'name_en' =>          'Al Artawi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الثندوة',
                'name_en' =>          'Ath Thiduwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أبو جلال',
                'name_en' =>          'Abu Jilal',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جنوب البرود',
                'name_en' =>          'Janub Al Burud',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'غرب البرود',
                'name_en' =>          'Gharb Al Burud',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الريشية',
                'name_en' =>          'Ar Rishiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عبلة',
                'name_en' =>          '\'ablah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزرعة البيضة',
                'name_en' =>          'Mazra\'at Al Bidah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السليسية',
                'name_en' =>          'As Sulaysiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزرعة سليسان',
                'name_en' =>          'Mazra\'at Sulaysan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العويجاء',
                'name_en' =>          'Al \'uwayja',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العدوة',
                'name_en' =>          'Al \'idwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجديدة',
                'name_en' =>          'Al Jadidah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بدائع الهمجة',
                'name_en' =>          'Badai\' Al Hamjah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'فيضة القوازين',
                'name_en' =>          'Faydat Al Quwazin',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزارع مصيقرة',
                'name_en' =>          'Mazari\' Musayqirat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيحاء',
                'name_en' =>          'Al Fayha',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدسمة',
                'name_en' =>          'Ad Dasmah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'صفاقة',
                'name_en' =>          'Saffaqah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قبيعة',
                'name_en' =>          'Qubay\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشبرمية',
                'name_en' =>          'Ash Shubrumiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'كويكبة',
                'name_en' =>          'Kuwaykibah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرعيلة',
                'name_en' =>          'Al Raeelah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ام طليحة',
                'name_en' =>          'Umm Tulayhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرقيبة',
                'name_en' =>          'Ar Raqibah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بدع الصعكي',
                'name_en' =>          'Bid\' As Si\'aki',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سلطانة',
                'name_en' =>          'Sultanah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عبلة',
                'name_en' =>          '\'ablah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الملينية',
                'name_en' =>          'Al Milayyiniyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البديعة',
                'name_en' =>          'Al Badi\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'روضة جهام',
                'name_en' =>          'Rawdat Jaham',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزارع الجديدة',
                'name_en' =>          'Mazari\' Al Jadidah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'منيفة المغايرة',
                'name_en' =>          'Munifah Al Maghayirah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدرعية',
                'name_en' =>          'Ad Dir\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرميحة',
                'name_en' =>          'Ar Rumayhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حسو الحيد',
                'name_en' =>          'Hasu Al Hayd',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حديجة',
                'name_en' =>          'Hudayjah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدارة',
                'name_en' =>          'Ad Darah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدوادمي',
                'name_en' =>          'Ad Duwadimi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدمثي',
                'name_en' =>          'Ad Damthi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أوضاخ',
                'name_en' =>          'Udakh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'كبشان',
                'name_en' =>          'Kabshan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حديجة',
                'name_en' =>          'Hudayjah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرارة',
                'name_en' =>          'Al Qararah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العوشزية',
                'name_en' =>          'Al Awshaziyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجمش',
                'name_en' =>          'Al Jimsh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'نجخ',
                'name_en' =>          'Najkh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جريسة',
                'name_en' =>          'Juraysah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام العثاكل',
                'name_en' =>          'Umm Al \'athakil',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عرجاء',
                'name_en' =>          'Arja\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم سليم',
                'name_en' =>          'Umm Sulaym',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ساجر',
                'name_en' =>          'Sajir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرفيعة',
                'name_en' =>          'Ar Rafi\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'نفي',
                'name_en' =>          'Nifi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مصدة',
                'name_en' =>          'Masadah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخفيفية',
                'name_en' =>          'Al Khufayfiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عسيلة',
                'name_en' =>          '\'usaylah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أرطاوي الرقاص',
                'name_en' =>          'Artawi Ar Raqqas',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عشيران',
                'name_en' =>          '\'ushayran',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزرعة الخفيسة',
                'name_en' =>          'Mazra\'at Al Khufaysah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عين القنور',
                'name_en' =>          '\'ayn Al Qannur',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'التسرير',
                'name_en' =>          'At Tasrir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الاثلة',
                'name_en' =>          'Al Athlah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عريفيجان',
                'name_en' =>          '\'urayfijan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السكران',
                'name_en' =>          'As Sakran',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جفن',
                'name_en' =>          'Jifin',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البرود',
                'name_en' =>          'Al Burud',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جفنا',
                'name_en' =>          'Jifana',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصالحية',
                'name_en' =>          'As Salhiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العاذرية',
                'name_en' =>          'Al \'adhiriyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البجادية',
                'name_en' =>          'Al Bijadiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرفائع',
                'name_en' =>          'Ar Rafai\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جهام ابو عشر',
                'name_en' =>          'Jaham Abu \'ishar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحزيمية',
                'name_en' =>          'Al Huzaymiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خف',
                'name_en' =>          'Khuff',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المحمدية',
                'name_en' =>          'Al Muhammadiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ماسل',
                'name_en' =>          'Masal',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القاعية',
                'name_en' =>          'Al Qa\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'منيفة',
                'name_en' =>          'Munifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'رضوى',
                'name_en' =>          'Radwa',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ارطاوي حليت',
                'name_en' =>          'Artawi Hillit',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عواضة',
                'name_en' =>          '\'awwadah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'شرارة',
                'name_en' =>          'Shararah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحزم',
                'name_en' =>          'Al Hazm',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'صقرة',
                'name_en' =>          'Saqrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العقيشية',
                'name_en' =>          'Al Uqayshiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرين',
                'name_en' =>          'Al Qurayn',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عقلة الغويري',
                'name_en' =>          'Uqlat Al Uwayri',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام زموع',
                'name_en' =>          'Umm Zumu\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عين البراحة',
                'name_en' =>          '\'ayn Al Barahah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مغيراء',
                'name_en' =>          'Mughayra\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الضحوي',
                'name_en' =>          'Ad Dahawi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عسيلة',
                'name_en' =>          '\'usaylah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المغيب',
                'name_en' =>          'Al Maghib',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'فيضة المفص',
                'name_en' =>          'Faydat Al Mafass',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عريدة',
                'name_en' =>          '\'urayyidah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشعراء',
                'name_en' =>          'Ash Sha\'ra\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العازمية',
                'name_en' =>          'Al \'azimiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المحوي',
                'name_en' =>          'Al Mahawi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المدرع',
                'name_en' =>          'Al Mudarri\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سرورة',
                'name_en' =>          'Sururah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عصماء',
                'name_en' =>          'Asma\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام طليحة',
                'name_en' =>          'Umm Tulayhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مساوي',
                'name_en' =>          'Musawi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النقعة',
                'name_en' =>          'An Niq\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'افقرا',
                'name_en' =>          'Afqirah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرفاع',
                'name_en' =>          'Ar Rufa\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفقارة',
                'name_en' =>          'Al Fuqarah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الودي',
                'name_en' =>          'Al Wuday',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرفيعة',
                'name_en' =>          'Ar Rafi\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخبة',
                'name_en' =>          'Al Khubbah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النبوان',
                'name_en' =>          'An Nabuwan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرديفة',
                'name_en' =>          'Ar Radifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرشاوية',
                'name_en' =>          'Ar Rishawiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مطربة',
                'name_en' =>          'Mutribah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المستجدة',
                'name_en' =>          'Al Mustajiddah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العامرية',
                'name_en' =>          'Al Amiriyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الظلماوي',
                'name_en' =>          'Adh Dhalmawi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'شبيرمة',
                'name_en' =>          'Shubayrimah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عصام',
                'name_en' =>          'Isam',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عبادة',
                'name_en' =>          'Abbadah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحيد',
                'name_en' =>          'Al Hayd',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العبل',
                'name_en' =>          'Al \'abal',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ارطاوي الحماميد',
                'name_en' =>          'Artawi Al Hamamid',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بدائع ابن نجم',
                'name_en' =>          'Badai\' Ibn Najim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المرية',
                'name_en' =>          'Al Marriyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الشقران',
                'name_en' =>          'Ash Shuqran',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الكريزية',
                'name_en' =>          'Al Kurayziyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ذارة',
                'name_en' =>          'Dharah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'قصيباء',
                'name_en' =>          'Qusayba',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'رحبة علوش',
                'name_en' =>          'Rahbat \'allush',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الكريزية',
                'name_en' =>          'Al Kurayziyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الرفائع',
                'name_en' =>          'Ar Rafai\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'صبحا',
                'name_en' =>          'Sabha',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'حزرة',
                'name_en' =>          'Hazrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'غراب',
                'name_en' =>          'Ghurab',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحجرية',
                'name_en' =>          'Al Hijriyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أبو مغير',
                'name_en' =>          'Abu Mughayr',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العد',
                'name_en' =>          'Al \'idd',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الربثة',
                'name_en' =>          'Ar Rabtah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البركة',
                'name_en' =>          'Al Birkah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النفازي',
                'name_en' =>          'An Nafazi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحناكية',
                'name_en' =>          'Al Hinakiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المحفر',
                'name_en' =>          'Al Mahaffar',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النخيل',
                'name_en' =>          'An Nakhil',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصمد',
                'name_en' =>          'As Samad',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الضميرية',
                'name_en' =>          'Ad Dumayriyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المحامة',
                'name_en' =>          'Al Mahamah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحسو',
                'name_en' =>          'Al Hisu',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الهميج',
                'name_en' =>          'Al Humayj',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'صخيبرة',
                'name_en' =>          'Sukhaybirah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'هدبان',
                'name_en' =>          'Hadban',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بلغة',
                'name_en' =>          'Bilghah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الماوية',
                'name_en' =>          'Al Mawiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'قصيرة',
                'name_en' =>          'Qusayrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العوشزي',
                'name_en' =>          'Al Awshazi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'عرجاء',
                'name_en' =>          'Arja\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'طلال',
                'name_en' =>          'Talal',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحزم',
                'name_en' =>          'Al Hazm',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الطوقي',
                'name_en' =>          'At Tawqi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حريملاء',
                'name_en' =>          'Huraymila',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ملهم',
                'name_en' =>          'Malham',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سدوس',
                'name_en' =>          'Sudus',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حزوى',
                'name_en' =>          'Hizwa',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'دقلة',
                'name_en' =>          'Diqalah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حليفة',
                'name_en' =>          'Hulayfah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'صلبوخ',
                'name_en' =>          'Sulbukh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البرة',
                'name_en' =>          'Al Barrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العويند',
                'name_en' =>          'Al Uwaynid',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البويب',
                'name_en' =>          'Al Buwayb',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عيينة',
                'name_en' =>          'Uyaynah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'إبن غنام',
                'name_en' =>          'Ibn Ghannam',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغنامية',
                'name_en' =>          'Al Ghanamiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العماج',
                'name_en' =>          'Al \'ammaj',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'هيت',
                'name_en' =>          'Hit',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحائر',
                'name_en' =>          'Al Hair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'كهف برمة',
                'name_en' =>          'Kahf Barmah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بنبان',
                'name_en' =>          'Banban',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الثمامة',
                'name_en' =>          'Ath Thumamah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'لبن',
                'name_en' =>          'Laban',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العريدية',
                'name_en' =>          'Al \'uraydiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العباسية',
                'name_en' =>          'Al \'abbasiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم رضمة',
                'name_en' =>          'Umm Radmah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم سليم',
                'name_en' =>          'Umm Sulaym',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ثرمداء',
                'name_en' =>          'Tharmada\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مرات',
                'name_en' =>          'Marat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أثيثية',
                'name_en' =>          'Uthaythiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'لبخة',
                'name_en' =>          'Labkhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'روضة الفرس',
                'name_en' =>          'Rawdat Al Faras',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام طلحة',
                'name_en' =>          'Umm Talhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حويتة',
                'name_en' =>          'Huwaytah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الطويلة',
                'name_en' =>          'At Tawilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أوبير',
                'name_en' =>          'Ubayr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدرعية',
                'name_en' =>          'Ad Dir\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عرقة',
                'name_en' =>          '\'irqah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العيينة',
                'name_en' =>          'Al Uyainah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الوصيل',
                'name_en' =>          'Al Wusayl',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أبا الكباش',
                'name_en' =>          'Aba Al Kibash',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجبيلة',
                'name_en' =>          'Al Jubaylah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العمارية',
                'name_en' =>          'Al \'ammariyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بوضة',
                'name_en' =>          'Bawdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العليا',
                'name_en' =>          'Al \'ulayya',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قصر القرينة',
                'name_en' =>          'Qasr Al Quraynah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قصر فيهق',
                'name_en' =>          'Qasr Fayhaq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ضرما',
                'name_en' =>          'Duruma',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قصور المقبل',
                'name_en' =>          'Qusur Al Muqbil',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغطغط',
                'name_en' =>          'Al Ghutghut',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قصر ابن شهيل',
                'name_en' =>          'Qasr Ibn Shuhayl',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المغرفية',
                'name_en' =>          'Al Maghrafiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جو',
                'name_en' =>          'Jaww',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغزيز',
                'name_en' =>          'Al Ghuzayz',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الثمامي',
                'name_en' =>          'Ath Thumamy',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وعلة',
                'name_en' =>          'Wa\'alah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشامانية',
                'name_en' =>          'Ash Shamaniyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القصورية',
                'name_en' =>          'Al Qusuriyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزلة',
                'name_en' =>          'Mazallah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عصيلة',
                'name_en' =>          '\'usaylah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشواة',
                'name_en' =>          'Ash Shawah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عليان',
                'name_en' =>          '\'ilayyan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عيدان',
                'name_en' =>          'Idan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سيح الدبول',
                'name_en' =>          'Sayh Ad Dubul',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الهمجة',
                'name_en' =>          'Al Hamjah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ابو سديرة',
                'name_en' =>          'Abu Sudairah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الكدرة',
                'name_en' =>          'Al Kadrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخيس',
                'name_en' =>          'Al Khis',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدويرة',
                'name_en' =>          'Ad Duwayrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أبو مروة',
                'name_en' =>          'Abu Marwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سماح',
                'name_en' =>          'Samah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرنة',
                'name_en' =>          'Al Qarnah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'داحس',
                'name_en' =>          'Dahis',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'دسمان',
                'name_en' =>          'Dasman',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العويسية',
                'name_en' =>          'Al \'uwaysiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العلياء',
                'name_en' =>          'Al \'ulayya',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزرعة مزعلة',
                'name_en' =>          'Mazra\'at Miz\'ilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القوسة',
                'name_en' =>          'Al Qawsah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الروغ',
                'name_en' =>          'Ar Rawgh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الوسيطاء',
                'name_en' =>          'Al Wusayta',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البعيثية',
                'name_en' =>          'Al Bu\'aythiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشتلانية',
                'name_en' =>          'Ash Shatlaniyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'جدالة',
                'name_en' =>          'Jaddalah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قفرة',
                'name_en' =>          'Qafarah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أجزالا',
                'name_en' =>          'Ajzala',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجفارة',
                'name_en' =>          'Al Jafarah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'غودة',
                'name_en' =>          'Ghawdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القويعية',
                'name_en' =>          'Al Quway\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حلبان',
                'name_en' =>          'Halaban',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سنام',
                'name_en' =>          'Sanam',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرجع',
                'name_en' =>          'Ar Raj\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'طحي',
                'name_en' =>          'Tuhayy',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرويضة',
                'name_en' =>          'Ar Ruwaydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخنيقية',
                'name_en' =>          'Al Khunayqiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الناصفة',
                'name_en' =>          'An Nasifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المثناة',
                'name_en' =>          'Al Mathnah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجلة',
                'name_en' =>          'Jellah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الربواء',
                'name_en' =>          'Ar Rabwa',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'لجعة',
                'name_en' =>          'Laj\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'نخيلان',
                'name_en' =>          'Nukhaylan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عنان',
                'name_en' =>          '\'inan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البدع',
                'name_en' =>          'Al Bada\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'صبحاء',
                'name_en' =>          'Sabha',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القصر',
                'name_en' =>          'Al Qasr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ترعة',
                'name_en' =>          'Tir\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ظلم',
                'name_en' =>          'Dhalam',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخفاشة',
                'name_en' =>          'Al Khafashah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'براش',
                'name_en' =>          'Barash',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشريف',
                'name_en' =>          'Ash Sharif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجلة وتبراك',
                'name_en' =>          'Jellah And Tebrak',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفرع',
                'name_en' =>          'Al Far\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حرجل',
                'name_en' =>          'Harjal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'هديل',
                'name_en' =>          'Hidayl',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام الحصن',
                'name_en' =>          'Umm Al Hisn',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'اللحيان',
                'name_en' =>          'Al Lahyan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الاسراب',
                'name_en' =>          'Al Asrab',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العثرية',
                'name_en' =>          'Al Athriyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوطاة',
                'name_en' =>          'Al Watah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'غضي',
                'name_en' =>          'Ghudayy',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحيطان',
                'name_en' =>          'Al Haytan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصريف',
                'name_en' =>          'As Sarif',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الفايزية',
                'name_en' =>          'Al Fayziyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصعيبية',
                'name_en' =>          'As Su\'aybiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'نقرة العمارين',
                'name_en' =>          'Nuqrat Al \'amarin',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رغيلة',
                'name_en' =>          'Rughaylah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الدغمانيات',
                'name_en' =>          'Mazari\' Ad Daghmaniyat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الراشد',
                'name_en' =>          'Mazari\' Ar Rashid',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العليا',
                'name_en' =>          'Al \'ulayya',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أبلق',
                'name_en' =>          'Ablaq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ضراس',
                'name_en' =>          'Diras',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم مكرية',
                'name_en' =>          'Umm Makriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخناصة',
                'name_en' =>          'Al Khinnasah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الصقيريات',
                'name_en' =>          'Mazari\' As Suqayriyat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رياض الرماح',
                'name_en' =>          'Riyad Ar Rimah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'روض ابن كميان',
                'name_en' =>          'Rawd Ibn Kumayyan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القرو',
                'name_en' =>          'Al Qaru',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحديدية',
                'name_en' =>          'Al Hadidiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البعيثة',
                'name_en' =>          'Al Bi\'ithah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصغيرية',
                'name_en' =>          'As Sughayriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'حويلان',
                'name_en' =>          'Huwaylan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصباخ',
                'name_en' =>          'As Subakh',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'اللسيب',
                'name_en' =>          'Al Lusayb',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الدعيسة',
                'name_en' =>          'Ad Da\'isah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العاقول',
                'name_en' =>          'Al \'aqul',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البصر',
                'name_en' =>          'Al Busur',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المريشدية',
                'name_en' =>          'Al Murayshdiyah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الطرفية',
                'name_en' =>          'At Turfiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القرعاء',
                'name_en' =>          'Al Qar\'a',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المليداء',
                'name_en' =>          'Al Mulayda\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البطين',
                'name_en' =>          'Al Butayn',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'محير الترمس',
                'name_en' =>          'Mihir At Turmus',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'شري',
                'name_en' =>          'Shari',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشقة العليا',
                'name_en' =>          'Ash Shiqqah Al \'ulya',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشقة السفلى',
                'name_en' =>          'Ash Shiqqah As Suflah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الزبيرة',
                'name_en' =>          'Az Zubayrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قصيباء',
                'name_en' =>          'Qusayba',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القوارة',
                'name_en' =>          'Al Quwarah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الهدية',
                'name_en' =>          'Al Hudayyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الغماس',
                'name_en' =>          'Al Ghammas',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مدرج',
                'name_en' =>          'Mudarraj',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قبة',
                'name_en' =>          'Qibah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم سريحة',
                'name_en' =>          'Umm Surayhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخروعية',
                'name_en' =>          'Al Kharwa\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المجذمية',
                'name_en' =>          'Al Majdhamiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحفيرة / حصاة قحطان',
                'name_en' =>          'Al Hufayrah / Hasat Qahtan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحرملية',
                'name_en' =>          'Al Harmaliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خبراء الثوير',
                'name_en' =>          'Khabra Ath Thawir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرين',
                'name_en' =>          'Ar Rayn',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'محيرقة',
                'name_en' =>          'Muhairiqah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مرقان',
                'name_en' =>          'Marqan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام نخيلة',
                'name_en' =>          'Umm Nakhilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام الدبي',
                'name_en' =>          'Umm Ad Dibay',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خبراء حلوة',
                'name_en' =>          'Khabra Halwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حجيلا',
                'name_en' =>          'Hujayla',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفويلق',
                'name_en' =>          'Al Fuwayliq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القويع',
                'name_en' =>          'Al Quway\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مزعل',
                'name_en' =>          'Miz\'il',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بدائع المشاعلة',
                'name_en' =>          'Badai\' Al Masha\'ilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خبراء فاران',
                'name_en' =>          'Khabra Faran',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خبيب الريم',
                'name_en' =>          'Khubayb Ar Rim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرارة',
                'name_en' =>          'Al Qararah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم طليح',
                'name_en' =>          'Umm Tulayh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المانعية',
                'name_en' =>          'Al Mani\'iyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجديدة',
                'name_en' =>          'Al Jadidah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العدوة',
                'name_en' =>          'Al \'idwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الذيبية',
                'name_en' =>          'Adh Dhibiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصدر',
                'name_en' =>          'As Sadr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ابرقية',
                'name_en' =>          'Abraqiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حجرفة',
                'name_en' =>          'Hajrufah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'معانيق',
                'name_en' =>          'Ma\'aniq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصيهد',
                'name_en' =>          'As Sayhad',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'اللغفة',
                'name_en' =>          'Al Laghfah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخفق الجديد',
                'name_en' =>          'Al Khafaq Al Jadid',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ظلماء',
                'name_en' =>          'Dhalma',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخلائق الشرقية',
                'name_en' =>          'Al Khalaiq Ash Sharqiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المزاحمية',
                'name_en' =>          'Al Muzahimiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'تبراك',
                'name_en' =>          'Tebrak',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الاوسط',
                'name_en' =>          'Al Awsat',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحويرة',
                'name_en' =>          'Al Huwayrrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خشم معضد',
                'name_en' =>          'Khashm Mi\'dad',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البخرا',
                'name_en' =>          'Al Bakhra',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'اللغفية',
                'name_en' =>          'Al Lughfiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المسبر',
                'name_en' =>          'Al Masbar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النظيم',
                'name_en' =>          'An Nadhim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حفرة نساح',
                'name_en' =>          'Hafirat Nisah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عجاج',
                'name_en' =>          '\'ajaj',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المشاعلة',
                'name_en' =>          'Al Masha\'ilah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قنيفذة',
                'name_en' =>          'Qunayfidhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'عفرية',
                'name_en' =>          'Ifriyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخلائق الغربية',
                'name_en' =>          'Al Khalaiq Al Gharbiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجفير',
                'name_en' =>          'Al Jufayr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الأسطح',
                'name_en' =>          'Al Astah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الرجع',
                'name_en' =>          'Ar Raj\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'دمان',
                'name_en' =>          'Duman',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المفرق',
                'name_en' =>          'Al Mafraq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الغزلان',
                'name_en' =>          'Al Ghuzlan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجديد',
                'name_en' =>          'Al Jadid',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'وجمة',
                'name_en' =>          'Wajmah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'عرقوص',
                'name_en' =>          'Arqus',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العنيق',
                'name_en' =>          'Al \'unayq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مرتجة',
                'name_en' =>          'Murattijah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الفقرة',
                'name_en' =>          'Al Faqrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'خلص',
                'name_en' =>          'Khals',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القفاف',
                'name_en' =>          'Al Qifaf',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أم البرك',
                'name_en' =>          'Umm Al Birak',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مريخة',
                'name_en' =>          'Muraykhah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العبلا',
                'name_en' =>          'Al \'abla',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مرموماء',
                'name_en' =>          'Marmuma',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'قرظة',
                'name_en' =>          'Qurudhah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أم فحي',
                'name_en' =>          'Umm Fahi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البركة',
                'name_en' =>          'Al Birkah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الهدى',
                'name_en' =>          'Al Hada',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الغور',
                'name_en' =>          'Al Ghur',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مثعر',
                'name_en' =>          'Math\'ar',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحسينية',
                'name_en' =>          'Al Husayniyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الشفية',
                'name_en' =>          'Ash Shufayyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السليمية',
                'name_en' =>          'As Sulaymiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أبو قرن',
                'name_en' =>          'Abu Qarn',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المسجد',
                'name_en' =>          'Al Masjid',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'اللهبان',
                'name_en' =>          'Al Lahban',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجوابرة',
                'name_en' =>          'Al Jawabirat',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'خرص',
                'name_en' =>          'Khuruss',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'عاصر',
                'name_en' =>          'Asir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الأثود',
                'name_en' =>          'Al Athud',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ترجم',
                'name_en' =>          'Tarjim',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'كتيدة',
                'name_en' =>          'Kitaydah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'سفاء',
                'name_en' =>          'Safa',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'رحقان',
                'name_en' =>          'Rahqan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ثعيل',
                'name_en' =>          'Thu\'ayyil',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المفرق',
                'name_en' =>          'Al Mafraq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الميث',
                'name_en' =>          'Al Mayth',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بئر الغنم',
                'name_en' =>          'Bir Al Ghanam',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المرتجة',
                'name_en' =>          'Al Murtajjah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المعيزلة',
                'name_en' =>          'Al Ma\'ayzilah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحار',
                'name_en' =>          'Al Har',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصديرة',
                'name_en' =>          'As Sudayyirah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'دريبس',
                'name_en' =>          'Diraybis',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بدر',
                'name_en' =>          'Badr',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بئر قيضي',
                'name_en' =>          'Bi\'r Qaydi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الواسطة',
                'name_en' =>          'Al Wasithah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الرايس',
                'name_en' =>          'Ar Rayis',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المسيجيد',
                'name_en' =>          'Al Musayjid',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خفس دغرة',
                'name_en' =>          'Khafs Daghrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البياض',
                'name_en' =>          'Al Biyad',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخرج',
                'name_en' =>          'Al Kharj',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'اليمامة',
                'name_en' =>          'Al Yamamah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرفاع',
                'name_en' =>          'Ar Rufa\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البرة',
                'name_en' =>          'Al Barrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'فرزان',
                'name_en' =>          'Farzan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرفيعة',
                'name_en' =>          'Ar Rafi\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرفائع',
                'name_en' =>          'Ar Rafai\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العذار',
                'name_en' =>          'Al \'adhar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'زميقة',
                'name_en' =>          'Zumayqah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحزم',
                'name_en' =>          'Al Hazm',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الهياثم',
                'name_en' =>          'Al Hayathim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البدع القديم',
                'name_en' =>          'Al Bada\' Al Qadim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدلم',
                'name_en' =>          'Ad Dilam',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الضبعية',
                'name_en' =>          'Ad Dubay\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'نعجان',
                'name_en' =>          'Na\'jan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حي القطار',
                'name_en' =>          'Hai Al Qitar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الناصفة',
                'name_en' =>          'An Nasifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السلمية',
                'name_en' =>          'As Silimiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البدع',
                'name_en' =>          'Al Bada\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السهباء',
                'name_en' =>          'As Sahba\'',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الثليما',
                'name_en' =>          'Ath Thalima',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'التوضيحية',
                'name_en' =>          'At Tawdihiyyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المحطة',
                'name_en' =>          'Al Mahattah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الرغيب',
                'name_en' =>          'Ar Rughayb',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المحمدي',
                'name_en' =>          'Al Muhammadi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصحنة',
                'name_en' =>          'As Sahanah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجريسية',
                'name_en' =>          'Al Juraysiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الغمر',
                'name_en' =>          'Al Ghamr',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المزرع',
                'name_en' =>          'Al Mazri\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'هبا',
                'name_en' =>          'Haba',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصحن',
                'name_en' =>          'As Sahan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مشوقة',
                'name_en' =>          'Mashuqah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أم العراد',
                'name_en' =>          'Umm Al \'arad',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الهرارة',
                'name_en' =>          'Al Harrarah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السدرة',
                'name_en' =>          'As Sidrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجصة',
                'name_en' =>          'Al Jissah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحويمضة',
                'name_en' =>          'Al Huwaymidah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'قران',
                'name_en' =>          'Qaran',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الخفيق',
                'name_en' =>          'Al Khufayq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الهميجة',
                'name_en' =>          'Al Humayjah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصالحية',
                'name_en' =>          'As Salhiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مريغان',
                'name_en' =>          'Murayghan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العشاي',
                'name_en' =>          'Al \'ashshay',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القعر الاسفل',
                'name_en' =>          'Al Qa\'ar Al Asfal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'خليص',
                'name_en' =>          'Khulays',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحدباء',
                'name_en' =>          'Al Hadba',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرهوة',
                'name_en' =>          'Ar Rahwah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القوز',
                'name_en' =>          'Al Qawz',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخنفسة',
                'name_en' =>          'Al Khunfusah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حشاش',
                'name_en' =>          'Hishash',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الضبية',
                'name_en' =>          'Ad Dubayyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البريكة',
                'name_en' =>          'Al Buraykah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفز',
                'name_en' =>          'Al Fazz',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الطينة',
                'name_en' =>          'At Tinah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام الجرم',
                'name_en' =>          'Umm Al Jurm',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدوارة',
                'name_en' =>          'Ad Duwwarah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ابو مراغة',
                'name_en' =>          'Abu Maraghah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحفياء',
                'name_en' =>          'Al Hafya',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخيف',
                'name_en' =>          'Al Khayf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المكسر',
                'name_en' =>          'Al Maksir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفيج',
                'name_en' =>          'Al Fij',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السهم',
                'name_en' =>          'Al Saham',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدف',
                'name_en' =>          'Ad Daff',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المشريفة',
                'name_en' =>          'Al Musharifah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوقب',
                'name_en' =>          'Al Waqib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحلقة',
                'name_en' =>          'Al Halqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جليل',
                'name_en' =>          'Julayyil',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حلمة',
                'name_en' =>          'Hilimah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجضع',
                'name_en' =>          'Al Jid\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البيار',
                'name_en' =>          'Al Biyar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المعالي',
                'name_en' =>          'Al Ma\'ali',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المديد',
                'name_en' =>          'Al Madid',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المريصيع',
                'name_en' =>          'Al Maraysi\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جليلة',
                'name_en' =>          'Jilayyilah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المسماة',
                'name_en' =>          'Al Masammah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحصينية',
                'name_en' =>          'Al Husayniyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغروف',
                'name_en' =>          'Al Ghuruf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البحول',
                'name_en' =>          'Al Bahawal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دوقة',
                'name_en' =>          'Dawqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البخترية',
                'name_en' =>          'Al Bakhtariyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البرزة',
                'name_en' =>          'Al Barzah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السليم',
                'name_en' =>          'As Sulaym',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مهايع',
                'name_en' =>          'Al Mahaya\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المعداء',
                'name_en' =>          'Al Ma\'ada',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام العرمط',
                'name_en' =>          'Umm Al \'urmut',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المليحة',
                'name_en' =>          'Al Milayhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدحلة',
                'name_en' =>          'Ad Dahlah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصليلات',
                'name_en' =>          'As Salaylat',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غصين',
                'name_en' =>          'Ghusayyin',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الكامل',
                'name_en' =>          'Al Kamil',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العيبة العليا',
                'name_en' =>          'Al \'aybah Al \'ulya',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الطليعة',
                'name_en' =>          'Al Taleah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القعور',
                'name_en' =>          'Al Qu\'ur',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغريب',
                'name_en' =>          'Al Gharayyib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مشرق',
                'name_en' =>          'Mishriq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'اللصب',
                'name_en' =>          'Al Lusub',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العمودة',
                'name_en' =>          'Al \'amudah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوقبة',
                'name_en' =>          'Al Waqbah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفارع',
                'name_en' =>          'Al Fari\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخديد',
                'name_en' =>          'Al Khidayd',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المغاوي',
                'name_en' =>          'Al Maghawi',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المقفي',
                'name_en' =>          'Al Maqfa',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحطامية',
                'name_en' =>          'Al Hatamiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'كدوة الأعوج',
                'name_en' =>          'Kidwat Al \'awaj',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'هشيمة',
                'name_en' =>          'Hishaymah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'خبت مزقة',
                'name_en' =>          'Khabt Mizqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السبت',
                'name_en' =>          'As Sabt',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النيلة',
                'name_en' =>          'An Nilah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحليفة',
                'name_en' =>          'Al Hulayfah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المسيليم',
                'name_en' =>          'Al Musaylim',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرى',
                'name_en' =>          'Al Qara',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جمعة ربيعة',
                'name_en' =>          'Jum\'at At Rabiah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفالق',
                'name_en' =>          'Al Faliq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'خميس حرب',
                'name_en' =>          'Khamis Harb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجرد',
                'name_en' =>          'Al Jard',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الركح',
                'name_en' =>          'Ar Rakh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السبطة',
                'name_en' =>          'As Sabatah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الثلوث',
                'name_en' =>          'Ath Thuluth',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشصرة',
                'name_en' =>          'Ash Shasarah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عمرات',
                'name_en' =>          '\'amrat',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عاجة',
                'name_en' =>          '\'ajah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العقدة',
                'name_en' =>          'Al \'uqdah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخمجان',
                'name_en' =>          'Al Khumjan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الكدنة',
                'name_en' =>          'Al Kadanah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شينانة',
                'name_en' =>          'Shaynanah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجلمة',
                'name_en' =>          'Al Jilamah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصرح',
                'name_en' =>          'As Sarh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصعيب',
                'name_en' =>          'As Sa\'ayb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرية',
                'name_en' =>          'Al Qurayyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المضحاة',
                'name_en' =>          'Al Madhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النهيمية',
                'name_en' =>          'An Nihaymiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغريف',
                'name_en' =>          'Al Gharif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشرع',
                'name_en' =>          'Ash Shar\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدغمية',
                'name_en' =>          'Ad Dughmiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'أم راكة',
                'name_en' =>          'Umm Rakah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدبيلة',
                'name_en' =>          'Ad Dubayyilah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جبار',
                'name_en' =>          'Jabbar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحجف',
                'name_en' =>          'Al Hajf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'أبو جميدة',
                'name_en' =>          'Abu Jumaydah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غثاة',
                'name_en' =>          'Ghithah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الضحياء',
                'name_en' =>          'Ad Dahya',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الطراق',
                'name_en' =>          'At Tiraq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخريمي',
                'name_en' =>          'Al Khuraymi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مزارع الدوية',
                'name_en' =>          'Mazari\' Ad Dawayyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القرفاء',
                'name_en' =>          'Al Qarfa',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الطويفح',
                'name_en' =>          'Al Tuwaifah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مبرز',
                'name_en' =>          'Mubaraz',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السليل',
                'name_en' =>          'As Sulayyil',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'سبيعة',
                'name_en' =>          'Sibi\'ah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الرشاوية',
                'name_en' =>          'Ar Rishawiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الميركة',
                'name_en' =>          'Al Mirakah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشلالة',
                'name_en' =>          'Ash Shallalah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أم العماير',
                'name_en' =>          'Umm Al \'amayir',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مزارع تخاييل',
                'name_en' =>          'Mazari Takhayil',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع إبضة',
                'name_en' =>          'Badai\' Ibdah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحورا',
                'name_en' =>          'Al Hawra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قرية البطين',
                'name_en' =>          'Qaryat Al Butain',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'إبضة',
                'name_en' =>          'Ibdah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ثرال',
                'name_en' =>          'Thiral',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'زيخين',
                'name_en' =>          'Zikhin',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الخيط',
                'name_en' =>          'Al Khayt',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصلبية',
                'name_en' =>          'As Sulubiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المعازل',
                'name_en' =>          'Al Ma\'azil',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المضابيع',
                'name_en' =>          'Al Madabi\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الساقية',
                'name_en' =>          'As Saqiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشنان',
                'name_en' =>          'Ash Shinan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العدوة',
                'name_en' =>          'Al \'idwah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السعيرة',
                'name_en' =>          'As Su\'ayyirah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'رك',
                'name_en' =>          'Rakk',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الفويلق / الرشاوية',
                'name_en' =>          'Al Fuwaileq / Ar Rishawiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الابيتر',
                'name_en' =>          'Al Ubaitir',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الكهيفية',
                'name_en' =>          'Al Kihayfiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العظيم',
                'name_en' =>          'Al \'udhaim',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المقيصر',
                'name_en' =>          'Al Muqaysir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوطاة',
                'name_en' =>          'Al Watah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الزرب',
                'name_en' =>          'Az Zirb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'اللويات',
                'name_en' =>          'Al Luwayyat',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الأريقط',
                'name_en' =>          'Al Urayqit',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المعيزيلة',
                'name_en' =>          'Al Mu\'azilah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشرفية',
                'name_en' =>          'Ash Shurufiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البريكة',
                'name_en' =>          'Al Buraykah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الظليم',
                'name_en' =>          'Ad Dhalim',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحنو',
                'name_en' =>          'Al Hinu',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجعيرة',
                'name_en' =>          'Al Ju\'ayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحزم',
                'name_en' =>          'Al Hazm',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخرمة',
                'name_en' =>          'Al Khurmah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغريف',
                'name_en' =>          'Al Gharif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شبيرم',
                'name_en' =>          'Shubayrim',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مطية',
                'name_en' =>          'Mityah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دف زيني',
                'name_en' =>          'Daff Zayni',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النويدرة',
                'name_en' =>          'An Nuwaydirah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصمد',
                'name_en' =>          'As Samad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المرشدية',
                'name_en' =>          'Al Murshidiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدوح الكبير',
                'name_en' =>          'Ad Dawh Al Kabir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجموم',
                'name_en' =>          'Al Jumum',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ابو عروة',
                'name_en' =>          'Abu \'urwah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البرابير',
                'name_en' =>          'Al Brabir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قرن السرور',
                'name_en' =>          'Qarn As Surur',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحميمة',
                'name_en' =>          'Al Humaimah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حرة الجبل',
                'name_en' =>          'Harat Al Jabal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سمد الحميمة',
                'name_en' =>          'Samd Al Humaymah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النزهة',
                'name_en' =>          'An Nuzhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشعبة',
                'name_en' =>          'Ash Shu\'abah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القذال',
                'name_en' =>          'Al Qadhal',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شواحط',
                'name_en' =>          'Shawahit',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عدمن',
                'name_en' =>          '\'adaman',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المنيظر',
                'name_en' =>          'Al Munaydhir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'محبة',
                'name_en' =>          'Mahabbah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفصيلة',
                'name_en' =>          'Al Fasilah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المسلمة',
                'name_en' =>          'Al Maslamah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخوش',
                'name_en' =>          'Al Khawsh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الكنبي',
                'name_en' =>          'Al Kanabi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القيوار',
                'name_en' =>          'Al Qiwar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القنعات',
                'name_en' =>          'Al Qana\'at',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الميفاء',
                'name_en' =>          'Al Mifa',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'صعابان',
                'name_en' =>          'Sa\'aban',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مكهاف',
                'name_en' =>          'Makhaf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المنظر',
                'name_en' =>          'Al Mandhar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أم فرع',
                'name_en' =>          'Umm Fura\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القريحة',
                'name_en' =>          'Al Qurayhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفرعة',
                'name_en' =>          'Al Far\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أم شعبين',
                'name_en' =>          'Umm Sh\'bayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مشرف',
                'name_en' =>          'Mushrif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قزة',
                'name_en' =>          'Quzzah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سيالة',
                'name_en' =>          'Sayalah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الأحسر',
                'name_en' =>          'Al Ahsar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفاضية',
                'name_en' =>          'Al Fadiyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'نعص',
                'name_en' =>          'Na\'s',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الضحي',
                'name_en' =>          'Ad Dahi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحيد عبس',
                'name_en' =>          'Al Hayd \'abs',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطرقة',
                'name_en' =>          'At Taraqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المجاردة',
                'name_en' =>          'Al Majardah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحمة',
                'name_en' =>          'Al Himah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العقيقة',
                'name_en' =>          'Al Aqiqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بارق',
                'name_en' =>          'Bariq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الهرير الشرقي - الجازي',
                'name_en' =>          'Al Hurayr Ash Sharqi (Al Jazi)',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'طيب الإسم',
                'name_en' =>          'Tayyib Al Ism',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العمارة',
                'name_en' =>          'Al \'ammarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بيشة',
                'name_en' =>          'Bishah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المزارقة',
                'name_en' =>          'Al Mazarqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل غيثان',
                'name_en' =>          'Al Ghaythan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الشريفي',
                'name_en' =>          'Al Ash Shirayfi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل التوم',
                'name_en' =>          'Al At Tum',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل سويد',
                'name_en' =>          'Al Suwayd',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصمدة',
                'name_en' =>          'As Simidah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفيض',
                'name_en' =>          'Al Fayd',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مريح',
                'name_en' =>          'Al Mirayyih',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'صفوان',
                'name_en' =>          'Safwan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرونة',
                'name_en' =>          'Ar Runah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الذيب',
                'name_en' =>          'Al Adh Dhib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'روضان',
                'name_en' =>          'Rawdan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مطربة',
                'name_en' =>          'Mutribah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'حداء',
                'name_en' =>          'Hada\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المقايث',
                'name_en' =>          'Al Maqayth',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرينة / هداة الشام',
                'name_en' =>          'Al Qurainah / Hadat Ash Sham',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القعضبة',
                'name_en' =>          'Al Qi\'dubah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الزلال',
                'name_en' =>          'Az Zallal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرويغة',
                'name_en' =>          'Ar Ruwayghag',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العصب',
                'name_en' =>          'Al \'asb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القعرة',
                'name_en' =>          'Al Qa\'arah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المعلاة',
                'name_en' =>          'Al Ma\'lah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجرف',
                'name_en' =>          'Al Jarf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجيشي',
                'name_en' =>          'Al Jayshi',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الزريب',
                'name_en' =>          'Az Zurayb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البناية',
                'name_en' =>          'Al Binayah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'فيدة',
                'name_en' =>          'Faydah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشامية',
                'name_en' =>          'Ash Shamiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المقيطيع',
                'name_en' =>          'Al Muqayti\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المقايتة',
                'name_en' =>          'Al Maqaytah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المقر',
                'name_en' =>          'Al Miqarr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ابو حصانية',
                'name_en' =>          'Abu Hasaniyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النوارية',
                'name_en' =>          'An Nawariyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخيف',
                'name_en' =>          'Al Khayf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الضرس',
                'name_en' =>          'Adh Dhars',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرية',
                'name_en' =>          'Al Qurayyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مشجي',
                'name_en' =>          'Mushaji',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخلاصة',
                'name_en' =>          'Al Khulasah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القاحة',
                'name_en' =>          'Al Qahah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القاع',
                'name_en' =>          'Al Qa\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عسفان',
                'name_en' =>          '\'isfan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المجمعة',
                'name_en' =>          'Al Majma\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مدركة',
                'name_en' =>          'Madrakah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عين شمس',
                'name_en' =>          '\'ayn Shams',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الريان',
                'name_en' =>          'Ar Rayyan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جرير',
                'name_en' =>          'Jarir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفائزية',
                'name_en' =>          'Al Faiziyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المصارير',
                'name_en' =>          'Al Masarir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النويعمة',
                'name_en' =>          'An Nuway\'mah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وادي الدواسر',
                'name_en' =>          'Wadi Ad Dawasir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ابرق النعام',
                'name_en' =>          'Abraq An Na \'am',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'كمدة',
                'name_en' =>          'Kamdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفاو',
                'name_en' =>          'Al Faw',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حرجة الزفر',
                'name_en' =>          'Hirjat Az Zufur',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حجلة السواد',
                'name_en' =>          'Hajlat As Suwad',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الكواكب',
                'name_en' =>          'Al Kawakib',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الدلعبي',
                'name_en' =>          'Ad Dhala\'aby',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بني لبيب',
                'name_en' =>          'Bani Labib',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خشم البازوم',
                'name_en' =>          'Khashm Al Bazum',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السليل',
                'name_en' =>          'As Sulayyil',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'خيران',
                'name_en' =>          'Khayran',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'تمرة',
                'name_en' =>          'Tamrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حمام',
                'name_en' =>          'Himam',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ريدا',
                'name_en' =>          'Rayda',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الوسقة',
                'name_en' =>          'Al Wasqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المدرج',
                'name_en' =>          'Al Midrij',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحدبة',
                'name_en' =>          'Al Hadabah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الخصرة',
                'name_en' =>          'Al Khasirah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عوية',
                'name_en' =>          '\'uwayyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المشاش',
                'name_en' =>          'Al Mishash',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'روام',
                'name_en' =>          'Rwam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحصاحص',
                'name_en' =>          'Al Hasahis',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المدير',
                'name_en' =>          'Al Mudir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ذي رهجان',
                'name_en' =>          'Dhi Rahjan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'اللغيسيم',
                'name_en' =>          'Al Lughaysim',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوقرين',
                'name_en' =>          'Al Waqrayn',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصواملة',
                'name_en' =>          'As Suwamilah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصدية',
                'name_en' =>          'As Sadiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سوق الجمعة',
                'name_en' =>          'Suq Al Jum\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مسعدة',
                'name_en' =>          'Masa\'dah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'ظهي',
                'name_en' =>          'Dhaha',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'سلم الزواهرة',
                'name_en' =>          'Salam Az Zuwahirah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'أم الشوك',
                'name_en' =>          'Umm Ash Shawk',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحريقة',
                'name_en' =>          'Al Hariqah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحبقة',
                'name_en' =>          'Al Habqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'كرش',
                'name_en' =>          'Karsh',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'مفتاح',
                'name_en' =>          'Miftah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الكردم',
                'name_en' =>          'Al Kurdum',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الليث',
                'name_en' =>          'Al Lith',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجائزة',
                'name_en' =>          'Al Jaizah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قاعس',
                'name_en' =>          'Qa\'is',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المضحاة',
                'name_en' =>          'Al Madhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الميثاء',
                'name_en' =>          'Al Maytha',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغرات',
                'name_en' =>          'Al Ghurrat',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صلعة',
                'name_en' =>          'Sala\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ضبيعة',
                'name_en' =>          'Dubay\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشعبة',
                'name_en' =>          'Ash Shu\'abah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحلي',
                'name_en' =>          'Al Hulay',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القري',
                'name_en' =>          'Al Quray',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الرنيفة',
                'name_en' =>          'Ar Runayfah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سوق اللصفة',
                'name_en' =>          'Suq Al Lusafah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عيون حارة',
                'name_en' =>          'Uyun Harrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السوحة',
                'name_en' =>          'As Siwahah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ربوع العين',
                'name_en' =>          'Rubu\' Al Ayn',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المجيرمة',
                'name_en' =>          'Al Mijayrimah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السعدية',
                'name_en' =>          'As Sa\'diyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سوق ذرى',
                'name_en' =>          'Suq Dhara',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سوق ترعا',
                'name_en' =>          'Suq Tara\'a',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرفغ',
                'name_en' =>          'Ar Rafugh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قرضة',
                'name_en' =>          'Qaradah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البرد',
                'name_en' =>          'Al Barid',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سوق بني يزيد',
                'name_en' =>          'Suq Bani Yazid',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حقال',
                'name_en' =>          'Haqal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الساعي',
                'name_en' =>          'As Sa\'i',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ذنباء',
                'name_en' =>          'Dhanaba',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المقسبة',
                'name_en' =>          'Al Maqsabah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شراقب',
                'name_en' =>          'Sharaqib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شيباي',
                'name_en' =>          'Shaybay',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قفيلان',
                'name_en' =>          'Qufaylan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصالف',
                'name_en' =>          'As Salif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صبح',
                'name_en' =>          'Sabah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغالة',
                'name_en' =>          'Al Ghalah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غميقة',
                'name_en' =>          'Ghumayqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحجرة',
                'name_en' =>          'Al Hajrah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'لملم',
                'name_en' =>          'Lamlam',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجرين',
                'name_en' =>          'Al Jarin',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الشاقة / الصهوة',
                'name_en' =>          'Al Shaqqah (As Shwah)',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السفح',
                'name_en' =>          'As Safah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حزم مفتاح',
                'name_en' =>          'Hazam Miftah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'جاش',
                'name_en' =>          'Jash',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'روضة جاش',
                'name_en' =>          'Rawdat Jash',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحرفين',
                'name_en' =>          'Al Harfayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لاعس',
                'name_en' =>          'La\'is',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مريغان',
                'name_en' =>          'Murayghan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدريب',
                'name_en' =>          'Ad Dirayb',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجازع',
                'name_en' =>          'Al Jazi\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفاخرية',
                'name_en' =>          'Al Fakhriyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'كتنة',
                'name_en' =>          'Kutnah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجزيرة',
                'name_en' =>          'Al Jazirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحنيك',
                'name_en' =>          'Al Hanek',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مريخة',
                'name_en' =>          'Muraykhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'تثليث',
                'name_en' =>          'Tathlith',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ال سويدان',
                'name_en' =>          'Al Suwaydan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ال عيفان',
                'name_en' =>          'Al Ayfan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ال خميسة',
                'name_en' =>          'Al Khumaysah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القيرة',
                'name_en' =>          'Al Qirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحمضة',
                'name_en' =>          'Al Hamdah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الزرق',
                'name_en' =>          'Az Zurq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حبية',
                'name_en' =>          'Habiyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'رغوان',
                'name_en' =>          'Rughwan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الامواه',
                'name_en' =>          'Al Amwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصبيخة',
                'name_en' =>          'As Subaykhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الإشتاء',
                'name_en' =>          'Al Ishta',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'المكاتيم',
                'name_en' =>          'Al Makatim',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحكمان',
                'name_en' =>          'Al Hukman',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الكلبة',
                'name_en' =>          'Al Kalibah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الثراوين',
                'name_en' =>          'Ath Tharawin',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'قريش الحسن',
                'name_en' =>          'Quraysh Al Hasan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الضبيعات',
                'name_en' =>          'Ad Dubay\'at',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'وادي بطحان',
                'name_en' =>          'Wadi Bathan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الكرادسة',
                'name_en' =>          'Al Karadisah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'سبيحة العليا',
                'name_en' =>          'Sabihah Al \'ulya',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'القرى',
                'name_en' =>          'Al Qara',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الاطاولة',
                'name_en' =>          'Al Atawlah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بيدة',
                'name_en' =>          'Baydah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'القسمة',
                'name_en' =>          'Al Qisamah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'نخال',
                'name_en' =>          'Nikhal',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الخليج',
                'name_en' =>          'Al Khalij',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصبيحي',
                'name_en' =>          'As Sabihi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المدراء',
                'name_en' =>          'Al Madra',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الباقرة',
                'name_en' =>          'Al Baqirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'نمران',
                'name_en' =>          'Namran',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شديق',
                'name_en' =>          'Shudayq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحرف',
                'name_en' =>          'Al Harf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العطف',
                'name_en' =>          'Al \'atf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدحو',
                'name_en' =>          'Ad Duhu',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحريرة',
                'name_en' =>          'Al Hurayrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشقيقة',
                'name_en' =>          'Ash Shaqiqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'النقيع',
                'name_en' =>          'An Naqi\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرفائع',
                'name_en' =>          'Ar Rafai\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجنينة',
                'name_en' =>          'Al Junaynah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عيدان',
                'name_en' =>          'Idan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أم الفروغ',
                'name_en' =>          'Umm Al Furugh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عقيلية',
                'name_en' =>          '\'aqiliyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بينة',
                'name_en' =>          'Baynah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عرمان',
                'name_en' =>          '\'arman',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القديحي',
                'name_en' =>          'Al Qadihy',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'واعر',
                'name_en' =>          'Wa\'ir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشط',
                'name_en' =>          'Ash Shatt',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المروة',
                'name_en' =>          'Al Marwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المهامل',
                'name_en' =>          'Al Mahamil',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المجمعة',
                'name_en' =>          'Al Majma\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحيفة',
                'name_en' =>          'Al Hifah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مهر',
                'name_en' =>          'Muhr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البهيم',
                'name_en' =>          'Al Bahim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الغفرات',
                'name_en' =>          'Al Ghafrat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المعدن',
                'name_en' =>          'Al Ma\'din',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القوز',
                'name_en' =>          'Al Qawz',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بادية',
                'name_en' =>          'Badiyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القاع',
                'name_en' =>          'Al Qa\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'كتنة',
                'name_en' =>          'Kutnah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مجحم',
                'name_en' =>          'Mujahhim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحجون',
                'name_en' =>          'Al Hajun',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'صمخ',
                'name_en' =>          'Samakh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الثنية',
                'name_en' =>          'Ath Thaniyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القوزية',
                'name_en' =>          'Al Qawziyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القوباء',
                'name_en' =>          'Al Qawba',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قطبة',
                'name_en' =>          'Qutbah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'دفرخرشان',
                'name_en' =>          'Dafir Kharshan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'جلال',
                'name_en' =>          'Jalal',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بيشة',
                'name_en' =>          'Bishah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الديلمي',
                'name_en' =>          'Ad Dailami',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرقيطاء',
                'name_en' =>          'Ar Ruqaita\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'تبالة',
                'name_en' =>          'Tabalah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحازمي',
                'name_en' =>          'Al Hazmi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخضراء',
                'name_en' =>          'Al Khadra',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الهضبة',
                'name_en' =>          'Al Hadabah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الأبناء',
                'name_en' =>          'Al Abna',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بني جرة',
                'name_en' =>          'Bani Jarrah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'آل مرزوق',
                'name_en' =>          'Al Marzuq',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'آل حميد',
                'name_en' =>          'Al Himayd',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'جبر',
                'name_en' =>          'Jabr',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'حوالة',
                'name_en' =>          'Hawalah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الأزاهرة',
                'name_en' =>          'Al Azahirah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'دارالسوق',
                'name_en' =>          'Dar As Suq',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بني كبير',
                'name_en' =>          'Bani Kabir',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحمران',
                'name_en' =>          'Al Humran',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بلجرشي',
                'name_en' =>          'Biljurashi',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بالشهم',
                'name_en' =>          'Bal Shaham',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بادية بني كبير',
                'name_en' =>          'Badiyat Bani Kabir',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بلعلاء',
                'name_en' =>          'Bal\'ala',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'العفوص',
                'name_en' =>          'Al \'ufus',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'خيرة',
                'name_en' =>          'Khirah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'قرن ظبي',
                'name_en' =>          'Qarn Dhabi',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'شبرقة',
                'name_en' =>          'Shibriqah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الغشامرة',
                'name_en' =>          'Al Ghashamrah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'العباس',
                'name_en' =>          'Al \'abbas',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الباحة',
                'name_en' =>          'Al Baha',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'رغدان',
                'name_en' =>          'Raghdan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الظفير',
                'name_en' =>          'Adh Dhafir',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بني حسن',
                'name_en' =>          'Bani Hasan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بيضان',
                'name_en' =>          'Baydan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الصغرة',
                'name_en' =>          'As Saghrah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بني ظبيان',
                'name_en' =>          'Bani Dhabyan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الشقيق',
                'name_en' =>          'Ash Shaqiq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البظاظة',
                'name_en' =>          'Al Badhdhadhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحرجة',
                'name_en' =>          'Al Harajah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل يزيد',
                'name_en' =>          'Al Yazid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القعرة',
                'name_en' =>          'Al Qa\'arah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفرع',
                'name_en' =>          'Al Far\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البلس',
                'name_en' =>          'Al Balas',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العظة',
                'name_en' =>          'Al \'idhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصرف',
                'name_en' =>          'As Sarf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ثما',
                'name_en' =>          'Thamma',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العاسرة',
                'name_en' =>          'Al \'asirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حجاب',
                'name_en' =>          'Hijab',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحصنة',
                'name_en' =>          'Al Husanah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الزارية',
                'name_en' =>          'Al Az Zariyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحصباء',
                'name_en' =>          'Al Hasba',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل سلمة',
                'name_en' =>          'Al Salamah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ال الشيخ',
                'name_en' =>          'Al Ash Shaykh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البشائر',
                'name_en' =>          'Al Bashair',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القاع',
                'name_en' =>          'Al Qa\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'أبو علي',
                'name_en' =>          'Abu \'ali',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العمودية',
                'name_en' =>          'Al \'amudiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قرن بن ساهر',
                'name_en' =>          'Qarn Bin Sahir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ثلوث عمارة',
                'name_en' =>          'Thuluth \'imarah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حرف مبرة',
                'name_en' =>          'Harf Mibrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفايجة',
                'name_en' =>          'Al Fayijah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحمضة',
                'name_en' =>          'Al Hamdah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ناخسة',
                'name_en' =>          'Nakhusah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'نمرة',
                'name_en' =>          'Numarah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القزعة',
                'name_en' =>          'Al Qaza\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصحنة',
                'name_en' =>          'As Sahanah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المعقص',
                'name_en' =>          'Al Mu\'aqas',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المروة',
                'name_en' =>          'Al Marwah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصفي',
                'name_en' =>          'As Sufay',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشغز',
                'name_en' =>          'Ash Shaghaz',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القضب',
                'name_en' =>          'Al Qadab',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العجالين',
                'name_en' =>          'Al \'ajalin',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشعب',
                'name_en' =>          'Ash Shi\'b',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصلب',
                'name_en' =>          'As Sulb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفريق',
                'name_en' =>          'Al Fariq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السلامة',
                'name_en' =>          'As Salamah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصهوة',
                'name_en' =>          'As Sahwah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عنيكر',
                'name_en' =>          '\'unaykir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الكدسة',
                'name_en' =>          'Al Kidsah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عجلان',
                'name_en' =>          'Ajlan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القحمان',
                'name_en' =>          'Al Quhman',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العرجاء',
                'name_en' =>          'Al \'arja',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البريم',
                'name_en' =>          'Al Buraym',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفرشة',
                'name_en' =>          'Al Farshah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الزعاترة',
                'name_en' =>          'Az Za\'atirah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العماير',
                'name_en' =>          'Al \'amayir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السمرة',
                'name_en' =>          'As Samrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شعب سامر',
                'name_en' =>          'Sha\'ib Samir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السادة',
                'name_en' =>          'As Sadah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القحب',
                'name_en' =>          'Al Qahb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بلاقة',
                'name_en' =>          'Ballaqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'زبيد',
                'name_en' =>          'Zubayd',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مخشوش',
                'name_en' =>          'Makhshush',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العينة',
                'name_en' =>          'Al \'aynah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'خبت السبت',
                'name_en' =>          'Khabt As Sabt',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفاهمة',
                'name_en' =>          'Al Fahimah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ثريبان',
                'name_en' =>          'Thurayban',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المبنى',
                'name_en' =>          'Al Mabna',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القاع',
                'name_en' =>          'Al Qa\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحذيفة',
                'name_en' =>          'Al Hudhayfah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ناخس',
                'name_en' =>          'Nakhis',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الزبيري',
                'name_en' =>          'Az Zubayri',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غراب',
                'name_en' =>          'Ghurab',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السر',
                'name_en' =>          'As Sirr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'آل عامر',
                'name_en' =>          'Al \'amir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'النبيعة',
                'name_en' =>          'An Nubay\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحرش',
                'name_en' =>          'Al Harsh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحدباء',
                'name_en' =>          'Al Hadba',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصدرة',
                'name_en' =>          'As Sudarah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الهدارة',
                'name_en' =>          'Al Haddarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشرى',
                'name_en' =>          'Ash Shara',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الأنفة',
                'name_en' =>          'Al Anafah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القنفذة',
                'name_en' =>          'Al Qunfidhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بلقرن',
                'name_en' =>          'Balqarn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سبت العلاية',
                'name_en' =>          'Sabt Al \'alayah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القوز',
                'name_en' =>          'Al Qawz',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'كياد',
                'name_en' =>          'Kiyad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصفة',
                'name_en' =>          'As Suffah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المظيلف',
                'name_en' =>          'Al Mudhaylif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحبيل',
                'name_en' =>          'Al Habil',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صبياء',
                'name_en' =>          'Sabya\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'باشوت',
                'name_en' =>          'Bashut',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'معشوقة',
                'name_en' =>          'Ma\'shuqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دوقة',
                'name_en' =>          'Dawqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سبت شمران',
                'name_en' =>          'Sabt Shumran',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'احد بني زيد',
                'name_en' =>          'Ahd Bani Zayd',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سبت الجارة',
                'name_en' =>          'Sabt Al Jarah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قدرين',
                'name_en' =>          'Qudrayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل سفيان',
                'name_en' =>          'Al Sufyan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البدلة',
                'name_en' =>          'Al Badlah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مملح',
                'name_en' =>          'Mamlah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل جودة',
                'name_en' =>          'Al Jawdah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بني زهير',
                'name_en' =>          'Bani Zuhayr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحدباء',
                'name_en' =>          'Al Hadba',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل إثيبة',
                'name_en' =>          'Al Ithibah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'تلاء',
                'name_en' =>          'Tala',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القيسة',
                'name_en' =>          'Al Qaysah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل فارس',
                'name_en' =>          'Al Faris',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الذفراء',
                'name_en' =>          'Adh Dhafra',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بطحة',
                'name_en' =>          'Bathah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بني قيس',
                'name_en' =>          'Bani Qays',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القضوى',
                'name_en' =>          'Al Qadwa',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحميطة',
                'name_en' =>          'Al Humayyitah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرشداء',
                'name_en' =>          'Ar Rashda',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لبوة',
                'name_en' =>          'Labwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل حضينان',
                'name_en' =>          'Al Hidaynan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المجرا',
                'name_en' =>          'Al Mujra',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخرب',
                'name_en' =>          'Al Kharb',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل صقر',
                'name_en' =>          'Al Saqr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'جليلة',
                'name_en' =>          'Jilayyilah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'طعمة',
                'name_en' =>          'Ti\'mah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المعاملة',
                'name_en' =>          'Al Mu\'amalah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحيمة',
                'name_en' =>          'Al Haymah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البطنة',
                'name_en' =>          'Al Batnah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بيش',
                'name_en' =>          'Bish',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحيفة',
                'name_en' =>          'Al Hifah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطريف الأعلى',
                'name_en' =>          'At Turayf Al A\'la',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المضة',
                'name_en' =>          'Al Maddah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عرقة',
                'name_en' =>          '\'irqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ثفرة',
                'name_en' =>          'Thafrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'فرعة قواء',
                'name_en' =>          'Far\'at Quwa',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البرقاء',
                'name_en' =>          'Al Barqa',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'فرسان',
                'name_en' =>          'Farasan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لسس',
                'name_en' =>          'Lasas',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القوز',
                'name_en' =>          'Al Qawz',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصفا الملبد',
                'name_en' =>          'As Safa Al Mulabad',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الثعيلبة',
                'name_en' =>          'Ath Thu\'aylibah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطلحة',
                'name_en' =>          'At Talhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بادية',
                'name_en' =>          'Badiyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البغث',
                'name_en' =>          'Al Baghath',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المريفق',
                'name_en' =>          'Al Murayfiq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحرفين',
                'name_en' =>          'Al Harfayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القضة',
                'name_en' =>          'Al Qaddah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحامض',
                'name_en' =>          'Al Hamid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطلاح',
                'name_en' =>          'At Tilah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'واسط',
                'name_en' =>          'Wasit',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'خشم شاع',
                'name_en' =>          'Khashm Sha\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخضاير',
                'name_en' =>          'Al Khadayir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مشحذ',
                'name_en' =>          'Mashhidh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بريم السليل',
                'name_en' =>          'Buraym As Silil',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البردان',
                'name_en' =>          'Al Burdan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'رغوة',
                'name_en' =>          'Raghwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل سعيد',
                'name_en' =>          'Al Sa\'id',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الغول',
                'name_en' =>          'Al Ghawl',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الهايلة',
                'name_en' =>          'Al Al Hayilah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل جرمان',
                'name_en' =>          'Al Jarman',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عرقة',
                'name_en' =>          '\'irqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحواويش',
                'name_en' =>          'Al Hawawish',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المري',
                'name_en' =>          'Al Marri',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل شويل',
                'name_en' =>          'Al Shuwayl',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'كدمان',
                'name_en' =>          'Kidman',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصفية',
                'name_en' =>          'As Sufayyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'إبن نجم',
                'name_en' =>          'Ibn Nijam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المثناة',
                'name_en' =>          'Al Mathnah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'هدباء',
                'name_en' =>          'Hadba\'',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'وادي ابن هشبل',
                'name_en' =>          'Wadi Ibn Hashbal',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ال بي ثور',
                'name_en' =>          'Al Bi Thawr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السلع',
                'name_en' =>          'As Sila',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المضة',
                'name_en' =>          'Al Maddah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'خيبر الجنوب',
                'name_en' =>          'Khaybar Al Janub',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحثدة',
                'name_en' =>          'Al Hithadah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الباعق',
                'name_en' =>          'Al Ba\'iq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العرض',
                'name_en' =>          'Al \'ard',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أم ضحي',
                'name_en' =>          'Umm Dahi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل ثوبان',
                'name_en' =>          'Al Thawban',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحيلة',
                'name_en' =>          'Al Haylah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مراتخ',
                'name_en' =>          'Muratikh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أم ظهور الرفود',
                'name_en' =>          'Umm Dhuhur Ar Rafud',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مجزوعة',
                'name_en' =>          'Majzu\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرونة',
                'name_en' =>          'Al Qurunah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الريع',
                'name_en' =>          'Ar Ri\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قنيفد',
                'name_en' =>          'Qinayfid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المربع',
                'name_en' =>          'Al Murabba\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفاهمة',
                'name_en' =>          'Al Fahimah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل محصن',
                'name_en' =>          'Al Muhsun',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'النصب',
                'name_en' =>          'An Nusub',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المسلم',
                'name_en' =>          'Al Muslim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الريش',
                'name_en' =>          'Ar Raysh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحاجب',
                'name_en' =>          'Al Hajib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل علين',
                'name_en' =>          'Al \'illin',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحضن',
                'name_en' =>          'Al Hadan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المكثر',
                'name_en' =>          'Al Mukaththir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البارك',
                'name_en' =>          'Al Barik',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المغمر',
                'name_en' =>          'Al Maghmar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العيدة',
                'name_en' =>          'Al \'idah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحجف',
                'name_en' =>          'Al Hajf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المقاعد',
                'name_en' =>          'Al Maqa\'id',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شعب دريب',
                'name_en' =>          'Shi\'b Durayb',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الكديد',
                'name_en' =>          'Al Kadid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السحر',
                'name_en' =>          'As Sahar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'إبن عبيدي',
                'name_en' =>          'Ibn \'abidi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجبهة',
                'name_en' =>          'Al Jabhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحرة',
                'name_en' =>          'Al Harrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'معصم',
                'name_en' =>          'Ma\'sam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحدبات',
                'name_en' =>          'Al Hadabat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المعشور',
                'name_en' =>          'Al Ma\'shur',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المسلمة',
                'name_en' =>          'Al Maslamah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بين الجبلين',
                'name_en' =>          'Bayn Al Jablayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحشف',
                'name_en' =>          'Al Hashaf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ريمان',
                'name_en' =>          'Rayman',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخليف',
                'name_en' =>          'Al Khalif',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الراحة',
                'name_en' =>          'Ar Rahah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العفارة',
                'name_en' =>          'Al \'afarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البجيلي',
                'name_en' =>          'Al Bajili',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العقل',
                'name_en' =>          'Al \'aql',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المجمعة',
                'name_en' =>          'Al Majma\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سيال',
                'name_en' =>          'Sayyal',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل معلوي',
                'name_en' =>          'Al Ma\'lawi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخطيم',
                'name_en' =>          'Al Khutaym',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفي',
                'name_en' =>          'Al Fayy',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجردان',
                'name_en' =>          'Al Jardan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'خارف',
                'name_en' =>          'Kharif',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشرف',
                'name_en' =>          'Ash Sharaf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سارة',
                'name_en' =>          'Sarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سقامة',
                'name_en' =>          'Siqamah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخبارة',
                'name_en' =>          'Al Khabarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'غديقة',
                'name_en' =>          'Ghudayqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخرجة',
                'name_en' =>          'Al Kharjah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدبانية',
                'name_en' =>          'Ad Dubaniyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصبخة',
                'name_en' =>          'As Sabkhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صعبة',
                'name_en' =>          'Sa\'bah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صور بن شكوان',
                'name_en' =>          'Sur Bin Shakwan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخشاشة',
                'name_en' =>          'Al Khashashah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العوصاء',
                'name_en' =>          'Al \'awsa',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخشة',
                'name_en' =>          'Al Khashah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'لغب',
                'name_en' =>          'Laghab',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرحى',
                'name_en' =>          'Ar Raha',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حريزة',
                'name_en' =>          'Harizah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخضراء',
                'name_en' =>          'Al Khadra',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحورة',
                'name_en' =>          'Al Hawrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'رضوان',
                'name_en' =>          'Radwan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حبث',
                'name_en' =>          'Habath',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل ناهية',
                'name_en' =>          'Al Nahiyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الذيب',
                'name_en' =>          'Al Adh Dhib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'فتاح',
                'name_en' =>          'Futah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مسلت',
                'name_en' =>          'Maslat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل شدادي',
                'name_en' =>          'Al Shaddadi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عاصمي',
                'name_en' =>          'Al \'asimi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ذي حصيمو',
                'name_en' =>          'Dhi Husaymu',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'وسانب',
                'name_en' =>          'Wusanib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الزهراء',
                'name_en' =>          'Az Zaha',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المسقوي',
                'name_en' =>          'Al Masqawi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'هدة',
                'name_en' =>          'Hidah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الغال',
                'name_en' =>          'Al Ghal',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'خميس مطير',
                'name_en' =>          'Khamis Mutair',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'محايل',
                'name_en' =>          'Muhayil',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قنا البحر',
                'name_en' =>          'Qana Al Bahr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'خميس البحر',
                'name_en' =>          'Khamis Al Bahr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قشيعة',
                'name_en' =>          'Qushay\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'دالج',
                'name_en' =>          'Dalaj',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شط إبن جازعة',
                'name_en' =>          'Shatt Ibn Jazi\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'منقش',
                'name_en' =>          'Manqash',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدماغ',
                'name_en' =>          'Ad Dimagh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ثلوث ريم',
                'name_en' =>          'Thuluth Rim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحضن',
                'name_en' =>          'Al Hadan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الضاجع',
                'name_en' =>          'Ad Daji\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرصعة',
                'name_en' =>          'Ar Ras\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سنومة',
                'name_en' =>          'Sanumah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجرف',
                'name_en' =>          'Al Jarf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السرو',
                'name_en' =>          'As Sarw',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العشة',
                'name_en' =>          'Al Ashah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مجم',
                'name_en' =>          'Al Majam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحصون',
                'name_en' =>          'Al Husun',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القارية',
                'name_en' =>          'Al Qariyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الذروة',
                'name_en' =>          'Adh Dhurwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشعبين',
                'name_en' =>          'Ash Shi\'bayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عيسى',
                'name_en' =>          'Al \'isa',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مرجومة',
                'name_en' =>          'Marjumah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بيغ',
                'name_en' =>          'Bayyagh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجزوة',
                'name_en' =>          'Al Jazwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'فقوة',
                'name_en' =>          'Faqwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل متعالي',
                'name_en' =>          'Al Mut\'ali',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'دبلاء',
                'name_en' =>          'Dabla',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'كلمة',
                'name_en' =>          'Kalmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مصم',
                'name_en' =>          'Al Masam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'يسراة',
                'name_en' =>          'Yasrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الأثل',
                'name_en' =>          'Al Athl',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لصناي',
                'name_en' =>          'Lasnay',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عكية',
                'name_en' =>          '\'ukyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرار',
                'name_en' =>          'Al Qarar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجرف',
                'name_en' =>          'Al Jarf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'فيشان',
                'name_en' =>          'Fayshan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الراحة',
                'name_en' =>          'Ar Rahah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'اللصبة',
                'name_en' =>          'Al Lasbah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'جو جيبة',
                'name_en' =>          'Jaww Jibah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لهد',
                'name_en' =>          'Luhud',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الهدانة',
                'name_en' =>          'Al Hadanah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أبو ذراع',
                'name_en' =>          'Abu Dhira\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'رجال المع',
                'name_en' =>          'Rijal Al Ma\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السودة',
                'name_en' =>          'As Sudah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحريضة',
                'name_en' =>          'Al Huraydah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخطوة',
                'name_en' =>          'Al Khutwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحبيل',
                'name_en' =>          'Al Habil',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل قفيع',
                'name_en' =>          'Al Qifay\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المضيق',
                'name_en' =>          'Al Madiq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل لغر',
                'name_en' =>          'Al Laghir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الهضبة',
                'name_en' =>          'Al Hadabah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل دلهم',
                'name_en' =>          'Al Dalham',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عنقرة',
                'name_en' =>          '\'unqarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل لوط',
                'name_en' =>          'Al Lut',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مكر',
                'name_en' =>          'Al Makir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عرق',
                'name_en' =>          'Al \'irq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سرايم',
                'name_en' =>          'Sarayim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لزمة',
                'name_en' =>          'Lazmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدرب',
                'name_en' =>          'Ad Darb',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بني تميم',
                'name_en' =>          'Bani Tamim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرحاء',
                'name_en' =>          'Al Qarha',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عمرة',
                'name_en' =>          'Al \'amrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الداحس',
                'name_en' =>          'Al Ad Dahis',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل زهير',
                'name_en' =>          'Al Zuhayr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عراب',
                'name_en' =>          '\'irab',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مشهور',
                'name_en' =>          'Al Mashhur',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عامر',
                'name_en' =>          'Al \'amir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل حديلة',
                'name_en' =>          'Al Hidaylah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل حلامي',
                'name_en' =>          'Al Hilami',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'صفحان',
                'name_en' =>          'Safhan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سامودة',
                'name_en' =>          'Samudah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الغبة',
                'name_en' =>          'Al Ghubbah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المحاميد',
                'name_en' =>          'Al Mahamid',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مسنى الازيار',
                'name_en' =>          'Masna Al \'azyar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحذيفة القالة',
                'name_en' =>          'Al Hudhayfah Al Qalah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ثول',
                'name_en' =>          'Thuwal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام السلم',
                'name_en' =>          'Umm As Salam',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غضن علياء',
                'name_en' =>          'Ghadn Aliya',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بحرة المجاهدين',
                'name_en' =>          'Bahrah Al Mujahidin',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بحرة القديمة',
                'name_en' =>          'Bahrah Al Qadimah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حداء الجديدة',
                'name_en' =>          'Hada\' Al Jadidah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ذهبان',
                'name_en' =>          'Dhahban',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغولاء',
                'name_en' =>          'Al Ghawla',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العوجانية',
                'name_en' =>          'Al \'awjaniyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصفحة',
                'name_en' =>          'As Safhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القضيمة',
                'name_en' =>          'Al Qadimah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ميناء القضيمة',
                'name_en' =>          'Al Qadimah Port',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المواليد',
                'name_en' =>          'Al Mawalid',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دغماء',
                'name_en' =>          'Daghma',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القهب',
                'name_en' =>          'Al Qahab',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الجحصة',
                'name_en' =>          'Al Jahasah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدقم',
                'name_en' =>          'Ad Duqum',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الشهومة',
                'name_en' =>          'Ash Shuhumah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عوية',
                'name_en' =>          '\'uwayyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'سيحان',
                'name_en' =>          'Sayhan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحوية',
                'name_en' =>          'Al Hawiyah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'خميس',
                'name_en' =>          'Humays',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشعبة',
                'name_en' =>          'Ash Shu\'abah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الاحلاف',
                'name_en' =>          'Al Ahlaf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المويه القديم',
                'name_en' =>          'Al Muwayh Al Qadim',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البحرة',
                'name_en' =>          'Al Baharah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البادرية',
                'name_en' =>          'Al Badiriyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الذويب',
                'name_en' =>          'Adh Dhuwayb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مروان',
                'name_en' =>          'Marwan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرارة',
                'name_en' =>          'Al Qararah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'أم الدوم',
                'name_en' =>          'Umm Ad Dawm',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دغيبجة',
                'name_en' =>          'Dughaybjah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرميدة',
                'name_en' =>          'Ar Rumaydah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'خد الحاج',
                'name_en' =>          'Khadd Al Haj',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شويحط',
                'name_en' =>          'Shuwayhit',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'وطيلح',
                'name_en' =>          'Witaylih',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العنبة',
                'name_en' =>          'Al \'anabah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الخضر',
                'name_en' =>          'Al Khudr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الودية',
                'name_en' =>          'Al Wudiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصالحية',
                'name_en' =>          'As Salhiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المحاني',
                'name_en' =>          'Al Mahani',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدار البيضاء',
                'name_en' =>          'Ad Dar Al Bayda',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النمور',
                'name_en' =>          'An Namur',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المبيرز',
                'name_en' =>          'Al Mubayriz',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ملح',
                'name_en' =>          'Malah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغديرين',
                'name_en' =>          'Al Ghadirayn',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الهامة',
                'name_en' =>          'Al Hamah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بئر ابو العجاج',
                'name_en' =>          'Bir Abu Al \'ajjaj',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بئر السادي',
                'name_en' =>          'Bir As Sadi',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'قلعة الاذنم',
                'name_en' =>          'Qal\'at Al Adhnum',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'سلوى',
                'name_en' =>          'Salwa',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'وادي ابو طينة',
                'name_en' =>          'Wadi Abu Tinah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الصورة',
                'name_en' =>          'As Surah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'تريم',
                'name_en' =>          'Tiraym',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بئر فحيمان',
                'name_en' =>          'Bir Fhayman',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'قاصرة',
                'name_en' =>          'Qasrah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'هداج',
                'name_en' =>          'Haddaj',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الحواويط',
                'name_en' =>          'Al Hawawit',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'جبة',
                'name_en' =>          'Jubbah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المهارش',
                'name_en' =>          'Al Mharish',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'ضوجي',
                'name_en' =>          'Duji',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المرير',
                'name_en' =>          'Al Murayr',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'شواق',
                'name_en' =>          'Shuwaq',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'آمدان',
                'name_en' =>          'Amdan',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'رواقا',
                'name_en' =>          'Ruwaqa',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'ضبا',
                'name_en' =>          'Duba',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الخريبة',
                'name_en' =>          'Al Khuraybah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'صر',
                'name_en' =>          'Surr',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'صدر',
                'name_en' =>          'Sadr',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'نابع داما',
                'name_en' =>          'Nabi\' Dama',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'قبقاب',
                'name_en' =>          'Qabqab',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'شرماء',
                'name_en' =>          'Sharma',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'شغب',
                'name_en' =>          'Shaghab',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المويلح',
                'name_en' =>          'Al Muwaylih',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الديسة',
                'name_en' =>          'Ad Disah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'السالمية',
                'name_en' =>          'As Salmiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المريديسية',
                'name_en' =>          'Al Muraydisiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصفراء',
                'name_en' =>          'As Safra',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'خب روضان',
                'name_en' =>          'Khabb Rawdan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المنتزة',
                'name_en' =>          'Al Muntazah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فيد',
                'name_en' =>          'Fayd',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'طابة',
                'name_en' =>          'Tabah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الكهفة',
                'name_en' =>          'Al Kahafah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عقلة بن داني',
                'name_en' =>          'Uqlat Ibn Dani',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عقلة اللبن',
                'name_en' =>          'Uqlat Al Laban',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصفراء',
                'name_en' =>          'As Safra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البير',
                'name_en' =>          'Al Bir',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عقلة ابن كليب',
                'name_en' =>          'Uqlat Ibn Kulayb',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عريجاء',
                'name_en' =>          'Uraija\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المطرفية',
                'name_en' =>          'Al Matrafiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المضيح',
                'name_en' =>          'Al Mudayyih',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'غمرة',
                'name_en' =>          'Ghamrah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'النعي',
                'name_en' =>          'An Ni\'ayy',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجحفة',
                'name_en' =>          'Al Juhfah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العش',
                'name_en' =>          'Al \'ishsh',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السبعان',
                'name_en' =>          'As Sab\'an',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قصر العبد الله',
                'name_en' =>          'Qasr Al \'abdallah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الحفيرات',
                'name_en' =>          'Mazari\' Al Hufayrat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشنانة',
                'name_en' =>          'Ash Shananah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'السمراء',
                'name_en' =>          'As Samra',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العطشان',
                'name_en' =>          'Al \'atshan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'السيق',
                'name_en' =>          'As Siq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القعرة',
                'name_en' =>          'Al Qa\'arah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الاسياح',
                'name_en' =>          'Al Asyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'التنومة',
                'name_en' =>          'At Tannumah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البرود',
                'name_en' =>          'Al Burud',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'خصيبة',
                'name_en' =>          'Khusayyibah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'طريف الاسياح',
                'name_en' =>          'Turayf Al Asyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البندرية',
                'name_en' =>          'Al Bandariyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'حنيظل',
                'name_en' =>          'Hunaydhil',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجعلة',
                'name_en' =>          'Al Ja\'alah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ابا الورود',
                'name_en' =>          'Aba Al Wurood',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ضيدة',
                'name_en' =>          'Didah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النمرية',
                'name_en' =>          'An Nimriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المطيوي الشمالي',
                'name_en' =>          'Al Mutaywi Ash Shamali',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المحلاني',
                'name_en' =>          'Al Mahalani',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عيون الجواء',
                'name_en' =>          'Uyun Al Jawa\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أوثال',
                'name_en' =>          'Uthal',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'غاف الجواء',
                'name_en' =>          'Ghaf Al Jiwa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'روض الجواء',
                'name_en' =>          'Rawd Al Jiwa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشهارين',
                'name_en' =>          'Ash Shaharin',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'أم العراد',
                'name_en' =>          'Umm Al \'arad',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العبيلة',
                'name_en' =>          'Al \'ubaylah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'شبيطة',
                'name_en' =>          'Shubaytah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'شوالة',
                'name_en' =>          'Shawwalah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مركز الشيبة',
                'name_en' =>          'Markaz Ash Shaybah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مركز الخيران',
                'name_en' =>          'Markaz Al Khiran',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'هجرة الطويلة',
                'name_en' =>          'Hijrat At Tawilah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عجائب',
                'name_en' =>          'Ajaib',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الطربيل',
                'name_en' =>          'At Tarbil',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'التهيمية',
                'name_en' =>          'At Tuhaymiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المقدام',
                'name_en' =>          'Al Miqdam',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'السبايرة',
                'name_en' =>          'As Sabayirah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'السباط',
                'name_en' =>          'As Sabat',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجرن',
                'name_en' =>          'Al Jarn',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'برقاء  الركبان',
                'name_en' =>          'Barqa Al Rukban',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عمرات',
                'name_en' =>          '\'amrat',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بطحاء',
                'name_en' =>          'Batha',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العديد',
                'name_en' =>          'Al \'adid',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عردة',
                'name_en' =>          '\'ardah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ذعبلوتن',
                'name_en' =>          'Dha\'blutin',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجديدة',
                'name_en' =>          'Al Jadidah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'نعلة شدقم',
                'name_en' =>          'Na\'lat Shadqam',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الخويس',
                'name_en' =>          'Al Khuways',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'شدقم',
                'name_en' =>          'Shadqam',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابرقية',
                'name_en' =>          'Abraqiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحفاير',
                'name_en' =>          'Al Hafayer',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابن سرحان',
                'name_en' =>          'Ibn Sirhan',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المرضف',
                'name_en' =>          'Al Muraddaf',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحوية',
                'name_en' =>          'Al Hawiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العضيلية',
                'name_en' =>          'Al Udayliyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حرض',
                'name_en' =>          'Harad',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العيون',
                'name_en' =>          'Al Uyun',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحائط',
                'name_en' =>          'Al Hait',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفرعة',
                'name_en' =>          'Al Far\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غزال',
                'name_en' =>          'Ghazal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السلامة',
                'name_en' =>          'As Salamah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المويه الجديد',
                'name_en' =>          'Al Muwayh Al Jadid',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عبال',
                'name_en' =>          '\'abal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجعلان',
                'name_en' =>          'Al Ji\'lan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حلباء',
                'name_en' =>          'Halaba',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حداد',
                'name_en' =>          'Haddad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السيل الصغير',
                'name_en' =>          'As Sayl As Saghir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ريحة',
                'name_en' =>          'Rayhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العرفاء',
                'name_en' =>          'Al \'arfa',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرحبة',
                'name_en' =>          'Ar Rahbah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القهيب',
                'name_en' =>          'Al Quhayb',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القران',
                'name_en' =>          'Al Qaran',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحوية',
                'name_en' =>          'Al Hawiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السيل الكبير',
                'name_en' =>          'As Sayl Al Kabir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السوارفية',
                'name_en' =>          'As Sawarqiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عشيرة الجديدة',
                'name_en' =>          '\'ushayrah Al Jadidah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العطيف',
                'name_en' =>          'Al \'atif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القرشيات',
                'name_en' =>          'Al Qurrashiyat',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عشيرة',
                'name_en' =>          '\'ushayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السايلة',
                'name_en' =>          'As Sayilah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفراع',
                'name_en' =>          'Al Fira\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النجمة',
                'name_en' =>          'An Najmah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العصمان',
                'name_en' =>          'Al \'usman',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العاصد',
                'name_en' =>          'Al \'asid',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'اليعاسيب',
                'name_en' =>          'Al Ya\'asib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشبان',
                'name_en' =>          'Ash Shubban',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العنع',
                'name_en' =>          'Al Qana\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الطوال',
                'name_en' =>          'At Tuwal',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفارعة',
                'name_en' =>          'Al Fari\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المريفق',
                'name_en' =>          'Al Murayfiq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السد',
                'name_en' =>          'As Sadd',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مشرق',
                'name_en' =>          'Mishriq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البورة',
                'name_en' =>          'Al Burah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشرى',
                'name_en' =>          'Ash Shara',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ريشان',
                'name_en' =>          'Rishan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المثان',
                'name_en' =>          'Mithan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المناضح',
                'name_en' =>          'Al Manadih',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العمار',
                'name_en' =>          'Al \'amar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المجرد',
                'name_en' =>          'Al Majrad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'آل عطى',
                'name_en' =>          'Al \'ata',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السلاقا',
                'name_en' =>          'As Salaqa',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدار الحمراء',
                'name_en' =>          'Al Dar Al Hamra',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مران',
                'name_en' =>          'Marran',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شقصان',
                'name_en' =>          'Shaqasan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مظللة',
                'name_en' =>          'Mudallilah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام النخلة',
                'name_en' =>          'Umm An Nakhlah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الذيابات',
                'name_en' =>          'Adh Dhiyabat',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غزايل',
                'name_en' =>          'Ghazayil',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قيا',
                'name_en' =>          'Qiya',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بوا',
                'name_en' =>          'Buwa',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'عشيرة مكتن',
                'name_en' =>          '\'ishayra Maktan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحفائر',
                'name_en' =>          'Al Hafair',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'رمحة',
                'name_en' =>          'Rumhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السلمة',
                'name_en' =>          'As Salamah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حضن',
                'name_en' =>          'Hadan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بئر عن',
                'name_en' =>          'Bir \'inn',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الثابتية',
                'name_en' =>          'Ath Thabitiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جليل',
                'name_en' =>          'Julayyil',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'صلبة',
                'name_en' =>          'Sulubah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الاخاضر',
                'name_en' =>          'Al Akhadir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخرائق',
                'name_en' =>          'Al Kharaiq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'كلاخ',
                'name_en' =>          'Kulakh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'زبيدة',
                'name_en' =>          'Zubaidah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'زعفران',
                'name_en' =>          'Za\'faran',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مرفوض',
                'name_en' =>          'Marfud',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القضيفة',
                'name_en' =>          'Al Qudaifah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بسل',
                'name_en' =>          'Bisil',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السديرة',
                'name_en' =>          'As Sudayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المعقر',
                'name_en' =>          'Al Ma\'qir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الطفلان',
                'name_en' =>          'At Tuflan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصفاة',
                'name_en' =>          'As Sufah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحلقة',
                'name_en' =>          'Al Halqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجدير',
                'name_en' =>          'Al Jadir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخليف',
                'name_en' =>          'Al Khalif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحوطة',
                'name_en' =>          'Al Hawtah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جويرة',
                'name_en' =>          'Juwairah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الطفيحاء',
                'name_en' =>          'At Tufayha',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جوش',
                'name_en' =>          'Jush',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القحوم',
                'name_en' =>          'Al Qahum',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغريب',
                'name_en' =>          'Al Gharayyib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحمراء',
                'name_en' =>          'Al Hamra',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القصر',
                'name_en' =>          'Al Qasr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'اللبة',
                'name_en' =>          'Al Libbah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القريع',
                'name_en' =>          'Al Qari\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشعاعيب',
                'name_en' =>          'Ash Sha\'a\'ib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ميسان',
                'name_en' =>          'Maysan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قها',
                'name_en' =>          'Qaha',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'برحرح',
                'name_en' =>          'Barahrah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الصور',
                'name_en' =>          'As Sur',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ابو راكة',
                'name_en' =>          'Abu Rakah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفريع',
                'name_en' =>          'Al Furay\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوطاة',
                'name_en' =>          'Al Watah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القويعية',
                'name_en' =>          'Al Quway\'iyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'إبن غنام',
                'name_en' =>          'Ibn Ghannam',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ذواد',
                'name_en' =>          'Dhawwad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المبرك',
                'name_en' =>          'Al Mabrak',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العلاوة',
                'name_en' =>          'Al \'ilawah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحائرية',
                'name_en' =>          'Al Hairiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دعيمر',
                'name_en' =>          'Du\'aymir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'وساعد',
                'name_en' =>          'Wusa\'ad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المدرة',
                'name_en' =>          'Al Midarah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الديرة',
                'name_en' =>          'Ad Dayyirah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخالدية',
                'name_en' =>          'Al Khalidiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغرابة',
                'name_en' =>          'Al Ghurabah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العلبة',
                'name_en' =>          'Al \'ilabah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العابسية',
                'name_en' =>          'Al \'abisiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العرقين',
                'name_en' =>          'Al \'irqayn',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغرمول',
                'name_en' =>          'Al Gharmul',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العصلة',
                'name_en' =>          'Al \'isalah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'زلاقة',
                'name_en' =>          'Zallaqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحشفة',
                'name_en' =>          'Al Hashafah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ابو مظلة',
                'name_en' =>          'Abu Madhallah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'تربه',
                'name_en' =>          'Turbah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحشرج',
                'name_en' =>          'Al Hashraj',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شعر',
                'name_en' =>          'Shi\'r',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الربيعية',
                'name_en' =>          'Ar Rabi\'iyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'بئر ابن رشدان',
                'name_en' =>          'Bir Ibn Rashdan',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'القديح',
                'name_en' =>          'Al Qudayh',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الخويلدية',
                'name_en' =>          'Al Khuwildiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الدريدي',
                'name_en' =>          'Ad Duraidy',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الخترشية',
                'name_en' =>          'Al Khatrashiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابو معن',
                'name_en' =>          'Abu Ma\'an',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام الساهك',
                'name_en' =>          'Umm As Sahik',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'صفوى',
                'name_en' =>          'Safwa',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حزم ام الساهك',
                'name_en' =>          'Hazam Umm As Sahik',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الفرش',
                'name_en' =>          'Al Farsh',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجش',
                'name_en' =>          'Al Jish',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عنك',
                'name_en' =>          '\'inak',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حلة محيش',
                'name_en' =>          'Hulat Muhish',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'التوبي',
                'name_en' =>          'At Tubi',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الملاحة',
                'name_en' =>          'Al Malahah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العصيلي',
                'name_en' =>          'Al \'usayli',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'دارين',
                'name_en' =>          'Darin',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العوامية',
                'name_en' =>          'Al \'awwamiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'النابية',
                'name_en' =>          'An Nabiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الزور',
                'name_en' =>          'Az Zawr',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الفريع',
                'name_en' =>          'Al Furay\'',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'شرائع المجاهدين',
                'name_en' =>          'Sharai\' Al Mujahidin',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'التنعيم',
                'name_en' =>          'At Tan\'im',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشرف',
                'name_en' =>          'Ash Sharaf',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الشرائع',
                'name_en' =>          'Ash Sharai\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الريجة',
                'name_en' =>          'Ar Rayjah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قابل عيفان',
                'name_en' =>          'Qabil \'ifan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بني عمير',
                'name_en' =>          'Bani Umayr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'البجيدي',
                'name_en' =>          'Al Bijaydi',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'قرى الصدر',
                'name_en' =>          'Qura As Sadr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المضيق',
                'name_en' =>          'Al Madiq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المجاريش',
                'name_en' =>          'Al Majarish',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحسن',
                'name_en' =>          'Al Hasan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشدقاء',
                'name_en' =>          'Ash Shadqa',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الريقة',
                'name_en' =>          'Ar Riqah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الزيمة',
                'name_en' =>          'Az Zaymah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشميسي',
                'name_en' =>          'Ash Shumaysi',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام حبيتر',
                'name_en' =>          'Umm Hubaytir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصرف',
                'name_en' =>          'As Sarf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'شداد',
                'name_en' =>          'Shadad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام الزلة',
                'name_en' =>          'Umm Al Zillah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بني دعد',
                'name_en' =>          'Bani Da\'ad',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام الراكة',
                'name_en' =>          'Umm Ar Rakah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشعيبة',
                'name_en' =>          'Ash Shu\'aybah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الدحيلة',
                'name_en' =>          'Ad Duhaylah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'جعرانة',
                'name_en' =>          'Ju\'ranah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'طريف',
                'name_en' =>          'Turaif',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'الجراني',
                'name_en' =>          'Al Jirani',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'الحماد',
                'name_en' =>          'Al Hamad',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'نعيج',
                'name_en' =>          'Nu\'ayj',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'قاع الحنو',
                'name_en' =>          'Qa\' Al Hinu',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'عرعر',
                'name_en' =>          'Ar\'ar',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'مركز الصحن',
                'name_en' =>          'Markaz As Sahan',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'العويقلية',
                'name_en' =>          'Al \'uwayqiliyah',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'أبا الرواث',
                'name_en' =>          'Aba Ar Rawath',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'الكاسب',
                'name_en' =>          'Al Kasib',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'أم خنصر',
                'name_en' =>          'Umm Khunsur',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'حزم الجلاميد',
                'name_en' =>          'Hazam Al Jalamid',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'الدويد',
                'name_en' =>          'Ad Duwayd',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'جديدة عرعر',
                'name_en' =>          'Jadidat \'ar\'ar',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'كاف',
                'name_en' =>          'Kaf',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'القرقر',
                'name_en' =>          'Al Qarqar',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'إثرة',
                'name_en' =>          'Ithrah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'غطي',
                'name_en' =>          'Ghutayy',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'القريات',
                'name_en' =>          'Al Qurayyat',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'عين الحواسي',
                'name_en' =>          '\'ayn Al Hawasi',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'قليب خضر',
                'name_en' =>          'Qulayyib Khudr',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'العيساوية',
                'name_en' =>          'Al Isawiyah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الحديثة',
                'name_en' =>          'Al Hadithah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الناصفة',
                'name_en' =>          'An Nasifah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الشقيق',
                'name_en' =>          'Ash Shaqiq',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الحوي',
                'name_en' =>          'Al Hawi',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'صوير',
                'name_en' =>          'Suwayr',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'حدرج',
                'name_en' =>          'Hidrij',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'ام طليحة',
                'name_en' =>          'Umm Tulayhah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'سكاكا',
                'name_en' =>          'Sakaka',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'اللقايط',
                'name_en' =>          'Al Laqayit',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'صبيحة',
                'name_en' =>          'Subayhah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'طبرجل',
                'name_en' =>          'Tubarjal',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الفياض',
                'name_en' =>          'Al Fiyad',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'قارا',
                'name_en' =>          'Qara',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الثنية',
                'name_en' =>          'Ath Thaniyah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'ام نخيلة',
                'name_en' =>          'Umm Nakhilah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'المرير',
                'name_en' =>          'Al Murayr',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'زلوم',
                'name_en' =>          'Zallum',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'النبك ابو قصر',
                'name_en' =>          'An Nabk Abu Qasr',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'طلعة عمار',
                'name_en' =>          'Tal\'at \'ammar',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'عذفاء',
                'name_en' =>          '\'adhfa',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'خوعاء',
                'name_en' =>          'Khaw\'a\'',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الشويحطية',
                'name_en' =>          'Ash Shuwayhitiyah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'مركز أم الحيران',
                'name_en' =>          'Markaz Umm Al Hiran',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'مركز سماح الجديد',
                'name_en' =>          'Markaz Samah Al Jadid',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مركز الظهرة',
                'name_en' =>          'Markaz Adh Dhahrah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'إبن سوقي',
                'name_en' =>          'Ibn Suqi',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'رفحاء',
                'name_en' =>          'Rafha\'',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'نصاب',
                'name_en' =>          'Nisab',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'سماح',
                'name_en' =>          'Samah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'لوقة',
                'name_en' =>          'Lawqah',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'ام رضمة',
                'name_en' =>          'Umm Rudmah',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'ابن لغيصم',
                'name_en' =>          'Ibn Lughaisim',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'روضة هباس',
                'name_en' =>          'Rawdat Habbas',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'التمياط',
                'name_en' =>          'Timiat',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'إبن شريم',
                'name_en' =>          'Ibn Shuraym',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'الشعبة',
                'name_en' =>          'Ash Shu\'abah',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'لينة',
                'name_en' =>          'Linah',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'المركوز',
                'name_en' =>          'Al Markuz',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'دومة الجندل',
                'name_en' =>          'Dawmat Al Jandal',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'ميقوع',
                'name_en' =>          'Mayqu\'',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الأضارع',
                'name_en' =>          'Al Adari\'',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'صفان',
                'name_en' =>          'Safan',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الرديفة',
                'name_en' =>          'Ar Radifah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'ابو عجرم',
                'name_en' =>          'Abu \'ajram',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الطوير',
                'name_en' =>          'At Tuwayr',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'صديان',
                'name_en' =>          'Sadyan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الوسيطاء',
                'name_en' =>          'Al Wusayta',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البير',
                'name_en' =>          'Al Bir',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البويطن',
                'name_en' =>          'Al Buwaytin',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع العش',
                'name_en' =>          'Badai\' Al \'ishsh',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'صحي',
                'name_en' =>          'Sahayy',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الوبيرية',
                'name_en' =>          'Al Wubayriyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قصيريات',
                'name_en' =>          'Qusayriyat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'سعيدان',
                'name_en' =>          'Su\'aydan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'جفيفاء',
                'name_en' =>          'Jufayfa',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الغمياء',
                'name_en' =>          'Al Ghamya',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الفرحانية',
                'name_en' =>          'Al Farhaniyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المليح',
                'name_en' =>          'Al Mulayh',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'حفيرة الشقيق',
                'name_en' =>          'Hafirat Ash Shaqayq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'جرمة',
                'name_en' =>          'Jurumah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السفن',
                'name_en' =>          'As Sufun',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'منيفة القاعد',
                'name_en' =>          'Munifah Al Qa\'id',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القاعد',
                'name_en' =>          'Al Qa\'id',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الطوال',
                'name_en' =>          'At Tuwal',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشعفة',
                'name_en' =>          'Ash Sha\'afah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجلف',
                'name_en' =>          'Al Jilf',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الهرير',
                'name_en' =>          'Al Hurayr',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'طوية',
                'name_en' =>          'Tuwayyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البدع',
                'name_en' =>          'Al Bada\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجديدة',
                'name_en' =>          'Al Jadidah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الرويع',
                'name_en' =>          'Ar Ruway\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العضدي',
                'name_en' =>          'Al \'iddi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المرمى',
                'name_en' =>          'Al Marma',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المندسة الشرقية',
                'name_en' =>          'Al Mindassah Ash Sharqiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'التيم',
                'name_en' =>          'At Tim',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القليبين',
                'name_en' =>          'Al Qulaybayn',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'رينبة',
                'name_en' =>          'Raynibah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المكظم',
                'name_en' =>          'Al Makdham',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحميراء',
                'name_en' =>          'Al Humayra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الغار',
                'name_en' =>          'Al Ghar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المعيقلات',
                'name_en' =>          'Al Mu\'ayqilat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المويكر',
                'name_en' =>          'Al Muwaykir',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المكظم',
                'name_en' =>          'Al Makdham',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الدارة',
                'name_en' =>          'Ad Darah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشبيكة',
                'name_en' =>          'Ash Shubaykah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المبعوثة',
                'name_en' =>          'Al Mab\'uthah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجفر',
                'name_en' =>          'Al Jafr',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المعترضة',
                'name_en' =>          'Al Mu\'taridah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'اللقيطه',
                'name_en' =>          'Al Liqitah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'منشار',
                'name_en' =>          'Minshar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'سهلة بدنة',
                'name_en' =>          'Sahlat Badanah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع مريفق',
                'name_en' =>          'Badai\' Murayfiq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السليل',
                'name_en' =>          'As Sulayyil',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصليعاء',
                'name_en' =>          'As Sulay\'a',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصبيحية',
                'name_en' =>          'As Subayhiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الأثلة',
                'name_en' =>          'Al Athlah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'حويان',
                'name_en' =>          'Huwayyan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المبيدع',
                'name_en' =>          'Al Mubaydi\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المبدع',
                'name_en' =>          'Al Mabda\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'كلوة',
                'name_en' =>          'Kilwah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'العمائر',
                'name_en' =>          'Al \'amair',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشملي',
                'name_en' =>          'Ash Shamli',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المسلسل',
                'name_en' =>          'Al Musalsal',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'سبطر',
                'name_en' =>          'Sibutar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'غرمول العويد',
                'name_en' =>          'Ghurmul Al Uwayd',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحامرية',
                'name_en' =>          'Al Hamiriyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الخبة',
                'name_en' =>          'Al Khubbah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحطي',
                'name_en' =>          'Al Hati',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصنينا',
                'name_en' =>          'As Sunayna\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'دليهان',
                'name_en' =>          'Dulayhan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشقيق',
                'name_en' =>          'Ash Shaqiq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ابا الحيران',
                'name_en' =>          'Aba Al Hiran',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قليب الاطرم',
                'name_en' =>          'Qalib Al Atram',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بيضاء نثيل',
                'name_en' =>          'Bayda\' Nathil',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قناء',
                'name_en' =>          'Qina\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المشيطية',
                'name_en' =>          'Al Mushaytiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'التربية',
                'name_en' =>          'At Turbiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الخطة',
                'name_en' =>          'Al Khuttah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'جبة',
                'name_en' =>          'Jubbah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'موقق',
                'name_en' =>          'Mawqaq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عقلة بن جبرين',
                'name_en' =>          'Uqlat Bin Jabrin',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ام القلبان',
                'name_en' =>          'Umm Al Qulban',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مزارع السحل',
                'name_en' =>          'Mazari\' As Sihhal',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مزارع الرغلية',
                'name_en' =>          'Mazari Ar Righliyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الطليحة',
                'name_en' =>          'At Tulayhah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مزارع الصفيا',
                'name_en' =>          'Mazari\' As Safya',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البدائع',
                'name_en' =>          'Al Badai\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الهمجة',
                'name_en' =>          'Al Hamjah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المهينية',
                'name_en' =>          'Al Mihayniyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجابرية',
                'name_en' =>          'Al Jabiriyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الوعيلي',
                'name_en' =>          'Al Wu\'ayli',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مزارع الرخيصية',
                'name_en' =>          'Mazari\' Ar Rikhaysiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مزارع بيط',
                'name_en' =>          'Mazari\' Bayt',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجثياثة',
                'name_en' =>          'Al Jithyathah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القصعاء',
                'name_en' =>          'Al Qas\'a',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'اللويبدة',
                'name_en' =>          'Al Luwaybidah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجثامية',
                'name_en' =>          'Al Jithamiyyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السويفلة',
                'name_en' =>          'As Suwayfilah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بقعاء',
                'name_en' =>          'Baq\'a',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الاجفر',
                'name_en' =>          'Al Ajfar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'تربه',
                'name_en' =>          'Turbah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ضبيعة',
                'name_en' =>          'Dubay\'ah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشيحية',
                'name_en' =>          'Ash Shihiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشعيبة',
                'name_en' =>          'Ash Shu\'aybah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بقعاء الشرقية',
                'name_en' =>          'Baq\'a\' Ash Sharqiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الثنيان',
                'name_en' =>          'Ath Thinayyan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجديدة',
                'name_en' =>          'Al Jadidah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشعلانية',
                'name_en' =>          'Ash Sha\'laniyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'طلحاء',
                'name_en' =>          'Talha\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العمود',
                'name_en' =>          'Al \'amud',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الحميرة',
                'name_en' =>          'Al Humayrah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الغال',
                'name_en' =>          'Al Ghal',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عينونة',
                'name_en' =>          '\'aynunah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الحشا',
                'name_en' =>          'Al Hasha',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'عينونة',
                'name_en' =>          '\'aynunah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'بئر عودة',
                'name_en' =>          'Bir \'audah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الجدة',
                'name_en' =>          'Al Jiddah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'مطربة',
                'name_en' =>          'Mutribah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الطرفية الغربية',
                'name_en' =>          'At Turfiyah Al Gharbiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البديعة',
                'name_en' =>          'Al Badi\'ah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عريفجان ساحوق',
                'name_en' =>          '\'urayfjan Sahuq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصليبي',
                'name_en' =>          'As Sulaybi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الزهيرية',
                'name_en' =>          'Az Zihayriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'روضة قرادان',
                'name_en' =>          'Rawdat Qiradan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أبانات',
                'name_en' =>          'Abanat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحنينية',
                'name_en' =>          'Al Hinayniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'خضراء',
                'name_en' =>          'Khadra',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ضليع رشيد',
                'name_en' =>          'Dulay\' Rashid',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخطيم',
                'name_en' =>          'Al Khutaym',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عطا',
                'name_en' =>          '\'ata',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عطي',
                'name_en' =>          '\'utayy',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الهمجة',
                'name_en' =>          'Al Hamjah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رفائع اللهيب',
                'name_en' =>          'Ruf\'ai\' Al Luhayb',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجرذاوية',
                'name_en' =>          'Al Jardhawiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الركنة',
                'name_en' =>          'Ar Ruknah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البتراء',
                'name_en' =>          'Al Batra\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحوطة',
                'name_en' =>          'Al Hawtah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العبيل',
                'name_en' =>          'Al \'ubayl',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الوسيطاء',
                'name_en' =>          'Al Wusayta',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'نفجة',
                'name_en' =>          'Nafjah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الغيدانية',
                'name_en' =>          'Al Ghaydaniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العبلة',
                'name_en' =>          'Al \'abla',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الجراوة',
                'name_en' =>          'Mazari\' Al Jirawah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'السميراء',
                'name_en' =>          'As Sumayra',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرضيمة',
                'name_en' =>          'Al Rudaymah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القوعي',
                'name_en' =>          'Al Qaw\'i',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع العقل',
                'name_en' =>          'Mazari\' Al \'aql',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'دخنة',
                'name_en' =>          'Dukhnah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرس',
                'name_en' =>          'Ar Rass',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشنانة',
                'name_en' =>          'Ash Shananah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشورقية',
                'name_en' =>          'Ash Shawraqiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القاع',
                'name_en' =>          'Al Qa\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الطلعة',
                'name_en' =>          'At Tal\'ah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مظيفيرة',
                'name_en' =>          'Mudhayfirah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الوشحاء',
                'name_en' =>          'Al Washha',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الهيشة',
                'name_en' =>          'Al Hishah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحزم',
                'name_en' =>          'Al Hazm',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العدان',
                'name_en' =>          'Al \'adan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عين العقيلي',
                'name_en' =>          '\'ayn Al \'uqayli',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'روضة اللواف',
                'name_en' =>          'Rawdat Al Lawwaf',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العكرشية',
                'name_en' =>          'Al \'ikrashiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'زهلولة',
                'name_en' =>          'Zihlulah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرحيمية',
                'name_en' =>          'Ar Ruhaymiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الوسطى',
                'name_en' =>          'Al Wista',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المفيض',
                'name_en' =>          'Al Mafid',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المحروقة',
                'name_en' =>          'Al Mahruqah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع خريمان',
                'name_en' =>          'Mazari\' Khurayman',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الربقية',
                'name_en' =>          'Ar Ribqiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ام طليحة',
                'name_en' =>          'Umm Tulayhah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فردة',
                'name_en' =>          'Fardah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الناصرية',
                'name_en' =>          'An Nasiriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخرماء الجنوبية',
                'name_en' =>          'Al Kharma Al Janubiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النعايم',
                'name_en' =>          'An Na\'ayim',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'خريمان',
                'name_en' =>          'Khurayman',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المذنب',
                'name_en' =>          'Al Midhnab',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'علباء',
                'name_en' =>          '\'alba',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'روضة الحسو',
                'name_en' =>          'Rawdat Al Hisu',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المربع',
                'name_en' =>          'Al Murabba\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المحلاوية',
                'name_en' =>          'Al Muhallawiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الحزم',
                'name_en' =>          'Mazari\' Al Hazm',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ظليم',
                'name_en' =>          'Dhulyim',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الباطن',
                'name_en' =>          'Al Batin',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المرغلة',
                'name_en' =>          'Al Murghalah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رغابية',
                'name_en' =>          'Raghabiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الطعمية',
                'name_en' =>          'At Tu\'miyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العداين',
                'name_en' =>          'Al \'adayin',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البويطن',
                'name_en' =>          'Al Buwaytin',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرقة',
                'name_en' =>          'Ar Riqa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العبلة',
                'name_en' =>          'Al \'abla',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الروغاني',
                'name_en' =>          'Ar Rawghany',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخفجي',
                'name_en' =>          'Al Khafji',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العوشزية',
                'name_en' =>          'Al Awshaziyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'وادى أبو على',
                'name_en' =>          'Wadi Abu \'ali',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رياض الخبراء',
                'name_en' =>          'Riyad Al Khabra',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'شعب الحمر',
                'name_en' =>          'Shi\'b Al Hamar',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'صبيح',
                'name_en' =>          'Subayh',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'نبيها',
                'name_en' =>          'Nubayha',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشبيبة',
                'name_en' =>          'Ash Shibibiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البدائع أم تلعة',
                'name_en' =>          'Al Bada\'i Umm Tal\'ah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البدائع العليا',
                'name_en' =>          'Al Badai Al \'ulya',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العبيلة',
                'name_en' =>          'Al \'ubaylah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزرعة عبلا',
                'name_en' =>          'Mazra\'at At \'abla',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عبل عبلا',
                'name_en' =>          '\'abal \'abla',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العبدلية',
                'name_en' =>          'Al \'abdaliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحجناوي',
                'name_en' =>          'Al Hajnawi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الدحلة',
                'name_en' =>          'Ad Dahlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البدائع',
                'name_en' =>          'Al Badai\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'دهيماء',
                'name_en' =>          'Duhayma',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الابرق',
                'name_en' =>          'Al Abraq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العبيد',
                'name_en' =>          'Al \'ubayd',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النفيد',
                'name_en' =>          'An Nufayyid',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخبراء',
                'name_en' =>          'Al Khabra\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المحوى',
                'name_en' =>          'Al Mahawa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فيضة ذيبان',
                'name_en' =>          'Faydat Dhiban',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مشرف',
                'name_en' =>          'Mushrif',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العابر',
                'name_en' =>          'Al \'abir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الحقباء',
                'name_en' =>          'Mazari Al Haqba',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحجبة',
                'name_en' =>          'Al Hajbah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الظبة',
                'name_en' =>          'Adh Dhabah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الدعثة',
                'name_en' =>          'Ad Daathah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الضبة',
                'name_en' =>          'Ad Dabbah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحنية',
                'name_en' =>          'Al Haniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ابو خشبة',
                'name_en' =>          'Abu Khashabah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم الخراسع',
                'name_en' =>          'Umm Al Kharasi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الثامرية',
                'name_en' =>          'Ath Thamiriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الداث',
                'name_en' =>          'Ad Dath',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مهدومة',
                'name_en' =>          'Mahdumah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع أم أرطى',
                'name_en' =>          'Mazari\' Umm Arta',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجرارية',
                'name_en' =>          'Al Jarrariyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'خربشاء',
                'name_en' =>          'Kharbasha',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الظاهرية',
                'name_en' =>          'Adh Dhahiriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الظاهرية الجنوبية',
                'name_en' =>          'Adh Dhahiriyah Al Janubiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الناعمة',
                'name_en' =>          'An Na\'imah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الوطاة',
                'name_en' =>          'Al Watah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الغضياء والسلمات',
                'name_en' =>          'Al Ghadya And Salmat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع ثويدج',
                'name_en' =>          'Mazari\' Thuwaydij',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجرير',
                'name_en' =>          'Al Jarir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القيصومة',
                'name_en' =>          'Al Qaysumah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الكنهبلة',
                'name_en' =>          'Al Kanahbilah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السهوة',
                'name_en' =>          'As Sahwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'يانف',
                'name_en' =>          'Yanif',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حلباء',
                'name_en' =>          'Halaba',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العدوة',
                'name_en' =>          'Al \'idwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطلحة',
                'name_en' =>          'At Talhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'النماص',
                'name_en' =>          'An Namas',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حمراء نثيل / ابو شداد',
                'name_en' =>          'Hamrah Nithil (Abu Shadad)',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'خجيم',
                'name_en' =>          'Khajim',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'يدمة',
                'name_en' =>          'Yadamah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'ابا الرخم',
                'name_en' =>          'Aba Ar Rakham',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'مركز الوجيد',
                'name_en' =>          'Markaz Al Wujid',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'ظلماء',
                'name_en' =>          'Dhalma',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'تباشعة',
                'name_en' =>          'Tubash\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أم خيسة',
                'name_en' =>          'Umm Khisah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'صلحلح',
                'name_en' =>          'Salahlah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل خضاري',
                'name_en' =>          'Al Khidari',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'النقرة',
                'name_en' =>          'An Nuqrah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'كمب الضلوع',
                'name_en' =>          'Kamp Ad Dulu\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحفير',
                'name_en' =>          'Al Hufayr',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الودي',
                'name_en' =>          'Al Wuday',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قصر العشروات',
                'name_en' =>          'Qasr Al Ishruwat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'سراء',
                'name_en' =>          'Sara\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'فيضة بن سويلم',
                'name_en' =>          'Faydat Ibn Suwaylim',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'النيصية',
                'name_en' =>          'An Nisiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مريفق',
                'name_en' =>          'Murayfiq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قفار',
                'name_en' =>          'Qufar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'توارين',
                'name_en' =>          'Tuwarin',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عقدة',
                'name_en' =>          '\'iqdah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المحفر',
                'name_en' =>          'Al Mahaffar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المختلف',
                'name_en' =>          'Al Mukhtalif',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصهوة',
                'name_en' =>          'As Sahwah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'اللويمي',
                'name_en' =>          'Al Luwaymi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المستجدة',
                'name_en' =>          'Al Mustajiddah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العجاجة',
                'name_en' =>          'Al \'ajajah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الرقب',
                'name_en' =>          'Ar Raqab',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'النمارة',
                'name_en' =>          'An Nimarah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العيثمة',
                'name_en' =>          'Al \'aythamah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'لبدة',
                'name_en' =>          'Libdah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ضرغط',
                'name_en' =>          'Darghat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ضريغط',
                'name_en' =>          'Duraighat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحميمة',
                'name_en' =>          'Al Humaimah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع اول',
                'name_en' =>          'Badai\' Awl',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الثمامية',
                'name_en' =>          'Ath Thumamiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحليفة العليا',
                'name_en' =>          'Al Hulayfah Al \'ulya',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مرحب الشمالي',
                'name_en' =>          'Marhab Ash Shamali',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العرادية',
                'name_en' =>          'Al \'aradiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'فيضة اثقب',
                'name_en' =>          'Faydat Athqab',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'روض ابن هادي',
                'name_en' =>          'Rawd Ibn Hadi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الوسعة',
                'name_en' =>          'Al Was\'ah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشويمس',
                'name_en' =>          'Ash Shiwaymis',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البرقة',
                'name_en' =>          'Al Barqah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الدابية',
                'name_en' =>          'Ad Dabiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحويط',
                'name_en' =>          'Al Huwayyit',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عمائر المرير',
                'name_en' =>          'Ama\'ir Al Murayr',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدع ابن خلف',
                'name_en' =>          'Bid\' Ibn Khalaf',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المرير',
                'name_en' =>          'Al Murayr',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ام روشن',
                'name_en' =>          'Umm Rawshan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'صفيط',
                'name_en' =>          'Sufayt',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'النحيتية',
                'name_en' =>          'An Nuhaytiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مبرز',
                'name_en' =>          'Mubaraz',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المعرش',
                'name_en' =>          'Al Ma\'arrash',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العوشزية',
                'name_en' =>          'Al Awshaziyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'وسيطاء الحفن',
                'name_en' =>          'Wusayta\' Al Hafan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البعايث',
                'name_en' =>          'Al Ba\'ayith',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الزغيبية',
                'name_en' =>          'Az Zughaibiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الفرعة',
                'name_en' =>          'Al Far\'ah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'بدائع الصغوي',
                'name_en' =>          'Badai\' As Sighwa',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصغوى',
                'name_en' =>          'As Sighawa',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'فيضة يكلب',
                'name_en' =>          'Faydat Yaklib',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع القرائن',
                'name_en' =>          'Mazari\' Al Qarain',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النويبات',
                'name_en' =>          'An Nuwaybat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزرعة مشرفة',
                'name_en' =>          'Mazra\'at Mushrifah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المخرم',
                'name_en' =>          'Al Makhram',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الطراق',
                'name_en' =>          'At Tiraq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصلبية',
                'name_en' =>          'As Sulubiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'راس تنورة',
                'name_en' =>          'Ras Tannurah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'رحيمة',
                'name_en' =>          'Rahimah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'بدائع الصفران',
                'name_en' =>          'Badai\' As Sufran',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'حمر القعساء',
                'name_en' =>          'Humr Al Qa\'asa',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'حريد',
                'name_en' =>          'Hurayd',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الديماسة',
                'name_en' =>          'Ad Dimasah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القعساء',
                'name_en' =>          'Al Qa\'asa',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'وتدة',
                'name_en' =>          'Wutidah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عقيلة اللبن',
                'name_en' =>          'Uqaylat Al Laban',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البلازية',
                'name_en' =>          'Al Ballaziyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'خنقة الرماحي',
                'name_en' =>          'Khanqat Ar Rimahi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'غسل',
                'name_en' =>          'Ghisil',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'سميراء',
                'name_en' =>          'Simira\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الرفايع',
                'name_en' =>          'Ar Rufayi\'',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قصير متروك',
                'name_en' =>          'Qusayr Matruk',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'كتيفة',
                'name_en' =>          'Kutaifah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'وسيط',
                'name_en' =>          'Wusayt',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'نفجة',
                'name_en' =>          'Nafjah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المعدا',
                'name_en' =>          'Al Ma\'ada',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الشيحية',
                'name_en' =>          'Mazari Ash Shihiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشيحية',
                'name_en' =>          'Ash Shihiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم قدة',
                'name_en' =>          'Umm Qiddah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قليب خنيفسة',
                'name_en' =>          'Qalib Khunayfisah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزرعة الغبية',
                'name_en' =>          'Mazra\'at Al Ghibyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم العراد',
                'name_en' =>          'Umm Al \'arad',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الثابتية',
                'name_en' =>          'Ath Thabitiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'بقيعاء الشمالية',
                'name_en' =>          'Buqay\'a Ash Shamaliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الرفائع',
                'name_en' =>          'Mazari\' Ar Rufai\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عسيلة',
                'name_en' =>          '\'usaylah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النجبة',
                'name_en' =>          'An Nijibah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قليب الرجيمية',
                'name_en' =>          'Qalib Ar Rujaymiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عقدة',
                'name_en' =>          '\'iqdah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم خطوط',
                'name_en' =>          'Umm Khutut',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الوسيطاء',
                'name_en' =>          'Mazari\' Al Wusayta',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المكحول',
                'name_en' =>          'Al Makhul',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'كحلة',
                'name_en' =>          'Kahlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الأرطاوي الشمالي',
                'name_en' =>          'Al Artawi Ash Shamali',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الهلالية',
                'name_en' =>          'Al Hilaliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البكيرية',
                'name_en' =>          'Al Bukayriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الفويلق',
                'name_en' =>          'Al Fuwayliq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مشاش جرود',
                'name_en' =>          'Mishash Jurud',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الضلفعة',
                'name_en' =>          'Ad Dalfa\'ah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الطوال',
                'name_en' =>          'At Tuwal',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العليا',
                'name_en' =>          'Al \'ulayya',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرفيعة',
                'name_en' =>          'Ar Rafi\'ah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشباكية',
                'name_en' =>          'Ash Shabbakiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجابرية',
                'name_en' =>          'Al Jabiriyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المراح',
                'name_en' =>          'Al Marah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'جودة',
                'name_en' =>          'Judah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'سلوى',
                'name_en' =>          'Salwa',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العقير',
                'name_en' =>          'Al Uqayr',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'يبرين',
                'name_en' =>          'Yabrin / Jabrin',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'البطالية',
                'name_en' =>          'Al Bataliyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الشقيق',
                'name_en' =>          'Ash Shaqiq',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القرين',
                'name_en' =>          'Al Qurayn',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الوزية',
                'name_en' =>          'Al Wizyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الخرس',
                'name_en' =>          'Al Khars',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الغويبة',
                'name_en' =>          'Al Ghuwaybah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مريطبة',
                'name_en' =>          'Muraytibah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'سوده',
                'name_en' =>          'Sudah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'العمران',
                'name_en' =>          'Al Umran',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'آل مجادب',
                'name_en' =>          'Al Mijadib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السبت',
                'name_en' =>          'As Sabt',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الصعدي',
                'name_en' =>          'Al As Sa\'di',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سدوان',
                'name_en' =>          'Sadwan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشعف',
                'name_en' =>          'Ash Sha\'af',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لربوعة',
                'name_en' =>          'Larbu\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قريش',
                'name_en' =>          'Qiraysh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل دحمان',
                'name_en' =>          'Al Dahman',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجفر',
                'name_en' =>          'Al Jafr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'النماص',
                'name_en' =>          'An Namas',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شوحطة',
                'name_en' =>          'Shuhitah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرهوة',
                'name_en' =>          'Ar Rahwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قاها',
                'name_en' =>          'Qaha',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عزة',
                'name_en' =>          'Al \'azzah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بيحان',
                'name_en' =>          'Bihan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قرآنية',
                'name_en' =>          'Quraniyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العطوف',
                'name_en' =>          'Al \'utuf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'طلحة',
                'name_en' =>          'Talhah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القصير',
                'name_en' =>          'Al Qusayr',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المهاش',
                'name_en' =>          'Al Mahash',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القاعية',
                'name_en' =>          'Al Qa\'iyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع قني',
                'name_en' =>          'Badai\' Qunay',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مغيضة',
                'name_en' =>          'Mughaydah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بطيحان',
                'name_en' =>          'Butayhan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القحصية',
                'name_en' =>          'Al Qahsiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الدوادمي',
                'name_en' =>          'Ad Duwadimi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البنانة',
                'name_en' =>          'Al Bananah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الركية',
                'name_en' =>          'Ar Rukayyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مرموثة العلم',
                'name_en' =>          'Marmuthat Al \'alam',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'نخلة',
                'name_en' =>          'Nakhlah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'النميرة',
                'name_en' =>          'An Numayyirah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قصيباء',
                'name_en' =>          'Qusayba',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ملحاء',
                'name_en' =>          'Malha',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الطرفاوي',
                'name_en' =>          'At Tarfawi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشقة',
                'name_en' =>          'Ash Shiqqah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'شعيلا المصع',
                'name_en' =>          'Shuayla Al Masae',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع الفقي',
                'name_en' =>          'Badai\' Al Fuqayy',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أم هشيم',
                'name_en' =>          'Umm Hashim',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'خفيج أم هشيم',
                'name_en' =>          'Khufayj Umm Hashim',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الباحة',
                'name_en' =>          'Al Baha',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العمائر',
                'name_en' =>          'Al \'amair',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصور',
                'name_en' =>          'As Sur',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قرية عشيرة',
                'name_en' =>          'Qaryat \'ishayrah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عقلة المخروق',
                'name_en' =>          'Uqlat Al Makhruq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أم هشيم',
                'name_en' =>          'Umm Hashim',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مصدة',
                'name_en' =>          'Masadah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أبلة',
                'name_en' =>          'Ablah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القصيلة',
                'name_en' =>          'Al Qusailah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السليمي',
                'name_en' =>          'As Sulaymi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحماد',
                'name_en' =>          'Al Hamad',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الوهيبيات',
                'name_en' =>          'Al Wuhaybiyat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أرينبة',
                'name_en' =>          'Uraynibah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'فرتاج',
                'name_en' =>          'Firtaj',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشبرية الصفراء',
                'name_en' =>          'Ash Shibriyah As Safra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشبرية الحمراء',
                'name_en' =>          'Ash Shibriyah Al Hamra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الوسيطي',
                'name_en' =>          'Al Wusayti',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصخنة',
                'name_en' =>          'As Sikhinah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أفيعية',
                'name_en' =>          'Afay\'iyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الهمجة',
                'name_en' =>          'Al Hamjah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المعاذب',
                'name_en' =>          'Al Ma\'adhib',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الهدية',
                'name_en' =>          'Al Hudayyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الغزالة',
                'name_en' =>          'Al Ghazalah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الغريسة',
                'name_en' =>          'Al Gharisah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المجيصة',
                'name_en' =>          'Al Mijayssah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البركة',
                'name_en' =>          'Al Birkah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'طلوح',
                'name_en' =>          'Tuluh',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحليفة السفلى',
                'name_en' =>          'Al Hulayfah As Suflah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحائط',
                'name_en' =>          'Al Hait',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'قاع حجلا',
                'name_en' =>          'Qa\' Hajla',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الخفج',
                'name_en' =>          'Al Khufj',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الفقي',
                'name_en' =>          'Al Fuqay',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'النبوان',
                'name_en' =>          'An Nabuwan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'العوشري',
                'name_en' =>          'Al Awshari',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مرغان',
                'name_en' =>          'Marghan',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الهويدي',
                'name_en' =>          'Al Huwaidi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القصيصة',
                'name_en' =>          'Al Qusaysah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المسجد',
                'name_en' =>          'Al Masjid',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'سقف',
                'name_en' =>          'Saqf',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدع ابن حويط',
                'name_en' =>          'Bid\' Bin Huwayyit',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع الصداعية',
                'name_en' =>          'Badai\' As Suda\'iyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ريع البكر',
                'name_en' =>          'Ri\' Al Bakr',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الكلابية',
                'name_en' =>          'Al Kilabiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المنيزلة',
                'name_en' =>          'Al Munaizlah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القارة',
                'name_en' =>          'Al Qarah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المنصورة',
                'name_en' =>          'Al Mansurah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المزاوي',
                'name_en' =>          'Al Mazawi',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحوطة',
                'name_en' =>          'Al Hawtah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المركز',
                'name_en' =>          'Al Markaz',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الفضول',
                'name_en' =>          'Al Fudul',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الرميلة',
                'name_en' =>          'Ar Rumaylah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجشة',
                'name_en' =>          'Al Jishshah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الشعبة',
                'name_en' =>          'Ash Shu\'abah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المبرز',
                'name_en' =>          'Al Mubarraz',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجليجلة',
                'name_en' =>          'Al Julijlah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'المطيرفي',
                'name_en' =>          'Al Mutairifi',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'بني معن',
                'name_en' =>          'Bani Mu\'n',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الخن',
                'name_en' =>          'Al Khinn',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام اثلة',
                'name_en' =>          'Umm Athlah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'خريص',
                'name_en' =>          'Khurays',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عريعرة',
                'name_en' =>          'Uray\'irah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'متالع / ام تالع',
                'name_en' =>          'Matali\' / Umm Tali\'',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'التويثير',
                'name_en' =>          'Al Tuwaythir',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الدالوة',
                'name_en' =>          'Ad Dalwah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الشهادين',
                'name_en' =>          'Ash Shahadin',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحليلة',
                'name_en' =>          'Al Halilah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الطرف',
                'name_en' =>          'At Taraf',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجفر',
                'name_en' =>          'Al Jafr',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحني',
                'name_en' =>          'Al Hunayy',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'القصيبي',
                'name_en' =>          'Al Qusaybi',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحبل',
                'name_en' =>          'Al Habl',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الحرملية',
                'name_en' =>          'Al Harmaliyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'نباك',
                'name_en' =>          'Nibak',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'البرجسية',
                'name_en' =>          'Al Barjasiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزرعة الزرقاء',
                'name_en' =>          'Mazra\'at Az Zarqa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع أم ظهيرة',
                'name_en' =>          'Mazrai\' Umm Dhuhayrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النبتى رية',
                'name_en' =>          'An Nabta Rayyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرويضة',
                'name_en' =>          'Ar Ruwaydah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الركية',
                'name_en' =>          'Ar Rukayyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ام طليحة',
                'name_en' =>          'Umm Tulayhah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشماسية',
                'name_en' =>          'Ash Shimasiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الربيعية',
                'name_en' =>          'Ar Rabi\'iyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العويقلية',
                'name_en' =>          'Al \'uwayqiliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النبقية',
                'name_en' =>          'An Nubqiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم حزم',
                'name_en' =>          'Umm Hazm',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخشة',
                'name_en' =>          'Al Khashah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'القرين',
                'name_en' =>          'Al Qurayn',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الهبيرية',
                'name_en' =>          'Al Hubayriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البدع',
                'name_en' =>          'Al Bada\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ساق',
                'name_en' =>          'Saq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشقران',
                'name_en' =>          'Ash Shuqran',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البكرة',
                'name_en' =>          'Al Bakrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'دوبح',
                'name_en' =>          'Dawbah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الفيضة',
                'name_en' =>          'Al Faydah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'طوال جبيرة',
                'name_en' =>          'Tuwal Jubayrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'جبيرة',
                'name_en' =>          'Jubayrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرحيمية',
                'name_en' =>          'Ar Ruhaymiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجمدة',
                'name_en' =>          'Al Jimdah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ام الفروغ',
                'name_en' =>          'Umm Al Furugh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفجانة',
                'name_en' =>          'Al Fajjanah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحجرة',
                'name_en' =>          'Al Hajrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجريف',
                'name_en' =>          'Al Jurayf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحجيرة',
                'name_en' =>          'Al Hujayrah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'رنية',
                'name_en' =>          'Ranyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العمائر',
                'name_en' =>          'Al \'amair',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القوز',
                'name_en' =>          'Al Qawz',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الابرق',
                'name_en' =>          'Al Abraq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'كويكب',
                'name_en' =>          'Kuwaykib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الضرم',
                'name_en' =>          'Ad Duram',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العويلة',
                'name_en' =>          'Al \'uwaylah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الاملح',
                'name_en' =>          'Al Amlah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'تربة الخيالة',
                'name_en' =>          'Turabat Al Khiyalah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'بني فروة',
                'name_en' =>          'Bani Farwah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'خدعة',
                'name_en' =>          'Khid\'ah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحضيري',
                'name_en' =>          'Al Hudayri',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'النعرة',
                'name_en' =>          'An Na\'arah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الثودة',
                'name_en' =>          'Ath Thudah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'جعبة',
                'name_en' =>          'Ji\'abah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بني سار',
                'name_en' =>          'Bani Sar',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الربوة',
                'name_en' =>          'Ar Rabwah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحشرج',
                'name_en' =>          'Al Hashraj',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'مرازيق',
                'name_en' =>          'Maraziq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العقيق',
                'name_en' =>          'Al Aqiq',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'المطرية',
                'name_en' =>          'Al Mutariyah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'معشوقة',
                'name_en' =>          'Ma\'shuqah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'وراخ',
                'name_en' =>          'Wurakh',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'جرب',
                'name_en' =>          'Jarab',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'كرا الحائط',
                'name_en' =>          'Kara Al Hait',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'النصباء',
                'name_en' =>          'An Nasba',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بالحكم',
                'name_en' =>          'Balhakam',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'آل صقاعة',
                'name_en' =>          'Al Suqa\'ah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'المغثة',
                'name_en' =>          'Al Maghthah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'حظوة',
                'name_en' =>          'Hadhwah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'العقب',
                'name_en' =>          'Al \'aqib',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'عمضان',
                'name_en' =>          '\'amdan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'آل حبيبة',
                'name_en' =>          'Al Habibah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'مراوة',
                'name_en' =>          'Marawah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الصفح',
                'name_en' =>          'As Safh',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'المندق',
                'name_en' =>          'Al Mandaq',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'بالخزمر',
                'name_en' =>          'Bal Khazmar',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'ال نعمة',
                'name_en' =>          'Al Na\'mah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'دوس',
                'name_en' =>          'Daws',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الطرف',
                'name_en' =>          'At Taraf',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الخليف',
                'name_en' =>          'Al Khalif',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'أبو غبار',
                'name_en' =>          'Abu Ghubar',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'مرغان',
                'name_en' =>          'Marghan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الإفيهد',
                'name_en' =>          'Al Ifayhid',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحمادة',
                'name_en' =>          'Al Hamadah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أشقر النومانيات',
                'name_en' =>          'Ashqar An Numaniyat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النومانية',
                'name_en' =>          'An Numaniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العمودة الجنوبية',
                'name_en' =>          'Al \'amudah Al Janubiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العمودة الشمالية',
                'name_en' =>          'Al \'amudah Ash Shamaliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجرير',
                'name_en' =>          'Al Jarir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الأشيعل',
                'name_en' =>          'Al Ishay\'il',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القهيبية',
                'name_en' =>          'Al Qihabiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشعيفانية',
                'name_en' =>          'Ash Shi\'faniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المشاش',
                'name_en' =>          'Al Mishash',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'دريميحة',
                'name_en' =>          'Diraymihah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المصك',
                'name_en' =>          'Al Masak',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قريطة',
                'name_en' =>          'Quraytah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزارع الوسيطاء',
                'name_en' =>          'Mazari\' Al Wusayta',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قصر البطاح',
                'name_en' =>          'Qasr Al Battah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'السيح',
                'name_en' =>          'As Seeh',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحملية',
                'name_en' =>          'Al Himliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصويتية',
                'name_en' =>          'As Suwaytiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الأسامر',
                'name_en' =>          'Al Asamir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الأساس',
                'name_en' =>          'Al Asas',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أبو نخلة',
                'name_en' =>          'Abu Nakhlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الشبيكية',
                'name_en' =>          'Ash Shubaykiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الوسيطاء',
                'name_en' =>          'Al Wusayta',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'جديد',
                'name_en' =>          'Jadid',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الطرفاوي',
                'name_en' =>          'At Tarfawi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخشيبي',
                'name_en' =>          'Al Khishaybi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحجازية',
                'name_en' =>          'Al Hajjaziyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'زور العقارب',
                'name_en' =>          'Zur Al \'aqarib',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الغافية',
                'name_en' =>          'Al Ghafiyah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'صفاه',
                'name_en' =>          'Sufah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'العضبات',
                'name_en' =>          'Al \'adabat',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'قطان',
                'name_en' =>          'Qatan',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'ثار',
                'name_en' =>          'Thar',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'حمى',
                'name_en' =>          'Hima',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الشرفات',
                'name_en' =>          'Ash Shurafat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرعي',
                'name_en' =>          'Ar Ra\'y',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطرق',
                'name_en' =>          'At Tirq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجرمة',
                'name_en' =>          'Al Jirmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحشافة',
                'name_en' =>          'Al Hashafah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حمضة',
                'name_en' =>          'Hamadah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المطعن',
                'name_en' =>          'Al Mat\'an',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المنجحة',
                'name_en' =>          'Al Manjahah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفيض',
                'name_en' =>          'Al Fayd',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'غالب',
                'name_en' =>          'Ghalib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سعيدة',
                'name_en' =>          'Sa\'idah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الأجرع الشمالي',
                'name_en' =>          'Al Ajra\' Ash Shamali',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ذهبان',
                'name_en' =>          'Dhahban',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'دبساء',
                'name_en' =>          'Dabsa',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البرك',
                'name_en' =>          'Al Birk',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القحمة',
                'name_en' =>          'Al Qahmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عمق',
                'name_en' =>          '\'amaq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحظيرة',
                'name_en' =>          'Al Hadhirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل حامد',
                'name_en' =>          'Al Hamid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل يوسف',
                'name_en' =>          'Al Yusuf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البدلة',
                'name_en' =>          'Al Badlah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لولاة',
                'name_en' =>          'Lawlah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'نجد قرض',
                'name_en' =>          'Najd Qarad',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'جمان',
                'name_en' =>          'Jumman',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'كثم',
                'name_en' =>          'Kathm',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السلامة',
                'name_en' =>          'As Salamah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المثناة',
                'name_en' =>          'Al Mathnah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الهضبة',
                'name_en' =>          'Al Hadabah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لعصان',
                'name_en' =>          'Li\'san',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المحالة',
                'name_en' =>          'Al Mahalah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشرف',
                'name_en' =>          'Ash Sharaf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سر آل السريع',
                'name_en' =>          'Sirr Al As Siri\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العبب',
                'name_en' =>          'Al \'abab',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدارة',
                'name_en' =>          'Ad Darah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجرجر',
                'name_en' =>          'Al Jarjar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عدوان',
                'name_en' =>          '\'adwan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العين',
                'name_en' =>          'Al \'ayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجعجاع',
                'name_en' =>          'Al Ja\'ja\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الموسطة',
                'name_en' =>          'Al Mawsatah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل جمعة',
                'name_en' =>          'Al Jum\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العزيزة',
                'name_en' =>          'Al \'azizah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الهرير الغربي',
                'name_en' =>          'Al Hurayr Al Gharbi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'إيتارة',
                'name_en' =>          'Itarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أبو نخلة',
                'name_en' =>          'Abu Nakhlah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرح',
                'name_en' =>          'Al Qurh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العرف',
                'name_en' =>          'Al \'araf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'أبو جرشة',
                'name_en' =>          'Abu Jarshah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخشم',
                'name_en' =>          'Al Khashm',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'روغ العاند',
                'name_en' =>          'Rugh Al \'anid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل بالفلاح',
                'name_en' =>          'Al Balfalah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حجلا',
                'name_en' =>          'Hajla',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العطفة',
                'name_en' =>          'Al \'utfah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'تانة',
                'name_en' =>          'Tanah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الشيخ',
                'name_en' =>          'Al Ash Shaykh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حبيب',
                'name_en' =>          'Hubayyib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'رغفة',
                'name_en' =>          'Rughfah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عضاضة',
                'name_en' =>          '\'adadah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل سرحان',
                'name_en' =>          'Al Sirhan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القعرة',
                'name_en' =>          'Al Qa\'arah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل يزيد',
                'name_en' =>          'Al Yazid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المجمع',
                'name_en' =>          'Al Majma\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصيحاني',
                'name_en' =>          'As Sayhani',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البهيمة',
                'name_en' =>          'Al Bihaymah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرعاء',
                'name_en' =>          'Al Qar\'a',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجر الصغير',
                'name_en' =>          'Al Jarr As Saghir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشعف',
                'name_en' =>          'Ash Sha\'af',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'تمنية',
                'name_en' =>          'Tamniyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل علي',
                'name_en' =>          'Al \'ali',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عين الذيبة',
                'name_en' =>          '\'ayn Adh Dhibah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'البارك',
                'name_en' =>          'Al Barik',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قرضة',
                'name_en' =>          'Qaradah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل زيدي',
                'name_en' =>          'Al Zaydi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حصن الجرين',
                'name_en' =>          'Husn Al Jarin',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عاصم',
                'name_en' =>          'Al \'asim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجنفور',
                'name_en' =>          'Al Janfur',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عرايس',
                'name_en' =>          '\'arayis',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عمام',
                'name_en' =>          '\'umam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرهوة',
                'name_en' =>          'Ar Rahwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شوحط',
                'name_en' =>          'Shuhat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'منادرالعين',
                'name_en' =>          'Manadir Al \'ayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بني رزام',
                'name_en' =>          'Bani Rizam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الملاحة',
                'name_en' =>          'Al Malahah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطلحة',
                'name_en' =>          'At Talhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شرمة',
                'name_en' =>          'Sharmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحنق',
                'name_en' =>          'Al Hanaq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرين',
                'name_en' =>          'Al Qurayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مجمل',
                'name_en' =>          'Al Mujammal',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بجدة',
                'name_en' =>          'Bajdah',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'طبب',
                'name_en' =>          'Tabab',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشطاط',
                'name_en' =>          'Al Shutat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العبيدية',
                'name_en' =>          'Al \'abidiyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السبت',
                'name_en' =>          'As Sabt',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حمالة',
                'name_en' =>          'Himalah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العقيق',
                'name_en' =>          'Al Aqiq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العطفة',
                'name_en' =>          'Al \'utfah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل بسام',
                'name_en' =>          'Al Bassam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل دكين',
                'name_en' =>          'Al Dukayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مهدي',
                'name_en' =>          'Al Mahadi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المصياد',
                'name_en' =>          'Al Misyad',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجزعة',
                'name_en' =>          'Al Juz\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مشدود',
                'name_en' =>          'Al Mashdud',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجهمة',
                'name_en' =>          'Al Jihmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العسران',
                'name_en' =>          'Al \'usran',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل بحبيب',
                'name_en' =>          'Al Bihabib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل قوشع',
                'name_en' =>          'Al Qawsha\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدليمية',
                'name_en' =>          'Ad Dilaymiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الفوارة',
                'name_en' =>          'Al Fawwarah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عقلة الصقور',
                'name_en' =>          'Uqlat As Suqur',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الذيبية',
                'name_en' =>          'Adh Dhibiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قصر ابن عقيل',
                'name_en' =>          'Qasr Ibn \'uqayyil',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قطن',
                'name_en' =>          'Qitan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البصيري',
                'name_en' =>          'Al Basiri',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخريشاء',
                'name_en' =>          'Al Khuraysha',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الدحلة',
                'name_en' =>          'Ad Dahlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النقرة',
                'name_en' =>          'An Nuqrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'امباري',
                'name_en' =>          'Embary',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجفن',
                'name_en' =>          'Al Jifn',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ديم',
                'name_en' =>          'Daym',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الهميلية',
                'name_en' =>          'Al Humayliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عماير سعيدة',
                'name_en' =>          'Amayir Si\'idah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ذوقان الركايا',
                'name_en' =>          'Dhawqan Ar Rakaya',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الضاحي',
                'name_en' =>          'Ad Dahi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الوهلان',
                'name_en' =>          'Al Wahalan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العونية',
                'name_en' =>          'Al \'awniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الأشرفية',
                'name_en' =>          'Al Ashrafiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مزرعة البسامية',
                'name_en' =>          'Mazra\'at Al Bassamiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الضلعة',
                'name_en' =>          'Ad Dal\'ah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'غدفاء',
                'name_en' =>          'Ghadfa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الغريبية',
                'name_en' =>          'Al Ghuraybiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الفيحاء',
                'name_en' =>          'Al Fayha',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم غويفة',
                'name_en' =>          'Umm Ghuwayfah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجناح',
                'name_en' =>          'Al Janah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحزم',
                'name_en' =>          'Al Hazm',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رياض قناء',
                'name_en' =>          'Riyad Qana',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المندسة',
                'name_en' =>          'Al Mundassah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رفائع الحميمة',
                'name_en' =>          'Ruf\'ai\' Al Humaymah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مظيفر',
                'name_en' =>          'Mudhayfir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العمودة',
                'name_en' =>          'Al \'amudah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ابو طلح',
                'name_en' =>          'Abu Talh',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مهيضة',
                'name_en' =>          'Mihayyidah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'وادي النخيل',
                'name_en' =>          'Wadi Al Nakhil',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فياضة',
                'name_en' =>          'Fayyadah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'كحلة',
                'name_en' =>          'Kahlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'رفائع الحجرة',
                'name_en' =>          'Ruf\'ai\' Al Hajrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مشاش ركيان',
                'name_en' =>          'Mishash Rukayyan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أبو عرداء',
                'name_en' =>          'Abu \'arda',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الناصفة',
                'name_en' =>          'An Nasifah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النبهانية',
                'name_en' =>          'An Nabhaniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ثادج',
                'name_en' =>          'Thadij',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ربيق',
                'name_en' =>          'Rubayq',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'سامودة',
                'name_en' =>          'Samudah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الملقاء',
                'name_en' =>          'Al Malqa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخرماء',
                'name_en' =>          'Al Kharma',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخرماءالشمالية',
                'name_en' =>          'Al Kharma Ash Shamaliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحيسونية',
                'name_en' =>          'Al Haysuniyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القعير',
                'name_en' =>          'Al Qu\'ayyir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العمار',
                'name_en' =>          'Al \'amar',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'قريضة',
                'name_en' =>          'Quraydah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجصة',
                'name_en' =>          'Al Jissah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ابيار علي',
                'name_en' =>          'Abyar Ali',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أبو كبير',
                'name_en' =>          'Abu Kabir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الدويخلة',
                'name_en' =>          'Ad Duwaykhilah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الوعيرة',
                'name_en' =>          'Al Wu\'ayrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ام جرفان',
                'name_en' =>          'Umm Jarfan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العيون',
                'name_en' =>          'Al Uyun',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الخليل',
                'name_en' =>          'Al Khulayl',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'نعامين',
                'name_en' =>          'Na\'amin',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مليحة',
                'name_en' =>          'Mulayhah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العاقول',
                'name_en' =>          'Al \'aqul',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحار السفلى',
                'name_en' =>          'Al Har As Sufla',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مفرحات',
                'name_en' =>          'Mufarrihat',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القطيعاء',
                'name_en' =>          'Al Qutay\'a',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الفرع',
                'name_en' =>          'Al Far\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الفقارة',
                'name_en' =>          'Al Fuqarah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أرباق',
                'name_en' =>          'Arbaq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المليليح',
                'name_en' =>          'Al Mulaylih',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المغرة',
                'name_en' =>          'Al Magharah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أبو نمصات',
                'name_en' =>          'Abu Numasat',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'دثير',
                'name_en' =>          'Dithir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العقيلة',
                'name_en' =>          'Al \'uqaylah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العوينة',
                'name_en' =>          'Al \'uwaynah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الخضراء',
                'name_en' =>          'Al Khadra',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الثعلة',
                'name_en' =>          'Ath Tha\'alah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الحار العليا',
                'name_en' =>          'Al Har Al \'ulya',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المضيبعة',
                'name_en' =>          'Al Mudaybi\'ah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السوسي',
                'name_en' =>          'As Susi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الشلايل',
                'name_en' =>          'Ash Shalayil',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أويدك',
                'name_en' =>          'Uwaydik',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الغريض',
                'name_en' =>          'Al Gharid',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصيفي',
                'name_en' =>          'As Sayfi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الغصن',
                'name_en' =>          'Al Ghusan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الظمو',
                'name_en' =>          'Adh Dhamu',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الطرقية',
                'name_en' =>          'Al Tarqiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'أم العيال',
                'name_en' =>          'Umm Al \'iyal',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الملبنة',
                'name_en' =>          'Al Malbanah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'حنذ',
                'name_en' =>          'Hanadh',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الهندية',
                'name_en' =>          'Al Hindiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المرير',
                'name_en' =>          'Al Murayr',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الدحو',
                'name_en' =>          'Ad Duhu',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النقيعاء',
                'name_en' =>          'An Nuqay\'a',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المشينية',
                'name_en' =>          'Al Mushayniyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القافلة',
                'name_en' =>          'Al Qafilah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'اللثامة',
                'name_en' =>          'Al Luthamah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الملحة',
                'name_en' =>          'Al Malhah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العيزاء',
                'name_en' =>          'Al \'ayza',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'النقرة',
                'name_en' =>          'An Nuqrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البردية',
                'name_en' =>          'Al Bardiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العشيرة',
                'name_en' =>          'Al \'ushayrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'القصيبة',
                'name_en' =>          'Al Qisayyibah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الشوامين',
                'name_en' =>          'Ash Shuwamin',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الشفية',
                'name_en' =>          'Ash Shufayyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'تيتد',
                'name_en' =>          'Taytad',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البييرات',
                'name_en' =>          'Al Buyayrat',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'هرمة',
                'name_en' =>          'Hurumah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العثيا',
                'name_en' =>          'Al \'uthayya',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'شقري',
                'name_en' =>          'Shiqri',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'شجوى',
                'name_en' =>          'Shajwa',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'البوير',
                'name_en' =>          'Al Buwair',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الشقرة',
                'name_en' =>          'Ash Shuqrah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الصويدرة',
                'name_en' =>          'As Suwaydirah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الفريش',
                'name_en' =>          'Al Furaysh',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الريان',
                'name_en' =>          'Ar Rayyan',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المليليح',
                'name_en' =>          'Al Mulaylih',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الرصيعة',
                'name_en' =>          'Ar Rasi\'ah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ابيار الماشي',
                'name_en' =>          'Abyar Al Mashi',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'رواوة',
                'name_en' =>          'Ruwawah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجفر',
                'name_en' =>          'Al Jafr',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ابو ضباع',
                'name_en' =>          'Abu Diba\'',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المضيق',
                'name_en' =>          'Al Madiq',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الاكحل',
                'name_en' =>          'Al Akhal',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'اليتمة',
                'name_en' =>          'Al Yitimah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الفقير',
                'name_en' =>          'Al Faqir',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المندسة',
                'name_en' =>          'Al Mundassah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بواط',
                'name_en' =>          'Buwat',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'العصيلب',
                'name_en' =>          'Al \'usaylib',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجفدور',
                'name_en' =>          'Al Jifdur',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'مسكة',
                'name_en' =>          'Miskah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'أم المحاش',
                'name_en' =>          'Umm Al Mahash',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عيدة',
                'name_en' =>          '\'idah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرفائع',
                'name_en' =>          'Ar Rafai\'',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'صميعر',
                'name_en' =>          'Sumayir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فيضة سلام',
                'name_en' =>          'Faydat Salam',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'طفيلة',
                'name_en' =>          'Tufaylah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'حليوة',
                'name_en' =>          'Hulaywah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'هرمول',
                'name_en' =>          'Hurmul',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'روضة عسعس',
                'name_en' =>          'Rawdat \'as\'as',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المطيوي',
                'name_en' =>          'Al Mutaywi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'بدائع هويشلة',
                'name_en' =>          'Badai\' Huwayshilah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الكفية',
                'name_en' =>          'Al Kuffiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بقيعاء الجنوبية',
                'name_en' =>          'Buqay\'a Al Janubiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الرفايع النجج',
                'name_en' =>          'Ar Rufayi\' Al Najh',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الظاهرية',
                'name_en' =>          'Adh Dhahiriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المندسة',
                'name_en' =>          'Al Mundassah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العقلة',
                'name_en' =>          'Al \'uqlah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القاعية',
                'name_en' =>          'Al Qa\'iyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الضبعية',
                'name_en' =>          'Ad Dubay\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بدائع الضبعية',
                'name_en' =>          'Badai Ad Dib\'iyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'جفرة الجديدة',
                'name_en' =>          'Jafrat Al Jadidah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'جفرة',
                'name_en' =>          'Jafrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحمادة',
                'name_en' =>          'Al Hamadah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'بدائع مشرفة',
                'name_en' =>          'Badai\' Mushrifah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'نجخ الجنوبي',
                'name_en' =>          'Najkh Al Janubi',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'نجخ الشمالي',
                'name_en' =>          'Najkh Al Shamali',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'القويعية',
                'name_en' =>          'Al Quway\'iyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'صعينين',
                'name_en' =>          'Su\'aynin',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ليم',
                'name_en' =>          'Laym',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'السليسية',
                'name_en' =>          'As Sulaysiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فيضة نومان',
                'name_en' =>          'Faydat Noman',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ضرية',
                'name_en' =>          'Dariyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصمعورية',
                'name_en' =>          'As Sum\'uriyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'سلام',
                'name_en' =>          'Salam',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العاقر',
                'name_en' =>          'Al \'aqir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'بدائع ريمان',
                'name_en' =>          'Badai\' Riman',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'بدائع الضبطان',
                'name_en' =>          'Badai\' Ad Dubtan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'البعجاء',
                'name_en' =>          'Al Ba\'ja',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحريق',
                'name_en' =>          'Al Hariq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'نعام',
                'name_en' =>          'Na\'am',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حوطة الحلوة',
                'name_en' =>          'Hawtat Al Hilwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حوطة بني تميم',
                'name_en' =>          'Hawtat Bani Tamim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'اسفل الباطن',
                'name_en' =>          'Asfal Al Batin',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفرعة',
                'name_en' =>          'Al Far\'ah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المثعب',
                'name_en' =>          'Al Mith\'ab',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحلوة',
                'name_en' =>          'Al Hilwah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحيطان',
                'name_en' =>          'Al Haytan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وادي البرك',
                'name_en' =>          'Wadi Al Bark',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الشكرة',
                'name_en' =>          'Ash Shukrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفيصلية',
                'name_en' =>          'Al Faysaliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النايفية',
                'name_en' =>          'An Naifiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القطين',
                'name_en' =>          'Al Qatin',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الخرفة',
                'name_en' =>          'Al Kharfah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ليلى',
                'name_en' =>          'Layla',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'سويدانا',
                'name_en' =>          'Swidana',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مروان',
                'name_en' =>          'Marwan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'واسط',
                'name_en' =>          'Wasit',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحمر',
                'name_en' =>          'Al Hamr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البديع الجنوبى',
                'name_en' =>          'Al Badi\' Al Janubi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'البديع الشمالي',
                'name_en' =>          'Al Badi\' Ash Shamali',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الهدار',
                'name_en' =>          'Al Haddar',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ساقي الناهض',
                'name_en' =>          'Saqi An Nahid',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغيل',
                'name_en' =>          'Al Ghayl',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ستارة',
                'name_en' =>          'Sitarah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'حراضة',
                'name_en' =>          'Haradah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الفرعة',
                'name_en' =>          'Al Far\'ah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العثيثي',
                'name_en' =>          'Al \'uthaythi',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'ا لحفائر',
                'name_en' =>          'Al Hafa\'ir',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السلم',
                'name_en' =>          'As Salam',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القاعية',
                'name_en' =>          'Al Qa\'iyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القوامة',
                'name_en' =>          'Al Quwamah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الغافة',
                'name_en' =>          'Al Ghafah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحدة',
                'name_en' =>          'Al Hiddah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المغراء',
                'name_en' =>          'Al Maghara',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العفيرية',
                'name_en' =>          'Al \'ufayriyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'أبو ملوح',
                'name_en' =>          'Abu Miluh',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'النغر',
                'name_en' =>          'An Naghar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'السدر',
                'name_en' =>          'As Sadr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الجر ثمية',
                'name_en' =>          'Al Jarr Thamiyyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الحجف',
                'name_en' =>          'Al Hajf',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'إبن غوف',
                'name_en' =>          'Ibn Ghuf',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الميفا',
                'name_en' =>          'Al Mifa',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الامرة',
                'name_en' =>          'Al Umrah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'النجيل',
                'name_en' =>          'An Najil',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الطيف',
                'name_en' =>          'At Tayf',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'السمعة',
                'name_en' =>          'As Sama\'ah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'نابر',
                'name_en' =>          'Nabir',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الضاحي',
                'name_en' =>          'Ad Dahi',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الزرعة',
                'name_en' =>          'Az Zira\'ah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الاشيرة',
                'name_en' =>          'Al Ishayrah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الصور',
                'name_en' =>          'As Sur',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'فرعة العطاردة',
                'name_en' =>          'Fara\'t Al \'atardah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'القهب',
                'name_en' =>          'Al Qahab',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحصحص',
                'name_en' =>          'Al Hashas',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'قراما',
                'name_en' =>          'Qurama',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'العياش',
                'name_en' =>          'Al \'ayyash',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'آل سعيد',
                'name_en' =>          'Al Sa\'id',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الغصنة',
                'name_en' =>          'Al Ghasanah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'قلوة',
                'name_en' =>          'Qilwah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الشعراء',
                'name_en' =>          'Ash Sha\'ra\'',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'نيرا',
                'name_en' =>          'Nira',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الجوة',
                'name_en' =>          'Al Jawwah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الفرع',
                'name_en' =>          'Al Far\'',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الهتافرة',
                'name_en' =>          'Al Hatafirah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'القريع',
                'name_en' =>          'Al Qari\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المسودة',
                'name_en' =>          'Al Maswadah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحشو',
                'name_en' =>          'Al Hashu',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'فرعة بني سهيم',
                'name_en' =>          'Fara\'t Bani Suhaym',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العقدة',
                'name_en' =>          'Al \'uqdah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العواصية',
                'name_en' =>          'Al \'awasiyah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'القصيباء',
                'name_en' =>          'Al Qusayba',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الرهوة',
                'name_en' =>          'Ar Rahwah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحصن',
                'name_en' =>          'Al Husn',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'غامد الزناد',
                'name_en' =>          'Ghamid Az Zinad',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'المخواة',
                'name_en' =>          'Al Mukhwah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'نصبة',
                'name_en' =>          'Nusubah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'ناوان',
                'name_en' =>          'Nawan',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'العرق',
                'name_en' =>          'Al Arq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'كعب',
                'name_en' =>          'Ka\'b',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخاضرة',
                'name_en' =>          'Al Khadirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرن الأبيض',
                'name_en' =>          'Al Qarn Al Abyad',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدحض',
                'name_en' =>          'Ad Dahid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الظهارة',
                'name_en' =>          'Adh Dhaharah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مخدرة',
                'name_en' =>          'Makhdarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخضراء',
                'name_en' =>          'Al Khadra',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرية',
                'name_en' =>          'Al Qurayyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بني مليح',
                'name_en' =>          'Bani Mulayh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'وادي الغيل',
                'name_en' =>          'Wadi Al Ghayl',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مليح',
                'name_en' =>          'Mulayh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ربوع السرو',
                'name_en' =>          'Rubu\' As Sarw',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل بو خشيف',
                'name_en' =>          'Al Bukhishayf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بهوان',
                'name_en' =>          'Bahwan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الضاربين',
                'name_en' =>          'Ad Daribayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مخلد',
                'name_en' =>          'Al Makhlad',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عباس',
                'name_en' =>          'Al \'abbas',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مضرة',
                'name_en' =>          'Al Midrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'غاشرة',
                'name_en' =>          'Ghashirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ذبوب',
                'name_en' =>          'Dhabub',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مجالد',
                'name_en' =>          'Mijalid',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل سخيطة',
                'name_en' =>          'Al Sakhaytah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عبالة',
                'name_en' =>          '\'aballah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عبيد',
                'name_en' =>          'Al \'ubayd',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مشاعر',
                'name_en' =>          'Al Misha\'ir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مسفرة',
                'name_en' =>          'Misfirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل فرش',
                'name_en' =>          'Al Farsh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحفاة',
                'name_en' =>          'Al Hufah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصرة',
                'name_en' =>          'As Surrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حوراء',
                'name_en' =>          'Hawra',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القرن',
                'name_en' =>          'Al Qarn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'كبدة',
                'name_en' =>          'Kubadah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العينين',
                'name_en' =>          'Al \'aynayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'تنومة',
                'name_en' =>          'Tanumah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الواديين',
                'name_en' =>          'Al Wadiyayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بللسمر',
                'name_en' =>          'Billasmar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل لجم',
                'name_en' =>          'Al Lajam',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الاثنين',
                'name_en' =>          'Al Ithnayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل غلفق',
                'name_en' =>          'Al Ghalfaq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سحيبان',
                'name_en' =>          'Suhayban',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العمارة',
                'name_en' =>          'Al \'ammarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قيان',
                'name_en' =>          'Qiyan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الغرس',
                'name_en' =>          'Al Ghars',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحكيمة',
                'name_en' =>          'Al Hakimah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرقوة',
                'name_en' =>          'Ar Raqwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الجلدة',
                'name_en' =>          'Al Al Jildah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مشروفة',
                'name_en' =>          'Mashrufah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'لاهمة',
                'name_en' =>          'Lahmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل فهيد',
                'name_en' =>          'Al Fuhayd',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحدباء',
                'name_en' =>          'Al Hadba',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل صنيج',
                'name_en' =>          'Al Sunayj',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عرفان',
                'name_en' =>          'Al \'urfan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل كشيم',
                'name_en' =>          'Al Kushaym',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحذيان',
                'name_en' =>          'Al Hadhyan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العرفان',
                'name_en' =>          'Al \'urfan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حافظ',
                'name_en' =>          'Hafidh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العلوبي',
                'name_en' =>          'Al \'ulubi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرمضة',
                'name_en' =>          'Ar Rumadah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العرين',
                'name_en' =>          'Al \'arin',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'فرعة طريب',
                'name_en' =>          'Turaib',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الزهرة',
                'name_en' =>          'Az Zahrah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل معدي',
                'name_en' =>          'Al Ma\'addi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الغلقة',
                'name_en' =>          'Al Ghiliqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجلدة',
                'name_en' =>          'Al Jildah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل قنبة',
                'name_en' =>          'Al Qunbah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الربعة',
                'name_en' =>          'Ar Riba\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الوهابة',
                'name_en' =>          'Al Wahabah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل سعيدة',
                'name_en' =>          'Al Sa\'idah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل كولت',
                'name_en' =>          'Al Kulat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل جلال',
                'name_en' =>          'Al Jallal',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل محي',
                'name_en' =>          'Al Mihi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحدباء',
                'name_en' =>          'Al Hadba',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحنجور',
                'name_en' =>          'Al Hunjur',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحنو',
                'name_en' =>          'Al Hinu',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المنابية',
                'name_en' =>          'Al Manabiyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الزهيد',
                'name_en' =>          'Az Zuhayd',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المحزمة',
                'name_en' =>          'Al Muhazmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الدربين',
                'name_en' =>          'Ad Darbayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشعاقة',
                'name_en' =>          'Ash Sha\'aqah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عدن',
                'name_en' =>          '\'adan',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الغول',
                'name_en' =>          'Al Ghawl',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'درامة',
                'name_en' =>          'Diramah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الخلف',
                'name_en' =>          'Al Al Khalaf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل مانع',
                'name_en' =>          'Al Mani\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'نقعة',
                'name_en' =>          'Naq\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل غبران',
                'name_en' =>          'Al Ghubran',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفقاعيس',
                'name_en' =>          'Al Fuqa\'is',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحريقة',
                'name_en' =>          'Al Hariqah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'سراة عبيدة',
                'name_en' =>          'Sarat Abidah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العطفة',
                'name_en' =>          'Al \'utfah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفرشة',
                'name_en' =>          'Al Farshah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الربوعة',
                'name_en' =>          'Ar Rabuah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجوة',
                'name_en' =>          'Al Jawwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'عرضين',
                'name_en' =>          'Ardayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ام الوهط',
                'name_en' =>          'Umm Al Whaht',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'المنخلي',
                'name_en' =>          'Al Minkhali',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'خد قيس',
                'name_en' =>          'Khad Qays',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الحمضة',
                'name_en' =>          'Al Hamdah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'تريمة',
                'name_en' =>          'Tirimah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الظاهرة',
                'name_en' =>          'Adh Dhahirah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'رضية',
                'name_en' =>          'Rudayyah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'حزامة',
                'name_en' =>          'Hazamah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'بدر الجنوب',
                'name_en' =>          'Badr Al Janub',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الحرشف',
                'name_en' =>          'Al Harshaf',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'هدادة',
                'name_en' =>          'Hadadah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الخانق',
                'name_en' =>          'Al Khaniq',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الجفة',
                'name_en' =>          'Al Jifah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'شرورة',
                'name_en' =>          'Sharurah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'شقة الكناور',
                'name_en' =>          'Shiqqat Al Kanawir',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'التماني',
                'name_en' =>          'At Tamani',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الوديعة',
                'name_en' =>          'Al Wadi\'ah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'المجمع',
                'name_en' =>          'Al Majma\'',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'شيبة مسورة',
                'name_en' =>          'Shaybat Miswarah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل ثابت',
                'name_en' =>          'Al Thabit',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الجربة',
                'name_en' =>          'Al Jirbah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الغيل',
                'name_en' =>          'Al Ghayl',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المجزعة',
                'name_en' =>          'Al Majza\'ah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عليا',
                'name_en' =>          'Al \'alya',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل بيضاء',
                'name_en' =>          'Al Bayda',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل معمر',
                'name_en' =>          'Al Mu\'ammar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الملحة',
                'name_en' =>          'Al Malhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحاجر',
                'name_en' =>          'Al Hajir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'علب',
                'name_en' =>          'Alb',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الملطاء',
                'name_en' =>          'Al Malta',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الرهوة',
                'name_en' =>          'Ar Rahwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المجازة',
                'name_en' =>          'Al Mijazah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بن لكرم',
                'name_en' =>          'Bin Lakram',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السلاطين',
                'name_en' =>          'As Salatin',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المحجر',
                'name_en' =>          'Al Mahjar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الوسط',
                'name_en' =>          'Al Wasat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العقدة',
                'name_en' =>          'Al \'uqdah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل الأشعث',
                'name_en' =>          'Al Al Ash\'ath',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العنثري',
                'name_en' =>          'Al \'anthari',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل عمران',
                'name_en' =>          'Al \'imran',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل جحالي',
                'name_en' =>          'Al Jihali',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العرف',
                'name_en' =>          'Al \'araf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'دهر',
                'name_en' =>          'Dihir',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحظيرة',
                'name_en' =>          'Al Hadhirah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الخضراء',
                'name_en' =>          'Al Khadra',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'علاف',
                'name_en' =>          '\'allaf',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل يعلى',
                'name_en' =>          'Al Ya\'la',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ظهران الجنوب',
                'name_en' =>          'Dhahran Al Janub',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الطلحة',
                'name_en' =>          'At Talhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الحرجة',
                'name_en' =>          'Al Harajah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الكولة',
                'name_en' =>          'Al Kulah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'القصب',
                'name_en' =>          'Al Qasab',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'حمران',
                'name_en' =>          'Humran',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل لهوة',
                'name_en' =>          'Al Lahwah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الهويمل',
                'name_en' =>          'Al Huwaymil',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'بئر خباش',
                'name_en' =>          'Bir Khubash',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الخضراء',
                'name_en' =>          'Al Khadra',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'قابل منيف',
                'name_en' =>          'Qabil Minif',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الهويد',
                'name_en' =>          'Al Hawid',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الحجف',
                'name_en' =>          'Al Hajf',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الدواس',
                'name_en' =>          'Ad Dawas',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'لاهومة',
                'name_en' =>          'Lahumah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'حبونا',
                'name_en' =>          'Hubuna',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الحصينية',
                'name_en' =>          'Al Husayniyah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'قرار',
                'name_en' =>          'Qarar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكدارة',
                'name_en' =>          'Al Kadarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الهجنبة',
                'name_en' =>          'Al Hajanbah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القاع',
                'name_en' =>          'Al Qa\'',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدرب',
                'name_en' =>          'Ad Darb',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو السداد',
                'name_en' =>          'Abu As Sadad',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشقيق',
                'name_en' =>          'Ash Shaqiq',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحروف',
                'name_en' =>          'Al Huruf',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عتود',
                'name_en' =>          '\'itwad',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'رملان',
                'name_en' =>          'Ramlan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المنجارة',
                'name_en' =>          'Al Minjarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدولة',
                'name_en' =>          'Ad Dawlah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مسلية',
                'name_en' =>          'Misliyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الفطيحة',
                'name_en' =>          'Al Fatihah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الفيصلية',
                'name_en' =>          'Al Faysaliyah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'معمر ريمان',
                'name_en' =>          'Ma\'mar Riman',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'دوح',
                'name_en' =>          'Dawwah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'النقعاء',
                'name_en' =>          'An Naq\'a',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'النقعاء',
                'name_en' =>          'An Naq\'a',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'نجران',
                'name_en' =>          'Najran',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'بئر عسكر',
                'name_en' =>          'Bi\'r \'askar',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'نهوقة',
                'name_en' =>          'Nahuqah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'ال شهي',
                'name_en' =>          'Al Shahi',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'رجلاء',
                'name_en' =>          'Rijla\'',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'آل سوار',
                'name_en' =>          'Alsuwar',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'المجمع',
                'name_en' =>          'Al Majma\'',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'البرك',
                'name_en' =>          'Al Birk',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'العريسة',
                'name_en' =>          'Al \'arayyisah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'رخية',
                'name_en' =>          'Rakhyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الريث',
                'name_en' =>          'Ar Rayth',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الرهوة',
                'name_en' =>          'Ar Rahwah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عثوان',
                'name_en' =>          '\'athwan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القعقاع',
                'name_en' =>          'Al Qa\'qa\'',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشملاة',
                'name_en' =>          'Ash Shamlah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السهية',
                'name_en' =>          'As Suhayyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عراب',
                'name_en' =>          '\'irab',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخطوة',
                'name_en' =>          'Al Khutwah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحناية',
                'name_en' =>          'Al Hinnayah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'النفيعة',
                'name_en' =>          'An Nafi\'ah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'زوزاء',
                'name_en' =>          'Zawza',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الركبة',
                'name_en' =>          'Ar Rukbah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العزة',
                'name_en' =>          'Al \'izzah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'خويعمة',
                'name_en' =>          'Khuway\'imah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدخرة',
                'name_en' =>          'Ad Dikarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخشعة',
                'name_en' =>          'Al Khashah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكوابسة',
                'name_en' =>          'Al Kawabisar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الهيجاء',
                'name_en' =>          'Al Hayja',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'اليمانية',
                'name_en' =>          'Al Yamaniyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'فيفاء',
                'name_en' =>          'Fayfa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدائر',
                'name_en' =>          'Ad Dair',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عيبان',
                'name_en' =>          '\'aiban',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الطرف',
                'name_en' =>          'At Taraf',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ظاهرة الصفا',
                'name_en' =>          'Dhahirat As Safa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القاع',
                'name_en' =>          'Al Qa\'',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القتب',
                'name_en' =>          'Al Qatab',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الهياج',
                'name_en' =>          'Al Hiyaj',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العقدة',
                'name_en' =>          'Al \'uqdah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العيدابي',
                'name_en' =>          'Al \'aydabi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مقزع',
                'name_en' =>          'Muqza\'',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'هروب',
                'name_en' =>          'Harub',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشريعة',
                'name_en' =>          'Ash Shari\'ah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحجروف',
                'name_en' =>          'Al Hajruf',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'نورة',
                'name_en' =>          'Nurah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الأثلة',
                'name_en' =>          'Al Athlah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'بيش',
                'name_en' =>          'Bish',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحضن',
                'name_en' =>          'Al Hadan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'قوز الجعافره',
                'name_en' =>          'Qouz Al Jaafrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحقو',
                'name_en' =>          'Al Haqu',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القوام',
                'name_en' =>          'Al Quwam',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المطعن',
                'name_en' =>          'Al Mat\'an',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العداية',
                'name_en' =>          'Al \'addayah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الباحر',
                'name_en' =>          'Al Bahir',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المعترض',
                'name_en' =>          'Al Mu\'tarid',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'نخلان',
                'name_en' =>          'Nakhlan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الغرا',
                'name_en' =>          'Al Ghara',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العبادلة',
                'name_en' =>          'Al \'abadilah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العريش',
                'name_en' =>          'Al \'arish',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مشلحة',
                'name_en' =>          'Mushallahah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الرايغة',
                'name_en' =>          'Ar Rayighah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الملحاة',
                'name_en' =>          'Al Malha',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدهناء',
                'name_en' =>          'Ad Dahna',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'صبيا',
                'name_en' =>          'Sabya',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'قائم الدش',
                'name_en' =>          'Qa\'im Ad Dashsh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'صبيا الجديدة',
                'name_en' =>          'Sabya Al Jadidah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكدمي',
                'name_en' =>          'Al Kudmi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العشة',
                'name_en' =>          'Al Ashah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السلام العليا',
                'name_en' =>          'As Salam Al \'ulya',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو القعايد',
                'name_en' =>          'Abu Alqa\'ayid',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو السلع',
                'name_en' =>          'Abu As Sala\'',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العالية',
                'name_en' =>          'Al \'aliyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'غوان',
                'name_en' =>          'Ghawwan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحسيني',
                'name_en' =>          'Al Husayni',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الظبية',
                'name_en' =>          'Al Dhabyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجمالة',
                'name_en' =>          'Al Jammalah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السبخة',
                'name_en' =>          'Al Sabakhah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الفقرة',
                'name_en' =>          'Al Faqrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'خبت سعيدة',
                'name_en' =>          'Khabt Sa\'idah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحمي',
                'name_en' =>          'Al Hima',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السليل',
                'name_en' =>          'As Sulayyil',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجهو',
                'name_en' =>          'Al Jahw',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القمري',
                'name_en' =>          'Al Qamri',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ضمد',
                'name_en' =>          'Damad',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخضيرة',
                'name_en' =>          'Al Khudayrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشقيري',
                'name_en' =>          'Alshuqayri',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'زبارة رشيد',
                'name_en' =>          'Zabarat Rashid',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'قنبورة',
                'name_en' =>          'Qanbura',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'بحرة',
                'name_en' =>          'Bahrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القائم',
                'name_en' =>          'Al Qaim',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المحصام',
                'name_en' =>          'Al Muhsam',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحجاجة',
                'name_en' =>          'Al Hajajah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجربة',
                'name_en' =>          'Al Jirbah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السادلية',
                'name_en' =>          'As Sadiliyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مريخية',
                'name_en' =>          'Muraykhiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العروس',
                'name_en' =>          'Al \'arus',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخزنة',
                'name_en' =>          'Al Khuznah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العسيلة',
                'name_en' =>          'Al \'usaylah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'سد ملاكي',
                'name_en' =>          'Sadd Malaki',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكتيفة',
                'name_en' =>          'Al Kutayfah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السيبة',
                'name_en' =>          'As Syabah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المرزوق',
                'name_en' =>          'Al Marzuq',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحريقة',
                'name_en' =>          'Al Hariqah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الرد',
                'name_en' =>          'Ar Radd',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'دودة',
                'name_en' =>          'Dudah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدوشية',
                'name_en' =>          'Ad Dawshiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'أم الحجل',
                'name_en' =>          'Umm Al Hajal',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المقيدر',
                'name_en' =>          'Al Muqaydir',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السلامة',
                'name_en' =>          'As Salamah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو عريش',
                'name_en' =>          'Abu Arish',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحميرة',
                'name_en' =>          'Al Humayrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'فلس',
                'name_en' =>          'Falas',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حاكمة',
                'name_en' =>          'Hakimah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الصيابة',
                'name_en' =>          'As Sayyabah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العباسية',
                'name_en' =>          'Al \'abbasiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكروس',
                'name_en' =>          'Al Kurus',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المبيت',
                'name_en' =>          'Al Mubayyat',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السرداح',
                'name_en' =>          'As Sirdah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المعزاب',
                'name_en' =>          'Al Mi\'zab',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السودي',
                'name_en' =>          'As Sawadi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحلحلة',
                'name_en' =>          'Al Halhalah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'وعلان',
                'name_en' =>          'Wa\'lan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'البيسري',
                'name_en' =>          'Al Baysuri',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ديحمة',
                'name_en' =>          'Dayhamah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخلايف',
                'name_en' =>          'Al Khalayif',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشنامرة',
                'name_en' =>          'Al Shanamirah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'صامطة',
                'name_en' =>          'Samtah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجرادية',
                'name_en' =>          'Al Juradiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو حجر الاسفل',
                'name_en' =>          'Abu Hajar Al Asfal',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدغارير',
                'name_en' =>          'Ad Dagharir',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حاكمة',
                'name_en' =>          'Hakimah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حاكمة الدغارير',
                'name_en' =>          'Hakimah Ad Dagharir',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القفل',
                'name_en' =>          'Al Qufl',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السر',
                'name_en' =>          'As Sirr',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'اللقية',
                'name_en' =>          'Al Laqyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو حجر الأعلى',
                'name_en' =>          'Abu Hajar Al A\'la',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'النجامية',
                'name_en' =>          'An Nujamiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'شعب الذئب',
                'name_en' =>          'Shi\'b Adh Dhib',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخوجرة',
                'name_en' =>          'Al Khawjarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الطوال',
                'name_en' =>          'At Tuwal',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المجنة',
                'name_en' =>          'Al Mijannah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عنطوطة',
                'name_en' =>          'Antutah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجاظع',
                'name_en' =>          'Al Jadhi\'',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الركوبة',
                'name_en' =>          'Ar Rukubah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مجعر',
                'name_en' =>          'Muj\'ur',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الموسم',
                'name_en' =>          'Al Muwassam',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخرخير',
                'name_en' =>          'Al Kharkhir',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'أبو طوق',
                'name_en' =>          'Abu Tawq',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العقيل',
                'name_en' =>          'Al \'uqail',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ختب',
                'name_en' =>          'Khatb',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'صير',
                'name_en' =>          'Sir',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القصار',
                'name_en' =>          'Al Qsar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المحرق',
                'name_en' =>          'Al Muharq',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جنابه',
                'name_en' =>          'Gnaba',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الميناء الجديد',
                'name_en' =>          'New Port',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'فرسان',
                'name_en' =>          'Farasan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'أم صمدين',
                'name_en' =>          'Umm Sumdayn',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المشران',
                'name_en' =>          'Al Mishran',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بئر بن هرماس',
                'name_en' =>          'Bir Ibn Hermas',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'الحليسية',
                'name_en' =>          'Al Hulaysiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'راس ام قصبة',
                'name_en' =>          'Ras Umm Qusbah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'خبت البقر',
                'name_en' =>          'Khabt Al Baqar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحنبة',
                'name_en' =>          'Al Hanabah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عرق',
                'name_en' =>          'Irq',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'أبو العشرة',
                'name_en' =>          'Abu Al \'usharah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جرار',
                'name_en' =>          'Jarrar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العيشة',
                'name_en' =>          'Al \'ayshah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جبل عبادل',
                'name_en' =>          'Jabal \'abadil',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'البحثة',
                'name_en' =>          'Al Bihthah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المجازيع',
                'name_en' =>          'Al Mijazi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المسكية',
                'name_en' =>          'Al Maskiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حمية',
                'name_en' =>          'Hamayah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السحار',
                'name_en' =>          'As Sahhar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القصبة',
                'name_en' =>          'Al Qasabah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العارضة',
                'name_en' =>          'Al \'aridah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'سنابس',
                'name_en' =>          'Sanabis',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'قيس',
                'name_en' =>          'Qays',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الوحلة',
                'name_en' =>          'Al Wahlah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العشوة',
                'name_en' =>          'Al \'ishwah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الفقهاء',
                'name_en' =>          'Al Fuqaha',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'دحيقة',
                'name_en' =>          'Duhayqah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشواجرة',
                'name_en' =>          'Ash Shawajirah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'بخشة',
                'name_en' =>          'Bakhshah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الاساملة',
                'name_en' =>          'Al Asamilah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخلفة',
                'name_en' =>          'Al Khalfah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جاضع المحاضين',
                'name_en' =>          'Jadi\' Al Mahadin',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخمس',
                'name_en' =>          'Al Khums',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مستورة',
                'name_en' =>          'Masturah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السداد',
                'name_en' =>          'As Sudad',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الزهبين',
                'name_en' =>          'Az Zahabayn',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'صنبة',
                'name_en' =>          'Sanbah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'البدع',
                'name_en' =>          'Al Bada\'',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المعبوج',
                'name_en' =>          'Al Ma\'buj',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخصاوية',
                'name_en' =>          'Al Khasawiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المضاية',
                'name_en' =>          'Al Madayah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'البديع والقرفي',
                'name_en' =>          'Al Badi\' Wal Qarafi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مزهرة',
                'name_en' =>          'Mizhirah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكربوص',
                'name_en' =>          'Al Karbus',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الواصلي',
                'name_en' =>          'Al Wasili',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الريان',
                'name_en' =>          'Ar Rayyan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'قامزة',
                'name_en' =>          'Qamizah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'شهرين',
                'name_en' =>          'Shahrayn',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المروة',
                'name_en' =>          'Al Marwah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الظهر',
                'name_en' =>          'Adh Dhahar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العقم',
                'name_en' =>          'Al \'aqum',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الصبخاية',
                'name_en' =>          'As Subkhayah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جلاح',
                'name_en' =>          'Jilah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الراحة',
                'name_en' =>          'Ar Rahah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المهدف',
                'name_en' =>          'Al Mihdaf',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مخشوش',
                'name_en' =>          'Makhshush',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخوبة',
                'name_en' =>          'Al Khawbah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القحمة',
                'name_en' =>          'Al Qahmah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخشل',
                'name_en' =>          'Al Khashal',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجابري',
                'name_en' =>          'Al Jabiri',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جحا',
                'name_en' =>          'Juha',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السر',
                'name_en' =>          'As Sirr',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الهجنبة',
                'name_en' =>          'Al Hajanbah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشطيفية',
                'name_en' =>          'Ash Shutayfiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحصامة',
                'name_en' =>          'Al Hassamah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخضراء الشمالية',
                'name_en' =>          'Al Khadra Ash Shamaliyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السويدية',
                'name_en' =>          'Al Suwaydiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'رعشة',
                'name_en' =>          'Rashah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المجامة',
                'name_en' =>          'Al Mujammah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المخشلية',
                'name_en' =>          'Al Mukhashshaliyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحامضة',
                'name_en' =>          'Al Hamidah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجعدية',
                'name_en' =>          'Al Ja\'diyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المحامل',
                'name_en' =>          'Al Mahamil',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحصمة',
                'name_en' =>          'Al Hasamah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حاكمة',
                'name_en' =>          'Hakimah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'احد المسارحة',
                'name_en' =>          'Ahad Al Musarihah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحجفار',
                'name_en' =>          'Al Hijfar',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الطاهرية',
                'name_en' =>          'At Tahiriyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحضرور',
                'name_en' =>          'Al Hadrur',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدريعية',
                'name_en' =>          'Ad Duray\'iyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'البدوي',
                'name_en' =>          'Al Badawi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الهلية',
                'name_en' =>          'Al Halliyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحنيني',
                'name_en' =>          'Al Hanini',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'قمعة',
                'name_en' =>          'Qama\'ah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المنجارة',
                'name_en' =>          'Al Minjarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المقرقم',
                'name_en' =>          'Al Maqarqam',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المحطة',
                'name_en' =>          'Al Mahattah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحقلة',
                'name_en' =>          'Al Haqlah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'أبو الرديف',
                'name_en' =>          'Abu Ar Radif',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'مدينة الملك عبدالله الاقتصادية',
                'name_en' =>          'King Abdullah Economic City',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخارش',
                'name_en' =>          'Al Kharish',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السهي',
                'name_en' =>          'As Sahi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'رمادا',
                'name_en' =>          'Ramada',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'روان',
                'name_en' =>          'Rawan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'هجرة شهيل',
                'name_en' =>          'Hijrat Shuhayl',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'البرزة',
                'name_en' =>          'Al Barzah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'أم سدرة',
                'name_en' =>          'Umm Sidrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشذوبة',
                'name_en' =>          'Mashdhubah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المفيجر',
                'name_en' =>          'Al Mufaijir',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'وادي الحياة',
                'name_en' =>          'Wadi Al Hayat',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الاحساء',
                'name_en' =>          'Al Ahsa',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'تندحة',
                'name_en' =>          'Tendaha',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السليمانية',
                'name_en' =>          'As Sulaimaniyah',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'الواديين',
                'name_en' =>          'Al Wadiyayn',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفيض',
                'name_en' =>          'Al Fayd',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ختبة',
                'name_en' =>          'Khatbah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مشرفة',
                'name_en' =>          'Mushrifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'اضم',
                'name_en' =>          'Adham',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الخلصة',
                'name_en' =>          'Al Khlusah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السيح',
                'name_en' =>          'As Seeh',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'حسوة',
                'name_en' =>          'Hiswah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الفرعين',
                'name_en' =>          'Al Faraain',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بللحمر',
                'name_en' =>          'Billahmar',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'بحر ابو سكينة',
                'name_en' =>          'Bahr Abu Sukaynah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العمق',
                'name_en' =>          'Al Umaq',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'يعرى',
                'name_en' =>          'Yaara',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العيش',
                'name_en' =>          'Al Aysh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'جزيرة صنافير',
                'name_en' =>          'Sanafir Island',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'جزيرة تيران',
                'name_en' =>          'Tiran Island',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'سليلة جهينة',
                'name_en' =>          'Salilat Juhaynah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المسقي',
                'name_en' =>          'Al Masqi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الصفوية',
                'name_en' =>          'As Safwiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'آل علي',
                'name_en' =>          'Al \'ali',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جواثا',
                'name_en' =>          'Jawatha',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الرفيعة',
                'name_en' =>          'Ar Rafi\'ah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'رأس الخير',
                'name_en' =>          'Ras Al Khair',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'البريكة',
                'name_en' =>          'Al Buraykah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'شعيب الصقعاء',
                'name_en' =>          'Shuaib As Saqa\'a',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مشاش ابن جازي',
                'name_en' =>          'Mashash Ibn Jazi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'فيضة السمار',
                'name_en' =>          'Faydat As Sammar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ذرفي',
                'name_en' =>          'Dharfi',
                'region_id' =>          7
            ],
            [
                'name_ar' =>        'المشعلية',
                'name_en' =>          'Al Mishaliyah',
                'region_id' =>          11
            ],
            [
                'name_ar' =>        'الخوي',
                'name_en' =>          'Al Khawi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'آل رحمة',
                'name_en' =>          'Al Rahmah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'السدين',
                'name_en' =>          'As Saddain',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوسيطاء',
                'name_en' =>          'Al Wusayta',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العزيزيه',
                'name_en' =>          'Al Aziziyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'شراف',
                'name_en' =>          'Sharaf',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحبابيه',
                'name_en' =>          'Al Hababiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السدريه',
                'name_en' =>          'As Sadryah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الهويديه',
                'name_en' =>          'Al Huwaydyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العناديه',
                'name_en' =>          'Al Enadyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'نعام',
                'name_en' =>          'Na\'am',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ابو سدر',
                'name_en' =>          'Abu Sidr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'مشرفة الكراشمه',
                'name_en' =>          'Mushrifah Al Krashmah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السر',
                'name_en' =>          'As Sirr',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحيد',
                'name_en' =>          'Al Hayd',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الراجحية',
                'name_en' =>          'Al Rajhiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السيح',
                'name_en' =>          'As Seeh',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الصالحية',
                'name_en' =>          'As Salhiyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجنوبية بسدير',
                'name_en' =>          'Southern Sudair',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الوسيطا',
                'name_en' =>          'Al Wasita',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجلة الجنوبي',
                'name_en' =>          'Jellah Al Janubi',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'دهو',
                'name_en' =>          'Daho',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'السلام',
                'name_en' =>          'As Salam',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'قمران',
                'name_en' =>          'Qamran',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام سليم',
                'name_en' =>          'Umm Sulaim',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'صيحة',
                'name_en' =>          'Sayha',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'بلثقاء',
                'name_en' =>          'Balthaqa',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'ام شيح',
                'name_en' =>          'Umm Sheih',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحيانية',
                'name_en' =>          'Al Hayaniyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'صالحية كف',
                'name_en' =>          'Salhiyat Kaf',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'المصيفقيه',
                'name_en' =>          'Al Musayfiqih',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الناصفة',
                'name_en' =>          'An Nasifah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الباينيه',
                'name_en' =>          'Al Baynih',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الروضة',
                'name_en' =>          'Ar Rawdah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'النزهة',
                'name_en' =>          'An Nuzhah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجامعية',
                'name_en' =>          'Al Jamieyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'رفايع المزينى',
                'name_en' =>          'Ruf\'ai\' Al Muzaini',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'دارة المردمة',
                'name_en' =>          'Darat Al Mardamah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الجافورة',
                'name_en' =>          'Al Jaforah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الحفيرة',
                'name_en' =>          'Al Hufayrah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'القرينه',
                'name_en' =>          'Al Qurainah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'غيانه وحرقان',
                'name_en' =>          'Ghianah Wahurqan',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'العبدليه',
                'name_en' =>          'Al Abdaliyah',
                'region_id' =>          1
            ],
            [
                'name_ar' =>        'الغبان',
                'name_en' =>          'Al Ghobban',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصدر',
                'name_en' =>          'As Sadr',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'المربع',
                'name_en' =>          'Al Murabba\'',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'اعلى وادي عرضة',
                'name_en' =>          'Aala Wadi Ardah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'العقيق',
                'name_en' =>          'Al Aqiq',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دغبج',
                'name_en' =>          'Dughbaj',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الوطاة',
                'name_en' =>          'Al Watah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الفلحة',
                'name_en' =>          'Al Falhah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'حفار',
                'name_en' =>          'Haffar',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الصغو',
                'name_en' =>          'Al Saghu',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'غران',
                'name_en' =>          'Gharan',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الشباشبة',
                'name_en' =>          'Al Shabashibah',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'مشرف',
                'name_en' =>          'Mushrif',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'دقم الذنيب',
                'name_en' =>          'Daqm Al Dhanib',
                'region_id' =>          2
            ],
            [
                'name_ar' =>        'الرذايا',
                'name_en' =>          'Al Radhaya',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ينبع الصناعية',
                'name_en' =>          'Yanbu Al Sinaiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'تلعة نزة',
                'name_en' =>          'Tal\'ah Nazah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الروزه',
                'name_en' =>          'Al Roozah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'السريحية',
                'name_en' =>          'Al Suraihiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الرفيعة',
                'name_en' =>          'Ar Rafi\'ah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'المجرذية',
                'name_en' =>          'Al Majradiyah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ضويل',
                'name_en' =>          'Duwail',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'صبحا الجحفه',
                'name_en' =>          'Sabha Al Jahfah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بدائع الحناحنه',
                'name_en' =>          'Badai\' Al Hanahanah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'بدائع العوض',
                'name_en' =>          'Badai\' Al Awd',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'ملح',
                'name_en' =>          'Malah',
                'region_id' =>          3
            ],
            [
                'name_ar' =>        'الجديدات',
                'name_en' =>          'Al Jadidat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الحجره',
                'name_en' =>          'Al Hiijrah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'حريفيات درعه',
                'name_en' =>          'Harifiyat Dareih',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'عين ابن فهيد',
                'name_en' =>          '\'ayn  Ibn Fuhayd',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'تلعة رشيد',
                'name_en' =>          'Tal\'ah Rashid',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'كفت',
                'name_en' =>          'Kofat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'النويصفة',
                'name_en' =>          'Al Nuwaisifah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصحاف',
                'name_en' =>          'As Sahaf',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مشرفة عمودان',
                'name_en' =>          'Mushrifah Amudan',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الاخيضر',
                'name_en' =>          'Al Ukhaydir',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فيضة السلمات',
                'name_en' =>          'Faydat Al Salmat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الخريشاء',
                'name_en' =>          'Al Khuraysha',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'العازمية',
                'name_en' =>          'Al \'azimiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ابو قليبات',
                'name_en' =>          'Abu Qaleebat',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجحفة',
                'name_en' =>          'Al Juhfah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الديرية',
                'name_en' =>          'Ad Dirirah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'اباالحياص',
                'name_en' =>          'Aba Al Hayas',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'ابو طرفاء',
                'name_en' =>          'Abu Tarfa',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المرموثة',
                'name_en' =>          'Al Marmuthah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'المرموثة الشمالية',
                'name_en' =>          'Al Marmuthah Ash Shamaliyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'مازونة',
                'name_en' =>          'Mazunah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الصلبيه',
                'name_en' =>          'Al Salbiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الكدادية',
                'name_en' =>          'Al Kadadiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'شقران الحاجر',
                'name_en' =>          'Ash Shuqran Al Hajr',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الفايزية',
                'name_en' =>          'Al Fayziyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'فيضة الريشية',
                'name_en' =>          'Faydat Al Resheyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'هجرة فضيلة',
                'name_en' =>          'Hijrat Fudailah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'السالمية',
                'name_en' =>          'As Salmiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مدينة الملك خالد العسكرية',
                'name_en' =>          'King Khalid Military City',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ابو طوطاحه البرازي',
                'name_en' =>          'Abu Tutahah Al Barazi',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الرقعى',
                'name_en' =>          'Ar Ruq\'i',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الذيبية',
                'name_en' =>          'Adh Dhibiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'معرج السوبان',
                'name_en' =>          'Ma’Raj Al Suban',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'خبيراء',
                'name_en' =>          'Khubaira',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'ام الحمام',
                'name_en' =>          'Umm Al Hamam',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'تناقيب',
                'name_en' =>          'Tanajib',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'غزلان',
                'name_en' =>          'Ghazlan',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجوية',
                'name_en' =>          'Al Jawiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الفردانية',
                'name_en' =>          'Al Fardaniyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'الجيشية',
                'name_en' =>          'Al Jaishiyah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'انقير',
                'name_en' =>          'Annaqeer',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'مليحة',
                'name_en' =>          'Mulayhah',
                'region_id' =>          5
            ],
            [
                'name_ar' =>        'عين بن مصافح',
                'name_en' =>          '\'ayn  Bin Musafih',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مندرمربة',
                'name_en' =>          'Mandir Marabah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مصاولي',
                'name_en' =>          'Masawly',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'روضة بن نورة',
                'name_en' =>          'Rawdat Bin Nourah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'مخطط ال شبوه',
                'name_en' =>          'Al Shabwah Subdivision',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'الشقيريه',
                'name_en' =>          'Al Shuqayriyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المصبح',
                'name_en' =>          'Al Musbah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'ترقش',
                'name_en' =>          'Turqesh',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'قرن هادي',
                'name_en' =>          'Qarn Hadi',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'المليحة',
                'name_en' =>          'Al Milayhah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'زهرة بني بشر',
                'name_en' =>          'Zahrah Bani Bishr',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل قبره والقوزيه',
                'name_en' =>          'Al Qibrah Al Quoziyah',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العقيق',
                'name_en' =>          'Al Aqiq',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'آل خجيم',
                'name_en' =>          'Al Khujaim',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'غوافل',
                'name_en' =>          'Ghavafil',
                'region_id' =>          6
            ],
            [
                'name_ar' =>        'العريدة',
                'name_en' =>          'Al Areedah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القرينين',
                'name_en' =>          'Alqarinin',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع  الجرعاء',
                'name_en' =>          'Badai\' Al Jara',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الضربة',
                'name_en' =>          'Al Darbah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'رجامة',
                'name_en' =>          'Rijamah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الزبيرة',
                'name_en' =>          'Az Zubayrah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الخوير',
                'name_en' =>          'Al Khuwair',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحيانية',
                'name_en' =>          'Al Hayaniyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الجبيلي',
                'name_en' =>          'Al Jabayli',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'ام ساروت',
                'name_en' =>          'Umm Sarut',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الناصرية',
                'name_en' =>          'An Nasiriyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الفويلق 2',
                'name_en' =>          'Al Fuwayliq 2',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الفويلق 1',
                'name_en' =>          'Al Fuwayliq 1',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السناف',
                'name_en' =>          'Al Sanaf',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع العليا',
                'name_en' =>          'Badai\' Aleulya',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع المحمي',
                'name_en' =>          'Badai\' Al Mahmi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ريع المحمي',
                'name_en' =>          'Ri\' Al Mahmi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المنصورية',
                'name_en' =>          'Al Mansuriyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الرضفين',
                'name_en' =>          'Al Radhfain',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشارف',
                'name_en' =>          'Al Shaarif',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'روض العبد',
                'name_en' =>          'Rawd Al Abd',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'السعدة',
                'name_en' =>          'Al Saadah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'النظيم واللجاوي',
                'name_en' =>          'An Nadhim And Lajawi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الغانمية',
                'name_en' =>          'Al Ganimiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الحمودية',
                'name_en' =>          'Al Hamudiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'حمه',
                'name_en' =>          'Hama',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ثويليل',
                'name_en' =>          'Thuwayleel',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'أبو سويسيات',
                'name_en' =>          'Abu Swaisiyat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'القوينية',
                'name_en' =>          'Al Quwainiyah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الدحوه',
                'name_en' =>          'Ad Dihwah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشعيلاء',
                'name_en' =>          'Al Shuayla',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشق',
                'name_en' =>          'Al Shaq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'بدائع الشق',
                'name_en' =>          'Badai\' Al Shaq',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الصفراء',
                'name_en' =>          'As Safra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الملوي',
                'name_en' =>          'Al Malvi',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'اللبانه',
                'name_en' =>          'Al Labana',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'وسعة الرس',
                'name_en' =>          'Wasat Al Rass',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الطنيب',
                'name_en' =>          'Al Tuneib',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البحره',
                'name_en' =>          'Al Bahra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ام شعاري',
                'name_en' =>          'Umm Sha\'arei',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'اللخين عبيد',
                'name_en' =>          'Al Lakheen Ubaid',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المناخ',
                'name_en' =>          'Al Manakh',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المجصة',
                'name_en' =>          'Al Majasah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'البوييضة',
                'name_en' =>          'Al Buwaiyidah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ابو دويحات',
                'name_en' =>          'Abu Duyhat',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'عيال عبيد',
                'name_en' =>          'Eyal Obeid',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'المغار',
                'name_en' =>          'Al Maghar',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'مران',
                'name_en' =>          'Marran',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الناصفة',
                'name_en' =>          'An Nasifah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الدفينة',
                'name_en' =>          'Al Dufaynah',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'فيضة المسعار',
                'name_en' =>          'Faydat Al Masa\'r',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الذكري',
                'name_en' =>          'Al Dhikra',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'الشاظي مناحي بن بكر',
                'name_en' =>          'Al Shadhi Manahi Ibn Bakr',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'الديدب',
                'name_en' =>          'Al Didab',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'ابن عائش',
                'name_en' =>          'Ibn Aesh',
                'region_id' =>          9
            ],
            [
                'name_ar' =>        'النعامية',
                'name_en' =>          'Al Naeamia',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الهجاريه',
                'name_en' =>          'Al Hajariah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخواجيه',
                'name_en' =>          'Al Khawajih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السوالمه',
                'name_en' =>          'Al Sawalimah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الباطنه',
                'name_en' =>          'Al Batinah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشمه',
                'name_en' =>          'Al Shamuh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الرافعي',
                'name_en' =>          'Al Rafie',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الطراشه',
                'name_en' =>          'Alt Arashah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الفقرة',
                'name_en' =>          'Al Faqrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو الكرش',
                'name_en' =>          'Abu Alkarsh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العرجين',
                'name_en' =>          'Al Arjeen',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحواية',
                'name_en' =>          'Al Hiwaya',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العمارده',
                'name_en' =>          'Al Amaridah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القصاده',
                'name_en' =>          'Al Qasadah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السروريه',
                'name_en' =>          'Al Saruriyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'النجابه و الجحاجح',
                'name_en' =>          'Al Nijabah Wal Jahajih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عبدالله العيافي (العيافي)',
                'name_en' =>          'Abdullah Al Eyafi (Al Eyafi)',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجعاونه',
                'name_en' =>          'Al Jaeawunah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله محسن  المحاسنة',
                'name_en' =>          'Halah Muhsin Al Muhasana',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدواحشه',
                'name_en' =>          'Al Dawahishah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'تيهان (حلة تيهان)',
                'name_en' =>          'Tyhan (Hulat Tyhan)',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخواره',
                'name_en' =>          'Al Khawarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشواهية',
                'name_en' =>          'Al Shawahiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشعاره',
                'name_en' =>          'Al Shiarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'القواعة',
                'name_en' =>          'Al Qawaea',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشاخر',
                'name_en' =>          'Al Shaakhir',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ام الشباقاء',
                'name_en' =>          'Umm Al Shibaqa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'اللخبصية',
                'name_en' =>          'Al Lakhabsia',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الصامخ',
                'name_en' =>          'Al Samikh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجاره القديمه',
                'name_en' =>          'Al Jarah Al Qadiumah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الزينيه',
                'name_en' =>          'Al Ziniyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حلة علي بن موسى',
                'name_en' =>          'Hulat Ali Bin Musa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ام القحفه',
                'name_en' =>          'Umm Al Qahfah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حلة المكي',
                'name_en' =>          'Hulat Al Makki',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حلة العرشي',
                'name_en' =>          'Hulat Al Earshi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'قبه',
                'name_en' =>          'Qibah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخضراء',
                'name_en' =>          'Al Khadra',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله عطيه',
                'name_en' =>          'Halah Attieh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله ابو مرعي',
                'name_en' =>          'Halah Abu Marei',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدحيقي',
                'name_en' =>          'Al Daheeqi',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحشيبرية',
                'name_en' =>          'Al Hashibiria',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الرونة',
                'name_en' =>          'Ar Runah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله محمد عيسى',
                'name_en' =>          'Halah Muhamad Eisa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله العقيبي',
                'name_en' =>          'Halah Aleaqibiu',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله القميري',
                'name_en' =>          'Halah Al Qamiri',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله مشاري',
                'name_en' =>          'Halah Mishary',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله الصهلولي',
                'name_en' =>          'Halah Al Sahluli',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله الحو تين',
                'name_en' =>          'Halah Alhawa Tyn',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله بن علوان',
                'name_en' =>          'Halah Bin Alwaan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله الحكمى',
                'name_en' =>          'Halah Al Hukmaa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله عبدالله قبع',
                'name_en' =>          'Halah Abdullah Qabea',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله مروعي بن شامي',
                'name_en' =>          'Halah Maruei Bin Shamy',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حله الكلابيه',
                'name_en' =>          'Halah Al Kalabih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو دنقور',
                'name_en' =>          'Abu Danqur',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجديين',
                'name_en' =>          'Al Jidiayn',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'زبارة الجديين',
                'name_en' =>          'Zubarat Al Jidyeen',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'شيبان',
                'name_en' =>          'Shayban',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'قرية الجوابره',
                'name_en' =>          'Qaryat Al Jawabirih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشواجرة والجرابية',
                'name_en' =>          'Al Shawajirat Wal Jarabiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الزيني',
                'name_en' =>          'Al Zayni',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المحاصيه',
                'name_en' =>          'Al Mahasih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جميما',
                'name_en' =>          'Jameema',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حنقفه',
                'name_en' =>          'Hanaqfah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحوامضه جحيش',
                'name_en' =>          'Al Hawamidah Jahish',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الزقله',
                'name_en' =>          'Al Zaqlah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'شهده',
                'name_en' =>          'Shahdah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكلبة',
                'name_en' =>          'Al Kalibah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الفصاله والدغاريه',
                'name_en' =>          'Al Fisalah Wal Dagharih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشقافه والمصاوفة',
                'name_en' =>          'Al Shiqafah Wal Musawafa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المدرك',
                'name_en' =>          'Al Madrak',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشعافه',
                'name_en' =>          'Al Shaeafah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابوالمقره',
                'name_en' =>          'Abu Al Maqrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العواجمه',
                'name_en' =>          'Al Awajimah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'وجه الحسن',
                'name_en' =>          'Wajah Alhasan',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العرضه',
                'name_en' =>          'Alearduh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'البطيح',
                'name_en' =>          'Albatih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'السداده',
                'name_en' =>          'Alsidaduh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'النزلة',
                'name_en' =>          'Al Nazlah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عوانه',
                'name_en' =>          'Eawanah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العبده',
                'name_en' =>          'Aleabduh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ابو الطيور',
                'name_en' =>          '\'abu Altuyur',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'ام العرش',
                'name_en' =>          'Umm Alearsh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'منسيه',
                'name_en' =>          'Mansih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الصنيف',
                'name_en' =>          'Alsanif',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحمضيه',
                'name_en' =>          'Al Hamdiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحرف',
                'name_en' =>          'Al Harf',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المجديره',
                'name_en' =>          'Almajdiruh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حلة ابو حبيبه',
                'name_en' =>          'Hulat \'abu Habibuh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخوالده',
                'name_en' =>          'Alkhawaliduh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الزيديه',
                'name_en' =>          'Alzaydiuh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحجرين',
                'name_en' =>          'Alhajarayn',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'جريبه',
                'name_en' =>          'Jaribuh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'زربه',
                'name_en' =>          'Zarabah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الهدوى',
                'name_en' =>          'Alhadwaa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الحقاويه',
                'name_en' =>          'Alhaqawih',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العسيلة',
                'name_en' =>          'Al \'usaylah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الرجيع',
                'name_en' =>          'Alrajie',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'حلة ابراهيم عيسى',
                'name_en' =>          'Hulat \'iibrahim Eisaa',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الكومه',
                'name_en' =>          'Alkawmuh',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الخشابية',
                'name_en' =>          'Al Khashabiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشابطه',
                'name_en' =>          'Al Shabitah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الدهالية',
                'name_en' =>          'Al Dahaliyyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المعاشية',
                'name_en' =>          'Al Maashiyyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'سلام بني واصل',
                'name_en' =>          'Salam Bani Wasal',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'خضيرة عياش',
                'name_en' =>          'Khudayrat Ayash',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المواسة',
                'name_en' =>          'Al Mawasah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'خضير',
                'name_en' =>          'Khudair',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الواسط',
                'name_en' =>          'Al Wasit',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'عذيبه',
                'name_en' =>          'Udhaibah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الجروف',
                'name_en' =>          'Al Joroof',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الغفقيه',
                'name_en' =>          'Al Ghafqiyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الشعفوليه',
                'name_en' =>          'Ash Shuafuliyah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'الظبرة',
                'name_en' =>          'Al Dhabrah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المحازره',
                'name_en' =>          'Al Mahazirah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العقدة',
                'name_en' =>          'Al \'uqdah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'سمرة الجد',
                'name_en' =>          'Samrat Al Jed',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'منشبة',
                'name_en' =>          'Manshabah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العرق',
                'name_en' =>          'Al Arq',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'العكرة',
                'name_en' =>          'Alekarah',
                'region_id' =>          10
            ],
            [
                'name_ar' =>        'المي الأحمر',
                'name_en' =>          'Al May Al Ahmar',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الفرح',
                'name_en' =>          'Al Farah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'القمع',
                'name_en' =>          'Al Qama',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'قذانه',
                'name_en' =>          'Al Qadhanah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الفصيلة وال مسعود',
                'name_en' =>          'Al Fasilah And Al Masud',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الخاجة',
                'name_en' =>          'Al Khajah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحدبان',
                'name_en' =>          'Al Hadban',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الضحوات',
                'name_en' =>          'Al-Dahwat',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الحبشه',
                'name_en' =>          'Al Habashah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الفقهاء',
                'name_en' =>          'Al Fuqaha',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الغرباء والاثمة',
                'name_en' =>          'Al Gharaba Wal Athimmah',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الصدر',
                'name_en' =>          'As Sadr',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'الشريق',
                'name_en' =>          'Al Shareeq',
                'region_id' =>          12
            ],
            [
                'name_ar' =>        'ابورواث',
                'name_en' =>          'Aburawas',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'هديب',
                'name_en' =>          'Hedeb',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'الحرة',
                'name_en' =>          'Al Harrah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'أطناب',
                'name_en' =>          'Athnab',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'بسيطاء',
                'name_en' =>          'Basithah',
                'region_id' =>          13
            ],
            [
                'name_ar' =>        'شفا البين',
                'name_en' =>          'Shafa Albayn',
                'region_id' =>          8
            ],
            [
                'name_ar' =>        'ابرقية',
                'name_en' =>          'Abraqiyah',
                'region_id' =>          4
            ],
            [
                'name_ar' =>        'الجوي',
                'name_en' =>          'Al Juwy',
                'region_id' =>          1
            ]
        );
    }
}
