<strong>{{ $data->judul }}</strong>
<br>
{{ $data->isi }}

<br>
<br>
<br>
 
created at {{ date_format(date_create($data->created_at),
	"D, d M Y H:i:s") }}
<br>
by {{ App\User::find($data->idpengguna)['email'] }}