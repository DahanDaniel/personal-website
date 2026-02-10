/**
 * App.js - Grid Zoom Entry & Slider
 */

document.addEventListener('DOMContentLoaded', () => {
    initGridZoomAnimation();
});

function initGridZoomAnimation() {
    const gridContainer = document.querySelector('.grid-container');
    const heroImage = document.getElementById('hero-image');
    const imageTrack = document.getElementById('image-track');
    const uiLayer = document.getElementById('ui-layer');

    // 1. Initial State: Rows are moving via CSS Animation (Marquee)
    
    // 2. Trigger Zoom after a delay (e.g., 2.5s)
    setTimeout(() => {
        // Stop the marquee movement so we zoom in on a stable target
        gridContainer.classList.add('stopped');
        
        // Force Reflow if needed, or just add class
        // Add zoomed class to scale up enormously
        gridContainer.classList.add('zoomed');
        
        // 3. Transition to Slider
        // Wait for zoom transition (1.5s)
        setTimeout(() => {
            // Fade out the grid or hide it, and fade in the Slider
            // Actually, a nice effect is if the Hero Image becomes part of the slider?
            // For now, let's just fade comfortably to the slider track.
            
            // Fade in UI
            uiLayer.classList.add('visible');
            
            // Simple crossfade to the functional slider
            imageTrack.style.opacity = '1';
            imageTrack.style.pointerEvents = 'auto';
            
            // Initiate the slider logic
            initSlider();
            
            // Optional: Remove grid from DOM for performance
            setTimeout(() => {
               // gridContainer.style.display = 'none';
            }, 1000);
            
        }, 1200); // Slightly before full zoom ends to overlap
        
    }, 2500); // Wait 2.5s before zooming
}

/* =========================================
   Slider Logic (Hyperplexed)
   ========================================= */
function initSlider() {
    const track = document.getElementById("image-track");

    const handleOnDown = e => track.dataset.mouseDownAt = e.clientX;

    const handleOnUp = () => {
        track.dataset.mouseDownAt = "0";  
        track.dataset.prevPercentage = track.dataset.percentage || "0";
    };

    const handleOnMove = e => {
        if(track.dataset.mouseDownAt === "0") return;
        
        const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
              maxDelta = window.innerWidth / 2;
        
        const percentage = (mouseDelta / maxDelta) * -100,
              nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage || "0") + percentage,
              nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, 0), -100);
        
        track.dataset.percentage = nextPercentage;
        
        track.animate({
            transform: `translate(${nextPercentage}%, -50%)`
        }, { duration: 1200, fill: "forwards" });
        
        for(const image of track.getElementsByClassName("image")) {
            image.animate({
                objectPosition: `${100 + nextPercentage}% center`
            }, { duration: 1200, fill: "forwards" });
        }
    };

    window.onmousedown = e => handleOnDown(e);
    window.ontouchstart = e => handleOnDown(e.touches[0]);
    window.onmouseup = e => handleOnUp(e);
    window.ontouchend = e => handleOnUp(e.touches[0]);
    window.onmousemove = e => handleOnMove(e);
    window.ontouchmove = e => handleOnMove(e.touches[0]);
}
