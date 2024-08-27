@extends('ui.bms.ltr.layouts.cover')

@section('styles')

@endsection

@section('content')

    <div class="row gx-0 h-100">
        <div class="col-lg-3 d-none d-lg-block">
            <div class="banner-container">
                <div class="logo-container">
                    <img src="{{URL::asset('assets/ui/bms/img/Logo.webp')}}" alt="">
                </div>
                <div class="banner-content">
                    <h1>Simplifying Restaurant Management</h1>
                    <p>Streamline your restaurant operations with BMS. Manage reservations, orders, inventory, and staff effortlessly, and focus on delivering exceptional dining experiences.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="sign-container">
                <div class="form-wrapper m-auto">
                    <div class="form-row">
                        <h2 class="title mb-2">Forgot your password?</h2>
                        <p>Please enter your registered email to get the link for secure password reset.</p>
                    </div>
                    <form class="form-row form-container w-100">
                        <div class="form-item">
                            <label class="form-label" for="">Email</label>
                            <input type="text" name="email" id=""  placeholder="Enter Email">
                        </div>
                        <div class="form-row my-3">
                            <input type="submit" value="Continue">
                        </div>
                    </form>
                    <div class="form-row w-100">
                        <div class="divider"></div>
                    </div>
                    <div class="form-row">
                        <a class="link ms-2" href="javascript:">
                            Back to sign-in
                        </a>
                    </div>
                </div>
                <div class="footer-container">
                    <div class="footer-list">
                        <a class="link" href="javascript:">
                            Privacy Policy
                        </a>
                        <div class="select-parent ms-auto">
                            <select class="select link none-underline" href="javascript:" placeholder="Search...">
                                <option value="eng">English</option>
                                <option value="spanish">Spanish</option>
                                <option value="portuegese">Russian</option>
                                <option value="portuegese">Hindi</option>
                                <option value="portuegese">Japanese</option>
                                <option value="portuegese">Arabic</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </div>

@endsection

@section('scripts')
@endsection