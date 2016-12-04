@foreach($items->data as $item)
    @include('_item', ['item'=>$item])
@endforeach