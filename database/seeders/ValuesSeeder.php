<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ValuesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $values = array(
      array('id' => '1', 'en_title' => 'Life', 'ru_title' => 'Жизнь', 'en_text' => 'We recognize life as a gift that needs to be cherished.', 'ru_text' => 'Мы признаем жизнь подарком, который нужно беречь.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '2', 'en_title' => 'Creation', 'ru_title' => 'Творчество', 'en_text' => 'We are discovering new facets of the possible.', 'ru_text' => 'Мы открываем новые грани возможного.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '3', 'en_title' => 'Responsibility', 'ru_title' => 'Ответственность', 'en_text' => 'We are responsible for the well-being of society.', 'ru_text' => 'Мы несем ответственность за благополучие общества.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '4', 'en_title' => 'Team spirit', 'ru_title' => 'Командный дух', 'en_text' => 'We are united and achieve our goals.', 'ru_text' => 'Мы едины и достигаем поставленных целей.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array('id' => '5', 'en_title' => 'Professionalism', 'ru_title' => 'Профессионализм', 'en_text' => 'We show a high level of working skills.', 'ru_text' => 'Показываем высокий уровень рабочих навыков.', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2022-02-11 18:29:56'),
      array(
        'id' => '6',
        'en_title' => 'Relationship',
        'ru_title' => 'Отношение',
        'en_text' => 'We value everyone\'s opinion.',
        'ru_text' => 'Мы ценим мнение каждого.',
        'trashed' => '0',
        'created_at' => '2022-02-11 18:29:56',
        'updated_at' => '2022-02-11 18:29:56'
      )
    );

    $lang = new GoogleTranslate('en');
    $lang->setSource('en')->setTarget('mn');

    foreach ($values as $value) {
      Value::create([
        'id' => $value['id'],
        'en_title' => $value['en_title'],
        'ru_title' => $value['ru_title'],
        'mn_title' => $lang->translate($value['en_title']),
        'en_text' => $value['en_text'],
        'ru_text' => $value['ru_text'],
        'mn_text' => $lang->translate($value['en_text']),
        'trashed' => $value['trashed'],
        'created_at' => $value['created_at'],
        'updated_at' => $value['updated_at'],
      ]);
    }
  }
}
