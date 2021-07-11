@php
$copyYear = '2021';
$curYear = date('Y')
@endphp
&copy; {{ $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '')}} {{ config('app.name') }}
| Theme by <a href="https://github.com/indrijunanda/RuangAdmin" target="_blank">RuangAdmin</a>
