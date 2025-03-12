@extends('layouts.app')

@section('title', 'About - MyApp')

@section ('content')
<div class="card">
    <div class="card-header">
        <center>Tentang Saya</center>
    </div>
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
    <div class="mb-5">
        <h5 class="text-center">Hubungi Saya</h5>
        <p class="text-center">
            
        </p>
        <div class="text-center">
            <a href="{{ route('contact')}}" class="btn btn-primary btn-lg">Hubungi Kami</a>
        </div>
    </div>
</div>
@endsection