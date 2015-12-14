<?php

use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Grand Old Mansion',
          'owner' => 'Veruca Salt',
          'city' => 'San Francisco',
          'type' => 'Estate',
          'summary' => 'Life of luxury in a Grand Old Mansion. Perfect Home-Office for a Tech Executive.',
          'price' => 10000,
          'available_month' => 1
      ]);
        DB::table('books')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Urban Condo',
          'owner' => 'Mike TV',
          'city' => 'Seattle',
          'type' => 'Condo',
          'summary' => 'Small office-condo.',
          'price' => 5000,
          'available_month' => 4
      ]);
    }
}
