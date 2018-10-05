<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Backend extends Model
{
    public function add_title($request)
    {

        if (empty($request['title_rus'])){ return back();}
        elseif (empty($request['title_en'])){ return back();}
        elseif (empty($request['title_lv'])){ return back();}

        if (!empty($request)) {

            DB::table('titles')->insert(array(

                'title_rus' => $request['title_rus'],

                'title_en' => $request['title_en'],

                'title_lv' => $request['title_lv'],

                'item_id' => $request['item_id'],



            ));

            return response();

        }

        else{

        }

        return false;
    }



    public function add_question($request)
    {

        if (empty($request['vopros_rus'])){ return back();}
        elseif (empty($request['vopros_en'])){ return back();}
        elseif (empty($request['vopros_lv'])){ return back();}

        if (!empty($request)) {

            DB::table('questions')->insert(array(

                'vopros_rus' => $request['vopros_rus'],

                'vopros_en' => $request['vopros_en'],

                'vopros_lv' => $request['vopros_lv'],

                'item_id' => $request['item_id'],

                'question_id' => $request['question_id'],

            ));


            return response();

        }

        else{


        }

        return false;
    }

    public function add_answers($request)
    {



        if (!empty($request)) {

            DB::table('answers')->insert(array(

                'item_id' => $request['item_id'],

                'question_id' => $request['question_id'],

                'otvet1_rus' => $request['otvet1_rus'],

                'otvet1_en' => $request['otvet1_en'],

                'otvet1_lv' => $request['otvet1_lv'],

                't_1' => $request['t_1'],

                'otvet2_rus' => $request['otvet2_rus'],

                'otvet2_en' => $request['otvet2_en'],

                'otvet2_lv' => $request['otvet2_lv'],

                't_2' => $request['t_2'],

                'otvet3_rus' => $request['otvet3_rus'],

                'otvet3_en' => $request['otvet3_en'],

                'otvet3_lv' => $request['otvet3_lv'],

                't_3' => $request['t_3'],

                'otvet4_rus' => $request['otvet4_rus'],

                'otvet4_en' => $request['otvet4_en'],

                'otvet4_lv' => $request['otvet4_lv'],

                't_4' => $request['t_4'],

                'otvet5_rus' => $request['otvet5_rus'],

                'otvet5_en' => $request['otvet5_en'],

                'otvet5_lv' => $request['otvet5_lv'],

                't_5' => $request['t_5'],

                'otvet6_rus' => $request['otvet6_rus'],

                'otvet6_en' => $request['otvet6_en'],

                'otvet6_lv' => $request['otvet6_lv'],

                't_6' => $request['t_6'],

            ));



            return response();

        }

        else{


        }

        return false;
    }

/*
    public function show_tests($request)
    {


            return response();

        }

        else{

        }

        return false;
    }

*/

}