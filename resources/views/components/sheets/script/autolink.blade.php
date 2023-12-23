<script>
    // Get all the section IDs with content-
    const sectionIds = Array.from(document.querySelectorAll('[id^="content-"]')).map(section => section.id);

    // Function to update the URL hash based on the section in view
    function updateURLHash() {
        for (const sectionId of sectionIds) {
            const section = document.getElementById(sectionId);
            const rect = section.getBoundingClientRect();

            if (rect.top <= window.innerHeight / 4 && rect.bottom >= window.innerHeight / 4) {
                history.replaceState(null, null, `#${sectionId}`);
                break;
            }
        }
    }

    // Attach event listener to scroll
    window.addEventListener('scroll', updateURLHash);
    updateURLHash(); // Update URL hash on initial load
</script>
