<template>
    <div
        class="d-flex justify-content-center align-items-center bg-image vh-100"
        :style="{ backgroundImage: `url('/assets/media/images/image1.webp')` }"
    >
        <div class="d-flex justify-content-center align-items-center w-100 h-100 bg-primary-dark-op">
            <div class="d-flex flex-column justify-content-center col-6">
                <div class="d-flex flex-column justify-content-evenly text-center p-5">
                    <div class="card card-flush">
                        <div class="card-body py-0">

                            <h1 class="fw-bolder fs-2hx text-gray-900 mb-0">
                                Oops!
                            </h1>

                            <div class="fw-semibold fs-6 text-gray-500 mb-0">
                                We can't find that page.
                            </div>

                            <div class="mb-3">
                                <img src="/assets/media/images/404-error.png">
                            </div>

                            <div class="mb-3">
                                <a href="/" class="btn btn-primary">Return Home</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>


