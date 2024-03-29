<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CompaniesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $companies = array(
      array('id' => '1', 'quantity' => '50 000', 'en_title' => 'Medications', 'ru_title' => 'Препараты', 'en_text' => 'Such a number of our products are produced annually on the production lines of our partners, and this figure continues to grow.', 'ru_text' => 'Такое количество наших препаратов ежегодно выпускаются на производственных линиях наших партнеров, и эта цифра продолжает расти.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '2', 'quantity' => '450', 'en_title' => 'Employees', 'ru_title' => 'Сотрудников', 'en_text' => 'Our main asset is our close-knit team of medical representatives, distributors and marketing and sales specialists.', 'ru_text' => 'Наш главный актив – наш сплоченный коллектив из медицинских представителей, дистрибьюторов и специалистов по маркетингу и продажам.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '3', 'quantity' => '300', 'en_title' => 'Items', 'ru_title' => 'Наименований', 'en_text' => 'We have already produced more than 300 well-established registered names of drugs on the market.', 'ru_text' => 'Мы выпускаем уже более 300 хорошо зарекомендовавших себя на рынке зарегистрированных наименований препаратов.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '4', 'quantity' => '15', 'en_title' => 'Branches', 'ru_title' => 'Филиалов', 'en_text' => 'The company\'s work around the world is supported by 15 of our branches-representative offices, which allows us to ensure uninterrupted supply of the necessary volumes of medicines.', 'ru_text' => 'Работу компании по миру поддерживают 15 наших филиалов-представительств, что позволяет нам обеспечивать бесперебойные поставки нужных объемов лекарственных средств.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array(
        'id' => '5',
        'quantity' => '20',
        'en_title' => 'Countries of presence',
        'ru_title' => 'Стран присутствия',
        'en_text' => 'Large regular deliveries of SPEY products are carried out in 5 regions of the world, such as Europe, Africa, Latin America, Southeast Asia and Central Asia.',
        'ru_text' => 'Крупные регулярные поставки продукции SPEY ведутся в 5 регионах мира, таких как Европа, Африка, Латинская Америка, Юго-Восточная Азия и Средняя Азия.',
        'trashed' => '0',
        'created_at' => '2022-02-11 18:29:56',
        'updated_at' => '2022-02-11 18:29:56'
      )
    );

    $lang = new GoogleTranslate('en');
    $lang->setSource('en')->setTarget('mn');

    foreach ($companies as $company) {
      Company::create([
        'id' => $company['id'],
        'quantity' => $company['quantity'],
        'en_title' => $company['en_title'],
        'ru_title' => $company['ru_title'],
        'mn_title' => $lang->translate($company['en_title']),
        'en_text' => $company['en_text'],
        'ru_text' => $company['ru_text'],
        'mn_text' => $lang->translate($company['en_text']),
        'trashed' => $company['trashed'],
        'created_at' => $company['created_at'],
        'updated_at' => $company['updated_at'],
      ]);
    }
  }
}
