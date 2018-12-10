@extends('admin')
@section('title', 'Home | ERCC')
@section('content')



    <!-- BEGIN .app-main -->
    <div class="app-main">
        <!-- BEGIN .main-heading -->
        <header class="main-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <div class="page-icon">
                            <i class="icon-laptop_windows"></i>
                        </div>
                        <div class="page-title">
                            <h5>Dashboard</h5>
                            <h6 class="sub-heading">Welcome to Admin</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="right-actions">
                            <a href="users/new" class="btn btn-primary float-right">
                                Register New Car
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END: .main-heading -->
        <!-- BEGIN .main-content -->
        <div class="main-content">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header" style="color: #e91aac">Open Applications </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>State</th>
                                    <th>Gender</th>
                                    <th>D.o.B</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                @php($x = 1 )

                                @foreach($users as $user)

                                    <tr>
                                        <th scope="row">{{$x++}}</th>

                                        <td><a href="">{{$user->first_name}}  {{$user->last_name}}</a></td>
                                        <td><a href="">{{$user->email}}</a></td>
                                        <td><a href="">{{$user->phone}}</a></td>
                                        <td><a href="">{{$user->state}}</a></td>




                                        <td>{{$user->sex}}</td>
                                        <td>{{$user->dob}}</td>
                                        {{--  <td>{{date_format($user->created_at,"M/d/Y ")}}</td>--}}
                                        <td><a class="btn btn-success" href="admin/users/{{$user->id}}/edit">
                                                <i class="icon-edit2"></i>
                                            </a> </td>


                                        <td>

                                            <form action="{{ url('/users', ['id' => $user->id]) }}" method="post">
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">
                                                    <i class="icon-trash"></i>
                                                </button>
                                                {!! csrf_field() !!}
                                            </form>


                                        </td>



                                    </tr>
                                @endforeach


                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: .main-content -->
    </div>
    <!-- END: .app-main -->




@endsection