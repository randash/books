<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function show_profile($id)
    {
        $user_data = User::find($id);
        $user_books = Book::where('user_id', $id)->get();
        return view('profile', ['user_data'=>$user_data,'user_books'=> $user_books]);
    }
    public function changePassword(Request $request){
        return  view('account_settings');
    }
    public function edit(Request $request){
//        dd($request);
        $image = $request->file('photo');
        $destinationPathImg = 'upload/images/';

        if (!$image->move($destinationPathImg, $image->getClientOriginalName())) {
            return 'Error saving the file.';
        }
        DB::table('users')
            ->where('id', $request->id)
            ->limit(1)
            ->update(array('name' => $request->name,'university' =>
                $request->uni,'city' => $request->city,'photo' => $image->getClientOriginalName()));
        return Redirect::back();
    }
    public function editpassword(Request $request){
        $user_data = User::find($request->id);
        $hasher = app('hash');
        if ($hasher->check($request->oldPass, $user_data->password)) {
           if($request->newPass==$request->newPass2){
               DB::table('users')
                   ->where('id', $request->id)
                   ->limit(1)
                   ->update(array('password' => Hash::make($request->newPass)));

           }
        }
        return Redirect::back();
    }

}
