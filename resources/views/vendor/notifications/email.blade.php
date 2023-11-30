@component('mail::message', ['header_url' => 'https://heiwork.com/', 'header_title' => 'Heiwork'])
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hola!') {{config('app.userName')}}
@endif
@endif

{{--Solo para correos de completa perfil donde exite: (app.imageProfile) & (app.profilePorcent)--}}
@php
$imageProfile = config('app.imageProfile');
$profilePorcent = config('app.profilePorcent');
$imagePorcent = '<table>
  <tr>
    <td><img src="https://heiwork.com/images/users/'.$imageProfile.'" style="width:60px;border-radius: 100%;" /></td>
    <td><span style="padding: 10px;font-size: 16px;font-weight:bold;color:#55c12e;">Perfil Completado: '.$profilePorcent.'%</span></td>
  </tr>
</table>';
@endphp
@if($imageProfile)
{!! $imagePorcent !!}
@endif
{{-- End correo completa perfil --}}


{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

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
{{ $actionText }}
@endcomponent
@endisset


{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Saludos'),<br>
{{ config('app.name')}}.com
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si tiene problemas para hacer clic en el \":actionText\" , copie y pegue la URL a continuación\n".
    'en su navegador web: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endslot
@endisset
@endcomponent
