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
            <br>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Trashed Donors</h3>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 15.625rem;">
                                            <input type="text" name="name" class="form-control float-right"
                                                id="search-box" placeholder="Search By Name">
                                            <div class="input-group-append" >
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                            <a href="{{route('dashboard')}}" style="padding-left: 10px">
                                                <button class='btn btn-sm btn-outline-warning'>
                                                    <i class='fa-solid fa-droplet'></i>&nbsp;Donors
                                                </button>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>                        
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Group</th>
                                                <th>Reg No</th>
                                                <th>Location</th>
                                                <th>Last Donation Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="t-data">
                                            {{-- TABLE DATA FROM JS SCRIPT --}}
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div id="t-pag">
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
        var users = <?php echo $array; ?>;
        var base_url="<?php echo url('/') ;?>";
        $('#t-pag').pagination({
            dataSource: users,
            pageSize: 7,
            showGoInput: true,
            showGoButton: true,
            callback: function(data, pagination) {
                var dataHtml = '';
                $.each(data, function (index, user) {
                    dataHtml += "<tr><td>" + user['donner_id']+"</td><td>"+user['name']+"</td><td>"+user['email']+"</td><td>"+user['phone']+"</td><td>"+user['group']+"</td><td>"+user['reg_num']+"</td><td>"+user['location']+"</td><td>"+user['date']+"</td><td> <a href='"+base_url+"/restore/"+user['donner_id']+"'><button class='btn btn-sm btn-outline-warning'><i class='fa-solid fa-arrow-rotate-left'></i>&nbsp;Restore</button></a>&nbsp;&nbsp;<a href='"+base_url+"/delete/"+user['donner_id']+"'><button class='btn btn-sm btn-outline-danger'><i class='fa-solid fa-trash-can'></i>&nbsp;Delete</button></a>"+"</tr>";
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
                    e.key=e.key.toUpperCase()
                }
                if(e.keyCode==8){
                    key=key.slice(0,-1)
                }
                else{
                    key=key+e.key;
                }
                var dataHtml = '';
                users.forEach(function(user){
                    if(user['name'].startsWith(key)){
                        dataHtml += "<tr><td>" + user['donner_id']+"</td><td>"+user['name']+"</td><td>"+user['email']+"</td><td>"+user['phone']+"</td><td>"+user['group']+"</td><td>"+user['reg_num']+"</td><td>"+user['location']+"</td><td>"+user['date']+"</td><td> <a href='"+base_url+"/restore/"+user['donner_id']+"'><button class='btn btn-sm btn-outline-warning'><i class='fa-solid fa-arrow-rotate-left'></i>&nbsp;Restore</button></a>&nbsp;&nbsp;<a href='"+base_url+"/delete/"+user['donner_id']+"'><button class='btn btn-sm btn-outline-danger'><i class='fa-solid fa-trash-can'></i>&nbsp;Delete</button></a>"+"</tr>";
                    }
                });
                $("#t-data").html(dataHtml);
            }
        });
    </script>