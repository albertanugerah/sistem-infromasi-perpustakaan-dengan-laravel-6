<script>
    @if( session('success'))
    $(function () {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });


        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    });
    @endif
    @if(session('info'))
    $(function () {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });


        Toast.fire({
            icon: 'info',
            title: '{{ session('info') }}'
        });
    });
    @endif
    @if(session('danger'))
    $(function () {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });


        Toast.fire({
            icon: 'success',
            title: '{{ session('danger') }}'
        });
    });
    @endif
</script>
