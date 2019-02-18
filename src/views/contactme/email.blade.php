@component('mail::message')
# {{ $content['name'] }} send you a message

**Email :**

{{ $content['email'] }}

**Message :**

{{ $content['message'] }}
@endcomponent
