<?php

namespace Database\Seeders;

use App\Models\branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class branchseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branch1= new branch();
        $branch1->name="samsung";
        $branch1->save();

        $branch2= new branch();
        $branch2->name="apple";
        $branch2->save();

        $branch3= new branch();
        $branch3->name="huawei";
        $branch3->save();

        branch::factory(100)->create();

        
    }
}
