<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\room;
use App\Models\User;
use App\Models\UserReservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //render all the data to the admin dashboard

    private $data=[];

    public function __construct()
    {
        $this->rooms            =room::all();
        $this->users            =User::all();
        $this->users            =Review::all();
        $this->reservations     =UserReservation::all();

    }

    public function index(){


        return view('admin.index',compact($this->data));

    }
    private function get_records_count(){
       
    }
}
