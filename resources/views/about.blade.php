@extends('layouts.app')

@section('title', 'About - MyApp')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <h3>Tentang Saya</h3>
        </div>
    </div>

    <!-- Perjalanan Saya -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="text-center">Perjalanan Saya</h5>
                <p>
                    Pada suatu pagi, aku bersama ayah dan ibu bersiap-siap untuk pergi ke sekolah dan bekerja. Rumahku
                    cukup jauh dari sekolah, jadi kami memutuskan untuk berjalan kaki sambil menikmati udara pagi.
                    Sebenarnya, kami memiliki motor, tetapi motor itu ada di rumah nenek, yang terletak di depan sekolahku.
                </p>
                <p>
                    Kami berangkat dari rumah pukul 5 pagi, menyusuri jalan selangkah demi selangkah, ditemani canda
                    dan tawa yang menjadikan momen itu begitu berharga. Ayah dan ibu menggenggam tanganku erat,
                    sementara aku sesekali mengayunkan kaki dengan riang, menikmati kebersamaan yang langka dan tak akan terulang kembali.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Visi, Misi, dan Tujuan -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="text-center">Visi</h5>
                <p class="text-center">
                    Menjadi pribadi yang inspiratif dan memberikan dampak positif bagi lingkungan sekitar.
                </p>

                <h5 class="text-center mt-4">Misi</h5>
                <ul class="text-center list-unstyled">
                    <li>1. Meningkatkan kualitas diri melalui pendidikan dan pengalaman.</li>
                    <li>2. Berkontribusi dalam kegiatan sosial untuk membantu masyarakat.</li>
                    <li>3. Membangun hubungan yang baik dengan orang-orang di sekitar.</li>
                </ul>

                <h5 class="text-center mt-4">Tujuan</h5>
                <p class="text-center">
                    Tujuan saya adalah untuk terus belajar dan berkembang, serta memberikan yang terbaik dalam setiap
                    hal yang saya lakukan, baik dalam karir maupun kehidupan pribadi.
                </p>
            </div>
        </div>
    </div>

    <!-- Hubungi Kami -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body text-center">
                <h5>Hubungi Saya</h5>
                <p>
                    Jika Anda ingin berkomunikasi lebih lanjut, jangan ragu untuk menghubungi saya.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
@endsection
