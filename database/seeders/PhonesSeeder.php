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
      array('id' => '1', 'site_id' => '1', 'numbers' => '+91-9311-40-40-05', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '2', 'site_id' => '2', 'numbers' => '+7 (495) 781-37-42', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '3', 'site_id' => '3', 'numbers' => '+7 (727) 271-80-78', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '4', 'site_id' => '4', 'numbers' => '+998 78 122 2882', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '5', 'site_id' => '5', 'numbers' => '+9 (96) 312-312-908', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '6', 'site_id' => '6', 'numbers' => '+992 (37) 236-89-56', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '7', 'site_id' => '8', 'numbers' => '+44-203-598-2050', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array(
        'id' => '8',
        'site_id' => '7',
        'numbers' => '+976 90089969',
        'trashed' => '0',
        'created_at' => NULL,
        'updated_at' => NULL
      )
    );

    foreach ($phones as $phone) {
      Phone::create([
        'id' => $phone['id'],
        'site_id' => $phone['site_id'],
        'numbers' => $phone['numbers'],
        'trashed' => $phone['trashed'],
        'created_at' => $phone['created_at'],
        'updated_at' => $phone['updated_at'],
      ]);
    }
  }
}
