<button href="{{ route('admin.borrow.return', $model) }}"
        class="btn btn-info btn-sm" id="return">Pengembalian Buku
</button>

<script>
    $('button#return').on('click', function (e) {
        e.preventDefault();
        //sweet alert
        Swal.fire({
            title: 'Apakah kamu yakin data buku sudah benar?',
            text: "Pastikan data buku yang dikembalikan sama!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Data Sudah di Check!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('returnForm').action = $(this).attr('href');
                document.getElementById('returnForm').submit();

                Swal.fire(
                    'Sudah dikembalikan!',
                    'Data buku sudah dikembalikan',
                    'success'
                )
            }
        })


    })
</script>
