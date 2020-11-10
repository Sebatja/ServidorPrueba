


@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('notas.store')}}" method="POST">
                @csrf
                
                <div class="form-group row">
                    <label for="Descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Titulo de la nota') }}</label>

                    <div class="col-md-6">
                        <input id="Descripcion" type="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" name="Descripcion" value="{{ old('Descripcion') }}" required autocomplete="Descripcion" autofocus>

                        @error('Descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            <table  class="table">
                <thead>
<th>id</th>
<th>Nombre</th>
<th>Nota</th>
                </thead>
                <tbody>
     
                    @foreach($users as $user)
                  
                    <tr>
                     <td >{{$user->id}}</td>
                       <td  >{{$user->name}}</td>
                      <td>
                            <div class="form-group row">
                                <label for="Nota" class="col-md-4 col-form-label text-md-right"></label>
    
                                <div class="col-md-6">
                                    <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="{{$user->id}}" value="{{$user->id}}" required autocomplete="id" autofocus  readonly>
                                    <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="A{{$user->id}}" value="" required autocomplete="id" autofocus >
                                   
                                    @error('Nota')
                                        <span class="invalname-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                      </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary">Registrar Asistencia</button>
        </form>
        </div>
    </div>
</div>
@endsection
