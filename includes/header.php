<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle ?? "Shyam Interiors — Transform Your Space"; ?></title>
    <meta name="author" content="Shyam Interiors">
    <meta property="og:title" content="<?php echo $pageTitle ?? "Shyam Interiors — Premium Interior Design Studio"; ?>">
    <meta property="og:description" content="<?php echo $pageDescription ?? "Modern, luxurious residential and commercial interior design."; ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="<?php echo $pageDescription ?? "Award-winning interior design studio crafting timeless residential and commercial spaces."; ?>">
    <meta property="og:image" content="<?php echo $pageImage ?? "/assets/images/hero-bg.jpg"; ?>">
    <meta name="twitter:image" content="<?php echo $pageImage ?? "/assets/images/hero-bg.jpg"; ?>">

    <link href="/assets/css/style.css" rel="stylesheet">
    <script src="/assets/js/menu.js" defer></script>
</head>

<body>
    <div class="min-h-screen bg-background">
        <header class="fixed inset-x-0 top-0 z-50 transition-all duration-300 bg-background/85 backdrop-blur-md border-b border-border">
            <nav class="container-wide flex h-20 items-center justify-between">
                <a class="flex items-center gap-2 group active" href="/">
                    <img src="/assets/images/main-logo.svg" alt="Shyam Interiors" class="h-10 w-auto">
                </a>
                <ul class="hidden lg:flex items-center gap-8">
                    <li>
                        <a href="/" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">About</a>
                    </li>
                    <li>
                        <a href="/services" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Services</a>
                    </li>
                    <li>
                        <a href="/portfolio" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Portfolio</a>
                    </li>
                    <li>
                        <a href="/contact" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Contact</a>
                    </li>
                </ul>
                <a href="/contact" class="hidden lg:inline-flex items-center rounded-full bg-primary px-5 py-2.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-card)]">
                    Get a Quote
                </a>
                <!-- Hamburger button -->
                <button id="menu-btn" type="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu" class="lg:hidden p-2 rounded-md text-foreground hover:bg-muted transition cursor-pointer">
                    <!-- Hamburger icon -->
                    <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close icon (hidden by default) -->
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </nav>
            <!-- Mobile menu -->
            <div
                id="mobile-menu"
                class="lg:hidden overflow-hidden bg-background border-t border-border transition-[max-height,opacity] duration-300 max-h-0 opacity-0">
                <ul class="container-wide flex flex-col py-4">
                    <li>
                        <a href="/" class="nav-link block py-3 text-base font-medium text-foreground hover:text-primary transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="nav-link block py-3 text-base font-medium text-foreground hover:text-primary transition-colors">About</a>
                    </li>
                    <li>
                        <a href="/services" class="nav-link block py-3 text-base font-medium text-foreground hover:text-primary transition-colors">Services</a>
                    </li>
                    <li>
                        <a href="/portfolio" class="nav-link block py-3 text-base font-medium text-foreground hover:text-primary transition-colors">Portfolio</a>
                    </li>
                    <li>
                        <a href="/contact" class="nav-link block py-3 text-base font-medium text-foreground hover:text-primary transition-colors">Contact</a>
                    </li>
                    <li class="pt-2">
                        <a href="/contact" class="inline-flex w-full items-center justify-center rounded-full bg-primary px-5 py-3 text-sm font-medium text-primary-foreground">
                            Get a Quote
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <main class="pt-20">