@php
$load = false;
@endphp
<x-Header title="Welcome {{ session('name') }}" :load="$load" />
@extends('layout.main')
@section('main-section')

    <body class="hold-transition sidebar-mini">

        <div class="wrapper">
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ url('/frontend') }}/images/logo.png" alt="BDS Logo" height="60"
                    width="60">
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
                                <h1 class="m-0">Enter Case Details</h1>
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
                                    {!! Form::open(['route' => 'submit_case']) !!}
                                    <div class="card-body">
                                        <div class="form-group">
                                            {!! Form::label('Patient Name') !!}
                                            {!! Form::text('patient_name', '', ['class' => 'form-control', 'placeholder' => 'Enter Patient Name']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Patient Blood Group') !!}
                                            {!! Form::select(
                                                'patient_blood',
                                                [
                                                    'A+' => 'A+',
                                                    'A-' => 'A-',
                                                    'B+' => 'B+',
                                                    'B-' => 'B-',
                                                    'AB+' => 'AB+',
                                                    'AB-' => 'AB-',
                                                    'O+' => 'O+',
                                                    'O-' => 'O-',
                                                ],
                                                'A+',
                                                ['required', 'class' => 'custom-select rounded-0'],
                                            ) !!}
                                            <code>
                                                @error('patient_blood')
                                                    {{ $message }}
                                                @enderror
                                            </code>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Location') !!}
                                            {!! Form::text('location', '', ['required', 'class' => 'form-control', 'placeholder' => 'hospital name']) !!}
                                            <code>
                                                @error('location')
                                                    {{ $message }}
                                                @enderror
                                            </code>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Age') !!}
                                            {!! Form::number('age', '', ['class' => 'form-control', 'placeholder' => 'age']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Attendent Name') !!}
                                            {!! Form::text('attendent_name', '', ['class' => 'form-control', 'placeholder' => 'name']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Attendent Contact') !!}
                                            {!! Form::text('attendent_contact', '', ['required', 'class' => 'form-control', 'placeholder' => '03xxxxxxxxx']) !!}
                                            <code>
                                                @error('attendent_contact')
                                                    {{ $message }}
                                                @enderror
                                            </code>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Attedent Blood Group') !!}
                                            {!! Form::select(
                                                'attendent_blood',
                                                [
                                                    'A+' => 'A+',
                                                    'A-' => 'A-',
                                                    'B+' => 'B+',
                                                    'B-' => 'B-',
                                                    'AB+' => 'AB+',
                                                    'AB-' => 'AB-',
                                                    'O+' => 'O+',
                                                    'O-' => 'O-',
                                                ],
                                                'A+',
                                                ['class' => 'custom-select rounded-0'],
                                            ) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Arranged By') !!}
                                            {!! Form::select('arranged_by', [1=>'attendent',2=>'BDS',3=>'Not Arranged'],'',['class' => 'custom-select rounded-0','id' => 'donner_select',]) !!}
                                        </div>
                                        <div class="form-group" id="donner_id_box">
                                            {!! Form::label('Donor ID ') !!}
                                            {!! Form::number('donner_id', '', ['class' => 'form-control', 'placeholder' => 'donor ID','id'=>'donner_id_field']) !!}
                                            <code>
                                                @error('donner_id')
                                                <script>
                                                    document.getElementById('donner_id_box').classList.remove('d-none');
                                                </script>
                                                    {{ $message }}
                                                @enderror
                                            </code>
                                            <script>
                                                $('#donner_id_box').hide();
                                            </script>
                                        </div>
                                        <div class="card-footer">
                                            {!! Form::submit('Submit', ['class' => 'btn btn-danger']) !!}
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
            <script>
                 $('#donner_select').on('change', function(e) {
                    if (e.target.value ==2) {
                        $('#donner_id_box').show(300);
                    } else {
                        $('#donner_id_box').hide(200);
                        $('#donner_id_field').val(null);

                    }
                })
            </script>
