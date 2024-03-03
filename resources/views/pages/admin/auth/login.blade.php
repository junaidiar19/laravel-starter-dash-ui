<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.admin.meta')
    <title>Login</title>
    @include('includes.admin.styles')
</head>

<body>
    <div class="min-h-screen bg-primary bg-pattern">
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center g-0 min-vh-100">
                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card smooth-shadow-md">
                        <!-- Card body -->
                        <div class="card-body p-6">
                            <div class="mb-4 text-center">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo/logo-primary.svg') }}" class="mb-4"
                                        alt="" />
                                </a>
                                <p class="mb-6">Please enter your user information.</p>
                            </div>

                            <!-- Form -->
                            <x-form :action="route('admin.authenticate')">
                                <!-- Username -->
                                <div class="mb-3">
                                    <x-form.input-label>Email</x-form.input-label>
                                    <x-form.input type="email" name="email" placeholder="Email address here"
                                        :value="old('email')" />
                                    <x-form.input-error name="email" />
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <x-form.input-label>Password</x-form.input-label>
                                    <x-form.input-password />
                                </div>
                                <!-- Checkbox -->
                                <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="rememberme" name="remember">
                                        <label class="form-check-label" for="rememberme">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <x-button.submit type="submit" class="btn-primary">
                                            Sign in
                                        </x-button.submit>
                                    </div>
                                </div>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('scripts')
</body>

</html>
