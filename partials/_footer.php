<!-- /*<div class="footer container-fluid bg-dark text-light">
    <p class="text-center py-2 mb-0">Copyright © 2021 Designed by <a href="https://github.com/darshankparmar" target="_blank" rel="noopener noreferrer">@darshankparmar</a></p>
</div>
*/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.footer {
    background: #222;
    color: white;
    padding: 5rem 5% 2rem;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 3rem;
}

.footer-section h3 {
    color: #e74c3c;
    margin-bottom: 1.5rem;
    font-size: 1.4rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.footer-section h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: #e74c3c;
}

.footer-section p,
.footer-section a {
    color: #bbb;
    margin-bottom: 0.8rem;
    display: block;
    text-decoration: none;
    transition: all 0.3s;
    font-size: 1rem;
}

.footer-section a:hover {
    color: #e74c3c;
    transform: translateX(5px);
}

.social-links {
    display: flex;
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.social-links a {
    color: white;
    font-size: 1.8rem;
    transition: all 0.3s;
}

.social-links a:hover {
    color: #e74c3c;
    transform: translateY(-5px);
}

.footer-bottom {
    text-align: center;
    margin-top: 4rem;
    padding-top: 2rem;
    border-top: 1px solid #444;
    color: #888;
    font-size: 0.9rem;
}

/* Authentication Forms */
.auth-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    margin-top: 80px;
}

.auth-form {
    background: white;
    padding: 2.5rem;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.register-form {
    max-width: 500px;
}

.auth-form h2 {
    text-align: center;
    color: #333;
    margin-bottom: 2rem;
    font-size: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 1rem;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #e74c3c;
    box-shadow: 0 0 0 4px rgba(231, 76, 60, 0.1);
    outline: none;
}

.form-group select {
    background: white;
    cursor: pointer;
}

.auth-form button {
    width: 100%;
    padding: 1.2rem;
    background: #e74c3c;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 1.5rem;
}

.auth-form button:hover {
    background: #c0392b;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
}

.auth-link {
    text-align: center;
    margin-top: 1.5rem;
    color: #666;
    font-size: 0.95rem;
}

.auth-link a {
    color: #e74c3c;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}

.auth-link a:hover {
    color: #c0392b;
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .about-content,
    .contact-container {
        gap: 3rem;
    }
    
    .about-image img {
        height: 400px;
    }
}

@media (max-width: 768px) {
    .hamburger {
        display: flex;
        flex-direction: column;
        gap: 6px;
        cursor: pointer;
        z-index: 1001;
    }

    .hamburger span {
        width: 30px;
        height: 3px;
        background: #333;
        transition: 0.3s;
    }

    .hamburger.active span:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
    }

    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }

    .nav-links {
        position: fixed;
        top: 80px;
        left: -100%;
        width: 100%;
        height: calc(100vh - 80px);
        background: white;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
        transition: 0.3s;
    }

    .nav-links.active {
        left: 0;
    }

    .hero-content h1 {
        font-size: 2.5rem;
    }

    .hero-content p {
        font-size: 1.1rem;
    }

    .about-content,
    .contact-container,
    .footer-content {
        grid-template-columns: 1fr;
    }

    .about-image {
        order: -1;
    }

    .about-image img {
        height: 300px;
    }

    .menu-section,
    .contact,
    .about-section {
        padding: 4rem 5%;
    }

    .menu-section h2,
    .contact h2,
    .about-text h2 {
        font-size: 2.2rem;
    }
}

@media (max-width: 480px) {
    .hero-content h1 {
        font-size: 2rem;
    }

    .menu-grid {
        gap: 1.5rem;
    }

    .auth-form {
        padding: 2rem;
    }

    .footer {
        padding: 3rem 5% 1rem;
    }
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.fade-in {
    animation: fadeIn 1s ease-out;
}

.slide-up {
    animation: slideUp 1s ease-out;
}
    </style>
</head>
<body>
    
</body>
</html>
<footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Fast Food Corner is your destination for delicious, high-quality fast food. We pride ourselves on fresh ingredients and excellent service.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="/OnlineFoodDelivery/index.php">Home</a>
                <a href="/OnlineFoodDelivery/about.php">About</a>
                <a href="/OnlineFoodDelivery/viewFood.php">Menu</a>
                <a href="/OnlineFoodDelivery/contact.php">Contact</a>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p> PH4G+47J, Dhangadhi 10900</p>
               
                <p>Phone:986-8569253</p>
                <p>Email: info@ffc.com</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <p>Stay connected with us on social media</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/p/%F0%9D%90%85%F0%9D%90%85%F0%9D%90%82-%F0%9D%99%81%F0%9D%99%96%F0%9D%99%A8%F0%9D%99%A9-%F0%9D%99%81%F0%9D%99%A4%F0%9D%99%A4%F0%9D%99%99-%F0%9D%98%BE%F0%9D%99%A4%F0%9D%99%A7%F0%9D%99%A3%F0%9D%99%9A%F0%9D%99%A7-%F0%9D%98%BF%F0%9D%99%9D%F0%9D%99%96%F0%9D%99%A3%F0%9D%99%9C%F0%9D%99%96%F0%9D%99%99%F0%9D%99%9D%F0%9D%99%9E-4-100071540520679/"><i class="fab fa-facebook"></i></a>
                
                    <a href="https://www.tiktok.com/@fastfoodcornerloves"><i class="fab fa-instagram"></i></a>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Fast Food Corner. All rights reserved.</p>
        </div>
    </footer>
