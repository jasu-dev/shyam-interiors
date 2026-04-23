<?php
require_once '../includes/config.php';
require_once '../includes/schema.php';

$activePage = 'home';
$pageTitle = 'ST Interiors | Best Interior Designer in Dommasandra, Bengaluru';
$pageDescription = 'Looking for expert interior designers in Dommasandra, Bengaluru? ST Interiors offers modern, affordable home & office interiors with customized designs. Book a free consultation today!';
$pageImage = '/assets/images/hero-bg.webp';

$schemas = [
    schema_website(),
    schema_webpage([
        'name'        => $pageTitle,
        'description' => $pageDescription,
    ]),
    schema_breadcrumb([
        ['name' => 'Home', 'url' => SITE_URL],
    ]),
];

include '../includes/header.php';
include '../includes/portfolio_data.php';
?>
<!--Hero section-->
<section class="relative flex items-center text-secondary-foreground overflow-hidden md:min-h-[90vh]">
    <img src="/assets/images/hero-bg.webp" alt="Modern luxury living room with floor-to-ceiling windows" class="absolute inset-0 h-full w-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-secondary/85 via-secondary/65 to-secondary/30"></div>
    <div class="container-wide relative py-20">
        <div class="max-w-2xl fade-in-up">
            <span class="inline-block text-xs font-medium tracking-[0.25em] uppercase text-primary-foreground/90 bg-primary/80 backdrop-blur px-4 py-1.5 rounded-full mb-6">
                Premium Interior Designer
            </span>
            <h1 class="font-display text-3xl sm:text-4xl md:text-5xl lg:text-6xl leading-[1.05] text-secondary-foreground">
                Best Interior Designer in <br>Dommasandra, Bengaluru
            </h1>
            <p class="mt-6 text-base md:text-lg text-secondary-foreground/85 max-w-xl leading-relaxed">
                From luxury modular kitchens to complete home interiors, ST Interiors brings world-class design to Dommasandra and Sarjapur Road.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="/contact.php" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)] hover:-translate-y-0.5">
                    Start Your Project
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
                <a href="/portfolio.php" class="inline-flex items-center gap-2 rounded-full border border-secondary-foreground/30 backdrop-blur bg-secondary-foreground/5 px-7 py-3.5 text-sm font-medium text-secondary-foreground hover:bg-secondary-foreground/15 transition-all">
                    View Portfolio
                </a>
            </div>
        </div>
    </div>
    <!--Stats section -->
    <div class="absolute bottom-0 inset-x-0 hidden md:block">
        <div class="container-wide pb-8">
            <div class="grid grid-cols-3 gap-px bg-secondary-foreground/15 rounded-2xl overflow-hidden backdrop-blur-md border border-secondary-foreground/15">
                <div class="bg-secondary/70 px-6 py-5 text-center">
                    <div class="font-display text-2xl md:text-3xl text-primary">3+</div>
                    <div class="text-xs uppercase tracking-widest text-secondary-foreground/70 mt-1">Years of Craft</div>
                </div>
                <div class="bg-secondary/70 px-6 py-5 text-center">
                    <div class="font-display text-2xl md:text-3xl text-primary">180+</div>
                    <div class="text-xs uppercase tracking-widest text-secondary-foreground/70 mt-1">Projects Delivered</div>
                </div>
                <div class="bg-secondary/70 px-6 py-5 text-center">
                    <div class="font-display text-2xl md:text-3xl text-primary">98%</div>
                    <div class="text-xs uppercase tracking-widest text-secondary-foreground/70 mt-1">Happy Clients</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About section-->
<section class="py-20 md:py-28">
    <div class="container-wide grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <div>
            <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">Who We Are</span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl mt-3 leading-tight">
                A studio devoted to interiors that age beautifully.
            </h2>
            <p class="mt-5 text-muted-foreground leading-relaxed">
                ST Interiors is a multidisciplinary design studio working across residential, commercial, and hospitality projects. We combine architectural rigor with a love for material, light, and craft — designing spaces that feel inevitable.
            </p>
            <a href="/about.php" class="inline-flex items-center gap-2 mt-7 text-sm font-medium text-primary hover:gap-3 transition-all">
                Learn more about us
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <img src="/assets/images/project-dining.jpg" alt="Dining room project" loading="lazy" class="rounded-2xl object-cover h-64 w-full hover-lift">
            <img src="/assets/images/project-bathroom.jpg" alt="Bathroom project" loading="lazy" class="rounded-2xl object-cover h-64 w-full mt-10 hover-lift">
        </div>
    </div>
