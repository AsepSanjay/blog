<strong>{{ $data->judul }}</strong>
<br>
{{ $data->isi }}

<br>
<br>
<br>

{{ date_format(date_create($data->created_at),
	"D, d M Y H:is") }}
<br>
by {{ App\User::find($data->idpengguna)['email'] }}