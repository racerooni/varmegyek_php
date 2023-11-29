@extends('layouts.app')
{{-- resources/views/home.blade.php --}}
{{--{{ Breadcrumbs::render('login') }}--}}

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form method="post" action="{{ route('updateVarmegye', $entity->id) }}" accept-charset="UTF-8">
                        @csrf
                        @method('patch')
                        <div class="card-header">{{ __('Vármegye módosítása') }} (#{{$entity->id}}) <i class="fa-regular fa-pen-to-square"></i></div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div>
                                <div class="table table-active">
                                    <div>
                                        <div class="row" style="margin-left: 15px;">
                                            <div class="row">
                                                <label for="name"><strong>Név</strong></label>
                                                <input type="text" name="name" value="{{ $entity->name }}" required></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer row text-center" style="margin-left: 0; margin-right: 0">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-success">
                                    <a href="#" class="btn text-white"><i class="fa fa-save"></i>&nbsp;{{__('Mentés')}}</a></button>
                            </div>
                            <div class="col-auto">
                            <button type="submit" class="btn btn-danger">
                            <a class="btn text-white" href="{{ route('varmegyek') }}#{{$entity->id}}"><i class="fa fa-ban"></i>&nbsp;{{__('Mégse')}}</a>
                            </button>    
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
