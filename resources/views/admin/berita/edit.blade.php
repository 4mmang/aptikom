@extends('layouts.master')
@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content"> 
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="fs-2 mb-0" style="color: #38527E">Edit Berita</p>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-3">
                            <form id="new-article" action="{{ route('berita.update', $berita->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <label for="judul">Judul<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}"
                                    id="judul" required>

                                <label for="cover" class="mt-3">Cover<sup class="text-danger">*</sup></label>
                                <input type="file" class="form-control" name="cover" id="cover">

                                <label for="isi" class="mt-3">Isi content<sup
                                        class="text-danger">*</sup></label>
                                <textarea name="isi" id="isi" cols="30" rows="10" required>{!! $berita->isi !!}</textarea>
                                <a href="{{ route('berita.index') }}"
                                    class="btn btn-danger float-end mt-3 ml-2">Kembali</a>
                                <button id="save" type="submit" style="background-color: #38527E"
                                    class="btn text-white mt-3 float-end px-4"><i class="fas fa-save mr-1"></i>
                                    Save</button>
                            </form>
                        </div>
                    </div>
                </div> 
        </div> 
        <!-- End of Footer -->
    </div> 
    @if (session('message'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('message') }}",
                icon: "success"
            });
        </script>
    @endif
@endsection
@push('scripts')
    <script>
        $('#isi').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
            ]
        })
    </script>
    <script>
        let form = document.getElementById('new-article')
        form.addEventListener('submit', function() {
            let btnSave = document.getElementById('save')
            btnSave.disabled = true
            btnSave.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i>Processing...';
        })
    </script>
@endpush
