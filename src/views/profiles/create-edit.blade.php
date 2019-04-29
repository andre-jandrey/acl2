@extends('westsoft.acl.layouts.acl')

@section('title', 'Criar Perfil')

@section('css')

@endsection

@section('content-body')
<!-- Ver todas as equipes -->
<div class="row justify-content-center">
    <div class="col-xl-8 col-12">
        <div class="card px-2">
            <div class="card-header">
                {{-- <h4 class="card-title">{{isset($profile) ? 'Editar profile' : 'Nova profile' }}</h4> --}}
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    @if (isset($profile)) 
                    <form method="post" action="{{route('profiles.update', ['id'=>$profile->id])}}" enctype="multipart/form-data">
                    {!! method_field('PUT')!!}
                    @else
                    <form action="{{ route('profiles.store') }}" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="icon-notebook"></i> Dados do Perfil</h4>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="cat_anu_nome">Nome</label>
                                    <input type="text" id="name" class="form-control" placeholder="Exemplo: users.create" name="name" value='{{$profile->name ?? old("name")}}' required>
                                </div>
                            </div>
                           {{--  <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="description">Descrição</label>
                                    <input type="text" id="descrption" class="form-control" placeholder="Exemplo: Perfil de criar usuários" name="descrption" value='{{$profile->description ?? old("description")}}'>
                                </div>
                            </div> --}}
                        </div>
                        <div class="form-actions">
                            <a href="{{ url('/profiles') }}"><button type="button"
                                    class="btn btn-danger mr-1">
                                    Cancelar
                                </button></a>
                            <button type="submit" class="btn btn-primary">
                                    {{isset($profile) ? 'Salvar alteração' : 'Salvar' }} 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Fim equipes -->

@endsection


@section('js')

@endsection