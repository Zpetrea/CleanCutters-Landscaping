document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    if (form) {
        form.addEventListener("submit", function(event) {
            event.preventDefault();
            document.getElementById("responseMessage").innerText = "Message sent successfully!";
            form.reset();
        });
    }
});
