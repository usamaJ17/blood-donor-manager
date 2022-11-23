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

        <div class="content-wrapper" style="min-height: 962px;">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Reports</h1>
                        </div>
                    </div>
                </div>


                <section class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{$totalDonner}}</h3>
                                        <p>Total BDS Donor</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-droplet"></i>
                                    </div>
                                    <a href="{{url('/dashboard')}}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-success">
                                    <div class="inner">
                                        {{-- <h3>{{$totalCase}}<sup style="font-size: 20px">%</sup></h3> --}}
                                        <h3>{{$totalCase}}</h3>
                                        <p>Total BDS Cases</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-book-medical"></i>
                                    </div>
                                    <a href="{{url('/case-all')}}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{$solvedCase}}</h3>
                                        <p>Total Case Solved by BDS</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <a href="{{url('/case-all')}}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{$percent}}<sup style="font-size: 20px"> %</sup></h3>
                                        <p>Case Solved by BDS</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-pie"></i>
                                    </div>
                                    <a href="{{url('/case-all')}}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <section class="col-lg-12 connectedSortable ui-sortable">

                                <div class="card">
                                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                                        <h3 class="card-title">
                                            <i class="fas fa-chart-pie mr-1"></i>
                                            Monthly Donors Graph
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item" id="donnerGraph">
                                                    <a class="nav-link active" href="" data-toggle="tab">Donor
                                                        Graph</a>
                                                </li>
                                                <li class="nav-item" id="caseGraph">
                                                    <a class="nav-link" href="" data-toggle="tab">Case Graph</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content p-0">
                                            <canvas id="myChart"
                                                style="height: 300px; display: block; width:100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </section>

            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
            </script>
            <script>
                $(function(){
               $('#donnerGraph').click(function(){
                var xValues = [1,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30];
                var allDonner = <?php echo json_encode($totalDonnerMonth)?>;
            new Chart("myChart", {
              type: "line",
              data: {
                labels: xValues,
                datasets: [{
                  fill: false,
                  lineTension: 0,
                  backgroundColor: "rgba(0,0,255,1.0)",
                  borderColor: "rgba(0,0,255,0.1)",
                  data: allDonner
                }]
              },
              options: {
                legend: {display: false},
              }
            });
               });
               $('#caseGraph').click(function(){
                var xValues = [1,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30];
                var allCase = <?php echo json_encode($totalCaseMonth)?>;
                var allSolve = <?php echo json_encode($totalSolvedMonth)?>;
                new Chart("myChart", {
                  type: "line",
                  data: {
                    labels: xValues,
                    datasets: [{ 
                      data: allCase,
                      borderColor: "red",
                      fill: false
                    }, { 
                      data: allSolve,
                      borderColor: "green",
                      fill: false
                    },]
                  },
                  options: {
                    legend: {display: false}
                  }
                });
               });
               $("#donnerGraph").trigger("click");
            });
            </script>