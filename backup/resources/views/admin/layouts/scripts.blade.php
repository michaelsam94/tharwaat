<script src="{{ asset('design/admin/dist-assets/js/plugins/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/scripts/script.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/scripts/sidebar.compact.script.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/scripts/customizer.script.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/plugins/echarts.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/scripts/echart.options.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/scripts/dashboard.v1.script.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/plugins/toastr.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/scripts/toastr.script.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/plugins/sweetalert2.min.js') }}"></script>
<script src="{{ asset('design/admin/dist-assets/js/scripts/sweetalert.script.min.js') }}"></script>
@if(Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}", { timeOut: 9500 });
        swal("Great Job!","{!! Session::get('success') !!}","success", { timeOut: 9500 });
    </script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error("{{ $error }}", { timeOut: 9500 });
        </script>
    @endforeach
@endif
<script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'

        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>
