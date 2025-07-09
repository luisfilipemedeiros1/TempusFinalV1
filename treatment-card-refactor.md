# Treatment Card Refactor Proposal

## Current Problem:
Price badges are not displaying despite being in the HTML. Complex CSS with potential conflicts.

## Proposed Refactored Solution:

### HTML Structure (Simplified):
```html
<!-- Treatment Card Template -->
<div class="treatment-card scale-in">
    <!-- All badges in one container at the top -->
    <div class="card-badges">
        <?php if ($is_best_seller): ?>
            <span class="badge badge-bestseller">Best Seller</span>
        <?php endif; ?>
        <?php if ($is_trending): ?>
            <span class="badge badge-trending">Trending</span>
        <?php endif; ?>
        <span class="badge badge-price">Starting at £XXX</span>
    </div>
    
    <div class="treatment-card-img">
        <img src="..." alt="...">
    </div>
    
    <div class="treatment-card-content">
        <h3>Treatment Name</h3>
        <p>Description...</p>
        <div class="treatment-details">...</div>
        <div class="treatment-buttons">...</div>
    </div>
</div>
```

### CSS Structure (Clean & Simple):
```css
/* Card base */
.treatment-card {
    position: relative;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

/* Badge container */
.card-badges {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 5;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

/* Badge base style */
.badge {
    display: inline-block;
    padding: 6px 16px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-radius: 4px;
    font-family: 'Montserrat', sans-serif;
}

/* Badge variants */
.badge-bestseller {
    background: #C7A331; /* Gold */
    color: #333;
}

.badge-trending {
    background: #004D40; /* Teal */
    color: #fff;
}

.badge-price {
    background: #AF8F5A; /* Primary gold */
    color: #fff;
}

/* Mobile responsive */
@media (max-width: 768px) {
    .card-badges {
        top: 10px;
        left: 10px;
        gap: 5px;
    }
    
    .badge {
        font-size: 0.7rem;
        padding: 4px 12px;
    }
}
```

## Implementation Plan:

### Option A: Inline Styles First (Quick Fix)
Add inline styles directly to verify display:
```html
<div class="treatment-badges" style="position: absolute; top: 20px; left: 20px; z-index: 10;">
    <span class="badge price" style="background: #AF8F5A; color: white; padding: 6px 16px; display: inline-block; border-radius: 4px; font-size: 0.8rem; font-weight: 600;">
        Starting at £350
    </span>
</div>
```

### Option B: Separate Badge CSS File
Create `badges.css` to isolate badge styles and avoid conflicts:
```css
/* badges.css - Load after main styles */
.treatment-card .card-badges { /* Increased specificity */
    position: absolute !important;
    top: 20px !important;
    left: 20px !important;
    z-index: 999 !important;
}
```

### Option C: Data Attribute Approach
Use data attributes for cleaner implementation:
```html
<div class="treatment-card" data-badges="bestseller,price">
    <div class="card-badges"></div>
    <!-- Rest of card -->
</div>
```

```javascript
// Dynamically insert badges based on data attributes
document.querySelectorAll('[data-badges]').forEach(card => {
    const badges = card.dataset.badges.split(',');
    const container = card.querySelector('.card-badges');
    
    badges.forEach(type => {
        if (type === 'price') {
            container.innerHTML += '<span class="badge badge-price">Starting at £XXX</span>';
        }
        // etc...
    });
});
```

## Questions for Gemini CLI:

1. **Which approach is most maintainable for a WordPress theme?**
   - Option A: Quick inline fix
   - Option B: Separate CSS file
   - Option C: JavaScript approach

2. **Root cause analysis - why aren't current badges showing?**
   - CSS not loading?
   - Specificity issues?
   - WordPress theme conflicts?
   - Genesis Framework overrides?

3. **Best practice for luxury medical site:**
   - Should price be most prominent?
   - Badge stacking order?
   - Animation on hover?

4. **Testing strategy:**
   - How to verify across different page templates?
   - Browser compatibility requirements?
   - Performance impact of absolute positioning?

Please review and recommend the best approach for implementation.