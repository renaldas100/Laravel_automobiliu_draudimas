
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Automobilių sąvininkai</div>

                        <div class="card-body">

                            <form method="post" action="{{ route("owners.store") }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Vardas</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">

                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pavardė</label>
                                    <input class="form-control @error('surname') is-invalid @enderror" type="text" name="surname" value="{{ old('surname') }}">

                                    @error('surname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror


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





