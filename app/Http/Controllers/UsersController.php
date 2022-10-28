<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    
    public function login()
    {
        return view('contents.user.home');
    }

    public function allbooks()
    {
        $book = DB::table('books')
                    ->select([
                        'books.id',
                        'books.name',
                        'books.author',
                        'books.published_date as date',
                        'books.category',
                        'books.shelf',
                        'books.code',
                        'books.pdf',
                        'books.fav_status',
                        'books.createdby'
                    ])
                    ->get();

                    return view('contents.user.allbooks')->with('books',$book);
    }

    public function markbook($id)
    {
        $book = DB::table('books')->where('id',$id);

        $book->update([
               'fav_status' => 'yes'
        ]);
        
        return redirect()->back()->with('status','Marked as favourite book');
    }

    public function likebook($id)
    {
        $book = DB::table('books')->select('likes')->where('id',$id)->first();
        dd($book);
    }
}
