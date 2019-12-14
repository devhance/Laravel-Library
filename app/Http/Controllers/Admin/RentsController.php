<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rent;
use App\Book;
use App\User;
use DB;

class RentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rent::where('date_returned', NULL)
                    ->select('rents.*', 'users.firstname', 'users.lastname', 'books.author', 'books.book_id', 'books.category')
                    ->join('books', 'rents.name', '=', 'books.name')
                    ->join('users', 'rents.student_id', '=', 'users.student_id')
                    ->paginate(10);
     
        return view('admin.rents.index', compact('rents'));

    }
    // for overdue index
    public function show($id)
    {
        $today = date('Y-m-d');
        $rents = Rent::where('date_returned', NULL)
                    ->where('return_date', '<',  $today)
                    ->select('rents.*', 'users.firstname', 'users.lastname', 'books.author', 'books.book_id', 'books.category')
                    ->join('books', 'rents.name', '=', 'books.name')
                    ->join('users', 'rents.student_id', '=', 'users.student_id')
                    ->paginate(15);
        
        return view('admin.rents.overdue', compact('rents'));
    }
}
