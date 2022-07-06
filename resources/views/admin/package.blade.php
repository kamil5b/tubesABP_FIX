@extends('layouts.adminpanel')


@section('container_admin')

<h1 align="center"> View Package On</h1>
<br>
<br>


<section>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/admin/destination" class="btn btn-primary" id="center">
                {{ __('Bali') }}
            </a>
        </div>
    </div>


    <!-- belom kelar -->
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/price" class="btn btn-primary" id="center">
                {{ __('Labuan Bajo') }}
            </a>
        </div>
    </div>


    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary" id="center">
                {{ __('Raja Ampat') }}
            </button>
        </div>
    </div>


</section>






<br>
<br>

<div style="background-color: black;">
    <br>

    <!-- BUTTON ADD & DELETE -->

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/admin/package/add" class="btn btn-primary" id="center">
                {{ __('Add') }}
            </a>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/admin/package/delete" class="btn btn-primary" id="center">
                {{ __('Delete') }}
            </a>
        </div>
    </div>
    <br>




</div>



@endsection