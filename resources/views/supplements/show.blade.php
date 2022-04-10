@extends('layouts.master')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ajouter un Supplement</h1>

    </div>

    {{-- Alert Messages --}}
    @include('common.alert')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ajouter un nouveau Supplement</h6>
        </div>
        <div class="card-body">
            <h2>Images pour Supplement : <span class="text-primary">{{$supplement->libille}}</span> </h2>
  <a href="/" class="btn btn-primary">Retourner</a>
  <div class="row mt-4">
    @if (count($supplement->image)>0)
    @foreach ($images as $image)
    <form action="/deleteimage/{{ $image->id }}" method="post" enctype="multipart/form-data">
        <button class="btn text-danger">X</button>
        @csrf
        @method('delete')
    </form>
        <div class="col-md-3">
          <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
            <div class="card-body">
              <img src="/images/{{$image->image}}" class="card-img-top">


            </div>
          </div>
        </div>
    @endforeach
    @endif
  </div>

</div>


@endsection
