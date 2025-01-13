<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DelegationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delegateType = [
            ['name' => 'Regional'],
            ['name' => 'Technical Official'],
        ];

        DB::table('delegation_types')->insert($delegateType);
    }
}
