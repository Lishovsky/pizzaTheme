let videoSources = ['v1', 'v2', 'v3'];

const video = document.querySelector('._wrapper_MainSlider_video');
const videoBox = document.querySelector('._wrapper_MainSlider_content');
const source = document.querySelector('._wrapper_MainSlider_video video source')
let sourceSrc = document.querySelector('._wrapper_MainSlider_video video source').src
let thisVideo = 0;
let nextVideo = 1


//I use innerHTML because when I use setAttribute source is change but video still same

function animation(x, y) {
    let sourceSrc = document.querySelector('._wrapper_MainSlider_video video source').src
    setTimeout(() => {
        video.innerHTML = `<video muted>
        <source src="${sourceSrc.replace(videoSources[x], videoSources[y])}" type="video/mp4">
        </video>`;
        document.querySelector('video').pause();
    }, 1200)
    videoBox.style.backgroundColor = "#222222"
    thisVideo++
    nextVideo++
    document.querySelector('video').play();
}

function videoSourceChange() {
    videoBox.style.backgroundColor = "#222222b3"
    document.querySelector('video').play();
    setTimeout(() => {
        if (nextVideo == 3) {
            thisVideo = 0
            nextVideo = 1
            setTimeout(() => {
                video.innerHTML = `<video muted>
                <source src="${sourceSrc.replace(videoSources[2], videoSources[thisVideo])}" type="video/mp4">
                </video>`;
                document.querySelector('video').play();
            }, 1200)
            videoBox.style.backgroundColor = "#222222"

        }
        else { animation(thisVideo, nextVideo) }

    }, 4500);
}


//topbar h2, h3 and #arrow text fade in animation

function fadeIn() {
    setTimeout(() => {
        document.querySelector('._wrapper_MainSlider_content h2').style.transform = "translateX(0)";
    }, 100)
    setTimeout(() => {
        document.querySelector('._wrapper_MainSlider_content h3').style.transform = "translateX(0)";
    }, 600)
    setTimeout(() => {
        document.querySelector('#arrow').style.opacity = "1";
        document.querySelector('#arrow').style.animation = "moveArrow 3s infinite"
    }, 1400)
}

window.onload = fadeIn()
window.onload = function () {
    videoSourceChange()
    setInterval(() => {
        videoSourceChange()
    }, 8000);

}