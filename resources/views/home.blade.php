@extends('layouts.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Bonjour {{ Auth::user()->name }}, bienvenue sur votre espace client</h1>
          <h2>Une gestion facile et innovante</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">7
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="btn-get-started">Se déconnecter</a>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        @if (Session::has('success'))
        <div class="alert alert-success text-center">
          <p>{{ Session::get('success') }}</p>
        </div>
        @endif

        <div class="section-title">
          <h2>Mon compte</h2>
          <p>Gérez votre compte ici</p>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-center">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Votre nom</label>
                  <input type="text" name="email" class="form-control" id="email" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Votre mot de passe</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>
              </div>
              <div class="text-center"><button type="submit">Mettre à jour mes informations</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection
