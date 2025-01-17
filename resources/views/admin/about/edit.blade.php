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
          <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">About</a></li>
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
        
         <div class="row">
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Edit About Page</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>About form Page</h4>
                <a href="{{ route('admin.about') }}" class="btn btn-primary">Back About Page </a>
            </div>
            <form action="{{ route('admin.about.update',$about->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">   
               @csrf   
               @method('put')       
            <div class="card-body">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-lable">Admin Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="profile" id="profile" class="form-control @error('profile') is-invalid @enderror"> 
                    @error('profile')
                    <p class="invalid-feedback">{{ $message }}</p>
                     @enderror
                  </div>
                
                </div>
                <div class="row mt-1">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Show Image</label>
                    <div class="col-sm-10">
                        <img id="showImage" class="rounded avatar-lg img-fluid" style="max-width: 80px;" 
                             src="{{ (!empty($about->admin_image)) ? url($about->admin_image) : url('upload/no_image.jpg') }}" alt="Card image cap">
                    </div> 
                </div>
                <div class="form-group row mt-4">
                    <label for="" class="col-sm-2 col-form-lable">Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror"> 
                    @error('image')
                    <p class="invalid-feedback">{{ $message }}</p>
                     @enderror
                  </div>
                </div>
                <div class="row mt-1">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Show Image</label>
                    <div class="col-sm-10">
                        <img id="showImage" class="rounded avatar-lg img-fluid" style="max-width: 80px;" 
                             src="{{ (!empty($about->image)) ? url($about->image) : url('upload/no_image.jpg') }}" alt="Card image cap">
                    </div> 
                </div>
                <div class="form-group row mt-4">
                  <label for="" class="col-sm-2 col-form-lable">Icon 1</label>
                <div class="col-sm-10">
                  <input type="text" name="icon1" id="icon1" value="{{ $about->icon_1 }} " class="form-control @error('icon1') is-invalid @enderror" placeholder="Enter Your Icon Name"> 
                  @error('icon1')
                  <p class="invalid-feedback">{{ $message }}</p>
                   @enderror
                </div>
              </div>
              <div class="form-group row mt-4">
               <label for="" class="col-sm-2 col-form-lable">Icon 2</label>
             <div class="col-sm-10">
               <input type="text" name="icon2" id="icon2" value="{{ $about->icon_2 }}" class="form-control @error('icon2') is-invalid @enderror" placeholder="Enter Your Icon Name"> 
               @error('icon2')
               <p class="invalid-feedback">{{ $message }}</p>
                @enderror
             </div>
           </div>
           <div class="form-group row mt-4">
            <label for="" class="col-sm-2 col-form-lable">Icon 3</label>
          <div class="col-sm-10">
            <input type="text" name="icon3" id="icon3" value="{{ $about->icon_3 }}" class="form-control @error('icon3') is-invalid @enderror" placeholder="Enter Your Icon Name"> 
            @error('icon3')
            <p class="invalid-feedback">{{ $message }}</p>
             @enderror
          </div>
        </div>
               
              
                <div class="form-group row  mt-4">
                    <label for="" class="col-sm-2 col-form-lable">subtitle</label>
                  <div class="col-sm-10">
                    <input type="text" name="subtitle" id="subtitle" value="{{ $about->subtitle }}" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Enter Your subtitle"> 
                    @error('subtitle')
                    <p class="invalid-feedback">{{ $message }}</p>
                     @enderror
                  </div>
                </div>
                <div class="form-group row  mt-4">
                    <label for="" class="col-sm-2 col-form-lable">Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" id="title" value="{{ $about->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Your Admin title"> 
                    @error('title')
                    <p class="invalid-feedback">{{ $message }}</p>
                     @enderror
                  </div>
                </div>
                 <div class="form-group row  mt-4">
                    <label for="" class="col-sm-2 col-form-lable">Short_Description</label>
                  <div class="col-sm-10">
                     <textarea style="resize: none; height:80px;"name="short_description" id="short_description" class="form-control @error('short_description') is-invalid @enderror" placeholder="Enter Your short_description">{{ $about->short_description }}</textarea>
                     @error('short_description')
                     <p class="invalid-feedback">{{ $message }}</p>
                      @enderror
                  </div>
                </div>
                <div class="form-group row  mt-4">
                    <label for="" class="col-sm-2 col-form-lable">Long_Description</label>
                  <div class="col-sm-10">
                     <textarea style="resize: none; height:110px;"name="long_description" id="long_description" class="form-control @error('long_description') is-invalid @enderror" placeholder="Enter Your long_description">{{ $about->long_description }}</textarea>
                     @error('long_description')
                     <p class="invalid-feedback">{{ $message }}</p>
                      @enderror
                  </div>
                </div>

            </div>
            <div class="card-footer mt-4 d-flex justify-content-between">
               <button type="submit" class="btn btn-info">Submit</button>
               <a href="{{ route('admin.about') }}" class="btn btn-danger ms-auto">Cancel</a>
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