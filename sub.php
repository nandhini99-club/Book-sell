<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = htmlspecialchars($_POST["book"]);
    $price = htmlspecialchars($_POST["price"]);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Confirmation</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: #f4f4f4;
                padding: 20px;
            }
            .confirmation-container {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                width: 300px;
                margin: auto;
            }
            .back-btn {
                margin-top: 20px;
                display: inline-block;
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }
            .back-btn:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="confirmation-container">
            <h2>Order Confirmation</h2>
            <p><strong>Book:</strong> <?php echo $book; ?></p>
            <p><strong>Price:</strong> $<?php echo $price; ?></p>
            <p>Thank you for your purchase!</p>
            <a href="index.html" class="back-btn">Back to Store</a>
        </div>
    </body>
    </html>
<?php
} else {
    echo "<p>Invalid request.</p>";
}
?>
