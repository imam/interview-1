<div class="col-lg-4">
    <div class="item">
        <div class="item--background-image" style="background-image: url('{{$item->picture}}');"></div>
        <div class="item--name"><a  href="/products/{{$item->id}}">{{$item->name}}</a></div>
        <p>{{$item->short_desc}}</p>
    </div>
</div>