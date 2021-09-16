@extends('layouts.admin')
@section('title')
    Web master kontak page
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
            <form action=" {{ route('webmaster-kontak-update', $item->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white p-4">

            <div class=" grid grid-flow-row grid-cols-2 gap-4">
                <div class="">
                <h4 class=" text-lg my-auto mr-4">image Header</h4>
                    <input type="file" name="image">
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">Header title</h4>
                    <input type="text" class="w-full rounded border" id="editor1" name="header_title"
                        value="{{ $item->header_title }}">
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">Header deksripsi title</h4>
                    <textarea type="text" class="w-full rounded border" id="editor1"
                        name="header_subtitle">{{ $item->header_subtitle }}</textarea>
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">Email</h4>
                    <input type="text" class="w-full rounded border" id="editor1" name="email" value="{{ $item->email }}">
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">WhatsApp</h4>
                    <input type="text" class="w-full rounded border" id="editor2" name="wa" value="{{ $item->wa }}">
                    <div class="text-xs">Awali dengan 62 atau ubah 0 jadi 62 ex: 6289XXXXX</div>
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">Telepon</h4>
                    <input type="text" value="{{ $item->telepon }}" class="w-full rounded border" id="editor3"
                        name="telepon">
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">Icon email</h4>
                    <input type="file" class="w-full rounded border" name="ic_email">
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">Icon wa</h4>
                    <input type="file" class="w-full rounded border" name="ic_wa">
                </div>
                <div class="">
                <h4 class=" text-lg my-auto mr-4">Icon telepon</h4>
                    <input type="file" class="w-full rounded border" name="ic_telepon">
                </div>

            </div>
            <button type="submit" class=" mt-4 bg-blue-600 px-3 py-1 rounded text-white">Simpan</button>
        </div>
        </form>
    </div>

@endsection
