@component('mail::message')
# Introduction
The body of your message.

- php
- laravel
- education

@component('mail::button', ['url' => 'https://laracast.com'])
Laravel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
