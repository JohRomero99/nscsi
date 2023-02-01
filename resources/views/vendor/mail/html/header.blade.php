<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'NSC')
<img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="85" alt="NSC Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
