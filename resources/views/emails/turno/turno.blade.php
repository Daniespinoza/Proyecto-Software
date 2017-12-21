@component('mail::message')
# Introduction

Atención expositor se ha liberado un turno para asistir a un evento.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
