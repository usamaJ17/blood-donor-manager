@php
    $load=true;
@endphp
<x-Header title="Welcome {{session('name')}}" :load="$load" />
@extends('layout.main')
@section('main-section')

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{url('/frontend')}}/images/logo.png" alt="BDS Logo" height="60" width="60">
        </div>
        @include('layout.nav')
      
        @include('layout.sidebar')
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Donor Updation Form</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Update Info</h3>
                                </div>
                                {!! Form::open(['route' => [$route, $donner->donner_id],'method' => 'put' ]) !!}
                                <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('Name') !!}
                                        {!! Form::text('name',$donner->name, ['required','class'=>"form-control",'placeholder'=>"Enter Name"]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Regestration Number') !!}
                                        {!! Form::text('reg_num',$donner->reg_num,
                                        ['required', 'class'=>"form-control",'placeholder'=>"2020-CS-665"]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Email') !!}
                                        {!! Form::email("email",$donner->email, ['class'=>"form-control",'placeholder'=>"email"])
                                        !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Phone') !!}
                                        {!! Form::text('phone',$donner->phone, ['required', 'class'=>"form-control",'placeholder'=>"03xxxxxxxxx"]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Blood Group') !!}
                                        {!! Form::select("group",['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'],$donner->group,['required','class'=>"custom-select rounded-0"]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Location (Day scholar type current living location & Hostelies mention their city)') !!}
                                        {!! Form::text('location', $donner->location, ['class'=>"form-control",'placeholder'=>"Area Location"]) !!}
                                    </div>
                                    <div class="form-group" id="history_box">
                                        {!! Form::label('How many times you have donated blood?') !!}
                                        {!! Form::text('history', $donner->history, ['class'=>"form-control",'placeholder'=>"Your answer",'id'=>'history_box_value']) !!}
                                    </div>
                                    <div class="form-group" id="never_box">
                                        {!! Form::label('Recent Date of Blood Donated') !!}
                                        {!! Form::date('date',$donner->date, ['class'=>"form-control",'id' => 'date']) !!}
                                    </div>
                                    <div>
                                        {!! Form::checkbox('never', 'true',false,['id'=>'never_button']) !!}
                                        never donated blood
                                    </div>
                                    <br>
                                    <h5>Choose your Committee:(You want to join)</h5><br>
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','blood management',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio1']) !!}
                                            {!! Form::label('radio1', "Blood Management", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','event',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio2']) !!}
                                            {!! Form::label('radio2', "Event Management", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','graphics',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio3']) !!}
                                            {!! Form::label('radio3', "Graphics", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','media',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio4']) !!}
                                            {!! Form::label('radio4', "Media", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','hr',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio5']) !!}
                                            {!! Form::label('radio5', "Human Resources", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','decor',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio6']) !!}
                                            {!! Form::label('radio6', "Decor", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','sponsership',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio7']) !!}
                                            {!! Form::label('radio7', "Sponsership", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                      </div>
                                    </div>

                                <div class="card-footer">
                                    {!! Form::submit('Submit', ['class'=>"btn btn-danger"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <script>
            $("#never_button").click(function() {
    if($(this).is(":checked")) {
        $("#never_box").hide(200);
        $("#history_box").hide(200);
        $("#date").val(null);
        $("#history_box_value").val(0);
    } else {
        $("#history_box").show(300);
        $("#never_box").show(300);
    }
});
    </script>
     