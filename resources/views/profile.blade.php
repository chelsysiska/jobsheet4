@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Profile Pengguna</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('image/' .$profile['profile_picture']) }}" alt="Profile Picture" class="rounded-circle mb-3 animated-profile" width="150">
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $profile['name'] }}</h3>
                            <p>Email: <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></p>
                            <p><em>"{{ $profile['bio'] }}"</em></p>
                        </div>
                    </div>
                    
                    @if(!empty($profile['skills']))
                    <h5 class="mt-4">Skills:</h5>
                    <div class="d-flex flex-wrap">
                        @foreach($profile['skills'] as $skill)
                        <span class="badge bg-primary m-1 p-2">{{ $skill }}</span>
                        @endforeach
                    </div>
                    @endif
                    
                    
                    @if(!empty($profile['hobbies']))
                    <h5 class="mt-4">Hobi:</h5>
                    <p>{{ implode(', ', $profile['hobbies']) }}</p>
                    @endif
                    
                    @if(!empty($profile['social_media']))
                    <h5 class="mt-4">Sosial Media:</h5>
                    <div class="d-flex flex-wrap">
                        @foreach($profile['social_media'] as $platform => $link)
                        <a href="{{ $link }}" target="_blank" class="btn btn-sm btn-dark m-1">{{ $platform }}</a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .animated-profile {
    transition: transform 0.5s ease-in-out;
    border: 5px solid white; /* Tambahkan border */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Tambahkan efek bayangan */
}
.animated-profile:hover {
    transform: scale(1.1) rotate(5deg);
}

.card-header {
    background: linear-gradient(135deg, #ff758c, #ff7eb3);
    color: white;
    font-weight: bold;
}

.card-body {
    background-color: #fff5f8;
    border-radius: 10px;
    padding: 20px;
}

.badge {
    background-color:rgb(117, 106, 192) !important; /* Warna ungu pastel */
    color: white !important;
    font-size: 14px !important;
    padding: 8px 12px !important;
    border-radius: 20px !important;
}
.btn-dark {
    background-color: #ffb7b2;
    border: none;
}

.btn-dark:hover {
    background-color: #ff7eb3;
}


</style>
@endsection
