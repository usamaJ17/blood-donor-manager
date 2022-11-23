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
                            <h1 class="m-0">User Updation</h1>
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
                                    <h3 class="card-title">Enter Info</h3>
                                </div>
                                
                                {!! Form::open(['route' => ['user.update',$user->id],'method' => 'put','id'=>'update_form']) !!}
                                <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('User Name') !!}
                                        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Enter User Name']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('User Role') !!}
                                        {!! Form::select(
                                            'role',
                                            [
                                                'admin' => 'Admin',
                                                'manager' => 'Blood Manager',
                                                'docs' => 'Documentation',
                                            ],
                                            $user->role,
                                            ['required', 'class' => 'custom-select rounded-0','id'=>'role_box'],
                                        ) !!}
                                        <code>
                                            @error('role')
                                                {{ $message }}
                                            @enderror
                                        </code>
                                    </div>
                                    {!! Form::label('User Password (Leave Empty if dont want to change)') !!}
                                    {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Password']) !!}
                                    <div class="card-footer">
                                        {!! Form::submit('Update', ['class' => 'btn btn-danger', 'id'=>'update_submit']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var url="{{ route('user.update',[$user->id]) }}";
            $('#update_form').on('submit', function(e) {
                e.preventDefault(); 
                $name=$('input[name="name"]').val();
                $role=$('#role_box').find(":selected").val(); 
                $("#update_submit").text('Updating ...');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(this).serialize(),
                    success: function( msg ) {
                        $("#update_submit").text('Update');
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
                        title: 'User Updated Successfully!'
                        });
                        $("#update_form")[0].reset();
                        $('input[name="name"]').val($name);
                        $('#role_box').val($role);
                    },
                    error: function (data) {
                        var response = JSON.parse(data.responseText);
                        var errorString = '<ul class="list-unstyled">';
                        $.each( response.errors, function( key, value) {
                            errorString += '<li class="text-danger">' + value + '</li>';
                        });
                        errorString += '</ul>';
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: errorString,
                        })
                    }
                });
            });
</script>
@endsection
     