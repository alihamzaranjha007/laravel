<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

@include('frontend.layout.partials.head')
</head>
<body>

@include('frontend.layout.partials.spinner')
@include('frontend.layout.partials.topbar')
@include('frontend.layout.partials.nav')
@include('frontend.layout.partials.header')


<section class="" style="background-color: #015FC9;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
<!-- Form starts here -->
                <form method="" action="">

                  <div class="d-flex align-items-center mb-3 pb-1">
                  
                    <span class="h1 fw-bold mb-0">Login Form</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email address</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontend.layout.partials.footer')
@include('frontend.layout.partials.footer-scripts')
</body>
</html>