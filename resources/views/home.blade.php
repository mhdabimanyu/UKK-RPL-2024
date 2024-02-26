@extends('lala.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


    
    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">Selamat Datang di Website Kami</h4>
        <h3 class="display-1">Hai! Halo!</h3>
        <a href="#layanan">
          <button type="button" class="btn btn-danger btn-lg">
            Cek Layanan
          </button>
        </a>
      </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Layanan</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate,
          doloribus.
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
          <span class="lingkaran"><i class="fas fa-code"></i></span>
            <h3 class="mt-3">Programming</h3>
            <p>
               
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
              a!
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
            <h3 class="mt-3">Design</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
              a!
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-network-wired fa-5x"></i
            ></span>
            <h3 class="mt-3">Networking</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
              a!
            </p>
          </div>
        </div>
      </div>
    </div>
   
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="tentang">Tentang</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, ex!
        </p>
        <div class="clearfix pt-5">
          <img
            src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg"
            class="col-md-6 float-md-end mb-3 crop-img"
            width="300"
            height="300"
          />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
          </p>
          <p>11
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Dignissimos laboriosam excepturi exercitationem qui expedita, ex
            temporibus natus necessitatibus accusamus voluptatibus.
          </p>
        </div>
      </div>
    </div>

 
    <!-- Client -->
    <div class="container-fluid client pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          <div class="col">
            <img
              src="https://cdn.iconscout.com/icon/free/png-256/microsoft-28-761688.png"
            />
          </div>
          <div class="col">
            <img
              src="https://cdn3.iconfinder.com/data/icons/glypho-social-and-other-logos/64/logo-facebook-512.png"
            />
          </div>
          <div class="col">
            <img src="data:image/png;base64,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" />
          </div>
          <div class="col">
            <img
              src="https://i.pinimg.com/originals/20/1d/17/201d17590b3a7bc8939ca37e577bbbd8.png"
            />
          </div>
          <div class="col">
            <img
              src="https://www.ictmagazine.nl/wp-content/uploads/2020/10/ibm-720x340-1.png"
            />
          </div>
        </div>
      </div>
    </div>
@endsection
