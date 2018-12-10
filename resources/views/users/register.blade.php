


@extends('general')

@section('content')


    <div id=slider>
        <div id=slider-img>
            <ul class=slides>
                <li><img src=/images/slider1.jpg alt/></li>
                <li><img src=/images/slider3.jpg alt/></li>
                <li><img src=/images/slider2.jpg alt/></li>
                <div id=slider-pattern></div>
            </ul>
        </div>



        <div id=slider-content>
            <div id=slider-post>
                <div class=post>
                    <div class=entry-header><h3 class=entry-format>Welcome {{$user->email}}</h3></div>
                    <div class=entry-content>
                        kindly register your car before VIO or Road Safety will nab you ooo
                        no talk say i nor tel u ooo
                    </div>

                </div>
                <div id=slider-front-img><img src=/images/slider_front_img.png alt/></div>
            </div>



            <form method="post" id=slider-form class=main-form action="{{url('/register')}}">
                @csrf
                <input type="hidden" value="{{$user->id}}" class="form-control" name="user_id">
                <div id=book_car_content class=content-form>
                    <div class=location-block>
                        <div class="form-block location">First Name</div>
                        <input class=location type=text value  placeholder="Your First Name"
                               name="first_name"/>
                    </div>

                    <div class=location-block>
                        <div class="form-block location">Last Name</div>
                        <input class=location type=text value placeholder="Your Last Name"
                               name="last_name"/>
                    </div>


                    <div class=location-block>
                        <div class="form-block location">Email</div>
                        <input class=location type=text placeholder="Email Address"
                               value="{{$user->email}}"
                               name="email"/>
                    </div>


                    <div class="form-block pick-up">
                        <h4>Date Of Birth</h4>
                        <input class=datepicker type=date value name="dob" style="margin-right: 40px;"/>

                        <input class=datepicker type=text placeholder="Gender" name="sex"/>
                        <div class=clear></div>
                    </div>


                    <div class="form-block pick-up">

                        <input class=datepicker  placeholder="Occupation" value name="occupation" style="margin-right: 40px;"/>

                        <input class=datepicker type=text placeholder="Phone" name="phone"/>
                        <div class=clear></div>
                    </div>

                    <br>
                    <div class=location-block>
                        <div class="form-block location">Address</div>
                        <input class=location type=text value placeholder="Your Address"
                               name="address"/>
                    </div>

                    <div class="form-block car-type">
                        <h4>Select Car type</h4> <div class="car-type-select">

                            <select class="select shortcode-select" name=vehicle_type>
                                <option disabled=disabled>Select</option>
                                <option>Articulated Vehicle</option>
                                <option> Commercial </option>
                                <option> Private</option>
                                <option> Motorcycle </option>
                            </select>


                     </div>

                        <div class="form-block car-type">
                            <h4>Select State</h4> <div class="car-type-select">

                                <select class="select shortcode-select" name=state>
                                    <option disabled=disabled>Select</option>
                                    <option>Abuja</option>
                                    <option> Lagos </option>
                                    <option> Kaduna</option>
                                    <option> Kwara </option>
                                </select>


                            </div>





                    <div class="form-block form-submit form-continue">
                        <input class="orange_button form-continue" type=submit value="Continue"/>
                    </div>
                    <div class=clear></div>
                </div>

                    </div>
                    </div>
            </form>
            <div class=clear></div>
        </div>




    </div>


@endsection