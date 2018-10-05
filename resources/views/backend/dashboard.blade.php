@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="container">

<div class="row">


 <div class="col">


         <h2>Создать тест</h2>
         <br>
         @php $item_id=(random_int(1, 9999999));$question_id=(random_int(1, 19999909)); @endphp

         <!-- Nav tabs -->
         <ul class="nav nav-tabs" role="tablist">
             <li class="nav-item">
                 <a style="color:green;" class="nav-link active" data-toggle="tab" href="#home">Добавить название</a>
             </li>
             <li class="nav-item">
                 <a style="color:green;" class="nav-link" onClick="randomString();"  data-toggle="tab" href="#menu1">Добавить вопрос</a>
             </li>
             <li class="nav-item">
                 <a style="color:green;" class="nav-link"  data-toggle="tab" href="#menu2">Добавить ответы</a>
             </li>

             <li class="nav-item">
                 <a style="color:green;" class="nav-link" data-toggle="tab" href="#menu3">Завершить создание теста</a>
             </li>

             <li  class="nav-item">
                 <a style="color:orange;" class="nav-link" data-toggle="tab" href="#menu4">Удалить тест или обновить</a>
             </li>
         </ul>

         <!-- Tab panes -->
         <div class="tab-content text">
             <div id="home" class="container tab-pane active"><br>
                 <h3>Добавить название</h3>

                 <h4 class="alert" style="display:none;color: #67e41a;font-weight: 600;text-decoration: underline;">Название успешно добавлено! Теперь добавте вопрос!</h4>

                 <div class="form-group">
                      <input class="form-control" type="hidden" id="item_id" name="item_id" value="{{$item_id}}">
                 </div>

                     <div class="form-group">
                         <label for="title_ru">Название * &nbsp; <img src="{{asset('img/ru.png')}}"></label>&nbsp;
                         <input class="form-control" type="text" id="title_ru"  maxlength="145" size="120" name="title_rus">
                     </div>

                     <div class="form-group">
                         <label for="title_en">Название * &nbsp; <img src="{{asset('img/en.png')}}"></label>&nbsp;
                         <input class="form-control" type="text" id="title_en"  maxlength="145" size="120" name="title_en">
                     </div>

                     <div class="form-group">
                         <label for="title_lv">Название * &nbsp; <img src="{{asset('img/lv.png')}}"></label>&nbsp;
                         <input class="form-control" type="text" id="title_lv"  maxlength="145" size="120" name="title_lv">
                     </div>

                     <br>
                     <button type="submit" id="bt" onclick="submit_title()"  class="btn btn-success btn-sm "><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                             Добавить название </b></button>


             </div>
             <div id="menu1" class="container tab-pane fade"><br>
                 <h3>Добавить вопрос</h3>
                 <h4 class="alert1" style="display:none;color: #67e41a;font-weight: 600;text-decoration: underline;">Вопрос успешно добавлен! Теперь добавте ответы!</h4>

                 <div class="form-group">
                     <input class="form-control" type="hidden" id="item_id" name="item_id"  value="{{$item_id}}">
                 </div>

                 <form name="randform">
                 <div class="form-group">
                    <input class="form-control" type="hidden" id="question_id" name="question_id" value="">
                 </div>
                 </form>

                     <div class="form-group">
                         <label for="q_ru">Вопрос * &nbsp; <img src="{{asset('img/ru.png')}}"></label>
                         <input class="form-control" type="text" id="q_ru"  maxlength="145" size="120" name="vopros_rus" >
                     </div>

                     <div class="form-group">
                         <label for="q_en">Вопрос * &nbsp; <img src="{{asset('img/en.png')}}"></label>
                         <input class="form-control" type="text" id="q_en"  maxlength="145" size="120" name="vopros_en">
                     </div>

                     <div class="form-group">
                         <label for="q_lv">Вопрос * &nbsp; <img src="{{asset('img/lv.png')}}"></label>
                         <input class="form-control" type="text" id="q_lv"  maxlength="145" size="120" name="vopros_lv">
                     </div>

                     <br>
                     <button type="submit" style="display: none;" id="bq" onclick="submit_question()" class="btn btn-success btn-sm "><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                             Добавить вопрос</b></button>
             </div>

                 {{-------------------------------------ANSWERS----------------------------------------------}}


             <div id="menu2" class="container tab-pane fade"><br>

                 <h3>Добавить ответы</h3>

                 <h4 class="alert2" style="display:none;color: #67e41a;font-weight: 600;text-decoration: underline;">Ответы на этот вопрос успешно добавлены! Теперь добавте вопрос!</h4>

                 <div class="form-group">
                     <input class="form-control" type="hidden" id="item_id" name="item_id" value="{{$item_id}}">
                 </div>

                 <div class="form-group">
                     <input class="form-control" type="hidden" id="question2_id" name="question_id">
                 </div>

                     <div class="form-group">
                         <label for="descriptionru">Ответ_1 &nbsp; <img src="{{asset('img/ru.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionru"  maxlength="110" size="60" name="otvet1_rus">
                     </div>

                     <div class="form-group">
                         <label for="descriptionen">Ответ_1 &nbsp; <img src="{{asset('img/en.png')}}"></label>
                         <input  class="form-control" type="text" id="descriptionen"  maxlength="110" size="60" name="otvet1_en">
                     </div>

                     <div class="form-group">
                         <label for="descriptionlv">Ответ_1 &nbsp; <img src="{{asset('img/lv.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionlv"  maxlength="110" size="60" name="otvet1_lv">
                     </div>

                     <div class="form-group">
                         <input type="checkbox" id="t_1"  value="on" name="t_1">
                         <label for="t_1">Правильный ответ</label>
                     </div>


                     <div class="form-group">
                         <label for="descriptionru2">Ответ_2 &nbsp; <img src="{{asset('img/ru.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionru2"  maxlength="110" size="60" name="otvet2_rus">
                     </div>

                     <div class="form-group">
                         <label for="descriptionen2">Ответ_2 &nbsp; <img src="{{asset('img/en.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionen2"  maxlength="110" size="60" name="otvet2_en">
                     </div>

                     <div class="form-group">
                         <label for="descriptionlv2">Ответ_2 &nbsp; <img src="{{asset('img/lv.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionlv2"  maxlength="110" size="60" name="otvet2_lv">
                     </div>

                     <div class="form-group">
                         <input  type="checkbox" id="t_2"  value="on" name="t_2">

                         <label for="t_2">Правильный ответ</label>
                     </div>


                     <div class="form-group">
                         <label for="descriptionru3">Ответ_3 &nbsp; <img src="{{asset('img/ru.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionru3"  maxlength="110" size="60" name="otvet3_rus">
                     </div>

                     <div class="form-group">
                         <label for="descriptionen3">Ответ_3 &nbsp; <img src="{{asset('img/en.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionen3"  maxlength="110" size="60" name="otvet3_en">
                     </div>

                     <div class="form-group">
                         <label for="descriptionlv3">Ответ_3 &nbsp; <img src="{{asset('img/lv.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionlv3"  maxlength="110" size="60" name="otvet3_lv">
                     </div>

                     <div class="form-group">
                         <input type="checkbox" id="t_3" value="on" name="t_3"/>

                         <label for="t_3">Правильный ответ</label>
                     </div>


                     <div class="form-group">
                         <label for="descriptionru4">Ответ_4 &nbsp; <img src="{{asset('img/ru.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionru4"  maxlength="110" size="60" name="otvet4_rus">
                     </div>

                     <div class="form-group">
                         <label for="descriptionen4">Ответ_4 &nbsp; <img src="{{asset('img/en.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionen4"  maxlength="145" size="60" name="otvet4_en">
                     </div>

                     <div class="form-group">
                         <label for="descriptionlv4">Ответ_4 &nbsp; <img src="{{asset('img/lv.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionlv4"  maxlength="110" size="60" name="otvet4_lv">
                     </div>

                     <div class="form-group">
                         <input type="checkbox" id="t_4" value="on" name="t_4"/>

                         <label for="t_4">Правильный ответ</label>
                     </div>

                     <div class="form-group">
                         <label for="descriptionru5">Ответ_5 &nbsp; <img src="{{asset('img/ru.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionru5"  maxlength="110" size="60" name="otvet5_rus">
                     </div>

                     <div class="form-group">
                         <label for="descriptionen5">Ответ_5 &nbsp; <img src="{{asset('img/en.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionen5"  maxlength="110" size="60" name="otvet5_en">
                     </div>

                     <div class="form-group">
                         <label for="descriptionlv5">Ответ_5 &nbsp; <img src="{{asset('img/lv.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionlv5"  maxlength="110" size="60" name="otvet5_lv">
                     </div>

                     <div class="form-group">
                         <input type="checkbox" id="t_5" value="on" name="t_5"/>

                         <label for="t_5">Правильный ответ</label>
                     </div>

                     <div class="form-group">
                         <label for="descriptionru6">Ответ_6 &nbsp; <img src="{{asset('img/ru.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionru6"  maxlength="110" size="60" name="otvet6_rus">
                     </div>

                     <div class="form-group">
                         <label for="descriptionen6">Ответ_6 &nbsp; <img src="{{asset('img/en.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionen6"  maxlength="110" size="60" name="otvet6_en">
                     </div>

                     <div class="form-group">
                         <label for="descriptionlv6">Ответ_6 &nbsp; <img src="{{asset('img/lv.png')}}"></label>
                         <input class="form-control" type="text" id="descriptionlv6"  maxlength="110" size="60" name="otvet6_lv">
                     </div>

                     <div class="form-group">
                         <input type="checkbox" id="t_6" value="on" name="t_6"/>

                         <label for="t_6">Правильный ответ</label>
                     </div>

                     <br>
                     <p><button style="display: none;" type="submit" id="ba" onclick="submit_answers()"  class="btn btn-success btn-sm "><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                             Добавить ответы</b></button></p>

             </div>


             <div id="menu3" class="container tab-pane fade"><br>
                 <h3>Завершить содание теста</h3>


                     <div class="form-group">
                         <input type="hidden" id="finish"  name="finish">
                     </div>

                     <br>
                     <button style="color: whitesmoke;" type="submit" onclick="refresh()" class="btn btn-info btn-sm "><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                             Завершить</b></button>

             </div>


             <div  id="menu4" class="container tab-pane fade"><br>
                 <h3>Удалить тест или обновить</h3>


                 <table class="datatable">

                     <thead>
                     <tr>

                         <th>Название теста</th>
                         <th>Вопрос</th>
                         <th>Ответы</th>

                     </tr>

                     </thead>

                     <tbody>

                     <tr>

                         <td>Название теста</td>

                         <td></td>

                         <td></td>


                     </tr>

                     </tbody>

                 </table>


             </div>



         </div>
       </div>
     </div>
 </div>


