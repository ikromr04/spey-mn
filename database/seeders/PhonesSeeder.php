<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\Site;
use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = array(
            array(
                'id' => 1,
                'site_id' => 1,
                'numbers' => '+44-203-598-2050',
            ),
            array(
                'id' => 2,
                'site_id' => 5,
                'numbers' => '+7 (495) 781-37-42',
            ),
            array(
                'id' => 3,
                'site_id' => 8,
                'numbers' => '+44-203-598-2050',
            ),
            array(
                'id' => 4,
                'site_id' => 12,
                'numbers' => '+919311404005',
            ),
            array(
                'id' => 5,
                'site_id' => 13,
                'numbers' => '+998 78 122 2882',
            ),
            array(
                'id' => 6,
                'site_id' => 14,
                'numbers' => '+9 (96) 312-312-908',
            ),
            array(
                'id' => 8,
                'site_id' => 15,
                'numbers' => '+992 (37) 236-89-56',
            ),
        );
        foreach ($phones as $phone) {
            $tel = new Phone;
            $tel->site_id = $phone['site_id'];
            $tel->numbers = $phone['numbers'];
            $tel->save();
        }
    }
}
