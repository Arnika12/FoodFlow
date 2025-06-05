<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FoodFlow</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            padding-top: 95px;
            background: #feead4;
            font-family: 'Poppins', sans-serif;
        }
        .contact-section {
            padding: 40px 20px;
            margin-bottom: 60px;
        }
        .contact-title {
            color: #fb4a36;
            margin-bottom: 30px;
            text-align: center;
        }
        .contact-info {
            background: #fdd9c9;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .contact-info i {
            color: #fb4a36;
            font-size: 24px;
            margin-right: 10px;
        }
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .form-control:focus {
            border-color: #fb4a36;
            box-shadow: 0 0 0 0.25rem rgba(251, 74, 54, 0.25);
        }
        .btn-submit {
            background-color:rgb(248, 147, 101)!important;
            filter: drop-shadow(0 0 10px rgba(0, 1, 1, 0.5));
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #e53d2a;
            transform: translateY(-2px);
        }
        .map-container {
            height: 300px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['userloggedin']) && $_SESSION['userloggedin']) {
        include 'nav-logged.php';
    } else {
        include 'navbar.php';
    }
    ?>

    <div class="container contact-section">
        <h2 class="contact-title">Contact Us</h2>
        
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['message_type'] === 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['message_type']);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h4 class="mb-4">Get in Touch</h4>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Restaurant Street, Colombo, Sri Lanka</p>
                    <p><i class="fas fa-phone"></i> +94 11 234 5678</p>
                    <p><i class="fas fa-envelope"></i> info@foodflow.com</p>
                    <p><i class="fas fa-clock"></i> Open Hours: 10:00 AM - 10:00 PM</p>
                    
                    <h5 class="mt-4 mb-3">Follow Us</h5>
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="contact-form">
                    <h4 class="mb-4">Send us a Message</h4>
                    <form action="process_contact.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58585989568!2d79.7861641363475!3d6.921833369440981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1709244559083!5m2!1sen!2sus"
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <?php include 'footer.html'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 