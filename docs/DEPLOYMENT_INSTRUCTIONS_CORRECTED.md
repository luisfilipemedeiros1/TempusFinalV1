# Corrected Deployment Instructions for WebP Images

## Important: Two Different Image Locations

Your images will be deployed to **TWO different locations**:

1. **WordPress Images** → `/wp-content/webp-express/webp-images/uploads/` and `/wp-content/uploads/`
2. **External Images** (Cloudinary, CDN) → `/wp-content/themes/tempusbelgravia/images/`

## Step 1: Reorganize Images First

Before committing, run the reorganization script to move WordPress images to their correct locations:

```bash
chmod +x reorganize_wordpress_images.sh
./reorganize_wordpress_images.sh
```

## Step 2: Commit All Images to Git

```bash
# Add WordPress content directories
git add wp-content/webp-express/
git add wp-content/uploads/

# Add theme images (external sources)
git add images/

# Add documentation
git add COMPLETE_IMAGE_MAPPING_CORRECTED.csv
git add WEBP_CONVERSION_*.md
git add DEPLOYMENT_INSTRUCTIONS_CORRECTED.md

# Commit
git commit -m "Add optimized WebP images with correct directory structure

- WordPress images in wp-content/webp-express/ and wp-content/uploads/
- External images in theme directory
- 170+ total images optimized for local hosting

Co-Authored-By: Claude <noreply@anthropic.com>"

# Push
git push origin main
```

## Step 3: Pull in cPanel

### Via Terminal:
```bash
cd /home/yourusername/public_html
git pull origin main
```

### Via Git Version Control:
- Navigate to Git Version Control
- Select your repository
- Click "Pull or Deploy"

## Step 4: Verify Deployment

Check that files are in correct locations:

```bash
# WordPress WebP images
ls -la wp-content/webp-express/webp-images/uploads/2022/
ls -la wp-content/webp-express/webp-images/uploads/2023/

# Theme images (external sources)
ls -la wp-content/themes/tempusbelgravia/images/
```

## Step 5: Update Image References

Use `COMPLETE_IMAGE_MAPPING_CORRECTED.csv` for the correct mappings.

### For WordPress Images (already on your domain):
```php
// OLD:
<img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Relax-restore.jpeg.webp">

// NEW (no change needed - already local!):
<img src="/wp-content/webp-express/webp-images/uploads/2022/11/Relax-restore.jpeg.webp">
```

### For External Images (Cloudinary, CDN):
```php
// OLD:
<img src="https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761823/DSCF1645_w7xsbk.jpg">

// NEW:
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treatments/hifu-treatment.webp">
```

## Directory Structure After Deployment

```
/public_html/
├── wp-content/
│   ├── webp-express/
│   │   └── webp-images/
│   │       └── uploads/
│   │           ├── 2022/
│   │           │   ├── 08/ (team, treatments, technology)
│   │           │   ├── 09/ (surgical, products)
│   │           │   ├── 10/ (logos, more treatments)
│   │           │   └── 11/ (hero images)
│   │           ├── 2023/
│   │           │   ├── 01/ (conditions, wellness)
│   │           │   ├── 04/ (badges)
│   │           │   ├── 06/ (team)
│   │           │   └── 09/ (treatments)
│   │           └── 2024/
│   │               └── 07/ (CQC badge)
│   ├── uploads/
│   │   └── [same year/month structure for non-WebP files]
│   └── themes/
│       └── tempusbelgravia/
│           └── images/
│               ├── treatments/ (Cloudinary category images)
│               ├── journey/ (Cloudinary journey images)
│               ├── instagram/ (Cloudinary gallery)
│               ├── gallery/ (Cloudinary before/after)
│               ├── products/ (NitroCDN products)
│               └── badges/ (External badges)
```

## Key Points

1. **WordPress images** that are already hosted on tempusbelgravia.co.uk **don't need URL updates** - they're already local!

2. **Only external images** (Cloudinary, NitroCDN, other domains) need URL replacement to theme directory

3. **File permissions** after deployment:
   ```bash
   find wp-content/webp-express -type d -exec chmod 755 {} \;
   find wp-content/webp-express -type f -exec chmod 644 {} \;
   ```

## Benefits

- ✅ WordPress WebP Express structure preserved
- ✅ External images localized to theme
- ✅ No breaking changes to existing WordPress images
- ✅ Improved performance with all images optimized
- ✅ No external CDN dependencies

## Troubleshooting

If images don't load:
1. Check browser console for 404 errors
2. Verify file paths match the CSV mapping
3. Ensure .htaccess allows WebP: `AddType image/webp .webp`
4. Clear all caches (WordPress, CDN, browser)