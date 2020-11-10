


@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
<th>id</th>
<th>Total</th>
                </thead>
                <tbody>
 
                    @foreach ($notas as $nota)
                       <tr>
                           <td>{{$nota->user_id}}</td>
                           <td>
                            
                            {{$nota->total_sales}}
                           </td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
