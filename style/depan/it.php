<style>
        /* Custom CSS untuk mempercantik tampilan standar Bootstrap */
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Card Hover Effect */
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 10px;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .icon-box {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
    </style>