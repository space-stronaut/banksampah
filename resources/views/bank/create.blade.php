@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        Create Bank sampah
                    </div>
                    <div>
                        <a href="{{ route('bank.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('bank.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Bank</label>
                            <input type="text" name="nama_bank" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Kapasitas</label>
                            <input type="text" name="kapasitas" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Wilayah</label>
                            <select name="wilayah_id" id="" class="form-control">
                                <option value="">Choose</option>
                                @foreach ($wilayahs as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_wilayah }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="nama_bank" class="form-control"> --}}
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
