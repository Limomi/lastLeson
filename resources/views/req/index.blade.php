<x-applayout>

    <a href="{{route('req.make')}}">
        Создать новую
    </a>

    @foreach ($posts as $post)
        <p>
            {{$post->address}}
        </p>
    @endforeach
    
</x-applayout>