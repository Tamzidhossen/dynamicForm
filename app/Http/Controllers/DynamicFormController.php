<?php

namespace App\Http\Controllers;

use App\Models\dynamic;
use App\Models\softvance;
use App\Models\title;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class DynamicFormController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function table(){
        return view('table');
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

    function softvance(){
        return view('softvance');
    }
    function softvanceData(Request $request){
        $brandTitles = $request->input('brandtitle', []);
        $comments = $request->input('comment', []);
        $contextTypes = $request->input('contexttype', []);
        $videoSourceTypes = $request->input('videosourcetype', []);
        // return $request->all();
        $data = [];
        $count = count($brandTitles);
        for ($i = 0; $i < $count; $i++) {
            $data[] = [
                'brandTitle' => $brandTitles[$i] ?? null,
                'comment' => $comments[$i] ?? null,
                'contextType' => $contextTypes[$i] ?? null,
                'videoSourceType' => $videoSourceTypes[$i] ?? null,
            ];
        }
        softvance::create([
            'brandTitle' => $data[0]['brandTitle'] ?? null,
            'comment' => $data[0]['comment'] ?? null,
            'contextType' => $data[0]['contextType'] ?? null,
            'videoSourceType' => $data[0]['videoSourceType'] ?? null,
        ]);

        return response()->json(['data' => $data]);
    }
}
