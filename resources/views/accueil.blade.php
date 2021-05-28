
@extends('layouts.masters')
@section('content')
<!--  debut de la caroussel -->

<div id="carouselFull" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselIndicators" data-slide-to="1"></li>
           <li data-target="#carouselIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img class="d-block nouvelle" src="{{ asset('img/j.jpg') }}" alt="First slide">
               <div class="carousel-caption d-md-block">
                   <h3>Welcome To Styles Bar and Grill</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis neque, suscipit eget dolor quis, accumsan imperdiet elit. Praesent quis mauris</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block nouvelle" src="{{ asset('img/bur.jpg') }}" alt="Second slide">
               <div class="carousel-caption d-md-block">
                   <h3>Best Food and Wine Around</h3>
                   <p>Nullam at elementum felis, at sodales diam. In a lectus nisl. Maecenas sodales commodo sollicitudin. Sed nisi nisl, laoreet eu erat vel, porttitor scelerisque</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block nouvelle" src="{{ asset('img/3.jpg') }}" alt="Third slide">
               <div class="carousel-caption d-md-block">
                   <h3>Award Winning and Friendly Service</h3>
                   <p>Nam scelerisque molestie cursus. Ut scelerisque turpis iaculis erat feugiat, eget tristique risus luctus. Quisque non est dignissim, rhoncus nisi a, fermentum</p>
               </div>
           </div>
       </div>
       <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
   </div>
<!--  fin de la caroussel -->
@endsection
@section('formations')
<h1 class="titre mb-4 pt-5">Nos Formations</h1>
<div class="row col-12  p-0 align-center" >

        @if($formations->count()>0)

        @foreach($formations as $formation)


          <div class=" col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
            <div class="hover hover-4 text-white rounded"><img class="card_img " src="{{ asset('img/'.$formation->photo_formation) }}" alt={{$formation->photo_formation}}>
              <div class="hover-overlay"></div>
              <div class="hover-4-content px-5 py-4">
                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"  ><span class="" class=""style="background: rgba(0,0,0,0.20);" >{{$formation->nom_formation}}<br>{{$formation->prix}}DZA </span></h3>
                 <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>{{$formation->nom_formation}}</li>
                <li>{{$formation->duree}}heure</li>
                <li>{{$formation->type}}</li>
                <li>{{$formation->prix}}DZA</li>
          <li>

          <a href="" type='button' class="btn btn-sm btncard mt-3" data-toggle="tooltip" data-placement="top" title="Vous devez vous connectez pour reserver">Reserver!</a>

            <a href="" class="btn btn-sm btncard mt-3">Reserver!</a>
          </li></ul>
              </div>
            </div>

          </div>

              @endforeach
    @else
        <span>aucune formation</span>
    @endif

      </div>

@endsection
