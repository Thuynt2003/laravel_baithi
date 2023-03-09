<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
function list(Request $request){
    $search = $request->get("search");

    $data = Book::all()->Search($search)
           ->paginate(20);

    return view("book.list",compact("data"));
}
}
