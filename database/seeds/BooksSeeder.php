<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 = author::create(['name'=>'Mohammad Fauzil Adhim']);
        $author2 = author::create(['name'=>'Salim A. Fillah']);
        $author3 = author::create(['name'=>'Aam Amiruddin']);

        //Sample buku
        $book1 = Book::create(['title'=>'Kupinang Engkau Dengan Hamdalah', 'amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'jalan cinta para pejuang', 'amount'=>2, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'membingkai surga dalam rumah tangga', 'amount'=>4, 'author_id'=>$author3->id]);
        $book1 = Book::create(['title'=>'cinta & seks rumah tangga', 'amount'=>3, 'author_id'=>$author3->id]);
    }
}
