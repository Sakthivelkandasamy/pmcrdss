@extends('layouts.cover')

@section('styles')

@endsection

@section('content')

<div class="row gx-0 h-100">
    <div class="col-lg-3 d-none d-lg-block">
        <div class="banner-container">
            <div class="logo-container">
                <img src="" alt="">
            </div>
            <div class="banner-content">
                
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="sign-container">
            <div class="form-wrapper m-auto">
                <div class="form-row">
                    <h2 class="title">Welcome to PMCRDSS </h2>
                </div>
                
                <form class="form-row form-container w-100">
                    <div class="form-item">
                        <label class="form-label" for="">Email</label>
                        <input type="text" name="email" id="" placeholder="Enter Email">
                    </div>
                    <div class="form-item">
                        <label class="form-label" for="">Password</label>
                        <div class="position-relative w-100">
                            <input type="password" name="password" id="password" placeholder="Enter Password">
                            <div class="eye-wrapper">
                                <i class="fa fas fa-eye-slash toggle-password" data-target="password">
                                    <svg class="eye" width="22" height="14" viewBox="0 0 22 14" fill="#00000066" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0028 11.077C12.136 11.077 13.0984 10.6804 13.8901 9.88725C14.6817 9.09408 15.0776 8.13092 15.0776 6.99775C15.0776 5.86458 14.681 4.90217 13.8878 4.1105C13.0946 3.31883 12.1315 2.923 10.9983 2.923C9.86515 2.923 8.90273 3.31958 8.11106 4.11275C7.3194 4.90592 6.92356 5.86908 6.92356 7.00225C6.92356 8.13542 7.32015 9.09783 8.11331 9.8895C8.90648 10.6812 9.86965 11.077 11.0028 11.077ZM11.0006 9.7C10.2506 9.7 9.61306 9.4375 9.08806 8.9125C8.56306 8.3875 8.30056 7.75 8.30056 7C8.30056 6.25 8.56306 5.6125 9.08806 5.0875C9.61306 4.5625 10.2506 4.3 11.0006 4.3C11.7506 4.3 12.3881 4.5625 12.9131 5.0875C13.4381 5.6125 13.7006 6.25 13.7006 7C13.7006 7.75 13.4381 8.3875 12.9131 8.9125C12.3881 9.4375 11.7506 9.7 11.0006 9.7ZM11.0018 14C8.70231 14 6.60706 13.3657 4.71606 12.097C2.82506 10.8285 1.43273 9.1295 0.539062 7C1.43273 4.8705 2.82456 3.1715 4.71456 1.903C6.60473 0.634333 8.69965 0 10.9993 0C13.2988 0 15.3941 0.634333 17.2851 1.903C19.1761 3.1715 20.5684 4.8705 21.4621 7C20.5684 9.1295 19.1766 10.8285 17.2866 12.097C15.3964 13.3657 13.3015 14 11.0018 14Z" fill="black" fill-opacity="0.4" />
                                    </svg>
                                    <svg class="eye-slash" width="25" height="17" fill="#00000066" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="form-item rem-item flex-row align-items-center justify-content-between">
                        <div class="remb-me d-flex align-items-center justify-content-start gap-2">
                            <label class="radio custom-check" for="checkRef">
                                <i class="fa-solid fa-check"></i>
                                <input type="checkbox" name="rememberme" id="checkRef">
                            </label>
                            <span>Remember me</span>
                        </div>
                        <a class="link" href="javascript:">
                            Forgot Password
                        </a>
                    </div>
                    <div class="form-row my-3">
                        <input type="submit" value="Sign In">
                    </div>
                </form>
                <div class="form-row w-100">
                    <div class="divider"></div>
                </div>
                <div class="form-row">
                    <span class="light-text">Don’t have an account?</span>
                    <a class="link ms-1" href="javascript:">
                        Sign Up
                    </a>
                </div>
            </div>
            <div class="footer-container">
                <div class="footer-list">
                    <a class="link" href="javascript:">
                        
                    </a>
                    <div class="select-parent ms-auto">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection