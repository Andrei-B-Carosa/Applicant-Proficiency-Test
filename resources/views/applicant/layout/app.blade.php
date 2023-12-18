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
    <link rel="canonical" href="../../index.html" />
    <link rel="shortcut icon" href="../../assets/media/logos/favicon.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

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
            <div class="d-flex flex-column flex-center text-center p-10">
                <div class="card card-flush w-md-650px py-5">
                    <div class="card-body py-15 py-lg-20">
                        <div class="mb-4">
                            <a href="javascript:;" class="">
                                <img alt="Logo" src="{{ asset('web_img/company_logo.png') }}" class="h-80px" />
                            </a>
                        </div>
                        <h1 class="fw-bolder text-gray-900 mb-3">
                            Applicant Proficiency Test </h1>
                        <!--end::Title-->

                        <!--begin::Text-->
                        <div class="fw-semibold fs-6 text-gray-500 mb-9">
                            Hello Guest, we'll be assessing your Typing and Excel skills. <br>Get ready to showcase your proficiency!
                        </div>
                        <!--end::Text-->

                        <!--begin::Illustration-->
                        {{-- <div class="mb-0">
                            <img src="../../assets/media/auth/welcome.png" class="mw-100 mh-300px theme-light-show"
                                alt="" />
                            <img src="../../assets/media/auth/welcome-dark.png" class="mw-100 mh-300px theme-dark-show"
                                alt="" />
                        </div> --}}
                        <!--end::Illustration-->

                        <!--begin::Link-->
                        <div class="mb-0 mt-5 d-grid gap-2  col-6 mx-auto">
                            <button class="btn btn-success hover-scale">Start Test</button>
                        </div>
                        <!--end::Link-->

                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "../../assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--end::Javascript-->

</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/general/welcome.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 01:28:35 GMT -->

</html>
