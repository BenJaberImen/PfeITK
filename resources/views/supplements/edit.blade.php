@extends('layouts.master')

@section('content')

<div class="container" style="margin-top: 50px;">
    <div class="row">


            <div class="col-lg-3">
                <p>Image De Couverture:</p>
                <form action="/deletecover/{{ $supplement->id }}" method="post">
                <button class="btn text-danger">X</button>
                @csrf
                @method('delete')
                </form>
                <img src="/cover/{{ $supplement->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>

                @if (count($supplement->image)>0)
                <p>Images:</p>
                @foreach ($supplement->image as $img)
                <form action="/deleteimage/{{ $img->id }}" method="post" enctype="multipart/form-data">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form>
                <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                @endforeach
                @endif


            </div>
            <form method="POST" action="{{route('supplements.update', $supplement->id)}}"enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">

                    {{-- Name --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Libelle</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('libelle') is-invalid @enderror"
                            id="exampleLibille"
                            placeholder="libelle"
                            name="libelle"
                            value="{{ old('libelle') ? old('libelle') : $supplement->libelle }}">

                        @error('libelle')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    {{-- Email --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Description</label>
                        <textarea
                            class="form-control form-control-user @error('description') is-invalid @enderror"
                            id="exampleDescription"
                            placeholder="description"
                            name="description"
                            value="{{ old('description') ? old('description') : $supplement->description }}">
                        </textarea>

                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
    {{-- Email --}}
    <div class="col-sm-6 mb-3 mb-sm-0">
        <span style="color:red;">*</span>prix_intial</label>
        <input type="text"
            class="form-control form-control-user @error('prix_intial') is-invalid @enderror"
            id="examplePrix_intial"
            placeholder="prix_intial"
            name="prix_intial"
            value="{{ old('prix_intial') ? old('prix_intial') : $supplement->prix_intial }}">

        @error('prix_intial')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
                </div>
                <div class="from-group">

                    <label for="categorie_id"> categorie</label>
                    <select id="categorie_id" name="categorie_id" class="from-group">

                    <option value="">--Select--</option>
                    @foreach ($categories as $categorie )
                    <option value="{{ $categorie->id }}" {{ $categorie->id == $supplement->categorie_id ? 'selected':''}}>{{ $categorie->id ==$supplement->categorie_id ? 'selected':''}} {{ $categorie->libelle }}</option>

                    @endforeach


                    </select>
                    <label class="m-2">Image De Couverture</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                    <label class="m-2">Images</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>


                                      </div>
                                    </div>
                {{-- Save Button --}}
                <button type="submit" class="btn btn-success btn-user btn-block">
                   Metre a jour
                </button>

            </form>
        </div>
    </div>

</div>
</div>

@endsection
