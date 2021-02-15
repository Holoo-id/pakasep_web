@foreach($rumah as $r)
<tr>
    {{ $r->data()['alamat'] }}
</tr>
@endforeach