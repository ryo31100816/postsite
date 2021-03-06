<div class="container">
    {{ $test = $getComment($id) }}
    @foreach($test as $item)
        {{ $item }}
    @endforeach
</div>