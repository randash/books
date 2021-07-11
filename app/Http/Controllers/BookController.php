<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use  Illuminate\Routing\Redirector;

class BookController extends Controller
{
    public function show_book(Request $request,$id){
        $book=Book::find($id);
        return view('show_book', ['book'=> $book]);
    }
   public function add_book(Request $request){
       $request->validate([
           'name' => 'required|max:100',
           'kind' => 'required',
           'action' => 'required',
           'photo' => 'required',
           'state' => 'required',
           'price'=>'nullable',
           'author'=>'nullable',
           'info'=>'nullable'
       ], [], [
           'name' => 'اسم الكتاب',
           'kind' => 'التصنيف ',
           'action' => 'الغرض',
           'photo' => 'الصورة',
           'state' => 'الحالة',
       ]);

       $image = $request->file('photo');
       $destinationPathImg = 'upload/images/';

       if (!$image->move($destinationPathImg, $image->getClientOriginalName())) {
           return 'Error saving the file.';
       }

//       $file = $request->file('photo');
//       $file->move(public_path().'/images/',$request->id.'.jpg');

       $book = new Book();
       $book->user_id=$request->id;
       $book->name = $request->name;
       $book->kind = $request->kind;
       $book->action = $request->action;
       $book->photo = $image->getClientOriginalName();
       $book->price = $request->price;
       $book->author = $request->author;
       $book->state = $request->state;
       $book->info = $request->info;

       $book->save();
       return redirect('/add_book')->with('message', 'The success message!');
   }
    public function edit_book($id){
        $book=Book::find($id);
        return view('/add_book', ['book'=> $book]);
    }
}
