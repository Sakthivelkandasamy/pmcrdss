@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('content')
<main class="main-section-area">
    <div class="main-container" id="mainWindow" page-id="window101">
        <h1>Excel File Upload</h1>
    
            @if(session('error'))
                <div class="message error">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="message success">{{ session('success') }}</div>
            @endif

            @if($fileExists)
                <p>An Excel file already exists. You can <a href="{{ route('excel.chart') }}">view the chart</a> or upload a new file to replace it.</p>
            @else
                <p>No Excel file found. Please upload one.</p>
            @endif

            <div class="upload-form">
                <form action="{{ route('excel.upload') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                    @csrf
                    <div class="file-input-wrapper">
                        <button class="btn-file-input" type="button">Choose File</button>
                        <input type="file" name="excel_file" id="excel_file" accept=".xlsx,.xls" required>
                    </div>
                    <span class="file-name" id="file-name"></span>
                    <br>
                    <button type="submit" class="submit-btn" id="submitBtn" disabled>Upload</button>
                </form>
            </div>
    </div>
</main>
@endsection

@section('dashboard-scripts')
<script>
        const fileInput = document.getElementById('excel_file');
        const fileName = document.getElementById('file-name');
        const submitBtn = document.getElementById('submitBtn');
        const uploadForm = document.getElementById('uploadForm');

        fileInput.addEventListener('change', function(e) {
            if (this.files && this.files.length > 0) {
                fileName.textContent = this.files[0].name;
                submitBtn.disabled = false;
            } else {
                fileName.textContent = '';
                submitBtn.disabled = true;
            }
        });

        uploadForm.addEventListener('submit', function(e) {
            submitBtn.textContent = 'Uploading...';
            submitBtn.disabled = true;
        });
    </script>
@endsection