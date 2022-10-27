<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;
use App\Models\book;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function login()
    {
        return view('contents.admin.home');
    }

    public function bookform()
    {
        $category = DB::table('categories')->get();
        $shelves = DB::table('shelves')->get();

        return view('contents.admin.bookform')->with('category',$category)->with('shelves',$shelves);
    }

    public function addbook(request $request)
    {
        $this->validate($request,[
                 'bookname' => 'required|string',
                 'author' => 'required|string',
                 'code' => 'required|string',
                 'category' => 'required|string',
                 'shelf' => 'required|string'
        ]);


        $file = $request->book;
        $filename = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $securedfile = md5($file);
        $ogfile = $securedfile.'.'.$ext;
        $path = public_path().'/assets/books/';
        $dbpath = '/assets/books/'.$ogfile;
        $file->move($path,$ogfile);


        $book = new book;
        $book->name = $request->bookname;
        $book->author = $request->author;
        $book->code  = $request->code;
        $book->pdf  = $dbpath;
        $book->category  = $request->category;
        $book->shelf = $request->shelf;
        $book->published_date = $request->date;
        $book->createdby = Auth::user()->name;
        $book->save();

        return redirect()->back()->with('status','Book buccessively added');
    }

    public function allbooks()
    {
        $books = DB::table('books')
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
                    ->get();

                    return view('contents.admin.allbooks')->with('books',$books);
    }

    public function userform()
    {
        return view('contents.admin.userform');
    }

    public function adduser(request $request)
    {
        $this->validate($request,[
                 'fname' => 'required|string',
                 'lname' => 'required|string',
                 'email' => 'required|string',
                 'password' => 'required|string',
                 'role' => 'required|string'
        ]);


        if ($request->role != '-select-') {
            
            $user = new User;
            $user->name = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back()->with('status','Congrats, registration is successful.');
        }

        else{

            return redirect()->back()->with('status','Kindly, select proper users role.');

        }
  
    }

    public function allusers()
    {
        $users = DB::table('users')
              ->select([
                     'users.id',
                     'users.name',
                     'users.lname',
                     'users.email',
                     'users.role'
              ])
              ->get();

        return view('contents.admin.allusers')->with('users',$users);
    }

    public function edituser($id)
    {
        $user = DB::table('users')
                ->select([
                       'users.id',
                       'users.name',
                       'users.lname',
                       'users.email'
                ])
                ->where('id',$id)
                ->first();

                return view('contents.admin.edituser')->with('user',$user);
    }

    public function update(request $request,$id)
    {
        $this->validate($request,[
                 'fname' => 'required|string',
                 'lname' => 'required|string',
                 'email' => 'required|string',
                 'password' => 'required|string',
                 'role' => 'required|string'
        ]);

        $details = DB::table('users')->where('id',$id);

        

        if ($request->role != '-select-') {
            
            $details->update([
                'name' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password)
        ]);

            return redirect()->route('users.all')->with('status','Congrats, user details updated successful.');
        }

        else{

            return redirect()->back()->with('status','Kindly, select proper users role.');

        }
    }

    public function deleteuser($id)
    {
        $user = DB::table('users')->where('id',$id);

        $user->delete();

        return redirect()->route('users.all')->with('status','Congrats, User has been deleted successful.');
        
    }
}
