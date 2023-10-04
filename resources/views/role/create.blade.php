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
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="components-preview wide-md mx-auto">
                                        <div class="nk-block nk-block-lg ">

                                            <div class="d-flex justify-content-between">
                                                <h5 class="modal-title">Add User</h5>
                                                @can('role list')
                                                <div>
                                                    <a href="{{ route('roles.index') }}"
                                                        class="text-white btn btn-primary ">
                                                        All Roles
                                                    </a>
                                                </div>
                                                @endcan

                                            </div>

                                            <form action="{{ route('roles.store') }}" method="POST" class="mt-2">
                                                @csrf
                                                <div class="row g-gs">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="name"> Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="name"
                                                                    placeholder="admin etc.">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            @foreach ($permissions as $permission)
                                                            <div class="custom-control custom-checkbox mx-3">
                                                                <input
                                                                    onclick="checksinglepermission('role-management-checkbox','management')"
                                                                    name="permissions[]"
                                                                    id="permission{{ $permission->id }}"
                                                                    value="{{ $permission->id }}"
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                >
                                                                <label for="permission{{ $permission->id }}" class="custom-control-label">
                                                                    {{ $permission->name }}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>



                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Add Role</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>


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

            <script>
                $('#permission_all').on('click', function() {
                    if ($(this).is(':checked')) {
                        // check all the checkbox
                        $('input[type=checkbox]').prop('checked', true);
                    } else {
                        // uncheck all the checkbox
                        $('input[type=checkbox]').prop('checked', false);
                    }
                });

                // check permission by group
                function CheckPermissionByGroup(classname, checkthis) {
                    const groupIdName = $("#" + checkthis.id);
                    const classCheckBox = $('.' + classname + ' input');
                    if (groupIdName.is(':checked')) {
                        // check all the checkbox
                        classCheckBox.prop('checked', true);
                    } else {
                        // uncheck all the checkbox
                        classCheckBox.prop('checked', false);
                    }
                    implementallcheck();
                }

                function checksinglepermission(groupClassname, groupId, countTotalPermission) {
                    const classCheckbox = $('.' + groupClassname + ' input');
                    const groupIDCheckBox = $('#' + groupId);

                    // if there is any occurance where somthing is not selected then make select check
                    if ($('.' + groupClassname + ' input:checked').length == countTotalPermission) {
                        groupIDCheckBox.prop('checked', true);
                    } else {
                        groupIDCheckBox.prop('checked', false);
                    }
                    implementallcheck();
                }

                function implementallcheck() {
                    const countPermisssions = 5;
                    const countPermisssionsGroup = 3;
                    var amount = countPermisssions + countPermisssionsGroup;

                    var checkbox = $("input:checked").length;

                    if (amount == checkbox) {
                        $('#permission_all').prop('checked', true);
                    } else {
                        $('#permission_all').prop('checked', false);
                    }
                }
            </script>
        @endsection
