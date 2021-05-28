@extends('layouts.masters')
@section('content')






    <table id="tableData" class="col-12 col-lg-10 mx-auto mx-0 px-0 ">
        @if($formations->count()>0)

        @foreach($formations as $formation)
<tbody>
  <tr>

    <td>
      <div class="row col-12 px-0 mx-0 text-center" data-aos="fade">
        <div class="col-md-12 mx-0 px-0">
          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
            <div class="mb-4 mb-md-0">
              <div class="job-post-item-header d-block d-md-flex align-items-center">
                <h5 class="mr-3 text-black ">{{ $formation->nom_formation }}</h5>
                <div class="badge-wrap">
                  <span class="bg-warning text-black badge py-2 px-4">{{ $formation->type }}</span>
                </div>
              </div>
              <div class="job-post-item-body d-block d-md-flex">
                <div class=""><span class="fl-bigmug-line-portfolio23"></span> {{ $formation->duree }} &emsp;</div>
                <div><span class="fl-bigmug-line-big104"></span> <span>{{ $formation->prix }}DZA</span></div>
              </div>
            </div>
            <div class="ml-auto">

              <a href="#" class="btn btn-primary py-2">Détail</a>
            </div>
          </div>
        </div>
      </div>
    </td>


  </tr>
</tbody>
 @endforeach
    @else
        <span>aucune formation</span>
    @endif
</table>

@endsection
