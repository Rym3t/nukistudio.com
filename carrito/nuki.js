document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.carousel-track');
    const items = Array.from(track.children);
    const nextButton = document.getElementById('nextBtn');
    const prevButton = document.getElementById('prevBtn');
    
    const itemWidth = items[0].getBoundingClientRect().width;
    
    let currentIndex = 0;

    const moveToItem = (track, currentItem, targetItem) => {
        track.style.transform = 'translateX(-' + targetItem.style.left + ')';
        currentItem.classList.remove('current-item');
        targetItem.classList.add('current-item');
    }

    items.forEach((item, index) => {
        item.style.left = itemWidth * index + 'px';
    });

    nextButton.addEventListener('click', e => {
        const currentItem = track.querySelector('.current-item');
        const nextItem = currentItem.nextElementSibling;

        if (nextItem) {
            moveToItem(track, currentItem, nextItem);
            currentIndex++;
        }
    });

    prevButton.addEventListener('click', e => {
        const currentItem = track.querySelector('.current-item');
        const prevItem = currentItem.previousElementSibling;

        if (prevItem) {
            moveToItem(track, currentItem, prevItem);
            currentIndex--;
        }
    });


    items[0].classList.add('current-item');
});
