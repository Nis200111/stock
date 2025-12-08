<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Stocks</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #131313;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .promo-bar {
            background-color: #3477A2;
            color: white;
            padding: 10px 0;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        }

        .promo-bar .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .promo-content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
        }

        .promo-text {
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }

        .btn-signup-promo {
            background-color: white;
            color: #131313;
            padding: 6px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            white-space: nowrap;
            flex-shrink: 0;
            font-family: 'Poppins', sans-serif;
        }

        .btn-signup-promo:hover {
            background-color: #f0f0f0;
        }

        .header {
            background-color: #131313;
            padding: 12px 16px;
            color: white;
        }

        @media (min-width: 640px) {
            .header {
                padding: 12px 24px;
            }
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        /* Left side - Mobile Menu Only */
        .nav-left {
            display: flex;
            align-items: center;
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: flex;
            align-items: center;
        }

        @media (min-width: 1024px) {
            .mobile-menu-btn {
                display: none;
            }
        }

        .menu-btn {
            color: white;
            padding: 8px;
            background: none;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .menu-btn:hover {
            background-color: #374151;
        }

        .menu-btn i {
            font-size: 18px;
        }

        /* Logo Center */
        .logo-container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 40px;
        }

        .logo-link {
            display: flex;
            align-items: center;
        }

        .navbar-logo {
            height: 32px;
            width: auto;
           
        }

        @media (min-width: 640px) {
            .navbar-logo {
                height: 40px;
            }
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
            display: none;
        }

        /* Right side - Pricing, Icons and Login Button */
        .nav-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .nav-right {
                gap: 24px;
            }
        }

        .pricing-dropdown {
            display: none;
            align-items: center;
            gap: 4px;
            color: white;
            cursor: pointer;
            transition: color 0.3s;
        }

        @media (min-width: 640px) {
            .pricing-dropdown {
                display: flex;
            }
        }

        .pricing-dropdown:hover {
            color: #d1d5db;
        }

        .pricing-text {
            font-size: 14px;
        }

        .pricing-chevron {
            font-size: 12px;
        }

        .nav-icon {
            color: white;
            cursor: pointer;
            transition: color 0.3s;
        }

        .nav-icon:hover {
            color: #d1d5db;
        }

        .nav-icon.globe {
            display: none;
        }

        @media (min-width: 640px) {
            .nav-icon.globe {
                display: block;
            }
        }

        .nav-icon.heart {
            display: none;
            font-size: 18px;
        }

        @media (min-width: 640px) {
            .nav-icon.heart {
                display: block;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 24px;
                height: 24px;
            }
        }

        .nav-icon.cart {
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
        }

        .btn-login {
            display: none;
            background-color: white;
            color: #131313;
            padding: 8px 16px;
            border-radius: 6px;
            border: none;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        @media (min-width: 640px) {
            .btn-login {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        .btn-login:hover {
            background-color: #f3f4f6;
        }
/* Apply Poppins font to the entire section */
.trusted-companies-section,
.trusted-companies-section * {
    font-family: 'Poppins', sans-serif;
}

/* Container for the scrolling track */
.logo-company-slider {
    overflow: hidden; /* Hide the logos that are outside the visible area */
    white-space: nowrap; /* Keep all slides on one line */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional subtle shadow */
    padding: 20px 0;
    margin: 20px 0;
    background-color: white; /* Give it a clean background */
}

/* The element that contains all the logo slides */
.logo-company-track {
    display: flex;
    animation: scroll-logos 40s linear infinite; /* Start the animation */
}

/* Individual logo wrapper */
.logo-company-track a {
    flex-shrink: 0; /* Prevents logos from shrinking */
    width: 150px; /* Adjust as needed */
    padding: 0 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80px; /* Set a fixed height */
}

/* Logo image style */
.logo-company-slide {
    max-width: 100%;
    max-height: 100%;
    filter: grayscale(100%); /* Makes logos look "trusted" and uniform */
    opacity: 0.6;
    transition: filter 0.3s, opacity 0.3s;
}

/* Highlight logo on hover */
.logo-company-track a:hover .logo-company-slide {
    filter: grayscale(0%); /* Colorize on hover */
    opacity: 1;
}

/* Keyframes for the scrolling animation */
@keyframes scroll-logos {
    0% {
        transform: translateX(0); /* Start at the beginning */
    }
    100% {
        /* Move the track exactly half its width (which is one full set of logos) */
        transform: translateX(-50%);
    }
}
        /* Navigation Links */
        .nav-links {
            display: none;
            list-style: none;
            gap: 32px;
            justify-content: center;
            align-items: center;
            padding-top: 16px;
        }

        @media (min-width: 1024px) {
            .nav-links {
                display: flex;
            }
        }

        .nav-links li {
            position: relative;
        }

        .nav-links li a {
            text-decoration: none;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s;
        }

        .nav-links li a:hover {
            color: #3477A2;
        }

        .nav-links li a i {
            font-size: 10px;
            margin-left: 2px;
        }

        /* New Hero Section Styles */
        .new-hero-section {
            position: relative;
            min-height: 500px;
            background: url('resources/bg1.png') no-repeat center center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        @media (min-width: 640px) {
            .new-hero-section {
                min-height: 600px;
            }
        }

        .new-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5));
        }
        /* Link to Poppins font in your HTML <head> section (required) */
/* <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> */

.creative-guidance-section {
    max-width: 1200px; /* Adjust as needed for your page */
    margin: 40px auto;
    padding: 0 20px;
    font-family: 'Poppins', sans-serif;
    color: #333; /* Dark text color */
}

/* Main Heading */
.creative-guidance-section h2 {
    font-size: 2em;
    font-weight: 600;
    margin-bottom: 30px;
    text-align: left;
}

/* --- Main Feature Card Styling --- */
.main-feature-card {
    display: flex;
    gap: 30px;
    margin-bottom: 40px;
    align-items: flex-start;
}

.main-feature-card img {
    width: 60%; /* Image takes 60% of the space */
    height: auto;
    border-radius: 5px; /* Slight rounding of corners */
    object-fit: cover;
}

.main-feature-content {
    width: 40%; /* Content takes 40% of the space */
    padding-top: 5px;
}

.main-feature-content h3 {
    font-size: 1.25em;
    font-weight: 700;
    line-height: 1.5;
    margin-top: 0;
    margin-bottom: 10px;
}

.main-feature-content p {
    font-size: 1em;
    font-weight: 400;
    line-height: 1.6;
    color: #555;
}

/* --- Sub-Features Container Styling --- */
.sub-features-container {
    display: flex;
    gap: 30px;
    justify-content: space-between;
    margin-bottom: 50px;
}

.sub-feature-card {
    width: calc(33.333% - 20px); /* Distribute into three columns */
    line-height: 1.4;
}

.sub-feature-card img {
    width: 100%;
    height: 180px; /* Fixed height for visual consistency */
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 15px;
}

.sub-feature-card h4 {
    font-size: 1.1em;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 8px;
}

.sub-feature-card p {
    font-size: 0.9em;
    font-weight: 400;
    color: #555;
}

/* --- Button Styling --- */
.button-container {
    text-align: center;
}

.visit-blog-button {
    display: inline-block;
    padding: 12px 25px;
    border: 1px solid #ccc; /* Light gray border */
    border-radius: 4px;
    text-decoration: none;
    font-size: 1em;
    font-weight: 500;
    color: #333;
    transition: background-color 0.3s, border-color 0.3s;
}

.visit-blog-button:hover {
    background-color: #f7f7f7;
    border-color: #aaa;
}

/* --- Responsive Adjustments (Optional but Recommended) --- */
@media (max-width: 900px) {
    .main-feature-card {
        flex-direction: column; /* Stack image and content vertically */
    }
    .main-feature-card img, 
    .main-feature-content {
        width: 100%;
    }
    .main-feature-content {
        padding-top: 15px;
    }
}

@media (max-width: 768px) {
    .sub-features-container {
        flex-wrap: wrap; /* Allow cards to wrap to next line */
    }
    .sub-feature-card {
        width: calc(50% - 15px); /* Two cards per row */
        margin-bottom: 20px;
    }
}

@media (max-width: 480px) {
    .sub-feature-card {
        width: 100%; /* One card per row on small screens */
    }
}

        .hero-content {
            position: relative;
            z-index: 10;
            width: 90%;
            max-width: 1200px;
            padding: 0 20px;
        }

        .hero-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        @media (min-width: 640px) {
            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (min-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
        }

        @media (min-width: 1024px) {
            .hero-title {
                font-size: 3.5rem;
                margin-bottom: 2rem;
            }
        }

        .hero-categories {
            display: none;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }

        @media (min-width: 640px) {
            .hero-categories {
                display: flex;
            }
        }

        .hero-category-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .search-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        @media (min-width: 1024px) {
            .search-container {
                flex-direction: row;
            }
        }

        .search-dropdown {
            position: relative;
            width: 100%;
        }

        @media (min-width: 1024px) {
            .search-dropdown {
                width: auto;
            }
        }

        .search-dropdown-btn {
            padding: 0.75rem 1.5rem;
            background: white;
            color: #374151;
            border-radius: 0.5rem;
            border: none;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.5rem;
            cursor: pointer;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 1024px) {
            .search-dropdown-btn {
                width: auto;
                justify-content: center;
            }
        }

        .search-dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 0.25rem;
            display: none;
            z-index: 50;
        }

        @media (min-width: 1024px) {
            .search-dropdown-menu {
                width: 12rem;
            }
        }

        .search-dropdown-item {
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #374151;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .search-dropdown-item:hover {
            background-color: #f9fafb;
        }

        .search-form {
            display: flex;
            flex: 1;
            width: 100%;
            background: white;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .search-input {
            flex: 1;
            padding: 0.75rem 1rem;
            border: none;
            outline: none;
            font-size: 0.875rem;
            color: #374151;
        }

        @media (min-width: 640px) {
            .search-input {
                font-size: 1rem;
            }
        }

        .search-input::placeholder {
            color: #9ca3af;
        }

        .search-submit {
            padding: 0.75rem 1.5rem;
            background: #dc2626;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-submit:hover {
            background: #b91c1c;
        }

        .search-by-image-btn {
            padding: 0.75rem 1.5rem;
            background: white;
            color: #374151;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            width: 100%;
            justify-content: center;
        }

        @media (min-width: 1024px) {
            .search-by-image-btn {
                width: auto;
            }
        }

        .search-by-image-btn:hover {
            background-color: #f9fafb;
        }

        .search-by-image-text {
            display: none;
        }

        @media (min-width: 640px) {
            .search-by-image-text {
                display: inline;
            }
        }

        .search-by-image-text-mobile {
            display: inline;
        }

        @media (min-width: 640px) {
            .search-by-image-text-mobile {
                display: none;
            }
        }

        .trending-topics {
            margin-top: 1rem;
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.8);
        }

        @media (min-width: 640px) {
            .trending-topics {
                font-size: 0.875rem;
                margin-top: 1.5rem;
            }
        }

        .trending-topic {
            cursor: pointer;
            transition: color 0.2s;
        }

        .trending-topic:hover {
            color: white;
        }

        .photo-credit {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        @media (min-width: 640px) {
            .photo-credit {
                left: 1.5rem;
            }
        }

        .photo-credit-text {
            display: none;
        }

        @media (min-width: 640px) {
            .photo-credit-text {
                display: inline;
            }
        }

        .photo-credit-text-mobile {
            display: inline;
        }

        @media (min-width: 640px) {
            .photo-credit-text-mobile {
                display: none;
            }
        }

        .geometric-shapes {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 6rem;
            height: 6rem;
            opacity: 0.3;
        }

        @media (min-width: 640px) {
            .geometric-shapes {
                width: 8rem;
                height: 8rem;
            }
        }

        /* New Stories Section */
        .stories-section {
            padding: 4rem 1.5rem;
            background-color: white;
        }

        .stories-container {
            max-width: 72rem;
            margin: 0 auto;
        }

        .stories-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 1.25rem;
            text-align: left;
        }

        @media (min-width: 640px) {
            .stories-title {
                font-size: 1.875rem;
            }
        }

        .stories-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            padding: 1.5rem;
        }

        @media (min-width: 768px) {
            .stories-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .stories-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .stories-item:hover {
            background-color: #f9fafb;
        }

        .stories-image {
            width: 4rem;
            height: 4rem;
            object-fit: cover;
            border-radius: 0.125rem;
        }

        @media (min-width: 768px) {
            .stories-image {
                width: 6rem;
                height: 6rem;
            }
        }

        .stories-label {
            font-size: 0.875rem;
            font-weight: 700;
            color: #374151;
        }

        /* Browse Section */
        .browse-section {
            padding: 48px 16px;
            background-color: #f9fafb;
            color: #111827;
        }

        @media (min-width: 640px) {
            .browse-section {
                padding: 64px 16px;
            }
        }

        .browse-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .browse-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 24px;
            text-align: left;
        }

        @media (min-width: 640px) {
            .browse-title {
                font-size: 30px;
                margin-bottom: 32px;
            }
        }

        @media (min-width: 1024px) {
            .browse-title {
                font-size: 36px;
            }
        }

        .category-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 24px;
            overflow-x: auto;
            padding-bottom: 8px;
            scrollbar-width: none;
        }

        @media (min-width: 640px) {
            .category-tabs {
                gap: 12px;
                margin-bottom: 32px;
            }
        }

        .category-tabs::-webkit-scrollbar {
            display: none;
        }

        .category-tab {
            padding: 8px 12px;
            background: white;
            border-radius: 9999px;
            font-size: 14px;
            border: 1px solid #e5e7eb;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
            flex-shrink: 0;
            text-decoration: none;
            color: #374151;
        }

        @media (min-width: 640px) {
            .category-tab {
                padding: 8px 16px;
            }
        }

        .category-tab:hover {
            background-color: #f3f4f6;
        }

        .category-tab.active {
            background-color: #1f2937;
            color: white;
            border-color: #1f2937;
        }

        .category-tab i {
            font-size: 12px;
        }

        .category-tab .crown-icon {
            color: #a78bfa;
        }

        .category-tab .search-icon {
            color: #9ca3af;
        }

        .sort-tabs {
            display: flex;
            gap: 24px;
            margin-bottom: 24px;
            border-bottom: 1px solid #e5e7eb;
            overflow-x: auto;
            padding-bottom: 0;
            scrollbar-width: none;
        }

        @media (min-width: 640px) {
            .sort-tabs {
                gap: 32px;
                margin-bottom: 32px;
            }
        }

        .sort-tabs::-webkit-scrollbar {
            display: none;
        }

        .sort-tab {
            padding: 12px 0;
            color: #6b7280;
            font-size: 14px;
            white-space: nowrap;
            text-decoration: none;
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
        }

        @media (min-width: 640px) {
            .sort-tab {
                font-size: 16px;
                padding: 16px 0;
            }
        }

        .sort-tab:hover {
            color: #374151;
        }

        .sort-tab.active {
            color: #111827;
            border-bottom-color: #000;
            font-weight: 600;
        }

        .image-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
            margin-bottom: 32px;
        }

        @media (min-width: 640px) {
            .image-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }
        }

        @media (min-width: 1024px) {
            .image-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .image-container {
            position: relative;
            cursor: pointer;
            display: block;
            border-radius: 12px;
            overflow: hidden;
            height: 256px;
            transition: transform 0.3s;
        }

        .image-container:hover {
            transform: scale(1.02);
        }

        .skeleton-loader {
            display: none;
        }

        .image-container img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0);
            transition: background-color 0.3s;
        }

        .image-container:hover .image-overlay {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .exclusive-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .featured-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #fbbf24;
            color: #1f2937;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .see-more-container {
            margin-top: 40px;
            text-align: center;
        }

        .btn-see-more {
            display: inline-block;
            padding: 12px 32px;
            border: 1px solid #d1d5db;
            border-radius: 9999px;
            color: #374151;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }

        .btn-see-more:hover {
            background-color: #f3f4f6;
        }/* --- Global Font Setup (Use Poppins) --- */
/* Ensure Poppins is imported in your HTML head:
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> */

.browse-section, 
.browse-section * {
    font-family: 'Poppins', sans-serif;
}

/* --- Image Grid Item Styling --- */

/* The main item container (already in your HTML) */
.gallery-item {
    position: relative;
    /* You may need to define width/height for the grid items here, e.g., using CSS Grid or Flexbox for the .image-grid */
}

/* --- Hover Overlay Styling --- */

.gallery-hover-overlay {
    /* Initially hidden and covers the entire image area */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    
    /* Layout: Use Flexbox to stack title on top and buttons on bottom */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Pushes top content up, bottom content down */
    
    /* Background: Semitransparent black gradient for the overlay */
    background: rgba(0, 0, 0, 0.4);
    
    /* Text/Icon Color: White */
    color: white;
    padding: 15px; /* Inner padding */
    
    /* Hide by default */
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease; /* Smooth fade-in effect */
}

/* Show the overlay when the gallery-item is hovered */
.gallery-item:hover .gallery-hover-overlay {
    opacity: 1;
    visibility: visible;
}

/* --- Top Content (Title) --- */

.gallery-hover-top {
    /* Title container at the top */
    width: 100%;
}

.gallery-hover-title {
    /* Title text styling */
    font-size: 1.1em;
    font-weight: 500;
    line-height: 1.3;
    /* Ensure the text stays within two lines if possible (optional) */
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* --- Bottom Content (Buttons) --- */

.gallery-hover-bottom {
    /* Button container at the bottom */
    display: flex;
    justify-content: space-between;
    align-items: flex-end; /* Align to the bottom edge of the overlay */
    width: 100%;
}

/* Save Button Styling (Left button in the image) */
.gallery-save-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    
    /* Styling to match the semi-transparent rounded button */
    background: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
    color: white; /* Text color inside the button */
    padding: 8px 15px;
    border: none;
    border-radius: 50px; /* Fully rounded corners */
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    transition: background 0.2s;
}

.gallery-save-btn:hover {
    background: rgba(255, 255, 255, 0.7); /* Slightly less transparent on hover */
}

/* Cart Button Styling (Right button in the image) */
.gallery-cart-btn {
    /* Styling to match the solid red circle button */
    background: #ff4747; /* Bright red color */
    color: white;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%; /* Perfect circle */
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2em;
    transition: background 0.2s;
}

.gallery-cart-btn:hover {
    background: #e63e3e; /* Darker red on hover */
}

        /* Featured Section */
        .featured-section {
            padding: 64px 16px;
            background-color: white;
            overflow: hidden;
        }

        .featured-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .featured-header {
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: space-between;
            margin-bottom: 32px;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .featured-header {
                flex-direction: row;
                align-items: center;
            }
        }

        .featured-title {
            font-size: 24px;
            font-weight: 700;
            color: #131313;
        }

        @media (min-width: 640px) {
            .featured-title {
                font-size: 30px;
            }
        }

        .featured-slider-container {
            position: relative;
        }

        .featured-slider {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            scrollbar-width: none;
            margin: 0 -16px;
            padding: 0 16px 16px;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .featured-slider {
                gap: 24px;
            }
        }

        .featured-slider::-webkit-scrollbar {
            display: none;
        }

        .featured-slide {
            flex-shrink: 0;
            width: 288px;
            cursor: pointer;
        }

        @media (min-width: 640px) {
            .featured-slide {
                width: 320px;
            }
        }

        .featured-image-link {
            display: block;
            position: relative;
            width: 100%;
            height: 450px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
        }

        .featured-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .featured-image-link:hover .featured-image {
            transform: scale(1.05);
        }

        .featured-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.3) 50%, transparent 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .featured-content {
            padding: 20px;
            color: white;
        }

        .featured-badge {
            background: linear-gradient(to right, #8b5cf6, #ec4899);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            margin-bottom: 8px;
        }

        .featured-slide-title {
            font-size: 24px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .featured-price {
            font-size: 14px;
            opacity: 0.9;
        }

        /* Slider Navigation Buttons */
        .slider-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border-radius: 50%;
            padding: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: none;
            align-items: center;
            justify-content: center;
            opacity: 0.5;
        }

        @media (min-width: 640px) {
            .slider-nav-btn {
                display: flex;
            }
        }

        .slider-nav-btn:hover {
            opacity: 1;
            background-color: #f3f4f6;
        }

        .slider-prev {
            left: 0;
        }

        .slider-next {
            right: 0;
        }

        .slider-nav-btn i {
            color: #374151;
            font-size: 16px;
        }

        /* Premium Access Section */
        .premium-access {
            padding: 64px 16px;
            background-color: #f9fafb;
        }

        .premium-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 48px;
            align-items: center;
        }

        @media (min-width: 768px) {
            .premium-container {
                grid-template-columns: 1fr 1fr;
                gap: 48px;
            }
        }

        .premium-content h2 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 24px;
        }

        @media (min-width: 640px) {
            .premium-content h2 {
                font-size: 48px;
            }
        }

        .premium-content h2 span {
            display: block;
        }

        .premium-content p {
            color: #6b7280;
            margin-bottom: 24px;
            font-size: 16px;
        }

        .btn-get-started {
            display: inline-block;
            padding: 12px 24px;
            background-color: #ef4444;
            color: white;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .btn-get-started:hover {
            background-color: #dc2626;
        }

        .premium-features {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }

        @media (min-width: 640px) {
            .premium-features {
                grid-template-columns: 1fr 1fr;
            }
        }

        .premium-feature {
            text-align: center;
        }

        .feature-icon {
    background: transparent;
    border-radius: 12px;
    width: 100%;
    height: 160px;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Added to ensure images don't overflow */
}

.feature-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 12px;
}

