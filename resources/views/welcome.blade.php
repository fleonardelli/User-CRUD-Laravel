@component('mail::message')
# Hello {{$user->name}}

Thanks for create an account! 

{{ config('app.name') }}
@endcomponent