<script setup>
import { useConfigStore } from "@/stores/config";
import CommonLayout from "@/layouts/CommonLayout.vue";
import {computed, ref} from "vue";

const currentYear = ref(new Date().getFullYear());
const yearStart = computed(() => currentYear.value - 4);

const store = useConfigStore();
const login_route = route('login');
const register_route = route('register');

// Set default elements for this layout
store.setLayout({
  header: true,
  sidebar: false,
  footer: true,
});
</script>
<style lang="scss">
    a.nav-link {
        padding-bottom: 0;
        padding-left: 0 !important;
        padding-right: 0 !important;
        color: $gray-500 !important;
        &.active, &:hover {
            color: #fff !important;
        }
    }
</style>
<template>
    <CommonLayout>
        <template #header>
            <div class="content-header bg-primary">
            <nav class="navbar navbar-dark navbar-expand-lg pb-3 pt-3 mt-auto w-100 shadow-none">
                <div class="container"> <a class="navbar-brand text-white" href="#"> <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" height="2em" width="2em" class="me-2" fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.477 0 0 4.477 0 10v180c0 5.523 4.477 10 10 10h97.926v-25.786c0-1.103.02-2.204.058-3.303a4.496 4.496 0 01-.031-.233l-2.33-20.987v-.001a40.802 40.802 0 00-12.476-25.101l-.001-.001-10.862-10.297H60.265a4.638 4.638 0 110-9.276h12.233l-13.135-12.45a4.638 4.638 0 116.381-6.733l30.594 29c.853-8.61-.18-20.784-7.48-30.853-2.294-3.163-6.572-6.292-12.336-9.198-5.666-2.857-12.31-5.273-18.82-7.23a198.847 198.847 0 00-17.556-4.38c-2.408-.486-4.44-.844-5.948-1.08-1.45-.226-2.167-.297-2.316-.312l-.028-.003c-.002 0-.002 0 0 0-2.345 0-3.585.37-4.175.812-.225.169-1.112.848-.935 4.033.039.696.068 1.468.1 2.314v.021c.348 9.309 1.024 27.385 18.323 48.304 7.283 8.808 16.058 13.391 23.98 15.441 8.067 2.089 14.93 1.474 18.195.308a4.639 4.639 0 013.12 8.736c-5.393 1.926-14.207 2.378-23.64-.063-9.58-2.48-20.131-8.023-28.803-18.51-19.311-23.353-20.08-44.082-20.44-53.755-.031-.847-.06-1.61-.097-2.282-.287-5.163 1.146-9.354 4.631-11.968 3.121-2.34 6.982-2.667 9.74-2.667.834 0 2.277.192 3.776.426 1.66.26 3.827.643 6.348 1.151a208.145 208.145 0 0118.395 4.59c6.802 2.045 14.003 4.643 20.326 7.83 6.224 3.139 12.078 7.083 15.67 12.037 11.438 15.777 10.306 35.034 7.965 44.576a50.09 50.09 0 019.307 18.886 93.709 93.709 0 017.087-15.055c-3.437-7.961-7.105-21.88-.787-35.57 1.982-4.294 5.952-8.144 10.195-11.394 4.355-3.337 9.523-6.432 14.537-9.09 9.914-5.255 19.928-9.162 22.88-9.9 2.768-.692 6.352-.635 9.497 1.707 3.088 2.3 4.838 6.127 5.499 10.978l.053.37.049.338c.815 5.593 3.73 25.592-10.187 45.268-5.042 7.129-11.23 12.871-17.834 16.472-6.588 3.593-13.876 5.19-20.816 3.434a4.637 4.637 0 01-3.358-5.634 4.637 4.637 0 015.634-3.358c4.059 1.027 8.928.234 14.099-2.586 5.157-2.812 10.332-7.506 14.702-13.685 11.748-16.608 9.326-33.4 8.564-38.685l-.001-.004c-.036-.252-.069-.478-.096-.676-.477-3.497-1.509-4.54-1.848-4.792-.28-.209-.765-.383-1.707-.148-1.895.474-11.146 3.988-20.785 9.097-4.763 2.525-9.443 5.348-13.241 8.257-3.91 2.996-6.399 5.72-7.414 7.919-3.518 7.624-2.956 15.628-1.197 22.08a93.244 93.244 0 013.653-4.487l9.501-10.959a4.637 4.637 0 117.009 6.076l-9.501 10.958v.001a84.416 84.416 0 00-20.625 55.286V200H190c5.523 0 10-4.477 10-10V10c0-5.523-4.477-10-10-10H10z"></path>
                </svg><span class="align-middle fw-bold h4 ms-1">Logo</span></a>
                    <button class="navbar-toggler rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-2" aria-controls="navbarNavDropdown-2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown-2">
                        <ul class="ms-auto navbar-nav text-end text-lg-start">
                            <li class="nav-item px-3">
                                <a class="nav-link text-white active" href="#">Home</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link text-white" href="#">About</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link text-white" href="#">Services</a>
                            </li>
                            <li class="nav-item px-3 me-lg-5">
                                <a class="nav-link text-white" href="#">Contact</a>
                            </li>
                            <li class="nav-item"> <a class="btn btn-tertiary me-lg-3 px-4 py-2 mt-3 mt-lg-0" :href="login_route">Login</a></li>
                            <li class="nav-item"> <a class="btn btn-tertiary ms-lg-3 px-4 py-2 mt-3 mt-lg-0" :href="register_route">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            </div>
        </template>
        <template #footer>
            <footer class="bg-dark pt-5 text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 py-3">
                            <a class="align-items-center d-inline-flex fw-bold h3 lh-1 link-warning mb-4 text-decoration-none text-uppercase" href="#"> <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="2.5em" xml:space="preserve" viewBox="0 0 48 48" height="2.5em" class="me-1" stroke="currentColor" fill="none" stroke-width="3px">
                                    <path d="M33 24a14.46 14.46 0 00-2.69-7.91 14.66 14.66 0 00-1-1.24c-.18-.2-.36-.4-.56-.59s-.39-.38-.59-.56A14.53 14.53 0 005.41 30.9a5.38 5.38 0 01.39.75 8.43 8.43 0 01.71 4.79 8.43 8.43 0 014.79.71 5.38 5.38 0 01.75.39 14.57 14.57 0 0011.66.47"/>
                                <path d="M30.93 10.62s0 1.46-2.18 3.64M44 24a15 15 0 01-30 0zm-15 4v11m-3-12l-7 7m20 0l-7-7"/>
                                <path d="M-423-219h690v690h-690z"/>
                                </svg><span>Nature&apos;s<br>Delight</span></a>
                            <p class="mb-0">                                Duis pharetra venenatis felis, ut tincidunt ipsum consequat nec. Fusce et porttitor libero, eu aliquam nisi. Nam finibus ullamcorper semper.</p>
                        </div>
                        <div class="col-md offset-xl-1 py-3">
                            <h2 class="fw-bold h5 mb-4 text-warning">General</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="#" class="link-light">FAQ</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="link-light">About Us</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="link-light">Testimonials</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md py-3">
                            <h2 class="fw-bold h5 mb-4 text-warning">Links</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="#" class="link-light">Food Plan</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="link-light">Fruit Products</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="link-light">Drink Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-auto py-3">
                            <h2 class="fw-bold h5 mb-4 text-warning">Get In Touch</h2>
                            <div class="mb-3">
                                <a href="#" class="link-light">+1 234 567-890</a>
                                <br>
                                <a href="#" class="link-light">hello@company.com</a>
                            </div>
                            <div class="d-inline-flex flex-wrap ">
                                <a href="#" aria-label="facebook" class="btn btn-outline-light lh-1 mx-1 p-2 rounded-circle"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/>
                                </svg> </a>
                                <a href="#" aria-label="twitter" class="btn btn-outline-light lh-1 mx-1 p-2 rounded-circle"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                                    <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/>
                                </svg> </a>
                                <a href="#" aria-label="instagram" class="btn btn-outline-light lh-1 mx-1 p-2 rounded-circle"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>
                                </svg> </a>
                                <a href="#" aria-label="linkedin" class="btn btn-outline-light lh-1 mx-1 p-2 rounded-circle"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                                    <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/>
                                </svg> </a>
                                <a href="#" aria-label="youtube" class="btn btn-outline-light lh-1 mx-1 p-2 rounded-circle"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                                    <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/>
                                </svg> </a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3 pt-3">
                        <hr class="border-light mt-0">
                        <div class="align-items-center row">
                            <div class="col-md pb-2 pt-2">
                                <p class="mb-0">&copy; {{ yearStart }} - {{ currentYear }}. All Rights Reserved - Company Name</p>
                            </div>
                            <div class="col-md-auto pb-2 pt-2">
                                <a href="#" class="link-light">Privacy Policy</a> |
                                <a href="#" class="link-light">Terms of Use</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </template>
    </CommonLayout>
</template>
