<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5 col-6 mx-auto pt-5">

        <form method="post" action="/payment">
            @csrf
            <div class="form-group mt-2">
                <label for="name">Enter email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your registered email" required>
            </div>
            <div class="form-group mt-2">
                <select name="event"  class="form-control " style="color: #333;">
                    <option value="Choose Your Branch" style="color: #333;">Choose  event</option>
                    <option value="event 1" style="color: #333;">event 1</option>
                    <option value="event 2" style="color: #333;"> event 2</option>
                    <option value="event 3" style="color: #333;">event 3</option>
                    <option value="event 4" style="color: #333;">event 4</option>
                    <option value="event 5" style="color: #333;">event 5</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-2">Submit</button>
        </form>
    </div>
    @if(Session::has('data'))
        <div class="container tex-center mx-auto">
            <button id="rzp-button1">Pay</button>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                var options = {
                    "key": "{{env('RAZORPAY_KEY')}}",
                    "amount": "{{Session::get('data.amount')}}",
                    "currency": "INR",
                    "name": "Acme Corp",
                    "description": "Test Transaction",
                    "image": "images/pixel-logo.svg",
                    "order_id": "{{Session::get('data.order_id')}}",
                    "remember_customer" : "false",
                    "callback_url": "/status",
                    "prefill": {
                        "name": "{{Session::get('data.name')}}",
                        "email": "{{Session::get('data.email')}}",
                        "contact": "{{Session::get('data.contact')}}"
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                var rzp1 = new Razorpay(options);
                document.getElementById('rzp-button1').onclick = function(e){
                    rzp1.open();
                    e.preventDefault();
                }
            </script>
        </div>
    @endif
</body>
</html>
