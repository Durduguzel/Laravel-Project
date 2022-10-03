<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    // public function index(){
    //     return "burası index fonksiyonu";
    // }
    // public function create(){
    //     return "burası kullanıcı oluşturma formu";
    // }
    // public function show(){
    //     return "burası görüntüleme sayfası";
    // }
    public function index(){
        return view('users.index');
    }
    public function create(){
        return view('users.create');
    }
    public function show(){
        return view('users.show');
    }
}
