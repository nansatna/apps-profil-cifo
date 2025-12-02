<style>
/* Reset & Base */
* { 
    margin: 0; 
    padding: 0; 
    box-sizing: border-box; 
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
    min-height: 100vh;
}

.container { 
    max-width: 1200px; 
    margin: 0 auto; 
    padding: 20px; 
}

/* Header Section */
.sejarah-header {
    background: #ffffff;
    padding: 2rem;
    border-radius: 15px;
    margin-bottom: 2rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    text-align: center;
    border: 1px solid #e0e0e0;
}

.sejarah-header h1 { 
    color: #000; 
    font-size: 2.5rem; 
    margin-bottom: .5rem; 
}

.sejarah-header p { 
    color: #666; 
    font-size: 1.1rem; 
}

/* Timeline */
.timeline { 
    position: relative; 
    padding: 2rem 0; 
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 100%;
    background: #e0e0e0;
}

.timeline-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    position: relative;
}

.timeline-item:nth-child(even) { 
    flex-direction: row-reverse; 
}

.timeline-content {
    width: 45%;
    background: #fff;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: .3s ease;
    border: 1px solid #e0e0e0;
}

.timeline-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    border-color: #ccc;
}

.timeline-year {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    background: #000;
    color: #fff;
    padding: 1rem 1.5rem;
    border-radius: 50px;
    font-weight: bold;
    font-size: 1.2rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    z-index: 10;
}

.timeline-content h3 { 
    color: #000; 
    margin-bottom: 1rem; 
    font-size: 1.5rem; 
}

.timeline-content p { 
    color: #555; 
    line-height: 1.8; 
}

.milestone-badge {
    display: inline-block;
    background: #000;
    color: #fff;
    padding: 0.3rem 1rem;
    border-radius: 20px;
    font-size: .85rem;
    margin-top: .5rem;
    font-weight: 600;
}

/* Vision Section */
.vision-section {
    background: #fff;
    padding: 2rem;
    border-radius: 15px;
    margin-top: 2rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    border: 1px solid #e0e0e0;
}

.vision-section h2 {
    color: #000;
    margin-bottom: 1rem;
    text-align: center;
    font-size: 2rem;
}

.vision-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.vision-card {
    background: #f9f9f9;
    color: #000;
    padding: 1.5rem;
    border-radius: 10px;
    text-align: center;
    transition: .3s ease;
    border: 1px solid #e0e0e0;
}

.vision-card:hover {
    transform: scale(1.05);
    background: #000;
    color: #fff;
    border-color: #000;
}

.vision-card h4 {
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
}

/* Responsive */
@media (max-width:768px) {
    .timeline::before { 
        left: 30px; 
    }
    
    .timeline-item { 
        flex-direction: column !important; 
    }
    
    .timeline-content { 
        width: 100%; 
        margin-left: 60px; 
    }
    
    .timeline-year { 
        left: 30px; 
        transform: none; 
    }
    
    .sejarah-header h1 { 
        font-size: 1.8rem; 
    }
}
</style>