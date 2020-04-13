@extends('layouts.app')
@section('content')
    <div class="site-blocks-cover main_cover" data-aos="fade">
        <div class="layer">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto order-md-1 align-self-start">
              <div class="site-block-cover-content">
              <h1 class="main-title">DIN DIGITALE <br> LÆRINGSPLATTFORM</h1>
              <h2 class="mt-5"><span class="price-title">525,- </span> <span class="sub-title">per fag/mnd</span></h2>
              <a href="#" class="btn btn-primary mt-5">Se fagtilbudet her</a>
              </div>
            </div>
            <div class="col-md-6 order-1 align-self-end">
            </div>
          </div>
      </div>
    </div>
      <div class="site-section gray" data-aos="fade">
        <div class="container">
          <div class="title-section">
            <h2 class="text-uppercase"><span>HVEM ER VI</span></h2>
          </div>
          <div class="row align-items-stretch">
            <div class="col-lg-5">
                <p class="mt-3 mb-3">
                    KS er din nye digitale læringsplattform. Statistikken i dag viser at det kun er 37 % av elevene som lærer av å sitte på skolebenken. Hos KS får du akkurat den hjelpen som trengs for å lykkes; nettundervisning med erfarne og kunnskapsrike studenter.
                </p>
                <p class="mt-3">
Den digitale leksehjelpen foregår med fremvisninger av ulike områder av pensumet, i tillegg til hjelp med eksamensforberedelser. Pensumet blir lært bort av fagdyktige studenter via videosnutter, der faget blir forklart så enkelt som mulig. Dette gjør det enklere for dere å oppnå karakterene dere ønsker på skolen. Bli medlem av KS Privatist i dag.
                </p>
            </div>
            <div class="col-lg-6 offset-md-1 p3">
                <video controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
                  </video>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section" data-aos="fade">
        <div class="container">
          <div class="row">
            <div class="title-section mb-5 col-12">
              <h2 class="text-uppercase">SLIK FUNGERER DET</h2>
            </div>
          </div>
          <div class="row mb-5 mt-5">
            <div class="col-md-12">
                <ol class="ProgressBar mb-5">
                    <li class="ProgressBar-step">
                      <svg class="ProgressBar-icon"><use xlink:href="#checkmark-bold"/></svg>
                      <span class="ProgressBar-stepLabel">Kjøp fag eller <br>fagpakker</span>
                    </li>
                    <li class="ProgressBar-step">
                      <svg class="ProgressBar-icon"><use xlink:href="#checkmark-bold"/></svg>
                      <span class="ProgressBar-stepLabel">Se pensumsvideoer</span>
                    </li>
                    <li class="ProgressBar-step">
                      <svg class="ProgressBar-icon"><use xlink:href="#checkmark-bold"/></svg>
                      <span class="ProgressBar-stepLabel">Gjør oppgaver</span>
                    </li>
                    <li class="ProgressBar-step">
                      <svg class="ProgressBar-icon"><use xlink:href="#checkmark-bold"/></svg>
                      <span class="ProgressBar-stepLabel">Repeter</span>
                    </li>
                    <li class="ProgressBar-step">
                        <svg class="ProgressBar-icon"><use xlink:href="#checkmark-bold"/></svg>
                        <span class="ProgressBar-stepLabel">Yt ditt beste på <br>eksamen</span>
                      </li>
                  </ol>

                  </div>
            </div>
            <div class="col-lg-12 mb-4 text-center">
                <video controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
                  </video>
            </div>

            <div class="row produkter">
                <div class="col-lg-1 col-md-1">
                </div>
                <div class="col-lg-4 col-md-4">

            <div class="card">
                <h5 class="card-header">ENKELTFAG</h5>
                <div class="card-body">
                    <p class="card-text">Du har mulighet til å melde deg inn i enkeltfag, der du så får oversikt over pensumsvideoer basert på de valgte fagene.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Se fagene her</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4">

                <div class="card">
                    <h5 class="card-header">FAGPAKKER</h5>
                    <div class="card-body">
                        <p class="card-text">I tillegg eller i stedet for å velge enkeltfag, kan du også velge ulike pakker som inneholder konkrete fag innenfor ulike studieretninger. For eksempel ingeniørpakke eller medisinpakke.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Se pakene her</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-1 col-md-1">
                </div>
        </div>




          </div>
        </div>
      </div>
      <div class="site-section gray" data-aos="fade">
        <div class="container">
          <div class="title-section">
            <h2 class="text-uppercase"><span>VEILEDNING FRA DYKTIGE STUDENTER</span></h2>
          </div>
          <div class="row align-items-stretch">
            <div class="col-lg-5">
                <p class="mt-3 mb-3">
                    Hos oss har du også mulighet til å få veiledning direkte fra våre studenter via videosamtaler. Dersom du har noe du lurer på og trenger utdypende forklaring til utenom pensumsvideoene, kan du stille spørsmål og få hjelp der og da.
                </p>
                <a href="#" class="btn btn-primary mt-5">Les mer</a>
            </div>

          </div>
        </div>
      </div>
@endsection
