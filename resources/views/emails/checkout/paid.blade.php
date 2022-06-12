@component('mail::message')
# Your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}
<br>
Transaksi kamu telah di konfirmasi, selamat menikmati benefit dari pelatihan <b>{{$checkout->Camp->title}}</b> .

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent