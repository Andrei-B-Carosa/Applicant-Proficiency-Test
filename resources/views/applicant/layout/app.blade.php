<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>RVLMC - Applicant Proficiency Test</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content=" " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content=" " />
    <meta property="og:url" content=" " />
    <meta property="og:site_name" content="RVLMC - Applicant Proficiency Test" />
    <meta content="{{ csrf_token() }}" name="csrf-token" id="csrf-token">
    <link rel="shortcut icon" href="../../assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script>
        var defaultThemeMode = "light";
	    var themeMode;
        if ( document.documentElement ) {
            if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if ( localStorage.getItem("data-bs-theme") !== null ) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <style>
        body {
            background-image: url('../../assets/media/auth/bg8.jpg');
        }
        [data-bs-theme="dark"] body {
            background-image: url('../../assets/media/auth/bg8-dark.jpg');
        }
    </style>
</head>
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <div id="pg-content">
                {{-- PAGE CONTENT --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script>
        var assetUrl = "{{ asset('') }}", b = new KTBlockUI(document.body);
        $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
    </script>
    <script src="{{ asset('js/applicant/main.js') }}" type="module"></script>
</body>
</html>
