<?php
// Get current page name for dynamic title
$page = basename($_SERVER['PHP_SELF'], '.php');
$pageTitle = ucfirst($page);

// Custom titles for specific pages
$titles = [
    'index' => 'Home',
    'about' => 'About ISTE',
    'events' => 'Events & Workshops',
    'team' => 'Our Team',
    'gallery' => 'Gallery',
    'contact' => 'Contact Us'
];

$currentTitle = isset($titles[$page]) ? $titles[$page] : $pageTitle;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="ISTE Student Chapter - Department of CSE (IoT, Cybersecurity & Blockchain) at MH Saboo Siddik College of Engineering. Join us for workshops, hackathons, and cutting-edge tech events.">
    <meta name="keywords" content="ISTE, Student Chapter, IoT, Cybersecurity, Blockchain, MH Saboo Siddik, Engineering, Technology, Workshops, Events">
    <meta name="author" content="ISTE Student Chapter - MH Saboo Siddik">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="ISTE Student Chapter - MH Saboo Siddik">
    <meta property="og:description" content="Department of CSE - IoT, Cybersecurity & Blockchain Technology">
    <meta property="og:type" content="website">
    
    <title><?php echo $currentTitle; ?> | ISTE Student Chapter - MH Saboo Siddik</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/cyber.css">
    <link rel="stylesheet" href="assets/css/animations.css">
</head>
<body>
    <!-- Canvas for particles effect -->
    <canvas id="particles-canvas"></canvas>
