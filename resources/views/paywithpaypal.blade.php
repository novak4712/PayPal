<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success');?>
    @endif

    @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                <p>{!! $message !!}</p>
            </div>
        <?php Session::forget('error');?>
    @endif
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
                        {{ csrf_field() }}
                        <h2>Оплата через PayPal</h2>
                        <p>Тестовая PayPal форма </p>
                        <div class="form-group">
                            <label for="amount">введите сумму</label>
                            <input type="text" class="form-control" id="amount" aria-describedby="emailHelp" name="amount">
                        </div>
                        <button type="submit" class="btn btn-primary">Оплатить</button>
                    </form>
                </div>
            </div>
        </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>