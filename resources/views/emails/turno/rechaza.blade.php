@component('mail::message')
# Introduction

El expositor ha rechazado la asistencia al evento.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
