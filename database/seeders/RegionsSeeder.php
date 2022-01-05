<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create( [
            'code'=>'RD',
            'name_ar'=>'منطقة الرياض',
            'name_en'=>'Riyadh',
            'shipping_price'=>0,
            'fast_shipping_price'=>335,
            'id'=>1
            ] );

            Region::create( [
            'code'=>'MQ',
            'name_ar'=>'منطقة مكة المكرمة',
            'name_en'=>'Makkah',
            'shipping_price'=>606,
            'fast_shipping_price'=>225,
            'id'=>2
            ] );

            Region::create( [
            'code'=>'MN',
            'name_ar'=>'منطقة المدينة المنورة',
            'name_en'=>'Madinah',
            'shipping_price'=>173,
            'fast_shipping_price'=>1558,
            'id'=>3
            ] );

            Region::create( [
            'code'=>'QA',
            'name_ar'=>'منطقة القصيم',
            'name_en'=>'Qassim',
            'shipping_price'=>1215858,
            'fast_shipping_price'=>168,
            'id'=>4
            ] );

            Region::create( [
            'code'=>'SQ',
            'name_ar'=>'المنطقة الشرقية',
            'name_en'=>'Eastern Province',
            'shipping_price'=>780,
            'fast_shipping_price'=>995,
            'id'=>5
            ] );

            Region::create( [
            'code'=>'AS',
            'name_ar'=>'منطقة عسير',
            'name_en'=>'Asir',
            'shipping_price'=>192,
            'fast_shipping_price'=>188,
            'id'=>6
            ] );

            Region::create( [
            'code'=>'TB',
            'name_ar'=>'منطقة تبوك',
            'name_en'=>'Tabuk',
            'shipping_price'=>791,
            'fast_shipping_price'=>133,
            'id'=>7
            ] );

            Region::create( [
            'code'=>'HA',
            'name_ar'=>'منطقة حائل',
            'name_en'=>'Hail',
            'shipping_price'=>594,
            'fast_shipping_price'=>1565,
            'id'=>8
            ] );

            Region::create( [
            'code'=>'SH',
            'name_ar'=>'منطقة الحدود الشمالية',
            'name_en'=>'Northern Borders',
            'shipping_price'=>524,
            'fast_shipping_price'=>196,
            'id'=>9
            ] );

            Region::create( [
            'code'=>'GA',
            'name_ar'=>'منطقة جازان',
            'name_en'=>'Jazan',
            'shipping_price'=>136,
            'fast_shipping_price'=>1885,
            'id'=>10
            ] );

            Region::create( [
            'code'=>'NG',
            'name_ar'=>'منطقة نجران',
            'name_en'=>'Najran',
            'shipping_price'=>505,
            'fast_shipping_price'=>1133,
            'id'=>11
            ] );

            Region::create( [
            'code'=>'BA',
            'name_ar'=>'منطقة الباحة',
            'name_en'=>'Bahah',
            'shipping_price'=>418,
            'fast_shipping_price'=>1245,
            'id'=>12
            ] );

            Region::create( [
            'code'=>'GO',
            'name_ar'=>'منطقة الجوف',
            'name_en'=>'Jawf',
            'shipping_price'=>409,
            'fast_shipping_price'=>1159,
            'id'=>13
            ] );
    }
}
