@extends('templates.home')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pengguna.index') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Input placeholder">
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Input placeholder">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Input placeholder">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
@endsection