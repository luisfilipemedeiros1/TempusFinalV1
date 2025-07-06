# SITEMAP.md - TempusFHFinal Website Structure

## Website Hierarchy and Page Templates

### 🏠 Homepage
- **Template**: `home.php` (New Home Template Integrated)
- **URL**: `/`
- **Features**: Hero video, treatment showcase, testimonials, contact form

### 📋 Main Pages

#### Treatments & Services
- **All Treatments Overview**
  - Template: `page-treatments-overview.php`
  - URL: `/treatments-overview/`
  
- **Treatment Categories**:
  1. **Facial Aesthetics**
     - Template: `face-asthetic-treatment.php`
     - Archive: `taxonomy-treatment_category-facial-aesthetics.php`
     - URL: `/treatment-category/facial-aesthetics/`
  
  2. **Body Treatments**
     - Template: `body-contouring.php`
     - Archive: `taxonomy-treatment_category-body-treatments.php`
     - URL: `/treatment-category/body-treatments/`
  
  3. **Medical Aesthetics**
     - Template: `medical-aesthetics.php`
     - Archive: `taxonomy-treatment_category-medical-aesthetics.php`
     - URL: `/treatment-category/medical-aesthetics/`
  
  4. **Laser Treatments**
     - Template: `laser-treatment.php`
     - Archive: `taxonomy-treatment_category-laser-treatments.php`
     - URL: `/treatment-category/laser-treatments/`
  
  5. **IV Infusions**
     - Template: `infusions.php`
     - Archive: `taxonomy-treatment_category-iv-infusions.php`
     - URL: `/treatment-category/iv-infusions/`
  
  6. **Dermatology**
     - Template: `dermatology.php`
     - Archive: `taxonomy-treatment_category-dermatology.php`
     - URL: `/treatment-category/dermatology/`
     - Sub-page: `cosmetic-dermatology.php`
  
  7. **Surgical Services**
     - Templates: `surgical-service.php`, `surgical-services.php`
     - Archive: `taxonomy-treatment_category-surgical-services.php`
     - URL: `/treatment-category/surgical-services/`
  
  8. **Nutrition & Functional Medicine**
     - Template: `nutrition-medicine.php`
     - Archive: `taxonomy-treatment_category-nutrition-and-functional-medicine.php`
     - URL: `/treatment-category/nutrition-and-functional-medicine/`

- **Individual Treatment Pages**
  - Template: `single-treatment.php`
  - URL Pattern: `/treatment/{treatment-name}/`

#### Team
- **Team Overview**
  - Templates: `team.php` (original), `new-team.php` (updated)
  - URL: `/team/`

- **Team Categories**:
  1. **Doctors**
     - Archive: `taxonomy-team_category-doctors.php`
     - URL: `/team-category/doctors/`
  
  2. **Specialist Practitioners**
     - Archive: `taxonomy-team_category-specialist-practitioners.php`
     - URL: `/team-category/specialist-practitioners/`
  
  3. **Patient Liaison Team**
     - Archive: `taxonomy-team_category-patient-liaison-team.php`
     - URL: `/team-category/patient-liaison-team/`

- **Individual Team Member Pages**
  - Template: `single-teams.php`
  - URL Pattern: `/team/{member-name}/`

#### Conditions & Concerns
- **Conditions Overview**
  - Template: `conditions.php`
  - URL: `/conditions/`
  - Individual: `single-condition.php`
  - URL Pattern: `/condition/{condition-name}/`

- **Concerns**
  - Template: `concern.php`
  - Individual: `single-concern.php`
  - URL Pattern: `/concern/{concern-name}/`

#### Memberships
- **Membership Plans**
  - Templates: `page-memberships.php` (v1), `FHMemberships.php` (v2)
  - URL: `/memberships/`

#### Content Pages
- **Blog**
  - Template: `blogs.php`
  - Alternative: `page-medium-blog.php` (Medium Journal style)
  - Single Post: `single-post.php`
  - URL: `/blog/`

- **Press & Media**
  - Template: `press.php`
  - Single Press: `single-post-press.php`
  - URL: `/press/`

#### Special Services
- **GP Services**
  - Template: `gpServices.php`
  - URL: `/gp-services/`

- **Technologies**
  - Template: `technologies.php`
  - URL: `/technologies/`

- **Certified Packages**
  - Template: `certified-package.php`
  - URL: `/certified-packages/`

#### Utility Pages
- **Search Results**
  - Template: `search.php`
  - URL: `/search/`

### 🗂️ Post Types Structure

#### Custom Post Types:
1. **Treatments** (`treatment`)
   - Archive: `/treatments/`
   - Single: `/treatment/{name}/`
   - Categories: 8 main categories

2. **Team Members** (`teams`)
   - Archive: `/team/`
   - Single: `/team/{name}/`
   - Categories: 3 team types

3. **Conditions** (`condition`)
   - Archive: `/conditions/`
   - Single: `/condition/{name}/`

4. **Concerns** (`concern`)
   - Archive: `/concerns/`
   - Single: `/concern/{name}/`

5. **Blog Posts** (standard WordPress)
   - Archive: `/blog/`
   - Single: `/blog/{post-name}/`

6. **Press Posts**
   - Archive: `/press/`
   - Single: `/press/{press-name}/`

### 🛒 WooCommerce Pages
- Shop: `/shop/`
- Product Categories: `/product-category/{category}/`
- Single Product: `/product/{product-name}/`
- Cart: `/cart/`
- Checkout: `/checkout/`
- My Account: `/my-account/`

### 📱 Responsive Design
All pages are mobile-responsive with specific breakpoints:
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

### 🔗 External Links
- WhatsApp CTAs: `https://wa.me/447538037973`
- Instagram: `@tempusbelgravialondon`
- Google Maps: Clinic location embed

### 🔍 SEO Structure
- Clean URLs with descriptive slugs
- Hierarchical structure for treatments and team
- Individual pages for conditions and concerns
- Blog and press sections for content marketing

### 📊 Page Template Usage Summary
- **27** custom page templates
- **11** taxonomy archive templates
- **6** single post type templates
- **3** core theme files (header, footer, functions)
- **Extensive WooCommerce integration**