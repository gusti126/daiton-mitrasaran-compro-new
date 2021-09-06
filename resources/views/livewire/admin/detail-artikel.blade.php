<div>
    @section('title')
        Artikel {{ $item->title }}
    @endsection
    <div>
        <img src="{{ asset('/storage/' . $item->thumbnail) }}" alt="" class="w-full">
    </div>
    <div class="text-lg font-semibold mt-2">{{ $item->title }}</div>
    <div class="mt-2">{!! $item->body !!} </div>
</div>
