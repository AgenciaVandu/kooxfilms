@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/img/bco-logo.png" height="72">
            <h2>Checkout form</h2>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-12 mb-4">
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
                        <span class="text-muted my-auto">${{ number_format($value,2) }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>${{ number_format($value,2) }}</strong>
                    </li>
                </ul>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="col-12 text-center">
                    <script src="https://www.paypal.com/sdk/js?client-id=AZFyAuYNV73PeiMypk9c3YRNTdP9IuX4R0EQVxVMg9fiBF96s-pZxMABY7OnAbJl9tU-vAT92ACmcReW&currency=USD"></script>

                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>

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
                                        location.href ="{{ route('index') }}";
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
        </section>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 Koox Films</p>
            <!-- <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul> -->
        </footer>
    </div>
@endsection
</body>

</html>
