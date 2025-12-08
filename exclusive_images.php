<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Image Collection</title>
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
            margin-top:40px;
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

        
   /* Even Brighter Version */
.hero-section {
    background: 
        linear-gradient(rgba(40, 3, 3, 0.15), rgba(0, 0, 0, 0.1)),
        url('assets/images/background-stock-1.jpg') no-repeat center center,
        radial-gradient(ellipse 120% 100% at 70% 20%, rgba(3, 69, 107, 0.5) 0%, rgba(0, 162, 255, 0.3) 40%, transparent 70%),
        radial-gradient(ellipse 100% 120% at 20% 60%, rgba(255, 140, 0, 0.4) 0%, rgba(255, 165, 0, 0.3) 30%, transparent 65%),
        radial-gradient(ellipse 150% 100% at 50% 80%, rgba(255, 200, 0, 0.4) 0%, rgba(255, 220, 100, 0.25) 35%, transparent 70%),
        linear-gradient(135deg, 
            rgba(0, 162, 255, 0.15) 0%, 
            rgba(15, 200, 255, 0.1) 25%,
            rgba(255, 140, 0, 0.2) 50%,
            rgba(255, 200, 0, 0.25) 75%,
            rgba(0, 0, 0, 0.1) 100%),
        radial-gradient(circle at 30% 40%, rgba(138, 43, 226, 0.1) 0%, transparent 50%);
    background-size: cover;
    background-position: center;
    background-blend-mode: overlay, normal, screen, screen, overlay, color-dodge;
    color: white;
    padding: 100px 0 120px;
    text-align: center;
    position: relative;
    overflow: hidden;
    width: 100%;
}


        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(ellipse 80% 60% at 75% 25%, rgba(0, 162, 255, 0.4) 0%, transparent 50%),
                radial-gradient(ellipse 60% 80% at 25% 70%, rgba(255, 140, 0, 0.5) 0%, transparent 55%),
                radial-gradient(ellipse 70% 90% at 55% 85%, rgba(255, 200, 0, 0.4) 0%, transparent 60%);
            z-index: 0;
            opacity: 0.8;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                repeating-linear-gradient(45deg, 
                    transparent 0px,
                    transparent 2px,
                    rgba(0, 162, 255, 0.1) 2px,
                    rgba(0, 162, 255, 0.1) 4px),
                repeating-linear-gradient(-45deg, 
                    transparent 0px,
                    transparent 2px,
                    rgba(255, 140, 0, 0.1) 2px,
                    rgba(255, 140, 0, 0.1) 4px);
            z-index: 0;
            opacity: 0.3;
        }

        .hero-section .container {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 48px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            text-align: center;
            line-height: 1.2;
        }

        .hero-section p {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            font-weight: 400;
            color: white;
            max-width: 700px;
            margin: 0 auto 40px;
            text-align: center;
            line-height: 1.6;
        }

        .search-section {
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            padding: 16px 24px;
            border-radius: 1px;
            max-width: 900px;
            margin: 0 auto;
        }

        .search-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: white;
            border-radius: 8px;
            padding: 12px 20px;
        }

        .search-row {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            width: 100%;
            max-width: 100%;
        }

        @media (min-width: 1024px) {
            .search-row {
                flex-direction: row;
            }
        }

        .dropdown-container {
            position: relative;
            width: 100%;
        }

        @media (min-width: 640px) {
            .dropdown-container {
                width: auto;
            }
        }

        .dropdown-toggle {
            width: 100%;
            padding: 12px 16px;
            background: white;
            color: #374151;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            transition: all 0.2s;
        }

        @media (min-width: 640px) {
            .dropdown-toggle {
                width: auto;
                justify-content: flex-start;
            }
        }

        .dropdown-toggle:hover {
            border-color: #9ca3af;
        }

        .dropdown-label {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .crown-icon {
            color: #8b5cf6;
        }

        .dropdown-chevron {
            font-size: 12px;
            margin-left: 4px;
            color: #6b7280;
        }

        .dropdown-menu {
            position: absolute;
            left: 0;
            top: 100%;
            width: 100%;
            background: white;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border-radius: 8px;
            z-index: 10;
            margin-top: 4px;
            display: none;
        }

        @media (min-width: 640px) {
            .dropdown-menu {
                width: 192px;
            }
        }

        .dropdown-item {
            padding: 8px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: #374151;
            transition: background-color 0.2s;
        }

        .dropdown-item:hover {
            background-color: #f3f4f6;
        }

        .search-input-container {
            position: relative;
            flex: 1;
            width: 100%;
        }

        .search-input {
            width: 100%;
            padding: 12px 16px;
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            outline: none;
            color: #1f2937;
        }

        .search-input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 2px rgba(139, 92, 246, 0.2);
        }

        .search-input::placeholder {
            color: #9ca3af;
        }

        .search-button {
            width: 100%;
            background-color: #ef4444;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        @media (min-width: 640px) {
            .search-button {
                width: auto;
            }
        }

        .search-button:hover {
            background-color: #dc2626;
        }

        /* Collection Section */
        .collection-section {
            padding: 40px 16px;
            background-color: white;
        }

        .collection-container {
            max-width: 1152px;
            margin: 0 auto;
        }

        .collection-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 24px;
            color: #131313;
            text-align: center;
        }

        @media (min-width: 640px) {
            .collection-title {
                font-size: 30px;
            }
        }

        .collection-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        @media (min-width: 768px) {
            .collection-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 24px;
            }
        }

        .collection-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px;
            border-radius: 6px;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .collection-item:hover {
            background-color: #f9fafb;
        }

        .collection-icon {
            width: 64px;
            height: 64px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (min-width: 768px) {
            .collection-icon {
                width: 96px;
                height: 96px;
            }
        }

        .collection-icon.purple {
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
        }

        .collection-icon.blue {
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
        }

        .collection-icon.green {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .collection-icon.orange {
            background: linear-gradient(135deg, #f97316, #ef4444);
        }

        .collection-icon i {
            color: white;
            font-size: 24px;
        }

        .collection-label {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
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
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
            border-radius: 12px;
            width: 100%;
            height: 160px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-icon.blue {
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
        }

        .feature-icon i {
            color: white;
            font-size: 48px;
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

            .hero-section {
                padding: 60px 0 80px;
            }

            .hero-section h1 {
                font-size: 32px;
            }

            .hero-section p {
                font-size: 16px;
            }

            .search-section {
                padding: 16px 24px;
            }
            
            .search-form {
                padding: 12px;
            }
        }
    </style>
</head>
<body>

    <div class="promo-bar">
        <div class="container">
            <div class="promo-content-wrapper">
                
                <div class="promo-text">Access our exclusive premium image collection with your account.</div>
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
   
    <img src="assets/images/speciallogo.png" alt="Stock Media" class="footer-logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
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
                <a href="https://www.specialstocks.us/login.php" class="btn-login">Log in</a>
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
        
        <section class="hero-section">
            
            <div class="container">

                <h1>Premium Exclusive Images</h1>
                <p>Access our curated collection of exclusive, high-quality system graphics and marketing materials.</p>
                
                <div class="search-section">
                    <form method="GET" action="search.php" class="search-form">
                        <div class="search-row">
                            <div class="dropdown-container">
                                <button type="button" id="dropdownToggle" class="dropdown-toggle">
                                    <div class="dropdown-label">
                                        <i class="fas fa-crown crown-icon"></i>
                                        <span id="dropdownLabel">Exclusive images</span>
                                    </div>
                                    <i class="fas fa-chevron-down dropdown-chevron"></i>
                                </button>
                                <input type="hidden" name="type" id="searchType" value="exclusive_images">
                                <div id="dropdownMenu" class="dropdown-menu">
                                    <div class="dropdown-item" data-value="exclusive_images" data-label="Exclusive images">
                                        <i class="fas fa-crown crown-icon"></i>
                                        Exclusive images
                                    </div>
                                    <div class="dropdown-item" data-value="image" data-label="All images">
                                        <i class="far fa-image"></i>
                                        All images
                                    </div>
                                    <div class="dropdown-item" data-value="video" data-label="Video">
                                        <i class="fas fa-video"></i>
                                        Video
                                    </div>
                                </div>
                            </div>
                            <div class="search-input-container">
                                <input type="text" name="q" placeholder="Search exclusive images..." class="search-input">
                            </div>
                            <button type="submit" class="search-button">
                                <i class="fas fa-search"></i>
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <!-- Collection Section -->
        <section class="collection-section">
            <div class="collection-container">
                <h2 class="collection-title">Explore our exclusive collection</h2>
                <div class="collection-grid">
                    <a href="exclusive_images.php?category=featured-banners" class="collection-item">
                        <div class="collection-icon purple">
                            <i class="fas fa-image"></i>
                        </div>
                        <p class="collection-label">Featured Banners</p>
                    </a>
                    <a href="exclusive_images.php?category=system-graphics" class="collection-item">
                        <div class="collection-icon blue">
                            <i class="fas fa-palette"></i>
                        </div>
                        <p class="collection-label">System Graphics</p>
                    </a>
                    <a href="exclusive_images.php?category=background-images" class="collection-item">
                        <div class="collection-icon green">
                            <i class="fas fa-photo-video"></i>
                        </div>
                        <p class="collection-label">Backgrounds</p>
                    </a>
                    <a href="exclusive_images.php?category=logo-variations" class="collection-item">
                        <div class="collection-icon orange">
                            <i class="fas fa-crown"></i>
                        </div>
                        <p class="collection-label">Logo Variations</p>
                    </a>
                </div>
            </div>
        </section>
               
        <!-- Browse Section -->
        <section class="browse-section">
            <div class="browse-container">
                <h3 class="browse-title">Browse exclusive content</h3>
                
                <!-- Category Tabs -->
                <div class="category-tabs">
                    <a href="?category=all&sort=popular" class="category-tab active">
                        <i class="fas fa-crown crown-icon"></i>
                        <span>All Exclusive</span>
                    </a>
                    <a href="?category=featured-banners&sort=popular" class="category-tab">
                        <i class="fas fa-search search-icon"></i>
                        <span>Featured banners</span>
                    </a>
                    <a href="?category=system-graphics&sort=popular" class="category-tab">
                        <i class="fas fa-search search-icon"></i>
                        <span>System graphics</span>
                    </a>
                    <a href="?category=background-images&sort=popular" class="category-tab">
                        <i class="fas fa-search search-icon"></i>
                        <span>Background images</span>
                    </a>
                    <a href="?category=logo-variations&sort=popular" class="category-tab">
                        <i class="fas fa-search search-icon"></i>
                        <span>Logo variations</span>
                    </a>
                    <a href="?category=marketing-materials&sort=popular" class="category-tab">
                        <i class="fas fa-search search-icon"></i>
                        <span>Marketing materials</span>
                    </a>
                </div>
                
<!-- Sort Tabs -->
<div class="sort-tabs">
    <a href="?category=all&sort=featured" class="sort-tab active">
        Featured content
    </a>
    <a href="?category=all&sort=popular" class="sort-tab">
        Most Popular
    </a>
</div>
                
                <!-- Image Grid -->
                <div id="imageGrid" class="image-grid">
                    <!-- Dog Image 1 -->
                    <a href="exclusive_image_details.php?id=3" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-01.jpeg" alt="Golden Retriever dog playing with a ball" class="loaded" loading="lazy" data-index="0">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                            <div class="featured-badge">
                                <i class="fas fa-star"></i>
                                FEATURED
                            </div>
                        </div>  
                    </a>
                    
                    <!-- Dog Image 2 -->
                    <a href="exclusive_image_details.php?id=9" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-2.png" alt="Siberian Husky with blue eyes" class="loaded" loading="lazy" data-index="3">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                            <div class="featured-badge">
                                <i class="fas fa-star"></i>
                                FEATURED
                            </div>
                        </div>
                    </a>
                    
                    <!-- Dog Image 3 -->
                    <a href="exclusive_image_details.php?id=4" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-3.jpeg" alt="German Shepherd dog in a field" class="loaded" loading="lazy" data-index="1">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                         </div>
                    </a>
                    
                    <!-- Dog Image 4 -->
                    <a href="exclusive_image_details.php?id=12" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-4.jpeg" alt="Labrador Retriever playing in water" class="loaded" loading="lazy" data-index="5">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                        </div>
                    </a>
                    
                    <!-- Dog Image 5 -->
                    <a href="exclusive_image_details.php?id=10" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-5.jpeg" alt="French Bulldog sitting on a couch" class="loaded" loading="lazy" data-index="6">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                        </div>
                    </a>
                    
                    <!-- Dog Image 6 -->
                    <a href="exclusive_image_details.php?id=8" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-6.jpeg" alt="Border Collie herding sheep" class="loaded" loading="lazy" data-index="7">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                        </div>
                    </a>
                    
                    <!-- Dog Image 7 -->
                    <a href="exclusive_image_details.php?id=11" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-7.jpeg" alt="Poodle with stylish haircut" class="loaded" loading="lazy" data-index="8">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                        </div>
                    </a>
                    
                    <!-- Dog Image 8 -->
                    <a href="exclusive_image_details.php?id=13" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-8.jpeg" alt="Beagle sniffing the ground" class="loaded" loading="lazy" data-index="9">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                        </div>
                    </a>
                    
                    <!-- Dog Image 9 -->
                    <a href="exclusive_image_details.php?id=14" class="image-container group">
                        <div class="skeleton-loader"></div>
                        <img src="assets/images/dog-9.jpeg" alt="Dachshund running in the park" class="loaded" loading="lazy" data-index="10">
                        <div class="image-overlay">
                            <div class="exclusive-badge">
                                <i class="fas fa-crown"></i>
                                EXCLUSIVE
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- See More Button -->
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
                                <img src="assets/images/dog-01.jpeg" alt="A Joyful German Shepherd" class="featured-image">
                                <div class="featured-overlay">
                                    <div class="featured-content">
                                        <div class="featured-badge">
                                            <i class="fas fa-crown"></i>
                                            EXCLUSIVE
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <!-- Featured Slide 2 -->
                        <div class="featured-slide" onclick="window.location.href='exclusive_image_details.php?id=4'">
                            <a href="exclusive_image_details.php?id=4" class="featured-image-link">
                                <img src="assets/images/dog-3.jpeg" alt="German Shepherd in a field" class="featured-image">
                                <div class="featured-overlay">
                                    <div class="featured-content">
                                        <div class="featured-badge">
                                            <i class="fas fa-crown"></i>
                                            EXCLUSIVE
                                        </div>
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
        
        <!-- Premium Access Section -->
        <section class="premium-access">
            <div class="premium-container">
                <div class="premium-content">
                    <h2>
                        <span>Access premium</span>
                        <span>exclusive content</span>
                    </h2>
                    <p>Sign up to access our full collection of exclusive, high-quality images</p>
                    <a href="register.php" class="btn-get-started">Get Started</a>
                </div>
                <div class="premium-features">
                    <div class="premium-feature">
                        <div class="feature-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <p class="feature-title">Exclusive premium graphics</p>
                        <p class="feature-description">High-quality system images</p>
                    </div>
                    <div class="premium-feature">
                        <div class="feature-icon blue">
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="feature-title">Featured collections</p>
                        <p class="feature-description">Curated by our team</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
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
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownToggle = document.getElementById('dropdownToggle');
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownLabel = document.getElementById('dropdownLabel');
            const searchType = document.getElementById('searchType');
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            
            // Toggle dropdown menu
            dropdownToggle.addEventListener('click', function() {
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });
            
            // Handle dropdown item selection
            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    const label = this.getAttribute('data-label');
                    
                    searchType.value = value;
                    dropdownLabel.textContent = label;
                    dropdownMenu.style.display = 'none';
                    
                    // Update placeholder based on selection
                    const searchInput = document.querySelector('.search-input');
                    if (value === 'exclusive_images') {
                        searchInput.placeholder = 'Search exclusive images...';
                    } else if (value === 'image') {
                        searchInput.placeholder = 'Search all images...';
                    } else if (value === 'video') {
                        searchInput.placeholder = 'Search videos...';
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