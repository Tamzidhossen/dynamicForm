<?php

namespace App\Http\Controllers;

use App\Models\dynamic;
use App\Models\title;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class DynamicFormController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function dynamic(){
        return view('dynamic');
    }
    function new(){
        return view('new');
    }
    function form_test(){
        return view('form');
    }

    function dynamic_succ(Request $request){
        dynamic::insert([
            'title'=>$request->title,
            'context'=>$request->context,
            'commit'=>$request->video,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'success');
    }

    function page(Request $request){
        $request->validate([
            'title'=> 'required',
            'atm'=> 'required'
        ]);

        title::insert([
            'title'=>$request->title,
            'desp'=>$request->atm,
        ]);
        return back()->with('title', 'Title Added Successfully');
    }
}
