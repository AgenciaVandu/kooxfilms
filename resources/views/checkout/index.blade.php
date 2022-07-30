@extends('layouts.layout')
@section('content')
    <div class="container py-5">
        <div class="py-5 mt-5 text-center">
            {{-- <img class="d-block mx-auto mb-4" src="/img/bco-logo.png" height="72"> --}}
            <h2>Checkout form</h2>
        </div>

        <div class="row">
            {{-- <div class="col-lg-6 col-md-12 col-sm-12 pt-2">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <form>
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col gelion-bold">
                            <label for="formGroupExampleInput">{{ __('First name*') }}</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col gelion-bold">
                            <label for="formGroupExampleInput">{{ __('Last name*') }}</label>
                            <input type="text" class="form-control" name="last_name" id="apellidos" required>
                        </div>
                        <div class="col gelion-bold">
                            <label for="phone">{{ __('phone:*') }}</label>
                            <input type="text" id="phone" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group gelion-bold pt-3">
                        <label for="inputAddress">{{ __('Adress:*') }}</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="8mile" name="address"
                            required>
                    </div>
                    <div class="form-group gelion-bold">
                        <label for="inputCity">{{ __('City') }}</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Merida" name="city" required>
                    </div>
                    <div class="form-group gelion-bold">
                        <label for="inputCity">{{ __('Postal Code') }}</label>
                        <input type="text" class="form-control" id="inputState" placeholder="97999" name="postal_code"
                            required>
                    </div>
                </form>
                    <div type="submit" class="btn btn-primary gelion-bold mt-2">{{ __('Return') }}</div>
            </div> --}}
            <div class="col-lg-8 col-md-8 col-sm-8 mx-auto mb-5">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">DYNAMIC CAMP <br>
                                <span>The camps focus on
                                    setting up the CREATOR</span>
                            </small>
                        </div>
                        <span class="text-muted my-auto">${{ number_format($value, 2) }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>${{ number_format($value, 2) }}</strong>
                    </li>
                </ul>
                <script
                    src="https://www.paypal.com/sdk/js?client-id=AZFyAuYNV73PeiMypk9c3YRNTdP9IuX4R0EQVxVMg9fiBF96s-pZxMABY7OnAbJl9tU-vAT92ACmcReW&currency=USD">
                </script>

                <!-- Set up a container element for the button -->
                <div class="block mb-3">
                    <div id="paypal-button-container"></div>
                </div>

                <script>
                    paypal.Buttons({

                        // Sets up the transaction when a payment button is clicked
                        createOrder: function(data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: '{{ $value }}' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                                    }
                                }]
                            });
                        },

                        // Finalize the transaction after payer approval
                        onApprove: function(data, actions) {
                            return actions.order.capture().then(function(orderData) {
                                // Successful capture! For dev/demo purposes:
                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                var transaction = orderData.purchase_units[0].payments.captures[0];
                                if (transaction.status === 'COMPLETED') {

                                    location.href = "/approved/?idTransaction=" + transaction.id +
                                        "&camp={{ $camp }}";
                                    /* alert('Transaction ' + transaction.status + ': ' + transaction.id +
                                    '\n\nSee console for all available details'); */
                                } else {
                                    alert('Transaction failed');
                                }
                                /* alert('Transaction ' + transaction.status + ': ' + transaction.id +
                                    '\n\nSee console for all available details'); */

                                // When ready to go live, remove the alert and show a success message within this page. For example:
                                // var element = document.getElementById('paypal-button-container');
                                // element.innerHTML = '';
                                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                                // Or go to another URL:  actions.redirect('thank_you.html');
                            });
                        }
                    }).render('#paypal-button-container');
                </script>
            </div>
        </div>

        {{-- <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 Koox Films</p>
            <!-- <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul> -->
        </footer> --}}
    </div>
@endsection
</body>

</html>
