<!DOCTYPE html>
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login Basic</title>
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <link rel="icon" type="image/x-icon" href="#" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/vendor/fonts/fontawesome.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/fonts/tabler-icons.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/fonts/flag-icons.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/css/rtl/core.css")}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset("assets/vendor/css/rtl/theme-default.css")}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset("assets/css/demo.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/libs/node-waves/node-waves.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/libs/typeahead-js/typeahead.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/libs/%40form-validation/umd/styles/index.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/vendor/css/pages/page-auth.css")}}">
    <script src="{{asset("assets/vendor/js/helpers.js")}}"></script>
    <script src="{{asset("assets/vendor/js/template-customizer.js")}}"></script>
    <script src="{{asset("assets/js/config.js")}}"></script>
    @livewireStyles
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <div class="card">
                    <div class="card-body">
                       @yield("content")
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{("assets/vendor/libs/jquery/jquery.js")}}"></script>
    <script src="{{("assets/vendor/libs/popper/popper.js")}}"></script>
    <script src="{{("assets/vendor/js/bootstrap.js")}}"></script>
    <script src="{{("assets/vendor/libs/node-waves/node-waves.js")}}"></script>
    <script src="{{("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}"></script>
    <script src="{{("assets/vendor/libs/hammer/hammer.js")}}"></script>
    <script src="{{("assets/vendor/libs/i18n/i18n.js")}}"></script>
    <script src="{{("assets/vendor/libs/typeahead-js/typeahead.js")}}"></script>
    <script src="{{("assets/vendor/js/menu.js")}}"></script>
    <script src="{{("assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js")}}"></script>
    <script src="{{("assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js")}}"></script>
    <script src="{{("assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js")}}"></script>
    <script src="{{("assets/js/main.js")}}"></script>
    <script src="{{("assets/js/pages-auth.js")}}"></script>
    @livewireScripts
</body>
</html>
