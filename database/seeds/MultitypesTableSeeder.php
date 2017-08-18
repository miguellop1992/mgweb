<?php

use Illuminate\Database\Seeder;

class MultitypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('multitypes')->insert([
            'id' => '1', 'parent_id' => null, 'descrip' => "label_type",
            'id' => '2', 'parent_id' => null, 'descrip' => "price_type",
            'id' => '2.1', 'parent_id' => "2", 'descrip' => "byprice",
            'id' => '2.2', 'parent_id' => "2", 'descrip' => "byhour",
            'id' => '3', 'parent_id' => null, 'descrip' => "coin_type",
            'id' => '3.1', 'parent_id' => "3", 'descrip' => "Bs",
            'id' => '3.2', 'parent_id' => "3", 'descrip' => "USD",
        ]);
    }
}
