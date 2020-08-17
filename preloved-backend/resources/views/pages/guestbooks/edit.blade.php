@extends ('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Daftar Pengunjung</strong>
            <small>{{$item->id}}</small>
        </div>

        <div class="card-body card-block">
            <form action="{{route('guestbooks.update', $item->id)}}" method="POST">
            <!-- untuk update data dengan put -->
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="nama_tamu" class="form-control-label">Nama Pengunjung</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="text" name="nama_tamu" value="{{old('nama_tamu')?old('nama_tamu'):$item->nama_tamu}}" class="form-control @error('nama_tamu') is-invalid @enderror"/>
                    @error('nama_tamu') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="email_tamu" class="form-control-label">Email Pengunjung</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="email" name="email_tamu" value="{{old('email_tamu')?old('email_tamu'):$item->email_tamu}}" class="form-control @error('email_tamu') is-invalid @enderror"/>
                    @error('email_tamu') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="asal_tamu" class="form-control-label">Asal Pengunjung</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="text" name="asal_tamu" value="{{old('asal_tamu')?old('asal_tamu'):$item->asal_tamu}}" class="form-control @error('asal_tamu') is-invalid @enderror"/>
                    @error('asal_tamu') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="nohp_tamu" class="form-control-label">No HP Pengunjung</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="text" name="nohp_tamu" value="{{old('nohp_tamu')?old('nohp_tamu'):$item->nohp_tamu}}" class="form-control @error('nohp_tamu') is-invalid @enderror"/>
                    @error('nohp_tamu') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <!-- ckeditor berfungsi membuat format tulisan word di dalam textarea yang meliputi ada bold,italic,underline dam format dari tulisan word lainnya -->
                <div class="form-group">
                    <label for="komentar_tamu" class="form-control-label">Kritik dan Saran</label>
                    <textarea name="komentar_tamu" class="ckeditor form-control @error('komentar_tamu') is-invalid @enderror">{{old('komentar_tamu')?old('komentar_tamu'):$item->komentar_tamu}}
                    </textarea>
                    @error('komentar_tamu') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="nilai_tamu" class="form-control-label">Penilaian Pengunjung</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="text" name="nilai_tamu" value="{{old('nilai_tamu')?old('nilai_tamu'):$item->nilai_tamu}}" class="form-control @error('nilai_tamu') is-invalid @enderror"/>
                    @error('nilai_tamu') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                    Ubah Daftar Pengunjung
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection