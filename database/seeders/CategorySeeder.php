<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tạo 1 bản ghi
        // DB::table('categories')->insert([
        //     // cách thủ công
        //     // 'name' => 'kientc',
        //     // 'status' => 1,

        //     // cách tự động
        //     'name' => fake() ->name(),
        //     'status' => fake() ->numberBetween(0,1),
        // ]);


        // thực hiện tạo nhiều bản ghi
        // tạo mảng rỗng để chứa dữ liệu
        $cateSeed = [];
        for($i=0;$i<10;$i++){
            $cateSeed[]=[
                'name' => fake() ->name(),
                'status' => fake() ->numberBetween(0,1),
            ];
        }
        DB::table('categories')->insert($cateSeed);
    }
}
