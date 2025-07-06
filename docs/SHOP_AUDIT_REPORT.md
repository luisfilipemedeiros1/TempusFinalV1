# Shop Audit Report - Tempus Belgravia

## Issues Identified

### 1. **Missing WooCommerce Layout Wrapper**
- The theme has WooCommerce support but may be missing proper content wrappers
- This can cause layout issues with the shop pages

### 2. **Styling Conflicts**
- Multiple WooCommerce styles scattered throughout style.css (lines 1510-4100+)
- Inconsistent styling between shop pages and the rest of the site
- Font family conflicts (using old fonts like 'neuemontreal' which may not be loaded)

### 3. **Product Display Issues**
- Product grid layout may not be properly responsive
- Missing or broken product category display styling
- Potential issues with product loop layout

### 4. **Cart/Checkout Flow**
- Custom quantity buttons implementation in footer (should be in proper JS file)
- Coupon form repositioning may cause layout issues
- Cart table styling needs review

### 5. **Navigation Integration**
- Shop dropdown menu items in header need verification
- Product categories display before shop loop needs styling

## Action Plan

### Phase 1: Create Dedicated WooCommerce Styling
1. Create a new `woocommerce.css` file for all shop-related styles
2. Consolidate scattered WooCommerce styles from style.css
3. Ensure proper responsive design

### Phase 2: Fix Layout Issues
1. Add proper WooCommerce content wrappers
2. Ensure consistent container widths
3. Fix product grid responsiveness

### Phase 3: Improve JavaScript Implementation
1. Move quantity button JS from footer to proper file
2. Add proper cart update functionality
3. Ensure AJAX cart updates work correctly

### Phase 4: Enhance Product Display
1. Fix product category display styling
2. Improve product card design
3. Ensure consistent typography

### Phase 5: Optimize Performance
1. Remove duplicate styles
2. Minimize CSS/JS for shop pages
3. Ensure proper loading of assets

## Files to Modify
1. `/css/woocommerce.css` (create new)
2. `/functions.php` (update WooCommerce hooks)
3. `/js/woocommerce.js` (create new)
4. `/style.css` (clean up scattered styles)
5. `/woocommerce/` templates (review and update as needed)