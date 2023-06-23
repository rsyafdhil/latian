@extends('templates.home')

@section('content')

<div class="col-lg-8">
    <div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
        <thead>
            <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Email</th>
            <th class="w-1"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penggunas as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->title }}</td>
                <td>{{ $p->email }}</td>
                <td><a class="btn btn-primary btn-sm" href="{{ route('pengguna.edit', $p->id) }}">Edit</a>
                <form action="{{ route('pengguna.destroy', $p) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" onclick="return confirm('are you sure want to delete this data?')">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>

@endsection