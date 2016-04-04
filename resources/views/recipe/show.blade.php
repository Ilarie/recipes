@extends('layouts.app')
@section('title', 'Show')
@section('content')
    	   
           <div class=" col-md-8 col-md-offset-2">  
            
                <h1>{{$recipe->title}}</h1>
                <h3> Autore </h3>
                <p> {{$recipe->user->name}} </p>
                <h3> Ingredienti </h3>
                <p> {{$recipe->ingredients()->get()->implode('name',', ')}} </p>
                <h3> Descrizione </h3>
                <p> {{$recipe->description}} </p>
            
            </div>
	
@stop				
	    