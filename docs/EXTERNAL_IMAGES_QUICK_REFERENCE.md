# External Images Quick Reference

## 40 External URLs to Replace

### Cloudinary Treatment Images (11)
```
✓ hifu-treatment.webp
✓ body-contouring.webp
✓ skin-boosters.webp
✓ facial-aesthetics-category.webp
✓ body-contouring-category.webp
✓ laser-energy-category.webp
✓ injectable-artistry-category.webp
✓ medical-dermatology-category.webp
✓ iv-nutrient-category.webp
✓ longevity-science-category.webp
✓ surgical-expertise-category.webp
```

### Cloudinary Journey Images (4)
```
✓ discovery-vision.webp
✓ holistic-insight.webp
✓ harmonisation.webp
✓ evolving-partnership.webp
```

### Cloudinary Instagram Gallery (6)
```
✓ gallery-1.webp through gallery-6.webp
```

### Cloudinary Before/After Gallery (6)
```
✓ lips-before.webp / lips-after.webp
✓ wrinkle-before.webp / wrinkle-after.webp
✓ jawline-before.webp / jawline-after.webp
```

### Cloudinary Banners (4)
```
✓ dermapla-skin.webp
✓ skinpen-microneedling.webp
✓ morpheus8.webp
✓ fotona.webp
```

### NitroCDN Products (5)
```
✓ intelligent-face-body-cream.webp
✓ anti-wrinkle-serum.webp
✓ instant-eye-revive.webp
✓ correcting-spf-50.webp
✓ firming-neck-creme.webp
```

### Other External (4)
```
✓ google-reviews-logo.webp
✗ events-saudi-1.webp (not downloaded)
✗ events-saudi-2.webp (not downloaded)
✗ demo-blog.webp (not downloaded)
```

## PHP Replacement Pattern

```php
// For all external images:
<?php echo get_stylesheet_directory_uri(); ?>/images/[category]/[filename].webp
```

## CSS Replacement Pattern

```css
/* Relative path from CSS file: */
url('../images/[category]/[filename].webp')
```

## Key Files

- **Full mapping**: EXTERNAL_IMAGES_URL_REPLACEMENT_MAP.csv
- **Automation script**: replace_external_image_urls.sh
- **Detailed guide**: EXTERNAL_IMAGES_REPLACEMENT_GUIDE.md