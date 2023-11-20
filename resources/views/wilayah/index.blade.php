@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        Wilayah
                    </div>
                    <div>
                        <a href="{{ route('wilayah.create') }}" class="btn btn-primary">Create wilayah</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Wilayah</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wilayahs as $item)
                                <tr>
                                    <td>
                                        {{$item->nama_wilayah}}
                                    </td>
                                    <td class="d-flex">
                                        <div>
                                            <a href="{{ route('wilayah.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('wilayah.destroy', $item->id) }}" method="post">
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
