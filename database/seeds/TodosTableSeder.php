<?php

use Illuminate\Database\Seeder;

class TodosTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory('App\todo',10)->create();
    }
}
