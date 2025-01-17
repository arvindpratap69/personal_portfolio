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
          <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Skills</a></li>
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
                src="{{ asset('admin/assets/img/user2-160x160.jpg') }}    "
                class="user-image rounded-circle shadow"
                alt="User Image"
                />
             <span class="d-none d-md-inline">Arvind Pratap Singh</span>
             </a>
             <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                   <img
                      src="{{ asset('admin/assets/img/user2-160x160.jpg') }}"
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
               <div class="card card-success">
                  <div class="card-header">
                     <h3 class="card-title">Skills Page</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Skills List</h4>
                <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">Add Skills Section </a>
            </div>
            <table class="table table-hover table-striped" id="data">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">skill_name</th>
                        <th scope="col">proficiency</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($skills as $skill)
                     
                  <tr>
                      <td>{{ $skill->id }}</td>
                      <td>{{ $skill->skill_name }}</td>
                      <td>{{ $skill->proficiency }}</td> 
                      <td>
                          <a href="{{ route('admin.skills.edit',$skill->id) }}">
                              <i class="nav-icon bi bi-pencil-square btn btn-primary btn-sm"></i>
                          </a>
                          <a href="javascript:void(0)" class="confirmDelete" module="skill" moduleid="{{ $skill->id }}">
                              <i class="bi bi-trash btn btn-danger btn-sm"></i>
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
              
            </table>
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
   $(document).on("click",".confirmDelete",function(){
   var module = $(this).attr("module");
   var moduleid = $(this).attr("moduleid");
   Swal.fire({
       title: "Are you sure?",
       text: "You won't delete this section!",
       icon: "warning",
       showCancelButton: true,
       confirmButtonColor: "#3085d6",
       cancelButtonColor: "#d33",
       confirmButtonText: "Yes, delete it!"
   }).then((result) => {
       if (result.isConfirmed) {
           Swal.fire({
               title: "Deleted!",
               text: "Your About Item has been deleted.",
               icon: "success"
           });
           window.location = "/delete-"+module+"/"+moduleid;
       }
   });
});
</script>
@endsection