<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mycategories= new Categories();
        $mycategories->name="Electronicos";
        $mycategories->save();
        
        $mycategories2= new Categories();
        $mycategories2->name="phones";
        $mycategories2->save();

        $mycategories3= new Categories();
        $mycategories3->name="computadores";
        $mycategories3->save();

        Categories::factory(10)->create();
}

}