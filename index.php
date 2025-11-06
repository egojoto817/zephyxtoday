<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZephyxToday - Professional Patio & Garden Design Services</title>
    <meta name="description" content="Transform your outdoor space with ZephyxToday's expert patio and garden design services. Creating beautiful, functional outdoor environments for residential and commercial properties.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .zx7nav-container {
            background: linear-gradient(135deg, #2c5530, #4a7c59);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .zx7nav-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .zx7logo {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .zx7nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .zx7nav-menu a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .zx7nav-menu a:hover {
            color: #90c695;
        }

        .zx7hero-section {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .zx7hero-content {
            max-width: 800px;
            padding: 2rem;
        }

        .zx7hero-title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .zx7hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .zx7btn-primary {
            background: #4a7c59;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .zx7btn-primary:hover {
            background: #3d6b4a;
        }

        .zx7services-block {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .zx7container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .zx7section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c5530;
        }

        .zx7services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .zx7service-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .zx7service-card:hover {
            transform: translateY(-5px);
        }

        .zx7service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            background: #4a7c59;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .zx7about-section {
            padding: 80px 0;
            background: white;
        }

        .zx7about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .zx7about-text h3 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #2c5530;
        }

        .zx7about-image {
            border-radius: 10px;
            overflow: hidden;
        }

        .zx7about-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .zx7history-timeline {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .zx7timeline-item {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .zx7timeline-year {
            background: #4a7c59;
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 100px;
            text-align: center;
        }

        .zx7timeline-content {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            flex: 1;
        }

        .zx7gallery-section {
            padding: 80px 0;
            background: white;
        }

        .zx7gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .zx7gallery-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .zx7gallery-item:hover {
            transform: scale(1.05);
        }

        .zx7gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .zx7testimonials-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .zx7testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .zx7testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .zx7testimonial-quote {
            font-style: italic;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .zx7testimonial-author {
            font-weight: bold;
            color: #4a7c59;
        }

        .zx7process-section {
            padding: 80px 0;
            background: white;
        }

        .zx7process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .zx7process-step {
            text-align: center;
            padding: 2rem;
        }

        .zx7step-number {
            width: 60px;
            height: 60px;
            background: #4a7c59;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .zx7footer {
            background: #2c5530;
            color: white;
            padding: 3rem 0 1rem;
        }

        .zx7footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .zx7footer-section h4 {
            margin-bottom: 1rem;
            color: #90c695;
        }

        .zx7footer-section a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }

        .zx7footer-section a:hover {
            color: #90c695;
        }

        .zx7footer-bottom {
            border-top: 1px solid #4a7c59;
            padding-top: 1rem;
            text-align: center;
        }

        .zx7modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .zx7modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 10px;
            width: 90%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .zx7close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .zx7close:hover {
            color: black;
        }

        .zx7expertise-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .zx7expertise-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .zx7expertise-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border-left: 5px solid #4a7c59;
            transition: all 0.3s ease;
        }

        .zx7expertise-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .zx7maintenance-section {
            padding: 80px 0;
            background: white;
        }

        .zx7maintenance-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .zx7maintenance-list {
            list-style: none;
        }

        .zx7maintenance-list li {
            padding: 0.8rem 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 2rem;
        }

        .zx7maintenance-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #4a7c59;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .zx7nav-menu {
                display: none;
            }
            
            .zx7hero-title {
                font-size: 2.5rem;
            }
            
            .zx7about-grid,
            .zx7maintenance-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .zx7timeline-item {
                flex-direction: column;
                text-align: center;
            }
            
            .zx7timeline-year {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="zx7nav-container">
        <div class="zx7nav-wrapper">
            <a href="#home" class="zx7logo">ZephyxToday</a>
            <ul class="zx7nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#maintenance">Maintenance</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#testimonials">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="zx7hero-section">
        <div class="zx7hero-content">
            <h1 class="zx7hero-title">Transform Your Outdoor Space</h1>
            <p class="zx7hero-subtitle">Professional patio and garden design services that bring your vision to life with expert craftsmanship and creative solutions</p>
            <a href="#services" class="zx7btn-primary">Explore Our Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="zx7services-block">
        <div class="zx7container">
            <h2 class="zx7section-title">Our Services</h2>
            <div class="zx7services-grid">
                <div class="zx7service-card">
                    <div class="zx7service-icon">🌿</div>
                    <h3>Garden Planning</h3>
                    <p>Complete garden design and planning services tailored to your space, climate, and preferences. We create sustainable and beautiful outdoor environments.</p>
                </div>
                <div class="zx7service-card">
                    <div class="zx7service-icon">🏗️</div>
                    <h3>Patio Construction</h3>
                    <p>Expert patio construction using quality materials and proven techniques. From concept to completion, we build patios that enhance your outdoor living.</p>
                </div>
                <div class="zx7service-card">
                    <div class="zx7service-icon">💧</div>
                    <h3>Irrigation Systems</h3>
                    <p>Efficient irrigation solutions that keep your garden healthy while conserving water. Smart systems designed for optimal plant care.</p>
                </div>
                <div class="zx7service-card">
                    <div class="zx7service-icon">🌸</div>
                    <h3>Landscape Design</h3>
                    <p>Comprehensive landscape design services that combine aesthetics with functionality. Creating harmonious outdoor spaces for every lifestyle.</p>
                </div>
                <div class="zx7service-card">
                    <div class="zx7service-icon">🪨</div>
                    <h3>Hardscaping</h3>
                    <p>Professional hardscaping services including walkways, retaining walls, and decorative stone features that add structure to your landscape.</p>
                </div>
                <div class="zx7service-card">
                    <div class="zx7service-icon">🌳</div>
                    <h3>Plant Selection</h3>
                    <p>Expert plant selection and placement services ensuring your garden thrives in local conditions while meeting your aesthetic goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="zx7about-section">
        <div class="zx7container">
            <div class="zx7about-grid">
                <div class="zx7about-text">
                    <h3>About ZephyxToday</h3>
                    <p>ZephyxToday has been transforming outdoor spaces for over two decades, bringing together expert craftsmanship and innovative design solutions. Our team of experienced professionals understands that every outdoor space has unique potential.</p>
                    <p>We specialize in creating functional and beautiful patios and gardens that reflect our clients' personalities while enhancing their property value. Our commitment to quality materials, sustainable practices, and customer satisfaction has made us a trusted name in outdoor design.</p>
                    <p>From small residential gardens to large commercial landscapes, we approach each project with the same dedication to excellence and attention to detail that has defined our work since our founding.</p>
                </div>
                <div class="zx7about-image">
                    <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Beautiful garden design">
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="zx7history-timeline">
        <div class="zx7container">
            <h2 class="zx7section-title">Our Journey</h2>
            <div class="zx7timeline-item">
                <div class="zx7timeline-year">2001</div>
                <div class="zx7timeline-content">
                    <h4>Company Founded</h4>
                    <p>ZephyxToday was established with a vision to create exceptional outdoor spaces. Starting with a small team of passionate designers and craftsmen in the local community.</p>
                </div>
            </div>
            <div class="zx7timeline-item">
                <div class="zx7timeline-year">2005</div>
                <div class="zx7timeline-content">
                    <h4>First Major Project</h4>
                    <p>Completed our first large-scale commercial landscape project, establishing our reputation for handling complex design challenges and delivering outstanding results.</p>
                </div>
            </div>
            <div class="zx7timeline-item">
                <div class="zx7timeline-year">2010</div>
                <div class="zx7timeline-content">
                    <h4>Sustainable Practices</h4>
                    <p>Pioneered eco-friendly landscaping practices in our region, introducing water-efficient irrigation systems and native plant integration into our standard services.</p>
                </div>
            </div>
            <div class="zx7timeline-item">
                <div class="zx7timeline-year">2015</div>
                <div class="zx7timeline-content">
                    <h4>Technology Integration</h4>
                    <p>Adopted advanced 3D design software and drone surveying technology, allowing clients to visualize their projects before construction begins.</p>
                </div>
            </div>
            <div class="zx7timeline-item">
                <div class="zx7timeline-year">2020</div>
                <div class="zx7timeline-content">
                    <h4>Expansion & Growth</h4>
                    <p>Expanded our service area and team, while maintaining our commitment to personalized service and quality craftsmanship that our clients have come to expect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="zx7gallery-section">
        <div class="zx7container">
            <h2 class="zx7section-title">Project Gallery</h2>
            <div class="zx7gallery-grid">
                <div class="zx7gallery-item">
                    <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Modern patio design">
                </div>
                <div class="zx7gallery-item">
                    <img src="https://images.pexels.com/photos/1400375/pexels-photo-1400375.jpeg" alt="Garden landscape">
                </div>
                <div class="zx7gallery-item">
                    <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Outdoor living space">
                </div>
                <div class="zx7gallery-item">
                    <img src="https://images.pexels.com/photos/1400375/pexels-photo-1400375.jpeg" alt="Stone pathway">
                </div>
                <div class="zx7gallery-item">
                    <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Water feature">
                </div>
                <div class="zx7gallery-item">
                    <img src="https://images.pexels.com/photos/1400375/pexels-photo-1400375.jpeg" alt="Pergola design">
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section id="expertise" class="zx7expertise-section">
        <div class="zx7container">
            <h2 class="zx7section-title">Our Expertise</h2>
            <div class="zx7expertise-cards">
                <div class="zx7expertise-card">
                    <h4>Soil Analysis & Preparation</h4>
                    <p>Comprehensive soil testing and preparation ensures optimal growing conditions for all plantings. We analyze pH levels, drainage, and nutrient content to create the perfect foundation for your garden.</p>
                </div>
                <div class="zx7expertise-card">
                    <h4>Climate-Adaptive Design</h4>
                    <p>Our designs consider local climate patterns, seasonal changes, and microclimates within your property to ensure year-round beauty and plant health.</p>
                </div>
                <div class="zx7expertise-card">
                    <h4>Drainage Solutions</h4>
                    <p>Expert drainage planning prevents water damage and creates healthy growing environments. We design systems that manage water flow effectively while enhancing landscape aesthetics.</p>
                </div>
                <div class="zx7expertise-card">
                    <h4>Seasonal Planning</h4>
                    <p>Strategic seasonal planning ensures your outdoor space looks beautiful throughout the year, with carefully selected plants that provide continuous color and interest.</p>
                </div>
                <div class="zx7expertise-card">
                    <h4>Structural Integration</h4>
                    <p>Seamless integration of hardscape and softscape elements creates cohesive outdoor environments that complement your home's architecture and your lifestyle needs.</p>
                </div>
                <div class="zx7expertise-card">
                    <h4>Maintenance Planning</h4>
                    <p>Thoughtful design includes long-term maintenance considerations, creating beautiful spaces that remain manageable and sustainable over time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Maintenance Section -->
    <section id="maintenance" class="zx7maintenance-section">
        <div class="zx7container">
            <h2 class="zx7section-title">Maintenance Services</h2>
            <div class="zx7maintenance-grid">
                <div>
                    <h3>Comprehensive Care Programs</h3>
                    <p>Our maintenance services ensure your outdoor investment continues to thrive and appreciate in value. We offer flexible programs tailored to your specific landscape needs and seasonal requirements.</p>
                    <ul class="zx7maintenance-list">
                        <li>Seasonal pruning and trimming</li>
                        <li>Fertilization and soil amendments</li>
                        <li>Pest and disease management</li>
                        <li>Irrigation system maintenance</li>
                        <li>Mulching and weed control</li>
                        <li>Hardscape cleaning and repairs</li>
                        <li>Plant replacement and updates</li>
                        <li>Seasonal color installations</li>
                    </ul>
                </div>
                <div class="zx7about-image">
                    <img src="https://images.pexels.com/photos/1400375/pexels-photo-1400375.jpeg" alt="Garden maintenance">
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="zx7process-section">
        <div class="zx7container">
            <h2 class="zx7section-title">Our Design Process</h2>
            <div class="zx7process-steps">
                <div class="zx7process-step">
                    <div class="zx7step-number">1</div>
                    <h4>Initial Consultation</h4>
                    <p>We begin with a comprehensive site visit and consultation to understand your vision, needs, and budget requirements.</p>
                </div>
                <div class="zx7process-step">
                    <div class="zx7step-number">2</div>
                    <h4>Site Analysis</h4>
                    <p>Detailed analysis of your property including soil conditions, drainage, sun exposure, and existing features.</p>
                </div>
                <div class="zx7process-step">
                    <div class="zx7step-number">3</div>
                    <h4>Design Development</h4>
                    <p>Creation of detailed design plans incorporating your preferences with our professional expertise and local knowledge.</p>
                </div>
                <div class="zx7process-step">
                    <div class="zx7step-number">4</div>
                    <h4>Project Implementation</h4>
                    <p>Professional installation by our experienced team using quality materials and proven construction techniques.</p>
                </div>
                <div class="zx7process-step">
                    <div class="zx7step-number">5</div>
                    <h4>Final Walkthrough</h4>
                    <p>Comprehensive project review and care instructions to ensure your complete satisfaction with the finished result.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="zx7testimonials-section">
        <div class="zx7container">
            <h2 class="zx7section-title">Client Reviews</h2>
            <div class="zx7testimonials-grid">
                <div class="zx7testimonial-card">
                    <div class="zx7testimonial-quote">"ZephyxToday transformed our backyard into an amazing outdoor living space. The attention to detail and quality of work exceeded our expectations. Our family now spends every evening enjoying our beautiful new patio."</div>
                    <div class="zx7testimonial-author">- Sarah Mitchell</div>
                </div>
                <div class="zx7testimonial-card">
                    <div class="zx7testimonial-quote">"Professional, reliable, and creative. The team listened to our ideas and created a garden design that perfectly fits our lifestyle. The maintenance program keeps everything looking perfect year-round."</div>
                    <div class="zx7testimonial-author">- Robert Chen</div>
                </div>
                <div class="zx7testimonial-card">
                    <div class="zx7testimonial-quote">"Outstanding work from start to finish. The project was completed on schedule and the results are stunning. Our property value has definitely increased thanks to their expert landscaping."</div>
                    <div class="zx7testimonial-author">- Maria Rodriguez</div>
                </div>
                <div class="zx7testimonial-card">
                    <div class="zx7testimonial-quote">"The irrigation system they installed has saved us time and water while keeping our garden healthy. Their sustainable approach and plant selection expertise really shows in the final result."</div>
                    <div class="zx7testimonial-author">- David Thompson</div>
                </div>
                <div class="zx7testimonial-card">
                    <div class="zx7testimonial-quote">"Excellent communication throughout the entire process. They explained every step and made sure we were happy with the progress. The finished patio is exactly what we envisioned."</div>
                    <div class="zx7testimonial-author">- Jennifer Adams</div>
                </div>
                <div class="zx7testimonial-card">
                    <div class="zx7testimonial-quote">"ZephyxToday's team is knowledgeable, professional, and truly cares about their work. They created a low-maintenance garden that looks beautiful in every season."</div>
                    <div class="zx7testimonial-author">- Michael Johnson</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="zx7footer">
        <div class="zx7container">
            <div class="zx7footer-grid">
                <div class="zx7footer-section">
                    <h4>Contact Information</h4>
                    <p>📍 2847 Oakwood Boulevard<br>Springfield, IL 62704</p>
                    <p>📧 info@zephyxtoday.com</p>
                    <p>📞 <a href="tel:+12175559847">(217) 555-9847</a></p>
                    <p>🕒 Mon-Fri: 8AM-6PM<br>Sat: 9AM-4PM</p>
                </div>
                <div class="zx7footer-section">
                    <h4>Services</h4>
                    <a href="#services">Garden Planning</a>
                    <a href="#services">Patio Construction</a>
                    <a href="#services">Irrigation Systems</a>
                    <a href="#services">Landscape Design</a>
                    <a href="#maintenance">Maintenance Programs</a>
                </div>
                <div class="zx7footer-section">
                    <h4>Company</h4>
                    <a href="#about">About Us</a>
                    <a href="#history">Our History</a>
                    <a href="#process">Design Process</a>
                    <a href="#testimonials">Client Reviews</a>
                    <a href="#gallery">Project Gallery</a>
                </div>
                                <div class="zx7footer-section">
                    <h4>Legal</h4>
                    <a href="#" onclick="openModal('privacy')">Privacy Policy</a>
                    <a href="#" onclick="openModal('terms')">Terms of Service</a>
                    <a href="#expertise">Our Expertise</a>
                    <a href="#contact">Contact Us</a>
                </div>
            </div>
            <div class="zx7footer-bottom">
                <p>© 2024 ZephyxToday. All rights reserved. Professional patio and garden design services.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy" class="zx7modal">
        <div class="zx7modal-content">
            <span class="zx7close" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>ZephyxToday collects information you provide directly to us, such as when you request a consultation, sign up for our newsletter, or contact us for services. This may include your name, email address, phone number, property address, and project details.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide and improve our patio and garden design services</li>
                <li>Communicate with you about your projects and appointments</li>
                <li>Send you updates about our services and seasonal maintenance tips</li>
                <li>Respond to your inquiries and provide customer support</li>
                <li>Comply with legal obligations and protect our rights</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our business, conducting our services, or serving you.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@zephyxtoday.com or (217) 555-9847.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms" class="zx7modal">
        <div class="zx7modal-content">
            <span class="zx7close" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using ZephyxToday's services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            
            <h3>Service Description</h3>
            <p>ZephyxToday provides professional patio and garden design services, including but not limited to landscape design, patio construction, irrigation systems, hardscaping, plant selection, and maintenance services.</p>
            
            <h3>Project Agreements</h3>
            <p>All projects require a signed contract detailing scope of work, timeline, materials, and payment terms. Changes to the original scope may result in additional charges and timeline adjustments.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment schedules are outlined in individual project contracts. We typically require a deposit to begin work, with progress payments due at specified milestones. Final payment is due upon project completion and client approval.</p>
            
            <h3>Warranties and Guarantees</h3>
            <p>We provide warranties on our workmanship and materials as specified in individual contracts. Plant warranties are subject to proper care and maintenance by the client. Weather-related damage is not covered under our standard warranty.</p>
            
            <h3>Limitation of Liability</h3>
            <p>ZephyxToday's liability is limited to the contract value of services provided. We are not responsible for indirect, incidental, or consequential damages.</p>
            
            <h3>Cancellation Policy</h3>
            <p>Project cancellations must be made in writing. Cancellation fees may apply based on work completed and materials ordered. Deposits are non-refundable once work has commenced.</p>
            
            <h3>Property Access</h3>
            <p>Clients must provide safe and reasonable access to work areas. Any delays due to access issues may result in schedule adjustments and additional charges.</p>
            
            <h3>Permits and Regulations</h3>
            <p>Clients are responsible for obtaining necessary permits unless otherwise specified in the contract. All work will comply with local building codes and regulations.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@zephyxtoday.com or (217) 555-9847.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.zx7modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        }

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.zx7nav-container');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, #1e3a21, #2c5530)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #2c5530, #4a7c59)';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.zx7service-card, .zx7testimonial-card, .zx7expertise-card, .zx7timeline-item');
            
            animateElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '1';
            document.body.style.transition = 'opacity 0.5s ease';
        });

        // Initialize page
        document.body.style.opacity = '0';
    </script>
</body>
</html>

