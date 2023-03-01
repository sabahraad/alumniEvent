<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>NDC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link href="{{ asset('asset/style.css') }}" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">

        <div class="main-agileinfo" style="margin-top: 0px;margin-b">
            <img src="{{ asset('asset/banner.jpeg') }}" alt="">
        </div>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{ route('ndc.registration') }}" method="post" enctype="multipart/form-data"
                    data-parsley-validate>
                    @csrf
                    <p id='replace-me'>Amount 2000 BDT</p>

                    <label class="label" for="fullname">Full Name. <span style="color:red">*</span></label>
                    <input style="margin-top:10px;" class="text" type="text" name="name" placeholder="Full Name"
                        required="">

                    <label class="label" for="email">Email <span style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="email" name="email" placeholder="Email"
                        required="">

                    <label class="label" for="hsc">HSC Passing Year at Notre Dame College? <span
                            style="color:red">*</span></label>
                    <input class="label" style="margin-bottom:10px;" class="text" type="text" name="hsc"
                        placeholder="HSC Year" required="">

                    <label class="label" for="hsc">Class Roll at Notre Dame College? <span
                            style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="text" name="class_roll"
                        placeholder="Class Roll" required="">

                    <label class="label" for="hsc">Please share the subject of your Graduation. <span
                            style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="text" name="graduation_subject"
                        placeholder="Subject of your Graduation" required="">

                    <label class="label" for="hsc">Please share the institution name of your Graduation. <span
                            style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="text" name="graduation_institution"
                        placeholder="Institution Name of your Graduation" required="">

                    <label class="label" for="hsc">Your Mobile Number? <span style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="text" name="mobile_number"
                        placeholder="Mobile Number" required="">

                    <label class="label" for="hsc">Your Current Address? <span style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="text" name="current_address"
                        placeholder="Current Address" required="">

                    <label class="label" for="hsc">Current Position & Organisation <span
                            style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="text" name="current_position"
                        placeholder="Current Position & Organisation" required="">

                    <label class="label" for="hsc">Photo <span style="color:red">*</span></label>
                    <input style="margin-bottom:10px;" class="text" type="file" name="image"
                        placeholder="Class Roll" required="">

                    <div class="wthree-text">
                        <label class="label" class="anim">
                            <input type="checkbox" onchange="onClickHandler(this)" value="sopuse" class="checkbox"
                                name="sopuse">
                            <span>Spouse</span>
                        </label>
                        <div class="clear"> </div>
                    </div>


                    <div class="wthree-text">
                        <label class="label" class="anim">
                            <input type="checkbox" id="box" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="Registration">
                </form>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <img src="{{ asset('asset/aamarpay-scaled.webp') }}" alt="">
            <p> <a href="https://aamarpay.com/" target="_blank"> © 2023 aamarpay </a> | Design by <a
                    href="https://softbd.com/" target="_blank">Soft Tech Innovation
                    Ltd.</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            console.log('hello');
            // var checkedValue = $('.sopuse:checked').val();
            // console.log(checkdValue);


        });

        function onClickHandler(checkbox) {
            if (checkbox.checked) {
                var chkValue = ("True")
                document.getElementById('replace-me').innerText = "Amount 3000 BDT"
            } else {
                var chkValue = ("False")
                document.getElementById('replace-me').innerText = "Amount 2000 BDT"
            }
            //use this value
            console.log(chkValue);
        }
    </script>
</body>

</html>
