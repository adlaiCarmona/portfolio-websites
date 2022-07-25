const load = (src) => {
    return new Promise((resolve, reject) => {
        const image = new Image();
        image.addEventListener("load", resolve);
        image.addEventListener("error", reject);
        image.src = src;
    });
};

const image = "/resources/landingImageOptimized.jpg";
load(image).then(() => {
    const header = document.getElementById("home");
    header.style.backgroundImage = `url(${image})`;
    console.log(`Image loaded ${performance.now()}`);
    
    const loader = document.getElementById("loader");
    loader.style.display = "none";
});

// window.addEventListener("load", (event) => {
//     const loader = document.getElementById("loader");
//     loader.style.display = "none";
//     console.log(`Page loaded ${performance.now()}`);
// });
