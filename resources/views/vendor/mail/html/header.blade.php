@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://ton-site.com/images/logo-kenko.png" alt="Kenko" height="60">
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
