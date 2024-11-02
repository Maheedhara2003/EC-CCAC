
<?php include 'ynav.php'; ?>

<div id="wrap" class="oe_structure">
  <section class="s_cover parallax s_parallax_is_fixed o_cc o_cc5 pt-5 pb-5" data-scroll-background-ratio="1" data-snippet="s_cover">
    <!-- Background Image and Gradient Overlay -->
    <span class="s_parallax_bg oe_img_bg" style="background-image: url('assests/images/SAIL0395.JPG'); background-position: 50% 75%;"></span>
    
    <div class="o_we_bg_filter" style="background-image: linear-gradient(135deg, rgba(203, 94, 238, 0.5), rgba(75, 225, 236, 0.5));"></div>

    <!-- Content Container -->
    <div class="container text-center s_allow_columns">
      <h1 class="display-1">WELCOME TO <br>EC & CCAC</h1>
    </div>
  </section>
</div>

<section >
    <div class="container">
    <div class="text-center">
        <h3 class="display-1 text-dark fs-1 pt-2">Events</h3>
        </div>

        <div class="event-lists">
            <div class="upcoming-event-list">
                <h3 class="display-1 text-dark fs-3">Upcoming Events</h3>
                <div class="event-card-grid">
                    <div class="event-item">
                        <h4 class="event-title">Colorido 2024 (Cultural Fest)</h4>
                        <p class="event-schedule">Date: December 27th and 28th, 2024</p>
                        <p class="event-details">Brief description of the event goes here.</p>
                        <button class="btn btn-custom">Learn More</button>
                    </div>
                    
                </div>
            </div>

            <div class="past-event-list">
                <h3 class="display-1 text-dark fs-3">Past Events</h3>
                <div class="event-card-grid">
                    <div class="event-item">
                        <h4 class="event-title">Club Waltz</h4>
                        <p class="event-schedule">Date: September 27th & 28th, 2024</p>
                        <p class="event-details">Brief description of the past event goes here.</p>
                        <button class="btn btn-custom">Learn More</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<?php include'footer.php' ?>


<script>
function animateCounter(id, endValue, duration) {
    let startValue = 0;
    const increment = endValue / (duration / 16); // Approximate frames for smooth transition
    const counter = document.getElementById(id);

    function updateCounter() {
        startValue += increment;
        if (startValue >= endValue) {
            counter.textContent = endValue; // Set the final value when it reaches
        } else {
            counter.textContent = Math.ceil(startValue);
            requestAnimationFrame(updateCounter);
        }
    }

    updateCounter();
}

// Customize counters with desired values and duration
animateCounter("studentsCounter", 45, 2000);      // Days count up to 24 in 2 seconds
  // Stages count up to 5 in 2 seconds
animateCounter("Events", 150, 2000);   // Vendors count up to 120+ in 2 seconds

</script>
