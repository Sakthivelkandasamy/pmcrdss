@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('content')

<main class="main-section-area">
    <div class="main-container" id="window103">
      <div class="orderific-title">
         <div class="title-wrapper">
            <div class="arrow-wrapper backBtn" id=''>
               <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.95087 11.6537L0.296875 5.99994L5.95087 0.346191L7.00462 1.43069L3.18537 5.24994H15.7009V6.74994H3.18537L7.00462 10.5692L5.95087 11.6537Z" fill="black"/>
               </svg>
            </div>
            <div class="content-wrapper">
               <h1 class="pg-title">Upload</h1>
               <p class="nav">Document /<span>Upload</span></p>
            </div>
         </div>
      </div>
      <div class="orderific-form-wrapper">
        <form action="{{ route('documentStore') }}" method="POST" enctype="multipart/form-data" class="mb-4">
            @csrf
         <div class="orderific-form">
            <div class="form-list">
               
               <div class="form-content">
                  <div class="form-item">
                     <label class="form-label" for="">Folder Name *</label>
                     <div class="select-parent-form">
                        <input type="text" name="folder" placeholder="folder Name" required>
                     </div>
                  </div>
                  
               </div>
            </div>
            <div class="form-list">
               
               <div class="form-content">
                  
                  <div class="form-item">
                     <label class="form-label" for="">Document</label>
                     <div class="select-parent-form">
                        <input class="file-upload-input" type="file" id="file" name="file" placeholder="Enter Name" required>
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-list">
               
               <div class="form-content">
                  
                  <div class="form-item">
                 <div class="btn-group">
                           <a  type="submit" class="btn-white" href="{{route('documentlist')}}">
                           Cancel
                           </a>
                           <button type="submit"  class="btn-disabled" >
                           Submit
                           </button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         </form>
      </div>
   </div>
</main>
@endsection

@section('dashboard-scripts')


@endsection