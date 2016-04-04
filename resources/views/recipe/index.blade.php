
@extends('layouts.app')

@section('title', 'home')
							
@section('content')
    	
    	@include('alerts.success')
        <div class=" col-md-10 col-md-offset-1">
        	<table class="table">

        		<thead>
        			<th class="col-md-2">Titolo</th>
        			<th class="col-md-3">Ingredienti</th>
        			<th class="col-md-5">Descrizione</th>
                    <th class="col-md-1">Autore</th>
        			<th class="col-md-1"></th>
        		</thead>
        		
                @foreach($recipes as $recipe)
    			<tbody>
    	
            		<td>{{$recipe->title}}</td>
            		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
            		<td>{{substr($recipe->description,0,300)}}...</td>
                    <td>{{$recipe->user->name}}</td>     
                    <td>{!!link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info'])!!}</td>            
                
                </tbody>
                @endforeach	
            </table>
            <center>{!!$recipes->render()!!}</center>		
	    </div>
@stop	

	
