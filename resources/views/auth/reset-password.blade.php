<x-auth-layout>
    <div class="bg-image" style="background-image: url({{ asset('assets/media/images/image2.webp') }})">
        <div class="row g-0 justify-content-center bg-primary-dark-op mvh-100">
            <div class="col-md-3 mt-5">
                <div class="card">
                    <div class="card-header text-left text-primary">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" height="2em" width="2em" class="logo-image" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.477 0 0 4.477 0 10v180c0 5.523 4.477 10 10 10h97.926v-25.786c0-1.103.02-2.204.058-3.303a4.496 4.496 0 01-.031-.233l-2.33-20.987v-.001a40.802 40.802 0 00-12.476-25.101l-.001-.001-10.862-10.297H60.265a4.638 4.638 0 110-9.276h12.233l-13.135-12.45a4.638 4.638 0 116.381-6.733l30.594 29c.853-8.61-.18-20.784-7.48-30.853-2.294-3.163-6.572-6.292-12.336-9.198-5.666-2.857-12.31-5.273-18.82-7.23a198.847 198.847 0 00-17.556-4.38c-2.408-.486-4.44-.844-5.948-1.08-1.45-.226-2.167-.297-2.316-.312l-.028-.003c-.002 0-.002 0 0 0-2.345 0-3.585.37-4.175.812-.225.169-1.112.848-.935 4.033.039.696.068 1.468.1 2.314v.021c.348 9.309 1.024 27.385 18.323 48.304 7.283 8.808 16.058 13.391 23.98 15.441 8.067 2.089 14.93 1.474 18.195.308a4.639 4.639 0 013.12 8.736c-5.393 1.926-14.207 2.378-23.64-.063-9.58-2.48-20.131-8.023-28.803-18.51-19.311-23.353-20.08-44.082-20.44-53.755-.031-.847-.06-1.61-.097-2.282-.287-5.163 1.146-9.354 4.631-11.968 3.121-2.34 6.982-2.667 9.74-2.667.834 0 2.277.192 3.776.426 1.66.26 3.827.643 6.348 1.151a208.145 208.145 0 0118.395 4.59c6.802 2.045 14.003 4.643 20.326 7.83 6.224 3.139 12.078 7.083 15.67 12.037 11.438 15.777 10.306 35.034 7.965 44.576a50.09 50.09 0 019.307 18.886 93.709 93.709 0 017.087-15.055c-3.437-7.961-7.105-21.88-.787-35.57 1.982-4.294 5.952-8.144 10.195-11.394 4.355-3.337 9.523-6.432 14.537-9.09 9.914-5.255 19.928-9.162 22.88-9.9 2.768-.692 6.352-.635 9.497 1.707 3.088 2.3 4.838 6.127 5.499 10.978l.053.37.049.338c.815 5.593 3.73 25.592-10.187 45.268-5.042 7.129-11.23 12.871-17.834 16.472-6.588 3.593-13.876 5.19-20.816 3.434a4.637 4.637 0 01-3.358-5.634 4.637 4.637 0 015.634-3.358c4.059 1.027 8.928.234 14.099-2.586 5.157-2.812 10.332-7.506 14.702-13.685 11.748-16.608 9.326-33.4 8.564-38.685l-.001-.004c-.036-.252-.069-.478-.096-.676-.477-3.497-1.509-4.54-1.848-4.792-.28-.209-.765-.383-1.707-.148-1.895.474-11.146 3.988-20.785 9.097-4.763 2.525-9.443 5.348-13.241 8.257-3.91 2.996-6.399 5.72-7.414 7.919-3.518 7.624-2.956 15.628-1.197 22.08a93.244 93.244 0 013.653-4.487l9.501-10.959a4.637 4.637 0 117.009 6.076l-9.501 10.958v.001a84.416 84.416 0 00-20.625 55.286V200H190c5.523 0 10-4.477 10-10V10c0-5.523-4.477-10-10-10H10z"></path>
                        </svg>
                    </div>

                    <div class="card-body">
                        <div class="mb-2 text-center">
                            <p class="fw-bold fs-sm text-muted">{{ __('Reset Password') }}</p>
                        </div>

                        <form action="{{ route('password.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="mb-4">
                                <div class="input-group input-group-lg">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="{{ __('Email') }}" value="{{ old('email', $request->query('email')) }}" required autofocus autocomplete="username">
                                    <x-generic.input-error :messages="$errors->get('email')" class="invalid-feedback mt-2" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="input-group input-group-lg">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                                    <x-generic.input-error :messages="$errors->get('password')" class="invalid-feedback mt-2" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="input-group input-group-lg">
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                                    <x-generic.input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback mt-2" />
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-hero btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>

                    @if (Route::has('landing'))
                        <div class="card-footer text-end">
                            <a href="{{ route('landing') }}" class="fw-medium">{{ __('Cancel') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-success">
                            <h3 class="block-title">{{ __('Terms & Conditions') }}</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a viverra nibh. Mauris odio purus, rhoncus eget finibus quis, euismod sed orci. Sed justo metus, maximus a pellentesque a, varius a nibh. Suspendisse potenti. Maecenas congue velit vel tortor aliquam pellentesque. Duis porta elit odio. In sagittis suscipit orci, quis pulvinar neque sollicitudin id. Nam et pulvinar ipsum, vitae consequat nulla. Morbi id erat est. Curabitur et vestibulum arcu, et feugiat sem. Nunc dignissim euismod nisi, non fermentum ipsum cursus aliquam. </p>
                            <p>Fusce et lacus et lorem sodales tempor nec id ligula. Morbi quis felis sapien. Donec non iaculis mauris, et posuere felis. Integer facilisis tellus magna. Morbi rutrum lacus nisl, bibendum mattis ipsum aliquet ut. Donec accumsan justo in metus congue aliquam. Duis nisi quam, sagittis in lacus ut, vehicula consequat mi. Aliquam erat volutpat. Donec quis egestas leo. Etiam ullamcorper in felis at dictum. Donec dolor turpis, dignissim sit amet tempor in, rhoncus vel orci.</p>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">{{ __('Done') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-auth-layout>
