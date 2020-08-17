@extends ('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Barang</strong>
            <small>{{$item->name}}</small>
        </div>

        <div class="card-body card-block">
            <form action="{{route('products.update', $item->id)}}" method="POST">
            <!-- untuk update data dengan put -->
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="text" name="name" value="{{old('name')?old('name'):$item->name}}" class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="type" class="form-control-label">Tipe Barang</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="text" name="type" value="{{old('type')?old('type'):$item->type}}" class="form-control @error('type') is-invalid @enderror"/>
                    @error('type') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <!-- ckeditor berfungsi membuat format tulisan word di dalam textarea yang meliputi ada bold,italic,underline dam format dari tulisan word lainnya -->
                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi Barang</label>
                    <textarea name="description" class="ckeditor form-control @error('description') is-invalid @enderror">{{old('description')?old('description'):$item->description}}
                    </textarea>
                    @error('description') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="form-control-label">Harga Barang</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="number" name="price" value="{{old('price')?old('price'):$item->price}}" class="form-control @error('price') is-invalid @enderror"/>
                    @error('price') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="quantity" class="form-control-label">Kuantitas Barang</label>
                    <!-- value kenapa old? agar jika error inputannya ga hilang, jadi tetap ada isinya, ga isi dari ulang, makanya ada old nya, mengambil isian yang sebelumnya -->
                    <input type="number" name="quantity" value="{{old('quantity')?old('quantity'):$item->quantity}}" class="form-control @error('quantity') is-invalid @enderror"/>
                    @error('quantity') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="category">Kategori Barang</label>
                    <select name="categories_id" id="category_id" 
                            class="form-control @error('categories_id') is-invalid @enderror">
                        <option value="">Pilih</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="gender">Kategori Gender</label>
                    <select name="genders_id" id="genders_id" 
                            class="form-control @error('genders_id') is-invalid @enderror">
                        <option value="">Pilih</option>
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ ucfirst($gender->name) }}</option>
                        @endforeach
                    </select>
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