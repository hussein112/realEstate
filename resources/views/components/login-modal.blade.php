<div class="modal fade" tabindex="-1" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login To Continue</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Login Form -->

                <form action="{{ route('u-login') }}" method="post" class="container flex flex-column flex-wrap">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route("password.request") }}">Forgot Password?</a>
                    </div>
                    <div class="form-check mb-3">
                        <input name="remember" class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    @if($errors->any)
                        <x-login-errors>
                            <x-slot name="errors">
                                @foreach($errors->all() as $error)
                                    <strong class="text-danger">* {{ $error }}</strong>
                                @endforeach
                            </x-slot>
                        </x-login-errors>
                    @endif
                    <button type="submit" class="btn btn-primary m-2">Login</button>
                </form>

                <!-- End Login Form -->
            </div>
        </div>
    </div>
</div>
