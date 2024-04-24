<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    $this->call([
      // UsersSeeder::class,
      SitesSeeder::class,
      ProductsCategoriesSeeder::class,
      ProductsSeeder::class,
      NewsCategoriesSeeder::class,
      NewsSeeder::class,
      HistoriesSeeder::class,
      PhonesSeeder::class,
      PagesSeeder::class,
      TextsSeeder::class,
      ValuesSeeder::class,
      CompaniesSeeder::class,
    ]);
  }
}
