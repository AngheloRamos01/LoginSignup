@include('partials.header')
<img src="yesss.jpeg" alt="" width="100" height="100">
<h3 class="d-flex align-items-center justify-content-center"> Login Page</h3>
<form action="/login/process" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
    <h6><a href={{"/register"}}>New User? Sign up here.</a></h6>
  </form>

  
