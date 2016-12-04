@extends('layout')

@section('title',$item->name.' | Vertilogic')

@section('content')

<div class="container">
    <h1>{{$item->name}}</h1>
   <div class="row">
       <div class="col-lg-3">
           <div style="background-image:url({{$item->picture}})" class="item-single-page--image"></div>
       </div>
       <div id="items" class="col-lg-9">
           {{$item->description}}
           <div>
               <table>
                   <tr>
                       <th>Property</th>
                       <th>Value</th>
                   </tr>
                   <tr>
                       <th>Color</th>
                       <th>{{$item->properties[0]->color}}</th>
                   </tr>
                   @if(isset($item->properties[1]))
                       <tr>
                           <th>Size</th>
                           <th>{{$item->properties[1]->size}}</th>
                       </tr>
                   @endif
               </table>
           </div>
       </div>
   </div>
    <a href="/">Home</a>
</div>
@endsection
