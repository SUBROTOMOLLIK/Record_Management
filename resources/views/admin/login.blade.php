<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.parts.head')
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                                    @include('admin.layouts.parts.messages')
                                    <div class="card-body">
                                        <form action="{{route('admin.login.submit')}}" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="inputEmail">User Name</label>
                                                <input class="form-control" id="inputEmail" name="username" type="text" placeholder="user name" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        @include('admin.layouts.parts.script')
    </body>
</html>
