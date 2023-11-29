@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bgxd">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>{{ __('Vármegyék listája') }}</strong>
                            <form method="post" action="{{ route('searchVarmegyek') }}" accept-charset="UTF-8">
                                @csrf
                                <div class="input-group d-flex gap-3">
                                    <input type="text" name="needle" class="form-control" placeholder="Keresés">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            Keresés
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Megnevezés</th>
                                    <th>Művelet <a href="{{route('createVarmegye')}}"><i class="fa-solid fa-circle-plus pereg"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($entities as $entity)
                                    <tr>
                                        <td>{{ $entity->id }}</td>
                                        <td>{{ $entity->name }}</td>
                                        <td>
                                            <div class="btn-group flex gap-2" role="group">
                                                <form method="post" action="{{ route('editVarmegye', $entity->id) }}">
                                                    <button class="btn btn-outline-primary" type="submit">
                                                        Módosítás <i class="fa fa-edit"></i>
                                                    </button>
                                                    @csrf
                                                </form>
                                                <form method="post" action="{{ route('deleteVarmegye', $entity->id) }}" onsubmit="return confirm('Biztosan törölni szeretnéd ezt az elemet?');">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-danger" type="submit">
                                                        Törlés <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
