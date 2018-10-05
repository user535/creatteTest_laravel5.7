<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend;

class BackendController extends Controller
{

    public function  ajax_add_title(Request $request){

         //dd($request);

         $request->all();

         $object = new Backend();

         $title = $object->add_title($request);

         return view('backend.dashboard', compact('title'));

    }


    public function  ajax_add_question(Request $request){

        //dd($request);

        $request->all();

        $object = new Backend();

        $question = $object->add_question($request);

        return view('backend.dashboard', compact('question'));

    }


    public function  ajax_add_answers(Request $request){

        //dd($request);

        $request->all();

        $object = new Backend();

        $answers = $object->add_answers($request);

        return view('backend.dashboard', compact('answers'));

    }


}
