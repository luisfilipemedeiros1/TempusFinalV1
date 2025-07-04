#!/bin/bash

# Download ALL WordPress Images Script for TempusFHFinal
# This script downloads ALL images from tempusbelgravia.co.uk that are already hosted there

# Color codes
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
NC='\033[0m'

# Base URL
BASE_URL="https://tempusbelgravia.co.uk"

# Function to download with error handling
download_image() {
    local url="$1"
    local output="$2"
    
    # Create directory if it doesn't exist
    mkdir -p "$(dirname "$output")"
    
    if curl -s -L -o "$output" "$url"; then
        echo -e "${GREEN}✓ Downloaded: $output${NC}"
    else
        echo -e "${RED}✗ Failed: $url${NC}"
    fi
}

echo "==================================="
echo "Downloading ALL WordPress Images"
echo "==================================="
echo ""

# Create all necessary directories
echo "Creating directory structure..."
mkdir -p images/{hero,team,treatments/{facial,body,injectable,surgical,wellness},products,logos,gallery/{before,after}}
mkdir -p images/{conditions,clinic,badges,misc,technology,instagram,journey,banners,wellness}

# HERO & BACKGROUND
echo -e "\n${YELLOW}Downloading Hero & Background Images...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/11/Relax-restore.jpeg.webp" "images/hero/relax-restore.webp"

# TECHNOLOGY & PARTNER LOGOS
echo -e "\n${YELLOW}Downloading Technology & Partner Logos...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/aquagold.png.webp" "images/logos/aquagold.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/azzalure.png.webp" "images/logos/azzalure.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/cryopen.png.webp" "images/logos/cryopen.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/dermapen.png.webp" "images/logos/dermapen.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/emsculpt.png.webp" "images/logos/emsculpt.webp"
download_image "${BASE_URL}/wp-content/uploads/2022/10/focus.png" "images/logos/focus.png"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/fotona-06-1.png.webp" "images/logos/fotona.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/harmony-xl-pro.png.webp" "images/logos/harmony-xl-pro.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/hydrafacial.png.webp" "images/logos/hydrafacial.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/juvederm.png.webp" "images/logos/juvederm.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/morpheus-8.png.webp" "images/logos/morpheus-8.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/obagi.png.webp" "images/logos/obagi.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/profhilo.png.webp" "images/logos/profhilo.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/radiesse.png.webp" "images/logos/radiesse.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/restylane.png.webp" "images/logos/restylane.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/revolax.png.webp" "images/logos/revolax.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/sculptra.png.webp" "images/logos/sculptra.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/skinpen.png.webp" "images/logos/skinpen.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/teoxane.png.webp" "images/logos/teoxane.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/ultherapy.png.webp" "images/logos/ultherapy.webp"

# TEAM MEMBER PHOTOS
echo -e "\n${YELLOW}Downloading Team Member Photos...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Dr.-Veerle-Rotsaert-scaled.jpg.webp" "images/team/dr-veerle-rotsaert.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Dr.-Nadine-Hachach-Haram-scaled.jpg.webp" "images/team/dr-nadine-haram.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Dr.-Souphi-Samizadeh--scaled.jpg.webp" "images/team/dr-souphiyeh-samizadeh.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Dr.-Shideh-Pouria-scaled.jpg.webp" "images/team/dr-shideh-pouria.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Gillian-Jones-scaled.jpg.webp" "images/team/gillian-jones.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Kerry-Moore-scaled.jpg.webp" "images/team/kerry-moore.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Lenka-Johnson-scaled.jpg.webp" "images/team/lenka-johnson.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Amy.jpg.webp" "images/team/amy.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Barbara.jpg.webp" "images/team/barbara.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/2._CW.jpg.webp" "images/team/cw.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/1._BM.jpg.webp" "images/team/bm.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Aneta_-5.jpg.webp" "images/team/aneta.webp"
download_image "${BASE_URL}/wp-content/uploads/2023/06/hoda.jpg" "images/team/hoda.jpg"
download_image "${BASE_URL}/wp-content/uploads/2023/06/amy.jpg" "images/team/amy-2.jpg"
download_image "${BASE_URL}/wp-content/uploads/2023/06/adriana-1.jpg" "images/team/adriana.jpg"
download_image "${BASE_URL}/wp-content/uploads/2023/06/aneta-1.jpg" "images/team/aneta-2.jpg"

