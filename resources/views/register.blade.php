<!DOCTYPE html>
<html data-wf-domain="conference-html-template.webflow.io" data-wf-page="5d70f6f0c8ca5d77ce4392dc" data-wf-site="5d70f6f0c8ca5de04b4392d5">
<head>
    <meta charset="utf-8"/>
    <title>Pixel Register</title>
    <!-- Styles -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <!-- Scripts -->
{{--    <script src="{{ asset('js/checking.js') }}" defer></script>--}}

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Webflow" name="generator"/>
    <link href="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/css/conference-html-template.webflow.0b06d02f6.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link href="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7b9e8e1e2e7df3ef470640_fav-32.png" rel="shortcut icon" type="image/x-icon"/>
    <link href="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7b9e9158b7f62e91fb085b_fav-256.png" rel="apple-touch-icon"/>
    <style>

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function userAvailability() {
            let email = $("#email").val();
            $.ajax({
                type:'POST',
                url: '{{ route("emailCheck") }}',
                datatype: 'json',
                data : {
                    '_token' : '{{csrf_token()}}',
                    'email': email,
                },
                success: function(result){
                    $("#user-availability-status1").html(result);
                },
            });
        }
    </script>
</head>
<body>
    <div style="opacity:0" class="main">
        <div class="section-hero _50vh">
            <div class="w-layout-grid main-grid">

                <div id="w-node-_6ca352aa-f456-95fb-2b6c-2f7d864c63d1-ce4392dc" class="content centered">
                    <div class="show-item-onload margin-paragraph">
                        <h1 class="display-1 small">Registration Form</h1>
                    </div>
                </div>
            </div>
            <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7b5d4b3a8c25e18e4d155d_shape-bottom-2.svg"
                 alt="" class="img-shape-bottom"/>
            <div class="bg-color dark-purple"></div>
        </div>
        <div class="section">
            <div class="w-layout-grid grid-6 margin-bottom">
                <div id="w-node-d6e6c75e-fcb8-7ef3-0e4c-6b6a9940b5fa-ce4392dc" class="content">
                    <div class="sticky-content"></div>
                </div>
                <div id="w-node-c42ca344-bce3-597d-2794-17a4fe062d4f-ce4392dc" class="content">


                    <div class="wrapper">
                        <h2>Registration</h2>
                        <form action="/register" method="post">
                            @csrf
                            <div class="input-box">
                                <input type="text" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="input-box">
                                <input type="email"  placeholder="Email" id="email"  name="email" onblur="userAvailability()" required="required"><br>
                                <span id="user-availability-status1" style="font-size:15px; color: red; background-color: white" </span>
                            </div>

                            <div class="input-box">
                                <input type="tel" name="contact" placeholder="Phone Number" minlength="10" maxlength="10" required>
    u                        </div>
                            <div class="input-box">
                                <select name="branch" style="color: #333;">
                                    <option value="Choose Your Branch" style="color: #333;">Choose Your Branch</option>
                                    <option value="CSE" style="color: #333;">CSE</option>
                                    <option value="ECE" style="color: #333;"> ECE</option>
                                    <option value="EEE" style="color: #333;">EEE</option>
                                    <option value="CHM" style="color: #333;">CHM</option>
                                    <option value="MECH" style="color: #333;">MECH</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <input type="text" name="admnno" placeholder="Admission No." required>
                            </div>
                            <div class="input-box">
                                <input type="text" name="college" placeholder="College Name" required>
                            </div>
                            <div class="input-box">
                                <input type="text" name="location" placeholder="Your Town/City" required>
                            </div>
                            <div class="button">
                                <input type="submit" placeholder="Register" class="btn btn-primary" id="submit">
                            </div>
<!--
                            <div class="text" style="margin-left: auto; margin-right: auto;">
                                <div class="nav-menu-wrapper">
                                    <a data-w-id="a1deafb6-81bb-8718-ee70-a9b0b542bc66" href="#" class="btn navi-2 w-inline-block">
                                        <div class="bg-color yellow"></div>
                                        <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg"
                                             alt="" class="btn-icon"/>

                                        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                        skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                        skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                        skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                        skew(0, 0)" class="btn-label">
                                            Register Now</div>
                                        <div class="btn-hover purple"></div>
                                    </a>
                                </div>
                                <div class="menu-button w-nav-button">
                                    <div class="w-icon-nav-menu"></div>
                                </div>
                            </div>
                            -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5d70f6f0c8ca5de04b4392d5" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/js/webflow.bdb12a2e7.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
