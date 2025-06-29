<?php
/**
 * Template Name: Medium Journal
 * Description: Blog landing page that fetches articles from Medium
 *
 * @package tempusbelgravia
 */

get_header();
?>

<style>
/* Medium Journal Page Styles */
.medium-journal-page {
    min-height: 100vh;
    background: var(--light);
}

/* Hero Section */
.journal-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    padding: 120px 0 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.journal-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('https://res.cloudinary.com/drtatej7i/image/upload/t_Banner%2016:9/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg');
    background-size: cover;
    background-position: center;
    opacity: 0.2;
}

.journal-hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

.journal-hero h1 {
    color: var(--white);
    font-size: 3.5rem;
    font-weight: 300;
    margin-bottom: 20px;
    font-family: var(--display-font);
    letter-spacing: 2px;
    text-transform: uppercase;
}

.journal-hero p {
    color: var(--white);
    font-size: 1.3rem;
    opacity: 0.9;
    line-height: 1.8;
}

/* Filter Bar */
.filter-bar {
    background: var(--white);
    padding: 20px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    position: sticky;
    top: 0;
    z-index: 100;
}

.filter-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.filter-tags {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.filter-tag {
    padding: 8px 20px;
    background: var(--light);
    color: var(--gray);
    border-radius: 25px;
    border: 1px solid transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.9rem;
    text-decoration: none;
}

.filter-tag:hover,
.filter-tag.active {
    background: var(--primary);
    color: var(--white);
    border-color: var(--primary);
}

.search-box {
    display: flex;
    align-items: center;
    background: var(--light);
    border-radius: 25px;
    padding: 5px 20px 5px 5px;
    min-width: 250px;
}

.search-box input {
    border: none;
    background: none;
    padding: 8px 15px;
    width: 100%;
    font-size: 0.9rem;
    outline: none;
}

.search-box i {
    color: var(--gray);
}

/* Articles Section */
.articles-section {
    padding: 60px 0;
}

.articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

/* Article Card */
.article-card {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.6s ease forwards;
}

.article-card:nth-child(1) { animation-delay: 0.1s; }
.article-card:nth-child(2) { animation-delay: 0.2s; }
.article-card:nth-child(3) { animation-delay: 0.3s; }
.article-card:nth-child(4) { animation-delay: 0.4s; }
.article-card:nth-child(5) { animation-delay: 0.5s; }
.article-card:nth-child(6) { animation-delay: 0.6s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.article-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.article-image {
    height: 250px;
    overflow: hidden;
    position: relative;
    background: var(--light-gray);
}

.article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.article-card:hover .article-image img {
    transform: scale(1.05);
}

.article-image.placeholder {
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.article-image.placeholder::after {
    content: 'TB';
    font-size: 4rem;
    color: var(--white);
    font-weight: 300;
    font-family: var(--display-font);
    opacity: 0.5;
}

.article-content {
    padding: 30px;
}

.article-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 0.9rem;
    color: var(--gray);
}

.article-date {
    display: flex;
    align-items: center;
    gap: 5px;
}

.article-reading-time {
    display: flex;
    align-items: center;
    gap: 5px;
}

.article-title {
    font-size: 1.5rem;
    margin-bottom: 15px;
    line-height: 1.3;
    font-family: var(--heading-font);
}

.article-title a {
    color: var(--dark);
    text-decoration: none;
    transition: color 0.3s ease;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.article-title a:hover {
    color: var(--primary);
}

.article-excerpt {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.article-link {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: gap 0.3s ease;
}

.article-link:hover {
    gap: 10px;
}

/* Loading State */
.loading-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 400px;
}

.loading-spinner {
    width: 60px;
    height: 60px;
    border: 3px solid var(--light-gray);
    border-top: 3px solid var(--primary);
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Load More Button */
.load-more-container {
    text-align: center;
    margin-top: 60px;
}

.load-more-btn {
    background: var(--primary);
    color: var(--white);
    padding: 15px 40px;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: inline-block;
    text-decoration: none;
}

.load-more-btn:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.load-more-btn:disabled {
    background: var(--gray);
    cursor: not-allowed;
    transform: none;
}

/* No Results */
.no-results {
    text-align: center;
    padding: 80px 20px;
    color: var(--gray);
}

.no-results h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .journal-hero h1 {
        font-size: 2.5rem;
    }
    
    .filter-container {
        flex-direction: column;
        gap: 15px;
    }
    
    .search-box {
        width: 100%;
    }
    
    .articles-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .article-content {
        padding: 20px;
    }
}
</style>

<main class="medium-journal-page">
    <!-- Hero Section -->
    <section class="journal-hero">
        <div class="journal-hero-content">
            <h1>The Tempus Journal</h1>
            <p>Expert insights, treatment guides, and the latest in aesthetic medicine</p>
        </div>
    </section>

    <!-- Filter Bar -->
    <div class="filter-bar">
        <div class="container">
            <div class="filter-container">
                <div class="filter-tags">
                    <a href="#" class="filter-tag active" data-filter="all">All Articles</a>
                    <a href="#" class="filter-tag" data-filter="treatments">Treatments</a>
                    <a href="#" class="filter-tag" data-filter="science">Science</a>
                    <a href="#" class="filter-tag" data-filter="wellness">Wellness</a>
                    <a href="#" class="filter-tag" data-filter="news">News</a>
                </div>
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Search articles...">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Articles Section -->
    <section class="articles-section">
        <div class="container">
            <div class="articles-grid" id="articlesGrid">
                <!-- Loading State -->
                <div class="loading-container" style="grid-column: 1 / -1;">
                    <div class="loading-spinner"></div>
                </div>
            </div>
            
            <div class="load-more-container" id="loadMoreContainer" style="display: none;">
                <button class="load-more-btn" id="loadMoreBtn">Load More Articles</button>
            </div>
        </div>
    </section>
</main>

<script>
// Medium Feed Configuration
const MEDIUM_CONFIG = {
    username: '@tempuslounge', // Replace with your Medium username
    apiKey: '', // Optional: Add RSS2JSON API key for more requests
    itemsPerPage: 9,
    currentPage: 0,
    allArticles: [],
    filteredArticles: []
};

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    fetchMediumArticles();
    setupEventListeners();
});

// Fetch articles from Medium
function fetchMediumArticles() {
    const apiUrl = `https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/${MEDIUM_CONFIG.username}`;
    
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'ok') {
                MEDIUM_CONFIG.allArticles = data.items;
                MEDIUM_CONFIG.filteredArticles = data.items;
                displayArticles();
            } else {
                showError();
            }
        })
        .catch(error => {
            console.error('Error fetching articles:', error);
            showError();
        });
}

