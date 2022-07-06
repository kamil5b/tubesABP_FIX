@extends('layouts.adminpanel')

@section('container_admin')
<h1 align="center">- ADMIN PANEL -</h1>
<br>
<br>
<br>
<br>
<br>
<br>




<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <a href="/admin/destination" class="btn btn-primary" id="center">
            {{ __('Destination') }}
        </a>
    </div>
</div>


<!-- belom kelar -->
<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <a href="/admin/package" class="btn btn-primary" id="center">
            {{ __('Package') }}
        </a>
    </div>
</div>


<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary" id="center">
            {{ __('Booking') }}
        </button>
    </div>
</div>
<!-- sampe sini blm kelar -->









<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
AOS.init({
    duration: 800,
    offset: 150,
});
</script>

@endsection