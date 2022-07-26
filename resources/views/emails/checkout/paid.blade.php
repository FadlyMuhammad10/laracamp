@component('mail::message')
# Your Transaction has been Confirmed !!!

Hi, {{$checkout->User->name}}
Your transaction has been Confirmed, Now you can enjoy the benefits of <strong>{{ $checkout->Camp->title }}</strong> Camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
