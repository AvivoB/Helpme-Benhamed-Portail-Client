@extends('layouts.app')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Des solutions pour vous faciliter la vie</h1>
          <h2>Nos équipes vous fournissent tout l'assistance dont vous avez besoin</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Acheter un abonnement</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('Arsha/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('Arsha/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('Arsha/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('Arsha/img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('Arsha/img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('Arsha/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('Arsha/img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos services</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Aide à domicile</a></h4>
              <p>Nos intervenants pour vous disponible selon vos choix</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Service d'aide administratif</a></h4>
              <p>Confiez la gestion de vos dossiers a nos intervenants</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Service de transport</a></h4>
              <p>Déplacez vous rapidement et simplement grace a nos chauffeur et transporteurs</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Gestion facile</a></h4>
              <p>Confiez nous la gestion de votre temps pour l'optimiser</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <div class="row">
                <div class="section-title">
                  <h2>Inscription</h2>
                </div>
                <div class="col-4">
                  <h4><sup>$</sup>550<span>par mois</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Heures illimité</li>
                    <li><i class="bx bx-check"></i> Transport illimité</li>
                    <li><i class="bx bx-check"></i> Gestion du temps</li>
                    <li><i class="bx bx-check"></i> Sans engagement</li>
                    <li><i class="bx bx-check"></i> Aide à domicile</li>
                  </ul>
                </div>
                <div class="col">
                  <form 
                  action="{{ route('stripe.post') }}"
                  method="post"
                  class="require-validation"
                  data-cc-on-file="false"
                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                  id="payment-form"
                  class="form">
                  @csrf
                  @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert">×</a>
                        <p>{{ Session::get('success') }}</p>
                     </div>
                  @endif
                    <h2>1. Paiement par carte bancaire</h2>
                    <div class='form-row row'>
                      <div class='col-12 form-group required'>
                         <label class='control-label'>Nom sur la carte</label> 
                         <input class='form-control' placeholder="John Doe" type='text'>
                      </div>
                      <div class='col-12 form-group required'>
                         <label class='control-label '>Numéro de carte</label> 
                         <input class='form-control card-number' placeholder="4242 4242 4242 4242" size='4' type='text'>
                      </div>
                      <div class='mt-3 col-12 form-group cvc required'>
                         <label class='control-label'>CVC</label> <input autocomplete='off'
                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                            type='text'>
                      </div>
                      <div class='mt-3 col-12 form-group expiration required'>
                         <label class='control-label'>Mois d'expiration</label> <input
                            class='form-control card-expiry-month' placeholder='MM' size='2'
                            type='text'>
                      </div>
                      <div class='mt-3 col-12 form-group expiration required'>
                         <label class='control-label'>Année d'expriration</label> <input
                            class='form-control card-expiry-year' placeholder='AAAA' size='4'
                            type='text'>
                      </div>

                    </div>
                    <div class='form-row row'>
                    <div class='col-md-12 error form-group hide'></div>
                    </div>

                   <h2 class="mt-5">2. Créez votre compte</h2>
                   <div class='form-row row'>
                    <div class='col-12 form-group required'>
                       <label class='control-label'>Adresse E-mail</label> 
                       <input class='form-control' type='text' name="email">
                    </div>
                    <div class='col-12 form-group required'>
                       <label class='control-label'>Mot de passe</label> 
                       <input class='form-control' type='password' name="password">
                    </div>
                    </div>
                    

                    <div class="mt-3">
                      <button class="btn" type="submit">Payer et créer mon compte</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <div class="row">
                <div class="section-title">
                  <h2>Connexion</h2>
                </div>
                <div class="col">
                  <form  action="{{ route('login') }}" method="post" class="form">
                  @csrf
                   <div class='form-row row'>
                    <div class='col-12 form-group required'>
                       <label class='control-label'>Adresse E-mail</label> 
                       <input class='form-control' type='text' name="email">
                    </div>
                    <div class='col-12 form-group required'>
                       <label class='control-label'>Mot de passe</label> 
                       <input class='form-control' type='password' name="password">
                    </div>
                    </div>
                    

                    <div class="mt-3">
                      <button class="btn" type="submit">Se connecter</button>
                    </div>
                  </form>
                </div>
                </div>
              </div>
          </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

@endsection
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
      $(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .html("<div class='alert-danger alert '> Erreur, merci de vérfier les information de paiement </div>");
                console.log(response.error)

        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
   </script>
