@php
    $load=false;
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
                            <h1 class="m-0">Donor Regestration Form</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    @if ($errors->any())
                        <div class="row mb-2">
                            <div class="col-md-12 col-sm-6">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>ERROR !!</strong> in some of these fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    @endif  
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
                                    <h3 class="card-title">Enter Info</h3>
                                </div>
                                {!! Form::open(['route'=>'donor.store']) !!}
                                <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('Name') !!}
                                        {!! Form::text('name',"", ['required','class'=>"form-control",'placeholder'=>"Enter Name"]) !!}
                                        <code>
                                            @error('name')
                                                {{$message}}
                                            @enderror
                                        </code>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Phone') !!}
                                        {!! Form::text('phone',"", ['required', 'class'=>"form-control",'placeholder'=>"03xxxxxxxxx"]) !!}
                                        <code>
                                            @error('phone')
                                                {{$message}}
                                            @enderror
                                        </code>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Blood Group') !!}
                                        {!! Form::select("group", ['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'],"",['required','class'=>"custom-select rounded-0"]) !!}
                                        <code>
                                            @error('group')
                                                {{$message}}
                                            @enderror
                                        </code>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Status') !!}
                                        {!! Form::select("status", [1=>'UET Student',2=>'Outsider'],"",['required','class'=>"custom-select rounded-0",'id'=>'status']) !!}
                                    </div>

                                    <div class="form-group" id='reg_num_box'>
                                        {!! Form::label('Regestration Number') !!}
                                        {!! Form::text('reg_num',"",['class'=>"form-control",'placeholder'=>"2020-CS-665",'id'=>'reg_num']) !!}
                                        <code>
                                            @error('reg_num')
                                                {{$message}}
                                            @enderror
                                        </code>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Email') !!}
                                        {!! Form::email("email","", ['class'=>"form-control",'placeholder'=>"email"])
                                        !!}
                                        <code>
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                        </code>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Location (Day scholar type current living location & Hostelies mention their city)') !!}
                                        {!! Form::text('location', "", ['class'=>"form-control",'placeholder'=>"Area Location"]) !!}
                                    </div>
                                    <div class="form-group" id="history_box">
                                        {!! Form::label('How many times you have donated blood?') !!}
                                        {!! Form::text('history', "", ['class'=>"form-control",'placeholder'=>"Your answer",'id'=>'history_box_value']) !!}
                                        <code>
                                            @error('history')
                                                {{"Should be a Number"}}
                                            @enderror
                                        </code>
                                    </div>
                                    <div class="form-group" id="never_box">
                                        {!! Form::label('Recent Date of Blood Donated') !!}
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            {!! Form::text('date', null, ['class' => $errors->has('date') ? 'form-control is-invalid' : 'form-control', 'id' => 'date']) !!}
                                            @if ($errors->has('date'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('date') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        {!! Form::checkbox('never', 'true',false,['id'=>'never_button']) !!}
                                        never donated blood
                                    </div>
                                    {{-- <div class="form-group">
                                        {!! Form::label('Recent Date of Blood Donated') !!}
                                        {!! Form::date('date',"", ['class'=>"form-control"]) !!}
                                    </div> --}}
                                    <br>
                                    <div class="form-group" id="team_box">
                                        <h5>Choose your Committee:(Which you want to join)</h5><br>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','blood management',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio1']) !!}
                                            {!! Form::label('radio1', "Blood Management", ['class'=>"custom-control-label"]) !!}
                                        </div>
                                        <div class="custom-control custom-radio">
                                            {!! Form::radio('team','documentation',"", ['class'=>"custom-control-input custom-control-input-danger custom-control-input-outline",'id'=>'radio8']) !!}
                                            {!! Form::label('radio8', "Documentation", ['class'=>"custom-control-label"]) !!}
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
@section('script')
<script src="{{url('/frontend')}}/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@if (isset($status))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-right',
                        customClass: {
                            popup: 'colored-toast'
                        },
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                        })
                        Toast.fire({
                        iconColor: 'green',
                        icon: 'success',
                        title: 'Donner Added Successfully!'
                        });
    </script>
    
@endif
<script type="text/javascript">
    $('[id=date]').daterangepicker({
        singleDatePicker: true,
        timePicker: false,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $('#status').on('change',function(e){
        if(e.target.value==1){
            $('#reg_num_box').show(300);
            $('#team_box').show(300);
        }
        else{
            $('#reg_num').val(null);
            $("input[name='team']").val(null);
            $('#reg_num_box').hide(200);
            $('#team_box').hide(200);
        }
    });
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