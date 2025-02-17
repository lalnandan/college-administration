document.addEventListener("DOMContentLoaded", loadTestimonials);

document.getElementById("testimonialForm").addEventListener("submit", function (event) {
    event.preventDefault();
    addTestimonial();
});

function addTestimonial() {
    let formData = new FormData(document.getElementById("testimonialForm"));

    fetch("savetestimonial.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            document.getElementById("testimonialForm").reset();
            loadTestimonials();
        } else {
            alert("Error saving testimonial.");
        }
    })
    .catch(error => console.error("Error:", error));
}

function loadTestimonials() {
    fetch("get_testimonial.php")
    .then(response => response.json())
    .then(testimonials => {
        let videoContainer = document.getElementById("videoTestimonials");
        let textContainer = document.getElementById("textTestimonials");

        videoContainer.innerHTML = "";
        textContainer.innerHTML = "";

        testimonials.forEach(testimonial => {
            if (testimonial.video) {
                let videoElement = document.createElement("div");
                videoElement.classList.add("testimonial-card");
                videoElement.innerHTML = `
                    <video controls>
                        <source src="${testimonial.video}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>${testimonial.name}</h3>
                    <p>${testimonial.message}</p>
                `;
                videoContainer.appendChild(videoElement);
            } else {
                let textElement = document.createElement("div");
                textElement.classList.add("testimonial-card");
                textElement.innerHTML = `
                    <h3>${testimonial.name}</h3>
                    <p>${testimonial.message}</p>
                `;
                textContainer.appendChild(textElement);
            }
        });
    })
    .catch(error => console.error("Error:", error));
}
