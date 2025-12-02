<style>
        /* 1. Pengaturan Bagian */
        .bg-light {
            background-color: #f8f9fa !important;
        }

        /* 2. Gaya Kartu Testimoni Modern */
        .testimonial-card-modern {
            /* Sudut lebih membulat */
            border-radius: 1rem;
            /* Efek hover untuk interaksi */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .testimonial-card-modern:hover {
            /* Sedikit terangkat saat di-hover */
            transform: translateY(-5px);
            /* Bayangan lebih lembut dan besar */
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.08) !important;
        }

        /* 3. Gaya Ikon Kutipan */
        .quote-icon {
            /* Mengatur posisi ikon kutipan */
            line-height: 1;
            color: #007bff; /* Warna biru primer Bootstrap */
            opacity: 0.2; /* Transparansi rendah agar tidak terlalu dominan */
            position: absolute;
            top: 10px;
            right: 30px;
            z-index: 1;
        }

        /* Memastikan teks testimoni berada di atas ikon kutipan */
        .testimonial-card-modern .card-body p {
            position: relative;
            z-index: 2;
        }

        /* 4. Gaya Gambar Profil */
        .profile-img {
            /* Memastikan gambar bundar dan terpotong rapi */
            width: 60px;
            height: 60px;
            object-fit: cover;
            border: 3px solid #007bff; /* Garis tepi biru tipis */
        }

        /* 5. Gaya Bintang Rating */
        .stars i {
            /* Spasi antar bintang */
            margin-right: 2px;
        }

        /* 6. Penyesuaian Tombol Baca Selengkapnya */
        .btn-outline-primary {
            font-weight: 600;
        }
    </style>