<template>
    <div>
        <HeroSection>
            <template #hero-title>
                <h1 class="display-3 fw-bold mb-3">Welcome to our healthy platform</h1>
            </template>
            <!-- Other slots can be customized similarly -->
        </HeroSection>

        <section class="bg-white pb-5 pt-5 text-white-50">
            <div class="container">
                <div class="row align-items-center mb-3" >
                    <div class="col-lg-8 ms-auto me-auto text-center">
                        <h2 class="fw-bold h1 text-dark">Our Products</h2>
                        <div class="bg-primary col-1 mb-3 me-auto ms-auto mt-3 pb-1"></div>
                        <p class="text-dark-emphasis">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nullam vitae congue tortor.
                        </p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center row-cols-lg-3 row-cols-sm-2 row-cols-xl-4">
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/orange.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Tangerine Orange</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/apple.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Fuji Apple</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/pineapple.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Queen Pineapple</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/pomegranate.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Red Silk Pomegranate</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/avocado.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Hass Avocado</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/banana.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Cavendish Banana</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/strawberry.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Albion Strawberry</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white overflow-hidden p-2 rounded text-muted border border-warning border-2">
                            <a href="#" class="d-block"><img src="/assets/media/images/melon.jpg" class="img-fluid w-100" alt="..." width="500" height="400"></a>
                            <div class="p-3">
                                <a href="#" class="link-dark text-decoration-none"><h3 class="fw-bold h5 mb-3">Klondike Melon</h3></a>
                                <div class="align-items-center gy-2 row">
                                    <div class="col-sm">
                                        <p class="h6 mb-0">$2.5/kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary pb-5 pt-5 text-white">
            <div class="container pb-5 pt-5">
                <div class="mb-4 text-center">
                    <slot name="testimonials-title">
                        <!-- Default content for testimonials title -->
                        <h2 class="h6 mb-1 text-warning-4">Testimonials</h2>
                        <h3 class="fw-bold h2 text-capitalize">Words From Our Customers</h3>
                    </slot>
                </div>
                <div class="row">
                    <div class="col-lg-8 ms-auto me-auto">
                        <slot name="testimonials-carousel">
                            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="align-items-center row">
                                            <div class="col-lg-4 pb-3 pt-3 text-center">
                                                <img src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=360&h=360&fit=crop" class="img-fluid rounded-circle" alt="..." width="240" height="240">
                                            </div>
                                            <div class="col-lg-8 pb-3 pt-3">
                                                <svg viewBox="0 0 24 24" fill="currentColor" height="64" width="64" class="mb-3 text-info">
                                                    <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"/>
                                                </svg>
                                                <p class="mb-4">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                                                <h4 class="fw-bold mb-1 text-warning-4">Kathryn Murphy</h4>
                                                <h5 class="fw-bold h6 testimonial_pos text-white-50">Chief Technology Officer</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="align-items-center row">
                                            <div class="col-lg-4 pb-3 pt-3 text-center">
                                                <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDd8fGNhdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=360&h=360&fit=crop" class="img-fluid rounded-circle" alt="..." width="240" height="240">
                                            </div>
                                            <div class="col-lg-8 pb-3 pt-3">
                                                <svg viewBox="0 0 24 24" fill="currentColor" height="64" width="64" class="mb-3 text-info">
                                                    <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"/>
                                                </svg>
                                                <p class="mb-4">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                                                <h4 class="fw-bold mb-1 text-warning-4">Dianne Russell</h4>
                                                <h5 class="fw-bold h6 text-white-50">Founder</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="align-items-center row">
                                            <div class="col-lg-4 pb-3 pt-3 text-center">
                                                <img src="https://images.unsplash.com/photo-1517101724602-c257fe568157?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDZ8fHBhcnJvdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=360&h=360&fit=crop" class="img-fluid rounded-circle" alt="..." width="240" height="240">
                                            </div>
                                            <div class="col-lg-8 pb-3 pt-3">
                                                <svg viewBox="0 0 24 24" fill="currentColor" height="64" width="64" class="mb-3 text-info">
                                                    <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"/>
                                                </svg>
                                                <p class="mb-4">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                                                <h4 class="fw-bold mb-1 text-warning-4">Darrell Steward</h4>
                                                <h5 class="fw-bold h6 text-white-50">Administrative Manager</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-indicators position-relative">
                                    <button
                                        type="button"
                                        data-bs-target="#carousel"
                                        data-bs-slide-to="0"
                                        class="active"
                                        aria-current="true"
                                        aria-label="Slide 1"
                                    ></button>
                                    <button
                                        type="button"
                                        data-bs-target="#carousel"
                                        data-bs-slide-to="1"
                                        aria-label="Slide 2"
                                    ></button>
                                    <button
                                        type="button"
                                        data-bs-target="#carousel"
                                        data-bs-slide-to="2"
                                        aria-label="Slide 3"
                                    ></button>
                                </div>
                            </div>
                        </slot>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
    import { onMounted } from "vue";
    import HeroSection from '@/views/sections/HeroSection.vue';
    onMounted(() => {
        const slideButton = document.querySelector(
            'button[data-bs-target="#carousel"][data-bs-slide-to="0"]'
        );

        if (slideButton) {
            slideButton.click();
        }
    });
</script>
<style scoped>
    .text-warning-4 {
         color: #f1773d !important;
     }
    a.text-warning-4:hover, a.text-warning-4:focus {
        color: #ea5711 !important;
    }
    .bg-white {
        background-color: #fff !important;
    }
    a.bg-white:hover, a.bg-white:focus,
    button.bg-white:hover,
    button.bg-white:focus {
        background-color: #e6e6e6 !important;
    }
</style>