</section>
<!--Video section-->
<section class="py-20 md:py-28 overflow-hidden">
    <div class="container-wide grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <div class="relative">
            <div class="absolute -inset-4 bg-primary/5 rounded-[2.5rem] -rotate-2"></div>
            <video src="/assets/work-video.mp4" loading="lazy" autoplay loop muted playsinline class="relative rounded-3xl w-full h-[400px] object-cover shadow-2xl hover-lift"></video>
            <div class="absolute -bottom-6 -right-6 h-24 w-24 bg-primary/10 rounded-full blur-2xl"></div>
        </div>
        <div>
            <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">In Motion</span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl mt-3 leading-tight">
                Why Choose ST Interiors in Dommasandra?
            </h2>
            <ul class="mt-6 text-muted-foreground leading-relaxed max-w-lg list-disc ml-4">
                <li>Local expertise in Bengaluru homes</li>
                <li>Affordable pricing</li>
                <li>End-to-end execution</li>
                <li>On-time delivery</li>
            </ul>
            <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                    <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                </svg>
                <span>Get a Quote</span>
            </a>
        </div>
    </div>
</section>
<!--Services section-->
<section class="py-20 md:py-28 bg-muted/40">
    <div class="container-wide">
        <div class="max-w-2xl mx-auto text-center">
            <span class="inline-block text-xs font-medium tracking-[0.2em] uppercase text-primary mb-3">
                What We Do
            </span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl text-foreground leading-tight">
                Interior Design Services in Dommasandra, Bengaluru
            </h2>
            <p class="mt-4 text-base md:text-lg text-muted-foreground leading-relaxed">
                We offer complete home and commercial interior design solutions tailored to modern lifestyles in Dommasandra and nearby areas.
            </p>
        </div>
        <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="grid h-12 w-12 place-items-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sofa h-6 w-6" aria-hidden="true">
                        <path d="M20 9V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v3"></path>
                        <path d="M2 16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z"></path>
                        <path d="M4 18v2"></path>
                        <path d="M20 18v2"></path>
                        <path d="M12 4v9"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-display text-xl">
                    Residential Design
                </h3>
                <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                    Homes that feel like you — warm, functional, and beautifully composed.
                </p>
            </div>
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="grid h-12 w-12 place-items-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 h-6 w-6" aria-hidden="true">
                        <path d="M10 12h4"></path>
                        <path d="M10 8h4"></path>
                        <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                        <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
                        <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-display text-xl">
                    Commercial Spaces
                </h3>
                <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                    Workplaces and retail environments designed to inspire and perform.
                </p>
            </div>
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="grid h-12 w-12 place-items-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hammer h-6 w-6" aria-hidden="true">
                        <path d="m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9"></path>
                        <path d="m18 15 4-4"></path>
                        <path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-display text-xl">
                    Renovation
                </h3>
                <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                    Thoughtful transformations that breathe new life into existing spaces.
                </p>
            </div>
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="grid h-12 w-12 place-items-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ruler h-6 w-6" aria-hidden="true">
                        <path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"></path>
                        <path d="m14.5 12.5 2-2"></path>
                        <path d="m11.5 9.5 2-2"></path>
                        <path d="m8.5 6.5 2-2"></path>
                        <path d="m17.5 15.5 2-2"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-display text-xl">
                    Space Planning
                </h3>
                <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                    Layouts that maximize light, flow, and everyday usability.
                </p>
            </div>
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="grid h-12 w-12 place-items-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb h-6 w-6" aria-hidden="true">
                        <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
                        <path d="M9 18h6"></path>
                        <path d="M10 22h4"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-display text-xl">
                    Lighting Design
                </h3>
                <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                    Layered lighting that shapes mood, comfort, and architectural drama.
                </p>
            </div>
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="grid h-12 w-12 place-items-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-6 w-6" aria-hidden="true">
                        <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path>
                        <path d="M20 2v4"></path>
                        <path d="M22 4h-4"></path>
                        <circle cx="4" cy="20" r="2"></circle>
                    </svg>
                </div>
                <h3 class="mt-5 font-display text-xl">
                    Styling & Decor
                </h3>
                <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                    The finishing touches — textures, art, and objects that complete the story.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section -->
<section class="py-16 md:py-20 bg-primary text-primary-foreground relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor">
            <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
        </svg>
    </div>
    <div class="container-wide relative">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
            <div class="max-w-2xl text-center lg:text-left">
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl leading-tight">
                    Ready to Transform Your Space in Dommasandra?
                </h2>
                <p class="mt-4 text-primary-foreground/90 text-lg md:text-xl">
                    Get a expert consultation from Bengaluru's leading interior design team. We're just a call away.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-5 items-center">
                <a href="tel:+916377170420" class="inline-flex items-center gap-3 rounded-full bg-white px-8 py-4 text-base md:text-lg font-bold text-primary hover:bg-white/95 transition-all hover:scale-105 shadow-2xl group">
                    <div class="grid h-10 w-10 place-items-center rounded-full bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <span>Call Now: +91 6377170420</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!--Projects section-->
