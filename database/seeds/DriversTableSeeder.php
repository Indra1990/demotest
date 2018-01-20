<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*$faker = Faker\Factory::create();
      $limit = 3;
      for ($i = 0; $i < $limit; $i++) {
            DB::table('drivers')->insert([
                'nama_driver' => $faker->name,
                'alamat' => $faker->address,
                'no_telp' => $faker->phoneNumber,

            ]);
        }*/


        DB::table('drivers')->insert([
            [
                'nama_driver' => 'Parjono',
                'alamat'      => 'jl.karang asem no:5',
                'no_telp'     => '0878123456789',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_driver' => 'Sugimin',
                'alamat'      => 'jl.karang anyar no:20',
                'no_telp'     => '0812123456789',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'nama_driver' => 'Tukiman',
                'alamat'      => 'jl.karang tengan no:50',
                'no_telp'     => '0888123456789',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
           
        ]);
    }
}
