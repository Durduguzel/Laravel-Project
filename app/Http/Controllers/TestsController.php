<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tests;

class TestsController extends Controller
{
    public function create(){
        $tests = new Tests;
        $tests->title = 'Laravel Course';
        $tests->description = 'Laravel course about database';
        $tests->content = 'Database operations';
        $tests->save();
        return "data saved";
    }
    public function createNew(){
        Tests::create([
            'title'=>'Laravel Course 2',
            'description'=>'Laravel course about database 2',
            'content'=>'Database operations 2',
        ]);
        return "data added";
    }
    public function read(){
        $tests = Tests::query()->get();
        return view('read', compact('tests'));
    }
    public function edit($id){
        $testdata = Tests::query()->find($id);
        $title = $testdata -> title;
        $description = $testdata -> description;
        $content = $testdata -> content;
        return view('edit', compact('title','description','content'));
    }
    public function update($id){
        $test = Tests::query()->find($id);
        $test->title = 'yeni başlık';
        $test->description = 'yeni açıklama';
        $test->content = 'yeni içerik';
        $test->save();
        return "veriler güncellendi";
    }
    public function delete($id){
        $test = Tests::query()->find($id);
        $test -> delete();
        return "silme başarılı";
    }
}
