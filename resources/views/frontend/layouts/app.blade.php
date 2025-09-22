<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bcoinmart | {{ isset($page_title) ? $page_title : '' }}</title>
    @include('frontend.includes.css.css')
</head>

<body>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('frontend.includes.candle_animation')
<!-- Header Start-->
@include('frontend.includes.layouts.header')

{{--After admin panel setup it will go to the dashboard--}}
{{-- 2factor Authentication Modal--}}
@if(session('two_factor_secret'))
    <!-- Modal Trigger Button (hidden, auto-open) -->
    <button id="twoFactorModalBtn" style="display:none;" data-bs-toggle="modal" data-bs-target="#twoFactorModal"></button>

    <!-- Modal -->
    <div class="modal fade" id="twoFactorModal" tabindex="-1" aria-labelledby="twoFactorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px;">
                <div class="modal-header" style="background: #f6a401; color: white; border-top-left-radius: 16px; border-top-right-radius: 16px;">
                    <h5 class="modal-title" id="twoFactorModalLabel">Two-Factor Authentication Enabled!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <p>Use this secret key in your authenticator app:</p>
                    <div style="font-size: 22px; font-weight: bold; background: #fffbe6; color: #f6a401; padding: 12px 0; border-radius: 8px; margin-bottom: 16px;">
                        {{ session('two_factor_secret') }}
                    </div>
                    <button onclick="copySecret()" class="btn btn-warning" style="color: white; font-weight: bold;">Copy Secret</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Auto-open modal on page load
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('twoFactorModalBtn').click();
        });
        function copySecret() {
            const secret = "{{ session('two_factor_secret') }}";
            navigator.clipboard.writeText(secret)
                .then(() => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Copied!',
                        text: 'Secret key copied to clipboard!',
                        timer: 1500,
                        showConfirmButton: false
                    });
                });
        }
    </script>
@endif
{{--2factor Authentication Modal End--}}
<!-- Header End -->
@yield('content')
@include('frontend.includes.layouts.footer')

@include('frontend.includes.js.js')

</body>
</html>
