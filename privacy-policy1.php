<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - FoodFlow</title>
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
            <h1>Privacy Policy</h1>
            <p>Your privacy is important to us. This policy outlines how we collect, use, and protect your personal information.</p>
        </div>

        <div class="terms-content">
            <div class="terms-section">
                <h2>1. Information We Collect</h2>
                <p>We collect the following types of information:</p>
                <ul>
                    <li>Personal information (name, email, phone number)</li>
                    <li>Delivery address and location data</li>
                    <li>Payment information</li>
                    <li>Order history and preferences</li>
                    <li>Device and usage information</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>2. How We Use Your Information</h2>
                <p>We use your information to:</p>
                <ul>
                    <li>Process and deliver your orders</li>
                    <li>Communicate about your orders and account</li>
                    <li>Send promotional offers and updates</li>
                    <li>Improve our services and user experience</li>
                    <li>Ensure security and prevent fraud</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>3. Information Sharing</h2>
                <p>We may share your information with:</p>
                <ul>
                    <li>Restaurant partners for order fulfillment</li>
                    <li>Delivery service providers</li>
                    <li>Payment processors</li>
                    <li>Service providers and business partners</li>
                    <li>Legal authorities when required by law</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>4. Data Security</h2>
                <p>We implement appropriate security measures to protect your information, including:</p>
                <ul>
                    <li>Encryption of sensitive data</li>
                    <li>Secure payment processing</li>
                    <li>Regular security assessments</li>
                    <li>Access controls and authentication</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>5. Your Rights</h2>
                <p>You have the right to:</p>
                <ul>
                    <li>Access your personal information</li>
                    <li>Correct inaccurate data</li>
                    <li>Request deletion of your data</li>
                    <li>Opt-out of marketing communications</li>
                    <li>Withdraw consent for data processing</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>6. Cookies and Tracking</h2>
                <p>We use cookies and similar technologies to:</p>
                <ul>
                    <li>Remember your preferences</li>
                    <li>Analyze website usage</li>
                    <li>Improve our services</li>
                    <li>Provide personalized content</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>7. Children's Privacy</h2>
                <p>Our services are not intended for children under 13. We do not knowingly collect personal information from children under 13.</p>
            </div>

            <div class="terms-section">
                <h2>8. Changes to Privacy Policy</h2>
                <p>We may update this privacy policy from time to time. We will notify you of any material changes by posting the new policy on this page.</p>
            </div>
        </div>

        <div class="terms-footer">
            <p>By using FoodFlow's services, you agree to the collection and use of information in accordance with this Privacy Policy.</p>
            <p class="last-updated">Last Updated: May 6, 2025</p>
        </div>
    </div>

    <?php include 'footer.html'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 