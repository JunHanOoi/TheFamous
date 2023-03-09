<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        echo "Hello from Books controller";
    }

    function testData()
    {
        // return DB::select("select * from books");
        $data = Book::paginate(10);
        return view("book", ['book'=>$data]);
        // return Book::all();
    }
}
