<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset('design/admin/dist-assets/css/themes/lite-purple.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('design/admin/dist-assets/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('design/admin/dist-assets/css/plugins/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('design/admin/dist-assets/css/plugins/sweetalert2.min.css') }}" />
    <style>
        .media-thumbnail {
            transition: transform 0.2s ease-in-out;
            border-radius: 0.375rem 0.375rem 0 0;
        }
        
        .media-thumbnail:hover {
            transform: scale(1.05);
        }
        
        .card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            transform: translateY(-2px);
            transition: all 0.2s ease-in-out;
        }
        
        .media-grid .card {
            transition: all 0.2s ease-in-out;
        }
        
        .badge-sm {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }
        
        .btn-group-sm .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
        
        .text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .media-placeholder {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px dashed #dee2e6;
        }
        
        .media-placeholder i {
            opacity: 0.7;
        }
        
        .media-grid .card {
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
        }
        
        .media-grid .card:hover {
            border-color: #007bff;
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.15);
        }
        
        .media-thumbnail {
            background-color: #f8f9fa;
        }
        
        .card-body {
            padding: 1rem;
        }
        
        .btn-group-sm .btn {
            border-radius: 0.25rem;
        }
        
        .badge-sm {
            font-size: 0.7rem;
            padding: 0.2rem 0.4rem;
        }
        
        .text-truncate {
            max-width: 100%;
        }
    </style>
</head>
