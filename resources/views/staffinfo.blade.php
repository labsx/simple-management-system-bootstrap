@include('component.header')


  
    @if(session()->has('message'))
    <div class="alert alert-success text-center text-uppercase py-0"> 
    <p class="mt-3 text-red">{{session()->get('message')}}</p>
        </div>
 @endif
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                       
                        <hr class="dropdown-divider">
                       

                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bar-chart"></i> Student List
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/staff">
                            <i class="bi bi-chat"></i> Staff Information
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                   
                  
                  
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-square"></i> Admin Information
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                           <button type="submit" class="nav-link bg-white px-4">
                            <i class="bbi bi-box-arrow-left"></i>Log out</button>
                          </form>
                    </li> 
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight"></h1>
                        </div>
                        <!-- Actions -->

                        
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                               
                                <a href="/studentreg" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Add Student</span>
                                </a>
                                <a href="/register" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Add User</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item ">
                            {{-- <a href="#" class="nav-link active">Students Chart</a> --}}
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link font-regular">Shared</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-regular">File requests</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">

                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Staff List</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                  
                                    <th scope="col" class="text-center">Manage</th>
                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <td> 
                                        {{ $user->email }}
                                    </td>
                                    <td> 
                                        {{ $user->password }}
                                    </td>
                                  
                                  
                                   
                                    
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0">
                        {{-- <span class="">  {{$students->links()}}</span> --}}
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
@include('component.footer') 