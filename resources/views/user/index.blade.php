@extends('admin.common.master')

@section('title')
    <title>Users</title>
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
                    <div class="nk-content ">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="components-preview wide-md mx-auto">
                                        <div class="nk-block nk-block-lg">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <h4 class="nk-block-title">Data Table</h4>
                                                    <div class="nk-block-des d-flex justify-content-between">
                                                        <div>
                                                            <p>Using the most basic table markup, here’s how <code
                                                                    class="code-class">.table</code> based tables look by
                                                                default.</p>
                                                        </div>
                                                        <div>
                                                            @can('create user')
                                                            <a href="{{ route('users.create') }}"
                                                                class="text-white btn btn-primary ">
                                                                Create User
                                                            </a>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <table class="datatable-init nowrap nk-tb-list nk-tb-ulist"
                                                        data-auto-responsive="false">
                                                        <thead>
                                                            <tr class="nk-tb-item nk-tb-head">
                                                                <th class="nk-tb-col nk-tb-col-check">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="uid">
                                                                        <label class="custom-control-label"
                                                                            for="uid"></label>
                                                                    </div>
                                                                </th>
                                                                <th class="nk-tb-col"><span class="sub-text">Name</span>
                                                                </th>

                                                                <th class="nk-tb-col tb-col-md"><span
                                                                        class="sub-text">Phone</span></th>

                                                                <th class="nk-tb-col tb-col-lg"><span
                                                                        class="sub-text">Created At</span></th>
                                                                <th class="nk-tb-col tb-col-md"><span
                                                                        class="sub-text">Status</span></th>
                                                                <th class="nk-tb-col nk-tb-col-tools text-end"> Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if ($users->count() > 0)
                                                                @foreach ($users as $user)
                                                                    <tr class="nk-tb-item">
                                                                        <td class="nk-tb-col nk-tb-col-check">
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox notext">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="uid1">
                                                                                <label class="custom-control-label"
                                                                                    for="uid1"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="user-card">

                                                                                <div class="user-info">
                                                                                    <span
                                                                                        class="tb-lead">{{ $user->name }}
                                                                                        <span
                                                                                            class="dot dot-success d-md-none ms-1"></span></span>
                                                                                    <span>{{ $user->email }}</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="nk-tb-col tb-col-md">
                                                                            <span>+811 847-4958</span>
                                                                        </td>

                                                                        <td class="nk-tb-col tb-col-lg">
                                                                            <span>{{ $user->created_at->diffForHumans() }}</span>
                                                                        </td>
                                                                        <td class="nk-tb-col tb-col-md">
                                                                            @if ($user->status)
                                                                                <span
                                                                                    class="tb-status text-success">Active</span>
                                                                            @else
                                                                                <span
                                                                                    class="tb-status text-danger">Inactive</span>
                                                                            @endif

                                                                        </td>
                                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                                            <ul class="nk-tb-actions gx-1">

                                                                                <li>
                                                                                    <div class="d-flex">
                                                                                        @can('edit user')
                                                                                            <a href="#"
                                                                                                class="btn btn-icon btn-trigger mr-2"><em
                                                                                                    class="icon ni ni-focus"></em></a>
                                                                                        @endcan
                                                                                        @can('delete user')
                                                                                            <a href="#"
                                                                                                class="btn btn-icon btn-trigger"><em
                                                                                                    class="icon ni ni-eye"></em></a>
                                                                                        @endcan
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </td>
                                                                    </tr><!-- .nk-tb-item  -->
                                                                @endforeach
                                                            @else
                                                                <tr>
                                                                    <td colspan="10" class="text-center pt-8">Nothing
                                                                        Found.</td>
                                                                </tr>
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- .card-preview -->
                                        </div>
                                    </div><!-- .components-preview -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content @e -->

                    <!-- footer @s
        -->
                        @include('admin.common.footer')
                        <!-- footer @e -->
                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- main @e -->
            </div>
            <!-- app-root @e -->
        @endsection
