#!/bin/bash

# Download External Images Script for TempusFHFinal
# Downloads all external images to local directories

# Color codes
GREEN='\033[0;32m'
RED='\033[0;31m'
NC='\033[0m'

# Create necessary directories
echo "Creating directories..."
mkdir -p images/{hero,team,treatments,products,logos,gallery/before,gallery/after,conditions,clinic,badges,misc,technology,instagram,journey}

# Function to download with error handling
download_image() {
    local url="$1"
    local output="$2"
    
    if curl -s -L -o "$output" "$url"; then
        echo -e "${GREEN}✓ Downloaded: $output${NC}"
    else
        echo -e "${RED}✗ Failed: $url${NC}"
    fi
}

echo "==================================="
echo "Downloading Cloudinary Images"
echo "==================================="

# Treatment & Journey Images
download_image "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761823/DSCF1645_w7xsbk.jpg" "images/treatments/hifu-treatment.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743754471/laser-epilation-and-cosmetology-in-beauty-salon-2025-03-17-16-59-36-utc_k0nglx.jpg" "images/treatments/body-contouring.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743754271/getty-images-LH8AWrWHjuA-unsplash_dqjuha.jpg" "images/treatments/skin-boosters.jpg"

# Category Images
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_center,h_600,w_400/v1743754273/getty-images-36aasMPPoVE-unsplash_lwakd8.jpg" "images/treatments/facial-aesthetics-category.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_faces,h_600,w_400/v1743754471/laser-epilation-and-cosmetology-in-beauty-salon-2025-03-17-16-59-36-utc_k0nglx.jpg" "images/treatments/body-contouring-category.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_center,h_600,w_400/v1743754267/getty-images-cRJxe2xOUWg-unsplash_1_wzppep.jpg" "images/treatments/laser-energy-category.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_faces,h_600,w_400/v1743754269/getty-images-QlxmgYd2emI-unsplash_a01khu.jpg" "images/treatments/injectable-artistry-category.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_center,h_600,w_400/v1743754277/getty-images-xf9a3aoRAGg-unsplash_1_znku6m.jpg" "images/treatments/medical-dermatology-category.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_center,h_600,w_400/v1743754737/Screenshot_2025-04-04_at_9.18.35_AM_edlusm.png" "images/treatments/iv-nutrient-category.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_center,h_600,w_400/v1743755077/Screenshot_2025-04-04_at_9.24.26_AM_e5jpwl.png" "images/treatments/longevity-science-category.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/c_fill,g_center,h_600,w_400/v1743754902/Screenshot_2025-04-04_at_9.21.33_AM_j5nnfb.png" "images/treatments/surgical-expertise-category.png"

# Journey Process Images
download_image "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761798/DSCF1682_ebhg0a.jpg" "images/journey/discovery-vision.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743761742/DSCF1691_m8aari.jpg" "images/journey/holistic-insight.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743756299/DSCF1758_trieqm.jpg" "images/journey/harmonisation.jpg"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1743762642/DSCF1572_urh5uk.jpg" "images/journey/evolving-partnership.jpg"

# Instagram Gallery
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743761283/Screenshot_2025-04-04_at_11.06.19_AM_dlqjzj.png" "images/instagram/gallery-1.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743761281/Screenshot_2025-04-04_at_11.07.03_AM_oqitvn.png" "images/instagram/gallery-2.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743761281/Screenshot_2025-04-04_at_11.06.55_AM_t3b1wz.png" "images/instagram/gallery-3.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743761281/Screenshot_2025-04-04_at_11.06.05_AM_akgzdv.png" "images/instagram/gallery-4.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743761281/Screenshot_2025-04-04_at_11.06.49_AM_brrbvr.png" "images/instagram/gallery-5.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743761280/Screenshot_2025-04-04_at_11.06.42_AM_sxn6iu.png" "images/instagram/gallery-6.png"

# Before & After Images
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743752535/Before2_sjjugc.png" "images/gallery/before/lips-before.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743752532/After2_lsdrmw.png" "images/gallery/after/lips-after.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743752535/Before1_aklops.png" "images/gallery/before/wrinkle-before.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743752533/After1_cnlq0m.png" "images/gallery/after/wrinkle-after.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743752532/Before3_w1q592.png" "images/gallery/before/jawline-before.png"
download_image "https://res.cloudinary.com/drtatej7i/image/upload/v1743752531/After3_rghajk.png" "images/gallery/after/jawline-after.png"

echo ""
echo "==================================="
echo "Downloading NitroCDN Product Images"
echo "==================================="

# Product Images
download_image "https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/intelligent-face-and-body-cream-purple-v.3-300x300.jpg" "images/products/intelligent-face-body-cream.jpg"
download_image "https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/Zeitschild_-Anti-Wrinkle-Serum-scaled-300x300.jpg" "images/products/anti-wrinkle-serum.jpg"
download_image "https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/instant-eye-revive-open-purple-v.3-scaled-300x300.jpg" "images/products/instant-eye-revive.jpg"
download_image "https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/08_05_2022_Injectual_186-edited-v.3-300x300.jpg" "images/products/correcting-spf-50.jpg"
download_image "https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/Zeitschild-Neck-and-Neckline-Firming-scaled-300x300.jpg" "images/products/firming-neck-creme.jpg"

echo ""
echo "==================================="
echo "Downloading External Domain Images"
echo "==================================="

# External Images
download_image "https://www.arrowpestcontrol.com/wp-content/uploads/2021/03/Google-Reviews-Logo-732x500.jpg" "images/badges/google-reviews-logo.jpg"

echo ""
echo "==================================="
echo "Download Complete!"
echo "==================================="
echo ""
echo "Next steps:"
echo "1. Run ./convert_to_webp.sh to convert all images to WebP format"
echo "2. Update theme files with new local image paths"