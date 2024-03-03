<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            'naam' => 'Mintnopjes',
            'barcode' => '8719587231278',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Schoolkrijt',
            'barcode' => '8719587326713',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Honingdrop',
            'barcode' => '8719587327836',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Zure Beren',
            'barcode' => '8719587321441',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Cola Flesjes',
            'barcode' => '8719587321237',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Turtles',
            'barcode' => '8719587322245',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Witte Muizen',
            'barcode' => '8719587328256',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Reuzen Slangen',
            'barcode' => '8719587325641',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Zoute Rijen',
            'barcode' => '8719587322739',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Winegums',
            'barcode' => '8719587327527',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Drop Munten',
            'barcode' => '8719587322345',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Kruis Drop',
            'barcode' => '8719587322265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product')->insert([
            'naam' => 'Zoute Ruitjes',
            'barcode' => '8719587323256',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