/* Remove the blue gradient class since we're using images */
.feature-icon.blue {
    background: transparent;
}

.feature-icon i {
    display: none; /* Hide the icons since we're using images */
}

        .feature-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .feature-description {
            font-size: 12px;
            color: #6b7280;
        }

        /* Footer */
        .footer {
            background-color: #000;
            color: #9ca3af;
            padding: 48px 16px 24px;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .footer-notice {
            text-align: center;
            font-size: 14px;
            color: #9ca3af;
            margin-bottom: 40px;
            padding-bottom: 24px;
            border-bottom: 1px solid #374151;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
            margin-bottom: 40px;
        }

        @media (min-width: 640px) {
            .footer-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width: 768px) {
            .footer-grid {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        .footer-logo-col {
            grid-column: span 2;
        }

        .footer-logo {
            height: 32px;
            filter: invert(1);
            margin-bottom: 24px;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #374151;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #000;
            color: white;
            cursor: pointer;
            width: fit-content;
        }

        .footer-col h4 {
            color: white;
            font-weight: 700;
            margin-bottom: 12px;
            font-size: 16px;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 8px;
        }

        .footer-col ul li a {
            color: #9ca3af;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-col ul li a:hover {
            color: white;
            text-decoration: underline;
        }

        .footer-bottom {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding-top: 24px;
            border-top: 1px solid #374151;
            font-size: 12px;
            color: #6b7280;
        }

        @media (min-width: 768px) {
            .footer-bottom {
                flex-direction: row;
            }
        }

        .social-icons {
            display: flex;
            gap: 16px;
            margin: 16px 0;
        }

        @media (min-width: 768px) {
            .social-icons {
                margin: 0;
            }
        }

        .social-icons i {
            font-size: 18px;
            color: #9ca3af;
            cursor: pointer;
            transition: color 0.3s;
        }

        .social-icons i:hover {
            color: white;
        }

        @media (max-width: 768px) {
            .promo-content-wrapper {
                flex-direction: column;
                gap: 10px;
            }

            .new-hero-section {
                min-height: 500px;
                padding: 60px 20px;
            }

            .hero-title {
                font-size: 1.75rem;
            }

            .search-container {
                gap: 0.5rem;
            }

            .search-dropdown-btn,
            .search-by-image-btn {
                padding: 0.625rem 1rem;
            }
            
        }
    </style>
</head>
<body>

    <div class="promo-bar">
        <div class="container">
            <div class="promo-content-wrapper">
                <div class="promo-text">Get 10 royalty-free image downloads each month with a cost-saving subscription. </div>
                <a href="#" class="btn-signup-promo">Sign up now</a>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="header-container">
            <!-- Left side - Mobile Menu Only -->
            <div class="nav-left">
                <!-- Mobile Menu Button -->
                <div class="mobile-menu-btn">
                    <button id="mobileMenuBtn" class="menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <div class="logo-container">
                <a href="index.php" class="logo-link">
                    <img src="assets/images/speciallogo.png" alt="Special Stocks" class="navbar-logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <h1 class="logo-text" style="display: none;">Special Stocks</h1>
                </a>
            </div>

            <!-- Right side - Pricing, Icons and Login Button -->
            <div class="nav-right">
                <!-- Pricing Dropdown -->
                <div class="pricing-dropdown">
                    <span class="pricing-text">Pricing</span>
                    <i class="fas fa-chevron-down pricing-chevron"></i>
                </div>
                
                <!-- Icons -->
                <i class="fas fa-globe nav-icon globe"></i>
                <i class="far fa-heart nav-icon heart"></i>
                <a href="https://www.specialstocks.us/cart.php">
                    <i class="fas fa-shopping-cart nav-icon cart"></i>
                </a>
                
                <!-- Login/Dashboard Button -->
                <a href="https://www.specialstocks.us/login.php" class="btn-login">Dashboard</a>
            </div>
        </div>
        
        <!-- Navigation Links -->
        <ul class="nav-links">
            <li><a href="#">Images <i class="fas fa-chevron-down"></i></a></li>
            <li><a href="#">Video <i class="fas fa-chevron-down"></i></a></li>
            <li><a href="#">Music <i class="fas fa-chevron-down"></i></a></li>
            <li><a href="#">Exclusive Images</a></li>
        </ul>
    </header>

    <main>
        <!-- NEW HERO SECTION -->
        <section class="new-hero-section" role="banner" aria-label="Hero Section">
            <div class="hero-content">
                <h1 class="hero-title">One library, millions of ways to tell your story</h1>
                
                <div class="hero-categories">
                    <div class="hero-category-item">
                        <i class="far fa-image"></i>
                        <span>Images</span>
                    </div>
                    <div class="hero-category-item">
                        <i class="fa fa-video"></i>
                        <span>Video</span>
                    </div>
                    <div class="hero-category-item">
                        <i class="far fa-newspaper"></i>
                        <span>Editorial</span>
                    </div>
                    <div class="hero-category-item">
                        <i class="fas fa-music"></i>
                        <span>Music</span>
                    </div>
                    <div class="hero-category-item">
                        <i class="fa fa-volume-up"></i>
                        <span>Sound effects</span>
                    </div>
                    <div class="hero-category-item">
                        <i class="far fa-file-alt"></i>
                        <span>Templates</span>
                    </div>
                    <div class="hero-category-item">
                        <i class="fa fa-robot"></i>
                        <span>AI generator</span>
                    </div>
                </div>
                
                <div class="search-container">
                    <div class="search-dropdown">
                        <button type="button" id="dropdownToggle" class="search-dropdown-btn">
                            <i class="far fa-image"></i>
                            <span id="dropdownLabel">All images</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="dropdownMenu" class="search-dropdown-menu">
                            <a href="https://www.specialstocks.us/index.php" class="search-dropdown-item">
                                <i class="far fa-image"></i>
                                All images
                            </a>
                            <a href="https://www.specialstocks.us/video.php" class="search-dropdown-item">
                                <i class="fas fa-video"></i>
                                Video
                            </a>
                            <a href="https://www.specialstocks.us/search.php" class="search-dropdown-item">
                                <i class="fas fa-music"></i>
                                Music
                            </a>
                        </div>
                    </div>
                    
                    <form action="https://www.specialstocks.us/search.php" method="GET" class="search-form" role="search" aria-label="Search stock media">
                        <label for="search-input" class="sr-only">Search for stock photos, videos, and assets</label>
                        <input type="text" id="search-input" name="q" placeholder="Start your next project" aria-label="Search for stock photos, videos, and creative assets" class="search-input">
                        <button type="submit" class="search-submit" aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    
                    <a href="https://www.specialstocks.us/search.php" class="search-by-image-btn">
                        <i class="fas fa-camera"></i>
                        <span class="search-by-image-text">Search by image</span>
                        <span class="search-by-image-text-mobile">Image search</span>
                    </a>
                </div>
                
                <div class="trending-topics">
                    <span class="mr-2">Trending:</span>
                    <span class="trending-topic mr-2">dogs,</span>
                    <span class="trending-topic mr-2">happy anniversary,</span>
                    <span class="trending-topic mr-2">apple clipart,</span>
                    <span class="trending-topic mr-2">emoji,</span>
                    <span class="trending-topic mr-2">brain clipart,</span>
                    <span class="trending-topic">love</span>
                </div>
            </div>
            
            <div class="photo-credit">
                <i class="far fa-image"></i>
                <span class="photo-credit-text">The night sky filled with...</span>
                <span class="photo-credit-text-mobile">Night sky...</span>
                <span class="text-xs">Photo by Craig Taylor Photography</span>
            </div>
            
            <div class="geometric-shapes">
                <svg viewBox="0 0 100 100" class="w-full h-full">
                    <polygon points="50,10 30,90 70,90" fill="black" opacity="0.6"></polygon>
                    <polygon points="25,15 10,90 40,90" fill="black" opacity="0.4"></polygon>
                    <polygon points="75,20 60,90 90,90" fill="black" opacity="0.5"></polygon>
                </svg>
            </div>
        </section>
        
        <!-- New Stories Section (Replaces Collection Section) -->
        <section class="stories-section">
            <div class="stories-container">
                <h2 class="stories-title">Your stories aren't one-dimensional, neither is our content library</h2>
                <div class="stories-grid">
                    <a href="https://www.specialstocks.us/images.php" class="stories-item">
                        <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?w=400" alt="Images" class="stories-image">
                        <p class="stories-label">Images</p>
                    </a>
                    <a href="https://www.specialstocks.us/video.php" class="stories-item">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400" alt="Video" class="stories-image">
                        <p class="stories-label">Video</p>
                    </a>
                    <a href="https://www.specialstocks.us/music.php" class="stories-item">
                        <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=400" alt="Music" class="stories-image">
                        <p class="stories-label">Music</p>
                    </a>
                    <a href="https://www.specialstocks.us/sound-effects.php" class="stories-item">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400" alt="Sound Effects" class="stories-image">
                        <p class="stories-label">Sound Effects</p>
                    </a>

                </div>
            </div>
        </section>
               
        <section class="browse-section">
    <div class="browse-container">
        <h3 class="browse-title">Explore popular and handpicked visuals</h3>
        
        <div class="category-tabs">
            <a href="?category=featured-banners&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Autumn</span>
            </a>
            <a href="?category=system-graphics&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Business</span>
            </a>
            <a href="?category=logo-variations&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Fitness</span>
            </a>
            <a href="?category=marketing-materials&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Portrait</span>
            </a>
            <a href="?category=logo-variations&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Aerial</span>
            </a>
            <a href="?category=marketing-materials&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Cityscape</span>
            </a>
            <a href="?category=logo-variations&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Dance</span>
            </a>
            <a href="?category=marketing-materials&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Technology</span>
            </a>
            <a href="?category=marketing-materials&sort=popular" class="category-tab">
                <i class="fas fa-search search-icon"></i>
                <span>Forest</span>
            </a>
        </div>
        
        <div class="sort-tabs">
            <a href="?category=all&sort=featured" class="sort-tab active">
            Handpicked content
            </a>
            <a href="?category=all&sort=popular" class="sort-tab">
                Most Popular
            </a>
        </div>
        
        <div class="relative group cursor-pointer gallery-item rounded-lg overflow-hidden bg-white shadow-md" 
    onclick="...">
    <div class="bg-gray-100 relative overflow-hidden">
        <img src="assets/images/dog-01.jpeg" alt="Dog Image" class="w-full h-72 object-cover">
        <div class="gallery-hover-overlay">
            <div class="gallery-hover-top">
                <div class="gallery-hover-title">A realistic German Shepherd dog on a clean white background,</div>
            </div>
            <div class="gallery-hover-bottom">
                <button class="gallery-save-btn" onclick="event.stopPropagation();">
                    <i class="far fa-heart"></i>
                    <span>Save</span>
                </button>
                <button class="gallery-cart-btn" onclick="event.stopPropagation();">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>
    </div>
</div>
        <div class="see-more-container">
            <a href="search.php?type=exclusive_images" class="btn-see-more">
                See More Exclusive Images
            </a>
        </div>
    </div>
</section>
         
        <!-- Featured Section -->
        <section class="featured-section">
            <div class="featured-container">
                <div class="featured-header">
                    <h2 class="featured-title">Featured exclusive images</h2>
                </div>
                <div class="featured-slider-container">
                    <div id="featured-slider" class="featured-slider">
                        <!-- Featured Slide 1 -->
                        <div class="featured-slide" onclick="window.location.href='exclusive_image_details.php?id=6'">
                            <a href="exclusive_image_details.php?id=6" class="featured-image-link">
                                <img src="assets/images/dog-13.png" alt="A Joyful German Shepherd" class="featured-image">
                                <div class="featured-overlay">
                                    <div class="featured-content">
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <!-- Featured Slide 2 -->
                        <div class="featured-slide" onclick="window.location.href='exclusive_image_details.php?id=4'">
                            <a href="exclusive_image_details.php?id=4" class="featured-image-link">
                                <img src="assets/images/food.png" alt="German Shepherd in a field" class="featured-image">
                                <div class="featured-overlay">
                                    <div class="featured-content">
                                     
                                          
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Slider Navigation Buttons -->
                    <button id="slider-prev" class="slider-nav-btn slider-prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="slider-next" class="slider-nav-btn slider-next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>


        <section class="py-12 bg-gray-50 text-center trusted-companies-section">
                <span class="text-gray-700 mb-8 block" style="font-size: 20px; font-weight: bold;">Trusted by the world's largest companies</span>
    
    <div class="logo-company-slider">
        <div class="logo-company-track">
            <a href="https://www.digitustec.com.au/" target="_blank">
                <img src="assets/images/Digitus.png" alt="Digitus Logo" class="logo-company-slide">
            </a>
            <a href="https://thecyol.com/" target="_blank">
                <img src="assets/images/CYOL.png" alt="CYOL Logo" class="logo-company-slide">
            </a>
            <a href="https://www.jadetimes.com/" target="_blank">
                <img src="assets/images/Jadetimes.png" alt="Jadetimes Logo" class="logo-company-slide">
            </a>
            <a href="https://www.nyfilms.com" target="_blank">
                <img src="assets/images/NYFIlms.png" alt="NY Films Logo" class="logo-company-slide">
            </a>
            <a href="https://www.jadetimesuniversity.com/" target="_blank">
                <img src="assets/images/JadetimesLogo.png" alt="Jadetimes Logo" class="logo-company-slide">
            </a>
            <a href="https://www.specialbrands.us" target="_blank">
                <img src="assets/images/SpecialBrands.png" alt="Special Brands Logo" class="logo-company-slide">
            </a>
            <a href="https://www.specialprinters.us/" target="_blank">
                <img src="assets/images/SpecialPrinters.png" alt="Special Printers Logo" class="logo-company-slide">
            </a>
            <a href="https://www.mysticcompasscoach.com/" target="_blank">
                <img src="assets/images/Mistic.png" alt="Mistic Logo" class="logo-company-slide">
            </a>
            <a href="https://www.specialgraphics.us" target="_blank">
                <img src="assets/images/SpecialGraphgics .png" alt="Special Graphics Logo" class="logo-company-slide">
            </a>
            <a href="https://www.digitustec.com.au/" target="_blank">
                <img src="assets/images/Digitus.png" alt="Digitus Logo" class="logo-company-slide">
            </a>
            <a href="https://thecyol.com/" target="_blank">
                <img src="assets/images/CYOL.png" alt="CYOL Logo" class="logo-company-slide">
            </a>
            <a href="https://www.jadetimes.com/" target="_blank">
                <img src="assets/images/Jadetimes.png" alt="Jadetimes Logo" class="logo-company-slide">
            </a>
            <a href="https://www.nyfilms.com" target="_blank">
                <img src="assets/images/NYFIlms.png" alt="NY Films Logo" class="logo-company-slide">
            </a>
            <a href="https://www.jadetimesuniversity.com/" target="_blank">
                <img src="assets/images/JadetimesLogo.png" alt="Jadetimes Logo" class="logo-company-slide">
            </a>
            <a href="https://www.specialbrands.us" target="_blank">
                <img src="assets/images/SpecialBrands.png" alt="Special Brands Logo" class="logo-company-slide">
            </a>
            <a href="https://www.specialprinters.us/" target="_blank">
                <img src="assets/images/specialPrinters.png" alt="Special Printers Logo" class="logo-company-slide">
            </a>
            <a href="https://www.mysticcompasscoach.com/" target="_blank">
                <img src="assets/images/Mistic.png" alt="Mistic Logo" class="logo-company-slide">
            </a>
            <a href="https://www.specialgraphics.us" target="_blank">
                <img src="assets/images/SpecialGraphgics .png" alt="Special Graphics Logo" class="logo-company-slide">
            </a>
        </div>
    </div>
    
    <p class="text-gray-700 mt-8 mb-4 text-lg">Need a personalized package for your business?</p>
    <a href="https://www.specialstocks.us/register.php" class="inline-block px-12 py-3 bg-red-500 text-white rounded-full hover:bg-red-600">Request a Quote</a>
</section>


 <section class="creative-guidance-section">
        <h2>Creative and Marketing Guidance</h2>

        <div class="main-feature-card">
            <img src="assets/images/bridge.jpeg" alt="Golden Gate Bridge">
            <div class="main-feature-content">
                <h3>In The Wild: TurboSquid x House of Kardashian</h3>
                <p>TurboSquid is the world's premier 3D design resource. In the first installment of Shutterstock's digital series in **The Wild**, watch global creative studio Coffee & TV use TurboSquid's premium 3D models to craft **House of Kardashian's** opening sequence.</p>
            </div>
        </div>

    <div class="sub-features-container">
        
        <div class="sub-feature-card">
            <img src="assets/images/bridge.jpeg" alt="Golden Gate Bridge">
            <h4>Shutterstock Pricing Plans, Demystified</h4>
            <p>Elevate your creative projects by blending stock images, audio, and video using flexible Shutterstock pricing plans. Let’s help you find your best stock media.</p>
        </div>

        <div class="sub-feature-card">
            <img src="assets/images/AI.jpeg" alt="AI Robot, Pepper">
            <h4>Introducing Indemnification for AI-Generated Images</h4>
            <p>Shutterstock is the first to provide financial protections against legal liabilities, ensuring Enterprise customers can confidently license AI images for commercial projects.</p>
        </div>

        <div class="sub-feature-card">
            <img src="assets/images/mount.jpeg" alt="Mountains with clouds at sunset">
            <h4>What is a Color Scheme? Definitions and Examples</h4>
            <p>Learn what a color scheme is, explore key types like Complementary and Triadic, and discover how to apply them effectively in your next design project.</p>
        </div>

    </div>
    
    <div class="button-container">
        <a href="#" class="visit-blog-button">Visit our blog</a>
    </div>

</section>  
        
     <!-- Premium Access Section -->
<section class="premium-access">
    <div class="premium-container">
        <div class="premium-content">
            <h2>
                <span>Access premium</span>
                <span>exclusive content</span>
            </h2>
            <p>Sign up and get a free image or photo every week</p>
            <a href="register.php" class="btn-get-started">Get Started</a>
        </div>
        <div class="premium-features">
            <div class="premium-feature">
                <div class="feature-icon">
                    <img src="assets/images/girl-01.jpeg" alt="Exclusive premium graphics" class="feature-image">
                </div>
                <p class="feature-title">Exclusive premium graphics</p>
                <p class="feature-description">High-quality system images</p>
            </div>
            <div class="premium-feature">
                <div class="feature-icon">
                    <img src="assets/images/girl-01.jpeg" alt="Featured collections" class="feature-image">
                </div>
                <p class="feature-title">Featured collections</p>
                <p class="feature-description">Curated by our team</p>
            </div>
        </div>
    </div>
</section>
    </main>

    <footer class="footer">
    <div class="footer-container">
        <p class="footer-notice">Access exclusive premium content available only to registered users.</p>
        <div class="footer-grid">
            <div class="footer-logo-col">
                <div class="footer-logo-container">
                    <img src="assets/images/speciallogo.png" alt="Stock Media" class="footer-logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <h1 style="display: none;">Stock Media</h1>
                </div>
                <button class="language-selector">
                    <i class="fas fa-globe"></i>
                    English
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
            <div class="footer-col">
                <h4>Our company</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press/media</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Products</h4>
                <ul>
                    <li><a href="images.php">Images</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Exclusive Images</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Legal</h4>
                <ul>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Cookie preferences</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact us</h4>
                <ul>
                    <li><a href="#">Help center</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Stock Media Platform. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/Specialstocks" target="_blank"><i class="fab fa-facebook"></i></a>
                
                <a href="https://www.instagram.com/special_stocks/" target="_blank"><i class="fab fa-instagram"></i></a>
                
                <a href="https://www.linkedin.com/company/109615206" target="_blank"><i class="fab fa-linkedin"></i></a>
                
                <a href="https://www.youtube.com/@SpecialStocks" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // New Hero Section Dropdown
            const dropdownToggle = document.getElementById('dropdownToggle');
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownLabel = document.getElementById('dropdownLabel');
            
            if (dropdownToggle && dropdownMenu) {
                dropdownToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
                });
                
                // Close dropdown when clicking on links
                dropdownMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', function() {
                        dropdownLabel.textContent = this.textContent.trim();
                        dropdownMenu.style.display = 'none';
                    });
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                        dropdownMenu.style.display = 'none';
                    }
                });
            }
            
            // Make trending terms clickable
            document.querySelectorAll('.trending-topic').forEach(term => {
                term.addEventListener('click', function() {
                    const searchInput = document.getElementById('search-input');
                    if (searchInput) {
                        searchInput.value = this.textContent.replace(',', '').trim();
                        searchInput.focus();
                    }
                });
            });

            // Category tabs functionality
            const categoryTabs = document.querySelectorAll('.category-tab');
            categoryTabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    // Remove active class from all tabs
                    categoryTabs.forEach(t => t.classList.remove('active'));
                    // Add active class to clicked tab
                    this.classList.add('active');
                });
            });

            // Sort tabs functionality
            const sortTabs = document.querySelectorAll('.sort-tab');
            sortTabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    // Remove active class from all tabs
                    sortTabs.forEach(t => t.classList.remove('active'));
                    // Add active class to clicked tab
                    this.classList.add('active');
                });
            });


            // Slider navigation functionality
            const slider = document.getElementById('featured-slider');
            const prevBtn = document.getElementById('slider-prev');
            const nextBtn = document.getElementById('slider-next');
            
            if (slider && prevBtn && nextBtn) {
                const slideWidth = 320; // Width of each slide including gap
                const gap = 24; // Gap between slides
                
                
                prevBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: -(slideWidth + gap),
                        behavior: 'smooth'
                    });
                });
                
                nextBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: slideWidth + gap,
                        behavior: 'smooth'
                    });
                });
                
                // Hide/show buttons based on scroll position
                slider.addEventListener('scroll', function() {
                    const isAtStart = slider.scrollLeft <= 0;
                    const isAtEnd = slider.scrollLeft + slider.clientWidth >= slider.scrollWidth;
                    
                    prevBtn.style.opacity = isAtStart ? '0.3' : '0.5';
                    nextBtn.style.opacity = isAtEnd ? '0.3' : '0.5';
                    
                    prevBtn.disabled = isAtStart;
                    nextBtn.disabled = isAtEnd;
                });

                
                // Initialize button states
                slider.dispatchEvent(new Event('scroll'));
            }
        });
    </script>
    
</body>
</html>