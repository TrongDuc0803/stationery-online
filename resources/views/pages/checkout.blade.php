@extends('layouts.master')
@section('title', 'Checkout')
@section('head')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('content')

<main class="checkout-page">
    <div class="container">
        <div class="checkout-form">
            <form action="" id="payment-form" method="post">
                @csrf
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="@error('name') has-error @enderror" placeholder="Enter your name" value="{{ old('name') ? old('name') : auth()->user()->name }}">
                    @error('name')
                    <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="@error('email') has-error @enderror" placeholder="Enter your email" value="{{ old('email') ? old('email') : auth()->user()->email }}">
                    @error('email')
                    <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" name="phone" class="@error('phone') has-error @enderror" placeholder="Enter your phone" value="{{ old('phone') ? old('phone') : auth()->user()->phone }}">
                    @error('phone')
                    <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="@error('address') has-error @enderror" placeholder="Enter your address" value="{{ old('address') ? old('address') : auth()->user()->address }}">
                    @error('address')
                    <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- <div class="field">
                    <label for="card-element">Credit or debit card</label>
                    <div id="card-element"></div>
                    <div id="card-errors" role="alert"></div>
                </div>

                Input ẩn để lưu Payment Method ID -->
                <!-- <input type="hidden" id="payment_method_id" name="payment_method_id" value="">

                <button id="submit-button">Submit Payments</button> -->
            </form>
        </div>
    </div>
</main>

<!-- <script>
    const stripe = Stripe("{{ env('STRIPE_PUBLIC_KEY') }}");
    const elements = stripe.elements();
    const style = {
        base: {
            color: "#32325d",
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "16px",
            "::placeholder": {
                color: "#aab7c4"
            }
        },
        invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
        }
    };
    const cardElement = elements.create('card', {style: style});
    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
            billing_details: {
                name: document.getElementById('name').value
            },
        }).then(stripePaymentMethodHandler);
    });

    function stripePaymentMethodHandler(result) {
        if (result.error) {
            document.getElementById('card-errors').textContent = result.error.message;
        } else {
            document.getElementById('payment_method_id').value = result.paymentMethod.id;
            form.submit();
        }
    }
</script> -->

@endsection
