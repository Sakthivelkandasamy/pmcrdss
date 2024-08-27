@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('content')

<main class="main-section-area">
   <div class="main-container" id="mainWindow" page-id="window101">
      <div class="orderific-title">
         <h1 class="pg-title">File Manager</h1>
      </div>
      <div class="orderific-navs">

         <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-pane-1" role="tabpanel" aria-labelledby="pane-1" tabindex="0">

               <div class="orderific-tabs">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav1" data-bs-toggle="tab" data-bs-target="#nav-pane-1" type="button" role="tab" aria-controls="tab-pane-1" aria-selected="true">Document Upload</button>
                     </li>

                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="nav-pane-1" role="tabpanel" aria-labelledby="nav1" tabindex="0">
                        <div class="orderific-table-wrapper">
                           <div class="orderific-table">
                              <div class="orderific-filters">

                                 <div class="table-button ms-auto">

                                    <button class="btn add-btn addWindow" page-id="window103">
                                       <a href="{{route('documentcreate')}}" style="text-decoration: unset;color: unset;">
                                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.25 5.75H0V4.25H4.25V0H5.75V4.25H10V5.75H5.75V10H4.25V5.75Z" fill="white"></path>
                                          </svg>
                                          <span>Upload File</span>
                                       </a>
                                    </button>
                                 </div>
                              </div>
                              <div class="custom-table">
                                 <div class="table-responsive">
                                    <table class="table md-col">
                                       <thead>
                                          <tr>

                                             <th class="w-555">S. no</th>
                                             <th class="w-555">File Name</th>
                                             <th class="w-150">Path</th>
                                             <th class="w-120">Actions </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($files as $index=>$file)
                                          <tr>
                                             <td>{{ $index+1 }}</td>
                                             <td>{{ $file->name }}</td>
                                             <td><a href="{{ $file->path }}" target="_blank" style="text-decoration: unset;">
                                                   <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M5 15.5001C3.618 15.5001 2.43917 15.02 1.4635 14.0596C0.487833 13.0995 0 11.9284 0 10.5464C0 9.32322 0.391667 8.23539 1.175 7.28289C1.95833 6.33022 2.95767 5.76672 4.173 5.59239C4.473 4.22322 5.13425 3.0803 6.15675 2.16364C7.17925 1.24697 8.377 0.707887 9.75 0.546387V8.74639L7.91925 6.94639L6.8655 8.00014L10.5 11.6346L14.1345 8.00014L13.0807 6.94639L11.25 8.74639V0.546387C12.8833 0.754053 14.25 1.46397 15.35 2.67614C16.45 3.8883 17 5.32964 17 7.00014V7.50014H17.3078C18.3616 7.58214 19.2404 8.00589 19.9443 8.77139C20.6481 9.53672 21 10.4463 21 11.5001C21 12.6155 20.6122 13.561 19.8365 14.3366C19.0608 15.1123 18.1153 15.5001 17 15.5001H5Z" fill="#5559b0"></path>
                                                   </svg>
                                                   download
                                                </a>
                                             </td>

                                             <td>
                                                <div class="action-btns" style="cursor: pointer;">
                                                   <form action="{{ route('documentDestroy', $file->id) }}" method="POST">
                                                      @csrf
                                                      @method('DELETE')

                                                      <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M2.15981 13.5519C1.77124 13.5519 1.44234 13.4173 1.17311 13.1481C0.903873 12.8788 0.769257 12.5499 0.769257 12.1614V3.93646H9.23083V12.1614C9.23083 12.5499 9.09622 12.8788 8.82698 13.1481C8.55775 13.4173 8.22885 13.5519 7.84028 13.5519H2.15981Z" fill="#5559b0" fill-opacity="0.4"></path>
                                                         <path d="M0.769237 2.39803H0V1.24419H2.69231V0.563721H7.30774V1.24419H10V2.39803C10 2.39803 9.61539 2.39807 9.23081 2.39803C8.84623 2.39798 0.769237 2.39803 0.769237 2.39803Z" fill="#5559b0" fill-opacity="0.4"></path>
                                                      </svg>

                                                   </form>
                                                   <a href="javascript:">
                                                      <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M4.5 13C4.0875 13 3.73438 12.8531 3.44062 12.5594C3.14687 12.2656 3 11.9125 3 11.5V1.5C3 1.0875 3.14687 0.734376 3.44062 0.440626C3.73438 0.146876 4.0875 0 4.5 0H12.5C12.9125 0 13.2656 0.146876 13.5594 0.440626C13.8531 0.734376 14 1.0875 14 1.5V11.5C14 11.9125 13.8531 12.2656 13.5594 12.5594C13.2656 12.8531 12.9125 13 12.5 13H4.5ZM1.5 16C1.0875 16 0.734375 15.8531 0.440625 15.5594C0.146875 15.2656 0 14.9125 0 14.5V3H1.5V14.5H11V16H1.5Z" fill="#5559b0" fill-opacity="0.4"></path>
                                                      </svg>
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
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

</main>
@endsection

@section('dashboard-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });

      $('.copy-btn').click(function() {
         var fileId = $(this).data('id');
         var button = $(this);

         $.ajax({
            url: '/document-copy/' + fileId + '/copy',
            type: 'POST',
            success: function(response) {
               // Add the new file to the table
               var newRow = '<tr>' +
                  '<td>' + response.name + '</td>' +
                  '<td>' +
                  '<a href="/document/' + response.id + '/download" class="btn btn-sm btn-success">Download</a> ' +
                  '<button class="btn btn-sm btn-info copy-btn" data-id="' + response.id + '">Copy</button> ' +
                  '<form action="/document-delete/' + response.id + '" method="POST" class="d-inline">' +
                  '@csrf' +
                  '@method("DELETE")' +
                  '<button type="submit" class="btn btn-sm btn-danger">Delete</button>' +
                  '</form>' +
                  '</td>' +
                  '</tr>';
               button.closest('tr').after(newRow);
            },
            error: function() {
               alert('An error occurred while copying the file.');
            }
         });
      });
   })
</script>

@endsection