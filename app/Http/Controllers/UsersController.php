<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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
        $books = DB::table('books')
                    // ->join('favorites','favorites.book_id','=','books.id')
                    ->select([
                        'books.id',
                        'books.name',
                        'books.author',
                        'books.published_date as date',
                        'books.category',
                        'books.shelf',
                        'books.code',
                        'books.pdf',
                        'books.createdby'
                    ])
                    ->paginate(12);

        $favorites = DB::table('books')
                    ->join('favorites','favorites.book_id','=','books.id')
                    ->select([
                        'books.id',
                        'books.name',
                        'books.author',
                        'books.published_date as date',
                        'books.category',
                        'books.shelf',
                        'books.code',
                        'favorites.user_id',
                        'favorites.book_id',
                        'favorites.status',
                        'books.pdf',
                        'books.createdby'
                    ])
                    ->where('status','=','yes')
                    ->paginate(12);
        
                    return view('contents.user.allbooks')
                                   ->with('books',$books)
                           ->with('favorites',$favorites);
    }

    public function markbook($id)
    {
        $favs = DB::table('favorites')->where([
                                            'user_id' => Auth::user()->id,
                                            'book_id' => $id
                                        ])->first();
        if (isset($favs)) {
           
            DB::table('favorites')->where([
                                            'user_id' => Auth::user()->id,
                                            'book_id' => $id
                                        ])
                ->update([
                    'user_id' => Auth::user()->id,
                    'book_id' => $id,
                    'status' => 'yes',
                ]);

        return redirect()->back()->with('status','Marked as favourite book');

        }

        else{
                DB::table('favorites')->insert([
                    'status' => 'yes',
                    'user_id' => Auth::user()->id,
                    'book_id' => $id 
        ]);

        
        return redirect()->back()->with('status','Marked as favourite book');

        }

        
    }

    public function unmarkbook($id)
    {

        $favourites = DB::table('favorites')->where(['book_id' => $id, 'user_id' => Auth::user()->id]);

        $favourites->update([
                    'user_id' => Auth::user()->id,
                    'book_id' => $id,
                    'status' => 'no',
                ]);
        
        return redirect()->back()->with('status','Book has been unmarked');
    }

    public function likebook($id)
    {
        $like = DB::table('likes')->select('book_id','user_id')->where([
                                    'book_id' => $id,
                                    'user_id' => Auth::user()->id
        ])->first();

        if (isset($like)) {
           DB::table('likes')->where([
                                'user_id' => Auth::user()->id,
                                'book_id' => $id
           ])->update([
                    'numbers' => 1
           ]);

        return redirect()->back()->with('status','Book has been liked by you');
        }

        else{
            
        DB::table('likes')->insert([
                    'numbers' => 1,
                    'user_id' => Auth::user()->id,
                    'book_id' => $id 
        ]);
        return redirect()->back()->with('status','Book has been liked by you');

    }
}

    public function popularbooks()
        {                  
            $likes = DB::table('likes')->join('books','books.id','=','likes.book_id')->select(DB::raw('DISTINCT books.name, COUNT(*) AS occurency'))->groupby('books.name')->orderby('occurency','desc')->get();

            return view('contents.user.mostlikes')->with('likes',$likes);

        }

}
