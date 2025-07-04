# WebP Image Conversion & Local Hosting Plan

## Overview
This plan outlines the process to convert all 200+ images to WebP format and host them locally within the WordPress theme, eliminating external dependencies and improving performance.

## Current Situation
- **Total Images**: 200+ across multiple domains
- **External Images**: 36 Cloudinary + 5 NitroCDN + 4 other domains
- **Local Images**: 140+ already on tempusbelgravia.co.uk
- **Formats**: Mix of JPEG, PNG, WebP

## Conversion Strategy

### Phase 1: Setup & Preparation

#### 1.1 Install Required Tools
```bash
# macOS (using Homebrew)
brew install webp

# Or download from Google:
# https://developers.google.com/speed/webp/download

# Alternative: Install cwebp command line tool
curl -O https://storage.googleapis.com/downloads.webmproject.org/releases/webp/libwebp-1.3.2-mac-arm64.tar.gz
tar -xvf libwebp-1.3.2-mac-arm64.tar.gz
```

#### 1.2 Create Local Directory Structure
```
/images/
├── hero/           # Hero and background images
├── team/           # Team member photos
├── treatments/     # Treatment procedure images
├── products/       # Product images
├── logos/          # Partner and technology logos
├── gallery/        # Before/after images
├── conditions/     # Medical conditions
├── clinic/         # Clinic interior/ambiance
├── badges/         # Certifications and badges
└── misc/           # Miscellaneous images
```

### Phase 2: Download External Images

#### 2.1 Cloudinary Images (31 images)
Create a download script to fetch all Cloudinary images:

```bash
#!/bin/bash
# download_cloudinary.sh

# Create directories
mkdir -p images/{treatments,gallery,journey}

# Download treatment images
wget -O images/treatments/hifu-treatment.jpg "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761823/DSCF1645_w7xsbk.jpg"
wget -O images/treatments/body-contouring.jpg "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743754471/laser-epilation-and-cosmetology-in-beauty-salon-2025-03-17-16-59-36-utc_k0nglx.jpg"
# ... (continue for all Cloudinary images)
```

#### 2.2 NitroCDN Images (5 images)
```bash
# Download product images
mkdir -p images/products
wget -O images/products/intelligent-face-body-cream.jpg "https://cdn-ljahp.nitrocdn.com/[...]intelligent-face-and-body-cream-purple-v.3-300x300.jpg"
# ... (continue for all product images)
```

### Phase 3: Batch Conversion Process

#### 3.1 Conversion Script
```bash
#!/bin/bash
# convert_to_webp.sh

# Function to convert single image
convert_image() {
    input_file="$1"
    output_file="${input_file%.*}.webp"
    
    # Convert with quality settings
    cwebp -q 85 "$input_file" -o "$output_file" -quiet
    
    # Optional: Keep original for fallback
    # rm "$input_file"  # Uncomment to delete original
    
    echo "Converted: $input_file → $output_file"
}

# Convert all images recursively
find images/ -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) | while read file; do
    convert_image "$file"
done
```

#### 3.2 Quality Settings
- **Photos (team, treatments)**: `-q 85` (85% quality)
- **Logos/Graphics**: `-q 90` (90% quality) 
- **Large backgrounds**: `-q 80` (80% quality)
- **Thumbnails**: `-q 75` (75% quality)

### Phase 4: WordPress Integration

#### 4.1 Update Image URLs in Templates
Create a mapping file for search/replace:

```csv
# url_mapping.csv
OLD_URL,NEW_URL
https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761823/DSCF1645_w7xsbk.jpg,/wp-content/themes/tempusbelgravia/images/treatments/hifu-treatment.webp
https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/aquagold.png.webp,/wp-content/themes/tempusbelgravia/images/logos/aquagold.webp
# ... continue for all images
```

#### 4.2 Search & Replace Script
```php
// update_image_urls.php
<?php
$mapping = array_map('str_getcsv', file('url_mapping.csv'));
$files = glob('*.php');

foreach ($files as $file) {
    $content = file_get_contents($file);
    foreach ($mapping as $map) {
        $content = str_replace($map[0], $map[1], $content);
    }
    file_put_contents($file, $content);
}
?>
```

### Phase 5: Implementation Steps

#### Step 1: Backup Everything
```bash
# Create full backup
tar -czf backup_$(date +%Y%m%d).tar.gz *.php css/ js/ images/
```

