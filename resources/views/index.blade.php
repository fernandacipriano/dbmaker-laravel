@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teste banco</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Departamento</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($logins as $login)
        <tr>
            <td>{{ $login->DEP_ID }}</td>
            <td>{{ $login->DEP_DESCRICAO }}</td>
            <td>
               
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection