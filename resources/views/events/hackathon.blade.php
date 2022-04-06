<!DOCTYPE html>
<html data-wf-page="5d70f6f0c8ca5d73cd4392e2" data-wf-site="5d70f6f0c8ca5de04b4392d5">

<head>
    <meta charset="utf-8" />
    <title>Hackathon-Pixel 2022</title>
    <meta content="Hackathon" name="description" />

    <!-- Styles -->
    <link href="{{asset('css/main-script.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/faq.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/registration_form.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{asset('js/webfont.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/preload.js') }}" defer></script>

    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Barlow Condensed:regular,500,600,700,800,900", "Barlow:300,regular,italic,500,600,700"]
            }
        });
    </script>
</head>

<script type="text/javascript">
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
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }
    (window, document);
</script>
<link href="../images/pixel-logo.svg " rel="shortcut icon " type="image/x-icon " />
<link href="../images/pixel-logo.svg" rel="apple-touch-icon" />
<style>
    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>
</head>

<body id="body" onload="preload()">

@include('layouts.preload')
<!-- header -->

<div data-collapse="medium" data-animation="default" data-duration="400" style="opacity: 0; display: flex; flex-direction: row; align-items:
        center;" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div style="display: block;">
        <a href="/" aria-current="page" class="brand white
                logo-absolute
                w-nav-brand w--current">
            <div style="display: flex;flex-direction: row;align-items:
                    center;">
                <img class="logo" src="../images/pixel-logo.svg" alt="" srcset="" width="80px">

                <h4 class="uppercase" style="padding-left: 10px;
                        padding-right:
                        10px; color: white;">
                    Pixel <br> 2022
                </h4>


            </div>
        </a>
    </div>
    <nav role="navigation" class="nav-menu w-nav-menu">
        <!-- <div class="nav-menu-wrapper margin-tablet">
            <div class="display-none-mobile">
                <div class="caption font-white">Share</div>
                <div class="separator-line-horiz white"></div>
            </div>
            <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small facebook w-inline-block"></a>
            <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small twitter w-inline-block"></a>
            <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small linkedin w-inline-block"></a>
        </div> -->
        <div class="nav-menu-wrapper" style="margin-left: auto;
                padding-right: 5px;">
            <a href="/#about" class="btn navi-1 w-inline-block">
                <div class="btn-label">About</div>
                <div class="btn-hover purple"></div>
            </a>

            <a href="/#events" class="btn navi-1 w-inline-block">
                <div class="btn-label">Events</div>
                <div class="btn-hover purple"></div>
            </a>
            <a href="/#schedule" class="btn navi-1 w-inline-block">
                <div class="btn-label">Event-Schedule</div>
                <div class="btn-hover purple"></div>
            </a>
            <a href="/#gallery" class="btn navi-1 w-inline-block">
                <div class="btn-label">Gallery</div>
                <div class="btn-hover purple"></div>
            </a>
            <a href="/#recs" class="btn navi-1 w-inline-block">
                <div class="btn-label">Sponsers</div>
                <div class="btn-hover purple"></div>
            </a>
            <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf" href="/#contactUs" class="btn navi-1 w-inline-block">
                <div class="btn-label">Contact Us</div>
                <div class="btn-hover purple"></div>
            </a>
            <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf1" href="#" class="btn navi-1 w-inline-block">
                <div class="btn-label">FAQ</div>
                <div class="btn-hover purple"></div>
            </a>

            <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf2" href="#" class="btn navi-2 w-inline-block">
                <div class="bg-color yellow"></div>
                <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg" alt="" class="btn-icon" />
                <div style="-webkit-transform: translate3d(0, 0, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                        -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);" class="btn-label">
                    Register Now
                </div>

            </a>
        </div>
    </nav>
    <!-- TODO -->
    <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu" style="font-size: 40px;"></div>
    </div>
