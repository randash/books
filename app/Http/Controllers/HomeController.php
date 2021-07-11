<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $allBooks=Book::all();

        $allBooks = DB::table('books')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->select('books.*', 'users.name as user_name', 'users.photo as user_photo')
            ->get();
        return view('index',['allBooks'=>$allBooks]);
    }
    public function search(Request $request){

        $s = $request->input('search');

        $allBooks = DB::table('books')
        ->join('users', 'books.user_id', '=', 'users.id')
         ->select('books.*', 'users.name as user_name', 'users.photo as user_photo')
            ->where('books.name', 'like', '%' . $s . '%')
            ->orWhere('books.kind', 'like', '%' . $s . '%')
            ->orWhere('books.author', 'like', '%' . $s . '%')
            ->orWhere('users.name', 'like', '%' . $s . '%')
        ->get();

        return view('index',['allBooks'=>$allBooks]);

    }
}
