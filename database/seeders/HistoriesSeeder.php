<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;
use Stichoza\GoogleTranslate\GoogleTranslate;

class HistoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $histories = array(
      array('id' => '1', 'en_title' => 'Production of the first products', 'ru_title' => 'Производство первых продуктов', 'en_text' => 'Production of the company\'s first products on the production lines of European partners.', 'ru_text' => 'Производство первых продуктов компании на производственных линиях Европейских партнеров.', 'year' => '2004', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '2', 'en_title' => 'Expanding the geographical presence', 'ru_title' => 'Расширение географического присутствия', 'en_text' => 'Opening of representative offices in Kazakhstan, Kyrgyzstan, Turkmenistan and Tajikistan.', 'ru_text' => 'Открытие представительских офисов в Казахстане, Кыргызстане, Туркменистане и Таджикистане.', 'year' => '2006', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '3', 'en_title' => 'First registration certificates', 'ru_title' => 'Первые регистрационных удостоверений', 'en_text' => 'Obtaining the first registration certificates in the countries of the company\'s presence.', 'ru_text' => 'Получение первых регистрационных удостоверений в странах присутствия компании.', 'year' => '2008', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '4', 'en_title' => 'Start of sales', 'ru_title' => 'Старт продаж', 'en_text' => 'Start of sales of SPEY drugs in Kazakhstan and Kyrgyzstan.', 'ru_text' => 'Старт продаж препаратов компании SPEY в Казахстане и Кыргызстане.', 'year' => '2010', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '5', 'en_title' => 'The emergence of a representative office in India', 'ru_title' => 'Появление представительства в Индии', 'en_text' => 'Opening of a regional office in India.', 'ru_text' => 'Открытие регионального офиса в Индии.', 'year' => '2012', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '6', 'en_title' => 'Entry to the market of Georgia', 'ru_title' => 'Вход на рынок Грузии', 'en_text' => 'More than 50 registered names of drugs in the countries of presence.', 'ru_text' => 'Более 50 зарегистрированных наименований препаратов в странах присутствия.', 'year' => '2013', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-25 01:37:46'),
      array('id' => '7', 'en_title' => 'Strengthening the position', 'ru_title' => 'Укрепление позиции', 'en_text' => 'Strengthening the position in Eastern Europe. Opening of an office in Skopje, Macedonia.', 'ru_text' => 'Укрепление позиции в восточной Европе. Открытие офиса в Скопье, Македонии.', 'year' => '2014', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '8', 'en_title' => 'Registration of the Spey company in the Russian Federation', 'ru_title' => 'Регистрация компании SPEY в Российской Федерации', 'en_text' => 'Registration of the SPEY company in the Russian Federation and the beginning of registration of drugs.', 'ru_text' => 'Регистрация компании SPEY в Российской Федерации и начало регистрации препаратов.', 'year' => '2015', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '9', 'en_title' => 'Expanding the geographical presence', 'ru_title' => 'Расширение географического присутствия', 'en_text' => 'Expanding its geographical presence in Southeast Asian countries such as Vietnam, the Philippines, Myanmar and Cambodia.', 'ru_text' => 'Расширение географического присутствия в таких странах Юго-Восточной Азии как Вьетнам, Филиппин, Мьянма и Камбоджа.', 'year' => '2016', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '10', 'en_title' => 'Start of sales in Uzbekistan', 'ru_title' => 'Старт продаж в Узбекистане', 'en_text' => 'Start of sales of SPEY drugs in Uzbekistan. Achieving an annual turnover of 85 million US dollars.', 'ru_text' => 'Старт продаж препаратов компании SPEY в Узбекистане. Достижение годового товарооборота в 85 миллионов долларов США.', 'year' => '2017', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '11', 'en_title' => 'Expanding the geographical presence in Latin America', 'ru_title' => 'Расширение географического присутствия в Латинской Америке', 'en_text' => 'Entry to the Dominican Republic market. 300 registered names of drugs in the countries of presence.', 'ru_text' => 'Вход на рынок Доминиканской Республики. 300 зарегистрированных наименований препаратов в странах присутствия.', 'year' => '2019', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array(
        'id' => '12',
        'en_title' => 'Registration in Ukraine',
        'ru_title' => 'Регистрация в Украине',
        'en_text' => 'The beginning of the registration process of SPEY drugs in Ukraine.',
        'ru_text' => 'Начало процесса регистрации препаратов компании SPEY в Украине.',
        'year' => '2020',
        'trashed' => '0',
        'created_at' => '2022-02-11 18:29:56',
        'updated_at' => '2022-02-11 18:29:56'
      )
    );

    $lang = new GoogleTranslate('en');
    $lang->setSource('en')->setTarget('mn');

    foreach ($histories as $history) {
      History::create([
        'id' => $history['id'],
        'en_title' => $history['en_title'],
        'ru_title' => $history['ru_title'],
        'mn_title' => $lang->translate($history['en_title']),
        'en_text' => $history['en_text'],
        'ru_text' => $history['ru_text'],
        'mn_text' => $lang->translate($history['en_text']),
        'year' => $history['year'],
        'trashed' => $history['trashed'],
        'created_at' => $history['created_at'],
        'updated_at' => $history['updated_at'],
      ]);
    }
  }
}
