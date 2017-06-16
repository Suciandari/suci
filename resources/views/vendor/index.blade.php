@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
          <div class="col-md-12">
             <ul class="breadcrumd">
               <li><a href="{{ url('/home") }}">Dashboard</a></li>
               <li class="active">penulis</li>
             </ul>
             <div class="panel paneh-default">
                <div class="panel-heading">
                <h2 class="panel-title">penulis</h2>
              </div>
              


              <div class="panel-body">
                diisi dengan datatable
                  </div> 
            </div>
       </div>
    </div>
</div> 
@endsection
     