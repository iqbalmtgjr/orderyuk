<!--begin::Global Config(global config for global JS scripts)-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src={{ asset('admin/plugins/global/plugins.bundle.js') }}></script>
<script src={{ asset('admin/plugins/custom/prismjs/prismjs.bundle.js') }}></script>
<script src={{ asset('admin/js/scripts.bundle.js') }}></script>
<!--end::Global Theme Bundle-->
<script src={{ asset('admin/js/pages/crud/forms/widgets/bootstrap-switch.js') }}></script>
<script type="text/javascript">
    function operasional(value, id) {
        // alert(id);
        console.log(id);

        // $('.toggle-class').change(function() {
        //     var operasional = $(this).prop('checked') == true ? 1 : 0;
        if (value == 1) {
            document.getElementById("qwe").style.backgroundColor = "#1BC5BD";
        } else {
            document.getElementById("qwe").style.backgroundColor = "#F64E60";
        }
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeOperasional',
            data: {
                'operasional': value,
                'resto_id': id
            },
            success: function(result) {
                console.log('Success');
            }
        });
        //     });
    }
</script>
<script>
    // $(function() {
    //     $('.toggle-class').change(function() {
    //         // let data = $(this).data()
    //         var operasional = $(this).prop('selected') == true ? 1 : 0;
    //         console.log(operasional);
    //         var resto_id = $(this).data('id');
    //         $.ajax({
    //             type: "GET",
    //             dataType: "json",
    //             url: '/changeOperasional',
    //             data: {
    //                 'operasional': operasional,
    //                 'resto_id': resto_id
    //             },
    //             success: function(data) {
    //                 console.log('Success');
    //             }
    //         });
    //     });
    // });

    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->
<!--end::Body-->
{{-- Footer --}}
@yield('footer')
{{-- Toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if (Session::has('sukses'))
        toastr.success("{{ Session::get('sukses') }}", "Sukses")
    @endif

    @if (Session::has('gagal'))
        toastr.error("{{ Session::get('gagal') }}", "Gagal")
    @endif

    @if (Session::has('peringatan'))
        toastr.warning("{{ Session::get('peringatan') }}", "Peringatan")
    @endif

    @if (Session::has('info'))
        toastr.warning("{{ Session::get('info') }}", "Info")
    @endif
</script>
</body>

</html>
