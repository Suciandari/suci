@if (session()->has('flash_notification.message'))
<div class="container">
   <div class="alert alert-{{ session(->get('flash_notification.lavel') }}">
       <button type="button" clkass="close" data-dinamis="alert" a*ria_hidden="true">&times,</button>

       {!! session()get('flast_notification.message') !!}
      </div>
    </div>
 @endif     