@stop

@section('css')

    <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/flat/purple.css" rel="stylesheet">

@stop

@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">

        function submit_title() {

            if ($('#title_ru').val().length == 0) {

                $('#title_ru').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });

                return false;
            }
            if ($('#title_en').val().length == 0) {

                $('#title_en').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });

                return false;
            }

            if ($('#title_lv').val().length == 0) {

                $('#title_lv').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });

                return false;
            }

        jQuery.ajax({
                url: '{{route("ajax_add_title")}}',
                type: "POST",
                data: {_token: '{!! csrf_token() !!}',title_rus:$("#title_ru").val(),title_en:$("#title_en").val(),title_lv:$("#title_lv").val(),item_id:$("#item_id").val()},

                success:function(response){

                    $( ".alert" ).show().slideUp( 8000 ).delay( 8000 );
                    jQuery('.alert').html(response.success);
                    jQuery('#bt').hide();
                    jQuery('#bq').show();

                },
                error:function (){
                    if(!response.error){
                        console.log(response.msg);
                    } else {
                        console.log(response.msg);

                    }

                }
            });
        }

    </script>

    <script type="text/javascript">

        function submit_question() {

            if ($('#q_ru').val().length == 0) {

                $('#q_ru').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });

                return false;
            }
            if ($('#q_en').val().length == 0) {

                $('#q_en').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });

                return false;
            }

            if ($('#q_lv').val().length == 0) {

                $('#q_lv').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });

                return false;
            }


            jQuery.ajax({
                url: '{{route("ajax_add_question")}}',
                type: "POST",
                data: {_token: '{!! csrf_token() !!}',vopros_rus:$("#q_ru").val(),vopros_en:$("#q_en").val(),vopros_lv:$("#q_lv").val(),item_id:$("#item_id").val(),question_id:$("#question_id").val()},
                success:function(response){

                    $( ".alert1" ).show().slideUp( 8000 ).delay( 8000 );
                    jQuery('.alert1').html(response.success);
                    jQuery('#bq').hide();
                    jQuery('#ba').show();

                },
                error:function (){
                    if(!response.error){
                        console.log(response.msg);
                    } else {
                        console.log(response.msg);

                    }


                }
            });
        }

    </script>

    <script type="text/javascript">

        function submit_answers() {

            /*$('form').on('submit', function (e) {

             e.preventDefault();*/  //если отправляется формой, чтобы не перегружалась страница

                        jQuery.ajax({
                        url: '{{route("ajax_add_answers")}}',
                        type: "POST",
                        data: {
                            _token: '{!! csrf_token() !!}',

                            item_id: $("#item_id").val(),
                            question_id: $("#question2_id").val(),
                            otvet1_rus: $("#descriptionru").val(),
                            otvet1_en: $("#descriptionen").val(),
                            otvet1_lv: $("#descriptionlv").val(),
                            t_1:$('input[name=t_1]:checked').val(),
                            otvet2_rus: $("#descriptionru2").val(),
                            otvet2_en: $("#descriptionen2").val(),
                            otvet2_lv: $("#descriptionlv2").val(),
                            t_2:$('input[name=t_2]:checked').val(),
                            otvet3_rus: $("#descriptionru3").val(),
                            otvet3_en: $("#descriptionen3").val(),
                            otvet3_lv: $("#descriptionlv3").val(),
                            t_3:$('input[name=t_3]:checked').val(),
                            otvet4_rus: $("#descriptionru4").val(),
                            otvet4_en: $("#descriptionen4").val(),
                            otvet4_lv: $("#descriptionlv4").val(),
                            t_4:$('input[name=t_4]:checked').val(),
                            otvet5_rus: $("#descriptionru5").val(),
                            otvet5_en: $("#descriptionen5").val(),
                            otvet5_lv: $("#descriptionlv5").val(),
                            t_5:$('input[name=t_5]:checked').val(),
                            otvet6_rus: $("#descriptionru6").val(),
                            otvet6_en: $("#descriptionen6").val(),
                            otvet6_lv: $("#descriptionlv6").val(),
                            t_6:$('input[name=t_6]:checked').val()

                        },
                        success: function (response) {

                            $(".alert2").show().slideUp(8000).delay(8000);
                            jQuery('.alert2').html(response.success);
                            jQuery('#ba').hide();
                            jQuery('#bq').show();

                        },
                        error: function () {
                            if (!response.error) {
                                console.log(response.msg);
                            } else {
                                console.log(response.msg);

                            }

                        }
                    });

                /*});*/
              }
    </script>

    <script>

               function randomString() {
               var chars = "012345678955576768778980906767767677";
               var string_length = 8;
               var randomstring = '';
               for (var i=0; i<string_length; i++) {
                   var rnum = Math.floor(Math.random() * chars.length);
                   randomstring += chars.substring(rnum,rnum+1);
               }
               document.randform.question_id.value = randomstring;
           }


    </script>


    <script>


        function refresh() {

            setTimeout(function () {
                location.reload()
            }, 100);
        }

    </script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <script>
        $(function() {

            $('.datatable').DataTable();

        });
    </script>

@stop



