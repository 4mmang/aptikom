@extends('layouts.master')
@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">{{ optional($artilogo)->judul ?? 'Bendahara Umum' }}</h3>
                <form action="{{ optional($artilogo)->count() < 1 ? route('artilogo.store') : route('artilogo.update', 1) }}"
                    method="post" enctype="multipart/form-data">
                    @if (optional($artilogo)->count() > 0)
                        @method('put')
                    @endif
                    @csrf
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ optional($artilogo)->judul }}"
                        id="judul">
                    <label class="mt-3" for="content">Content</label>
                    <textarea id="isi" name="isi" class="form-control">{{ optional($artilogo)->isi }}</textarea>
                    <button class="btn btn-primary mt-4 px-3" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#isi').summernote({
            placeholder: 'Masukkan isi content',
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
            ]
        });
    </script>
@endpush
