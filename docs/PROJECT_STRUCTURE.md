# PROJECT_STRUCTURE.md - TempusFHFinal File Structure Documentation

## Directory Structure Overview

```
TempusFHFinal/
├── .claude/                    # Claude AI configuration
├── .git/                       # Git version control
├── css/                        # Stylesheets
├── fonts/                      # Web fonts
├── images/                     # Theme images
├── includes/                   # PHP includes
├── js/                         # JavaScript files
├── woocommerce/               # WooCommerce template overrides
├── xml/                        # Import/export data
├── [PHP Templates]            # Various PHP template files
├── CLAUDE.md                  # Project configuration (this doc)
├── PROJECT_STRUCTURE.md       # File structure documentation
├── README.md                  # Basic setup instructions
├── screenshot.png             # Theme screenshot
├── style.css                  # Main theme stylesheet
└── functions.php              # Theme functions and configuration
```

## Detailed File Descriptions

### 📁 Root Directory Files

#### Core Theme Files
- **`style.css`** - Main theme stylesheet with theme header information
- **`functions.php`** - Theme setup, asset enqueueing, custom post types, and core functionality
- **`header.php`** - Theme header template with navigation
- **`footer.php`** - Theme footer template
- **`screenshot.png`** - Theme preview image for WordPress admin

#### Homepage Template
- **`home.php`** - Main homepage template featuring:
  - Hero section with video background
  - Treatment cards with WhatsApp CTAs
  - Before/after gallery
  - Team showcase
  - Testimonials
  - Zoho contact form integration
  - Newsletter signup

#### Page Templates
- **`page-memberships.php`** - Original membership page template
- **`FHMemberships.php`** - Updated membership page with pricing tables
- **`page-treatments-overview.php`** - All treatments overview page
- **`page-medium-blog.php`** - Blog page with medium-style layout

#### Post Type Templates
- **`blogs.php`** - Blog listing page
- **`press.php`** - Press releases and media coverage
- **`search.php`** - Search results template
- **`team.php`** - Team members listing (original)
- **`new-team.php`** - Updated team members listing
- **`technologies.php`** - Technology showcase page

#### Single Post Templates
- **`single-concern.php`** - Individual concern detail page
- **`single-condition.php`** - Individual condition detail page
- **`single-post.php`** - Standard blog post template
- **`single-post-press.php`** - Press release post template
- **`single-teams.php`** - Individual team member profile
- **`single-treatment.php`** - Individual treatment detail page

#### Treatment Category Templates
- **`treatments.php`** - General treatments listing
- **`body-contouring.php`** - Body contouring treatments
- **`face-asthetic-treatment.php`** - Facial aesthetic treatments
- **`medical-aesthetics.php`** - Medical aesthetics services
- **`laser-treatment.php`** - Laser treatment services
- **`infusions.php`** - IV infusion services
- **`dermatology.php`** - Dermatology services
- **`cosmetic-dermatology.php`** - Cosmetic dermatology
- **`surgical-service.php`** - Surgical services (singular)
- **`surgical-services.php`** - Surgical services listing
- **`nutrition-medicine.php`** - Nutrition and functional medicine

#### Service Pages
- **`certified-package.php`** - Certified treatment packages
- **`concern.php`** - Concerns listing page
- **`condition.php`** - Individual condition template
- **`conditions.php`** - Conditions listing page
- **`gpServices.php`** - GP services page

#### Taxonomy Templates
Team Categories:
- **`taxonomy-team_category-doctors.php`** - Doctors listing
- **`taxonomy-team_category-patient-liaison-team.php`** - Patient liaison team
- **`taxonomy-team_category-specialist-practitioners.php`** - Specialist practitioners

Treatment Categories:
- **`taxonomy-treatment_category-body-treatments.php`** - Body treatments category
- **`taxonomy-treatment_category-dermatology.php`** - Dermatology category
- **`taxonomy-treatment_category-facial-aesthetics.php`** - Facial aesthetics category
- **`taxonomy-treatment_category-iv-infusions.php`** - IV infusions category
- **`taxonomy-treatment_category-laser-treatments.php`** - Laser treatments category
- **`taxonomy-treatment_category-medical-aesthetics.php`** - Medical aesthetics category
- **`taxonomy-treatment_category-nutrition-and-functional-medicine.php`** - Nutrition category
- **`taxonomy-treatment_category-surgical-services.php`** - Surgical services category