// Display articles
function displayArticles(append = false) {
    const grid = document.getElementById('articlesGrid');
    const startIndex = MEDIUM_CONFIG.currentPage * MEDIUM_CONFIG.itemsPerPage;
    const endIndex = startIndex + MEDIUM_CONFIG.itemsPerPage;
    const articlesToShow = MEDIUM_CONFIG.filteredArticles.slice(startIndex, endIndex);
    
    if (!append) {
        grid.innerHTML = '';
    }
    
    if (articlesToShow.length === 0 && !append) {
        grid.innerHTML = `
            <div class="no-results" style="grid-column: 1 / -1;">
                <h3>No articles found</h3>
                <p>Try adjusting your search or filters</p>
            </div>
        `;
        document.getElementById('loadMoreContainer').style.display = 'none';
        return;
    }
    
    articlesToShow.forEach((article, index) => {
        const card = createArticleCard(article, startIndex + index);
        grid.appendChild(card);
    });
    
    // Show/hide load more button
    const hasMore = endIndex < MEDIUM_CONFIG.filteredArticles.length;
    document.getElementById('loadMoreContainer').style.display = hasMore ? 'block' : 'none';
}

// Create article card
function createArticleCard(article, index) {
    const card = document.createElement('article');
    card.className = 'article-card';
    card.style.animationDelay = `${(index % MEDIUM_CONFIG.itemsPerPage) * 0.1}s`;
    
    // Extract image
    const imageUrl = article.thumbnail || extractImageFromContent(article.content);
    
    // Format date
    const date = new Date(article.pubDate);
    const dateStr = date.toLocaleDateString('en-US', { 
        month: 'short', 
        day: 'numeric', 
        year: 'numeric' 
    });
    
    // Calculate reading time
    const wordsPerMinute = 200;
    const wordCount = (article.content || '').replace(/<[^>]*>/g, '').split(/\s+/).length;
    const readingTime = Math.ceil(wordCount / wordsPerMinute);
    
    // Clean excerpt
    const excerpt = cleanText(article.description || article.content, 150);
    
    card.innerHTML = `
        <div class="article-image ${imageUrl ? '' : 'placeholder'}">
            ${imageUrl ? `<img src="${imageUrl}" alt="${article.title}" loading="lazy">` : ''}
        </div>
        <div class="article-content">
            <div class="article-meta">
                <span class="article-date">
                    <i class="far fa-calendar"></i> ${dateStr}
                </span>
                <span class="article-reading-time">
                    <i class="far fa-clock"></i> ${readingTime} min read
                </span>
            </div>
            <h2 class="article-title">
                <a href="${article.link}" target="_blank" rel="noopener">${article.title}</a>
            </h2>
            <p class="article-excerpt">${excerpt}</p>
            <a href="${article.link}" class="article-link" target="_blank" rel="noopener">
                Read on Medium →
            </a>
        </div>
    `;
    
    return card;
}

