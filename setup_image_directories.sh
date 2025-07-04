#!/bin/bash

# Setup Image Directories for TempusFHFinal WebP Conversion
# This script creates the directory structure for organizing converted images

echo "Creating image directory structure..."

# Base directory
BASE_DIR="images"

# Create main directory
mkdir -p "$BASE_DIR"

# Create subdirectories
mkdir -p "$BASE_DIR/hero"           # Hero and background images
mkdir -p "$BASE_DIR/team"           # Team member photos
mkdir -p "$BASE_DIR/treatments"     # Treatment procedure images
mkdir -p "$BASE_DIR/products"       # Product images
mkdir -p "$BASE_DIR/logos"          # Partner and technology logos
mkdir -p "$BASE_DIR/gallery"        # Before/after images
mkdir -p "$BASE_DIR/gallery/before" # Before images
mkdir -p "$BASE_DIR/gallery/after"  # After images
mkdir -p "$BASE_DIR/conditions"     # Medical conditions
mkdir -p "$BASE_DIR/clinic"         # Clinic interior/ambiance
mkdir -p "$BASE_DIR/badges"         # Certifications and badges
mkdir -p "$BASE_DIR/misc"           # Miscellaneous images
mkdir -p "$BASE_DIR/technology"     # Technology/equipment images
mkdir -p "$BASE_DIR/instagram"      # Instagram gallery images
mkdir -p "$BASE_DIR/journey"        # Customer journey images

# Create subdirectories for treatments
mkdir -p "$BASE_DIR/treatments/facial"
mkdir -p "$BASE_DIR/treatments/body"
mkdir -p "$BASE_DIR/treatments/injectable"
mkdir -p "$BASE_DIR/treatments/surgical"
mkdir -p "$BASE_DIR/treatments/wellness"

# Create subdirectories for team
mkdir -p "$BASE_DIR/team/doctors"
mkdir -p "$BASE_DIR/team/specialists"
mkdir -p "$BASE_DIR/team/support"

echo "Directory structure created successfully!"
echo ""
echo "Directory tree:"
tree "$BASE_DIR" -d

echo ""
echo "Next steps:"
echo "1. Run download scripts to fetch external images"
echo "2. Run conversion script to convert to WebP"
echo "3. Update theme files with new image paths"