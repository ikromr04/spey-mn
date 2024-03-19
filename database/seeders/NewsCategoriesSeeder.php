<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Stichoza\GoogleTranslate\GoogleTranslate;

class NewsCategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = array(
      array('id' => '1', 'en_title' => 'Interesting', 'ru_title' => 'Интересное', 'view_rate' => '797', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2024-03-14 20:48:09'),
      array('id' => '2', 'en_title' => 'Pharmaceutical', 'ru_title' => 'Фармацевтика', 'view_rate' => '604', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2024-03-14 20:47:44'),
      array('id' => '3', 'en_title' => 'Medicine', 'ru_title' => 'Медицина', 'view_rate' => '903', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2024-03-15 05:11:58'),
      array(
        'id' => '4',
        'en_title' => 'Vaccine',
        'ru_title' => 'Вакцина',
        'view_rate' => '461',
        'trashed' => '0',
        'created_at' => '2022-02-11 18:29:56',
        'updated_at' => '2024-03-14 20:35:37',
      )
    );

    $lang = new GoogleTranslate('en');
    $lang->setSource('en')->setTarget('mn');

    foreach ($categories as $category) {
      NewsCategory::create([
        'id' => $category['id'],
        'en_title' => $category['en_title'],
        'ru_title' => $category['ru_title'],
        'mn_title' => $lang->translate($category['en_title']),
        'view_rate' => $category['view_rate'],
        'trashed' => $category['trashed'],
        'created_at' => $category['created_at'],
        'updated_at' => $category['updated_at'],
      ]);
    }
  }
}
