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
                                        <div class="nk-block nk-block-lg">
                                            <div class="">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="modal-title">Add User</h5>
                                                    @can('user list')
                                                    <div>
                                                        <a href="{{ route('users.index') }}"
                                                            class="text-white btn btn-primary ">
                                                            All Users
                                                        </a>
                                                    </div>
                                                    @endcan

                                                </div>
                                                <form action="{{ route('users.store') }}" method="POST" class="mt-2">
                                                    @csrf
                                                    <div class="row g-gs">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="name"> Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="name" name="name" placeholder="Abu Bin Istiak">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email"> Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" class="form-control"
                                                                        id="email" name="email" placeholder="info@softnio.com">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="password">Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" class="form-control"
                                                                        id="password" name="password" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="confirmPassword">Confirm
                                                                    Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" class="form-control"
                                                                        id="confirmPassword" name="password_confirmation" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Select a Role</label>
                                                                <div class="form-control-wrap">
                                                                    <select id="roles" name="roles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                        <option selected value="" style="display: none">Choose a role</option>
                                                                        @foreach($roles as $role)
                                                                        <option value="{{ $role->name }}"> {{ $role->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="confirmPassword" > Status </label>
                                                            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                <option selected value="" style="display: none">Choose a status</option>
                                                                <option value="1"> Active</option>
                                                                <option value="0"> Inactive</option>

                                                            </select>
                                                            </div>
                                                        </div>



                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <button  type="submit"
                                                                    class="btn btn-primary">Add user</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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
