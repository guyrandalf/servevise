<style>
    .carousel-content {
        transition: opacity 0.5s ease-in-out;
    }

    /* Hide initially */
    .carousel-content:not(:first-child) {
        opacity: 0;
        pointer-events: none;
    }
</style>
<div>
    <div class="bg-primary">
        <div class="mx-auto h-[500px] flex justify-between items-center p-20">
            <div class="flex flex-1 flex-col justify-center items-start gap-5 p-10 text-white font-bold">
                <h1 class="text-[4rem] text-secondary leading-none">Service needs meet expertise</h1>
                <p class="text-[1.5rem] leading-none">Shun searching hassle.<br>Find
                    reliable professionals here and now.
                </p>
                <a href="/register" wire:navigate
                    class="bg-btn-primary hover:opacity-95 text-white rounded-md py-3 px-6 transition duration-300 delay-150 hover:delay-300">
                    Get Started</a>
            </div>
            <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-3/3 justify-center">
                <div class="h-48 flex flex-wrap content-center">
                    <div>
                        <img class="inline-block mt-24 md:mt-0 p-8 md:p-0"
                            src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png" />
                    </div>
                    <div>
                        <img class="inline-block mt-28 hidden lg:block"
                            src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto p-20 mt-10 text-white">
        <h1 class="text-center border-l-2 border-secondary text-secondary font-medium text-[3rem] mb-2">About
            Servevise
        </h1>
        <p class="text-center mb-[7.5rem] text-[1.3rem]">We envision a world where
            expertise is easily accessible.</p>
        <div class="container grid grid-cols-2">
            <div
                class="flex flex-col text-[1.1rem] bg-primary p-10 justify-center rounded-3xl shadow-zinc-900 shadow-sm">
                <div class="flex flex-col gap-4 justify-between carousel-content" id="div1">
                    <h1 class="text-[1.7rem] font-medium text-secondary">Our Keen Idea
                    </h1>
                    <p class="text-start">At Servevise, our keen idea is simple yet profound: to seamlessly connect
                        individuals seeking
                        specialized services with skilled professionals, all within a trusted community.
                    </p>
                    <p class="text-start">Our mission is
                        to
                        revolutionize the way people access expertise, fostering meaningful connections and empowering
                        professionals to showcase their talents. We value transparency, reliability, and
                        collaboration,
                        committed to providing a platform where excellence and service converge</p>
                </div>
                <div class="flex flex-col gap-4 mb-4 justify-between carousel-content" id="div2"
                    style="display: none">
                    <h1 class="text-[1.7rem] font-medium text-secondary">Our Mission</h1>
                    <p class="text-start">Our mission at Servevise is to simplify the search for specialized services.
                        We strive to provide
                        a
                        user-friendly platform that not only connects people with professionals but also facilitates a
                        seamless journey towards their goals.
                    </p>
                    <p class="text-start">By fostering a community of trust and innovation, we aim
                        to
                        revolutionize the way services are accessed, making a positive impact on lives and businesses.
                    </p>
                </div>
                <div class="flex flex-col gap-4 mb-4 justify-between carousel-content" id="div3"
                    style="display: none">
                    <h1 class="text-[1.7rem] font-medium text-secondary">Our Why</h1>
                    <p class="text-start">We believe in a world where accessing exceptional services is effortless.
                        Our
                        aim is to bridge
                        the
                        gap between talent and those in need, simplifying the journey to find the right expertise.
                    </p>
                    <p>At Servevise, we are driven by the belief that every individual deserves access to skilled
                        professionals who can transform their ideas into reality. We strive to create a platform where
                        possibilities are endless and connections are meaningful.</p>
                </div>
                <button onclick="showNext()"
                    class="flex flex-end justify-end hover:opacity-95 p-[.15rem] pr-2 ml-80 rounded-sm bg-secondary cursor-pointer">next</button>
            </div>
            <div class="flex items-center justify-center">
                <div>
                    <img class="inline-block mt-24 md:mt-0 p-8 md:p-0"
                        src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let currentDiv = 1;
    const totalDivs = 3;

    function showNext() {
        const currentElement = document.getElementById(`div${currentDiv}`);
        currentElement.style.opacity = '0'; // Fade out the current slide
        currentElement.style.pointerEvents = 'none'; // Disable interactions during transition

        currentDiv = (currentDiv % totalDivs) + 1;

        const nextElement = document.getElementById(`div${currentDiv}`);
        nextElement.style.opacity = '1'; // Fade in the next slide
        nextElement.style.pointerEvents = 'auto'; // Enable interactions

        // Wait for the transition to complete before hiding the previous slide
        setTimeout(() => {
            currentElement.style.display = 'none';
            nextElement.style.display = 'flex';
        }, 500); // Match this duration with the transition duration in CSS
    }
</script>
