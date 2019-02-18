@component('mail::message')
# {{ $content['name'] }} send you a message

**Message :**

{{ $content['message'] }}
@endcomponent
