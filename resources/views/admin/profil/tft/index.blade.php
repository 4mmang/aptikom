@extends('layouts.master')
@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">Tujuan, Fungsi dan Tugas </h3>
                <form action="{{ optional($tugas)->count() < 1 ? route('tft.store') : route('tft.update', 1) }}"
                    method="post" enctype="multipart/form-data">
                    @if (optional($tugas)->count() > 0)
                        @method('put')
                    @endif
                    @csrf
                    <label class="mt-3" for="isi">Tujuan</label>
                    <textarea id="isi" required name="isi" class="form-control">{{ optional($tujuan)->isi }}</textarea>
                    <label class="mt-3" for="isi1">Fungsi</label>
                    <textarea id="isi1" required name="isi1" class="form-control">{{ optional($fungsi)->isi1 }}</textarea>
                    <label class="mt-3" for="isi2">Tugas</label>
                    <textarea id="isi2" required name="isi2" class="form-control">{{ optional($tugas)->isi2 }}</textarea>
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
        $('#isi1').summernote({
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
        $('#isi2').summernote({
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
