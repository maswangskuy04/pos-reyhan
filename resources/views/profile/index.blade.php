@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Detail Profil</h5>
                        <div class="text-center mb-3">
                            @if (Auth::user()->foto_profil == '')
                                <img src="https://via.placeholder.com/150" alt="Foto Profil" class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                                <img src="{{ asset('storage/' . Auth::user()->foto_profil) }}" alt="Foto Profil" class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                            @endif
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Nama Lengkap:</strong> {{ Auth::user()->nama_lengkap }}
                            </li>
                            <li class="list-group-item">
                                <strong>Email:</strong> {{ Auth::user()->email }}
                            </li>
                            <li class="list-group-item">
                                <strong>Member Sejak:</strong> {{ Auth::user()->created_at->format('d-m-Y') }}
                            </li>
                            <li class="list-group-item">
                                <strong>Bio:</strong>
                                @if (Auth::user()->bio == '')
                                    <i>Orang ini sangat malas mengisi bio.</i>
                                @else
                                    {{ Auth::user()->bio }}
                                @endif
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between mt-3 float-end">
                            <a href="{{ route('profile.edit', Auth::user()->id) }}" class="btn btn-secondary btn-sm">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-3">Postingan</h5>
                            {{-- <a href="{{ route('profile.create') }}" class="btn btn-primary btn-sm">Tambah Postingan</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
