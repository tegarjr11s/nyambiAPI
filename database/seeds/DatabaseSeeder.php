<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Query;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // Disable Foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // DB::table('User')->delete();

        $user = factory('App\API\V1\Models\User',50)->create();
        $service = factory('App\API\V1\Models\Service',50)->create();
        
        // FOREIGN_KEY_CHECKS is supposed to only apply to a single
        // connection and reset itself but I like to explicitly
        // undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
