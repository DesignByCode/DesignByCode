// Get the canvas element and its 2D rendering context
const canvas = document.getElementById('tvCanvas') as HTMLCanvasElement;
const ctx = canvas.getContext('2d') as CanvasRenderingContext2D;


function drawNoise() {
    // Generate TV noise effect
    const imageData = ctx.createImageData(canvas.width, canvas.height);
    const data = imageData.data;

    for (let i = 0; i < data.length; i += 4) {
        // Generate random grayscale values for RGB channels
        const noise = Math.floor(Math.random() * 255);

        // Assign random grayscale value to each pixel
        data[i] = noise; // Red channel
        data[i + 1] = noise; // Green channel
        data[i + 2] = noise; // Blue channel
        data[i + 3] = 255; // Alpha channel (fully opaque)
    }

    // Put the generated image data onto the canvas
    ctx.putImageData(imageData, 0, 0);
}

function animate() {
    // Clear the canvas before drawing the noise again
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw the noise effect
    drawNoise();

    // Request the next animation frame
    requestAnimationFrame(animate);
}

// Start the animation loop
animate();
