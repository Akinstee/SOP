@extends('layouts.innershell')

<!--  -->
@section('styles')
<!-- Template Main CSS File -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
endsection
      
@section('content')
    <!-- Your page content goes here -->
    <div class="container">
            <h1>Inbox</h1>
            <div class="chat-container">
            @foreach ($messagesFromDB as $message)
                <div class="chat-message {{ $message->sender }}">
                    <p><strong>{{ $message->student_name }}:</strong> {{ $message->content }}</p>
                </div>
            @endforeach
        </div>
      </div> 
@endsection

@section('scripts')
    <!-- Add your page-specific scripts here -->
       <!-- Vendor JS Files -->
       <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

@endsection