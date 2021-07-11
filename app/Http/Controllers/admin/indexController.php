<?php

namespace App\Http\Controllers\admin;

use App\Book;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
   public function index(){
      $books = Book::where('sold', 0)->count();
      $soldbooks = Book::where('sold', 1)->count();
      $users=User::where('disabled', 0)->count();
      $disusers=User::where('disabled', 1)->count();

       return view('admin/index',['books'=>$books,'soldbooks'=>$soldbooks,'users'=>$users,'disusers'=>$disusers]);
}
    public function books(){
        $books = Book::where('sold', 0)->get();
        return view('admin/all_books',['books'=>$books]);
    }

}