# MAIN TREATMENT IMAGES (Homepage featured)
echo -e "\n${YELLOW}Downloading Main Treatment Images...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Silhouette-Soft-scaled-1.jpeg.webp" "images/treatments/rf-microneedling.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/11/Lip-Enhancement-scaled-1.jpeg.webp" "images/treatments/lip-enhancement.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp" "images/treatments/exosomes-facial.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/09/aquagold.jpeg.webp" "images/treatments/aquagold-fine-touch.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/New-Project-2.png.webp" "images/treatments/anti-wrinkle-areas.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Nutrition-2.jpg.webp" "images/treatments/iv-nutrition.webp"

# ALL OTHER TREATMENT IMAGES
echo -e "\n${YELLOW}Downloading All Other Treatment Images...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Anti-Wrinkle-Injection-scaled-1.jpeg.webp" "images/treatments/anti-wrinkle-injection.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Bioidentical-Hormones-scaled-1.jpeg.webp" "images/treatments/bioidentical-hormones.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Chemical-Peels-scaled-1.jpeg.webp" "images/treatments/chemical-peels.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Cryopen-scaled-1.jpeg.webp" "images/treatments/cryopen.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Dermaplaning-scaled-1.jpeg.webp" "images/treatments/dermaplaning.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Dermal-Filler-scaled-1.jpeg.webp" "images/treatments/dermal-filler.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Emsculpt-Neo-scaled-1.jpeg.webp" "images/treatments/emsculpt-neo.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Fat-Dissolving-scaled-1.jpeg.webp" "images/treatments/fat-dissolving.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Focus-Dual-HIFU-scaled-1.jpeg.webp" "images/treatments/focus-dual-hifu.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Functional-Medicine-scaled-1.jpeg.webp" "images/treatments/functional-medicine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Health-Screen-scaled-1.jpeg.webp" "images/treatments/health-screen.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Heavy-Metal-Testing-scaled-1.jpeg.webp" "images/treatments/heavy-metal-testing.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/IV-Nutritional-Therapy-scaled-1.jpeg.webp" "images/treatments/iv-nutritional-therapy.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/IPL-scaled-1.jpeg.webp" "images/treatments/ipl.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Laser-Hair-Removal-scaled-1.jpeg.webp" "images/treatments/laser-hair-removal.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Laser-Pigmentation-Removal-scaled-1.jpeg.webp" "images/treatments/laser-pigmentation-removal.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Laser-Tattoo-Removal-scaled-1.jpeg.webp" "images/treatments/laser-tattoo-removal.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Micro-Needling-scaled-1.jpeg.webp" "images/treatments/micro-needling.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Morpheus8-scaled-1.jpeg.webp" "images/treatments/morpheus8.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Mychway-Cavitation-Machine-scaled-1.jpeg.webp" "images/treatments/mychway-cavitation.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Nutritional-Support-scaled-1.jpeg.webp" "images/treatments/nutritional-support.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Organic-Acid-Testing-scaled-1.jpeg.webp" "images/treatments/organic-acid-testing.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/PRP-scaled-1.jpeg.webp" "images/treatments/prp.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Pixel-Laser-Resurfacing-scaled-1.jpeg.webp" "images/treatments/pixel-laser-resurfacing.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Profhilo-scaled-1.jpeg.webp" "images/treatments/profhilo.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Sculptural-Face-Lift-scaled-1.jpeg.webp" "images/treatments/sculptural-face-lift.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Sculptra-scaled-1.jpeg.webp" "images/treatments/sculptra.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Semaglutide-scaled-1.jpeg.webp" "images/treatments/semaglutide.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Skin-Tightening-scaled-1.jpeg.webp" "images/treatments/skin-tightening.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Snoring-Treatment-scaled-1.jpeg.webp" "images/treatments/snoring-treatment.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Stool-Analysis-scaled-1.jpeg.webp" "images/treatments/stool-analysis.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Thread-Lifts-scaled-1.jpeg.webp" "images/treatments/thread-lifts.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Ultherapy-scaled-1.jpeg.webp" "images/treatments/ultherapy.webp"

