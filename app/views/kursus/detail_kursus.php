<div class="p-4 mx-auto max-w-[1500px]">
    <div class="p-4 rounded-lg mt-14">
        <div class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="<?= BASEURL ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Kursus
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-700 hover:text-blue-600 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="<?= BASEURL; ?>/kursus/detail_kursus/<?= $data['kursus']['id_kursus'] ?>" class="ms-1 text-sm font-medium  text-gray-700 hover:text-blue-600"><?= $data['kursus']['judul_kursus'] ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <h1 class="text-3xl font-bold"><?= $data['kursus']['judul_kursus'] ?></h1>
        <h2 class="text-xl font-bold mt-16 mb-6">List Materi</h2>

        <button id="tambah_materi" data-modal-target="modal" data-modal-toggle="modal" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-6">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
            </svg>
            Tambah Materi
        </button>
        <a href="<?= BASEURL ?>/preview/<?= $data['id_kursus'] ?>" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-6">
            <svg class="me-1 -ms-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68M16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25" />
                <path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6m0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4" />
            </svg>
            Preview
        </a>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Link_embed
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['materi'] as $row) : ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $row['judul_materi'] ?>
                            </th>
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap  dark:text-white">
                                <?= $row['deskripsi_materi'] ?>
                            </td>
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap  dark:text-white">
                                <a href="<?= $row['link_embed'] ?>" target="_blank" class="underline underline-offset-2">
                                    <?= $row['link_embed'] ?>
                                </a>
                            </td>
                            <td class="px-6 py-4 flex flex-wrap gap-3 md:gap-5">
                                <button data-modal-target="modal" data-modal-toggle="modal" class="ubah_materi inline" data-id="<?= $row['id_materi'] ?>">
                                    <img src="<?= BASEURL; ?>/images/icons/edit.svg" alt="ubah icons" width="24" height="24" class="inline">
                                    <span class="hidden lg:inline">Ubah</span>
                                </button>
                                <a href="<?= BASEURL; ?>/materi/hapusMateri/<?= $row['id_materi'] ?>/<?= $row['id_kursus'] ?>">
                                    <img src="<?= BASEURL; ?>/images/icons/delete.svg" alt="hapus icons" width="24" height="24" class="inline">
                                    <span class="hidden lg:inline text-[#C70000]">Hapus</span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
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
                            Tambah Materi
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="kursus/tamhahMateri" method="post" class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <input type="hidden" id="id_kursus" name="id_kursus" value="<?= $data['kursus']['id_kursus'] ?>">
                            <input type="hidden" id="id_materi" name="id_materi">
                            <div class="col-span-2">
                                <label for="judul_materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                                <input type="text" name="judul_materi" id="judul_materi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="judul baru..." required="">
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi_materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <textarea id="deskripsi_materi" name="deskripsi_materi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deskripsi..."></textarea>

                            </div>
                            <div class="col-span-2">
                                <label for="link_embed" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Embed</label>
                                <input type="text" name="link_embed" id="link_embed" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="link embed..." required="">
                            </div>

                        </div>
                        <button id="modal_button" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Tambah Materi
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
        const form = $('form');


        // ubah materi
        $('.ubah_materi').on('click', function() {
            const id_materi = $(this).data("id");
            $('#id_materi').val(id_materi);
            modalTitle.html('Ubah Materi');
            modalButton.html("Ubah Materi");
            form.attr('action', '<?= BASEURL ?>/materi/ubahMateri');

            $.ajax({
                url: "http://localhost/online_course/materi/getUbahMateri",
                data: {
                    id_materi: id_materi,
                },
                method: "post",
                dataType: "json",
                success: function(data) {
                    $('#id_kursus').val(data.id_kursus);
                    $('#judul_materi').val(data.judul_materi);
                    $('#deskripsi_materi').val(data.deskripsi_materi);
                    $('#link_embed').val(data.link_embed);

                },
            });
        })
        // tambah materi
        $('#tambah_materi').on('click', function() {
            modalTitle.html('Tambah Materi');
            modalButton.html("Tambah Materi");
            form.attr('action', '<?= BASEURL ?>/materi/tambahMateri');

            $('#judul_materi').val("");
            $('#deskripsi_materi').val("");
            $('#link_embed').val("");
        })
    })
</script>
<!-- menginisiasi flasher -->
<?php Flasher::flash(); ?>