@extends('layouts.admin')
@section('title')
    Web master About page
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="">
            <form action=" {{ route('webmaster-about-update', $item->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white p-4 grid grid-flow-row grid-cols-2 gap-4">
            <div class="">
            <h4 class=" text-lg my-auto mr-4">Title</h4>
                <textarea class="w-full rounded border" id="editor1"
                    name="header_title">{{ $item->header_title }}</textarea>
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Header Image</h4>
                <input type="file" name="header_image">
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Header Tag Line</h4>
                <textarea type="text" name="header_tagline" id="editor3">{{ $item->header_tagline }}</textarea>
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Main Satu title</h4>
                <textarea name="main_satu_title" id="editor4">{{ $item->main_satu_title }}</textarea>
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Main Satu deskripsi</h4>
                <textarea type="text" name="main_satu_subtitle" id="editor5">{{ $item->main_satu_subtitle }}</textarea>
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Main Satu Image</h4>
                <input type="file" name="main_satu_image">
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Main Program</h4>
                <textarea type="text" name="program" id="editor6">{{ $item->program }} </textarea>
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Main dua title</h4>
                <textarea type="text" name="main_dua_title" id="editor7">{{ $item->main_dua_title }}</textarea>
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Main dua deskripsi</h4>
                <textarea type="text" name="main_dua_subtitle" id="editor8">{{ $item->main_dua_subtitle }}</textarea>
            </div>
            <div>
                <h4 class=" text-lg my-auto mr-4">Main dua Image</h4>
                <input type="file" name="main_dua_image">
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
        CKEDITOR.replace('editor7');
        CKEDITOR.replace('editor8');
    </script>
@endpush
