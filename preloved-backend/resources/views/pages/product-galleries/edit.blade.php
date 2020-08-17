@extends ('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Gambar</strong>
            <small>{{$item->name}}</small>
        </div>

        <div class="card-body card-block">
            <form action="{{route('product-galleries.update', $item->id)}}" method="POST">
            <!-- untuk update data dengan put -->
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <select name="products_id"
                            class = "form-control @error('products_id') is-invalid @enderror">
                        <!-- looping semua si produk nya yang kalo di pilih, diambil idnya, tapi yang dimunculin namanya-->
                        @foreach ($products as $product)
                            <option value="{{ old('name')?old('name'):$product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('products_id') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Barang</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="file" name="photo" value="{{old('photo')?old('photo'):$item->photo}}" class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                    Ubah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection