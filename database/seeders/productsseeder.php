<?php

namespace Database\Seeders;

use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myproduct= new products();
        $myproduct->name="Samsung A50";
        $myproduct->description="Telefono de gama media";
        $myproduct->price=1500;
        $myproduct->category_id=1;
        $myproduct->branch_id=1;
        $myproduct->save();

        $myproduct2= new products();
        $myproduct2->name="Iphone 11";
        $myproduct2->description="Telefono de gama alta";
        $myproduct2->price=3500;
        $myproduct2->category_id=2;
        $myproduct2->branch_id=2;
        $myproduct2->save();

        $myproduct3= new products();
        $myproduct3->name="Huawei P30";
        $myproduct3->description="Telefono de gama alta";
        $myproduct3->price=2500;
        $myproduct3->category_id=3;
        $myproduct3->branch_id=3;
        $myproduct3->save();

        products::factory(10)->create();
    }
}
