<?php
require_once '../includes/config.php';
require_once '../includes/schema.php';

$activePage = 'portfolio';
$pageTitle = 'Portfolio — Shyam Interiors';
$pageDescription = 'A collection of spaces we’ve designed — homes, offices, and retail interiors that balance calm, function, and quiet character.';
$pageImage = '/assets/images/portfolio.jpg';

$schemas = [
    schema_website(),
    schema_webpage([
        'name'        => $pageTitle,
        'description' => $pageDescription,
    ]),
    schema_breadcrumb([
        ['name' => 'Home', 'url' => SITE_URL],
        ['name' => 'Portfolio', 'url' => SITE_URL . '/portfolio.php'],
    ]),
];
include '../includes/header.php';
include '../includes/portfolio_data.php';
?>
<!--Hero section-->
<section class="relative py-16 md:py-20 bg-secondary text-secondary-foreground overflow-hidden">
    <div class="absolute inset-0 opacity-30 pointer-events-none [background:radial-gradient(circle_at_top_right,var(--color-primary),transparent_55%)]"></div>
    <div class="container-wide relative">
        <span class="inline-block text-xs font-medium tracking-[0.2em] uppercase text-primary mb-4">
            Portfolio
        </span>
        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl max-w-3xl">
            Selected work, recent and timeless.
        </h1>
        <p class="mt-5 max-w-2xl text-base md:text-lg text-secondary-foreground/75 leading-relaxed">
            A collection of spaces we’ve designed — homes, offices, and retail interiors that balance calm, function, and quiet character.
        </p>
    </div>
</section>

<!--Gallery section-->
<section class="py-12 md:py-20">
    <div class="container-wide">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php foreach ($portfolio_items as $item): ?>
            <figure class="group relative overflow-hidden rounded-2xl">
                <a href="/portfolio">
                    <img src="/assets/images/portfolio/<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-105">
                </a>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
include '../includes/footer.php';
?>