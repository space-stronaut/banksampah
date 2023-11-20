@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        Edit Wilayah
                    </div>
                    <div>
                        <a href="{{ route('wilayah.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('wilayah.update', $wilayah->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama wilayah</label>
                            <input type="text" value="{{$wilayah->nama_wilayah}}" name="nama_wilayah" class="form-control">
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