// Extract image from content
function extractImageFromContent(content) {
    if (!content) return null;
    const temp = document.createElement('div');
    temp.innerHTML = content;
    const img = temp.querySelector('img');
    return img ? img.src : null;
}

// Clean text helper
function cleanText(html, maxLength) {
    const temp = document.createElement('div');
    temp.innerHTML = html || '';
    let text = temp.textContent || temp.innerText || '';
    
    if (text.length > maxLength) {
        text = text.substring(0, maxLength).trim() + '...';
    }
    
    return text;
}

// Setup event listeners
function setupEventListeners() {
    // Filter tags
    document.querySelectorAll('.filter-tag').forEach(tag => {
        tag.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Update active state
            document.querySelectorAll('.filter-tag').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Filter articles (this is a placeholder - you'd need to tag articles properly)
            const filter = this.getAttribute('data-filter');
            if (filter === 'all') {
                MEDIUM_CONFIG.filteredArticles = MEDIUM_CONFIG.allArticles;
            } else {
                // Simple filtering based on title/content keywords
                MEDIUM_CONFIG.filteredArticles = MEDIUM_CONFIG.allArticles.filter(article => {
                    const searchText = (article.title + ' ' + article.content).toLowerCase();
                    return searchText.includes(filter);
                });
            }
            
            MEDIUM_CONFIG.currentPage = 0;
            displayArticles();
        });
    });
    
    // Search
    let searchTimeout;
    document.getElementById('searchInput').addEventListener('input', function(e) {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            const searchTerm = e.target.value.toLowerCase();
            
            if (searchTerm === '') {
                MEDIUM_CONFIG.filteredArticles = MEDIUM_CONFIG.allArticles;
            } else {
                MEDIUM_CONFIG.filteredArticles = MEDIUM_CONFIG.allArticles.filter(article => {
                    const searchText = (article.title + ' ' + article.description + ' ' + article.content).toLowerCase();
                    return searchText.includes(searchTerm);
                });
            }
            
            MEDIUM_CONFIG.currentPage = 0;
            displayArticles();
        }, 300);
    });
    
    // Load more
    document.getElementById('loadMoreBtn').addEventListener('click', function() {
        MEDIUM_CONFIG.currentPage++;
        displayArticles(true);
    });
}

// Show error state
function showError() {
    const grid = document.getElementById('articlesGrid');
    grid.innerHTML = `
        <div class="no-results" style="grid-column: 1 / -1;">
            <h3>Unable to load articles</h3>
            <p>Please try refreshing the page</p>
            <button class="load-more-btn" onclick="location.reload()">Refresh</button>
        </div>
    `;
}
</script>

<?php get_footer(); ?>