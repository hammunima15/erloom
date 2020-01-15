<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserTest;

class TestController extends Controller
{

	public function index() {
        $data = UserTest::all();
        return view('index', ['data' => $data]);
    }

    public function simpan(Request $request){
        
        $test = new UserTest;
        $test->name = $request->name;
        $test->fibonacci_n = $request->fibonacci;
        $test->fibonacci_result = $this->fibonacci($request->fibonacci);
        $test->save();
        
        return redirect()->to('/');
    }

    private function fibonacci($n){
        $fibo = 0;
        $x = 1;
        for ($i=0; $i < $n; $i++) { 
            $before = $fibo;
            $fibo += $x;
            $x = $before;
        }
        return $fibo;
    }

}