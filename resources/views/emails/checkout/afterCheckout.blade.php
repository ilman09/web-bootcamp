@component('mail::message')
# Register Camp: {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Terima kasih telah mendaftar pelatihan <b>{{$checkout->Camp->title}}</b>, silakan lihat petunjuk pembayaran dengan mengklik tombol di bawah ini.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent