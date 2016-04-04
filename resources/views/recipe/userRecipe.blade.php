@extends('layouts.app')
@section('title', 'UserRecipes')
@section('content')

               <h1>Le ricette di {{ Auth::user()->name }} </h1>
                <div class=" col-md-10 col-md-offset-1">
    	    	<table class="table">

    	    		<thead>
    	    			<th class="col-md-2">Titolo</th>
    	    			<th class="col-md-3">Ingredienti</th>
    	    			<th class="col-md-5">Descrizione</th>
                        <th class="col-md-2"></th>
    	    		</thead>
    	    		
                    @foreach($recipes as $recipe)
                    <tbody>
       
                		<td>{{$recipe->title}}</td>
                		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
                		<td>{{substr($recipe->description,0,300)}}...<td>
                        <td>{!!link_to_route('recipes.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-warning'])!!}</td>            
                        <td>{!!link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info'])!!}</td>            

                    </tbody>
            </div>
@endforeach	
				
@stop	    
