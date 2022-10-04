<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('contact.contact');
    }

    public function students(){
        $student_list = ['ali','veli','demet','gamze'];
        $name = "carl";
        // return view('pages.students', compact('student_list'));
        // return view('pages.students', compact('student_list','name'));
        // return view('pages.students')->with('students',$student_list);
        return view('pages.students',[
            'students' => $student_list,
            'mahmut' => $name
        ]);
    }
}
