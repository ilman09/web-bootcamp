@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>
Welcome to KawanKarir, Akun anda telah berhasil dibuat. Sekarang Anda dapat memilih pelatihan terbaik!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
