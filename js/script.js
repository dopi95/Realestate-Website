document
  .querySelectorAll(".view .details .thumb .small-images img")
  .forEach((images) => {
    images.onclick = () => {
      src = images.getAttribute("src");
      document.querySelector(".view .details .thumb .big-image img").src = src;
    };
  });
