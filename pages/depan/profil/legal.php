<style>
        .header-section {
            background-color: #f8f9fa; /* Light background for header */
            padding: 4rem 0;
        }
        .content-section {
            padding: 3rem 0;
        }
        .accordion-button {
            font-weight: bold;
        }
    </style>

<main class="content-section">
        <div class="container">

            <section id="legalitas" class="mb-5">
                <h2 class="text-secondary border-bottom pb-2 mb-4">📜 Legalitas Perusahaan</h2>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Nomor Induk Berusaha (NIB)</h5>
                                <p class="card-text">
                                    NIB: 91201XXXXXXX (Contoh)<br>
                                    KBLI Utama: 62010 (Aktivitas Pemrograman Komputer)<br>
                                    Status: Aktif & Terdaftar di OSS.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Akta Pendirian & NPWP</h5>
                                <p class="card-text">
                                    Akta Notaris: No. 54, Tanggal 15 Agustus 2021, Notaris (Nama Notaris)<br>
                                    SK Kemenkumham: AHU-00XXXXXXX-2021<br>
                                    NPWP: 02.XXX.XXX.X-XXX.000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="kebijakan-umum" class="mb-5">
                <h2 class="text-secondary border-bottom pb-2 mb-4">⚖️ Kebijakan Umum Perusahaan</h2>
                <div class="accordion" id="accordionKebijakanUmum">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. Kebijakan Privasi Pengguna
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionKebijakanUmum">
                            <div class="accordion-body">
                                Kami berkomitmen melindungi data pribadi pengguna. Data yang kami kumpulkan terbatas pada informasi yang relevan untuk penyediaan layanan. Kami tidak akan menjual atau menyewakan data pribadi Anda kepada pihak ketiga tanpa persetujuan eksplisit. Semua data dienkripsi dan disimpan sesuai standar keamanan industri.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Syarat dan Ketentuan Layanan (Terms of Service)
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionKebijakanUmum">
                            <div class="accordion-body">
                                Dengan menggunakan layanan PT CIFO Informatika, Anda menyetujui batasan penggunaan, tanggung jawab Anda sebagai pengguna, dan hak-hak yang dimiliki oleh Perusahaan. Pelanggaran terhadap ketentuan dapat mengakibatkan penangguhan atau penghentian akun/layanan.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. Kebijakan Pengembalian Dana & Pembatalan
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionKebijakanUmum">
                            <div class="accordion-body">
                                Pengembalian dana dan pembatalan tunduk pada perjanjian layanan spesifik. Secara umum, layanan berbasis langganan dapat dibatalkan kapan saja, namun pengembalian dana penuh hanya berlaku dalam 7 hari pertama penggunaan, sesuai syarat dan ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="kebijakan-it" class="mb-5">
                <h2 class="text-secondary border-bottom pb-2 mb-4">💻 Kebijakan Teknologi Informasi (Internal)</h2>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Keamanan Data & Sistem
                        <span class="badge bg-success rounded-pill">Standar ISO 27001 (Internal)</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Penggunaan Aset TI
                        <span class="badge bg-info rounded-pill">Hanya untuk kepentingan perusahaan</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Hak Kekayaan Intelektual (HKI)
                        <span class="badge bg-primary rounded-pill">Semua kode & produk dilindungi</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kepatuhan Perangkat Lunak
                        <span class="badge bg-warning text-dark rounded-pill">Penggunaan perangkat lunak berlisensi resmi</span>
                    </li>
                </ul>
            </section>

        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 PT CIFO Informatika. Hak Cipta Dilindungi Undang-Undang.</p>
            <p><small>Diperbarui terakhir: 2 Desember 2024</small></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>