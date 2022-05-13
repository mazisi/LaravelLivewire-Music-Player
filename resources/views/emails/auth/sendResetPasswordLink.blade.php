@component('mail::message')
# ZimRhumba Reset Password.

Please click the button below to reset your password.

@component('mail::button', ['url' => url('new-password?user='.$token )])
Reset Password
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
