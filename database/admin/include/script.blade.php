<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/ruang-admin.js')}}"></script>

@yield('script')

<script>
    setTimeout(function () {
        $('.status').fadeOut('slow')
    }, 1500);
</script>


<script>
    setTimeout(function () {
        $('.danger').fadeOut('slow')
    }, 1500);
</script>
