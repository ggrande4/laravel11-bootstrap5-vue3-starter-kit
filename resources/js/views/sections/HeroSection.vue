<template>
    <section class="bg-primary hero-block pb-5 position-relative text-white">
        <slot>
            <div class="container pb-5 pt-5">
                <div class="align-items-center gx-lg-5 gy-4 row">
                    <div class="col-lg-6">
                        <slot name="hero-image">
                            <!-- Default content for hero image -->
                            <div class="poster" style="height: 50vh;"></div>
                        </slot>
                    </div>
                    <div class="col-lg-6">
                        <slot name="hero-title">
                            <!-- Default content for hero title -->
                            <h1 class="display-3 fw-bold mb-3">Welcome to our platform</h1>
                        </slot>
                        <slot name="hero-subtitle">
                            <!-- Default content for hero subtitle -->
                            <h3>Healthy matters, never stop to take care</h3>
                        </slot>
                        <slot name="hero-description">
                            <!-- Default content for hero description -->
                            <p class="lead mb-4 pe-sm-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet.
                            </p>
                        </slot>
                    </div>
                </div>
            </div>
        </slot>
    </section>
</template>
