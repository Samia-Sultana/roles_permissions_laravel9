@extends('admin.common.master')

@section('title')
    <title>Dashboard</title>
@endsection


@section('content')

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('admin.common.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('admin.common.navbarHeader')
                <!-- main header @e -->

                <!-- content @s -->

                <!-- content @e -->

                <!-- footer @s -->
                @include('admin.common.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->


@endsection
