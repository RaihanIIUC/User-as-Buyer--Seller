<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

         User::truncate();
         Product::truncate();
        Transaction::truncate();

        $usersQuantity = 20;
         $productQuantity = 30;
        $transactionsQuantity = 50;

        User::factory()->count($usersQuantity)->create();
         Product::factory()->count($productQuantity)->create();
         
        Transaction::factory()->count($transactionsQuantity)->create();    }
}