# SURGICAL TREATMENT IMAGES
echo -e "\n${YELLOW}Downloading Surgical Treatment Images...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/09/Brazilian-Butt-Lift.jpeg.webp" "images/treatments/surgical/brazilian-butt-lift.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/09/FaceLift-scaled.jpeg.webp" "images/treatments/surgical/facelift.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/09/Neck-lift.jpeg.webp" "images/treatments/surgical/neck-lift.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Abdominoplasty.jpg.webp" "images/treatments/surgical/abdominoplasty.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Arm-Lift.jpg.webp" "images/treatments/surgical/arm-lift.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Breast-Aug.jpg.webp" "images/treatments/surgical/breast-augmentation.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Breast-Reduction.jpg.webp" "images/treatments/surgical/breast-reduction.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Fat-Transfer.jpg.webp" "images/treatments/surgical/fat-transfer.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Gynaecomastia.jpg.webp" "images/treatments/surgical/gynaecomastia.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Laser-Vaginal-REj.jpg.webp" "images/treatments/surgical/laser-vaginal-rejuvenation.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Liposuction.jpg.webp" "images/treatments/surgical/liposuction.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Non-surgical-blepharoplast.jpg.webp" "images/treatments/surgical/non-surgical-blepharoplasty.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Rhinoplasty.jpg.webp" "images/treatments/surgical/rhinoplasty.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Thigh-lift.jpg.webp" "images/treatments/surgical/thigh-lift.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Upper-Lower-Blepharoplasty.jpg.webp" "images/treatments/surgical/upper-lower-blepharoplasty.webp"

# TECHNOLOGY/EQUIPMENT IMAGES
echo -e "\n${YELLOW}Downloading Technology/Equipment Images...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Morpheus8Machine-scaled.jpg.webp" "images/technology/morpheus8-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Emsculpt-Neo-Machine-scaled.jpg.webp" "images/technology/emsculpt-neo-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Focus-Dual-Machine-scaled.jpg.webp" "images/technology/focus-dual-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/HarmonyXL-Pro-Machine-scaled.jpg.webp" "images/technology/harmony-xl-pro-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Mychway-Machine-scaled.jpg.webp" "images/technology/mychway-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Pixel-Machine-scaled.jpg.webp" "images/technology/pixel-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/SkinPen-Machine-scaled.jpg.webp" "images/technology/skinpen-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Ultherapy-Machine-scaled.jpg.webp" "images/technology/ultherapy-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/08/Fotona4DMachine-scaled.jpg.webp" "images/technology/fotona4d-machine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Dermapen-Machine.jpg.webp" "images/technology/dermapen-machine.webp"

# CONDITION IMAGES
echo -e "\n${YELLOW}Downloading Condition Images...${NC}"
# Body Conditions
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Gynecomastia.jpg.webp" "images/conditions/gynecomastia.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Loose-Skin-and-stretch-marks.jpg.webp" "images/conditions/loose-skin-stretch-marks.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Stubborn-Fat.jpg.webp" "images/conditions/stubborn-fat.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Large-Pores.jpg.webp" "images/conditions/large-pores.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Sweating.jpg.webp" "images/conditions/sweating.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Tattoo-Removal.jpg.webp" "images/conditions/tattoo-removal.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Hair-Loss.jpg.webp" "images/conditions/hair-loss.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Knee-Treatment.jpg.webp" "images/conditions/knee-treatment.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Laser-Hair-Removal.jpg.webp" "images/conditions/laser-hair-removal-condition.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Snoring.jpg.webp" "images/conditions/snoring.webp"

