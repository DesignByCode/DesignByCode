type Particle = {
    x: number
    y: number
    velocityX: number
    velocityY: number
    size: number
    color: string
};

type ParticleOptions = {
    speed: {
        min: number
        max: number
    }
    size: {
        min: number
        max: number
    }
    count: number

};

export default class Particles {
    private readonly canvas: HTMLCanvasElement;
    private readonly ctx: CanvasRenderingContext2D | null | undefined;
    private particles: Particle[] = [];
    private options: ParticleOptions | undefined;

    constructor(canvasId: string, options?: Partial<ParticleOptions>) {
        this.canvas = document.getElementById(canvasId) as HTMLCanvasElement;
        if (!this.canvas) return;

        this.ctx = this.canvas.getContext("2d");
        if (!this.ctx) return;

        this.canvas.addEventListener("mousemove", this.handleMouseMove);

        const defaultOptions: ParticleOptions = {
            speed: {min: 1, max: 5},
            size: {min: 2, max: 8},
            count: 100,
        };

        this.options = {...defaultOptions, ...options};

        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;

        this.initParticles();
        this.animate();
    }

    private handleMouseMove = (event: MouseEvent) => {
        const mouseX = event.clientX - this.canvas.getBoundingClientRect().left;
        const mouseY = event.clientY - this.canvas.getBoundingClientRect().top;

        this.particles.forEach((particle) => {
            const distanceX = mouseX - particle.x;
            const distanceY = mouseY - particle.y;
            const distance = Math.sqrt(distanceX * distanceX + distanceY * distanceY);

            if (distance > 0 && distance < 50) {
                const forceFactor = 0.01;
                particle.velocityX -= distanceX * forceFactor;
                particle.velocityY -= distanceY * forceFactor;
            }
        });
    };

    private getRandomSpeed(): number {
        return Math.random() * (this.options!.speed.max - this.options!.speed.min) + this.options!.speed.min;
    }

    private getRandomSize(): number {
        return Math.random() * (this.options!.size.max - this.options!.size.min) + this.options!!.size.min;
    }

    private initParticles() {
        for (let i = 0; i < this.options!.count; i++) {
            const particle: Particle = {
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                velocityX: (Math.random() - 0.5) * this.getRandomSpeed(),
                velocityY: (Math.random() - 0.5) * this.getRandomSpeed(),
                size: this.getRandomSize(),
                color: `hsl(${Math.random() * 300}, 100%, 50%)`
            };
            this.particles.push(particle);

        }
    }

    private updateParticles() {
        this.particles.forEach((particle: Particle) => {
            particle.x += particle.velocityX;
            particle.y += particle.velocityY;

            if (particle.x < 0 || particle.x > this.canvas.width) {
                particle.velocityX *= -1;
            }

            if (particle.y < 0 || particle.y > this.canvas.height) {
                particle.velocityY *= -1;
            }
        });
    }

    private connectParticles() {
        this.ctx!.strokeStyle = "rgba(255, 225, 255, 0.2)";
        this.ctx!.lineWidth = 1;

        this.particles.forEach((particleA, indexA) => {
            this.particles.slice(indexA + 1).forEach((particleB) => {
                const distanceX = particleA.x - particleB.x;
                const distanceY = particleA.y - particleB.y;
                const distance = Math.sqrt(distanceX * distanceX + distanceY * distanceY);

                if (distance > 0 && distance < 120) {
                    this.ctx!.beginPath();
                    this.ctx!.moveTo(particleA.x, particleA.y);
                    this.ctx!.lineTo(particleB.x, particleB.y);
                    this.ctx!.stroke();
                }
            });
        });
    }

    private draw() {
        this.particles.forEach((particle) => {
            this.ctx!.fillStyle = particle.color;
            this.ctx!.beginPath();
            this.ctx!.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
            this.ctx!.fill();
        });
    }

    private animate = () => {
        this.ctx!.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.updateParticles();
        this.connectParticles();
        this.draw();

        requestAnimationFrame(this.animate);
    };
}
