@include('layouts.header')
<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('layouts.navigation')
        <div class="container-fluid">
            <h3 class="text-dark mb-4">Profile</h3>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4"
                                src="{{ asset('assets/img/User.png') }}" width="160" height="160">
                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change
                                    Photo</button></div>
                        </div>
                    </div>
                    <div class="card shadow mb-4"></div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                        last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                        last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">User Settings</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="username"><strong>Username</strong></label><input
                                                        class="form-control" type="text" id="username"
                                                        placeholder="user.name" name="username"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="email"><strong>Email Address</strong></label><input
                                                        class="form-control" type="email" id="email"
                                                        placeholder="user@example.com" name="email"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="first_name"><strong>First Name</strong></label><input
                                                        class="form-control" type="text" id="first_name"
                                                        placeholder="Digital " name="first_name"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="last_name"><strong>Last Name</strong></label><input
                                                        class="form-control" type="text" id="last_name"
                                                        placeholder="Rick" name="last_name"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><a class="btn btn-primary btn-sm" role="button"
                                                href="profile.html">Save Settings</a></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Contact Settings</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3"><label class="form-label"
                                                for="address"><strong>Address</strong></label><input
                                                class="form-control" type="text" id="address"
                                                placeholder="Sunset Blvd, 38" name="address"></div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="city"><strong>City</strong></label><input
                                                        class="form-control" type="text" id="city"
                                                        placeholder="Los Angeles" name="city"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="country"><strong>Country</strong></label><input
                                                        class="form-control" type="text" id="country"
                                                        placeholder="USA" name="country"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><a class="btn btn-primary btn-sm" role="button"
                                                href="profile.html">Save&nbsp;Settings</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Forum Settings</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="mb-3"><label class="form-label" for="signature"><strong>Student
                                            Signature</strong></label>
                                    <textarea class="form-control" id="signature" rows="4" name="signature"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch"><input class="form-check-input"
                                            type="checkbox" id="formCheck-1"><label class="form-check-label"
                                            for="formCheck-1"><strong>Notify me about new replies</strong></label>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save
                                        Settings</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
</body>

</html>
