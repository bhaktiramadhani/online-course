<div class="p-4 mx-auto max-w-[1000px]">
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
                        <a href="<?= BASEURL; ?>/kursus/detail_kursus/<?= $data['id_kursus'] ?>" class="ms-1 text-sm font-medium  text-gray-700 hover:text-blue-600"><?= $data['kursus']['judul_kursus'] ?></a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-700 hover:text-blue-600 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="<?= BASEURL; ?>/preview/<?= $data['id_kursus'] ?>" class="ms-1 text-sm font-medium  text-gray-700 hover:text-blue-600">Preview</a>
                    </div>
                </li>
            </ol>
        </div>
        <h1 class="text-3xl font-bold"><?= $data['kursus']['judul_kursus'] ?></h1>
        <div class="my-6">
            <img class="h-auto rounded-lg" src="<?= BASEURL; ?>/images/kursus/<?= $data['kursus']['thumbnail'] ?>" alt="image description">
            <div class="mt-6">
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <?php foreach ($data['materi'] as $materi) : ?>
                        <h2 id="accordion-flush-heading-<?= $materi['id_materi'] ?>">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3 px-6" data-accordion-target="#accordion-flush-body-<?= $materi['id_materi'] ?>" aria-expanded="true" aria-controls="accordion-flush-body-<?= $materi['id_materi'] ?>">
                                <span><?= $materi['judul_materi'] ?></span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-<?= $materi['id_materi'] ?>" class="hidden" aria-labelledby="accordion-flush-heading-<?= $materi['id_materi'] ?>">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p><?= $materi['deskripsi_materi'] ?></p>
                                <a href="<?= $materi['link_embed'] ?>" type="submit" class="text-white inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center bg-gray-900 hover:bg-transparent hover:text-gray-900 transition-all duration-300 border-2 border-gray-900 mt-6">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- menginisiasi flasher -->
<?php Flasher::flash(); ?>