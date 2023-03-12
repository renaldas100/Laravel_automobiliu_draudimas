
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Automobiliai</div>

                        <div class="card-body">

{{--                            @if ($errors->any())--}}
{{--                                <div class="alert alert-danger">--}}
{{--                                    <ul>--}}
{{--                                @foreach($errors->all() as $error)--}}
{{--                                   <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            @endif--}}


                            <form method="post" action="{{ route("cars.store") }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Registracijos numeris</label>
                                    <input class="form-control @error('reg_number') is-invalid @enderror" type="text" name="reg_number" value="{{ old('reg_number') }}">

                                    @error('reg_number')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gamintojas</label>
                                    <input class="form-control @error('brand') is-invalid @enderror" type="text" name="brand" value="{{ old('brand') }}">

                                    @error('brand')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

{{--                                    @if ($errors->has('brand'))--}}
{{--                                        Klaida--}}
{{--                                    @endif--}}

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Modelis</label>
                                    <input class="form-control @error('model') is-invalid @enderror" type="text" name="model" value="{{ old('model') }}">

                                    @error('model')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sąvininkas</label>
                                    <select class="form-select" name="owner_id">
                                       @foreach($owners as $owner)
                                            <option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-success">Pridėti</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





