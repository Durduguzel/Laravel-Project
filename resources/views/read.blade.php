@foreach ($tests as $item)
    {{$item->id}}<br>    
    {{$item->title}}<br>    
    {{$item->description}}<br>    
    {{$item->content}}<br>
    <hr>    
@endforeach