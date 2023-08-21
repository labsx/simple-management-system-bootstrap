<x-layout>

    <body>
        <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3 ">
                {{-- <h1 class="text-center text-dark mt-5">Login Form</h1> --}}
                
                <div class="card my-5">
        
                  <form action="/store" method="POST" class="card-body cardbody-color p-lg-5">
                    @csrf
                    <div class="form-text text-left mb-5 text-dark "> 
                      <a href="/dashboard" class="text-dark fw-bold "> Return to Dashboard</a>
                    </div>
        
                    <div class="text-center">
                      <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                        width="200px" alt="profile">
                    </div>
        
                    <div class="mb-3">
                      <input type="text" class="form-control" name="name"  placeholder="Full Name">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="address" placeholder="Home Address">
                      </div>

                      <div class="mb-3">
                        <input type="text" class="form-control" name="contact"  placeholder="Contact">
                      </div>

                      <div class="mb-3">
                        <input type="text" class="form-control" name="email"  placeholder="Email Address">
                      </div>

                    <div class="mb-3">
                      <input type="text" class="form-control" name="guardian" placeholder="Guardian">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Register</button></div>
                   
                   
                    
                   
                  </form>
                  @if(session()->has('message'))
                    <div class="alert alert-success text-center text-uppercase py-0"> 
                    <p class="mt-3">{{session()->get('message')}}</p>
                        </div>
                 @endif
                </div>
        
              </div>
            </div>
          </div>
        </x-layout>
       
        
    