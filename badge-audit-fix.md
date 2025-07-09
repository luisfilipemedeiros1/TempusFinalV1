# Badge & Ribbon Audit Fix Plan

## Current Issues Found:

1. **Inconsistent HTML Structure**
   - Badges use `<span class="best-seller-badge">`
   - Price ribbons use `<div class="price-ribbon">`
   - Different placement order in HTML

2. **CSS Conflicts**
   - Both elements positioned at top: 20px, left: 20px
   - Relying on :has() selector which may not work in all browsers

3. **Visual Issues**
   - Overlapping when both exist
   - Inconsistent styling between badges and ribbons

## Proposed Solution:

### 1. Create Badge Container
```html
<div class="treatment-badges">
    <span class="badge best-seller">Best Seller</span>
    <span class="badge price">Starting at £750</span>
</div>
```

### 2. Unified CSS Structure
```css
.treatment-badges {
    position: absolute;
    top: 20px;
    left: 20px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    z-index: 3;
}

.badge {
    padding: 6px 18px;
    font-size: 0.8rem;
    font-weight: 600;
    border-radius: 3px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-family: var(--heading-font);
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    white-space: nowrap;
}

.badge.best-seller {
    background-color: var(--accent-gold);
    color: var(--dark-text);
}

.badge.trending {
    background-color: var(--accent-deep);
    color: var(--white);
}

.badge.price {
    background-color: var(--primary);
    color: var(--white);
}
```

## Implementation Steps:

1. Update CSS with new badge system
2. Update all 9 treatment cards with consistent structure
3. Remove old ribbon styles
4. Test responsive behavior
5. Ensure accessibility