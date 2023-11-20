@extends('admin.layout.app')

@section('content')


  <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pandey Connect</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Welcome!</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                             <div class="col-xxl-3 col-sm-6">
                                <div class="card widget-flat text-bg-primary">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="bi-person"></i>
                                        </div>
                                        <h6 class="text-uppercase mt-0" title="Customers">Total User</h6>
                                        <h2 class="my-2">2</h2>
                                        <p class="mb-0">
                                            {{-- <span class="badge bg-white bg-opacity-10 me-1">8.21%</span>
                                            <span class="text-nowrap">Since last month</span> --}}
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                             <div class="col-xxl-3 col-sm-6">
                                <div class="card widget-flat text-bg-info">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="bi-person"></i>
                                        </div>
                                        <h6 class="text-uppercase mt-0" title="Customers">Community Memeber</h6>
                                        <h2 class="my-2">20</h2>
                                        <p class="mb-0">
                                            {{-- <span class="badge bg-white bg-opacity-10 me-1">2.97%</span>
                                            <span class="text-nowrap">Since last month</span> --}}
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                        
                        </div>

                        

@endsection