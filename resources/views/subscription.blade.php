<x-app-layout>

<style>
    .StripeElement {
        background-color: white;
        padding: 8px 12px;
        border-radius: 4px;
        border: 1px solid transparent;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
        border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
@if(count($errors) > 0)
<div class=" text-red-700 text-xl underline">
    @foreach($errors->all() as $error)
    {{ $error }} 
    @endforeach
</div>
@endif
<div class="flex items-center justify-center p-10">
  <div class="w-full max-w-md border bg-white p-5 rounded-lg" >
  <span><b>Your Subscription is - </b> {{ strtoupper($plan->name) }}</span> <span style="float: right"> ${{ $plan->price/100 }}</span> <br>
    <form class="flex flex-wrap gap-3 w-full p-5" action="{{ route('process') }}" method="POST" id="subscribe-form">
        @csrf
        <input type="hidden" name="plan_id" value="{{ $plan->plan_id }}">
        <label class="relative w-full flex flex-col">
            <span class="font-bold mb-3">Card holder name</span>
            <input class="rounded-md peer pl-2 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" type="text" name="card-holder-name" id="card-holder-name" placeholder="Card holder name" />
        </label>
        <label class="relative w-full flex flex-col">
            <span class="font-bold mb-3">Amount</span>
            <input class="rounded-md peer pl-2 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" value="{{ $plan->price/100 }}" type="number" id="amount" name="amount" placeholder="$25.00" />
        </label>
        <label class="relative w-full flex flex-col">
            <span class="font-bold mb-3">Card number</span>
            <div id="card-element" class="form-control">
        </label>
        </div>
            <!-- <div class="form-group ml-60">
                <button  id="card-button" data-secret="{{ $intent->client_secret }}" class="button bg-green-400 py-2 px-4 rounded-xl mt-4">SUBMIT</button>
            </div> -->
            <button
                id="card-button" data-secret="{{ $intent->client_secret }}" 
                class="hover:shadow-form rounded-md bg-blue-500 py-3 px-8 mt-6 text-center text-base font-semibold text-white outline-none">
            Submit
            </button>
        </form>
    </div>   
</div>   

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    var card = elements.create('card', {hidePostalCode: true,
        style: style});
    card.mount('#card-element');
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    cardButton.addEventListener('click', async (e) => {
        e.preventDefault();
        console.log("attempting");
        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: { name: cardHolderName.value }
                }
            }
            );
        if (error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;
        } else {
            paymentMethodHandler(setupIntent.payment_method);
        }
    });
    function paymentMethodHandler(payment_method) {
        var form = document.getElementById('subscribe-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'payment_method');
        hiddenInput.setAttribute('value', payment_method);
        form.appendChild(hiddenInput);
        form.submit();
    }
</script>

</x-app-layout>