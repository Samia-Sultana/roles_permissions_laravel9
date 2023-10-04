@extends('admin.common.master')

@section('title')
    <title>Roles</title>
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
                    <!-- main header @s
            -->
                    @include('admin.common.navbarHeader')

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
                                                            <a href="{{ route('roles.create') }}" class="text-white btn btn-primary ">
                                                                Create Role
                                                            </a>
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
                                                                <th class="nk-tb-col tb-col-mb"><span
                                                                        class="sub-text">Role</span></th>
                                                                <th class="nk-tb-col tb-col-md"><span
                                                                        class="sub-text">Permissions</span></th>

                                                                <th class="nk-tb-col tb-col-lg"><span
                                                                        class="sub-text">Created At</span></th>
                                                                <th class="nk-tb-col tb-col-md"><span
                                                                        class="sub-text">Status</span></th>
                                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="uid1">
                                                                        <label class="custom-control-label"
                                                                            for="uid1"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div
                                                                            class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                            <span>AB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Abu Bin Ishtiyak <span
                                                                                    class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>info@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                    <span class="tb-amount">35040.34 <span
                                                                            class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+811 847-4958</span>
                                                                </td>

                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span>05 Oct 2019</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#"
                                                                                class="btn btn-trigger btn-icon"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#"
                                                                                class="btn btn-trigger btn-icon"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#"
                                                                                class="btn btn-trigger btn-icon"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                    data-bs-toggle="dropdown"><em
                                                                                        class="icon ni ni-more-h"></em></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-focus"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-eye"></em><span>Delete</span></a></li>
                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-repeat"></em><span>Transaction</span></a>
                                                                                        </li>
                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-activity-round"></em><span>Activities</span></a>
                                                                                        </li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-shield-star"></em><span>Reset
                                                                                                    Pass</span></a></li>
                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-shield-off"></em><span>Reset
                                                                                                    2FA</span></a></li>
                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-na"></em><span>Suspend
                                                                                                    User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->

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




                    @include('admin.common.footer')
                    <!-- footer @e -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- main @e -->
        </div>
        <!-- app-root @e -->
    @endsection
