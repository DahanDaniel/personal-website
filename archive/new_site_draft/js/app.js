
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('.slide');
    const progressBar = document.querySelector('.progress-bar');
    const projectView = document.getElementById('project-view');
    const closeBtn = document.querySelector('.close-project-btn');
    const contentContainer = document.getElementById('project-content-container');
    const mediaContainer = document.getElementById('project-media-container');

    // --- 1. SLIDER PROGRESS ---
    const updateProgress = () => {
        const scrollLeft = slider.scrollLeft;
        const maxScroll = slider.scrollWidth - slider.clientWidth;
        const progress = (scrollLeft / maxScroll) * 100;
        progressBar.style.width = `${progress}%`;
    };

    slider.addEventListener('scroll', updateProgress);

    // --- 2. DESKTOP MOUSE WHEEL - HORIZONTAL SCROLL ---
    slider.addEventListener('wheel', (e) => {
        if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
            // If main scroll is vertical, translate to horizontal
            slider.scrollLeft += e.deltaY;
            // e.preventDefault(); // Optional: might block native feelings
        }
    });

    // --- 3. OPEN PROJECT ---
    slides.forEach(slide => {
        slide.addEventListener('click', () => {
            const projectId = slide.getAttribute('data-project');
            openProject(projectId);
        });
    });

    const openProject = (id) => {
        const data = projectData[id];
        if (!data) return;

        // 1. Inject Content
        contentContainer.innerHTML = data.content;

        // 2. Inject Media
        if (data.media && data.media.length > 0) {
            mediaContainer.innerHTML = `<img src="${data.media[0]}" alt="${data.title}">`;
        } else {
            // Fallback solid color if no media
            mediaContainer.innerHTML = `<div style="width:100%; height:100%; background:#222;"></div>`;
        }

        // 3. Show View
        projectView.classList.add('active');
    };

    // --- 4. CLOSE PROJECT ---
    closeBtn.addEventListener('click', () => {
        projectView.classList.remove('active');
    });

    // --- 5. NAV LINKS ---
    document.querySelectorAll('[data-route]').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const route = link.getAttribute('data-route');
            
            // Close project view if open
            projectView.classList.remove('active');

            if (route === 'home') {
                slider.scrollTo({ left: 0, behavior: 'smooth' });
            } else if (route === 'about') {
                // Scroll to last slide
                const maxScroll = slider.scrollWidth - slider.clientWidth;
                slider.scrollTo({ left: maxScroll, behavior: 'smooth' });
            }
        });
    });
});
