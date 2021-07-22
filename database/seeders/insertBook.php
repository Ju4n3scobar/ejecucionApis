<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class insertBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Books();
        $book->title = "1984";
        $book->description = "Libro de suspenso en el que narra la vida de...";
        $book->editorial = "UPV";
        $book->author = "George Orwell";
        $book->save();

        $book = new Books();
        $book->title = "Cien años de soledad";
        $book->description = "Libro melancolico en el que narra la vida de...";
        $book->editorial = "HMN";
        $book->author = "Gabriel Garcia Marquez";
        $book->save();
        
        
    }
}
