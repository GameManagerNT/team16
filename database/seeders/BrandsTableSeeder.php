<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateRandName(){
        $names = array(
            'Bose', 
            'Sennheiser',
            'Sony',
            'Audio-Technica',
            'Beats',
            'B&O',
            'Shure',
            'JBL', 
            'AKG',
            'Grado',
            'Bowers & Wilkins',
            'Marshall', 
            'Bluetooth',
            'Panasonic',
            'Plantronics',
            'Jabra',
            'Cowin',
            'TaoTronics',
            'Anker',
            '1MORE',
            'krunker', 
            'Clearsound',
            'Audial',
            'Sonex',
            'Resound',
            'Crystal Clear',
            'Soundscape',
            'Audios',
            'Sonicgear',
            'Soundhub'
          );
          return $names [rand(0,count($names)-1)];
    } 
    public function generateRandCountry(){
        $countries = array(
            '美國',
            '中國',
            '日本',
            '德國',
            '法國',
            '英國',
            '印度',
            '俄羅斯',
            '巴西',
            '義大利',
            '韓國',
            '墨西哥',
            '土耳其',
            '印尼',
            '沙特阿拉伯',
            '加拿大',
            '西班牙',
            '澳大利亞',
            '泰國',
            '南非',
            '北非',
            '越南',
            '土耳其',
            '阿根廷',
            '埃及',
            '瑞典',
            '芬蘭',
            '挪威',
            '新加坡',
            '智利'

        );
        return $countries [rand(0,count($countries)-1)];

    }
    public function generateRandFounder(){
    $founders = array(
        'Oo燦oO', 
        'Oo璃oO',
        'Oo風oO',
        'Oo晴oO',
        'Oo陽oO',
        'Oo雲oO',
        'Oo星oO',
        'Oo晨oO',
        'Oo花oO',
        'Oo翔oO',
        'Oo明oO',
        'Oo鳳oO',
        'Oo彗oO',
        'Oo曉oO',
        'Oo颖oO',
        'Oo煒oO',
        'Oo曦oO',
        'Oo煌oO',
        'Oo松oO',
        'Oo蓮oO',
        'Oo趙oO',
        'Oo錢oO',
        'Oo孫oO',
        'Oo李oO',
        'Oo芙oO',
        'Oo萍oO',
        'Oo亨oO',
        'Oo博oO',
        'Oo龍oO',
        'Oo華oO'
    );
    return $founders [rand(0,count($founders)-1)];
}
    public function generateRandHeadquarters(){
        $headquarterses = array(
            '英國倫敦主街135號',
            '法國巴黎里沃利街38號',
            '意大利羅馬人民廣場1號',
            '日本東京千代田區麴町2-1半蔵門大廈5樓',
            '美國加州洛杉磯日落大道2534號',
            '澳大利亞新南威爾斯州雪梨喬治街611號',
            '美國佛羅里達州邁阿密比斯坎大道101號',
            '美國加州山景城安菲劇場大道1600號',
            '俄羅斯莫斯科升天街72號',
            '德國柏林hauptstrasse 56753號',
            '巴西里約熱內盧布蘭科大道1號',
            '美國加州比佛利山90210號',
            '英國倫敦貝克街221B號',
            '美國舊金山郵政街1858號',
            '美國芝加哥瓦巴什大道401號',
            '英國倫敦荷蘭公園大道',
            '美國新墨西哥州阿爾伯克基黑溝路308號',
            '美國華盛頓特區賓夕法尼亞大道1600號',
            '英國倫敦唐寧街10號',
            '美國加州洛杉磯威爾夏大道10880號',
            '聯合國首都華光大道100號',
            '新納米亞國都城未來路666弄',
            '東夏國皇城前街888號',
            '奧雷利亞共和國首都自由路56號',
            '石衛國王都正義路789號',
            '達沃斯坦共和國首都和平街123號',
            '埃瑟利亞王國皇城中央廣場1號',
            '巴蘭聯邦聯邦廣場360號',
            '古蘭謝爾特公國首都愛國者大道789號',
            '亞卡迪亞帝國皇城華麗大道18號'

        );
        return $headquarterses[rand(0,count($headquarterses)-1)];
}


    public function generateRandWeb(){
        $webs = array(
        'www.randomsite1.com',
        'www.interestingpage2.com',
        'www.somewebsite3.com',
        'www.anotherpage4.com',
        'www.coolstuff5.com',
        'www.usefulinfo6.com',
        'www.awesomethings7.com',
        'www.greatcontent8.com',
        'www.amazingdata9.com',
        'www.fascinatingnews10.com',
        'www.excitingarticles11.com',
        'www.curiousblogs12.com',
        'www.intriguingvideos13.com',
        'www.entertainingmedia14.com',
        'www.amusingimages15.com',
        'www.laughablejokes16.com',
        'www.hilariousmemes17.com',
        'www.sidesplittinggifs18.com',
        'www.ticklingposts19.com',
        'www.humorousquotes20.com',
        'www.dngurjota.com ',
        'www.mlrbaqiyc.net',
        'www.htzcgkewo.org',
        'www.ovtklsmhe.com',
        'www.zyqirbnca.net',
        'www.xhvmoyjls.org',
        'www.cehqpzair.com',
        'www.ugomksnyr.net' , 
        'www.vbieldxqg.org',
        'www.hwfzoncmb.com',
        );
        return $webs [rand(0,count($webs)-1)];
    }

    public function run()
    {
        for($i = 0; $i<30;$i++){
            $name = $this ->generateRandName();
            $country = $this ->generateRandCountry();
            $since = Carbon::now()->subYears(rand(48,60))->subMonths(rand(0,12))->subRealDays(rand(0,31));
            $founder = $this ->generateRandFounder();
            $headquarters = $this ->generateRandHeadquarters();
            $web = $this ->generateRandWeb();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));

        DB::table('brands')->insert([
            'name' => $name,
            'country' =>$country ,
            'since' => $since,
            'founder' =>$founder,
            'headquarters' =>$headquarters,
            'web' => $web,
            'created_at' => $random_datetime,
            'updated_at'=> $random_datetime,


        ]);
    }
}
}
