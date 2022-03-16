@extends('layouts.plantillabase0')

@section('contenido')
<br><br>
<br><br>
<section class="vh-100" style="background-color: #ffffff;">
    <div class="container py-3 h-30">
      <div class="row d-flex justify-content-center align-items-center h-80">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <?php if(auth()->user()->role == "Alumno/a"){ ?>
                <img src="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/3888.png" alt="Avatar" class="img-fluid my-5" style="width: 100px;" />
                <?php }else{ ?>
                <img src="https://img.myloview.es/fotomurales/minimalismo-ilustracion-profesor-astronomo-conferencia-grafico-de-estrellas-dibujos-animados-maravilla-descubrimiento-400-142079265.jpg" alt="Avatar" class="img-fluid my-5" style="width: 150px;" />
                <?php } ?>
                <h5>{{ Auth::user()->name }}</h5>
                <p>{{ Auth::user()->surname }}</p>
                <i class="fa fa-user" aria-hidden="true"></i>
                <br><br>
              </div>
              <div class="col-md-8">
                <br><br>
                <div class="card-body p-4">
                  <h6>Información</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Rol</h6>
                      <p class="text-muted">{{ Auth::user()->role }}</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Grupo</h6>
                      <p class="text-muted">
                        ?
                      </p>
                    </div>
                    <div class="col-6 mb-3">
                    <h6>Número de usuario</h6>
                      <p class="text-muted">
                      {{ Auth::user()->id }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection