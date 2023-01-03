<?php
header('Content-type: application/xml; charset="ISO-8859-1"', true);
$datetime1 = new DateTime(date('Y-m-d H:i:s'));
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url() ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?= base_url('about') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('solution/digital-age-networking') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('solution/business-continuity-collaboration') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('solution/security-intelligence') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/unified-network-infrastructure') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/private-cloud-computing-for-mission-critical-system') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/internet-of-things') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/collaboration-communication') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/secured-communication') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/military-grade-communication-system') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/digital-workplace') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/r17-integrated-security-solutions') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/location-services') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('technology/security-intelligence') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('contact-us') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('career') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('insight/article-news') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('insight/event') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('project') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('project/it-service-management') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('project/it-enterprise-architecture') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('project/secure-cyber-ecosystem-monitoring-center') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('project/radio-communication-system-combat-vehicles') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('project/data-digital-forensic') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('product/unified-network-infrastructure') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('product/digital-transformation') ?></loc>
        <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <?php foreach ($articles as $article) : ?>
        <url>
            <loc><?= base_url('insight/article/' . $article['slug_id']) ?></loc>
            <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
    <?php foreach ($events as $event) : ?>
        <url>
            <loc><?= base_url('insight/event/R17/' . $event['slug_id']) ?></loc>
            <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
</urlset>