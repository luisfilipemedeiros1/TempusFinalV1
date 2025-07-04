#!/bin/bash

# WebP Conversion Script for TempusFHFinal
# Converts all images to WebP format with appropriate quality settings

# Color codes for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Configuration
DEFAULT_QUALITY=85
LOGO_QUALITY=90
BACKGROUND_QUALITY=80
THUMBNAIL_QUALITY=75

# Counters
TOTAL=0
SUCCESS=0
FAILED=0

# Check if cwebp is installed
if ! command -v cwebp &> /dev/null; then
    echo -e "${RED}Error: cwebp is not installed!${NC}"
    echo "Please install WebP tools first:"
    echo "  macOS: brew install webp"
    echo "  Or download from: https://developers.google.com/speed/webp/download"
    exit 1
fi

# Function to convert single image
convert_image() {
    local input_file="$1"
    local quality="$2"
    local output_file="${input_file%.*}.webp"
    
    # Skip if already WebP
    if [[ "$input_file" == *.webp ]]; then
        echo -e "${YELLOW}Skipping (already WebP): $input_file${NC}"
        return 0
    fi
    
    # Skip if WebP already exists
    if [ -f "$output_file" ]; then
        echo -e "${YELLOW}Skipping (WebP exists): $output_file${NC}"
        return 0
    fi
    
    TOTAL=$((TOTAL + 1))
    
    # Convert with error handling
    if cwebp -q "$quality" "$input_file" -o "$output_file" -quiet 2>/dev/null; then
        SUCCESS=$((SUCCESS + 1))
        echo -e "${GREEN}✓ Converted: $input_file → $output_file (quality: $quality)${NC}"
        
        # Get file sizes for comparison
        original_size=$(du -h "$input_file" | cut -f1)
        webp_size=$(du -h "$output_file" | cut -f1)
        echo "  Size: $original_size → $webp_size"
    else
        FAILED=$((FAILED + 1))
        echo -e "${RED}✗ Failed: $input_file${NC}"
    fi
}

# Function to convert images with responsive sizes
convert_responsive() {
    local input_file="$1"
    local base="${input_file%.*}"
    local ext="${input_file##*.}"
    
    # Skip if not an image
    if [[ ! "$ext" =~ ^(jpg|jpeg|png)$ ]]; then
        return 0
    fi
    
    echo "Creating responsive versions for: $input_file"
    
    # Original size
    convert_image "$input_file" "$DEFAULT_QUALITY"
    
    # Only create responsive versions for large images
    if [ -f "$input_file" ]; then
        width=$(identify -format "%w" "$input_file" 2>/dev/null)
        
        if [ "$width" -gt 1920 ]; then
            # Desktop (1920px)
            convert "$input_file" -resize "1920x>" "${base}-1920w.${ext}"
            convert_image "${base}-1920w.${ext}" "$DEFAULT_QUALITY"
            rm "${base}-1920w.${ext}"
        fi
        
        if [ "$width" -gt 1024 ]; then
            # Tablet (1024px)
            convert "$input_file" -resize "1024x>" "${base}-1024w.${ext}"
            convert_image "${base}-1024w.${ext}" "$DEFAULT_QUALITY"
            rm "${base}-1024w.${ext}"
        fi
        
        if [ "$width" -gt 640 ]; then
            # Mobile (640px)
            convert "$input_file" -resize "640x>" "${base}-640w.${ext}"
            convert_image "${base}-640w.${ext}" "$THUMBNAIL_QUALITY"
            rm "${base}-640w.${ext}"
        fi
    fi
}

# Main conversion process
echo "==================================="
echo "WebP Conversion Script"
echo "==================================="
echo ""

# Convert logos with higher quality
echo "Converting logos..."
find images/logos -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) | while read file; do
    convert_image "$file" "$LOGO_QUALITY"
done

# Convert team photos
echo -e "\nConverting team photos..."
find images/team -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) | while read file; do
    convert_image "$file" "$DEFAULT_QUALITY"
done

# Convert treatment images
echo -e "\nConverting treatment images..."
find images/treatments -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) | while read file; do
    convert_image "$file" "$DEFAULT_QUALITY"
done

# Convert product images
echo -e "\nConverting product images..."
find images/products -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) | while read file; do
    convert_image "$file" "$DEFAULT_QUALITY"
done

# Convert gallery images
echo -e "\nConverting gallery images..."
find images/gallery -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) | while read file; do
    convert_image "$file" "$DEFAULT_QUALITY"
done

# Convert hero/background images with lower quality for file size
echo -e "\nConverting hero/background images..."
find images/hero -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) | while read file; do
    convert_responsive "$file"
done

# Convert all other images
echo -e "\nConverting remaining images..."
find images -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) \
    -not -path "images/logos/*" \
    -not -path "images/team/*" \
    -not -path "images/treatments/*" \
    -not -path "images/products/*" \
    -not -path "images/gallery/*" \
    -not -path "images/hero/*" | while read file; do
    convert_image "$file" "$DEFAULT_QUALITY"
done

# Summary
echo ""
echo "==================================="
echo "Conversion Complete!"
echo "==================================="
echo -e "Total processed: $TOTAL"
echo -e "${GREEN}Successful: $SUCCESS${NC}"
echo -e "${RED}Failed: $FAILED${NC}"
echo ""

# Generate size comparison report
echo "Generating size comparison report..."
{
    echo "# WebP Conversion Size Report"
    echo "Generated: $(date)"
    echo ""
    echo "| Original File | Original Size | WebP Size | Savings |"
    echo "|--------------|---------------|-----------|---------|"
    
    find images -name "*.webp" | while read webp_file; do
        # Find corresponding original
        base="${webp_file%.*}"
        original=""
        
        for ext in jpg jpeg png; do
            if [ -f "${base}.${ext}" ]; then
                original="${base}.${ext}"
                break
            fi
        done
        
        if [ -n "$original" ] && [ -f "$original" ]; then
            orig_size=$(stat -f%z "$original" 2>/dev/null || stat -c%s "$original" 2>/dev/null)
            webp_size=$(stat -f%z "$webp_file" 2>/dev/null || stat -c%s "$webp_file" 2>/dev/null)
            
            if [ -n "$orig_size" ] && [ -n "$webp_size" ] && [ "$orig_size" -gt 0 ]; then
                savings=$(( 100 - (webp_size * 100 / orig_size) ))
                echo "| $(basename "$original") | $(numfmt --to=iec-i --suffix=B "$orig_size" 2>/dev/null || echo "${orig_size}B") | $(numfmt --to=iec-i --suffix=B "$webp_size" 2>/dev/null || echo "${webp_size}B") | ${savings}% |"
            fi
        fi
    done
} > webp_conversion_report.md

echo "Report saved to: webp_conversion_report.md"