<section class="py-20 md:py-28">
    <div class="container-wide">
        <div class="max-w-2xl mx-auto text-center mb-14">
            <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">
                Featured Work
            </span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl text-foreground leading-tight">
                Our Interior Design Projects in Dommasandra & Bengaluru
            </h2>
            <p class="mt-4 text-base md:text-lg text-muted-foreground leading-relaxed">
                Explore our completed home interiors near Sarjapur Road, Whitefield, and Electronic City.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php
            $featured_items = array_slice($portfolio_items, 0, 6);
            foreach ($featured_items as $item):
            ?>
                <figure class="group relative overflow-hidden rounded-2xl">
                    <a href="/portfolio">
                        <img src="/assets/images/portfolio/<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </a>
                </figure>
            <?php endforeach; ?>
        </div>
        <div class="mt-10 text-center">
            <a href="/portfolio" class="inline-flex items-center gap-2 text-sm font-medium text-primary hover:gap-3 transition-all">
                <span>View all projects</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="py-20 md:py-28 bg-muted/40">
    <div class="container-wide">
        <div class="max-w-2xl mx-auto text-center">
            <span class="inline-block text-xs font-medium tracking-[0.2em] uppercase text-primary mb-3">
                Kind Words
            </span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl text-foreground leading-tight">
                What our clients say
            </h2>
        </div>
        <div class="mt-14 grid md:grid-cols-3 gap-6">
            <div class="bg-card rounded-2xl p-8 border border-border relative hover-lift">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote absolute -top-3 left-6 h-8 w-8 text-primary bg-card p-1 rounded" aria-hidden="true">
                    <path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path>
                    <path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path>
                </svg>
                <div class="flex gap-1 text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                </div>
                <p class="text-foreground/85 leading-relaxed italic">
                    "ST Interiors transformed our apartment into a calm, sophisticated home. Every detail was thought through."
                </p>
                <div class="mt-6 pt-6 border-t border-border">
                    <div class="font-medium text-foreground">Anjali & Rohan Mehta</div>
                    <div class="text-xs text-muted-foreground">Homeowners, Bengaluru</div>
                </div>
            </div>
            <div class="bg-card rounded-2xl p-8 border border-border relative hover-lift">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote absolute -top-3 left-6 h-8 w-8 text-primary bg-card p-1 rounded" aria-hidden="true">
                    <path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path>
                    <path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path>
                </svg>
                <div class="flex gap-1 text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                </div>
                <p class="text-foreground/85 leading-relaxed italic">
                    "Our office became a place the team actually loves. Beautiful, functional, and on time."
                </p>
                <div class="mt-6 pt-6 border-t border-border">
                    <div class="font-medium text-foreground">Karan Shah</div>
                    <div class="text-xs text-muted-foreground">Dommasandra, Bengaluru</div>
                </div>
            </div>
            <div class="bg-card rounded-2xl p-8 border border-border relative hover-lift">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote absolute -top-3 left-6 h-8 w-8 text-primary bg-card p-1 rounded" aria-hidden="true">
                    <path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path>
                    <path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path>
                </svg>
                <div class="flex gap-1 text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-current" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                </div>
                <p class="text-foreground/85 leading-relaxed italic">
                    "From the first sketch to the last lamp — pure craft. Guests constantly compliment the space."
                </p>
                <div class="mt-6 pt-6 border-t border-border">
                    <div class="font-medium text-foreground">Priya Iyer</div>
                    <div class="text-xs text-muted-foreground">Restaurateur</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 md:py-28">
    <div class="container-wide">
        <div class="relative overflow-hidden rounded-3xl bg-secondary text-secondary-foreground p-10 md:p-16 text-center">
            <div class="absolute inset-0 opacity-30 [background:radial-gradient(circle_at_30%_20%,var(--color-primary),transparent_55%)]"></div>
            <div class="relative max-w-2xl mx-auto">
                <h2 class="font-display text-3xl md:text-5xl leading-tight">
                    Looking for Interior Designers in Bengaluru?
                </h2>
                <p class="mt-4 text-secondary-foreground/80">
                    Book a Free Site Visit Today with ST Interiors
                </p>
                <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                    </svg>
                    <span>Book a Free Site Visit</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>