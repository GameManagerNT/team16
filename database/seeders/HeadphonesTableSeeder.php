<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadphonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandName(){
        $names = array(
            'SoundMax X7',
            'AudioEngine A3',
            'Bose QuietComfort 45',
            'Sony WH-1000XM5',
            'Sennheiser Momentum 4',
            'JBL Quantum 50',
            'Razer BlackShark V2 Pro',
            'HyperX Cloud Alpha',
            'Corsair Virtuoso RGB Wireless', 
            'Logitech G733',
            'SteelSeries Arctis 9X',
            'Creative Outlier Air V3',
            'Marshall Major IV',
            'Bang & Olufsen Beoplay HX',
            'Apple AirPods Pro 2',
            'JBL Tune 750BTNC',
            'Anker Soundcore Life Q30',
            'Philips PH805',
            'Edifier W820NB',
            'Tribit QuietPlus 72'
        );
        return $names [rand(0,count($names)-1)];
    }

    public function generateRandGenre(){
        $genres=array(
            '封閉式耳機',
            '入耳式耳機'
        );
        return $genres [rand(0,count($genres)-1)];
    }

    public function generateRandHz(){
        $hzrange=array(
            '16 - 23000 Hz',
            '20 - 20000 Hz', 
            '7 - 41000 Hz',
            '10 - 48000 Hz',
            '50 - 25000 Hz',
            '100 - 30000 Hz',
            '20 - 42000 Hz',
            '5 - 40000 Hz',
            '15 - 35000 Hz',
            '80 - 28000 Hz',
            '18 - 33000 Hz',
            '120 - 27000 Hz',
            '20 - 34000 Hz',
            '50 - 31000 Hz',
            '10 - 29000 Hz',
            '70 - 26000 Hz',
            '12 - 23000 Hz',
            '16 - 20000 Hz',
            '14 - 19000 Hz',
            '180 - 22000 Hz'
        );
        return $hzrange [rand(0,count($hzrange)-1)];
    }

    public function generateRandSpl(){
        $splrange=array(
            '95 ',
            '103 ',
            '108 ',
            '93 ',
            '101 ',
            '105 ',
            '99 ',
            '107 ',
            '110 ',
            '96 ',
            '104 ', 
            '109 ',
            '94 ',
            '102 ',
            '106 ',
            '98 ',
            '100 ',
            '97 ',
            '95 ',
            '103 '
        );
        return $splrange [rand(0,count($splrange)-1)];
    }

    public function generateRandOi(){
        $oirange=array(
            '16 ',
            '32 ',
            '38 ',
            '48 ',
            '65 ',
            '100 ',
            '150 ',
            '250 ',
            '16 ',
            '32 ',
            '38 ',
            '48 ',
            '65 ',
            '100 ',
            '150 ',
            '250 ',
            '16 ',
            '32 ',
            '38 ',
            '48 ' 
        );
        return $oirange [rand(0,count($oirange)-1)];
    }

    public function generateRandWeight(){
        $weights=array(
            '25 ',
            '48 ',
            '68 ',
            '52 ',
            '37 ',
            '83 ',
            '76 ', 
            '94 ',
            '88 ',
            '58 ',
            '119 ',
            '112 ',
            '168 ',
            '42 ',
            '170 ',
            '61 ',
            '105 ',
            '127 ',
            '86 ',
            '213 '
        );
        return $weights [rand(0,count($weights)-1)];
    }

    public function generateRandTs(){
        $ts=array(
            '有線',
            '無線'
        );
        return $ts [rand(0,count($ts)-1)];
    }

    public function generateRandPrice(){
        $prices=array(
            '990',
            '1560',
            '32750',
            '1280',
            '3420',
            '4600',
            '1850',
            '2380',
            '5800',
            '21650',
            '7990',
            '3280',
            '22150',
            '9999',
            '1799',
            '4500',
            '2980',
            '11888',
            '3666',
            '15580'
        );
        return $prices [rand(0,count($prices)-1)];
    }
    public function run()
    {
        for($i = 0; $i<20;$i++){
            $name = $this ->generateRandName();
            $genre = $this ->generateRandGenre();
            $hz = $this ->generateRandGenre();
            $spl = $this ->generateRandSpl();
            $oi = $this ->generateRandOi();
            $weight = $this ->generateRandWeight();
            $ts = $this ->generateRandTs();
            $price = $this ->generateRandPrice();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));
            $rand_tid = random_int(1, 20); 
            DB::table('headphones')->insert([
                'tid' =>$rand_tid ,
                'name' => $name,
                'genre' =>$genre ,
                'hz' => $hz,
                'spl' =>$spl,
                'oi' =>$oi,
                'weight' => $weight,
                'ts' => $ts,
                'price'=> $price,
                'created_at' => $random_datetime,
                'updated_at'=> $random_datetime,
    
            ]);
        }
    }
}
