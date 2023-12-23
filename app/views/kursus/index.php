<div class="p-4 mx-auto max-w-[1200px]">
    <div class="p-4 rounded-lg mt-14">
        <div class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Kursus
                    </a>
                </li>
            </ol>
        </div>
        <h1 class="font-bold text-2xl mb-6">Daftar Kursus</h1>
        <button id="tambah_kursus" data-modal-target="modal" data-modal-toggle="modal" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-6">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
            </svg>
            Tambah Kursus
        </button>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Thumbnail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Durasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['kursus'] as $row) : ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="<?= BASEURL; ?>/kursus/detail_kursus/<?= $row['id_kursus'] ?>" class="underline underline-offset-2">
                                    <?= $row['judul_kursus'] ?>
                                </a>
                            </th>
                            <td class="px-6 py-4">
                                <img src="<?= BASEURL; ?>/images/kursus/<?= $row['thumbnail'] ?>" alt="<?= $row['judul_kursus'] ?>" class="w-64">
                            </td>
                            <td class="px-6 py-4">
                                <?= $row['deskripsi_kursus'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $row['durasi'] ?>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="flex flex-wrap md:flex-nowrap gap-3 md:gap-5 justify-stretch items-stretch">
                                    <button data-modal-target="modal" data-modal-toggle="modal" class="ubah_kursus" data-id="<?= $row['id_kursus'] ?>">
                                        <img src="<?= BASEURL; ?>/images/icons/edit.svg" alt="ubah icons" width="24" height="24" class="inline">
                                        <span class="hidden lg:inline">Ubah</span>
                                    </button>
                                    <a href="#" class="delete_kursus" data-id="<?= $row['id_kursus'] ?>" data-name="<?= $row['judul_kursus'] ?>">
                                        <img src="<?= BASEURL; ?>/images/icons/delete.svg" alt="hapus icons" width="24" height="24" class="inline">
                                        <span class="hidden lg:inline text-[#C70000]">Hapus</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>
        <!-- Main modal -->
        <div id="modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="modal_title">
                            Tambah Kursus
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="kursus/tambahKursus" method="post" enctype="multipart/form-data" class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <input type="hidden" id="id_kursus" name="id_kursus">
                            <input type="hidden" id="thumbnail_name" name="thumbnail_name">
                            <div class="col-span-2">
                                <label for="judul_kursus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                                <input type="text" name="judul_kursus" id="judul_kursus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="judul baru..." required="">
                            </div>
                            <div class="">
                                <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail</label>
                                <img src="" alt="" id="modal-img" class="mb-2 h-64">
                                <input id="file_input" type="file" name="thumbnail" class="block w-full text-sm text-gray-900 border border-gray-300  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" accept="image/*" onchange="previewFile(this);">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">JPG, JPEG, PNG (MAX. 2MB).</p>
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi_kursus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <textarea id="deskripsi_kursus" name="deskripsi_kursus" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deskripsi..."></textarea>

                            </div>
                            <div class="col-span-2">
                                <label for="durasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi</label>
                                <input type="text" name="durasi" id="durasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="durasi..." required="">
                            </div>

                        </div>
                        <button id="modal_button" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Tambah Kursus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(function() {
        const modalTitle = $('#modal_title');
        const modalButton = $('#modal_button');
        const modalImg = $('#modal-img');
        const form = $('form');

        $(".delete_kursus").on("click", function() {
            const id = $(this).data("id");
            const name = $(this).data("name");
            Swal.fire({
                title: `yakin menghapus kursus "${name}" ?`,
                text: "kursus yang di hapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Hapus",
                cancelButtonText: "tidak",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `http://localhost/online_course/kursus/hapusKursus/${id}`;
                }
            });
        });


        // ubah kursus
        $('.ubah_kursus').on('click', function() {
            const id_kursus = $(this).data("id");
            $('#id_kursus').val(id_kursus);
            modalTitle.html('Ubah Kursus');
            modalButton.html("Ubah Kursus");
            modalImg.removeClass("hidden");
            form.attr('action', 'kursus/ubahKursus');

            $.ajax({
                url: "http://localhost/online_course/kursus/getUbahKursus",
                data: {
                    id_kursus: id_kursus,
                },
                method: "post",
                dataType: "json",
                success: function(data) {
                    $("#modal-img").attr(
                        "src",
                        `http://localhost/online_course/images/kursus/${data.thumbnail}`
                    );
                    $('#judul_kursus').val(data.judul_kursus);
                    $('#deskripsi_kursus').val(data.deskripsi_kursus);
                    $('#durasi').val(data.durasi);
                    $('#thumbnail_name').val(data.thumbnail);
                },
            });
        })
        // tambah kursus
        $('#tambah_kursus').on('click', function() {
            modalTitle.html('Tambah Kursus');
            modalButton.html("Tambah Kursus");
            modalImg.addClass("hidden");
            modalImg.attr("src", "");
            form.attr('action', 'kursus/tambahKursus');

            $('#judul_kursus').val("");
            $('#deskripsi_kursus').val("");
            $('#durasi').val("");
        })

    })

    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#modal-img").removeClass("hidden");
                $("#modal-img").attr("src", reader.result);
            };

            reader.readAsDataURL(file);
        }
    }
</script>
<!-- menginisiasi flasher -->
<?php Flasher::flash(); ?>