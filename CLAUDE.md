# CLAUDE.md - Project Configuration for TempusFHFinal

## Project Overview
This is a WordPress child theme named "tempusbelgravia" built on the Genesis Framework v2.0.0. It's designed for a medical/aesthetic clinic website (Tempus Belgravia) located in London, featuring treatment listings, team profiles, WooCommerce integration, and membership systems.

## Technical Stack
- **CMS**: WordPress (Genesis Framework child theme)
- **Theme Version**: 2.0.1
- **PHP Version**: PHP 7.4+ recommended
- **JavaScript**: jQuery, Slick Carousel, Counter Up
- **CSS**: Custom CSS with CSS variables, no preprocessor
- **Icon Library**: Font Awesome 6.5.1
- **E-commerce**: WooCommerce (customized templates)
- **External Services**: Zoho Forms, Google Maps, WhatsApp Business API

## Key Configuration Constants
```php
define( 'CHILD_THEME_NAME', 'tempusbelgravia' );
define( 'CHILD_THEME_URL', 'http://www.dicema.com/' );
define( 'CHILD_THEME_VERSION', '2.0.1' ); // Update for cache busting
```

## Development Workflow

### Asset Management
- **CSS Files**: Direct editing in `/css/` directory
- **JS Files**: Direct editing in `/js/` directory
- **Cache Busting**: Update `CHILD_THEME_VERSION` in `functions.php`
- **No Build Process**: Assets are edited directly without compilation

### Key Development Commands
Since this is a traditional WordPress setup without build tools:
1. **View Changes**: Open site in browser with cache disabled
2. **Clear Cache**: Update `CHILD_THEME_VERSION` constant
3. **Test Forms**: Ensure Zoho form integration is working
4. **Mobile Testing**: Use browser dev tools responsive mode

### Testing Checklist
- [ ] Test all page templates (home, treatments, team, etc.)
- [ ] Verify WooCommerce functionality
- [ ] Check responsive design on mobile devices
- [ ] Test contact forms (Zoho integration)
- [ ] Verify WhatsApp links work correctly
- [ ] Check all external CDN resources load

## Project Structure

### Custom Post Types
1. **Treatments** (`/treatment/`)
   - Categories: facial-aesthetics, body-treatments, iv-infusions, etc.
   - Custom fields for pricing, duration, details

2. **Team Members** (`/team/`)
   - Categories: doctors, specialists, patient-liaison

3. **Conditions** (`/condition/`)
   - Medical conditions treated at the clinic

4. **Concerns** (`/concern/`)
   - Patient concerns addressed

### Page Templates
- `home.php` - Homepage with hero, treatments grid, testimonials
- `FHMemberships.php` - Membership plans page
- `page-treatments-overview.php` - All treatments listing
- Various taxonomy templates for treatment categories

### Key Features
1. **Responsive Design**: Mobile-first approach
2. **Animations**: Fade-in effects, scroll animations
3. **Interactive Elements**: Treatment carousels, FAQ accordions
4. **Contact Integration**: Zoho forms, WhatsApp CTAs
5. **SEO Optimized**: Structured data, semantic HTML

## External Integrations

### Zoho Forms
- Contact form integration in `home.php`
- Form ID: `2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4`
- UTM tracking enabled

### WhatsApp Business
- WhatsApp number: +447538037973
- Used for treatment inquiries and bookings

### Google Maps
- Embedded map for clinic location
- Address: 11A West Halkin Street, Belgravia, London SW1X 8JL

### CDN Resources
- Google Fonts: Cormorant Garamond, Montserrat, Playfair Display
- Slick Carousel: v1.8.1
- Font Awesome: v6.5.1

## Color Palette
```css
--primary: #AF8F5A;          /* Gold */
--accent-deep: #004D40;      /* Deep Teal */
--accent-light: #A3C1AD;     /* Light Sage Green */
--light: #FCFBF9;           /* Light Background */
--dark-text: #333333;       /* Dark Gray Text */
```

## Common Development Tasks

### Adding a New Treatment
1. Create treatment post in WordPress admin
2. Assign to appropriate category
3. Add featured image and treatment details
4. Update pricing and duration information

### Modifying Homepage
1. Edit `home.php` template
2. Update relevant CSS in `/css/home.css`
3. Modify JavaScript in `/js/home-custom.js` if needed
4. Update `CHILD_THEME_VERSION` for cache busting

### Creating New Page Template
1. Copy existing template as starting point
2. Add template header comment
3. Create corresponding CSS file in `/css/`
4. Add enqueue logic to `functions.php`

### Updating Contact Form
1. Get new Zoho form embed code
2. Replace in `home.php` contact section
3. Test form submission and data capture

## Security Considerations
- Keep WordPress core, plugins, and theme updated
- Use strong passwords for admin accounts
- Regular backups of database and files
- Monitor form submissions for spam
- SSL certificate required for production

## Performance Optimization
- Images should be optimized before upload
- Use WebP format where possible
- Lazy loading implemented for images
- External scripts loaded asynchronously
- CSS custom properties for efficient theming

## Maintenance Tasks
- Regular plugin updates
- Database optimization
- Clear transient cache
- Review and moderate user submissions
- Update treatment information as needed

## Support Resources
- Genesis Framework Documentation
- WordPress Codex
- WooCommerce Documentation
- Original Developer: Amad Zahid (http://www.dicema.com/)

## Notes for Future Development
- Consider implementing a build process for asset optimization
- Add automated testing for critical functionality
- Implement proper error logging and monitoring
- Consider adding a staging environment
- Document any custom functionality added