@extends('admin')
@section('title', 'Home | ERCC')
@section('content')


    <div class="app-wrap">

        <!-- BEGIN .app-container -->
        <div class="app-container">


            <!-- BEGIN .app-main -->
            <div class="app-main">
                <!-- BEGIN .main-heading -->
                <header class="main-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="page-icon">
                                    <i class="icon-center_focus_strong"></i>
                                </div>
                                <div class="page-title">
                                    <h5>Viewing {{$user->first_name}} </h5>


                                </div>
                            </div>

                        </div>
                    </div>
                </header>
                <!-- END: .main-heading -->
                <!-- BEGIN .main-content -->
                <div class="main-content">
                    <!-- Row start -->
                    <div class="row gutters">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">



                                            <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">Edit User</a>
                                                </li>


                                            </ul>


                                            <div class="tab-content" id="myTabContent1">
                                                <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">


                                                    <div class="card-body">
                                                        <form method="post" action="edit/{{$id}}">
                                                            @csrf



                                                        <div class="form-group">
                                                            <input type="text" value="{{$user->first_name}}" class="form-control form-control-lg">
                                                        </div>

                                                        <div class="form-group">
                                                                <input type="text" value="{{$user->last_name}}" class="form-control form-control-lg">
                                                        </div>

                                                            <div class="form-group">
                                                                <input type="text" value="{{$user->email}}" class="form-control form-control-lg">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" value="{{$user->phone}}" class="form-control form-control-lg">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" value="{{$user->state}}" class="form-control form-control-lg">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" value="{{$user->occupation}}" class="form-control form-control-lg">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" value="{{$user->address}}" class="form-control form-control-lg">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" value="{{$user->vehicle_type}}" class="form-control form-control-lg">
                                                            </div>



                                                        <br>
                                                        <br>


                                                        </form>



                                                        <div class="form-group">
                                                            <div class="text-center">
                                                                <form method="post" action="{{action('AdminController@approve', $id)}}">
                                                                    @csrf
                                                                    <div class="form-group m-0">
                                                                        <label for="exampleFormControlTextarea1">Reason for Approval</label>
                                                                        <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                                    </div>

                                                                    <button type="submit"
                                                                            class="btn btn-primary form-control
                                                                            form-control-lg">Approve Application
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="text-center">
                                                                <form method="post" action="{{action('AdminController@disApprove', $id)}}">
                                                                    @csrf
                                                                    <div class="form-group m-0">
                                                                        <label for="exampleFormControlTextarea1">Reason for DisApproval</label>
                                                                        <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                                    </div>
                                                                    <button type="submit"
                                                                            class="btn btn-danger form-control
                                                                            form-control-lg">DisApprove Application
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>






                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
                <!-- END: .main-content -->
            </div>
            <!-- END: .app-main -->
        </div>
        <!-- END: .app-container -->
        <!-- BEGIN .main-footer -->
        <footer class="main-footer fixed-btm">
            Copyright Unify Admin 2017.
        </footer>
        <!-- END: .main-footer -->
    </div>


@endsection