</div>
<!-- header end -->
<div style="opacity:0" class="main">
    <div class="section-hero _50vh">
        <div class="w-layout-grid main-grid">
            <div id="w-node-_6ca352aa-f456-95fb-2b6c-2f7d864c63d1-ce4392dc" class="content centered">
                <div class="show-item-onload margin-paragraph" style="display: flex;flex-direction: row;align-items: center;">
                    <img src="../images/event-icons/coding.svg" style="min-height: 10px; max-height: 120px;">
                    <h1 class="display-1 small">Online Hackathon</h1>
                </div>
            </div>
        </div><img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7b5d4b3a8c25e18e4d155d_shape-bottom-2.svg" alt="" class="img-shape-bottom" />
        <div class="bg-color dark-purple"></div>
    </div>
    <div class="section">

        <div class="w-layout-grid grid-6 margin-bottom ">
            <div id="w-node-_42a1cb0b-3aad-25c1-41c3-f7c4077c09c2-ce4392dc" class="content">

                <div class="sticky-content">
                    <div class="w-layout-grid grid-details-conference-info border ">
                        <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc03-cd4392e2 " class="section padding-2rem ">
                            <div class="content horizontal middle ">
                                <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d74eab37a6dfa8086237033_Orion_timekeeping.svg " alt=" " class="icn-32 " />
                                <div class="margin-left ">
                                    <h5 class="display-3 font-yellow ">April 29, 2022</h5>
                                    <div>Dates</div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc10-cd4392e2 " class="section padding-2rem ">
                            <div class="line-left "></div>
                            <div class="content horizontal middle ">
                                <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg " alt=" " class="icn-32 " />
                                <div class="margin-left ">
                                    <h5 class="display-3 font-yellow ">350/-</h5>
                                    <div>Team of 2-4 Members</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="register" style="max-width: 300px; min-width: 50px ;display: inline; padding: 1rem;">
                        <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9c3" href="https://webflow.com/templates/html/conferencos-conference-website-template" target="_blank" class="btn  w-inline-block" style="pointer-events: none;">
                            <div class="bg-color yellow" style="background-color: grey;"></div>
                            <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg" alt="" class="btn-icon" />
                            <div style="-webkit-transform: translate3d(0, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                    -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                    rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                    -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                    rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                    transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                    rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);" class="btn-label">
                                Register for event
                            </div>

                        </a>
                    </div>
                    <h4 style="font-size: 20px;align-content: center;"> &nbsp; &nbsp;*&nbsp;&nbsp;Registration will open soon..</h4>

                </div>
                <div style="height: 50px;">

                </div>

            </div>
            <div id="w-node-_42a1cb0b-3aad-25c1-41c3-f7c4077c09c6-ce4392dc" class="content" style="padding: 2rem;">


                <div class="margin-paragraph w-richtext">
                    <h2>About the event</h2>
                    <img src="../images/events/hackathon1.jpg" style="width: 100%;margin-top: 1rem;max-height: 280px; margin-bottom: 1rem;" alt="">
                    <p>A conventional hackathon where you use your problem solving skills and innovation skills to provide a valid working solution to a problem presented by us. You participate as a team, work as a team and deliver the solution within
                        the given time to win.</p>
                    <p>But this time, you can solve the problem from whereever you are, and submit the solution to us online. </p>
                    <p>
                    <h5>Registration Rules</h5>
                    <ul>
                        <li>
                            A team can contain 2 to 4 members.
                        </li>
                        <li>
                            Payment of rupees 500 should be paid by one person from each team.
                        </li>
                        <li>
                            Register using the same E-mail Id that was provided during Pixel Registration.
                        </li>
                    </ul>
                    </p>
                    <h5>Event Rules</h5>
                    <p>
                    <ul>
                        <li>
                            The problem statement will be shared before the start of the event only.
                        </li>
                        <li>
                            Code, Design and Document files should be created during the event only.
                        </li>
                        <li>
                            Winners will be declared based on the fulfillment of the requirements present in the problem statement.
                        </li>
                    </ul>
                    </p>
                    <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d533727-cd4392e2">
                        <div class=" grid-contact border" style="padding: 1rem;">
                            <ul>
                                <li>
                                    <h6>Winners will receive exiting prizes.</h6>
                                </li>
                                <li>
                                    <h6>Participation Certificates will be awarded to every participant.</h6>
                                </li>
                                <li>
                                    <h6>Food will be Provided.</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="hover-line white" style="margin-bottom: -2.5rem; padding: 0.01rem;"></div>

                    </div>
                </div>

                <h2 style="padding-top: 2rem;">Event Coordinators</h2>
                <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d533727-cd4392e2" class="content centered">
                    <div class="container medium margin-bottom">
                        <div class="w-layout-grid grid-contact border" style="background-color:#3B3566 ;">
                            <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d53372a-cd4392e2" class="section padding-2rem">
                                <div class="content centered">
                                    <div class="show-item-onload margin-paragraph">
                                        <div class="font-yellow uppercase">Surya Kaushik
                                        </div>
                                    </div>
                                    <div class="show-item-onload">
                                        <div class="uppercase">
                                            <p style="color: white;">Phone:</p><a href="tel:6303592051" class="link-block w-inline-block">6303592051</a>
                                        </div>
                                        <div class="uppercase">
                                            <p style="color:white;">Mail Id:</p> <a href="mailto:kaushikawesome361@gmail.com" class="link-block w-inline-block">kaushikawesome361@gmail.com</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d533734-cd4392e2" class="section padding-2rem">
                                <div class="line-left"></div>
                                <div class="content centered">
                                    <div class="show-item-onload margin-paragraph">
                                        <div class="font-yellow uppercase">M Farheen</div>
                                    </div>
                                    <div class="show-item-onload">
                                        <div class="uppercase">
                                            <p style="color: white;">Mail Id:</p><a href="mailto:farheenmhmd05@gmail.com" class="link-block w-inline-block">farheenmhmd05@gmail.com9</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="-webkit-transform:translate3d(0, 150%, 0) scale3d(1, 1,
                1) rotateX(0) rotateY(0) rotateZ(0) skew(0,
                0);-moz-transform:translate3d(0, 150%, 0) scale3d(1, 1, 1)
                rotateX(0) rotateY(0) rotateZ(0) skew(0,
                0);-ms-transform:translate3d(0, 150%,
                0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0,
                0);transform:translate3d(0, 150%, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0)" class="announcement-bar-wrapper">
                <!-- <div class="announcement-bar">
                    <div class="centered-horiz margin-right"><span class="badge-small">New</span> Here’s a notice bar to bring attention to new features of your website.</div>
                    <a data-w-id="6c5af89c-0cd9-a89c-8bd1-faae3036c940" href="#" class="btn
                    close-btn w-inline-block"><img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7a5d7526acc66065eecb26_btn_close.svg" alt="" class="btn-label" />
                        <div class="btn-hover purple"></div>
                    </a>
                </div> -->
            </div>
        </div>

    </div>

    <!-- footer -->
@include('layouts.footer')
<!-- footer end -->
</div>
<!-- FAQ's Page -->
@include('layouts.faqs')
<!-- FAQ's Page -->
<!-- Registration  Page -->
@include('layouts.registration')
<!-- Registration Page -->


<script src="{{asset('js/jquery-3.5.1.min.js')}}?site=5d70f6f0c8ca5de04b4392d5" type="text/javascript" crossorigin="anonymous"></script>
<script src="{{asset('js/main-script.js')}}" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script>
</body>

</html>
