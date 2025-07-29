# Lovable.dev Implementation Guide for Tempus Belgravia

## Project Overview
This guide provides step-by-step instructions for implementing the Tempus Belgravia website using Lovable.dev with the provided markdown files.

## File Structure
```
lovable-pages/
├── homepage.md          # Main landing page
├── treatments-overview.md # All treatments page
├── about-us.md         # About the clinic
├── memberships.md      # Membership tiers
├── contact.md          # Contact information
├── blog.md            # Blog/news section
├── site-structure.md   # Navigation & architecture
└── implementation-guide.md # This file
```

## Color Palette
```css
--primary: #AF8F5A;        /* Gold */
--accent-deep: #004D40;    /* Deep Teal */
--accent-light: #A3C1AD;   /* Light Sage Green */
--light: #FCFBF9;         /* Light Background */
--white: #FFFFFF;         /* Pure White */
--dark-text: #333333;     /* Dark Gray Text */
--whatsapp: #25D366;      /* WhatsApp Green */
```

## Typography
```css
/* Display Font */
font-family: 'Playfair Display', serif;

/* Heading Font */
font-family: 'Cormorant Garamond', serif;

/* Body Font */
font-family: 'Montserrat', sans-serif;
```

## Key Features to Implement

### 1. Header Navigation
- Sticky header with scroll effects
- Dual CTA buttons (Book Now + WhatsApp)
- Mobile-responsive hamburger menu
- Smooth scroll to sections

### 2. Homepage Components
- **Hero Section**: Video background with fallback image
- **Promotional Banner**: 4-second auto-rotation between 3 banners
- **Brands Carousel**: Partner logos with links
- **Treatment Cards**: 6 featured treatments with hover effects
- **Contact Form**: Zoho integration (Form ID: 2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4)

### 3. Global Components
- **WhatsApp Floating Button**: Bottom right, always visible
- **Footer**: 4-column layout with newsletter signup
- **Cookie Consent**: GDPR compliant banner
- **Back to Top**: Smooth scroll button

### 4. Interactive Elements
- Treatment category filters
- FAQ accordions
- Testimonial carousel
- Image galleries with lightbox
- Form validation
- Loading states

## Implementation Steps

### Step 1: Setup Project
1. Create new Lovable.dev project
2. Configure domain: tempusbelgravia.co.uk
3. Set up routing based on site-structure.md
4. Import color palette and typography

### Step 2: Create Components
1. **Layout Components**
   - Header with navigation
   - Footer with columns
   - Page container

2. **UI Components**
   - Button (primary, secondary, WhatsApp)
   - Card (treatment, blog, team)
   - Form elements
   - Modal/lightbox

3. **Section Components**
   - Hero section
   - Treatment grid
   - Testimonial carousel
   - Contact form

### Step 3: Build Pages
1. Start with Homepage (homepage.md)
2. Add Treatments Overview (treatments-overview.md)
3. Create About Us (about-us.md)
4. Build Memberships (memberships.md)
5. Implement Contact (contact.md)
6. Add Blog section (blog.md)

### Step 4: Add Functionality
1. **Form Integration**
   - Zoho Forms API
   - Form validation
   - Success/error states

2. **WhatsApp Integration**
   - Pre-filled messages
   - Click tracking

3. **Analytics**
   - Google Analytics 4
   - Conversion tracking
   - UTM parameters

### Step 5: Optimize
1. **Performance**
   - Image optimization (WebP)
   - Lazy loading
   - Code splitting

2. **SEO**
   - Meta tags
   - Schema markup
   - Sitemap
   - Robots.txt

3. **Accessibility**
   - ARIA labels
   - Keyboard navigation
   - Screen reader support

## External Integrations

### Zoho Forms
- Form ID: 2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4
- Enable UTM tracking
- Set up auto-responders

### Google Services
- Maps API for location
- Analytics tracking code
- Search Console verification

### Social Media
- Instagram: @tempusbelgravia
- Facebook: /tempusbelgravia
- LinkedIn: /company/tempusbelgravia

## Testing Checklist
- [ ] All pages load correctly
- [ ] Navigation works on desktop/mobile
- [ ] Forms submit successfully
- [ ] WhatsApp links work
- [ ] Images load and display properly
- [ ] Responsive design on all devices
- [ ] Cross-browser compatibility
- [ ] Page load speed < 3 seconds
- [ ] All CTAs functional
- [ ] 404 page configured

## Launch Checklist
- [ ] Domain configured
- [ ] SSL certificate active
- [ ] Analytics tracking
- [ ] Form notifications set up
- [ ] Backup system in place
- [ ] SEO meta tags
- [ ] Social media links
- [ ] Legal pages (Privacy, Terms)
- [ ] Contact information accurate
- [ ] Test all user journeys

## Post-Launch
1. Monitor analytics
2. A/B test CTAs
3. Gather user feedback
4. Regular content updates
5. Performance monitoring
6. Security updates

## Support Resources
- Lovable.dev Documentation
- Zoho Forms API Docs
- Google Analytics Help
- Original site: tempusbelgravia.co.uk

---

## Notes
- Keep mobile experience as priority
- Ensure fast loading times
- Maintain luxury aesthetic throughout
- Focus on conversion optimization
- Regular testing and updates