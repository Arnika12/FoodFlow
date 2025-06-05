<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - FoodFlow</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="terms.css">
</head>
<body>
    <?php
    if (isset($_SESSION['userloggedin']) && $_SESSION['userloggedin']) {
        include 'nav-logged.php';
    } else {
        include 'navbar.php';
    }
    ?>

    <div class="terms-container">
        <div class="terms-header">
            <h1>Terms & Conditions</h1>
            <p>Please read these terms and conditions carefully before using FoodFlow's services.</p>
        </div>

        <div class="terms-content">
            <div class="terms-section">
                <h2>1. Acceptance of Terms</h2>
                <p>By accessing and using FoodFlow's website and services, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you may not use our services.</p>
            </div>

            <div class="terms-section">
                <h2>2. User Account</h2>
                <p>To use certain features of our service, you must register for an account. You agree to:</p>
                <ul>
                    <li>Provide accurate and complete information</li>
                    <li>Maintain the security of your account</li>
                    <li>Notify us immediately of any unauthorized use</li>
                    <li>Accept responsibility for all activities under your account</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>3. Ordering and Payment</h2>
                <p>When placing an order through FoodFlow:</p>
                <ul>
                    <li>All prices are in local currency and include applicable taxes</li>
                    <li>Payment must be made in full at the time of ordering</li>
                    <li>We accept cash on delivery and card payments</li>
                    <li>Orders are subject to availability</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>4. Delivery and Pickup</h2>
                <p>Delivery times are estimates and may vary based on:</p>
                <ul>
                    <li>Distance from the restaurant</li>
                    <li>Current order volume</li>
                    <li>Weather conditions</li>
                    <li>Traffic conditions</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>5. Cancellation Policy</h2>
                <p>Orders can be cancelled under the following conditions:</p>
                <ul>
                    <li>Before the restaurant starts preparing your order</li>
                    <li>With valid reason and proper documentation</li>
                    <li>Subject to restaurant's cancellation policy</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>6. Privacy and Data Protection</h2>
                <p>We are committed to protecting your privacy. Our data collection and usage practices are detailed in our Privacy Policy.</p>
            </div>

            <div class="terms-section">
                <h2>7. Intellectual Property</h2>
                <p>All content on FoodFlow's website, including but not limited to text, graphics, logos, and images, is the property of FoodFlow and is protected by intellectual property laws.</p>
            </div>

            <div class="terms-section">
                <h2>8. Limitation of Liability</h2>
                <p>FoodFlow shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>
            </div>
        </div>

        <div class="terms-footer">
            <p>By using FoodFlow's services, you acknowledge that you have read and understood these Terms and Conditions.</p>
            <p class="last-updated">Last Updated: May 6, 2025</p>
        </div>
    </div>

    <?php include 'footer.html'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 