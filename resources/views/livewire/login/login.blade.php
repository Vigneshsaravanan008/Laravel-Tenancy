<div>
    <div class="app-brand justify-content-center mb-4 mt-2">
        <a href="{{ url('/') }}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                        fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                        fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo text-body fw-bold ms-1">Tenancy</span>
        </a>
    </div>
    
    <h4 class="mb-1 pt-2">Welcome to Tenancy! 👋</h4>
    <p class="mb-4">Please sign-in to your account and start the adventure</p>

    <form id="formAuthentication" class="mb-3"
        action="https://demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/index.html"
        method="POST">
        @csrf()
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" wire:model="email"
                placeholder="Enter your email or username" autofocus>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="auth-forgot-password-basic.html">
                    <small>Forgot Password?</small>
                </a>
            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" wire:model="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary d-grid w-100" wire:click="loginForm">Sign in</button>
        </div>
    </form>

    {{-- <p class="text-center">
        <span>New on our platform?</span>
        <a href="auth-register-basic.html">
            <span>Create an account</span>
        </a>
    </p> --}}

    <div class="divider my-4">
        <div class="divider-text">or</div>
    </div>

    <div class="d-flex justify-content-center">
        <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons fa-brands fa-google fs-5"></i>
        </a>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('checkPassword', function(data) {
            const notyf = new Notyf({
                duration: 2000,
                position: {
                    x: 'right',
                    y: 'top',
                },
                types: [
                    {
                        type: 'error',
                        background: 'orange',
                    },
                    {
                        type: 'success',
                        background: 'green',
                    }
                ],
                icon: false
            });
            notyf.open({  
                type: 'error',
                message: data.message
            });
        });
    </script>
@endpush