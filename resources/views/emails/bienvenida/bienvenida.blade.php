@component('mail::message')
# Introduction

Bienvenido expositor.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