#### Step 2: Download All External Images
```bash
# Run download scripts
./download_cloudinary.sh
./download_nitrocdn.sh
./download_external.sh
```

#### Step 3: Convert to WebP
```bash
# Run conversion script
./convert_to_webp.sh
```

#### Step 4: Update Theme Files
```bash
# Update PHP templates
php update_image_urls.php

# Update CSS files
find css/ -name "*.css" -exec sed -i.bak -f url_replacements.sed {} \;
```

#### Step 5: Test & Verify
1. Check all pages load correctly
2. Verify images display properly
3. Test responsive images
4. Check page load speed

### Phase 6: Optimization

#### 6.1 Responsive Images
Generate multiple sizes for key images:
```bash
# Create responsive versions
convert_responsive() {
    input="$1"
    base="${input%.*}"
    
    # Desktop
    cwebp -q 85 -resize 1920 0 "$input" -o "${base}-1920w.webp"
    
    # Tablet
    cwebp -q 85 -resize 1024 0 "$input" -o "${base}-1024w.webp"
    
    # Mobile
    cwebp -q 85 -resize 640 0 "$input" -o "${base}-640w.webp"
}
```

#### 6.2 Lazy Loading Implementation
Add to functions.php:
```php
// Add loading="lazy" to all images
add_filter('wp_get_attachment_image_attributes', function($attributes) {
    $attributes['loading'] = 'lazy';
    return $attributes;
});
```

### Phase 7: Fallback Support

#### 7.1 Picture Element Implementation
```html
<picture>
    <source srcset="/images/team/dr-veerle.webp" type="image/webp">
    <source srcset="/images/team/dr-veerle.jpg" type="image/jpeg">
    <img src="/images/team/dr-veerle.jpg" alt="Dr. Veerle Rotsaert">
</picture>
```

#### 7.2 .htaccess Rules
```apache
# Serve WebP images if browser supports
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{HTTP_ACCEPT} image/webp
    RewriteCond %{REQUEST_FILENAME} (.*)\.(jpe?g|png)$
    RewriteCond %{REQUEST_FILENAME}\.webp -f
    RewriteRule (.+)\.(jpe?g|png)$ $1.webp [T=image/webp,E=accept:1]
</IfModule>
```

## Execution Timeline

### Week 1: Preparation
- [ ] Install WebP tools
- [ ] Create directory structure
- [ ] Write download scripts
- [ ] Create URL mapping

### Week 2: Conversion
- [ ] Download all external images
- [ ] Run batch conversion
- [ ] Generate responsive versions
- [ ] Test conversions

### Week 3: Implementation
- [ ] Update theme templates
- [ ] Update CSS files
- [ ] Implement lazy loading
- [ ] Add fallback support

### Week 4: Testing & Optimization
- [ ] Full site testing
- [ ] Performance testing
- [ ] Fix any issues
- [ ] Deploy to production

## Expected Results

### Performance Improvements
- **File Size Reduction**: 25-35% smaller than JPEG
- **Page Load Speed**: 20-30% faster
- **Bandwidth Savings**: Significant reduction
- **Better Caching**: All images served locally

### SEO Benefits
- Improved Core Web Vitals
- Better mobile performance
- Reduced server requests
- Consistent image delivery

## Maintenance

### Regular Tasks
1. Convert new uploads to WebP
2. Update URL mappings
3. Monitor image performance
4. Optimize as needed

### Automation Options
- WordPress plugin for automatic WebP conversion
- Build process integration
- CDN with automatic WebP serving

## Tools & Resources

### Conversion Tools
- **cwebp**: Command line converter
- **ImageMagick**: Batch processing
- **Squoosh**: Online converter
- **WordPress Plugins**: WebP Express, EWWW Image Optimizer

### Testing Tools
- **Google PageSpeed Insights**
- **WebPageTest.org**
- **Chrome DevTools Network tab**
- **GTmetrix**

## Risk Mitigation

### Potential Issues
1. **Browser Compatibility**: Use picture element fallbacks
2. **Large Batch Processing**: Process in smaller batches
3. **URL Updates**: Test thoroughly before deployment
4. **Missing Images**: Keep detailed logs

### Rollback Plan
1. Keep original image backups
2. Version control all changes
3. Test on staging first
4. Have quick revert script ready

## Conclusion

This comprehensive plan will:
- Convert all 200+ images to WebP
- Host all images locally
- Improve site performance
- Reduce external dependencies
- Provide better user experience

The process is systematic, testable, and reversible, ensuring a smooth transition to WebP format.