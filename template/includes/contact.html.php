<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>CAS-222 Template | Ammura Heidar</title>
    <meta name="author" content="Ammura Heidar">
    <meta name="description" content="Week 6, Template Assignment">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">

    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/navigation.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <script src="https://www.w3schools.com/lib/w3.js"></script>

    <link rel="icon" type="image/x-icon" href="" />

</head>

<body>

    <div id="container">

        <header class="header">

            <h1 id="logo">Cat Ipsum Dolor</h1>

            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="../index.html" target="_self">Home</a></li>
                <li><a href="../about.html" target="_self">About Us</a></li>
                <li><a href="../gallery.html" target="_self">Gallery</a></li>
                <li><a href="../events.html" target="_self">Events</a></li>
                <li><a href="../faqs.html" target="_self">FAQ's</a></li>
                <li><a href="contact.html.php" target="_self">Contact Us</a></li>
            </ul>

        </header>
        <br><br><br>
        
        <div id="wrapper">


            <main>
                <h1>Contact Us</h1>
                <form method="post" action=" " id="inquiryForm" >
                                    
                    <label for="myName">Name:</label><br>
                    <input type="text" name="myName" id="myName"><br><br>
                    <label for="myEmail">E-mail:</label><br>
                    <input type="text" name="myEmail" id="myEmail"><br><br>
                    <label for="myQuestion">Question:</label><br>
                    <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea><br><br>
                    <input id="mySubmit" type="submit" value="Submit"><br>
                    
                </form>
                
            </main>

            <footer>
                <p>Designed by: Ammura Heidar &copy; 2021</p>

            </footer>

        </div>
    </div>
</body>

</html>