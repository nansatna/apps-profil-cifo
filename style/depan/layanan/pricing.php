<style>
  :root {
    --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
    --card-hover-transform: translateY(-10px);
    --price-color: #0d6efd;
  }

  /* Hero Section Styling */
  .hero-section {
    background: var(--primary-gradient);
    position: relative;
    padding-bottom: 6rem; /* Space for the wave */
  }
  
  /* Shape Divider (Gelombang bawah hero) */
  .custom-shape-divider-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
  }
  .custom-shape-divider-bottom svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 60px;
  }
  .custom-shape-divider-bottom .shape-fill {
    fill: #f8f9fa; /* Sesuaikan dengan bg-light section berikutnya */
  }

  /* Pricing Cards */
  .pricing-card {
    transition: all 0.3s ease;
    border: none;
    border-radius: 15px;
    background: #fff;
    position: relative;
    overflow: hidden;
    z-index: 1;
  }

  .pricing-card:hover {
    transform: var(--card-hover-transform);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
  }

  /* Logic untuk Kartu Terlaris (Best Value) */
  .pricing-card.best-value {
    border: 2px solid #0d6efd;
    transform: scale(1.05); /* Sedikit lebih besar */
    z-index: 2;
  }
  .pricing-card.best-value:hover {
    transform: scale(1.05) translateY(-10px);
  }

  /* Ribbon Terlaris */
  .ribbon {
    position: absolute;
    top: 20px;
    right: -35px;
    transform: rotate(45deg);
    background-color: #ffc107;
    color: #000;
    padding: 5px 40px;
    font-size: 0.8rem;
    font-weight: bold;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }

  /* Typography Harga */
  .price-wrapper .currency {
    font-size: 1.2rem;
    vertical-align: top;
    font-weight: 500;
  }
  .price-wrapper .amount {
    font-size: 3rem;
    font-weight: 800;
    color: var(--price-color);
    line-height: 1;
  }
  .price-wrapper .period {
    font-size: 0.9rem;
    color: #6c757d;
  }

  /* List Fitur */
  .feature-list li {
    padding: 8px 0;
    border-bottom: 1px solid rgba(0,0,0,0.05);
  }
  .feature-list li:last-child {
    border-bottom: none;
  }
  .check-icon {
    color: #198754; /* Green */
    margin-right: 8px;
    font-weight: bold;
  }

  /* Contact Section Decoration */
  .circle-decoration {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    z-index: 0;
  }
  .circle-1 { width: 300px; height: 300px; top: -100px; left: -100px; }
  .circle-2 { width: 200px; height: 200px; bottom: -50px; right: -50px; }
</style>