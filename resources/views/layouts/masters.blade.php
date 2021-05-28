@include('elements.head' )
   @include('elements.header' )

   <div id = "main" class="listformation"  >
           @yield('content' )
   </div>
   <section class="row">
           @yield('formations')
   </section>


   @include('elements.footer' )
