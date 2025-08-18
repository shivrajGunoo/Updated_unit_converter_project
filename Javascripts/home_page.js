// Sidebar navigation
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.sidebar a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Update active state
            document.querySelectorAll('.sidebar a').forEach(el => el.classList.remove('active'));
            this.classList.add('active');
            
            // Hide all converter sections
            document.querySelectorAll('.converter-section').forEach(section => {
                section.style.display = 'none';
            });
            
            // Show the appropriate converter
            const text = this.textContent.toLowerCase();
            if (text.includes('length')) {
                document.getElementById('lengthSection').style.display = 'block';
            } else if (text.includes('temperature')) {
                document.getElementById('temperatureSection').style.display = 'block';
            } else if (text.includes('area')) {
                document.getElementById('areaSection').style.display = 'block';
            } else if (text.includes('volume')) {
                document.getElementById('volumeSection').style.display = 'block';
            } else if (text.includes('weight')) {
                document.getElementById('weightSection').style.display = 'block';
            } else if (text.includes('time')) {
                document.getElementById('timeSection').style.display = 'block';
            }
        });
    });
    
    // Initialize all converters
    if (typeof convertLength === 'function') convertLength();
    if (typeof convertTemperature === 'function') convertTemperature();
    if (typeof convertArea === 'function') convertArea();
    if (typeof convertVolume === 'function') convertVolume();
    if (typeof convertWeight === 'function') convertWeight();
    if (typeof convertTime === 'function') convertTime();
});