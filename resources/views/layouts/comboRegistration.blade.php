<div style=" flex-direction: column;" class="details event-registration">
    <div id="codeCombo">
        <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e3" href="#" class="btn close w-inline-block" id="close"
            onclick="resetCodeCombat()">
            <div class="btn-label">Close</div>
            <div class="btn-hover purple"></div>
        </a>
        <div class="section">

            <div class="wrapper" style="display: flex; flex-direction: column;">
                <h2 style="margin: 2rem;" class="centered">Registration For Code Combat And Debugging Apocalypse
                </h2>
                <div class="w-form-done" id="form-done_c" role="region" aria-label="Email Form 2 success">
                    <div>Thank you! You have Successfully registered for the Code Combat and Debugging Apocalypse</div>
                </div>
                <div class="w-form-fail" id="form-fail_c" role="region" aria-label="Email Form 2 failure">
                    <div>Oops! Something went wrong in payment process.</div>
                </div>
                 <form  id="register-code-combat" onkeydown="return event.keyCode != 13;">
                   @csrf
                    <div class="input-box">
                        <input type="text" name="registered_id" placeholder="Enter Registration ID" required
                            id="registered_id" />

                    </div>
                    <div class="error">
                        <span id="user-availability-status" style="color: #cc0033;
                font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                        </span>
                    </div>
                    <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc10-cd4392e2 " class="section padding-2rem ">
                        <div class="line-left "></div>
                        <div class="content horizontal middle ">
                            <h5 class="display-3 white ">Amount Payable : </h5>

                            <div class="margin-left ">
                                <h5 class="display-3 font-yellow ">Rs:300</h5>
                            </div>
                        </div>
                    </div>

                    <div class="register" style="display: inline; display: flex">

                    <div class="register centered" style="max-width: 300px; min-width: 50px ;display: inline; padding: 1rem;">
                        <p class="centered">Registrations are closed.</p>
                    </div>

                    </div>
                    <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf2" href="#"
                        class="link-block margin-right w-inline-block centered " style="display: inline;"
                        id="notRegister">
                        <div class="uppercase font-white">Not Registered Yet? <span style="color: yellow">Register
                                Here</span>
                        </div>
                        <div class="hover-line white"></div>
                    </a>

                </form>
            </div>

        </div>
    </div>


    <div id="pptQuizCombo" >
        <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e3" href="#" class="btn close w-inline-block" id="close"
            onclick="resetCodeCombatCombo()">
            <div class="btn-label">Close</div>
            <div class="btn-hover purple"></div>
        </a>
        <div class="section ">

            <div class="wrapper" style="display: flex; flex-direction: column;">
                <h2 style="margin: 2rem;" class="centered">Registration For Quizardry And Paper Presentation Event
                </h2>
                <p>This Combo is only for Team of 2</p>
                <div class="w-form-done" id="form-done_c_1" role="region" aria-label="Email Form 2 success">
                    <div>You have SuccessFully registered for the Quizardry And Paper Presentation Event</div>
                </div>
                <div class="w-form-fail" id="form-fail_c_1" role="region" aria-label="Email Form 2 failure">
                    <div>Oops! Something went wrong the payment process.</div>
                </div>
                  <form  id="register-code-combat-1" onkeydown="return event.keyCode != 13;">
                  @csrf
                    <div class="input-box">
                        <input type="text" name="registered_id_t" placeholder="Enter Registration ID" required
                            id="registered_id_t">
                    </div>
                    <div class="error">
                        <span id="user-availability-status-event" style="color: #cc0033;
                font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                        </span>
                    </div>



                    {{-- for getting the details of team --}}
                    <div class="team-details" id="team-details">


                        <div id="team-member-details">
                            <h5> <span style="color: red">*</span> Enter the Team Details</h5>
                            <div class="input-box">
                                <input type="text" name="tname" placeholder="Team Name" required id="t_name">
                            </div>
                            <div class="error">
                                <span id="team-name-validater"
                                    style="color: #cc0033;
                        font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                </span>
                            </div>

                            <div class="teammember" id="1">
                                <h5><span style="color: red">*</span>Team Member 1</h5>
                                <div class="input-box">
                                    <input type="text" id="fname-1" name="fname-1" placeholder="Full Name">
                                </div>
                                <div class="input-box">
                                    <input type="text" id="college-1" name="college-1" placeholder="College">
                                </div>
                                <div class="input-box">
                                    <input type="text" id="branch-1" name="branch-1" placeholder="Branch">
                                </div>
                                <div class="error">
                                    <span id="team-member-validater-1"
                                        style="color: #cc0033;
                            font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                    </span>
                                </div>

                            </div>
                            <div class="teammember" id="2">
                                <h5><span style="color: red">*</span>Team Member 2</h5>
                                <div class="input-box">
                                    <input type="text" id="fname-2" name="fname-2" placeholder="Full Name">
                                </div>
                                <div class="input-box">
                                    <input type="text" id="college-2" name="college-2" placeholder="College">
                                </div>
                                <div class="input-box">
                                    <input type="text" id="branch-2" name="branch-2" placeholder="Branch">
                                </div>
                                <div class="error">
                                    <span id="team-member-validater-2"
                                        style="color: #cc0033;
                            font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                    </span>
                                </div>
                            </div>


                        </div>


                    </div>

                    {{-- team details end --}}
                    <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc10-cd4392e2 " class="section padding-2rem ">
                        <div class="line-left "></div>
                        <div class="content horizontal middle ">
                            <h5 class="display-3 white ">Amount Payable : </h5>

                            <div class="margin-left ">
                                <h5 class="display-3 font-yellow " id="amount">Rs.400</h5>

                            </div>
                        </div>
                    </div>

                    <div class="register" style="display: inline; display: flex">

                    <div class="register centered" style="max-width: 300px; min-width: 50px ;display: inline; padding: 1rem;">
                        <p class="centered">Registrations are closed.</p>
                    </div>

                    </div>
                    <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf2" href="#"
                        class="link-block margin-right w-inline-block centered " style="display: inline;"
                        id="notRegister">
                        <div class="uppercase font-white">Not Registered Yet? <span style="color: yellow">Register
                                Here</span>
                        </div>
                        <div class="hover-line white"></div>
                    </a>

                </form>

            </div>
        </div>
    </div>
</div>
</div>



{{-- for closing the existing window and opening the registration page --}}


{{-- for closing the existing window and opening the registration page --}}
<script>
    document.getElementById('notRegister').onclick = function() {
        document.getElementById('close').click();
    }
</script>
