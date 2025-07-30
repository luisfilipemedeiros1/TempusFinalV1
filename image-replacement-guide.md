# Treatment Image Replacement Guide

## Overview
This guide shows exactly where to replace treatment images in the codebase with the new images provided.

## Image Replacements by Category

### 1. Facial Aesthetics | Detail Pages

#### Cheek Enhancement
- **Current Location**: `/page-treatments-overview.php` line 306
- **Current Image**: `https://i.ibb.co/bMH0FWWz/cheek-enhancement.webp`
- **Replace With**: `https://i.ibb.co/7NtfpGKw/cheek-enhancement-detail.webp`

#### Chin Filler
- **Current Location**: `/page-treatments-overview.php` line 323
- **Current Image**: `https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 9:16/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg`
- **Replace With**: `https://i.ibb.co/LXzn9gTw/chin-filler-detail.webp`

#### Jawline Filler
- **Current Location**: `/page-treatments-overview.php` line 340
- **Current Image**: `https://i.ibb.co/fzS3W36d/jawline-filler.webp`
- **Replace With**: `https://i.ibb.co/r2sHbwSg/jawline-filler-detail.webp`

### 2. Wrinkle Treatments | Overview Covers

#### Brow Lift
- **Current Location**: `/page-treatments-overview.php` line 434
- **Current Image**: `https://i.ibb.co/whvJhqXN/polynucleotide-eye.webp`
- **Replace With**: `https://i.ibb.co/KzjsZ0bn/brow-lift.webp`

#### Nefertiti Neck Lift
- **Current Location**: `/page-treatments-overview.php` line 451
- **Current Image**: `https://i.ibb.co/MkfK4wwr/8-points-lift.webp`
- **Replace With**: `https://i.ibb.co/35G6NJZ7/nefertitinecklift.webp`

### 3. Medical Aesthetics | Detail Pages

#### Fractional Laser
- **Current Location**: `/page-treatments-overview.php` line 715
- **Current Image**: `https://i.ibb.co/Y70w1cbx/fractional-laser.webp`
- **Replace With**: `https://i.ibb.co/RKRHHBW/fractional-laser-detail.webp`

#### Vascular Laser
- **Current Location**: `/page-treatments-overview.php` line 732
- **Current Image**: `https://i.ibb.co/zTXCw1PV/vein-treatment.webp`
- **Replace With**: `https://i.ibb.co/9HJJFN4J/vascular-laser-detail.webp`

### 4. Body Aesthetics | Overview Covers

#### Aqualyx Fat Dissolving
- **Current Location**: `/page-treatments-overview.php` line 800
- **Current Image**: `https://i.ibb.co/mCNmTJpy/injection-procedure.webp`
- **Replace With**: `https://i.ibb.co/KjgBfm6x/aqualyx-fat-dissolving.webp`

### 5. Body Aesthetics | Detail Pages

#### EMSculpt
- **Current Location**: `/page-treatments-overview.php` line 783
- **Current Image**: `https://i.ibb.co/yFrq9VdY/ems-body-contouring.webp`
- **Replace With**: `https://i.ibb.co/BV3PcczG/emsculpt-detail.webp`

#### Aqualyx Fat Dissolving (Detail)
- **Note**: This needs to be added as a separate detail image. The overview cover uses the image above.
- **New Image**: `https://i.ibb.co/fYGHQzS3/aqualyx-fat-dissolving-detail.webp`

#### Onda
- **Current Location**: `/page-treatments-overview.php` line 817
- **Current Image**: `https://i.ibb.co/N6px3yc8/onda-body.webp`
- **Replace With**: `https://i.ibb.co/8Lj4Hjyr/onda-detail.webp`

#### Velashape
- **Current Location**: `/page-treatments-overview.php` line 834
- **Current Image**: `https://i.ibb.co/vC5z6pdk/velashape.webp`
- **Replace With**: `https://i.ibb.co/Rwp8n0t/velashape-detail.webp`

#### Dermapen Body
- **Current Location**: `/page-treatments-overview.php` line 919
- **Current Image**: `https://i.ibb.co/1YptsShB/dermapen-body.webp`
- **Replace With**: `https://i.ibb.co/BHmnXCfY/dermapen-body-detail.webp`

### 6. Surgical Services & Minor Ops | Overview Covers

#### Mole Removal (General)
- **Current Location**: `/page-treatments-overview.php` line 1081 (face) and line 1098 (body)
- **Current Image**: `https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg`
- **Replace With**: `https://i.ibb.co/nMdWcTMR/mole-removal.webp`

#### Mole Removal Face (Specific)
- **Current Location**: `/page-treatments-overview.php` line 1081
- **Replace With**: `https://i.ibb.co/Qv5ncPSk/mole-removal-face.webp`

#### Skin Tag Removal
- **Current Location**: `/page-treatments-overview.php` line 1115
- **Current Image**: `https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg`
- **Replace With**: `https://i.ibb.co/6c0jM6sz/skin-tag-removal.webp`

#### Keloid Scar Removal
- **Current Location**: `/page-treatments-overview.php` line 1132
- **Current Image**: `https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg`
- **Replace With**: `https://i.ibb.co/TjtNKQW/keloid-scar-removal.webp`

### 7. Surgical Services & Minor Ops | Detail Pages

#### Skin Tag Removal (Detail)
- **New Image**: `https://i.ibb.co/TB96qWQm/skin-tag-removal-detail.webp`

#### Scar Removal (Detail)
- **New Image**: `https://i.ibb.co/Zz2K2R5B/scar-removal-detail.webp`

## Implementation Steps

1. Open `/page-treatments-overview.php`
2. Use the line numbers provided above to find each image URL
3. Replace the old URL with the new URL
4. Save the file
5. Update the theme version in `functions.php` to bust the cache
6. Commit and push changes

## Notes

- Some treatments currently share the same generic image - these will now have unique images
- The detail page images may need to be implemented differently if they're meant for individual treatment pages rather than the overview page
- Pages that "do not work" (FOTONA detail pages, Surgical Consultation, Split Earlobe Repair, Steroid Injection) may need separate investigation

## Additional Considerations

For individual treatment detail pages:
- These typically use WordPress featured images set in the admin panel
- You may need to update these through WordPress admin rather than in code
- Check `single-treatment.php` for how featured images are displayed