@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Create Slider</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Slider</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Slider</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>First Button Name</label>
                        <input type="text" name="first_button_name" value="{{ old('first_button_name') }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>First Button Url</label>
                        <input type="text" name="first_button_url" value="{{ old('first_button_url') }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Second Button Name</label>
                        <input type="text" name="second_button_name" value="{{ old('second_button_name') }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Second Button Url</label>
                        <input type="text" name="second_button_url" value="{{ old('second_button_url') }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <!-- image-preview js -->
    <script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script>
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>
@endpush