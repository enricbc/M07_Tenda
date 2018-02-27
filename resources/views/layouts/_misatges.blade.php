@if (session()->has('misatge'))
  <div class="my-0 alert alert-info alert-dismissible fade show" role="alert">
  {{session()->get('misatge')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
