@section('top-header-styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">
@endsection
@section('topheader')
<header class="top-header" style="background: #fff;">
        <div class="mobile-nav d-xs-block d-md-none">
            <div class="menu-icon" id="menuIcon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="form-item">
      
        </div>
        <div class="top-right-area">
            <div class="search-section">
            <button class="search-btn comm-styl-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <rect width="48" height="48" rx="24" fill="white"/>
                <path d="M31.6 33L25.3 26.7C24.8 27.1 24.225 27.4167 23.575 27.65C22.925 27.8833 22.2333 28 21.5 28C19.6833 28 18.1458 27.3708 16.8875 26.1125C15.6292 24.8542 15 23.3167 15 21.5C15 19.6833 15.6292 18.1458 16.8875 16.8875C18.1458 15.6292 19.6833 15 21.5 15C23.3167 15 24.8542 15.6292 26.1125 16.8875C27.3708 18.1458 28 19.6833 28 21.5C28 22.2333 27.8833 22.925 27.65 23.575C27.4167 24.225 27.1 24.8 26.7 25.3L33 31.6L31.6 33ZM21.5 26C22.75 26 23.8125 25.5625 24.6875 24.6875C25.5625 23.8125 26 22.75 26 21.5C26 20.25 25.5625 19.1875 24.6875 18.3125C23.8125 17.4375 22.75 17 21.5 17C20.25 17 19.1875 17.4375 18.3125 18.3125C17.4375 19.1875 17 20.25 17 21.5C17 22.75 17.4375 23.8125 18.3125 24.6875C19.1875 25.5625 20.25 26 21.5 26Z" fill="black"/>
                </svg>
            </button>
            <div class="search-area">
                    <input type="text" name="search" class="" placeholder="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.14583 12.3708 1.8875 11.1125C0.629167 9.85417 0 8.31667 0 6.5C0 4.68333 0.629167 3.14583 1.8875 1.8875C3.14583 0.629167 4.68333 0 6.5 0C8.31667 0 9.85417 0.629167 11.1125 1.8875C12.3708 3.14583 13 4.68333 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.8125 10.5625 9.6875 9.6875C10.5625 8.8125 11 7.75 11 6.5C11 5.25 10.5625 4.1875 9.6875 3.3125C8.8125 2.4375 7.75 2 6.5 2C5.25 2 4.1875 2.4375 3.3125 3.3125C2.4375 4.1875 2 5.25 2 6.5C2 7.75 2.4375 8.8125 3.3125 9.6875C4.1875 10.5625 5.25 11 6.5 11Z" fill="black" fill-opacity="0.4"/>
                    </svg>
            </div>
        </div>  
        <div class="help-section">
<button class="help-btn comm-styl-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
    <rect width="48" height="48" rx="24" fill="white"/>
    <path d="M22.965 27.7692C22.965 26.6372 23.0954 25.7705 23.3563 25.1692C23.6171 24.5679 24.1617 23.9012 24.99 23.1692C25.6349 22.5949 26.1236 22.074 26.4563 21.6067C26.7889 21.1394 26.9553 20.6095 26.9553 20.0172C26.9553 19.2314 26.6877 18.5782 26.1525 18.0577C25.6172 17.5372 24.8803 17.2769 23.9418 17.2769C23.0854 17.2769 22.4188 17.5064 21.9418 17.9652C21.4649 18.4242 21.1028 18.9364 20.8553 19.5019L19.0303 18.6999C19.4188 17.7423 20.0252 16.9439 20.8495 16.3047C21.6739 15.6657 22.7046 15.3462 23.9418 15.3462C25.5571 15.3462 26.8004 15.8016 27.6715 16.7124C28.5427 17.6233 28.9783 18.7044 28.9783 19.9557C28.9783 20.7377 28.8088 21.4278 28.4698 22.0259C28.1306 22.6239 27.6162 23.2467 26.9265 23.8942C26.0585 24.6904 25.521 25.3182 25.314 25.7777C25.1069 26.2374 25.0033 26.9012 25.0033 27.7692H22.965ZM23.9418 33.4999C23.5328 33.4999 23.1805 33.3522 22.885 33.0567C22.5895 32.7612 22.4418 32.4089 22.4418 31.9999C22.4418 31.5909 22.5895 31.2387 22.885 30.9432C23.1805 30.6477 23.5328 30.4999 23.9418 30.4999C24.3508 30.4999 24.703 30.6477 24.9985 30.9432C25.294 31.2387 25.4418 31.5909 25.4418 31.9999C25.4418 32.4089 25.294 32.7612 24.9985 33.0567C24.703 33.3522 24.3508 33.4999 23.9418 33.4999Z" fill="black"/>
    </svg>
</button>
<div class="help-area">
        <h5>Do you need help?</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
        <a href="#">Learn More</a>
        <div class="help-video">
            <div class="help-video-img">
            <img src="{{URL::asset('assets/ui/bms/img/help.webp')}}" alt="" loading="lazy">
            </div>
            <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <mask id="mask0_3183_61707" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
            <rect width="24" height="24" fill="#D9D9D9"/>
            </mask>
            <g mask="url(#mask0_3183_61707)">
            <path d="M8 19V5L19 12L8 19Z" fill="black"/>
            </g>
            </svg>
            </button>
        </div>
</div>
</div>
            <button class="news-btn comm-styl-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
<rect width="48" height="48" rx="24" fill="white"/>
<path d="M24.6 33.8173C23.2705 33.8173 22.0238 33.565 20.8598 33.0605C19.6956 32.556 18.6802 31.8704 17.8135 31.0038C16.9468 30.1371 16.2613 29.1217 15.7568 27.9575C15.2523 26.7935 15 25.5468 15 24.2173C15 22.0276 15.6677 20.0773 17.003 18.3663C18.3382 16.6554 20.0648 15.5333 22.1828 15C21.9981 16.6052 22.1634 18.1616 22.6788 19.6693C23.1943 21.1769 24.0244 22.5032 25.1693 23.648C26.3141 24.7928 27.6403 25.623 29.148 26.1385C30.6557 26.6538 32.2121 26.8192 33.8173 26.6345C33.2943 28.7525 32.1747 30.4791 30.4585 31.8143C28.7425 33.1496 26.7897 33.8173 24.6 33.8173Z" fill="black"/>
</svg>
            </button>
            <div class="notification-section">
            <button class="notification-btn comm-styl-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
<rect width="48" height="48" rx="24" fill="white"></rect>
<path d="M16.5 30.8845V29.3848H18.3077V21.923C18.3077 20.5782 18.7228 19.3891 19.553 18.3557C20.383 17.3224 21.4487 16.6615 22.75 16.373V15.75C22.75 15.4028 22.8714 15.1077 23.1143 14.8645C23.3571 14.6215 23.6519 14.5 23.9988 14.5C24.3458 14.5 24.641 14.6215 24.8845 14.8645C25.1282 15.1077 25.25 15.4028 25.25 15.75V16.373C26.5513 16.6615 27.617 17.3224 28.447 18.3557C29.2772 19.3891 29.6923 20.5782 29.6923 21.923V29.3848H31.5V30.8845H16.5ZM23.9983 33.6923C23.5008 33.6923 23.0754 33.5153 22.7223 33.1613C22.3689 32.8073 22.1923 32.3817 22.1923 31.8845H25.8077C25.8077 32.3833 25.6306 32.8093 25.2762 33.1625C24.9219 33.5157 24.4959 33.6923 23.9983 33.6923Z" fill="black"></path>
</svg>
</button>

<div class="notification-area">
    <div class="noti-head">
        <h5>Notifications</h5>
        <div class="mark-read-btn">Mark all as read</div>
    </div>
    <ul class="ps-0">
        <li><a href="javascript:void(0);"><p>Special event booked for Saturday evening. Confirm details with the event coordinator.</p>
        <span>23 May, 2024 | 16:34</span></a>
        </li>
        <li><a href="javascript:void(0);"><p>Special event booked for Saturday evening. Confirm details with the event coordinator.</p>
        <span>23 May, 2024 | 16:34</span></a>
        </li>
        <li><a href="javascript:void(0);"><p>Special event booked for Saturday evening. Confirm details with the event coordinator.</p>
        <span>23 May, 2024 | 16:34</span></a>
        </li>
        <li><a href="javascript:void(0);"><p>Special event booked for Saturday evening. Confirm details with the event coordinator.</p>
        <span>23 May, 2024 | 16:34</span></a>
        </li>
    </ul> 
    <div class="see-all-btn">See All</div>  
</div>

</div>


            <button class="profile-btn comm-styl-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
<rect width="48" height="48" rx="24" fill="white"/>
<path d="M24 23.6921C23.0375 23.6921 22.2136 23.3495 21.5283 22.6641C20.8428 21.9786 20.5 21.1546 20.5 20.1921C20.5 19.2296 20.8428 18.4057 21.5283 17.7204C22.2136 17.0349 23.0375 16.6921 24 16.6921C24.9625 16.6921 25.7864 17.0349 26.4718 17.7204C27.1573 18.4057 27.5 19.2296 27.5 20.1921C27.5 21.1546 27.1573 21.9786 26.4718 22.6641C25.7864 23.3495 24.9625 23.6921 24 23.6921ZM16.5 31.3076V29.0844C16.5 28.5947 16.633 28.1412 16.899 27.7239C17.165 27.3066 17.5205 26.9857 17.9655 26.7614C18.9538 26.2769 19.9509 25.9135 20.9567 25.6711C21.9626 25.4288 22.977 25.3076 24 25.3076C25.023 25.3076 26.0374 25.4288 27.0433 25.6711C28.0491 25.9135 29.0462 26.2769 30.0345 26.7614C30.4795 26.9857 30.835 27.3066 31.101 27.7239C31.367 28.1412 31.5 28.5947 31.5 29.0844V31.3076H16.5Z" fill="black"/>
</svg>
            </button>
        </div>
</header>

<!-- Profile Start -->
<div class="profile-section">
    <div class="profile-close-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
    <rect width="48" height="48" rx="24" fill="white"/>
    <path d="M18.4 31L17 29.6L22.6 24L17 18.4L18.4 17L24 22.6L29.6 17L31 18.4L25.4 24L31 29.6L29.6 31L24 25.4L18.4 31Z" fill="black"/>
    </svg>
    </div>
    <div class="profile-top-bottom">
        <div class="profile-top-area">
            <div class="profile-img-area">
                <div class="profile-img">
                    <img src="{{URL::asset('assets/ui/bms/img/profile.webp')}}" alt="" loading="lazy">
                    <button class="take-photo-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <rect width="32" height="32" rx="16" fill="white"/>
                            <path d="M16 20.5C17 20.5 17.8333 20.1597 18.5 19.4792C19.1667 18.7986 19.5 17.9722 19.5 17C19.5 16.0417 19.1667 15.2188 18.5 14.5312C17.8333 13.8438 17 13.5 16 13.5C15 13.5 14.1667 13.8438 13.5 14.5312C12.8333 15.2188 12.5 16.0417 12.5 17C12.5 17.9722 12.8333 18.7986 13.5 19.4792C14.1667 20.1597 15 20.5 16 20.5ZM16 19C15.4167 19 14.9375 18.8125 14.5625 18.4375C14.1875 18.0625 14 17.5903 14 17.0208C14 16.4653 14.1875 15.9896 14.5625 15.5938C14.9375 15.1979 15.4167 15 16 15C16.5833 15 17.0625 15.1979 17.4375 15.5938C17.8125 15.9896 18 16.4653 18 17.0208C18 17.5903 17.8125 18.0625 17.4375 18.4375C17.0625 18.8125 16.5833 19 16 19ZM9.5 23C9.09722 23 8.74653 22.8507 8.44792 22.5521C8.14931 22.2535 8 21.9028 8 21.5V12.5C8 12.0972 8.14931 11.7465 8.44792 11.4479C8.74653 11.1493 9.09722 11 9.5 11H12L13.5 9H18.5L20 11H22.5C22.9167 11 23.2708 11.1493 23.5625 11.4479C23.8542 11.7465 24 12.0972 24 12.5V21.5C24 21.9028 23.8542 22.2535 23.5625 22.5521C23.2708 22.8507 22.9167 23 22.5 23H9.5Z" fill="black"/>
                        </svg>
                </button>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between detail-box">
                <div class="pdetail">
                    <label>Name</label>
                    <p>Ava Wilson</p>
                </div>
                <button class="profile-update-btn pnameedit-btn">Edit</button>
            </div>
            <div class="d-flex align-items-center justify-content-between detail-box">
                <div class="pdetail">
                    <label>Email</label>
                    <p>avawilson@gmail.com</p>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between detail-box">
                <div class="pdetail">
                    <label>Phone</label>
                    <p>+90 123 245 69 87</p>
                </div>
                <button class="profile-update-btn pphoneedit-btn">Change</button>
            </div>
            <div class="d-flex align-items-center justify-content-between detail-box">
                <div class="pdetail">
                    <label>Password</label>
                    <p>**********</p>
                </div>
                <button class="profile-update-btn pverifypass-btn">Change</button>
            </div>
            <div class="d-flex align-items-center justify-content-between detail-box">
                <div class="pdetail">
                    <label>Default Language</label>
                    <p>English</p>
                </div>
                <button class="profile-lang-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M10 13.0625L5 8.0625L6.0625 7L10 10.9375L13.9375 7L15 8.0625L10 13.0625Z" fill="black"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="profile-bottom-area">
            <ul>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M5.74563 11C5.95688 11 6.13542 10.9285 6.28125 10.7856C6.42708 10.6427 6.5 10.4656 6.5 10.2544C6.5 10.0431 6.42854 9.86458 6.28562 9.71875C6.14271 9.57292 5.96563 9.5 5.75437 9.5C5.54312 9.5 5.36458 9.57146 5.21875 9.71438C5.07292 9.85729 5 10.0344 5 10.2456C5 10.4569 5.07146 10.6354 5.21438 10.7812C5.35729 10.9271 5.53438 11 5.74563 11ZM5.74563 8.5C5.95688 8.5 6.13542 8.42854 6.28125 8.28563C6.42708 8.14271 6.5 7.96563 6.5 7.75438C6.5 7.54313 6.42854 7.36458 6.28562 7.21875C6.14271 7.07292 5.96563 7 5.75437 7C5.54312 7 5.36458 7.07146 5.21875 7.21437C5.07292 7.35729 5 7.53437 5 7.74562C5 7.95687 5.07146 8.13542 5.21438 8.28125C5.35729 8.42708 5.53438 8.5 5.74563 8.5ZM8 11H15V9.5H8V11ZM8 8.5H15V7H8V8.5ZM7 17V15H3.5C3.0875 15 2.73438 14.8531 2.44063 14.5592C2.14688 14.2653 2 13.9119 2 13.4992V4.49417C2 4.08139 2.14688 3.72917 2.44063 3.4375C2.73438 3.14583 3.0875 3 3.5 3H16.5C16.9125 3 17.2656 3.14694 17.5594 3.44083C17.8531 3.73472 18 4.08806 18 4.50083V13.5058C18 13.9186 17.8531 14.2708 17.5594 14.5625C17.2656 14.8542 16.9125 15 16.5 15H13V17H7Z" fill="black"/>
                        </svg>
                        <span>Go to SP</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.25033 17V15.3333C8.54199 15.1806 7.93435 14.8611 7.42741 14.375C6.92046 13.8889 6.56283 13.2847 6.35449 12.5625L7.89616 11.9375C8.00727 12.4375 8.28852 12.8854 8.73991 13.2812C9.1913 13.6771 9.66005 13.875 10.1462 13.875C10.6878 13.875 11.1323 13.7361 11.4795 13.4583C11.8267 13.1806 12.0003 12.8194 12.0003 12.375C12.0003 11.9583 11.8441 11.6111 11.5316 11.3333C11.2191 11.0556 10.667 10.7778 9.87533 10.5C8.79199 10.1111 8.00033 9.68403 7.50033 9.21875C7.00033 8.75347 6.75033 8.15278 6.75033 7.41667C6.75033 6.72222 6.97602 6.125 7.42741 5.625C7.8788 5.125 8.48644 4.79861 9.25033 4.64583V3H10.7503V4.64583C11.7503 4.8125 12.4205 5.19444 12.7607 5.79167C13.101 6.38889 13.2781 6.70139 13.292 6.72917L11.8337 7.33333C11.7225 6.97222 11.5003 6.67361 11.167 6.4375C10.8337 6.20139 10.4656 6.08333 10.0628 6.08333C9.57671 6.08333 9.17394 6.20833 8.85449 6.45833C8.53505 6.70833 8.37533 7.01389 8.37533 7.375C8.37533 7.73611 8.54894 8.04514 8.89616 8.30208C9.24338 8.55903 9.88921 8.84722 10.8337 9.16667C11.8059 9.48611 12.5142 9.90278 12.9587 10.4167C13.4031 10.9306 13.6253 11.5833 13.6253 12.375C13.6253 13.1667 13.3684 13.8333 12.8545 14.375C12.3406 14.9167 11.6392 15.2569 10.7503 15.3958V17H9.25033Z" fill="black"/>
                        </svg>
                        <span>Go to Payment</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M2 18V3.5C2 3.0875 2.14688 2.73438 2.44063 2.44063C2.73438 2.14688 3.0875 2 3.5 2H16.5C16.9125 2 17.2656 2.14688 17.5594 2.44063C17.8531 2.73438 18 3.0875 18 3.5V13.5C18 13.9125 17.8531 14.2656 17.5594 14.5594C17.2656 14.8531 16.9125 15 16.5 15H5L2 18ZM9.99563 12.5C10.2069 12.5 10.3854 12.4285 10.5312 12.2856C10.6771 12.1427 10.75 11.9656 10.75 11.7544C10.75 11.5431 10.6785 11.3646 10.5356 11.2188C10.3927 11.0729 10.2156 11 10.0044 11C9.79313 11 9.61458 11.0715 9.46875 11.2144C9.32292 11.3573 9.25 11.5344 9.25 11.7456C9.25 11.9569 9.32146 12.1354 9.46438 12.2812C9.60729 12.4271 9.78438 12.5 9.99563 12.5ZM9.25 10H10.75V4.5H9.25V10Z" fill="black"/>
                        </svg>
                        <span>Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 16C8.33333 16 6.90625 15.4097 5.71875 14.2292C4.53125 13.0486 3.95833 11.5972 4 9.875L2.8125 11.0625L1.75 10L4.75 7L7.75 10L6.6875 11.0625L5.5 9.875C5.47222 11.1806 5.90278 12.2778 6.79167 13.1667C7.68056 14.0556 8.75 14.5 10 14.5C10.3056 14.5 10.5972 14.4722 10.875 14.4167C11.1528 14.3611 11.4236 14.2778 11.6875 14.1667L12.7917 15.2708C12.375 15.4931 11.934 15.6701 11.4688 15.8021C11.0035 15.934 10.5139 16 10 16ZM15.25 13L12.25 10L13.3125 8.9375L14.5 10.125C14.5278 8.81944 14.0972 7.72222 13.2083 6.83333C12.3194 5.94444 11.25 5.5 10 5.5C9.70833 5.5 9.42014 5.52778 9.13542 5.58333C8.85069 5.63889 8.57639 5.72222 8.3125 5.83333L7.20833 4.72917C7.625 4.50694 8.06944 4.32986 8.54167 4.19792C9.01389 4.06597 9.5 4 10 4C11.6806 4 13.1111 4.59028 14.2917 5.77083C15.4722 6.95139 16.0417 8.40278 16 10.125L17.1875 8.9375L18.25 10L15.25 13Z" fill="black"/>
                        </svg>
                        <span>Refresh Cache</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M16.625 10.75H7V9.25H16.625L15.4375 8.0625L16.5 7L19.5 10L16.5 13L15.4375 11.9375L16.625 10.75ZM12.5 7.75V4.5H4.5V15.5H12.5V12.25H14V15.5C14 15.9125 13.8531 16.2656 13.5594 16.5594C13.2656 16.8531 12.9125 17 12.5 17H4.5C4.0875 17 3.73437 16.8531 3.44062 16.5594C3.14687 16.2656 3 15.9125 3 15.5V4.5C3 4.0875 3.14687 3.73438 3.44062 3.44063C3.73437 3.14688 4.0875 3 4.5 3H12.5C12.9125 3 13.2656 3.14688 13.5594 3.44063C13.8531 3.73438 14 4.0875 14 4.5V7.75H12.5Z" fill="black"/>
                        </svg>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
            <div class="last-logged-time">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M1 17L10 2L19 17H1ZM9.99563 14.5C10.2069 14.5 10.3854 14.4285 10.5312 14.2856C10.6771 14.1427 10.75 13.9656 10.75 13.7544C10.75 13.5431 10.6785 13.3646 10.5356 13.2188C10.3927 13.0729 10.2156 13 10.0044 13C9.79313 13 9.61458 13.0715 9.46875 13.2144C9.32292 13.3573 9.25 13.5344 9.25 13.7456C9.25 13.9569 9.32146 14.1354 9.46438 14.2812C9.60729 14.4271 9.78438 14.5 9.99563 14.5ZM9.25 12H10.75V8H9.25V12Z" fill="black" fill-opacity="0.4"/>
                </svg>
                <span>Last Login was 5 min ago</span>
            </div>
        </div>
    </div>
</div>
<!-- Profile End -->

<!-- Profile Name Edit Start-->
<div class="profile-name-edit-model common-model">
    <div class="phead">
        <h5>Edit Name</h5>
        <div class="pclose-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <rect width="48" height="48" rx="24" fill="white"></rect>
                <path d="M18.4 31L17 29.6L22.6 24L17 18.4L18.4 17L24 22.6L29.6 17L31 18.4L25.4 24L31 29.6L29.6 31L24 25.4L18.4 31Z" fill="black"></path>
            </svg>
        </div>
    </div>
    <from>
    <div class="form-group">
        <label class="form-label" for="">Name</label>
        <input name="profile-name" placeholder="Enter Your Name" value="Ava Wilson">
    </div>
    <div class="text-right">
    <button class="profile-update-btn save-changes" type="submit">Save Changes</button>
    </div>
    </form>
</div>
<!-- Profile Name Edit End-->



<!-- Profile Phone Start-->
<div class="profile-phone-edit-model common-model">
    <div class="phead">
        <h5>Change Phone Number</h5>
        <div class="pclose-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <rect width="48" height="48" rx="24" fill="white"></rect>
                <path d="M18.4 31L17 29.6L22.6 24L17 18.4L18.4 17L24 22.6L29.6 17L31 18.4L25.4 24L31 29.6L29.6 31L24 25.4L18.4 31Z" fill="black"></path>
            </svg>
        </div>
    </div>
    <from>
    <div class="form-group">
        <label class="form-label" for="">Phone Number</label>
        <input type="tel" name="phonenumber" id="phone" placeholder="Enter Phone Number">
    </div>
    <div class="text-right">
    <button class="profile-update-btn next-step" type="submit">Next</button>
    </div>
    </form>
</div>
<!-- Profile Phone End-->

<!-- Profile Phone Verify Start-->
<div class="profile-phone-verify-model common-model">
    <div class="phead">
        <h5>Verify Phone Number</h5>
        <div class="pclose-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <rect width="48" height="48" rx="24" fill="white"></rect>
                <path d="M18.4 31L17 29.6L22.6 24L17 18.4L18.4 17L24 22.6L29.6 17L31 18.4L25.4 24L31 29.6L29.6 31L24 25.4L18.4 31Z" fill="black"></path>
            </svg>
        </div>
    </div>
    <from>
    <div class="form-group">
        <label class="form-label ps-0" for="">Enter the code that was sent to</label>
        <h6 class="new-phone-number">+90 1234567890</h6>
        <div id="codeInputs">
                <input type="text" maxlength="1" class="code-input" required>
                <input type="text" maxlength="1" class="code-input" required>
                <input type="text" maxlength="1" class="code-input" required>
                <input type="text" maxlength="1" class="code-input" required>
                <input type="text" maxlength="1" class="code-input" required>
                <input type="text" maxlength="1" class="code-input" required>
            </div>
            <button class="resend style-n p-0 pt-2" disabled="">Resend (60s)</button>
    </div>
    <div class="verify-flex">
    <button class="style-n previous-step">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
        <rect width="48" height="48" rx="24" fill="black" fill-opacity="0.1"/>
        <path d="M21.9509 29.6537L16.2969 23.9999L21.9509 18.3462L23.0046 19.4307L19.1854 23.2499H31.7009V24.7499H19.1854L23.0046 28.5692L21.9509 29.6537Z" fill="black"/>
    </svg>
    </button>
    <button class="profile-update-btn next-step" type="submit">Verify</button>
    </div>
    </form>
</div>
<!-- Profile Phone Verify End-->


<!-- Profile Verify Password Start-->
<div class="profile-verify-pass-model common-model">
    <div class="phead">
        <h5>Change Password</h5>
        <div class="pclose-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <rect width="48" height="48" rx="24" fill="white"></rect>
                <path d="M18.4 31L17 29.6L22.6 24L17 18.4L18.4 17L24 22.6L29.6 17L31 18.4L25.4 24L31 29.6L29.6 31L24 25.4L18.4 31Z" fill="black"></path>
            </svg>
        </div>
    </div>
    <from>
        <div class="form-group">
            <label class="form-label" for="">Current Password *</label>
            <div class="position-relative w-100">
                <input type="password" name="password" id="password" placeholder="Enter Current Password" required>
                <div class="eye-wrapper">
                    <i class="fa fas fa-eye-slash toggle-password" data-target="password">
                    <svg class="eye" width="22" height="14" viewBox="0 0 22 14" fill="#00000066" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0028 11.077C12.136 11.077 13.0984 10.6804 13.8901 9.88725C14.6817 9.09408 15.0776 8.13092 15.0776 6.99775C15.0776 5.86458 14.681 4.90217 13.8878 4.1105C13.0946 3.31883 12.1315 2.923 10.9983 2.923C9.86515 2.923 8.90273 3.31958 8.11106 4.11275C7.3194 4.90592 6.92356 5.86908 6.92356 7.00225C6.92356 8.13542 7.32015 9.09783 8.11331 9.8895C8.90648 10.6812 9.86965 11.077 11.0028 11.077ZM11.0006 9.7C10.2506 9.7 9.61306 9.4375 9.08806 8.9125C8.56306 8.3875 8.30056 7.75 8.30056 7C8.30056 6.25 8.56306 5.6125 9.08806 5.0875C9.61306 4.5625 10.2506 4.3 11.0006 4.3C11.7506 4.3 12.3881 4.5625 12.9131 5.0875C13.4381 5.6125 13.7006 6.25 13.7006 7C13.7006 7.75 13.4381 8.3875 12.9131 8.9125C12.3881 9.4375 11.7506 9.7 11.0006 9.7ZM11.0018 14C8.70231 14 6.60706 13.3657 4.71606 12.097C2.82506 10.8285 1.43273 9.1295 0.539062 7C1.43273 4.8705 2.82456 3.1715 4.71456 1.903C6.60473 0.634333 8.69965 0 10.9993 0C13.2988 0 15.3941 0.634333 17.2851 1.903C19.1761 3.1715 20.5684 4.8705 21.4621 7C20.5684 9.1295 19.1766 10.8285 17.2866 12.097C15.3964 13.3657 13.3015 14 11.0018 14Z" fill="black" fill-opacity="0.4"/>
                    </svg>
                    <svg class="eye-slash" width="25" height="17" fill="#00000066" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                    </svg>
                    </i>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="">New Password *</label>
            <div class="position-relative w-100">
                <input type="password" name="password-one" id="password-one" placeholder="Enter New Password" required>
                <div class="eye-wrapper">
                    <i class="fa fas fa-eye-slash toggle-password" data-target="password-one">
                    <svg class="eye" width="22" height="14" viewBox="0 0 22 14" fill="#00000066" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0028 11.077C12.136 11.077 13.0984 10.6804 13.8901 9.88725C14.6817 9.09408 15.0776 8.13092 15.0776 6.99775C15.0776 5.86458 14.681 4.90217 13.8878 4.1105C13.0946 3.31883 12.1315 2.923 10.9983 2.923C9.86515 2.923 8.90273 3.31958 8.11106 4.11275C7.3194 4.90592 6.92356 5.86908 6.92356 7.00225C6.92356 8.13542 7.32015 9.09783 8.11331 9.8895C8.90648 10.6812 9.86965 11.077 11.0028 11.077ZM11.0006 9.7C10.2506 9.7 9.61306 9.4375 9.08806 8.9125C8.56306 8.3875 8.30056 7.75 8.30056 7C8.30056 6.25 8.56306 5.6125 9.08806 5.0875C9.61306 4.5625 10.2506 4.3 11.0006 4.3C11.7506 4.3 12.3881 4.5625 12.9131 5.0875C13.4381 5.6125 13.7006 6.25 13.7006 7C13.7006 7.75 13.4381 8.3875 12.9131 8.9125C12.3881 9.4375 11.7506 9.7 11.0006 9.7ZM11.0018 14C8.70231 14 6.60706 13.3657 4.71606 12.097C2.82506 10.8285 1.43273 9.1295 0.539062 7C1.43273 4.8705 2.82456 3.1715 4.71456 1.903C6.60473 0.634333 8.69965 0 10.9993 0C13.2988 0 15.3941 0.634333 17.2851 1.903C19.1761 3.1715 20.5684 4.8705 21.4621 7C20.5684 9.1295 19.1766 10.8285 17.2866 12.097C15.3964 13.3657 13.3015 14 11.0018 14Z" fill="black" fill-opacity="0.4"/>
                    </svg>
                    <svg class="eye-slash" width="25" height="17" fill="#00000066" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                    </svg>
                    </i>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Confirm Password *</label>
            <div class="position-relative w-100">
                <input type="password" name="password-two" id="password-two" placeholder="Enter Confirm Password" required>
                <div class="eye-wrapper">
                    <i class="fa fas fa-eye-slash toggle-password" data-target="password-two">
                    <svg class="eye" width="22" height="14" viewBox="0 0 22 14" fill="#00000066" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0028 11.077C12.136 11.077 13.0984 10.6804 13.8901 9.88725C14.6817 9.09408 15.0776 8.13092 15.0776 6.99775C15.0776 5.86458 14.681 4.90217 13.8878 4.1105C13.0946 3.31883 12.1315 2.923 10.9983 2.923C9.86515 2.923 8.90273 3.31958 8.11106 4.11275C7.3194 4.90592 6.92356 5.86908 6.92356 7.00225C6.92356 8.13542 7.32015 9.09783 8.11331 9.8895C8.90648 10.6812 9.86965 11.077 11.0028 11.077ZM11.0006 9.7C10.2506 9.7 9.61306 9.4375 9.08806 8.9125C8.56306 8.3875 8.30056 7.75 8.30056 7C8.30056 6.25 8.56306 5.6125 9.08806 5.0875C9.61306 4.5625 10.2506 4.3 11.0006 4.3C11.7506 4.3 12.3881 4.5625 12.9131 5.0875C13.4381 5.6125 13.7006 6.25 13.7006 7C13.7006 7.75 13.4381 8.3875 12.9131 8.9125C12.3881 9.4375 11.7506 9.7 11.0006 9.7ZM11.0018 14C8.70231 14 6.60706 13.3657 4.71606 12.097C2.82506 10.8285 1.43273 9.1295 0.539062 7C1.43273 4.8705 2.82456 3.1715 4.71456 1.903C6.60473 0.634333 8.69965 0 10.9993 0C13.2988 0 15.3941 0.634333 17.2851 1.903C19.1761 3.1715 20.5684 4.8705 21.4621 7C20.5684 9.1295 19.1766 10.8285 17.2866 12.097C15.3964 13.3657 13.3015 14 11.0018 14Z" fill="black" fill-opacity="0.4"/>
                    </svg>
                    <svg class="eye-slash" width="25" height="17" fill="#00000066" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                    </svg>
                    </i>
                </div>
            </div>
        </div>
    <div class="text-right">
    <button class="profile-update-btn save-changes w-100" type="submit">Save Changes</button>
    </div>
    </form>
</div>
<!-- Profile Verify Password End-->

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="{{URL::asset('assets/js/common.js')}}"></script>
@endsection