@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('postingan.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                @if (Auth::check())
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="id_user">
                                @else
                                    @php
                                        header('location:' . route('login'));
                                    @endphp
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="gambar">Judul:</label>
                                <input type="text" id="judul" name="judul" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="gambar">Hashtag:</label>
                                <input type="text" id="judul" name="hashtag" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="gambar">Gambar:</label>
                                <input type="file" id="gambar" name="gambar" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="isikomen">Isi Komen:</label>
                                <textarea id="isikomen" name="isikomen" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary mt-3">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
