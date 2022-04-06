<div style="-webkit-transform:translate3d(140%, 0,
                                0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);-moz-transform:translate3d(140%,
                                0, 0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);-ms-transform:translate3d(140%,
                                0, 0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);transform:translate3d(140%, 0, 0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);display:none" class="details registration">
    <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e2" href="#" class="btn close w-inline-block">
        <div class="btn-label">Close</div>
        <div class="btn-hover purple"></div>
    </a>
    <div class="section scroll">
        <!-- <h2 class="display-2 small
                                    margin-paragraph"> Registration
        </h2> -->
        <div class="wrapper" style="display: flex; flex-direction: column;">
            <h2 style="margin: 2rem;">Registration</h2>
            <form action="/register" method="post" id="register">
                @csrf
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="input-box">
                    <input type="tel" name="contact" placeholder="Phone Number" pattern="[6-9]{1}[0-9]{9}" required>
                </div>
                <div class="input-box">
                    <select name="branch" required>
                        <option value="" style="color: #333;">Choose Your Branch</option>
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
                <div class="register" style="display: inline;">
                    <button type="submit" style="background-color: transparent">
                        <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9c3" href="#" style="z-index: -1; opacity: 2"
{{--                       onclick="document.getElementById('register').submit();"--}}
                       class="btn navi-2 w-inline-block">
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
                    </button>
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
