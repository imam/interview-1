@extends('layout')

@section('title','Homepage Vertilogic')

@section('content')
<h1 style="text-align:center">Products</h1>
<div id="items" class="container">
    @include('_items', ['items'=>$items])
</div>
<div style="text-align: center;">
    <a href="#" id="loadMore" class="btn btn-primary">Load more</a>
</div>
@endsection
