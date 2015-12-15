<?php

use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rentals')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Grand Old Mansion',
          'owner' => 'Veruca Salt',
          'city' => 'San Francisco',
          'type' => 'Estate',
          'summary' => 'Life of luxury in a Grand Old Mansion. Perfect Home-Office for a Tech Executive.',
          'price' => 10000,
          'available_month' => 1,
          'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/cb/Crane_estate_(5).jpg'
      ]);
        DB::table('rentals')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Urban Condo',
          'owner' => 'Mike TV',
          'city' => 'Seattle',
          'type' => 'Condo',
          'summary' => 'Small office-condo.',
          'price' => 5000,
          'available_month' => 4,
          'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0e/Alfonso_13_Highrise_Tegucigalpa.jpg'
      ]);
    }
}
