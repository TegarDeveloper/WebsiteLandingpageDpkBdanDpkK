const carousel = document.querySelector(".carousel");
firstImg = carousel.querySelectorAll("img")[0]; 
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, prevPageX, prevScrollLeft;
let firstImgWidth = firstImg.clientWidth + 14; //getting first img width & adding 14 margin value

arrowIcons.forEach(icon => {
    icon.addEventListener(".click", () => {
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
    });
});

const dragStart = (e) => {
    //updatating global variabels value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    //scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    let posisitonDiff = e.pageX - prevPageX;
    carousel.scrollLeft = prevScrollLeft - posisitonDiff;
}

const dragStop = () => {
    isDragStart = false;
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("mouseup", dragStop);