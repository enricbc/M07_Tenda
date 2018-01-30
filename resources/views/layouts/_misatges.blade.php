@if (session()->has('misatge'))
  <div class="alert alert-success">
    {{session()->get('misatge')}}
  </div>
@endif
