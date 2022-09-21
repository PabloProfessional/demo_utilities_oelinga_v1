<?php

namespace Database\Seeders;

use App\Models\UserStatement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $balance = 0;

        $bills = [
            [
                'bill_id' => 1,
                'amount' => 2110
            ],
            [
                'bill_id' => 9,
                'amount' => 2110
            ],
            [
                'bill_id' => 10,
                'amount' => 1209
            ],
            [
                'bill_id' => 11,
                'amount' => 602
            ],
            [
                'bill_id' => 12,
                'amount' => 742
            ],
            [
                'bill_id' => 13,
                'amount' => 215
            ],
            [
                'bill_id' => 14,
                'amount' => 1109
            ],
            [
                'bill_id' => 15,
                'amount' => 1377
            ],
            [
                'bill_id' => 16,
                'amount' => 1887
            ],
        ];

        foreach ($bills as $bill){
            $balance += $bill['amount'];
            UserStatement::create([
                'user_id' => 4,
                'bill_id' => $bill['bill_id'],
                'debit' => $bill['amount'],
                'balance' => $balance
            ]);
        }

    }
}
