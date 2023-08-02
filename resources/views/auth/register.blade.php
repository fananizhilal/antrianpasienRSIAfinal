@extends('auth.layouts')

@section('content')

<section id="hero"  class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


          <div class="card mb-3">
            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Buat Akun Baru</h5>
              </div>

              <form class="row g-3 needs-validation" action="{{ route('register') }}" method="post" novalidate>
                @csrf

                <div class="col-12">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="col-12">
                  <label for="no_hp" class="form-label">Nomor Handphone</label>
                  <input type="string" name="no_hp" class="form-control" id="no_hp" required>
                    @if ($errors->has('no_hp'))
                        <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                    @endif
                </div>

                <div class="col-12">
                  <label for="no_ktp" class="form-label">NIK</label>
                  <input type="string" name="no_ktp" class="form-control" id="no_ktp" required>
                    @if ($errors->has('no_ktp'))
                        <span class="text-danger">{{ $errors->first('no_ktp') }}</span>
                    @endif
                </div>

                <div class="col-12">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                      @error('password_confirmation')
                          <span class="invalid-feedback" role="alert">
                              <p>{{ $message }}</p>
                          </span>
                      @enderror
                  </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100 mb-2" type="submit">Daftar</button>
                  <a class="btn btn-danger w-100" href="/login" role="button">Masuk</a>
                </div>
              </form>

            </div>
          </div>


        </div>
      </div>
    </div>

  </section>
    
@endsection