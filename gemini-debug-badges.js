#!/usr/bin/env node

import { GoogleGenerativeAI } from '@google/generative-ai';

const apiKey = 'AIzaSyAVjF8EtI69Rt7rZulqZHyvyKhtYMeJjrU';
const genAI = new GoogleGenerativeAI(apiKey);
const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

async function debugBadges() {
  const prompt = `
GEMINI CLI - URGENT: Badges Not Displaying

The price badges are not showing up on the website. Here's the current implementation:

HTML STRUCTURE:
\`\`\`html
<div class="treatment-card scale-in">
    <div class="treatment-badges">
        <span class="badge price">Starting at £350</span>
    </div>
    <div class="treatment-card-img">
        <img src="hifu-treatment.webp" alt="HIFU Treatment">
    </div>
    <div class="treatment-card-content">
        <h3>HIFU Skin Tightening</h3>
        <p>Non-surgical lift...</p>
    </div>
</div>
\`\`\`

CSS STYLES:
\`\`\`css
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
    display: inline-block;
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

.badge.price {
    background-color: var(--primary);
    color: var(--white);
}

.treatment-card {
    position: relative;
    overflow: hidden;
}
\`\`\`

PROBLEM: The badges are in the HTML but not visible on the page.

POSSIBLE ISSUES TO CHECK:
1. CSS file not loading/cached
2. CSS specificity conflicts
3. Parent element overflow:hidden cutting off badges
4. Z-index stacking issues
5. Absolute positioning not working due to parent positioning
6. CSS variables (--primary, --white) not defined
7. Display property conflicts

What's the most likely cause and how to fix it?
`;

  try {
    console.log('🔍 Debugging badge display issue with Gemini...\n');
    
    const result = await model.generateContent(prompt);
    const response = await result.response;
    const text = response.text();
    
    console.log('✅ Gemini Debug Response:\n');
    console.log(text);
    
    // Save response
    const fs = await import('fs/promises');
    await fs.writeFile(
      '/Users/luismedeiros/Documents/Manual Library/TempusFHFinal/gemini-debug-response.md',
      `# Badge Display Debug\n\nDate: ${new Date().toISOString()}\n\n${text}`
    );
    
    console.log('\n📝 Debug response saved');
    
  } catch (error) {
    console.error('❌ Error:', error.message);
  }
}

debugBadges();