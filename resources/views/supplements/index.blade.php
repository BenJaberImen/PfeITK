@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Supplement</h1>
        <div class="card-tools">
            <a href="{{ route('supplements.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Ajouter un nouveau Supplément </a>
        </div>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tous les Supplements </h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>libelle</th>
                        <th>prix_intial</th>
                        <th>Description</th>
                        <th>Categorie</th>
                        <th>Image De Couverture</th>
                        <th>Mettre à jour</th>
                         <th>Liste Des Images</th>
                        <th>Supprimer</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($supplements as $supplement)
                     <tr>
                           <th scope="row">{{ $supplement->id }}</th>
                           <td>{{ $supplement->libelle }}</td>
                           <td>{{ $supplement->prix_intial }}</td>
                           <td>{{ $supplement->description }}</td>
                           <td>{{ $supplement->categorie->libelle }}</td>
                           <td><img src="cover/{{ $supplement->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>

                           <td><a href="{{ route('supplements.edit', $supplement->id) }}" class="btn btn-outline-primary">Mettre à jour</a></td>
                            <td>
                            <a href={{route('supplements.show',$supplement->id)}} class="btn btn-outline-dark">Liste Des Image</a>
                        </td>
                           <td>
                            <form action="{{ route('supplements.destroy',$supplement->id) }}" method="POST">
                                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Supprimer</button>
                                @csrf
                                @method('delete')
                            </form>
                           </td>

                       </tr>
                       @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</div>


@endsection
