<script setup>
import { useConfigStore } from "@/stores/config";

import CommonLayout from "@/layouts/CommonLayout.vue";
import LeftMenu from "@/components/LeftMenu.vue";
import axios from 'axios';

const store = useConfigStore();
const logout_route = route('logout');
const account_settings = route('account.settings');

store.setLayout({
  header: true,
  sidebar: true,
  footer: false,
});

function logout() {
    axios.post('/logout')
        .then(() => {
            window.location.href = '/';
        })
        .catch(error => {
            console.error("Logout failed:", error);
        });
}
</script>

<template>
  <CommonLayout>
    <template #sidebar-content>
      <div class="content-side">
        <LeftMenu
          :items="[
            {
              name: 'Users',
              to: 'backend-users',
              icon: 'fa fa-users',
            },
            {
              name: 'Projects',
              to: 'backend-projects',
              icon: 'fa fa-project-diagram',
            },
          ]"
        />
      </div>
    </template>

    <template #header-content-right>
        <div class="d-flex align-items-center">
                <div class="dropdown d-inline-block ms-2">
                    <button
                        type="button"
                        class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                        id="page-header-user-dropdown"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        <img
                            class="rounded-circle"
                            src="/assets/media/avatars/avatar.webp"
                            alt="Header Avatar"
                            style="width: 21px;"
                        />
                        <span class="d-none d-sm-inline-block ms-2">Giacomo</span>
                        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                        <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                            <p class="mt-2 mb-0 fw-medium">Giacomo Grande</p>
                            <p class="mb-0 text-muted fs-sm fw-medium">Full-Stack Developer</p>
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" :href="account_settings">
                                <span class="fs-sm fw-medium">2FA Settings</span>
                            </a>
                        </div>
                        <div role="separator" class="dropdown-divider m-0"></div>
                        <div class="p-2">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" @click.prevent="logout">
                                <span class="fs-sm fw-medium">Log Out</span>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </template>
  </CommonLayout>
</template>
