@component('mail::message')
# Introduction

El expositor ha confirmado la asistencia al evento.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
