@extends('layout')

@section('content')

<script>
var paypal_client_sandbox = '';
var paypal_client_production = 'AUokQj9NzhMwY6QVqtoKXRqrFyK-DaiuAUm9_zhR2IG_g-RjJyvXQbgRocomracDDZ-jHKXeJZAvepWg';
</script>
<div id="serverinfo">
    <div id="paypal-button">
        <h1>Buy WCoins</h1>
        <div style="padding: 20px;margin: 10px;">
        <p>Below are the pricelist of our wcoins. its 1:1 Ratio (Philippine Peso)</p>
        <p>Press X in the game (Safe Zone) to see all of our ingame shop item</p>
        <p>You can purchase wcoins as low as 100 PHP!</p>
        <p>Currently, we are accepting Paypal for donation. More payment method will be available in the future</p>
        </div>
        <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>Price (PHP)</th>
            <th>Wcoins</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach($pricing as $key => $p)
            <tr>
                <td>{{$key}}</td>
                <td>{{$p}}</td>
                <td><a href="#" id="paypal-{{$key}}"></td>
            </tr>
            <script>
                paypal.Button.render({

                    env: 'production', // sandbox | production

                    // PayPal Client IDs - replace with your own
                    // Create a PayPal app: https://developer.paypal.com/developer/applications/create
                    client: {
                        sandbox:    paypal_client_sandbox,
                        production: paypal_client_production
                    },

                    // Show the buyer a 'Pay Now' button in the checkout flow
                    commit: true,

                    // payment() is called when the button is clicked
                    payment: function(data, actions) {

                        // Make a call to the REST api to create the payment
                        return actions.payment.create({
                            payment: {
                                transactions: [
                                    {
                                        amount: { total: '{{$key}}.00', currency: 'PHP' }
                                    }
                                ]
                            }
                        });
                    },

                    // onAuthorize() is called when the buyer approves the payment
                    onAuthorize: function(data, actions) {

                        // Make a call to the REST api to execute the payment
                        return actions.payment.execute().then(function() {

                            $.ajax({
                               type: "POST",
                               data: { callback: "1", _token: '{{csrf_token()}}' },
                               url: '{{ url('/') }}/account/process-donate',
                               success: function(data){
                                    console.log(data);
                               }
                             });

                            window.alert('Payment Complete!');
                        });
                    }

                }, '#paypal-{{$key}}');
                </script>
            @endforeach
        </tbody>
      </table>	

     </div>
 </div>


@stop