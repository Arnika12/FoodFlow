<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - FoodFlow</title>
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
        .faq-section {
            padding: 40px 20px;
            margin-bottom: 60px;
        }
        .faq-title {
            color: #fb4a36;
            margin-bottom: 30px;
            text-align: center;
        }
        .accordion-button:not(.collapsed) {
            background-color: #fdd9c9;
            color: #fb4a36;
        }
        .accordion-button:focus {
            border-color: #fb4a36;
            box-shadow: 0 0 0 0.25rem rgba(251, 74, 54, 0.25);
        }
        .accordion-item {
            margin-bottom: 10px;
            border: 1px solid rgba(251, 74, 54, 0.2);
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

    <div class="container faq-section">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        
        <div class="accordion" id="faqAccordion">
            <!-- Ordering -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        How do I place an order?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        To place an order, simply browse our menu, select the items you want, add them to your cart, and proceed to checkout. You'll need to be logged in to complete your order.
                    </div>
                </div>
            </div>

            <!-- Payment -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        What payment methods do you accept?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We accept cash on delivery and card payments. Online payment options are available during checkout.
                    </div>
                </div>
            </div>

            <!-- Delivery -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        What are your delivery charges?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our delivery charge is Rs. 130. For takeaway orders, there is no delivery charge.
                    </div>
                </div>
            </div>

            <!-- Reservation -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        How can I make a table reservation?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can make a table reservation through our website by visiting the Reservations page. Select your preferred date, time, and number of guests.
                    </div>
                </div>
            </div>

            <!-- Order Tracking -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        How can I track my order?
                    </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Once your order is placed, you can track its status in the "My Orders" section of your account. You'll see updates as your order is confirmed, prepared, and out for delivery.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.html'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 