@extends ('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Email Berlangganan</strong>
            <small>{{$item->id}}</small>
        </div>

        <div class="card-body card-block">
            <form action="{{route('subscribers.update', $item->id)}}" method="POST">
            <!-- untuk update data dengan put -->
            @method('PUT')
            @csrf
            <div class="form-group">
                    <label for="nama_berlangganan" class="form-control-label">Nama Pengunjung</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="text" name="nama_berlangganan" value="{{old('nama_berlangganan')?old('nama_berlangganan'):$item->nama_berlangganan}}" class="form-control @error('nama_berlangganan') is-invalid @enderror"/>
                    @error('nama_berlangganan') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email_berlangganan" class="form-control-label">Email Pengunjung</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="email" name="email_berlangganan" value="{{old('email_berlangganan')?old('email_berlangganan'):$item->email_berlangganan}}" class="form-control @error('email_berlangganan') is-invalid @enderror"/>
                    @error('email_berlangganan') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                    Ubah Email
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection