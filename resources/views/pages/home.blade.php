


@extends('general')

@section('content')


        <div id=slider>
            <div id=slider-img>
                <ul class=slides>
                    <li><img src=images/slider1.jpg alt/></li>
                    <li><img src=images/slider3.jpg alt/></li>
                    <li><img src=images/slider2.jpg alt/></li>
                    <div id=slider-pattern></div>
                </ul>
         </div>



    <div id=slider-content>
        <div id=slider-post>
            <div class=post>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <h2 style="color: #274e42;
                            background-color: #fff;
                            padding: 20px;">{{ \Session::get('success') }}</h2>
                    </div><br />
                @endif

                    @if (\Session::has('error'))
                        <div class="alert alert-error">
                            <h2 style="color: #f60505;background-color: #fff;
padding: 20px;">{{ \Session::get('error') }}</h2>
                        </div><br />
                    @endif
                <div class=entry-header><h3 class=entry-format>Register Your Car</h3></div>
                <div class=entry-content>
                   kindly register your car before VIO or Road Safety will nab you ooo
                    no talk say i nor tel u ooo
                </div>
                <div class=entry-meta><a href=# title>Learn more</a></div>

                    <a href="/redirect"> <img src="/images/google-login.png" alt=""></a>

            </div>
            <div id=slider-front-img><img src=images/slider_front_img.png alt/></div>
        </div>



        <div class=clear></div>
    </div>




</div>


@endsection