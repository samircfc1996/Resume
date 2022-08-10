<nav class="social-links">
   @foreach($items  as $item)
    <a href="{{$item->link()}}"  target="{{$item->target}}" class="social-link"><i class="fab {{$item->icon_class}}"></i></a>
    @endforeach
</nav>
