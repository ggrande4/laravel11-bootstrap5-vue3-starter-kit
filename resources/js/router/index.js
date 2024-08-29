import { createRouter, createWebHistory } from "vue-router";
import { useAuthStore } from '@/stores/auth';
import Swal from 'sweetalert2';

// Main layouts
import BackendLayout from "@/layouts/templates/Backend.vue";
import LandingLayout from "@/layouts/templates/Landing.vue";

const Landing = () => import("@/views/landing/Landing.vue");

const Projects = () => import("@/views/backend/ProjectsView.vue");
const Users = () => import("@/views/backend/UsersView.vue");

const NotFound = () => import("@/views/errors/NotFound.vue");

// Set all routes
const routes = [
  {
    path: "/",
    component: LandingLayout,
    children: [
      {
        path: "",
        name: "landing",
        component: Landing,
      },
    ],
  },
  {
    path: "/backend",
    redirect: "/backend/users",
    component: BackendLayout,
    meta: { requiresAuth: true },
    children: [
      {
        path: "users",
        name: "backend-users",
        component: Users,
      },
      {
        path: "projects",
        name: "backend-projects",
        component: Projects,
      }
    ],
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: NotFound,
  },
];

// Create the Router
const router = createRouter({
  history: createWebHistory(),
  linkActiveClass: "active",
  linkExactActiveClass: "active",
  scrollBehavior() {
    return { left: 0, top: 0 };
  },
  routes,
});

router.beforeEach(async (to, from, next) => {
  const authStore = useAuthStore();

  await authStore.checkAuth();

  if (to.matched.some(record => record.meta.requiresAuth)) {
    if (!authStore.isAuthenticated) {
      window.location.href = '/login';
    } else {
      next();
    }
  } else {
    if (authStore.isAuthenticated && to.name !== 'NotFound') {
      //you should never be here
      Swal.fire({
        title: 'Access Denied!',
        text: 'You are logged in and trying to access a public page. Please log out first.',
        icon: 'warning',
        confirmButtonText: 'Ok'
      });

      next(false); // stay on the same page
    } else {
      next();
    }
  }
});

export default router;
