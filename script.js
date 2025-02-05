// script.js
document.addEventListener('DOMContentLoaded', () => {
    const currentPage = window.location.pathname.split('/').pop(); // Get current page filename
    const mainContent = document.querySelector('main');

    fetchPageContent(currentPage)
        .then(content => {
            mainContent.innerHTML = content; // Insert the content into the main section
        })
        .catch(error => {
            console.error("Error fetching page content:", error);
            mainContent.innerHTML = "<p>Error loading page content.</p>";
        });
});

async function fetchPageContent(page) {
    try {
        const response = await fetch(`${page}`); // Fetch the corresponding HTML file
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return await response.text();
    } catch (error) {
        throw error; // Re-throw the error for handling in the caller function
    }
}
