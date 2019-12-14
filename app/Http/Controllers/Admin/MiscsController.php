<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Rent;

class MiscsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    // public function index() {
    //     $rents = Rent::where('date_returned', '!=' ,NULL)
    //                 ->select('rents.*', 'users.firstname', 'users.lastname', 'books.author', 'books.book_id', 'books.category')
    //                 ->join('books', 'rents.name', '=', 'books.name')
    //                 ->join('users', 'rents.student_id', '=', 'users.student_id')
    //                 ->paginate(20);
     
    //     return view('admin.rents.rent-history', compact('rents'));
    // }

    public function __invoke() {
        $start = request('start_date');
        $end = request('end_date');

        $rents = Rent::whereBetween('rent_date', [$start, $end])
                    ->where('date_returned', '!=' , NULL)
                    ->select('rents.*', 'users.firstname', 'users.lastname', 'books.author', 'books.book_id', 'books.category')
                    ->join('books', 'rents.name', '=', 'books.name')
                    ->join('users', 'rents.student_id', '=', 'users.student_id')
                    ->paginate(30);
        return view('admin.rents.rent-history', compact('rents'));
    }
}
