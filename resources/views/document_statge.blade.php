@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('styles')
<link rel="stylesheet" href="{{URL::asset('assets/ui/bms/vendors/virtual-select/virtual-select.min.css')}}">
@endsection

@section('content')
<main class="main-section-area">
    <div class="main-container" id="mainWindow" page-id="window101">
        <div class="orderific-title">
            <h1 class="pg-title">Document Stages</h1>
        </div>

        <div class="orderific-navs">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" id="tab-1" data-bs-toggle="tab" data-bs-target="#tab-pane-1" type="button" role="tab" aria-controls="tab-pane-1" aria-selected="true">Barcoding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-2" data-bs-toggle="tab" data-bs-target="#tab-pane-2" type="button" role="tab" aria-controls="tab-pane-2" aria-selected="false">Prepare Document</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-3" data-bs-toggle="tab" data-bs-target="#tab-pane-3" type="button" role="tab" aria-controls="tab-pane-2" aria-selected="false">Scanning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-pane-4" type="button" role="tab" aria-controls="tab-pane-2" aria-selected="false">Quality Management </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-pane-4" type="button" role="tab" aria-controls="tab-pane-2" aria-selected="false">Document Uploading </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-pane-4" type="button" role="tab" aria-controls="tab-pane-2" aria-selected="false">Packing and dispatch </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-pane-1" role="tabpanel" aria-labelledby="pane-1" tabindex="0">
                    <div class="orderific-table-wrapper">
                        <div class="orderific-table">
                            <div class="orderific-filters">
                                <div class="search-area filter-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.3333 17.5L11.0833 12.25C10.6667 12.5833 10.1875 12.8472 9.64583 13.0417C9.10417 13.2361 8.52778 13.3333 7.91667 13.3333C6.40278 13.3333 5.12153 12.809 4.07292 11.7604C3.02431 10.7118 2.5 9.43056 2.5 7.91667C2.5 6.40278 3.02431 5.12153 4.07292 4.07292C5.12153 3.02431 6.40278 2.5 7.91667 2.5C9.43056 2.5 10.7118 3.02431 11.7604 4.07292C12.809 5.12153 13.3333 6.40278 13.3333 7.91667C13.3333 8.52778 13.2361 9.10417 13.0417 9.64583C12.8472 10.1875 12.5833 10.6667 12.25 11.0833L17.5 16.3333L16.3333 17.5ZM7.91667 11.6667C8.95833 11.6667 9.84375 11.3021 10.5729 10.5729C11.3021 9.84375 11.6667 8.95833 11.6667 7.91667C11.6667 6.875 11.3021 5.98958 10.5729 5.26042C9.84375 4.53125 8.95833 4.16667 7.91667 4.16667C6.875 4.16667 5.98958 4.53125 5.26042 5.26042C4.53125 5.98958 4.16667 6.875 4.16667 7.91667C4.16667 8.95833 4.53125 9.84375 5.26042 10.5729C5.98958 11.3021 6.875 11.6667 7.91667 11.6667Z" fill="black" />
                                    </svg>
                                    <input type="search" name="search" placeholder="Search...">
                                </div>
                                <div class="table-button ms-auto">
                                    <button class="btn add-btn addWindow" page-id="window102">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 5.75H0V4.25H4.25V0H5.75V4.25H10V5.75H5.75V10H4.25V5.75Z" fill="white" />
                                        </svg>
                                        <span>Create a Document</span>
                                    </button>
                                </div>
                            </div>
                            <div class="custom-table">
                                <div class="table-responsive">
                                    <table class="table md-col">
                                        <thead>
                                            <tr>
                                                <th class="w-fifty sorting">#</th>
                                                <th class="w-990 sorting">Document No</th>
                                                <th class="w-990 sorting">Document Name</th>
                                                <th class="w-990 sorting">Document Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1254564</td>
                                                <td>test</td>
                                                <td>Scaning</td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>1254564</td>
                                                <td>test</td>
                                                <td>Scaning</td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>1254564</td>
                                                <td>test</td>
                                                <td>Scaning</td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>1254564</td>
                                                <td>test</td>
                                                <td>Scaning</td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination">
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="rpp">Rows Per Page: </p>
                                        <select class="filter-select" name="rows">
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">15</option>
                                            <option value="">20</option>
                                        </select>
                                    </div>
                                    <p class="total-pgs">1–5 of 47</p>
                                    <div class="pagi-arrows">
                                        <button class="first disabled" disabled>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M6 14V6H7.5V14H6ZM14 14L10 10L14 6L15.0625 7.0625L12.125 10L15.0625 12.9375L14 14Z" fill="black" />
                                            </svg>
                                        </button>
                                        <button class="prev disabled" disabled>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9.0625 10L13 6.0625L11.9375 5L6.9375 10L11.9375 15L13 13.9375L9.0625 10Z" fill="black" />
                                            </svg>
                                        </button>
                                        <button class="next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M10.875 10L6.9375 6.0625L8 5L13 10L8 15L6.9375 13.9375L10.875 10Z" fill="black" />
                                            </svg>
                                        </button>
                                        <button class="last">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M7 14L5.9375 12.9375L8.875 10L5.9375 7.0625L7 6L11 10L7 14ZM13.5 14V6H15V14H13.5Z" fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-2" role="tabpanel" aria-labelledby="pane-2" tabindex="0">
                    <div class="orderific-table-wrapper">
                        <div class="orderific-table">
                            <div class="orderific-filters">
                                <div class="search-area filter-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.3333 17.5L11.0833 12.25C10.6667 12.5833 10.1875 12.8472 9.64583 13.0417C9.10417 13.2361 8.52778 13.3333 7.91667 13.3333C6.40278 13.3333 5.12153 12.809 4.07292 11.7604C3.02431 10.7118 2.5 9.43056 2.5 7.91667C2.5 6.40278 3.02431 5.12153 4.07292 4.07292C5.12153 3.02431 6.40278 2.5 7.91667 2.5C9.43056 2.5 10.7118 3.02431 11.7604 4.07292C12.809 5.12153 13.3333 6.40278 13.3333 7.91667C13.3333 8.52778 13.2361 9.10417 13.0417 9.64583C12.8472 10.1875 12.5833 10.6667 12.25 11.0833L17.5 16.3333L16.3333 17.5ZM7.91667 11.6667C8.95833 11.6667 9.84375 11.3021 10.5729 10.5729C11.3021 9.84375 11.6667 8.95833 11.6667 7.91667C11.6667 6.875 11.3021 5.98958 10.5729 5.26042C9.84375 4.53125 8.95833 4.16667 7.91667 4.16667C6.875 4.16667 5.98958 4.53125 5.26042 5.26042C4.53125 5.98958 4.16667 6.875 4.16667 7.91667C4.16667 8.95833 4.53125 9.84375 5.26042 10.5729C5.98958 11.3021 6.875 11.6667 7.91667 11.6667Z" fill="black" />
                                    </svg>
                                    <input type="search" name="search" placeholder="Search...">
                                </div>
                                <div class="frm-item filter-item">
                                    <label class="frm-label" for="">Role</label>
                                    <div class="orderific-multi-select">
                                        <select class="" id="status-filter" name="Supplier" multiple>
                                            <option value="1">Manager</option>
                                            <option value="2">Waiter</option>
                                            <option value="2">Chief</option>
                                            <option value="2">Cashier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="frm-item filter-item last-child">
                                    <label class="frm-label" for="">Status</label>
                                    <div class="orderific-multi-select">
                                        <select class="" id="status-filter" name="Metrics" multiple>
                                            <option value="">Active</option>
                                            <option value="">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-button ms-auto">
                                    <button class="btn white-btn">
                                        <span>Pos Sync</span>
                                    </button>
                                    <button class="btn add-btn addWindow" page-id="window103">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 5.75H0V4.25H4.25V0H5.75V4.25H10V5.75H5.75V10H4.25V5.75Z" fill="white" />
                                        </svg>
                                        <span>Add Staff</span>
                                    </button>
                                </div>
                            </div>
                            <div class="custom-table">
                                <div class="table-responsive">
                                    <table class="table md-col">
                                        <thead>
                                            <tr>
                                                <th class="w-fifty sorting">#</th>
                                                <th class="w-480 sorting">Name</th>
                                                <th class="w-240">Email</th>
                                                <th class="w-125">Role</th>
                                                <th class="w-130">Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Cody Fisher</td>
                                                <td>sanielharris@gmail.com</td>
                                                <td>Manager</td>
                                                <td>
                                                    <span class="status completed">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Esther Howard</td>
                                                <td>sanielharris@gmail.com</td>
                                                <td>Scaning</td>
                                                <td>
                                                    <span class="status deactive">Deactive</span>
                                                </td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Cody Fisher</td>
                                                <td>sanielharris@gmail.com</td>
                                                <td>Tester</td>
                                                <td>
                                                    <span class="status completed">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Cody Fisher</td>
                                                <td>sanielharris@gmail.com</td>
                                                <td>Barcode Generater</td>
                                                <td>
                                                    <span class="status completed">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Cody Fisher</td>
                                                <td>sanielharris@gmail.com</td>
                                                <td>Manager</td>
                                                <td>
                                                    <span class="status completed">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Cody Fisher</td>
                                                <td>sanielharris@gmail.com</td>
                                                <td>Manager</td>
                                                <td>
                                                    <span class="status completed">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Cody Fisher</td>
                                                <td>sanielharris@gmail.com</td>
                                                <td>Manager</td>
                                                <td>
                                                    <span class="status completed">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action-btns">
                                                        <a class="edit" href="javascript:">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                        <a class="delete" href="javascript:">
                                                            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="black" fill-opacity="0.4" />
                                                                <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="black" fill-opacity="0.4" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination">
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="rpp">Rows Per Page: </p>
                                        <select class="filter-select" name="rows">
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">15</option>
                                            <option value="">20</option>
                                        </select>
                                    </div>
                                    <p class="total-pgs">1–5 of 47</p>
                                    <div class="pagi-arrows">
                                        <button class="first disabled" disabled>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M6 14V6H7.5V14H6ZM14 14L10 10L14 6L15.0625 7.0625L12.125 10L15.0625 12.9375L14 14Z" fill="black" />
                                            </svg>
                                        </button>
                                        <button class="prev disabled" disabled>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9.0625 10L13 6.0625L11.9375 5L6.9375 10L11.9375 15L13 13.9375L9.0625 10Z" fill="black" />
                                            </svg>
                                        </button>
                                        <button class="next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M10.875 10L6.9375 6.0625L8 5L13 10L8 15L6.9375 13.9375L10.875 10Z" fill="black" />
                                            </svg>
                                        </button>
                                        <button class="last">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M7 14L5.9375 12.9375L8.875 10L5.9375 7.0625L7 6L11 10L7 14ZM13.5 14V6H15V14H13.5Z" fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-container" id="window102" style="display: none;">

        <div class="orderific-title">
            <div class="title-wrapper">
                <div class="arrow-wrapper backBtn">
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.95087 11.6537L0.296875 5.99994L5.95087 0.346191L7.00462 1.43069L3.18537 5.24994H15.7009V6.74994H3.18537L7.00462 10.5692L5.95087 11.6537Z" fill="black" />
                    </svg>
                </div>
                <div class="content-wrapper">
                    <h1 class="pg-title">Create Document</h1>
                    <p class="nav">Document /<span>Create</span></p>
                </div>
            </div>
        </div>

        <div class="orderific-form-wrapper">
            <div class="orderific-form">
                <div class="form-list">
                    <div class="form-label">
                        <div class="label">
                            Document Information
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-item">
                            <label class="form-label" for="">Document No *</label>
                            <div class="select-parent-form">
                                <input type="text" name="name" placeholder="Ex: 125455">
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label" for="">Document Name *</label>
                            <div class="select-parent-form">
                                <input type="text" name="name" placeholder="Ex: test">
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label" for="">Document Stage</label>
                            <div class="select-parent-form">
                                <select class="form-select-simple" name="country">
                                    <option value="" selected disabled>Select Stage</option>
                                    <option value="">Barcoding</option>
                                    <option value="">Prepare Document</option>
                                    <option value="">Scanning</option>
                                    <option value="">Quality Management </option>
                                    <option value="">Document Uploading</option>
                                    <option value="">Packing and dispatch</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
                    <a class="btn-white" href="javascript:">
                        Cancel
                    </a>
                    <a class="btn-dark next-button" href="javascript:">
                        Submit
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="main-container" id="window103" style="display: none;">

        <div class="orderific-title">
            <div class="title-wrapper">
                <div class="arrow-wrapper backBtn">
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.95087 11.6537L0.296875 5.99994L5.95087 0.346191L7.00462 1.43069L3.18537 5.24994H15.7009V6.74994H3.18537L7.00462 10.5692L5.95087 11.6537Z" fill="black" />
                    </svg>
                </div>
                <div class="content-wrapper">
                    <h1 class="pg-title">Create Staff</h1>
                    <p class="nav">Teams /<span>Create Staff</span></p>
                </div>
            </div>
        </div>

        <div class="orderific-form-wrapper">
            <div class="orderific-form">
                <div class="form-list">
                    <div class="form-label">
                        <div class="label">
                            Basic Information
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-item">
                            <label class="form-label" for="">Name *</label>
                            <div class="select-parent-form">
                                <input type="text" name="name" placeholder="Ex: John Doe">
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label" for="">Gender</label>
                            <div class="select-parent-form">
                                <select class="form-select-simple" name="country">
                                    <option value="" selected disabled>Select a gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label" for="">Email</label>
                            <div class="select-parent-form">
                                <input type="text" name="name" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label" for="">Confirm Password</label>
                            <div class="position-relative w-100">
                                <input type="password" name="password" id="password1" placeholder="Enter Confirm Password">
                                <div class="eye-wrapper">
                                    <i class="fa fas fa-eye-slash toggle-password" data-target="password1">
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
                    </div>
                </div>
                <div class="form-list">
                    <div class="form-label">
                        <div class="label">
                            Job Details
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-item">
                            <label class="form-label" for="">Role</label>
                            <div class="select-parent-form">
                                <select class="form-select-simple" name="country">
                                    <option value="" selected disabled>Select Role</option>
                                    <option value="">Top Left</option>
                                    <option value="">Top Right</option>
                                    <option value="">Bottom Left</option>
                                    <option value="">Bottom Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label" for="">Section</label>
                            <div class="select-parent-form select-btn-wrapper">
                                <select id="newSection" class="form-select" name="section">
                                    <option value="" selected disabled>Select Section</option>
                                    <option value="">Garden</option>
                                    <option value="">Inside</option>
                                    <option value="">Hall</option>
                                    <option value="">Balcony</option>
                                    <option value="addnew">Add New Section</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-list xs-pb">
                    <div class="form-label">
                        <div class="label">
                            Work Schedule
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-content single">
                            <div class="row gx-0 semi-form w-100">
                                <div class="col-12">
                                    <div class="form-item w-100 mb-0">
                                        <div class="checkbox-list gp-xxs">
                                            <div class="working-hours">
                                                <label class="radio r-btn" for="wh1">
                                                    <input class="day-view" data-id="timeforView1" type="checkbox" name="workinghours" id="wh1">
                                                    <span class="radio-ghost chkbx"></span>
                                                    <span class="label">Monday</span>
                                                </label>
                                                <div id="timeforView1" class="time-view">
                                                    <div class="row gx-0 semi-form w-100">
                                                        <div class="col-md-6 ps-0 pe-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">Start Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="stMonday" value="14:00" data-bs-toggle="dropdown">
                                                                    <label for="stMonday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ps-0 ps-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">End Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="etMonday" value="18:00" data-bs-toggle="dropdown">
                                                                    <label for="etMonday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:" class="apply-all custom">
                                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.10417 9.4375L0.0625 5.41667L1.125 4.33333L4.10417 7.3125L10.875 0.5625L11.9375 1.625L4.10417 9.4375Z" fill="black" />
                                                        </svg>
                                                        <span>Apply For All</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="working-hours">
                                                <label class="radio r-btn" for="wh2">
                                                    <input class="day-view" data-id="timeforView2" type="checkbox" name="workinghours" id="wh2">
                                                    <span class="radio-ghost chkbx"></span>
                                                    <span class="label">Tuesday</span>
                                                </label>
                                                <div id="timeforView2" class="time-view">
                                                    <div class="row gx-0 semi-form w-100">
                                                        <div class="col-md-6 ps-0 pe-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">Start Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="stTuesday" data-bs-toggle="dropdown">
                                                                    <label for="stTuesday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ps-0 ps-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">End Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="etTuesday" data-bs-toggle="dropdown">
                                                                    <label for="etTuesday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="working-hours">
                                                <label class="radio r-btn" for="wh3">
                                                    <input class="day-view" data-id="timeforView3" type="checkbox" name="workinghours" id="wh3">
                                                    <span class="radio-ghost chkbx"></span>
                                                    <span class="label">Wednesday</span>
                                                </label>
                                                <div id="timeforView3" class="time-view">
                                                    <div class="row gx-0 semi-form w-100">
                                                        <div class="col-md-6 ps-0 pe-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">Start Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="stWednesday" data-bs-toggle="dropdown">
                                                                    <label for="stWednesday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ps-0 ps-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">End Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="etWednesday" data-bs-toggle="dropdown">
                                                                    <label for="etWednesday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="working-hours">
                                                <label class="radio r-btn" for="wh4">
                                                    <input class="day-view" data-id="timeforView4" type="checkbox" name="workinghours" id="wh4">
                                                    <span class="radio-ghost chkbx"></span>
                                                    <span class="label">Thursday</span>
                                                </label>
                                                <div id="timeforView4" class="time-view">
                                                    <div class="row gx-0 semi-form w-100">
                                                        <div class="col-md-6 ps-0 pe-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">Start Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="stThurday" data-bs-toggle="dropdown">
                                                                    <label for="stThurday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ps-0 ps-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">End Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="etThurday" data-bs-toggle="dropdown">
                                                                    <label for="etThurday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="working-hours">
                                                <label class="radio r-btn" for="wh5">
                                                    <input class="day-view" data-id="timeforView5" type="checkbox" name="workinghours" id="wh5">
                                                    <span class="radio-ghost chkbx"></span>
                                                    <span class="label">Friday</span>
                                                </label>
                                                <div id="timeforView5" class="time-view">
                                                    <div class="row gx-0 semi-form w-100">
                                                        <div class="col-md-6 ps-0 pe-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">Start Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="stFriday" data-bs-toggle="dropdown">
                                                                    <label for="stFriday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ps-0 ps-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">End Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="etFriday" data-bs-toggle="dropdown">
                                                                    <label for="etFriday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="working-hours">
                                                <label class="radio r-btn" for="wh6">
                                                    <input class="day-view" data-id="timeforView6" type="checkbox" name="workinghours" id="wh6">
                                                    <span class="radio-ghost chkbx"></span>
                                                    <span class="label">Saturday</span>
                                                </label>
                                                <div id="timeforView6" class="time-view">
                                                    <div class="row gx-0 semi-form w-100">
                                                        <div class="col-md-6 ps-0 pe-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">Start Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="stSaturday" data-bs-toggle="dropdown">
                                                                    <label for="stSaturday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ps-0 ps-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">End Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="etSaturday" data-bs-toggle="dropdown">
                                                                    <label for="etSaturday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="working-hours">
                                                <label class="radio r-btn" for="wh7">
                                                    <input class="day-view" data-id="timeforView7" type="checkbox" name="workinghours" id="wh7">
                                                    <span class="radio-ghost chkbx"></span>
                                                    <span class="label">Sunday</span>
                                                </label>
                                                <div id="timeforView7" class="time-view">
                                                    <div class="row gx-0 semi-form w-100">
                                                        <div class="col-md-6 ps-0 pe-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">Start Time</label>
                                                                <div class="select-parent-form dropdown">
                                                                    <input class="timePicker" type="text" id="stSunday" data-bs-toggle="dropdown">
                                                                    <label for="stSunday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ps-0 ps-md-2">
                                                            <div class="form-item">
                                                                <label class="form-label" for="">End Time</label>
                                                                <div class="select-parent-form">
                                                                    <input class="timePicker" type="text" id="etSunday" data-bs-toggle="dropdown">
                                                                    <label for="etSunday" class='time-picker'>
                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.3 14.7L14.7 13.3L11 9.6V5H9V10.4L13.3 14.7ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z" fill="black" fill-opacity="0.4" />
                                                                        </svg>
                                                                    </label>
                                                                    <div class="dropdown-menu timepicker-dropdown">
                                                                        <div class="time-container">
                                                                            <ul class="hour-container">
                                                                                @for ($i = 0; $i <= 24; $i++) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                            <ul class="min-container">
                                                                                @for ($i = 0; $i < 60; $i +=5) <li>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</li>
                                                                                    @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <a class="btn-white" href="javascript:">
                        Cancel
                    </a>
                    <a class="btn-dark next-button" href="javascript:">
                        Submit
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->

    <div class="orderific-modal modal fade" id="newSectionModal" tabindex="-1" aria-labelledby="newSectionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="newSectionModalLabel">Add Section</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="orderific-form-wrapper">
                        <div class="orderific-form">
                            <div class="form-list">
                                <div class="form-label">
                                    <div class="label">
                                        Basic Information
                                    </div>
                                </div>
                                <div class="form-content">
                                    <div class="form-item">
                                        <label class="form-label" for="">Name *</label>
                                        <input type="text" name="name" placeholder="Ex: Balcony" required>
                                    </div>
                                    <div class="form-item">
                                        <label class="form-label" for="">Status</label>
                                        <div class="slider-btn d-flex align-items-center">
                                            <label class="slider-switch">
                                                <input type="checkbox">
                                                <span class="slider-slider"></span>
                                            </label><span class="tggl-name"> Active <span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer btn-grp pt-0">
                    <a class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                    <a class="btn btn-dark">Submit</a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('dashboard-scripts')
<script src="{{URL::asset('assets/ui/bms/vendors/virtual-select/virtual-select.min.js')}}"></script>
<script src="{{URL::asset('assets/ui/bms/js/teams.js')}}"></script>
@endsection