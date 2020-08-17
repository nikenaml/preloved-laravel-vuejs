@extends('layouts.default')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Kategori Barang</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('categories.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Kategori Barang</label>
            <input  type="text"
                    name="name" 
                    value="{{ old('name') }}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="description" class="form-control-label">Deskripsi Barang</label>
            <input  type="text"
                    name="description" 
                    value="{{ old('description') }}" 
                    class="form-control @error('description') is-invalid @enderror"/>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Kategori Barang
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection