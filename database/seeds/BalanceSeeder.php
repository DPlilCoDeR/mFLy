<?php

use App\Balance;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_balance_user')->insert([
            "balance" => 100,
        ]);
    }
}
