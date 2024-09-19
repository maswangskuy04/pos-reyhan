@extends('layout.app')

@section('content')
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-6">
                <label>Dashboard Postingan</label>
            </div>
            <div class="col-auto">
                <a href="{{ route('postingan.create') }}" class="btn btn-primary">Tambah Postingan</a>
            </div>
        </div>
    </div>
@endsection
