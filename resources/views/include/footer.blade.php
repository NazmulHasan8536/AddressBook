  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('frontend/js/clean-blog.min.js')}}"></script>

  {{-- Sweet Alert  --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  





  {{-- SnozeToast --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

{{-- Toastr code  --}}

        <script>

            @if(Session::has('message'))

                var type = "{{Session::get('alert-type')}}"
                switch(type){
                  case 'info':
                        toastr.info("{{Session::get('message')}}");
                        break;
                  case 'success':
                        toastr.success("{{Session::get('message')}}");
                        break;
                  case 'warning':
                        toastr.warning("{{Session::get('message')}}");
                        break;
                  case 'error':
                        toastr.error("{{Session::get('message')}}");
                        break;
                }
                @endif

        </script>




        {{-- Sweet Alert  --}}


    <script>

      $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr('href');

        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = link;
      } else {
        swal("Your imaginary file is safe!");
      }
    });
        
      });
      
    </script>

        

</body>

</html>
