// Function to load scripts dynamically
function loadScript(src, callback) {
    const script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = src;
    script.async = true; // Load asynchronously
    script.onload = callback || function() {}; // Optional callback after the script is loaded
    document.head.appendChild(script);
}

// Check if specific elements exist
if (
    document.querySelectorAll("[toast-list]").length ||
    document.querySelectorAll("[data-choices]").length ||
    document.querySelectorAll("[data-provider]").length
) {
    // Load scripts dynamically
    loadScript('https://cdn.jsdelivr.net/npm/toastify-js', function () {
        console.log('Toastify script loaded');
    });
    loadScript('backend/assets/libs/choices.jspublic/backend/assets/scripts/choices.min.js', function () {
        console.log('Choices.js script loaded');
    });
    loadScript('backend/assets/libs/flatpickr/flatpickr.min.js', function () {
        console.log('Flatpickr script loaded');
    });
}










// (document.querySelectorAll("[toast-list]")||document.querySelectorAll("[data-choices]")||document.querySelectorAll("[data-provider]"))&&(document.write("<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'><\/script>"),document.write("<script type='text/javascript' src='backend/assets/libs/choices.js/public/assets/scripts/choices.min.js'><\/script>"),document.write("<script type='text/javascript' src='backend/assets/libs/flatpickr/flatpickr.min.js'><\/script>"));
