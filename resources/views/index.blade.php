<x-layout>

<body>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 ">
            {{-- <h1 class="text-center text-dark mt-5">Login Form</h1> --}}
            
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" action="/" method="POST">
                @csrf
                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
    
                <div class="mb-3">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success text-center py-0"> 
                    <p class="">{{session()->get('message')}}</p>
                        </div>
                 @endif
                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
                
              </form>
            </div>
    
          </div>
        </div>
      </div>
</x-header>
   
    
