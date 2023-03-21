<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>Champion's Club</title>
    <meta charset="utf-8" />
    <meta name="description" content="Champion's Club." />
    <meta name="keywords" content="Champion's Club" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Champion's Club" />
    <meta property="og:url" content="https://themes.getbootstrap.com/product/craft-bootstrap-5-admin-dashboard-theme" />
    <meta property="og:site_name" content="Champion's Club" />
    <link rel="shortcut icon" href="{{ asset('dash_assets/media/logos/favicon.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('dash_assets/plugins/custom/leaflet/leaflet.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dash_assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('dash_assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dash_assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-default aside-hoverable" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto pt-9 pb-5" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="../dist/index.html">
                        <img alt="Logo" src="{{ asset('dash_assets/media/logos/logo.png')}}"
                            class="w-250px  max-h-50px logo-default" />
                        <img alt="Logo" src="{{ asset('dash_assets/media/logos/favicon.png')}}"
                            class="max-h-50px w-50px logo-minimize" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->