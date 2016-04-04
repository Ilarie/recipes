
@extends('layouts.master')

@section('title', 'showUsers')
							
@section('content')
    	
    	@if (session('success'))
    		<div class="alert alert-success">
    		    {{ session('success') }}
  			</div>
		@endif
            <div class=" col-md-8 col-md-offset-2">
    	    	<table class="table">

    	    		<thead>
    	    			<th class="col-md-3">Nome</th>
    	    			<th class="col-md-6">Email</th>
                        <th class="col-md-3"></th>
    	    		</thead>
    	    		
                    @foreach($users as $user)
					<tbody>
	
                		<td>{{$user->name}}</td>
                		<td>{{$user->email}}</td>
                        <td>{!!Form::open(['route'=>['admin.destroy', $user->id], 'method'=>'DELETE'])!!}    
                            {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}    
                            {!!Form::close()!!}</td>     
                        
                    </tbody>
                    @endforeach
                </table>
           </div>     
		
@stop	
