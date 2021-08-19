<a href="{{  route('admin.author.edit', $model) }}" class="btn btn-warning btn-sm">Edit</a>
<button href="{{ route('admin.author.destroy', $model)}}" class="btn btn-danger btn-sm" id="delete">Delete</button>

<script>
    $('button#delete').on('click', function (e) {
        e.preventDefault();
        //sweet alert
        Swal.fire({
            title: 'Apakah kamu yakin hapus data ini?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').action = $(this).attr('href');
                document.getElementById('deleteForm').submit();

                Swal.fire(
                    'Terhapus!',
                    'Data kamu berhasil dihapus',
                    'success'
                )
            }
        })


    })
</script>
