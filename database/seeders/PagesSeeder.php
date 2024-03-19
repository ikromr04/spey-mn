<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Stichoza\GoogleTranslate\GoogleTranslate;

class PagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pages = array(
      array('id' => '1', 'en_title' => 'Home', 'ru_title' => 'Главная', 'route' => 'home', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '2', 'en_title' => 'About Us', 'ru_title' => 'О нас', 'route' => 'about', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '3', 'en_title' => 'Products', 'ru_title' => 'Продукты', 'route' => 'products', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '4', 'en_title' => 'Industry News', 'ru_title' => 'Новости отрасли', 'route' => 'news', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '5', 'en_title' => 'Pharmacovigilance', 'ru_title' => 'Фармаконадзор', 'route' => 'contacts', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array(
        'id' => '6',
        'en_title' => 'Contacts',
        'ru_title' => 'Контакты',
        'route' => 'contacts',
        'created_at' => '2022-02-11 18:29:56',
        'updated_at' => '2022-02-11 18:29:56'
      )
    );

    $lang = new GoogleTranslate('en');
    $lang->setSource('en')->setTarget('mn');

    foreach ($pages as $page) {
      Page::create([
        'id' => $page['id'],
        'en_title' => $page['en_title'],
        'ru_title' => $page['ru_title'],
        'mn_title' => $lang->translate($page['en_title']),
        'route' => $page['route'],
        'created_at' => $page['created_at'],
        'updated_at' => $page['updated_at'],
      ]);
    }
  }
}
