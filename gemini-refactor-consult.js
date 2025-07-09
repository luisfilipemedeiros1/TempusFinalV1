#!/usr/bin/env node

import { GoogleGenerativeAI } from '@google/generative-ai';
import fs from 'fs/promises';

const apiKey = 'AIzaSyAVjF8EtI69Rt7rZulqZHyvyKhtYMeJjrU';
const genAI = new GoogleGenerativeAI(apiKey);
const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

async function consultRefactor() {
  // Read the refactor proposal
  const proposal = await fs.readFile('./treatment-card-refactor.md', 'utf-8');
  
  const prompt = `
${proposal}

ADDITIONAL CONTEXT:
- WordPress Genesis child theme (tempusbelgravia)
- Currently badges are in HTML but not visible
- Site uses CSS custom properties extensively
- Must maintain luxury aesthetic
- Cache busting already implemented (version 2.0.3)

URGENT: Need to fix price display issue. Which implementation approach do you recommend and why?
`;

  try {
    console.log('🤔 Consulting Gemini on treatment card refactor...\n');
    
    const result = await model.generateContent(prompt);
    const response = await result.response;
    const text = response.text();
    
    console.log('✅ Gemini Refactor Response:\n');
    console.log(text);
    
    await fs.writeFile(
      './gemini-refactor-response.md',
      `# Treatment Card Refactor - Gemini Response\n\nDate: ${new Date().toISOString()}\n\n${text}`
    );
    
    console.log('\n📝 Response saved to gemini-refactor-response.md');
    
  } catch (error) {
    console.error('❌ Error:', error.message);
  }
}

consultRefactor();