# External Images URL Replacement Guide

## Overview

This guide helps you replace all external image URLs (Cloudinary, CDN, etc.) with local WebP versions hosted in your theme directory.

## Total External Images to Replace: 40

### By Category:
- **Cloudinary Images**: 31 URLs
  - Treatment images: 11
  - Journey images: 4
  - Instagram gallery: 6
  - Before/After gallery: 6
  - Banner images: 4

- **NitroCDN Product Images**: 5 URLs

- **Other External Domains**: 4 URLs
  - Google Reviews logo
  - Demo/placeholder images (3)

## Files Created

1. **EXTERNAL_IMAGES_URL_REPLACEMENT_MAP.csv**
   - Complete mapping of all external URLs to local paths
   - Includes PHP-ready replacement strings

2. **replace_external_image_urls.sh**
   - Automated replacement script
   - Creates backups before making changes
   - Searches all PHP and CSS files

## Manual Replacement Method

### For PHP Files:
```php
// Example 1: Cloudinary Treatment Image
// OLD:
<img src="https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761823/DSCF1645_w7xsbk.jpg">

// NEW:
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treatments/hifu-treatment.webp">

// Example 2: NitroCDN Product Image
// OLD:
<img src="https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/intelligent-face-and-body-cream-purple-v.3-300x300.jpg">

// NEW:
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/products/intelligent-face-body-cream.webp">
```

### For CSS Files:
```css
/* OLD: */
background-image: url('https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761798/DSCF1682_ebhg0a.jpg');

/* NEW: */
background-image: url('../images/journey/discovery-vision.webp');
```

## Automated Replacement Method

1. **Make script executable**:
   ```bash
   chmod +x replace_external_image_urls.sh
   ```

2. **Run the replacement script**:
   ```bash
   ./replace_external_image_urls.sh
   ```

3. **The script will**:
   - Create backups of all modified files
   - Replace all external URLs with local paths
   - Show progress for each replacement
   - Skip plugin and cache directories

## Important Notes

### WordPress Images DON'T Need Replacement
Images already on tempusbelgravia.co.uk (in wp-content/webp-express/) are **already local** and don't need URL changes!

Only replace URLs from:
- res.cloudinary.com
- cdn-ljahp.nitrocdn.com
- Other external domains

### Responsive Images
If using responsive images, update srcset attributes:
```php
// OLD:
<img srcset="https://res.cloudinary.com/... 1x, https://res.cloudinary.com/... 2x">

// NEW:
<img srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/treatments/hifu-treatment.webp 1x,
             <?php echo get_stylesheet_directory_uri(); ?>/images/treatments/hifu-treatment.webp 2x">
```

### CSS Background Images
In CSS files, use relative paths:
```css
/* From theme CSS file: */
background-image: url('../images/journey/discovery-vision.webp');

/* From plugin or other location, use full path: */
background-image: url('/wp-content/themes/tempusbelgravia/images/journey/discovery-vision.webp');
```

## Testing After Replacement

1. **Clear all caches**:
   - WordPress cache
   - Browser cache
   - CDN cache (if applicable)

2. **Check key pages**:
   - Homepage (treatment categories, journey section)
   - Product pages
   - Gallery/Instagram sections
   - Any custom banners

3. **Use browser developer tools**:
   - Check Network tab for 404 errors
   - Verify all images load from local paths

## Rollback If Needed

To restore original files:
```bash
find . -name '*.backup' -type f | while read backup; do
    mv "$backup" "${backup%.backup}"
done
```

## Benefits After Replacement

- ✅ No external CDN dependencies
- ✅ Faster page loads (no external requests)
- ✅ Better privacy (no third-party tracking)
- ✅ Full control over image optimization
- ✅ Works offline/in development

## Summary

You're replacing 40 external image URLs with local WebP versions. The mapping file provides exact URL pairs, and the script automates the process. Focus only on external URLs - WordPress images are already local!