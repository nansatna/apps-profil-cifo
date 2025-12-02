<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni Pelanggan</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Poppins", sans-serif;
        }
        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.08);
            transition: 0.3s;
        }
        .testimonial-card:hover {
            transform: translate(-5px);
        }
        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        .stars i {
            color: gold;
        }
        .read-more {
            font-weight: 600;
            color: #007bff;
            text-decoration: none;
        }
        .read-more:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hear What Our Clients<br>Have to Say</h2>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="profile-img me-3">
                        <div>
                            <h6 class="mb-0 fw-bold">BAPAK UCUP</h6>
                            <small class="text-muted">Kerennnn, mantapp, terbaikk lah pokonyaa!!!</small>
                        </div>
                    </div>

                    <div class="stars mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p>
                        “Working with our team has been great. They did a great redesign of my site,
                        created high-quality content, and improved my rankings significantly…”
                    </p>

                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://randomuser.me/api/portraits/men/52.jpg" class="profile-img me-3">
                        <div>
                            <h6 class="mb-0 fw-bold">BAPAK WAWAN</h6>
                            <small class="text-muted">Rekomendasi ini web, worth it bangettttt</small>
                        </div>
                    </div>

                    <div class="stars mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p>
                        “The improvement was incredible! Call volume increased from 5 per day to
                        over 15 organic calls after the first month. Amazing results…”
                    </p>

                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</body>
</html>
