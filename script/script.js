// Function to open a specific tab and hide other tabs
function openTab(evt, tabName) {
    var i;  // Loop variable
    var tabcontent;  // Variable to store tab content elements
    var tablinks;  // Variable to store tab link elements

    // Get all elements with the class name "tabcontent"
    tabcontent = document.getElementsByClassName("tabcontent");

    // Hide all tab content by setting their display style to "none"
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";  // Hide the content
    }

    // Get all elements with the class name "tablinks"
    tablinks = document.getElementsByClassName("tablinks");

    // Remove the "active" class from all tab links to deactivate them
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");  // Deactivate
    }

    // Display the selected tab by setting its display style to "block"
    document.getElementById(tabName).style.display = "block";

    // Add the "active" class to the current tab link to activate it
    evt.currentTarget.className += " active";  // Mark the tab as active
}
