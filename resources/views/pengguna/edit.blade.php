@extends('templates.home')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pengguna.update', $pengguna->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Input placeholder" value="{{ $pengguna->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Input placeholder" value="{{ $pengguna->title }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Input placeholder" value="{{ $pengguna->email }}">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
@endsection