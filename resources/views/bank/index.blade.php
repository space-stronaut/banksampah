@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        Bank sampah
                    </div>
                    <div>
                        <a href="{{ route('bank.create') }}" class="btn btn-primary">Create Bank Sampah</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Bank sampah</th>
                                <th>Alamat</th>
                                <th>Kapasitas</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banks as $item)
                                <tr>
                                    <td>
                                        {{$item->nama_bank}}
                                    </td>
                                    <td>
                                        {{$item->alamat}}
                                    </td>
                                    <td>
                                        {{$item->kapasitas}}
                                    </td>
                                    <td class="d-flex">
                                        <div>
                                            <a href="{{ route('bank.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('bank.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><th>No Data Here</th></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
