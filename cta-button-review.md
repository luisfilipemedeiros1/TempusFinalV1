# CTA Button Layout Issue

## Current Problem

The popup currently shows two buttons in the CTA section:
1. "Book Consultation" (WhatsApp link)
2. "View Full Details" (link to treatment page)

However, the user wants:
- Only the "Book Consultation" button to be shown
- No overlay behavior
- Clean, simple call-to-action

## Current Implementation

```html
<div class="popup-cta">
    <div class="popup-price">Starting at £350</div>
    <div class="popup-buttons">
        <a href="https://wa.me/..." class="cta-button">
            Book Consultation <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://tempusbelgravia.co.uk/treatment/..." class="cta-button-secondary">
            View Full Details
        </a>
    </div>
</div>
```

## Current CSS Issues

```css
.popup-cta {
    margin: -30px -20px 0;
    padding: 25px 20px 30px;
    position: sticky;
    bottom: 0;
    background: linear-gradient(135deg, var(--primary-ultralight) 0%, rgba(255, 255, 255, 0.95) 100%);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}
```

The sticky positioning and negative margins create an overlay effect that the user doesn't want.

## Questions for Gemini

1. **Layout Approach**: Should I keep the sticky positioning for mobile UX or make it part of the normal document flow?

2. **Button Design**: For a luxury medical clinic, what's the best way to present a single "Book Consultation" CTA button?

3. **Mobile vs Desktop**: Should the behavior be different on mobile (sticky) vs desktop (inline)?

4. **Pricing Display**: Should the price stay with the button or be moved elsewhere in the popup?

5. **Visual Hierarchy**: What's the best way to make the single CTA button prominent without being overwhelming?

6. **Accessibility**: Any accessibility concerns with changing from sticky to inline positioning?

Please provide recommendations for the cleanest, most effective single-button CTA implementation.