// Video lazy load
document.addEventListener("DOMContentLoaded", function () {
  let lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

  if ("IntersectionObserver" in window) {
    let lazyVideoObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (video) {
        if (video.isIntersecting) {
          for (const source in video.target.children) {
            let videoSource = video.target.children[source];
            if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
              videoSource.src = videoSource.dataset.src;
            }
          }

          video.target.load();
          video.target.classList.remove("lazy");
          lazyVideoObserver.unobserve(video.target);
        }
      });
    });
    lazyVideos.forEach(function (lazyVideo) {
      lazyVideoObserver.observe(lazyVideo);
    });
  }
});
