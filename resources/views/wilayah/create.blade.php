@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        Create Wilayah
                    </div>
                    <div>
                        <a href="{{ route('wilayah.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('wilayah.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama wilayah</label>
                            <input type="text" name="nama_wilayah" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
