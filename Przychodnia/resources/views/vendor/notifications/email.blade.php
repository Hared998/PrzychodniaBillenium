@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('No sieema mordeczko!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ 'ojojojoj aaa... aaa kogo my tu mamy?' }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{'Kliknij tutej... bedzie działać'}}
@endcomponent
@endisset

{{-- Outro Lines --}}

{{ 'Miłego korzystania z serwisu' }}



{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Pozdróweczki, CodeBuster')<br>
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Jeśli masz problem z nacisnięciem przycisku \":actionText\" skopiuj adres URL następnie wklej go w swojej przeglądarce:\n",
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
