@extends('layouts.default')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Ubah Kategori Gender</strong>
        <small>{{ $item->name }}</small>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('genders.update', $item->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Kategori Gender</label>
            <input  type="text"
                    name="name" 
                    value="{{ old('name') ? old('name') : $item->name }}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="description" class="form-control-label">Deskripsi Gender</label>
            <input  type="text"
                    name="description" 
                    value= "{{ old('description') ? old('description') : $item->description }}" 
                    class="form-control @error('description') is-invalid @enderror"/>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Ubah Kategori Gender
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection