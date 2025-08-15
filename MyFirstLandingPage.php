<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .header {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        
        .main-content {
            background: white;
            padding: 20px;
            margin-top: 20px;
        }
        
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        .button {
            display: inline-block;
            background: #333;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 10px;
        }
        
        .button:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to My Website</h1>
    </div>
    
    <div class="container">
        <div class="main-content">
            <h2>About Us</h2>
            <p>This is a simple PHP landing page perfect for beginners.</p>
            <p>You can easily customize this page by changing the text and colors.</p>
            
            <h2>Our Services</h2>
            <ul>
                <li>Simple web design</li>
                <li>Basic PHP development</li>
                <li>Easy-to-use templates</li>
            </ul>
            
            <a href="#contact" class="button">Contact Us</a>
        </div>
    </div>
    
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> My Simple Website. All rights reserved.</p>
    </div>
</body>
</html>