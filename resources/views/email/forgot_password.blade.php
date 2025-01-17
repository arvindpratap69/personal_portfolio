@component('mail::message')
# Hello {{ $user->name }}

Your new login password is:  
**{{ $password_random }}**

Thank You,  
{{ config('app.name') }}
@endcomponent