### 📁 CSS Directory (`/css/`)

- **`header-footer.css`** - Global header and footer styles
- **`home.css`** - Homepage-specific styles including hero, treatments grid, testimonials
- **`blog.css`** - Blog and article styling
- **`press.css`** - Press page specific styles
- **`membership.css`** - Original membership page styles
- **`membership-v2.css`** - Updated membership page styles with pricing tables
- **`treatment-pages.css`** - Treatment page layouts and components
- **`taxonomy.css`** - Category and taxonomy page styles
- **`taxonomy-fix.css`** - Fixes for taxonomy page issues

### 📁 JavaScript Directory (`/js/`)

- **`custom.js`** - Global custom JavaScript functionality
- **`header-navigation.js`** - Header menu and navigation behavior
- **`init-header-footer.js`** - Header/footer initialization scripts
- **`home-custom.js`** - Homepage-specific scripts (carousels, animations)
- **`membership.js`** - Original membership page functionality
- **`membership-v2.js`** - Updated membership page scripts
- **`treatment-pages.js`** - Treatment page interactive features
- **`taxonomy-fix.js`** - JavaScript fixes for taxonomy pages
- **`fix-body-padding.js`** - Body padding adjustment script
- **`remove-body-padding.js`** - Body padding removal script
- **`jquery.counterup.min.js`** - Number counter animation library

### 📁 Fonts Directory (`/fonts/`)

Web font files in multiple formats (.eot, .woff, .woff2, .svg):
- **Myriad Pro** - Various weights
- **Neue Montreal** - Light, Regular, Medium, Bold
- **Open Sans** - Light, Regular, Medium, Bold  
- **Outfit** - Thin through Bold weights (100-700)
- **Roxborough CF** - Heavy weight display font

### 📁 Images Directory (`/images/`)

- **`logo.png`** - Site logo image

### 📁 Includes Directory (`/includes/`)

- **`class-custom-walker.php`** - Custom WordPress navigation menu walker class

### 📁 WooCommerce Directory (`/woocommerce/`)

Complete WooCommerce template override structure:
- **`/cart/`** - Shopping cart templates
- **`/checkout/`** - Checkout process templates
- **`/emails/`** - Email notification templates (HTML and plain text)
- **`/global/`** - Global WooCommerce components
- **`/loop/`** - Product loop templates
- **`/myaccount/`** - Customer account pages
- **`/notices/`** - Notice and message templates
- **`/order/`** - Order detail templates
- **`/single-product/`** - Single product page components
- Various root templates for archives, content, forms

### 📁 XML Directory (`/xml/`)

- **`genesis.xml`** - Genesis Framework sample content for import

### 📁 Hidden Directories

- **`.claude/`** - Contains `settings.local.json` with Claude AI permissions
- **`.git/`** - Git version control system files

## File Naming Conventions

1. **PHP Templates**: Descriptive names using hyphens (e.g., `page-memberships.php`)
2. **CSS Files**: Match their corresponding template names (e.g., `membership.css`)
3. **JS Files**: Match functionality or page name (e.g., `membership.js`)
4. **Taxonomy Templates**: Follow pattern `taxonomy-{taxonomy_name}-{term}.php`
5. **Single Templates**: Follow pattern `single-{post_type}.php`

## Key Integration Points

### Form Integration
- **Zoho Forms**: Integrated in `home.php` contact section
- Form ID: `2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4`

### External Resources
- **CDN Libraries**: Font Awesome, Slick Carousel, Google Fonts
- **WhatsApp API**: Direct links for treatment inquiries
- **Google Maps**: Embedded location map

### Custom Post Types
1. **Treatments** - Medical and aesthetic treatments
2. **Teams** - Staff members and practitioners
3. **Conditions** - Medical conditions treated
4. **Concerns** - Patient concerns addressed

## Development Notes

- No build process - files are edited directly
- Version control through Git
- Cache busting via `CHILD_THEME_VERSION` constant
- Mobile-first responsive design approach
- Heavy use of CSS custom properties for theming
- jQuery-based JavaScript functionality
- Genesis Framework hooks and filters utilized