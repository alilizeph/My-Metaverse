const ratio = .1;
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

const handleIntersect = function(entries, observer) {
    entries.forEach(function(entry) {
        if(entry.intersectionRatio > ratio) {
            if (entry.target.classList.contains("hide")) {
                entry.target.classList.add("appears");
                observer.unobserve(entry.target);
            } 
        } else {
        }
    })
}

window.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(handleIntersect, options);
    document.querySelectorAll('.hide').forEach(function(target) {
        observer.observe(target);
    });
});

