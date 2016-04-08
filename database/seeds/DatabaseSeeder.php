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

    // tables below will be:
    // 1. truncated / deleted
    // 2. seeded
    protected $tables = [
        'collections'
    ];

    public function run()
    {
        // $this->call('UserTableSeeder');
        Model::unguard();

        foreach($this->truncate as $table){
            // empty table
            DB::table($table)->truncate();
            // seed table
            $this->call(ucfirst($table).'TableSeeder');
        }

        Model::reguard();
    }
}
