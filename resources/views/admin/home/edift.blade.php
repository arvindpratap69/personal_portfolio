@extends('admin.layouts.app')
@section('title','Dashboard-Page')
@section('content')
<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
       <!--begin::Start Navbar Links-->
       <ul class="navbar-nav">
          <li class="nav-item">
             <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
             <i class="bi bi-list"></i>
             </a>
          </li>
          <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
       </ul>
       <!--end::Start Navbar Links-->
       <!--begin::End Navbar Links-->
       <ul class="navbar-nav ms-auto">
          <!--begin::Navbar Search-->
          <!--end::Navbar Search-->
          <!--begin::Messages Dropdown Menu-->
          <!--end::Notifications Dropdown Menu-->
          <!--begin::Fullscreen Toggle-->
          <li class="nav-item">
             <a class="nav-link" href="#" data-lte-toggle="fullscreen">
             <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
             <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
             </a>
          </li>
          <!--end::Fullscreen Toggle-->
          <!--begin::User Menu Dropdown-->
          <li class="nav-item dropdown user-menu">
             <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
             <img
                src="{{ asset('public/admin/assets/img/user2-160x160.jpg') }}    "
                class="user-image rounded-circle shadow"
                alt="User Image"
                />
             <span class="d-none d-md-inline">Arvind Pratap Singh</span>
             </a>
             <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                   <img
                      src="{{ asset('public/admin/assets/img/user2-160x160.jpg') }}"
                      class="rounded-circle shadow"
                      alt="User Image"
                      />
                   <p>
                      Arvind Pratap Singh - Backend Developer
                      <small>personal since Nov. 2025</small>
                   </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                   <a href="#" class="btn btn-default btn-flat">Profile</a>
                   <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
             </ul>
          </li>
          <!--end::User Menu Dropdown-->
       </ul>
       <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
 </nav>
 
 <!--end::Header-->
 
 <!--begin::Sidebar-->
 
 <!--end::Sidebar-->
  <!--begin::App Main-->
  <main class="app-main">
     <!--begin::App Content Header-->
     <div class="app-content-header">
       <!--begin::Container-->
       <div class="container-fluid">
         <!--begin::Row-->
         {{-- <div class="row">
           <div class="col-sm-6"><h3 class="mb-0">Home Page</h3></div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-end">
               <li class="breadcrumb-item "><a href="{{ route('admin.home') }}">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Home</li>
             </ol>
           </div>
         </div> --}}
         <div class="row">
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Edit Home Page</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Home List</h4>
                <a href="{{ route('admin.home') }}" class="btn btn-primary">Back Home Page </a>
            </div>
            <form action="{{ route('home.update',$homes->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">  
                @csrf 
               @method('put')        
            <div class="card-body">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-lable">Profile Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="profile" id="profile" class="form-control"> 
                  </div>
                </div>
                <div class="row mt-1">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Show Image</label>
                    <div class="col-sm-10">
                        <img id="showImage" class="rounded avatar-lg img-fluid" style="max-width: 80px;" 
                             src="{{ (!empty($homes->image)) ? url($homes->image) : url('upload/no_image.jpg') }}" alt="Card image cap">
                    </div> 
                </div>
                <div class="form-group row  mt-4">
                    <label for="" class="col-sm-2 col-form-lable">Admin Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $homes->name }}" placeholder="Enter Your Name"> 
                    @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                     @enderror
                  </div>
                </div>
                <div class="form-group row  mt-4">
                    <label for="" class="col-sm-2 col-form-lable">Admin Role</label>
                  <div class="col-sm-10">
                    <input type="text" name="role" id="role" class="form-control @error('role') is-invalid @enderror" value="{{ $homes->role }}" placeholder="Enter Your Admin Role"> 
                    @error('role')
                    <p class="invalid-feedback">{{ $message }}</p>
                     @enderror
                  </div>
                </div>
                 <div class="form-group row  mt-4">
                    <label for="" class="col-sm-2 col-form-lable">Description</label>
                  <div class="col-sm-10">
                     <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"  placeholder="Enter Your Description">{{ $homes->description }}</textarea>
                     @error('description')
                     <p class="invalid-feedback">{{ $message }}</p>
                      @enderror
                  </div>
                </div>
                <div class="form-group row  mt-4">
                  <label for="" class="col-sm-2 col-form-lable">Count_Projects</label>
                <div class="col-sm-10">
                  <input type="text" name="count_projects" id="count_projects" class="form-control @error('count_projects') is-invalid @enderror" value="{{ $homes->count_projects }}" placeholder="Enter your Total Projects "> 
                  @error('count_projects')
                  <p class="invalid-feedback">{{ $message }}</p>
                   @enderror
                </div>
              </div>
              <div class="form-group row  mt-4">
               <label for="" class="col-sm-2 col-form-lable">Experince</label>
             <div class="col-sm-10">
               <input type="text" name="experince" id="experince" class="form-control @error('experince') is-invalid @enderror" value="{{ $homes->experince }}" placeholder="Enter Your Experience"> 
               @error('experince')
               <p class="invalid-feedback">{{ $message }}</p>
                @enderror
             </div>
           </div>

            </div>
            <div class="card-footer mt-4 d-flex justify-content-between">
               <button type="submit" class="btn btn-info">Submit</button>
               <a href="{{ route('admin.home') }}" class="btn btn-danger ms-auto">Cancel</a>
           </div>

          </form>
          
        </div>
        
        </div>
         <!--end::Row-->
       </div>
       <!--end::Container-->
     </div>
     <!--end::App Content Header-->
     <!--begin::App Content-->
    
     <!--end::App Content-->
   </main>


@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);

            }
            reader.readAsDataURL(e.target.files['0']);

        });
    });
    </script>


@endsection