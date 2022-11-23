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
                        <div class="col-lg-6 col-6">
                            <h1 class="m-0">Users </h1>
                        </div><!-- /.col -->
                        <div class="col-lg-4 col-2"> 
                        </div>
                        <div class="col-lg-2 col-md-3 col-4">
                            <a href="{{route('user.create')}}"><button type="button" class="btn btn-block btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i>&nbsp;create new</button></a>
                        </div>
                        
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
                                    <h3 class="card-title col-4">All Users</h3>
                                    <div class="card-tools col-lg-2 col-md-3 col-8">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="name" class="form-control float-right" id="search-box" placeholder="Search By Name">
                                            <div class="input-group-append" >
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped" id="data-table">
                            <thead>
                                <tr> 
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="t-data">
                                {{-- TABLE DATA FROM JS SCRIPT --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div id="t-pag">
                </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <script>
        var users = <?php echo $users; ?>;
        var base_url="<?php echo url('/') ;?>";
        var currentUserId="{{session('id')}}";
        $('#t-pag').pagination({
            dataSource: users,
            pageSize: 7,
            showGoInput: true,
            showGoButton: true,
            callback: function(data, pagination) {
                // template method of yourself
                // var html = template(data);
                var dataHtml = '';
                $.each(data, function (index, user) {
                    dataHtml += "<tr><td style='width: 10%'>" + user['id']+"</td><td style='width: 25%'>"+user['name']+"</td><td style='width: 25%'>"+user['role']+"</td><td style='width: 20%'>"+user['created_at'].slice(0, 10)+"</td>"@if(session('role')=='admin') +"<td style='width: 20%'> <a href='"+base_url+"/user/"+user['id']+"/edit'><button class='btn btn-sm btn-outline-warning'><i class='fa-solid fa-pen-to-square'></i>&nbsp;Edit</button></a>&nbsp;&nbsp;<form action="+base_url+"/user/"+user['id']+" method=\'POST\' class='d-inline'><input type=\'hidden\' name=\'_method\' value=\'DELETE\' /><input type=\'hidden\' name=\'_token\' value=\'{{ csrf_token() }}\'><button type=\'submit\' class='btn btn-sm btn-outline-danger' id='delete_"+user['id']+"'><i class='fa-solid fa-trash-can'></i>&nbsp;&nbsp;Delete</button></form>"+"</tr>" @endif;
                });               
                $("#t-data").html(dataHtml);
                // dataContainer.html(html);
            }
        });
        // SEARCH 
        var key="";
        $('#search-box').keydown(function (e) {
            if( (e.keyCode>=65 && e.keyCode<=90) || (e.keyCode==8 || e.keyCode==32) ){
                if(key==""){
                    e.key=e.key.toUpperCase();
                }
                if(e.keyCode==8){
                    key=key.slice(0,-1)
                }
                else{
                    key=key+e.key;
                }
                var dataHtml = '';
                users.forEach(function(user){
                    user['name']=user['name'][0].toUpperCase() + user['name'].substring(1);
                    if(user['name'].startsWith(key)){
                        dataHtml += "<tr><td style='width: 10%'>" + user['id']+"</td><td style='width: 25%'>"+user['name']+"</td><td style='width: 25%'>"+user['role']+"</td><td style='width: 20%'>"+user['created_at'].slice(0, 10)+"</td>"@if(session('role')=='admin') +"<td style='width: 20%'> <a href='"+base_url+"/user/"+user['id']+"/edit'><button class='btn btn-sm btn-outline-warning'><i class='fa-solid fa-pen-to-square'></i>&nbsp;Edit</button></a>&nbsp;&nbsp;<form action="+base_url+"/user/"+user['id']+" method=\'POST\' class='d-inline' ><input type=\'hidden\' name=\'_method\' value=\'DELETE\' /><input type=\'hidden\' name=\'_token\' value=\'{{ csrf_token() }}\'><button type=\'submit\' class='btn btn-sm btn-outline-danger' id='delete_"+user['id']+"'><i class='fa-solid fa-trash-can'></i>&nbsp;&nbsp;Delete</button></form>"+"</tr>" @endif;
                    }
                });
                $("#t-data").html(dataHtml);
                dissableDelete();
            }
        });
        function dissableDelete(){
            $('#delete_'+currentUserId).prop('disabled', true);
        }
        dissableDelete();
    </script>