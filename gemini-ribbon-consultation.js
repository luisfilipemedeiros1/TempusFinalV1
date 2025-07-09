#!/usr/bin/env node

import { GoogleGenerativeAI } from '@google/generative-ai';

const apiKey = 'AIzaSyAVjF8EtI69Rt7rZulqZHyvyKhtYMeJjrU';
const genAI = new GoogleGenerativeAI(apiKey);
const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

async function consultGeminiRibbons() {
  const prompt = `
GEMINI CLI - RIBBON OVERLAP ISSUE

Context: Implementing price ribbons on treatment cards for Tempus Lounge luxury medical clinic. We have an overlap problem.

CURRENT SITUATION:
- Treatment cards can have "Best Seller" or "Trending" badges (top-left corner)
- I added price ribbons (top-right corner)
- Some cards have BOTH badges AND price ribbons, causing visual conflict

EXISTING STYLES:
1. Best Seller/Trending badges:
   - Position: top: 20px, left: 20px
   - Style: Small rectangular badges with rounded corners
   - Colors: Gold for "Best Seller", Deep Teal for "Trending"

2. Price ribbons (newly added):
   - Position: top: 20px, right: 20px  
   - Style: Rounded pill shape
   - Color: Gold background, white text

PROBLEM: When a card has both a badge AND a price, they're at the same height (top: 20px) which looks crowded.

SOLUTIONS TO CONSIDER:
A) Stack vertically - Move price ribbon down when badge exists (top: 60px)
B) Combine into one element - "Best Seller | Starting at £750"
C) Different corners - Keep as is (left vs right corners)
D) Price at bottom of card instead of ribbon
E) Make price part of the content area (not a ribbon)

Which approach best maintains luxury aesthetic while solving the overlap?

Also consider:
- Mobile responsiveness (cards get narrower)
- Visual hierarchy (what should user see first?)
- Brand consistency with existing design
`;

  try {
    console.log('🤖 Consulting Gemini about ribbon overlap issue...\n');
    
    const result = await model.generateContent(prompt);
    const response = await result.response;
    const text = response.text();
    
    console.log('✅ Gemini Response:\n');
    console.log(text);
    
    // Save response
    const fs = await import('fs/promises');
    await fs.writeFile(
      '/Users/luismedeiros/Documents/Manual Library/TempusFHFinal/gemini-ribbon-response.md',
      `# Gemini Ribbon Overlap Solution\n\nDate: ${new Date().toISOString()}\n\n${text}`
    );
    
    console.log('\n📝 Response saved to gemini-ribbon-response.md');
    
  } catch (error) {
    console.error('❌ Error:', error.message);
  }
}

consultGeminiRibbons();