<?php
require_once '../includes/config.php';
require_once '../includes/schema.php';

$activePage = 'services';
$pageTitle = 'Services — ST Interiors';
$pageDescription = 'Residential, commercial, renovation, and styling services. Explore our complete interior design offering.';
$pageImage = '/assets/images/services.jpg';

$schemas = [
    schema_website(),
    schema_webpage([
        'name'        => $pageTitle,
        'description' => $pageDescription,
    ]),
    schema_breadcrumb([
        ['name' => 'Home', 'url' => SITE_URL],
        ['name' => 'Services', 'url' => SITE_URL . '/services.php'],
    ]),
];

include '../includes/header.php';
?>
<!--Hero section-->
<section class="relative py-16 md:py-20 bg-secondary text-secondary-foreground overflow-hidden">
    <div class="absolute inset-0 opacity-30 pointer-events-none [background:radial-gradient(circle_at_top_right,var(--color-primary),transparent_55%)]"></div>
    <div class="container-wide relative">
        <span class="inline-block text-xs font-medium tracking-[0.2em] uppercase text-primary mb-4">
            Services
        </span>
        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl max-w-3xl">
            Interior design, end to end.
        </h1>
        <p class="mt-5 max-w-2xl text-base md:text-lg text-secondary-foreground/75 leading-relaxed">
            A complete service — from first concept to final styling — tailored to the scale and ambition of your project.
        </p>
    </div>
</section>
<!--Our services section-->
<section class="py-20 md:py-28">
    <div class="container-wide space-y-24">
        <article class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center ">
            <div class="overflow-hidden rounded-3xl">
                <img alt="Residential Interiors" loading="lazy" class="w-full h-[26rem] object-cover hover:scale-105 transition-transform duration-700" src="/assets/images/services/residential-interiors.jpg">
            </div>
            <div>
                <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">
                    01 — Service
                </span>
                <h2 class="font-display text-3xl md:text-4xl mt-3 leading-tight">
                    Residential Interiors
                </h2>
                <p class="mt-5 text-muted-foreground leading-relaxed">
                    From compact apartments to family homes, we design spaces that feel personal, peaceful, and entirely yours. Floor plans, materials, lighting, furniture, and styling — all considered as one composition.
                </p>
                <ul class="mt-6 space-y-2">
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Full-home design
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Single-room refresh
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Custom joinery & furniture
                    </li>
                </ul>
                <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                    </svg>
                    <span>Enquire about this service</span>
                </a>
            </div>
        </article>
        <article class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center lg:[&>div:first-child]:order-2">
            <div class="overflow-hidden rounded-3xl">
                <img alt="Commercial Spaces" loading="lazy" class="w-full h-[26rem] object-cover hover:scale-105 transition-transform duration-700" src="/assets/images/services/commercial-spaces.jpg">
            </div>
            <div>
                <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">
                    02 — Service
                </span>
                <h2 class="font-display text-3xl md:text-4xl mt-3 leading-tight">
                    Commercial Spaces
                </h2>
                <p class="mt-5 text-muted-foreground leading-relaxed">
                    Workplaces, studios, and showrooms designed to perform — and to feel as good as they look. We balance brand, function, and human comfort.
                </p>
                <ul class="mt-6 space-y-2">
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Office & co-working
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Showrooms & retail
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Brand-aligned interiors
                    </li>
                </ul>
                <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                    </svg>
                    <span>Enquire about this service</span>
                </a>
            </div>
        </article>
        <article class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center ">
            <div class="overflow-hidden rounded-3xl">
                <img alt="Renovation" loading="lazy" class="w-full h-[26rem] object-cover hover:scale-105 transition-transform duration-700" src="/assets/images/services/renovation.jpg">
            </div>
            <div>
                <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">
                    03 — Service
                </span>
                <h2 class="font-display text-3xl md:text-4xl mt-3 leading-tight">
                    Renovation
                </h2>
                <p class="mt-5 text-muted-foreground leading-relaxed">
                    Thoughtful interventions that respect what's there and elevate what could be. We work with existing layouts to unlock light, flow, and value.
                </p>
                <ul class="mt-6 space-y-2">
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Heritage & legacy homes
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Kitchens & bathrooms
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Structural reconfiguration
                    </li>
                </ul>
                <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                    </svg>
                    <span>Enquire about this service</span>
                </a>
            </div>
        </article>
        <article class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center lg:[&>div:first-child]:order-2">
            <div class="overflow-hidden rounded-3xl">
                <img alt="Kitchen & Dining" loading="lazy" class="w-full h-[26rem] object-cover hover:scale-105 transition-transform duration-700" src="/assets/images/services/kitchen-dining.jpg">
            </div>
            <div>
                <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">
                    04 — Service
                </span>
                <h2 class="font-display text-3xl md:text-4xl mt-3 leading-tight">
                    Kitchen & Dining
                </h2>
                <p class="mt-5 text-muted-foreground leading-relaxed">
                    The most-used room in the home, designed to last. From hardworking family kitchens to sculptural showcase pieces.
                </p>
                <ul class="mt-6 space-y-2">
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Custom cabinetry
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Stone & surface selection
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Appliance integration
                    </li>
                </ul>
                <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                    </svg>
                    <span>Enquire about this service</span>
                </a>
            </div>
        </article>
        <article class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center ">
            <div class="overflow-hidden rounded-3xl">
                <img alt="Hospitality & Retail" loading="lazy" class="w-full h-[26rem] object-cover hover:scale-105 transition-transform duration-700" src="/assets/images/services/hospitality-retail.jpg">
            </div>
            <div>
                <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">
                    05 — Service
                </span>
                <h2 class="font-display text-3xl md:text-4xl mt-3 leading-tight">
                    Hospitality & Retail
                </h2>
                <p class="mt-5 text-muted-foreground leading-relaxed">
                    Restaurants, boutiques, and guest spaces designed to create atmosphere and tell a story.
                </p>
                <ul class="mt-6 space-y-2">
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Concept development
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Material & lighting design
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Turnkey delivery
                    </li>
                </ul>
                <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                    </svg>
                    <span>Enquire about this service</span>
                </a>
            </div>
        </article>
        <article class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center lg:[&>div:first-child]:order-2">
            <div class="overflow-hidden rounded-3xl">
                <img alt="Styling & Curation" loading="lazy" class="w-full h-[26rem] object-cover hover:scale-105 transition-transform duration-700" src="/assets/images/services/styling-curation.jpg">
            </div>
            <div>
                <span class="text-xs font-medium tracking-[0.2em] uppercase text-primary">
                    06 — Service
                </span>
                <h2 class="font-display text-3xl md:text-4xl mt-3 leading-tight">
                    Styling & Curation
                </h2>
                <p class="mt-5 text-muted-foreground leading-relaxed">
                    The final 10% that makes a space feel finished — art, objects, textiles, and the small details that bring a room to life.
                </p>
                <ul class="mt-6 space-y-2">
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Art & accessory sourcing
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Soft furnishings
                    </li>
                    <li class="flex items-center gap-3 text-sm text-foreground/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        Move-in styling
                    </li>
                </ul>
                <a href="tel:+916377170420" class="inline-flex items-center gap-2 mt-8 rounded-full bg-primary px-8 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-2" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                    </svg>
                    <span>Enquire about this service</span>
                </a>
            </div>
        </article>
    </div>
</section>
<?php
include '../includes/footer.php';
?>