function setActiveSidebarLink() {
    const currentPath = window.location.pathname;
    const links = {
        "/pages/dashboard.html": document.getElementById("dashboard-link"),
        "/pages/products.html": document.getElementById("products-link"),
        "/pages/categories.html": document.getElementById("categories-link"),
        "/pages/users.html": document.getElementById("users-link"),
        "/pages/posts.html": document.getElementById("posts-link"),
        "/pages/payment.html": document.getElementById("payment-link"),
    };

    Object.values(links).forEach((link) => link && link.classList.remove("active"));

    if (links[currentPath]) {
        links[currentPath].classList.add("active");
    }
}

document.addEventListener("DOMContentLoaded", setActiveSidebarLink);
