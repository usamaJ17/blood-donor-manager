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
                                    <h3 class="card-title col-4">All Donor with {{$group}} blood group</h3>
                                    <div class="card-tools col-lg-3 col-md-4 col-8">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="name" class="form-control float-right" id="search-box" placeholder="Search By Name">
                                            <div class="input-group-append" >
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                            @if (session('role')=='admin')
                                            <a href="{{route('trash')}}" style="padding-left: 10px">
                                                <button class='btn btn-sm btn-outline-warning'>
                                                    <i class='fa-solid fa-trash-can'></i>&nbsp;Trash
                                                </button>
                                            </a>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap" id="data-table">
                                        <thead>
                                            <tr> 
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Blood Group</th>
                                                <th>Location</th>
                                                <th>Last Called</th>
                                                <th>Remarks</th>
                                                <th></th>
                                                <th>Last Donation Date</th>
                                                <th>Reg No</th>
                                                @if (session('role')=='admin')
                                                <th>Action</th>
                                                @endif
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var users = <?php echo $array; ?>;
        var base_url="<?php echo url('/') ;?>";
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
                    dataHtml += "<tr><td>" + user['donner_id']+"</td><td>"+user['name']+"</td><td>"+user['email']+"</td><td>"+user['phone']+"</td><td>"+user['group']+"</td><td>"+user['location']+"</td><td>"+user['last_call']+"</td><td>"+user['remarks']+"</td><td><button type='button' class='btn btn-outline-warning btn-sm' id='edit_cal_button'><i class='fa-solid fa-pen'></i></button></td><td>"+user['date']+"</td><td>"+user['reg_num']+"</td>" @if(session('role')=='admin') +"<td> <a href='"+base_url+"/donor/"+user['donner_id']+"/edit'><button class='btn btn-sm btn-outline-warning'><i class='fa-solid fa-pen-to-square'></i>&nbsp;Edit</button></a>&nbsp;&nbsp;<form action="+base_url+"/donor/"+user['donner_id']+" method=\'POST\' class='d-inline'><input type=\'hidden\' name=\'_method\' value=\'DELETE\' /><input type=\'hidden\' name=\'_token\' value=\'{{ csrf_token() }}\'><button type=\'submit\' class='btn btn-sm btn-outline-danger'><i class='fa-solid fa-trash-can'></i>&nbsp;&nbsp;Delete</button></form>"+"</tr>" @endif;
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
                        dataHtml +="<tr><td>"+user['donner_id']+"</td><td>"+user['name']+"</td><td>"+user['email']+"</td><td>"+user['phone']+"</td><td>"+user['group']+"</td><td>"+user['location']+"</td><td>"+user['last_call']+"</td><td>"+user['remarks']+"</td><td><button type='button' class='btn btn-block btn-outline-warning btn-sm' id='edit_cal_button'><i class='fa-solid fa-pen'>sd</i></button></td><td>"+user['date']+"</td><td>"+user['reg_num']+"</td>" @if(session('role')=='admin') +"<td> <a href='"+base_url+"/donor/"+user['donner_id']+"/edit'><button class='btn btn-sm btn-outline-warning'><i class='fa-solid fa-pen-to-square'></i>&nbsp;Edit</button></a>&nbsp;&nbsp;<form action="+base_url+"/donor/"+user['donner_id']+" method=\'POST\' class='d-inline'><input type=\'hidden\' name=\'_method\' value=\'DELETE\' /><input type=\'hidden\' name=\'_token\' value=\'{{ csrf_token() }}\'><button type=\'submit\' class='btn btn-sm btn-outline-danger'><i class='fa-solid fa-trash-can'></i>&nbsp;&nbsp;Delete</button></form>"+"</tr>" @endif
                    }
                });
                $("#t-data").html(dataHtml);
            }
        });
        $('#data-table').on('click','#edit_cal_button',function(){
            var currentRow=$(this).closest('tr');
            var clicks = $(this).data('clicks');
            var main_div =$(this);
            var old_remarks=currentRow.find("td:eq(7)").html();
            var old_date=currentRow.find("td:eq(6)").html();
            var id=currentRow.find("td:eq(0)").html();
            if (!clicks) {
                old_remarks=currentRow.find("td:eq(7)").html();
                old_date=currentRow.find("td:eq(6)").html();
                var icon=$(this).children();
                if(icon.hasClass("fa-pen")){
                    var date='<input id="call_'+id+'" class="form-control"  name="last_call" type="text" value="'+currentRow.find("td:eq(6)").text()+'">'
                    var remarks='<input id="remarks_'+id+'" class="form-control"  name="remarks" type="text" value="'+currentRow.find("td:eq(7)").text()+'">'
                    currentRow.find("td:eq(7)").html(remarks); 
                    currentRow.find("td:eq(6)").html(date);
                    $(this).before('<span id="cancel_edit"><button type="button" class="btn btn-outline-danger btn-sm" ><i class="fa-solid fa-xmark"></i></button>&ensp;</span>');
                    icon.removeClass('fa-pen').addClass('fa-check');
                    $(this).closest('tr').find("td:eq(8)").find('#cancel_edit').on('click',function(){
                        $(this).closest('tr').find("td:eq(8)").find('.fa-check').removeClass('fa-check').addClass('fa-pen');
                        currentRow.find("td:eq(7)").html(old_remarks); 
                        currentRow.find("td:eq(6)").html(old_date);
                        $(this).remove();
                    });
                }
            } else {

            var icon=$(this).children();
            if(icon.hasClass("fa-check")){

                var remarks_id='#remarks_'+id;
                var call_id='#call_'+id;
                var remarks_text=$(remarks_id).val();
                var call_text=$(call_id).val();

                var url=`{{route('donor.update',":id")}}`;
                url = url.replace(':id',id);
                var csrf="{{csrf_token()}}";

                $.ajax({
                  url: url,
                  type : 'PATCH',
                  data: {
                    "_token": csrf,
                     'last_call' : call_text,
                     'remarks' : remarks_text,
                     'id' : id,
                  },
                  success: function(result){
                    if(result){
                        currentRow.find("td:eq(6)").html(call_text); 
                        currentRow.find("td:eq(7)").html(remarks_text);
                        old_remarks=currentRow.find("td:eq(7)").html();
                        old_date=currentRow.find("td:eq(6)").html();
                        $('#cancel_edit').remove();
                        icon.removeClass('fa-check').addClass('fa-pen');

                        // success message

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
                            title: 'Donor Data Updated Successfully!'
                        })

                    }
                    else{

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
                            iconColor: 'red',
                            icon: 'error',
                            title: 'Error in updating data'
                            })

                    }
                    //  console.log(result);
                  }});
            }
            }
            // var temp_click=$(this).data('clicks');
            $(this).data('clicks',!$(this).data('clicks'));
        });
    </script>