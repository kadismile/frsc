<!DOCTYPE html>
<html lang=en-US>
<!-- Mirrored from bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 09:27:03 GMT -->
<head><title>CarReg</title>
    <link rel="shortcut icon" type=image/x-icon href=images/favicon.ico/>
    <meta http-equiv=content-type content="text/html; charset=UTF-8"/>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--[if IE]>
    <script type=text/javascript src=js/html5.js></script>
    <link rel=stylesheet id=stylesheet-ie href=css/css_ie.css type=text/css media=all/> <![endif]-->
</head>
<body class="left-slider two-column">

<div id=conteiner>
    <div id=branding>
        <div id=branding-content>

            <div class=title-content><a href=01-home-v1.html title>
                    <img class=site-logo src=/images/thumb.png alt/>
                    <h1 class=site-title> Reg </h1></a></div>

            <div class=access-content>
                <label for=menu-icon class=menu-icon><img src=/images/menu.png alt=menu/></label>
                <input type=checkbox id=menu-icon value=1/>
                <ul>
                    <li class=menu-close><span>&#10006;</span></li>
                    <li class="current_page_item"><a href="/" title>Home</a></li>
                    <li><a href=/about  title>About</a></li>
                    <li><a href=faq title>FAQ</a></li>
                    <li><a href=contacttitle>Contact</a></li>
                </ul>
            </div>
            <div class=member><span class=sign_in><a class="sign_button tab_link_button" href=#sign_in title>Sign in</a></span>
                <span class=register><a class="sign_button tab_link_button" href=#register title>Register</a></span>
            </div>
        </div>
        <div class=clear></div>
    </div>




            @yield('content')

    <div class=clear></div>
    <footer id=footer>

        <div id=footer-content><img class=site-logo src=/images/thumb.png alt/>
            <h1 class=site-title>Reg</h1>
            <div class=company-name>Ibrahim ,Lekki - Suite 214 Lagos Nigeria</div>
        </div>
    </footer>
</div>
<div id=overlay_block></div>
<div class="admin-form-content sign_register_block">
    <div class=admin-form-block>
        <form class="main-form admin-form" action=#>
            <div class=main_form_navigation>
                <div id=tab_register class="title-form back"><span class=register><a href=#register title>Register</a></span></div>
                <div id=tab_sign_in class="title-form current"><span class=sign_in><a href=#sign_in
                                                                                      title>Sign In</a></span></div>
            </div>
            <div id=tab_sign_in_content class=content-form>
                <div><input id=sign_in_email class=input_placeholder type=email value placeholder="Email address"
                            name="sign_in_email"/></div>
                <div><input id=sign_in_pass type=password value name="sign_in_pass"/></div>
                <div><input id=remember_me_checkbox type=checkbox class=styled name=remember_me value="1"/> <label
                            for=remember_me_checkbox> Remember me next time</label></div>
                <input class="admin-form-submit orange_button" type=submit value="Continue"/>
                <div class=admin_form_link><span class=forgot_passwd><a class=tab_link_button href=#forgot_passwd title>Forgot password?</a></span>
                </div>
            </div>
            <div id=tab_register_content class="content-form hidden">
                <div><input id=register_email class=input_placeholder type=email value placeholder="Email address"
                            name="register_email"/></div>
                <div><input id=register_name type=text value name="register_name"/></div>
                <div><input id=register_remember_me_checkbox type=checkbox class=styled name=remember_me value="1"/>
                    <label for=register_remember_me_checkbox> Remember me next time</label></div>
                <input class="admin-form-submit orange_button" type=submit value="Continue"/>
                <div class=admin_form_link><span class=sign_in><a class=tab_link_button href=#sign_in title>Already registered?</a></span>
                </div>
            </div>
            <div class=clear></div>
        </form>
        <div class=admin-form-separator>
            <div class=separator>Or</div>
        </div>
        <input class=connect_fb type=button value="Connect With Facebook"/>
        <input class=connect_twitter type=button value="Connect With Twitter"/></div>
</div>
<div class="admin-form-content forgot_passwd_block">
    <div class=admin-form-block>
        <form class="main-form admin-form" action=#>
            <div class=main_form_navigation>
                <div id=tab_forgot_passwd class="title-form current">Forgot Password?</div>
            </div>
            <div id=tab_forgot_passwd_content class=content-form><input id=forgot_pass_email class=input_placeholder
                                                                        type=email value placeholder="Email address"
                                                                        name="forgot_pass_email"/>
                <div id=forgot_pass_text> We will send you the password in few minutes.</div>
                <input class="admin-form-submit orange_button" type=submit value="Continue"/>
                <div class=admin_form_link>
                    <span class=sign_in><a class=tab_link_button href=#sign_in title>Sign In</a></span>
                </div>
            </div>
            <div class=clear></div>
        </form>
    </div>
</div>

<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>

<script src="{{ asset('js/placeholder_ie.js') }}"></script>
<script src="{{ asset('js/custom-form-elements.js') }}"></script>
<script src="{{ asset('js/jquery.meio.mask.js') }}"></script>
<script src="{{ asset('js/jquery.selectbox-0.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.blueberry.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>


</body>
<!-- Mirrored from bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 09:28:30 GMT -->
</html>