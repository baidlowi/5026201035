@extends('layout.happy')
@section('title', 'Data keyboard')
@section('judulhalaman', 'DATA keyboard')

@section('konten')

	<a href="/keyboard/tambah"> + Tambah keyboard Baru</a>

	<br/>
	<br/>
    <div class="container align-center" >
        <p>Cari Data keyboard :</p>
        <form action="/keyboard/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari keyboard .." value="{{ old('cari') }}">
            <input class="form-control btn-warning" type="submit" value="CARI">
        </form>
    </div>
	<table border="1">
		<tr>
            <th>No</th>
			<th>Merk keyboard</th>
			<th>Stock keyboard</th>
            <th>Tersedia</th>

		</tr>
		@foreach($keyboard as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->merkkeyboard }}</td>
			<td>{{ $p->stockkeyboard }}</td>
			<td>{{ $p->tersedia }}</td>

			<td>
				<a href="/keyboard/detail/{{ $p->kodekeyboard  }}" class="btn btn-default btn-sm" role="button">View Detail</a>
                <a href="/keyboard/edit/{{ $p->kodekeyboard  }}" class="btn btn-default btn-sm" role="button">Edit</a>
				<a href="/keyboard/hapus/{{ $p->kodekeyboard  }}" class="btn btn-default btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $keyboard->links()  }}

    @endsection