# Facial Conditions
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Uneven-Skin-Tone.jpg.webp" "images/conditions/uneven-skin-tone.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Under-Eye-Concerns.jpg.webp" "images/conditions/under-eye-concerns.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Tired-Eyes.jpg.webp" "images/conditions/tired-eyes.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Sun-Damage.jpg.webp" "images/conditions/sun-damage.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Scarring.jpg.webp" "images/conditions/scarring.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Poor-Skin-Quality.jpg.webp" "images/conditions/poor-skin-quality.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Poor-Jaw-Definition-1.jpg.webp" "images/conditions/poor-jaw-definition.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Pigmentation.jpg.webp" "images/conditions/pigmentation.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Neck-Concerns.jpg.webp" "images/conditions/neck-concerns.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Loss-of-Volume.jpg.webp" "images/conditions/loss-of-volume.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Lines-and-wrinkles.jpg.webp" "images/conditions/lines-and-wrinkles.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Lip-Concerns.jpg.webp" "images/conditions/lip-concerns.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Facial-Asymmetry.jpg.webp" "images/conditions/facial-asymmetry.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Dull-Dehydrated-Skin.jpg.webp" "images/conditions/dull-dehydrated-skin.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Blemish-and-Breakouts.jpg.webp" "images/conditions/blemish-and-breakouts.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Age-Spots.jpg.webp" "images/conditions/age-spots.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Acne.jpg.webp" "images/conditions/acne.webp"

# WELLNESS & INFUSION IMAGES
echo -e "\n${YELLOW}Downloading Wellness & Infusion Images...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Anti-aging.jpg.webp" "images/wellness/anti-aging.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Energy-Boost.jpg.webp" "images/wellness/energy-boost.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Exercise-Recovery.jpg.webp" "images/wellness/exercise-recovery.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Fat-Loss.jpg.webp" "images/wellness/fat-loss.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Immunity-Boost.jpg.webp" "images/wellness/immunity-boost.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Regenerative-Medicine.jpg.webp" "images/wellness/regenerative-medicine.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Sleep-Stress.jpg.webp" "images/wellness/sleep-stress.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Vitamin-Replacement.jpg.webp" "images/wellness/vitamin-replacement.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2023/01/Wellness-Concerns.jpg.webp" "images/wellness/wellness-concerns.webp"

# CLINIC INTERIOR & AMBIANCE
echo -e "\n${YELLOW}Downloading Clinic Interior Images...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Clinic-scaled.jpeg.webp" "images/clinic/clinic-interior.webp"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2022/10/Reception-scaled.jpeg.webp" "images/clinic/reception.webp"

# BADGES & CERTIFICATIONS
echo -e "\n${YELLOW}Downloading Badges & Certifications...${NC}"
download_image "${BASE_URL}/wp-content/webp-express/webp-images/uploads/2024/07/1-CQC-Regulated-by-WHITE-135px.jpg.webp" "images/badges/cqc-regulated.webp"
download_image "${BASE_URL}/wp-content/uploads/2023/04/google-reviews-2.png" "images/badges/google-reviews.png"
download_image "${BASE_URL}/wp-content/uploads/2022/09/verified.png" "images/badges/verified.png"

# VIDEO CONTENT
echo -e "\n${YELLOW}Downloading Video Content...${NC}"
mkdir -p videos
download_image "${BASE_URL}/wp-content/uploads/2022/11/3.-Final-Promotional-Video-Draft-2-Tempus-Belgravia-.mp4" "videos/hero-video.mp4"

echo ""
echo "==================================="
echo "WordPress Images Download Complete!"
echo "==================================="
echo ""
echo "Note: Some images are already in WebP format, while others (JPG/PNG) need conversion."
echo "Next step: Run ./convert_to_webp.sh to ensure all images are in WebP format"