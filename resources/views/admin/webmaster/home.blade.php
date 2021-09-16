@extends('layouts.admin')
@section('title')
    Web master home page
@endsection
@section('content')
    <div class="">
            <form action=" {{ route('webmaster-home-update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="bg-white p-4 grid grid-flow-row grid-cols-2 gap-4">
            <div class="">
            <h4 class=" text-lg my-auto mr-4">Title</h4>
                <textarea class="w-full rounded border" id="editor1"
                    name="header_title">{{ $item->header_title }}</textarea>
            </div>
            <div class="">
            <h4 class=" text-lg my-auto mr-4">Sub Title</h4>
                <textarea class="w-full rounded border" id="editor2"
                    name="header_subtitle">{{ $item->header_subtitle }}</textarea>
            </div>
            <div class="">
            <h4 class=" text-lg my-auto mr-4">Alamat</h4>
                <textarea class="w-full rounded border" id="editor3" name="alamat">{{ $item->alamat }}</textarea>
            </div>
            <div class="">
            <h4 class=" text-lg my-auto mr-4">Kontak</h4>
                <textarea class="w-full rounded border" id="editor4" name="kontak">{{ $item->kontak }}</textarea>
            </div>
            <div class="">
            <h4 class=" text-lg my-auto mr-4">Email</h4>
                <textarea class="w-full rounded border" id="editor5" name="email">{{ $item->email }}</textarea>
            </div>
            <div class="">
            <h4 class=" text-lg my-auto mr-4">Jam Kerja</h4>
                <textarea class="w-full rounded border" id="editor6" name="jamkerja">{{ $item->jamkerja }}</textarea>
            </div>

        </div>
        <button type="submit" class="  bg-blue-600 px-3 py-1 rounded text-white">Simpan</button>
        </form>
    </div>

@endsection
@push('script')
    <script src="//cdn.ckeditor.com/4.16.2/basic/ckeditor.js"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
        CKEDITOR.replace('editor4');
        CKEDITOR.replace('editor5');
        CKEDITOR.replace('editor6');
    </script>
@endpush
