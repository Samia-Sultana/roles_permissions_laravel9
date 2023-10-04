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
                                                                <a href="{{ route('roles.create') }}"
                                                                    class="text-white btn btn-primary ">
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
                                                                    <th class="nk-tb-col"><span class="sub-text">ID</span>
                                                                    </th>
                                                                    <th class="nk-tb-col tb-col-mb"><span
                                                                            class="sub-text">Role</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span
                                                                            class="sub-text">Permissions</span></th>

                                                                    <th class="nk-tb-col tb-col-lg"><span
                                                                            class="sub-text">Created At</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span
                                                                            class="sub-text">Status</span></th>
                                                                    <th class="nk-tb-col nk-tb-col-tools text-end">Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if ($roles->count())
                                                                    @foreach ($roles as $role)
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
                                                                                            class="tb-lead">{{ $role->id }}
                                                                                            <span
                                                                                                class="dot dot-success d-md-none ms-1"></span></span>

                                                                                    </div>


                                                                                </div>
                                                                            </td>
                                                                            <td class="nk-tb-col tb-col-mb"
                                                                                data-order="35040.34">
                                                                                <span class="tb-amount">{{ $role->name }}
                                                                                    <span class="currency"></span></span>
                                                                            </td>
                                                                            <td class="nk-tb-col tb-col-md">
                                                                                <div class="d-flex gap-2">
                                                                                    <button id="showPerIcon{{ $role->id }}"
                                                                                            type="button"
                                                                                            onclick="permissionShow('show', {{$role->id}})"
                                                                                            class="btn btn-light"
                                                                                            data-toggle="collapse"
                                                                                            data-target="#permission{{ $role->id }}"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="permission{{ $role->id }}">
                                                                                        <i class="bi bi-eye text-pink"></i> Show
                                                                                    </button>
                                                                                </div>

                                                                                <div id="permission{{ $role->id }}" class="collapse ">
                                                                                    <div class="d-inline-flex flex-wrap">
                                                                                    @foreach ($role->permissions as $item)
                                                                                        <div class="bg-success text-white px-2 py-1 rounded font-weight-bold m-1">
                                                                                            {{ $item->name }}
                                                                                        </div>
                                                                                    @endforeach
                                                                                    </div>
                                                                                </div>


                                                                            </td>

                                                                            <td class="nk-tb-col tb-col-lg">
                                                                                <span>05 Oct 2019</span>
                                                                            </td>
                                                                            <td class="nk-tb-col tb-col-md">
                                                                                <span
                                                                                    class="tb-status text-success">Active</span>
                                                                            </td>
                                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-1">

                                                                                    <li>
                                                                                        <div class="d-flex">
                                                                                            <a href="#" class="btn btn-icon btn-trigger mr-2"><em class="icon ni ni-focus"></em></a>
                                                                                            <a href="#" class="btn btn-icon btn-trigger"><em class="icon ni ni-eye"></em></a>
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




                        @include('admin.common.footer')
                        <!-- footer @e -->
                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- main @e -->
            </div>
            <!-- app-root @e -->

            <script>
                function permissionShow(param, id) {
                    var button = $('#showPerIcon' + id); // Get the button element

                    if (param === 'show') {
                        $('#permission' + id).collapse('show');
                        button.text('Hide');
                        button.attr('onclick', "permissionShow('hide', " + id + ")");
                    } else {
                        $('#permission' + id).collapse('hide');
                        button.text('Show');
                        button.attr('onclick', "permissionShow('show', " + id + ")");
                    }
                }
            </script>




        @endsection
