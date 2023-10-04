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
                                                <h5 class="modal-title">Add User</h5>
                                                <form action="{{ route('users.store') }}" method="POST" class="mt-2">
                                                    @csrf
                                                    <div class="row g-gs">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="name"> Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="name" placeholder="Abu Bin Istiak">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email"> Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" class="form-control"
                                                                        id="email" placeholder="info@softnio.com">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="password">Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="password" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="confirmPassword">Confirm
                                                                    Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="confirmPassword" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Select a Role</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2">
                                                                        <option value="default_option">Select Department
                                                                        </option>
                                                                        <option value="bangladesh">Information Technology
                                                                        </option>
                                                                        <option value="canada">Finance</option>
                                                                        <option value="england">Marketing</option>
                                                                        <option value="pakistan">Human Resource</option>
                                                                        <option value="usa">Graphics</option>
                                                                    </select>
                                                                </div>
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
