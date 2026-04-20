<?php

function render_schema(array $schema): void
{
    echo '<script type="application/ld+json">';
    echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo '</script>';
}

// -----------------------------------------------
// Schema presets — call these from any page
// -----------------------------------------------

function schema_website(array $data = []): array
{
    return array_merge([
        '@context'  => 'https://schema.org',
        '@type'     => 'WebSite',
        'name'      => $data['name']        ?? SITE_NAME,
        'url'       => $data['url']         ?? SITE_URL,
        'description' => $data['description'] ?? SITE_DESC,
    ], $data);
}

function schema_webpage(array $data = []): array
{
    return array_merge([
        '@context'    => 'https://schema.org',
        '@type'       => 'WebPage',
        'name'        => $data['name']        ?? '',
        'url'         => $data['url']         ?? SITE_URL . $_SERVER['REQUEST_URI'],
        'description' => $data['description'] ?? '',
        'inLanguage'  => 'en-US',
        'isPartOf'    => [
            '@type' => 'WebSite',
            'url'   => SITE_URL,
        ],
    ], $data);
}

function schema_article(array $data = []): array
{
    return array_merge([
        '@context'        => 'https://schema.org',
        '@type'           => 'Article',
        'headline'        => $data['headline']      ?? '',
        'description'     => $data['description']   ?? '',
        'author'          => [
            '@type' => 'Person',
            'name'  => $data['author']              ?? SITE_AUTHOR,
        ],
        'publisher'       => [
            '@type' => 'Organization',
            'name'  => SITE_NAME,
            'logo'  => [
                '@type' => 'ImageObject',
                'url'   => SITE_URL . '/images/logo.png',
            ],
        ],
        'datePublished'   => $data['datePublished']  ?? date('Y-m-d'),
        'dateModified'    => $data['dateModified']   ?? date('Y-m-d'),
        'url'             => $data['url']            ?? SITE_URL . $_SERVER['REQUEST_URI'],
    ], $data);
}

function schema_breadcrumb(array $items = []): array
{
    $list = [];
    foreach ($items as $position => $item) {
        $list[] = [
            '@type'    => 'ListItem',
            'position' => $position + 1,
            'name'     => $item['name'],
            'item'     => $item['url'],
        ];
    }

    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $list,
    ];
}

function schema_local_business(array $data = []): array
{
    return array_merge([
        '@context'  => 'https://schema.org',
        '@type'     => 'LocalBusiness',
        'name'      => $data['name']      ?? SITE_NAME,
        'url'       => $data['url']       ?? SITE_URL,
        'telephone' => $data['telephone'] ?? '',
        'address'   => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $data['street']   ?? '',
            'addressLocality' => $data['city']     ?? '',
            'addressRegion'   => $data['region']   ?? '',
            'postalCode'      => $data['zip']      ?? '',
            'addressCountry'  => $data['country']  ?? 'IN',
        ],
    ], $data);
}
