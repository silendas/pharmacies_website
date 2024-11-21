document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const toggleSidebar = document.getElementById("toggleSidebar");
    const closeSidebar = document.getElementById("closeSidebar");

    // Toggle sidebar open/close
    toggleSidebar.addEventListener("click", function () {
        sidebar.classList.toggle("closed");
    });

    // Close sidebar
    closeSidebar.addEventListener("click", function () {
        sidebar.classList.add("closed");
    });
});
