# IMPORTANT: Correct Image Deployment Strategy

## Current Situation

You have 170 WebP images downloaded and optimized. They need to be organized correctly before deployment.

## The Correct Approach

### 1. WordPress Images (135 files)
These images from `tempusbelgravia.co.uk` should maintain their **original WordPress directory structure**:
- Location: `/wp-content/webp-express/webp-images/uploads/YYYY/MM/`
- **These URLs don't need changing** - they're already local on your server!

### 2. External Images (35 files) 
These from Cloudinary/CDN should go in your **theme directory**:
- Location: `/wp-content/themes/tempusbelgravia/images/`
- **These URLs need updating** in your PHP/CSS files

## Action Steps

1. **Run the reorganization script**:
   ```bash
   chmod +x reorganize_wordpress_images.sh
   ./reorganize_wordpress_images.sh
   ```

2. **Commit both directories**:
   ```bash
   git add wp-content/webp-express/
   git add wp-content/uploads/
   git add images/
   git commit -m "Add WebP images with correct structure"
   git push origin main
   ```

3. **Pull on your server** via cPanel

4. **Update only external image URLs** using `COMPLETE_IMAGE_MAPPING_CORRECTED.csv`

## Key Insight

The WordPress WebP Express images (like `/wp-content/webp-express/webp-images/uploads/2022/11/jawline-filler-scaled-1.jpeg.webp`) are **already being served locally** from your server. You don't need to change these URLs at all!

You only need to update the external Cloudinary/CDN URLs to point to your theme directory.

## Files to Use

- `COMPLETE_IMAGE_MAPPING_CORRECTED.csv` - Has the correct mappings
- `reorganize_wordpress_images.sh` - Moves files to correct locations
- `DEPLOYMENT_INSTRUCTIONS_CORRECTED.md` - Detailed deployment guide