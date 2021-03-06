@extends('layouts.admin')


@section('content')
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit User</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">All Users</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit User</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="firstNameInput">First Name</label>
                                            <input id="firstNameInput" type="text" name="firstNameInput" data-parsley-trigger="change" required="" placeholder="Enter first name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastNameInput">Last Name</label>
                                            <input id="lastNameInput" type="text" name="lastNameInput" data-parsley-trigger="change" required="" placeholder="Enter last name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailInput">Email</label>
                                            <input id="emailInput" type="email" name="emailInput" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input id="inputPassword" type="password" name="inputPassword" data-parsley-trigger="change" required="" placeholder="Enter password" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRole">Role</label>
                                            <select id="inputRole" class="form-control">
                                                <option value="admin">Admin</option>
                                                <option value="employee">Employee</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
@stop