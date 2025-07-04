# Deployment Instructions for WebP Images

## Overview
This guide explains how to deploy your converted WebP images to your Namecheap cPanel hosting via Git.

## Step 1: Commit Images to Git

First, add all the new image files to your Git repository:

```bash
# Add all image files
git add images/
git add videos/

# Add documentation files
git add COMPLETE_IMAGE_MAPPING.csv
git add WEBP_CONVERSION_*.md
git add DEPLOYMENT_INSTRUCTIONS.md

# Commit the changes
git commit -m "Add optimized WebP images for local hosting

- Downloaded 170+ images from WordPress and external sources
- Converted all JPG/PNG files to WebP format
- Organized images in proper directory structure
- Added complete URL mapping for easy replacement

Co-Authored-By: Claude <noreply@anthropic.com>"

# Push to your repository
git push origin main
```

## Step 2: Pull Changes in cPanel

1. **Access your cPanel**:
   - Log into your Namecheap cPanel
   - Navigate to your WordPress installation directory (usually `/public_html` or `/public_html/yourdomain`)

2. **Pull the changes via cPanel Terminal or Git Version Control**:
   
   ### Option A: Using cPanel Terminal
   ```bash
   cd /home/yourusername/public_html
   git pull origin main
   ```
   
   ### Option B: Using cPanel Git Version Control
   - Go to "Git Version Control" in cPanel
   - Find your repository
   - Click "Manage" → "Pull or Deploy"
   - Click "Update from Remote"

## Step 3: Verify File Upload

After pulling, verify the images uploaded correctly:

```bash
# In cPanel terminal or File Manager, check:
ls -la wp-content/themes/tempusbelgravia/images/
```

You should see:
- badges/
- clinic/
- conditions/
- gallery/
- hero/
- instagram/
- journey/
- logos/
- products/
- team/
- technology/
- treatments/
- wellness/

## Step 4: Update Image References

### Manual Update Method:
Use the `COMPLETE_IMAGE_MAPPING.csv` as a reference to update your theme files:

1. **For PHP files**:
   ```php
   // OLD:
   <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761823/DSCF1645_w7xsbk.jpg">
   
   // NEW:
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treatments/hifu-treatment.webp">
   ```

2. **For CSS files**:
   ```css
   /* OLD: */
   background-image: url('https://tempusbelgravia.co.uk/wp-content/uploads/2022/11/hero-image.jpg');
   
   /* NEW: */
   background-image: url('../images/hero/hero-image.webp');
   ```

### Automated Update Method:
Create a search-and-replace script using the CSV mapping:

```bash
# Example script to update PHP files
while IFS=',' read -r old_url new_path; do
    find . -name "*.php" -type f -exec sed -i "s|$old_url|<?php echo get_stylesheet_directory_uri(); ?>$new_path|g" {} +
done < COMPLETE_IMAGE_MAPPING.csv
```

## Step 5: Clear Caches

After updating image references:

1. **Clear WordPress cache** (if using caching plugin)
2. **Clear CDN cache** (if using Cloudflare or similar)
3. **Clear browser cache**

## File Structure on Server

Your images will be located at:
```
/public_html/wp-content/themes/tempusbelgravia/
├── images/
│   ├── badges/
│   ├── clinic/
│   ├── conditions/
│   ├── gallery/
│   ├── hero/
│   ├── instagram/
│   ├── journey/
│   ├── logos/
│   ├── products/
│   ├── team/
│   ├── technology/
│   ├── treatments/
│   └── wellness/
└── videos/
    └── hero-video.mp4
```

## Important Notes

1. **File Permissions**: After upload, ensure proper permissions:
   ```bash
   find images -type d -exec chmod 755 {} \;
   find images -type f -exec chmod 644 {} \;
   ```

2. **Backup First**: Always backup your site before making bulk changes

3. **Test Thoroughly**: 
   - Check homepage images first
   - Test on different devices
   - Verify all images load correctly

4. **Failed Images**: 
   The following images returned 404 and weren't downloaded:
   - team: adriana, amy-2, aneta-2, hoda
   - badges: google-reviews, verified
   
   You may need to source these separately if needed.

## Benefits After Deployment

- ✅ Faster page load times (WebP format)
- ✅ No external dependencies (all images local)
- ✅ Better SEO performance
- ✅ Reduced bandwidth usage
- ✅ More control over your assets

## Troubleshooting

If images don't appear after update:
1. Check file paths are correct
2. Verify .htaccess allows WebP files
3. Check PHP error logs
4. Ensure theme directory URI is correct

## Need Help?

Refer to:
- `COMPLETE_IMAGE_MAPPING.csv` - Full URL to local path mapping
- `WEBP_CONVERSION_FINAL_STATUS.md` - What was converted
- Original download scripts if you need to re-download anything