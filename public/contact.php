<?php
include '../includes/header.php';
?>
<!--Hero section-->
<section class="relative py-16 md:py-20 bg-secondary text-secondary-foreground overflow-hidden">
    <div class="absolute inset-0 opacity-30 pointer-events-none [background:radial-gradient(circle_at_top_right,var(--color-primary),transparent_55%)]"></div>
    <div class="container-wide relative">
        <span class="inline-block text-xs font-medium tracking-[0.2em] uppercase text-primary mb-4">
            Contact
        </span>
        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl max-w-3xl">
            Let's talk about your space.
        </h1>
        <p class="mt-5 max-w-2xl text-base md:text-lg text-secondary-foreground/75 leading-relaxed">
            Tell us a little about your project — we typically respond within 48 hours.
        </p>
    </div>
</section>
<!--contact options section-->
<section class="py-20 md:py-28">
    <div class="container-wide">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="flex gap-4">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-5 w-5" aria-hidden="true">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </span>
                    <div>
                        <div class="font-medium">Studio Address</div>
                        <p class="text-sm text-muted-foreground">24 Design Avenue, Bandra West, Mumbai 400050</p>
                    </div>
                </div>
            </div>

            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="flex gap-4">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5" aria-hidden="true">
                            <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                        </svg>
                    </span>
                    <div>
                        <div class="font-medium">Phone</div>
                        <p class="text-sm text-muted-foreground">+91 98765 43210</p>
                    </div>
                </div>
            </div>

            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="flex gap-4">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-5 w-5" aria-hidden="true">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        </svg></span>
                    <div>
                        <div class="font-medium">Email</div>
                        <p class="text-sm text-muted-foreground">hello@shyaminteriors.com</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mt-16 container-wide grid grid-col-1 lg:grid-cols-2 gap-10">
        <div class="overflow-hidden rounded-2xl border border-border aspect-[4/3]">
            <iframe
                title="Studio location"
                src="https://www.openstreetmap.org/export/embed.html?bbox=72.81%2C19.04%2C72.86%2C19.0&layer=mapnik"
                class="w-full h-full"
                loading="lazy">
            </iframe>
        </div>
        <div>
            <form class="bg-card border border-border rounded-3xl p-8 md:p-10 shadow-[var(--shadow-card)]">
                <h2 class="font-display text-2xl mb-6">
                    Send us a message
                </h2>
                <div class="grid sm:grid-cols-2 gap-5">
                    <label class="block">
                        <span class="text-sm font-medium text-foreground mb-2 inline-block">Full name<span class="text-primary"> *</span></span>
                        <input required="" class="w-full rounded-lg border border-border bg-background px-4 py-3 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition" value="">
                    </label>
                    <label class="block">
                        <span class="text-sm font-medium text-foreground mb-2 inline-block">Email<span class="text-primary"> *</span></span>
                        <input required="" class="w-full rounded-lg border border-border bg-background px-4 py-3 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition" type="email" value="">
                    </label>
                </div>
                <div class="mt-5">
                    <label class="block">
                        <span class="text-sm font-medium text-foreground mb-2 inline-block">Phone (optional)</span>
                        <input class="w-full rounded-lg border border-border bg-background px-4 py-3 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition" type="tel" value="">
                    </label>
                </div>
                <div class="mt-5">
                    <label class="block">
                        <span class="text-sm font-medium text-foreground mb-2 inline-block">Tell us about your project<span class="text-primary"> *</span></span>
                        <textarea required="" rows="6" class="w-full rounded-lg border border-border bg-background px-4 py-3 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition resize-none"></textarea>
                    </label>
                </div>
                <button type="submit" class="mt-6 inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-all hover:shadow-[var(--shadow-elegant)]">
                    <span>Send message</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send h-4 w-4" aria-hidden="true">
                        <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                        <path d="m21.854 2.147-10.94 10.939"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>
<?php
include '../includes/footer.php';
?>