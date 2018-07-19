@component('mail::message')
# Order Shipped

Your order has been shipped!

@component('mail::button', ['url' => 'http://www.google.com'])
    View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@component('mail::footer')
This is the panel content.
@endcomponent
@endcomponent